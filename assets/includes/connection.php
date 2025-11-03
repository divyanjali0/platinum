<?php
    include_once __DIR__ . '/db_connect.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        die('Invalid request.');
    }

    $vehicle_id       = intval($_POST['car_id'] ?? 0);
    $pickup_location  = trim($_POST['pickup_location'] ?? '');
    $dropoff_location = trim($_POST['dropoff_location'] ?? '');
    $pickup_date      = $_POST['pickup_date'] ?? '';
    $dropoff_date     = $_POST['dropoff_date'] ?? '';
    $pickup_time      = $_POST['pickup_time'] ?? '';
    $dropoff_time     = $_POST['dropoff_time'] ?? '';
    $mileage          = $_POST['mileage'] ?? '';
    $name             = trim($_POST['passenger_name'] ?? '');
    $email            = trim($_POST['passenger_email'] ?? '');
    $phone            = trim($_POST['passenger_phone'] ?? '');
    $flight           = trim($_POST['flight_number'] ?? '');
    $passengers       = intval($_POST['num_passengers'] ?? 1);
    $need_driver      = $_POST['need_driver'] ?? 'no';
    $need_license     = $_POST['need_license'] ?? 'no';
    $other_info       = trim($_POST['other_info'] ?? '');
    $total_price      = floatval($_POST['total_price'] ?? 0);
    $addons = $_POST['addons'] ?? [];
    $addon_qty = $_POST['addon_qty'] ?? [];

    $addons_data = [];
    if (!empty($addons)) {
        foreach ($addons as $addon_id) {
            $addons_data[$addon_id] = intval($addon_qty[$addon_id] ?? 1);
        }
    }

    $addons_json = json_encode($addons_data);

    $pickup  = strtotime($pickup_date);
    $dropoff = strtotime($dropoff_date);
    $trip_days = ($pickup && $dropoff && $dropoff >= $pickup)
        ? ceil(($dropoff - $pickup) / (60 * 60 * 24))
        : 1;

    $upload_dir = __DIR__ . '/../../uploads/licenses/'; 
    $web_path = 'assets/uploads/licenses/';

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    function save_uploaded_file($input_name, $upload_dir, $web_path) {
        if (isset($_FILES[$input_name]) && $_FILES[$input_name]['error'] === UPLOAD_ERR_OK) {
            $ext = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
            $new_name = uniqid('license_', true) . '.' . $ext;
            $destination = $upload_dir . $new_name;

            if (move_uploaded_file($_FILES[$input_name]['tmp_name'], $destination)) {
                $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' 
                            || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                $domain = $_SERVER['HTTP_HOST']; 
                $full_url = $protocol . $domain . '/' . $web_path . $new_name;

                return $full_url;
            }
        }
        return null;
    }

    $passport_path = save_uploaded_file('passport_image', $upload_dir, $web_path);
    $idp_path = save_uploaded_file('idp_image', $upload_dir, $web_path);
    $passport2_path = save_uploaded_file('passport_image2', $upload_dir, $web_path);

    // Save booking
    try {
        $stmt = $conn->prepare("
            INSERT INTO bookings 
            (vehicle_id, pickup_location, dropoff_location, pickup_date, dropoff_date, 
            pickup_time, dropoff_time, trip_days, mileage,
            passenger_name, passenger_email, passenger_phone, flight_number, passengers, 
            need_driver, need_license, passport_image, passport_image2, idp_image, total_price,
            addons, addon_quantities, created_at)
            VALUES 
            (:vehicle_id, :pickup_location, :dropoff_location, :pickup_date, :dropoff_date, 
            :pickup_time, :dropoff_time, :trip_days, :mileage,
            :passenger_name, :passenger_email, :passenger_phone, :flight_number, :passengers, 
            :need_driver, :need_license, :passport_image, :passport_image2, :idp_image, :total_price,
            :addons, :addon_quantities, NOW())
        ");

        $stmt->execute([
            ':vehicle_id'      => $vehicle_id,
            ':pickup_location' => $pickup_location,
            ':dropoff_location'=> $dropoff_location,
            ':pickup_date'     => $pickup_date,
            ':dropoff_date'    => $dropoff_date,
            ':pickup_time'     => $pickup_time,
            ':dropoff_time'    => $dropoff_time,
            ':trip_days'       => $trip_days,
            ':mileage'         => $mileage,
            ':passenger_name'  => $name,
            ':passenger_email' => $email,
            ':passenger_phone' => $phone,
            ':flight_number'   => $flight,
            ':passengers'      => $passengers,
            ':need_driver'     => $need_driver,
            ':need_license'    => $need_license,
            ':passport_image'  => $passport_path,    
            ':passport_image2' => $passport2_path,  
            ':idp_image'       => $idp_path,        
            ':total_price'     => $total_price,
            ':addons'          => json_encode(array_keys($addons_data)), 
            ':addon_quantities'=> $addons_json 
        ]);

        $last_id = $conn->lastInsertId();

        $today = date('Ymd'); 
        $booking_number = 'PD-' . $today . '-' . str_pad($last_id, 3, '0', STR_PAD_LEFT);
        
        $update = $conn->prepare("UPDATE bookings SET booking_number = :booking_number WHERE id = :id");
        $update->execute([
            ':booking_number' => $booking_number,
            ':id'             => $last_id
        ]);

        echo "<h3 style='color:green;'>✅ Booking Successful!</h3>";
        echo "<p>Thank you, <strong>{$name}</strong>. Your booking number is <strong>{$booking_number}</strong>.</p>";
        echo "<a href='../../../index.php'>← Return Home</a>";

    } catch (PDOException $e) {
        echo "<h3 style='color:red;'>❌ Database Error:</h3>";
        echo "<pre>" . htmlspecialchars($e->getMessage()) . "</pre>";
    }

?>
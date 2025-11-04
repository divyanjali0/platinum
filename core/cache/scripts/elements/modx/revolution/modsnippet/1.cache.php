<?php  return 'include_once MODX_BASE_PATH . \'assets/includes/db_connect.php\';

$output = \'\';

try {
    // Join vehicles with vehicle_rates to get rate_per_day
    $stmt = $conn->query("
        SELECT v.*, vr.rate_per_day 
        FROM vehicles v
        LEFT JOIN vehicle_rates vr ON v.id = vr.vehicle_id
    ");

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row[\'id\'];
        $name = htmlspecialchars($row[\'name\']);
        $price = number_format($row[\'rate_per_day\'], 2); 
        $description = htmlspecialchars($row[\'description\']);
        $image = $row[\'image\'];
        $seats = (int)$row[\'no_of_seats\'];
        $luggage = (int)$row[\'luggages\'];

        $detailsLink = "[[~14? &car_id=`$id`]]"; 

        $output .= "
        <div class=\'col-md-4\'>
            <div class=\'car-wrap rounded ftco-animate\'>
                <div class=\'img rounded d-flex align-items-end\' style=\'background-image: url($image);\'></div>
                <div class=\'text\'>
                    <div class=\'d-flex justify-content-between align-items-center mb-1\'>
                        <h2 class=\'mb-0\' style=\'color: #102c4e !important; font-size: 1.25rem;\'>$name</h2>
                        <small style=\'font-size: 16px; color: #d09c00;\'>
                            <i class=\'fa fa-users\'></i> $seats&nbsp; |
                            <i class=\'fa fa-suitcase ml-2\'></i> $luggage
                        </small>
                    </div>
                    <div class=\'d-flex mb-3\'>
                        <span class=\'cat\'>$description</span>
                        <p class=\'price ml-auto\'>\\$ $price <span>/day</span></p>
                    </div>
                    <p class=\'d-flex mb-0 d-block justify-content-center\'>
                        <a href=\'$detailsLink\' class=\'btn btn-primary py-2 mr-1\'>Book now</a>
                    </p>
                </div>
            </div>
        </div>";
    }

} catch (PDOException $e) {
    $output = "? Query failed: " . $e->getMessage();
}

return $output;
return;
';
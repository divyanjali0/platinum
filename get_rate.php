<?php
header('Content-Type: application/json');
require_once "assets/includes/db_connect.php";

$car_category = $_GET['car_category'] ?? '';
$pickup_date = $_GET['pickup_date'] ?? '';
$dropoff_date = $_GET['dropoff_date'] ?? '';

if (!$car_category || !$pickup_date || !$dropoff_date) {
    echo json_encode(["error" => "Missing parameters"]);
    exit;
}

try {
    $start = new DateTime($pickup_date);
    $end = new DateTime($dropoff_date);
    $requested_days = $start->diff($end)->days;
    if ($requested_days < 1) $requested_days = 1;

    // Fetch all rates for this car category and date range
    $stmt = $conn->prepare("
        SELECT duration, rate
        FROM rental_rates
        WHERE car_category = ?
        AND pickup_date <= ?
        AND dropoff_date >= ?
        ORDER BY duration ASC
    ");
    $stmt->execute([$car_category, $pickup_date, $dropoff_date]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$rows) {
        echo json_encode(["error" => "No rates found for this car category in the selected dates"]);
        exit;
    }

    $rates_per_day = [];
    $last_rate = 0;

    foreach ($rows as $row) {
        $last_rate = floatval($row['rate']);
        $rates_per_day[intval($row['duration'])] = $last_rate;
    }

    $per_day = [];
    $total_price = 0;
    $currentDate = clone $start;

    for ($day = 1; $day <= $requested_days; $day++) {
        $rate = $rates_per_day[$day] ?? $last_rate;
        $per_day[] = [
            'day' => $day,
            'date' => $currentDate->format('Y-m-d'),
            'rate' => $rate
        ];
        $total_price += $rate;
        $currentDate->modify('+1 day');
    }

    echo json_encode([
        "car_category" => $car_category,
        "pickup_date" => $pickup_date,
        "dropoff_date" => $dropoff_date,
        "requested_days" => $requested_days,
        "rates_per_day" => $per_day,
        "total_price" => $total_price
    ]);

} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}

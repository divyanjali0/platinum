<?php
include_once 'db_connect.php';

$car_category = $_GET['car_category'] ?? '';
$days = intval($_GET['days'] ?? 1);

if (!$car_category || $days < 1) {
    echo json_encode(['error' => 'Invalid input']);
    exit;
}

try {
    $stmt = $conn->prepare("
        SELECT price 
        FROM rental_rates 
        WHERE car_category = ?
        AND duration = ?
        LIMIT 1
    ");
    $stmt->execute([$car_category, $days]);
    $rate = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($rate) {
        echo json_encode([
            'price_per_day' => floatval($rate['price'])
        ]);
    } else {
        // fallback to highest duration lower than selected
        $stmt = $conn->prepare("
            SELECT price 
            FROM rental_rates 
            WHERE car_category = ?
            ORDER BY duration DESC
            LIMIT 1
        ");
        $stmt->execute([$car_category]);
        $fallback = $stmt->fetch(PDO::FETCH_ASSOC);

        echo json_encode([
            'price_per_day' => floatval($fallback['price'])
        ]);
    }
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

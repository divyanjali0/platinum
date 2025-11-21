<?php
include_once __DIR__ . '/assets/includes/db_connect.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$stmt = $conn->prepare("
    SELECT v.*, vr.rate_per_day 
    FROM vehicles v
    LEFT JOIN vehicle_rates vr ON v.id = vr.vehicle_id
    WHERE v.id != :id
    ORDER BY RAND()
    LIMIT 3
");
$stmt->execute([':id' => $id]);

$output = '';
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $vehicleId = $row['id'];
    $name = htmlspecialchars($row['name']);
    $image = $row['image'];
    $seats = (int)$row['no_of_seats'];
    $luggage = (int)$row['luggages'];
    $price = number_format($row['rate_per_day'], 2);

    // Direct working link
    $detailsLink = "index.php?id=14&car_id=" . $vehicleId;

    $output .= "
    <div class='col-md-4 col-12 mb-3'>
        <div class='card h-100 text-center shadow-sm'>
            <img src='$image' class='card-img-top img-fluid' alt='$name' style='height:180px; object-fit:cover;'>
            <div class='card-body p-2 d-flex flex-column justify-content-between'>
                <div>
                    <h6 class='card-title'>$name</h6>
                    <p class='mb-1'>
                        <i class='fa fa-users'></i> $seats &nbsp; | &nbsp;
                        <i class='fa fa-suitcase'></i> $luggage
                    </p>
                    <p class='text-muted mb-2'>\$ $price / day</p>
                </div>
                <a href='$detailsLink' class='btn btn-primary btn-sm w-100 mt-auto'>Book Now</a>
            </div>
        </div>
    </div>";
}

echo $output ?: "<p class='text-center text-muted'>No related vehicles found.</p>";

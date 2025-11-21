<?php  return 'include_once MODX_BASE_PATH . \'assets/includes/db_connect.php\';

$output = \'\';

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("
        SELECT 
            cc.id,
            rr.car_category AS car_category,
            cc.description,
            cc.passengers,
            cc.suitcases,
            cc.image,
            cc.avg_price
        FROM car_categories cc
        LEFT JOIN rental_rates rr 
            ON rr.car_category = cc.name
        GROUP BY cc.id
        ORDER BY cc.id
    ");

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row[\'id\'];

        // Name from rental_rates, fallback to car_categories if empty
        $name = ucfirst(htmlspecialchars($row[\'car_category\']));
        
        $categoryParam = rawurlencode($row[\'car_category\']);

        $price = number_format($row[\'avg_price\'], 2);
        $description = htmlspecialchars($row[\'description\']);
        $image = $row[\'image\'];
        $seats = (int)$row[\'passengers\'];
        $luggage = (int)$row[\'suitcases\'];

        // PASS car_category INSTEAD OF car_id
        $detailsLink = "[[~14? &car_category=`$categoryParam`]]";

        $output .= "
        <div class=\'col-md-4 mb-4\'>
            <div class=\'car-wrap rounded ftco-animate\'>
                <div class=\'img rounded d-flex align-items-end\' style=\'background-image: url($image); height: 220px; background-size: cover; background-position: center;\'></div>
                <div class=\'text p-3\'>
                    <div class=\'d-flex justify-content-between align-items-center mb-1\'>
                        <h2 class=\'mb-0\' style=\'color: #102c4e !important; font-size: 1.25rem;\'>$name</h2>
                        <small style=\'font-size: 16px; color: #d09c00;\'>
                            <i class=\'fa fa-users\'></i> $seats |
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
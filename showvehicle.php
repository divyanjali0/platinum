include_once MODX_BASE_PATH . 'assets/includes/db_connect.php';

$output = '';

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("
        SELECT id, name, description, passengers, suitcases, image, avg_price
        FROM car_categories
        ORDER BY id
    ");

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $name = htmlspecialchars($row['name']);
        $price = number_format($row['avg_price'], 2);
        $description = htmlspecialchars($row['description']);
        $image = $row['image'];
        $seats = (int)$row['passengers'];
        $luggage = (int)$row['suitcases'];
        $detailsLink = "[[~14? &car_id=`$id`]]";

        $output .= "
        <div class='col-md-4 mb-4'>
            <div class='car-wrap rounded ftco-animate'>
                <div class='img rounded d-flex align-items-end' style='background-image: url($image); height: 220px; background-size: cover; background-position: center;'></div>
                <div class='text p-3'>
                    <div class='d-flex justify-content-between align-items-center mb-1'>
                        <h2 class='mb-0' style='color: #102c4e !important; font-size: 1.25rem;'>$name</h2>
                        <small style='font-size: 16px; color: #d09c00;'>
                            <i class='fa fa-users'></i> $seats |
                            <i class='fa fa-suitcase ml-2'></i> $luggage
                        </small>
                    </div>
                    <div class='d-flex mb-3'>
                        <span class='cat'>$description</span>
                        <p class='price ml-auto'>\$ $price <span>/day</span></p>
                    </div>
                    <p class='d-flex mb-0 d-block justify-content-center'>
                        <a href='$detailsLink' class='btn btn-primary py-2 mr-1'>Book now</a>
                        <button class='btn btn-secondary py-2 view-vehicles-btn' data-id='$id'>View Vehicles</button>
                    </p>
                </div>
            </div>
        </div>";
    }

    // Add Bootstrap modal container at the end
    $output .= "
    <!-- Vehicle Modal -->
    <div class='modal fade' id='vehicleModal' tabindex='-1' role='dialog' aria-labelledby='vehicleModalLabel' aria-hidden='true'>
      <div class='modal-dialog modal-lg modal-dialog-centered' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='vehicleModalLabel'>Related Vehicles</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>
          <div class='modal-body'>
            <div id='vehicleModalContent' class='row'>
              <!-- Vehicles will load here dynamically -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.view-vehicles-btn');
        buttons.forEach(btn => {
            btn.addEventListener('click', function() {
                const vehicleId = this.getAttribute('data-id');

                // Fetch related vehicles via AJAX (you can replace this with your logic)
                fetch('get_related_vehicles.php?id=' + vehicleId)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('vehicleModalContent').innerHTML = html;
                    $('#vehicleModal').modal('show');
                })
                .catch(err => {
                    document.getElementById('vehicleModalContent').innerHTML = '<p class=\"text-danger\">Failed to load vehicles.</p>';
                    $('#vehicleModal').modal('show');
                });
            });
        });
    });
    </script>
    ";

} catch (PDOException $e) {
    $output = "? Query failed: " . $e->getMessage();
}

return $output;

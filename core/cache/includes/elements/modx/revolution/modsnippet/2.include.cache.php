<?php
// Include DB connection
include_once MODX_BASE_PATH . 'assets/includes/db_connect.php';

// Get car ID from URL
$car_id = isset($_GET['car_id']) ? intval($_GET['car_id']) : 0;

// Default values
$seats = 4;
$luggages = 2;
$car_name = "Mini Cars";
$car_description = "Suzuki WagonR or Similar";
$car_image = "assets/images/fleet/3.jpg"; 

try {
    $stmt = $conn->prepare("SELECT name, description, image, no_of_seats, luggages FROM vehicles WHERE id = ?");
    $stmt->execute([$car_id]);
    $car = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($car) {
        $seats = $car['no_of_seats'];
        $luggages = $car['luggages'];
        $car_name = $car['name'];
        $car_description = $car['description'];
        $car_image = $car['image'];
    }
} catch (PDOException $e) {
    return "<p>?? Error loading car details: " . htmlspecialchars($e->getMessage()) . "</p>";
}

// Fetch add-ons from DB
$addons_html = '<div class="row" id="addons_section" style="margin-top:15px; display:none;"><div class="col-12"><h6 style="font-weight:600;">Available Add-ons</h6><div class="form-row">';
try {
    $stmt = $conn->prepare("SELECT id, name, price_per_day FROM addons ORDER BY name ASC");
    $stmt->execute();
    $addons = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($addons) {
        foreach ($addons as $addon) {
            $addons_html .= '<div class="form-group col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="addon_' . $addon['id'] . '" name="addons[]" value="' . $addon['id'] . '">
                    <label class="form-check-label" for="addon_' . $addon['id'] . '">' . htmlspecialchars($addon['name']) . ' (<strong>$' . number_format($addon['price_per_day'], 2) . '</strong>/day)</label>
                </div>
            </div>';
        }
    } else {
        $addons_html .= '<p>No add-ons available.</p>';
    }
} catch (PDOException $e) {
    $addons_html .= '<p>?? Error loading add-ons.</p>';
}
$addons_html .= '</div></div></div>';

// Build output using heredoc
$output = <<<HTML
<!-- Hero Section -->
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car Details <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread" style="font-size: large;">{$car_name}</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-car-details">
    <div class="container">
       <div class="progressbar-container">
    <ul class="progressbar">
        <li class="active">Vehicle</li>
        <li>Extras</li>
        <li>Passengers + Transfers</li>
        <li>Confirmation</li>
        <li>Payment</li>
    </ul>
</div>

<style>
.progressbar {
    display: flex;
    justify-content: space-between;
    counter-reset: step;
    margin-bottom: 30px;
    list-style-type: none;
    padding: 0;
}
.progressbar li {
    position: relative;
    text-align: center;
    flex: 1;
    cursor: pointer;
}
.progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 30px;
    height: 30px;
    line-height: 30px;
    display: block;
    border: 2px solid #ccc;
    border-radius: 50%;
    background: white;
    margin: 0 auto 10px auto;
}
.progressbar li.active:before,
.progressbar li.completed:before {
    border-color: #007bff;
    background: #007bff;
    color: white;
}
.progressbar li:after {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    background: #ccc;
    top: 15px;
    left: -50%;
    z-index: -1;
}
.progressbar li:first-child:after {
    content: none;
}
.progressbar li.completed + li:after {
    background: #007bff;
}
</style>


        <!-- Booking Form -->
       <div class="row">
    <!-- Left Column: Vehicle Details -->
    <div class="col-md-4" id="vehicle_summary">
        <div class="card mb-3">
            <img src="{$car_image}" class="card-img-top" alt="{$car_name}">
            <div class="card-body">
                <h5 class="card-title">{$car_name}</h5>
                <p class="card-text">{$car_description}</p>
                <p><strong>Seats:</strong> {$seats}</p>
                <p><strong>Luggages:</strong> {$luggages}</p>
                <p><strong>Pickup:</strong> <span id="summary_pickup"></span></p>
                <p><strong>Drop-off:</strong> <span id="summary_dropoff"></span></p>
            </div>
        </div>
    </div>

    <!-- Right Column: Multi-step Form -->
    <div class="col-md-8">
        <form id="multiStepForm" action="connection.php" method="POST">
            <input type="hidden" name="car_id" value="{$car_id}">

            <!-- Step 1: Vehicle -->
            <div class="form-step active" data-step="1">
                <h4>Select Your Vehicle</h4>
                <p>Vehicle: {$car_name}</p>
                <p>{$car_description}</p>
                <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <!-- Step 2: Extras -->
            <div class="form-step" data-step="2">
                <h4>Choose Extras</h4>
                {$addons_html}
                <button type="button" class="btn btn-secondary prev-step">Back</button>
                <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <!-- Step 3: Passengers + Transfers -->
            <div class="form-step" data-step="3">
                <h4>Passengers & Transfers</h4>
                <!-- include your pickup/drop-off and passenger fields here -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pickup_location">Pickup Location</label>
                        <input type="text" class="form-control" id="pickup_location" name="pickup_location" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dropoff_location">Drop-off Location</label>
                        <input type="text" class="form-control" id="dropoff_location" name="dropoff_location" required>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary prev-step">Back</button>
                <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <!-- Step 4: Confirmation -->
            <div class="form-step" data-step="4">
                <h4>Confirm Booking</h4>
                <p>Please check your details before proceeding.</p>
                <button type="button" class="btn btn-secondary prev-step">Back</button>
                <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <!-- Step 5: Payment -->
            <div class="form-step" data-step="5">
                <h4>Payment</h4>
                <p>Enter your payment details here.</p>
                <button type="button" class="btn btn-secondary prev-step">Back</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>

        <script>
            const serviceType = document.getElementById('service_type');
            const rentCarFields = document.getElementById('rent_car_fields');
            const airportFields = document.getElementById('airport_transfer_fields');
            const addonsSection = document.getElementById('addons_section');
            const driversLicense = document.getElementById('drivers_license');
            const licenseFields = document.getElementById('license_fields');

            serviceType.addEventListener('change', function() {
                if (this.value === 'rent_car') {
                    rentCarFields.style.display = 'block';
                    airportFields.style.display = 'none';
                    addonsSection.style.display = 'block'; // show add-ons
                } else if (this.value === 'airport_transfer') {
                    rentCarFields.style.display = 'none';
                    airportFields.style.display = 'block';
                    addonsSection.style.display = 'block'; // hide add-ons
                } else {
                    rentCarFields.style.display = 'none';
                    airportFields.style.display = 'none';
                    addonsSection.style.display = 'none'; // hide add-ons
                }
            });

            if(driversLicense) {
                driversLicense.addEventListener('change', function() {
                    licenseFields.style.display = (this.value === 'yes') ? 'block' : 'none';
                });
            }
        </script>

        <script>
const steps = document.querySelectorAll('.form-step');
const progressItems = document.querySelectorAll('.progressbar li');
let currentStep = 0;

function showStep(step) {
    steps.forEach((s, i) => {
        s.classList.toggle('active', i === step);
        progressItems[i].classList.toggle('active', i === step);
        progressItems[i].classList.toggle('completed', i < step);
    });
}

document.querySelectorAll('.next-step').forEach(btn => {
    btn.addEventListener('click', () => {
        if(currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    });
});

document.querySelectorAll('.prev-step').forEach(btn => {
    btn.addEventListener('click', () => {
        if(currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });
});

// Initialize
showStep(currentStep);

// Update vehicle summary dynamically
const pickupInput = document.getElementById('pickup_location');
const dropoffInput = document.getElementById('dropoff_location');
const summaryPickup = document.getElementById('summary_pickup');
const summaryDropoff = document.getElementById('summary_dropoff');

pickupInput.addEventListener('input', () => summaryPickup.textContent = pickupInput.value);
dropoffInput.addEventListener('input', () => summaryDropoff.textContent = dropoffInput.value);
</script>

    </div>
</section>
HTML;

return $output;
return;

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
$car_image = "assets/images/fleet/3.jpg"; // fallback

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
    return "<p>⚠️ Error loading car details: " . htmlspecialchars($e->getMessage()) . "</p>";
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
    $addons_html .= '<p>⚠️ Error loading add-ons.</p>';
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
        <!-- Car Info Section -->
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h2>{$car_name}</h2>
                <span class="subheading">{$car_description}</span>
            </div>
        </div>

        <div class="row">
            <!-- Seats -->
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                            <div class="text"><h3 class="heading mb-0 pl-3">Seats <span>{$seats} Adults</span></h3></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Luggage -->
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
                            <div class="text"><h3 class="heading mb-0 pl-3">Luggage <span>{$luggages} Bags</span></h3></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transmission -->
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                            <div class="text"><h3 class="heading mb-0 pl-3">Transmission <span>Automatic</span></h3></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fuel -->
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                            <div class="text"><h3 class="heading mb-0 pl-3">Fuel <span>Petrol</span></h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="contact-form">
                    <h2 class="text-center mb-4">Schedule Your Ride</h2>
                    <form action="connection.php" method="POST">
                        <input type="hidden" name="car_id" value="{$car_id}">

                        <div class="row">
                            <!-- Left Column: Pickup/Drop-off -->
                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="pickup_location">Pickup Location</label>
                                        <input type="text" class="form-control" id="pickup_location" name="pickup_location" placeholder="Enter pickup location" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pickup_datetime">Pickup Date & Time</label>
                                        <input type="datetime-local" class="form-control" id="pickup_datetime" name="pickup_datetime" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="dropoff_location">Drop-off Location</label>
                                        <input type="text" class="form-control" id="dropoff_location" name="dropoff_location" placeholder="Enter drop-off location" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="dropoff_datetime">Drop-off Date & Time</label>
                                        <input type="datetime-local" class="form-control" id="dropoff_datetime" name="dropoff_datetime" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column: Customer Info -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="flight_number">Flight Number</label>
                                        <input type="text" class="form-control" id="flight_number" name="flight_number" placeholder="Enter your flight number" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="service_type">Select Service</label>
                                        <select class="form-control" id="service_type" name="service_type" required>
                                            <option value="" disabled selected>Select a service</option>
                                            <option value="airport_transfer">Airport Transfer</option>
                                            <option value="rent_car">Rent a Car</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr style="border-top: 1px solid rgb(0 0 0);">

                        {$addons_html}

                        <!-- Rent a Car & Airport Transfer fields -->
                        <div class="row">
                            <!-- Rent a Car fields -->
                            <div class="col-12" id="rent_car_fields" style="display:none; margin-top:6px;">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="mileage">Mileage Preference</label>
                                        <select class="form-control" id="mileage" name="mileage">
                                            <option value="" disabled selected>Select mileage</option>
                                            <option value="100km">100 km</option>
                                            <option value="200km">200 km</option>
                                            <option value="unlimited">Unlimited</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="car_passengers">Number of Passengers</label>
                                        <input type="number" class="form-control" id="car_passengers" name="car_passengers" placeholder="Enter number of passengers">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="chauffeur">Do you need a chauffeur?</label>
                                        <select class="form-control" id="chauffeur" name="chauffeur">
                                            <option value="" disabled selected>Select an option</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="drivers_license">Do you need a driver’s license?</label>
                                        <select class="form-control" id="drivers_license" name="drivers_license">
                                            <option value="" disabled selected>Select an option</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Conditional fields if driver’s license yes -->
                                <div id="license_fields" style="display:none;">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="passport">Passport</label>
                                            <input type="file" class="form-control" id="passport" name="passport">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="idp">International Driving Permit (IDP)</label>
                                            <input type="file" class="form-control" id="idp" name="idp">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="photo_applicant">Photo of Applicant</label>
                                            <input type="file" class="form-control" id="photo_applicant" name="photo_applicant">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="other_requirements">Other Requirements</label>
                                    <input type="text" class="form-control" id="other_requirements" name="other_requirements">
                                </div>
                            </div>

                            <!-- Airport Transfer fields -->
                            <div class="col-12" id="airport_transfer_fields" style="display:none; margin-top:6px;">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="transfer_passengers">Number of Passengers</label>
                                        <input type="number" class="form-control" id="transfer_passengers" name="transfer_passengers" placeholder="Enter number of passengers">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="flight_number">Flight Number</label>
                                        <input type="text" class="form-control" id="flight_number" name="flight_number" placeholder="Enter Flight Number">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="transfer_other">Other Requirements</label>
                                        <input type="text" class="form-control" id="transfer_other" name="transfer_other">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">Submit</button>
                    </form>
                </div>
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
    </div>
</section>
HTML;

return $output;
?>

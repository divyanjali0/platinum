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
    $stmt = $conn->prepare("SELECT name, price_per_day, description, image, no_of_seats, luggages FROM vehicles WHERE id = ?");
    $stmt->execute([$car_id]);
    $car = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($car) {
        $price_per_day = $car['price_per_day'];
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
$addons_html = '<div class="row" id="addons_section" style="margin-top:15px;"><div class="col-12"><h6 style="font-weight:600;">Available Add-ons</h6><div class="form-row">';
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
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Car Details <i class="ion-ios-arrow-forward"></i></span>
                </p>
                <h1 class="mb-3 bread" style="font-size: large;">{$car_name}</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-car-details">
    <div class="container">
        <!-- Progress Bar -->
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
        .progressbar li:first-child:after { content: none; }
        .progressbar li.completed + li:after { background: #007bff; }

        /* Hide steps by default */
        .form-step { display: none; opacity: 0; transition: opacity 0.3s ease; }
        .form-step.active { display: block; opacity: 1; }

        .side-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            background: #f8f9fa;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .side-box h5 {
            margin-bottom: 15px;
            font-weight: 600;
        }
        .help-box {
            margin-top: 20px;
            border: 1px solid #e2e2e2;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            background: #fff;
        }
        .help-box a {
            color: #007bff;
            font-weight: 600;
            text-decoration: none;
        }
        </style>

        <div class="row">
            <!-- LEFT COLUMN -->
            <div class="col-md-4">
                <div class="side-box">
                    <h5>Trip Details</h5>
                    <form>
                        <div class="form-group">
                            <label for="pickup_location">Pickup Location</label>
                            <input type="text" class="form-control" id="pickup_location" placeholder="Enter pickup location">
                        </div>
                        <div class="form-group">
                            <label for="dropoff_location">Drop-off Location</label>
                            <input type="text" class="form-control" id="dropoff_location" placeholder="Enter drop-off location">
                        </div>
                        <div class="form-group">
                            <label for="pickup_date">Pickup Date</label>
                            <input type="date" class="form-control" id="pickup_date">
                        </div>
                        <div class="form-group">
                            <label for="dropoff_date">Drop-off Date</label>
                            <input type="date" class="form-control" id="dropoff_date">
                        </div>
                    </form>
                </div>

                <div class="help-box">
                    <h6>Help Center!</h6>
                    <p><a href="[[~13]]">Frequently Asked Questions</a></p>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-md-8">
                <form id="multiStepForm" action="connection.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="car_id" value="{$car_id}">

                    <!-- STEP 1: VEHICLE -->
                    <div class="form-step active" data-step="1">
                        <h4>Selected Vehicle</h4>
                        <div class="card mb-3">
                            <img src="{$car_image}" class="card-img-top" alt="{$car_name}">
                            <div class="card-body">
                                <h5 class="card-title mb-0" style="font-weight:600;">{$car_name}</h5>
                                <p class="card-text">{$car_description}</p>
                                <div class="row">
                                    <div class="col-6">
                                        <p><strong>Seats:</strong> {$seats} | <strong>Luggages:</strong> {$luggages}</p>
                                    </div>
                                </div>

                                <p><strong>Price per Day :</strong> \$ {$price_per_day}</p>
                            </div>
                        </div>
                        <a href="[[~2]]" class="btn btn-secondary">Back</a>
                        <button type="button" class="btn btn-primary next-step">Next</button>
                    </div>

                    <!-- STEP 2: EXTRAS -->
                    <div class="form-step" data-step="2">
                        <h4>Choose Extras</h4>
                        {$addons_html}
                        <button type="button" class="btn btn-secondary prev-step">Back</button>
                        <button type="button" class="btn btn-primary next-step">Next</button>
                    </div>

                    <!-- STEP 3: PASSENGERS & TRANSFERS -->
                    <div class="form-step" data-step="3">
                        <h4>Passengers & Transfers</h4>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="passenger_name">Full Name</label>
                                <input type="text" class="form-control" id="passenger_name" name="passenger_name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="passenger_email">Email</label>
                                <input type="email" class="form-control" id="passenger_email" name="passenger_email" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="passenger_phone">Phone</label>
                                <input type="text" class="form-control" id="passenger_phone" name="passenger_phone" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="flight_number">Flight Number</label>
                                <input type="text" class="form-control" id="flight_number" name="flight_number">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="mileage">Mileage</label>
                                <select class="form-control" id="mileage" name="mileage">
                                    <option value="">Select Mileage</option>
                                    <option value="0-50">0-50 km</option>
                                    <option value="unlimited">Unlimited</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="need_driver">Do you need a Driver?</label>
                                <select class="form-control" id="need_driver" name="need_driver">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="need_license">Do you need a Driver's License?</label>
                                <select class="form-control" id="need_license" name="need_license">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12" id="license_uploads" style="display:none; margin-top:10px;">
                                <div class="mb-2">
                                    <label for="passport_image">Passport</label>
                                    <input type="file" class="form-control" id="passport_image" name="passport_image" accept="image/*">
                                </div>
                                <div class="mb-2">
                                    <label for="idp_image">International Driving Permit (IDP)</label>
                                    <input type="file" class="form-control" id="idp_image" name="idp_image" accept="image/*">
                                </div>
                                <div class="mb-2">
                                    <label for="passport_image2">Passport (Second)</label>
                                    <input type="file" class="form-control" id="passport_image2" name="passport_image2" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="num_passengers">Number of Passengers</label>
                                <input type="number" class="form-control" id="num_passengers" name="num_passengers" min="1" value="1">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="other_info">Other Information</label>
                                <input type="text" class="form-control" id="other_info" name="other_info">
                            </div>
                        </div>

                        <button type="button" class="btn btn-secondary prev-step">Back</button>
                        <button type="button" class="btn btn-primary next-step">Next</button>
                    </div>

                    <!-- STEP 4: CONFIRMATION -->
                    <div class="form-step" data-step="4">
                        <h4>Confirm Booking</h4>
                        <p>Please check your details before proceeding.</p>
                        <button type="button" class="btn btn-secondary prev-step">Back</button>
                        <button type="button" class="btn btn-primary next-step">Next</button>
                    </div>

                    <!-- STEP 5: PAYMENT -->
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
        const steps = document.querySelectorAll('.form-step');
        const progressItems = document.querySelectorAll('.progressbar li');
        let currentStep = 0;

        function showStep(step) {
            steps.forEach((s, i) => {
                s.classList.toggle('active', i === step);
                progressItems[i].classList.toggle('active', i === step);
                progressItems[i].classList.toggle('completed', i < step);
            });
            currentStep = step;
        }

        document.querySelectorAll('.next-step').forEach(btn => {
            btn.addEventListener('click', () => {
                if(currentStep < steps.length - 1) showStep(currentStep + 1);
            });
        });

        document.querySelectorAll('.prev-step').forEach(btn => {
            btn.addEventListener('click', () => {
                if(currentStep > 0) showStep(currentStep - 1);
            });
        });

        // Progress bar clickable
        progressItems.forEach((item, index) => {
            item.addEventListener('click', () => showStep(index));
        });

        // License upload visibility
        const needLicense = document.getElementById('need_license');
        const licenseUploads = document.getElementById('license_uploads');
        needLicense.addEventListener('change', function() {
            licenseUploads.style.display = (this.value === 'yes') ? 'block' : 'none';
        });

        // Initialize
        showStep(currentStep);
        </script>
</section>
HTML;

return $output;
return;

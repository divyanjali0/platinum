<?php  return '// Include DB connection
include_once MODX_BASE_PATH . \'assets/includes/db_connect.php\';

// Get car ID from URL
$car_id = isset($_GET[\'car_id\']) ? intval($_GET[\'car_id\']) : 0;

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
        $seats = $car[\'no_of_seats\'];
        $luggages = $car[\'luggages\'];
        $car_name = $car[\'name\'];
        $car_description = $car[\'description\'];
        $car_image = $car[\'image\'];
    }
} catch (PDOException $e) {
    return "<p>?? Error loading car details: " . htmlspecialchars($e->getMessage()) . "</p>";
}

// Build output using heredoc
$output = <<<HTML
<!-- Hero Section -->
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(\'assets/images/bg_3.jpg\');" data-stellar-background-ratio="0.5">
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
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details text-center">
                    <h2>{$car_name}</h2>
                    <span class="subheading">{$car_description}</span>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Seats -->
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">Seats <span>{$seats} Adults</span></h3>
                            </div>
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
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">Luggage <span>{$luggages} Bags</span></h3>
                            </div>
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
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">Transmission <span>Automatic</span></h3>
                            </div>
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
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">Fuel <span>Petrol</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features & Description Tabs -->
        <div class="row">
            <div class="col-md-12 pills">
                <div class="bd-example bd-example-tabs">
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                        <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                        <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p style="text-align: justify;">Compact cars are the perfect choice for city driving, offering a compact size that makes navigating through narrow streets and tight parking spaces much easier. With their fuel efficiency, they are also an economical option for both short trips and longer journeys. The Toyota Vitz, for example, is known for its practicality, comfort, and affordable pricing, making it a popular choice among urban drivers.</p>
                            <p style="text-align: justify;">These cars are ideal for those who prioritize convenience without compromising on performance. Whether you\'re driving through bustling city streets or taking a weekend getaway, compact cars like the Toyota Vitz offer a smooth, enjoyable driving experience. With features like spacious interiors, advanced safety systems, and efficient engines, they deliver both reliability and comfort in a compact package.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Booking Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <h2 class="text-center mb-4" style="font-weight: 600;">Schedule Your Ride</h2>
                    <form action="connection.php" method="POST">
                        <input type="hidden" name="car_id" value="{$car_id}">

                        <div class="row">
                            <!-- Left column: Pickup/Drop-off -->
                            <div class="col-md-6">
                                <!-- Pickup Row -->
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

                                <!-- Drop-off Row -->
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

                            <!-- Right column: Customer Info -->
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

                        <button type="submit" class="btn btn-primary btn-block mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</section>
HTML;

return $output;
return;
';
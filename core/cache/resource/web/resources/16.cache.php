<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 16,
    'type' => 'document',
    'pagetitle' => 'about-us',
    'longtitle' => '',
    'description' => '',
    'alias' => 'about-us',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '
    <style>
        .intro-section {
            text-align: center;
            margin-bottom: 80px;
            padding: 40px;
            background: rgba(26, 40, 64, 0.6);
            border-radius: 15px;
            border: 2px solid rgba(212, 175, 55, 0.3);
            backdrop-filter: blur(10px);
        }

        .intro-section h2 {
            font-size: 2.5em;
            color: #d4af37;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .intro-section p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #e8e8e8;
            max-width: 900px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        .feature-card {
            background: linear-gradient(145deg, rgba(26, 40, 64, 0.8) 0%, rgba(10, 22, 40, 0.9) 100%);
            padding: 40px;
            border-radius: 15px;
            border: 2px solid rgba(212, 175, 55, 0.4);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: \'\';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .feature-card:hover::before {
            left: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: #d4af37;
            box-shadow: 0 10px 40px rgba(212, 175, 55, 0.3);
        }

        .feature-icon {
            font-size: 3em;
            color: #d4af37;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.8em;
            color: #d4af37;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .feature-card p {
            color: #e8e8e8;
            line-height: 1.6;
            font-size: 1.05em;
        }

        .values-section {
            background: rgba(212, 175, 55, 0.1);
            padding: 60px 40px;
            border-radius: 15px;
            border: 2px solid #d4af37;
            margin-bottom: 80px;
        }

        .values-section h2 {
            text-align: center;
            font-size: 2.5em;
            color: #d4af37;
            margin-bottom: 50px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .values-list {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .value-item {
            flex: 1;
            min-width: 250px;
            text-align: center;
            padding: 30px;
            background: rgba(10, 22, 40, 0.7);
            border-radius: 10px;
            border: 1px solid rgba(212, 175, 55, 0.3);
            transition: all 0.3s ease;
        }

        .value-item:hover {
            background: rgba(26, 40, 64, 0.9);
            border-color: #d4af37;
        }

        .value-item h3 {
            color: #d4af37;
            font-size: 1.5em;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .value-item p {
            color: #e8e8e8;
            line-height: 1.6;
        }

        .cta-section {
            text-align: center;
            padding: 60px 40px;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.2) 0%, rgba(212, 175, 55, 0.05) 100%);
            border-radius: 15px;
            border: 2px solid #d4af37;
        }

        .cta-section h2 {
            font-size: 2.5em;
            color: #d4af37;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .cta-section p {
            font-size: 1.2em;
            color: #e8e8e8;
            margin-bottom: 30px;
        }

        .cta-button {
            display: inline-block;
            padding: 18px 50px;
            background: linear-gradient(135deg, #d4af37 0%, #f4d03f 100%);
            color: #0a1628;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: bold;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(212, 175, 55, 0.4);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(212, 175, 55, 0.6);
            background: linear-gradient(135deg, #f4d03f 0%, #d4af37 100%);
        }

        @media (max-width: 768px) {
            .logo {
                font-size: 2em;
            }

            .intro-section h2,
            .values-section h2,
            .cta-section h2 {
                font-size: 1.8em;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(\'assets/images/bg_3.jpg\');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">About Us</h1>
            </div>
            </div>
        </div>
    </section>

	<div class="container py-5">
        <section class="intro-section">
            <h2>About Platinum Drive</h2>
            <p>
                Welcome to Platinum Drive, where luxury meets excellence in automotive rental services. 
                For over a decade, we have been the premier choice for discerning clients who demand nothing 
                but the finest in vehicle selection, service quality, and overall experience. Our commitment 
                to excellence has made us the trusted name in luxury car rentals, serving executives, 
                celebrities, and those who appreciate the finer things in life.
            </p>
        </section>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">?</div>
                <h3>Premium Fleet</h3>
                <p>
                    Our meticulously curated collection features the world\'s most prestigious automotive brands. 
                    From elegant sedans to powerful sports cars, each vehicle is maintained to perfection and 
                    represents the pinnacle of automotive engineering.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">?</div>
                <h3>Concierge Service</h3>
                <p>
                    Experience white-glove service from start to finish. Our dedicated team ensures every 
                    detail is perfect, from vehicle delivery to your doorstep to personalized route planning 
                    and 24/7 support throughout your rental period.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">??</div>
                <h3>Trust & Security</h3>
                <p>
                    Your peace of mind is paramount. We provide comprehensive insurance coverage, secure 
                    transactions, and complete privacy protection. Every vehicle undergoes rigorous safety 
                    inspections and comes with full warranty coverage.
                </p>
            </div>
        </div>

        <section class="values-section">
            <h2>Our Core Values</h2>
            <div class="values-list">
                <div class="value-item">
                    <h3>Excellence</h3>
                    <p>We pursue perfection in every aspect of our service, ensuring an unparalleled experience.</p>
                </div>
                <div class="value-item">
                    <h3>Integrity</h3>
                    <p>Transparency and honesty form the foundation of every client relationship we build.</p>
                </div>
                <div class="value-item">
                    <h3>Luxury</h3>
                    <p>We believe luxury is not just about vehicles—it\'s about the entire experience we deliver.</p>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <h2>Begin Your Journey</h2>
            <p>Experience the Platinum Drive difference. Reserve your luxury vehicle today.</p>
            <a href="#" class="cta-button">Contact Us</a>
        </section>
    </div>

',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 15,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 2,
    'createdon' => 1762163589,
    'editedby' => 2,
    'editedon' => 1762163965,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1756714440,
    'publishedby' => 1,
    'menutitle' => '',
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    '_content' => '  <head>
    <title>Platinum Car Rent</title>
    <link rel="icon" type="assets/images/favicon.png" href="assets/images/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    

  <!-- Google Maps & Places API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>


    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  </head>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <a class="navbar-brand" href="index.php?id=1">
          <img id="logo" src="assets/images/logo1.png" alt="Platinum Logo" height="100">
      </a>
      
      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php?id=1" class="nav-link">HOME</a></li>
	          <!-- <li class="nav-item"><a href="about.html" class="nav-link">ABOUT US</a></li> -->
	          <li class="nav-item"><a href="index.php?id=2" class="nav-link">FLEET</a></li>
	          <!-- <li class="nav-item"><a href="pricing.html" class="nav-link">BLOG</a></li> -->
	          <!-- <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="index.php?id=13" class="nav-link">FAQ</a></li>
	          <li class="nav-item"><a href="index.php?id=16" class="nav-link">ABOUT US</a></li>
	          <li class="nav-item"><a href="index.php?id=3" class="nav-link">CONTACT US</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>


    <style>
        .intro-section {
            text-align: center;
            margin-bottom: 80px;
            padding: 40px;
            background: rgba(26, 40, 64, 0.6);
            border-radius: 15px;
            border: 2px solid rgba(212, 175, 55, 0.3);
            backdrop-filter: blur(10px);
        }

        .intro-section h2 {
            font-size: 2.5em;
            color: #d4af37;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .intro-section p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #e8e8e8;
            max-width: 900px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        .feature-card {
            background: linear-gradient(145deg, rgba(26, 40, 64, 0.8) 0%, rgba(10, 22, 40, 0.9) 100%);
            padding: 40px;
            border-radius: 15px;
            border: 2px solid rgba(212, 175, 55, 0.4);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: \'\';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .feature-card:hover::before {
            left: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: #d4af37;
            box-shadow: 0 10px 40px rgba(212, 175, 55, 0.3);
        }

        .feature-icon {
            font-size: 3em;
            color: #d4af37;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.8em;
            color: #d4af37;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .feature-card p {
            color: #e8e8e8;
            line-height: 1.6;
            font-size: 1.05em;
        }

        .values-section {
            background: rgba(212, 175, 55, 0.1);
            padding: 60px 40px;
            border-radius: 15px;
            border: 2px solid #d4af37;
            margin-bottom: 80px;
        }

        .values-section h2 {
            text-align: center;
            font-size: 2.5em;
            color: #d4af37;
            margin-bottom: 50px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .values-list {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .value-item {
            flex: 1;
            min-width: 250px;
            text-align: center;
            padding: 30px;
            background: rgba(10, 22, 40, 0.7);
            border-radius: 10px;
            border: 1px solid rgba(212, 175, 55, 0.3);
            transition: all 0.3s ease;
        }

        .value-item:hover {
            background: rgba(26, 40, 64, 0.9);
            border-color: #d4af37;
        }

        .value-item h3 {
            color: #d4af37;
            font-size: 1.5em;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .value-item p {
            color: #e8e8e8;
            line-height: 1.6;
        }

        .cta-section {
            text-align: center;
            padding: 60px 40px;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.2) 0%, rgba(212, 175, 55, 0.05) 100%);
            border-radius: 15px;
            border: 2px solid #d4af37;
        }

        .cta-section h2 {
            font-size: 2.5em;
            color: #d4af37;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .cta-section p {
            font-size: 1.2em;
            color: #e8e8e8;
            margin-bottom: 30px;
        }

        .cta-button {
            display: inline-block;
            padding: 18px 50px;
            background: linear-gradient(135deg, #d4af37 0%, #f4d03f 100%);
            color: #0a1628;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: bold;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(212, 175, 55, 0.4);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(212, 175, 55, 0.6);
            background: linear-gradient(135deg, #f4d03f 0%, #d4af37 100%);
        }

        @media (max-width: 768px) {
            .logo {
                font-size: 2em;
            }

            .intro-section h2,
            .values-section h2,
            .cta-section h2 {
                font-size: 1.8em;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(\'assets/images/bg_3.jpg\');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php?id=1">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">About Us</h1>
            </div>
            </div>
        </div>
    </section>

	<div class="container py-5">
        <section class="intro-section">
            <h2>About Platinum Drive</h2>
            <p>
                Welcome to Platinum Drive, where luxury meets excellence in automotive rental services. 
                For over a decade, we have been the premier choice for discerning clients who demand nothing 
                but the finest in vehicle selection, service quality, and overall experience. Our commitment 
                to excellence has made us the trusted name in luxury car rentals, serving executives, 
                celebrities, and those who appreciate the finer things in life.
            </p>
        </section>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">?</div>
                <h3>Premium Fleet</h3>
                <p>
                    Our meticulously curated collection features the world\'s most prestigious automotive brands. 
                    From elegant sedans to powerful sports cars, each vehicle is maintained to perfection and 
                    represents the pinnacle of automotive engineering.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">?</div>
                <h3>Concierge Service</h3>
                <p>
                    Experience white-glove service from start to finish. Our dedicated team ensures every 
                    detail is perfect, from vehicle delivery to your doorstep to personalized route planning 
                    and 24/7 support throughout your rental period.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">??</div>
                <h3>Trust & Security</h3>
                <p>
                    Your peace of mind is paramount. We provide comprehensive insurance coverage, secure 
                    transactions, and complete privacy protection. Every vehicle undergoes rigorous safety 
                    inspections and comes with full warranty coverage.
                </p>
            </div>
        </div>

        <section class="values-section">
            <h2>Our Core Values</h2>
            <div class="values-list">
                <div class="value-item">
                    <h3>Excellence</h3>
                    <p>We pursue perfection in every aspect of our service, ensuring an unparalleled experience.</p>
                </div>
                <div class="value-item">
                    <h3>Integrity</h3>
                    <p>Transparency and honesty form the foundation of every client relationship we build.</p>
                </div>
                <div class="value-item">
                    <h3>Luxury</h3>
                    <p>We believe luxury is not just about vehicles—it\'s about the entire experience we deliver.</p>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <h2>Begin Your Journey</h2>
            <p>Experience the Platinum Drive difference. Reserve your luxury vehicle today.</p>
            <a href="#" class="cta-button">Contact Us</a>
        </section>
    </div>



<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
	  <div class="row mb-5">
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			<img src="assets/images/logo.png" alt="CarBook Logo" height="100">
			<p style="text-align: justify; margin-top: 8%;">Platinum Drive Rent a Car offers premium vehicles for transfers and city travel across Sri Lanka. Our high-end fleet and professional chauffeurs ensure a safe, comfortable, and stylish journey, tailored for business, leisure, or city exploration.</p>
		 
		  </div>
		</div>
	
		  <div class="col-md">
			<div class="ftco-footer-widget mb-4">
				<!-- <h2 class="ftco-heading-2">We are Located</h2>
			
					<iframe 
					  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7405.353880602396!2d8.51228779204323!3d47.511205671410366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4790743bf365baf5%3A0xe35763ebf24c7305!2sHofstrasse%2015%2C%208181%20H%C3%B6ri%2C%20Switzerland!5e0!3m2!1sen!2slk!4v1754470128639!5m2!1sen!2slk" 
					  width="100%" height="200" style="border: 2px solid #ffffff;" allowfullscreen="" loading="lazy"></iframe> -->
				
			</div>
		  </div>
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			  <h2 class="ftco-heading-2">Contact Us</h2>
			  <div class="block-23 mb-3">
					<ul>
				   <li><a href="https://maps.app.goo.gl/xrmbXQFwX8j4buQh6"><span class="icon icon-map-marker"></span><span class="text">No : 375 / 2 / 1, Seeduwa, Sri Lanka</span></a></li> 
				  <li><a href="tel:+94768200099"><span class="icon icon-phone"></span><span class="text">+94 76 820 0099</span></a></li>
				  <li><a href="mailto:info@platinumdrive.lk"><span class="icon icon-envelope"></span><span class="text">info@platinumdrive.lk</span></a></li>
				</ul>
			  </div>
			<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-2">
			  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			</ul>
		  </div>
		</div>
	  </div>
	  <div class="row">
		<div class="col-md-12 text-center">

		  <p><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved | Platinum Drive Rent A Car </a>
<!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. --></p>
		</div>
	  </div>
	</div>
  </footer>
  


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.animateNumber.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script src="assets/js/scrollax.min.js"></script>

<script src="assets/js/google-map.js"></script>
<script src="assets/js/main.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  
  <script>
    function initAutocomplete() {
        const pickupInput = document.getElementById(\'pickup_location\');
        const dropoffInput = document.getElementById(\'dropoff_location\');

        const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
        const dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffInput);
    }

    google.maps.event.addDomListener(window, \'load\', initAutocomplete);
</script>

',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'icon' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$header?]]' => '  <head>
    <title>Platinum Car Rent</title>
    <link rel="icon" type="assets/images/favicon.png" href="assets/images/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    

  <!-- Google Maps & Places API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>


    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  </head>',
    '[[~1]]' => 'index.php?id=1',
    '[[~2]]' => 'index.php?id=2',
    '[[~13]]' => 'index.php?id=13',
    '[[~16]]' => 'index.php?id=16',
    '[[~3]]' => 'index.php?id=3',
    '[[$navbar?]]' => ' <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <a class="navbar-brand" href="index.php?id=1">
          <img id="logo" src="assets/images/logo1.png" alt="Platinum Logo" height="100">
      </a>
      
      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php?id=1" class="nav-link">HOME</a></li>
	          <!-- <li class="nav-item"><a href="about.html" class="nav-link">ABOUT US</a></li> -->
	          <li class="nav-item"><a href="index.php?id=2" class="nav-link">FLEET</a></li>
	          <!-- <li class="nav-item"><a href="pricing.html" class="nav-link">BLOG</a></li> -->
	          <!-- <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="index.php?id=13" class="nav-link">FAQ</a></li>
	          <li class="nav-item"><a href="index.php?id=16" class="nav-link">ABOUT US</a></li>
	          <li class="nav-item"><a href="index.php?id=3" class="nav-link">CONTACT US</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>',
    '[[$footer?]]' => '
<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
	  <div class="row mb-5">
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			<img src="assets/images/logo.png" alt="CarBook Logo" height="100">
			<p style="text-align: justify; margin-top: 8%;">Platinum Drive Rent a Car offers premium vehicles for transfers and city travel across Sri Lanka. Our high-end fleet and professional chauffeurs ensure a safe, comfortable, and stylish journey, tailored for business, leisure, or city exploration.</p>
		 
		  </div>
		</div>
	
		  <div class="col-md">
			<div class="ftco-footer-widget mb-4">
				<!-- <h2 class="ftco-heading-2">We are Located</h2>
			
					<iframe 
					  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7405.353880602396!2d8.51228779204323!3d47.511205671410366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4790743bf365baf5%3A0xe35763ebf24c7305!2sHofstrasse%2015%2C%208181%20H%C3%B6ri%2C%20Switzerland!5e0!3m2!1sen!2slk!4v1754470128639!5m2!1sen!2slk" 
					  width="100%" height="200" style="border: 2px solid #ffffff;" allowfullscreen="" loading="lazy"></iframe> -->
				
			</div>
		  </div>
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			  <h2 class="ftco-heading-2">Contact Us</h2>
			  <div class="block-23 mb-3">
					<ul>
				   <li><a href="https://maps.app.goo.gl/xrmbXQFwX8j4buQh6"><span class="icon icon-map-marker"></span><span class="text">No : 375 / 2 / 1, Seeduwa, Sri Lanka</span></a></li> 
				  <li><a href="tel:+94768200099"><span class="icon icon-phone"></span><span class="text">+94 76 820 0099</span></a></li>
				  <li><a href="mailto:info@platinumdrive.lk"><span class="icon icon-envelope"></span><span class="text">info@platinumdrive.lk</span></a></li>
				</ul>
			  </div>
			<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-2">
			  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			</ul>
		  </div>
		</div>
	  </div>
	  <div class="row">
		<div class="col-md-12 text-center">

		  <p><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved | Platinum Drive Rent A Car </a>
<!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. --></p>
		</div>
	  </div>
	</div>
  </footer>
  


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.animateNumber.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script src="assets/js/scrollax.min.js"></script>

<script src="assets/js/google-map.js"></script>
<script src="assets/js/main.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  
  <script>
    function initAutocomplete() {
        const pickupInput = document.getElementById(\'pickup_location\');
        const dropoffInput = document.getElementById(\'dropoff_location\');

        const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
        const dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffInput);
    }

    google.maps.event.addDomListener(window, \'load\', initAutocomplete);
</script>

',
  ),
  'sourceCache' => 
  array (
    'MODX\\Revolution\\modChunk' => 
    array (
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '  <head>
    <title>Platinum Car Rent</title>
    <link rel="icon" type="assets/images/favicon.png" href="assets/images/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    

  <!-- Google Maps & Places API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>


    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  </head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '  <head>
    <title>Platinum Car Rent</title>
    <link rel="icon" type="assets/images/favicon.png" href="assets/images/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    

  <!-- Google Maps & Places API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>


    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  </head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'navbar' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'navbar',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => ' <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <a class="navbar-brand" href="[[~1]]">
          <img id="logo" src="assets/images/logo1.png" alt="Platinum Logo" height="100">
      </a>
      
      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="[[~1]]" class="nav-link">HOME</a></li>
	          <!-- <li class="nav-item"><a href="about.html" class="nav-link">ABOUT US</a></li> -->
	          <li class="nav-item"><a href="[[~2]]" class="nav-link">FLEET</a></li>
	          <!-- <li class="nav-item"><a href="pricing.html" class="nav-link">BLOG</a></li> -->
	          <!-- <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="[[~13]]" class="nav-link">FAQ</a></li>
	          <li class="nav-item"><a href="[[~16]]" class="nav-link">ABOUT US</a></li>
	          <li class="nav-item"><a href="[[~3]]" class="nav-link">CONTACT US</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => ' <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <a class="navbar-brand" href="[[~1]]">
          <img id="logo" src="assets/images/logo1.png" alt="Platinum Logo" height="100">
      </a>
      
      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="[[~1]]" class="nav-link">HOME</a></li>
	          <!-- <li class="nav-item"><a href="about.html" class="nav-link">ABOUT US</a></li> -->
	          <li class="nav-item"><a href="[[~2]]" class="nav-link">FLEET</a></li>
	          <!-- <li class="nav-item"><a href="pricing.html" class="nav-link">BLOG</a></li> -->
	          <!-- <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="[[~13]]" class="nav-link">FAQ</a></li>
	          <li class="nav-item"><a href="[[~16]]" class="nav-link">ABOUT US</a></li>
	          <li class="nav-item"><a href="[[~3]]" class="nav-link">CONTACT US</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '
<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
	  <div class="row mb-5">
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			<img src="assets/images/logo.png" alt="CarBook Logo" height="100">
			<p style="text-align: justify; margin-top: 8%;">Platinum Drive Rent a Car offers premium vehicles for transfers and city travel across Sri Lanka. Our high-end fleet and professional chauffeurs ensure a safe, comfortable, and stylish journey, tailored for business, leisure, or city exploration.</p>
		 
		  </div>
		</div>
	
		  <div class="col-md">
			<div class="ftco-footer-widget mb-4">
				<!-- <h2 class="ftco-heading-2">We are Located</h2>
			
					<iframe 
					  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7405.353880602396!2d8.51228779204323!3d47.511205671410366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4790743bf365baf5%3A0xe35763ebf24c7305!2sHofstrasse%2015%2C%208181%20H%C3%B6ri%2C%20Switzerland!5e0!3m2!1sen!2slk!4v1754470128639!5m2!1sen!2slk" 
					  width="100%" height="200" style="border: 2px solid #ffffff;" allowfullscreen="" loading="lazy"></iframe> -->
				
			</div>
		  </div>
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			  <h2 class="ftco-heading-2">Contact Us</h2>
			  <div class="block-23 mb-3">
					<ul>
				   <li><a href="https://maps.app.goo.gl/xrmbXQFwX8j4buQh6"><span class="icon icon-map-marker"></span><span class="text">No : 375 / 2 / 1, Seeduwa, Sri Lanka</span></a></li> 
				  <li><a href="tel:+94768200099"><span class="icon icon-phone"></span><span class="text">+94 76 820 0099</span></a></li>
				  <li><a href="mailto:info@platinumdrive.lk"><span class="icon icon-envelope"></span><span class="text">info@platinumdrive.lk</span></a></li>
				</ul>
			  </div>
			<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-2">
			  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			</ul>
		  </div>
		</div>
	  </div>
	  <div class="row">
		<div class="col-md-12 text-center">

		  <p><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved | Platinum Drive Rent A Car </a>
<!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. --></p>
		</div>
	  </div>
	</div>
  </footer>
  


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.animateNumber.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script src="assets/js/scrollax.min.js"></script>

<script src="assets/js/google-map.js"></script>
<script src="assets/js/main.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  
  <script>
    function initAutocomplete() {
        const pickupInput = document.getElementById(\'pickup_location\');
        const dropoffInput = document.getElementById(\'dropoff_location\');

        const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
        const dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffInput);
    }

    google.maps.event.addDomListener(window, \'load\', initAutocomplete);
</script>

',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
	  <div class="row mb-5">
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			<img src="assets/images/logo.png" alt="CarBook Logo" height="100">
			<p style="text-align: justify; margin-top: 8%;">Platinum Drive Rent a Car offers premium vehicles for transfers and city travel across Sri Lanka. Our high-end fleet and professional chauffeurs ensure a safe, comfortable, and stylish journey, tailored for business, leisure, or city exploration.</p>
		 
		  </div>
		</div>
	
		  <div class="col-md">
			<div class="ftco-footer-widget mb-4">
				<!-- <h2 class="ftco-heading-2">We are Located</h2>
			
					<iframe 
					  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7405.353880602396!2d8.51228779204323!3d47.511205671410366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4790743bf365baf5%3A0xe35763ebf24c7305!2sHofstrasse%2015%2C%208181%20H%C3%B6ri%2C%20Switzerland!5e0!3m2!1sen!2slk!4v1754470128639!5m2!1sen!2slk" 
					  width="100%" height="200" style="border: 2px solid #ffffff;" allowfullscreen="" loading="lazy"></iframe> -->
				
			</div>
		  </div>
		<div class="col-md">
		  <div class="ftco-footer-widget mb-4">
			  <h2 class="ftco-heading-2">Contact Us</h2>
			  <div class="block-23 mb-3">
					<ul>
				   <li><a href="https://maps.app.goo.gl/xrmbXQFwX8j4buQh6"><span class="icon icon-map-marker"></span><span class="text">No : 375 / 2 / 1, Seeduwa, Sri Lanka</span></a></li> 
				  <li><a href="tel:+94768200099"><span class="icon icon-phone"></span><span class="text">+94 76 820 0099</span></a></li>
				  <li><a href="mailto:info@platinumdrive.lk"><span class="icon icon-envelope"></span><span class="text">info@platinumdrive.lk</span></a></li>
				</ul>
			  </div>
			<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-2">
			  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			</ul>
		  </div>
		</div>
	  </div>
	  <div class="row">
		<div class="col-md-12 text-center">

		  <p><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved | Platinum Drive Rent A Car </a>
<!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. --></p>
		</div>
	  </div>
	</div>
  </footer>
  


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.animateNumber.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script src="assets/js/scrollax.min.js"></script>

<script src="assets/js/google-map.js"></script>
<script src="assets/js/main.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
  
  <script>
    function initAutocomplete() {
        const pickupInput = document.getElementById(\'pickup_location\');
        const dropoffInput = document.getElementById(\'dropoff_location\');

        const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
        const dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffInput);
    }

    google.maps.event.addDomListener(window, \'load\', initAutocomplete);
</script>

',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
    ),
  ),
);
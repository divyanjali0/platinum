<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 13,
    'type' => 'document',
    'pagetitle' => 'faq',
    'longtitle' => '',
    'description' => '',
    'alias' => 'faq',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(\'assets/images/bg_3.jpg\');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
		<div class="col-md-9 ftco-animate pb-5">
			<p class="breadcrumbs"><span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>FAQ <i class="ion-ios-arrow-forward"></i></span></p>
			<h1 class="mb-3 bread">Frequently Asked Questions</h1>
		</div>
		</div>
	</div>
</section>

<div class="container my-5">

    <div class="faq-grid">
        <div class="faq-item">
            <div class="faq-question">
                <span>What types of luxury vehicles do you offer?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Our premium fleet includes high-end sedans, luxury SUVs, exotic sports cars, and executive limousines from brands like Mercedes-Benz, BMW, Audi, Porsche, and more. Each vehicle is meticulously maintained to ensure the highest standards of comfort and performance.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>Are professional chauffeurs included with all rentals?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Yes, all our rentals come with experienced, professional chauffeurs who are trained in luxury service standards. They are punctual, discreet, and knowledgeable about the area to ensure you have a seamless and comfortable journey.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>How far in advance should I book?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                We recommend booking at least 48-72 hours in advance to ensure vehicle availability, especially for special occasions or peak seasons. However, we also accommodate last-minute bookings subject to fleet availability.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>What is included in the rental price?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Our rental packages include the luxury vehicle of your choice, professional chauffeur service, comprehensive insurance coverage, fuel costs, and standard amenities. Additional services like special decorations, refreshments, or extended hours can be arranged upon request.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>Do you provide service for special events?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Absolutely! We specialize in providing luxury transportation for weddings, corporate events, airport transfers, proms, anniversaries, and other special occasions. We can customize our services to meet your specific event requirements.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>What are your service areas?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                We primarily serve the metropolitan area and surrounding regions. For destinations outside our standard service area, we can arrange special accommodations. Contact us to discuss your specific travel needs.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>What is your cancellation policy?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                We offer flexible cancellation policies depending on your booking type. Generally, cancellations made 48 hours or more before your scheduled service receive a full refund. Cancellations within 48 hours may be subject to a fee. Please refer to your booking confirmation for specific terms.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>How do I make a reservation?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Booking is easy! You can reserve your luxury vehicle through our website, call our customer service team directly, or send us an email. We\'ll confirm your booking details and answer any questions you may have to ensure a perfect experience.
            </div>
        </div>
    </div>

    <div class="contact-cta">
        <h2>Still Have Questions?</h2>
        <p>Our dedicated team is here to assist you with any inquiries</p>
        <a href="[[~3]]" class="cta-button">Contact Us</a>
    </div>
</div>

<script>
    const faqItems = document.querySelectorAll(\'.faq-item\');

    faqItems.forEach(item => {
        const question = item.querySelector(\'.faq-question\');
        
        question.addEventListener(\'click\', () => {
            const isActive = item.classList.contains(\'active\');
            
            // Close all items
            faqItems.forEach(faq => faq.classList.remove(\'active\'));
            
            // Open clicked item if it wasn\'t active
            if (!isActive) {
                item.classList.add(\'active\');
            }
        });
    });
</script>
',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 12,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 2,
    'createdon' => 1761713618,
    'editedby' => 2,
    'editedon' => 1761713625,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1761713625,
    'publishedby' => 2,
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
	          <li class="nav-item"><a href="index.php?id=3" class="nav-link">CONTACT US</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(\'assets/images/bg_3.jpg\');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
		<div class="col-md-9 ftco-animate pb-5">
			<p class="breadcrumbs"><span class="mr-2"><a href="index.php?id=1">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>FAQ <i class="ion-ios-arrow-forward"></i></span></p>
			<h1 class="mb-3 bread">Frequently Asked Questions</h1>
		</div>
		</div>
	</div>
</section>

<div class="container my-5">

    <div class="faq-grid">
        <div class="faq-item">
            <div class="faq-question">
                <span>What types of luxury vehicles do you offer?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Our premium fleet includes high-end sedans, luxury SUVs, exotic sports cars, and executive limousines from brands like Mercedes-Benz, BMW, Audi, Porsche, and more. Each vehicle is meticulously maintained to ensure the highest standards of comfort and performance.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>Are professional chauffeurs included with all rentals?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Yes, all our rentals come with experienced, professional chauffeurs who are trained in luxury service standards. They are punctual, discreet, and knowledgeable about the area to ensure you have a seamless and comfortable journey.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>How far in advance should I book?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                We recommend booking at least 48-72 hours in advance to ensure vehicle availability, especially for special occasions or peak seasons. However, we also accommodate last-minute bookings subject to fleet availability.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>What is included in the rental price?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Our rental packages include the luxury vehicle of your choice, professional chauffeur service, comprehensive insurance coverage, fuel costs, and standard amenities. Additional services like special decorations, refreshments, or extended hours can be arranged upon request.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>Do you provide service for special events?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Absolutely! We specialize in providing luxury transportation for weddings, corporate events, airport transfers, proms, anniversaries, and other special occasions. We can customize our services to meet your specific event requirements.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>What are your service areas?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                We primarily serve the metropolitan area and surrounding regions. For destinations outside our standard service area, we can arrange special accommodations. Contact us to discuss your specific travel needs.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>What is your cancellation policy?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                We offer flexible cancellation policies depending on your booking type. Generally, cancellations made 48 hours or more before your scheduled service receive a full refund. Cancellations within 48 hours may be subject to a fee. Please refer to your booking confirmation for specific terms.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>How do I make a reservation?</span>
                <div class="faq-icon">+</div>
            </div>
            <div class="faq-answer">
                Booking is easy! You can reserve your luxury vehicle through our website, call our customer service team directly, or send us an email. We\'ll confirm your booking details and answer any questions you may have to ensure a perfect experience.
            </div>
        </div>
    </div>

    <div class="contact-cta">
        <h2>Still Have Questions?</h2>
        <p>Our dedicated team is here to assist you with any inquiries</p>
        <a href="index.php?id=3" class="cta-button">Contact Us</a>
    </div>
</div>

<script>
    const faqItems = document.querySelectorAll(\'.faq-item\');

    faqItems.forEach(item => {
        const question = item.querySelector(\'.faq-question\');
        
        question.addEventListener(\'click\', () => {
            const isActive = item.classList.contains(\'active\');
            
            // Close all items
            faqItems.forEach(faq => faq.classList.remove(\'active\'));
            
            // Open clicked item if it wasn\'t active
            if (!isActive) {
                item.classList.add(\'active\');
            }
        });
    });
</script>


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
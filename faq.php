<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
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
                Booking is easy! You can reserve your luxury vehicle through our website, call our customer service team directly, or send us an email. We'll confirm your booking details and answer any questions you may have to ensure a perfect experience.
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
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(faq => faq.classList.remove('active'));
            
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
</script>

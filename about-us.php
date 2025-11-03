<style>
    .container {
        overflow: hidden;
    }
    
    body {
        background: #ffffff;
        color: #0a1628;
        overflow-x: hidden;
    }

    .intro-section {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 60px;
        background: linear-gradient(145deg, #0a1628 0%, #182b4d 100%);
        border-radius: 20px;
        border: 2px solid rgba(212, 175, 55, 0.3);
        padding: 60px;
        margin-bottom: 4rem;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        color: #e8e8e8;
    }

    .intro-content {
        flex: 1;
        min-width: 350px;
    }

    .intro-section h2 {
        font-size: 2.8em;
        color: #d4af37;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: 700;
        position: relative;
    }

    .intro-section h2::after {
        content: '';
        width: 80px;
        height: 3px;
        background: #d4af37;
        display: block;
        margin-top: 10px;
        border-radius: 2px;
    }

    .intro-section p {
        font-size: 1.15em;
        line-height: 1.8;
        color: #f2f2f2;
        text-align: justify;
        margin-bottom: 0;
    }

    .intro-image {
        flex: 1;
        min-width: 300px;
        display: flex;
        justify-content: center;
    }

    .intro-image img {
        width: 100%;
        max-width: 500px;
        border-radius: 20px;
        border: 2px solid rgba(212, 175, 55, 0.4);
        box-shadow: 0 10px 35px rgba(212, 175, 55, 0.25);
        transition: all 0.5s ease;
        object-fit: cover;
    }

    .intro-image img:hover {
        transform: scale(1.03);
        box-shadow: 0 15px 50px rgba(212, 175, 55, 0.35);
    }

    /* ===== Features Grid ===== */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
        margin-bottom: 4rem;
    }

    .feature-card {
        background: #0a1628;
        padding: 18px 30px;
        border-radius: 20px;
        border: 2px solid rgba(212, 175, 55, 0.35);
        color: #f0f0f0;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .feature-card:hover {
        transform: translateY(-10px);
        border-color: #d4af37;
        box-shadow: 0 15px 45px rgba(212, 175, 55, 0.25);
    }

    .feature-icon {
        font-size: 2.8em;
        color: #d4af37;
    }

    .feature-card h3 {
        font-size: 21px;
        color: #d4af37;
        text-transform: uppercase;
        letter-spacing: 2px;
        white-space: nowrap;
    }

    .feature-card p {
        color: #e8e8e8;
        line-height: 1.6;
        font-size: 1.05em;
        margin-bottom: 0;
        text-align: justify;
    }

    /* ===== Values Section ===== */
    .values-section {
        background: #0a1628;
        padding: 70px 50px;
        border-radius: 20px;
        border: 2px solid rgba(212, 175, 55, 0.3);
        margin-bottom: 4rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        color: #f0f0f0;
    }

    .values-section h2 {
        text-align: center;
        font-size: 2.6em;
        color: #d4af37;
        margin-bottom: 50px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .values-list {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: center;
    }

    .value-item {
        flex: 1;
        min-width: 260px;
        text-align: center;
        padding: 35px;
        background: #182b4d;
        border-radius: 15px;
        border: 1px solid rgba(212, 175, 55, 0.3);
        transition: all 0.3s ease;
    }

    .value-item:hover {
        transform: translateY(-6px);
        border-color: #d4af37;
        box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);
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
        padding: 36px 50px;
        background: linear-gradient(135deg, #0a1628 0%, #182b4d 100%);
        border-radius: 20px;
        border: 2px solid rgba(212, 175, 55, 0.4);
        box-shadow: 0 10px 40px rgba(212, 175, 55, 0.15);
        color: #f0f0f0;
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
        margin-bottom: 35px;
    }

    .cta-button {
        display: inline-block;
        padding: 16px 38px;
        background: linear-gradient(353deg, #d4af37 0%, #5b4a05 100%);        
        color: #0a1628;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s ease;
        box-shadow: 0 6px 25px rgba(212, 175, 55, 0.3);
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 35px rgba(212, 175, 55, 0.5);
        background: linear-gradient(135deg, #f4d03f 0%, #d4af37 100%);
    }

    @media (max-width: 992px) {
        .intro-section {
            flex-direction: column;
            text-align: center;
        }

        .intro-image img {
            max-width: 100%;
        }
    }
</style>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
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
    <!-- INTRO -->
    <section class="intro-section">
        <div class="intro-content">
            <h2>About Platinum Drive</h2>
            <p>
                Welcome to <strong>Platinum Drive</strong> — the ultimate destination for refined automotive luxury.
                For over a decade, we have set the gold standard in elite car rentals, offering a seamless blend of
                sophistication, performance, and prestige. Every vehicle in our fleet represents artistry and power,
                designed for those who demand more than just a drive — they demand excellence.
            </p>
        </div>
        <div class="intro-image">
            <img src="assets/images/about_car.jpg" alt="Luxury car at Platinum Drive">
        </div>
    </section>

    <!-- FEATURES -->
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">🚘</div>
            <h3>Premium Fleet</h3>
            <p>Our collection includes the world’s most iconic brands — each vehicle handpicked and maintained to perfection.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🤝</div>
            <h3>Concierge Service</h3>
            <p>From doorstep delivery to custom route planning, our team ensures a flawless luxury experience from start to finish.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🛡️</div>
            <h3>Trust & Security</h3>
            <p>Your peace of mind is our highest priority, with full coverage, verified rentals, and discreet, secure transactions.</p>
        </div>
    </div>

    <!-- VALUES -->
    <section class="values-section">
        <h2>Our Core Values</h2>
        <div class="values-list">
            <div class="value-item">
                <h3>Excellence</h3>
                <p>We deliver precision, perfection, and prestige in every journey — without compromise.</p>
            </div>
            <div class="value-item">
                <h3>Integrity</h3>
                <p>Our reputation is built on honesty, trust, and consistent transparency with every client.</p>
            </div>
            <div class="value-item">
                <h3>Luxury</h3>
                <p>Luxury isn’t a product; it’s an experience — one we tailor uniquely for you.</p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <h2>Begin Your Journey</h2>
        <p>Experience the Platinum Drive standard. Reserve your luxury vehicle today and embrace driving perfection.</p>
        <a href="#" class="cta-button">Contact Us</a>
    </section>
</div>

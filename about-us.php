
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
            content: '';
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
                    Our meticulously curated collection features the world's most prestigious automotive brands. 
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
                    <p>We believe luxury is not just about vehicles—it's about the entire experience we deliver.</p>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <h2>Begin Your Journey</h2>
            <p>Experience the Platinum Drive difference. Reserve your luxury vehicle today.</p>
            <a href="#" class="cta-button">Contact Us</a>
        </section>
    </div>


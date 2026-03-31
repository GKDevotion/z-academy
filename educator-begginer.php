<?php 
include_once ('elements/header.php');
?>

    <style>
        /* --- HERO LOOKOUT --- */
        .hero-section {
            min-height: 90vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #fff 60%, var(--dark) 60%);
            position: relative;
        }

        @media (max-width: 991px) {
            .hero-section { background: #fff; padding: 100px 0; }
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .btn-main {
            padding: 15px 40px;
            border-radius: 4px;
            font-weight: 700;
            transition: var(--transition);
            text-transform: uppercase;
            border: none;
        }

        .btn-red { background: var(--primary); color: white; }
        .btn-red:hover { background: #cc0000; transform: translateY(-5px); box-shadow: 0 10px 20px var(--primary-blur); }

        /* --- STEP ROADMAP --- */
        .step-card {
            border: none;
            background: var(--box-border);
            padding: 20px;
            border-radius: 20px;
            transition: var(--transition);
            height: 100%;
        }
        .step-card:hover { 
            background: var(--text-muted); 
            color: white; 
            transform: translateY(-10px); 
        }
        
        .step-card:hover .step-number { 
            color: var(--dark-navy) !important; 
        }   
        .step-number {
            font-size: 4rem;
            font-weight: 900;
            opacity: 0.1;
            line-height: 1;
        }

        /* --- MYTH VS REALITY --- */
        .comparison-box {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        }
        .myth { background: #fff1f1; padding: 30px; border-left: 5px solid var(--primary); }
        .reality { background: #f1fff7; padding: 30px; border-left: 5px solid #00ff88; }

        /* --- FLOATING UI ELEMENTS --- */
        .ui-mockup {
            width: 100%;
            max-width: 500px;
            filter: drop-shadow(0 30px 60px rgba(0,0,0,0.3));
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-25px); }
        }

        .footer-cta {
            background: var(--dark);
            color: white;
            padding: 100px 0;
            clip-path: polygon(0 10%, 100% 0, 100% 100%, 0% 100%);
        }
    </style>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="badge bg-danger mb-3">NEW TO TRADING?</span>
                    <h1 class="hero-title">Start Small. <br><span class="text-danger">Think Big.</span> Trade Smart.</h1>
                    <p class="lead text-muted mb-5">Your journey from beginner to consistent trader starts here. We provide the map, the tools, and the capital to practice.</p>
                    <div class="d-flex gap-3">
                        <button class="btn-main btn-red">Get Started</button>
                        <button class="btn btn-outline-dark px-4 fw-bold">Watch Video</button>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="zoom-in">
                    <img src="assets/img/floating-ui.png" class="ui-mockup" alt="Trading App">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold display-6">The 4 Steps to Your First Trade</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-card">
                        <div class="step-number text-danger">01</div>
                        <h4 class="fw-bold">Education</h4>
                        <p class="small">Learn the basics of pips, spreads, and leverage without the jargon.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-card">
                        <div class="step-number text-danger">02</div>
                        <h4 class="fw-bold">Demo Practice</h4>
                        <p class="small">Trade in real-time markets with $50,000 in virtual funds.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-card">
                        <div class="step-number text-danger">03</div>
                        <h4 class="fw-bold">Strategy</h4>
                        <p class="small">Follow our expert-led webinars to find a style that fits you.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-card">
                        <div class="step-number text-danger">04</div>
                        <h4 class="fw-bold">Go Live</h4>
                        <p class="small">Start with a micro-account and grow at your own pace.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold display-5">Truth About <span class="text-danger">Trading</span></h2>
                    <p class="text-muted">Trading isn't a "get rich quick" scheme. It's a high-income skill that requires patience and discipline.</p>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="comparison-box">
                        <div class="myth">
                            <h5 class="fw-bold text-danger"><i class="fas fa-times-circle me-2"></i>The Myth</h5>
                            <p class="mb-0">"You need a Finance degree and $100,000 to start trading today."</p>
                        </div>
                        <div class="reality border-top border-white">
                            <h5 class="fw-bold text-success"><i class="fas fa-check-circle me-2"></i>The Reality</h5>
                            <p class="mb-0">"Anyone with an internet connection and a plan can start with as little as $100."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 container text-center">
        <div class="row g-5 py-5">
            <div class="col-md-4" data-aos="zoom-in">
                <i class="fas fa-headset fs-1 text-danger mb-4"></i>
                <h5 class="fw-bold">24/7 Human Help</h5>
                <p class="text-muted small">Real people are here to help you set up your first trade, day or night.</p>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-shield-halved fs-1 text-danger mb-4"></i>
                <h5 class="fw-bold">Fully Regulated</h5>
                <p class="text-muted small">Your funds are kept in segregated accounts at top-tier banks.</p>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                <i class="fas fa-mobile-screen fs-1 text-danger mb-4"></i>
                <h5 class="fw-bold">Award Winning App</h5>
                <p class="text-muted small">Trade on the move with our high-speed, intuitive mobile platform.</p>
            </div>
        </div>
    </section>

    <footer class="footer-cta text-center">
        <div class="container" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-4">Ready to take the first step?</h2>
            <p class="mb-5 opacity-75">Join 60,000+ traders who started their journey right here.</p>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                <button class="btn-main btn-red px-5">Open Live Account</button>
                <button class="btn btn-outline-light px-5 py-3 fw-bold">Try Free Demo</button>
            </div>
        </div>
    </footer>

<?php
include_once ('elements/footer.php');
?>
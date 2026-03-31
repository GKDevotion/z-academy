<?php 
include_once ('elements/header.php');
?>

    <style>

        /* --- Animations --- */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .animate-up { animation: fadeInUp 0.8s ease backwards; }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .floating { animation: float 4s ease-in-out infinite; }

        /* --- Buttons --- */
        .btn-custom {
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: var(--transition);
        }

        .btn-primary-custom {
            background-color: var(--primary);
            color: white;
            border: none;
        }

        .btn-primary-custom:hover {
            background-color: #d60000;
            transform: scale(1.05);
            box-shadow: 0 10px 20px var(--primary-blur);
        }

        .btn-yellow {
            background-color: var(--warning);
            color: var(--dark);
            border: none;
        }

        .btn-yellow:hover {
            background-color: var(--warning);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 189, 46, 0.4);
        }

        /* --- Components --- */
        .icon-circle {
            width: 70px; height: 70px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
            transition: var(--transition);
        }

        .nav-card:hover .icon-circle {
            transform: rotateY(180deg);
            background: var(--dark);
        }

        .feature-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            border: 1px solid #eee;
            transition: var(--transition);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-shadow);
            border-color: var(--primary-blur);
        }

        .slant-bg {
            background: #fcfcfc;
            clip-path: polygon(0 5%, 100% 0, 100% 95%, 0% 100%);
            padding: 100px 0;
        }

        .img-wrapper {
            position: relative;
            z-index: 1;
        }

        .img-wrapper::before {
            content: '';
            position: absolute;
            width: 100%; height: 100%;
            background: var(--primary-blur);
            border-radius: 50%;
            z-index: -1;
            transform: scale(1.1);
        }

        footer.cta-section {
            background: linear-gradient(45deg, #000 0%, var(--primary) 100%);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .market-ticker {
            animation: scrollText 30s linear infinite;
        }
        @keyframes scrollText {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .step-number {
            font-size: 3rem;
            font-weight: 900;
            color: var(--primary-blur);
            line-height: 1;
            transition: var(--transition);
        }
        .step-number:hover {
            color: var(--primary);
            transform: scale(1.1);
        }
        .accordion-button:not(.collapsed) {
            background-color: var(--primary-blur);
            color: var(--primary);
        }
        .accordion-button:focus {
            box-shadow: none;
            border-color: var(--primary);
        }
    </style>

    <section class="py-4 bg-dark text-white overflow-hidden">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <span class="badge bg-danger me-4 px-3 py-2">LIVE MARKETS</span>
                <div class="market-ticker d-flex gap-5 fw-bold small">
                    <span class="text-nowrap">EUR/USD <span class="text-success">1.0842 ▲ 0.12%</span></span>
                    <span class="text-nowrap">GBP/USD <span class="text-danger">1.2631 ▼ 0.05%</span></span>
                    <span class="text-nowrap">BTC/USD <span class="text-success">68,432.10 ▲ 2.45%</span></span>
                    <span class="text-nowrap">GOLD <span class="text-success">2,154.50 ▲ 0.80%</span></span>
                    <span class="text-nowrap">AUD/USD <span class="text-danger">0.6512 ▼ 0.22%</span></span>
                    <span class="text-nowrap d-none d-md-inline">NAS100 <span class="text-success">18,210.30 ▲ 1.10%</span></span>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-padding py-5 mt-5">
        <div class="container text-center animate-up">
            <h1 class="display-4 fw-bold mb-3">Learn to trade the <span class="text-danger">financial markets</span></h1>
            <p class="lead text-muted mx-auto" style="max-width: 750px;">
                Expert-led courses, real-time market insights, and powerful tools designed to give you the ultimate edge in global trading.
            </p>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row g-3 justify-content-center text-center">
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-graduation-cap"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">COURSES</button>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-play"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">TUTORIALS</button>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-file-pdf"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">E-BOOKS</button>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-chart-pie"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">CFDS</button>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-coins"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">CRYPTO</button>
                </div>
            </div>
        </div>
    </div>

    <section class="slant-bg">
        <div class="container">
            <div class="text-center mb-5 animate-up">
                <h2 class="fw-bold">Expert insights you can trust</h2>
                <div class="bg-danger mx-auto mt-2" style="width: 50px; height: 3px;"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 animate-up delay-1">
                    <div class="feature-card text-center">
                        <i class="fa-solid fa-bolt fs-1 text-danger mb-4"></i>
                        <h4>Essential news</h4>
                        <p class="text-muted small">Real-time economic updates and high-impact market events delivered instantly.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-up delay-1">
                    <div class="feature-card text-center">
                        <i class="fa-solid fa-magnifying-glass-chart fs-1 text-danger mb-4"></i>
                        <h4>Market analysis</h4>
                        <p class="text-muted small">Deep dives into global trends, technical patterns, and asset correlations.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-up delay-1">
                    <div class="feature-card text-center">
                        <i class="fa-solid fa-microphone-lines fs-1 text-danger mb-4"></i>
                        <h4>Expert commentary</h4>
                        <p class="text-muted small">Unique perspectives from seasoned traders to sharpen your mental game.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-custom btn-primary-custom">Explore All Insights</button>
            </div>
        </div>
    </section>

    <section class="container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6 animate-up">
                <span class="badge bg-danger mb-2">RISK FREE</span>
                <h2 class="display-5 fw-bold mb-4">Practice with <br>$50,000 Virtual Cash</h2>
                <p class="text-muted mb-4">Master the MT4 platform and test your strategies in a live-market environment without spending a single cent of your own capital.</p>
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3 text-danger"><i class="fa-solid fa-circle-check fs-4"></i></div>
                    <div><strong>Full MT4 Access:</strong> All indicators and tools included.</div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="me-3 text-danger"><i class="fa-solid fa-circle-check fs-4"></i></div>
                    <div><strong>No Hidden Fees:</strong> 100% free for the first 30 days.</div>
                </div>
                <button class="btn btn-custom btn-yellow">Start Practicing Now</button>
            </div>
            <div class="col-lg-6 text-center animate-up delay-2">
                <div class="img-wrapper floating mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400&h=400" class="img-fluid rounded-circle shadow-lg" alt="Trading Specialist">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 text-center">
        <div class="row g-5">
            <div class="col-md-4 animate-up">
                <i class="fa-solid fa-user-tie fs-2 text-danger mb-3"></i>
                <h6>Dedicated Managers</h6>
                <p class="text-muted small">Your own point of contact for every trading need.</p>
            </div>
            <div class="col-md-4 animate-up delay-1">
                <i class="fa-solid fa-headset fs-2 text-danger mb-3"></i>
                <h6>24/7 Support</h6>
                <p class="text-muted small">Whenever the markets are moving, we are here.</p>
            </div>
            <div class="col-md-4 animate-up delay-2">
                <i class="fa-solid fa-language fs-2 text-danger mb-3"></i>
                <h6>14+ Languages</h6>
                <p class="text-muted small">Localized support for a truly global community.</p>
            </div>
        </div>
    </section>

    <section class="section-padding py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Your 4-Step Path to the Markets</h2>
                <p class="text-muted">We don't just give you a platform; we give you a blueprint.</p>
            </div>
            <div class="row g-0">
                <div class="col-md-3 text-center px-4 mb-4">
                    <div class="step-number mb-3">01</div>
                    <h5 class="fw-bold">Learn</h5>
                    <p class="small text-muted">Access over 50+ hours of video tutorials in our Academy.</p>
                </div>
                <div class="col-md-3 text-center px-4 mb-4">
                    <div class="step-number mb-3">02</div>
                    <h5 class="fw-bold">Practice</h5>
                    <p class="small text-muted">Use your $50k demo account to refine your strategy.</p>
                </div>
                <div class="col-md-3 text-center px-4 mb-4">
                    <div class="step-number mb-3">03</div>
                    <h5 class="fw-bold">Analyze</h5>
                    <p class="small text-muted">Utilize our Autochartist tool for automated signals.</p>
                </div>
                <div class="col-md-3 text-center px-4 mb-4">
                    <div class="step-number mb-3">04</div>
                    <h5 class="fw-bold">Execute</h5>
                    <p class="small text-muted">Go live with lightning-fast execution and 0.0 spreads.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-4">Why 60,000+ traders <br>choose <span class="text-danger">Axi</span></h2>
                    <div class="list-group list-group-flush bg-transparent">
                        <div class="list-group-item bg-transparent border-0 px-0">
                            <i class="fa-solid fa-bolt-lightning text-danger me-2"></i> 
                            <strong>Low Spreads:</strong> Competitive pricing from 0.0 pips.
                        </div>
                        <div class="list-group-item bg-transparent border-0 px-0">
                            <i class="fa-solid fa-shield-halved text-danger me-2"></i> 
                            <strong>Regulated:</strong> Multiple licenses for global security.
                        </div>
                        <div class="list-group-item bg-transparent border-0 px-0">
                            <i class="fa-solid fa-trophy text-danger me-2"></i> 
                            <strong>Award Winning:</strong> Voted Best MT4 Broker 2024.
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm p-4">
                        <h5 class="fw-bold mb-4">Common Questions</h5>
                        <div class="accordion accordion-flush" id="tradingFaq">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                                        What is the minimum deposit?
                                    </button>
                                </h2>
                                <div id="q1" class="accordion-collapse collapse" data-bs-parent="#tradingFaq">
                                    <div class="accordion-body text-muted">There is no minimum deposit to open a standard account. Start with what you are comfortable with.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                                        Can I trade on my mobile?
                                    </button>
                                </h2>
                                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#tradingFaq">
                                    <div class="accordion-body text-muted">Yes, our MetaTrader 4 app is available on both iOS and Android.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="cta-section text-center">
        <div class="container animate-up">
            <h2 class="display-6 fw-bold mb-4">Ready to trade your edge?</h2>
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                <button class="btn btn-custom btn-outline-light">Try Free Demo</button>
                <button class="btn btn-custom btn-yellow px-5">Open Live Account</button>
            </div>
        </div>
    </footer>


<?php
include_once ('elements/footer.php');
?>
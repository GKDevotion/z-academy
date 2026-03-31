<?php 
include_once ('elements/header.php');
?>
    <style>

        /* --- NEW MODERN HEADER DESIGN --- */
        .hero-lookout {
            position: relative;
            min-height: 85vh;
            display: flex;
            align-items: center;
            background: #fff;
            padding-top: 60px;
            overflow: hidden;
        }

        .hero-content { z-index: 2; position: relative; }

        .hero-title {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 25px;
            letter-spacing: -2px;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--muted);
            margin-bottom: 40px;
            max-width: 550px;
        }

        .hero-visual {
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary) 0%, #000 100%);
            clip-path: polygon(20% 0%, 100% 0%, 100% 100%, 0% 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 991px) {
            .hero-visual { display: none; }
            .hero-lookout { min-height: auto; padding: 80px 0; }
            .hero-title { font-size: 3rem; }
        }

        /* Float animation for the image inside hero */
        .floating-ui {
            filter: drop-shadow(0 30px 50px rgba(0,0,0,0.5));
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* --- Shared Styles --- */
        .section-padding { padding: 90px 0; }
        .btn-custom { padding: 15px 35px; border-radius: 4px; font-weight: 700; transition: var(--transition); text-transform: uppercase; }
        .btn-primary-red { background: var(--primary); color: white; border: none; }
        .btn-yellow { background: var(--warning); color: var(--dark); border: none; }
        .btn-yellow:hover { background: var(--primary-teal); color: white;}
        .btn-primary-red:hover { background: var(--warning);color: var(--dark); }
        
        .slant-bg {
            background: #f8f9fa;
            clip-path: polygon(0 2%, 100% 0, 100% 98%, 0% 100%);
            padding: 120px 0;
        }

        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #eee;
            transition: var(--transition);
            height: 100%;
        }
        .feature-card:hover { transform: translateY(-10px); box-shadow: var(--card-shadow); border-color: var(--primary); }
        
        .check-item { border: 1px solid #eee; padding: 15px; border-radius: 8px; background: #fff; }
    </style>

    <section class="hero-lookout">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content">
                    <span class="badge bg-danger mb-3 px-3 py-2">TRADING MASTERY 2026</span>
                    <h1 class="hero-title">Protect Your <br><span class="text-danger">Capital.</span> Build Your <br>Future.</h1>
                    <p class="hero-subtitle">Stop gambling and start trading. Master the art of risk management with Axi’s professional-grade tools and institutional insights.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-custom btn-primary-red">Open Live Account</button>
                        <button class="btn btn-custom btn-yellow">Try Free Demo</button>
                    </div>
                    <div class="mt-5 d-flex align-items-center gap-4 text-muted small">
                        <div><i class="fas fa-shield-alt text-danger me-2"></i>Regulated Broker</div>
                        <div><i class="fas fa-check-circle text-danger me-2"></i>Negative Balance Protection</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <img src="assets/img/floating-ui.png" class="floating-ui" alt="Trading Visual">
        </div>
    </section>

    <section class="slant-bg">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-5">The 8 Pillars of <span class="text-danger">Risk</span></h2>
                <p class="text-muted">Professional traders prioritize risk before profit. Here is how they do it.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">01</h2>
                        <h5 class="fw-bold">The 1% Rule</h5>
                        <p class="small text-muted">Never risk more than 1% of your total account equity on any single trade execution.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">02</h2>
                        <h5 class="fw-bold">Hard Stop-Loss</h5>
                        <p class="small text-muted">A trade without a stop-loss is a wish, not a strategy. Always define your exit first.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">03</h2>
                        <h5 class="fw-bold">1:3 RR Ratio</h5>
                        <p class="small text-muted">Seek setups where the potential profit is at least three times your potential risk.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">04</h2>
                        <h5 class="fw-bold">Logic > Emotion</h5>
                        <p class="small text-muted">Trading is a game of numbers. If the data says "No," your heart doesn't get a vote.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">05</h2>
                        <h5 class="fw-bold">Leverage Control</h5>
                        <p class="small text-muted">High leverage is a trap. Use institutional-grade margins to protect your downside.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">06</h2>
                        <h5 class="fw-bold">Correlations</h5>
                        <p class="small text-muted">Understand how pairs move together to avoid doubling your risk unintentionally.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">07</h2>
                        <h5 class="fw-bold">News Filter</h5>
                        <p class="small text-muted">Stay out of the market during high-impact events like NFP or CPI unless you're a pro.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">08</h2>
                        <h5 class="fw-bold">Performance Logs</h5>
                        <p class="small text-muted">You cannot improve what you do not measure. Keep a rigorous trading journal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h2 class="fw-bold">The Deadly <span class="text-danger">Drawdown</span></h2>
                <p class="text-muted">Mathematical reality: Recovering from a loss is harder than making a profit. Protect your capital at all costs.</p>
                <div class="p-4 bg-dark text-white rounded-4 mt-4">
                    <h3 class="fw-bold text-danger">50% Loss</h3>
                    <p class="mb-0">Requires a <strong>100% Return</strong> just to break even.</p>
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0">
                <table class="table table-hover border">
                    <thead class="table-dark">
                        <tr><th>Loss</th><th>Recovery Needed</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>10%</td><td>11%</td></tr>
                        <tr><td>25%</td><td>33%</td></tr>
                        <tr class="table-danger"><td><strong>50%</strong></td><td><strong>100%</strong></td></tr>
                        <tr class="bg-dark text-white"><td>90%</td><td>900%</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Pre-Execution Checklist</h2>
                <p class="text-muted">Never hit 'Buy' or 'Sell' without checking these boxes.</p>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-md-4 col-lg-3">
                    <div class="check-item"><input type="checkbox" class="form-check-input me-2"> Stop Loss Set</div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="check-item"><input type="checkbox" class="form-check-input me-2"> Position Sized</div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="check-item"><input type="checkbox" class="form-check-input me-2"> News Calendar Clear</div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="check-item"><input type="checkbox" class="form-check-input me-2"> Trend Identified</div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-5">
        <div class="container">
            <h3 class="fw-bold mb-4">Start trading with an edge.</h3>
            <div class="d-flex justify-content-center gap-3 mb-4">
                <button class="btn btn-yellow btn-custom">Open Account</button>
            </div>
        </div>
    </footer>
  
    
<?php
include_once ('elements/footer.php');
?>
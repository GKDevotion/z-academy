<?php 
include_once ('elements/header.php');
?>

    <style>

        /* --- HERO LOOKOUT (Split Perspective) --- */
        .hero-intermediate {
            min-height: 95vh;
            display: flex;
            align-items: center;
            background: linear-gradient(90deg, #fff 55%, var(--dark) 55%);
            position: relative;
        }

        @media (max-width: 991px) {
            .hero-intermediate { background: #fff; padding: 100px 0; }
        }

        .hero-title { font-size: clamp(3rem, 7vw, 5rem); font-weight: 900; letter-spacing: -3px; line-height: 0.9; }
        
        .btn-action {
            padding: 18px 45px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
            border-radius: 0;
        }

        /* --- ADVANCED METRICS CARDS --- */
        .metric-card {
            border: 1px solid #eee;
            padding: 40px;
            transition: var(--transition);
            background: white;
            position: relative;
            overflow: hidden;
        }
        .metric-card:hover { transform: translateY(-15px); border-color: var(--primary); box-shadow: 0 30px 60px rgba(0,0,0,0.1); }
        .metric-card::after {
            content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 4px;
            background: var(--primary); transition: var(--transition);
        }
        .metric-card:hover::after { width: 100%; }

        /* --- PSYCHOLOGY SECTION --- */
        .psyche-bg { background: var(--dark); color: white; padding: 120px 0; clip-path: polygon(0 5%, 100% 0, 100% 95%, 0% 100%); }

        /* --- INTERACTIVE ROADMAP --- */
        .timeline-box { position: relative; border-left: 2px solid #eee; padding-left: 40px; margin-left: 20px; }
        .timeline-item { position: relative; margin-bottom: 60px; }
        .timeline-item::before {
            content: ''; position: absolute; left: -51px; top: 0;
            width: 20px; height: 20px; background: var(--primary); border-radius: 50%;
        }

        /* --- COMPARISON TABLE --- */
        .table-custom { border-radius: 15px; overflow: hidden; box-shadow: var(--card-shadow); }
        .table-custom thead { background: var(--primary); color: white; }

        /* --- ANIMATIONS --- */
        .floating { animation: float 5s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
    </style>
    

    <section class="hero-intermediate">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h6 class="text-danger fw-bold text-uppercase mb-3">Level: Intermediate</h6>
                    <h1 class="hero-title mb-4">Mastering <br>The Edge.</h1>
                    <p class="lead mb-5 text-muted">You know how to trade. Now learn how to scale. Optimize your win rate, master high-frequency data, and eliminate psychological slippage.</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-action btn-danger px-5">Upgrade Your System</button>
                    </div>
                </div>
                <div class="col-lg-6 text-end mt-5 mt-lg-0" data-aos="zoom-in">
                    <img src="assets/img/floating-ui.png" class="img-fluid floating shadow-lg" alt="Trading Logic">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-0 text-center">
                <div class="col-md-3 border-end p-4">
                    <h2 class="fw-bold">0.0</h2>
                    <p class="text-muted small mb-0">RAW SPREADS</p>
                </div>
                <div class="col-md-3 border-end p-4">
                    <h2 class="fw-bold">80+</h2>
                    <p class="text-muted small mb-0">INDICATORS</p>
                </div>
                <div class="col-md-3 border-end p-4">
                    <h2 class="fw-bold">&lt;30ms</h2>
                    <p class="text-muted small mb-0">EXECUTION SPEED</p>
                </div>
                <div class="col-md-3 p-4">
                    <h2 class="fw-bold">1:500</h2>
                    <p class="text-muted small mb-0">MAX LEVERAGE</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">The Optimization <span class="text-danger">Matrix</span></h2>
            <p class="text-muted">Four critical areas where intermediate traders find their consistency.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="metric-card">
                    <i class="fas fa-microchip text-danger fs-2 mb-4"></i>
                    <h5 class="fw-bold">Algorithmic Edge</h5>
                    <p class="small text-muted">Learn to automate repetitive entries using MetaTrader 4 expert advisors.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="metric-card">
                    <i class="fas fa-chart-area text-danger fs-2 mb-4"></i>
                    <h5 class="fw-bold">Volume Profiling</h5>
                    <p class="small text-muted">Go beyond price. Identify where the "Big Money" is accumulating orders.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="metric-card">
                    <i class="fas fa-random text-danger fs-2 mb-4"></i>
                    <h5 class="fw-bold">Confluence Mastery</h5>
                    <p class="small text-muted">Combine Fibonacci, Trendlines, and RSI for high-probability setups.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="metric-card">
                    <i class="fas fa-shield-alt text-danger fs-2 mb-4"></i>
                    <h5 class="fw-bold">Dynamic Sizing</h5>
                    <p class="small text-muted">Adjust lot sizes based on market volatility, not just fixed percentages.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="psyche-bg py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="display-4 fw-bold mb-4">90% of Trading is <br><span class="text-danger">Mental.</span></h2>
                    <p class="opacity-75 mb-4">Intermediate traders often fail not because of their strategy, but because of their mind. We provide tools to help you manage the 'Inner Trader'.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check-circle text-danger me-2"></i> Eliminate FOMO through rigid rule sets</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-danger me-2"></i> Stop "Revenge Trading" after a drawdown</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-danger me-2"></i> Develop the 'Probabilistic Mindset'</li>
                    </ul>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-left">
                    <div class="p-5 border border-secondary rounded-5">
                        <h1 class="display-1 fw-black opacity-25">MIND</h1>
                        <p class="fst-italic">"The market is a device for transferring money from the impatient to the patient."</p>
                        <span class="text-danger fw-bold">— Warren Buffett</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding container py-5">
        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <h2 class="fw-bold display-6 mb-4">The Bridge to <br><span class="text-danger">Pro Status</span></h2>
                <p class="text-muted">The journey from $1,000 to $100,000 requires a different set of skills.</p>
            </div>
            <div class="col-lg-8">
                <div class="timeline-box">
                    <div class="timeline-item" data-aos="fade-up">
                        <h5 class="fw-bold">Phase 1: System Standardization</h5>
                        <p class="text-muted small">Stop "System Hopping". Choose one strategy and trade it for 100 consecutive days. Document every slippage.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <h5 class="fw-bold">Phase 2: Risk Optimization</h5>
                        <p class="text-muted small">Moving from 1% risk to Kelly Criterion models. Understanding the math behind consecutive losing streaks.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <h5 class="fw-bold">Phase 3: Multi-Asset Correlation</h5>
                        <p class="text-muted small">Using the US Dollar Index (DXY) to predict moves in Gold, Oil, and Major FX pairs.</p>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <h5 class="fw-bold">Phase 4: Scaling & Compounding</h5>
                        <p class="text-muted small">Automating withdrawals and compounding returns while keeping psychological pressure low.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Retail vs. <span class="text-danger">Institutional</span> Trading</h2>
            <div class="table-responsive">
                <table class="table table-hover bg-white shadow-sm border">
                    <thead class="table-dark">
                        <tr>
                            <th>Feature</th>
                            <th>Retail Trader (Beginner)</th>
                            <th class="bg-danger">Institutional Approach (Intermediate)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Goal</td><td>Make money fast</td><td>Preserve capital, scale slowly</td></tr>
                        <tr><td>Indicators</td><td>Lagging (RSI, MACD)</td><td>Leading (Price Action, Order Flow)</td></tr>
                        <tr><td>Risk</td><td>Fixed Dollar Amount</td><td>Volatility Adjusted (ATR Based)</td></tr>
                        <tr><td>Mindset</td><td>Gambling/Excitement</td><td>Cold, Calculated Business</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="section-padding container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://picsum.photos/700/500?2" class="img-fluid rounded-4 shadow" alt="Technical Data">
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 px-lg-5" data-aos="fade-left">
                <h2 class="fw-bold">Advanced Order Flow</h2>
                <p class="text-muted">Don't just watch candles. Watch where the liquidity is sitting. Our advanced MT4 plugins allow you to see the market depth that others miss.</p>
                <div class="row mt-4">
                    <div class="col-6 mb-3">
                        <h6 class="fw-bold text-danger"><i class="fas fa-chevron-right me-2"></i>Tick Data</h6>
                        <p class="small text-muted">High-resolution price action.</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6 class="fw-bold text-danger"><i class="fas fa-chevron-right me-2"></i>Depth of Market</h6>
                        <p class="small text-muted">See the pending limit orders.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white py-5">
        <div class="container" style="max-width: 800px;">
            <h2 class="fw-bold text-center mb-5">The Intermediate <span class="text-danger">FAQ</span></h2>
            <div class="accordion accordion-flush shadow-sm border" id="faqInter">
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#f1">How much capital do I need to scale?</button></h2>
                    <div id="f1" class="accordion-collapse collapse show" data-bs-parent="#faqInter">
                        <div class="accordion-body">Scaling is about percentages, not dollars. You can scale a $500 account just as strictly as a $50,000 account to build the habit.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#f2">Should I trade multiple pairs?</button></h2>
                    <div id="f2" class="accordion-collapse collapse" data-bs-parent="#faqInter">
                        <div class="accordion-body">Intermediate traders usually specialize in 2-3 correlated pairs to master their "personality" rather than being a jack of all trades.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white pt-5">
        <div class="container text-center py-5" data-aos="zoom-in">
            <h2 class="display-4 fw-bold mb-4">Ready to Trade Your Edge?</h2>
            <p class="mb-5 opacity-50">Join the world's most sophisticated intermediate trading community.</p>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                <button class="btn btn-action btn-danger px-5">Open Live Account</button>
                <button class="btn btn-action btn-outline-light px-5">Explore Academy</button>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
    
<?php
include_once ('elements/footer.php');
?>
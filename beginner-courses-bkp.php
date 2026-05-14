<?php 
include_once ('elements/header.php');
?>

    <style>
        
        /* Next-Level Card Styling */
        .beginner-card {
            margin-top: 80px;
            padding: 100px 0;
        }

        .beginner-card:hover {
            border-color: var(--primary-teal);
            transform: scale(1.03);
            box-shadow: 0 25px 50px -12px var(--zed-backgound-color);
        }

        .step-indicator {
            position: absolute;
            top: -10px;
            left: 20px;
            background: var(--primary-teal);
            color: white;
            padding: 5px 20px;
            border-radius: 10px;
            font-weight: 800;
            font-size: 0.75rem;
            text-transform: uppercase;
        }

        .icon-circle {
            width: 70px;
            height: 70px;
            background: linear-gradient(45deg, #fff, #fff5f5);
            border: 1px solid var(--zed-backgound-color);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 25px;
            transition: 0.3s;
            position: absolute;
            right: 30px;
            top: 100px;
        }

        .beginner-card:hover .icon-circle {
            background: var(--primary-teal);
            color: white;
            transform: rotate(-10deg);
        }

        .btn-start {
            background: var(--primary-teal);
            color: white;
            border-radius: 12px;
            font-weight: 700;
            padding: 12px;
            width: 100%;
            display: block;
            text-align: center;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-start:hover {
            background: var(--dark-navy);
            color: #fff;
        }

        .difficulty-bar {
            height: 4px;
            background: var(--border-box);
            border-radius: 2px;
            margin-top: 15px;
        }

        .difficulty-fill {
            height: 100%;
            background: var(--primary-teal);
            border-radius: 2px;
        }
    </style>

    <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Your Trading Journey <span style="color: var(--trader-red);">Starts Here</span></h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">No experience? No problem. We've designed these foundational courses to take you from absolute beginner to market-ready.</p>
            <div class="open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="rounded-pill">ZERO TO HERO</button>
            </div>
        </div>
    </header>

    <div class="container py-5">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp">
                <div class="card p-4 beginner-card">
                    <div class="step-indicator">Level 01</div>
                    <div class="icon-circle">🌱</div>
                    <h4 class="fw-bold">Trading Fundamentals</h4>
                    <p class="text-muted small">What is a pip? How do brokers work? Understanding the global marketplace from scratch.</p>
                    <ul class="list-unstyled mb-4 small">
                        <li>✅ Market Terminology</li>
                        <li>✅ Setting up MetaTrader</li>
                        <li>✅ Reading Price Charts</li>
                    </ul>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between small mb-1">
                            <span>Difficulty: Beginner</span>
                            <span>100%</span>
                        </div>
                        <div class="difficulty-bar mb-4"><div class="difficulty-fill" style="width: 20%;"></div></div>
                        <a href="#" class="btn-start">Start Module 1</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="card p-4 beginner-card">
                    <div class="step-indicator">Level 02</div>
                    <div class="icon-circle">📈</div>
                    <h4 class="fw-bold">Technical Analysis 101</h4>
                    <p class="text-muted small">Learn to identify trends using Support, Resistance, and basic Moving Averages.</p>
                    <ul class="list-unstyled mb-4 small">
                        <li>✅ Trendline Secrets</li>
                        <li>✅ Support & Resistance</li>
                        <li>✅ Intro to Indicators</li>
                    </ul>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between small mb-1">
                            <span>Difficulty: Beginner</span>
                            <span>40%</span>
                        </div>
                        <div class="difficulty-bar mb-4"><div class="difficulty-fill" style="width: 40%;"></div></div>
                        <a href="#" class="btn-start">Start Module 2</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="card p-4 beginner-card">
                    <div class="step-indicator">Level 03</div>
                    <div class="icon-circle">🛡️</div>
                    <h4 class="fw-bold">Risk Management</h4>
                    <p class="text-muted small">The most important skill. Learn how to protect your capital and manage lot sizes.</p>
                    <ul class="list-unstyled mb-4 small">
                        <li>✅ The 1% Rule</li>
                        <li>✅ Stop Loss Strategies</li>
                        <li>✅ Position Sizing</li>
                    </ul>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between small mb-1">
                            <span>Difficulty: Essential</span>
                            <span>60%</span>
                        </div>
                        <div class="difficulty-bar mb-4"><div class="difficulty-fill" style="width: 65%;"></div></div>
                        <a href="#" class="btn-start">Start Module 3</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php
include_once ('elements/footer.php');
?>
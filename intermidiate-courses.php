<?php 
include_once ('elements/header.php');
?>

    <style>
        
        /* Next-Level Glassmorphism Cards */
        .inter-card {
            background: var(--zed-backgound-color);
            border: 1px solid var(--zed-border-color);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            transition: all 0.4s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .inter-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(45deg, transparent, var(--zed-backgound-color), transparent);
            transform: translateX(-100%);
            transition: 0.6s;
        }

        .inter-card:hover::before { transform: translateX(100%); }

        .inter-card:hover {
            border-color: var(--primary-teal);
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.07);
            box-shadow: 0 0 30px var(--zed-backgound-color);
        }

        .tech-tag {
            font-size: 1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: var(--primary-teal);
            border: 1px solid var(--primary-teal);
            padding: 10px 0;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .chart-preview {
            font-size: 5rem;
            position: absolute;
            right: 40px;
            top: 160px;
        }

        .btn-inter {
            background: transparent;
            border: 1px solid var(--zed-primary);
            color: var(--dark-navy);
            font-weight: 600;
            padding: 10px;
            width: 100%;
            transition: 0.4s;
        }

        .btn-inter:hover {
            background: var(--zed-primary-hover);
            color: #fff;
            box-shadow: 0 0 15px var(--primary-teal);
        }
    </style>

    <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Level Up: <span style="color: var(--primary-teal);">Intermediate</span> Modules</h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Take your foundational knowledge and turn it into a repeatable trading system.</p>
            <div class="open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="rounded-pill">ZERO TO HERO</button>
            </div>
        </div>
    </header>


    <div class="container py-5">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6 animate__animated animate__zoomIn animate__delay-1s">
                <div class="card p-4 inter-card">
                    <div class="tech-tag">Module 04</div>
                    <div class="chart-preview">📊</div>
                    <h4 class="fw-bold">Smart Money Concepts</h4>
                    <p class="text-secondary">Deep dive into Order Blocks, Fair Value Gaps (FVG), and Market Structure Shifts.</p>
                    <ul class="list-unstyled mb-4 text-secondary">
                        <li>⚡ Liquidity Sweeps</li>
                        <li>⚡ Premium vs Discount</li>
                        <li>⚡ Mitigation Zones</li>
                    </ul>
                    <button class="btn btn-inter mt-auto">Unlock Module</button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 animate__animated animate__zoomIn animate__delay-2s">
                <div class="card p-4 inter-card">
                    <div class="tech-tag">Module 05</div>
                    <div class="chart-preview">📉</div>
                    <h4 class="fw-bold">Fibonacci & Harmonics</h4>
                    <p class="text-secondary">Using math to predict price targets and reversal points with high accuracy.</p>
                    <ul class="list-unstyled mb-4 text-secondary">
                        <li>⚡ Golden Pocket (61.8%)</li>
                        <li>⚡ Gartley & Bat Patterns</li>
                        <li>⚡ Extension Targets</li>
                    </ul>
                    <button class="btn btn-inter mt-auto">Unlock Module</button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 animate__animated animate__zoomIn animate__delay-3s">
                <div class="card p-4 inter-card">
                    <div class="tech-tag">Module 06</div>
                    <div class="chart-preview">🖥️</div>
                    <h4 class="fw-bold">Multi-Timeframe Mastery</h4>
                    <p class="text-secondary">How to align the Daily bias with the 5-minute entry for 1:10+ Reward/Risk.</p>
                    <ul class="list-unstyled mb-4 text-secondary">
                        <li>⚡ Top-Down Analysis</li>
                        <li>⚡ Fractal Market Entry</li>
                        <li>⚡ News Event Navigation</li>
                    </ul>
                    <button class="btn btn-inter mt-auto">Unlock Module</button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 animate__animated animate__zoomIn animate__delay-4s">
                <div class="card p-4 inter-card">
                    <div class="tech-tag">Module 04</div>
                    <div class="chart-preview">📊</div>
                    <h4 class="fw-bold">Smart Money Concepts</h4>
                    <p class="text-secondary">Deep dive into Order Blocks, Fair Value Gaps (FVG), and Market Structure Shifts.</p>
                    <ul class="list-unstyled mb-4 text-secondary">
                        <li>⚡ Liquidity Sweeps</li>
                        <li>⚡ Premium vs Discount</li>
                        <li>⚡ Mitigation Zones</li>
                    </ul>
                    <button class="btn btn-inter mt-auto">Unlock Module</button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 animate__animated animate__zoomIn animate__delay-5s">
                <div class="card p-4 inter-card">
                    <div class="tech-tag">Module 05</div>
                    <div class="chart-preview">📉</div>
                    <h4 class="fw-bold">Fibonacci & Harmonics</h4>
                    <p class="text-secondary">Using math to predict price targets and reversal points with high accuracy.</p>
                    <ul class="list-unstyled mb-4 text-secondary">
                        <li>⚡ Golden Pocket (61.8%)</li>
                        <li>⚡ Gartley & Bat Patterns</li>
                        <li>⚡ Extension Targets</li>
                    </ul>
                    <button class="btn btn-inter mt-auto">Unlock Module</button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 animate__animated animate__zoomIn animate__delay-6s">
                <div class="card p-4 inter-card">
                    <div class="tech-tag">Module 06</div>
                    <div class="chart-preview">🖥️</div>
                    <h4 class="fw-bold">Multi-Timeframe Mastery</h4>
                    <p class="text-secondary">How to align the Daily bias with the 5-minute entry for 1:10+ Reward/Risk.</p>
                    <ul class="list-unstyled mb-4 text-secondary">
                        <li>⚡ Top-Down Analysis</li>
                        <li>⚡ Fractal Market Entry</li>
                        <li>⚡ News Event Navigation</li>
                    </ul>
                    <button class="btn btn-inter mt-auto">Unlock Module</button>
                </div>
            </div>

        </div>
    </div>
    
<?php
include_once ('elements/footer.php');
?>
<?php 
include_once ('elements/header.php');
?>

    <style>
        
        /* Next-Level Glassmorphism Cards */
        .inter-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
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
            background: linear-gradient(45deg, transparent, var(--primary-blur), transparent);
            transform: translateX(-100%);
            transition: 0.6s;
        }

        .inter-card:hover::before { transform: translateX(100%); }

        .inter-card:hover {
            border-color: var(--primary-teal);
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.07);
            box-shadow: 0 0 30px var(--primary-blur);
        }

        .tech-tag {
            font-size: 0.7rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: var(--primary-teal);
            border: 1px solid var(--primary-teal);
            padding: 2px 8px;
            border-radius: 4px;
            margin-bottom: 15px;
            display: inline-block;
        }

        .chart-preview {
            height: 120px;
            background: var(--dark-navy);
            border-radius: 12px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px dashed rgba(255, 255, 255, 0.1);
            font-size: 2rem;
        }

        .btn-inter {
            background: transparent;
            border: 2px solid var(--primary-teal);
            color: var(--dark-navy);
            font-weight: 700;
            padding: 10px;
            width: 100%;
            transition: 0.3s;
        }

        .btn-inter:hover {
            background: var(--primary-teal);
            color: #fff;
            box-shadow: 0 0 15px var(--primary-teal);
        }
    </style>

    <header class="py-5 mt-5">
        <div class="container text-center">
            <h1 class="display-5 fw-bold animate__animated animate__fadeIn">Level Up: <span style="color: var(--primary-teal);">Intermediate</span> Modules</h1>
            <p class="text-secondary">Take your foundational knowledge and turn it into a repeatable trading system.</p>
        </div>
    </header>

    <div class="container pb-5">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6 animate__animated animate__zoomIn">
                <div class="card h-100 p-4 inter-card">
                    <div class="tech-tag">Module 04</div>
                    <div class="chart-preview">📊</div>
                    <h4 class="fw-bold">Smart Money Concepts</h4>
                    <p class="text-secondary small">Deep dive into Order Blocks, Fair Value Gaps (FVG), and Market Structure Shifts.</p>
                    <ul class="list-unstyled mb-4 small text-secondary">
                        <li>⚡ Liquidity Sweeps</li>
                        <li>⚡ Premium vs Discount</li>
                        <li>⚡ Mitigation Zones</li>
                    </ul>
                    <button class="btn btn-inter mt-auto">Unlock Module</button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 animate__animated animate__zoomIn animate__delay-1s">
                <div class="card h-100 p-4 inter-card">
                    <div class="tech-tag">Module 05</div>
                    <div class="chart-preview">📉</div>
                    <h4 class="fw-bold">Fibonacci & Harmonics</h4>
                    <p class="text-secondary small">Using math to predict price targets and reversal points with high accuracy.</p>
                    <ul class="list-unstyled mb-4 small text-secondary">
                        <li>⚡ Golden Pocket (61.8%)</li>
                        <li>⚡ Gartley & Bat Patterns</li>
                        <li>⚡ Extension Targets</li>
                    </ul>
                    <button class="btn btn-inter mt-auto">Unlock Module</button>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 animate__animated animate__zoomIn animate__delay-2s">
                <div class="card h-100 p-4 inter-card">
                    <div class="tech-tag">Module 06</div>
                    <div class="chart-preview">🖥️</div>
                    <h4 class="fw-bold">Multi-Timeframe Mastery</h4>
                    <p class="text-secondary small">How to align the Daily bias with the 5-minute entry for 1:10+ Reward/Risk.</p>
                    <ul class="list-unstyled mb-4 small text-secondary">
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
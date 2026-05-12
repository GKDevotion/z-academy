<?php 
include_once ('elements/header.php');
?>

    <style>

        /* ── HERO ── */
        .hero {
            background: var(--zed-light-bg);
            padding: 80px 0 0;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -120px;
            width: 560px;
            height: 560px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(232, 35, 26, .07) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--zed-primary), transparent);
            opacity: .25;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: .7rem;
            letter-spacing: .2em;
            text-transform: uppercase;
            font-weight: 600;
            color: var(--zed-primary);
            background: var(--zed-light-red-hover);
            border: 1px solid rgba(232, 35, 26, .2);
            border-radius: 20px;
            padding: 5px 16px;
            margin-bottom: 24px;
        }

        .hero-eyebrow .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--zed-primary);
            animation: pulse 1.4s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1)
            }

            50% {
                opacity: .4;
                transform: scale(.7)
            }
        }

        .hero-title {
            
            font-size: clamp(2.8rem, 6vw, 5rem);
            font-weight: 700;
            color: var(--zed-dark-text);
            line-height: 1.1;
            margin-bottom: 16px;
        }

        .hero-title em {
            font-style: italic;
            color: var(--zed-primary);
        }

        .hero-sub {
            font-size: 1.05rem;
            color: var(--zed-secondary);
            max-width: 520px;
            margin: 0 auto 36px;
            line-height: 1.75;
        }

        /* Hero stats strip */
        .hero-stats {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0;
            border: 1px solid var(--zed-icon-color);
            border-radius: 12px;
            overflow: hidden;
            max-width: 680px;
            margin: 0 auto 0;
        }

        .hero-stat {
            flex: 1;
            min-width: 130px;
            padding: 18px 12px;
            text-align: center;
            border-right: 1px solid var(--zed-icon-color);
            background: var(--zed-light-bg);
            transition: background .2s;
        }

        .hero-stat:last-child {
            border-right: none;
        }

        .hero-stat:hover {
            background: var(--zed-light-red-hover);
        }

        .stat-num {
            
            font-size: 1.7rem;
            font-weight: 700;
            color: var(--zed-primary);
            line-height: 1;
            margin-bottom: 3px;
        }

        .stat-lbl {
            font-size: .7rem;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--zed-secondary);
            font-weight: 500;
        }

        /* ── TICKER ── */
        .ticker-wrap {
            background: var(--zed-dark-text);
            overflow: hidden;
            height: 38px;
            display: flex;
            align-items: center;
        }

        .ticker-inner {
            white-space: nowrap;
            animation: tickerMove 30s linear infinite;
            font-size: .75rem;
            font-weight: 600;
            letter-spacing: .1em;
            color: rgba(255, 255, 255, .75);
        }

        .ticker-inner span {
            color: var(--zed-primary);
            margin: 0 6px;
        }

        @keyframes tickerMove {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* ── FILTER BAR ── */
        .filter-wrap {
            background: var(--zed-light-bg);
            border-bottom: 1px solid var(--zed-icon-color);
            padding: 14px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 12px rgba(0, 0, 0, .04);
        }

        .filter-pill {
            background: var(--zed-banner-bg-start);
            border: 1px solid var(--zed-icon-color);
            color: var(--zed-secondary);
            border-radius: 20px;
            padding: 7px 20px;
            font-size: .78rem;
            font-weight: 600;
            letter-spacing: .05em;
            cursor: pointer;
            transition: all .2s;
            white-space: nowrap;
        }

        .filter-pill:hover {
            border-color: var(--zed-primary);
            color: var(--zed-primary);
            background: var(--zed-light-red-hover);
        }

        .filter-pill.active {
            background: var(--zed-primary);
            border-color: var(--zed-primary);
            color: #fff;
        }

        /* ── SECTION LABELS ── */
        .eyebrow {
            font-size: .7rem;
            letter-spacing: .2em;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--zed-primary);
            margin-bottom: 6px;
        }

        .sec-title {
            
            font-size: clamp(1.7rem, 3.5vw, 2.5rem);
            font-weight: 700;
            color: var(--zed-dark-text);
        }

        .sec-title em {
            font-style: italic;
            color: var(--zed-primary);
        }

        /* ── VIDEO CARDS ── */
        .video-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-icon-color);
            border-radius: 14px;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
        }

        .video-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, .12), 0 0 0 2px var(--zed-primary);
        }

        .video-thumb {
            position: relative;
            aspect-ratio: 16/9;
            overflow: hidden;
            background: var(--zed-banner-bg-start);
        }

        /* Animated canvas-style market chart */
        .chart-canvas {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            gap: 2px;
            padding: 20px 16px 0;
        }

        .chart-line-wrap {
            position: absolute;
            inset: 0;
            overflow: hidden;
        }

        .chart-line-svg {
            width: 100%;
            height: 100%;
        }

        .chart-overlay-gradient {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 30%, rgba(255, 255, 255, .5) 100%);
        }

        .animated-bar {
            flex: 1;
            border-radius: 3px 3px 0 0;
            animation: barAnim 2s ease-in-out infinite alternate;
            min-height: 8px;
        }

        @keyframes barAnim {
            from {
                transform: scaleY(1);
            }

            to {
                transform: scaleY(.45);
            }
        }

        .play-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, .15);
            backdrop-filter: blur(0px);
            transition: backdrop-filter .3s, background .3s;
        }

        .video-card:hover .play-overlay {
            backdrop-filter: blur(3px);
            background: rgba(255, 255, 255, .25);
        }

        .play-btn {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--zed-primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 8px 30px rgba(232, 35, 26, .4);
            transition: transform .2s, box-shadow .2s;
        }

        .video-card:hover .play-btn {
            transform: scale(1.12);
            box-shadow: 0 12px 40px rgba(232, 35, 26, .55);
        }

        .video-duration {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(0, 0, 0, .65);
            color: #fff;
            font-size: .7rem;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 20px;
        }

        .video-status {
            position: absolute;
            top: 12px;
            left: 12px;
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .12em;
            padding: 4px 12px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .status-replay {
            background: rgba(0, 0, 0, .6);
            color: #fff;
        }

        .status-live {
            background: var(--zed-primary);
            color: #fff;
        }

        .status-new {
            background: var(--green);
            color: #fff;
        }

        .blink {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: currentColor;
            animation: pulse 1s infinite;
        }

        .video-body {
            padding: 18px;
        }

        .vcategory {
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .vtitle {
            
            font-size: 1rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .vmeta {
            font-size: .75rem;
            color: var(--zed-secondary);
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .vmeta i {
            font-size: .65rem;
        }

        /* ── MODULE CARDS ── */
        .mod-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-icon-color);
            border-radius: 16px;
            padding: 28px;
            position: relative;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s, border-color .3s;
            box-shadow: 0 2px 12px rgba(0, 0, 0, .04);
        }

        .mod-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--accent, var(--zed-primary));
            border-radius: 16px 16px 0 0;
        }

        .mod-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--accent-bg, var(--zed-light-red-hover)) 0%, transparent 70%);
            pointer-events: none;
        }

        .mod-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 48px rgba(0, 0, 0, .1);
            border-color: var(--accent, var(--zed-primary));
        }

        .mod-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
            background: var(--icon-bg, var(--zed-light-red-hover));
            color: var(--accent, var(--zed-primary));
        }

        .mod-title {
            
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 6px;
        }

        .mod-desc {
            font-size: .83rem;
            color: var(--zed-secondary);
            line-height: 1.65;
            margin-bottom: 18px;
        }

        .mod-topics {
            margin-bottom: 20px;
        }

        .topic-row {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: .8rem;
            color: var(--zed-dark-text);
            padding: 6px 0;
            border-bottom: 1px solid var(--zed-icon-color);
        }

        .topic-row:last-child {
            border-bottom: none;
        }

        .topic-row::before {
            content: '';
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--accent, var(--zed-primary));
            flex-shrink: 0;
        }

        .mod-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 16px;
        }

        .mod-meta-chip {
            font-size: .7rem;
            color: var(--zed-secondary);
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .mod-meta-chip i {
            color: var(--accent, var(--zed-primary));
        }

        .btn-module {
            font-size: .78rem;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 20px;
            background: var(--accent, var(--zed-primary));
            color: #fff;
            border: none;
            cursor: pointer;
            transition: opacity .2s, transform .15s;
            display: flex;
            align-items: center;
            gap: 6px;
            letter-spacing: .04em;
        }

        .btn-module:hover {
            opacity: .88;
            transform: scale(.97);
        }

        .tag-chip {
            display: inline-block;
            font-size: .62rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 20px;
            margin-bottom: 12px;
            border: 1px solid var(--accent, var(--zed-primary));
            color: var(--accent, var(--zed-primary));
            background: var(--icon-bg, var(--zed-light-red-hover));
        }

        /* ── PROGRESS TRACKER ── */
        .progress-bar-custom {
            height: 5px;
            border-radius: 3px;
            background: var(--zed-icon-color);
            overflow: hidden;
            margin-top: 12px;
        }

        .progress-fill {
            height: 100%;
            border-radius: 3px;
            background: var(--accent, var(--zed-primary));
            animation: fillUp 1.5s ease forwards;
            transform-origin: left;
            transform: scaleX(0);
        }

        @keyframes fillUp {
            to {
                transform: scaleX(1);
            }
        }

        /* ── SCROLL REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .5s ease, transform .5s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── MISC ── */
        section {
            padding: 80px 0;
        }

        section:nth-child(even) {
            background: var(--zed-banner-bg-start);
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--zed-primary), transparent);
            opacity: .2;
            margin: 0;
        }

        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--zed-primary);
            border-radius: 3px;
        }

        @media (max-width:576px) {
            .hero-stats {
                flex-direction: column;
            }

            .hero-stat {
                border-right: none;
                border-bottom: 1px solid var(--zed-icon-color);
            }
        }
    </style>

    <!-- ── HERO ── -->
    <section class="hero">
        <div class="container text-center">
            <div class="hero-eyebrow">
                <span class="dot"></span>
                Intermediate Module · AI in Trading
            </div>
            <h1 class="hero-title">AI <em>Machine</em> Learning</h1>
            <p class="hero-sub">Explore how artificial intelligence is used to automate trading strategies across Forex,
                Metals, Commodities, Indices &amp; Stocks.</p>

            <div class="hero-stats mx-auto mb-0">
                <div class="hero-stat">
                    <div class="stat-num">6</div>
                    <div class="stat-lbl">Modules</div>
                </div>
                <div class="hero-stat">
                    <div class="stat-num">18h</div>
                    <div class="stat-lbl">Content</div>
                </div>
                <div class="hero-stat">
                    <div class="stat-num">Intermediate</div>
                    <div class="stat-lbl">Level</div>
                </div>
                <div class="hero-stat">
                    <div class="stat-num">Free</div>
                    <div class="stat-lbl">Access</div>
                </div>
            </div>
        </div>
        <div class="ticker-wrap mt-5">
            <div class="ticker-inner">
                FOREX <span>·</span> GOLD &amp; METALS <span>·</span> CRUDE OIL <span>·</span> INDICES <span>·</span>
                EQUITIES <span>·</span> CRYPTO <span>·</span> NEURAL NETWORKS <span>·</span> NLP TRADING <span>·</span>
                DEEP LEARNING <span>·</span> RISK AI <span>·</span> BLOCKCHAIN <span>·</span> REINFORCEMENT LEARNING
                <span>·</span>
                FOREX <span>·</span> GOLD &amp; METALS <span>·</span> CRUDE OIL <span>·</span> INDICES <span>·</span>
                EQUITIES <span>·</span> CRYPTO <span>·</span> NEURAL NETWORKS <span>·</span> NLP TRADING <span>·</span>
                DEEP LEARNING <span>·</span> RISK AI <span>·</span> BLOCKCHAIN <span>·</span> REINFORCEMENT LEARNING
                <span>·</span>
            </div>
        </div>
    </section>

    <!-- ── FILTER ── -->
    <div class="filter-wrap">
        <div class="container">
            <div class="d-flex gap-2 flex-wrap">
                <button class="filter-pill active" data-filter="all">All Modules</button>
                <button class="filter-pill" data-filter="prediction">Predictive</button>
                <button class="filter-pill" data-filter="deep">Deep Learning</button>
                <button class="filter-pill" data-filter="nlp">NLP</button>
                <button class="filter-pill" data-filter="risk">Risk AI</button>
                <button class="filter-pill" data-filter="blockchain">Blockchain</button>
                <button class="filter-pill" data-filter="advanced">Advanced</button>
            </div>
        </div>
    </div>

    <!-- ── VIDEO REPLAYS ── -->
    <section style="background:var(--zed-light-bg);">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <div class="eyebrow">Video Library</div>
                <h2 class="sec-title">Recorded <em>Sessions</em></h2>
                <p class="text-muted mt-2" style="font-size:.9rem">Watch at your own pace. New sessions added every
                    week.</p>
            </div>
            <div class="row g-4">

                <!-- V1 Predictive -->
                <div class="col-sm-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb" style="background:linear-gradient(135deg,#fff5f5 0%,#ffe8e8 100%)">
                            <div class="chart-canvas" id="vc1"></div>
                            <div class="chart-overlay-gradient"></div>
                            <div class="play-overlay">
                                <div class="play-btn"><i class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-status status-new"><span class="blink"></span> NEW</div>
                            <div class="video-duration">52:18</div>
                        </div>
                        <div class="video-body">
                            <div class="vcategory" style="color:var(--zed-primary)"><i class="fas fa-brain me-1"></i>Predictive
                                Models</div>
                            <div class="vtitle">Price Prediction Models &amp; Neural Network Basics in Forex</div>
                            <div class="vmeta">
                                <span><i class="fas fa-user"></i> Dr. Sarah Lin</span>
                                <span><i class="fas fa-eye"></i> 5.4K views</span>
                                <span><i class="fas fa-clock"></i> 52 min</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- V2 Deep Learning -->
                <div class="col-sm-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb" style="background:linear-gradient(135deg,#f0f4ff 0%,#dde8ff 100%)">
                            <div class="chart-canvas" id="vc2"></div>
                            <div class="chart-overlay-gradient"></div>
                            <div class="play-overlay">
                                <div class="play-btn"
                                    style="background:var(--blue);box-shadow:0 8px 30px rgba(26,110,201,.4)"><i
                                        class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-status status-replay"><span></span> REPLAY</div>
                            <div class="video-duration">1:04:32</div>
                        </div>
                        <div class="video-body">
                            <div class="vcategory" style="color:var(--blue)"><i
                                    class="fas fa-network-wired me-1"></i>Deep Learning</div>
                            <div class="vtitle">CNN &amp; RNN Architectures for Time-Series Market Data</div>
                            <div class="vmeta">
                                <span><i class="fas fa-user"></i> Prof. Marco Ricci</span>
                                <span><i class="fas fa-eye"></i> 8.1K views</span>
                                <span><i class="fas fa-clock"></i> 64 min</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- V3 NLP -->
                <div class="col-sm-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb" style="background:linear-gradient(135deg,#f5f0ff 0%,#e8ddff 100%)">
                            <div class="chart-canvas" id="vc3"></div>
                            <div class="chart-overlay-gradient"></div>
                            <div class="play-overlay">
                                <div class="play-btn"
                                    style="background:var(--purple);box-shadow:0 8px 30px rgba(124,58,237,.4)"><i
                                        class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-status status-replay">REPLAY</div>
                            <div class="video-duration">47:55</div>
                        </div>
                        <div class="video-body">
                            <div class="vcategory" style="color:var(--purple)"><i class="fas fa-comments me-1"></i>NLP
                            </div>
                            <div class="vtitle">Sentiment Analysis of News &amp; Tweets for Trade Signals</div>
                            <div class="vmeta">
                                <span><i class="fas fa-user"></i> Aisha Patel</span>
                                <span><i class="fas fa-eye"></i> 6.7K views</span>
                                <span><i class="fas fa-clock"></i> 48 min</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- V4 Risk -->
                <div class="col-sm-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb" style="background:linear-gradient(135deg,#f0fff5 0%,#d9f5e5 100%)">
                            <div class="chart-canvas" id="vc4"></div>
                            <div class="chart-overlay-gradient"></div>
                            <div class="play-overlay">
                                <div class="play-btn"
                                    style="background:var(--green);box-shadow:0 8px 30px rgba(26,154,74,.4)"><i
                                        class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-status status-replay">REPLAY</div>
                            <div class="video-duration">38:20</div>
                        </div>
                        <div class="video-body">
                            <div class="vcategory" style="color:var(--green)"><i class="fas fa-shield-alt me-1"></i>Risk
                                AI</div>
                            <div class="vtitle">AI-Powered Stop-Loss &amp; Portfolio Optimization Systems</div>
                            <div class="vmeta">
                                <span><i class="fas fa-user"></i> James Okafor</span>
                                <span><i class="fas fa-eye"></i> 4.2K views</span>
                                <span><i class="fas fa-clock"></i> 38 min</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- V5 Blockchain -->
                <div class="col-sm-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb" style="background:linear-gradient(135deg,#fffbf0 0%,#ffefd9 100%)">
                            <div class="chart-canvas" id="vc5"></div>
                            <div class="chart-overlay-gradient"></div>
                            <div class="play-overlay">
                                <div class="play-btn"
                                    style="background:var(--gold);box-shadow:0 8px 30px rgba(201,136,26,.4)"><i
                                        class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-status status-replay">REPLAY</div>
                            <div class="video-duration">55:10</div>
                        </div>
                        <div class="video-body">
                            <div class="vcategory" style="color:var(--gold)"><i class="fas fa-cubes me-1"></i>Blockchain
                                + AI</div>
                            <div class="vtitle">Smart Contracts &amp; AI-Driven Fraud Detection in DeFi</div>
                            <div class="vmeta">
                                <span><i class="fas fa-user"></i> Lena Zhao</span>
                                <span><i class="fas fa-eye"></i> 7.9K views</span>
                                <span><i class="fas fa-clock"></i> 55 min</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- V6 LIVE -->
                <div class="col-sm-6 col-lg-4 reveal">
                    <div class="video-card" style="border-color:rgba(232,35,26,.35)">
                        <div class="video-thumb" style="background:linear-gradient(135deg,#fff5f5 0%,#ffdede 100%)">
                            <div class="chart-canvas" id="vc6"></div>
                            <div class="chart-overlay-gradient"></div>
                            <div class="play-overlay" style="background:rgba(232,35,26,.08)">
                                <div class="play-btn" style="background:var(--zed-primary)"><i
                                        class="fas fa-broadcast-tower"></i></div>
                            </div>
                            <div class="video-status status-live"><span class="blink"></span> LIVE SOON</div>
                            <div class="video-duration" style="background:var(--zed-primary)">LIVE</div>
                        </div>
                        <div class="video-body">
                            <div class="vcategory" style="color:var(--zed-primary)"><i class="fas fa-rocket me-1"></i>Advanced
                                AI</div>
                            <div class="vtitle">Reinforcement Learning &amp; Multi-Strategy Systems — Live Session</div>
                            <div class="vmeta">
                                <span><i class="fas fa-user"></i> Prof. David Kim</span>
                                <span><i class="fas fa-calendar"></i> June 11, 2026</span>
                                <span><i class="fas fa-clock"></i> 10:30 PM IST</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- ── MODULES ── -->
    <section style="background:var(--zed-banner-bg-start)">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <div class="eyebrow">Course Curriculum</div>
                <h2 class="sec-title">Explore the <em>Modules</em></h2>
            </div>
            <div class="row g-4" id="mod-grid">

                <!-- M1 Predictive -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="prediction">
                    <div class="mod-card"
                        style="--accent:var(--zed-primary);--accent-bg:var(--zed-light-red-hover);--icon-bg:var(--zed-light-red-hover)">
                        <div class="tag-chip">Module 01</div>
                        <div class="mod-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="mod-title">Predictive Models in Trading</div>
                        <p class="mod-desc">Build models to predict market movements and trends across Forex, Metals,
                            and Indices using machine learning techniques.</p>
                        <div class="mod-topics">
                            <div class="topic-row">Price Prediction Models</div>
                            <div class="topic-row">Trend Forecasting</div>
                            <div class="topic-row">Sentiment Analysis</div>
                            <div class="topic-row">Neural Networks Basics</div>
                            <div class="topic-row">Model Accuracy &amp; Limitations</div>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width:78%"></div>
                        </div>
                        <div class="mod-footer mt-3">
                            <div class="d-flex gap-3">
                                <span class="mod-meta-chip"><i class="fas fa-play-circle"></i> 8 videos</span>
                                <span class="mod-meta-chip"><i class="fas fa-clock"></i> 4h 20m</span>
                            </div>
                            <button class="btn-module"><i class="fas fa-arrow-right"></i> Start</button>
                        </div>
                    </div>
                </div>

                <!-- M2 Deep Learning -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="deep">
                    <div class="mod-card"
                        style="--accent:var(--blue);--accent-bg:rgba(26,110,201,.08);--icon-bg:#eef3ff">
                        <div class="tag-chip" style="border-color:var(--blue);color:var(--blue);background:#eef3ff">
                            Module 02</div>
                        <div class="mod-icon" style="background:#eef3ff;color:var(--blue)"><i
                                class="fas fa-project-diagram"></i></div>
                        <div class="mod-title">Deep Learning Fundamentals</div>
                        <p class="mod-desc">Dive into advanced AI models like neural networks and deep learning
                            architectures applied to financial market data.</p>
                        <div class="mod-topics">
                            <div class="topic-row">Introduction to Neural Networks</div>
                            <div class="topic-row">CNN &amp; RNN Basics</div>
                            <div class="topic-row">LSTM for Time Series</div>
                            <div class="topic-row">AI Model Training</div>
                            <div class="topic-row">Use Cases in Finance</div>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width:60%"></div>
                        </div>
                        <div class="mod-footer mt-3">
                            <div class="d-flex gap-3">
                                <span class="mod-meta-chip"><i class="fas fa-play-circle"></i> 10 videos</span>
                                <span class="mod-meta-chip"><i class="fas fa-clock"></i> 5h 45m</span>
                            </div>
                            <button class="btn-module" style="background:var(--blue)"><i class="fas fa-arrow-right"></i>
                                Start</button>
                        </div>
                    </div>
                </div>

                <!-- M3 NLP -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="nlp">
                    <div class="mod-card"
                        style="--accent:var(--purple);--accent-bg:rgba(124,58,237,.08);--icon-bg:#f4f0ff">
                        <div class="tag-chip" style="border-color:var(--purple);color:var(--purple);background:#f4f0ff">
                            Module 03</div>
                        <div class="mod-icon" style="background:#f4f0ff;color:var(--purple)"><i
                                class="fas fa-comments"></i></div>
                        <div class="mod-title">Natural Language Processing (NLP)</div>
                        <p class="mod-desc">Analyze news, tweets, and financial reports using AI to extract actionable
                            trading signals from text data.</p>
                        <div class="mod-topics">
                            <div class="topic-row">Text Data Processing</div>
                            <div class="topic-row">Sentiment Analysis</div>
                            <div class="topic-row">News Impact on Markets</div>
                            <div class="topic-row">Twitter &amp; Social Media Signals</div>
                            <div class="topic-row">AI-based News Trading</div>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width:45%"></div>
                        </div>
                        <div class="mod-footer mt-3">
                            <div class="d-flex gap-3">
                                <span class="mod-meta-chip"><i class="fas fa-play-circle"></i> 7 videos</span>
                                <span class="mod-meta-chip"><i class="fas fa-clock"></i> 3h 50m</span>
                            </div>
                            <button class="btn-module" style="background:var(--purple)"><i
                                    class="fas fa-arrow-right"></i> Start</button>
                        </div>
                    </div>
                </div>

                <!-- M4 Risk -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="risk">
                    <div class="mod-card"
                        style="--accent:var(--green);--accent-bg:rgba(26,154,74,.08);--icon-bg:#edfff4">
                        <div class="tag-chip" style="border-color:var(--green);color:var(--green);background:#edfff4">
                            Module 04</div>
                        <div class="mod-icon" style="background:#edfff4;color:var(--green)"><i
                                class="fas fa-shield-alt"></i></div>
                        <div class="mod-title">Risk Management using AI</div>
                        <p class="mod-desc">Use AI to minimize trading risks and optimize strategies across all asset
                            classes with real-time alert systems.</p>
                        <div class="mod-topics">
                            <div class="topic-row">Risk Prediction Models</div>
                            <div class="topic-row">Portfolio Optimization</div>
                            <div class="topic-row">Volatility Analysis</div>
                            <div class="topic-row">Stop-loss Optimization</div>
                            <div class="topic-row">AI-based Alerts</div>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width:30%"></div>
                        </div>
                        <div class="mod-footer mt-3">
                            <div class="d-flex gap-3">
                                <span class="mod-meta-chip"><i class="fas fa-play-circle"></i> 9 videos</span>
                                <span class="mod-meta-chip"><i class="fas fa-clock"></i> 4h 10m</span>
                            </div>
                            <button class="btn-module" style="background:var(--green)"><i
                                    class="fas fa-arrow-right"></i> Start</button>
                        </div>
                    </div>
                </div>

                <!-- M5 Blockchain -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="blockchain">
                    <div class="mod-card"
                        style="--accent:var(--gold);--accent-bg:rgba(201,136,26,.08);--icon-bg:#fffbf0">
                        <div class="tag-chip" style="border-color:var(--gold);color:var(--gold);background:#fffbf0">
                            Module 05</div>
                        <div class="mod-icon" style="background:#fffbf0;color:var(--gold)"><i class="fas fa-cubes"></i>
                        </div>
                        <div class="mod-title">AI + Blockchain Integration</div>
                        <p class="mod-desc">Explore how AI and blockchain work together in modern finance, from DeFi to
                            fraud detection and smart contracts.</p>
                        <div class="mod-topics">
                            <div class="topic-row">AI in Crypto Trading</div>
                            <div class="topic-row">Smart Contracts + AI</div>
                            <div class="topic-row">Fraud Detection</div>
                            <div class="topic-row">Decentralized AI Models</div>
                            <div class="topic-row">Future Innovations</div>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width:20%"></div>
                        </div>
                        <div class="mod-footer mt-3">
                            <div class="d-flex gap-3">
                                <span class="mod-meta-chip"><i class="fas fa-play-circle"></i> 6 videos</span>
                                <span class="mod-meta-chip"><i class="fas fa-clock"></i> 3h 30m</span>
                            </div>
                            <button class="btn-module" style="background:var(--gold)"><i class="fas fa-arrow-right"></i>
                                Start</button>
                        </div>
                    </div>
                </div>

                <!-- M6 Advanced -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="advanced">
                    <div class="mod-card"
                        style="--accent:var(--zed-primary);--accent-bg:var(--zed-light-red-hover);--icon-bg:var(--zed-light-red-hover)">
                        <div class="tag-chip">Module 06 · Pro</div>
                        <div class="mod-icon"><i class="fas fa-rocket"></i></div>
                        <div class="mod-title">Advanced AI Trading Strategies</div>
                        <p class="mod-desc">Professional-level AI techniques used by hedge funds and institutions for
                            systematic multi-strategy trading.</p>
                        <div class="mod-topics">
                            <div class="topic-row">Reinforcement Learning</div>
                            <div class="topic-row">Algorithm Optimization</div>
                            <div class="topic-row">Multi-Strategy Systems</div>
                            <div class="topic-row">Market Pattern Recognition</div>
                            <div class="topic-row">AI Portfolio Management</div>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width:10%"></div>
                        </div>
                        <div class="mod-footer mt-3">
                            <div class="d-flex gap-3">
                                <span class="mod-meta-chip"><i class="fas fa-play-circle"></i> 12 videos</span>
                                <span class="mod-meta-chip"><i class="fas fa-clock"></i> 6h 00m</span>
                            </div>
                            <button class="btn-module"><i class="fas fa-lock-open"></i> Unlock</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        // ── Build animated chart bars ──
        function buildChart(id, color, heights) {
            const el = document.getElementById(id);
            if (!el) return;
            heights.forEach((h, i) => {
                const bar = document.createElement('div');
                bar.className = 'animated-bar';
                bar.style.cssText = `
      height:${h}%;
      background:${color};
      opacity:0.55;
      animation-delay:${i * 0.12}s;
      animation-duration:${1.6 + Math.random() * 1.4}s;
    `;
                el.appendChild(bar);
            });
        }
        const h1 = [35, 55, 40, 70, 45, 80, 30, 65, 50, 75, 35, 60, 85, 45, 70, 30, 55, 90, 40, 65];
        const h2 = [60, 40, 75, 35, 80, 50, 65, 30, 85, 45, 70, 55, 40, 90, 35, 60, 75, 45, 80, 50];
        const h3 = [45, 80, 35, 65, 50, 75, 40, 90, 30, 70, 55, 85, 45, 60, 70, 35, 80, 50, 65, 40];
        const h4 = [70, 45, 85, 30, 65, 50, 80, 40, 75, 35, 90, 55, 45, 70, 60, 80, 35, 65, 50, 75];
        const h5 = [50, 75, 40, 85, 35, 70, 55, 80, 45, 90, 30, 65, 75, 50, 85, 40, 70, 35, 80, 55];
        const h6 = [65, 35, 80, 50, 75, 40, 90, 30, 70, 55, 85, 45, 60, 80, 35, 65, 50, 85, 40, 75];
        buildChart('vc1', '#E8231A', h1);
        buildChart('vc2', '#1a6ec9', h2);
        buildChart('vc3', '#7c3aed', h3);
        buildChart('vc4', '#1a9a4a', h4);
        buildChart('vc5', '#c9881a', h5);
        buildChart('vc6', '#E8231A', h6);

        // ── Scroll reveal ──
        const reveals = document.querySelectorAll('.reveal');
        const obs = new IntersectionObserver((entries) => {
            entries.forEach((e, i) => {
                if (e.isIntersecting) {
                    setTimeout(() => e.target.classList.add('in'), i * 70);
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.08 });
        reveals.forEach(el => obs.observe(el));

        // ── Filter pills ──
        document.querySelectorAll('.filter-pill').forEach(pill => {
            pill.addEventListener('click', function () {
                document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                const f = this.dataset.filter;
                document.querySelectorAll('#mod-grid > [data-cat]').forEach(c => {
                    c.style.display = (f === 'all' || c.dataset.cat === f) ? '' : 'none';
                });
            });
        });

        // ── Progress bar reveal on scroll ──
        const progObs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.querySelectorAll('.progress-fill').forEach(bar => {
                        bar.style.animation = 'none';
                        bar.offsetHeight; // reflow
                        bar.style.animation = 'fillUp 1.4s ease forwards';
                    });
                    progObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.2 });
        document.querySelectorAll('.mod-card').forEach(c => progObs.observe(c));
    </script>
<?php
include_once ('elements/footer.php');
?>
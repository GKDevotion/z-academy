<?php 
include_once ('elements/header.php');
?>

    <style>
        
        /* ── HERO ────────────────────────────────── */
        .hero {
            padding: 96px 0 70px;
            text-align: center;
            position: relative;
            overflow: hidden;
            background: var(--zed-backgound-color)
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(0, 0, 0, .025) 40px), repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(0, 0, 0, .025) 40px);
            pointer-events: none
        }

        .hero-glow {
            position: absolute;
            top: -80px;
            left: 50%;
            transform: translateX(-50%);
            width: 700px;
            height: 400px;
            background: radial-gradient(ellipse at center, rgba(232, 17, 26, .08) 0%, transparent 70%);
            pointer-events: none
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .55rem;
            background: var(--zed-primary);
            color: #fff;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .15em;
            text-transform: uppercase;
            padding: .36rem 1rem;
            border-radius: 50px;
            margin-bottom: 1.5rem;
            animation: dropIn .55s ease both;
            box-shadow: 0 5px 18px var(--zed-light-red-hover)
        }

        .hero h1 {
            
            font-size: clamp(2.6rem, 6.5vw, 5rem);
            color: var(--zed-dark-text);
            line-height: 1.04;
            animation: riseUp .7s .1s ease both
        }

        .hero h1 em {
            font-style: normal;
            color: var(--zed-primary)
        }

        .hero p.tagline {
            font-size: 1.05rem;
            color: var(--zed-secondary);
            max-width: 520px;
            margin: 1.1rem auto 2rem;
            line-height: 1.65;
            font-weight: 400;
            animation: riseUp .7s .2s ease both
        }

        /* filter tabs */
        .filter-tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: .5rem;
            margin-bottom: .5rem;
            animation: riseUp .7s .3s ease both
        }

        .ftab {
            display: flex;
            align-items: center;
            gap: .45rem;
            background: var(--zed-light-bg);
            border: 1.5px solid var(--zed-border-color);
            border-radius: 50px;
            padding: .45rem 1.1rem;
            font-size: .82rem;
            font-weight: 600;
            color: var(--zed-secondary);
            cursor: pointer;
            transition: all .25s;
            user-select: none
        }

        .ftab:hover {
            border-color: rgba(232, 17, 26, .35);
            color: var(--zed-dark-text)
        }

        .ftab.active {
            background: var(--zed-primary);
            border-color: var(--zed-primary);
            color: #fff;
            box-shadow: 0 4px 16px var(--zed-light-red-hover)
        }

        .ftab .fi {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .7rem;
            flex-shrink: 0
        }

        .fi-all {
            background: rgba(232, 17, 26, .1);
            color: var(--zed-primary)
        }

        .fi-forex {
            background: rgba(37, 99, 235, .1);
            color: var(--blue)
        }

        .fi-metal {
            background: rgba(240, 165, 0, .1);
            color: var(--gold)
        }

        .fi-commodity {
            background: rgba(0, 184, 122, .1);
            color: var(--zed-success-hover)
        }

        .fi-indices {
            background: rgba(124, 58, 237, .1);
            color: var(--purple)
        }

        .fi-stocks {
            background: rgba(8, 145, 178, .1);
            color: var(--teal)
        }

        .ftab.active .fi {
            background: rgba(255, 255, 255, .2);
            color: #fff
        }

        /* stat row */
        .stat-row {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
            margin-top: 2.4rem;
            padding-top: 2rem;
            border-top: 1px solid var(--zed-border-color);
            animation: riseUp .7s .4s ease both
        }

        .s-stat .num {
            
            font-size: 1.8rem;
            color: var(--zed-dark-text)
        }

        .s-stat .num span {
            color: var(--zed-primary)
        }

        .s-stat .lbl {
            font-size: .7rem;
            font-weight: 600;
            color: var(--zed-secondary);
            letter-spacing: .08em;
            text-transform: uppercase
        }

        @keyframes dropIn {
            from {
                opacity: 0;
                transform: translateY(-12px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes riseUp {
            from {
                opacity: 0;
                transform: translateY(26px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .btn-join {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            border-radius: 2px;
            padding: 10px 24px;
            font-weight: 600;
            font-size: .82rem;
            letter-spacing: .08em;
            text-transform: uppercase;
            transition: background .2s, transform .1s;
            width: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-join:hover {
            background: var(--zed-primary-hover);
            transform: scale(.98);
        }

        /* Mobile tweaks */
        @media (max-width: 576px) {
            .hero-stats {
                gap: 20px;
            }

            .countdown-bar {
                justify-content: center;
            }

            .contrib-header {
                flex-direction: column;
                gap: 10px;
            }
        }

        /* ───── SECTION LABEL ───── */
        .section-eyebrow {
            font-size: .72rem;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--zed-primary);
            font-weight: 600;
            margin-bottom: 6px;
        }

        .section-title {
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            color: #fff;
        }

        /* ───── SCROLL REVEAL ───── */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .55s ease, transform .55s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-glow"></div>
        <div class="container position-relative" style="z-index:1">
            <div class="hero-badge"><i class="bi bi-calendar-event-fill"></i> June 2026 Schedule</div>
            <h1>Webinar <em>Contributors</em></h1>
            <p class="tagline">Join our upcoming live webinars to learn powerful trading strategies across Forex,
                Metals, Commodities, Indices &amp; Stocks — from experts.</p>

            <!-- filter tabs -->
            <div class="filter-tabs" id="filterTabs">
                <div class="ftab active" data-cat="all"><span class="fi fi-all"><i
                            class="bi bi-grid-3x3-gap-fill"></i></span>All Markets</div>
                <div class="ftab" data-cat="forex"><span class="fi fi-forex"><i class="bi bi-globe2"></i></span>Forex
                </div>
                <div class="ftab" data-cat="metal"><span class="fi fi-metal"><i class="bi bi-gem"></i></span>Metals
                </div>
                <div class="ftab" data-cat="commodity"><span class="fi fi-commodity"><i
                            class="bi bi-droplet-fill"></i></span>Commodities</div>
                <div class="ftab" data-cat="indices"><span class="fi fi-indices"><i
                            class="bi bi-bar-chart-fill"></i></span>Indices</div>
                <div class="ftab" data-cat="stocks"><span class="fi fi-stocks"><i
                            class="bi bi-graph-up-arrow"></i></span>Stocks</div>
            </div>

            <div class="stat-row">
                <div class="s-stat">
                    <div class="num">10<span>+</span></div>
                    <div class="lbl">Expert Contributors</div>
                </div>
                <div class="s-stat">
                    <div class="num">6<span>+</span></div>
                    <div class="lbl">Market Verticals</div>
                </div>
                <div class="s-stat">
                    <div class="num">Live</div>
                    <div class="lbl">June 11, 2026</div>
                </div>
                <div class="s-stat">
                    <div class="num">Free<span>*</span></div>
                    <div class="lbl">Registration</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ COUNTDOWN ═══ -->
    <style>
        .countdown-bar {
            background: linear-gradient(135deg, #1a0a09 0%, #200c0b 100%);
            border: 1px solid var(--zed-light-red-hover);
            border-radius: 4px;
            padding: 28px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .countdown-unit {
            text-align: center;
            min-width: 64px;
        }

        .countdown-num {
            font-size: 2.8rem;
            color: var(--zed-primary);
            line-height: 1;
            display: block;
        }

        .countdown-lbl {
            font-size: .65rem;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: var(--zed-secondary);
        }

        .countdown-sep {
            font-size: 2.2rem;
            color: var(--zed-primary);
            opacity: .5;
            align-self: flex-start;
            padding-top: 4px;
        }
    </style>

    <div class="container mt-5 reveal">
        <div class="countdown-bar">
            <div>
                <div class="section-eyebrow">Next Live Session</div>
                <div style="font-family:'DM Serif Display',serif; font-size:1.4rem; color:#fff;">June 11, 2026 · 10:30
                    PM IST</div>
            </div>
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <div class="countdown-unit"><span class="countdown-num" id="cd-days">03</span><span
                        class="countdown-lbl">Days</span></div>
                <div class="countdown-sep">:</div>
                <div class="countdown-unit"><span class="countdown-num" id="cd-hrs">14</span><span
                        class="countdown-lbl">Hours</span></div>
                <div class="countdown-sep">:</div>
                <div class="countdown-unit"><span class="countdown-num" id="cd-min">27</span><span
                        class="countdown-lbl">Mins</span></div>
                <div class="countdown-sep">:</div>
                <div class="countdown-unit"><span class="countdown-num" id="cd-sec">45</span><span
                        class="countdown-lbl">Secs</span></div>
            </div>
            <button class="btn-join" style="width:auto; padding: 12px 32px;">
                <i class="fa fa-calendar-check"></i> Register Free
            </button>
        </div>
    </div>

    <style>
        /* ───── VIDEO LISTING ───── */
        .video-card {
            background: var(--zed-dark-text);
            border: 1px solid var(--zed-border-color);
            border-radius: 4px;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s;
            cursor: pointer;
        }

        .video-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, .6), 0 0 0 1px var(--zed-primary);
        }

        .video-thumb {
            position: relative;
            aspect-ratio: 16/9;
            overflow: hidden;
            background: #111;
        }

        .video-thumb-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Animated chart background for video thumbs */
        .video-thumb-anim {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            padding: 12px;
            overflow: hidden;
        }

        .chart-bar-group {
            display: flex;
            align-items: flex-end;
            gap: 3px;
            width: 100%;
            height: 100%;
        }

        .chart-bar {
            flex: 1;
            border-radius: 2px 2px 0 0;
            animation: barPulse 2.4s ease-in-out infinite;
            background: var(--zed-primary);
            opacity: .6;
        }

        @keyframes barPulse {

            0%,
            100% {
                transform: scaleY(1);
            }

            50% {
                transform: scaleY(.55);
            }
        }

        .video-play-btn {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, .4);
            transition: background .2s;
        }

        .video-card:hover .video-play-btn {
            background: rgba(232, 35, 26, .25);
        }

        .play-circle {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .12);
            border: 2px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: #fff;
            backdrop-filter: blur(4px);
            transition: transform .2s, background .2s;
        }

        .video-card:hover .play-circle {
            transform: scale(1.15);
            background: var(--zed-primary);
            border-color: var(--zed-primary);
        }

        .video-duration {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(0, 0, 0, .75);
            color: #fff;
            font-size: .72rem;
            padding: 2px 8px;
            border-radius: 2px;
            font-weight: 600;
        }

        .video-live-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: var(--zed-primary);
            color: #fff;
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .1em;
            padding: 3px 10px;
            border-radius: 2px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .live-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #fff;
            animation: liveBlink 1s ease-in-out infinite;
        }

        @keyframes liveBlink {

            0%,
            100% {
                opacity: 1
            }

            50% {
                opacity: .3
            }
        }

        .video-info {
            padding: 16px;
        }

        .video-category-tag {
            font-size: .65rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--zed-primary);
            font-weight: 700;
            margin-bottom: 6px;
        }

        .video-title {
            font-size: 1rem;
            color: #fff;
            line-height: 1.4;
            margin-bottom: 8px;
        }

        .video-meta {
            font-size: .75rem;
            color: var(--muted);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .video-meta i {
            color: var(--zed-primary);
            font-size: .7rem;
        }

        /* ───── CONTRIBUTOR CARDS ───── */
        .contrib-card {
            background: var(--zed-dark-text);
            border: 1px solid var(--zed-border-color);
            border-top: 3px solid var(--zed-primary);
            border-radius: 4px;
            padding: 24px;
            transition: transform .3s, box-shadow .3s;
            position: relative;
            overflow: hidden;
        }

        .contrib-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top left, rgba(232, 35, 26, .06) 0%, transparent 65%);
            pointer-events: none;
        }

        .contrib-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, .5), 0 0 0 1px rgba(232, 35, 26, .3);
        }

        .contrib-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 14px;
        }

        .contrib-avatar {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: var(--zed-dark-text);
            border: 2px solid var(--zed-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            color: var(--zed-primary);
            flex-shrink: 0;
        }

        .contrib-name {
            font-size: 1.15rem;
            color: #fff;
            margin-bottom: 2px;
        }

        .contrib-role-badge {
            font-size: .62rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 2px;
        }

        .badge-red {
            background: rgba(232, 35, 26, .15);
            color: var(--zed-primary);
            border: 1px solid rgba(232, 35, 26, .3);
        }

        .badge-gold {
            background: rgba(201, 168, 76, .15);
            color: var(--accent-gold);
            border: 1px solid rgba(201, 168, 76, .3);
        }

        .badge-blue {
            background: rgba(59, 130, 246, .15);
            color: #60a5fa;
            border: 1px solid rgba(59, 130, 246, .3);
        }

        .badge-green {
            background: rgba(34, 197, 94, .15);
            color: #4ade80;
            border: 1px solid rgba(34, 197, 94, .3);
        }

        .badge-purple {
            background: rgba(168, 85, 247, .15);
            color: #c084fc;
            border: 1px solid rgba(168, 85, 247, .3);
        }

        .contrib-desc {
            font-size: .84rem;
            color: var(--muted);
            line-height: 1.65;
            margin-bottom: 16px;
        }

        .contrib-topics {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-bottom: 18px;
        }

        .topic-chip {
            font-size: .7rem;
            background: var(--zed-dark-text);
            border: 1px solid var(--zed-border-color);
            color: #aaa;
            border-radius: 2px;
            padding: 4px 10px;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: border-color .2s, color .2s;
        }

        .contrib-card:hover .topic-chip {
            border-color: rgba(232, 35, 26, .3);
            color: #ccc;
        }

        .topic-chip i {
            color: var(--zed-primary);
            font-size: .6rem;
        }

        .contrib-meta {
            background: var(--zed-dark-text);
            border-radius: 3px;
            padding: 10px 14px;
            display: flex;
            gap: 16px;
            margin-bottom: 18px;
            border: 1px solid var(--zed-border-color);
        }

        .meta-item {
            font-size: .75rem;
            color: var(--muted);
        }

        .meta-item strong {
            color: var(--zed-primary);
            font-weight: 700;
            display: block;
            font-size: .8rem;
        }

        .btn-join {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            border-radius: 2px;
            padding: 10px 24px;
            font-weight: 600;
            font-size: .82rem;
            letter-spacing: .08em;
            text-transform: uppercase;
            transition: background .2s, transform .1s;
            width: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-join:hover {
            background: var(--zed-primary-dark);
            transform: scale(.98);
        }
    </style>
    <!-- ═══ VIDEO REPLAY SECTION ═══ -->
    <section>
        <div class="container">
            <div class="text-center mb-5 reveal">
                <div class="section-eyebrow">On-Demand Learning</div>
                <h2 class="section-title">Past Webinar <em>Replays</em></h2>
            </div>
            <div class="row g-4">

                <!-- Video 1 -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb">
                            <div class="video-thumb-anim">
                                <div class="chart-bar-group" id="chart1"></div>
                            </div>
                            <div class="video-live-badge">
                                <div class="live-dot"></div> REPLAY
                            </div>
                            <div class="video-play-btn">
                                <div class="play-circle"><i class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-duration">48:32</div>
                        </div>
                        <div class="video-info">
                            <div class="video-category-tag"><i class="fas fa-circle-dot me-1"></i>Forex</div>
                            <div class="video-title">Mastering EUR/USD in a High-Volatility Environment</div>
                            <div class="video-meta">
                                <span><i class="fas fa-user"></i> Daniel Wosenga</span>
                                <span><i class="fas fa-eye"></i> 4.2K views</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb">
                            <div class="video-thumb-anim" style="--chart-col:#c9a84c">
                                <div class="chart-bar-group" id="chart2" style="--bar-color:#c9a84c"></div>
                            </div>
                            <div class="video-live-badge" style="background:var(--accent-gold);color:#000">
                                <div class="live-dot" style="background:#000"></div> REPLAY
                            </div>
                            <div class="video-play-btn">
                                <div class="play-circle"><i class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-duration">61:15</div>
                        </div>
                        <div class="video-info">
                            <div class="video-category-tag" style="color:var(--accent-gold)"><i
                                    class="fas fa-circle-dot me-1"></i>Gold &amp; Metals</div>
                            <div class="video-title">Gold Price Cycles: Institutional Moves &amp; Smart Money Flow</div>
                            <div class="video-meta">
                                <span><i class="fas fa-user"></i> Michael Chen</span>
                                <span><i class="fas fa-eye"></i> 6.8K views</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb">
                            <div class="video-thumb-anim">
                                <div class="chart-bar-group" id="chart3" style="--bar-color:#60a5fa"></div>
                            </div>
                            <div class="video-live-badge" style="background:#1d4ed8">
                                <div class="live-dot"></div> REPLAY
                            </div>
                            <div class="video-play-btn">
                                <div class="play-circle"><i class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-duration">55:44</div>
                        </div>
                        <div class="video-info">
                            <div class="video-category-tag" style="color:#60a5fa"><i
                                    class="fas fa-circle-dot me-1"></i>Crypto</div>
                            <div class="video-title">DeFi 2.0: On-Chain Analysis &amp; Altcoin Season Signals</div>
                            <div class="video-meta">
                                <span><i class="fas fa-user"></i> Sarah Johnson</span>
                                <span><i class="fas fa-eye"></i> 9.1K views</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb">
                            <div class="video-thumb-anim">
                                <div class="chart-bar-group" id="chart4" style="--bar-color:#4ade80"></div>
                            </div>
                            <div class="video-live-badge" style="background:#15803d">
                                <div class="live-dot"></div> REPLAY
                            </div>
                            <div class="video-play-btn">
                                <div class="play-circle"><i class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-duration">39:10</div>
                        </div>
                        <div class="video-info">
                            <div class="video-category-tag" style="color:#4ade80"><i
                                    class="fas fa-circle-dot me-1"></i>Indices</div>
                            <div class="video-title">S&amp;P 500 Breakout Trading: Levels That Matter in Q2</div>
                            <div class="video-meta">
                                <span><i class="fas fa-user"></i> Priya Sharma</span>
                                <span><i class="fas fa-eye"></i> 3.5K views</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video 5 -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="video-card">
                        <div class="video-thumb">
                            <div class="video-thumb-anim">
                                <div class="chart-bar-group" id="chart5" style="--bar-color:#c084fc"></div>
                            </div>
                            <div class="video-live-badge" style="background:#7c3aed">
                                <div class="live-dot"></div> REPLAY
                            </div>
                            <div class="video-play-btn">
                                <div class="play-circle"><i class="fas fa-play ms-1"></i></div>
                            </div>
                            <div class="video-duration">43:58</div>
                        </div>
                        <div class="video-info">
                            <div class="video-category-tag" style="color:#c084fc"><i
                                    class="fas fa-circle-dot me-1"></i>Derivatives</div>
                            <div class="video-title">Options Strategies for Volatile Markets: Straddles &amp; Spreads
                            </div>
                            <div class="video-meta">
                                <span><i class="fas fa-user"></i> David Miller</span>
                                <span><i class="fas fa-eye"></i> 5.3K views</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video 6 – LIVE SOON -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="video-card" style="border-color:rgba(232,35,26,.4)">
                        <div class="video-thumb">
                            <div class="video-thumb-anim">
                                <div class="chart-bar-group" id="chart6"></div>
                            </div>
                            <div class="video-live-badge" style="animation:liveBadgePulse 1.2s ease-in-out infinite">
                                <div class="live-dot"></div> LIVE SOON
                            </div>
                            <div class="video-play-btn" style="background:rgba(232,35,26,.15)">
                                <div class="play-circle" style="background:var(--zed-primary);border-color:var(--zed-primary)"><i
                                        class="fas fa-broadcast-tower"></i></div>
                            </div>
                            <div class="video-duration" style="background:var(--zed-primary)">LIVE</div>
                        </div>
                        <div class="video-info">
                            <div class="video-category-tag"><i class="fas fa-circle-dot me-1"></i>Forex Strategy</div>
                            <div class="video-title">Central Bank Policies &amp; Currency Pairs: Ahmed Khan Live</div>
                            <div class="video-meta">
                                <span><i class="fas fa-user"></i> Ahmed Khan</span>
                                <span><i class="fas fa-calendar"></i> June 11, 2026</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="divider-line"></div>

    <!-- ═══ CONTRIBUTORS ═══ -->
    <section>
        <div class="container">
            <div class="text-center mb-5 reveal">
                <div class="section-eyebrow">Our Educators</div>
                <h2 class="section-title">Meet the <em>Contributors</em></h2>
            </div>
            <div class="row g-4" id="contrib-grid">

                <!-- Daniel Wosenga -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="forex macro">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar">DW</div>
                                <div>
                                    <div class="contrib-name">Daniel Wosenga</div>
                                    <div class="contrib-role-badge badge-red">Market Analyst</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Specializes in global macro trends and forex market strategies with
                            years of institutional experience.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Forex Market Analysis</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Economic Indicators</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Risk Management</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Trading Psychology</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>90 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

                <!-- Qasim Esak -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="forex">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar">QE</div>
                                <div>
                                    <div class="contrib-name">Qasim Esak</div>
                                    <div class="contrib-role-badge badge-gold">Trading Educator</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Focused on simplifying trading concepts for beginners and intermediate
                            traders across all markets.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Copy Trading</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Beginner Strategies</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Portfolio Building</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Market Fundamentals</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>75 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

                <!-- Humphrey Manyara -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="forex">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar">HM</div>
                                <div>
                                    <div class="contrib-name">Humphrey Manyara</div>
                                    <div class="contrib-role-badge badge-red">Trading Specialist</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Expert in social trading systems and automation tools for consistent
                            trading performance.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Copy Trading Systems</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Automated Strategies</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Risk Allocation</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Platform Optimization</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>60 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

                <!-- Sarah Johnson -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="crypto">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar" style="border-color:#60a5fa;color:#60a5fa">SJ</div>
                                <div>
                                    <div class="contrib-name">Sarah Johnson</div>
                                    <div class="contrib-role-badge badge-blue">Crypto Analyst</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Provides deep insights into cryptocurrency trends, DeFi, and blockchain
                            ecosystems with on-chain analysis.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Bitcoin &amp; Altcoins</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> DeFi &amp; Web3</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Market Sentiment</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> On-chain Analysis</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>90 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

                <!-- Michael Chen -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="metals">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar"
                                    style="border-color:var(--accent-gold);color:var(--accent-gold)">MC</div>
                                <div>
                                    <div class="contrib-name">Michael Chen</div>
                                    <div class="contrib-role-badge badge-gold">Commodities Expert</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Specialist in commodities trading including gold, oil, and agricultural
                            markets with global supply chain expertise.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Gold &amp; Metals</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Oil Market Trends</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Commodity Cycles</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Global Supply Chains</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>80 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

                <!-- Priya Sharma -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="indices">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar" style="border-color:#4ade80;color:#4ade80">PS</div>
                                <div>
                                    <div class="contrib-name">Priya Sharma</div>
                                    <div class="contrib-role-badge badge-green">Technical Analyst</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Focused on chart analysis and technical indicators for precise trade
                            execution across all asset classes.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Candlestick Patterns</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> RSI &amp; MACD</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Trend Analysis</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Breakout Trading</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>70 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

                <!-- David Miller -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="indices stocks">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar" style="border-color:#c084fc;color:#c084fc">DM</div>
                                <div>
                                    <div class="contrib-name">David Miller</div>
                                    <div class="contrib-role-badge badge-purple">Derivatives Trader</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Expert in futures, options, and advanced trading strategies for
                            institutional-grade execution.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Futures Trading</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Options Strategies</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Hedging Techniques</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Risk Management</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>90 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

                <!-- Ahmed Khan -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="forex macro">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar">AK</div>
                                <div>
                                    <div class="contrib-name">Ahmed Khan</div>
                                    <div class="contrib-role-badge badge-red">Forex Strategist</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Specializes in currency trading and macroeconomic-driven strategies with
                            central bank policy expertise.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Currency Pairs Analysis</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Interest Rate Impact</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Central Bank Policies</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Trade Setups</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>85 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

                <!-- Emma Williams -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="stocks">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar" style="border-color:#4ade80;color:#4ade80">EW</div>
                                <div>
                                    <div class="contrib-name">Emma Williams</div>
                                    <div class="contrib-role-badge badge-green">Investment Advisor</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Helps traders build long-term portfolios and manage financial risks with
                            a wealth management approach.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Portfolio Management</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Asset Allocation</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Long-term Investing</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Wealth Strategies</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>75 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

                <!-- Raj Patel -->
                <div class="col-md-6 col-xl-4 reveal" data-cat="macro stocks">
                    <div class="contrib-card">
                        <div class="contrib-header">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contrib-avatar">RP</div>
                                <div>
                                    <div class="contrib-name">Raj Patel</div>
                                    <div class="contrib-role-badge badge-red">Market Analyst</div>
                                </div>
                            </div>
                        </div>
                        <p class="contrib-desc">Focuses on data-driven insights and global financial market research
                            backed by quantitative models.</p>
                        <div class="contrib-topics">
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Market Trends</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Data Analysis</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Economic Reports</span>
                            <span class="topic-chip"><i class="fas fa-chevron-right"></i> Forecasting</span>
                        </div>
                        <div class="contrib-meta">
                            <div class="meta-item"><strong>June 11, 2026</strong>Date</div>
                            <div class="meta-item"><strong>10:30 PM IST</strong>Time</div>
                            <div class="meta-item"><strong>60 min</strong>Duration</div>
                        </div>
                        <button class="btn-join"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>

            </div><!-- /row -->
        </div>
    </section>

    <script>
        // ── Animated chart bars ──
        function buildBars(id, color) {
            const el = document.getElementById(id);
            if (!el) return;
            const heights = [40, 65, 30, 80, 50, 70, 35, 90, 55, 45, 75, 60, 85, 40, 65, 30, 80, 50, 70, 35];
            heights.forEach((h, i) => {
                const bar = document.createElement('div');
                bar.className = 'chart-bar';
                bar.style.cssText = `height:${h}%; background:${color || 'var(--zed-primary)'}; animation-delay:${i * 0.1}s; animation-duration:${1.8 + Math.random() * 1.2}s`;
                el.appendChild(bar);
            });
        }
        buildBars('chart1', '#E8231A');
        buildBars('chart2', '#c9a84c');
        buildBars('chart3', '#60a5fa');
        buildBars('chart4', '#4ade80');
        buildBars('chart5', '#c084fc');
        buildBars('chart6', '#E8231A');

        // ── Countdown to June 11, 2026 10:30 PM IST ──
        function updateCountdown() {
            const target = new Date('2026-06-11T17:00:00Z'); // 10:30 PM IST = 17:00 UTC
            const now = new Date();
            const diff = target - now;
            if (diff <= 0) {
                document.getElementById('cd-days').textContent = '00';
                document.getElementById('cd-hrs').textContent = '00';
                document.getElementById('cd-min').textContent = '00';
                document.getElementById('cd-sec').textContent = '00';
                return;
            }
            const d = Math.floor(diff / 86400000);
            const h = Math.floor((diff % 86400000) / 3600000);
            const m = Math.floor((diff % 3600000) / 60000);
            const s = Math.floor((diff % 60000) / 1000);
            document.getElementById('cd-days').textContent = String(d).padStart(2, '0');
            document.getElementById('cd-hrs').textContent = String(h).padStart(2, '0');
            document.getElementById('cd-min').textContent = String(m).padStart(2, '0');
            document.getElementById('cd-sec').textContent = String(s).padStart(2, '0');
        }
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // ── Scroll Reveal ──
        const revealEls = document.querySelectorAll('.reveal');
        const obs = new IntersectionObserver(entries => {
            entries.forEach((e, idx) => {
                if (e.isIntersecting) {
                    setTimeout(() => e.target.classList.add('visible'), idx * 60);
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.1 });
        revealEls.forEach(el => obs.observe(el));

        // ── Filter pills ──
        document.querySelectorAll('.filter-pill').forEach(pill => {
            pill.addEventListener('click', function () {
                document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                const filter = this.dataset.filter;
                document.querySelectorAll('#contrib-grid > [data-cat]').forEach(card => {
                    if (filter === 'all' || card.dataset.cat.includes(filter)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
<?php
include_once ('elements/footer.php');
?>
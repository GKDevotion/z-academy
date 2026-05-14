<?php 
include_once ('elements/header.php');
?>

    <style>
        
        /* ── PAGE TRANSITIONS ── */
        .page {
            display: none;
        }

        .page.active {
            display: block;
            animation: fadeUp .4s cubic-bezier(.2, .8, .3, 1) both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        /* ── MAIN NAV ── */
        .main-nav {
            background: var(--zed-card-bg);
            border-bottom: 1px solid var(--zed-banner-bg-end);
            position: sticky;
            top: 38px;
            z-index: 400;
        }

        .nav-scroller {
            overflow-x: auto;
            scrollbar-width: none;
        }

        .nav-scroller::-webkit-scrollbar {
            display: none;
        }

        .nav-tabs-custom {
            display: flex;
            gap: 0;
            align-items: stretch;
            min-width: max-content;
        }

        .ntab {
            background: transparent;
            border: none;
            border-bottom: 3px solid transparent;
            
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: var(--zed-secondary);
            padding: 12px 18px;
            cursor: pointer;
            transition: all .2s;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .ntab:hover {
            color: var(--zed-dark-text);
            border-bottom-color: var(--zed-banner-bg-end);
        }

        .ntab.active {
            color: var(--zed-primary);
            border-bottom-color: var(--zed-primary);
        }

        .ntab i {
            font-size: .65rem;
        }

        .ntab .nbadge {
            background: var(--zed-primary);
            color: #fff;
            font-size: .5rem;
            font-weight: 800;
            padding: 1px 5px;
            border-radius: 10px;
            letter-spacing: .05em;
        }

        /* ── HERO VARIANTS ── */
        .page-hero {
            padding: 64px 0 52px;
            position: relative;
            overflow: hidden;
            background: var(--zed-card-bg);
        }

        .hero-rule {
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--zed-primary), transparent);
            opacity: .3;
            margin: 28px 0 0;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--zed-primary);
            border-bottom: 2px solid var(--zed-primary);
            padding-bottom: 4px;
            margin-bottom: 18px;
        }

        .hero-h {
            font-size: clamp(2.6rem, 6vw, 5rem);
            font-weight: 400;
            line-height: 1.05;
            color: var(--zed-dark-text);
            margin-bottom: 16px;
        }

        .hero-h em {
            font-style: italic;
            color: var(--zed-primary);
        }

        .hero-sub {
            font-size: .93rem;
            color: var(--zed-secondary);
            max-width: 520px;
            line-height: 1.82;
            margin-bottom: 36px;
        }

        .stat-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0;
            border: 1px solid var(--zed-banner-bg-end);
            max-width: 640px;
        }

        .sstat {
            flex: 1;
            min-width: 100px;
            padding: 16px 12px;
            text-align: center;
            border-right: 1px solid var(--zed-banner-bg-end);
            transition: background .2s;
        }

        .sstat:last-child {
            border-right: none;
        }

        .sstat:hover {
            background: var(--zed-white-glass-effect);
        }

        .sn {
            font-size: 1.8rem;
            color: var(--zed-primary);
            line-height: 1;
        }

        .sl {
            font-size: .58rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--zed-border-color);
            margin-top: 3px;
        }

        /* ── SECTION HEADINGS ── */
        .sec-ey {
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--zed-primary);
            margin-bottom: 6px;
        }

        .sec-h {
            font-size: clamp(1.7rem, 3.2vw, 2.5rem);
            color: var(--zed-dark-text);
        }

        .sec-h em {
            font-style: italic;
            color: var(--zed-primary);
        }

        .sec-rule {
            width: 36px;
            height: 2px;
            background: var(--zed-primary);
            margin: 10px auto 0;
        }

        /* ── WEBINAR / EVENT CARDS ── */
        .wcard {
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-banner-bg-end);
            border-radius: 0;
            padding: 24px 22px;
            position: relative;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s, border-color .3s;
            height: 100%;
        }

        .wcard::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: var(--zed-primary);
            transform: scaleY(0);
            transform-origin: top;
            transition: transform .35s ease;
        }

        .wcard:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 42px rgba(0, 0, 0, .08);
            border-color: var(--zed-primary);
        }

        .wcard:hover::before {
            transform: scaleY(1);
        }

        .wcard-num {
            font-size: 3rem;
            color: var(--zed-banner-bg-end);
            position: absolute;
            top: 14px;
            right: 18px;
            line-height: 1;
            font-style: italic;
            user-select: none;
            transition: color .3s;
        }

        .wcard:hover .wcard-num {
            color: var(--zed-light-red-hover);
        }

        .wcard-tag {
            font-size: .58rem;
            font-weight: 800;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--zed-primary);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .wcard-title {
            font-size: 1.12rem;
            color: var(--zed-dark-text);
            line-height: 1.35;
            margin-bottom: 10px;
        }

        .wcard-desc {
            font-size: .78rem;
            color: var(--zed-secondary);
            line-height: 1.72;
            margin-bottom: 16px;
        }

        .topic-row {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            font-size: .76rem;
            color: var(--zed-dark-text);
            padding: 5px 0;
            border-bottom: 1px dashed var(--zed-border-color);
        }

        .topic-row:last-child {
            border-bottom: none;
        }

        .td {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--zed-primary);
            flex-shrink: 0;
            margin-top: 6px;
        }

        .wcard-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid var(--zed-border-color);
            margin-top: 16px;
        }

        .wmeta {
            font-size: .66rem;
            color: var(--zed-border-color);
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .wmeta i {
            color: var(--zed-primary);
            font-size: .6rem;
        }

        .wbtn {
            
            font-size: .68rem;
            font-weight: 800;
            letter-spacing: .1em;
            text-transform: uppercase;
            padding: 8px 18px;
            background: var(--zed-primary);
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 2px;
            transition: opacity .2s, transform .15s;
            display: flex;
            align-items: center;
            gap: 6px;
            white-space: nowrap;
        }

        .wbtn:hover {
            opacity: .85;
            transform: scale(.97);
        }

        .wbtn-outline {
            background: transparent;
            border: 1.5px solid var(--zed-primary);
            color: var(--zed-primary);
        }

        .wbtn-outline:hover {
            background: var(--zed-primary);
            color: #fff;
            opacity: 1;
        }

        /* ── VIDEO CARDS ── */
        .vc {
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-banner-bg-end);
            border-radius: 0;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s;
            cursor: pointer;
            height: 100%;
        }

        .vc:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 48px rgba(0, 0, 0, .09);
        }

        .vthumb {
            position: relative;
            aspect-ratio: 16/9;
            overflow: hidden;
        }

        .vanim {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            gap: 1.5px;
            padding: 16px 10px 0;
        }

        .vbar {
            flex: 1;
            border-radius: 1px 1px 0 0;
            animation: vba 2s ease-in-out infinite alternate;
            min-height: 4px;
        }

        @keyframes vba {
            from {
                transform: scaleY(1)
            }

            to {
                transform: scaleY(.3)
            }
        }

        .vgrad {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 30%, rgba(255, 255, 255, .55));
        }

        .vplay-w {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vplay {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--zed-primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.05rem;
            transition: transform .2s;
            box-shadow: 0 6px 24px rgba(0, 0, 0, .2);
        }

        .vc:hover .vplay {
            transform: scale(1.1);
        }

        .vdur {
            position: absolute;
            bottom: 8px;
            right: 9px;
            background: rgba(0, 0, 0, .65);
            color: #fff;
            font-size: .62rem;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 2px;
        }

        .vstatus {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: .58rem;
            font-weight: 800;
            letter-spacing: .12em;
            padding: 3px 10px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .vbody {
            padding: 16px 18px;
        }

        .vcat {
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .14em;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .vtitle {
            font-size: .98rem;
            color: var(--zed-dark-text);
            line-height: 1.4;
            margin-bottom: 8px;
        }

        .vmeta {
            font-size: .7rem;
            color: var(--zed-secondary);
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .blink-dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: currentColor;
            animation: bd 1.1s ease-in-out infinite;
        }

        @keyframes bd {
            0%,
            100% {
                opacity: 1
            }

            50% {
                opacity: .25
            }
        }

        /* ── CONTRIBUTOR CARDS ── */
        .contrib {
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-banner-bg-end);
            padding: 24px;
            transition: transform .3s, box-shadow .3s, border-color .3s;
        }

        .contrib:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 42px rgba(0, 0, 0, .08);
            border-color: var(--zed-primary);
        }

        .contrib-av {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: var(--zed-white-glass-effect);
            border: 2px solid var(--zed-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            font-style: italic;
            color: var(--zed-primary);
            flex-shrink: 0;
        }

        .contrib-name {
            font-size: 1.05rem;
            color: var(--zed-dark-text);
            margin-bottom: 3px;
        }

        .contrib-role {
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 2px;
            display: inline-block;
        }

        .contrib-desc {
            font-size: .77rem;
            color: var(--zed-secondary);
            line-height: 1.7;
            margin: 12px 0 14px;
        }

        .chip {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: .65rem;
            font-weight: 600;
            background: var(--zed-white-glass-effect);
            border: 1px solid var(--zed-banner-bg-end);
            padding: 4px 10px;
            border-radius: 2px;
            margin: 3px 3px 0 0;
            color: var(--zed-dark-text);
        }

        /* ── PROGRESS BAR ── */
        .prog {
            height: 3px;
            background: var(--zed-border-color);
            margin-top: 12px;
            overflow: hidden;
        }

        .prog-fill {
            height: 100%;
            background: var(--zed-primary);
            transform: scaleX(0);
            transform-origin: left;
            animation: pf 1.3s .2s ease forwards;
        }

        @keyframes pf {
            to {
                transform: scaleX(1)
            }
        }

        /* ── FILTER ── */
        .fpill {
            background: transparent;
            border: 1px solid var(--zed-banner-bg-end);
            color: var(--zed-secondary);
            padding: 6px 14px;
            font-size: .67rem;
            font-weight: 700;
            letter-spacing: .07em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all .2s;
            
            border-radius: 2px;
            white-space: nowrap;
        }

        .fpill:hover {
            border-color: var(--zed-primary);
            color: var(--zed-primary);
        }

        .fpill.on {
            background: var(--zed-primary);
            border-color: var(--zed-primary);
            color: #fff;
        }

        /* ── CURRICULUM ACCORDION ── */
        .citem {
            border: 1px solid var(--zed-banner-bg-end);
            margin-bottom: 6px;
            overflow: hidden;
            transition: border-color .2s;
        }

        .citem:hover {
            border-color: var(--zed-primary);
        }

        .chead {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 13px 18px;
            cursor: pointer;
            background: var(--zed-card-bg);
        }

        .cidx {
            font-size: 1.1rem;
            color: var(--zed-primary);
            min-width: 30px;
            font-style: italic;
        }

        .cname {
            font-size: .83rem;
            font-weight: 700;
            color: var(--zed-dark-text);
        }

        .cbadge {
            font-size: .58rem;
            font-weight: 800;
            letter-spacing: .1em;
            padding: 3px 9px;
            background: var(--zed-white-glass-effect);
            color: var(--zed-secondary);
            border-radius: 2px;
        }

        .cbody {
            display: none;
            padding: 0 18px 14px;
        }

        .cbody.open {
            display: block;
        }

        /* ── SCROLL REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .46s ease, transform .46s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── MISC ── */
        section {
            padding: 42px 0;
        }

        .bg2 {
            background: var(--zed-backgound-color);
        }

        .bg3 {
            background: var(--zed-white-glass-effect);
        }

        .site-footer {
            background: var(--zed-dark-text);
            padding: 48px 0 36px;
            color: rgba(255, 255, 255, .5);
        }

        .footer-logo {
            font-size: 2rem;
            color: #fff;
            font-style: italic;
            margin-bottom: 6px;
        }

        .footer-logo em {
            color: var(--zed-primary);
        }

        @media(max-width:576px) {
            .stat-row {
                border: none;
            }

            .sstat {
                border-right: none;
                border-bottom: 1px solid var(--zed-banner-bg-end);
            }

            .sstat:last-child {
                border-bottom: none;
            }

            .mast-search {
                display: none;
            }

            .hero-h {
                font-size: 2.4rem;
            }
        }
    </style>


    <!-- ════ PAGE: HOME ════ -->
    <div class="page active" id="page-home">
        <div class="page-hero" style="background:linear-gradient(to bottom,#fff 70%,var(--zed-backgound-color))">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <div class="hero-eyebrow">Expert-Led Education · 2026</div>
                        <h1 class="hero-h">Your Gateway to<br><em>Expert Webinars</em></h1>
                        <p class="hero-sub">Live and on-demand sessions covering Trading, Finance, AI, Crypto, Energy, Tax,
                        Technology, and Investment — taught by industry professionals.</p>
                        <div class="d-flex gap-3 flex-wrap mb-4">
                            <button class="wbtn" onclick="gp('upcoming')"><i class="fas fa-calendar-check"></i> View Upcoming</button>
                            <button class="wbtn wbtn-outline" onclick="gp('aired')"><i class="fas fa-play"></i> Watch Replays</button>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="stat-row">
                            <div class="sstat">
                                <div class="sn">12</div>
                                <div class="sl">Topics</div>
                            </div>
                            <div class="sstat">
                                <div class="sn">50+</div>
                                <div class="sl">Webinars</div>
                            </div>
                            <div class="sstat">
                                <div class="sn">20+</div>
                                <div class="sl">Experts</div>
                            </div>
                            <div class="sstat">
                                <div class="sn">Free</div>
                                <div class="sl">Access</div>
                            </div>
                        </div>
                        <!-- Countdown -->
                        <div style="margin-top:16px;border:1px solid var(--zed-banner-bg-end);padding:18px 20px;background:var(--zed-card-bg);">
                            <div
                                style="font-size:.6rem;font-weight:800;letter-spacing:.2em;text-transform:uppercase;color:var(--zed-primary);margin-bottom:10px;">
                                Next Live Session</div>
                            <div
                                style="font-size:1rem;color:var(--zed-dark-text);margin-bottom:12px;font-style:italic;">
                                Jun 11, 2026 · 10:30 PM IST</div>
                            <div style="display:flex;gap:12px;">
                                <div style="text-align:center"><span id="cd-d"
                                    style="font-size:2rem;color:var(--zed-primary);display:block;line-height:1">03</span><span
                                    style="font-size:.55rem;letter-spacing:.14em;text-transform:uppercase;color:var(--zed-border-color);font-weight:700">Days</span>
                                </div>
                                <div
                                style="font-size:1.8rem;color:var(--zed-primary);align-self:flex-start;padding-top:2px;opacity:.5">
                                :</div>
                                <div style="text-align:center"><span id="cd-h"
                                    style="font-size:2rem;color:var(--zed-primary);display:block;line-height:1">14</span><span
                                    style="font-size:.55rem;letter-spacing:.14em;text-transform:uppercase;color:var(--zed-border-color);font-weight:700">Hrs</span>
                                </div>
                                <div
                                style="font-size:1.8rem;color:var(--zed-primary);align-self:flex-start;padding-top:2px;opacity:.5">
                                :</div>
                                <div style="text-align:center"><span id="cd-m"
                                    style="font-size:2rem;color:var(--zed-primary);display:block;line-height:1">27</span><span
                                    style="font-size:.55rem;letter-spacing:.14em;text-transform:uppercase;color:var(--zed-border-color);font-weight:700">Min</span>
                                </div>
                                <div
                                style="font-size:1.8rem;color:var(--zed-primary);align-self:flex-start;padding-top:2px;opacity:.5">
                                :</div>
                                <div style="text-align:center"><span id="cd-s"
                                    style="font-size:2rem;color:var(--zed-primary);display:block;line-height:1">45</span><span
                                    style="font-size:.55rem;letter-spacing:.14em;text-transform:uppercase;color:var(--zed-border-color);font-weight:700">Sec</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Topic grid on home -->
        <section class="bg2">
            <div class="container">
                <div class="text-center mb-5 reveal">
                    <div class="sec-ey">Browse by Category</div>
                    <h2 class="sec-h">All <em>Topics</em></h2>
                    <div class="sec-rule mx-auto"></div>
                </div>
                <div class="row g-3">
                <!-- Category tiles -->
                    <div class="col-6 col-md-4 col-lg-3 reveal" id="home-cats"></div>
                </div>
                <div class="row g-3" id="home-cats-grid"></div>
            </div>
        </section>
    </div>

    <!-- ── MAIN NAV ── -->
    <nav class="main-nav d-none">
        <div class="container">
            <div class="nav-scroller">
                <div class="nav-tabs-custom">
                    <button class="ntab active" id="nt-home" onclick="gp('home')">
                        <i class="fas fa-house"></i> Home
                    </button>
                    <button class="ntab" id="nt-upcoming" onclick="gp('upcoming')">
                        <i class="fas fa-calendar-check"></i> Upcoming
                        <span class="nbadge d-none">3</span>
                    </button>
                    <button class="ntab" id="nt-aired" onclick="gp('aired')">
                        <i class="fas fa-film"></i> Aired
                    </button>
                    <button class="ntab" id="nt-contributor" onclick="gp('contributor')">
                        <i class="fas fa-users"></i> Contributors
                    </button>
                    <button class="ntab" id="nt-ai" onclick="gp('ai')">
                        <i class="fas fa-brain"></i> AI & ML
                    </button>
                    <button class="ntab" id="nt-crypto" onclick="gp('crypto')">
                        <i class="fab fa-bitcoin"></i> Crypto
                    </button>
                    <button class="ntab" id="nt-financial" onclick="gp('financial')">
                        <i class="fas fa-landmark"></i> Financial
                    </button>
                    <button class="ntab" id="nt-tax" onclick="gp('tax')">
                        <i class="fas fa-file-invoice-dollar"></i> Tax
                    </button>
                    <button class="ntab" id="nt-technology" onclick="gp('technology')">
                        <i class="fas fa-microchip"></i> Technology
                    </button>
                    <button class="ntab" id="nt-investment" onclick="gp('investment')">
                        <i class="fas fa-chart-pie"></i> Investment
                    </button>
                    <button class="ntab" id="nt-energy" onclick="gp('energy')">
                        <i class="fas fa-bolt"></i> Energy Sector
                    </button>
                    <button class="ntab" id="nt-ta" onclick="gp('ta')">
                        <i class="fas fa-chart-line"></i> Technical Analysis
                    </button>
                    <button class="ntab" id="nt-trading" onclick="gp('trading')">
                        <i class="fas fa-exchange-alt"></i> Trading
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- ════ PAGE: UPCOMING ════ -->
    <div class="page" id="page-upcoming" style="--ac:var(--zed-primary)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow"><i class="fas fa-calendar-check me-1"></i> Live Sessions</div>
            <h1 class="hero-h">Upcoming <em>Webinars</em></h1>
            <p class="hero-sub">Register now for our next live expert-led sessions. Limited seats available.</p>
            <div class="hero-rule"></div>
        </div>
        </div>
        <section>
            <div class="container">
                <div class="row g-4" id="upcoming-grid"></div>
            </div>
        </section>
    </div>


    <!-- ════ PAGE: AIRED ════ -->
    <div class="page" id="page-aired" style="--ac:var(--navy)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow" style="color:var(--navy);border-color:var(--navy)"><i class="fas fa-film me-1"></i>
            On-Demand Library</div>
            <h1 class="hero-h">Aired <em>Replays</em></h1>
            <p class="hero-sub">Watch all previously aired webinars at your own pace. Full HD recordings.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="d-flex gap-2 flex-wrap mb-4" id="aired-filters"></div>
            <div class="row g-4" id="aired-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: CONTRIBUTOR ════ -->
    <div class="page" id="page-contributor" style="--ac:var(--zed-primary)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow"><i class="fas fa-users me-1"></i> Expert Panel</div>
            <h1 class="hero-h">Webinar <em>Contributors</em></h1>
            <p class="hero-sub">Meet the industry experts, analysts, and educators who power our webinar series.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="contrib-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: AI & ML ════ -->
    <div class="page" id="page-ai" style="--ac:var(--purple)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow" style="color:var(--purple);border-color:var(--purple)"><i
                class="fas fa-brain me-1"></i> Artificial Intelligence</div>
            <h1 class="hero-h">AI &amp; Machine <em>Learning</em></h1>
            <p class="hero-sub">Explore how AI and machine learning are transforming trading strategies and financial
            analysis.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="ai-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: CRYPTO ════ -->
    <div class="page" id="page-crypto" style="--ac:var(--orange)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow" style="color:var(--orange);border-color:var(--orange)"><i
                class="fab fa-bitcoin me-1"></i> Digital Assets</div>
            <h1 class="hero-h">Crypto <em>Currency</em></h1>
            <p class="hero-sub">Navigate the world of digital assets, DeFi, Web3, and blockchain-based investing.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="crypto-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: FINANCIAL ════ -->
    <div class="page" id="page-financial" style="--ac:var(--navy)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow" style="color:var(--navy);border-color:var(--navy)"><i
                class="fas fa-landmark me-1"></i> Finance Education</div>
            <h1 class="hero-h">Webinar <em>Financial</em></h1>
            <p class="hero-sub">Gain practical knowledge from expert-led webinars covering trading, investing, and global
            markets.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="financial-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: TAX ════ -->
    <div class="page" id="page-tax" style="--ac:var(--teal)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow" style="color:var(--teal);border-color:var(--teal)"><i
                class="fas fa-file-invoice-dollar me-1"></i> Tax Education</div>
            <h1 class="hero-h">Webinar <em>Tax</em></h1>
            <p class="hero-sub">Understand trading taxes, crypto taxation, and legal strategies to optimise your financial
            outcomes.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="tax-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: TECHNOLOGY ════ -->
    <div class="page" id="page-technology" style="--ac:var(--blue)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow" style="color:var(--blue);border-color:var(--blue)"><i
                class="fas fa-microchip me-1"></i> FinTech</div>
            <h1 class="hero-h">Webinar <em>Technology</em></h1>
            <p class="hero-sub">Understand how modern technology powers trading platforms, financial markets and the future
            of FinTech.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="tech-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: INVESTMENT ════ -->
    <div class="page" id="page-investment" style="--ac:var(--green)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow" style="color:var(--green);border-color:var(--green)"><i
                class="fas fa-chart-pie me-1"></i> Wealth Building</div>
            <h1 class="hero-h">Webinar <em>Investment</em></h1>
            <p class="hero-sub">Build long-term wealth with expert guidance on stocks, bonds, ETFs, real estate, and
            portfolio management.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="inv-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: ENERGY ════ -->
    <div class="page" id="page-energy" style="--ac:var(--orange)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow" style="color:var(--orange);border-color:var(--orange)"><i
                class="fas fa-bolt me-1"></i> Commodities</div>
            <h1 class="hero-h">Energy <em>Sector</em></h1>
            <p class="hero-sub">Understand global energy markets — crude oil, natural gas, renewables, OPEC, and trading
            strategies.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="energy-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: TECHNICAL ANALYSIS ════ -->
    <div class="page" id="page-ta" style="--ac:var(--zed-primary)">
        <div class="page-hero bg2">
        <div class="container">
            <div class="hero-eyebrow"><i class="fas fa-chart-line me-1"></i> Chart Mastery</div>
            <h1 class="hero-h">Technical <em>Analysis</em></h1>
            <p class="hero-sub">Master candlestick patterns, indicators, support/resistance, and chart-based trade execution
            strategies.</p>
        </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="ta-grid"></div>
        </div>
        </section>
    </div>


    <!-- ════ PAGE: TRADING ════ -->
    <div class="page" id="page-trading" style="--ac:var(--emerald)">
        <div class="page-hero bg2">
            <div class="container">
                <div class="hero-eyebrow" style="color:var(--emerald);border-color:var(--emerald)"><i
                    class="fas fa-exchange-alt me-1"></i> Active Trading</div>
                <h1 class="hero-h">Webinar <em>Trading</em></h1>
                <p class="hero-sub">From intraday scalping to swing trading — practical strategies across Forex, Stocks,
                Futures, and Commodities.</p>
            </div>
        </div>
        <section class="bg2">
        <div class="container">
            <div class="row g-4" id="trading-grid"></div>
        </div>
        </section>
    </div>

    <script>
        // ═══════════════════════════════════
        //  DATA
        // ═══════════════════════════════════
        const CATS = [
        { id: 'upcoming', label: 'Upcoming', icon: 'fa-calendar-check', color: '#D6260E', bg: '#fdf2f1' },
        { id: 'aired', label: 'Aired Replays', icon: 'fa-film', color: '#1a2f5e', bg: '#eff6ff' },
        { id: 'contributor', label: 'Contributors', icon: 'fa-users', color: '#D6260E', bg: '#fdf2f1' },
        { id: 'ai', label: 'AI & ML', icon: 'fa-brain', color: '#5b2d8e', bg: '#faf5ff' },
        { id: 'crypto', label: 'Crypto', icon: 'fa-bitcoin fa-brands', color: '#c95c0a', bg: '#fff7ed' },
        { id: 'financial', label: 'Financial', icon: 'fa-landmark', color: '#1a2f5e', bg: '#eff6ff' },
        { id: 'tax', label: 'Tax', icon: 'fa-file-invoice-dollar', color: '#0a6b7c', bg: '#ecfeff' },
        { id: 'technology', label: 'Technology', icon: 'fa-microchip', color: '#1551a0', bg: '#eff4ff' },
        { id: 'investment', label: 'Investment', icon: 'fa-chart-pie', color: '#15623a', bg: '#f0fdf4' },
        { id: 'energy', label: 'Energy Sector', icon: 'fa-bolt', color: '#c95c0a', bg: '#fff7ed' },
        { id: 'ta', label: 'Technical Analysis', icon: 'fa-chart-line', color: '#D6260E', bg: '#fdf2f1' },
        { id: 'trading', label: 'Trading', icon: 'fa-exchange-alt', color: '#0a7c52', bg: '#f0fdf9' },
        ];

        const UPCOMING_DATA = [
        { n: '01', tag: 'Forex Strategy', color: '#D6260E', title: 'Mastering EUR/USD in a High-Volatility Environment', desc: 'Live session covering macro analysis, technical setups, and trade management for major currency pairs.', speaker: 'Daniel Wosenga', date: 'Jun 11, 2026', time: '10:30 PM IST', seats: '142 Registered', topics: ['Macro Analysis', 'EUR/USD Setups', 'Trade Management', 'Risk Control'] },
        { n: '02', tag: 'Crypto Markets', color: '#c95c0a', title: 'Bitcoin Halving Cycles & Altcoin Season Signals', desc: 'Deep dive into on-chain data, halving impact, and how to position across the crypto market cycle.', speaker: 'Sarah Johnson', date: 'Jun 18, 2026', time: '9:00 PM IST', seats: '98 Registered', topics: ['On-Chain Data', 'Halving Impact', 'Altcoin Rotation', 'Portfolio Strategy'] },
        { n: '03', tag: 'AI Trading', color: '#5b2d8e', title: 'Reinforcement Learning for Automated Trading Systems', desc: 'Professional-level AI session on building and backtesting ML-based algorithmic trading models.', speaker: 'Prof. David Kim', date: 'Jun 25, 2026', time: '10:00 PM IST', seats: '210 Registered', topics: ['RL Algorithms', 'Backtesting', 'Model Deployment', 'Risk Controls'] },
        ];

        const AIRED_DATA = [
        { cat: 'forex', color: '#D6260E', bgGrad: '#fdf2f1,#fecaca', title: 'WTI vs Brent: What Drives the Spread?', speaker: 'Dr. Patel', views: '5.2K', dur: '46:22', status: 'REPLAY' },
        { cat: 'crypto', color: '#c95c0a', bgGrad: '#fff7ed,#fed7aa', title: 'DeFi 2.0: On-Chain Analysis Deep Dive', speaker: 'Sarah J.', views: '9.1K', dur: '61:15', status: 'REPLAY' },
        { cat: 'ai', color: '#5b2d8e', bgGrad: '#faf5ff,#ede8ff', title: 'Predictive Analytics with ML Models', speaker: 'Aisha Patel', views: '7.2K', dur: '58:34', status: 'NEW' },
        { cat: 'financial', color: '#1a2f5e', bgGrad: '#eff6ff,#bfdbfe', title: 'S&P 500 Breakout Trading: Q2 Key Levels', speaker: 'Priya S.', views: '3.5K', dur: '39:10', status: 'REPLAY' },
        { cat: 'energy', color: '#c95c0a', bgGrad: '#fff7ed,#fed7aa', title: 'OPEC+ Cuts & Global Oil Price Impact', speaker: 'M. Hassan', views: '7.1K', dur: '58:44', status: 'REPLAY' },
        { cat: 'trading', color: '#0a7c52', bgGrad: '#f0fdf9,#bbf7d0', title: 'Scalping Strategies for Volatile Markets', speaker: 'H. Manyara', views: '4.8K', dur: '42:30', status: 'REPLAY' },
        ];

        const CONTRIB_DATA = [
        { init: 'DW', name: 'Daniel Wosenga', role: 'Market Analyst', color: '#D6260E', desc: 'Specializes in global macro trends and forex market strategies with years of institutional experience.', chips: ['Forex Analysis', 'Risk Management', 'Trading Psychology'] },
        { init: 'QE', name: 'Qasim Esak', role: 'Trading Educator', color: '#a07520', desc: 'Focused on simplifying trading concepts for beginners and intermediate traders across all markets.', chips: ['Copy Trading', 'Portfolio Building', 'Market Fundamentals'] },
        { init: 'HM', name: 'Humphrey Manyara', role: 'Trading Specialist', color: '#D6260E', desc: 'Expert in social trading systems and automation tools for consistent trading performance.', chips: ['Copy Trading Systems', 'Automated Strategies', 'Risk Allocation'] },
        { init: 'SJ', name: 'Sarah Johnson', role: 'Crypto Analyst', color: '#0a6b7c', desc: 'Provides deep insights into cryptocurrency trends, DeFi, and blockchain ecosystems.', chips: ['Bitcoin & Altcoins', 'DeFi & Web3', 'On-chain Analysis'] },
        { init: 'MC', name: 'Michael Chen', role: 'Commodities Expert', color: '#c95c0a', desc: 'Specialist in commodities trading including gold, oil, and agricultural markets.', chips: ['Gold & Metals', 'Oil Market Trends', 'Commodity Cycles'] },
        { init: 'PS', name: 'Priya Sharma', role: 'Technical Analyst', color: '#D6260E', desc: 'Focused on chart analysis and technical indicators for precise trade execution across all asset classes.', chips: ['Candlestick Patterns', 'RSI & MACD', 'Breakout Trading'] },
        { init: 'DM', name: 'David Miller', role: 'Derivatives Trader', color: '#5b2d8e', desc: 'Expert in futures, options, and advanced trading strategies for institutional-grade execution.', chips: ['Futures Trading', 'Options Strategies', 'Hedging Techniques'] },
        { init: 'AK', name: 'Ahmed Khan', role: 'Forex Strategist', color: '#D6260E', desc: 'Specializes in currency trading and macroeconomic-driven strategies with central bank policy expertise.', chips: ['Currency Pairs', 'Central Bank Policies', 'Trade Setups'] },
        { init: 'EW', name: 'Emma Williams', role: 'Investment Advisor', color: '#15623a', desc: 'Helps traders build long-term portfolios and manage financial risks with a wealth management approach.', chips: ['Portfolio Management', 'Asset Allocation', 'Wealth Strategies'] },
        { init: 'RP', name: 'Raj Patel', role: 'Market Analyst', color: '#D6260E', desc: 'Focuses on data-driven insights and global financial market research backed by quantitative models.', chips: ['Market Trends', 'Data Analysis', 'Forecasting'] },
        ];

        const MODULE_DATA = {
        ai: [
            { n: '01', color: '#5b2d8e', tag: 'Predictive Models', title: 'Predictive Models in Trading', desc: 'Build models to predict market movements and trends.', topics: ['Price Prediction Models', 'Trend Forecasting', 'Sentiment Analysis', 'Neural Networks Basics', 'Model Accuracy & Limitations'], videos: 8, dur: '4h 20m' },
            { n: '02', color: '#5b2d8e', tag: 'Deep Learning', title: 'Deep Learning Fundamentals', desc: 'Dive into neural networks and deep learning for finance.', topics: ['Intro to Neural Networks', 'CNN & RNN Basics', 'LSTM for Time Series', 'AI Model Training', 'Use Cases in Finance'], videos: 10, dur: '5h 45m' },
            { n: '03', color: '#5b2d8e', tag: 'NLP', title: 'Natural Language Processing (NLP)', desc: 'Analyze news and tweets using AI for trade signals.', topics: ['Text Data Processing', 'Sentiment Analysis', 'News Impact on Markets', 'Twitter & Social Signals', 'AI-based News Trading'], videos: 7, dur: '3h 50m' },
            { n: '04', color: '#5b2d8e', tag: 'Risk AI', title: 'Risk Management using AI', desc: 'Use AI to minimize trading risks and optimize strategies.', topics: ['Risk Prediction Models', 'Portfolio Optimization', 'Volatility Analysis', 'Stop-loss Optimization', 'AI-based Alerts'], videos: 9, dur: '4h 10m' },
            { n: '05', color: '#5b2d8e', tag: 'Blockchain + AI', title: 'AI + Blockchain Integration', desc: 'How AI and blockchain work together in modern finance.', topics: ['AI in Crypto Trading', 'Smart Contracts + AI', 'Fraud Detection', 'Decentralized AI Models', 'Future Innovations'], videos: 6, dur: '3h 30m' },
            { n: '06', color: '#5b2d8e', tag: 'Advanced AI', title: 'Advanced AI Trading Strategies', desc: 'Professional-level AI techniques used by hedge funds.', topics: ['Reinforcement Learning', 'Algorithm Optimization', 'Multi-Strategy Systems', 'Market Pattern Recognition', 'AI Portfolio Management'], videos: 12, dur: '6h 00m' },
        ],
        crypto: [
            { n: '01', color: '#c95c0a', tag: 'Bitcoin Basics', title: 'Bitcoin & Major Cryptocurrencies', desc: 'Understand Bitcoin, Ethereum and top digital assets.', topics: ['What is Bitcoin?', 'Ethereum & Smart Contracts', 'Altcoin Landscape', 'Market Cap & Volume', 'Wallets & Security'], videos: 7, dur: '3h 30m' },
            { n: '02', color: '#c95c0a', tag: 'DeFi', title: 'Decentralized Finance (DeFi)', desc: 'Navigate DeFi protocols, yield farming and liquidity.', topics: ['DeFi Basics', 'Uniswap & DEXes', 'Yield Farming', 'Lending Protocols', 'DeFi Risks'], videos: 8, dur: '4h 10m' },
            { n: '03', color: '#c95c0a', tag: 'On-Chain Analysis', title: 'On-Chain Data & Market Signals', desc: 'Use blockchain data to understand market behavior.', topics: ['On-Chain Metrics', 'Exchange Flows', 'Whale Tracking', 'MVRV & NVT Ratios', 'Sentiment Indicators'], videos: 6, dur: '3h 20m' },
            { n: '04', color: '#c95c0a', tag: 'Crypto Trading', title: 'Crypto Trading Strategies', desc: 'Practical strategies for spot, futures and perpetuals.', topics: ['Spot vs Futures', 'Leverage Trading', 'Funding Rates', 'Liquidation Zones', 'Risk Management in Crypto'], videos: 9, dur: '4h 50m' },
        ],
        financial: [
            { n: '01', color: '#1a2f5e', tag: 'Market Fundamentals', title: 'Market Fundamentals', desc: 'How financial markets work across Forex, Stocks, Crypto.', topics: ['How Markets Work', 'Key Participants', 'Liquidity & Volatility', 'Market Cycles', 'Global Ecosystem'], videos: 7, dur: '3h 40m' },
            { n: '02', color: '#1a2f5e', tag: 'Technical Analysis', title: 'Technical Analysis Skills', desc: 'Candlestick patterns, chart reading and indicators.', topics: ['Candlestick Patterns', 'Support & Resistance', 'Trend Identification', 'RSI, MACD, MAs', 'Entry & Exit Strategies'], videos: 9, dur: '4h 50m' },
            { n: '03', color: '#1a2f5e', tag: 'Fundamental Analysis', title: 'Fundamental Analysis', desc: 'Economic data, central banks, and company valuations.', topics: ['GDP, CPI, NFP', 'Interest Rates', 'News Impact', 'Company Valuation', 'Long-term Analysis'], videos: 8, dur: '4h 10m' },
            { n: '04', color: '#1a2f5e', tag: 'Portfolio', title: 'Portfolio Management', desc: 'Diversify across asset classes for long-term growth.', topics: ['Diversification', 'Asset Allocation', 'Long vs Short-term', 'Risk vs Return', 'Portfolio Rebalancing'], videos: 7, dur: '3h 30m' },
        ],
        tax: [
            { n: '01', color: '#0a6b7c', tag: 'Tax Basics', title: 'Trading Tax Fundamentals', desc: 'Understand capital gains, income tax and tax obligations.', topics: ['Capital Gains Tax', 'Short vs Long-term Tax', 'Tax-free Allowances', 'Filing Obligations', 'Record Keeping'], videos: 6, dur: '3h 00m' },
            { n: '02', color: '#0a6b7c', tag: 'Crypto Tax', title: 'Cryptocurrency Taxation', desc: 'How crypto trades, DeFi yields and NFTs are taxed.', topics: ['Crypto as Property', 'DeFi & Yield Tax', 'NFT Tax Rules', 'Staking Income', 'Country-specific Rules'], videos: 7, dur: '3h 40m' },
            { n: '03', color: '#0a6b7c', tag: 'Tax Optimisation', title: 'Legal Tax Optimisation Strategies', desc: 'Reduce tax liability legally with proven planning strategies.', topics: ['Tax-Loss Harvesting', 'ISA & SIPP Wrappers', 'Entity Structuring', 'Offshore Considerations', 'Tax-efficient Investing'], videos: 8, dur: '4h 20m' },
            { n: '04', color: '#0a6b7c', tag: 'International Tax', title: 'International Tax for Traders', desc: 'Cross-border tax obligations for global traders.', topics: ['Residency Rules', 'Double-Tax Treaties', 'Permanent Establishment', 'Forex & CFD Tax', 'Reporting Obligations'], videos: 5, dur: '2h 50m' },
        ],
        technology: [
            { n: '01', color: '#1551a0', tag: 'Algo Trading', title: 'Algorithmic Trading Basics', desc: 'Learn how automated trading systems execute trades.', topics: ['What is Algo Trading?', 'Strategy Building', 'Backtesting Concepts', 'Execution Speed', 'Risk Controls'], videos: 7, dur: '3h 40m' },
            { n: '02', color: '#1551a0', tag: 'Platforms & Tools', title: 'Trading Platforms & Tools', desc: 'Master MT4/MT5, TradingView and professional toolsets.', topics: ['MT4/MT5 Basics', 'TradingView Charting', 'Order Execution Systems', 'Indicators & Tools', 'Mobile Trading Apps'], videos: 9, dur: '4h 50m' },
            { n: '03', color: '#1551a0', tag: 'Blockchain', title: 'Blockchain & FinTech Innovation', desc: 'How blockchain is reshaping financial ecosystems.', topics: ['Blockchain Basics', 'Smart Contracts', 'DeFi', 'Crypto Platforms', 'Web3 Applications'], videos: 6, dur: '3h 10m' },
            { n: '04', color: '#1551a0', tag: 'Cybersecurity', title: 'Cybersecurity in Trading', desc: 'Protect trading systems and digital assets from threats.', topics: ['Common Security Threats', 'Secure Trading Practices', '2FA', 'Data Encryption', 'Avoiding Scams'], videos: 6, dur: '3h 00m' },
        ],
        investment: [
            { n: '01', color: '#15623a', tag: 'Stocks & ETFs', title: 'Stock Market Investing', desc: 'Evaluate equities and build stock-based portfolios.', topics: ['Stock Valuation', 'P/E & P/B Ratios', 'Dividend Investing', 'Growth vs Value', 'ETF Selection'], videos: 8, dur: '4h 20m' },
            { n: '02', color: '#15623a', tag: 'Fixed Income', title: 'Bonds & Fixed Income', desc: 'Understand bond markets, yields and interest rate risk.', topics: ['Bond Basics', 'Yield Curves', 'Duration Risk', 'Government vs Corporate', 'Bond ETFs'], videos: 6, dur: '3h 20m' },
            { n: '03', color: '#15623a', tag: 'Real Estate', title: 'Real Estate Investment', desc: 'Residential, commercial and REIT-based investing.', topics: ['Buy-to-Let Basics', 'REITs', 'Commercial Property', 'Leverage in Property', 'Market Cycles'], videos: 7, dur: '3h 50m' },
            { n: '04', color: '#15623a', tag: 'Portfolio Theory', title: 'Modern Portfolio Theory', desc: 'Build optimised portfolios using MPT and factor investing.', topics: ['Efficient Frontier', 'Risk-Return Trade-off', 'Factor Investing', 'Rebalancing', 'Alternative Assets'], videos: 8, dur: '4h 30m' },
        ],
        energy: [
            { n: '01', color: '#c95c0a', tag: 'Crude Oil', title: 'Crude Oil Market Fundamentals', desc: 'Learn crude oil trading and global demand–supply dynamics.', topics: ['Types of Crude (WTI, Brent)', 'Supply & Demand', 'Oil Pricing Mechanism', 'Role of Refineries', 'EIA Inventory Reports'], videos: 7, dur: '3h 45m' },
            { n: '02', color: '#c95c0a', tag: 'Natural Gas', title: 'Natural Gas Market Insights', desc: 'Natural gas trading, seasonal demand, and LNG markets.', topics: ['Natural Gas Pricing', 'Seasonal Demand', 'Storage & Supply Data', 'LNG Market Overview', 'Weather Impact on Prices'], videos: 6, dur: '3h 20m' },
            { n: '03', color: '#c95c0a', tag: 'OPEC & Geopolitics', title: 'OPEC & Geopolitics', desc: 'How politics and OPEC decisions influence energy prices.', topics: ['OPEC & OPEC+ Decisions', 'Production Cuts', 'Geopolitical Conflicts', 'Middle East Influence', 'Sanctions & Trade'], videos: 8, dur: '4h 10m' },
            { n: '04', color: '#c95c0a', tag: 'Renewables', title: 'Renewable Energy Trends', desc: 'Analyze clean energy shift and its market impact.', topics: ['Solar & Wind Growth', 'Government Policies', 'ESG Investing Trends', 'Fossil Fuel Transition', 'Future Energy Demand'], videos: 6, dur: '3h 10m' },
            { n: '05', color: '#c95c0a', tag: 'Energy Futures', title: 'Energy Futures & Derivatives', desc: 'Advanced energy trading instruments, options and hedging.', topics: ['Oil Futures Contracts', 'Natural Gas Futures', 'Options Basics', 'Hedging Strategies', 'Margin & Leverage'], videos: 10, dur: '5h 30m' },
        ],
        ta: [
            { n: '01', color: '#D6260E', tag: 'Candlestick Mastery', title: 'Candlestick Patterns', desc: 'Read and trade every major candlestick formation.', topics: ['Single Candle Patterns', 'Engulfing Patterns', 'Doji & Hammer', 'Evening/Morning Star', 'Pattern Reliability Scoring'], videos: 8, dur: '4h 00m' },
            { n: '02', color: '#D6260E', tag: 'Chart Patterns', title: 'Classic Chart Patterns', desc: 'Head & shoulders, flags, triangles and wedges.', topics: ['Head & Shoulders', 'Double Top/Bottom', 'Flag & Pennant Patterns', 'Triangle Breakouts', 'Volume Confirmation'], videos: 9, dur: '4h 30m' },
            { n: '03', color: '#D6260E', tag: 'Indicators', title: 'Technical Indicators Masterclass', desc: 'RSI, MACD, Bollinger Bands and Moving Averages in depth.', topics: ['RSI & Divergence', 'MACD Signal Crossovers', 'Bollinger Bands', 'Moving Average Strategies', 'Indicator Combinations'], videos: 10, dur: '5h 10m' },
            { n: '04', color: '#D6260E', tag: 'Price Action', title: 'Pure Price Action Trading', desc: 'Trade without indicators using structure and levels.', topics: ['Market Structure', 'Higher Highs & Higher Lows', 'Order Blocks', 'Fair Value Gaps', 'Supply & Demand Zones'], videos: 8, dur: '4h 20m' },
        ],
        trading: [
            { n: '01', color: '#0a7c52', tag: 'Forex Trading', title: 'Forex Market Mastery', desc: 'Trade major, minor and exotic currency pairs profitably.', topics: ['Currency Pairs Explained', 'Session Overlaps', 'Economic Calendar', 'News Trading', 'Position Management'], videos: 9, dur: '4h 50m' },
            { n: '02', color: '#0a7c52', tag: 'Futures & CFDs', title: 'Futures & CFD Trading', desc: 'Understand futures, CFDs, leverage and margin management.', topics: ['Futures Contracts Basics', 'CFD Mechanics', 'Margin & Leverage', 'Rollover & Expiry', 'Hedging with Futures'], videos: 8, dur: '4h 20m' },
            { n: '03', color: '#0a7c52', tag: 'Scalping', title: 'Scalping & Day Trading', desc: 'High-frequency intraday strategies and execution tactics.', topics: ['1-Minute Scalping', 'Order Flow Reading', 'DOM & Level 2', 'Execution Speed', 'Scalping Psychology'], videos: 7, dur: '3h 40m' },
            { n: '04', color: '#0a7c52', tag: 'Swing Trading', title: 'Swing Trading Strategies', desc: 'Hold trades for days to weeks using technical & fundamental.', topics: ['Swing Setup Identification', 'Multi-timeframe Analysis', 'Entry Triggers', 'Profit Targets', 'Managing Open Trades'], videos: 8, dur: '4h 10m' },
        ],
        };

        // ═══════════════════════════════════
        //  PAGE SYSTEM
        // ═══════════════════════════════════
        const ALL_PAGES = ['home', 'upcoming', 'aired', 'contributor', 'ai', 'crypto', 'financial', 'tax', 'technology', 'investment', 'energy', 'ta', 'trading'];
        function gp(id) {
            ALL_PAGES.forEach(p => {
                document.getElementById('page-' + p)?.classList.toggle('active', p === id);
                document.getElementById('nt-' + p)?.classList.toggle('active', p === id);
            });

            window.scrollTo({ top: 0, behavior: 'smooth' });
            buildPage(id);
            setTimeout(triggerReveal, 80);
            setTimeout(triggerProg, 250);
            setTimeout(initAllBars, 60);
        }

        // ═══════════════════════════════════
        //  BUILD HOME CATEGORY GRID
        // ═══════════════════════════════════
        function buildHome() {
            const grid = document.getElementById('home-cats-grid');
            if (grid.innerHTML.trim()) return;

            grid.innerHTML = CATS.map(c => `
                <div class="col-6 col-md-4 col-lg-3 reveal">
                <div onclick="gp('${c.id}')" style="background:var(--zed-card-bg);border:1px solid var(--zed-banner-bg-end);padding:22px 18px;cursor:pointer;transition:all .25s;text-align:center;height:100%;"
                    onmouseover="this.style.borderColor='${c.color}';this.style.transform='translateY(-4px)';this.style.boxShadow='0 14px 36px rgba(0,0,0,.07)'"
                    onmouseout="this.style.borderColor='var(--zed-banner-bg-end)';this.style.transform='';this.style.boxShadow=''">
                    <div style="width:46px;height:46px;border-radius:50%;background:${c.bg};display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.1rem;color:${c.color}">
                    <i class="fas ${c.icon}"></i>
                    </div>
                    <div style="font-size:1rem;color:var(--zed-dark-text);margin-bottom:4px;">${c.label}</div>
                    <div style="font-size:.6rem;font-weight:800;letter-spacing:.14em;text-transform:uppercase;color:${c.color}">Explore →</div>
                </div>
                </div>`).join('');
        }

        // ═══════════════════════════════════
        //  BUILD UPCOMING
        // ═══════════════════════════════════
        function buildUpcoming() {
            const g = document.getElementById('upcoming-grid');
            if (g.innerHTML.trim()) return;

            g.innerHTML = UPCOMING_DATA.map((d, i) => `
                <div class="col-md-4 reveal">
                <div class="wcard" style="--ac:${d.color}">
                    <span class="wcard-num">${d.n}</span>
                    <div class="wcard-tag"><span style="width:6px;height:6px;border-radius:50%;background:${d.color};display:inline-block;animation:bd 1s infinite"></span>${d.tag}</div>
                    <div class="wcard-title">${d.title}</div>
                    <p class="wcard-desc">${d.desc}</p>
                    ${d.topics.map(t => `<div class="topic-row"><div class="td" style="background:${d.color}"></div>${t}</div>`).join('')}
                    <div class="wcard-footer">
                    <div class="wmeta">
                        <span><i class="fas fa-user"></i> ${d.speaker}</span>
                        <span><i class="fas fa-calendar"></i> ${d.date}</span>
                        <span><i class="fas fa-clock"></i> ${d.time}</span>
                        <span><i class="fas fa-users"></i> ${d.seats}</span>
                    </div>
                    </div>
                    <div class="mt-3 d-flex gap-2">
                    <button class="wbtn" style="background:${d.color};flex:1;justify-content:center"><i class="fas fa-video"></i> Register Now</button>
                    <button class="wbtn wbtn-outline" style="border-color:${d.color};color:${d.color}" onmouseover="this.style.background='${d.color}';this.style.color='#fff'" onmouseout="this.style.background='transparent';this.style.color='${d.color}'"><i class="fas fa-bell"></i> Remind Me</button>
                    </div>
                </div>
                </div>`).join('');
        }

        // ═══════════════════════════════════
        //  BUILD AIRED
        // ═══════════════════════════════════
        function buildAired() {
            const g = document.getElementById('aired-grid');
            if (g.innerHTML.trim()) return;

            const fDiv = document.getElementById('aired-filters');
            const cats = [...new Set(AIRED_DATA.map(d => d.cat))];
            fDiv.innerHTML = `<button class="fpill on" onclick="filterAired(this,'all')">All</button>` +
                cats.map(c => `<button class="fpill" onclick="filterAired(this,'${c}')">${c.charAt(0).toUpperCase() + c.slice(1)}</button>`).join('');
            g.innerHTML = AIRED_DATA.map((d, i) => `
                <div class="col-md-6 col-lg-4 reveal" data-cat="${d.cat}">
                <div class="vc" style="--ac:${d.color}">
                    <div class="vthumb" style="background:linear-gradient(135deg,${d.bgGrad})">
                    <div class="vanim" id="av${i}"></div><div class="vgrad"></div>
                    <div class="vplay-w"><div class="vplay" style="background:${d.color}"><i class="fas fa-play ms-1"></i></div></div>
                    <div class="vstatus" style="background:${d.status === 'NEW' ? d.color : 'rgba(0,0,0,.65)'};color:#fff">${d.status === 'NEW' ? '<span class="blink-dot me-1" style="background:#fff"></span>' : ''} ${d.status}</div>
                    <div class="vdur">${d.dur}</div>
                    </div>
                    <div class="vbody">
                    <div class="vcat" style="color:${d.color}">${d.cat.toUpperCase()}</div>
                    <div class="vtitle">${d.title}</div>
                    <div class="vmeta"><span><i class="fas fa-user"></i> ${d.speaker}</span><span><i class="fas fa-eye"></i> ${d.views} views</span></div>
                    </div>
                </div>
                </div>`).join('');
            AIRED_DATA.forEach((_, i) => buildBars('av' + i, AIRED_DATA[i].color));
        }

        function filterAired(el, f) {
            document.querySelectorAll('#aired-filters .fpill').forEach(p => p.classList.remove('on'));
            el.classList.add('on');
            document.querySelectorAll('#aired-grid>[data-cat]').forEach(c => {
                c.style.display = (f === 'all' || c.dataset.cat === f) ? '' : 'none';
            });
        }

        // ═══════════════════════════════════
        //  BUILD CONTRIBUTORS
        // ═══════════════════════════════════
        function buildContrib() {
            const g = document.getElementById('contrib-grid');
            if (g.innerHTML.trim()) return;

            g.innerHTML = CONTRIB_DATA.map(d => `
                <div class="col-md-6 col-xl-4 reveal">
                <div class="contrib" style="--ac:${d.color}">
                    <div class="d-flex align-items-center gap-3 mb-12" style="margin-bottom:12px">
                    <div class="contrib-av" style="border-color:${d.color};color:${d.color}">${d.init}</div>
                    <div>
                        <div class="contrib-name">${d.name}</div>
                        <span class="contrib-role" style="background:${d.color}18;color:${d.color};border:1px solid ${d.color}33">${d.role}</span>
                    </div>
                    </div>
                    <p class="contrib-desc">${d.desc}</p>
                    <div>${d.chips.map(c => `<span class="chip"><i class="fas fa-check" style="color:${d.color};font-size:.55rem"></i>${c}</span>`).join('')}</div>
                    <div class="wcard-footer" style="margin-top:14px">
                    <div></div>
                    <button class="wbtn" style="background:${d.color}"><i class="fas fa-video"></i> Join Webinar</button>
                    </div>
                </div>
                </div>`).join('');
        }

        // ═══════════════════════════════════
        //  BUILD MODULE PAGES
        // ═══════════════════════════════════
        function buildModules(key, gridId, color) {
            const g = document.getElementById(gridId);
            if (!g || g.innerHTML.trim()) return;

            const data = MODULE_DATA[key] || [];
            g.innerHTML = data.map(d => `
            <div class="col-md-6 col-xl-4 reveal">
            <div class="wcard" style="--ac:${d.color}">
                <span class="wcard-num">${d.n}</span>
                <div class="wcard-tag">${d.tag}</div>
                <div class="wcard-title">${d.title}</div>
                <p class="wcard-desc">${d.desc}</p>
                ${d.topics.map(t => `<div class="topic-row"><div class="td" style="background:${d.color}"></div>${t}</div>`).join('')}
                <div class="prog" style="--ac:${d.color}"><div class="prog-fill"></div></div>
                <div class="wcard-footer">
                <div class="wmeta">
                    <span><i class="fas fa-play-circle"></i> ${d.videos} videos</span>
                    <span><i class="fas fa-clock"></i> ${d.dur}</span>
                </div>
                <button class="wbtn" style="background:${d.color}"><i class="fas fa-arrow-right"></i> Start</button>
                </div>
            </div>
            </div>`).join('');
        }

        // ═══════════════════════════════════
        //  BUILD PAGE ROUTER
        // ═══════════════════════════════════
        function buildPage(id) {
        switch (id) {
            case 'home': buildHome(); $(".main-nav").addClass('d-none'); break;
            case 'upcoming': buildUpcoming();  $(".main-nav").removeClass('d-none'); break;
            case 'aired': buildAired();  $(".main-nav").removeClass('d-none'); break;
            case 'contributor': buildContrib();  $(".main-nav").removeClass('d-none'); break;
            case 'ai': buildModules('ai', 'ai-grid', '#5b2d8e');  $(".main-nav").removeClass('d-none'); break;
            case 'crypto': buildModules('crypto', 'crypto-grid', '#c95c0a');  $(".main-nav").removeClass('d-none'); break;
            case 'financial': buildModules('financial', 'financial-grid', '#1a2f5e');  $(".main-nav").removeClass('d-none'); break;
            case 'tax': buildModules('tax', 'tax-grid', '#0a6b7c');  $(".main-nav").removeClass('d-none'); break;
            case 'technology': buildModules('technology', 'tech-grid', '#1551a0');  $(".main-nav").removeClass('d-none'); break;
            case 'investment': buildModules('investment', 'inv-grid', '#15623a');  $(".main-nav").removeClass('d-none'); break;
            case 'energy': buildModules('energy', 'energy-grid', '#c95c0a');  $(".main-nav").removeClass('d-none'); break;
            case 'ta': buildModules('ta', 'ta-grid', '#D6260E');  $(".main-nav").removeClass('d-none'); break;
            case 'trading': buildModules('trading', 'trading-grid', '#0a7c52');  $(".main-nav").removeClass('d-none'); break;
        }
        }

        // ═══════════════════════════════════
        //  ANIMATED BARS
        // ═══════════════════════════════════
        const BAR_REGISTRY = [];
        function buildBars(id, color) {
        const el = document.getElementById(id);
        if (!el || el.childElementCount > 0) return;
        const hs = [38, 62, 28, 84, 46, 70, 30, 90, 52, 40, 76, 54, 88, 36, 64, 28, 80, 50, 74, 44];
        hs.forEach((h, i) => {
            const b = document.createElement('div');
            b.className = 'vbar';
            b.style.cssText = `height:${h}%;background:${color};opacity:.55;animation-delay:${i * .1}s;animation-duration:${1.5 + Math.random() * 1.3}s;`;
            el.appendChild(b);
        });
        }
        function initAllBars() {
        document.querySelectorAll('.vanim[id]').forEach(el => {
            if (el.childElementCount === 0) {
            const color = el.closest('[style*="--ac"]')?.style.getPropertyValue('--ac') || '#D6260E';
            buildBars(el.id, color.trim());
            }
        });
        }

        // ═══════════════════════════════════
        //  SCROLL REVEAL
        // ═══════════════════════════════════
        function triggerReveal() {
        const obs = new IntersectionObserver(entries => {
            entries.forEach((e, i) => {
            if (e.isIntersecting) { setTimeout(() => e.target.classList.add('in'), i * 60); obs.unobserve(e.target); }
            });
        }, { threshold: .07 });
        document.querySelectorAll('.page.active .reveal').forEach(r => { r.classList.remove('in'); obs.observe(r); });
        }
        function triggerProg() {
        const pObs = new IntersectionObserver(entries => {
            entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.querySelectorAll('.prog-fill').forEach(b => { b.style.animation = 'none'; void b.offsetWidth; b.style.animation = 'pf 1.3s .2s ease forwards'; });
                pObs.unobserve(e.target);
            }
            });
        }, { threshold: .2 });
        document.querySelectorAll('.page.active .wcard').forEach(c => pObs.observe(c));
        }

        // ═══════════════════════════════════
        //  COUNTDOWN
        // ═══════════════════════════════════
        function updateCountdown() {
        const target = new Date('2026-06-11T17:00:00Z');
        const diff = target - new Date();
        if (diff <= 0) return;
        const pad = n => String(Math.floor(n)).padStart(2, '0');
        document.getElementById('cd-d').textContent = pad(diff / 86400000);
        document.getElementById('cd-h').textContent = pad((diff % 86400000) / 3600000);
        document.getElementById('cd-m').textContent = pad((diff % 3600000) / 60000);
        document.getElementById('cd-s').textContent = pad((diff % 60000) / 1000);
        }
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // ═══════════════════════════════════
        //  INIT
        // ═══════════════════════════════════
        buildHome();
        triggerReveal();
    </script>
<?php
include_once ('elements/footer.php');
?>
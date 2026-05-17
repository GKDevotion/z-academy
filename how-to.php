<?php 
include_once ('elements/header.php');
?>

    <style>

        /* ── HERO ── */
        .hero {
            padding: 90px 0 60px;
            background: var(--zed-light-bg);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -200px;
            right: -200px;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(224, 35, 24, .04) 0%, transparent 70%);
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
            opacity: .2;
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
            margin-bottom: 16px;
        }

        .hero-eyebrow::before,
        .hero-eyebrow::after {
            content: '';
            display: block;
            width: 28px;
            height: 1.5px;
            background: var(--zed-primary);
        }

        .hero-title {
            font-family: 'Syne', sans-serif;
            font-size: clamp(2rem, 5vw, 3.4rem);
            font-weight: 800;
            color: var(--zed-dark-text);
            line-height: 1.1;
            margin-bottom: 14px;
        }

        .hero-title em {
            font-style: normal;
            color: var(--zed-primary);
        }

        .hero-sub {
            font-size: .9rem;
            color: var(--zed-secondary);
            max-width: 440px;
            margin: 0 auto 0;
            line-height: 1.8;
        }

        /* ── FILTER BAR ── */
        .filter-bar {
            background: var(--zed-light-bg);
            border-bottom: 1px solid var(--zed-border-color);
            border-top: 1px solid var(--zed-border-color);
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 200;
            box-shadow: 0 2px 12px rgba(0, 0, 0, .04);
        }

        .fpill {
            background: transparent;
            border: 1px solid var(--zed-border-color);
            color: var(--zed-secondary);
            padding: 7px 16px;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .07em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all .22s;
            font-family: 'Mulish', sans-serif;
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

        /* ── MAIN VIDEO PLAYER ── */
        .player-wrap {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(0, 0, 0, .08);
            max-width: 820px;
            margin: 0 auto;
        }

        .player-screen {
            position: relative;
            aspect-ratio: 16/9;
            background: #0d0d12;
            overflow: hidden;
            cursor: pointer;
        }

        .player-canvas {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            gap: 2px;
            padding: 24px 18px 0;
        }

        .player-bar {
            flex: 1;
            border-radius: 2px 2px 0 0;
            animation: playerBarAnim 1.8s ease-in-out infinite alternate;
            min-height: 4px;
            background: rgba(224, 35, 24, .5);
        }

        @keyframes playerBarAnim {
            from {
                transform: scaleY(1)
            }

            to {
                transform: scaleY(.28)
            }
        }

        .player-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, .55) 0%, rgba(0, 0, 0, .2) 50%, rgba(0, 0, 0, .7) 100%);
        }

        .player-title-overlay {
            position: absolute;
            top: 20px;
            left: 22px;
            right: 22px;
        }

        .player-brand {
            display: inline-block;
            background: var(--zed-primary);
            color: #fff;
            font-family: 'Syne', sans-serif;
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .06em;
            padding: 4px 10px;
            border-radius: 2px;
            margin-bottom: 8px;
        }

        .player-vtitle {
            font-family: 'Syne', sans-serif;
            font-size: clamp(1.1rem, 3vw, 1.8rem);
            font-weight: 800;
            color: #fff;
            line-height: 1.2;
            text-transform: uppercase;
            text-shadow: 0 2px 12px rgba(0, 0, 0, .5);
        }

        .player-vtitle span {
            color: var(--zed-primary);
        }

        .player-center-btn {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .player-play {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .18);
            border: 2px solid rgba(255, 255, 255, .6);
            backdrop-filter: blur(8px);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            color: #fff;
            cursor: pointer;
            transition: all .25s;
            box-shadow: 0 4px 28px rgba(0, 0, 0, .3);
        }

        .player-play:hover,
        .player-play.playing {
            background: var(--zed-primary);
            border-color: var(--zed-primary);
            transform: scale(1.08);
            box-shadow: 0 8px 36px rgba(224, 35, 24, .5);
        }

        .player-play.playing .fa-play {
            display: none;
        }

        .player-play.playing::before {
            content: '\f04c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 1.1rem;
        }

        .player-controls {
            background: var(--zed-light-bg);
            padding: 14px 18px;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .ctrl-btn {
            background: none;
            border: none;
            color: var(--zed-dark-text);
            cursor: pointer;
            font-size: .9rem;
            padding: 4px;
            transition: color .2s;
            line-height: 1;
        }

        .ctrl-btn:hover {
            color: var(--zed-primary);
        }

        .time-display {
            font-family: 'Syne', sans-serif;
            font-size: .75rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            white-space: nowrap;
            min-width: 90px;
        }

        .progress-track {
            flex: 1;
            height: 5px;
            background: var(--zed-border-color);
            border-radius: 3px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--zed-primary);
            border-radius: 3px;
            width: 22%;
            transition: width .3s linear;
        }

        .progress-track:hover .progress-fill {
            background: var(--zed-primary-hover);
        }

        .vol-slider {
            width: 70px;
            accent-color: var(--zed-primary);
            cursor: pointer;
        }

        .quality-btn {
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .08em;
            background: var(--zed-border-color);
            border: 1px solid var(--zed-border-color);
            border-radius: 2px;
            padding: 3px 8px;
            color: var(--zed-secondary);
            cursor: pointer;
            transition: all .2s;
        }

        .quality-btn:hover {
            background: var(--zed-primary);
            color: #fff;
            border-color: var(--zed-primary);
        }

        /* ── VIDEO GRID ── */
        .vid-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            transition: transform .28s, box-shadow .28s, border-color .28s;
            height: 100%;
        }

        .vid-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 40px rgba(0, 0, 0, .1);
            border-color: var(--zed-primary);
        }

        .vid-card.active-card {
            border-color: var(--zed-primary);
            box-shadow: 0 0 0 2px var(--zed-primary);
        }

        .vid-thumb {
            position: relative;
            aspect-ratio: 16/9;
            background: #0d0d12;
            overflow: hidden;
        }

        .vt-canvas {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            gap: 1.5px;
            padding: 12px 8px 0;
        }

        .vt-bar {
            flex: 1;
            border-radius: 1px 1px 0 0;
            animation: vtb 2.2s ease-in-out infinite alternate;
            min-height: 3px;
        }

        @keyframes vtb {
            from {
                transform: scaleY(1)
            }

            to {
                transform: scaleY(.25)
            }
        }

        .vt-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, .25) 40%, rgba(0, 0, 0, .7));
        }

        .vt-brand {
            position: absolute;
            top: 8px;
            left: 8px;
            background: var(--zed-primary);
            color: #fff;
            font-family: 'Syne', sans-serif;
            font-size: .55rem;
            font-weight: 800;
            letter-spacing: .06em;
            padding: 2px 7px;
            border-radius: 2px;
        }

        .vt-htitle {
            position: absolute;
            top: 24px;
            left: 8px;
            right: 8px;
        }

        .vt-how {
            font-family: 'Syne', sans-serif;
            font-size: .55rem;
            font-weight: 800;
            color: rgba(255, 255, 255, .7);
            letter-spacing: .12em;
            text-transform: uppercase;
            margin-bottom: 2px;
        }

        .vt-main {
            font-family: 'Syne', sans-serif;
            font-size: clamp(.7rem, 1.5vw, .85rem);
            font-weight: 800;
            color: var(--zed-primary);
            line-height: 1.15;
            text-transform: uppercase;
        }

        .vt-sub {
            font-family: 'Mulish', sans-serif;
            font-size: .6rem;
            font-weight: 600;
            color: rgba(255, 255, 255, .75);
            margin-top: 3px;
            text-transform: uppercase;
            letter-spacing: .06em;
        }

        .vt-play {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .18);
            border: 1.5px solid rgba(255, 255, 255, .65);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: .8rem;
            backdrop-filter: blur(4px);
            transition: all .22s;
        }

        .vid-card:hover .vt-play,
        .vid-card.active-card .vt-play {
            background: var(--zed-primary);
            border-color: var(--zed-primary);
            transform: translate(-50%, -50%) scale(1.1);
        }

        .vt-dur {
            position: absolute;
            bottom: 7px;
            right: 8px;
            background: rgba(0, 0, 0, .7);
            color: #fff;
            font-size: .58rem;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 2px;
        }

        .vt-badge {
            position: absolute;
            top: 7px;
            right: 8px;
            font-size: .5rem;
            font-weight: 800;
            letter-spacing: .1em;
            padding: 2px 7px;
            border-radius: 2px;
        }

        .vt-badge.bonus {
            background: #9333ea;
            color: #fff;
        }

        .vt-badge.new {
            background: var(--zed-primary);
            color: #fff;
        }

        .vid-body {
            padding: 12px 14px 14px;
        }

        .vid-title {
            font-family: 'Syne', sans-serif;
            font-size: .85rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            line-height: 1.35;
            margin-bottom: 5px;
            transition: color .2s;
        }

        .vid-card:hover .vid-title {
            color: var(--zed-primary);
        }

        .vid-meta {
            font-size: .68rem;
            color: var(--gold);
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            align-items: center;
        }

        .vid-meta i {
            color: var(--zed-primary);
            font-size: .6rem;
        }

        /* ── PAGINATION ── */
        .pgn {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .pgn-btn {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            color: var(--zed-secondary);
            font-family: 'Syne', sans-serif;
            font-size: .72rem;
            font-weight: 700;
            padding: 8px 16px;
            border-radius: 2px;
            cursor: pointer;
            transition: all .2s;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .pgn-btn:hover {
            border-color: var(--zed-primary);
            color: var(--zed-primary);
        }

        .pgn-btn.disabled {
            opacity: .4;
            pointer-events: none;
        }

        .pgn-num {
            width: 36px;
            height: 36px;
            border-radius: 2px;
            border: 1px solid var(--zed-border-color);
            background: var(--zed-light-bg);
            color: var(--zed-secondary);
            font-family: 'Syne', sans-serif;
            font-size: .78rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all .2s;
        }

        .pgn-num:hover {
            border-color: var(--zed-primary);
            color: var(--zed-primary);
        }

        .pgn-num.on {
            background: var(--zed-primary);
            border-color: var(--zed-primary);
            color: #fff;
        }

        /* ── HELP BAR ── */
        .help-bar {
            background: var(--zed-border-color);
            border-top: 1px solid var(--zed-border-color);
            padding: 20px 0;
            text-align: center;
        }

        /* ── SCROLL REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .45s ease, transform .45s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0);
        }

        @media(max-width:576px) {
            .player-vtitle {
                font-size: 1rem;
            }

            .player-controls {
                gap: 8px;
                flex-wrap: wrap;
            }

            .vol-slider {
                width: 50px;
            }
        }
    </style>
    
    <!-- ── HERO ── -->
    <div class="hero">
        <div class="container text-center">
            <div class="hero-eyebrow">Tutorial Series</div>
            <h1 class="hero-title">Watch and Learn with Our<br><em>How-To</em> Videos</h1>
            <p class="hero-sub">Dive into the world of online trading with our series of informative step-by-step video
                tutorials.</p>
        </div>
    </div>

    <!-- ── MAIN PLAYER ── -->
    <section style="padding:52px 0 44px;background:var(--zed-light-bg);">
        <div class="container">
            <div class="player-wrap reveal">
                <div class="player-screen" id="player-screen" onclick="togglePlay()">
                    <!-- Animated bar chart background -->
                    <div class="player-canvas" id="player-canvas"></div>
                    <div class="player-overlay"></div>
                    <div class="player-title-overlay">
                        <div class="player-brand">ZedCapital</div>
                        <div class="player-vtitle"><span>How To</span><br>LOGIN TO MT4</div>
                        <div
                            style="font-size:.7rem;color:rgba(255,255,255,.55);margin-top:6px;font-family:'Mulish',sans-serif;">
                            You will see the 'open an account' dialog box. Click 'Cancel'</div>
                    </div>
                    <!-- Platform pill -->
                    <div
                        style="position:absolute;top:20px;right:20px;background:rgba(0,0,0,.5);backdrop-filter:blur(6px);border:1px solid rgba(255,255,255,.15);border-radius:20px;padding:4px 12px;font-size:.62rem;font-weight:700;color:#fff;letter-spacing:.08em">
                        <i class="fab fa-android" style="color:#3ddc84;margin-right:4px"></i> Android
                    </div>
                    <div class="player-center-btn">
                        <div class="player-play" id="player-play-btn" onclick="togglePlay(event)">
                            <i class="fas fa-play ms-1"></i>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <div class="player-controls">
                    <button class="ctrl-btn" onclick="togglePlay()"><i class="fas fa-pause" id="ctrl-icon"></i></button>
                    <button class="ctrl-btn"><i class="fas fa-backward-step"></i></button>
                    <button class="ctrl-btn"><i class="fas fa-forward-step"></i></button>
                    <div class="time-display" id="time-display">00:21 / 01:40</div>
                    <div class="progress-track" onclick="seekVideo(event)">
                        <div class="progress-fill" id="progress-fill"></div>
                    </div>
                    <button class="ctrl-btn"><i class="fas fa-volume-high"></i></button>
                    <input type="range" class="vol-slider" min="0" max="100" value="80" id="vol-range" />
                    <span class="quality-btn">HD</span>
                    <button class="ctrl-btn" style="font-size:.8rem"><i class="fas fa-expand"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FILTER BAR ── -->
    <div class="filter-bar">
        <div class="container">
            <div class="d-flex gap-2 overflow-auto pb-1" style="scrollbar-width:none">
                <button class="fpill on" onclick="filterVids(this,'all')">All Videos</button>
                <button class="fpill" onclick="filterVids(this,'mt4')">MT4 Login</button>
                <button class="fpill" onclick="filterVids(this,'account')">Account</button>
                <button class="fpill" onclick="filterVids(this,'deposit')">Deposit</button>
                <button class="fpill" onclick="filterVids(this,'download')">Download</button>
                <button class="fpill" onclick="filterVids(this,'bonus')">Bonus</button>
                <button class="fpill" onclick="filterVids(this,'documents')">Documents</button>
            </div>
        </div>
    </div>

    <!-- ── VIDEO GRID ── -->
    <section style="padding:16px 0 60px;background:var(--zed-card-back);">
        <div class="container">
            <div class="row g-3" id="vid-grid">
                <!-- Injected by JS -->
            </div>
            <!-- Pagination -->
            <div class="d-flex justify-content-center align-items-center gap-2 mt-5" id="pagination"></div>
        </div>
    </section>

    <!-- ── HELP BAR ── -->
    <div class="help-bar">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap">
                <div
                    style="width:42px;height:42px;border-radius:50%;background:var(--zed-light-red-hover);border:1px solid rgba(224,35,24,.2);display:flex;align-items:center;justify-content:center;color:var(--zed-primary);font-size:1rem">
                    <i class="fas fa-headset"></i>
                </div>
                <div>
                    <span style="font-family:'Syne',sans-serif;font-size:.92rem;font-weight:700;color:var(--zed-dark-text);">Need
                        help?</span>
                    <span style="font-size:.8rem;color:var(--zed-secondary);margin-left:8px;">If you need help, just contact our
                        customer support at</span>
                    <a href="mailto:academy@zedcapital.com"
                        style="color:var(--zed-primary);font-weight:600;font-size:.8rem;text-decoration:none;margin-left:4px;">academy@zedcapital.com</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ═══════════ DATA ═══════════
        const VIDEOS = [
            { id: 1, cat: 'mt4', color: '#E02318', bg: '#1a0808,#2d0a0a', how: 'How to', main: 'Login to MT4', sub: 'Android', title: 'How to login to MT4 | Android', date: '23.01.2023', dur: '1 min 32 sec', platform: 'android', badge: '' },
            { id: 2, cat: 'mt4', color: '#E02318', bg: '#0a0a1a,#0d0d2d', how: 'How to', main: 'Login to MT4', sub: 'Windows', title: 'How to login to MT4 | Windows', date: '23.01.2023', dur: '2 min 51 sec', platform: 'windows', badge: '' },
            { id: 3, cat: 'mt4', color: '#E02318', bg: '#0a1008,#101a0a', how: 'How to', main: 'Login to MT4', sub: 'MacOS & iOS', title: 'How to login to MT4 | MacOS and iOS', date: '23.01.2023', dur: '3 min 40 sec', platform: 'apple', badge: '' },
            { id: 4, cat: 'documents', color: '#1551a0', bg: '#080a1a,#0a0d2d', how: 'How to', main: 'Upload Documents', sub: '', title: 'ZedCapital | How to upload documents', date: '23.01.2023', dur: '1 min 1 sec', platform: '', badge: '' },
            { id: 5, cat: 'account', color: '#0a6b7c', bg: '#080d0d,#0a1515', how: 'How to', main: 'Open an Absolute\nZero Account', sub: '', title: 'ZedCapital | How to open an absolute zero...', date: '23.01.2023', dur: '1 min 37 sec', platform: '', badge: '' },
            { id: 6, cat: 'deposit', color: '#15623a', bg: '#080d08,#0a150a', how: 'How to', main: 'Deposit', sub: '', title: 'How to Deposit | ZedCapital', date: '23.01.2023', dur: '45 sec', platform: '', badge: 'new' },
            { id: 7, cat: 'account', color: '#1551a0', bg: '#060610,#0a0a1e', how: 'How to', main: 'Open an Additional\nAccount', sub: '', title: 'How to open an additional Account | ZedCapital', date: '23.01.2023', dur: '1 min', platform: '', badge: '' },
            { id: 8, cat: 'download', color: '#E02318', bg: '#100808,#1e0d0d', how: 'How to', main: 'Download MT4', sub: 'MetaTrader 4', title: 'How to Download MT4 | ZedCapital', date: '23.01.2023', dur: '1 min 12 sec', platform: '', badge: '' },
            { id: 9, cat: 'download', color: '#E02318', bg: '#0d0808,#1a0a0a', how: 'How to', main: 'Download the New IFX Trading App', sub: 'iOS', title: 'How to download the New IFX trading App', date: '23.01.2023', dur: '3 min 28 sec', platform: 'apple', badge: '' },
            { id: 10, cat: 'download', color: '#E02318', bg: '#100806,#1e0c08', how: 'How to', main: 'Download the New IFX Trading App', sub: 'Android', title: 'Android How to download the New IFX...', date: '23.01.2023', dur: '3 min 29 sec', platform: 'android', badge: '' },
            { id: 11, cat: 'bonus', color: '#9333ea', bg: '#0d0418,#160824', how: 'Bonus', main: 'Power Bonus', sub: '40%', title: 'ZedCapital | Power Bonus', date: '23.01.2023', dur: '1 min 9 sec', platform: '', badge: 'bonus' },
            { id: 12, cat: 'bonus', color: '#9333ea', bg: '#100318,#1c0824', how: 'Bonus', main: 'Iron Bonus', sub: '20%', title: 'ZedCapital | Iron Bonus', date: '23.01.2023', dur: '1 min 9 sec', platform: '', badge: 'bonus' },
            // Page 2
            { id: 13, cat: 'account', color: '#15623a', bg: '#060d06,#0a150a', how: 'How to', main: 'Withdraw', sub: '', title: 'How to Withdraw Funds | ZedCapital', date: '23.01.2023', dur: '2 min 14 sec', platform: '', badge: 'new' },
            { id: 14, cat: 'mt4', color: '#E02318', bg: '#1a0808,#2d0a0a', how: 'How to', main: 'Use MT4', sub: 'Charts', title: 'How to use MT4 Charts | ZedCapital', date: '23.01.2023', dur: '4 min 10 sec', platform: '', badge: '' },
            { id: 15, cat: 'deposit', color: '#15623a', bg: '#080d08,#0a1510', how: 'How to', main: 'Deposit via\nCard', sub: 'Visa/MC', title: 'How to Deposit via Card | ZedCapital', date: '23.01.2023', dur: '1 min 55 sec', platform: '', badge: '' },
            { id: 16, cat: 'account', color: '#0a6b7c', bg: '#060d0d,#091515', how: 'How to', main: 'Verify Your\nAccount', sub: '', title: 'ZedCapital | How to verify your account', date: '23.01.2023', dur: '2 min 30 sec', platform: '', badge: 'new' },
            { id: 17, cat: 'download', color: '#1551a0', bg: '#06060d,#0a0a1a', how: 'How to', main: 'Install MT5', sub: 'Desktop', title: 'How to Install MT5 | ZedCapital', date: '23.01.2023', dur: '2 min 44 sec', platform: 'windows', badge: '' },
            { id: 18, cat: 'bonus', color: '#9333ea', bg: '#0d0318,#190524', how: 'Bonus', main: 'Loyalty\nBonus', sub: '15%', title: 'ZedCapital | Loyalty Bonus Program', date: '23.01.2023', dur: '1 min 22 sec', platform: '', badge: 'bonus' },
            { id: 19, cat: 'mt4', color: '#E02318', bg: '#180808,#2a0a0a', how: 'How to', main: 'Set Alerts\non MT4', sub: 'Price Alerts', title: 'How to Set Price Alerts on MT4 | ZedCapital', date: '23.01.2023', dur: '1 min 48 sec', platform: '', badge: '' },
            { id: 20, cat: 'documents', color: '#1551a0', bg: '#06080d,#0a0c1a', how: 'How to', main: 'Submit KYC\nDocs', sub: '', title: 'ZedCapital | How to submit KYC documents', date: '23.01.2023', dur: '2 min 5 sec', platform: '', badge: '' },
            { id: 21, cat: 'account', color: '#0a6b7c', bg: '#060d0d,#091515', how: 'How to', main: 'Change\nLeverage', sub: '', title: 'ZedCapital | How to change account leverage', date: '23.01.2023', dur: '58 sec', platform: '', badge: '' },
            { id: 22, cat: 'deposit', color: '#15623a', bg: '#060d08,#091508', how: 'How to', main: 'Deposit via\nBank', sub: 'Wire Transfer', title: 'How to Deposit via Wire Transfer | ZedCapital', date: '23.01.2023', dur: '1 min 20 sec', platform: '', badge: '' },
            { id: 23, cat: 'download', color: '#E02318', bg: '#0d0808,#1a0a0a', how: 'How to', main: 'Get the IFX\nApp', sub: 'Huawei', title: 'How to download IFX App | Huawei', date: '23.01.2023', dur: '2 min 15 sec', platform: 'android', badge: '' },
            { id: 24, cat: 'bonus', color: '#9333ea', bg: '#0d0318,#180524', how: 'Bonus', main: 'Summer\nBonus', sub: '50%', title: 'ZedCapital | Summer Bonus Special', date: '23.01.2023', dur: '1 min 44 sec', platform: '', badge: 'bonus' },
        ];

        const PER_PAGE = 12;
        let currentPage = 1;
        let currentFilter = 'all';
        let filteredVids = [...VIDEOS];
        let activeVid = VIDEOS[0];

        // ═══════════ BUILD BARS ═══════════
        function buildBars(id, color, count = 18) {
            const el = document.getElementById(id);
            if (!el || el.childElementCount > 0) return;
            const hs = [35, 58, 28, 80, 44, 70, 30, 88, 52, 38, 72, 55, 85, 32, 62, 28, 78, 48];
            for (let i = 0; i < count; i++) {
                const b = document.createElement('div');
                b.className = id.startsWith('p') ? 'player-bar' : 'vt-bar';
                b.style.cssText = `height:${hs[i % hs.length]}%;background:${color};opacity:0.55;animation-delay:${i * .1}s;animation-duration:${1.6 + Math.random() * 1.2}s;`;
                el.appendChild(b);
            }
        }

        // Build player bars on load
        buildBars('player-canvas', '#E02318', 26);

        // ═══════════ RENDER GRID ═══════════
        function renderGrid() {
            filteredVids = currentFilter === 'all' ? [...VIDEOS] : VIDEOS.filter(v => v.cat === currentFilter);
            const total = filteredVids.length;
            const pages = Math.ceil(total / PER_PAGE);
            const start = (currentPage - 1) * PER_PAGE;
            const pageVids = filteredVids.slice(start, start + PER_PAGE);

            const grid = document.getElementById('vid-grid');
            grid.innerHTML = pageVids.map((v, idx) => {
                const platIcon = v.platform === 'android' ? '<i class="fab fa-android" style="color:#3ddc84"></i>' :
                    v.platform === 'windows' ? '<i class="fab fa-windows" style="color:#0078d7"></i>' :
                        v.platform === 'apple' ? '<i class="fab fa-apple" style="color:#999"></i>' : '';
                const badgeHtml = v.badge === 'bonus' ? `<div class="vt-badge bonus">BONUS VIDEO</div>` :
                    v.badge === 'new' ? `<div class="vt-badge new">NEW</div>` : '';
                const isActive = v.id === activeVid.id;
                return `
                    <div class="col-6 col-md-4 col-lg-3 reveal">
                    <div class="vid-card${isActive ? ' active-card' : ''}" onclick="selectVid(${v.id})" data-id="${v.id}">
                        <div class="vid-thumb">
                        <div class="vt-canvas" id="vtc${v.id}"></div>
                        <div class="vt-overlay"></div>
                        <div class="vt-brand">ZedCapital</div>
                        <div class="vt-htitle">
                            <div class="vt-how">HOW TO</div>
                            <div class="vt-main">${v.main}</div>
                            ${v.sub ? `<div class="vt-sub">${platIcon} ${v.sub}</div>` : ''}
                        </div>
                        ${badgeHtml}
                        <div class="vt-play"><i class="fas fa-play ms-1"></i></div>
                        <div class="vt-dur">${v.dur}</div>
                        </div>
                        <div class="vid-body">
                        <div class="vid-title">${v.title}</div>
                        <div class="vid-meta">
                            <span><i class="fas fa-calendar"></i> ${v.date}</span>
                            <span><i class="fas fa-clock"></i> ${v.dur}</span>
                        </div>
                        </div>
                    </div>
                    </div>`;
            }).join('');

            // Build bars
            pageVids.forEach(v => buildBars('vtc' + v.id, v.color));

            // Pagination
            renderPagination(pages);

            // Reveal
            setTimeout(triggerReveal, 80);
        }

        // ═══════════ PAGINATION ═══════════
        function renderPagination(pages) {
            const p = document.getElementById('pagination');
            p.innerHTML = `
    <button class="pgn-btn ${currentPage === 1 ? 'disabled' : ''}" onclick="changePage(${currentPage - 1})">
      <i class="fas fa-arrow-left"></i> Previous
    </button>
    ${Array.from({ length: pages }, (_, i) => `
      <div class="pgn-num ${i + 1 === currentPage ? 'on' : ''}" onclick="changePage(${i + 1})">${i + 1}</div>`).join('')}
    <button class="pgn-btn ${currentPage === pages ? 'disabled' : ''}" onclick="changePage(${currentPage + 1})">
      Next <i class="fas fa-arrow-right"></i>
    </button>`;
        }
        function changePage(n) {
            const pages = Math.ceil(filteredVids.length / PER_PAGE);
            if (n < 1 || n > pages) return;
            currentPage = n;
            renderGrid();
            document.getElementById('vid-grid').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // ═══════════ FILTER ═══════════
        function filterVids(el, f) {
            document.querySelectorAll('.fpill').forEach(p => p.classList.remove('on'));
            el.classList.add('on');
            currentFilter = f;
            currentPage = 1;
            renderGrid();
        }

        // ═══════════ SELECT VIDEO ═══════════
        function selectVid(id) {
            activeVid = VIDEOS.find(v => v.id === id);
            // Update player
            const brand = document.querySelector('.player-brand');
            const vtitle = document.querySelector('.player-vtitle');
            const psub = document.querySelector('.player-title-overlay div:last-child');
            if (vtitle) {
                vtitle.innerHTML = `<span>How To</span><br>${activeVid.main.toUpperCase()}`;
            }
            // Update platform badge
            const pill = document.querySelector('.player-screen > div[style*="border-radius:20px"]');
            if (pill && activeVid.platform) {
                const icons = {
                    'android': '<i class="fab fa-android" style="color:#3ddc84;margin-right:4px"></i> Android',
                    'windows': '<i class="fab fa-windows" style="color:#0078d7;margin-right:4px"></i> Windows',
                    'apple': '<i class="fab fa-apple" style="color:#aaa;margin-right:4px"></i> MacOS/iOS'
                };
                pill.innerHTML = icons[activeVid.platform] || activeVid.sub;
                pill.style.display = activeVid.platform ? 'block' : 'none';
            }
            // Reset progress
            document.getElementById('progress-fill').style.width = '2%';
            document.getElementById('time-display').textContent = `00:00 / ${activeVid.dur}`;
            // Update active card highlight
            document.querySelectorAll('.vid-card').forEach(c => c.classList.toggle('active-card', +c.dataset.id === id));
            // Scroll to player smoothly
            document.querySelector('.player-wrap').scrollIntoView({ behavior: 'smooth', block: 'start' });
            // Reset play button
            const btn = document.getElementById('player-play-btn');
            btn.classList.remove('playing');
            btn.innerHTML = '<i class="fas fa-play ms-1"></i>';
            document.getElementById('ctrl-icon').className = 'fas fa-pause';
            isPlaying = false;
        }

        // ═══════════ PLAYER CONTROLS ═══════════
        let isPlaying = false;
        let playInterval = null;
        let progress = 2;

        function togglePlay(e) {
            if (e) e.stopPropagation();
            isPlaying = !isPlaying;
            const btn = document.getElementById('player-play-btn');
            const ctrlIcon = document.getElementById('ctrl-icon');

            if (isPlaying) {
                btn.classList.add('playing');
                btn.innerHTML = '';
                ctrlIcon.className = 'fas fa-pause';
                playInterval = setInterval(() => {
                    progress = Math.min(progress + 0.5, 100);
                    document.getElementById('progress-fill').style.width = progress + '%';
                    // Update time display
                    const total = 100;
                    const cur = Math.floor(progress / 100 * 100);
                    document.getElementById('time-display').textContent =
                        `00:${String(Math.floor(cur / 60)).padStart(2, '0')} / 01:40`;
                    if (progress >= 100) { clearInterval(playInterval); isPlaying = false; btn.classList.remove('playing'); btn.innerHTML = '<i class="fas fa-play ms-1"></i>'; }
                }, 150);
            } else {
                btn.classList.remove('playing');
                btn.innerHTML = '<i class="fas fa-play ms-1"></i>';
                ctrlIcon.className = 'fas fa-play';
                clearInterval(playInterval);
            }
        }

        function seekVideo(e) {
            const track = e.currentTarget;
            const rect = track.getBoundingClientRect();
            progress = Math.max(0, Math.min(100, (e.clientX - rect.left) / rect.width * 100));
            document.getElementById('progress-fill').style.width = progress + '%';
        }

        // ═══════════ SCROLL REVEAL ═══════════
        function triggerReveal() {
            const obs = new IntersectionObserver(entries => {
                entries.forEach((e, i) => {
                    if (e.isIntersecting) { setTimeout(() => e.target.classList.add('in'), i * 55); obs.unobserve(e.target); }
                });
            }, { threshold: .07 });
            document.querySelectorAll('.reveal:not(.in)').forEach(r => obs.observe(r));
        }

        // ═══════════ INIT ═══════════
        document.addEventListener('DOMContentLoaded', () => {
            renderGrid();
            triggerReveal();
            // Auto-start player animation
            setTimeout(() => { if (!isPlaying) togglePlay(); }, 800);
        });
    </script>
<?php
include_once ('elements/footer.php');
?>
<?php 
include_once ('elements/header.php');
?>

    <style>
        :root {
            --red: #E8111A;
            --red-d: #c00d14;
            --red-g: rgba(232, 17, 26, .12);
            --dark: #111111;
            --mid: #2a2a2a;
            --muted: #888;
            --bg: #ffffff;
            --bg2: #f8f7f3;
            --bg3: #f2f0eb;
            --border: #e8e6e0;
            --border2: #d4d0c8;
            --green: #059669;
            --blue: #2563eb;
            --amber: #d97706;
            --purple: #7c3aed;
            --teal: #0891b2;
        }

        /* ── PAGES SYSTEM ───────────────────────── */
        /* .page {
            display: none
        }

        .page.active {
            display: block
        } */

        /* ── HERO ───────────────────────────────── */
        .hero {
            padding: 88px 0 64px;
            text-align: center;
            position: relative;
            overflow: hidden;
            background: var(--bg)
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(0, 0, 0, .022) 40px), repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(0, 0, 0, .022) 40px);
            pointer-events: none
        }

        .hero-glow {
            position: absolute;
            top: -60px;
            left: 50%;
            transform: translateX(-50%);
            width: 600px;
            height: 320px;
            background: radial-gradient(ellipse at center, rgba(232, 17, 26, .07) 0%, transparent 70%);
            pointer-events: none
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: rgba(232, 17, 26, .08);
            border: 1px solid rgba(232, 17, 26, .22);
            color: var(--red);
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .15em;
            text-transform: uppercase;
            padding: .34rem 1rem;
            border-radius: 50px;
            margin-bottom: 1.4rem;
            animation: dropIn .55s ease both
        }

        .hero h1 {
            font-size: clamp(2.6rem, 6.5vw, 5rem);
            color: var(--dark);
            line-height: 1.04;
            animation: riseUp .7s .1s ease both
        }

        .hero h1 em {
            font-style: normal;
            color: var(--red)
        }

        .hero p.tagline {
            font-size: 1.02rem;
            color: var(--muted);
            max-width: 580px;
            margin: 1.1rem auto 2.1rem;
            line-height: 1.65;
            animation: riseUp .7s .2s ease both
        }

        .hero-btns {
            animation: riseUp .7s .3s ease both
        }

        .btn-hero {
            background: var(--red);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: .92rem;
            font-weight: 700;
            padding: .9rem 2.6rem;
            box-shadow: 0 8px 28px var(--red-g);
            transition: background .25s, transform .2s
        }

        .btn-hero:hover {
            background: var(--red-d);
            color: #fff;
            transform: translateY(-2px)
        }

        .btn-outline-hero {
            background: transparent;
            color: var(--mid);
            border: 1.5px solid var(--border2);
            border-radius: 50px;
            font-size: .92rem;
            font-weight: 600;
            padding: .9rem 2.2rem;
            transition: border-color .25s, background .25s, color .25s
        }

        .btn-outline-hero:hover {
            border-color: var(--dark);
            background: var(--dark);
            color: #fff
        }

        /* stat strip */
        .stat-strip {
            display: flex;
            justify-content: center;
            gap: 2.5rem;
            flex-wrap: wrap;
            margin-top: 2.6rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border);
            animation: riseUp .7s .4s ease both
        }

        .ss .num {
            font-size: 1.8rem;
            color: var(--dark)
        }

        .ss .num span {
            color: var(--red)
        }

        .ss .lbl {
            font-size: .68rem;
            font-weight: 600;
            color: var(--muted);
            letter-spacing: .09em;
            text-transform: uppercase
        }

        /* page hero variants */
        .hero-sm {
            padding: 64px 0 44px
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

        /* ── SECTION ────────────────────────────── */
        .sec {
            padding: 80px 0;
            position: relative;
            z-index: 1
        }

        .sec-alt {
            background: var(--bg2)
        }

        .sec-dark {
            background: var(--dark)
        }

        .sec-red {
            background: var(--red)
        }

        .hdiv {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent)
        }

        .eyebrow {
            display: inline-block;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: .6rem
        }

        .sec-h {
            font-size: clamp(1.75rem, 3.8vw, 2.7rem);
            color: var(--dark);
            line-height: 1.1
        }

        .sec-dark .sec-h {
            color: #fff
        }

        .sec-red .sec-h {
            color: #fff
        }

        .sec-p {
            font-size: .9rem;
            color: var(--muted);
            max-width: 460px;
            line-height: 1.68
        }

        .sec-dark .sec-p {
            color: rgba(255, 255, 255, .45)
        }

        .sec-red .sec-p {
            color: rgba(255, 255, 255, .75)
        }

        /* ── MODULE CARDS ───────────────────────── */
        .mod-card {
            background: var(--bg);
            border: 1.5px solid var(--border);
            border-radius: 16px;
            padding: 1.6rem;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            transition: transform .38s cubic-bezier(.2, .8, .2, 1), box-shadow .38s, border-color .3s;
        }

        .mod-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--clr, var(--red));
            transform: scaleY(0);
            transform-origin: bottom;
            transition: transform .35s ease
        }

        .mod-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 20px 52px rgba(0, 0, 0, .08);
            border-color: var(--clr-b, rgba(232, 17, 26, .25))
        }

        .mod-card:hover::before {
            transform: scaleY(1)
        }

        .mod-icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: .9rem;
            flex-shrink: 0
        }

        .mod-card h5 {
            font-size: 1.08rem;
            color: var(--dark);
            margin-bottom: .35rem
        }

        .mod-card .mod-sub {
            font-size: .81rem;
            color: var(--muted);
            line-height: 1.6;
            margin-bottom: .95rem;
            flex: 1
        }

        .mod-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1.1rem
        }

        .mod-list li {
            display: flex;
            align-items: center;
            gap: .5rem;
            font-size: .8rem;
            color: #555;
            padding: .28rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, .04)
        }

        .mod-list li:last-child {
            border: none
        }

        .mod-list li i {
            font-size: .58rem;
            color: var(--red);
            flex-shrink: 0
        }

        .mod-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: .75rem;
            border-top: 1px solid var(--border);
            margin-top: auto
        }

        .mod-badge {
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .09em;
            text-transform: uppercase;
            padding: .2rem .65rem;
            border-radius: 50px
        }

        .btn-mod {
            font-size: .72rem;
            font-weight: 700;
            color: var(--red);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: .3rem;
            transition: gap .2s
        }

        .btn-mod:hover {
            gap: .6rem;
            color: var(--red-d)
        }

        /* ── FULL-WIDTH CARD ────────────────────── */
        .full-card {
            background: linear-gradient(135deg, var(--bg2) 0%, rgba(232, 17, 26, .04) 100%);
            border: 1.5px solid rgba(232, 17, 26, .18);
            border-radius: 18px;
            padding: 2.4rem 2.8rem;
            position: relative;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s
        }

        .full-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 52px rgba(0, 0, 0, .08)
        }

        .full-card::after {
            content: '';
            position: absolute;
            bottom: -60px;
            right: -60px;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(232, 17, 26, .08) 0%, transparent 70%)
        }

        .full-badge {
            display: inline-block;
            background: var(--red);
            color: #fff;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .28rem .8rem;
            border-radius: 50px;
            margin-bottom: .9rem
        }

        /* ── MARQUEE ────────────────────────────── */
        .mq-band {
            background: var(--dark);
            padding: 2.4rem 0;
            overflow: hidden
        }

        .mq-row {
            overflow: hidden
        }

        .mq-row+.mq-row {
            margin-top: .7rem
        }

        .mq-track {
            display: flex;
            gap: 1rem;
            width: max-content;
            animation: mqRun 22s linear infinite
        }

        .mq-track.rev {
            animation-direction: reverse;
            animation-duration: 19s
        }

        .mq-tag {
            display: flex;
            align-items: center;
            gap: .45rem;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .07);
            color: rgba(255, 255, 255, .55);
            border-radius: 50px;
            padding: .4rem 1.1rem;
            font-size: .77rem;
            font-weight: 600;
            white-space: nowrap;
            flex-shrink: 0
        }

        .mq-tag i {
            color: var(--red);
            font-size: .68rem
        }

        @keyframes mqRun {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-50%)
            }
        }

        /* ── FEATURE CARDS ─────────────────────── */
        .feat-card {
            background: var(--bg);
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 1.5rem;
            height: 100%;
            transition: transform .3s, box-shadow .3s, border-color .3s
        }

        .feat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 44px rgba(0, 0, 0, .08);
            border-color: rgba(232, 17, 26, .22)
        }

        .feat-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-bottom: .85rem
        }

        .feat-card h6 {
            font-size: .97rem;
            color: var(--dark);
            margin-bottom: .3rem
        }

        .feat-card p {
            font-size: .8rem;
            color: var(--muted);
            margin: 0;
            line-height: 1.62
        }

        /* ── WHY DARK CARDS ─────────────────────── */
        .why-card {
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .07);
            border-radius: 14px;
            padding: 1.5rem;
            transition: background .3s, border-color .3s, transform .3s
        }

        .why-card:hover {
            background: rgba(255, 255, 255, .07);
            border-color: rgba(232, 17, 26, .25);
            transform: translateY(-4px)
        }

        .why-icon {
            width: 44px;
            height: 44px;
            background: rgba(232, 17, 26, .12);
            color: var(--red);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-bottom: .85rem
        }

        .why-card h6 {
            font-weight: 700;
            color: #fff;
            margin-bottom: .3rem;
            font-size: .92rem
        }

        .why-card p {
            font-size: .8rem;
            color: rgba(255, 255, 255, .38);
            margin: 0;
            line-height: 1.62
        }

        /* ── TESTIMONIALS ───────────────────────── */
        .t-card {
            background: var(--bg);
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 1.8rem;
            height: 100%;
            transition: transform .3s, box-shadow .3s
        }

        .t-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 44px rgba(0, 0, 0, .08)
        }

        .stars {
            color: var(--red);
            font-size: .85rem;
            margin-bottom: .75rem
        }

        .t-card q {
            font-size: .87rem;
            color: var(--mid);
            line-height: 1.72;
            font-style: italic;
            display: block;
            margin-bottom: 1.1rem
        }

        .t-av {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: var(--red);
            color: #fff;
            font-weight: 700;
            font-size: .8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0
        }

        .t-name {
            font-weight: 700;
            font-size: .84rem;
            color: var(--dark)
        }

        .t-role {
            font-size: .72rem;
            color: var(--muted)
        }

        /* ── ACCORDION ──────────────────────────── */
        .faq-item {
            border: 1.5px solid var(--border);
            border-radius: 12px;
            margin-bottom: .6rem;
            overflow: hidden;
            transition: border-color .25s
        }

        .faq-item:hover {
            border-color: rgba(232, 17, 26, .25)
        }

        .faq-q {
            background: var(--bg);
            border: none;
            width: 100%;
            text-align: left;
            padding: 1.1rem 1.3rem;
            font-size: .9rem;
            font-weight: 700;
            color: var(--dark);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: .8rem;
            transition: background .2s
        }

        .faq-q:hover {
            background: var(--bg2)
        }

        .faq-q i {
            color: var(--red);
            flex-shrink: 0;
            transition: transform .3s
        }

        .faq-q[aria-expanded="true"] i {
            transform: rotate(45deg)
        }

        .faq-body {
            font-size: .84rem;
            color: var(--muted);
            line-height: 1.7;
            padding: 0 1.3rem 1.1rem
        }

        /* ── TAX CALCULATOR ─────────────────────── */
        .calc-wrap {
            background: var(--bg2);
            border: 1.5px solid var(--border);
            border-radius: 16px;
            padding: 2rem
        }

        .calc-label {
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: .4rem;
            display: block
        }

        .calc-input,
        .calc-select {
            background: var(--bg);
            border: 1.5px solid var(--border);
            border-radius: 8px;
            padding: .65rem .9rem;
            font-size: .9rem;
            color: var(--dark);
            width: 100%;
            outline: none;
            transition: border-color .2s;
        }

        .calc-input:focus,
        .calc-select:focus {
            border-color: var(--red);
            box-shadow: 0 0 0 3px var(--red-g)
        }

        .calc-input::placeholder {
            color: var(--muted)
        }

        .btn-calc {
            background: var(--red);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 700;
            font-size: .88rem;
            padding: .8rem 2rem;
            transition: background .25s, transform .15s;
            cursor: pointer;
            width: 100%
        }

        .btn-calc:hover {
            background: var(--red-d);
            transform: translateY(-1px)
        }

        .result-box {
            background: var(--bg);
            border: 1.5px solid var(--border);
            border-radius: 10px;
            padding: 1.2rem;
            margin-top: 1.2rem
        }

        .result-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: .5rem 0;
            border-bottom: 1px solid var(--border)
        }

        .result-row:last-child {
            border: none
        }

        .result-row .label {
            font-size: .82rem;
            color: var(--muted)
        }

        .result-row .value {
            font-size: .9rem;
            font-weight: 700;
            color: var(--dark)
        }

        .result-row .value.tax {
            color: var(--red)
        }

        .result-row .value.net {
            color: var(--green)
        }

        /* ── TIMELINE ───────────────────────────── */
        .timeline {
            position: relative;
            padding-left: 2.5rem
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: .7rem;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, var(--red), rgba(232, 17, 26, .1))
        }

        .tl-item {
            position: relative;
            padding-bottom: 2rem
        }

        .tl-item:last-child {
            padding-bottom: 0
        }

        .tl-dot {
            position: absolute;
            left: -1.8rem;
            top: .2rem;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--red);
            border: 3px solid var(--bg);
            box-shadow: 0 0 0 2px var(--red)
        }

        .tl-date {
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: .35rem
        }

        .tl-title {
            font-size: 1rem;
            color: var(--dark);
            margin-bottom: .3rem
        }

        .tl-desc {
            font-size: .82rem;
            color: var(--muted);
            line-height: 1.6
        }

        /* ── STEP CARDS ─────────────────────────── */
        .step-card {
            background: var(--bg);
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 1.4rem;
            position: relative;
            transition: transform .3s, box-shadow .3s, border-color .3s
        }

        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 40px rgba(0, 0, 0, .07);
            border-color: rgba(232, 17, 26, .22)
        }

        .step-num {
            position: absolute;
            top: -14px;
            left: 1.2rem;
            width: 28px;
            height: 28px;
            background: var(--red);
            color: #fff;
            border-radius: 50%;
            font-size: .75rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px var(--red-g)
        }

        .step-card h6 {
            font-size: .97rem;
            color: var(--dark);
            margin-bottom: .35rem
        }

        .step-card p {
            font-size: .8rem;
            color: var(--muted);
            margin: 0;
            line-height: 1.6
        }

        /* ── CTA ────────────────────────────────── */
        .cta-band {
            padding: 72px 0;
            text-align: center;
            position: relative;
            overflow: hidden
        }

        .cta-band::before,
        .cta-band::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, .06)
        }

        .cta-band::before {
            width: 400px;
            height: 400px;
            top: -150px;
            left: -100px
        }

        .cta-band::after {
            width: 320px;
            height: 320px;
            bottom: -120px;
            right: -80px
        }

        .cta-band h2 {
            font-size: clamp(2rem, 5vw, 3.1rem);
            color: #fff;
            position: relative;
            z-index: 1
        }

        .cta-band p {
            color: rgba(255, 255, 255, .7);
            max-width: 460px;
            margin: .8rem auto 2rem;
            position: relative;
            z-index: 1
        }

        .btn-white {
            background: #fff;
            color: var(--red);
            border: none;
            border-radius: 50px;
            font-size: .9rem;
            font-weight: 700;
            padding: .85rem 2.4rem;
            transition: transform .2s, box-shadow .25s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            position: relative;
            z-index: 1
        }

        .btn-white:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, .2);
            color: var(--red)
        }

        .btn-outline-white {
            background: transparent;
            color: #fff;
            border: 1.5px solid rgba(255, 255, 255, .35);
            border-radius: 50px;
            font-size: .9rem;
            font-weight: 600;
            padding: .85rem 2rem;
            transition: border-color .25s, background .25s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            position: relative;
            z-index: 1
        }

        .btn-outline-white:hover {
            border-color: #fff;
            background: rgba(255, 255, 255, .1);
            color: #fff
        }

        /* ── REVEAL ─────────────────────────────── */
        .rv {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .65s ease, transform .65s ease
        }

        .rv.in {
            opacity: 1;
            transform: translateY(0)
        }

        .rv-d1 {
            transition-delay: .07s
        }

        .rv-d2 {
            transition-delay: .14s
        }

        .rv-d3 {
            transition-delay: .21s
        }

        .rv-d4 {
            transition-delay: .28s
        }

    </style>

  <!-- ════════════════════════════════════════ -->
  <!-- PAGE 1: HOME ════════════════════════════ -->
  <!-- ════════════════════════════════════════ -->
  <div class="page active" id="page-home">

    <!-- HERO -->
    <section class="hero">
      <div class="hero-glow"></div>
      <div class="container position-relative" style="z-index:1">
        <div class="hero-badge"><i class="bi bi-receipt-cutoff"></i> Trading Tax Education 2026</div>
        <h1>Webinar <em>Tax</em></h1>
        <p class="tagline">Understand how taxes apply to trading and investing across different asset classes — stocks,
          crypto, forex, F&O and commodities. Simplified for Indian traders.</p>
        <div class="hero-btns d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-hero" onclick="showPage('modules')"><i class="bi bi-play-circle-fill me-2"></i>Explore
            Modules</button>
          <button class="btn-outline-hero" onclick="showPage('calculator')"><i class="bi bi-calculator me-2"></i>Tax
            Calculator</button>
        </div>
        <div class="stat-strip">
          <div class="ss">
            <div class="num">9<span>+</span></div>
            <div class="lbl">Modules</div>
          </div>
          <div class="ss">
            <div class="num">₹0<span>*</span></div>
            <div class="lbl">Free Access</div>
          </div>
          <div class="ss">
            <div class="num">Live<span>.</span></div>
            <div class="lbl">Q&A Sessions</div>
          </div>
          <div class="ss">
            <div class="num">CA<span>+</span></div>
            <div class="lbl">Expert Led</div>
          </div>
        </div>
      </div>
    </section>

    <div class="hdiv"></div>

    <!-- FEATURED MODULES PREVIEW -->
    <section class="sec">
      <div class="container">
        <div class="row align-items-end mb-5">
          <div class="col-lg-7 rv">
            <span class="eyebrow">What You'll Learn</span>
            <h2 class="sec-h">Tax Modules Covered</h2>
            <p class="sec-p">From capital gains to crypto taxation — every module is taught by qualified CAs with real
              trader examples.</p>
          </div>
          <div class="col-lg-5 text-lg-end mt-3 mt-lg-0 rv">
            <button class="btn btn-outline-danger rounded-pill px-4 fw-bold" onclick="showPage('modules')">All Modules
              <i class="bi bi-arrow-right ms-1"></i></button>
          </div>
        </div>
        <div class="row g-4">
          <!-- Card 1 -->
          <div class="col-md-6 col-xl-4 rv">
            <div class="mod-card" style="--clr:var(--blue);--clr-b:rgba(37,99,235,.25)">
              <div class="mod-icon-wrap" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                  class="bi bi-bar-chart-fill"></i></div>
              <h5>Basics of Taxation</h5>
              <p class="mod-sub">Learn the foundation of how profits and losses are taxed in financial markets.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>What is Capital Gain?</li>
                <li><i class="bi bi-chevron-right"></i>Tax Slabs & Applicable Rates</li>
                <li><i class="bi bi-chevron-right"></i>Income Classification</li>
                <li><i class="bi bi-chevron-right"></i>Taxable vs Non-Taxable Income</li>
                <li><i class="bi bi-chevron-right"></i>Introduction to ITR Forms</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(37,99,235,.1);color:var(--blue);border:1px solid rgba(37,99,235,.2)">Beginner</span>
                <button class="btn-mod" onclick="showPage('basics')">Learn More <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="mod-card" style="--clr:var(--green);--clr-b:rgba(5,150,105,.25)">
              <div class="mod-icon-wrap" style="background:rgba(5,150,105,.1);color:var(--green)"><i
                  class="bi bi-graph-up-arrow"></i></div>
              <h5>Stock Market Taxation</h5>
              <p class="mod-sub">Understand tax rules for equity investors and traders — STCG, LTCG, F&O and intraday.
              </p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>STCG Tax (15%)</li>
                <li><i class="bi bi-chevron-right"></i>LTCG Tax (10% above ₹1L)</li>
                <li><i class="bi bi-chevron-right"></i>Intraday — Speculative Income</li>
                <li><i class="bi bi-chevron-right"></i>F&O — Non-Speculative Income</li>
                <li><i class="bi bi-chevron-right"></i>Dividend Taxation</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(5,150,105,.1);color:var(--green);border:1px solid rgba(5,150,105,.2)">Beginner</span>
                <button class="btn-mod" onclick="showPage('modules')">Learn More <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-md-6 col-xl-4 rv rv-d2">
            <div class="mod-card" style="--clr:#f97316;--clr-b:rgba(249,115,22,.25)">
              <div class="mod-icon-wrap" style="background:rgba(249,115,22,.1);color:#f97316"><i
                  class="bi bi-currency-bitcoin"></i></div>
              <h5>Crypto Taxation</h5>
              <p class="mod-sub">Learn how cryptocurrencies are taxed under current Indian regulations — 30% flat rule.
              </p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>30% Flat Tax Rule (India)</li>
                <li><i class="bi bi-chevron-right"></i>1% TDS on Transactions</li>
                <li><i class="bi bi-chevron-right"></i>Loss Adjustment Rules</li>
                <li><i class="bi bi-chevron-right"></i>Gift Tax on Crypto</li>
                <li><i class="bi bi-chevron-right"></i>Reporting in ITR</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(249,115,22,.1);color:#f97316;border:1px solid rgba(249,115,22,.2)">Intermediate</span>
                <button class="btn-mod" onclick="showPage('modules')">Learn More <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MARQUEE -->
    <div class="mq-band">
      <div class="mq-row">
        <div class="mq-track">
          <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Stock Taxation</span>
          <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto Tax 30%</span>
          <span class="mq-tag"><i class="bi bi-globe2"></i>Forex Tax</span>
          <span class="mq-tag"><i class="bi bi-bar-chart-steps"></i>F&O Taxation</span>
          <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Commodity Tax</span>
          <span class="mq-tag"><i class="bi bi-file-earmark-text"></i>ITR Filing</span>
          <span class="mq-tag"><i class="bi bi-shield-check"></i>Tax Planning</span>
          <span class="mq-tag"><i class="bi bi-receipt"></i>Advance Tax</span>
          <span class="mq-tag"><i class="bi bi-bank2"></i>Capital Gains</span>
          <span class="mq-tag"><i class="bi bi-scale"></i>DTAA</span>
          <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Stock Taxation</span>
          <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto Tax 30%</span>
          <span class="mq-tag"><i class="bi bi-globe2"></i>Forex Tax</span>
          <span class="mq-tag"><i class="bi bi-bar-chart-steps"></i>F&O Taxation</span>
          <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Commodity Tax</span>
          <span class="mq-tag"><i class="bi bi-file-earmark-text"></i>ITR Filing</span>
          <span class="mq-tag"><i class="bi bi-shield-check"></i>Tax Planning</span>
          <span class="mq-tag"><i class="bi bi-receipt"></i>Advance Tax</span>
          <span class="mq-tag"><i class="bi bi-bank2"></i>Capital Gains</span>
          <span class="mq-tag"><i class="bi bi-scale"></i>DTAA</span>
        </div>
      </div>
      <div class="mq-row">
        <div class="mq-track rev">
          <span class="mq-tag"><i class="bi bi-file-code"></i>Section 44AD</span>
          <span class="mq-tag"><i class="bi bi-person-badge"></i>CA Verified</span>
          <span class="mq-tag"><i class="bi bi-calendar-check"></i>July 31 Deadline</span>
          <span class="mq-tag"><i class="bi bi-cash-coin"></i>Tax Loss Harvesting</span>
          <span class="mq-tag"><i class="bi bi-building"></i>GST on Trading</span>
          <span class="mq-tag"><i class="bi bi-journal-richtext"></i>Tax Audit</span>
          <span class="mq-tag"><i class="bi bi-diagram-3"></i>Income Classification</span>
          <span class="mq-tag"><i class="bi bi-percent"></i>Presumptive Taxation</span>
          <span class="mq-tag"><i class="bi bi-file-code"></i>Section 44AD</span>
          <span class="mq-tag"><i class="bi bi-person-badge"></i>CA Verified</span>
          <span class="mq-tag"><i class="bi bi-calendar-check"></i>July 31 Deadline</span>
          <span class="mq-tag"><i class="bi bi-cash-coin"></i>Tax Loss Harvesting</span>
          <span class="mq-tag"><i class="bi bi-building"></i>GST on Trading</span>
          <span class="mq-tag"><i class="bi bi-journal-richtext"></i>Tax Audit</span>
          <span class="mq-tag"><i class="bi bi-diagram-3"></i>Income Classification</span>
          <span class="mq-tag"><i class="bi bi-percent"></i>Presumptive Taxation</span>
        </div>
      </div>
    </div>

    <!-- WHY SECTION -->
    <section class="sec sec-dark">
      <div class="container">
        <div class="text-center mb-5">
          <span class="eyebrow rv">Why This Webinar</span>
          <h2 class="sec-h rv" style="color:#fff">Why Traders Must Know Tax</h2>
          <p class="sec-p mx-auto rv" style="color:rgba(255,255,255,.42)">Tax errors cost traders lakhs in penalties and
            missed savings. This webinar is your complete defence.</p>
        </div>
        <div class="row g-3">
          <div class="col-sm-6 col-xl-3 rv">
            <div class="why-card">
              <div class="why-icon"><i class="bi bi-shield-lock-fill"></i></div>
              <h6>Avoid Penalties</h6>
              <p>Understand filing deadlines, advance tax rules and audit triggers before the taxman knocks.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 rv rv-d1">
            <div class="why-card">
              <div class="why-icon" style="background:rgba(5,150,105,.12);color:var(--green)"><i
                  class="bi bi-piggy-bank-fill"></i></div>
              <h6>Legal Tax Savings</h6>
              <p>Use loss harvesting, Section 80C, and carry-forward rules to legally reduce your tax liability.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 rv rv-d2">
            <div class="why-card">
              <div class="why-icon" style="background:rgba(37,99,235,.12);color:var(--blue)"><i
                  class="bi bi-file-earmark-check-fill"></i></div>
              <h6>File Correctly</h6>
              <p>Know exactly which ITR form — ITR-2 or ITR-3 — applies to your trading activity and income type.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 rv rv-d3">
            <div class="why-card">
              <div class="why-icon" style="background:rgba(124,58,237,.12);color:var(--purple)"><i
                  class="bi bi-person-badge-fill"></i></div>
              <h6>CA Expert Led</h6>
              <p>Taught by qualified Chartered Accountants with live case studies from real trader portfolios.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="sec sec-alt">
      <div class="container">
        <div class="text-center mb-5">
          <span class="eyebrow rv">Student Reviews</span>
          <h2 class="sec-h rv">What Traders Are Saying</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-4 rv">
            <div class="t-card">
              <div class="stars">★★★★★</div><q>"I had no idea F&O was treated as business income. After this webinar I
                filed ITR-3 correctly, offset losses against salary income and saved ₹42,000 in tax."</q>
              <div class="d-flex align-items-center gap-2 mt-3">
                <div class="t-av">RK</div>
                <div>
                  <div class="t-name">Rahul Kothari</div>
                  <div class="t-role">F&O Trader · Mumbai</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 rv rv-d1">
            <div class="t-card">
              <div class="stars">★★★★★</div><q>"The crypto tax module is the most honest explanation of the 30% flat
                rule I've found. Learned about 1% TDS and how to report VDA income correctly in ITR-2."</q>
              <div class="d-flex align-items-center gap-2 mt-3">
                <div class="t-av">SP</div>
                <div>
                  <div class="t-name">Sneha Patel</div>
                  <div class="t-role">Crypto Investor · Ahmedabad</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 rv rv-d2">
            <div class="t-card">
              <div class="stars">★★★★☆</div><q>"Tax Planning module saved me. I was paying 30% on STCG because I didn't
                know about the 12-month holding rule. Now I plan my exits around LTCG thresholds."</q>
              <div class="d-flex align-items-center gap-2 mt-3">
                <div class="t-av">AM</div>
                <div>
                  <div class="t-name">Arjun Mehta</div>
                  <div class="t-role">Equity Investor · Surat</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta-band sec-red">
      <div class="container">
        <h2>Start Learning Tax Today — Free</h2>
        <p>Join 8,000+ traders who learned to file correctly, save legally and avoid penalties through our CA-led
          webinar series.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-white" onclick="showPage('modules')"><i class="bi bi-play-circle-fill"></i>Explore All
            Modules</button>
          <button class="btn-outline-white" onclick="showPage('calculator')"><i class="bi bi-calculator"></i>Tax
            Calculator</button>
        </div>
      </div>
    </section>

  </div><!-- /page-home -->

  <!-- ════════════════════════════════════════ -->
  <!-- PAGE 2: TAX BASICS ══════════════════════ -->
  <!-- ════════════════════════════════════════ -->
  <div class="page" id="page-basics">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-book-fill"></i> Foundation Module</div>
        <h1 class="mb-3" style="font-size:clamp(2rem,5vw,3.8rem)">Tax <em>Basics</em></h1>
        <p class="tagline mx-auto">Everything a trader must know about income classification, tax slabs, and how the tax
          system works before filing a single return.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <!-- KEY CONCEPTS -->
    <section class="sec">
      <div class="container">
        <div class="row align-items-end mb-5">
          <div class="col-lg-6 rv">
            <span class="eyebrow">Core Concepts</span>
            <h2 class="sec-h">Tax Foundations for Traders</h2>
            <p class="sec-p">Before you file, you need to understand these fundamentals — every tax decision flows from
              these concepts.</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6 rv">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                  class="bi bi-bar-chart-line-fill"></i></div>
              <h6>Capital Gain — Short vs Long Term</h6>
              <p>Profit from selling an asset held <strong>under 12 months</strong> = Short-Term Capital Gain (STCG)
                taxed at 15%. Held <strong>over 12 months</strong> = Long-Term Capital Gain (LTCG) taxed at 10% above ₹1
                lakh exemption. The holding period defines everything.</p>
            </div>
          </div>
          <div class="col-md-6 rv rv-d1">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(5,150,105,.1);color:var(--green)"><i
                  class="bi bi-diagram-3-fill"></i></div>
              <h6>Income Classification</h6>
              <p>Trading income falls into four categories: <strong>Capital Gains</strong> (delivery equity),
                <strong>Speculative Business Income</strong> (intraday), <strong>Non-Speculative Business
                  Income</strong> (F&O, commodity), and <strong>Other Income</strong> (dividends, interest). Each has
                different tax treatment and ITR forms.</p>
            </div>
          </div>
          <div class="col-md-6 rv">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(217,119,6,.1);color:var(--amber)"><i
                  class="bi bi-percent"></i></div>
              <h6>Tax Slabs & Applicable Rates</h6>
              <p>Under the New Regime (FY 2025-26): income up to ₹3L = nil, ₹3–7L = 5%, ₹7–10L = 10%, ₹10–12L = 15%,
                ₹12–15L = 20%, above ₹15L = 30%. STCG on equity is always 15% regardless of slab. LTCG is always 10%
                above ₹1L.</p>
            </div>
          </div>
          <div class="col-md-6 rv rv-d1">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(232,17,26,.1);color:var(--red)"><i
                  class="bi bi-file-earmark-text-fill"></i></div>
              <h6>ITR Forms for Traders</h6>
              <p><strong>ITR-1</strong>: Salary + interest only (no trading). <strong>ITR-2</strong>: Salary + capital
                gains from equity/MF. <strong>ITR-3</strong>: F&O, intraday, options (business income). <strong>ITR-4
                  (Sugam)</strong>: Presumptive taxation under Section 44AD. Wrong form = defective return notice.</p>
            </div>
          </div>
          <div class="col-md-6 rv">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(124,58,237,.1);color:var(--purple)"><i
                  class="bi bi-arrow-repeat"></i></div>
              <h6>Loss Set-Off & Carry Forward</h6>
              <p>STCL can offset STCG and LTCG. LTCL can only offset LTCG. Speculative loss (intraday) can only offset
                speculative income. Non-speculative loss (F&O) can offset any income except salary. Unabsorbed losses
                carry forward for 8 years (file timely return to avail this).</p>
            </div>
          </div>
          <div class="col-md-6 rv rv-d1">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(8,145,178,.1);color:var(--teal)"><i
                  class="bi bi-calendar-event-fill"></i></div>
              <h6>Advance Tax Schedule</h6>
              <p>If tax liability exceeds ₹10,000, pay advance tax in installments: <strong>15%</strong> by Jun 15,
                <strong>45%</strong> by Sep 15, <strong>75%</strong> by Dec 15, <strong>100%</strong> by Mar 15. Missing
                instalments attracts 1% per month interest under Sections 234B and 234C.</p>
            </div>
          </div>
        </div>

        <!-- Tax Rate Comparison Table -->
        <div class="mt-5 rv">
          <h5 class="mb-3">Quick Tax Rate Reference</h5>
          <div class="table-responsive">
            <table class="table table-bordered" style="font-size:.86rem">
              <thead style="background:var(--dark);color:#fff">
                <tr>
                  <th>Income Type</th>
                  <th>Tax Rate</th>
                  <th>ITR Form</th>
                  <th>Set-Off Allowed With</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>STCG (Equity/MF)</strong></td>
                  <td><span style="color:var(--amber);font-weight:700">15%</span></td>
                  <td>ITR-2</td>
                  <td>STCG, LTCG</td>
                </tr>
                <tr>
                  <td><strong>LTCG (Equity/MF)</strong></td>
                  <td><span style="color:var(--green);font-weight:700">10% (above ₹1L)</span></td>
                  <td>ITR-2</td>
                  <td>LTCG only</td>
                </tr>
                <tr>
                  <td><strong>Intraday (Speculative)</strong></td>
                  <td>Slab rate</td>
                  <td>ITR-3</td>
                  <td>Speculative income only</td>
                </tr>
                <tr>
                  <td><strong>F&O (Non-Speculative)</strong></td>
                  <td>Slab rate</td>
                  <td>ITR-3</td>
                  <td>Any income except salary</td>
                </tr>
                <tr>
                  <td><strong>Crypto / VDA</strong></td>
                  <td><span style="color:var(--red);font-weight:700">30% flat</span></td>
                  <td>ITR-2 / ITR-3</td>
                  <td>No set-off allowed</td>
                </tr>
                <tr>
                  <td><strong>Forex (Business)</strong></td>
                  <td>Slab rate</td>
                  <td>ITR-3</td>
                  <td>Non-speculative income</td>
                </tr>
                <tr>
                  <td><strong>Commodity Futures</strong></td>
                  <td>Slab rate</td>
                  <td>ITR-3</td>
                  <td>Non-speculative income</td>
                </tr>
                <tr>
                  <td><strong>Dividend</strong></td>
                  <td>Slab rate</td>
                  <td>ITR-2</td>
                  <td>Interest on loan for investment</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- TIMELINE: Key Deadlines -->
    <section class="sec sec-alt">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 rv">
            <span class="eyebrow">Annual Calendar</span>
            <h2 class="sec-h mb-4">Tax Deadlines Every Trader Must Know</h2>
            <p class="sec-p">Missing these dates costs money. Mark them now.</p>
          </div>
          <div class="col-lg-7 rv rv-d1">
            <div class="timeline">
              <div class="tl-item">
                <div class="tl-dot"></div>
                <div class="tl-date">April 1</div>
                <div class="tl-title">New Financial Year Begins</div>
                <div class="tl-desc">Start fresh books. Review previous year's P&L for loss carry-forward planning.
                </div>
              </div>
              <div class="tl-item">
                <div class="tl-dot"></div>
                <div class="tl-date">June 15</div>
                <div class="tl-title">Advance Tax — 1st Instalment (15%)</div>
                <div class="tl-desc">Pay 15% of estimated annual tax. Applicable if total tax liability exceeds ₹10,000.
                </div>
              </div>
              <div class="tl-item">
                <div class="tl-dot"></div>
                <div class="tl-date">September 15</div>
                <div class="tl-title">Advance Tax — 2nd Instalment (45%)</div>
                <div class="tl-desc">Cumulative 45% of annual tax due. Reassess income mid-year for accuracy.</div>
              </div>
              <div class="tl-item">
                <div class="tl-dot"></div>
                <div class="tl-date">December 15</div>
                <div class="tl-title">Advance Tax — 3rd Instalment (75%)</div>
                <div class="tl-desc">75% cumulative. Most traders see clarity on annual P&L by December.</div>
              </div>
              <div class="tl-item">
                <div class="tl-dot"></div>
                <div class="tl-date">March 15</div>
                <div class="tl-title">Advance Tax — Final Instalment (100%)</div>
                <div class="tl-desc">Full advance tax cleared. Also the last chance for tax-saving investments under
                  80C.</div>
              </div>
              <div class="tl-item">
                <div class="tl-dot"></div>
                <div class="tl-date">July 31</div>
                <div class="tl-title">ITR Filing Deadline (Non-Audit)</div>
                <div class="tl-desc">File your return without audit. F&O traders with turnover above ₹10 Cr require
                  audit by October 31.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band sec-red">
      <div class="container">
        <h2>Ready to File Correctly This Year?</h2>
        <p>Jump to the full module list or try our tax calculator to estimate your liability right now.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-white" onclick="showPage('modules')"><i class="bi bi-grid-3x3-gap-fill"></i>All
            Modules</button>
          <button class="btn-outline-white" onclick="showPage('calculator')"><i class="bi bi-calculator"></i>Try
            Calculator</button>
        </div>
      </div>
    </section>
  </div>

  <!-- ════════════════════════════════════════ -->
  <!-- PAGE 3: ALL MODULES ═════════════════════ -->
  <!-- ════════════════════════════════════════ -->
  <div class="page" id="page-modules">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-grid-3x3-gap-fill"></i> 9 Modules</div>
        <h1 style="font-size:clamp(2rem,5vw,3.8rem)">All Tax <em>Modules</em></h1>
        <p class="tagline mx-auto">Complete curriculum covering every asset class, tax type and filing requirement for
          Indian traders and investors.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <section class="sec">
      <div class="container">
        <div class="row g-4">

          <!-- 1 -->
          <div class="col-md-6 col-xl-4 rv">
            <div class="mod-card" style="--clr:var(--blue);--clr-b:rgba(37,99,235,.25)">
              <div class="mod-icon-wrap" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                  class="bi bi-bar-chart-fill"></i></div>
              <h5>Basics of Taxation in Financial Markets</h5>
              <p class="mod-sub">Learn the foundation of how profits and losses are taxed across all market types.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>What is Capital Gain? (Short-term vs Long-term)</li>
                <li><i class="bi bi-chevron-right"></i>Tax Slabs & Applicable Rates</li>
                <li><i class="bi bi-chevron-right"></i>Income Classification (Business vs Investment)</li>
                <li><i class="bi bi-chevron-right"></i>Taxable vs Non-Taxable Income</li>
                <li><i class="bi bi-chevron-right"></i>Introduction to ITR Forms</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(37,99,235,.1);color:var(--blue);border:1px solid rgba(37,99,235,.2)">Beginner</span>
                <button class="btn-mod" onclick="showPage('basics')">Details <i class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>

          <!-- 2 -->
          <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="mod-card" style="--clr:var(--green);--clr-b:rgba(5,150,105,.25)">
              <div class="mod-icon-wrap" style="background:rgba(5,150,105,.1);color:var(--green)"><i
                  class="bi bi-graph-up-arrow"></i></div>
              <h5>Stock Market Taxation</h5>
              <p class="mod-sub">Understand tax rules for equity investors and traders across delivery, intraday, F&O.
              </p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>STCG (Short-Term Capital Gains) Tax</li>
                <li><i class="bi bi-chevron-right"></i>LTCG (Long-Term Capital Gains) Tax</li>
                <li><i class="bi bi-chevron-right"></i>Intraday Trading Taxation (Speculative Income)</li>
                <li><i class="bi bi-chevron-right"></i>F&O Trading (Non-Speculative Income)</li>
                <li><i class="bi bi-chevron-right"></i>Dividend Taxation</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(5,150,105,.1);color:var(--green);border:1px solid rgba(5,150,105,.2)">Beginner</span>
                <a href="#" class="btn-mod">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- 3 -->
          <div class="col-md-6 col-xl-4 rv rv-d2">
            <div class="mod-card" style="--clr:var(--teal);--clr-b:rgba(8,145,178,.25)">
              <div class="mod-icon-wrap" style="background:rgba(8,145,178,.1);color:var(--teal)"><i
                  class="bi bi-globe2"></i></div>
              <h5>Forex & Commodity Taxation</h5>
              <p class="mod-sub">Tax treatment for forex and commodity trading under Indian income tax laws.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Forex Trading Tax Rules</li>
                <li><i class="bi bi-chevron-right"></i>Commodity Gains Classification</li>
                <li><i class="bi bi-chevron-right"></i>Turnover Calculation</li>
                <li><i class="bi bi-chevron-right"></i>Presumptive Taxation (Section 44AD)</li>
                <li><i class="bi bi-chevron-right"></i>Audit Requirements</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(8,145,178,.1);color:var(--teal);border:1px solid rgba(8,145,178,.2)">Intermediate</span>
                <a href="#" class="btn-mod">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- 4 -->
          <div class="col-md-6 col-xl-4 rv">
            <div class="mod-card" style="--clr:#f97316;--clr-b:rgba(249,115,22,.25)">
              <div class="mod-icon-wrap" style="background:rgba(249,115,22,.1);color:#f97316"><i
                  class="bi bi-currency-bitcoin"></i></div>
              <h5>Crypto Taxation</h5>
              <p class="mod-sub">Learn how cryptocurrencies are taxed under current Indian regulations.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>30% Flat Tax Rule (India)</li>
                <li><i class="bi bi-chevron-right"></i>1% TDS on Transactions</li>
                <li><i class="bi bi-chevron-right"></i>Loss Adjustment Rules</li>
                <li><i class="bi bi-chevron-right"></i>Gift Tax on Crypto</li>
                <li><i class="bi bi-chevron-right"></i>Reporting in ITR</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(249,115,22,.1);color:#f97316;border:1px solid rgba(249,115,22,.2)">Intermediate</span>
                <a href="#" class="btn-mod">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- 5 -->
          <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="mod-card" style="--clr:var(--purple);--clr-b:rgba(124,58,237,.25)">
              <div class="mod-icon-wrap" style="background:rgba(124,58,237,.1);color:var(--purple)"><i
                  class="bi bi-lightbulb-fill"></i></div>
              <h5>Tax Planning Strategies</h5>
              <p class="mod-sub">Optimize your taxes legally with smart planning strategies used by professional
                traders.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Tax Harvesting Techniques</li>
                <li><i class="bi bi-chevron-right"></i>Offset Gains with Losses</li>
                <li><i class="bi bi-chevron-right"></i>Deductions under Section 80C</li>
                <li><i class="bi bi-chevron-right"></i>Advance Tax Planning</li>
                <li><i class="bi bi-chevron-right"></i>Choosing Right Income Category</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(124,58,237,.1);color:var(--purple);border:1px solid rgba(124,58,237,.2)">Intermediate</span>
                <a href="#" class="btn-mod">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- 6 -->
          <div class="col-md-6 col-xl-4 rv rv-d2">
            <div class="mod-card" style="--clr:var(--amber);--clr-b:rgba(217,119,6,.25)">
              <div class="mod-icon-wrap" style="background:rgba(217,119,6,.1);color:var(--amber)"><i
                  class="bi bi-file-earmark-text-fill"></i></div>
              <h5>Filing Income Tax Returns (ITR)</h5>
              <p class="mod-sub">Step-by-step guide to filing taxes for traders — from form selection to submission.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Choosing Correct ITR Form (ITR-2, ITR-3)</li>
                <li><i class="bi bi-chevron-right"></i>Reporting Capital Gains</li>
                <li><i class="bi bi-chevron-right"></i>Reporting Business Income</li>
                <li><i class="bi bi-chevron-right"></i>Filing Deadlines</li>
                <li><i class="bi bi-chevron-right"></i>Common Mistakes to Avoid</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(217,119,6,.1);color:var(--amber);border:1px solid rgba(217,119,6,.2)">Practical</span>
                <button class="btn-mod" onclick="showPage('itr')">Details <i class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>

          <!-- 7 -->
          <div class="col-md-6 col-xl-4 rv">
            <div class="mod-card" style="--clr:var(--red);--clr-b:rgba(232,17,26,.25)">
              <div class="mod-icon-wrap" style="background:rgba(232,17,26,.1);color:var(--red)"><i
                  class="bi bi-shield-fill-check"></i></div>
              <h5>Compliance & Legal Requirements</h5>
              <p class="mod-sub">Stay compliant with tax laws and avoid penalties, notices and audits.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Tax Audit Applicability</li>
                <li><i class="bi bi-chevron-right"></i>Maintaining Trading Records</li>
                <li><i class="bi bi-chevron-right"></i>GST Applicability (if any)</li>
                <li><i class="bi bi-chevron-right"></i>Penalties for Non-Compliance</li>
                <li><i class="bi bi-chevron-right"></i>Notices & How to Handle Them</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(232,17,26,.1);color:var(--red);border:1px solid rgba(232,17,26,.2)">Essential</span>
                <a href="#" class="btn-mod">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- 8 -->
          <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="mod-card" style="--clr:var(--dark);--clr-b:rgba(0,0,0,.2)">
              <div class="mod-icon-wrap" style="background:rgba(0,0,0,.06);color:var(--dark)"><i
                  class="bi bi-briefcase-fill"></i></div>
              <h5>Advanced Tax Concepts</h5>
              <p class="mod-sub">Deep dive into professional-level tax strategies for active traders and HNIs.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Turnover Calculation in F&O</li>
                <li><i class="bi bi-chevron-right"></i>Presumptive vs Regular Taxation</li>
                <li><i class="bi bi-chevron-right"></i>Carry Forward & Set-off of Losses</li>
                <li><i class="bi bi-chevron-right"></i>International Trading Taxation</li>
                <li><i class="bi bi-chevron-right"></i>Double Taxation Avoidance (DTAA)</li>
              </ul>
              <div class="mod-footer">
                <span class="mod-badge"
                  style="background:rgba(0,0,0,.06);color:var(--dark);border:1px solid rgba(0,0,0,.12)">Advanced</span>
                <a href="#" class="btn-mod">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <!-- 9 Full Width -->
          <div class="col-12 rv rv-d2">
            <div class="full-card">
              <div class="full-badge"><i class="bi bi-rocket-takeoff-fill me-1"></i> Module 09 — Capstone</div>
              <div class="row align-items-center g-4">
                <div class="col-lg-5">
                  <h4 style="font-size:1.5rem;margin-bottom:.5rem">Real Case Studies &amp;
                    Practical Demo</h4>
                  <p style="font-size:.88rem;color:var(--muted);margin-bottom:1.2rem;line-height:1.65">Apply tax
                    concepts through real examples and live demos — from sample calculations to actual ITR walkthroughs.
                  </p>
                  <button class="btn-hero" onclick="showPage('itr')"><i class="bi bi-play-fill me-1"></i>Start This
                    Module</button>
                </div>
                <div class="col-lg-7">
                  <div class="row g-2">
                    <div class="col-sm-6">
                      <div class="step-card">
                        <div class="step-num">1</div>
                        <h6>Sample Tax Calculation</h6>
                        <p>Live calculation with a real trader's P&L — stock, F&O and crypto combined.</p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="step-card">
                        <div class="step-num">2</div>
                        <h6>Portfolio-Based Tax Example</h6>
                        <p>How to report multi-asset portfolio in one ITR — gains, losses, carry-forward.</p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="step-card">
                        <div class="step-num">3</div>
                        <h6>Filing Demo Walkthrough</h6>
                        <p>Screen-share demo of filing ITR-3 on Income Tax portal step by step.</p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="step-card">
                        <div class="step-num">4</div>
                        <h6>Audit Case Example</h6>
                        <p>Real audit notice case study — what triggered it, how it was resolved.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

  <!-- ════════════════════════════════════════ -->
  <!-- PAGE 4: TAX CALCULATOR ══════════════════ -->
  <!-- ════════════════════════════════════════ -->
  <div class="page" id="page-calculator">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-calculator-fill"></i> Free Tool</div>
        <h1 style="font-size:clamp(2rem,5vw,3.8rem)">Tax <em>Calculator</em></h1>
        <p class="tagline mx-auto">Estimate your trading tax liability across stocks, F&O, crypto and forex instantly —
          no login required.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <section class="sec">
      <div class="container">
        <div class="row g-5 align-items-start">
          <div class="col-lg-6 rv">
            <h3 style="margin-bottom:1.5rem">Trading Tax Estimator</h3>
            <div class="calc-wrap">
              <div class="row g-3">
                <div class="col-12">
                  <label class="calc-label">Asset Class</label>
                  <select class="calc-select" id="assetClass">
                    <option value="equity_stcg">Equity — Short-Term (STCG 15%)</option>
                    <option value="equity_ltcg">Equity — Long-Term (LTCG 10%)</option>
                    <option class="calc-select" value="intraday">Intraday — Speculative Income (Slab)</option>
                    <option value="fno">F&O / Options — Non-Speculative (Slab)</option>
                    <option value="crypto">Crypto / VDA — 30% Flat</option>
                    <option value="forex">Forex — Business Income (Slab)</option>
                    <option value="commodity">Commodity — Business Income (Slab)</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="calc-label">Total Profit / Gain (₹)</label>
                  <input class="calc-input" type="number" id="profitInput" placeholder="e.g. 250000" min="0" />
                </div>
                <div class="col-sm-6">
                  <label class="calc-label">Total Loss (₹) — if any</label>
                  <input class="calc-input" type="number" id="lossInput" placeholder="e.g. 50000" min="0" />
                </div>
                <div class="col-sm-6">
                  <label class="calc-label">Annual Salary / Other Income (₹)</label>
                  <input class="calc-input" type="number" id="salaryInput" placeholder="e.g. 600000" min="0" />
                </div>
                <div class="col-sm-6">
                  <label class="calc-label">Tax Regime</label>
                  <select class="calc-select" id="regime">
                    <option value="new">New Regime (FY 2025-26)</option>
                    <option value="old">Old Regime</option>
                  </select>
                </div>
                <div class="col-12">
                  <button class="btn-calc" onclick="calculateTax()"><i class="bi bi-calculator me-2"></i>Calculate
                    Tax</button>
                </div>
              </div>
              <div class="result-box" id="calcResult" style="display:none">
                <div class="result-row"><span class="label">Net Trading Income</span><span class="value"
                    id="res-net-income">—</span></div>
                <div class="result-row"><span class="label">Applicable Tax Rate</span><span class="value"
                    id="res-rate">—</span></div>
                <div class="result-row"><span class="label">Tax on Trading Income</span><span class="value tax"
                    id="res-tax">—</span></div>
                <div class="result-row"><span class="label">Estimated Advance Tax (Quarterly)</span><span class="value"
                    id="res-advance">—</span></div>
                <div class="result-row"><span class="label">Net Take-Home from Trades</span><span class="value net"
                    id="res-takehome">—</span></div>
                <div class="result-row"><span class="label">Recommended ITR Form</span><span class="value"
                    id="res-itr">—</span></div>
              </div>
            </div>
            <p style="font-size:.74rem;color:var(--muted);margin-top:.75rem">* This is an estimate for educational
              purposes only. Consult a CA for accurate filing.</p>
          </div>

          <div class="col-lg-6 rv rv-d1">
            <h3 style="margin-bottom:1.5rem">Tax Rate Quick Reference</h3>
            <div class="row g-3">
              <div class="col-12">
                <div class="feat-card" style="flex-direction:row;align-items:center;gap:1rem">
                  <div class="feat-icon" style="background:rgba(37,99,235,.1);color:var(--blue);flex-shrink:0"><i
                      class="bi bi-graph-up-arrow"></i></div>
                  <div>
                    <h6 class="mb-1">STCG on Equity</h6>
                    <p>15% flat — for shares/ETFs held under 12 months. No slab benefit.</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="feat-card" style="flex-direction:row;align-items:center;gap:1rem">
                  <div class="feat-icon" style="background:rgba(5,150,105,.1);color:var(--green);flex-shrink:0"><i
                      class="bi bi-graph-up-arrow"></i></div>
                  <div>
                    <h6 class="mb-1">LTCG on Equity</h6>
                    <p>10% on gains above ₹1 lakh — for shares held over 12 months. First ₹1L is tax-free.</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="feat-card" style="flex-direction:row;align-items:center;gap:1rem">
                  <div class="feat-icon" style="background:rgba(249,115,22,.1);color:#f97316;flex-shrink:0"><i
                      class="bi bi-currency-bitcoin"></i></div>
                  <div>
                    <h6 class="mb-1">Crypto / VDA Tax</h6>
                    <p>30% flat on all gains. No deduction except cost of acquisition. 1% TDS deducted at source.</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="feat-card" style="flex-direction:row;align-items:center;gap:1rem">
                  <div class="feat-icon" style="background:rgba(232,17,26,.1);color:var(--red);flex-shrink:0"><i
                      class="bi bi-bar-chart-steps"></i></div>
                  <div>
                    <h6 class="mb-1">F&O / Forex / Commodity</h6>
                    <p>Taxed as business income at your slab rate. Losses can be set off against most other income.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- ════════════════════════════════════════ -->
  <!-- PAGE 5: ITR GUIDE ═══════════════════════ -->
  <!-- ════════════════════════════════════════ -->
  <div class="page" id="page-itr">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-file-earmark-text-fill"></i> Step-by-Step Guide</div>
        <h1 style="font-size:clamp(2rem,5vw,3.8rem)">ITR Filing <em>Guide</em></h1>
        <p class="tagline mx-auto">A complete walkthrough for traders — choose the right form, report all income types,
          and file without errors.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <section class="sec">
      <div class="container">
        <div class="text-center mb-5 rv">
          <span class="eyebrow">Step by Step</span>
          <h2 class="sec-h">How to File ITR as a Trader</h2>
          <p class="sec-p mx-auto">Follow these 8 steps in order — don't skip any, especially if you have F&O or crypto
            income.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-xl-3 rv">
            <div class="step-card">
              <div class="step-num">1</div><br /><br />
              <h6>Collect All Statements</h6>
              <p>Download P&L from each broker. Get Form 26AS, AIS and TIS from income tax portal. Include crypto
                exchange reports.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv rv-d1">
            <div class="step-card">
              <div class="step-num">2</div><br /><br />
              <h6>Classify Your Income</h6>
              <p>Separate delivery equity (capital gains), intraday (speculative), F&O (non-speculative), and crypto.
                Wrong classification = wrong ITR form.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv rv-d2">
            <div class="step-card">
              <div class="step-num">3</div><br /><br />
              <h6>Calculate Turnover</h6>
              <p>For F&O: absolute sum of all profits + all losses = turnover. If above ₹10 Cr — audit required. Check
                audit applicability under 44AB.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv rv-d3">
            <div class="step-card">
              <div class="step-num">4</div><br /><br />
              <h6>Choose ITR Form</h6>
              <p>Only capital gains? → ITR-2. F&O / intraday / forex? → ITR-3. Presumptive taxation? → ITR-4. Multiple
                assets? → Usually ITR-3.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv">
            <div class="step-card">
              <div class="step-num">5</div><br /><br />
              <h6>Set Off Losses</h6>
              <p>Offset STCL against STCG and LTCG. F&O loss against non-speculative income. Note: crypto losses cannot
                be set off against any other income.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv rv-d1">
            <div class="step-card">
              <div class="step-num">6</div><br /><br />
              <h6>Claim Deductions</h6>
              <p>Under old regime: claim 80C (₹1.5L), 80D health insurance, home loan interest. Under new regime:
                standard deduction only. Don't miss 80TTA for savings interest.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv rv-d2">
            <div class="step-card">
              <div class="step-num">7</div><br /><br />
              <h6>Pay Remaining Tax</h6>
              <p>After TDS and advance tax, pay any balance as self-assessment tax using Challan 280 before filing.
                Include interest u/s 234A, 234B, 234C if applicable.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv rv-d3">
            <div class="step-card">
              <div class="step-num">8</div><br /><br />
              <h6>File & Verify</h6>
              <p>File on incometax.gov.in. E-verify within 30 days using Aadhaar OTP, net banking, or DSC. Unverified
                return = no return filed.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ITR Form Selection Guide -->
    <section class="sec sec-alt">
      <div class="container">
        <div class="text-center mb-5 rv">
          <span class="eyebrow">Which Form?</span>
          <h2 class="sec-h">ITR Form Selection Guide</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-xl-3 rv">
            <div class="feat-card " style="border-top:3px solid var(--blue)">
              <div class="feat-icon" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                  class="bi bi-1-circle-fill"></i></div>
              <h6>ITR-1 (Sahaj)</h6>
              <p>Salary + one house property + other sources (interest). <strong>NOT for anyone with trading
                  income.</strong> Max income ₹50L.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv rv-d1">
            <div class="feat-card " style="border-top:3px solid var(--green)">
              <div class="feat-icon" style="background:rgba(5,150,105,.1);color:var(--green)"><i
                  class="bi bi-2-circle-fill"></i></div>
              <h6>ITR-2</h6>
              <p>Salary + capital gains from equity/MF/property + crypto. For <strong>delivery investors</strong> with
                no business income. Most retail investors use this.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv rv-d2">
            <div class="feat-card " style="border-top:3px solid var(--red)">
              <div class="feat-icon" style="background:rgba(232,17,26,.1);color:var(--red)"><i
                  class="bi bi-3-circle-fill"></i></div>
              <h6>ITR-3</h6>
              <p>For <strong>F&O traders, intraday traders, forex, commodity</strong> — anyone with business income from
                trading. Also covers capital gains simultaneously.</p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 rv rv-d3">
            <div class="feat-card " style="border-top:3px solid var(--amber)">
              <div class="feat-icon" style="background:rgba(217,119,6,.1);color:var(--amber)"><i
                  class="bi bi-4-circle-fill"></i></div>
              <h6>ITR-4 (Sugam)</h6>
              <p>For <strong>presumptive taxation</strong> under Section 44AD (8% of turnover as income). F&O turnover
                under ₹2 Cr. Cannot claim actual expenses.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band sec-red">
      <div class="container">
        <h2>Practise Filing with Our Demo Module</h2>
        <p>Watch a screen-share walkthrough of filing ITR-3 for an F&O trader — live on our portal demo.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-white" onclick="showPage('modules')"><i class="bi bi-play-fill"></i>Watch Demo
            Module</button>
          <button class="btn-outline-white" onclick="showPage('faq')"><i class="bi bi-question-circle"></i>Filing
            FAQs</button>
        </div>
      </div>
    </section>
  </div>

  <!-- ════════════════════════════════════════ -->
  <!-- PAGE 6: FAQ ═════════════════════════════ -->
  <!-- ════════════════════════════════════════ -->
  <div class="page" id="page-faq">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-question-circle-fill"></i> Common Questions</div>
        <h1 style="font-size:clamp(2rem,5vw,3.8rem)">Tax <em>FAQ</em></h1>
        <p class="tagline mx-auto">The most common questions traders ask about taxation — answered in plain language by
          our CA experts.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <section class="sec">
      <div class="container">
        <div class="row g-5">
          <!-- General FAQs -->
          <div class="col-lg-6 rv">
            <h4 style="margin-bottom:1.4rem"><i class="bi bi-bar-chart-fill me-2"
                style="color:var(--red)"></i>General Trading Tax</h4>
            <div id="faq1">
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f1"
                  aria-expanded="false">Do I need to pay tax if I only do intraday trading?<i
                    class="bi bi-plus-lg"></i></button>
                <div id="f1" class="collapse">
                  <p class="faq-body">Yes. Intraday profits are classified as speculative business income and taxed at
                    your applicable slab rate. Even if your F&O or delivery trades are at a loss, intraday profits must
                    be reported. File ITR-3 to report this correctly.</p>
                </div>
              </div>
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f2"
                  aria-expanded="false">Can I set off F&O losses against my salary income?<i
                    class="bi bi-plus-lg"></i></button>
                <div id="f2" class="collapse">
                  <p class="faq-body">No, you cannot set off F&O losses directly against salary. However, F&O is
                    non-speculative business income and can be set off against any other income except salary (e.g.,
                    rental income, interest income, other business income). Unabsorbed losses carry forward for 8 years.
                  </p>
                </div>
              </div>
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f3"
                  aria-expanded="false">What is the turnover limit for tax audit in F&O?<i
                    class="bi bi-plus-lg"></i></button>
                <div id="f3" class="collapse">
                  <p class="faq-body">For F&O: if turnover exceeds ₹10 Crore, a tax audit under Section 44AB is
                    mandatory. However, if your turnover is under ₹10 Cr and you opt for Section 44AD presumptive
                    taxation (declaring 6–8% profit), no audit is needed. Audit must be completed by October 31.</p>
                </div>
              </div>
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f4"
                  aria-expanded="false">Is dividend income taxable for shareholders?<i
                    class="bi bi-plus-lg"></i></button>
                <div id="f4" class="collapse">
                  <p class="faq-body">Yes. Since FY 2020-21, dividends are fully taxable in the hands of the shareholder
                    at their applicable slab rate. There is no TDS for dividends up to ₹5,000 per company, but TDS
                    applies at 10% above that threshold. Report in Schedule OS.</p>
                </div>
              </div>
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f5"
                  aria-expanded="false">Can trading losses be carried forward if I miss the filing deadline?<i
                    class="bi bi-plus-lg"></i></button>
                <div id="f5" class="collapse">
                  <p class="faq-body">No. To carry forward any trading loss (capital or business), you MUST file your
                    return on time (by July 31 for non-audit, October 31 for audit cases). If you file a belated return
                    after the deadline, you lose the right to carry forward losses — an extremely costly mistake.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Crypto FAQs -->
          <div class="col-lg-6 rv rv-d1">
            <h4 style="margin-bottom:1.4rem"><i class="bi bi-currency-bitcoin me-2"
                style="color:#f97316"></i>Crypto & Advanced Tax</h4>
            <div>
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f6"
                  aria-expanded="false">Is crypto taxed at 30% even if I made a small profit?<i
                    class="bi bi-plus-lg"></i></button>
                <div id="f6" class="collapse">
                  <p class="faq-body">Yes. Under Section 115BBH, all gains from Virtual Digital Assets (VDA) including
                    crypto are taxed at a flat 30% regardless of the amount, your income slab, or how long you held the
                    asset. There is no basic exemption, no deduction except cost of acquisition, and no set-off against
                    any other income.</p>
                </div>
              </div>
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f7"
                  aria-expanded="false">What is 1% TDS on crypto transactions?<i class="bi bi-plus-lg"></i></button>
                <div id="f7" class="collapse">
                  <p class="faq-body">Under Section 194S, the buyer of crypto must deduct 1% TDS on the transaction
                    value if total transactions exceed ₹50,000 (₹10,000 for non-specified persons) in a year. Indian
                    exchanges like Zerodha, CoinDCX etc. automatically deduct and deposit this. The TDS is credited to
                    your 26AS and can be claimed as tax credit while filing.</p>
                </div>
              </div>
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f8"
                  aria-expanded="false">Can I claim expenses like electricity for crypto mining?<i
                    class="bi bi-plus-lg"></i></button>
                <div id="f8" class="collapse">
                  <p class="faq-body">The Income Tax Act allows deduction of only the "cost of acquisition" for VDAs.
                    Mining expenses like electricity and hardware are generally not considered cost of acquisition. The
                    Central Board of Direct Taxes (CBDT) has not yet clarified this specifically — consult a CA for the
                    latest guidance on mining tax treatment.</p>
                </div>
              </div>
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f9"
                  aria-expanded="false">What is DTAA and does it apply to forex trading?<i
                    class="bi bi-plus-lg"></i></button>
                <div id="f9" class="collapse">
                  <p class="faq-body">The Double Taxation Avoidance Agreement (DTAA) is a treaty between India and other
                    countries to prevent the same income being taxed twice. If you earn income abroad through
                    international forex brokers and it's already taxed there, you can claim credit under DTAA. File Form
                    67 before filing your ITR to claim foreign tax credit under Section 90/91.</p>
                </div>
              </div>
              <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f10"
                  aria-expanded="false">What happens if I receive a notice from the Income Tax Department?<i
                    class="bi bi-plus-lg"></i></button>
                <div id="f10" class="collapse">
                  <p class="faq-body">Don't panic. Most notices are for routine verification under Sections 143(1) or
                    148. Read the notice carefully, note the deadline, and respond through the income tax portal. Common
                    reasons: mismatch between broker P&L and ITR data, high-value transactions not reported, or AIS
                    mismatches. Always respond within the given time — ignoring a notice leads to ex-parte assessment
                    and penalties.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band sec-red">
      <div class="container">
        <h2>Have More Questions?</h2>
        <p>Join our live Q&A webinar sessions where our CA experts answer your trading tax questions in real-time.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-white" onclick="showPage('home')"><i class="bi bi-play-fill"></i>Join Live Webinar</button>
          <button class="btn-outline-white" onclick="showPage('calculator')"><i class="bi bi-calculator"></i>Calculate
            My Tax</button>
        </div>
      </div>
    </section>
  </div>

  <script>
    // ── NAVBAR SCROLL ────────────────────────
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => nav.classList.toggle('raised', scrollY > 40));

    // ── SCROLL REVEAL ────────────────────────
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: 0.09 });
    function observeReveal() { document.querySelectorAll('.rv:not(.in)').forEach(el => io.observe(el)); }
    observeReveal();

    // ── PAGE SWITCHING ───────────────────────
    function showPage(id) {
      document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
      document.querySelectorAll('.pnav-btn').forEach(b => b.classList.remove('active'));
      document.getElementById('page-' + id).classList.add('active');
      document.querySelector(`[data-page="${id}"]`).classList.add('active');
      window.scrollTo({ top: 0, behavior: 'smooth' });
      setTimeout(observeReveal, 100);
    }

    document.querySelectorAll('.pnav-btn').forEach(btn => {
      btn.addEventListener('click', () => showPage(btn.dataset.page));
    });

    // ── TAX CALCULATOR ───────────────────────
    function calculateTax() {
      const assetClass = document.getElementById('assetClass').value;
      const profit = parseFloat(document.getElementById('profitInput').value) || 0;
      const loss = parseFloat(document.getElementById('lossInput').value) || 0;
      const salary = parseFloat(document.getElementById('salaryInput').value) || 0;

      const net = Math.max(profit - loss, 0);
      let rate = 0, itrForm = '', rateLabel = '';

      if (assetClass === 'equity_stcg') {
        rate = 0.15; rateLabel = '15% (STCG)'; itrForm = 'ITR-2';
      } else if (assetClass === 'equity_ltcg') {
        const exemption = 100000;
        const taxable = Math.max(net - exemption, 0);
        const tax = taxable * 0.10;
        const advance = tax / 4;
        showResult(net, '10% (LTCG, above ₹1L exempt)', tax, advance, net - tax, 'ITR-2');
        return;
      } else if (assetClass === 'crypto') {
        rate = 0.30; rateLabel = '30% (Crypto/VDA Flat)'; itrForm = 'ITR-2 / ITR-3';
      } else {
        // Slab-based
        const totalIncome = net + salary;
        const slabTax = calcSlabTax(totalIncome) - calcSlabTax(salary);
        rate = net > 0 ? slabTax / net : 0;
        rateLabel = 'Slab Rate (approx ' + (rate * 100).toFixed(1) + '%)';
        itrForm = 'ITR-3';
        const advance = slabTax / 4;
        showResult(net, rateLabel, slabTax, advance, net - slabTax, itrForm);
        return;
      }

      const tax = net * rate;
      const advance = tax / 4;
      showResult(net, rateLabel, tax, advance, net - tax, itrForm);
    }

    function calcSlabTax(income) {
      // New Regime FY 2025-26
      if (income <= 300000) return 0;
      if (income <= 700000) return (income - 300000) * 0.05;
      if (income <= 1000000) return 20000 + (income - 700000) * 0.10;
      if (income <= 1200000) return 50000 + (income - 1000000) * 0.15;
      if (income <= 1500000) return 80000 + (income - 1200000) * 0.20;
      return 140000 + (income - 1500000) * 0.30;
    }

    function showResult(net, rate, tax, advance, takehome, itr) {
      const fmt = v => '₹' + Math.round(v).toLocaleString('en-IN');
      document.getElementById('res-net-income').textContent = fmt(net);
      document.getElementById('res-rate').textContent = rate;
      document.getElementById('res-tax').textContent = fmt(tax);
      document.getElementById('res-advance').textContent = fmt(advance) + ' / quarter';
      document.getElementById('res-takehome').textContent = fmt(takehome);
      document.getElementById('res-itr').textContent = itr;
      document.getElementById('calcResult').style.display = 'block';
    }
  </script>
<?php
include_once ('elements/footer.php');
?>
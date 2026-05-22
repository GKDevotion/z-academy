<?php 
include_once ('elements/header.php');
?>

    <style>
        
        /* ─── TYPOGRAPHY ─── */
        .font-serif {
            font-family: 'Poppins', serif;
        }

        .font-mono {
            font-family: 'Poppins', monospace;
        }

        .text-red {
            color: var(--zed-primary) !important;
        }

        .text-gold {
            color: var(--gold) !important;
        }

        .text-navy {
            color: var(--navy) !important;
        }

        .text-muted-z {
            color: var(--muted) !important;
        }

        /* ─── HERO BANNER ─── */
        .zed-hero {
            background: linear-gradient(135deg, var(--zed-banner-bg-start) 0%, var(--zed-banner-bg-end) 100%);
            position: relative;
            overflow: hidden;
            padding: 100px 0 48px;
            border-bottom: 1px solid var(--zed-border-color);
        }

        .zed-hero::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -120px;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 0, 0, .07) 0%, transparent 70%);
            pointer-events: none;
        }

        .zed-hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Poppins', monospace;
            font-size: .6rem;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--zed-primary);
            border-bottom: 1.5px solid var(--zed-primary);
            padding-bottom: 4px;
            margin-bottom: 14px;
        }

        .zed-hero-title {
            font-family: 'Poppins', serif;
            font-size: clamp(2rem, 5vw, 3.6rem);
            font-weight: 900;
            color: var(--ink);
            line-height: 1.05;
            margin-bottom: 10px;
        }

        .zed-hero-title .gold {
            color: var(--gold);
            font-style: italic;
        }

        .zed-hero-subtitle {
            font-size: .9rem;
            color: var(--muted);
            max-width: 520px;
            line-height: 1.8;
            margin-bottom: 24px;
        }

        .zed-hero-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .zed-tag {
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-border-color);
            color: var(--muted);
            font-size: .65rem;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 20px;
            transition: all .2s;
            cursor: default;
        }

        .zed-tag:hover {
            border-color: var(--zed-primary);
            color: var(--zed-primary);
        }

        /* ─── STAT BAND ─── */
        .zed-stat-band {
            display: flex;
            flex-wrap: wrap;
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: var(--border-radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-top: 28px;
        }

        .zed-stat {
            flex: 1;
            min-width: 110px;
            padding: 18px 14px;
            text-align: center;
            border-right: 1px solid var(--zed-border-color);
            transition: background .2s;
        }

        .zed-stat:last-child {
            border-right: none;
        }

        .zed-stat:hover {
            background: rgba(255, 0, 0, .03);
        }

        .zed-stat-n {
            font-family: 'Poppins', serif;
            font-size: 1.7rem;
            font-style: italic;
            color: var(--zed-primary);
            line-height: 1;
        }

        .zed-stat-l {
            font-family: 'Poppins', monospace;
            font-size: .56rem;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--faint);
            margin-top: 3px;
        }

        /* ─── SECTION HEADS ─── */
        .zed-sec-head {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
        }

        .zed-sec-icon {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            background: var(--zed-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .zed-sec-icon i {
            color: #fff;
            font-size: .8rem;
        }

        .zed-sec-title {
            font-family: 'Poppins', serif;
            font-size: clamp(1.15rem, 2.5vw, 1.55rem);
            font-weight: 700;
            color: var(--ink);
        }

        .zed-sec-rule {
            flex: 1;
            height: 1px;
            background: var(--zed-border-color);
        }

        .zed-eyebrow {
            font-family: 'Poppins', monospace;
            font-size: .7rem;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--faint);
            margin-bottom: 4px;
        }

        /* ─── ZED CARDS (universal white card) ─── */
        .zed-card {
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: var(--border-radius-lg);
            padding: 22px 20px;
            box-shadow: var(--shadow);
            transition: transform .27s, box-shadow .27s, border-color .27s;
            height: 100%;
        }

        .zed-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 36px rgba(0, 0, 0, .1);
            border-color: var(--zed-primary);
        }

        .zed-card-accent {
            border-top: 3px solid var(--ac, var(--zed-primary));
        }

        .zed-card-title {
            font-family: 'Poppins', serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .zed-card-text {
            font-size: .79rem;
            color: var(--muted);
            line-height: 1.75;
        }

        .zed-card-text strong {
            color: var(--ink);
            font-weight: 600;
        }

        /* ─── DARK FORMULA CARD ─── */
        .zed-dark-card {
            background: #111520;
            border: 1px solid rgba(255, 255, 255, .06);
            border-radius: var(--border-radius-lg);
            padding: 26px 24px;
            position: relative;
            overflow: hidden;
        }

        .zed-dark-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--dc, var(--gold));
        }

        /* ─── BADGE / CHIP ─── */
        .zed-badge {
            display: inline-block;
            font-family: 'Poppins', monospace;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 3px;
        }

        .zed-badge-red {
            background: rgba(255, 0, 0, .1);
            color: var(--zed-primary);
            border: 1px solid rgba(255, 0, 0, .2);
        }

        .zed-badge-gold {
            background: rgba(201, 168, 76, .12);
            color: var(--gold);
            border: 1px solid rgba(201, 168, 76, .25);
        }

        .zed-badge-green {
            background: var(--green-s);
            color: var(--green);
            border: 1px solid rgba(22, 101, 52, .2);
        }

        .zed-badge-navy {
            background: var(--navy-s);
            color: var(--navy);
            border: 1px solid rgba(26, 46, 90, .2);
        }

        /* ─── BUTTON SYSTEM ─── */
        .btn-zed {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-family: 'Poppins', sans-serif;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .07em;
            text-transform: uppercase;
            padding: 10px 22px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: all .2s;
            white-space: nowrap;
        }

        .btn-zed-primary {
            background: var(--zed-primary);
            color: #fff;
        }

        .btn-zed-primary:hover {
            background: var(--zed-primary-hover);
            transform: scale(.97);
        }

        .btn-zed-outline {
            background: transparent;
            border: 1.5px solid var(--zed-primary);
            color: var(--zed-primary);
        }

        .btn-zed-outline:hover {
            background: var(--zed-primary);
            color: #fff;
        }

        .btn-zed-dark {
            background: var(--ink);
            color: #fff;
        }

        .btn-zed-dark:hover {
            background: var(--zed-primary);
        }

        /* ─── SCROLL REVEAL ─── */
        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .46s ease, transform .46s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0);
        }

        /* ─── DIVIDER ─── */
        .zed-divider {
            border: none;
            border-top: 1px solid var(--zed-border-color);
            margin: 0;
        }

        /* ═══════════════════════════════════
        PAGE-SPECIFIC STYLES
        ═══════════════════════════════════ */

        /* Progress bar for course */
        .course-prog {
            height: 4px;
            background: var(--zed-border-color);
            border-radius: 2px;
            overflow: hidden;
            margin-top: 12px;
        }

        .course-prog-fill {
            height: 100%;
            background: var(--zed-primary);
            transform: scaleX(0);
            transform-origin: left;
            animation: progIn 1.3s .2s ease forwards;
        }

        @keyframes progIn {
            to {
                transform: scaleX(1);
            }
        }

        /* Timeline (history of forex) */
        .timeline-item {
            display: flex;
            gap: 16px;
            padding: 14px 0;
            border-bottom: 1px dashed var(--zed-border-color);
        }

        .timeline-item:last-child {
            border-bottom: none;
        }

        .timeline-year {
            font-family: 'Poppins', monospace;
            font-size: .75rem;
            font-weight: 700;
            color: var(--zed-primary);
            min-width: 70px;
            padding-top: 2px;
        }

        .timeline-text {
            font-size: .79rem;
            color: var(--muted);
            line-height: 1.68;
        }

        .timeline-text strong {
            color: var(--ink);
            font-weight: 600;
        }

        /* Who trades grid */
        .trader-card {
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: var(--border-radius-lg);
            padding: 20px;
            height: 100%;
            transition: border-color .2s, transform .25s;
        }

        .trader-card:hover {
            border-color: var(--zed-primary);
            transform: translateY(-3px);
        }

        .trader-icon {
            width: 42px;
            height: 42px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .trader-title {
            font-family: 'Poppins', serif;
            font-size: .95rem;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 6px;
        }

        .trader-text {
            font-size: .76rem;
            color: var(--muted);
            line-height: 1.7;
        }

        .trader-text strong {
            color: var(--ink);
            font-weight: 600;
        }

        /* Market Sessions */
        .session-bar {
            border-radius: var(--border-radius-lg);
            overflow: hidden;
        }

        .session-track {
            height: 36px;
            background: var(--zed-card-back);
            border: 1px solid var(--zed-border-color);
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .session-fill {
            height: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            padding-left: 10px;
            font-size: .65rem;
            font-weight: 700;
            color: #fff;
            letter-spacing: .08em;
            border-radius: 4px;
        }

        .session-card {
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-border-color);
            border-left: 3px solid var(--ac, var(--zed-primary));
            border-radius: 6px;
            padding: 14px 16px;
            margin-bottom: 10px;
        }

        .session-name {
            font-family: 'Poppins', monospace;
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--ac, var(--zed-primary));
            margin-bottom: 4px;
        }

        .session-time {
            font-size: .78rem;
            font-weight: 600;
            color: var(--ink);
            margin-bottom: 4px;
        }

        .session-pairs {
            font-size: .74rem;
            color: var(--muted);
        }

        /* Lot size table */
        .zed-table {
            width: 100%;
            border-collapse: collapse;
        }

        .zed-table th {
            font-family: 'Poppins', monospace;
            font-size: .6rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--faint);
            padding: 10px 14px;
            border-bottom: 2px solid var(--zed-border-color);
            text-align: left;
            background: var(--zed-card-back);
        }

        .zed-table td {
            font-size: .79rem;
            padding: 10px 14px;
            border-bottom: 1px solid var(--zed-border-color);
            color: var(--ink2);
            vertical-align: middle;
        }

        .zed-table tr:last-child td {
            border-bottom: none;
        }

        .zed-table tr:hover td {
            background: rgba(255, 0, 0, .02);
        }

        .zed-table .highlight {
            color: var(--zed-primary);
            font-weight: 700;
            font-family: 'Poppins', monospace;
        }

        .zed-table .green-val {
            color: var(--green);
            font-weight: 600;
        }

        .zed-table .muted-val {
            color: var(--muted);
        }

        /* Currency pair table */
        .cp-table {
            width: 100%;
            border-collapse: collapse;
        }

        .cp-table th {
            font-family: 'Poppins', monospace;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: 10px 12px;
            border-bottom: 2px solid var(--zed-border-color);
            background: var(--zed-card-back);
            color: var(--faint);
        }

        .cp-table td {
            font-size: .77rem;
            padding: 9px 12px;
            border-bottom: 1px dashed var(--zed-border-color);
        }

        .cp-table tr:last-child td {
            border-bottom: none;
        }

        .cp-table tr:hover td {
            background: rgba(255, 0, 0, .02);
        }

        .cp-pair {
            font-family: 'Poppins', monospace;
            font-weight: 700;
            color: var(--ink);
        }

        .cp-cat-major {
            color: var(--zed-primary);
            font-weight: 700;
            font-size: .65rem;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .cp-cat-minor {
            color: var(--blue);
            font-weight: 700;
            font-size: .65rem;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .cp-cat-exotic {
            color: var(--amber);
            font-weight: 700;
            font-size: .65rem;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .cp-best {
            display: inline-block;
            font-size: .7rem;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 10px;
        }

        /* Trading styles table */
        .style-table {
            width: 100%;
            border-collapse: collapse;
        }

        .style-table th {
            font-family: 'Poppins', monospace;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: 10px 12px;
            border-bottom: 2px solid var(--zed-border-color);
            background: var(--zed-card-back);
            color: var(--faint);
        }

        .style-table td {
            font-size: .77rem;
            padding: 9px 12px;
            border-bottom: 1px dashed var(--zed-border-color);
            color: var(--muted);
        }

        .style-table tr:last-child td {
            border-bottom: none;
        }

        .style-table tr:hover td {
            background: rgba(255, 0, 0, .02);
        }

        .style-name {
            font-weight: 700;
            color: var(--ink);
        }

        /* Broker type cards */
        .broker-card {
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: var(--border-radius-lg);
            padding: 20px;
            height: 100%;
            border-top: 3px solid var(--ac, var(--zed-primary));
            transition: transform .26s, box-shadow .26s;
        }

        .broker-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .broker-label {
            font-family: 'Poppins', monospace;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--faint);
            margin-bottom: 6px;
        }

        .broker-title {
            font-family: 'Poppins', serif;
            font-size: .98rem;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 8px;
        }

        .broker-text {
            font-size: .77rem;
            color: var(--muted);
            line-height: 1.72;
        }

        .broker-text strong {
            color: var(--ink);
            font-weight: 600;
        }

        /* Step list */
        .step-wrap {
            position: relative;
        }

        .step-line {
            position: absolute;
            left: 17px;
            top: 36px;
            bottom: 0;
            width: 1px;
            background: var(--zed-border-color);
        }

        .step-item {
            display: flex;
            gap: 16px;
            padding: 0 0 22px;
            position: relative;
        }

        .step-num {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--zed-primary);
            color: #fff;
            font-family: 'Poppins', monospace;
            font-size: .9rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 0 0 4px rgba(255, 0, 0, .12);
        }

        .step-title {
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 4px;
            font-size: .9rem;
        }

        .step-title span {
            color: var(--zed-primary);
        }

        .step-text {
            font-size: .79rem;
            color: var(--muted);
            line-height: 1.72;
        }

        .step-text strong {
            color: var(--ink);
            font-weight: 600;
        }

        /* Order type card */
        .order-card {
            background: var(--zed-card-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: var(--border-radius-lg);
            padding: 20px;
            height: 100%;
            transition: border-color .2s, transform .25s;
        }

        .order-card:hover {
            border-color: var(--ac, var(--zed-primary));
            transform: translateY(-3px);
        }

        .order-label {
            font-family: 'Poppins', monospace;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--ac, var(--zed-primary));
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .order-title {
            font-family: 'Poppins', serif;
            font-size: .96rem;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 8px;
        }

        .order-text {
            font-size: .77rem;
            color: var(--muted);
            line-height: 1.72;
        }

        .order-text strong {
            color: var(--ink);
            font-weight: 600;
        }

        .order-list li {
            font-size: .76rem;
            padding: 3px 0;
            color: var(--muted);
            border-bottom: 1px dashed var(--zed-border-color);
        }

        .order-list li:last-child {
            border-bottom: none;
        }

        .order-list li b {
            color: var(--ink);
            font-weight: 600;
        }

        /* Mindset footer */
        .mindset-footer {
            background: #111520;
            padding: 52px 0;
            position: relative;
            overflow: hidden;
        }

        .mindset-footer::before {
            content: '';
            position: absolute;
            top: -80px;
            left: 50%;
            transform: translateX(-50%);
            width: 500px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 0, 0, .07) 0%, transparent 70%);
            pointer-events: none;
        }

        .mindset-quote {
            font-family: 'Poppins', serif;
            font-size: clamp(.9rem, 2vw, 1.25rem);
            font-style: italic;
            color: rgba(255, 255, 255, .7);
            line-height: 1.8;
            max-width: 680px;
            margin: 0 auto 24px;
            text-align: center;
        }

        .mindset-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
        }

        .mindset-chip {
            background: rgba(255, 255, 255, .06);
            border: 1px solid rgba(255, 255, 255, .1);
            color: rgba(255, 255, 255, .55);
            font-family: 'Poppins', monospace;
            font-size: .62rem;
            font-weight: 600;
            letter-spacing: .08em;
            padding: 7px 16px;
            border-radius: 20px;
            cursor: pointer;
            transition: all .2s;
        }

        .mindset-chip:hover {
            background: var(--zed-primary);
            border-color: var(--zed-primary);
            color: #fff;
        }

        /* Floating badge on hero */
        @keyframes floatY {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(var(--float-distance));
            }
        }

        .float-anim {
            animation: floatY var(--float-duration) ease-in-out infinite;
        }

        /* ── Back to top ── */
        .back-top {
            position: fixed;
            bottom: 22px;
            right: 22px;
            width: 40px;
            height: 40px;
            background: var(--zed-primary);
            color: #fff;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .85rem;
            cursor: pointer;
            box-shadow: 0 4px 16px rgba(255, 0, 0, .3);
            transition: background .2s, transform .2s;
            z-index: 300;
        }

        .back-top:hover {
            background: var(--zed-primary-hover);
            transform: translateY(-3px);
        }

        /* Section spacing */
        .zed-section {
            padding: 64px 0;
        }

        .zed-section-sm {
            padding: 44px 0;
        }

        @media (max-width: 768px) {
            .zed-nav {
                display: none;
            }

            .zed-hero-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .zed-stat {
                border-right: none;
                border-bottom: 1px solid var(--zed-border-color);
            }

            .zed-stat:last-child {
                border-bottom: none;
            }
        }
    </style>
    
    <!-- ═══ HERO ═══ -->
    <div class="zed-hero">
        <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
            <div class="zed-hero-eyebrow"><i class="fas fa-rocket me-1"></i> Beginner Forex Course · Zero to Hero</div>
            <h1 class="zed-hero-title">Forex Trading <span class="gold">Academy</span><br>Zero to Hero</h1>
            <p class="zed-hero-subtitle">Theory · Practical · Math · Infographics · Psychology · AI Trading — Everything
                you need to trade like a professional from day one.</p>
            <div class="zed-hero-tags">
                <span class="zed-tag">📈 Forex Fundamentals</span>
                <span class="zed-tag">📐 Maths & Lot Sizing</span>
                <span class="zed-tag">🧠 Trading Psychology</span>
                <span class="zed-tag">🤖 AI Trading</span>
                <span class="zed-tag">📊 Indicators</span>
                <span class="zed-tag">⚡ Order Types</span>
            </div>
            <div class="d-flex gap-3 flex-wrap mt-4">
                <button class="btn-zed btn-zed-primary"><i class="fas fa-play-circle"></i> Start Learning Free</button>
                <button class="btn-zed btn-zed-outline"><i class="fas fa-download"></i> Download Syllabus</button>
            </div>
            </div>
            <div class="col-lg-5">
            <div class="zed-stat-band">
                <div class="zed-stat">
                <div class="zed-stat-n">$7.5T</div>
                <div class="zed-stat-l">Daily FX Volume</div>
                </div>
                <div class="zed-stat">
                <div class="zed-stat-n">24/5</div>
                <div class="zed-stat-l">Market Open</div>
                </div>
                <div class="zed-stat">
                <div class="zed-stat-n">7+</div>
                <div class="zed-stat-l">Modules</div>
                </div>
                <div class="zed-stat">
                <div class="zed-stat-n">100K</div>
                <div class="zed-stat-l">Units of Base Currency</div>
                </div>
            </div>
            <div class="zed-stat-band mt-2">
                <div class="zed-stat">
                <div class="zed-stat-n" style="font-size:1.2rem;color:var(--green)">~5%</div>
                <div class="zed-stat-l">Retail Success Rate</div>
                </div>
                <div class="zed-stat">
                <div class="zed-stat-n">180+</div>
                <div class="zed-stat-l">Currency Pairs</div>
                </div>
            </div>
            <!-- Progress bar -->
            <div class="mt-3 p-3"
                style="background:var(--zed-card-bg);border:1px solid var(--zed-border-color);border-radius:var(--border-radius-lg);">
                <div class="d-flex justify-content-between align-items-center mb-2">
                <span style="font-size:.7rem;font-weight:700;color:var(--ink);">Your Progress</span>
                <span class="zed-badge zed-badge-red">0% Complete</span>
                </div>
                <div class="course-prog">
                <div class="course-prog-fill" style="width:0%"></div>
                </div>
                <div style="font-size:.65rem;color:var(--faint);margin-top:6px;font-family:'Poppins',monospace;">
                Module 1 of 9 — Not started</div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- ═══ SECTION 1: WHAT IS FOREX ═══ -->
    <section class="zed-section" style="background:var(--zed-light-bg)">
        <div class="container">
        <div class="zed-sec-head reveal">
            <div class="zed-sec-icon"><i class="fas fa-globe"></i></div>
            <h2 class="zed-sec-title">Forex Market Fundamentals — Complete Guide</h2>
            <div class="zed-sec-rule"></div>
        </div>

        <!-- What is Forex -->
        <div class="row g-4 mb-5">
            <div class="col-lg-7 reveal">
            <div class="zed-eyebrow">What is Forex? — The Complete Picture</div>
            <h3 class="font-serif" style="font-size:1.3rem;font-weight:700;color:var(--ink);margin-bottom:14px;">
                Understanding the Foreign Exchange Market</h3>
            <p style="font-size:.9rem;color:var(--muted);line-height:1.82;margin-bottom:14px;">
                <strong>Forex (Foreign Exchange)</strong> is the global marketplace where one currency is exchanged for
                another. Unlike stocks (which trade on centralised exchanges like NYSE), Forex is an <strong>OTC
                (Over-The-Counter)</strong> market — meaning there is no single central exchange. Instead, trading happens
                through a global network of banks, brokers, and electronic systems called the <strong>interbank
                network.</strong>
            </p>
            <p style="font-size:.9rem;color:var(--muted);line-height:1.82;">
                Every time a business imports goods from another country, a tourist converts money at an airport, or a
                central bank adjusts its currency reserves — that is a Forex transaction. Retail traders (like you)
                participate through brokers who give us access to this interbank market.
            </p>
            </div>
            <div class="col-lg-5 reveal">
            <!-- Brief History Timeline -->
            <div class="zed-eyebrow mb-2">Brief History of Forex</div>
            <div class="timeline-item">
                <div class="timeline-year">1944</div>
                <div class="timeline-text"><strong>Bretton Woods:</strong> Countries pegged currencies to USD, which was
                backed by gold (BW/GS).</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year">1971</div>
                <div class="timeline-text"><strong>Nixon Shock:</strong> USA abandoned gold standard. Currencies began
                floating freely against each other — Forex as we know it was born.</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year">1973</div>
                <div class="timeline-text"><strong>Free Float Era Major:</strong> Pairs began consistently fluctuating based
                on supply/demand.</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year">1990s</div>
                <div class="timeline-text"><strong>Electronic Trading:</strong> Internet enabled retail traders to access
                Forex markets for the first time.</div>
            </div>
            <div class="timeline-item">
                <div class="timeline-year">2000s–Now</div>
                <div class="timeline-text"><strong>MT4/MT5</strong> platforms, ECN brokers, algorithmic trading, and mobile
                apps democratised Forex globally.</div>
            </div>
            </div>
        </div>

        <!-- Who Trades Forex -->
        <div class="zed-sec-head reveal" style="margin-top:12px">
            <div class="zed-sec-icon" style="background:var(--navy)"><i class="fas fa-users"></i></div>
            <h3 class="zed-sec-title">Who Trades Forex? — Market Participants</h3>
            <div class="zed-sec-rule"></div>
        </div>
        <div class="row g-3">
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="trader-card">
                <div class="trader-icon" style="background:rgba(255,0,0,.08)"><i class="fas fa-university"
                    style="color:var(--zed-primary)"></i></div>
                <div class="zed-badge zed-badge-red mb-2">Tier 1 — Central Banks</div>
                <div class="trader-title">Federal Reserve, ECB, BoJ…</div>
                <p class="trader-text"><strong>What they do:</strong> Set interest rates and intervene directly in currency
                markets. A single central bank statement can move EUR/USD 200–500+ pips in seconds.</p>
                <div
                style="margin-top:10px;font-size:.72rem;color:var(--muted);border-top:1px dashed var(--zed-border-color);padding-top:8px;font-family:'Poppins',monospace;">
                Why it matters for you: FOMC, ECB, BOE and MPC decisions are the most important events on the economic
                calendar. Learn to trade around them.</div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="trader-card">
                <div class="trader-icon" style="background:rgba(21,81,160,.08)"><i class="fas fa-building-columns"
                    style="color:var(--blue)"></i></div>
                <div class="zed-badge zed-badge-navy mb-2">Tier 2 — Commercial Banks</div>
                <div class="trader-title">JPMorgan, Citi, Deutsche Bank…</div>
                <p class="trader-text"><strong>What they do:</strong> Provide liquidity by quoting bid/ask prices to other
                banks and institutional clients. They hold huge inventories of currencies and profit from the bid–ask
                spread across millions of transactions daily.</p>
                <div
                style="margin-top:10px;font-size:.72rem;color:var(--muted);border-top:1px dashed var(--zed-border-color);padding-top:8px;font-family:'Poppins',monospace;">
                Interbank market: Banks trade directly with each other via platforms like EBS and Reuters Matching. Retail
                traders cannot access this — we go through brokers.</div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="trader-card">
                <div class="trader-icon" style="background:rgba(201,168,76,.1)"><i class="fas fa-briefcase"
                    style="color:var(--gold)"></i></div>
                <div class="zed-badge zed-badge-gold mb-2">Tier 3 — Hedge Funds</div>
                <div class="trader-title">Bridgewater, Citadel, Renaissance</div>
                <p class="trader-text"><strong>What they do:</strong> Speculate for profit using systematic macro models,
                algorithmic strategies, and leverage. Often move markets on short timeframes.</p>
                <div
                style="margin-top:10px;font-size:.72rem;color:var(--muted);border-top:1px dashed var(--zed-border-color);padding-top:8px;font-family:'Poppins',monospace;">
                Their positioning is reported in the COT (Commitment of Traders) report — a key tool for retail traders.
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="trader-card">
                <div class="trader-icon" style="background:rgba(22,101,52,.08)"><i class="fas fa-user"
                    style="color:var(--green)"></i></div>
                <div class="zed-badge zed-badge-green mb-2">Retail Traders — You</div>
                <div class="trader-title">Individual Traders Worldwide</div>
                <p class="trader-text"><strong>What they do:</strong> Trade through brokers for speculation, income, or
                portfolio hedging. ~5% consistently profitable. <strong>Edge comes from education, process, and
                    discipline.</strong></p>
                <div
                style="margin-top:10px;font-size:.72rem;color:var(--muted);border-top:1px dashed var(--zed-border-color);padding-top:8px;font-family:'Poppins',monospace;">
                Retail traders have access to leverage (up to 500:1 offshore) — amplifying both profits and losses
                dramatically.</div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <hr class="zed-divider" />

    <!-- ═══ SECTION 2: MARKET SESSIONS ═══ -->
    <section class="zed-section" style="background:var(--zed-background-color)">
        <div class="container">
        <div class="zed-sec-head reveal">
            <div class="zed-sec-icon" style="background:var(--navy)"><i class="fas fa-clock"></i></div>
            <h2 class="zed-sec-title">Market Sessions — Full Infographic</h2>
            <div class="zed-sec-rule"></div>
        </div>
        <p class="reveal" style="font-size:.9rem;color:var(--muted);margin-bottom:24px;">Forex is open <strong>24 hours a
            day, 5 days a week.</strong> The market is a sequencing of sessions. Volatility and volume peak during the
            London–NY overlap <strong>(13:00–17:00 GMT)</strong> — the golden trading window.</p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 reveal">
            <div class="session-card" style="--ac:var(--zed-primary)">
                <div class="session-name">🗾 Tokyo Session</div>
                <div class="session-time">00:00–09:00 GMT</div>
                <div class="session-pairs">Best pairs: AUD/USD, NZD/USD, USD/JPY, EUR/JPY</div>
                <div style="margin-top:8px;font-size:.74rem;color:var(--muted);">Characteristics: Thin liquidity, price
                spreads possible, mostly consolidation. Today's levels: Monitor NZD (Reserve Bank of Australia) statements
                as key events.</div>
                <span class="zed-badge zed-badge-red mt-2 d-inline-block">Asian Session</span>
            </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal">
            <div class="session-card" style="--ac:var(--blue)">
                <div class="session-name">🇬🇧 London Session</div>
                <div class="session-time">08:00–17:00 GMT</div>
                <div class="session-pairs">Best pairs: GBP/USD, EUR/USD, EUR/GBP, EUR/JPY</div>
                <div style="margin-top:8px;font-size:.74rem;color:var(--muted);">Characteristics: <strong>Highest volatility
                    session.</strong> Bank of Japan (BoJ) interventions happen. H4 structure breaks. TP move. Price often
                sets the day's high or low. London sets key levels that often holds all week.</div>
                <span class="zed-badge zed-badge-navy mt-2 d-inline-block">Most Active</span>
            </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal">
            <div class="session-card" style="--ac:var(--gold)">
                <div class="session-name">🗽 New York Session</div>
                <div class="session-time">13:00–22:00 GMT</div>
                <div class="session-pairs">Best pairs: EUR/USD, GBP/USD, USD/CAD, USD/CHF</div>
                <div style="margin-top:8px;font-size:.74rem;color:var(--muted);">NFP, CPI, FOMC news drops here. Second most
                liquid session. Overlapping with London 13:00–17:00 creates the highest volume window of the entire
                trading week.</div>
                <span class="zed-badge zed-badge-gold mt-2 d-inline-block">High Impact News</span>
            </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal">
            <div class="zed-dark-card h-100" style="--dc:var(--zed-primary)">
                <div
                style="font-family:'Poppins',monospace;font-size:.6rem;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:var(--zed-primary);margin-bottom:12px;">
                🏆 Best Times to Trade</div>
                <div style="font-size:.78rem;color:rgba(255,255,255,.6);line-height:1.8;">
                <div
                    style="margin-bottom:8px;color:rgba(255,255,255,.85);font-weight:600;font-family:'Poppins',monospace;">
                    London Open: 08:00–10:00 GMT</div>
                <div style="font-size:.72rem;margin-bottom:14px;color:rgba(255,255,255,.45);">EUR/USD, GBP/USD, Gold —
                    highest breakout probability</div>
                <div
                    style="margin-bottom:8px;color:rgba(255,255,255,.85);font-weight:600;font-family:'Poppins',monospace;">
                    NY Open: 13:00–16:00 GMT</div>
                <div style="font-size:.72rem;color:rgba(255,255,255,.45);">Avoid: 22:00–00:00 GMT (thin, manipulated
                    spreads)</div>
                </div>
                <div
                style="margin-top:14px;padding:10px;background:rgba(255,0,0,.08);border:1px solid rgba(255,0,0,.15);border-radius:6px;font-size:.72rem;color:rgba(255,255,255,.55);">
                <i class="fas fa-triangle-exclamation" style="color:var(--zed-primary);margin-right:5px"></i> Never trade
                30 mins before major news releases.
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <hr class="zed-divider" />

    <!-- ═══ SECTION 3: CORE TERMINOLOGY ═══ -->
    <section class="zed-section" style="background:var(--zed-light-bg)">
        <div class="container">
        <div class="zed-sec-head reveal">
            <div class="zed-sec-icon"><i class="fas fa-book-open"></i></div>
            <h2 class="zed-sec-title">Core Terminology — Every Term Explained</h2>
            <div class="zed-sec-rule"></div>
        </div>
        <div class="row g-4 mb-4">
            <div class="col-md-6 reveal">
            <div class="zed-card zed-card-accent" style="--ac:var(--zed-primary)">
                <div class="zed-eyebrow">PIP — Price Interest Point</div>
                <div class="zed-card-title">What is a Pip?</div>
                <p class="zed-card-text">A pip is the <strong>smallest standardised unit</strong> in a currency pair. For
                most pairs: <code
                    style="background:var(--zed-card-back);padding:1px 5px;border-radius:3px;font-family:'Poppins',monospace;font-size:.78rem;">1 pip = 0.0001 (the 4th decimal place)</code>.
                For JPY pairs: <code
                    style="background:var(--zed-card-back);padding:1px 5px;border-radius:3px;font-family:'Poppins',monospace;font-size:.78rem;">1 pip = 0.01 (the 2nd decimal place)</code>.
                </p>
                <div
                style="margin-top:12px;background:var(--zed-card-back);border:1px solid var(--zed-border-color);padding:12px;border-radius:6px;">
                <div
                    style="font-family:'Poppins',monospace;font-size:.7rem;letter-spacing:.16em;text-transform:uppercase;color:var(--faint);margin-bottom:8px;">
                    Examples</div>
                <div style="font-size:.77rem;color:var(--muted);line-height:1.8;">
                    EUR/USD moves from 1.0800 → 1.0830 = <strong style="color:var(--zed-primary)">30 pips</strong><br>
                    GBP/JPY moves from 192.40 → 193.10 = <strong style="color:var(--zed-primary)">70 pips</strong><br>
                    Pip value (1 lot) = <strong>$10 per pip</strong> on EUR/USD
                </div>
                </div>
                <p class="zed-card-text mt-2">Modern brokers quote <strong>5 decimal places (pipettes)</strong> — the 5th
                digit = 0.1 pip. Pip value in dollars depends on lot size.</p>
            </div>
            </div>
            <div class="col-md-6 reveal">
            <div class="zed-card zed-card-accent" style="--ac:var(--navy)">
                <div class="zed-eyebrow">LOT SIZE — Full Breakdown with Values</div>
                <div class="zed-card-title">Lot Sizes Explained</div>
                <div class="table-responsive">
                <table class="zed-table">
                    <thead>
                    <tr>
                        <th>Lot Type</th>
                        <th>Units</th>
                        <th>Pip Value (EUR/USD)</th>
                        <th>For accounts</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="highlight">Standard</td>
                        <td>100,000</td>
                        <td class="green-val">$10 per pip</td>
                        <td>$10,000+</td>
                    </tr>
                    <tr>
                        <td class="highlight">Mini</td>
                        <td>10,000</td>
                        <td class="green-val">$1 per pip</td>
                        <td>$500–10,000</td>
                    </tr>
                    <tr>
                        <td class="highlight">Micro</td>
                        <td>1,000</td>
                        <td class="green-val">$0.10 per pip</td>
                        <td>$50–$1,000</td>
                    </tr>
                    <tr>
                        <td class="highlight">Nano</td>
                        <td>100</td>
                        <td class="green-val">$0.01 per pip</td>
                        <td>Practice</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div
                style="margin-top:12px;background:var(--zed-card-back);border:1px solid var(--zed-border-color);padding:12px;border-radius:6px;">
                <div
                    style="font-family:'Poppins',monospace;font-size:.7rem;letter-spacing:.16em;text-transform:uppercase;color:var(--faint);margin-bottom:6px;">
                    Practical Example</div>
                <div style="font-size:.77rem;color:var(--muted);">You have $500. If you risk 1% = <strong>$5 risk per
                    trade.</strong> With 30-pip SL: lot size = 5÷(30×1) = <strong>0.17 mini lots</strong></div>
                </div>
            </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4 reveal">
            <div class="zed-card">
                <div class="zed-eyebrow">Spread</div>
                <div class="zed-card-title">Bid / Ask Spread</div>
                <p class="zed-card-text">The spread is the difference between the <strong>Bid price</strong> (sell) and
                <strong>Ask price</strong> (buy). This is your broker's cost. <strong>ECN brokers</strong> offer raw
                spreads (0.0–0.3 pips) + commission. <strong>MM brokers</strong> include markup in the spread.</p>
            </div>
            </div>
            <div class="col-md-4 reveal">
            <div class="zed-card">
                <div class="zed-eyebrow">Leverage &amp; Margin</div>
                <div class="zed-card-title">Leverage &amp; Margin</div>
                <p class="zed-card-text"><strong>Leverage</strong> = how much capital your broker multiplies. 1:100 leverage
                = $1,000 controls $100,000. <strong>Margin</strong> = the deposit required. A 1% margin means $1,000 for a
                $100,000 position. <strong>Free margin = Equity − Used margin.</strong></p>
            </div>
            </div>
            <div class="col-md-4 reveal">
            <div class="zed-card">
                <div class="zed-eyebrow">Swap / Rollover</div>
                <div class="zed-card-title">Overnight Swap Rate</div>
                <p class="zed-card-text">When you hold a position past <strong>5:00 PM New York time</strong>, your broker
                applies a swap charge or credit based on the interest rate differential between the two currencies.
                Wednesday swap is 3× (for weekend). <strong>Some brokers offer swap-free accounts.</strong></p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <hr class="zed-divider" />

    <!-- ═══ SECTION 4: BROKER TYPES ═══ -->
    <section class="zed-section" style="background:var(--zed-background-color)">
        <div class="container">
        <div class="zed-sec-head reveal">
            <div class="zed-sec-icon" style="background:var(--navy)"><i class="fas fa-building"></i></div>
            <h2 class="zed-sec-title">Broker Types — Which One Should You Use?</h2>
            <div class="zed-sec-rule"></div>
        </div>
        <div class="row g-3">
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="broker-card" style="--ac:var(--zed-primary)">
                <div class="broker-label">Market Maker (MM)</div>
                <div class="broker-title">Market Maker</div>
                <p class="broker-text">They <strong>take the other side</strong> of your trade. Your trades may never reach
                the real market. Trader may requote. Fixed spreads. <strong>Conflict of interest — they profit when you
                    lose.</strong></p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="broker-card" style="--ac:var(--blue)">
                <div class="broker-label">STP Broker</div>
                <div class="broker-title">Straight-Through Processing</div>
                <p class="broker-text">They profit from your <strong>losses — the spread.</strong> No dealing desk, trades
                pass straight to market. <strong>No requotes</strong>. Variable spreads. Better than MM for active
                traders.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="broker-card" style="--ac:var(--green)">
                <div class="broker-label">ECN Broker ✓ Recommended</div>
                <div class="broker-title">Electronic Comm. Network</div>
                <p class="broker-text">Your orders are sent directly to liquidity providers (banks). <strong>Raw spreads
                    from 0.0 pips + small commission ($3–7/lot).</strong> Most transparent. Best for serious traders.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="broker-card" style="--ac:var(--gold)">
                <div class="broker-label">Spread Betting</div>
                <div class="broker-title">Spread Betting</div>
                <p class="broker-text">Variable spreads. No requotes, faster execution than MM. <strong>Sigma:</strong>
                Variable spreads, no requotes, faster than market maker. <strong>Vantage:</strong> Good middle ground for
                swing and most conservative traders.</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <hr class="zed-divider" />

    <!-- ═══ SECTION 5: CURRENCY PAIRS ═══ -->
    <section class="zed-section" style="background:var(--zed-light-bg)">
        <div class="container">
        <div class="zed-sec-head reveal">
            <div class="zed-sec-icon" style="background:var(--gold)"><i class="fas fa-money-bill-wave"></i></div>
            <h2 class="zed-sec-title">Currency Pairs — Full Classification</h2>
            <div class="zed-sec-rule"></div>
        </div>
        <div class="table-responsive reveal">
            <table class="cp-table"
            style="background:var(--zed-card-bg);border:1px solid var(--zed-border-color);border-radius:var(--border-radius-lg);overflow:hidden;">
            <thead>
                <tr>
                <th>Category</th>
                <th>Pairs</th>
                <th>Characteristics</th>
                <th>Typical Spread</th>
                <th>Daily Range</th>
                <th>Best For</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><span class="cp-cat-major">Major</span></td>
                <td>
                    <div class="cp-pair">EUR/USD · GBP/USD</div>
                    <div class="cp-pair">USD/JPY · USD/CHF</div>
                    <div class="cp-pair">AUD/USD · USD/CAD · NZD/USD</div>
                </td>
                <td style="font-size:.74rem;color:var(--muted);">Highest liquidity globally. Most analysed. Tightest
                    spreads.</td>
                <td style="color:var(--green);font-family:'Poppins',monospace;font-size:.75rem;font-weight:600;">
                    0.5–1.5 pips</td>
                <td style="font-family:'Poppins',monospace;font-size:.74rem;">50–150 pips</td>
                <td><span class="cp-best" style="background:var(--green-s);color:var(--green);">All traders</span></td>
                </tr>
                <tr>
                <td><span class="cp-cat-minor">Minor</span></td>
                <td>
                    <div class="cp-pair">EUR/GBP · GBP/JPY</div>
                    <div class="cp-pair">EUR/JPY · AUD/JPY</div>
                </td>
                <td style="font-size:.74rem;color:var(--muted);">Less liquidity, wider spreads. Offer unique
                    opportunities.</td>
                <td style="color:var(--amber);font-family:'Poppins',monospace;font-size:.75rem;font-weight:600;">
                    1.5–3 pips</td>
                <td style="font-family:'Poppins',monospace;font-size:.74rem;">80–200 pips</td>
                <td><span class="cp-best" style="background:var(--navy-s);color:var(--navy);">Intermediate</span></td>
                </tr>
                <tr>
                <td><span class="cp-cat-exotic">Exotic</span></td>
                <td>
                    <div class="cp-pair">USD/TRY · USD/ZAR</div>
                    <div class="cp-pair">USD/MXN · EUR/NOK</div>
                </td>
                <td style="font-size:.74rem;color:var(--muted);">Very low liquidity, very wide spreads. High risk. Prone
                    to manipulation.</td>
                <td
                    style="color:var(--zed-primary);font-family:'Poppins',monospace;font-size:.75rem;font-weight:600;">
                    5–50 pips</td>
                <td style="font-family:'Poppins',monospace;font-size:.74rem;">100–500+ pips</td>
                <td><span class="cp-best" style="background:rgba(255,0,0,.08);color:var(--zed-primary);">Advanced
                    only</span></td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </section>

    <hr class="zed-divider" />

    <!-- ═══ SECTION 6: HOW A TRADE WORKS ═══ -->
    <section class="zed-section" style="background:var(--zed-background-color)">
        <div class="container">
        <div class="zed-sec-head reveal">
            <div class="zed-sec-icon"><i class="fas fa-exchange-alt"></i></div>
            <h2 class="zed-sec-title">How a Forex Trade Works — Step by Step</h2>
            <div class="zed-sec-rule"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
            <div class="step-wrap">
                <div class="step-line"></div>
                <div class="step-item reveal">
                <div class="step-num">1</div>
                <div>
                    <div class="step-title">Analyse the Market</div>
                    <p class="step-text">Use top-down analysis — start Monthly/Weekly for the macro trend, Daily for key
                    levels, H4/H1 for trade setup. Identify whether you're in a <strong>trending, ranging, or
                        transitioning market.</strong></p>
                </div>
                </div>
                <div class="step-item reveal">
                <div class="step-num">2</div>
                <div>
                    <div class="step-title">Calculate Position Size</div>
                    <p class="step-text"><strong>Practical example (Lot Size Formula):</strong><br>
                    You have $500 account. Risk 1% = $5 per trade. SL = 20 pips → Lot size = 5 ÷ (20 × 1) = <strong
                        style="color:var(--zed-primary)">0.25 mini lots</strong></p>
                </div>
                </div>
                <div class="step-item reveal">
                <div class="step-num">3</div>
                <div>
                    <div class="step-title">Calculate lot size: Run = $20 – SL = 20 pips/trade setup</div>
                    <p class="step-text">Set SL: $20.00 at market or as a limit order. TP at next key level. Set the R:R
                    before placing the trade — <strong>minimum 1:2 RRR.</strong> If you can't find a clean 1:2 setup, skip
                    the trade.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <hr class="zed-divider" />

    <!-- ═══ SECTION 7: ORDER TYPES ═══ -->
    <section class="zed-section" style="background:var(--zed-light-bg)">
        <div class="container">
        <div class="zed-sec-head reveal">
            <div class="zed-sec-icon" style="background:var(--navy)"><i class="fas fa-list-check"></i></div>
            <h2 class="zed-sec-title">Order Types — Complete Guide with When to Use Each</h2>
            <div class="zed-sec-rule"></div>
        </div>
        <div class="row g-3">
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card" style="--ac:var(--zed-primary)">
                <div class="order-label"><i class="fas fa-arrow-up"></i> Market Order</div>
                <div class="order-title">Market Order</div>
                <p class="order-text">Executes immediately at the <strong>current best available price.</strong> Use when:
                You need instant fill and precise price isn't critical. Risk: Slippage during fast market moves.</p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card" style="--ac:var(--blue)">
                <div class="order-label"><i class="fas fa-arrow-down"></i> Buy Limit</div>
                <div class="order-title">Buy Limit</div>
                <p class="order-text">Place a buy order at a <strong>lower price than current.</strong> Refer to your broker
                at a fixed value for slippage → guaranteed fill at your price or better. Use: When you want to buy at
                support, a fair value gap, or discount zone.</p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card" style="--ac:var(--green)">
                <div class="order-label"><i class="fas fa-chart-line"></i> Buy Stop</div>
                <div class="order-title">Buy Stop</div>
                <p class="order-text">Place a buy order <strong>above current price.</strong> Executes when price rises to
                that level. Use: When a breakout above resistance confirms your bias — guaranteed fill once level is hit.
                </p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card" style="--ac:var(--gold)">
                <div class="order-label"><i class="fas fa-stop"></i> Stop Loss (SL)</div>
                <div class="order-title">Stop Loss — Non-Negotiable</div>
                <p class="order-text">An order that <strong>automatically closes your trade if price moves against
                    you.</strong> Place below structure (buy trades) or above structure (sell trades). Never trade without a
                stop loss — the market will move against you eventually.</p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card" style="--ac:var(--emerald)">
                <div class="order-label"><i class="fas fa-bullseye"></i> Take Profit (TP)</div>
                <div class="order-title">Take Profit</div>
                <p class="order-text">Automatically closes your trade at a <strong>target profit level.</strong> Place at
                the next key level of S/R. TP1 = 50% partial close. TP2 = full close. This locks in profits without
                watching the screen.</p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card" style="--ac:var(--purple)">
                <div class="order-label"><i class="fas fa-shield-alt"></i> Trailing Stop</div>
                <div class="order-title">Trailing Stop</div>
                <p class="order-text">A <strong>dynamic stop loss</strong> that moves with price as it goes in your favour —
                but stays locked if price reverses. Use on strong trend trades to lock in profit while letting winners
                run.</p>
            </div>
            </div>
        </div>
        </div>
    </section>

    <hr class="zed-divider" />

    <!-- ═══ SECTION 8: TRADING STYLES ═══ -->
    <section class="zed-section" style="background:var(--zed-background-color)">
        <div class="container">
        <div class="zed-sec-head reveal">
            <div class="zed-sec-icon" style="background:var(--emerald)"><i class="fas fa-sliders"></i></div>
            <h2 class="zed-sec-title">Trading Styles — Which One Suits You?</h2>
            <div class="zed-sec-rule"></div>
        </div>
        <div class="table-responsive reveal">
            <table class="style-table"
            style="background:var(--zed-card-bg);border:1px solid var(--zed-border-color);border-radius:var(--border-radius-lg);overflow:hidden;">
            <thead>
                <tr>
                <th>Style</th>
                <th>Timeframes</th>
                <th>Holding Period</th>
                <th>Trades/Week</th>
                <th>SL Size</th>
                <th>Best For</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                    <div class="style-name">Scalping</div>
                </td>
                <td>M1, M5</td>
                <td>Seconds – Minutes</td>
                <td>20–100+ pips</td>
                <td>5–15 pips</td>
                <td style="font-size:.74rem;color:var(--muted);">Requires fast execution, ECN broker, VPS. High stress.
                </td>
                </tr>
                <tr>
                <td>
                    <div class="style-name">Day Trading</div>
                </td>
                <td>M15, H1</td>
                <td>Hours (closed daily)</td>
                <td>1–5 pips</td>
                <td>15–40 pips</td>
                <td style="font-size:.74rem;color:var(--muted);">No overnight risk. Clear stop loss. Best for working
                    traders.</td>
                </tr>
                <tr>
                <td>
                    <div class="style-name">Swing Trading</div>
                </td>
                <td>H4, D1</td>
                <td>Days to weeks</td>
                <td>1–10 pips</td>
                <td>30–100 pips</td>
                <td style="font-size:.74rem;color:var(--muted);">Less screen time, larger targets, psychological pressure
                    from holding.</td>
                </tr>
                <tr>
                <td>
                    <div class="style-name">Position Trading</div>
                </td>
                <td>W1, MN</td>
                <td>Weeks to months</td>
                <td>&lt;5 pips</td>
                <td>100–300 pips</td>
                <td style="font-size:.74rem;color:var(--muted);">Fundamental analysis focus (large S/R levels). Patient
                    traders only.</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </section>

    <hr class="zed-divider" />

    <!-- ═══ MINDSET FOOTER ═══ -->
    <div class="mindset-footer">
        <div class="container">
        <div
            style="font-family:'Poppins',monospace;font-size:.6rem;font-weight:700;letter-spacing:.22em;text-transform:uppercase;color:var(--zed-primary);text-align:center;margin-bottom:18px;">
            The Trading Mindset</div>
        <blockquote class="mindset-quote reveal">
            "Start with Demo Trading ONLY. You need time to think, analyse, and react without the stress of watching every
            tick. Most successful beginner traders start 3–6 months of demo trading after 6+ months of consistent demo
            trading results."
        </blockquote>
        <div class="mindset-chips reveal">
            <span class="mindset-chip">📓 Journal every trade</span>
            <span class="mindset-chip">⚙️ Execute the process</span>
            <span class="mindset-chip">📊 Review weekly</span>
            <span class="mindset-chip">🛡️ Protect capital first</span>
            <span class="mindset-chip">🎯 Trust the edge</span>
            <span class="mindset-chip">🤖 AI trading comes last</span>
        </div>
        </div>
    </div>

    <script>
        // ── Scroll reveal
        const obs = new IntersectionObserver(entries => {
        entries.forEach((e, i) => {
            if (e.isIntersecting) { setTimeout(() => e.target.classList.add('in'), i * 65); obs.unobserve(e.target); }
        });
        }, { threshold: 0.07 });
        document.querySelectorAll('.reveal').forEach(r => obs.observe(r));

        // ── Nav active on scroll
        const sections = document.querySelectorAll('section[id]');
        window.addEventListener('scroll', () => {
        let cur = '';
        sections.forEach(s => { if (window.scrollY >= s.offsetTop - 100) cur = s.id; });
        document.querySelectorAll('.zed-nav-btn').forEach(b => b.classList.remove('active'));
        document.querySelector('.zed-nav-btn')?.classList.add('active');
        });
    </script>
<?php
include_once ('elements/footer.php');
?>
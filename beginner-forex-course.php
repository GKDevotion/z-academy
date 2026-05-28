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

      
        /* PROGRESS */
        .progress-bar{height:3px;background:var(--g2);}
        .progress-fill{
            height:100%;
            background:var(--zed-primary);
            transition:width 0.4s ease;
        }

        /* MODULE */
        .module{display:none;animation:fadeIn 0.25s ease;}
        .module.active{display:block;}
        @keyframes fadeIn{from{opacity:0;transform:translateY(6px)}to{opacity:1;transform:translateY(0)}}

        /* NAV */
        .nav{
            display:flex;
            background:var(--white);
            border-bottom:1px solid var(--g2);
            overflow-x:auto;
            justify-content: center;
            gap: 0px;
        }
        .nav-btn{
            font-family: 'Poppins', serif;
            font-size:1rem;
            letter-spacing:1px;
            text-transform:uppercase;
            background:none;
            border:none;
            color:var(--g4);
            padding:0.8rem 1.1rem;
            cursor:pointer;
            border-bottom:2px solid transparent;
            white-space:nowrap;
            transition:all 0.2s;
        }
        .nav-btn:hover{color:var(--text);}
        .nav-btn.active{
            color:var(--black);
            border-bottom-color:var(--zed-primary);
        }

        /* FOOTER */
        .footer{padding:1.25rem 2rem;border-top:1px solid var(--g2);display:flex;justify-content:space-between;align-items:center;background:var(--g1);}
        .btn-nav{font-family: 'Poppins', serif;font-size:11px;letter-spacing:1px;text-transform:uppercase;padding:0.6rem 1.25rem;cursor:pointer;border-radius:2px;}
        .btn-prev{background:none;border:1px solid var(--g3);color:var(--g5);}
        .btn-prev:hover{border-color:var(--black);color:var(--black);}
        .btn-next{
            background:var(--zed-primary);
            border:1px solid var(--zed-primary);
            color:#fff;
        }
        .btn-next:hover{
        background:var(--zed-primary);
        }
        .mod-indicator{font-family: 'Poppins', serif;font-size:11px;color:var(--g5);}
        
        /* ─── SECTION HEADS ─── */
        /* .zed-sec-head {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
        } */

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
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--zed-dark-text);
        }

        .zed-sec-rule {
            flex: 1;
            height: 1px;
            background: var(--zed-border-color);
        }

        .zed-eyebrow {
            font-family: 'Poppins';
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--zed-secondary) !important; 
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
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .zed-card-text { 
            color: var(--zed-secondary) !important; 
            line-height: 1.75;
        }

        .zed-card-text strong {
            color: var(--zed-dark-text);
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
            background: var(--zed-dark-text);
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
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            min-width: 70px;
            padding-top: 2px;
        }

        .timeline-text { 
            color: var(--zed-secondary) !important;
            line-height: 1.68;
        }

        .timeline-text strong {
            color: var(--zed-dark-text);
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
            color: var(--zed-dark-text);
            margin-bottom: 6px;
        }

        .trader-text {
            font-size: .76rem;
            color: var(--muted);
            line-height: 1.7;
        }

        .trader-text strong {
            color: var(--zed-dark-text);
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
            font-size: .75rem;
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
            font-family: 'Poppins', serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--zed-primary);
            margin-bottom: 4px;
        }

        .session-time { 
            font-weight: 600;
            color: var(--zed-dark-text);
            margin-bottom: 4px;
        }

        .session-pairs { 
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
            font-size: .9rem;
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
            font-family: 'Poppins', serif;
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
            font-family: 'Poppins', serif;
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: 10px 12px;
            border-bottom: 2px solid var(--zed-border-color);
            background: var(--zed-card-back);
            color: var(--zed-secondary) !important; 
        }

        .cp-table td { 
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
            font-family: 'Poppins', serif;
            font-weight: 700;
            color: var(--zed-dark-text);
        }

        .cp-cat-major {
            color: var(--zed-primary);
            font-weight: 700; 
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .cp-cat-minor {
            color: var(--blue);
            font-weight: 700; 
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .cp-cat-exotic {
            color: var(--amber);
            font-weight: 700; 
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .cp-best {
            display: inline-block; 
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
            font-family: 'Poppins', serif;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: 10px 12px;
            border-bottom: 2px solid var(--zed-border-color);
            background: var(--zed-card-back);
            color: var(--faint);
        }

        .style-table td { 
            padding: 9px 12px;
            border-bottom: 1px dashed var(--zed-border-color);
            color: var(--zed-secondary) !important; 
        }

        .style-table tr:last-child td {
            border-bottom: none;
        }

        .style-table tr:hover td {
            background: rgba(255, 0, 0, .02);
        }

        .style-name {
            font-weight: 700;
            color: var(--zed-dark-text);
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
            font-family: 'Poppins', serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--faint);
            margin-bottom: 6px;
        }

        .broker-title {
            font-family: 'Poppins', serif; 
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 8px;
        }

        .broker-text { 
            color: var(--zed-secondary) !important; 
            line-height: 1.72;
        }

        .broker-text strong {
            color: var(--zed-dark-text);
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
            color: var(--zed-dark-text);
            margin-bottom: 4px;
            font-size: 1.25rem;
        }

        .step-title span {
            color: var(--zed-primary);
        }

        .step-text { 
            color: var(--zed-secondary) !important; 
            line-height: 1.72;
        }

        .step-text strong {
            color: var(--zed-dark-text);
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
            font-family: 'Poppins', serif;
            font-size: 1.25rem;
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
            font-size: 1rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 8px;
        }

        .order-text { 
            color: var(--zed-secondary) !important; 
            line-height: 1.72;
        }

        .order-text strong {
            color: var(--zed-dark-text);
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
            color: var(--zed-dark-text);
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
            color: #fff !important;
            font-family: 'Poppins', monospace;
            font-size: 1rem;
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
    
    <style>
       
        /* ─── HERO ────────────────────────────────────── */
        .hero {
            padding: 100px 0 80px;
            text-align: center;
            background: radial-gradient(ellipse 60% 55% at 50% -10%, rgba(232,17,26,.07) 0%, transparent 65%),
                var(--zed-backgound-color);
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(0,0,0,.03) 39px, rgba(0,0,0,.03) 40px),
                repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(0,0,0,.03) 39px, rgba(0,0,0,.03) 40px);
            pointer-events: none;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: var(--zed-primary);
            color: #fff;
            font-size: .72rem;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .35rem 1.1rem;
            border-radius: 50px;
            margin-bottom: 1.6rem;
            animation: fadeDown .6s ease both;
        }
        .hero h1 {
            font-size: clamp(3rem, 7vw, 5.5rem);
            font-weight: 800;
            line-height: 1.2;
            margin-top: 50px;
            letter-spacing: -.04em;
            color: var(--zed-dark-text);
            animation: fadeUp .7s .1s ease both;
        }
        .hero h1 em { font-style: normal; color: var(--zed-primary); }
        .hero p.sub {
            font-size: 1.1rem;
            color: var(--zed-secondary);
            max-width: 520px;
            margin: 1.2rem auto 2.2rem;
            font-weight: 300;
            animation: fadeUp .7s .2s ease both;
        }
        .hero-btns { animation: fadeUp .7s .3s ease both; }
        .btn-red {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            padding: .9rem 2.6rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: .95rem;
            letter-spacing: .02em;
            transition: background .25s, transform .2s, box-shadow .25s;
            box-shadow: 0 8px 28px rgba(232,17,26,.3);
        }
        .btn-red:hover {
            background: var(--primary-red-hover);
            transform: translateY(-3px);
            box-shadow: 0 14px 36px rgba(232,17,26,.4);
            color: var(--zed-dark-text);
        }
        .btn-ghost {
            background: transparent;
            color: var(--zed-dark-text);
            border: 1.5px solid var(--zed-border-color);
            padding: .9rem 2.2rem;
            border-radius: 50px;
            font-weight: 500;
            transition: border-color .25s, background .25s, color .25s;
        }
        .btn-ghost:hover {
            border-color: var(--zed-dark-text);
            background: var(--zed-dark-text);
            color: #fff;
        }
        .hero-floats {
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            margin-top: 3.5rem;
            flex-wrap: wrap;
            animation: fadeUp .7s .4s ease both;
        }
        .float-stat {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 14px;
            padding: .8rem 1.4rem;
            display: flex;
            min-width: 190px;
            align-items: center; 
            gap: .8rem;
            box-shadow: 0 2px 16px rgba(0,0,0,.04);
        }
        .float-stat .ico {
            width: 38px; height: 38px;
            background: rgba(232,17,26,.08);
            color: var(--zed-primary);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
        }
        .float-stat .val { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 1.1rem; color: var(--zed-dark-text); }
        .float-stat .lbl { font-size: .75rem; color: var(--zed-secondary); }
    
        /* ─── SECTION COMMON ──────────────────────────── */
        .sec { padding: 80px 0; }
        .sec-alt { background: var(--zed-light-bg); }
        .sec-dark { background: var(--zed-dark-text); }
        .sec-red  { background: var(--zed-primary); }
    
        .sec-label {
            display: inline-block;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--zed-primary);
            margin-bottom: .8rem;
        }
        .sec-dark .sec-label { color: rgba(232,17,26,.8); }
        .sec-title {
            font-size: clamp(1.9rem, 4vw, 2.8rem);
            font-weight: 800;
            letter-spacing: -.03em;
            color: var(--zed-dark-text);
            margin-bottom: .5rem;
        }
        .sec-dark .sec-title { color: #fff; }
        .sec-red  .sec-title { color: #fff; }
        .sec-sub { color: var(--zed-secondary); font-size: .95rem; font-weight: 300; max-width: 480px; }
        .sec-dark .sec-sub { color: rgba(255,255,255,.45); }
        .sec-red  .sec-sub { color: rgba(255,255,255,.7); }
    
        /* ─── COURSE CARDS ────────────────────────────── */
        .course-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 20px;
            padding: 1.6rem;
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: transform .35s cubic-bezier(.2,.8,.2,1), box-shadow .35s;
        }
        .course-card::before {
            content: '';
            position: absolute;
            left: 0; top: 0; bottom: 0;
            width: 4px;
            background: var(--zed-primary);
            transform: scaleY(0);
            transform-origin: bottom;
            transition: transform .35s ease;
        }
        .course-card:hover { transform: translateY(-8px); box-shadow: 0 24px 56px rgba(0,0,0,.1); }
        .course-card:hover::before { transform: scaleY(1); }
        .course-level {
            font-size: .72rem;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--zed-secondary);
            text-align: right;
            margin-bottom: .8rem;
        }
        .course-icon {
            width: 54px; 
            height: 54px;
            background: var(--zed-backgound-color);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.1rem;
        }
        .course-card h4 {
            font-weight: 700;
            font-size: 1.15rem;
            color: var(--zed-dark-text);
            margin-bottom: .55rem;
        }
        .course-card p { font-size: .85rem; color: var(--zed-secondary); line-height: 1.6; margin-bottom: 1.4rem; }
        .course-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px solid var(--zed-border-color);
        }
        .course-price {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.3rem;
            color: var(--zed-dark-text);
        }
        .enroll-link {
            color: var(--zed-primary);
            font-weight: 600;
            font-size: .88rem;
            text-decoration: none;
            display: flex; align-items: center; gap: .3rem;
            transition: gap .2s;
        }
        .enroll-link:hover { gap: .6rem; color: var(--primary-red-hover); }
    
        /* ─── TOPIC GRID ──────────────────────────────── */
        .topic-card {
            background: var(--zed-backgound-color);
            border: 1px solid var(--zed-border-color);
            border-radius: 18px;
            padding: 1.5rem 1.4rem;
            height: 100%;
            transition: transform .3s ease, 
            background .3s, border-color .3s, box-shadow .3s;
            position: relative;
            overflow: hidden;
        }
        .topic-card:hover {
            transform: translateY(-5px);
            background: var(--zed-light-bg);
            border-color: rgba(232,17,26,.25);
            box-shadow: 0 16px 44px rgba(0,0,0,.07);
        }
        .topic-card .t-icon {
            width: 48px; 
            height: 48px;
            border-radius: 13px;
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }
        .topic-card h5 {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            color: var(--zed-dark-text);
            margin-bottom: .4rem;
        }
        .topic-card p { font-size: .82rem; color: var(--zed-secondary); line-height: 1.6; margin: 0; }
        .topic-chip {
            display: inline-block;
            font-size: .7rem;
            font-weight: 600;
            padding: .2rem .65rem;
            border-radius: 50px;
            margin-top: .9rem;
        }
        .ti-red    { background: rgba(232,17,26,.1);  color: var(--zed-primary); }
        .ti-blue   { background: rgba(59,130,246,.1); color: #3b82f6; }
        .ti-green  { background: rgba(34,197,94,.1);  color: #16a34a; }
        .ti-gold   { background: rgba(234,179,8,.1);  color: #ca8a04; }
        .ti-purple { background: rgba(139,92,246,.1); color: #7c3aed; }
        .ti-teal   { background: rgba(20,184,166,.1); color: #0d9488; }
        .ti-orange { background: rgba(249,115,22,.1); color: #ea580c; }
        .ti-sky    { background: rgba(14,165,233,.1); color: #0284c7; }
        .tc-red    { background: rgba(232,17,26,.08); color: var(--zed-primary); border: 1px solid rgba(232,17,26,.15); }
        .tc-blue   { background: rgba(59,130,246,.08); color: #3b82f6; border: 1px solid rgba(59,130,246,.15); }
        .tc-green  { background: rgba(34,197,94,.08); color: #16a34a; border: 1px solid rgba(34,197,94,.15); }
        .tc-gold   { background: rgba(234,179,8,.08); color: #ca8a04; border: 1px solid rgba(234,179,8,.15); }
        .tc-purple { background: rgba(139,92,246,.08); color: #7c3aed; border: 1px solid rgba(139,92,246,.15); }
        .tc-teal   { background: rgba(20,184,166,.08); color: #0d9488; border: 1px solid rgba(20,184,166,.15); }
        .tc-orange { background: rgba(249,115,22,.08); color: #ea580c; border: 1px solid rgba(249,115,22,.15); }
        .tc-sky    { background: rgba(14,165,233,.08); color: #0284c7; border: 1px solid rgba(14,165,233,.15); }
    
        /* sub-topics list in topic-card */
        .topic-list { list-style: none; padding: 0; margin: .8rem 0 0; }
        .topic-list li {
            font-size: .8rem;
            color: #666;
            padding: .28rem 0;
            border-bottom: 1px solid rgba(0,0,0,.05);
            display: flex; align-items: center; gap: .5rem;
        }
        .topic-list li:last-child { border: none; }
        .topic-list li i { font-size: .6rem; opacity: .5; }
    
        /* ─── DARK MARQUEE ROW ────────────────────────── */
        .marquee-section { background: var(--zed-dark-text); padding: 3.5rem 0; overflow: hidden; }
        .marquee-track {
            display: flex;
            gap: 1.5rem;
            width: max-content;
            animation: marquee 22s linear infinite;
        }
        .marquee-track.rev { animation-direction: reverse; }
        .marquee-tag {
            display: flex; 
            align-items: center; 
            gap: .6rem;
            background: rgba(255,255,255,.05);
            border: 1px solid rgba(255,255,255,.07);
            color: rgba(255,255,255,.6);
            border-radius: 50px;
            padding: .5rem 1.3rem;
            font-size: .83rem;
            font-weight: 500;
            white-space: nowrap;
            flex-shrink: 0;
        }
        .marquee-tag i { color: var(--zed-primary); font-size: .75rem; }
        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    
        /* ─── WHY US (dark section) ───────────────────── */
        .why-card {
            background: rgba(255,255,255,.04);
            border: 1px solid rgba(255,255,255,.07);
            border-radius: 16px;
            padding: 1.6rem;
            transition: background .3s, border-color .3s;
        }
        .why-card:hover {
            background: rgba(255,255,255,.07);
            border-color: var(--zed-primary-hover);
        }
        .why-card .w-icon {
            width: 46px; 
            height: 46px;
            background: rgba(232,17,26,.12);
            color: var(--zed-primary);
            border-radius: 12px;
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: .9rem;
        }
        .why-card h6 { font-family: 'Syne', sans-serif; font-weight: 700; color: #fff; margin-bottom: .35rem; }
        .why-card p { font-size: .83rem; color: rgba(255,255,255,.4); margin: 0; line-height: 1.6; }
    
        /* ─── TESTIMONIALS ────────────────────────────── */
        .testi-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 18px;
            padding: 1.8rem;
            height: 100%;
            transition: transform .3s, box-shadow .3s;
        }
        .testi-card:hover { transform: translateY(-5px); box-shadow: 0 18px 48px rgba(0,0,0,.08); }
        .stars { color: var(--zed-primary); font-size: .85rem; letter-spacing: .05rem; margin-bottom: .8rem; }
        .testi-card blockquote { font-size: .9rem; color: var(--zed-dark-text); line-height: 1.7; font-style: italic; margin-bottom: 1.2rem; }
        .testi-author { display: flex; align-items: center; gap: .7rem; }
        .testi-avatar {
            width: 40px; height: 40px;
            background: var(--zed-primary);
            color: #fff;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: .9rem;
        }
        .testi-name { font-weight: 600; font-size: .88rem; color: var(--zed-dark-text); }
        .testi-role { font-size: .75rem; color: var(--zed-secondary); }
    
        /* ─── CTA BANNER ──────────────────────────────── */
        .cta-band {
            background: var(--zed-primary);
            padding: 70px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .cta-band::before, .cta-band::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,.07);
        }
        .cta-band::before { width: 400px; height: 400px; top: -150px; left: -100px; }
        .cta-band::after  { width: 300px; height: 300px; bottom: -120px; right: -80px; }
        .cta-band h2 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 800;
            color: #fff;
            letter-spacing: -.03em;
        }
        .cta-band p { color: rgba(255,255,255,.75); max-width: 460px; margin: .8rem auto 2rem; }
        .btn-white {
            background: #fff;
            color: var(--zed-primary);
            border: none;
            padding: .9rem 2.4rem;
            border-radius: 50px;
            font-weight: 700;
            transition: transform .2s, box-shadow .25s;
            box-shadow: 0 8px 24px rgba(0,0,0,.15);
        }
        .btn-white:hover { 
            transform: translateY(-3px); 
            box-shadow: 0 14px 36px rgba(0,0,0,.2); 
            color: var(--zed-light-bg); 
        }
    
        /* ─── DIVIDER ─────────────────────────────────── */
        .hdiv { height: 1px; background: linear-gradient(90deg, transparent, var(--zed-border-color), transparent); margin: 0; }
    
        /* ─── SCROLL REVEAL ───────────────────────────── */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .7s ease, transform .7s ease;
        }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .reveal-delay-1 { transition-delay: .1s; }
        .reveal-delay-2 { transition-delay: .2s; }
        .reveal-delay-3 { transition-delay: .3s; }
        .reveal-delay-4 { transition-delay: .4s; }
    
        /* ─── HERO ANIMATIONS ─────────────────────────── */
        @keyframes fadeUp   { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeDown { from { opacity: 0; transform: translateY(-14px); } to { opacity: 1; transform: translateY(0); } }
    
        /* ─── PULSE DOT ───────────────────────────────── */
        .live-dot {
            display: inline-block;
            width: 8px; height: 8px;
            background: #22c55e;
            border-radius: 50%;
            animation: pulse 1.8s infinite;
            vertical-align: middle;
        }
        @keyframes pulse {
        0%,100% { box-shadow: 0 0 0 0 rgba(34,197,94,.5); }
        50%      { box-shadow: 0 0 0 6px rgba(34,197,94,0); }
        }
    
        /* ─── SCROLLBAR ───────────────────────────────── */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: var(--zed-backgound-color); }
        ::-webkit-scrollbar-thumb { background: var(--zed-primary); border-radius: 3px; }
    </style>

    <!-- ─── HERO ───────────────────────────────────────────── -->
    <section class="hero">
        <div class="container">
            <div class="hero-badge mt-4 d-none"><i class="bi bi-mortarboard-fill"></i> Professional Trading Education</div>
            <h1>
                 <em>Complete </em><br>Forex Trading Course
            </h1>
            <p class="sub">
                Learn Forex Trading, Technical Analysis, Risk Management, Price Action & Market Structure Like a Professional Trader
            </p>
            <div class="hero-btns d-flex justify-content-center gap-3 flex-wrap">
                <a href="#courses" class="btn btn-red">
                    Start Learning Now <i class="bi bi-arrow-right ms-1"></i>
                </a>
                <a href="#topics" class="btn btn-ghost">
                    Explore Topics
                </a>
            </div>
            <div class="hero-floats">
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-people-fill"></i></div>
                    <div>
                        <div class="val">$7.5T</div>
                        <div class="lbl">Daily FX Volume</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-play-btn-fill"></i></div>
                    <div>
                        <div class="val">24/5</div>
                        <div class="lbl">Market Open</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-award-fill"></i></div>
                    <div>
                        <div class="val">7+</div>
                        <div class="lbl">Modules</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <div class="val">100K</div>
                        <div class="lbl"> Base Currency</div>
                    </div>
                </div>

                <div class="float-stat">
                    <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <div class="val">~5%</div>
                        <div class="lbl">Retail % of Market</div>
                    </div>
                </div>

                <div class="float-stat">
                    <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <div class="val">180+</div>
                        <div class="lbl">Countries</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="hdiv"></div>
     
     <!-- ═══ SECTION 1: WHAT IS FOREX ═══ -->

    <section class="zed-section" style="background:var(--zed-light-bg)">
        <div class="container">
            <div class="zed-sec-head reveal"> 
                <h2 class="zed-sec-title">Forex Market Fundamentals | Complete Guide</h2> 
                <div class="underline mb-3"></div>
                <p style="color: var(--zed-secondary) !important; line-height:1.82; margin-bottom:14px;">The foreign exchange market (Forex/FX) is the world's largest and most liquid financial market — trading currencies 24 hours a day, 5 days a week. This module covers everything from scratch: what forex is, who trades it, how it works, all terminology, market structure, broker types, leverage, margin, lot sizes, orders and how trades actually flow. Read every word.</p>
            </div>

            <style>
                .underline {
                    width: 75px;
                    height: 4px;
                    background-color: var(--zed-primary);
                    margin: 40px 0 40px 0;
                    padding: 4px;
                }
            </style>

            <!-- What is Forex -->
            <div class="row g-4">
                <div class="col-lg-7 reveal">
                    
                <div class="zed-eyebrow">What is Forex ? </div>
                    <h3 class="font-serif" style="font-size:1.8rem; font-weight:700; color:var(--zed-dark-text); margin-bottom:14px;">
                        Understanding the Foreign Exchange Market</h3>
                    <p style="color: var(--zed-secondary) !important; line-height:1.82; margin-bottom:14px;">
                        <strong>Forex (Foreign Exchange)</strong> is the global marketplace where one currency is exchanged for
                        another. Unlike stocks (which trade on centralised exchanges like NYSE), Forex is an <strong>OTC
                        (Over-The-Counter)</strong> market — meaning there is no single central exchange. Instead, trading happens
                        through a global network of banks, brokers and electronic systems called the <strong>interbank
                        network.</strong>
                    </p>
                    <p style="color: var(--zed-secondary) !important; line-height:1.82;">
                        Every time a business imports goods from another country, a tourist converts money at an airport, or a
                        central bank adjusts its currency reserves — that is a Forex transaction. Retail traders (like you)
                        participate through brokers who give us access to this interbank market.
                    </p>
                </div>

                <div class="col-lg-5 reveal mt-0">
                    <img src="assets/img/forex-market-fundamental-removebg-preview.png" alt="" style="border-radius: 15px;">
                </div>

            </div>
        </div>
    </section>

    <section class="zed-section" style="background:var(--zed-light-bg)">

        <div class="container">
            <div class="zed-sec-head reveal d-none"> 
                <h2 class="zed-sec-title">Forex Market Fundamentals | Complete Guide</h2> 
                <div class="underline"></div>
            </div>

            <div class="row g-4 mb-5">

                <div class="col-lg-6 reveal">
                        
                    <div class="zed-eyebrow">Brief History of Forex</div> 
                    <div class="timeline-item">
                        <!-- <div class="timeline-year"></div> -->
                        <div class="timeline-text"><span class="timeline-year">1944 — Bretton Woods :</span> Countries pegged currencies to USD, which was backed by gold ($35/oz).</div>
                    </div>
                    <div class="timeline-item">
                        <!-- <div class="timeline-year">1971</div> -->
                        <div class="timeline-text"><span class="timeline-year">1971 — Nixon Shock :</span> USA abandoned gold standard. Currencies began floating freely against each other — forex as we know it was born.</div>
                    </div>
                    <div class="timeline-item">
                        <!-- <div class="timeline-year">1973</div> -->
                        <div class="timeline-text"><span class="timeline-year">1973 — Free Float Era :</span> Major currencies started fluctuating based on supply/demand.</div>
                    </div>
                    <div class="timeline-item">
                        <!-- <div class="timeline-year">1990s</div> -->
                        <div class="timeline-text"><span class="timeline-year">1990s — Electronic Trading :</span> Internet enabled retail traders to access forex markets for the first time.</div>
                    </div>
                    <div class="timeline-item">
                        <!-- <div class="timeline-year">2000s–Now</div> -->
                        <div class="timeline-text"><span class="timeline-year">2000s–Now : </span> MT4/MT5 platforms, ECN brokers, algorithmic trading and mobile apps democratised forex globally.</div>
                    </div>
                </div>

                <div class="col-lg-6 reveal">
                    <!-- Brief History Timeline -->
                    <div class="zed-eyebrow">Why Does Forex Exist?</div>
                    <div class="timeline-item">
                        <!-- <div class="timeline-year"></div> -->
                        <div class="timeline-text"><span class="timeline-year">1. International Trade : </span> A UAE company importing from Japan must convert AED → JPY to pay the supplier. This creates demand for JPY.</div>
                    </div>
                    <div class="timeline-item">
                        <!-- <div class="timeline-year">1971</div> -->
                        <div class="timeline-text">
                            <span class="timeline-year">2. Tourism & Travel: </span> Tourists exchange currency at airports and banks worldwide — billions of small transactions daily.
                        </div>
                    </div>
                    <div class="timeline-item">
                        <!-- <div class="timeline-year">1973</div> -->
                        <div class="timeline-text"><span class="timeline-year">3. Investment: </span> A US fund buying German bonds must buy EUR. A British investor in Japanese stocks needs JPY.</div>
                    </div>
                    <div class="timeline-item">
                        <!-- <div class="timeline-year">1990s</div> -->
                        <div class="timeline-text"><span class="timeline-year">4. Speculation :</span> Traders and hedge funds buy/sell currencies to profit from price movements — this accounts for the vast majority of forex volume.</div>
                    </div>
                    <div class="timeline-item">
                        <!-- <div class="timeline-year">2000s–Now</div> -->
                        <div class="timeline-text"><span class="timeline-year">5. Central Bank Policy : </span> buy/sell their own currency to control inflation, support exports and manage reserves.</div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>

    <style>
        .professional-pricing{
            background-color: var(--zed-backgound-color);
        }

        .pricing-box a {
        color: var(--zed-primary);
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        margin: 10px 0;
        }

        .pricing-box a i {
        margin-left: 6px;
        font-size: 1.5rem;
        }

        .pricing-section {
        padding: 80px 0;
        }

        .a-link-move-icon:hover i{
            transition: transform 0.2s ease;
            transform: translateX(10px);
        }

        @media (max-width: 767.98px) {
            .learning-img{
                width: 100% !important;
            }

            .learning-heading{
                font-size: 2rem;
            }

            .learning-text{
                width: 100% !important;
            }

            .zed-academy-header{
                padding: 30px 0 !important;
            }
        }
    </style>

    <section class="professional-pricing">
        <div class="container">
            <div class="pricing-section">
                <h2 class="h2 fw-bold">Who Trades Forex? | Market Participants</h2>
                <div class="underline"></div>

                <div class="row">
                    <div class="col-md-6 pricing-box mb-4" data-aos="fade-up" data-aos-duration="800">
                        <p class="fw-bold fs-4">
                            Tier 1 — Central Banks (Most powerful)
                        </p>
                        <p class="text-gray" style="width: 90%;">
                            Federal Reserve (USA), ECB (Europe), Bank of Japan, Bank of England, etc.
                        </p>
                        <p class="text-gray" style="width: 90%;">
                            <strong>What they do :</strong> Set interest rates, conduct quantitative easing/tightening and intervene directly in currency markets. A single central bank statement can move EUR/USD 200+ pips in seconds.
                        </p>
                        <p class="text-gray" style="width: 90%;">
                            <strong>Why it matters for you : </strong> FOMC, ECB and BOJ meetings are the most important events on the economic calendar. Learn to trade around them.
                        </p>
                        <a href="javascript:void(0)" class="d-none a-link-move-icon" title="Learn About Commissions">Learn About Commissions <i class="fas fa-chevron-circle-right"></i></a>

                        <p class="fw-bold fs-4">
                            Tier 3 — Hedge Funds & Institutions
                        </p>
                        <p class="text-gray" style="width: 90%;">
                            <strong> What they do : </strong> Trade currencies for speculation and portfolio hedging. Hedge funds are the most aggressive — they can move markets with massive position sizes ($100M+).

                        </p>
                        <p class="text-gray" style="width: 90%;">
                            <strong>George Soros example : </strong> In 1992, Soros shorted the British Pound with $10 billion, forced the UK to exit the European Exchange Rate Mechanism and made $1 billion in a single day.

                        </p>
                        <p class="text-gray" style="width: 90%;">
                            Bridgewater, Renaissance Technologies, BlackRock, pension funds, sovereign wealth funds.
                        </p>
                        <a href="javascript:void(0)" class="d-none a-link-move-icon" title="Learn About Commissions">Learn About Commissions <i class="fas fa-chevron-circle-right"></i></a>

                        <p class="fw-bold fs-4">
                                Tier 5 — Retail Brokers
                            </p>
                            <p class="text-gray" style="width: 90%;">
                            IC Markets, Pepperstone, XM, FXCM, IG, Oanda, etc. 
                            </p>
                            <p class="text-gray" style="width: 90%;">
                            <strong>What they do : </strong> Provide retail traders access to the interbank market. They aggregate liquidity from multiple banks and pass orders through to the market (ECN/STP) or trade against their clients internally (Market Maker).

                            </p>
                            <p class="text-gray" style="width: 90%;">
                            <strong>Revenue : </strong> Brokers earn from spreads, commissions, swap fees and (for market makers) from client losses.
                            </p>
                            <a href="javascript:void(0)" class="d-none a-link-move-icon" title="Learn About Commissions">Learn About Commissions <i class="fas fa-chevron-circle-right"></i></a>
        
                    
                    </div>

                    <div class="col-md-6 pricing-box mb-4" data-aos="fade-up" data-aos-duration="800">
                

                        <p class="fw-bold fs-4">
                            Tier 2 — Commercial Banks
                        </p>
                        <p class="text-gray" style="width: 90%;">
                            JPMorgan, Citibank, Deutsche Bank, HSBC, Barclays, Goldman Sachs.
                        </p>
                        <p class="text-gray" style="width: 90%;">
                            <strong>What they do : </strong> Make markets by providing bid/ask quotes to other banks and institutional clients. They hold huge inventories of currencies and profit from the bid-ask spread across millions of transactions daily.
                        </p>
                        <p class="text-gray" style="width: 90%;">
                            <strong>Interbank market : </strong> Banks trade directly with each other via platforms like EBS and Reuters Matching. Retail traders cannot access this — we go through brokers.
                        </p>

                        <p class="fw-bold fs-4">
                            Tier 4 — Corporations (Hedgers)
                        </p>
                        <p class="text-gray" style="width: 90%;">
                            Apple, Toyota, Airbus, Saudi Aramco, any multinational company.
                        </p>
                        <p class="text-gray" style="width: 90%;">
                        <strong>What they do : </strong> Companies with international revenues hedge their currency exposure to protect profits. Apple earns billions in EUR but reports in USD — they buy USD/sell EUR forward contracts to lock in exchange rates.
                        </p>
                        <p class="text-gray" style="width: 90%;">
                        <strong> Why this creates opportunity : </strong> Corporate hedging creates predictable currency flows at month/quarter end. Smart traders watch these "flow" patterns.
                        </p>

                        <p class="fw-bold fs-4">
                                Tier 6 — Retail Traders 
                            </p>
                            <p class="text-gray" style="width: 90%;">
                                Individual traders worldwide — day traders, swing traders, algorithmic traders.

                            </p>
                            
                            <p class="text-gray" style="width: 90%;">
                                <strong>Reality check :</strong> Retail traders represent only ~5% of total forex volume. We are the smallest fish in the ocean. This is why understanding how larger players operate (Smart Money Concepts) is critical for edge.
                            </p>

                            <p class="text-gray" style="width: 90%;">
                            <strong> Our advantage : </strong> Small size = we can enter and exit without moving the market. A $10,000 account can achieve much better % returns than a $10 billion fund.
                            </p>
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
                <h2 class="zed-sec-title">Market Sessions | Full Infographic</h2> 
                <div class="underline"></div>
            </div>

            <p class="reveal" style=" color:var(--muted); margin-bottom:24px;">Forex is open <strong>24 hours a
                day, 5 days a week.</strong> The market is a sequencing of sessions. Volatility and volume peak during the
                London–NY overlap <strong>(13:00–17:00 GMT)</strong> — the golden trading window.
            </p>

            <div class="row g-4">

                <div class="col-md-6 col-lg-4 reveal">
                    <div class="session-card" style="--ac:var(--zed-primary)">
                        <div class="session-name">🗾 Tokyo Session</div>
                        <div class="session-time">00:00–09:00 GMT</div>
                        <div class="session-pairs">Best pairs: AUD/USD, NZD/USD, USD/JPY, EUR/JPY</div>
                        <div style="margin-top:8px; color:var(--muted);">Characteristics: Thin liquidity, price
                        spreads possible, mostly consolidation. Today's levels: Monitor NZD (Reserve Bank of Australia) statements
                        as key events.</div>
                        <span class="zed-badge zed-badge-red mt-2 d-inline-block">Asian Session</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 reveal">
                    <div class="session-card" style="--ac:var(--blue)">
                        <div class="session-name">🇬🇧 London Session</div>
                        <div class="session-time">08:00–17:00 GMT</div>
                        <div class="session-pairs">Best pairs: GBP/USD, EUR/USD, EUR/GBP, EUR/JPY</div>
                        <div style="margin-top:8px; color: var(--zed-secondary) !important; ">Characteristics: <strong>Highest volatility
                            session.</strong> Bank of Japan (BoJ) interventions happen. H4 structure breaks. TP move. Price often
                        sets the day's high or low. London sets key levels that often holds all week.</div>
                        <span class="zed-badge zed-badge-navy mt-2 d-inline-block">Most Active</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 reveal">
                    <div class="session-card" style="--ac:var(--gold)">
                        <div class="session-name">🗽 New York Session</div>
                        <div class="session-time">13:00–22:00 GMT</div>
                        <div class="session-pairs">Best pairs: EUR/USD, GBP/USD, USD/CAD, USD/CHF</div>
                        <div style="margin-top:8px; color: var(--zed-secondary) !important; ">NFP, CPI, FOMC news drops here. Second most
                        liquid session. Overlapping with London 13:00–17:00 creates the highest volume window of the entire
                        trading week.</div>
                        <span class="zed-badge zed-badge-gold mt-2 d-inline-block">High Impact News</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-12 reveal">
                    <div class="zed-dark-card" style="--dc:var(--zed-primary)">
                        <div
                            style="font-size:1rem; font-weight:700; letter-spacing:.18em; text-transform:uppercase; color:var(--zed-primary); margin-bottom:12px;">
                            Best Times to Trade
                        </div>
                        <div style="font-size:.78rem; color: #fff !important;  line-height:1.8;">
                        <div
                            style="margin-bottom:8px; color: #fff !important;  font-weight:600;">
                            London Open: 08:00–10:00 GMT</div>
                        <div style=" margin-bottom:14px; color: #fff !important; ">EUR/USD, GBP/USD, Gold —
                            highest breakout probability</div>
                        <div
                            style="margin-bottom:8px; color: #fff !important;  font-weight:600;">
                            NY Open: 13:00–16:00 GMT</div>
                        <div style="color: #fff !important; ">Avoid: 22:00–00:00 GMT (thin, manipulated
                            spreads)</div>
                        </div>
                        <div
                        style="margin-top:14px; padding:10px; background:rgba(255,0,0,.08); border:1px solid rgba(255,0,0,.15); border-radius:6px; color: #fff !important; ">
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
            <h2 class="zed-sec-title">Core Terminology | Every Term Explained</h2>
            <div class="underline"></div> 
        </div>
        <div class="row g-4 mb-4">
            <div class="col-md-6 reveal">
            <div class="zed-card zed-card-accent" style="--ac:var(--zed-primary)">
                <div class="zed-eyebrow">PIP — Price Interest Point</div>
                <div class="zed-card-title">What is a Pip?</div>
                <p class="zed-card-text">A pip is the <strong>smallest standardised unit</strong> in a currency pair. For
                most pairs: <code
                    style="background:var(--zed-card-back); padding:1px 5px; border-radius:3px; ">1 pip = 0.0001 (the 4th decimal place)</code>.
                For JPY pairs: <code
                    style="background:var(--zed-card-back); padding:1px 5px; border-radius:3px;">1 pip = 0.01 (the 2nd decimal place)</code>.
                </p>
                <div
                style="margin-top:12px; background:var(--zed-card-back); border:1px solid var(--zed-border-color); padding:12px; border-radius:6px;">
                <div
                    style="letter-spacing:.16em; text-transform:uppercase; color:var(--faint); margin-bottom:8px;">
                    Examples</div>
                <div style=" color:var(--muted); line-height:1.8;">
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
                    style="font-size:.7rem;letter-spacing:.16em;text-transform:uppercase;color:var(--faint);margin-bottom:6px;">
                    Practical Example</div>
                <div style="font-size:.9rem;color:var(--muted);">You have $500. If you risk 1% = <strong>$5 risk per
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

    <section class="zed-section" style="background:var(--zed-background-color)" id="m4">
        <div class="container">
        <div class="zed-sec-head reveal"> 
            <h2 class="zed-sec-title">Broker Types | Which One Should You Use?</h2>
            <div class="underline"></div> 
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
            <h2 class="zed-sec-title">Currency Pairs | Full Classification</h2> 
            <div class="underline"></div>
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
                    <td style=" color: var(--zed-secondary) !important; ">Highest liquidity globally. Most analysed. Tightest
                        spreads.</td>
                    <td style="color:var(--green); font-weight:600;">
                        0.5–1.5 pips</td>
                    <td style="">50–150 pips</td>
                    <td><span class="cp-best" style="background:var(--green-s);color:var(--green);">All traders</span></td>
                </tr>
                <tr>
                    <td><span class="cp-cat-minor">Minor</span></td>
                    <td>
                        <div class="cp-pair">EUR/GBP · GBP/JPY</div>
                        <div class="cp-pair">EUR/JPY · AUD/JPY</div>
                    </td>
                    <td style="color: var(--zed-secondary) !important; ">Less liquidity, wider spreads. Offer unique
                        opportunities.</td>
                    <td style="color:var(--amber); font-weight:600;">
                        1.5–3 pips</td>
                    <td style="">80–200 pips</td>
                    <td><span class="cp-best" style="background:var(--navy-s);color:var(--navy);">Intermediate</span></td>
                </tr>
                <tr>
                    <td><span class="cp-cat-exotic">Exotic</span></td>
                    <td>
                        <div class="cp-pair">USD/TRY · USD/ZAR</div>
                        <div class="cp-pair">USD/MXN · EUR/NOK</div>
                    </td>
                    <td style="color: var(--zed-secondary) !important; ">Very low liquidity, very wide spreads. High risk. Prone
                        to manipulation.</td>
                    <td
                        style="color:var(--zed-primary); font-weight:600;">
                        5–50 pips</td>
                    <td style="">100–500+ pips</td>
                    <td><span class="cp-best" style="background:rgba(255,0,0,.08);color:var(--zed-primary);">Advanced
                        only</span></td>
                </tr>
                <tr>
                    <td><span class="cp-cat-exotic" style="color: #3f7e56;">Commodity-linked</span></td>
                    <td>
                        <div class="cp-pair">AUD/USD (gold) · USD/CAD (oil)</div>
                        <div class="cp-pair">NZD/USD (dairy)</div>
                    </td>
                    <td style="font-size:.9rem;color: var(--zed-secondary) !important; ">These currencies are heavily influenced by commodity prices. Gold up → AUD up. Oil up → CAD up.</td>
                    <td
                        style="color:#3f7e56; font-weight:600;">0.5–2 pips</td>
                    <td style="">40–100 pips</td>
                    <td><span class="cp-best" style="background:#3f7e561f; color:#3f7e56;">All levels</span></td>
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
            <h2 class="zed-sec-title">How a Forex Trade Works | Step by Step</h2> 
            <div class="underline"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
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
            <h2 class="zed-sec-title">Order Types | Complete Guide with When to Use Each</h2> 
            <div class="underline"></div>
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

      <section class="zed-section" style="background:var(--zed-light-bg)">
        <div class="container">
        <div class="zed-sec-head reveal"> 
            <h2 class="zed-sec-title">Fundamental Analysis | What Moves Forex</h2> 
            <div class="underline"></div>
        </div>

        <style>
            /* ── INFO GRID ── */
            .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-bottom: 24px;
            }

            @media(max-width:600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
            }

            .info-card {
            background: var(--white);
            border-radius: 12px;
            border: 1px solid var(--border);
            padding: 16px 18px;
            }

            .info-head {
            font-size: 1rem;
            font-weight: 600; 
            font-family: poppins, sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            margin-bottom: 8px;
            }

            .info-body { 
            color: var(--zed-secondary);
            line-height: 1.7;
            }

            /* ── FORMULA BOX ── */
            .formula {
            background: var(--navy);
            border-radius: 12px;
            padding: 20px 24px;
            margin-bottom: 16px;
            position: relative;
            overflow: hidden;
            }

            .formula::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, var(--gold), var(--teal));
            }

            .formula-tag {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 8px;
            }

            .formula-main {
            font-family: 'DM Mono', monospace;
            font-size: 15px;
            color: #e2f0ff;
            line-height: 1.8;
            margin-bottom: 8px;
            }

            .formula-main .hl {
            color: var(--teal-light);
            font-weight: 500;
            }

            .formula-main .hl2 {
            color: var(--gold-light);
            }

            .formula-note {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
            line-height: 1.6;
            }

            .formula-result {
            font-size: 14px;
            color: var(--teal-light);
            margin-top: 6px;
            font-weight: 500;
            }
        </style>

         <!-- FUNDAMENTAL ANALYSIS --> 
        <div class="info-grid">

                <div class="info-card" style="border-left:4px solid var(--zed-primary);">
                    <div class="info-head">🏦 Interest Rates — The #1 Driver</div>
                    <div class="info-body">
                            Central bank interest rates are the single most powerful driver of long-term currency direction.<br><br>
                            <strong>Rule:</strong> Higher interest rates → currency attracts more foreign investment → demand for
                            currency rises → currency STRENGTHENS.<br><br>
                            <strong>Example:</strong> When the US Federal Reserve raised rates from 0% to 5.25% (2022–2023), the USD
                            Index (DXY) surged to 20-year highs. EUR/USD dropped from 1.1000 to 0.9600 — a 1,400 pip move driven almost
                            entirely by rate differentials.<br><br>
                            <strong>FOMC meetings:</strong> 8× per year · Rate decision + statement + press conference. These are the
                            most important market events. Plan all trades around them.
                    </div>
                </div>

                <div class="info-card" style="border-left:4px solid var(--blue);">
                    <div class="info-head">📊 Key Economic Indicators</div>
                    <div class="info-body">
                        <strong>NFP — Non-Farm Payrolls (USA):</strong> First Friday of each month at 13:30 GMT. Shows jobs
                        created/lost. A huge beat → USD strengthens. A big miss → USD weakens. Spreads widen massively at release —
                        widen SL by 30–50 pips or stay out.<br><br>
                        <strong>CPI — Consumer Price Index:</strong> Inflation measure. High CPI → central bank may raise rates →
                        currency strengthens.<br><br>
                        <strong>GDP:</strong> Gross Domestic Product. Strong growth → rate hike expectations → currency up.<br><br>
                        <strong>PMI (Purchasing Managers Index):</strong> Above 50 = expansion. Below 50 = contraction. Strong
                        leading indicator.<br><br>
                        <strong>Retail Sales, Trade Balance, Unemployment Rate:</strong> All move currencies proportionally to how
                        much they surprise vs expectations.
                    </div>
                </div>

                <div class="info-card" style="border-left:4px solid var(--teal);">
                    <div class="info-head">🌍 Geopolitical & Sentiment Factors</div>
                    <div class="info-body">
                        <strong>Risk-On vs Risk-Off:</strong><br>
                        Risk-ON (markets calm, optimistic) → Traders buy AUD, NZD, EM currencies. Sell JPY, CHF, USD.<br>
                        Risk-OFF (crisis, fear, uncertainty) → Traders flee to JPY, CHF, USD as "safe havens." Sell AUD,
                        NZD.<br><br>
                        <strong>Wars & Conflicts:</strong> Ukrainian war (2022) → EUR weakened significantly (Europe's energy supply
                        threatened). Swiss Franc surged (safe haven).<br><br>
                        <strong>Elections:</strong> UK Brexit vote (2016) — GBP/USD crashed 1,800 pips in 24 hours. Political
                        uncertainty = currency weakness.<br><br>
                        <strong>Oil prices:</strong> Oil ↑ → USD/CAD falls (CAD strengthens). Canadian dollar is the "petrodollar."
                    </div>
                </div>

                <div class="info-card" style="border-left:4px solid var(--gold);">
                    <div class="info-head">📅 Economic Calendar — How to Use It</div>
                        <div class="info-body">
                            Use <strong>Forex Factory, Investing.com, or TradingEconomics</strong> to track all upcoming events.<br><br>
                            <strong>Impact levels:</strong><br>
                            🔴 High Impact — Can move pairs 50–300+ pips (NFP, FOMC, CPI)<br>
                            🟡 Medium Impact — 20–60 pip moves possible<br>
                            🟢 Low Impact — Usually no significant move<br><br>
                            <strong>How to trade around news:</strong><br>
                            1. Mark all high-impact events for the week on Sunday.<br>
                            2. Don't open new trades 30 min before high-impact news.<br>
                            3. Either close open trades or widen SL by 2–3× before release.<br>
                            4. Wait 5–15 min after release for initial spike to settle before entering.<br>
                            5. Best moves often happen 15–60 min after release as the "real" direction establishes.
                        </div>
                    </div>
                </div>

        </div>

    </section>

    <!-- ═══ SECTION 8: TRADING STYLES ═══ -->
        
    <section class="zed-section" style="background:var(--zed-background-color)">
        <div class="container">
        <div class="zed-sec-head reveal"> 
            <h2 class="zed-sec-title">Trading Styles | Which One Suits You?</h2> 
            <div class="underline"></div>
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
                <td style=" color: var(--zed-secondary) !important; ">Requires fast execution, ECN broker, VPS. High stress.
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
                <td style="color: var(--zed-secondary) !important; ">No overnight risk. Clear stop loss. Best for working
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
                <td style="color: var(--zed-secondary) !important; ">Less screen time, larger targets, psychological pressure
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
                <td style="color: var(--zed-secondary) !important; ">Fundamental analysis focus (large S/R levels). Patient
                    traders only.</td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </section>

    <hr class="zed-divider" />
 
    <section class="zed-section" style="background:var(--zed-background-color)">
            <div class="container">
                <div class="zed-sec-head reveal"> 
                    <h2 class="zed-sec-title">Demo Account vs Live Account | A Critical Difference</h2> 
                    <div class="underline"></div>
                </div> 
    
                <div class="zed-section">
                
                <div class="two-col">
                    <div class="card">
                    <div class="card-header demo">
                        <i class="ti ti-circle-check" aria-hidden="true"></i>
                        Demo account — start here
                    </div>
                    <div class="card-body">
                        <p>A demo account uses <strong style="color:var(--color-text-primary)">virtual money</strong> with real market prices. It is identical to a live account in terms of charts, indicators and order types — but there is NO emotional weight because you cannot actually lose real money.</p>
                        <div class="divider"></div>
                        <p class="label">How long on demo?</p>
                        <p>Until you are consistently profitable for at least 3 months. Not 3 weeks — 3 months. Track every trade in a journal.</p>
                        <div class="divider"></div>
                        <p class="label">Treat it like real money</p>
                        <p>The biggest mistake beginners make on demo is overtaking risks they'd never take with real money. If you won't do it on live, don't do it on demo either.</p>
                    </div>
                    </div>

                    <div class="card">
                    <div class="card-header live">
                        <i class="ti ti-alert-triangle" aria-hidden="true"></i>
                        Live account — the psychological shift
                    </div>
                    <div class="card-body">
                        <p>When you move to a live account with real money, <strong style="color:var(--color-text-primary)">everything changes psychologically</strong>. Winning strategies on demo often fail on live because fear and greed take over.</p>
                        <div class="divider"></div>
                        <p class="label">How to transition</p>
                        <ol class="step-list">
                        <li><span class="step-num">1</span>Start with the smallest amount you can deposit (some brokers allow $50–$100)</li>
                        <li><span class="step-num">2</span>Trade micro lots (0.01) only</li>
                        <li><span class="step-num">3</span>Maintain exact same rules as demo</li>
                        <li><span class="step-num">4</span>Scale up only after 3 months of live profitability</li>
                        </ol>
                        <div class="callout">
                        <strong style="color:var(--color-text-primary)">Reality:</strong> Most traders blow their first live account. It's almost a rite of passage. The lesson is always the same: risk management and psychology, not the strategy.
                        </div>
                    </div>
                    </div>
                </div>
                </div>
    
            </div>
    </section>

    <style>
        .zed-section { padding: 2rem 0; font-family: var(--font-sans); }
            .zed-title { font-size: 20px; font-weight: 500; color: var(--color-text-primary); margin: 0 0 1.5rem; display: flex; align-items: center; gap: 10px; }
            .zed-title-icon { width: 32px; height: 32px; background: #0f2a3c; border-radius: 6px; display: flex; align-items: center; justify-content: center; }
            .zed-title-icon i { font-size: 18px; color: #c9a84c; }
            .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
            .card { background: var(--color-background-primary); border-radius: var(--border-radius-lg); border: 0.5px solid var(--color-border-tertiary); overflow: hidden; }
            .card-header { 
                padding: 12px 16px; 
                display: flex; 
                align-items: center; 
                gap: 8px; 
                font-size: 1rem; 
                font-weight: 500; 
                letter-spacing: 0.06em; 
                text-transform: uppercase; 
            }
            .card-header.demo { 
                background: #e8f5ef; 
                color: #0f6e56; 
                border-bottom: 1px solid #9FE1CB; 
            }
            .card-header.live { 
                background: #faeeda; 
                color: #854F0B; 
                border-bottom: 1px solid #FAC775; 
            }
            .card-body { 
                padding: 16px; 
            }
            .card-body p {  
                color: var(--zed-secondary); 
                line-height: 1.65; 
                margin: 0 0 14px; 
            }
            .card-body p:last-child { margin-bottom: 0; }
            .label { font-size: 13px; font-weight: 500; color: var(--color-text-primary); margin: 0 0 4px; }
            .divider { height: 0.5px; background: var(--color-border-tertiary); margin: 14px 0; }
            .step-list { list-style: none; margin: 0; padding: 0; }
            .step-list li { display: flex; align-items: flex-start; gap: 10px; font-size: 13px; color: var(--color-text-secondary); line-height: 1.5; margin-bottom: 8px; }
            .step-num { 
                min-width: 25px; 
                height: 35px; 
                border-radius: 50%; 
                background: var(--zed-light-bg); 
                color: var(--zed-primary); 
                font-size: 15px; 
                font-weight: 600; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                margin-top: 1px; 
            }
            .callout { 
                background: var(--color-background-secondary); 
                border-radius: var(--border-radius-md); 
                padding: 10px 12px; 
                font-size: 13px; 
                color: var(--color-text-secondary); 
                line-height: 1.5; 
                margin-top: 4px; 
                border-left: 3px solid var(--zed-primary); 
            }
            @media (max-width: 540px) { .two-col { grid-template-columns: 1fr; } }
    </style>

    <section class="zed-section" style="background:var(--zed-light-bg)">
    <div class="container">

        <div class="zed-sec-head reveal"> 
            <h2 class="zed-sec-title">Prop Firms | Trade with Funded Capital</h2> 
            <div class="underline"></div>
        </div>

        <!-- PROP FIRMS --> 
        <div class="info-card" style="margin-bottom:16px;">
            <div class="info-head">What is a Prop Firm (Proprietary Trading Firm)?</div>
                <div class="info-body">
                    Prop firms provide traders with large funded accounts ($25K–$200K+) in exchange for passing a trading
                    challenge and sharing a % of profits. You risk their money, not yours.<br><br>
                    <strong>Popular prop firms:</strong> FTMO, MyForexFunds (closed), The Funded Trader, E8 Funding, True Forex
                    Funds, Topstep.<br><br>
                    <strong>Typical challenge rules:</strong><br>
                    — Max daily drawdown: 5% · Max total drawdown: 10%<br>
                    — Minimum trading days: 10<br>
                    — Profit target: 8–10% to pass<br>
                    — Profit split: 70–90% to trader<br><br>
                    <strong>Strategy:</strong> Master your edge on a small live account first. Then use a prop firm to scale up
                    without risking large personal capital. This is how many retail traders go from small accounts to trading
                    $100K+ accounts.
                </div>
            </div>
        </div>
        
    </div>
    </section>
 
    <!-- ═══ MINDSET FOOTER ═══ -->
    <div class="mindset-footer">
        <div class="container">
            <div
                style="font-size:1rem; font-weight:700; letter-spacing:.22em; text-transform:uppercase; color:var(--zed-primary); text-align:center;margin-bottom:18px;">
                The Trading Mindset
            </div>
            <blockquote class="mindset-quote reveal">
                "Start with Demo Trading ONLY. You need time to think, analyse and react without the stress of watching every
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

        let selTab=0;
        function show(n){
            document.querySelectorAll('.module').forEach(m=>m.classList.remove('active'));
            document.querySelectorAll('.nav-btn').forEach(b=>b.classList.remove('active'));
            document.getElementById('m'+n).classList.add('active');
            document.querySelectorAll('.nav-btn')[n].classList.add('active');
            selTab=n;
            document.getElementById('modIndicator').textContent=(n+1)+' / 8';
            document.getElementById('prog').style.width=((n+1)/8*100)+'%';
        }
        
        function nextMod(){if(selTab<11)show(selTab+1);}
        function prevMod(){if(selTab>0)show(selTab-1);}
    </script>
<?php
include_once ('elements/footer.php');
?>
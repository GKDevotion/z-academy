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
            color: var(--ink);
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
            color: var(--ink);
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .zed-card-text { 
            color: var(--zed-secondary) !important; 
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
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--zed-primary);
            min-width: 70px;
            padding-top: 2px;
        }

        .timeline-text { 
            color: var(--zed-secondary) !important;
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
            color: var(--ac, var(--zed-primary));
            margin-bottom: 4px;
        }

        .session-time { 
            font-weight: 600;
            color: var(--ink);
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
            color: var(--ink);
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
            color: var(--ink);
            margin-bottom: 8px;
        }

        .broker-text { 
            color: var(--zed-secondary) !important; 
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
            color: var(--ink);
            margin-bottom: 8px;
        }

        .order-text { 
            color: var(--zed-secondary) !important; 
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
    
    <div class="container">
        <div class="progress-bar"><div class="progress-fill" id="prog" style="width:8.3%"></div></div>

        <nav class="nav">
            <button class="nav-btn active" onclick="show(0)">Basic</button>
            <button class="nav-btn" onclick="show(1)">Math</button>
            <button class="nav-btn" onclick="show(2)">Charts</button>
            <button class="nav-btn" onclick="show(3)">MT5</button>
            <button class="nav-btn" onclick="show(4)">Risk</button>
            <button class="nav-btn" onclick="show(5)">Robots</button>
            <button class="nav-btn" onclick="show(6)">Mind</button>
            <button class="nav-btn" onclick="show(7)">Advanced</button>
        </nav>
            
        <div class="module active" id="m0">
            <?php 
            include_once ('nav-section/course/begginer-forex/basic.php');
            ?>
        </div>

        <div class="module active" id="m1">
            <?php 
            include_once ('nav-section/course/begginer-forex/math.php');
            ?>
        </div>

        <div class="module active" id="m2">
            <?php 
            include_once ('nav-section/course/begginer-forex/charts.php');
            ?>
        </div>

        <div class="module active" id="m3">
            <?php 
            include_once ('nav-section/course/begginer-forex/mt5.php');
            ?>
        </div>

        <div class="module active" id="m4">
            <?php 
            include_once ('nav-section/course/begginer-forex/risk.php');
            ?>
        </div>

        <div class="module active" id="m5">
            <?php 
            include_once ('nav-section/course/begginer-forex/robots.php');
            ?>
        </div>

        <div class="module active" id="m6">
            <?php 
            include_once ('nav-section/course/begginer-forex/mind.php');
            ?>
        </div>

        <div class="module active" id="m7">
            <?php 
            include_once ('nav-section/course/begginer-forex/advanced.php');
            ?>
        </div>
    </div>

    <div class="footer">
      <button class="btn-nav btn-prev" onclick="prevMod()">← Previous</button>
      <div class="mod-indicator" id="modIndicator">1 / 8</div>
      <button class="btn-nav btn-next" onclick="nextMod()">Next →</button>
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
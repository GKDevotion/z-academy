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
            color: var(--zed-secondary) !important;
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
            border-top: 3px solid var(--zed-primary);
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
            background: rgba(232,17,26,.08);
            color: var(--zed-primary);
            border: 1px solid rgba(255, 0, 0, .2);
        }

        .zed-badge-gold {
            background: rgba(255, 0, 0, .1);
            color:var(--zed-primary);
            border: 1px solid rgba(201, 168, 76, .25);
        }

        .zed-badge-green {
            background: var(--green-s);
            color: var(--green);
            border: 1px solid rgba(22, 101, 52, .2);
        }

        .zed-badge-navy {
            background: rgba(255, 0, 0, .1);
            color: var(--zed-primary);
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
            color: var(--zed-secondary);
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
            border-left: 3px solid var(--zed-primary);
            border-radius: 6px;
            padding: 14px 16px;
            height: 340px;
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
            color: var(--zed-secondary);
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
            color: var(--zed-primary);
            font-weight: 600;
        }

        .zed-table .muted-val {
            color: var(--zed-secondary);
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
            color: var(--zed-dark-text) !important; 
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
            font-weight: 500;
            color: var(--zed-dark-text);
        }

        .cp-cat-major {
            color: var(--zed-primary);
            font-weight: 700; 
            letter-spacing: .1em;
            text-transform: uppercase;
            font-size: 1.2rem;
        }

        .cp-cat-minor {
            color: var(--zed-primary);
            font-weight: 700; 
            letter-spacing: .1em;
            text-transform: uppercase;
            font-size: 1.2rem;
        }

        .cp-cat-exotic {
            color: var(--zed-primary);
            font-weight: 700; 
            letter-spacing: .1em;
            text-transform: uppercase;
            font-size: 1.2rem;
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
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: 10px 12px;
            border-bottom: 2px solid var(--zed-border-color);
            background: var(--zed-card-back);
            color: var(--zed-dark-text);
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
            color: var(--zed-primary);
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
            border-color: var(--zed-primary);
            transform: translateY(-3px);
        }

        .order-label {
            font-family: 'Poppins', serif;
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--zed-primary);
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
            color: var(--zed-secondary);
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

        code {
            font-size: .875em;
            color: var(--zed-primary);
            word-wrap: break-word;
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
        .float-stat .val { 
            /* font-family: 'Syne', sans-serif;  */
            font-weight: 700; 
            font-size: 1.1rem; 
            color: var(--zed-dark-text); 
        }
        .float-stat .lbl { font-size: .75rem; color: var(--zed-secondary); }
    
        /* ─── SECTION COMMON ──────────────────────────── */
        .sec { 
            padding: 80px 0; 
        }
        .sec-alt { 
            background: var(--zed-light-bg); 
        }
        .sec-dark { 
            background: var(--zed-dark-text); 
        }
        .sec-red  { 
            background: var(--zed-primary); 
        }
    
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
        .sec-dark .sec-title { 
            color: #fff; 
        }
        .sec-red  .sec-title { 
            color: #fff;
        }
        .sec-sub {   
            font-size: 1.4rem;
            font-weight: 300; 
            font-family: 'Poppins', sans-serif;
            /* max-width: 480px;  */
        }
        .sec-dark .sec-sub { 
            color: rgba(255,255,255,.45); 
        }
        .sec-red  .sec-sub { 
            color: rgba(255,255,255,.7); 
        }
    
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
                            Tier 1 | Central Banks (Most powerful)
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
                            Tier 3 | Hedge Funds & Institutions
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
                                Tier 5 | Retail Brokers
                            </p>
                            <p class="text-gray" style="width: 90%;">
                            Zed Capital, IC Markets, Pepperstone, XM, FXCM, IG, Oanda, etc.
                            </p>
                            <p class="text-gray" style="width: 90%;">
                            <strong>What they do : </strong> Provide retail traders access to the interbank market. They aggregate liquidity from multiple banks and pass orders through to the market (ECN/STP) or trade against their clients internally (Market Maker).

                            </p>
                            <p class="text-gray" style="width: 90%;">
                            <strong>Revenue : </strong>Brokers earn from spreads, commissions, swap fees, and (for market makers) from client losses.
                            </p>
                            <a href="javascript:void(0)" class="d-none a-link-move-icon" title="Learn About Commissions">Learn About Commissions <i class="fas fa-chevron-circle-right"></i></a>
        
                    
                    </div>

                    <div class="col-md-6 pricing-box mb-4" data-aos="fade-up" data-aos-duration="800">
                

                        <p class="fw-bold fs-4">
                            Tier 2 | Commercial Banks
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
                            Tier 4 | Corporations (Hedgers)
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
                                Tier 6 | Retail Traders 
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

            <p class="reveal" style=" color:var(--zed-secondary); margin-bottom:24px;">Forex is open <strong>24 hours a
                day, 5 days a week.</strong> The market is a sequencing of sessions. Volatility and volume peak during the
                London–NY overlap <strong>(13:00–17:00 GMT)</strong> — the golden trading window.
            </p>

            <div class="row g-4">

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="session-card" style="--ac:var(--zed-primary)">
                        <div class="session-name">Sydney Session</div>
                        <div class="session-time"> 22:00–07:00 GMT</div>
                        <div class="session-pairs">Best pairs: AUD/USD, NZD/USD, AUD/JPY</div>
                        <div style="margin-top:8px; color: var(--zed-secondary) !important; ">Thin liquidity, wide spreads possible, mostly continuation of Friday's trends. News from Australia and New Zealand moves AUD/NZD pairs. RBA (Reserve Bank of Australia) statements are key events.</div>
                        <span class="zed-badge zed-badge-gold mt-2 d-inline-block">High Impact News</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="session-card" style="--ac:var(--zed-primary)">
                        <div class="session-name"> Tokyo Session</div>
                        <div class="session-time">00:00–09:00 GMT</div>
                        <div class="session-pairs">Best pairs: AUD/USD, NZD/USD, USD/JPY, EUR/JPY</div>
                        <div style="margin-top:8px; color:var(--zed-secondary);">Characteristics: Thin liquidity, price
                        spreads possible, mostly consolidation. Today's levels: Monitor NZD (Reserve Bank of Australia) statements
                        as key events.</div>
                        <span class="zed-badge zed-badge-red mt-2 d-inline-block">Asian Session</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="session-card" style="--ac:var(--zed-primary)">
                        <div class="session-name">London Session</div>
                        <div class="session-time">08:00–17:00 GMT</div>
                        <div class="session-pairs">Best pairs: GBP/USD, EUR/USD, EUR/GBP, EUR/JPY</div>
                        <div style="margin-top:8px; color: var(--zed-secondary) !important; ">Characteristics: <strong>Highest volatility
                            session.</strong> Bank of Japan (BoJ) interventions happen. H4 structure breaks. TP move. Price often
                        sets the day's high or low. London sets key levels that often holds all week.</div>
                        <span class="zed-badge zed-badge-navy mt-2 d-inline-block">Most Active</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="session-card" style="--ac:var(--zed-primary)">
                        <div class="session-name"> New York Session</div>
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
                            <div class="row">

                                    <div class="col-md-6">
                                            <div
                                                style="margin-bottom:8px; color: #fff !important;  font-weight:600;">
                                                London Open: 08:00–10:00 GMT
                                            </div>
                                            <div style=" margin-bottom:14px; color: #fff !important; ">EUR/USD, GBP/USD, Gold —
                                                highest breakout probability
                                            </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div style="margin-bottom:8px; color: #fff !important;  font-weight:600;">
                                            NY Open: 13:00–16:00 GMT
                                        </div>

                                        <div style="color: #fff !important; ">Avoid: 22:00–00:00 GMT (thin, manipulated
                                            spreads)
                                        </div>

                                    </div>

                            </div>
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
                <div style=" color:var(--zed-secondary); line-height:1.8;">
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
            <div class="zed-card zed-card-accent">
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
                <div style="font-size:.9rem;color:var(--zed-secondary);">You have $500. If you risk 1% = <strong>$5 risk per
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
            <div class="broker-card" style="--ac:var(--zed-primary)">
                <div class="broker-label">STP Broker</div>
                <div class="broker-title">Straight-Through Processing</div>
                <p class="broker-text">They profit from your <strong>losses — the spread.</strong> No dealing desk, trades
                pass straight to market. <strong>No requotes</strong>. Variable spreads. Better than MM for active
                traders.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="broker-card" style="--ac:var(--zed-primary)">
                <div class="broker-label">ECN Broker ✓ Recommended</div>
                <div class="broker-title">Electronic Comm. Network</div>
                <p class="broker-text">Your orders are sent directly to liquidity providers (banks). <strong>Raw spreads
                    from 0.0 pips + small commission ($3–7/lot).</strong> Most transparent. Best for serious traders.</p>
            </div>
            </div>
            <div class="col-sm-6 col-lg-3 reveal">
            <div class="broker-card" style="--ac:var(--zed-primary)">
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
                    <td style="color:var(--zed-success); font-weight:600;">
                        0.5–1.5 pips</td>
                    <td style="">50–150 pips</td>
                    <td><span class="cp-best" style="color:var(--zed-secondary);">All traders</span></td>
                </tr>
                <tr>
                    <td><span class="cp-cat-minor">Minor</span></td>
                    <td>
                        <div class="cp-pair">EUR/GBP · GBP/JPY</div>
                        <div class="cp-pair">EUR/JPY · AUD/JPY</div>
                    </td>
                    <td style="color: var(--zed-secondary) !important; ">Less liquidity, wider spreads. Offer unique
                        opportunities.</td>
                    <td style="color:var(--zed-success); font-weight:600;">
                        1.5–3 pips</td>
                    <td style="">80–200 pips</td>
                    <td><span class="cp-best" style="color:var(--zed-secondary);">Intermediate</span></td>
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
                        style="color:var(--zed-success); font-weight:600;">
                        5–50 pips</td>
                    <td style="">100–500+ pips</td>
                    <td><span class="cp-best" style="color:var(--zed-secondary);">Advanced
                        only</span></td>
                </tr>
                <tr>
                    <td><span class="cp-cat-exotic" style="color: var(--zed-primary);">Commodity-linked</span></td>
                    <td>
                        <div class="cp-pair">AUD/USD (gold) · USD/CAD (oil)</div>
                        <div class="cp-pair">NZD/USD (dairy)</div>
                    </td>
                    <td style="font-size:.9rem;color: var(--zed-secondary) !important; ">These currencies are heavily influenced by commodity prices. Gold up → AUD up. Oil up → CAD up.</td>
                    <td
                        style="color:var(--zed-success); font-weight:600;">0.5–2 pips</td>
                    <td style="">40–100 pips</td>
                    <td><span class="cp-best" style=" color:var(--zed-secondary);">All levels</span></td>
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
            <div class="order-card">
                <div class="order-label"><i class="fas fa-arrow-up"></i> Market Order</div>
                <div class="order-title">Market Order</div>
                <p class="order-text">Executes immediately at the <strong>current best available price.</strong> Use when:
                You need instant fill and precise price isn't critical. Risk: Slippage during fast market moves.</p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card">
                <div class="order-label"><i class="fas fa-arrow-down"></i> Buy Limit</div>
                <div class="order-title">Buy Limit</div>
                <p class="order-text">Place a buy order at a <strong>lower price than current.</strong> Refer to your broker
                at a fixed value for slippage → guaranteed fill at your price or better. Use: When you want to buy at
                support, a fair value gap, or discount zone.</p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card">
                <div class="order-label"><i class="fas fa-chart-line"></i> Buy Stop</div>
                <div class="order-title">Buy Stop</div>
                <p class="order-text">Place a buy order <strong>above current price.</strong> Executes when price rises to
                that level. Use: When a breakout above resistance confirms your bias — guaranteed fill once level is hit.
                </p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card">
                <div class="order-label"><i class="fas fa-stop"></i> Stop Loss (SL)</div>
                <div class="order-title">Stop Loss — Non-Negotiable</div>
                <p class="order-text">An order that <strong>automatically closes your trade if price moves against
                    you.</strong> Place below structure (buy trades) or above structure (sell trades). Never trade without a
                stop loss — the market will move against you eventually.</p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card">
                <div class="order-label"><i class="fas fa-bullseye"></i> Take Profit (TP)</div>
                <div class="order-title">Take Profit</div>
                <p class="order-text">Automatically closes your trade at a <strong>target profit level.</strong> Place at
                the next key level of S/R. TP1 = 50% partial close. TP2 = full close. This locks in profits without
                watching the screen.</p>
            </div>
            </div>
            <div class="col-md-6 col-lg-4 reveal">
            <div class="order-card">
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
                font-size: 1.2rem;
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
                    <div class="info-head">Interest Rates | The #1 Driver</div>
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

                <div class="info-card" style="border-left:4px solid var(--zed-primary);">
                    <div class="info-head">Key Economic Indicators</div>
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

                <div class="info-card" style="border-left:4px solid var(--zed-primary);">
                    <div class="info-head">Geopolitical & Sentiment Factors</div>
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

                <div class="info-card" style="border-left:4px solid var(--zed-primary);">
                    <div class="info-head">Economic Calendar | How to Use It</div>
                        <div class="info-body">
                            Use <strong>Forex Factory, Investing.com, or TradingEconomics</strong> to track all upcoming events.<br><br>
                            <strong>Impact levels:</strong><br>
                             High Impact — Can move pairs 50–300+ pips (NFP, FOMC, CPI)<br>
                             Medium Impact — 20–60 pip moves possible<br>
                             Low Impact — Usually no significant move<br><br>
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
                        <p>A demo account uses <strong style="color:var(--zed-secondary)">virtual money</strong> with real market prices. It is identical to a live account in terms of charts, indicators and order types — but there is NO emotional weight because you cannot actually lose real money.</p>
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
                        <p>When you move to a live account with real money, <strong style="color:var(--zed-secondary);">everything changes psychologically</strong>. Winning strategies on demo often fail on live because fear and greed take over.</p>
                        <div class="divider"></div>
                        <p class="label">How to transition</p>
                        <ol class="step-list">
                        <li><span class="step-num">1</span>Start with the smallest amount you can deposit (some brokers allow $50–$100)</li>
                        <li><span class="step-num">2</span>Trade micro lots (0.01) only</li>
                        <li><span class="step-num">3</span>Maintain exact same rules as demo</li>
                        <li><span class="step-num">4</span>Scale up only after 3 months of live profitability</li>
                        </ol>
                        <div class="callout">
                        <strong style="color:var(--zed-secondary);">Reality:</strong> Most traders blow their first live account. It's almost a rite of passage. The lesson is always the same: risk management and psychology, not the strategy.
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
                background: var(--zed-backgound-color); 
                color: var(--zed-primary); 
                font-weight: 600;
                border-bottom: 1.5px solid var(--zed-primary); 
            }
            .card-header.live { 
                background: var(--zed-backgound-color); 
                color: var(--zed-primary); 
                font-weight: 600;
                border-bottom: 1.5px solid var(--zed-primary); 
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

     <div class="container">
 <style>
   /* Category tabs */
  .cat-tabs { 
    display: flex; 
    flex-wrap: wrap; 
    gap: 6px; 
    margin-bottom: 1.25rem; 
}
  .cat-btn {
    padding: 8px 15px; 
    border-radius: 20px; 
    font-size: 12px; 
    font-weight: 500;
    border: 0.5px solid var(--zed-primary); 
    background: transparent;
    color: var(--zed-secondary); 
    cursor: pointer; 
    transition: all 0.15s;
  }
  .cat-btn.active, .cat-btn:hover {
    background: #fff; 
    color: var(--zed-primary); 
    /* border-color: 1px solid #ff0000 !important; */
  }

  /* FAQ items */
  .faq-list { 
    display: flex; 
    flex-direction: column; 
    gap: 8px; 
}
  .faq-item {
    /* background: var(--zed-primary); */
    border: 0.5px solid var(--zed-border-color);
    border-radius: var(--border-radius-lg);
    overflow: hidden;
    transition: border-color 0.15s;
  }
  .faq-item.open { 
    border-color: var(--zed-primary); 
}

  .faq-q {
    display: flex; 
    align-items: center; 
    justify-content: space-between;
    padding: 14px 16px; 
    cursor: pointer; 
    gap: 12px;
  }
  .faq-q-left { 
    display: flex; 
    align-items: 
    center; gap: 10px; 
}
  .faq-num {
    min-width: 30px; 
    height: 30px; 
    border-radius: 50%;
    background: rgba(232,17,26,.08); 
    color: var(--zed-primary);
    font-size: 11px; 
    font-weight: 500;
    display: flex; 
    align-items: center; 
    justify-content: center; 
    flex-shrink: 0;
  }
  .faq-item.open .faq-num { 
    background: rgba(232,17,26,.08); 
    color: VAR(--zed-primary); 
    }
  .faq-q-text {
    font-size: 1rem;
    font-family: poppins, sans-serif;
    letter-spacing: 1px;
    font-weight: 500;
    /* color: var(--color-text-primary); */
    line-height: 1.4;
    }
  .faq-arrow {  
    color: var(--zed-secondary); 
    transition: transform 0.2s; 
    flex-shrink: 0; 
    }
  .faq-item.open .faq-arrow { 
    transform: rotate(180deg); 
    color: VAR(--zed-primary); 
    }

  .faq-a {
    display: none; 
    padding: 0 16px 16px 48px;
    font-size: 15px; 
    color: var(--zed-secondary); 
    line-height: 1.7;
    font-weight: 500;
    font-family: poppins, sans-serif;
    letter-spacing: 1px;
  }
  .faq-item.open .faq-a { 
    display: block; 
    }

  .faq-a strong { 
    color: var(--zed-primary); 
    font-weight: 500; 
    }
  .faq-a .highlight {
    background: rgba(232,17,26,.08); 
    border-left: 3px solid var(--zed-primary);
    border-radius: 0 6px 6px 0; 
    padding: 8px 12px;
    font-family: poppins, sans-serif;
    margin: 10px 0; font-size: 14px; color: var(--zed-secondary);
  }
  .faq-a .tip {
    background: var(--color-background-secondary); border-radius: 6px;
    padding: 8px 12px; margin-top: 10px;
    font-size: 12.5px; color: var(--zed-secondary);
    display: flex; gap: 6px;
  }
  .faq-a table { 
    width: 100%; 
    border-collapse: collapse; 
    margin-top: 10px; 
    font-size: 12.5px; 
    }
  .faq-a th { 
    background: rgba(232,17,26,.08); 
    color: var(--zed-primary); 
    padding: 7px 10px; 
    text-align: left; 
    font-weight: 500; 
}
  .faq-a td { padding: 7px 10px; border-bottom: 0.5px solid var(--zed-secondary); }
  .faq-a .tag-g { display: inline-block; background: #e8f5ef; color: var(--zed-primary); font-size: 11px; padding: 2px 8px; border-radius: 20px; }
  .faq-a .tag-r { display: inline-block; background: #fdeaea; color: var(--zed-primary); font-size: 11px; padding: 2px 8px; border-radius: 20px; }
  .faq-a .tag-b { display: inline-block; background: #e8f1fc; color: var(--zed-primary); font-size: 11px; padding: 2px 8px; border-radius: 20px; }

  .count-bar { 
    display: flex; 
    align-items: center; 
    justify-content: space-between; 
    margin-bottom: 10px; 
    }
  .count-text { 
    font-size: 12px; 
    color: var(--zed-secondary); 
}
  .zed-link { 
    font-size: 12px; 
    color: var(--zed-primary); 
    text-decoration: none; 
    font-weight: 500; 
    }
  .zed-link:hover { 
    text-decoration: underline; 
    }

  .hidden { display: none !important; }
 </style>
      <div class="zed-sec-head mt-5 mb-5">  
            <h2 class="zed-sec-title">Zed Capital — Forex Basics FAQ</h2> 
            <div class="underline"></div>
      </div>

      <h2 class="sr-only">Zed Capital — Forex Basics FAQ</h2>

<div class="wrap">
  <div class="sec-title">
    
    <p class="sec-sub">Everything beginners need to know before placing their first trade on Zed Capital's MT5 platform. Click any question to expand.</p>

    <div class="cat-tabs">
        <button class="cat-btn active" onclick="filterCat('all',this)">All Questions</button>
        <button class="cat-btn" onclick="filterCat('market',this)">What is Forex</button>
        <button class="cat-btn" onclick="filterCat('terms',this)">Key Terms</button>
        <button class="cat-btn" onclick="filterCat('pairs',this)">Currency Pairs</button>
        <button class="cat-btn" onclick="filterCat('broker',this)">Broker & Account</button>
        <button class="cat-btn" onclick="filterCat('sessions',this)">Market Sessions</button>
    </div>

    <div class="count-bar">
        <span class="count-text" id="faq-count">Showing all 20 questions</span>
        <a class="zed-link" href="https://www.zedcapital.com/zed-academy">Explore Zed Academy →</a>
    </div>

    <div class="faq-list" id="faq-list">

        <!-- Q1 -->
        <div class="faq-item" data-cat="market">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">1</div>
            <div class="faq-q-text">What is Forex trading?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            Forex (Foreign Exchange) is the global marketplace where currencies are bought and sold against each other. It is the world's largest financial market with a daily trading volume of over <strong>$7.5 trillion</strong> — larger than all stock markets combined.<br><br>
            Unlike stock markets, Forex is an <strong>OTC (Over-The-Counter)</strong> market with no single central exchange. Trading happens 24 hours a day, 5 days a week through a global network of banks, brokers, and electronic systems.
            <div class="highlight">On Zed Capital, you can trade Forex, Stocks, Metals, Indices, Commodities and Crypto — all from one MT5 account.</div>
        </div>
        </div>

        <!-- Q2 -->
        <div class="faq-item" data-cat="market">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">2</div>
            <div class="faq-q-text">Who participates in the Forex market?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            The Forex market has a clear hierarchy of participants:<br><br>
            <table>
            <tr><th>Tier</th><th>Participant</th><th>Role</th></tr>
            <tr><td>1</td><td>Central Banks (Fed, ECB, BOJ)</td><td>Set interest rates, control currency supply</td></tr>
            <tr><td>2</td><td>Commercial Banks (JPMorgan, HSBC)</td><td>Make markets, provide liquidity</td></tr>
            <tr><td>3</td><td>Hedge Funds & Institutions</td><td>Large-scale speculation & hedging</td></tr>
            <tr><td>4</td><td>Multinational Corporations</td><td>Hedge currency exposure on international revenues</td></tr>
            <tr><td>5</td><td>Retail Brokers (Zed Capital)</td><td>Provide market access to retail traders</td></tr>
            <tr><td>6</td><td>Retail Traders (You)</td><td>~5% of total market volume</td></tr>
            </table>
            <div class="tip"><i class="ti ti-bulb" aria-hidden="true"></i> Retail traders represent only ~5% of Forex volume — which is why understanding how larger players move the market gives you a significant edge.</div>
        </div>
        </div>

        <!-- Q3 -->
        <div class="faq-item" data-cat="market">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">3</div>
            <div class="faq-q-text">Why does the Forex market exist?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            Forex exists for five core reasons:<br><br>
            <strong>1. International Trade</strong> — A UAE company importing goods from Japan must convert AED to JPY to pay their supplier.<br>
            <strong>2. Tourism</strong> — Travellers exchange currency when visiting other countries — billions of small transactions daily.<br>
            <strong>3. Investment</strong> — A US fund buying European bonds must first purchase EUR.<br>
            <strong>4. Speculation</strong> — Traders and hedge funds buy/sell currencies to profit from price movements. This accounts for the majority of Forex volume.<br>
            <strong>5. Central Bank Policy</strong> — Countries manage their currency's value to control inflation and support exports.
        </div>
        </div>

        <!-- Q4 -->
        <div class="faq-item" data-cat="terms">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">4</div>
            <div class="faq-q-text">What is a Pip and how is it calculated?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            A <strong>Pip (Price Interest Point)</strong> is the smallest standardised price movement in a currency pair.<br><br>
            For most pairs → 1 pip = movement of the <strong>4th decimal place (0.0001)</strong><br>
            For JPY pairs → 1 pip = movement of the <strong>2nd decimal place (0.01)</strong><br><br>
            <strong>Examples:</strong><br>
            EUR/USD moves from 1.0850 → 1.0860 = <span class="tag-g">+10 pips profit (if long)</span><br>
            GBP/USD moves from 1.2700 → 1.2650 = <span class="tag-r">−50 pips loss (if long)</span><br>
            USD/JPY moves from 150.00 → 151.00 = <span class="tag-g">+100 pips profit (if long)</span><br><br>
            <div class="highlight">Modern brokers like Zed Capital quote to 5 decimal places. The 5th digit is a "pipette" = 1/10th of a pip. e.g. EUR/USD at 1.08512 — the "2" is a pipette.</div>
        </div>
        </div>

        <!-- Q5 -->
        <div class="faq-item" data-cat="terms">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">5</div>
            <div class="faq-q-text">What is a Spread and how does it affect my trades?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            The <strong>spread</strong> is the difference between the Bid price (what you sell at) and the Ask price (what you buy at). It is your broker's primary cost.<br><br>
            <strong>Example — EUR/USD:</strong><br>
            Bid: 1.08500 | Ask: 1.08515 → Spread = <strong>1.5 pips</strong><br><br>
            Every trade you open starts at a small loss equal to the spread. The market must move in your favour by at least the spread before you break even.<br><br>
            <table>
            <tr><th>Account</th><th>Spread</th><th>Commission</th><th>Best For</th></tr>
            <tr><td>Zed Capital Premium Elite</td><td>From 1.5 pips</td><td>$0</td><td>Beginners, Swing Traders</td></tr>
            <tr><td>Zed Capital Premium Raw</td><td>From 0.1 pips</td><td>$8/lot</td><td>Scalpers, Algo Traders</td></tr>
            </table>
        </div>
        </div>

        <!-- Q6 -->
        <div class="faq-item" data-cat="terms">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">6</div>
            <div class="faq-q-text">What is Leverage and how does it work?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            <strong>Leverage</strong> allows you to control a larger position with a smaller amount of capital. Zed Capital offers leverage up to <strong>1:500</strong>.<br><br>
            <strong>Example with 1:100 leverage:</strong><br>
            You deposit $1,000. With 1:100 leverage, you can control a $100,000 position.<br>
            If the trade moves +1% in your favour → profit = $1,000 (100% of your deposit).<br>
            If the trade moves −1% against you → loss = $1,000 (entire deposit wiped).<br><br>
            <div class="highlight">⚠️ Leverage is a double-edged sword. It amplifies both profits AND losses. Always use a Stop Loss. Professional traders rarely use more than 1:10–1:20 effective leverage regardless of what their broker offers.</div>
            <div class="tip"><i class="ti ti-shield" aria-hidden="true"></i> Zed Capital includes negative balance protection — you cannot lose more than your deposit.</div>
        </div>
        </div>

        <!-- Q7 -->
        <div class="faq-item" data-cat="terms">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">7</div>
            <div class="faq-q-text">What is Margin and what happens when I get a Margin Call?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            <strong>Margin</strong> is the deposit your broker holds as collateral to keep your trade open. It is not a fee — it is reserved from your account balance.<br><br>
            <strong>Required Margin formula:</strong><br>
            Required Margin = (Trade Size ÷ Leverage) × Exchange Rate<br><br>
            <strong>Example:</strong> Trading 1 lot EUR/USD (100,000 units) at 1:100 leverage → Required Margin = $1,000<br><br>
            <strong>Margin Call</strong> occurs when your account equity drops to 50% of the required margin (Zed Capital's margin call level). The broker alerts you to deposit more funds or close positions.<br><br>
            <strong>Stop Out</strong> occurs at 50% — Zed Capital will automatically close your positions to prevent further losses.
            <div class="tip"><i class="ti ti-bulb" aria-hidden="true"></i> Always keep free margin well above your used margin. A common rule: never use more than 20% of your account on any single trade.</div>
        </div>
        </div>

        <!-- Q8 -->
        <div class="faq-item" data-cat="terms">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">8</div>
            <div class="faq-q-text">What are Lot Sizes? (Standard, Mini, Micro)</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            A <strong>Lot</strong> is the standard unit of trade size in Forex. On Zed Capital's MT5 platform, the Volume field controls your lot size.<br><br>
            <table>
            <tr><th>Lot Type</th><th>MT5 Volume</th><th>Units</th><th>Pip Value (EUR/USD)</th></tr>
            <tr><td>Standard Lot</td><td>1.0</td><td>100,000</td><td>~$10/pip</td></tr>
            <tr><td>Mini Lot</td><td>0.1</td><td>10,000</td><td>~$1/pip</td></tr>
            <tr><td>Micro Lot</td><td>0.01</td><td>1,000</td><td>~$0.10/pip</td></tr>
            </table>
            <div class="highlight">Beginners should always start with micro lots (0.01). With a $500 account and a 30-pip stop loss: 0.01 lot = $0.30 risk per pip × 30 pips = $3 total risk = 0.6% of account. This is safe and professional.</div>
        </div>
        </div>

        <!-- Q9 -->
        <div class="faq-item" data-cat="terms">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">9</div>
            <div class="faq-q-text">What is a Swap / Rollover fee?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            A <strong>Swap (Rollover)</strong> is an interest charge or credit applied when you hold a Forex position past <strong>17:00 New York time</strong>. It is based on the interest rate difference between the two currencies in the pair.<br><br>
            <strong>Example — Buying EUR/USD:</strong><br>
            You buy EUR (ECB rate ~4%) and sell USD (Fed rate ~5.25%)<br>
            Net = 4% − 5.25% = <span class="tag-r">−1.25%/year</span> → You PAY swap daily<br><br>
            <strong>Wednesday Triple Swap:</strong> On Wednesday night, brokers charge 3× the normal swap to cover the weekend settlement. Avoid holding negative-swap trades through Wednesday.<br><br>
            <div class="tip"><i class="ti ti-moon" aria-hidden="true"></i> Zed Capital offers Islamic (swap-free) accounts for traders who cannot receive or pay interest under Sharia law.</div>
        </div>
        </div>

        <!-- Q10 -->
        <div class="faq-item" data-cat="pairs">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">10</div>
            <div class="faq-q-text">What is the difference between Base Currency and Quote Currency?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            Every currency pair is written as <strong>BASE/QUOTE</strong>.<br><br>
            <strong>EUR/USD = 1.0850 means:</strong><br>
            → 1 EUR (base) = 1.0850 USD (quote)<br>
            → To BUY 1 EUR, you pay 1.0850 USD<br><br>
            <strong>When you BUY EUR/USD</strong> — you buy EUR and simultaneously sell USD.<br>
            <strong>When you SELL EUR/USD</strong> — you sell EUR and simultaneously buy USD.<br><br>
            This is why Forex always trades in pairs — you can never buy one currency without selling another.
        </div>
        </div>

        <!-- Q11 -->
        <div class="faq-item" data-cat="pairs">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">11</div>
            <div class="faq-q-text">What are Major, Minor, and Exotic currency pairs?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            <table>
            <tr><th>Category</th><th>Examples</th><th>Spread</th><th>Volatility</th></tr>
            <tr><td><span class="tag-g">Major</span></td><td>EUR/USD, GBP/USD, USD/JPY, AUD/USD</td><td>Tightest</td><td>Moderate–High</td></tr>
            <tr><td><span class="tag-b">Minor</span></td><td>EUR/GBP, EUR/JPY, GBP/JPY, AUD/JPY</td><td>Moderate</td><td>Moderate</td></tr>
            <tr><td><span class="tag-r">Exotic</span></td><td>USD/TRY, EUR/ZAR, USD/SGD</td><td>Widest</td><td>Very High</td></tr>
            </table><br>
            <strong>Best pairs for beginners:</strong> EUR/USD (most liquid, tightest spread), GBP/USD, USD/JPY.<br><br>
            <div class="tip"><i class="ti ti-bulb" aria-hidden="true"></i> Start with just 1–2 pairs. Master their behaviour before adding more. EUR/USD accounts for ~28% of all global Forex trades.</div>
        </div>
        </div>

        <!-- Q12 -->
        <div class="faq-item" data-cat="terms">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">12</div>
            <div class="faq-q-text">What is the difference between Going Long and Going Short?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            Unlike stocks (where you typically only profit when prices rise), Forex allows you to profit in <strong>both directions</strong>.<br><br>
            <strong>LONG (Buy):</strong> You believe the base currency will RISE. Buy EUR/USD at 1.0800, close at 1.0900 → +100 pips profit.<br><br>
            <strong>SHORT (Sell):</strong> You believe the base currency will FALL. Sell EUR/USD at 1.0900, close at 1.0800 → +100 pips profit.<br><br>
            <div class="highlight">Professional traders are equally comfortable going short. In a downtrend, shorting is as natural as buying in an uptrend. Most beginners only think about buying — this limits their opportunities by 50%.</div>
        </div>
        </div>

        <!-- Q13 -->
        <div class="faq-item" data-cat="broker">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">13</div>
            <div class="faq-q-text">What is the difference between Market Maker, STP, and ECN brokers?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            <table>
            <tr><th>Type</th><th>Execution</th><th>Spread</th><th>Commission</th><th>Verdict</th></tr>
            <tr><td><span class="tag-r">Market Maker</span></td><td>Broker takes other side</td><td>Fixed, wider</td><td>None</td><td>Conflict of interest</td></tr>
            <tr><td><span class="tag-b">STP</span></td><td>Routed to liquidity providers</td><td>Variable</td><td>Markup on spread</td><td>Good middle ground</td></tr>
            <tr><td><span class="tag-g">ECN/STP</span></td><td>True interbank access</td><td>Raw (0.0+)</td><td>Fixed per lot</td><td>Best for serious traders</td></tr>
            </table>
            <div class="highlight">Zed Capital is a licensed STP broker regulated by the FSC Mauritius (GB24203133), with no dealing desk — your orders are routed directly to institutional liquidity providers.</div>
        </div>
        </div>

        <!-- Q14 -->
        <div class="faq-item" data-cat="broker">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">14</div>
            <div class="faq-q-text">What account types does Zed Capital offer?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            Zed Capital offers two account types on MetaTrader 5:<br><br>
            <strong>Premium Elite</strong> — Spreads from 1.5 pips, zero commission, leverage up to 1:500, minimum deposit $100. Covers Forex, Stocks, Metals, Indices, Commodities, Crypto. Best for beginners and swing traders.<br><br>
            <strong>Premium Raw</strong> — Raw ECN spreads from 0.1 pips, $8 commission per lot, leverage up to 1:500, minimum deposit $100. Best for scalpers, day traders, and EA/algo traders.<br><br>
            Both accounts include segregated client funds, negative balance protection, and FSC regulation.
            <div class="tip"><i class="ti ti-star" aria-hidden="true"></i> Not sure which to choose? Start with a free Zed Capital Demo Account — same MT5 environment, zero risk.</div>
        </div>
        </div>

        <!-- Q15 -->
        <div class="faq-item" data-cat="broker">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">15</div>
            <div class="faq-q-text">Is my money safe with Zed Capital?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            Zed Capital International Limited takes fund security seriously:<br><br>
            <strong>Regulated:</strong> Licensed by the Financial Services Commission (FSC) of Mauritius, regulatory number GB24203133.<br>
            <strong>Segregated accounts:</strong> Client funds are held separately from company operating funds in top-tier bank accounts.<br>
            <strong>Negative balance protection:</strong> You cannot lose more than your deposited funds.<br>
            <strong>Nominee fund protection:</strong> In the event of a client's unavailability, their nominated beneficiary can claim the account balance.<br>
            <strong>Bank-level encryption:</strong> All data and transactions are protected with institutional-grade security.
        </div>
        </div>

        <!-- Q16 -->
        <div class="faq-item" data-cat="sessions">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">16</div>
            <div class="faq-q-text">When is the Forex market open and what are the trading sessions?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            The Forex market is open <strong>24 hours a day, Monday to Friday</strong> across four global sessions:<br><br>
            <table>
            <tr><th>Session</th><th>GMT Hours</th><th>Best Pairs</th><th>Volatility</th></tr>
            <tr><td>Sydney</td><td>22:00–07:00</td><td>AUD/USD, NZD/USD</td><td>Low</td></tr>
            <tr><td>Tokyo</td><td>00:00–09:00</td><td>USD/JPY, GBP/JPY</td><td>Low–Moderate</td></tr>
            <tr><td>London</td><td>07:00–16:00</td><td>EUR/USD, GBP/USD</td><td>HIGH</td></tr>
            <tr><td>New York</td><td>12:00–21:00</td><td>All USD pairs</td><td>HIGH</td></tr>
            </table>
            <div class="highlight">The <strong>London–New York overlap (12:00–16:00 GMT)</strong> is the most liquid and volatile window — the best time to trade for most strategies.</div>
        </div>
        </div>

        <!-- Q17 -->
        <div class="faq-item" data-cat="sessions">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">17</div>
            <div class="faq-q-text">What are the best trading hours for traders based in Dubai (UAE)?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            Zed Capital has a representative office in Dubai (Media City). For UAE-based traders (GMT+4):<br><br>
            <strong>London Open (best for trend starters):</strong> 11:00–13:00 UAE time<br>
            <strong>London–NY Overlap (highest volatility):</strong> 16:00–20:00 UAE time<br>
            <strong>NFP release (first Friday of each month):</strong> 16:30 UAE time<br>
            <strong>FOMC decisions:</strong> ~22:00 UAE time<br><br>
            <div class="highlight">Avoid trading between 02:00–10:00 UAE time — this is the late US/early Tokyo session with thin liquidity, wide spreads, and unpredictable price action.</div>
        </div>
        </div>

        <!-- Q18 -->
        <div class="faq-item" data-cat="market">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">18</div>
            <div class="faq-q-text">What is a Stop Loss and Take Profit — and why are they essential?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            <strong>Stop Loss (SL)</strong> is a price level at which your trade automatically closes to prevent further loss. It is your safety net.<br><br>
            <strong>Take Profit (TP)</strong> is a price level at which your trade automatically closes to lock in your profit.<br><br>
            <strong>Example:</strong><br>
            Buy EUR/USD at 1.0850 → SL at 1.0820 (30 pips risk) → TP at 1.0910 (60 pips reward) → Risk:Reward = 1:2<br><br>
            <div class="highlight">Never open a trade without a Stop Loss. Even one unprotected trade during a major news event can wipe an entire account. Zed Capital's MT5 allows you to set both SL and TP at the moment of order placement.</div>
        </div>
        </div>

        <!-- Q19 -->
        <div class="faq-item" data-cat="broker">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">19</div>
            <div class="faq-q-text">How do I start trading on Zed Capital — step by step?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            Getting started on Zed Capital takes less than 3 minutes:<br><br>
            <strong>Step 1 — Register:</strong> Visit zedcapital.com and fill in your basic personal details to open an account.<br>
            <strong>Step 2 — Verify:</strong> Submit your identity documents (KYC) to comply with FSC regulations.<br>
            <strong>Step 3 — Demo first:</strong> Open a free Demo account to practise on MT5 with virtual funds — no risk.<br>
            <strong>Step 4 — Deposit:</strong> Once confident, fund your live account (minimum $100) via bank transfer or crypto.<br>
            <strong>Step 5 — Download MT5:</strong> Available for Windows, macOS, iOS, Android, and Web Browser — all with the same login.<br>
            <strong>Step 6 — Trade:</strong> Start with micro lots (0.01), apply your Stop Loss on every trade, and track your progress.<br><br>
            <div class="tip"><i class="ti ti-school" aria-hidden="true"></i> Complete Zed Academy's beginner course before going live. Education first — profits follow.</div>
        </div>
        </div>

        <!-- Q20 -->
        <div class="faq-item" data-cat="market">
        <div class="faq-q" onclick="toggle(this)">
            <div class="faq-q-left">
            <div class="faq-num">20</div>
            <div class="faq-q-text">What is the most important rule for beginner Forex traders?</div>
            </div>
            <i class="ti ti-chevron-down faq-arrow" aria-hidden="true"></i>
        </div>
        <div class="faq-a">
            The single most important rule: <strong>protect your capital first.</strong><br><br>
            Most beginners focus on making money. Professionals focus on not losing money. If you preserve your capital, you stay in the game long enough to develop a real edge.<br><br>
            The three non-negotiable rules for every Zed Capital trader:<br><br>
            <strong>1.</strong> Never risk more than 1–2% of your account on a single trade.<br>
            <strong>2.</strong> Always use a Stop Loss — no exceptions, no matter how confident you feel.<br>
            <strong>3.</strong> Practise on demo for at least 3 consistent profitable months before going live.<br><br>
            <div class="highlight">"Your edge isn't your indicator or your pattern — it's your ability to execute the same process consistently despite losses, despite boredom, despite the inevitable streaks. The market doesn't reward brilliance. It rewards discipline."</div>
        </div>
        </div>

    </div>

</div>

    </div>
 
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

       function toggle(btn) {
            const item = btn.closest('.faq-item');
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
            }

            function filterCat(cat, btn) {
            document.querySelectorAll('.cat-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const items = document.querySelectorAll('.faq-item');
            let count = 0;
            items.forEach(item => {
                if (cat === 'all' || item.dataset.cat === cat) {
                item.classList.remove('hidden');
                count++;
                } else {
                item.classList.add('hidden');
                item.classList.remove('open');
                }
            });
            const label = cat === 'all' ? 'all 20 questions' : count + ' question' + (count !== 1 ? 's' : '');
            document.getElementById('faq-count').textContent = 'Showing ' + label;
        }
    </script>

    
<?php
include_once ('elements/footer.php');
?>
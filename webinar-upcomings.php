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

        /* ── FEATURED / VIDEO WEBINAR ────────────── */
        .featured-section {
            padding: 56px 0 0;
            position: relative;
            z-index: 1
        }

        .featured-card {
            background: var(--zed-dark-text);
            border-radius: 20px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            box-shadow: 0 24px 64px rgba(0, 0, 0, .18);
            position: relative;
        }

        @media(max-width:767px) {
            .featured-card {
                grid-template-columns: 1fr
            }
        }

        /* VIDEO SIDE */
        .video-side {
            position: relative;
            min-height: 320px;
            background: #000;
            overflow: hidden
        }

        .video-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: .6;
            display: block
        }

        /* animated chart lines overlay */
        .chart-overlay {
            position: absolute;
            inset: 0;
            pointer-events: none
        }

        .chart-svg {
            width: 100%;
            height: 100%
        }

        .c-line {
            fill: none;
            stroke: var(--zed-primary);
            stroke-width: 2;
            stroke-dasharray: 600;
            stroke-dashoffset: 600;
            animation: drawLine 2.5s ease forwards
        }

        .c-line2 {
            fill: none;
            stroke: rgba(0, 184, 122, .6);
            stroke-width: 1.5;
            stroke-dasharray: 400;
            stroke-dashoffset: 400;
            animation: drawLine 3s .4s ease forwards
        }

        .c-candle {
            fill: none;
            stroke: rgba(255, 255, 255, .15);
            stroke-width: 1
        }

        @keyframes drawLine {
            to {
                stroke-dashoffset: 0
            }
        }

        /* price dots animation */
        .price-dots {
            position: absolute;
            inset: 0;
            pointer-events: none
        }

        .pdot {
            position: absolute;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--zed-primary);
            box-shadow: 0 0 8px var(--zed-primary);
            animation: floatDot 3s ease-in-out infinite
        }

        @keyframes floatDot {

            0%,
            100% {
                transform: translateY(0) scale(1);
                opacity: .8
            }

            50% {
                transform: translateY(-12px) scale(1.3);
                opacity: 1
            }
        }

        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 64px;
            height: 64px;
            background: rgba(232, 17, 26, .9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #fff;
            cursor: pointer;
            border: 3px solid rgba(255, 255, 255, .3);
            box-shadow: 0 0 0 0 rgba(232, 17, 26, .4);
            animation: playPulse 2s infinite;
            transition: background .2s, transform .2s;
            text-decoration: none;
        }

        .play-btn:hover {
            background: var(--zed-primary);
            transform: translate(-50%, -50%) scale(1.1);
            color: #fff
        }

        @keyframes playPulse {
            0% {
                box-shadow: 0 0 0 0 rgba(232, 17, 26, .5)
            }

            70% {
                box-shadow: 0 0 0 18px rgba(232, 17, 26, 0)
            }

            100% {
                box-shadow: 0 0 0 0 rgba(232, 17, 26, 0)
            }
        }

        .video-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: var(--zed-primary);
            color: #fff;
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .3rem .8rem;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: .4rem
        }

        .video-badge .live-dot {
            width: 5px;
            height: 5px
        }

        .video-timer {
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            background: rgba(0, 0, 0, .7);
            color: #fff;
            font-size: .75rem;
            font-weight: 700;
            padding: .3rem .75rem;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: .4rem;
            letter-spacing: .04em
        }

        /* INFO SIDE */
        .info-side {
            padding: 2.4rem 2.2rem;
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        .feat-cat {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--zed-primary);
            background: rgba(232, 17, 26, .08);
            border: 1px solid rgba(232, 17, 26, .2);
            padding: .25rem .75rem;
            border-radius: 50px;
            margin-bottom: 1rem
        }

        .info-side h2 {
            
            font-size: 1.8rem;
            color: #fff;
            line-height: 1.15;
            margin-bottom: .7rem
        }

        .info-side p {
            font-size: .88rem;
            color: rgba(255, 255, 255, .5);
            line-height: 1.7;
            margin-bottom: 1.3rem
        }

        .feat-meta {
            display: flex;
            flex-direction: column;
            gap: .5rem;
            margin-bottom: 1.5rem
        }

        .feat-meta-item {
            display: flex;
            align-items: center;
            gap: .6rem;
            font-size: .82rem;
            color: rgba(255, 255, 255, .6)
        }

        .feat-meta-item i {
            color: var(--zed-primary);
            font-size: .9rem;
            width: 16px
        }

        .feat-meta-item span {
            color: rgba(255, 255, 255, .85);
            font-weight: 600
        }

        .speakers {
            display: flex;
            align-items: center;
            gap: .6rem;
            margin-bottom: 1.5rem
        }

        .sp-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--zed-primary);
            color: #fff;
            font-size: .72rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid rgba(255, 255, 255, .15);
            margin-left: -6px;
            flex-shrink: 0
        }

        .sp-avatar:first-child {
            margin-left: 0
        }

        .sp-text {
            font-size: .78rem;
            color: rgba(255, 255, 255, .5);
            margin-left: .3rem
        }

        .sp-text span {
            color: rgba(255, 255, 255, .8);
            font-weight: 600
        }

        .btn-join-feat {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: .88rem;
            font-weight: 700;
            padding: .8rem 2rem;
            box-shadow: 0 6px 20px var(--zed-light-red-hover);
            transition: background .25s, transform .2s;
            align-self: flex-start;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem
        }

        .btn-join-feat:hover {
            background: var(--zed-primary-hover);
            color: #fff;
            transform: translateY(-2px)
        }

        /* countdown */
        .countdown-row {
            display: flex;
            gap: .6rem;
            margin-bottom: 1.2rem
        }

        .cd-block {
            background: rgba(255, 255, 255, .07);
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 8px;
            padding: .5rem .7rem;
            text-align: center;
            min-width: 50px
        }

        .cd-num {
            
            font-size: 1.4rem;
            color: #fff;
            line-height: 1
        }

        .cd-lbl {
            font-size: .55rem;
            font-weight: 700;
            color: rgba(255, 255, 255, .35);
            letter-spacing: .1em;
            text-transform: uppercase;
            margin-top: .1rem
        }

        /* ── EVENTS GRID ──────────────────────────── */
        .events-section {
            padding: 56px 0 80px;
            position: relative;
            z-index: 1
        }

        .section-head {
            margin-bottom: 2.5rem
        }

        .eyebrow {
            display: inline-block;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--zed-primary);
            margin-bottom: .6rem
        }

        .sec-h {
            
            font-size: clamp(1.8rem, 3.8vw, 2.6rem);
            color: var(--zed-dark-text);
            line-height: 1.1
        }

        .sec-p {
            font-size: .92rem;
            color: var(--zed-secondary);
            max-width: 440px;
            line-height: 1.65
        }

        /* event card */
        .event-card {
            background: var(--zed-light-bg);
            border: 1.5px solid var(--zed-border-color);
            border-radius: 16px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: transform .38s cubic-bezier(.2, .8, .2, 1), box-shadow .38s, border-color .3s;
            position: relative;
        }

        .event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 24px 56px rgba(0, 0, 0, .1);
            border-color: rgba(232, 17, 26, .25)
        }

        /* top color bar */
        .event-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            transition: opacity .3s;
            opacity: 0
        }

        .event-card:hover::before {
            opacity: 1
        }

        .ec-forex::before {
            background: linear-gradient(90deg, var(--blue), transparent)
        }

        .ec-metal::before {
            background: linear-gradient(90deg, var(--gold), transparent)
        }

        .ec-commodity::before {
            background: linear-gradient(90deg, var(--zed-success-hover), transparent)
        }

        .ec-indices::before {
            background: linear-gradient(90deg, var(--purple), transparent)
        }

        .ec-stocks::before {
            background: linear-gradient(90deg, var(--teal), transparent)
        }

        /* video thumbnail */
        .card-thumb {
            position: relative;
            /* height: 170px; */
            overflow: hidden;
            background: #0d0d0d;
            flex-shrink: 0
        }

        .thumb-chart {
            width: 100%;
            height: 100%;
            position: relative
        }

        .thumb-svg {
            width: 100%;
            height: 100%;
            display: block
        }

        .thumb-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, .4) 0%, transparent 60%)
        }

        /* animated price line in thumbnail */
        .tl {
            fill: none;
            stroke-width: 2;
            stroke-dasharray: 300;
            stroke-dashoffset: 300;
            animation: drawTL 2s ease forwards
        }

        @keyframes drawTL {
            to {
                stroke-dashoffset: 0
            }
        }

        /* candle animation */
        .thumb-candles {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: flex-end;
            gap: 3px;
            padding: 0 8px 6px;
            height: 100%
        }

        .tc {
            width: 8px;
            border-radius: 2px 2px 0 0;
            animation: growUp .8s ease both
        }

        @keyframes growUp {
            from {
                transform: scaleY(0);
                transform-origin: bottom
            }

            to {
                transform: scaleY(1);
                transform-origin: bottom
            }
        }

        .thumb-cat-tag {
            position: absolute;
            top: .7rem;
            left: .8rem;
            display: flex;
            align-items: center;
            gap: .4rem;
            padding: .22rem .7rem;
            border-radius: 50px;
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase
        }

        .thumb-play {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 40px;
            background: rgba(232, 17, 26, .9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: .9rem;
            opacity: 0;
            transition: opacity .25s, transform .25s;
            cursor: pointer
        }

        .event-card:hover .thumb-play {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1)
        }

        .thumb-upcoming {
            position: absolute;
            top: .7rem;
            right: .8rem;
            background: rgba(232, 17, 26, .1);
            border: 1px solid rgba(232, 17, 26, .25);
            color: var(--zed-primary);
            font-size: .6rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            padding: .2rem .6rem;
            border-radius: 50px
        }

        /* card body */
        .card-body-inner {
            padding: 1.25rem 1.3rem;
            flex: 1;
            display: flex;
            flex-direction: column
        }

        .card-title {
            
            font-size: 1.05rem;
            color: var(--zed-dark-text);
            margin-bottom: .4rem;
            line-height: 1.3
        }

        .card-desc {
            font-size: .8rem;
            color: var(--zed-secondary);
            line-height: 1.6;
            margin-bottom: .9rem;
            flex: 1
        }

        .card-meta-row {
            display: flex;
            gap: .6rem;
            margin-bottom: .9rem;
            flex-wrap: wrap
        }

        .meta-chip {
            display: flex;
            align-items: center;
            gap: .35rem;
            font-size: .72rem;
            font-weight: 600;
            color: var(--zed-secondary);
            background: var(--zed-backgound-color);
            border: 1px solid var(--zed-border-color);
            border-radius: 50px;
            padding: .22rem .65rem
        }

        .meta-chip i {
            font-size: .68rem;
            color: var(--zed-primary)
        }

        .meta-chip .val {
            color: var(--zed-dark-text);
            font-weight: 700
        }

        /* speaker row */
        .card-speaker {
            display: flex;
            align-items: center;
            gap: .6rem;
            padding-top: .75rem;
            border-top: 1px solid var(--zed-border-color);
            margin-top: auto
        }

        .cs-av {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            flex-shrink: 0;
            font-size: .65rem;
            font-weight: 700;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .cs-name {
            font-size: .78rem;
            font-weight: 700;
            color: var(--zed-dark-text)
        }

        .cs-role {
            font-size: .68rem;
            color: var(--zed-secondary)
        }

        .card-join-btn {
            margin-left: auto;
            background: var(--zed-primary);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: .72rem;
            font-weight: 700;
            padding: .38rem .9rem;
            transition: background .2s, transform .15s;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .3rem;
            flex-shrink: 0
        }

        .card-join-btn:hover {
            background: var(--zed-primary-hover);
            color: #fff;
            transform: translateY(-1px)
        }

        /* ── MARQUEE ──────────────────────────────── */
        .mq-band {
            background: var(--zed-dark-text);
            padding: 2.4rem 0;
            overflow: hidden;
            margin: 0
        }

        .mq-track {
            display: flex;
            gap: 1rem;
            width: max-content;
            animation: mqRun 22s linear infinite
        }

        .mq-track.rev {
            animation-direction: reverse;
            animation-duration: 18s
        }

        .mq-tag {
            display: flex;
            align-items: center;
            gap: .5rem;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .07);
            color: rgba(255, 255, 255, .6);
            border-radius: 50px;
            padding: .42rem 1.1rem;
            font-size: .78rem;
            font-weight: 600;
            white-space: nowrap;
            flex-shrink: 0
        }

        .mq-tag i {
            color: var(--zed-primary);
            font-size: .7rem
        }

        @keyframes mqRun {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-50%)
            }
        }

        /* ── REVEAL ──────────────────────────────── */
        .rv {
            opacity: 0;
            transform: translateY(26px);
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

        /* ── CTA BAND ────────────────────────────── */
        .cta-band {
            background: var(--zed-primary);
            padding: 68px 0;
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
            
            font-size: clamp(2rem, 5vw, 3.2rem);
            color: #fff;
            position: relative;
            z-index: 1
        }

        .cta-band p {
            color: rgba(255, 255, 255, .72);
            max-width: 460px;
            margin: .8rem auto 2rem;
            position: relative;
            z-index: 1
        }

        .btn-white {
            background: #fff;
            color: var(--zed-primary);
            border: none;
            border-radius: 50px;
            font-size: .92rem;
            font-weight: 700;
            padding: .85rem 2.4rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .14);
            transition: transform .2s, box-shadow .25s;
            position: relative;
            z-index: 1;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem
        }

        .btn-white:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 36px rgba(0, 0, 0, .2);
            color: var(--zed-primary)
        }
    </style>
    <!-- HERO -->
    <section class="hero">
        <div class="hero-glow"></div>
        <div class="container position-relative" style="z-index:1">
            <div class="hero-badge"><i class="bi bi-calendar-event-fill"></i> June 2026 Schedule</div>
            <h1>Webinar <em>Upcoming</em></h1>
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
                    <div class="lbl">Webinars</div>
                </div>
                <div class="s-stat">
                    <div class="num">5<span>+</span></div>
                    <div class="lbl">Markets</div>
                </div>
                <div class="s-stat">
                    <div class="num">Live<span>.</span></div>
                    <div class="lbl">Sessions</div>
                </div>
                <div class="s-stat">
                    <div class="num">Free<span>*</span></div>
                    <div class="lbl">Registration</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED VIDEO WEBINAR -->
    <section class="featured-section">
        <div class="container rv">
            <div class="featured-card">
                <!-- VIDEO SIDE -->
                <div class="video-side">
                    <!-- animated chart SVG -->
                    <div class="chart-overlay">
                        <svg class="chart-svg" viewBox="0 0 500 300" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none">
                            <!-- grid lines -->
                            <line x1="0" y1="75" x2="500" y2="75" stroke="rgba(255,255,255,.05)" stroke-width="1" />
                            <line x1="0" y1="150" x2="500" y2="150" stroke="rgba(255,255,255,.05)" stroke-width="1" />
                            <line x1="0" y1="225" x2="500" y2="225" stroke="rgba(255,255,255,.05)" stroke-width="1" />
                            <line x1="100" y1="0" x2="100" y2="300" stroke="rgba(255,255,255,.05)" stroke-width="1" />
                            <line x1="200" y1="0" x2="200" y2="300" stroke="rgba(255,255,255,.05)" stroke-width="1" />
                            <line x1="300" y1="0" x2="300" y2="300" stroke="rgba(255,255,255,.05)" stroke-width="1" />
                            <line x1="400" y1="0" x2="400" y2="300" stroke="rgba(255,255,255,.05)" stroke-width="1" />
                            <!-- main red trend line -->
                            <polyline class="c-line"
                                points="0,240 60,220 120,200 160,215 200,180 260,150 300,160 340,120 380,100 440,80 500,60"
                                style="animation-delay:.2s" />
                            <!-- secondary green line -->
                            <polyline class="c-line2"
                                points="0,260 80,245 140,250 200,235 260,220 320,200 380,190 440,175 500,160"
                                style="animation-delay:.6s" />
                            <!-- candle wicks -->
                            <g opacity=".25">
                                <line x1="60" y1="200" x2="60" y2="230" stroke="#fff" stroke-width="1" />
                                <line x1="120" y1="180" x2="120" y2="215" stroke="#fff" stroke-width="1" />
                                <line x1="200" y1="160" x2="200" y2="190" stroke="#fff" stroke-width="1" />
                                <line x1="300" y1="140" x2="300" y2="170" stroke="#fff" stroke-width="1" />
                                <line x1="400" y1="85" x2="400" y2="115" stroke="#fff" stroke-width="1" />
                            </g>
                            <!-- area fill -->
                            <defs>
                                <linearGradient id="areaGrad" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#E8111A" stop-opacity=".25" />
                                    <stop offset="100%" stop-color="#E8111A" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                            <polygon
                                points="0,240 60,220 120,200 160,215 200,180 260,150 300,160 340,120 380,100 440,80 500,60 500,300 0,300"
                                fill="url(#areaGrad)" opacity=".5" />
                        </svg>
                    </div>
                    <!-- floating price dots -->
                    <div class="price-dots">
                        <div class="pdot" style="left:20%;top:35%;animation-delay:0s"></div>
                        <div class="pdot"
                            style="left:50%;top:25%;animation-delay:.6s;background:var(--zed-success-hover);box-shadow:0 0 8px var(--zed-success-hover)">
                        </div>
                        <div class="pdot" style="left:75%;top:20%;animation-delay:1.2s"></div>
                    </div>
                    <!-- badges -->
                    <div class="video-badge"><span class="live-dot"></span> Featured</div>
                    <a href="#" class="play-btn"><i class="bi bi-play-fill"></i></a>
                    <div class="video-timer"><i class="bi bi-camera-video-fill" style="color:var(--zed-primary)"></i> Preview
                        Available</div>
                </div>

                <!-- INFO SIDE -->
                <div class="info-side">
                    <div class="feat-cat"><i class="bi bi-globe2"></i> Forex &amp; Smart Money</div>
                    <h2>Smart Trading with CopyTrading &amp; Automation</h2>
                    <p>Learn advanced copy trading strategies, automation techniques, and how to leverage institutional
                        order flow in the forex market.</p>

                    <!-- countdown -->
                    <div class="countdown-row" id="countdown">
                        <div class="cd-block">
                            <div class="cd-num" id="cd-d">03</div>
                            <div class="cd-lbl">Days</div>
                        </div>
                        <div class="cd-block">
                            <div class="cd-num" id="cd-h">14</div>
                            <div class="cd-lbl">Hours</div>
                        </div>
                        <div class="cd-block">
                            <div class="cd-num" id="cd-m">22</div>
                            <div class="cd-lbl">Mins</div>
                        </div>
                        <div class="cd-block">
                            <div class="cd-num" id="cd-s">08</div>
                            <div class="cd-lbl">Secs</div>
                        </div>
                    </div>

                    <div class="feat-meta">
                        <div class="feat-meta-item"><i class="bi bi-calendar3"></i> Date: <span>June 11, 2026</span>
                        </div>
                        <div class="feat-meta-item"><i class="bi bi-clock"></i> Time: <span>10:30 AM EST</span></div>
                        <div class="feat-meta-item"><i class="bi bi-people-fill"></i> Seats: <span>312 registered</span>
                        </div>
                        <div class="feat-meta-item"><i class="bi bi-translate"></i> Language: <span>English</span></div>
                    </div>
                    <div class="speakers">
                        <div class="sp-avatar" style="background:#e8111a">JR</div>
                        <div class="sp-avatar" style="background:#1d4ed8">SK</div>
                        <div class="sp-avatar" style="background:#059669">AP</div>
                        <span class="sp-text">By <span>James R., Sarah K.</span> + 1 more</span>
                    </div>
                    <a href="#" class="btn-join-feat"><i class="bi bi-play-circle-fill"></i> Join Free Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- MARQUEE -->
    <div class="mq-band mt-4">
        <div style="overflow:hidden;margin-bottom:.8rem">
            <div class="mq-track">
                <span class="mq-tag"><i class="bi bi-globe2"></i>Forex Trading</span>
                <span class="mq-tag"><i class="bi bi-gem"></i>Gold &amp; Silver</span>
                <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Crude Oil</span>
                <span class="mq-tag"><i class="bi bi-bar-chart-fill"></i>S&amp;P 500</span>
                <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>US Stocks</span>
                <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto</span>
                <span class="mq-tag"><i class="bi bi-bank2"></i>Economics</span>
                <span class="mq-tag"><i class="bi bi-activity"></i>Technical Analysis</span>
                <span class="mq-tag"><i class="bi bi-safe"></i>Bonds</span>
                <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Mgmt</span>
                <span class="mq-tag"><i class="bi bi-globe2"></i>Forex Trading</span>
                <span class="mq-tag"><i class="bi bi-gem"></i>Gold &amp; Silver</span>
                <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Crude Oil</span>
                <span class="mq-tag"><i class="bi bi-bar-chart-fill"></i>S&amp;P 500</span>
                <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>US Stocks</span>
                <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto</span>
                <span class="mq-tag"><i class="bi bi-bank2"></i>Economics</span>
                <span class="mq-tag"><i class="bi bi-activity"></i>Technical Analysis</span>
                <span class="mq-tag"><i class="bi bi-safe"></i>Bonds</span>
                <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Mgmt</span>
            </div>
        </div>
    </div>

    <!-- EVENTS GRID -->
    <section class="events-section" id="events">
        <div class="container">
            <div class="row align-items-end section-head">
                <div class="col-lg-6 rv">
                    <span class="eyebrow">June 2026 Schedule</span>
                    <h2 class="sec-h">All Upcoming Webinars</h2>
                    <p class="sec-p">Live, interactive sessions covering every major market — register free and join
                        from anywhere.</p>
                </div>
                <div class="col-lg-6 text-lg-end mt-3 mt-lg-0 rv">
                    <span style="font-size:.82rem;color:var(--zed-secondary);font-weight:500"><span id="visibleCount">10</span>
                        events found</span>
                </div>
            </div>

            <div class="row g-4" id="eventsGrid">

                <!-- Card 1 — FOREX -->
                <div class="col-md-6 col-xl-4 mx-auto rv event-item" data-cat="forex">
                    <div class="event-card ec-forex">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#0d1521" />
                                    <line x1="0" y1="42" x2="300" y2="42" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <line x1="0" y1="85" x2="300" y2="85" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <line x1="0" y1="128" x2="300" y2="128" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <defs>
                                        <linearGradient id="g1" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#2563eb" stop-opacity=".3" />
                                            <stop offset="100%" stop-color="#2563eb" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="0,140 50,120 100,100 130,115 160,85 210,65 250,55 300,40 300,170 0,170"
                                        fill="url(#g1)" />
                                    <polyline class="tl"
                                        points="0,140 50,120 100,100 130,115 160,85 210,65 250,55 300,40"
                                        stroke="#2563eb" style="animation-delay:.3s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(37,99,235,.2);color:#60a5fa;border:1px solid rgba(37,99,235,.3)"><i
                                    class="bi bi-globe2"></i> Forex</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">Smart Trading with CopyTrading</div>
                            <p class="card-desc">Learn advanced copy trading strategies and automation techniques for
                                consistent forex profits.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 11</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">10:30 AM</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">312</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#2563eb">JR</div>
                                <div>
                                    <div class="cs-name">James Rodriguez</div>
                                    <div class="cs-role">Forex Strategy Expert</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 — METAL -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d1 event-item" data-cat="metal">
                    <div class="event-card ec-metal">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#130e02" />
                                    <line x1="0" y1="42" x2="300" y2="42" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <line x1="0" y1="85" x2="300" y2="85" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <defs>
                                        <linearGradient id="g2" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#f0a500" stop-opacity=".3" />
                                            <stop offset="100%" stop-color="#f0a500" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="0,150 60,140 100,130 140,145 180,115 230,90 280,70 300,60 300,170 0,170"
                                        fill="url(#g2)" />
                                    <polyline class="tl"
                                        points="0,150 60,140 100,130 140,145 180,115 230,90 280,70 300,60"
                                        stroke="#f0a500" style="animation-delay:.5s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(240,165,0,.15);color:#fbbf24;border:1px solid rgba(240,165,0,.3)"><i
                                    class="bi bi-gem"></i> Metals</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">Gold Market Deep Dive Webinar</div>
                            <p class="card-desc">Central bank flows, real yield correlations and COMEX positioning —
                                trade gold like institutions.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 12</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">8:00 PM</span></div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">278</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#d97706">SK</div>
                                <div>
                                    <div class="cs-name">Sarah Kim</div>
                                    <div class="cs-role">Metals &amp; Macro Analyst</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 — COMMODITY -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d2 event-item" data-cat="commodity">
                    <div class="event-card ec-commodity">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#011a10" />
                                    <line x1="0" y1="42" x2="300" y2="42" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <line x1="0" y1="85" x2="300" y2="85" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <defs>
                                        <linearGradient id="g3" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#00b87a" stop-opacity=".3" />
                                            <stop offset="100%" stop-color="#00b87a" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="0,145 50,130 90,140 130,110 170,95 210,105 250,75 300,55 300,170 0,170"
                                        fill="url(#g3)" />
                                    <polyline class="tl"
                                        points="0,145 50,130 90,140 130,110 170,95 210,105 250,75 300,55"
                                        stroke="#00b87a" style="animation-delay:.7s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(0,184,122,.12);color:#34d399;border:1px solid rgba(0,184,122,.25)"><i
                                    class="bi bi-droplet-fill"></i> Commodities</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">Crude Oil &amp; Energy Markets Webinar</div>
                            <p class="card-desc">OPEC+ dynamics, EIA inventory surprises and seasonal commodity trading
                                strategies explained.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 13</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">9:00 PM</span></div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">195</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#059669">AP</div>
                                <div>
                                    <div class="cs-name">Arjun Patel</div>
                                    <div class="cs-role">Commodity Trading Specialist</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 — INDICES -->
                <div class="col-md-6 col-xl-4 mx-auto rv event-item" data-cat="indices">
                    <div class="event-card ec-indices">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#0d0614" />
                                    <line x1="0" y1="42" x2="300" y2="42" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <line x1="0" y1="85" x2="300" y2="85" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <defs>
                                        <linearGradient id="g4" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#7c3aed" stop-opacity=".3" />
                                            <stop offset="100%" stop-color="#7c3aed" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="0,155 40,145 80,130 110,140 150,110 190,90 230,80 270,60 300,45 300,170 0,170"
                                        fill="url(#g4)" />
                                    <polyline class="tl"
                                        points="0,155 40,145 80,130 110,140 150,110 190,90 230,80 270,60 300,45"
                                        stroke="#7c3aed" style="animation-delay:.4s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(124,58,237,.15);color:#a78bfa;border:1px solid rgba(124,58,237,.3)"><i
                                    class="bi bi-bar-chart-fill"></i> Indices</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">S&amp;P 500 &amp; Nasdaq Index Mastery</div>
                            <p class="card-desc">Trade US indices with gamma exposure tracking, VWAP levels and opening
                                range breakout strategies.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 14</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">10:00 PM</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">341</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#7c3aed">MK</div>
                                <div>
                                    <div class="cs-name">Maya Kapoor</div>
                                    <div class="cs-role">Index &amp; Equity Strategist</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 — STOCKS -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d1 event-item" data-cat="stocks">
                    <div class="event-card ec-stocks">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#01101a" />
                                    <line x1="0" y1="42" x2="300" y2="42" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <line x1="0" y1="85" x2="300" y2="85" stroke="rgba(255,255,255,.04)"
                                        stroke-width="1" />
                                    <defs>
                                        <linearGradient id="g5" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#0891b2" stop-opacity=".3" />
                                            <stop offset="100%" stop-color="#0891b2" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="0,150 50,155 90,135 130,125 165,135 200,105 240,85 280,65 300,50 300,170 0,170"
                                        fill="url(#g5)" />
                                    <polyline class="tl"
                                        points="0,150 50,155 90,135 130,125 165,135 200,105 240,85 280,65 300,50"
                                        stroke="#0891b2" style="animation-delay:.6s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(8,145,178,.12);color:#22d3ee;border:1px solid rgba(8,145,178,.25)"><i
                                    class="bi bi-graph-up-arrow"></i> Stocks</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">Stock Momentum &amp; Earnings Plays</div>
                            <p class="card-desc">Sector rotation, dark pool signals, short squeeze setups and earnings
                                catalyst trading strategies.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 15</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">11:00 PM</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">224</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#0891b2">RP</div>
                                <div>
                                    <div class="cs-name">Raj Pillai</div>
                                    <div class="cs-role">Equity &amp; Options Trader</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 — METAL -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d2 event-item" data-cat="metal">
                    <div class="event-card ec-metal">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#130e02" />
                                    <defs>
                                        <linearGradient id="g6" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#f0a500" stop-opacity=".25" />
                                            <stop offset="100%" stop-color="#f0a500" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon points="0,160 60,150 110,155 150,130 190,110 240,95 300,70 300,170 0,170"
                                        fill="url(#g6)" />
                                    <polyline class="tl" points="0,160 60,150 110,155 150,130 190,110 240,95 300,70"
                                        stroke="#f0a500" style="animation-delay:.8s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(240,165,0,.15);color:#fbbf24;border:1px solid rgba(240,165,0,.3)"><i
                                    class="bi bi-gem"></i> Metals</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">Silver &amp; Copper Trading Strategies</div>
                            <p class="card-desc">Industrial metals, silver outperformance signals and the copper-economy
                                correlation explained.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 16</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">12:00 PM</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">187</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#d97706">SK</div>
                                <div>
                                    <div class="cs-name">Sarah Kim</div>
                                    <div class="cs-role">Metals Analyst</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 7 — FOREX -->
                <div class="col-md-6 col-xl-4 mx-auto rv event-item" data-cat="forex">
                    <div class="event-card ec-forex">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#0d1521" />
                                    <defs>
                                        <linearGradient id="g7" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#2563eb" stop-opacity=".25" />
                                            <stop offset="100%" stop-color="#2563eb" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon points="0,155 70,145 120,130 160,140 200,110 250,85 300,65 300,170 0,170"
                                        fill="url(#g7)" />
                                    <polyline class="tl" points="0,155 70,145 120,130 160,140 200,110 250,85 300,65"
                                        stroke="#2563eb" style="animation-delay:.3s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(37,99,235,.2);color:#60a5fa;border:1px solid rgba(37,99,235,.3)"><i
                                    class="bi bi-globe2"></i> Forex</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">GBP/USD &amp; EUR/USD Price Action</div>
                            <p class="card-desc">Smart Money Concepts applied to major forex pairs — liquidity grabs,
                                FVGs and multi-TF bias.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 17</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">1:00 PM</span></div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">299</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#1d4ed8">JR</div>
                                <div>
                                    <div class="cs-name">James Rodriguez</div>
                                    <div class="cs-role">SMC Forex Specialist</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 8 — COMMODITY -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d1 event-item" data-cat="commodity">
                    <div class="event-card ec-commodity">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#011a10" />
                                    <defs>
                                        <linearGradient id="g8" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#00b87a" stop-opacity=".25" />
                                            <stop offset="100%" stop-color="#00b87a" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="0,148 55,158 95,138 135,148 175,118 215,95 260,78 300,58 300,170 0,170"
                                        fill="url(#g8)" />
                                    <polyline class="tl"
                                        points="0,148 55,158 95,138 135,148 175,118 215,95 260,78 300,58"
                                        stroke="#00b87a" style="animation-delay:.5s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(0,184,122,.12);color:#34d399;border:1px solid rgba(0,184,122,.25)"><i
                                    class="bi bi-droplet-fill"></i> Commodities</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">Natural Gas &amp; Agricultural Markets</div>
                            <p class="card-desc">Weather derivatives, crop reports and seasonal patterns in agricultural
                                commodity trading.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 18</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">2:00 PM</span></div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">164</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#059669">AP</div>
                                <div>
                                    <div class="cs-name">Arjun Patel</div>
                                    <div class="cs-role">Commodity Strategist</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 9 — INDICES -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d2 event-item" data-cat="indices">
                    <div class="event-card ec-indices">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#0d0614" />
                                    <defs>
                                        <linearGradient id="g9" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#7c3aed" stop-opacity=".25" />
                                            <stop offset="100%" stop-color="#7c3aed" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="0,152 45,142 85,128 120,138 158,108 198,88 238,78 278,58 300,44 300,170 0,170"
                                        fill="url(#g9)" />
                                    <polyline class="tl"
                                        points="0,152 45,142 85,128 120,138 158,108 198,88 238,78 278,58 300,44"
                                        stroke="#7c3aed" style="animation-delay:.7s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(124,58,237,.15);color:#a78bfa;border:1px solid rgba(124,58,237,.3)"><i
                                    class="bi bi-bar-chart-fill"></i> Indices</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">DAX &amp; FTSE European Indices</div>
                            <p class="card-desc">Trading European indices — ECB policy impact, opening ranges and
                                cross-market correlations.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 19</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">3:00 PM</span></div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">218</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#6d28d9">MK</div>
                                <div>
                                    <div class="cs-name">Maya Kapoor</div>
                                    <div class="cs-role">Global Indices Strategist</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 10 — STOCKS -->
                <div class="col-md-6 col-xl-4 mx-auto rv event-item" data-cat="stocks">
                    <div class="event-card ec-stocks">
                        <div class="card-thumb">
                            <div class="thumb-chart">
                                <svg class="thumb-svg" viewBox="0 0 300 170" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="300" height="170" fill="#01101a" />
                                    <defs>
                                        <linearGradient id="g10" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#0891b2" stop-opacity=".25" />
                                            <stop offset="100%" stop-color="#0891b2" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                    <polygon
                                        points="0,155 50,160 95,142 135,132 170,142 205,112 245,90 285,68 300,54 300,170 0,170"
                                        fill="url(#g10)" />
                                    <polyline class="tl"
                                        points="0,155 50,160 95,142 135,132 170,142 205,112 245,90 285,68 300,54"
                                        stroke="#0891b2" style="animation-delay:.9s" />
                                </svg>
                            </div>
                            <div class="thumb-overlay"></div>
                            <span class="thumb-cat-tag"
                                style="background:rgba(8,145,178,.12);color:#22d3ee;border:1px solid rgba(8,145,178,.25)"><i
                                    class="bi bi-graph-up-arrow"></i> Stocks</span>
                            <span class="thumb-upcoming">Upcoming</span>
                            <div class="thumb-play"><i class="bi bi-play-fill"></i></div>
                        </div>
                        <div class="card-body-inner">
                            <div class="card-title">Tech Stocks &amp; FAANG Earnings</div>
                            <p class="card-desc">Options flow, earnings catalysts and valuation analysis for high-cap US
                                technology stocks.</p>
                            <div class="card-meta-row">
                                <div class="meta-chip"><i class="bi bi-calendar3"></i><span class="val">Jun 20</span>
                                </div>
                                <div class="meta-chip"><i class="bi bi-clock"></i><span class="val">4:00 PM</span></div>
                                <div class="meta-chip"><i class="bi bi-people-fill"></i><span class="val">256</span>
                                </div>
                            </div>
                            <div class="card-speaker">
                                <div class="cs-av" style="background:#0e7490">RP</div>
                                <div>
                                    <div class="cs-name">Raj Pillai</div>
                                    <div class="cs-role">Tech Equity Analyst</div>
                                </div>
                                <a href="#" class="card-join-btn"><i class="bi bi-play-fill"></i> Join</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /eventsGrid -->

            <!-- no results -->
            <div id="noResults" style="display:none" class="text-center py-5">
                <i class="bi bi-calendar-x" style="font-size:2.5rem;color:var(--zed-border-color)"></i>
                <p style="color:var(--zed-secondary);margin-top:.8rem;font-size:.9rem">No webinars found for this market
                    category.<br>Check back soon or select "All Markets".</p>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="cta-band">
        <div class="container" style="position:relative;z-index:1">
            <h2>Never Miss a Live Webinar</h2>
            <p>Get early access, session reminders and exclusive expert notes delivered to your inbox before every
                event.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="btn-white"><i class="bi bi-bell-fill"></i> Get Notified Free</a>
                <a href="#events" class="btn btn-outline-light rounded-pill px-4 fw-bold" style="font-size:.9rem">Browse
                    All Events</a>
            </div>
        </div>
    </section>

    <script>
        // Navbar scroll
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => nav.classList.toggle('raised', scrollY > 40));

        // Scroll reveal
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
        }, { threshold: 0.09 });
        document.querySelectorAll('.rv').forEach(el => io.observe(el));

        // Filter tabs
        document.querySelectorAll('.ftab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.ftab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                const cat = tab.dataset.cat;
                let visible = 0;
                document.querySelectorAll('.event-item').forEach(card => {
                    const match = cat === 'all' || card.dataset.cat === cat;
                    card.style.display = match ? '' : 'none';
                    if (match) visible++;
                });
                document.getElementById('visibleCount').textContent = visible;
                document.getElementById('noResults').style.display = visible === 0 ? 'block' : 'none';
            });
        });

        // Countdown to June 11, 2026 10:30 AM
        function updateCountdown() {
            const target = new Date('2026-06-11T10:30:00');
            const now = new Date();
            const diff = Math.max(target - now, 0);
            const d = Math.floor(diff / 86400000);
            const h = Math.floor((diff % 86400000) / 3600000);
            const m = Math.floor((diff % 3600000) / 60000);
            const s = Math.floor((diff % 60000) / 1000);
            document.getElementById('cd-d').textContent = String(d).padStart(2, '0');
            document.getElementById('cd-h').textContent = String(h).padStart(2, '0');
            document.getElementById('cd-m').textContent = String(m).padStart(2, '0');
            document.getElementById('cd-s').textContent = String(s).padStart(2, '0');
        }
        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
<?php
include_once ('elements/footer.php');
?>
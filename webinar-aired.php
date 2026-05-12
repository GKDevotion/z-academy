<?php 
include_once ('elements/header.php');
?>

    <style>
        :root {
            --aired: #6b7280;
        }

        /* ── HERO ────────────────────────────────── */
        .hero {
            padding: 92px 0 68px;
            text-align: center;
            position: relative;
            overflow: hidden;
            background: var(--zed-backgound-color)
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
            background: rgba(107, 114, 128, .12);
            border: 1px solid rgba(107, 114, 128, .25);
            color: var(--aired);
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
            color: var(--zed-dark-text);
            line-height: 1.04;
            animation: riseUp .7s .1s ease both
        }

        .hero h1 em {
            font-style: normal;
            color: var(--zed-primary)
        }

        .hero p.tagline {
            font-size: 1.02rem;
            color: var(--zed-secondary);
            max-width: 540px;
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
            animation: riseUp .7s .3s ease both
        }

        .ftab {
            display: flex;
            align-items: center;
            gap: .45rem;
            background: var(--zed-light-bg);
            border: 1.5px solid var(--zed-border-color);
            border-radius: 50px;
            padding: .44rem 1.1rem;
            font-size: .82rem;
            font-weight: 600;
            color: var(--zed-secondary);
            cursor: pointer;
            transition: all .25s;
            user-select: none
        }

        .ftab:hover {
            border-color: rgba(232, 17, 26, .3);
            color: var(--zed-dark-text)
        }

        .ftab.active {
            background: var(--zed-primary);
            border-color: var(--zed-primary);
            color: #fff;
            box-shadow: 0 4px 14px var(--zed-light-red-hover)
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

        .fi-crypto {
            background: rgba(249, 115, 22, .1);
            color: #ea580c
        }

        .fi-macro {
            background: rgba(107, 114, 128, .1);
            color: var(--aired)
        }

        .ftab.active .fi {
            background: rgba(255, 255, 255, .2);
            color: #fff
        }

        /* stat row */
        .stat-row {
            display: flex;
            justify-content: center;
            gap: 2.2rem;
            flex-wrap: wrap;
            margin-top: 2.2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--zed-border-color);
            animation: riseUp .7s .4s ease both
        }

        .s-stat .num {
            
            font-size: 1.7rem;
            color: var(--zed-dark-text)
        }

        .s-stat .num span {
            color: var(--zed-primary)
        }

        .s-stat .lbl {
            font-size: .68rem;
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

        /* ── FEATURED REPLAY ─────────────────────── */
        .featured-sec {
            padding: 52px 0 0;
            position: relative;
            z-index: 1
        }

        .feat-card {
            background: var(--zed-dark-text);
            border-radius: 20px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            box-shadow: 0 24px 64px rgba(0, 0, 0, .2)
        }

        @media(max-width:767px) {
            .feat-card {
                grid-template-columns: 1fr
            }
        }

        /* replay video side */
        .replay-side {
            position: relative;
            min-height: 300px;
            background: #000;
            overflow: hidden
        }

        .rs-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #0d0d0d 0%, #1a1a2e 100%)
        }

        /* waveform animation */
        .waveform {
            position: absolute;
            bottom: 1.2rem;
            left: 1.2rem;
            right: 1.2rem;
            display: flex;
            align-items: flex-end;
            gap: 3px;
            height: 50px
        }

        .wbar {
            width: 4px;
            border-radius: 2px;
            background: rgba(232, 17, 26, .6);
            animation: waveAnim 1.2s ease-in-out infinite
        }

        @keyframes waveAnim {

            0%,
            100% {
                height: 8px;
                opacity: .4
            }

            50% {
                height: var(--h, 30px);
                opacity: 1
            }
        }

        /* chart overlay */
        .rs-chart {
            position: absolute;
            inset: 0
        }

        .rs-svg {
            width: 100%;
            height: 100%
        }

        .rsl {
            fill: none;
            stroke: var(--zed-primary);
            stroke-width: 2;
            stroke-dasharray: 700;
            stroke-dashoffset: 700;
            animation: drawRS 3s ease forwards
        }

        .rsl2 {
            fill: none;
            stroke: rgba(0, 184, 122, .5);
            stroke-width: 1.5;
            stroke-dasharray: 500;
            stroke-dashoffset: 500;
            animation: drawRS 3.5s .5s ease forwards
        }

        @keyframes drawRS {
            to {
                stroke-dashoffset: 0
            }
        }

        /* replay progress bar */
        .replay-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: rgba(255, 255, 255, .1)
        }

        .rp-fill {
            height: 100%;
            background: var(--zed-primary);
            animation: progressPlay 12s linear infinite
        }

        @keyframes progressPlay {
            0% {
                width: 0
            }

            100% {
                width: 100%
            }
        }

        .replay-badge {
            position: absolute;
            top: .85rem;
            left: .9rem;
            background: rgba(107, 114, 128, .85);
            color: #fff;
            font-size: .62rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .28rem .75rem;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: .4rem;
            backdrop-filter: blur(4px)
        }

        .replay-badge i {
            color: #d1d5db;
            font-size: .7rem
        }

        .views-badge {
            position: absolute;
            top: .85rem;
            right: .9rem;
            background: rgba(0, 0, 0, .55);
            color: rgba(255, 255, 255, .7);
            font-size: .65rem;
            font-weight: 600;
            padding: .25rem .7rem;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: .35rem;
            backdrop-filter: blur(4px)
        }

        .replay-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 58px;
            height: 58px;
            background: rgba(232, 17, 26, .9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: #fff;
            cursor: pointer;
            border: 2px solid rgba(255, 255, 255, .25);
            box-shadow: 0 0 0 0 rgba(232, 17, 26, .4);
            animation: rbPulse 2.5s infinite;
            text-decoration: none;
            transition: background .2s, transform .2s
        }

        .replay-btn:hover {
            background: var(--zed-primary);
            transform: translate(-50%, -50%) scale(1.1);
            color: #fff
        }

        @keyframes rbPulse {
            0% {
                box-shadow: 0 0 0 0 rgba(232, 17, 26, .5)
            }

            70% {
                box-shadow: 0 0 0 16px rgba(232, 17, 26, 0)
            }

            100% {
                box-shadow: 0 0 0 0 rgba(232, 17, 26, 0)
            }
        }

        /* duration tag */
        .duration-tag {
            position: absolute;
            bottom: 1.2rem;
            right: .9rem;
            background: rgba(0, 0, 0, .7);
            color: #fff;
            font-size: .7rem;
            font-weight: 700;
            padding: .28rem .65rem;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: .35rem
        }

        /* feat info side */
        .feat-info {
            padding: 2.3rem 2.1rem;
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        .feat-cat {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            font-size: .67rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--zed-primary);
            background: rgba(232, 17, 26, .08);
            border: 1px solid rgba(232, 17, 26, .2);
            padding: .24rem .75rem;
            border-radius: 50px;
            margin-bottom: .9rem
        }

        .feat-info h2 {
            
            font-size: 1.75rem;
            color: #fff;
            line-height: 1.15;
            margin-bottom: .65rem
        }

        .feat-info p {
            font-size: .86rem;
            color: rgba(255, 255, 255, .45);
            line-height: 1.68;
            margin-bottom: 1.2rem
        }

        .feat-meta-row {
            display: flex;
            flex-direction: column;
            gap: .45rem;
            margin-bottom: 1.2rem
        }

        .fmi {
            display: flex;
            align-items: center;
            gap: .6rem;
            font-size: .81rem;
            color: rgba(255, 255, 255, .5)
        }

        .fmi i {
            color: var(--zed-primary);
            font-size: .88rem;
            width: 15px
        }

        .fmi span {
            color: rgba(255, 255, 255, .82);
            font-weight: 600
        }

        .topic-pills {
            display: flex;
            flex-wrap: wrap;
            gap: .4rem;
            margin-bottom: 1.3rem
        }

        .tp {
            font-size: .68rem;
            font-weight: 600;
            color: rgba(255, 255, 255, .55);
            background: rgba(255, 255, 255, .06);
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 50px;
            padding: .2rem .65rem
        }

        .btn-replay {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: .86rem;
            font-weight: 700;
            padding: .78rem 1.8rem;
            box-shadow: 0 6px 18px var(--zed-light-red-hover);
            transition: background .25s, transform .2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            align-self: flex-start
        }

        .btn-replay:hover {
            background: var(--zed-primary-hover);
            color: #fff;
            transform: translateY(-2px)
        }

        /* ── MARQUEE ──────────────────────────────── */
        .mq-band {
            background: var(--zed-dark-text);
            padding: 2.2rem 0;
            overflow: hidden;
            margin-top: 2.5rem
        }

        .mq-row {
            overflow: hidden
        }

        .mq-row+.mq-row {
            margin-top: .8rem
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
            gap: .5rem;
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
            color: var(--zed-primary);
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

        /* ── AIRED CARDS ─────────────────────────── */
        .aired-section {
            padding: 52px 0 80px;
            position: relative;
            z-index: 1
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
            font-size: .9rem;
            color: var(--zed-secondary);
            max-width: 440px;
            line-height: 1.65
        }

        .aired-card {
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

        .aired-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 22px 52px rgba(0, 0, 0, .09);
            border-color: rgba(232, 17, 26, .22)
        }

        /* left border on hover */
        .aired-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 3px;
            transform: scaleY(0);
            transform-origin: bottom;
            transition: transform .35s ease
        }

        .aired-card:hover::before {
            transform: scaleY(1)
        }

        .ac-forex::before {
            background: var(--blue)
        }

        .ac-metal::before {
            background: var(--gold)
        }

        .ac-commodity::before {
            background: var(--zed-success-hover)
        }

        .ac-indices::before {
            background: var(--purple)
        }

        .ac-stocks::before {
            background: var(--teal)
        }

        .ac-crypto::before {
            background: #ea580c
        }

        .ac-macro::before {
            background: var(--aired)
        }

        /* card thumbnail */
        .ac-thumb {
            position: relative;
            /* height: 160px; */
            overflow: hidden;
            flex-shrink: 0;
            background: #0d0d0d
        }

        .ac-thumb svg {
            width: 100%;
            height: 100%;
            display: block
        }

        .ac-thumb-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 40%, rgba(0, 0, 0, .55) 100%)
        }

        .ac-play {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 38px;
            height: 38px;
            background: rgba(232, 17, 26, .88);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: .85rem;
            opacity: 0;
            transition: opacity .25s, transform .25s;
            cursor: pointer
        }

        .aired-card:hover .ac-play {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1)
        }

        .ac-cat {
            position: absolute;
            top: .7rem;
            left: .8rem;
            font-size: .62rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            padding: .22rem .65rem;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: .35rem
        }

        .ac-aired-tag {
            position: absolute;
            top: .7rem;
            right: .8rem;
            background: rgba(107, 114, 128, .8);
            color: #fff;
            font-size: .58rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            padding: .2rem .6rem;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: .3rem;
            backdrop-filter: blur(3px)
        }

        .ac-duration {
            position: absolute;
            bottom: .65rem;
            right: .75rem;
            background: rgba(0, 0, 0, .7);
            color: #fff;
            font-size: .65rem;
            font-weight: 700;
            padding: .22rem .55rem;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: .3rem
        }

        /* animated line in thumb */
        .at-line {
            fill: none;
            stroke-width: 2;
            stroke-dasharray: 280;
            stroke-dashoffset: 280;
            animation: drawATL 2s ease forwards
        }

        @keyframes drawATL {
            to {
                stroke-dashoffset: 0
            }
        }

        /* card body */
        .ac-body {
            padding: 1.15rem 1.2rem;
            flex: 1;
            display: flex;
            flex-direction: column
        }

        .ac-date-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: .55rem
        }

        .ac-date {
            font-size: .71rem;
            font-weight: 600;
            color: var(--zed-secondary);
            display: flex;
            align-items: center;
            gap: .35rem
        }

        .ac-date i {
            color: var(--zed-primary);
            font-size: .68rem
        }

        .ac-views {
            font-size: .68rem;
            font-weight: 600;
            color: var(--zed-secondary);
            display: flex;
            align-items: center;
            gap: .3rem
        }

        .ac-views i {
            font-size: .65rem
        }

        .ac-title {
            
            font-size: 1.02rem;
            color: var(--zed-dark-text);
            margin-bottom: .38rem;
            line-height: 1.3
        }

        .ac-desc {
            font-size: .79rem;
            color: var(--zed-secondary);
            line-height: 1.6;
            margin-bottom: .85rem;
            flex: 1
        }

        /* topics 2-col */
        .ac-topics {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: .22rem .6rem;
            margin-bottom: .85rem
        }

        .act {
            display: flex;
            align-items: center;
            gap: .4rem;
            font-size: .77rem;
            color: var(--zed-dark-text);
            font-weight: 500
        }

        .act i {
            color: var(--zed-primary);
            font-size: .6rem;
            flex-shrink: 0
        }

        /* card footer */
        .ac-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: .7rem;
            border-top: 1px solid var(--zed-border-color);
            margin-top: auto
        }

        .ac-speaker {
            display: flex;
            align-items: center;
            gap: .55rem
        }

        .ac-av {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            font-size: .62rem;
            font-weight: 700;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0
        }

        .ac-spname {
            font-size: .77rem;
            font-weight: 700;
            color: var(--zed-dark-text)
        }

        .ac-sprole {
            font-size: .66rem;
            color: var(--zed-secondary)
        }

        .btn-watch {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: .7rem;
            font-weight: 700;
            padding: .36rem .9rem;
            transition: background .2s, transform .15s;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .3rem;
            flex-shrink: 0
        }

        .btn-watch:hover {
            background: var(--zed-primary-hover);
            color: #fff;
            transform: translateY(-1px)
        }

        .btn-watch-outline {
            background: transparent;
            color: var(--zed-primary);
            border: 1.5px solid rgba(232, 17, 26, .3);
            border-radius: 50px;
            font-size: .7rem;
            font-weight: 700;
            padding: .34rem .88rem;
            transition: all .2s;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .3rem;
            flex-shrink: 0
        }

        .btn-watch-outline:hover {
            background: var(--zed-primary);
            color: #fff;
            border-color: var(--zed-primary)
        }

        /* ── NO RESULTS ──────────────────────────── */
        #noResults {
            display: none;
            text-align: center;
            padding: 3rem 0
        }

        /* ── CTA ─────────────────────────────────── */
        .cta-band {
            background: var(--zed-dark-text);
            padding: 66px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-top: 1px solid rgba(255, 255, 255, .06)
        }

        .cta-band::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: linear-gradient(rgba(232, 17, 26, .035) 1px, transparent 1px), linear-gradient(90deg, rgba(232, 17, 26, .035) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 20%, transparent 80%)
        }

        .cta-band h2 {
            
            font-size: clamp(2rem, 5vw, 3rem);
            color: #fff;
            position: relative;
            z-index: 1
        }

        .cta-band h2 em {
            font-style: normal;
            color: var(--zed-primary)
        }

        .cta-band p {
            color: rgba(255, 255, 255, .45);
            max-width: 460px;
            margin: .8rem auto 2rem;
            position: relative;
            z-index: 1
        }

        .btn-cta-w {
            background: #fff;
            color: var(--zed-dark-text);
            border: none;
            border-radius: 50px;
            font-size: .9rem;
            font-weight: 700;
            padding: .82rem 2.2rem;
            transition: transform .2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            position: relative;
            z-index: 1
        }

        .btn-cta-w:hover {
            transform: translateY(-2px);
            color: var(--zed-dark-text)
        }

        .btn-cta-r {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: .9rem;
            font-weight: 700;
            padding: .82rem 2.2rem;
            box-shadow: 0 6px 20px var(--zed-light-red-hover);
            transition: background .25s, transform .2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            position: relative;
            z-index: 1
        }

        .btn-cta-r:hover {
            background: var(--zed-primary-hover);
            color: #fff;
            transform: translateY(-2px)
        }

        /* ── SCROLL REVEAL ────────────────────────── */
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
            transition-delay: .08s
        }

        .rv-d2 {
            transition-delay: .16s
        }

        .rv-d3 {
            transition-delay: .24s
        }

    </style>
    <!-- HERO -->
    <section class="hero">
        <div class="hero-glow"></div>
        <div class="container position-relative" style="z-index:1">
            <div class="hero-badge"><i class="bi bi-camera-reels-fill"></i> Previously Aired Sessions</div>
            <h1><em>Webinars</em> Aired</h1>
            <p class="tagline">Explore previously conducted webinars, learn from expert sessions, and revisit key market
                insights across Forex, Metals, Commodities, Indices, Stocks &amp; more — anytime.</p>

            <!-- filter tabs -->
            <div class="filter-tabs" id="filterTabs">
                <div class="ftab active" data-cat="all"><span class="fi fi-all"><i
                            class="bi bi-grid-3x3-gap-fill"></i></span>All Topics</div>
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
                <div class="ftab" data-cat="crypto"><span class="fi fi-crypto"><i
                            class="bi bi-currency-bitcoin"></i></span>Crypto</div>
                <div class="ftab" data-cat="macro"><span class="fi fi-macro"><i class="bi bi-bank2"></i></span>Macro
                </div>
            </div>

            <div class="stat-row">
                <div class="s-stat">
                    <div class="num">8<span>+</span></div>
                    <div class="lbl">Sessions Aired</div>
                </div>
                <div class="s-stat">
                    <div class="num">22<span>K+</span></div>
                    <div class="lbl">Total Views</div>
                </div>
                <div class="s-stat">
                    <div class="num">7<span>+</span></div>
                    <div class="lbl">Market Topics</div>
                </div>
                <div class="s-stat">
                    <div class="num">Free<span>.</span></div>
                    <div class="lbl">Watch Replay</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED REPLAY -->
    <section class="featured-sec">
        <div class="container rv">
            <div class="feat-card">
                <!-- REPLAY VIDEO SIDE -->
                <div class="replay-side">
                    <div class="rs-bg"></div>
                    <div class="rs-chart">
                        <svg class="rs-svg" viewBox="0 0 500 300" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none">
                            <line x1="0" y1="75" x2="500" y2="75" stroke="rgba(255,255,255,.04)" stroke-width="1" />
                            <line x1="0" y1="150" x2="500" y2="150" stroke="rgba(255,255,255,.04)" stroke-width="1" />
                            <line x1="0" y1="225" x2="500" y2="225" stroke="rgba(255,255,255,.04)" stroke-width="1" />
                            <line x1="125" y1="0" x2="125" y2="300" stroke="rgba(255,255,255,.04)" stroke-width="1" />
                            <line x1="250" y1="0" x2="250" y2="300" stroke="rgba(255,255,255,.04)" stroke-width="1" />
                            <line x1="375" y1="0" x2="375" y2="300" stroke="rgba(255,255,255,.04)" stroke-width="1" />
                            <defs>
                                <linearGradient id="rfg" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#E8111A" stop-opacity=".22" />
                                    <stop offset="100%" stop-color="#E8111A" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                            <polygon
                                points="0,240 70,210 130,200 170,220 220,175 275,145 320,155 375,115 430,90 500,65 500,300 0,300"
                                fill="url(#rfg)" opacity=".7" />
                            <polyline class="rsl"
                                points="0,240 70,210 130,200 170,220 220,175 275,145 320,155 375,115 430,90 500,65"
                                style="animation-delay:.2s" />
                            <polyline class="rsl2"
                                points="0,258 80,244 140,248 200,230 260,215 320,198 380,185 440,170 500,158"
                                style="animation-delay:.7s" />
                        </svg>
                    </div>
                    <!-- waveform bars (replay indicator) -->
                    <div class="waveform">
                        <div class="wbar" style="--h:12px;animation-delay:0s"></div>
                        <div class="wbar" style="--h:28px;animation-delay:.1s"></div>
                        <div class="wbar" style="--h:20px;animation-delay:.2s"></div>
                        <div class="wbar" style="--h:38px;animation-delay:.15s"></div>
                        <div class="wbar" style="--h:16px;animation-delay:.3s"></div>
                        <div class="wbar" style="--h:44px;animation-delay:.05s"></div>
                        <div class="wbar" style="--h:22px;animation-delay:.25s"></div>
                        <div class="wbar" style="--h:32px;animation-delay:.35s"></div>
                        <div class="wbar" style="--h:14px;animation-delay:.1s"></div>
                        <div class="wbar" style="--h:40px;animation-delay:.2s"></div>
                        <div class="wbar" style="--h:18px;animation-delay:.4s"></div>
                        <div class="wbar" style="--h:30px;animation-delay:.12s"></div>
                        <div class="wbar" style="--h:24px;animation-delay:.28s"></div>
                        <div class="wbar" style="--h:36px;animation-delay:.08s"></div>
                        <div class="wbar" style="--h:20px;animation-delay:.32s"></div>
                        <div class="wbar" style="--h:42px;animation-delay:.18s"></div>
                        <div class="wbar" style="--h:16px;animation-delay:.22s"></div>
                        <div class="wbar" style="--h:34px;animation-delay:.06s"></div>
                        <div class="wbar" style="--h:28px;animation-delay:.38s"></div>
                        <div class="wbar" style="--h:12px;animation-delay:.14s"></div>
                    </div>
                    <div class="replay-badge"><i class="bi bi-camera-reels-fill"></i> Aired — June 11, 2026</div>
                    <div class="views-badge"><i class="bi bi-eye-fill"></i> 4,218 views</div>
                    <a href="#" class="replay-btn"><i class="bi bi-play-fill"></i></a>
                    <div class="duration-tag"><i class="bi bi-clock-fill" style="color:var(--zed-primary)"></i> 1h 45m</div>
                    <div class="replay-progress">
                        <div class="rp-fill"></div>
                    </div>
                </div>

                <!-- FEAT INFO -->
                <div class="feat-info">
                    <div class="feat-cat"><i class="bi bi-globe2"></i> Forex &amp; Copy Trading</div>
                    <h2>Smart Trading with CopyTrading &amp; Automation</h2>
                    <p>A complete walkthrough of copy trading strategies, automated systems and how beginners can
                        generate consistent returns without manual trading.</p>
                    <div class="feat-meta-row">
                        <div class="fmi"><i class="bi bi-calendar3"></i> Aired: <span>June 11, 2026</span></div>
                        <div class="fmi"><i class="bi bi-clock"></i> Duration: <span>1h 45m</span></div>
                        <div class="fmi"><i class="bi bi-eye-fill"></i> Views: <span>4,218 replays</span></div>
                        <div class="fmi"><i class="bi bi-person-fill"></i> Speaker: <span>James Rodriguez</span></div>
                    </div>
                    <div class="topic-pills">
                        <span class="tp">Intro to CopyTrading</span>
                        <span class="tp">Risk Management</span>
                        <span class="tp">Portfolio Diversification</span>
                        <span class="tp">Live Platform Demo</span>
                        <span class="tp">Selecting Top Traders</span>
                    </div>
                    <a href="#" class="btn-replay"><i class="bi bi-play-circle-fill"></i> Watch Full Replay</a>
                </div>
            </div>
        </div>
    </section>

    <!-- MARQUEE -->
    <div class="mq-band">
        <div class="mq-row">
            <div class="mq-track">
                <span class="mq-tag"><i class="bi bi-camera-reels-fill"></i>CopyTrading Masterclass</span>
                <span class="mq-tag"><i class="bi bi-globe2"></i>Forex Weekly Analysis</span>
                <span class="mq-tag"><i class="bi bi-gem"></i>Gold & Commodities</span>
                <span class="mq-tag"><i class="bi bi-bar-chart-fill"></i>Market Election Special</span>
                <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto Volatility</span>
                <span class="mq-tag"><i class="bi bi-activity"></i>Technical Bootcamp</span>
                <span class="mq-tag"><i class="bi bi-bank2"></i>Interest Rate Impact</span>
                <span class="mq-tag"><i class="bi bi-bar-chart-steps"></i>Futures & Derivatives</span>
                <span class="mq-tag"><i class="bi bi-camera-reels-fill"></i>CopyTrading Masterclass</span>
                <span class="mq-tag"><i class="bi bi-globe2"></i>Forex Weekly Analysis</span>
                <span class="mq-tag"><i class="bi bi-gem"></i>Gold & Commodities</span>
                <span class="mq-tag"><i class="bi bi-bar-chart-fill"></i>Market Election Special</span>
                <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto Volatility</span>
                <span class="mq-tag"><i class="bi bi-activity"></i>Technical Bootcamp</span>
                <span class="mq-tag"><i class="bi bi-bank2"></i>Interest Rate Impact</span>
                <span class="mq-tag"><i class="bi bi-bar-chart-steps"></i>Futures & Derivatives</span>
            </div>
        </div>
        <div class="mq-row">
            <div class="mq-track rev">
                <span class="mq-tag"><i class="bi bi-eye-fill"></i>4,218 Views</span>
                <span class="mq-tag"><i class="bi bi-clock-history"></i>1h 45m Session</span>
                <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
                <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Price Action</span>
                <span class="mq-tag"><i class="bi bi-lightning-charge"></i>SMC Concepts</span>
                <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Oil Trading</span>
                <span class="mq-tag"><i class="bi bi-receipt-cutoff"></i>Macro Economics</span>
                <span class="mq-tag"><i class="bi bi-cpu"></i>Algo Strategies</span>
                <span class="mq-tag"><i class="bi bi-eye-fill"></i>4,218 Views</span>
                <span class="mq-tag"><i class="bi bi-clock-history"></i>1h 45m Session</span>
                <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
                <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Price Action</span>
                <span class="mq-tag"><i class="bi bi-lightning-charge"></i>SMC Concepts</span>
                <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Oil Trading</span>
                <span class="mq-tag"><i class="bi bi-receipt-cutoff"></i>Macro Economics</span>
                <span class="mq-tag"><i class="bi bi-cpu"></i>Algo Strategies</span>
            </div>
        </div>
    </div>

    <!-- AIRED CARDS GRID -->
    <section class="aired-section" id="replays">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6 rv">
                    <span class="eyebrow">Session Archive</span>
                    <h2 class="sec-h">All Aired Sessions</h2>
                    <p class="sec-p">Revisit every expert-led session — from forex and metals to crypto, macro economics
                        and beginner bootcamps.</p>
                </div>
                <div class="col-lg-6 text-lg-end mt-3 mt-lg-0 rv">
                    <span style="font-size:.82rem;color:var(--zed-secondary);font-weight:500"><span id="visibleCount">8</span>
                        sessions available</span>
                </div>
            </div>

            <div class="row g-4" id="airedGrid">

                <!-- CARD 1 — FOREX (CopyTrading Masterclass) -->
                <div class="col-md-6 col-xl-4 mx-auto rv event-item" data-cat="forex">
                    <div class="aired-card ac-forex">
                        <div class="ac-thumb">
                            <svg viewBox="0 0 300 160" xmlns="http://www.w3.org/2000/svg">
                                <rect width="300" height="160" fill="#0d1521" />
                                <line x1="0" y1="40" x2="300" y2="40" stroke="rgba(255,255,255,.04)" stroke-width="1" />
                                <line x1="0" y1="80" x2="300" y2="80" stroke="rgba(255,255,255,.04)" stroke-width="1" />
                                <line x1="0" y1="120" x2="300" y2="120" stroke="rgba(255,255,255,.04)"
                                    stroke-width="1" />
                                <defs>
                                    <linearGradient id="ag1" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#2563eb" stop-opacity=".25" />
                                        <stop offset="100%" stop-color="#2563eb" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <polygon points="0,135 55,122 100,110 140,118 185,88 230,70 280,52 300,42 300,160 0,160"
                                    fill="url(#ag1)" />
                                <polyline class="at-line"
                                    points="0,135 55,122 100,110 140,118 185,88 230,70 280,52 300,42" stroke="#2563eb"
                                    style="animation-delay:.3s" />
                            </svg>
                            <div class="ac-thumb-overlay"></div>
                            <span class="ac-cat"
                                style="background:rgba(37,99,235,.2);color:#60a5fa;border:1px solid rgba(37,99,235,.3)"><i
                                    class="bi bi-globe2"></i>Forex</span>
                            <span class="ac-aired-tag"><i class="bi bi-camera-reels-fill"></i>Aired</span>
                            <div class="ac-play"><i class="bi bi-play-fill"></i></div>
                            <div class="ac-duration"><i class="bi bi-clock-fill" style="color:var(--zed-primary)"></i>1h 32m
                            </div>
                        </div>
                        <div class="ac-body">
                            <div class="ac-date-row">
                                <div class="ac-date"><i class="bi bi-calendar3"></i>June 11, 2026 · 10:30 PM IST</div>
                                <div class="ac-views"><i class="bi bi-eye-fill"></i>3,841</div>
                            </div>
                            <div class="ac-title">CopyTrading Masterclass by Experts</div>
                            <p class="ac-desc">Insights from industry experts on maximising profits and avoiding common
                                mistakes using copy trading tools.</p>
                            <div class="ac-topics">
                                <div class="act"><i class="bi bi-chevron-right"></i>Advanced Copy Strategies</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Platform Optimization</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Performance Tracking</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Real Case Studies</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Avoiding Common Mistakes</div>
                            </div>
                            <div class="ac-footer">
                                <div class="ac-speaker">
                                    <div class="ac-av" style="background:#2563eb">JR</div>
                                    <div>
                                        <div class="ac-spname">James Rodriguez</div>
                                        <div class="ac-sprole">Forex Strategy Expert</div>
                                    </div>
                                </div>
                                <a href="#" class="btn-watch"><i class="bi bi-play-fill"></i>Watch</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 — MACRO (Market Reaction: Election Special) -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d1 event-item" data-cat="macro">
                    <div class="aired-card ac-macro">
                        <div class="ac-thumb">
                            <svg viewBox="0 0 300 160" xmlns="http://www.w3.org/2000/svg">
                                <rect width="300" height="160" fill="#0f0f0f" />
                                <defs>
                                    <linearGradient id="ag2" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#6b7280" stop-opacity=".25" />
                                        <stop offset="100%" stop-color="#6b7280" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <polygon
                                    points="0,140 60,130 100,118 130,130 165,100 200,88 240,78 280,58 300,45 300,160 0,160"
                                    fill="url(#ag2)" />
                                <polyline class="at-line"
                                    points="0,140 60,130 100,118 130,130 165,100 200,88 240,78 280,58 300,45"
                                    stroke="#9ca3af" style="animation-delay:.5s" />
                            </svg>
                            <div class="ac-thumb-overlay"></div>
                            <span class="ac-cat"
                                style="background:rgba(107,114,128,.2);color:#d1d5db;border:1px solid rgba(107,114,128,.3)"><i
                                    class="bi bi-bank2"></i>Macro</span>
                            <span class="ac-aired-tag"><i class="bi bi-camera-reels-fill"></i>Aired</span>
                            <div class="ac-play"><i class="bi bi-play-fill"></i></div>
                            <div class="ac-duration"><i class="bi bi-clock-fill" style="color:var(--zed-primary)"></i>1h 20m
                            </div>
                        </div>
                        <div class="ac-body">
                            <div class="ac-date-row">
                                <div class="ac-date"><i class="bi bi-calendar3"></i>June 11, 2026 · 10:30 PM IST</div>
                                <div class="ac-views"><i class="bi bi-eye-fill"></i>2,977</div>
                            </div>
                            <div class="ac-title">Market Reaction: Election Special</div>
                            <p class="ac-desc">Deep dive into how elections impact global financial markets — historical
                                case studies and live analysis.</p>
                            <div class="ac-topics">
                                <div class="act"><i class="bi bi-chevron-right"></i>Market Volatility</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Risk Hedging Strategies</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Impact on Gold, NASDAQ</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Post-Election Trends</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Historical Case Studies</div>
                            </div>
                            <div class="ac-footer">
                                <div class="ac-speaker">
                                    <div class="ac-av" style="background:#4b5563">VN</div>
                                    <div>
                                        <div class="ac-spname">Vikram Nair</div>
                                        <div class="ac-sprole">Macro Economist</div>
                                    </div>
                                </div>
                                <a href="#" class="btn-watch"><i class="bi bi-play-fill"></i>Watch</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 — COMMODITY + METAL (Gold & Commodities) -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d2 event-item" data-cat="commodity">
                    <div class="aired-card ac-commodity">
                        <div class="ac-thumb">
                            <svg viewBox="0 0 300 160" xmlns="http://www.w3.org/2000/svg">
                                <rect width="300" height="160" fill="#011a10" />
                                <defs>
                                    <linearGradient id="ag3" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#00b87a" stop-opacity=".25" />
                                        <stop offset="100%" stop-color="#00b87a" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <polygon points="0,145 50,140 95,128 138,136 175,105 215,88 255,72 300,50 300,160 0,160"
                                    fill="url(#ag3)" />
                                <polyline class="at-line"
                                    points="0,145 50,140 95,128 138,136 175,105 215,88 255,72 300,50" stroke="#00b87a"
                                    style="animation-delay:.4s" />
                            </svg>
                            <div class="ac-thumb-overlay"></div>
                            <span class="ac-cat"
                                style="background:rgba(0,184,122,.12);color:#34d399;border:1px solid rgba(0,184,122,.25)"><i
                                    class="bi bi-droplet-fill"></i>Commodities</span>
                            <span class="ac-aired-tag"><i class="bi bi-camera-reels-fill"></i>Aired</span>
                            <div class="ac-play"><i class="bi bi-play-fill"></i></div>
                            <div class="ac-duration"><i class="bi bi-clock-fill" style="color:var(--zed-primary)"></i>1h 55m
                            </div>
                        </div>
                        <div class="ac-body">
                            <div class="ac-date-row">
                                <div class="ac-date"><i class="bi bi-calendar3"></i>June 11, 2026 · 10:30 PM IST</div>
                                <div class="ac-views"><i class="bi bi-eye-fill"></i>3,102</div>
                            </div>
                            <div class="ac-title">Gold &amp; Commodities Market Outlook</div>
                            <p class="ac-desc">Analysis of gold, oil and commodity trends — identifying trading
                                opportunities through macro drivers.</p>
                            <div class="ac-topics">
                                <div class="act"><i class="bi bi-chevron-right"></i>Gold Price Drivers</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Commodity Cycles</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Oil Market Analysis</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Trading Opportunities</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Inflation Impact</div>
                            </div>
                            <div class="ac-footer">
                                <div class="ac-speaker">
                                    <div class="ac-av" style="background:#059669">AP</div>
                                    <div>
                                        <div class="ac-spname">Arjun Patel</div>
                                        <div class="ac-sprole">Commodity Specialist</div>
                                    </div>
                                </div>
                                <a href="#" class="btn-watch"><i class="bi bi-play-fill"></i>Watch</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 — FOREX (Forex Market Weekly Analysis) -->
                <div class="col-md-6 col-xl-4 mx-auto rv event-item" data-cat="forex">
                    <div class="aired-card ac-forex">
                        <div class="ac-thumb">
                            <svg viewBox="0 0 300 160" xmlns="http://www.w3.org/2000/svg">
                                <rect width="300" height="160" fill="#0d1521" />
                                <defs>
                                    <linearGradient id="ag4" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#2563eb" stop-opacity=".22" />
                                        <stop offset="100%" stop-color="#2563eb" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <polygon
                                    points="0,148 65,138 105,148 145,118 185,105 225,95 270,68 300,52 300,160 0,160"
                                    fill="url(#ag4)" />
                                <polyline class="at-line"
                                    points="0,148 65,138 105,148 145,118 185,105 225,95 270,68 300,52" stroke="#2563eb"
                                    style="animation-delay:.6s" />
                            </svg>
                            <div class="ac-thumb-overlay"></div>
                            <span class="ac-cat"
                                style="background:rgba(37,99,235,.2);color:#60a5fa;border:1px solid rgba(37,99,235,.3)"><i
                                    class="bi bi-globe2"></i>Forex</span>
                            <span class="ac-aired-tag"><i class="bi bi-camera-reels-fill"></i>Aired</span>
                            <div class="ac-play"><i class="bi bi-play-fill"></i></div>
                            <div class="ac-duration"><i class="bi bi-clock-fill" style="color:var(--zed-primary)"></i>58m</div>
                        </div>
                        <div class="ac-body">
                            <div class="ac-date-row">
                                <div class="ac-date"><i class="bi bi-calendar3"></i>June 11, 2026 · 10:30 PM IST</div>
                                <div class="ac-views"><i class="bi bi-eye-fill"></i>2,634</div>
                            </div>
                            <div class="ac-title">Forex Market Weekly Analysis</div>
                            <p class="ac-desc">Weekly recap of forex trends and currency pair movements — EUR/USD,
                                GBP/USD setups reviewed.</p>
                            <div class="ac-topics">
                                <div class="act"><i class="bi bi-chevron-right"></i>EUR/USD &amp; GBP Trends</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Technical Levels</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Interest Rate Impact</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Trade Setups</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Central Bank Policies</div>
                            </div>
                            <div class="ac-footer">
                                <div class="ac-speaker">
                                    <div class="ac-av" style="background:#1d4ed8">JR</div>
                                    <div>
                                        <div class="ac-spname">James Rodriguez</div>
                                        <div class="ac-sprole">Forex Analyst</div>
                                    </div>
                                </div>
                                <a href="#" class="btn-watch"><i class="bi bi-play-fill"></i>Watch</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 5 — CRYPTO (Crypto Market Volatility) -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d1 event-item" data-cat="crypto">
                    <div class="aired-card ac-crypto">
                        <div class="ac-thumb">
                            <svg viewBox="0 0 300 160" xmlns="http://www.w3.org/2000/svg">
                                <rect width="300" height="160" fill="#110a02" />
                                <defs>
                                    <linearGradient id="ag5" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#ea580c" stop-opacity=".25" />
                                        <stop offset="100%" stop-color="#ea580c" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <polygon
                                    points="0,150 45,158 80,138 115,148 152,118 190,92 230,78 268,55 300,40 300,160 0,160"
                                    fill="url(#ag5)" />
                                <polyline class="at-line"
                                    points="0,150 45,158 80,138 115,148 152,118 190,92 230,78 268,55 300,40"
                                    stroke="#ea580c" style="animation-delay:.4s" />
                            </svg>
                            <div class="ac-thumb-overlay"></div>
                            <span class="ac-cat"
                                style="background:rgba(234,88,12,.15);color:#fb923c;border:1px solid rgba(234,88,12,.3)"><i
                                    class="bi bi-currency-bitcoin"></i>Crypto</span>
                            <span class="ac-aired-tag"><i class="bi bi-camera-reels-fill"></i>Aired</span>
                            <div class="ac-play"><i class="bi bi-play-fill"></i></div>
                            <div class="ac-duration"><i class="bi bi-clock-fill" style="color:var(--zed-primary)"></i>1h 10m
                            </div>
                        </div>
                        <div class="ac-body">
                            <div class="ac-date-row">
                                <div class="ac-date"><i class="bi bi-calendar3"></i>June 11, 2026 · 10:30 PM IST</div>
                                <div class="ac-views"><i class="bi bi-eye-fill"></i>4,512</div>
                            </div>
                            <div class="ac-title">Crypto Market Volatility Explained</div>
                            <p class="ac-desc">Understanding sudden crypto market movements, whale activity and how to
                                trade them profitably.</p>
                            <div class="ac-topics">
                                <div class="act"><i class="bi bi-chevron-right"></i>Bitcoin &amp; Altcoin Trends</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Risk Management</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Market Sentiment Analysis</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Trading Strategies</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Whale Movements</div>
                            </div>
                            <div class="ac-footer">
                                <div class="ac-speaker">
                                    <div class="ac-av" style="background:#c2410c">SK</div>
                                    <div>
                                        <div class="ac-spname">Sarah Kim</div>
                                        <div class="ac-sprole">Crypto Market Analyst</div>
                                    </div>
                                </div>
                                <a href="#" class="btn-watch"><i class="bi bi-play-fill"></i>Watch</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 6 — MACRO (Interest Rate & Inflation Impact) -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d2 event-item" data-cat="macro">
                    <div class="aired-card ac-macro">
                        <div class="ac-thumb">
                            <svg viewBox="0 0 300 160" xmlns="http://www.w3.org/2000/svg">
                                <rect width="300" height="160" fill="#0f0f0f" />
                                <defs>
                                    <linearGradient id="ag6" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#9ca3af" stop-opacity=".22" />
                                        <stop offset="100%" stop-color="#9ca3af" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <polygon
                                    points="0,152 55,145 95,135 130,142 168,112 205,95 245,82 280,60 300,48 300,160 0,160"
                                    fill="url(#ag6)" />
                                <polyline class="at-line"
                                    points="0,152 55,145 95,135 130,142 168,112 205,95 245,82 280,60 300,48"
                                    stroke="#9ca3af" style="animation-delay:.7s" />
                            </svg>
                            <div class="ac-thumb-overlay"></div>
                            <span class="ac-cat"
                                style="background:rgba(107,114,128,.2);color:#d1d5db;border:1px solid rgba(107,114,128,.3)"><i
                                    class="bi bi-bank2"></i>Macro</span>
                            <span class="ac-aired-tag"><i class="bi bi-camera-reels-fill"></i>Aired</span>
                            <div class="ac-play"><i class="bi bi-play-fill"></i></div>
                            <div class="ac-duration"><i class="bi bi-clock-fill" style="color:var(--zed-primary)"></i>1h 25m
                            </div>
                        </div>
                        <div class="ac-body">
                            <div class="ac-date-row">
                                <div class="ac-date"><i class="bi bi-calendar3"></i>June 11, 2026 · 10:30 PM IST</div>
                                <div class="ac-views"><i class="bi bi-eye-fill"></i>2,218</div>
                            </div>
                            <div class="ac-title">Interest Rate &amp; Inflation Impact</div>
                            <p class="ac-desc">How macroeconomic factors affect every trading decision — from forex to
                                equities to commodity allocation.</p>
                            <div class="ac-topics">
                                <div class="act"><i class="bi bi-chevron-right"></i>CPI &amp; Inflation Data</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Market Correlations</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Interest Rate Decisions</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Economic Indicators</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Central Bank Policies</div>
                            </div>
                            <div class="ac-footer">
                                <div class="ac-speaker">
                                    <div class="ac-av" style="background:#374151">VN</div>
                                    <div>
                                        <div class="ac-spname">Vikram Nair</div>
                                        <div class="ac-sprole">Macro Economist</div>
                                    </div>
                                </div>
                                <a href="#" class="btn-watch"><i class="bi bi-play-fill"></i>Watch</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 7 — INDICES (Technical Analysis Bootcamp) -->
                <div class="col-md-6 col-xl-4 mx-auto rv event-item" data-cat="indices">
                    <div class="aired-card ac-indices">
                        <div class="ac-thumb">
                            <svg viewBox="0 0 300 160" xmlns="http://www.w3.org/2000/svg">
                                <rect width="300" height="160" fill="#0d0614" />
                                <defs>
                                    <linearGradient id="ag7" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#7c3aed" stop-opacity=".25" />
                                        <stop offset="100%" stop-color="#7c3aed" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <polygon
                                    points="0,155 48,145 88,132 122,142 160,112 200,90 240,80 275,58 300,44 300,160 0,160"
                                    fill="url(#ag7)" />
                                <polyline class="at-line"
                                    points="0,155 48,145 88,132 122,142 160,112 200,90 240,80 275,58 300,44"
                                    stroke="#7c3aed" style="animation-delay:.5s" />
                            </svg>
                            <div class="ac-thumb-overlay"></div>
                            <span class="ac-cat"
                                style="background:rgba(124,58,237,.15);color:#a78bfa;border:1px solid rgba(124,58,237,.3)"><i
                                    class="bi bi-activity"></i>Tech Analysis</span>
                            <span class="ac-aired-tag"><i class="bi bi-camera-reels-fill"></i>Aired</span>
                            <div class="ac-play"><i class="bi bi-play-fill"></i></div>
                            <div class="ac-duration"><i class="bi bi-clock-fill" style="color:var(--zed-primary)"></i>2h 05m
                            </div>
                        </div>
                        <div class="ac-body">
                            <div class="ac-date-row">
                                <div class="ac-date"><i class="bi bi-calendar3"></i>June 11, 2026 · 10:30 PM IST</div>
                                <div class="ac-views"><i class="bi bi-eye-fill"></i>3,756</div>
                            </div>
                            <div class="ac-title">Technical Analysis Bootcamp</div>
                            <p class="ac-desc">A practical session on mastering charts and indicators — applied to all
                                major markets in real-time.</p>
                            <div class="ac-topics">
                                <div class="act"><i class="bi bi-chevron-right"></i>Candlestick Patterns</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Breakout Strategies</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Support &amp; Resistance</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>RSI &amp; MACD</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Trendlines</div>
                            </div>
                            <div class="ac-footer">
                                <div class="ac-speaker">
                                    <div class="ac-av" style="background:#5b21b6">MK</div>
                                    <div>
                                        <div class="ac-spname">Maya Kapoor</div>
                                        <div class="ac-sprole">Technical Strategist</div>
                                    </div>
                                </div>
                                <a href="#" class="btn-watch"><i class="bi bi-play-fill"></i>Watch</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 8 — INDICES (Futures & Derivatives) -->
                <div class="col-md-6 col-xl-4 mx-auto rv rv-d1 event-item" data-cat="indices">
                    <div class="aired-card ac-indices">
                        <div class="ac-thumb">
                            <svg viewBox="0 0 300 160" xmlns="http://www.w3.org/2000/svg">
                                <rect width="300" height="160" fill="#0d0614" />
                                <defs>
                                    <linearGradient id="ag8" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#7c3aed" stop-opacity=".22" />
                                        <stop offset="100%" stop-color="#7c3aed" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                <polygon
                                    points="0,148 52,155 88,138 125,128 162,138 200,108 240,88 278,65 300,50 300,160 0,160"
                                    fill="url(#ag8)" />
                                <polyline class="at-line"
                                    points="0,148 52,155 88,138 125,128 162,138 200,108 240,88 278,65 300,50"
                                    stroke="#7c3aed" style="animation-delay:.8s" />
                            </svg>
                            <div class="ac-thumb-overlay"></div>
                            <span class="ac-cat"
                                style="background:rgba(124,58,237,.15);color:#a78bfa;border:1px solid rgba(124,58,237,.3)"><i
                                    class="bi bi-bar-chart-steps"></i>Futures</span>
                            <span class="ac-aired-tag"><i class="bi bi-camera-reels-fill"></i>Aired</span>
                            <div class="ac-play"><i class="bi bi-play-fill"></i></div>
                            <div class="ac-duration"><i class="bi bi-clock-fill" style="color:var(--zed-primary)"></i>1h 40m
                            </div>
                        </div>
                        <div class="ac-body">
                            <div class="ac-date-row">
                                <div class="ac-date"><i class="bi bi-calendar3"></i>June 11, 2026 · 10:30 PM IST</div>
                                <div class="ac-views"><i class="bi bi-eye-fill"></i>1,988</div>
                            </div>
                            <div class="ac-title">Futures &amp; Derivatives Deep Dive</div>
                            <p class="ac-desc">Understanding futures trading and advanced derivatives strategies —
                                margin, leverage and hedging explained.</p>
                            <div class="ac-topics">
                                <div class="act"><i class="bi bi-chevron-right"></i>Futures Contracts</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Spread Trading</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Margin &amp; Leverage</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Risk Management</div>
                                <div class="act"><i class="bi bi-chevron-right"></i>Hedging Strategies</div>
                            </div>
                            <div class="ac-footer">
                                <div class="ac-speaker">
                                    <div class="ac-av" style="background:#6d28d9">RP</div>
                                    <div>
                                        <div class="ac-spname">Raj Pillai</div>
                                        <div class="ac-sprole">Derivatives Specialist</div>
                                    </div>
                                </div>
                                <a href="#" class="btn-watch"><i class="bi bi-play-fill"></i>Watch</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /airedGrid -->

            <div id="noResults" style="display:none;text-align:center;padding:3rem 0">
                <i class="bi bi-camera-reels" style="font-size:2.5rem;color:var(--zed-border-color)"></i>
                <p style="color:var(--zed-secondary);margin-top:.8rem;font-size:.9rem">No aired sessions found for this
                    category.<br>Select "All Topics" to see all replays.</p>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="cta-band">
        <div class="container">
            <h2>Don't Miss Our <em>Next Live</em> Session</h2>
            <p>Join upcoming webinars in real-time — Forex, Metals, Commodities, Indices, Stocks &amp; Crypto. Register
                free today.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="btn-cta-r"><i class="bi bi-calendar-event-fill"></i> View Upcoming Webinars</a>
                <a href="#replays" class="btn-cta-w"><i class="bi bi-camera-reels-fill"></i> Browse All Replays</a>
            </div>
        </div>
    </section>

    <script>

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
    </script>
<?php
include_once ('elements/footer.php');
?>
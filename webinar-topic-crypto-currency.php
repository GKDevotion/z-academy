<?php 
include_once ('elements/header.php');
?>

    <style>
        
        /* ── HERO ─────────────────────────────────── */
        .hero {
            padding: 100px 0 72px;
            text-align: center;
            position: relative;
            z-index: 1;
            overflow: hidden
        }

        /* hex grid overlay */
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(249, 115, 22, .06) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none
        }

        .hero-glow {
            position: absolute;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            width: 800px;
            height: 500px;
            background: radial-gradient(ellipse at center, rgba(249, 115, 22, .1) 0%, rgba(232, 17, 26, .06) 40%, transparent 70%);
            pointer-events: none
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .55rem;
            background: rgba(249, 115, 22, .1);
            border: 1px solid rgba(249, 115, 22, .3);
            color: var(--zed-primary-hover);
            
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .2em;
            text-transform: uppercase;
            padding: .36rem 1rem;
            border-radius: 4px;
            margin-bottom: 1.6rem;
            animation: dropIn .55s ease both
        }

        .hero h1 {
            font-size: clamp(2.8rem, 7vw, 5.8rem);
            font-weight: 700;
            line-height: 1.0;
            letter-spacing: -.04em;
            animation: riseUp .7s .1s ease both
        }

        .hero h1 em {
            font-style: normal;
            background: linear-gradient(135deg, var(--zed-primary-hover), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text
        }

        .hero p.sub {
            font-size: 1.05rem;
            color: var(--zed-secondary);
            max-width: 520px;
            margin: 1.2rem auto 2.2rem;
            line-height: 1.65;
            animation: riseUp .7s .2s ease both
        }

        .hero-btns {
            animation: riseUp .7s .3s ease both
        }

        .btn-hero-primary {
            background: linear-gradient(135deg, var(--zed-primary-hover), var(--zed-primary));
            color: #fff;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: .85rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            padding: .95rem 2.6rem;
            box-shadow: 0 10px 32px rgba(249, 115, 22, .3);
            transition: opacity .25s, transform .2s;
            clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 12px, 100% 100%, 12px 100%, 0 calc(100% - 12px))
        }

        .btn-hero-primary:hover {
            opacity: .88;
            color: #fff;
            transform: translateY(-2px)
        }

        .btn-hero-ghost {
            background: transparent;
            color: var(--zed-dark-text);
            border: 1px solid var(--zed-border-color);
            border-radius: 6px;
            text-decoration: none;
            font-size: .85rem;
            font-weight: 600;
            letter-spacing: .06em;
            text-transform: uppercase;
            padding: .95rem 2.2rem;
            transition: border-color .25s, color .25s, background .25s
        }

        .btn-hero-ghost:hover {
            border-color: rgba(249, 115, 22, .5);
            color: var(--zed-primary);
            background: rgba(249, 115, 22, .06)
        }

        /* crypto price pills */
        .price-pills {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: .6rem;
            margin-top: 2.8rem;
            animation: riseUp .7s .45s ease both
        }

        .ppill {
            display: flex;
            align-items: center;
            gap: .55rem;
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-banner-bg-end);
            border-radius: 6px;
            padding: .5rem .9rem;
            
            font-size: .72rem;
            font-weight: 700;
            color: var(--zed-secondary);
            letter-spacing: .04em;
            transition: border-color .25s
        }

        .ppill:hover {
            border-color: var(--zed-border-color)
        }

        .ppill .sym {
            color: #000;
            font-size: .78rem
        }

        .ppill .chg-up {
            color: #4ade80
        }

        .ppill .chg-dn {
            color: #f87171
        }

        .ppill .coin-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0
        }

        /* kpi row */
        .kpi-row {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
            margin-top: 3rem;
            padding-top: 2.5rem;
            border-top: 1px solid var(--zed-banner-bg-end);
            animation: riseUp .7s .55s ease both
        }

        .kpi .knum {
            
            font-size: 1.7rem;
            font-weight: 700;
            color: var(--zed-primary)
        }

        .kpi .knum span {
            color: var(--zed-primary-hover)
        }

        .kpi .klbl {
            
            font-size: .62rem;
            color: var(--zed-secondary);
            letter-spacing: .12em;
            text-transform: uppercase;
            margin-top: .2rem
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

        /* ── SECTION ──────────────────────────────── */
        .sec {
            padding: 84px 0;
            position: relative;
            z-index: 1
        }

        .hdiv {
            height: 1px;
            background: var(--zed-banner-bg-end)
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .45rem;
            
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--zed-primary-hover);
            margin-bottom: .75rem
        }

        .sec-h {
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            font-weight: 700;
            letter-spacing: -.04em;
            line-height: 1.1
        }

        .sec-p {
            font-size: .9rem;
            color: var(--zed-secondary);
            max-width: 460px;
            line-height: 1.7
        }

        /* ── MODULE CARDS ─────────────────────────── */
        .mod-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-banner-bg-end);
            border-radius: 14px;
            padding: 1.6rem;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            transition: transform .38s cubic-bezier(.2, .8, .2, 1), border-color .3s, box-shadow .38s;
        }

        .mod-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--clr, var(--zed-primary-hover));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .35s ease
        }

        .mod-card:hover {
            transform: translateY(-8px);
            border-color: rgba(255, 255, 255, .14);
            box-shadow: 0 20px 52px rgba(0, 0, 0, .4)
        }

        .mod-card:hover::before {
            transform: scaleX(1)
        }

        /* glow on hover */
        .mod-card::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 14px;
            background: radial-gradient(circle at 50% 0%, var(--clr-glow, rgba(249, 115, 22, .06)) 0%, transparent 60%);
            opacity: 0;
            transition: opacity .35s
        }

        .mod-card:hover::after {
            opacity: 1
        }

        .mod-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 1rem;
            flex-shrink: 0;
            position: relative;
            z-index: 1
        }

        .mod-card h5 {
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: .4rem;
            position: relative;
            z-index: 1
        }

        .mod-card .mod-desc {
            font-size: .82rem;
            color: var(--zed-secondary);
            line-height: 1.6;
            margin-bottom: 1.1rem;
            position: relative;
            z-index: 1;
            flex: 1
        }

        .mod-topics {
            list-style: none;
            padding: 0;
            margin: 0 0 1.2rem;
            position: relative;
            z-index: 1
        }

        .mod-topics li {
            display: flex;
            align-items: center;
            gap: .5rem;
            font-size: .8rem;
            padding: .28rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, .04)
        }

        .mod-topics li:last-child {
            border: none
        }

        .mod-topics li i {
            font-size: .6rem;
            color: var(--clr, var(--zed-primary-hover));
            flex-shrink: 0;
            opacity: .8
        }

        .mod-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: .9rem;
            border-top: 1px solid var(--zed-banner-bg-end);
            margin-top: auto;
            position: relative;
            z-index: 1
        }

        .mod-tag {
            
            font-size: .6rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--clr, var(--zed-primary-hover));
            background: var(--clr-bg, rgba(249, 115, 22, .1));
            border: 1px solid var(--clr-border, rgba(249, 115, 22, .2));
            padding: .22rem .65rem;
            border-radius: 4px
        }

        .btn-start {
            background: transparent;
            color: var(--clr, var(--zed-primary-hover));
            border: 1px solid var(--clr-border, rgba(249, 115, 22, .3));
            border-radius: 4px;
            
            font-size: .66rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            padding: .3rem .8rem;
            cursor: pointer;
            transition: background .2s, color .2s, border-color .2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .3rem
        }

        .btn-start:hover {
            background: var(--clr, var(--zed-primary-hover));
            color: #000;
            border-color: var(--clr, var(--zed-primary-hover))
        }

        /* card with number */
        .mod-num {
            position: absolute;
            top: 1rem;
            right: 1.2rem;
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--zed-primary);
            line-height: 1;
            pointer-events: none
        }

        /* ── MARQUEE ──────────────────────────────── */
        .mq-band {
            background: var(--zed-icon-color);
            padding: 2.6rem 0;
            overflow: hidden;
            border-top: 1px solid var(--zed-banner-bg-end);
            border-bottom: 1px solid var(--zed-banner-bg-end)
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
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .07);
            border-radius: 4px;
            padding: .42rem 1rem;
            font-size: .7rem;
            font-weight: 700;
            white-space: nowrap;
            flex-shrink: 0;
            letter-spacing: .06em;
            text-transform: uppercase
        }

        .mq-tag i {
            color: var(--zed-primary-hover);
            font-size: .65rem
        }

        @keyframes mqRun {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-50%)
            }
        }

        /* ── ADVANCED CARD ────────────────────────── */
        .adv-card {
            background: linear-gradient(135deg, var(--zed-light-bg) 0%, rgba(249, 115, 22, .06) 100%);
            border: 1px solid rgba(249, 115, 22, .2);
            border-radius: 16px;
            padding: 2.4rem;
            position: relative;
            overflow: hidden;
            transition: transform .35s, box-shadow .35s;
        }

        .adv-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 24px 60px rgba(249, 115, 22, .08)
        }

        .adv-card::before {
            content: '';
            position: absolute;
            top: -80px;
            right: -80px;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(249, 115, 22, .12) 0%, transparent 70%)
        }

        .adv-badge {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            background: linear-gradient(135deg, var(--zed-primary-hover), var(--zed-primary));
            color: #fff;
            
            font-size: .65rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            padding: .3rem .8rem;
            border-radius: 4px;
            margin-bottom: .9rem
        }

        .adv-card h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: .5rem;
            letter-spacing: -.02em
        }

        .adv-card p {
            font-size: .88rem;
            color: var(--zed-secondary);
            margin-bottom: 1.3rem;
            line-height: 1.65
        }

        .adv-topics-grid {
            display: flex;
            flex-wrap: wrap;
            gap: .5rem
        }

        .adv-tp {
            display: flex;
            align-items: center;
            gap: .4rem;
            font-size: .7rem;
            font-weight: 700;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .09);
            border-radius: 4px;
            padding: .28rem .75rem;
            letter-spacing: .04em
        }

        .adv-tp i {
            color: var(--zed-primary-hover);
            font-size: .6rem
        }

        /* ── WHY LEARN SECTION ────────────────────── */
        .why-card {
            background: rgba(255, 255, 255, .03);
            border: 1px solid var(--zed-banner-bg-end);
            border-radius: 12px;
            padding: 1.5rem;
            transition: background .3s, border-color .3s, transform .3s
        }

        .why-card:hover {
            background: rgba(255, 255, 255, .05);
            border-color: rgba(249, 115, 22, .25);
            transform: translateY(-4px)
        }

        .why-icon {
            width: 44px;
            height: 44px;
            background: rgba(249, 115, 22, .12);
            color: var(--zed-primary-hover);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-bottom: .85rem
        }

        .why-card h6 {
            font-weight: 700;
            margin-bottom: .3rem;
            font-size: .92rem
        }

        .why-card p {
            font-size: .81rem;
            color: var(--zed-secondary);
            margin: 0;
            line-height: 1.6
        }

        /* ── TESTIMONIALS ─────────────────────────── */
        .t-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-banner-bg-end);
            border-radius: 12px;
            padding: 1.7rem;
            height: 100%;
            transition: transform .3s, border-color .3s
        }

        .t-card:hover {
            transform: translateY(-5px);
            border-color: rgba(249, 115, 22, .2)
        }

        .stars {
            color: var(--gold);
            font-size: .85rem;
            margin-bottom: .8rem
        }

        .t-card q {
            font-size: .86rem;
            color: var(--zed-secondary);
            line-height: 1.7;
            font-style: italic;
            display: block;
            margin-bottom: 1.1rem
        }

        .t-av {
            width: 36px;
            height: 36px;
            border-radius: 6px;
            
            font-weight: 700;
            font-size: .78rem;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            background: linear-gradient(135deg, var(--zed-primary-hover), var(--gold))
        }

        .t-name {
            font-weight: 700;
            font-size: .84rem;
            color: #fff
        }

        .t-role {
            font-size: .72rem;
            color: var(--zed-secondary)
        }

        /* ── CTA ──────────────────────────────────── */
        .cta-band {
            background: var(--zed-icon-color);
            padding: 76px 0;
            text-align: center;
            border-top: 1px solid var(--zed-banner-bg-end);
            position: relative;
            overflow: hidden
        }

        .cta-band::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(249, 115, 22, .04) 1px, transparent 1px);
            background-size: 36px 36px;
            mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 20%, transparent 80%)
        }

        .cta-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 300px;
            background: radial-gradient(ellipse at center, rgba(249, 115, 22, .1) 0%, transparent 70%);
            pointer-events: none
        }

        .cta-band h2 {
            
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 700;
            color: var(--gold);
            letter-spacing: -.04em;
            position: relative;
            z-index: 1
        }

        .cta-band h2 em {
            font-style: normal;
            background: linear-gradient(135deg, var(--zed-primary-hover), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text
        }

        .cta-band p {
            color: var(--zed-secondary);
            max-width: 460px;
            margin: .9rem auto 2rem;
            position: relative;
            z-index: 1
        }

        .btn-cta {
            background: linear-gradient(135deg, var(--zed-primary-hover), var(--zed-primary));
            color: #fff;
            border: none;
            border-radius: 6px;
            
            font-size: .85rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            padding: .9rem 2.4rem;
            box-shadow: 0 8px 24px rgba(249, 115, 22, .3);
            transition: opacity .2s, transform .2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            position: relative;
            z-index: 1;
            clip-path: polygon(0 0, calc(100% - 10px) 0, 100% 10px, 100% 100%, 10px 100%, 0 calc(100% - 10px))
        }

        .btn-cta:hover {
            opacity: .88;
            color: #fff;
            transform: translateY(-2px)
        }

        /* ── FOOTER ───────────────────────────────── */
        footer {
            background: #040608;
            border-top: 1px solid var(--zed-banner-bg-end);
            padding: 2rem 0;
            text-align: center
        }

        footer p {
            
            font-size: .7rem;
            color: var(--zed-secondary);
            letter-spacing: .05em;
            margin: 0
        }

        footer span {
            color: var(--zed-primary-hover)
        }

        /* ── REVEAL ───────────────────────────────── */
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
            transition-delay: .08s
        }

        .rv-d2 {
            transition-delay: .16s
        }

        .rv-d3 {
            transition-delay: .24s
        }

        .rv-d4 {
            transition-delay: .32s
        }
    </style>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-glow"></div>
        <div class="container position-relative" style="z-index:1">
            <div class="hero-badge"><i class="bi bi-currency-bitcoin"></i> Crypto Education Track</div>
            <h1>Crypto<br><em>Currency</em></h1>
            <p class="sub">Understand the foundation of cryptocurrency and how digital assets work — from blockchain
                basics to advanced DeFi, NFTs and algorithmic trading strategies.</p>
            <div class="hero-btns d-flex justify-content-center gap-3 flex-wrap">
                <a href="#modules" class="btn-hero-primary">Explore Modules <i class="bi bi-arrow-right ms-1"></i></a>
                <a href="#why" class="btn-hero-ghost">Why Crypto?</a>
            </div>

            <!-- live price pills -->
            <div class="price-pills">
                <div class="ppill"><span class="coin-dot" style="background:#f7931a"></span><span
                        class="sym">BTC</span>$67,820 <span class="chg-up">+2.4%</span></div>
                <div class="ppill"><span class="coin-dot" style="background:#627eea"></span><span
                        class="sym">ETH</span>$3,247 <span class="chg-up">+1.8%</span></div>
                <div class="ppill"><span class="coin-dot" style="background:#f0b90b"></span><span
                        class="sym">BNB</span>$594 <span class="chg-up">+0.9%</span></div>
                <div class="ppill"><span class="coin-dot" style="background:#9945ff"></span><span
                        class="sym">SOL</span>$172 <span class="chg-dn">-0.6%</span></div>
                <div class="ppill"><span class="coin-dot" style="background:#00aae4"></span><span
                        class="sym">XRP</span>$0.62 <span class="chg-up">+1.1%</span></div>
            </div>

            <!-- kpis -->
            <div class="kpi-row">
                <div class="kpi">
                    <div class="knum">9<span>+</span></div>
                    <div class="klbl">Core Modules</div>
                </div>
                <div class="kpi">
                    <div class="knum">$2.4<span>T</span></div>
                    <div class="klbl">Crypto Mkt Cap</div>
                </div>
                <div class="kpi">
                    <div class="knum">500<span>+</span></div>
                    <div class="klbl">Digital Assets</div>
                </div>
                <div class="kpi">
                    <div class="knum">Free<span>.</span></div>
                    <div class="klbl">Access</div>
                </div>
            </div>
        </div>
    </section>

    <div class="hdiv"></div>

    <!-- MARQUEE -->
    <div class="mq-band">
        <div class="mq-row">
            <div class="mq-track">
                <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Bitcoin</span>
                <span class="mq-tag"><i class="bi bi-gem"></i>Ethereum</span>
                <span class="mq-tag"><i class="bi bi-boxes"></i>Blockchain</span>
                <span class="mq-tag"><i class="bi bi-bank2"></i>DeFi</span>
                <span class="mq-tag"><i class="bi bi-image"></i>NFTs</span>
                <span class="mq-tag"><i class="bi bi-shield-lock"></i>Security</span>
                <span class="mq-tag"><i class="bi bi-bar-chart-steps"></i>Futures</span>
                <span class="mq-tag"><i class="bi bi-cpu"></i>Algo Trading</span>
                <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Liquidity</span>
                <span class="mq-tag"><i class="bi bi-diagram-3"></i>Web3</span>
                <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Bitcoin</span>
                <span class="mq-tag"><i class="bi bi-gem"></i>Ethereum</span>
                <span class="mq-tag"><i class="bi bi-boxes"></i>Blockchain</span>
                <span class="mq-tag"><i class="bi bi-bank2"></i>DeFi</span>
                <span class="mq-tag"><i class="bi bi-image"></i>NFTs</span>
                <span class="mq-tag"><i class="bi bi-shield-lock"></i>Security</span>
                <span class="mq-tag"><i class="bi bi-bar-chart-steps"></i>Futures</span>
                <span class="mq-tag"><i class="bi bi-cpu"></i>Algo Trading</span>
                <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Liquidity</span>
                <span class="mq-tag"><i class="bi bi-diagram-3"></i>Web3</span>
            </div>
        </div>
        <div class="mq-row">
            <div class="mq-track rev">
                <span class="mq-tag"><i class="bi bi-activity"></i>Price Action</span>
                <span class="mq-tag"><i class="bi bi-safe"></i>Cold Wallets</span>
                <span class="mq-tag"><i class="bi bi-lightning-charge"></i>Yield Farming</span>
                <span class="mq-tag"><i class="bi bi-pie-chart"></i>Portfolio</span>
                <span class="mq-tag"><i class="bi bi-graph-up"></i>On-Chain</span>
                <span class="mq-tag"><i class="bi bi-eye"></i>Sentiment</span>
                <span class="mq-tag"><i class="bi bi-arrow-repeat"></i>Arbitrage</span>
                <span class="mq-tag"><i class="bi bi-cash-coin"></i>Tokenomics</span>
                <span class="mq-tag"><i class="bi bi-file-code"></i>Smart Contracts</span>
                <span class="mq-tag"><i class="bi bi-globe2"></i>Market Cycles</span>
                <span class="mq-tag"><i class="bi bi-activity"></i>Price Action</span>
                <span class="mq-tag"><i class="bi bi-safe"></i>Cold Wallets</span>
                <span class="mq-tag"><i class="bi bi-lightning-charge"></i>Yield Farming</span>
                <span class="mq-tag"><i class="bi bi-pie-chart"></i>Portfolio</span>
                <span class="mq-tag"><i class="bi bi-graph-up"></i>On-Chain</span>
                <span class="mq-tag"><i class="bi bi-eye"></i>Sentiment</span>
                <span class="mq-tag"><i class="bi bi-arrow-repeat"></i>Arbitrage</span>
                <span class="mq-tag"><i class="bi bi-cash-coin"></i>Tokenomics</span>
                <span class="mq-tag"><i class="bi bi-file-code"></i>Smart Contracts</span>
                <span class="mq-tag"><i class="bi bi-globe2"></i>Market Cycles</span>
            </div>
        </div>
    </div>

    <!-- MODULE CARDS -->
    <section class="sec sec-alt" id="modules">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow rv"><i class="bi bi-grid-3x3-gap-fill"></i> Core Curriculum</span>
                <h2 class="sec-h rv">Complete Crypto Education</h2>
                <p class="sec-p mx-auto rv">Eight structured modules covering every layer of the cryptocurrency
                    ecosystem — from basics to institutional-grade strategy.</p>
            </div>

            <div class="row g-4">

                <!-- 1 — CRYPTO TRADING BASICS -->
                <div class="col-md-6 col-xl-4 rv" style="">
                    <div class="mod-card"
                        style="--clr:#f97316;--clr-glow:rgba(249,115,22,.07);--clr-bg:rgba(249,115,22,.1);--clr-border:rgba(249,115,22,.25)">
                        <div class="mod-num">01</div>
                        <div class="mod-icon" style="background:rgba(249,115,22,.12);color:#f97316"><i
                                class="bi bi-bar-chart-fill"></i></div>
                        <h5>Crypto Trading Basics</h5>
                        <p class="mod-desc">Learn how to enter and operate in crypto markets — order types, trading
                            pairs, liquidity and risk management fundamentals.</p>
                        <ul class="mod-topics">
                            <li><i class="bi bi-chevron-right"></i>Spot Trading vs Futures Trading</li>
                            <li><i class="bi bi-chevron-right"></i>Order Types (Market, Limit, Stop)</li>
                            <li><i class="bi bi-chevron-right"></i>Understanding Trading Pairs</li>
                            <li><i class="bi bi-chevron-right"></i>Liquidity &amp; Volatility</li>
                            <li><i class="bi bi-chevron-right"></i>Basic Risk Management</li>
                        </ul>
                        <div class="mod-footer">
                            <span class="mod-tag">Beginner</span>
                            <a href="#" class="btn-start"><i class="bi bi-play-fill"></i> Start</a>
                        </div>
                    </div>
                </div>

                <!-- 2 — TECHNICAL ANALYSIS FOR CRYPTO -->
                <div class="col-md-6 col-xl-4 rv rv-d1">
                    <div class="mod-card"
                        style="--clr:#3b82f6;--clr-glow:rgba(59,130,246,.07);--clr-bg:rgba(59,130,246,.1);--clr-border:rgba(59,130,246,.25)">
                        <div class="mod-num">02</div>
                        <div class="mod-icon" style="background:rgba(59,130,246,.12);color:#3b82f6"><i
                                class="bi bi-graph-up-arrow"></i></div>
                        <h5>Technical Analysis for Crypto</h5>
                        <p class="mod-desc">Analyze price charts to identify high-probability trading opportunities
                            using patterns, indicators and price action.</p>
                        <ul class="mod-topics">
                            <li><i class="bi bi-chevron-right"></i>Candlestick Patterns</li>
                            <li><i class="bi bi-chevron-right"></i>Support &amp; Resistance Levels</li>
                            <li><i class="bi bi-chevron-right"></i>Trendlines &amp; Breakouts</li>
                            <li><i class="bi bi-chevron-right"></i>RSI, MACD Indicators</li>
                            <li><i class="bi bi-chevron-right"></i>Volume &amp; Market Momentum</li>
                        </ul>
                        <div class="mod-footer">
                            <span class="mod-tag"
                                style="background:rgba(59,130,246,.1);border-color:rgba(59,130,246,.25);color:#3b82f6">Beginner</span>
                            <a href="#" class="btn-start" style="color:#3b82f6;border-color:rgba(59,130,246,.3)"><i
                                    class="bi bi-play-fill"></i> Start</a>
                        </div>
                    </div>
                </div>

                <!-- 3 — CRYPTO FUNDAMENTAL ANALYSIS -->
                <div class="col-md-6 col-xl-4 rv rv-d2">
                    <div class="mod-card"
                        style="--clr:#8b5cf6;--clr-glow:rgba(139,92,246,.07);--clr-bg:rgba(139,92,246,.1);--clr-border:rgba(139,92,246,.25)">
                        <div class="mod-num">03</div>
                        <div class="mod-icon" style="background:rgba(139,92,246,.12);color:#8b5cf6"><i
                                class="bi bi-journal-richtext"></i></div>
                        <h5>Crypto Fundamental Analysis</h5>
                        <p class="mod-desc">Evaluate crypto projects before investing — reading whitepapers, tokenomics,
                            team quality and real-world utility.</p>
                        <ul class="mod-topics">
                            <li><i class="bi bi-chevron-right"></i>Reading Whitepapers</li>
                            <li><i class="bi bi-chevron-right"></i>Tokenomics &amp; Supply Models</li>
                            <li><i class="bi bi-chevron-right"></i>Project Utility &amp; Use Case</li>
                            <li><i class="bi bi-chevron-right"></i>Team &amp; Roadmap Analysis</li>
                            <li><i class="bi bi-chevron-right"></i>Market Cap vs Value</li>
                        </ul>
                        <div class="mod-footer">
                            <span class="mod-tag"
                                style="background:rgba(139,92,246,.1);border-color:rgba(139,92,246,.25);color:#8b5cf6">Intermediate</span>
                            <a href="#" class="btn-start" style="color:#8b5cf6;border-color:rgba(139,92,246,.3)"><i
                                    class="bi bi-play-fill"></i> Start</a>
                        </div>
                    </div>
                </div>

                <!-- 4 — CRYPTO SECURITY & RISK CONTROL -->
                <div class="col-md-6 col-xl-4 rv">
                    <div class="mod-card"
                        style="--clr:#f59e0b;--clr-glow:rgba(245,158,11,.07);--clr-bg:rgba(245,158,11,.1);--clr-border:rgba(245,158,11,.25)">
                        <div class="mod-num">04</div>
                        <div class="mod-icon" style="background:rgba(245,158,11,.12);color:#f59e0b"><i
                                class="bi bi-shield-lock-fill"></i></div>
                        <h5>Crypto Security &amp; Risk Control</h5>
                        <p class="mod-desc">Protect your funds and avoid the most common mistakes — wallets, private
                            keys, scam prevention and exchange safety.</p>
                        <ul class="mod-topics">
                            <li><i class="bi bi-chevron-right"></i>Hot Wallet vs Cold Wallet</li>
                            <li><i class="bi bi-chevron-right"></i>Private Key Safety</li>
                            <li><i class="bi bi-chevron-right"></i>Avoiding Scams &amp; Phishing</li>
                            <li><i class="bi bi-chevron-right"></i>Exchange Security Practices</li>
                            <li><i class="bi bi-chevron-right"></i>Risk-to-Reward Strategy</li>
                        </ul>
                        <div class="mod-footer">
                            <span class="mod-tag"
                                style="background:rgba(245,158,11,.1);border-color:rgba(245,158,11,.25);color:#f59e0b">Essential</span>
                            <a href="#" class="btn-start" style="color:#f59e0b;border-color:rgba(245,158,11,.3)"><i
                                    class="bi bi-play-fill"></i> Start</a>
                        </div>
                    </div>
                </div>

                <!-- 5 — DeFi -->
                <div class="col-md-6 col-xl-4 rv rv-d1" id="defi">
                    <div class="mod-card"
                        style="--clr:#10b981;--clr-glow:rgba(16,185,129,.07);--clr-bg:rgba(16,185,129,.1);--clr-border:rgba(16,185,129,.25)">
                        <div class="mod-num">05</div>
                        <div class="mod-icon" style="background:rgba(16,185,129,.12);color:#10b981"><i
                                class="bi bi-boxes"></i></div>
                        <h5>DeFi (Decentralized Finance)</h5>
                        <p class="mod-desc">Explore financial systems without banks — staking, yield farming, liquidity
                            pools, DEX vs CEX and DeFi risk management.</p>
                        <ul class="mod-topics">
                            <li><i class="bi bi-chevron-right"></i>What is DeFi?</li>
                            <li><i class="bi bi-chevron-right"></i>Staking &amp; Yield Farming</li>
                            <li><i class="bi bi-chevron-right"></i>Liquidity Pools</li>
                            <li><i class="bi bi-chevron-right"></i>DEX vs CEX</li>
                            <li><i class="bi bi-chevron-right"></i>DeFi Risks &amp; Smart Contract Audits</li>
                        </ul>
                        <div class="mod-footer">
                            <span class="mod-tag"
                                style="background:rgba(16,185,129,.1);border-color:rgba(16,185,129,.25);color:#10b981">Intermediate</span>
                            <a href="#" class="btn-start" style="color:#10b981;border-color:rgba(16,185,129,.3)"><i
                                    class="bi bi-play-fill"></i> Start</a>
                        </div>
                    </div>
                </div>

                <!-- 6 — CRYPTO FUTURES & LEVERAGE -->
                <div class="col-md-6 col-xl-4 rv rv-d2">
                    <div class="mod-card"
                        style="--clr:#e8111a;--clr-glow:rgba(232,17,26,.07);--clr-bg:rgba(232,17,26,.1);--clr-border:rgba(232,17,26,.25)">
                        <div class="mod-num">06</div>
                        <div class="mod-icon" style="background:rgba(232,17,26,.12);color:#e8111a"><i
                                class="bi bi-lightning-charge-fill"></i></div>
                        <h5>Crypto Futures &amp; Leverage Trading</h5>
                        <p class="mod-desc">Advanced trading strategies using leverage — understanding long vs short,
                            margin, liquidation risk and funding rates.</p>
                        <ul class="mod-topics">
                            <li><i class="bi bi-chevron-right"></i>Long vs Short Positions</li>
                            <li><i class="bi bi-chevron-right"></i>Leverage &amp; Margin Explained</li>
                            <li><i class="bi bi-chevron-right"></i>Liquidation Risk</li>
                            <li><i class="bi bi-chevron-right"></i>Funding Rates</li>
                            <li><i class="bi bi-chevron-right"></i>Risk Management in Futures</li>
                        </ul>
                        <div class="mod-footer">
                            <span class="mod-tag"
                                style="background:rgba(232,17,26,.1);border-color:rgba(232,17,26,.25);color:#e8111a">Advanced</span>
                            <a href="#" class="btn-start" style="color:#e8111a;border-color:rgba(232,17,26,.3)"><i
                                    class="bi bi-play-fill"></i> Start</a>
                        </div>
                    </div>
                </div>

                <!-- 7 — NFTs & WEB3 -->
                <div class="col-md-6 col-xl-4 rv">
                    <div class="mod-card"
                        style="--clr:#ec4899;--clr-glow:rgba(236,72,153,.07);--clr-bg:rgba(236,72,153,.1);--clr-border:rgba(236,72,153,.25)">
                        <div class="mod-num">07</div>
                        <div class="mod-icon" style="background:rgba(236,72,153,.12);color:#ec4899"><i
                                class="bi bi-palette-fill"></i></div>
                        <h5>NFTs &amp; Web3 Ecosystem</h5>
                        <p class="mod-desc">Understand digital ownership, decentralized applications and the future of
                            the internet — smart contracts, NFT markets and Web3 applications.</p>
                        <ul class="mod-topics">
                            <li><i class="bi bi-chevron-right"></i>What are NFTs?</li>
                            <li><i class="bi bi-chevron-right"></i>NFT Marketplaces</li>
                            <li><i class="bi bi-chevron-right"></i>Smart Contracts</li>
                            <li><i class="bi bi-chevron-right"></i>Web3 Applications</li>
                            <li><i class="bi bi-chevron-right"></i>Future of Digital Assets</li>
                        </ul>
                        <div class="mod-footer">
                            <span class="mod-tag"
                                style="background:rgba(236,72,153,.1);border-color:rgba(236,72,153,.25);color:#ec4899">Intermediate</span>
                            <a href="#" class="btn-start" style="color:#ec4899;border-color:rgba(236,72,153,.3)"><i
                                    class="bi bi-play-fill"></i> Start</a>
                        </div>
                    </div>
                </div>

                <!-- 8 — MARKET PSYCHOLOGY & TRENDS -->
                <div class="col-md-6 col-xl-4 rv rv-d1">
                    <div class="mod-card"
                        style="--clr:#06b6d4;--clr-glow:rgba(6,182,212,.07);--clr-bg:rgba(6,182,212,.1);--clr-border:rgba(6,182,212,.25)">
                        <div class="mod-num">08</div>
                        <div class="mod-icon" style="background:rgba(6,182,212,.12);color:#06b6d4"><i
                                class="bi bi-globe2"></i></div>
                        <h5>Market Psychology &amp; Trends</h5>
                        <p class="mod-desc">Understand trader behavior and market movements — fear &amp; greed cycles,
                            whale activity, news impact and sentiment analysis.</p>
                        <ul class="mod-topics">
                            <li><i class="bi bi-chevron-right"></i>Fear &amp; Greed Index</li>
                            <li><i class="bi bi-chevron-right"></i>Market Cycles (Bull/Bear)</li>
                            <li><i class="bi bi-chevron-right"></i>Whale Movements</li>
                            <li><i class="bi bi-chevron-right"></i>News Impact on Crypto</li>
                            <li><i class="bi bi-chevron-right"></i>Sentiment Analysis</li>
                        </ul>
                        <div class="mod-footer">
                            <span class="mod-tag"
                                style="background:rgba(6,182,212,.1);border-color:rgba(6,182,212,.25);color:#06b6d4">Intermediate</span>
                            <a href="#" class="btn-start" style="color:#06b6d4;border-color:rgba(6,182,212,.3)"><i
                                    class="bi bi-play-fill"></i> Start</a>
                        </div>
                    </div>
                </div>

                <!-- ADVANCED FULL WIDTH -->
                <div class="col-12 rv rv-d2" id="advanced">
                    <div class="adv-card">
                        <div class="adv-badge"><i class="bi bi-rocket-takeoff-fill"></i> Module 09 — Advanced Track
                        </div>
                        <div class="row align-items-center g-4">
                            <div class="col-lg-6">
                                <h4>Advanced Trading Strategies</h4>
                                <p>Professional-level crypto trading techniques — scalping, swing trading, arbitrage,
                                    portfolio diversification, hedging and algorithmic trading basics.</p>
                                <a href="#" class="btn-cta"
                                    style="clip-path:none;border-radius:6px;font-size:.78rem;padding:.7rem 1.6rem"><i
                                        class="bi bi-play-fill"></i> Unlock Advanced Module</a>
                            </div>
                            <div class="col-lg-6">
                                <div class="adv-topics-grid">
                                    <span class="adv-tp"><i class="bi bi-lightning-fill"></i>Scalping &amp; Swing
                                        Trading</span>
                                    <span class="adv-tp"><i class="bi bi-arrow-repeat"></i>Arbitrage
                                        Opportunities</span>
                                    <span class="adv-tp"><i class="bi bi-pie-chart-fill"></i>Portfolio
                                        Diversification</span>
                                    <span class="adv-tp"><i class="bi bi-shield-check"></i>Hedging Strategies</span>
                                    <span class="adv-tp"><i class="bi bi-cpu-fill"></i>Algorithmic Trading Basics</span>
                                    <span class="adv-tp"><i class="bi bi-graph-up"></i>On-Chain Analytics</span>
                                    <span class="adv-tp"><i class="bi bi-binoculars"></i>Whale Tracking</span>
                                    <span class="adv-tp"><i class="bi bi-calendar3"></i>Halving Cycle Strategy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="hdiv"></div>

    <!-- WHY LEARN CRYPTO -->
    <section class="sec" id="why">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow rv"><i class="bi bi-question-circle-fill"></i> Why Learn Crypto</span>
                <h2 class="sec-h rv">The Digital Asset Revolution</h2>
                <p class="sec-p mx-auto rv">Cryptocurrency is no longer a niche market — it's a $2.4T global asset class
                    that every serious trader must understand.</p>
            </div>
            <div class="row g-3">
                <div class="col-sm-6 col-xl-3 rv">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-clock-history"></i></div>
                        <h6>24/7 Global Markets</h6>
                        <p>Crypto markets never close — trade Bitcoin at 3 AM or ETH during Asian sessions. No market
                            hours restrictions.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 rv rv-d1">
                    <div class="why-card">
                        <div class="why-icon" style="background:rgba(59,130,246,.12);color:var(--blue)"><i
                                class="bi bi-diagram-3"></i></div>
                        <h6>Blockchain Transparency</h6>
                        <p>Every transaction is publicly verifiable on-chain. Track whale wallets, exchange flows and
                            institutional moves in real-time.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 rv rv-d2">
                    <div class="why-card">
                        <div class="why-icon" style="background:rgba(16,185,129,.12);color:var(--green)"><i
                                class="bi bi-lightning-charge-fill"></i></div>
                        <h6>High Volatility = Opportunity</h6>
                        <p>Crypto moves 10x more than stocks. With proper risk management and education, this volatility
                            becomes your edge.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 rv rv-d3">
                    <div class="why-card">
                        <div class="why-icon" style="background:rgba(139,92,246,.12);color:var(--purple)"><i
                                class="bi bi-infinity"></i></div>
                        <h6>DeFi Passive Income</h6>
                        <p>Earn yield through staking, liquidity pools and yield farming — make your crypto work for you
                            around the clock.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="hdiv"></div>

    <!-- TESTIMONIALS -->
    <section class="sec sec-alt">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow rv"><i class="bi bi-star-fill"></i> Student Reviews</span>
                <h2 class="sec-h rv">What Crypto Traders Say</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4 rv">
                    <div class="t-card">
                        <div class="stars">★★★★★</div>
                        <q>"The DeFi module alone changed how I think about passive income. I went from holding BTC to
                            farming yield on Uniswap. Returns went from 0% to 14% APY on stablecoins."</q>
                        <div class="d-flex align-items-center gap-2 mt-3">
                            <div class="t-av">RK</div>
                            <div>
                                <div class="t-name">Rahul Kothari</div>
                                <div class="t-role">DeFi Trader · Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 rv rv-d1">
                    <div class="t-card">
                        <div class="stars">★★★★★</div>
                        <q>"Crypto Security module saved my portfolio. I was using the same email on 3 exchanges. Now I
                            use cold wallet, 2FA everywhere and never store seed phrases digitally."</q>
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
                        <div class="stars">★★★★☆</div>
                        <q>"Futures &amp; Leverage module is the most honest crypto education I've seen. It explains
                            exactly how liquidations work — I stopped overleveraging and became consistently
                            profitable."</q>
                        <div class="d-flex align-items-center gap-2 mt-3">
                            <div class="t-av">AM</div>
                            <div>
                                <div class="t-name">Arjun Mehta</div>
                                <div class="t-role">Futures Trader · Surat</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-band">
        <div class="cta-glow"></div>
        <div class="container" style="position:relative;z-index:1">
            <h2>Start Your<br><em>Crypto Journey</em> Today</h2>
            <p>Join thousands of students mastering digital assets — from Bitcoin basics to DeFi yield farming and
                advanced algorithmic strategies.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#modules" class="btn-cta"><i class="bi bi-currency-bitcoin"></i> Explore All Modules</a>
                <a href="#" class="btn-hero-ghost"
                    style="border-radius:6px;padding:.9rem 2rem;font-size:.82rem;letter-spacing:.06em;text-transform:uppercase">View
                    Webinars <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </section>

    <script>
        
        // Scroll reveal
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
        }, { threshold: 0.09 });
        document.querySelectorAll('.rv').forEach(el => io.observe(el));

        // Floating particles
        const colors = ['#f97316', '#f59e0b', '#3b82f6', '#8b5cf6', '#10b981', '#e8111a', '#06b6d4'];
        const container = document.getElementById('bgParticles');
        for (let i = 0; i < 22; i++) {
            const p = document.createElement('div');
            p.className = 'particle';
            const size = Math.random() * 4 + 2;
            p.style.cssText = `
      width:${size}px;height:${size}px;
      left:${Math.random() * 100}%;
      background:${colors[Math.floor(Math.random() * colors.length)]};
      animation-duration:${Math.random() * 14 + 10}s;
      animation-delay:${Math.random() * 8}s;
    `;
            container.appendChild(p);
        }
    </script>
<?php
include_once ('elements/footer.php');
?>
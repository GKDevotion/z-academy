<?php 
include_once ('elements/header.php');
?>

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
            line-height: 1.0;
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
            align-items: center;
            min-width: 160px;
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
    </style>
    
    <!-- ─── HERO ───────────────────────────────────────────── -->
    <section class="hero">
        <div class="container">
            <div class="hero-badge mt-4 d-none"><i class="bi bi-mortarboard-fill"></i> Professional Trading Education</div>
            <h1>
                <em>Glossary</em> <br>of trading terms
            </h1>
            <p class="sub">
                Complete guide to chart reading and price action.
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
                        <div class="val">12</div>
                        <div class="lbl">Modules</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-play-btn-fill"></i></div>
                    <div>
                        <div class="val">80+</div>
                        <div class="lbl">Concepts</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-award-fill"></i></div>
                    <div>
                        <div class="val">∞</div>
                        <div class="lbl">Practice</div>
                    </div>
                </div>
                <div class="float-stat d-none">
                    <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <div class="val">100K</div>
                        <div class="lbl">Units of Base Currency</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="hdiv"></div>
    
    <style>
        :root {
        --blue: #1a3cff;
        --blue-light: #e8ecff;
        --red: #e63030;
        --dark: #0d0d1a;
        --mid: #444;
        --light: #f5f6fa;
        --border: #e0e3ef;
        --card-bg: #fff;
        --shadow: 0 2px 16px rgba(26, 60, 255, 0.07);
        }

        /* HEADER */
        .header-bar {
            background: var(--blue);
            padding: 18px 0 0;
        }

        .header-bar .breadcrumb {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 24px;
        color: rgba(255, 255, 255, 0.7);
        font-size: 13px;
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 10px;
        }

        .breadcrumb a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        }

        .breadcrumb span {
        color: #fff;
        font-weight: 600;
        }

        .header-title {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 24px 22px;
        }

        .header-title h1 {
        font-family: 'Playfair Display', serif;
        font-size: clamp(2rem, 5vw, 3rem);
        color: #fff;
        font-weight: 900;
        letter-spacing: -0.5px;
        }

        /* ALPHA NAV */
        .alpha-nav {
        background: #fff;
        border-bottom: 2px solid var(--border);
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        }

        .alpha-nav-inner {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 24px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 2px;
        }

        .alpha-nav a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 42px;
        font-size: 14px;
        font-weight: 600;
        color: var(--blue);
        text-decoration: none;
        border-bottom: 3px solid transparent;
        transition: all 0.18s;
        border-radius: 4px 4px 0 0;
        }

        .alpha-nav a:hover,
        .alpha-nav a.active {
        color: var(--blue);
        border-bottom-color: var(--blue);
        background: var(--blue-light);
        }

        .alpha-nav a.disabled {
        color: #bbb;
        pointer-events: none;
        }

        /* SEARCH BAR */
        .search-wrap {
        max-width: 1100px;
        margin: 32px auto 0;
        padding: 0 24px;
        }

        .search-box {
        display: flex;
        align-items: center;
        background: #fff;
        border: 2px solid var(--border);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: border-color 0.2s;
        }

        .search-box:focus-within {
        border-color: var(--blue);
        }

        .search-box input {
        flex: 1;
        border: none;
        outline: none;
        padding: 14px 18px;
        font-size: 15px;
        font-family: inherit;
        background: transparent;
        }

        .search-box .search-icon {
        padding: 0 18px;
        color: var(--blue);
        font-size: 18px;
        }

        .search-count {
        margin-top: 8px;
        font-size: 13px;
        color: var(--mid);
        padding-left: 4px;
        }

        /* INTRO */
        .intro {
        max-width: 1100px;
        margin: 32px auto 0;
        padding: 0 24px;
        background: #fff;
        border-radius: 14px;
        border: 1px solid var(--border);
        }

        .intro-inner {
        padding: 28px 32px;
        text-align: center;
        }

        .intro-inner p {
        color: var(--mid);
        font-size: 15px;
        line-height: 1.7;
        max-width: 700px;
        margin: 0 auto 10px;
        }

        .intro-inner p:first-child {
        font-weight: 600;
        font-size: 16px;
        color: var(--dark);
        }

        /* CONTENT */
        .content {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 24px 60px;
        }

        /* SECTION */
        .letter-section {
        margin-top: 48px;
        }

        .letter-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        }

        .letter-heading h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--dark);
        }

        .back-top {
        font-size: 13px;
        color: var(--blue);
        text-decoration: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 4px;
        transition: opacity 0.15s;
        }

        .back-top:hover {
        opacity: 0.7;
        }

        /* VIEW TOGGLE */
        .view-toggle {
        display: flex;
        gap: 6px;
        align-items: center;
        }

        .view-btn {
        background: none;
        border: 1.5px solid var(--border);
        border-radius: 7px;
        padding: 5px 9px;
        cursor: pointer;
        color: var(--mid);
        font-size: 15px;
        transition: all 0.15s;
        }

        .view-btn.active,
        .view-btn:hover {
        border-color: var(--blue);
        color: var(--blue);
        background: var(--blue-light);
        }

        /* ACCORDION (list view) */
        .accordion {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--border);
        background: #fff;
        box-shadow: var(--shadow);
        }

        .accordion-item {
        border-bottom: 1px solid var(--border);
        }

        .accordion-item:last-child {
        border-bottom: none;
        }

        .accordion-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 28px;
        cursor: pointer;
        font-size: 17px;
        font-weight: 600;
        color: var(--dark);
        background: #fff;
        transition: background 0.15s;
        user-select: none;
        gap: 16px;
        }

        .accordion-header:hover {
        background: var(--blue-light);
        }

        .accordion-icon {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        border: 2px solid var(--red);
        color: var(--red);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        font-weight: 400;
        flex-shrink: 0;
        transition: transform 0.25s, background 0.15s;
        line-height: 1;
        }

        .accordion-item.open .accordion-icon {
        transform: rotate(45deg);
        background: var(--red);
        color: #fff;
        }

        .accordion-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.32s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .accordion-body-inner {
        padding: 0 28px 20px;
        color: var(--mid);
        font-size: 15px;
        line-height: 1.75;
        border-top: 1px solid var(--border);
        padding-top: 16px;
        }

        /* CARD GRID (grid view) */
        .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 16px;
        }

        .term-card {
        background: var(--card-bg);
        border: 1.5px solid var(--border);
        border-radius: 14px;
        padding: 20px 22px;
        box-shadow: var(--shadow);
        transition: box-shadow 0.2s, border-color 0.2s, transform 0.15s;
        display: flex;
        flex-direction: column;
        gap: 10px;
        }

        .term-card:hover {
        box-shadow: 0 6px 28px rgba(26, 60, 255, 0.13);
        border-color: var(--blue);
        transform: translateY(-2px);
        }

        .term-card h3 {
        font-size: 15px;
        font-weight: 700;
        color: var(--blue);
        margin: 0;
        line-height: 1.3;
        }

        .term-card p {
        font-size: 13.5px;
        color: var(--mid);
        line-height: 1.65;
        flex: 1;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        }

        .term-card .more-btn {
        font-size: 13px;
        font-weight: 700;
        color: var(--blue);
        background: none;
        border: none;
        cursor: pointer;
        align-self: flex-start;
        display: flex;
        align-items: center;
        gap: 4px;
        padding: 0;
        transition: opacity 0.15s;
        letter-spacing: 0.02em;
        }

        .term-card .more-btn:hover {
        opacity: 0.65;
        }

        /* EXPANDED CARD OVERLAY */
        .overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(10, 10, 30, 0.55);
        z-index: 999;
        align-items: center;
        justify-content: center;
        padding: 20px;
        }

        .overlay.active {
        display: flex;
        }

        .overlay-box {
        background: #fff;
        border-radius: 18px;
        max-width: 560px;
        width: 100%;
        padding: 36px 36px 28px;
        box-shadow: 0 24px 80px rgba(26, 60, 255, 0.18);
        position: relative;
        max-height: 80vh;
        overflow-y: auto;
        }

        .overlay-close {
        position: absolute;
        top: 16px;
        right: 18px;
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: var(--mid);
        transition: color 0.15s;
        }

        .overlay-close:hover {
        color: var(--red);
        }

        .overlay-box h2 {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 14px;
        }

        .overlay-box p {
        color: var(--mid);
        font-size: 15px;
        line-height: 1.8;
        }

        /* EMPTY STATE */
        .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: var(--mid);
        font-size: 16px;
        }

        .empty-state .emoji {
        font-size: 48px;
        display: block;
        margin-bottom: 12px;
        }

        /* HIDDEN */
        .hidden {
        display: none !important;
        }

        @media (max-width: 600px) {
        .header-title h1 {
            font-size: 1.8rem;
        }

        .alpha-nav-inner {
            gap: 0;
        }

        .alpha-nav a {
            width: 28px;
            font-size: 12px;
        }

        .accordion-header {
            padding: 16px 18px;
            font-size: 15px;
        }

        .accordion-body-inner {
            padding: 14px 18px;
        }

        .intro-inner {
            padding: 20px 18px;
        }
        }
    </style>
<?php
include_once ('elements/footer.php');
?>
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
                <em>Glossary</em> <br>Of Trading Terms
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
    
   
<?php
include_once ('elements/footer.php');
?>
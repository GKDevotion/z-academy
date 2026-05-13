<?php 
include_once ('elements/header.php');
?>

    <style>

        /* ── PAGE SYSTEM ── */
        .page {
            animation: pgIn .38s ease;
        }

        @keyframes pgIn {
        from {
            opacity: 0;
            transform: translateY(12px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
        }

        /* ── HERO ── */
        .page-hero {
        padding: 76px 0 60px;
        background: var(--zed-light-bg);
        position: relative;
        overflow: hidden;
        }

        .hero-ring {
        position: absolute;
        border-radius: 50%;
        border: 1px solid var(--zed-border-color);
        pointer-events: none;
        }

        .hero-flame {
        position: absolute;
        right: 5%;
        top: 10%;
        font-size: 7rem;
        opacity: .04;
        animation: flamePulse 4s ease-in-out infinite;
        user-select: none;
        }

        @keyframes flamePulse {

        0%,
        100% {
            transform: scale(1) rotate(-5deg);
            opacity: .04
        }

        50% {
            transform: scale(1.08) rotate(5deg);
            opacity: .07
        }
        }

        .hero-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: .65rem;
        font-weight: 700;
        letter-spacing: .2em;
        text-transform: uppercase;
        color: var(--zed-primary);
        background: var(--zed-light-red-hover);
        border: 1px solid rgba(194, 84, 10, .2);
        border-radius: 20px;
        padding: 5px 16px;
        margin-bottom: 20px;
        }

        .hero-tag .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--zed-primary);
        animation: dotPulse 1.2s ease-in-out infinite;
        }

        @keyframes dotPulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1)
        }

        50% {
            opacity: .35;
            transform: scale(.7)
        }
        }

        .hero-h {
        
        font-size: clamp(2.8rem, 6.5vw, 5.4rem);
        font-weight: 700;
        line-height: 1.05;
        color: var(--navy);
        margin-bottom: 18px;
        }

        .hero-h em {
        font-style: italic;
        color: var(--zed-primary);
        }

        .hero-sub {
        font-size: .95rem;
        color: var(--zed-secondary);
        max-width: 560px;
        margin: 0 auto 38px;
        line-height: 1.8;
        }

        .stat-band {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        border: 1px solid var(--zed-border-color);
        border-radius: 10px;
        overflow: hidden;
        max-width: 680px;
        margin: 0 auto;
        }

        .sstat {
        flex: 1;
        min-width: 110px;
        padding: 18px 10px;
        text-align: center;
        border-right: 1px solid var(--zed-border-color);
        transition: background .2s;
        cursor: default;
        }

        .sstat:last-child {
        border-right: none;
        }

        .sstat:hover {
        background: var(--zed-light-red-hover);
        }

        .sstat-n {
        
        font-size: 1.7rem;
        font-weight: 700;
        color: var(--zed-primary);
        line-height: 1;
        }

        .sstat-l {
        font-size: .6rem;
        font-weight: 600;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--zed-secondary);
        margin-top: 4px;
        }

        /* ── SECTION HEADINGS ── */
        .sover {
        font-size: .65rem;
        font-weight: 700;
        letter-spacing: .2em;
        text-transform: uppercase;
        color: var(--zed-primary);
        margin-bottom: 6px;
        }

        .sh {
        
        font-size: clamp(1.8rem, 3.5vw, 2.6rem);
        font-weight: 700;
        color: var(--navy);
        }

        .sh em {
        font-style: italic;
        color: var(--zed-primary);
        }

        .srule {
        width: 40px;
        height: 2px;
        background: var(--zed-primary);
        margin: 12px auto 0;
        }

        /* ── MODULE CARDS ── */
        .mc {
        background: var(--zed-light-bg);
        border: 1px solid var(--zed-border-color);
        border-radius: 14px;
        padding: 28px 24px 22px;
        position: relative;
        overflow: hidden;
        transition: transform .3s, box-shadow .3s, border-color .3s;
        height: 100%;
        }

        .mc::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 130px;
        height: 130px;
        border-radius: 50%;
        background: radial-gradient(circle, var(--aglow, var(--zed-light-red-hover)) 0%, transparent 70%);
        pointer-events: none;
        }

        .mc:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 52px rgba(0, 0, 0, .08);
        border-color: var(--ac, var(--zed-primary));
        }

        .mc-bar {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--ac, var(--zed-primary));
        border-radius: 14px 14px 0 0;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .35s ease;
        }

        .mc:hover .mc-bar {
        transform: scaleX(1);
        }

        .mc-num {
        position: absolute;
        top: 20px;
        right: 22px;
        
        font-size: 2.8rem;
        font-weight: 700;
        color: var(--zed-border-color);
        line-height: 1;
        user-select: none;
        transition: color .3s;
        }

        .mc:hover .mc-num {
        color: var(--aglow, var(--zed-light-red-hover));
        }

        .mc-icon {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        margin-bottom: 14px;
        background: var(--isbg, var(--zed-light-red-hover));
        color: var(--ac, var(--zed-primary));
        }

        .mc-tag {
        font-size: .62rem;
        font-weight: 700;
        letter-spacing: .14em;
        text-transform: uppercase;
        color: var(--ac, var(--zed-primary));
        margin-bottom: 5px;
        }

        .mc-title {
        
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--navy);
        line-height: 1.3;
        margin-bottom: 8px;
        }

        .mc-desc {
        font-size: .79rem;
        color: var(--zed-secondary);
        line-height: 1.7;
        margin-bottom: 16px;
        }

        .tli {
        display: flex;
        align-items: flex-start;
        gap: 9px;
        font-size: .78rem;
        color: var(--navy);
        padding: 6px 0;
        border-bottom: 1px dashed var(--zed-border-color);
        transition: gap .2s;
        }

        .tli:last-child {
        border-bottom: none;
        }

        .mc:hover .tli {
        gap: 12px;
        }

        .tdot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: var(--ac, var(--zed-primary));
        flex-shrink: 0;
        margin-top: 6px;
        }

        .hchip {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: .63rem;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 4px;
        border: 1px solid var(--ac, var(--zed-primary));
        color: var(--ac, var(--zed-primary));
        background: var(--isbg, var(--zed-light-red-hover));
        margin-top: 3px;
        }

        .prog-wrap {
        height: 4px;
        border-radius: 2px;
        background: var(--zed-border-color);
        margin-top: 14px;
        overflow: hidden;
        }

        .prog-bar {
        height: 100%;
        border-radius: 2px;
        background: var(--ac, var(--zed-primary));
        transform: scaleX(0);
        transform-origin: left;
        animation: pFill 1.3s .2s ease forwards;
        }

        @keyframes pFill {
        to {
            transform: scaleX(1)
        }
        }

        .mc-foot {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 14px;
        border-top: 1px solid var(--zed-border-color);
        margin-top: 16px;
        }

        .fchip {
        font-size: .67rem;
        color: var(--zed-secondary);
        display: flex;
        align-items: center;
        gap: 4px;
        }

        .fchip i {
        font-size: .6rem;
        color: var(--ac, var(--zed-primary));
        }

        .bstart {
        font-family: 'DM Sans', sans-serif;
        font-size: .7rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        padding: 9px 20px;
        border-radius: 5px;
        background: var(--ac, var(--zed-primary));
        color: #fff;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 6px;
        transition: opacity .2s, transform .15s;
        white-space: nowrap;
        }

        .bstart:hover {
        opacity: .85;
        transform: scale(.97);
        }

        /* ── VIDEO CARDS ── */
        .vc {
        background: var(--zed-light-bg);
        border: 1px solid var(--zed-border-color);
        border-radius: 12px;
        overflow: hidden;
        transition: transform .3s, box-shadow .3s;
        cursor: pointer;
        height: 100%;
        }

        .vc:hover {
        transform: translateY(-5px);
        box-shadow: 0 18px 46px rgba(0, 0, 0, .09);
        }

        .vthumb {
        position: relative;
        aspect-ratio: 16/9;
        overflow: hidden;
        }

        .vanim {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: flex-end;
        gap: 2px;
        padding: 16px 10px 0;
        }

        .vbar {
        flex: 1;
        border-radius: 2px 2px 0 0;
        animation: vbAnim 2s ease-in-out infinite alternate;
        min-height: 5px;
        }

        @keyframes vbAnim {
        from {
            transform: scaleY(1)
        }

        to {
            transform: scaleY(.32)
        }
        }

        .vgradient {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent 35%, rgba(255, 255, 255, .45));
        }

        .vplay-wrap {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .vplay {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: var(--ac, var(--zed-primary));
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        box-shadow: 0 8px 28px var(--aglow, var(--zed-light-red-hover));
        transition: transform .2s;
        }

        .vc:hover .vplay {
        transform: scale(1.12);
        }

        .vdur {
        position: absolute;
        bottom: 8px;
        right: 10px;
        background: rgba(0, 0, 0, .65);
        color: #fff;
        font-size: .65rem;
        font-weight: 700;
        padding: 2px 9px;
        border-radius: 12px;
        }

        .vstatus {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: .62rem;
        font-weight: 700;
        letter-spacing: .1em;
        padding: 3px 11px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        gap: 5px;
        }

        .vbody {
        padding: 16px;
        }

        .vcat {
        font-size: .63rem;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        margin-bottom: 5px;
        }

        .vtitle {
        
        font-size: .96rem;
        font-weight: 700;
        color: var(--navy);
        line-height: 1.4;
        margin-bottom: 8px;
        }

        .vmeta {
        font-size: .72rem;
        color: var(--zed-secondary);
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        }

        .blink {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: currentColor;
        animation: dotPulse 1s infinite;
        }

        /* ── FILTER PILLS ── */
        .fpill {
        background: transparent;
        border: 1px solid var(--zed-border-color);
        color: var(--zed-secondary);
        border-radius: 5px;
        padding: 7px 16px;
        font-size: .7rem;
        font-weight: 700;
        letter-spacing: .06em;
        text-transform: uppercase;
        cursor: pointer;
        transition: all .2s;
        font-family: 'DM Sans', sans-serif;
        white-space: nowrap;
        }

        .fpill:hover {
        border-color: var(--zed-primary);
        color: var(--zed-primary);
        }

        .fpill.active {
        background: var(--zed-primary);
        border-color: var(--zed-primary);
        color: #fff;
        }

        /* ── DETAIL PAGE ── */
        .detail-hero {
        padding: 56px 0 44px;
        background: var(--zed-banner-bg-start);
        border-bottom: 1px solid var(--zed-border-color);
        }

        .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        font-size: .73rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--zed-secondary);
        background: transparent;
        border: 1px solid var(--zed-border-color);
        border-radius: 5px;
        padding: 7px 16px;
        cursor: pointer;
        transition: all .2s;
        margin-bottom: 26px;
        font-family: 'DM Sans', sans-serif;
        }

        .back-btn:hover {
        color: var(--zed-primary);
        border-color: var(--zed-primary);
        }

        .dbadge {
        display: inline-block;
        font-size: .63rem;
        font-weight: 700;
        letter-spacing: .14em;
        text-transform: uppercase;
        padding: 4px 14px;
        border-radius: 20px;
        margin-bottom: 14px;
        }

        .dtitle {
        
        font-size: clamp(1.9rem, 5vw, 3.3rem);
        font-weight: 700;
        color: var(--navy);
        line-height: 1.1;
        margin-bottom: 12px;
        }

        .dtitle em {
        font-style: italic;
        }

        .ddesc {
        font-size: .93rem;
        color: var(--zed-secondary);
        max-width: 580px;
        line-height: 1.8;
        }

        /* ── CURRICULUM ── */
        .citem {
        border: 1px solid var(--zed-border-color);
        border-radius: 8px;
        margin-bottom: 8px;
        overflow: hidden;
        }

        .citem:hover {
        border-color: var(--zed-primary);
        }

        .chead {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        cursor: pointer;
        background: var(--zed-light-bg);
        }

        .chead-l {
        display: flex;
        align-items: center;
        gap: 12px;
        }

        .cidx {
        
        font-size: 1rem;
        font-weight: 700;
        color: var(--zed-primary);
        min-width: 28px;
        }

        .cname {
        font-size: .85rem;
        font-weight: 600;
        color: var(--navy);
        }

        .cbadge {
        font-size: .62rem;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 12px;
        background: var(--zed-light-red-hover);
        color: var(--zed-primary);
        }

        .cbody {
        padding: 0 18px 14px;
        display: none;
        }

        .cbody.open {
        display: block;
        }

        /* ── SCROLL REVEAL ── */
        .reveal {
        opacity: 0;
        transform: translateY(26px);
        transition: opacity .48s ease, transform .48s ease;
        }

        .reveal.in {
        opacity: 1;
        transform: translateY(0);
        }

        section {
        padding: 72px 0;
        }

        .bg2 {
        background: var(--zed-banner-bg-start);
        }

        .site-footer {
        background: var(--navy);
        padding: 42px 0;
        text-align: center;
        }

        .flogo {
        
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--zed-primary);
        font-style: italic;
        margin-bottom: 8px;
        }

        @media(max-width:576px) {
        .stat-band {
            border-radius: 0;
            border-left: none;
            border-right: none;
        }

        .sstat {
            border-right: none;
            border-bottom: 1px solid var(--zed-border-color);
        }

        .sstat:last-child {
            border-bottom: none;
        }

        .nav-links {
            gap: 1px;
        }

        .navbtn {
            padding: 6px 8px;
            font-size: .65rem;
        }
    }
    </style>

  
  <!-- ════════════ PAGE: HOME ════════════ -->
  <div class="page active" id="page-home">

    <div class="page-hero">
      <div class="hero-ring" style="width:520px;height:520px;top:-220px;right:-130px;"></div>
      <div class="hero-ring" style="width:280px;height:280px;top:-30px;right:120px;"></div>
      <div class="hero-flame">⚡</div>
      <div class="container text-center position-relative">
        <div class="hero-tag"><span class="dot"></span> Expert-Led Webinar · 2026</div>
        <h1 class="hero-h">Webinar <em>Energy Sector</em></h1>
        <p class="hero-sub">Understand how global energy markets work, key price drivers, and trading opportunities in
          oil, gas, and renewables.</p>
        <div class="stat-band">
          <div class="sstat">
            <div class="sstat-n">9</div>
            <div class="sstat-l">Modules</div>
          </div>
          <div class="sstat">
            <div class="sstat-n">45+</div>
            <div class="sstat-l">Topics</div>
          </div>
          <div class="sstat">
            <div class="sstat-n">22h</div>
            <div class="sstat-l">Content</div>
          </div>
          <div class="sstat">
            <div class="sstat-n">Live</div>
            <div class="sstat-l">Sessions</div>
          </div>
          <div class="sstat">
            <div class="sstat-n">Free</div>
            <div class="sstat-l">Access</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Featured 3 modules -->
    <section class="bg2">
      <div class="container">
        <div class="text-center mb-5 reveal">
          <div class="sover">Most Popular</div>
          <h2 class="sh">Featured <em>Modules</em></h2>
          <div class="srule mx-auto"></div>
        </div>
        <div class="row g-4">
          <div class="col-md-4 reveal">
            <div class="mc" style="--ac:var(--zed-primary);--aglow:rgba(194,84,10,.1);--isbg:var(--zed-light-red-hover)">
              <div class="mc-bar"></div><span class="mc-num">01</span>
              <div class="mc-icon"><i class="fas fa-oil-well"></i></div>
              <div class="mc-tag">Module 01 · Crude Oil</div>
              <div class="mc-title">Crude Oil Market Fundamentals</div>
              <p class="mc-desc">Learn the basics of crude oil trading and global demand–supply dynamics across WTI and
                Brent markets.</p>
              <div class="mc-foot mt-3">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"></i> 7 videos</span><span
                    class="fchip"><i class="fas fa-clock"></i> 3h 45m</span></div>
                <button class="bstart" onclick="openDetail('crude')"><i class="fas fa-arrow-right"></i> Explore</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 reveal">
            <div class="mc" style="--ac:var(--green);--aglow:rgba(22,101,52,.1);--isbg:var(--green-s)">
              <div class="mc-bar"></div><span class="mc-num">04</span>
              <div class="mc-icon" style="background:var(--green-s);color:var(--green)"><i class="fas fa-leaf"></i>
              </div>
              <div class="mc-tag" style="color:var(--green)">Module 04 · Renewables</div>
              <div class="mc-title">Renewable Energy Trends</div>
              <p class="mc-desc">Analyze the shift towards clean energy and its impact on traditional commodity markets
                and ESG investing.</p>
              <div class="mc-foot mt-3">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--green)"></i> 6 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--green)"></i> 3h 10m</span></div>
                <button class="bstart" style="background:var(--green)" onclick="openDetail('renewables')"><i
                    class="fas fa-arrow-right"></i> Explore</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 reveal">
            <div class="mc" style="--ac:var(--zed-primary);--aglow:var(--zed-light-red-hover);--isbg:var(--zed-light-red-hover)">
              <div class="mc-bar"></div><span class="mc-num">09</span>
              <div class="mc-icon"><i class="fas fa-shield-halved"></i></div>
              <div class="mc-tag">Module 09 · Risk</div>
              <div class="mc-title">Risk Management in Energy Trading</div>
              <p class="mc-desc">Protect your capital in highly volatile energy markets with position sizing, stop-loss,
                and diversification.</p>
              <div class="mc-foot mt-3">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"></i> 7 videos</span><span
                    class="fchip"><i class="fas fa-clock"></i> 3h 40m</span></div>
                <button class="bstart" onclick="openDetail('risk')"><i class="fas fa-arrow-right"></i> Explore</button>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <button class="bstart mx-auto" style="width:fit-content;padding:12px 32px;" onclick="goPage('modules')">
            <i class="fas fa-th-large"></i> View All 9 Modules
          </button>
        </div>
      </div>
    </section>

    <!-- Home video preview -->
    <section>
      <div class="container">
        <div class="text-center mb-5 reveal">
          <div class="sover">On Demand</div>
          <h2 class="sh">Latest <em>Video Sessions</em></h2>
          <div class="srule mx-auto"></div>
        </div>
        <div class="row g-4">
          <div class="col-sm-6 col-lg-3 reveal">
            <div class="vc" style="--ac:var(--zed-primary);--aglow:rgba(194,84,10,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#fff7ed,#fed7aa)">
                <div class="vanim" id="hv1"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">46:22</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--zed-primary)"><i class="fas fa-oil-well me-1"></i>Crude Oil</div>
                <div class="vtitle">WTI vs Brent: What Drives the Spread?</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Dr. Patel</span><span><i class="fas fa-eye"></i>
                    5.2K</span></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 reveal">
            <div class="vc" style="--ac:var(--teal);--aglow:rgba(14,116,144,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#ecfeff,#a5f3fc)">
                <div class="vanim" id="hv2"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay" style="background:var(--teal)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:var(--teal);color:#fff"><span class="blink"
                    style="background:#fff"></span> NEW</div>
                <div class="vdur">53:08</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--teal)"><i class="fas fa-fire-flame-curved me-1"></i>Natural Gas
                </div>
                <div class="vtitle">LNG Markets: Seasonal Demand &amp; Price Cycles</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> K. Zhao</span><span><i class="fas fa-eye"></i>
                    3.8K</span></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 reveal">
            <div class="vc" style="--ac:var(--green);--aglow:rgba(22,101,52,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#f0fdf4,#bbf7d0)">
                <div class="vanim" id="hv3"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay" style="background:var(--green)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">41:30</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--green)"><i class="fas fa-leaf me-1"></i>Renewables</div>
                <div class="vtitle">ESG Investing &amp; the Clean Energy Transition</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> A. Singh</span><span><i class="fas fa-eye"></i>
                    6.4K</span></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 reveal">
            <div class="vc" style="--ac:var(--zed-primary);--aglow:var(--zed-light-red-hover);border-color:rgba(217,43,31,.3)">
              <div class="vthumb" style="background:linear-gradient(135deg,#fdf2f1,#fecaca)">
                <div class="vanim" id="hv4"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay"><i class="fas fa-broadcast-tower"></i></div>
                </div>
                <div class="vstatus" style="background:var(--zed-primary);color:#fff"><span class="blink"
                    style="background:#fff"></span> LIVE</div>
                <div class="vdur" style="background:var(--zed-primary)">LIVE</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--zed-primary)"><i class="fas fa-globe me-1"></i>OPEC & Geopolitics</div>
                <div class="vtitle">OPEC+ Cuts &amp; Global Oil Price Impact — Live</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> M. Hassan</span><span><i
                      class="fas fa-calendar"></i> Jun 11</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <button class="bstart mx-auto" style="width:fit-content;padding:12px 32px;" onclick="goPage('videos')">
            <i class="fas fa-film"></i> Browse All Videos
          </button>
        </div>
      </div>
    </section>
  </div><!-- /home -->


  <!-- ════════════ PAGE: MODULES ════════════ -->
  <div class="page" id="page-modules">
    <div class="page-hero">
      <div class="hero-ring" style="width:420px;height:420px;top:-200px;right:-110px;"></div>
      <div class="hero-flame" style="font-size:5rem;right:8%;top:5%">🔥</div>
      <div class="container text-center position-relative">
        <div class="hero-tag"><span class="dot"></span> Full Curriculum</div>
        <h1 class="hero-h">All <em>Modules</em></h1>
        <p class="hero-sub">9 expert-crafted modules covering the full energy trading landscape — from crude oil to
          future energy trends.</p>
      </div>
    </div>

    <!-- filter bar -->
    <div
      style="background:var(--zed-light-bg);border-bottom:1px solid var(--zed-border-color);padding:12px 0;position:sticky;top:80px;z-index:100;">
      <div class="container d-flex gap-2 flex-wrap">
        <button class="fpill active" onclick="fmod(this,'all')">All</button>
        <button class="fpill" onclick="fmod(this,'crude')">Crude Oil</button>
        <button class="fpill" onclick="fmod(this,'gas')">Natural Gas</button>
        <button class="fpill" onclick="fmod(this,'opec')">OPEC</button>
        <button class="fpill" onclick="fmod(this,'renewables')">Renewables</button>
        <button class="fpill" onclick="fmod(this,'strategies')">Strategies</button>
        <button class="fpill" onclick="fmod(this,'fundamental')">Fundamental</button>
        <button class="fpill" onclick="fmod(this,'technical')">Technical</button>
        <button class="fpill" onclick="fmod(this,'futures')">Futures</button>
        <button class="fpill" onclick="fmod(this,'risk')">Risk</button>
      </div>
    </div>

    <section class="bg2">
      <div class="container">
        <div class="row g-4" id="modgrid">

          <!-- M1 Crude Oil -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="crude">
            <div class="mc" style="--ac:var(--zed-primary);--aglow:rgba(194,84,10,.1);--isbg:var(--zed-light-red-hover)">
              <div class="mc-bar"></div><span class="mc-num">01</span>
              <div class="mc-icon"><i class="fas fa-oil-well"></i></div>
              <div class="mc-tag">Module 01 · Crude Oil</div>
              <div class="mc-title">Crude Oil Market Fundamentals</div>
              <p class="mc-desc">Learn the basics of crude oil trading and global demand–supply dynamics.</p>
              <div class="tli">
                <div class="tdot"></div>Types of Crude Oil (WTI, Brent)
              </div>
              <div class="tli">
                <div class="tdot"></div>Global Supply &amp; Demand Factors
              </div>
              <div class="tli">
                <div class="tdot"></div>Oil Pricing Mechanism
              </div>
              <div class="tli">
                <div class="tdot"></div>Role of Refineries
              </div>
              <div class="tli">
                <div class="tdot"></div>Inventory Reports (EIA Data)
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:82%"></div>
              </div>
              <div class="mc-foot">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"></i> 7 videos</span><span
                    class="fchip"><i class="fas fa-clock"></i> 3h 45m</span></div>
                <button class="bstart" onclick="openDetail('crude')"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M2 Natural Gas -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="gas">
            <div class="mc" style="--ac:var(--teal);--aglow:rgba(14,116,144,.1);--isbg:var(--teal-s)">
              <div class="mc-bar"></div><span class="mc-num">02</span>
              <div class="mc-icon" style="background:var(--teal-s);color:var(--teal)"><i
                  class="fas fa-fire-flame-curved"></i></div>
              <div class="mc-tag" style="color:var(--teal)">Module 02 · Natural Gas</div>
              <div class="mc-title">Natural Gas Market Insights</div>
              <p class="mc-desc">Explore natural gas trading, seasonal demand patterns, and volatility across global LNG
                markets.</p>
              <div class="tli">
                <div class="tdot" style="background:var(--teal)"></div>Natural Gas Pricing
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--teal)"></div>Seasonal Demand (Winter/Summer)
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--teal)"></div>Storage &amp; Supply Data
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--teal)"></div>LNG Market Overview
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--teal)"></div>Weather Impact on Prices
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:68%;background:var(--teal)"></div>
              </div>
              <div class="mc-foot">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--teal)"></i> 6 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--teal)"></i> 3h 20m</span></div>
                <button class="bstart" style="background:var(--teal)" onclick="openDetail('gas')"><i
                    class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M3 OPEC -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="opec">
            <div class="mc" style="--ac:var(--navy);--aglow:rgba(30,58,95,.1);--isbg:var(--navy-s)">
              <div class="mc-bar"></div><span class="mc-num">03</span>
              <div class="mc-icon" style="background:var(--navy-s);color:var(--navy)"><i class="fas fa-globe"></i></div>
              <div class="mc-tag" style="color:var(--navy)">Module 03 · Geopolitics</div>
              <div class="mc-title">OPEC &amp; Geopolitics</div>
              <p class="mc-desc">Understand how global politics and OPEC decisions influence energy prices and market
                volatility.</p>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>OPEC &amp; OPEC+ Decisions
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>Production Cuts &amp; Output Levels
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>Geopolitical Conflicts Impact
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>Middle East Influence
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>Sanctions &amp; Trade Policies
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:58%;background:var(--navy)"></div>
              </div>
              <div class="mc-foot">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--navy)"></i> 8 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--navy)"></i> 4h 10m</span></div>
                <button class="bstart" style="background:var(--navy)"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M4 Renewables -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="renewables">
            <div class="mc" style="--ac:var(--green);--aglow:rgba(22,101,52,.1);--isbg:var(--green-s)">
              <div class="mc-bar"></div><span class="mc-num">04</span>
              <div class="mc-icon" style="background:var(--green-s);color:var(--green)"><i class="fas fa-leaf"></i>
              </div>
              <div class="mc-tag" style="color:var(--green)">Module 04 · Renewables</div>
              <div class="mc-title">Renewable Energy Trends</div>
              <p class="mc-desc">Analyze the shift towards clean energy and its impact on traditional markets and ESG
                investing.</p>
              <div class="tli">
                <div class="tdot" style="background:var(--green)"></div>Solar &amp; Wind Energy Growth
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--green)"></div>Government Policies &amp; Incentives
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--green)"></div>ESG Investing Trends
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--green)"></div>Transition from Fossil Fuels
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--green)"></div>Future Energy Demand
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:48%;background:var(--green)"></div>
              </div>
              <div class="mc-foot">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--green)"></i> 6 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--green)"></i> 3h 10m</span></div>
                <button class="bstart" style="background:var(--green)" onclick="openDetail('renewables')"><i
                    class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M5 Energy Trading Strategies -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="strategies">
            <div class="mc" style="--ac:var(--amber);--aglow:rgba(180,83,9,.1);--isbg:var(--amber-s)">
              <div class="mc-bar"></div><span class="mc-num">05</span>
              <div class="mc-icon" style="background:var(--amber-s);color:var(--amber)"><i class="fas fa-chart-bar"></i>
              </div>
              <div class="mc-tag" style="color:var(--amber)">Module 05 · Strategies</div>
              <div class="mc-title">Energy Trading Strategies</div>
              <p class="mc-desc">Learn practical strategies to trade energy commodities effectively with high accuracy
                and discipline.</p>
              <div class="tli">
                <div class="tdot" style="background:var(--amber)"></div>Trend Trading in Oil &amp; Gas
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--amber)"></div>Breakout Strategies
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--amber)"></div>News-Based Trading
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--amber)"></div>Correlation with USD
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--amber)"></div>Volatility Trading
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:42%;background:var(--amber)"></div>
              </div>
              <div class="mc-foot">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--amber)"></i> 9 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--amber)"></i> 4h 50m</span></div>
                <button class="bstart" style="background:var(--amber)"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M6 Fundamental Analysis -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="fundamental">
            <div class="mc" style="--ac:var(--purple);--aglow:rgba(107,33,168,.1);--isbg:var(--purple-s)">
              <div class="mc-bar"></div><span class="mc-num">06</span>
              <div class="mc-icon" style="background:var(--purple-s);color:var(--purple)"><i class="fas fa-brain"></i>
              </div>
              <div class="mc-tag" style="color:var(--purple)">Module 06 · Fundamental</div>
              <div class="mc-title">Fundamental Analysis in Energy</div>
              <p class="mc-desc">Evaluate real-world factors affecting energy markets from supply chains to global
                economic indicators.</p>
              <div class="tli">
                <div class="tdot" style="background:var(--purple)"></div>Supply Chain Disruptions
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--purple)"></div>Global Demand Trends
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--purple)"></div>Economic Indicators
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--purple)"></div>Inflation Impact
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--purple)"></div>Industrial Consumption
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:35%;background:var(--purple)"></div>
              </div>
              <div class="mc-foot">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--purple)"></i> 7 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--purple)"></i> 3h 55m</span></div>
                <button class="bstart" style="background:var(--purple)"><i class="fas fa-arrow-right"></i>
                  Start</button>
              </div>
            </div>
          </div>

          <!-- M7 Technical Analysis -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="technical">
            <div class="mc" style="--ac:var(--zed-primary);--aglow:var(--zed-light-red-hover);--isbg:var(--zed-light-red-hover)">
              <div class="mc-bar"></div><span class="mc-num">07</span>
              <div class="mc-icon"><i class="fas fa-chart-line"></i></div>
              <div class="mc-tag">Module 07 · Technical</div>
              <div class="mc-title">Technical Analysis for Energy Markets</div>
              <p class="mc-desc">Use charts and indicators for better trade timing across oil, gas, and energy commodity
                markets.</p>
              <div class="tli">
                <div class="tdot"></div>Support &amp; Resistance
              </div>
              <div class="tli">
                <div class="tdot"></div>Moving Averages
              </div>
              <div class="tli">
                <div class="tdot"></div>RSI &amp; MACD
              </div>
              <div class="tli">
                <div class="tdot"></div>Trendlines
              </div>
              <div class="tli">
                <div class="tdot"></div>Volume Analysis
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:28%"></div>
              </div>
              <div class="mc-foot">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"></i> 8 videos</span><span
                    class="fchip"><i class="fas fa-clock"></i> 4h 20m</span></div>
                <button class="bstart"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M8 Futures & Derivatives -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="futures">
            <div class="mc" style="--ac:var(--navy);--aglow:rgba(30,58,95,.1);--isbg:var(--navy-s)">
              <div class="mc-bar"></div><span class="mc-num">08</span>
              <div class="mc-icon" style="background:var(--navy-s);color:var(--navy)"><i class="fas fa-gear"></i></div>
              <div class="mc-tag" style="color:var(--navy)">Module 08 · Derivatives · Pro</div>
              <div class="mc-title">Energy Futures &amp; Derivatives</div>
              <p class="mc-desc">Understand advanced trading instruments in energy markets including options, hedging,
                and leverage.</p>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>Oil Futures Contracts
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>Natural Gas Futures
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>Options Trading Basics
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>Hedging Strategies
              </div>
              <div class="tli">
                <div class="tdot" style="background:var(--navy)"></div>Margin &amp; Leverage
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:20%;background:var(--navy)"></div>
              </div>
              <div class="mc-foot">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--navy)"></i> 10 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--navy)"></i> 5h 30m</span></div>
                <button class="bstart" style="background:var(--navy)"><i class="fas fa-lock-open"></i> Unlock</button>
              </div>
            </div>
          </div>

          <!-- M9 Risk -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="risk">
            <div class="mc" style="--ac:var(--zed-primary);--aglow:var(--zed-light-red-hover);--isbg:var(--zed-light-red-hover)">
              <div class="mc-bar"></div><span class="mc-num">09</span>
              <div class="mc-icon"><i class="fas fa-shield-halved"></i></div>
              <div class="mc-tag">Module 09 · Risk Management</div>
              <div class="mc-title">Risk Management in Energy Trading</div>
              <p class="mc-desc">Protect your capital in highly volatile energy markets with proven risk and capital
                management techniques.</p>
              <div class="tli">
                <div class="tdot"></div>Position Sizing
              </div>
              <div class="tli">
                <div class="tdot"></div>Stop Loss Strategies
              </div>
              <div class="tli">
                <div class="tdot"></div>Risk-Reward Ratio
              </div>
              <div class="tli">
                <div class="tdot"></div>Diversification
              </div>
              <div class="tli">
                <div class="tdot"></div>Managing Market Volatility
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:14%"></div>
              </div>
              <div class="mc-foot">
                <div class="d-flex gap-3"><span class="fchip"><i class="fas fa-play-circle"></i> 7 videos</span><span
                    class="fchip"><i class="fas fa-clock"></i> 3h 40m</span></div>
                <button class="bstart" onclick="openDetail('risk')"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div><!-- /modules -->


  <!-- ════════════ PAGE: VIDEOS ════════════ -->
  <div class="page" id="page-videos">
    <div class="page-hero">
      <div class="hero-ring" style="width:400px;height:400px;top:-190px;right:-100px;"></div>
      <div class="container text-center position-relative">
        <div class="hero-tag"><span class="dot"></span> Video Library</div>
        <h1 class="hero-h">Video <em>Sessions</em></h1>
        <p class="hero-sub">Watch recorded webinars and live replays. New sessions added every week.</p>
      </div>
    </div>
    <section class="bg2">
      <div class="container">
        <div class="row g-4">
          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vc" style="--ac:var(--zed-primary);--aglow:rgba(194,84,10,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#fff7ed,#fed7aa)">
                <div class="vanim" id="v1"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">46:22</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--zed-primary)"><i class="fas fa-oil-well me-1"></i>Crude Oil</div>
                <div class="vtitle">WTI vs Brent: What Drives the Spread?</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Dr. Patel</span><span><i class="fas fa-eye"></i>
                    5.2K</span><span><i class="fas fa-clock"></i> 46min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vc" style="--ac:var(--teal);--aglow:rgba(14,116,144,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#ecfeff,#a5f3fc)">
                <div class="vanim" id="v2"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay" style="background:var(--teal)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:var(--teal);color:#fff"><span class="blink"
                    style="background:#fff"></span> NEW</div>
                <div class="vdur">53:08</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--teal)"><i class="fas fa-fire-flame-curved me-1"></i>Natural Gas
                </div>
                <div class="vtitle">LNG Markets: Seasonal Demand &amp; Price Cycles</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> K. Zhao</span><span><i class="fas fa-eye"></i>
                    3.8K</span><span><i class="fas fa-clock"></i> 53min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vc" style="--ac:var(--green);--aglow:rgba(22,101,52,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#f0fdf4,#bbf7d0)">
                <div class="vanim" id="v3"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay" style="background:var(--green)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">41:30</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--green)"><i class="fas fa-leaf me-1"></i>Renewables</div>
                <div class="vtitle">ESG Investing &amp; the Clean Energy Transition</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> A. Singh</span><span><i class="fas fa-eye"></i>
                    6.4K</span><span><i class="fas fa-clock"></i> 41min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vc" style="--ac:var(--navy);--aglow:rgba(30,58,95,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#eff6ff,#bfdbfe)">
                <div class="vanim" id="v4"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay" style="background:var(--navy)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">58:44</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--navy)"><i class="fas fa-globe me-1"></i>OPEC</div>
                <div class="vtitle">How OPEC+ Decisions Move Oil Prices</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> M. Hassan</span><span><i class="fas fa-eye"></i>
                    7.1K</span><span><i class="fas fa-clock"></i> 58min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vc" style="--ac:var(--amber);--aglow:rgba(180,83,9,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#fffbeb,#fde68a)">
                <div class="vanim" id="v5"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay" style="background:var(--amber)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">44:17</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--amber)"><i class="fas fa-chart-bar me-1"></i>Strategies</div>
                <div class="vtitle">Breakout Strategies for Oil &amp; Gas Trading</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> R. Kapoor</span><span><i class="fas fa-eye"></i>
                    4.3K</span><span><i class="fas fa-clock"></i> 44min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vc" style="--ac:var(--zed-primary);--aglow:var(--zed-light-red-hover);border-color:rgba(217,43,31,.3)">
              <div class="vthumb" style="background:linear-gradient(135deg,#fdf2f1,#fecaca)">
                <div class="vanim" id="v6"></div>
                <div class="vgradient"></div>
                <div class="vplay-wrap">
                  <div class="vplay"><i class="fas fa-broadcast-tower"></i></div>
                </div>
                <div class="vstatus" style="background:var(--zed-primary);color:#fff"><span class="blink"
                    style="background:#fff"></span> LIVE SOON</div>
                <div class="vdur" style="background:var(--zed-primary)">LIVE</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--zed-primary)"><i class="fas fa-globe me-1"></i>OPEC</div>
                <div class="vtitle">OPEC+ Cuts &amp; Global Oil Price Impact — Live</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> M. Hassan</span><span><i
                      class="fas fa-calendar"></i> Jun 11, 2026</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div><!-- /videos -->


  <!-- ════════════ PAGE: CURRICULUM ════════════ -->
  <div class="page" id="page-curriculum">
    <div class="page-hero">
      <div class="container text-center">
        <div class="hero-tag"><span class="dot"></span> Full Syllabus</div>
        <h1 class="hero-h">Course <em>Curriculum</em></h1>
        <p class="hero-sub">All 9 modules indexed. Click any module to expand its full topic list.</p>
      </div>
    </div>
    <section class="bg2">
      <div class="container" style="max-width:800px">
        <div id="curr-list"></div>
      </div>
    </section>
  </div><!-- /curriculum -->


  <!-- ════════════ PAGE: DETAIL ════════════ -->
  <div class="page" id="page-detail">
    <div class="detail-hero">
      <div class="container">
        <button class="back-btn" onclick="goPage('modules')"><i class="fas fa-arrow-left"></i> Back to Modules</button>
        <div class="dbadge" id="d-badge"></div>
        <h1 class="dtitle" id="d-title"></h1>
        <p class="ddesc" id="d-desc"></p>
      </div>
    </div>
    <section class="bg2">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-7" id="d-videos"></div>
          <div class="col-lg-5">
            <div
              style="background:var(--zed-light-bg);border:1px solid var(--zed-border-color);border-radius:12px;padding:24px;position:sticky;top:100px;">
              <div class="sover mb-2">What you'll learn</div>
              <div id="d-topics"></div>
              <hr style="border-color:var(--zed-border-color);margin:18px 0" />
              <div class="d-flex gap-3 flex-wrap mb-4">
                <span class="fchip" id="d-meta-v"></span>
                <span class="fchip" id="d-meta-d"></span>
                <span class="fchip" id="d-meta-l"></span>
              </div>
              <button class="bstart" id="d-cta" style="width:100%;justify-content:center;padding:13px"><i
                  class="fas fa-play-circle"></i> Start Module</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div><!-- /detail -->

  <script>
    // ── PAGE NAVIGATION ──
    const PAGES = ['home', 'modules', 'videos', 'curriculum', 'detail'];
    function goPage(id) {
      PAGES.forEach(p => {
        document.getElementById('page-' + p)?.classList.toggle('active', p === id);
        const nb = document.getElementById('nb-' + p);
        if (nb) nb.classList.toggle('active', p === id);
      });
      window.scrollTo({ top: 0, behavior: 'smooth' });
      if (id === 'curriculum') buildCurr();
      setTimeout(triggerReveal, 100);
      setTimeout(triggerProg, 200);
      setTimeout(initBars, 50);
    }

    // ── BARS ──
    const BAR_DEFS = [
      ['hv1', '#c2540a'], ['hv2', '#0e7490'], ['hv3', '#166534'], ['hv4', '#D92B1F'],
      ['v1', '#c2540a'], ['v2', '#0e7490'], ['v3', '#166534'],
      ['v4', '#1e3a5f'], ['v5', '#b45309'], ['v6', '#D92B1F'],
    ];
    function buildBars(id, col) {
      const el = document.getElementById(id);
      if (!el || el.childElementCount > 0) return;
      const hs = [38, 62, 30, 82, 46, 72, 28, 90, 52, 40, 76, 56, 88, 36, 66, 28, 82, 50, 74, 44];
      hs.forEach((h, i) => {
        const b = document.createElement('div');
        b.className = 'vbar';
        b.style.cssText = `height:${h}%;background:${col};opacity:.55;animation-delay:${i * .1}s;animation-duration:${1.6 + Math.random() * 1.2}s;`;
        el.appendChild(b);
      });
    }
    function initBars() { BAR_DEFS.forEach(([id, c]) => buildBars(id, c)); }
    initBars();

    // ── SCROLL REVEAL ──
    function triggerReveal() {
      const obs = new IntersectionObserver(entries => {
        entries.forEach((e, i) => {
          if (e.isIntersecting) { setTimeout(() => e.target.classList.add('in'), i * 65); obs.unobserve(e.target); }
        });
      }, { threshold: .08 });
      document.querySelectorAll('.page.active .reveal').forEach(r => { r.classList.remove('in'); obs.observe(r); });
    }
    triggerReveal();

    function triggerProg() {
      const pObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            e.target.querySelectorAll('.prog-bar').forEach(b => { b.style.animation = 'none'; void b.offsetWidth; b.style.animation = 'pFill 1.3s .2s ease forwards'; });
            pObs.unobserve(e.target);
          }
        });
      }, { threshold: .2 });
      document.querySelectorAll('.page.active .mc').forEach(c => pObs.observe(c));
    }
    triggerProg();

    // ── FILTER ──
    function fmod(el, f) {
      document.querySelectorAll('.fpill').forEach(p => p.classList.remove('active'));
      el.classList.add('active');
      document.querySelectorAll('#modgrid>[data-cat]').forEach(c => {
        c.style.display = (f === 'all' || c.dataset.cat === f) ? '' : 'none';
      });
    }

    // ── DETAIL DATA ──
    const DETAILS = {
      crude: {
        color: '#c2540a', bg: '#fff7ed', label: 'Module 01 · Crude Oil',
        title: 'Crude Oil Market <em>Fundamentals</em>',
        desc: 'Learn the complete picture of crude oil trading — from WTI vs Brent differentials to EIA inventory reports and refinery dynamics that move global prices.',
        topics: ['Types of Crude Oil (WTI, Brent)', 'Global Supply & Demand Factors', 'Oil Pricing Mechanism', 'Role of Refineries', 'Inventory Reports (EIA Data)'],
        vids: 7, dur: '3h 45m', lvl: 'Beginner',
        videos: [
          { t: 'WTI vs Brent: What Drives the Spread?', d: '46:22', s: 'REPLAY', bg: '#fff7ed,#fed7aa' },
          { t: 'EIA Inventory Reports: How to Trade Them', d: '38:15', s: 'NEW', bg: '#fff7ed,#fde8c8' },
          { t: 'Oil Pricing Mechanisms Explained', d: '29:44', s: 'REPLAY', bg: '#fff7ed,#fed7aa' },
        ]
      },
      gas: {
        color: '#0e7490', bg: '#ecfeff', label: 'Module 02 · Natural Gas',
        title: 'Natural Gas <em>Market Insights</em>',
        desc: 'Explore natural gas trading from Henry Hub pricing and LNG export dynamics to seasonal demand patterns and storage cycle analysis.',
        topics: ['Natural Gas Pricing', 'Seasonal Demand (Winter/Summer)', 'Storage & Supply Data', 'LNG Market Overview', 'Weather Impact on Prices'],
        vids: 6, dur: '3h 20m', lvl: 'Beginner',
        videos: [
          { t: 'LNG Markets: Seasonal Demand & Price Cycles', d: '53:08', s: 'NEW', bg: '#ecfeff,#a5f3fc' },
          { t: 'Henry Hub vs TTF: Global Gas Pricing', d: '41:20', s: 'REPLAY', bg: '#ecfeff,#cffafe' },
          { t: 'Storage Reports & Their Market Impact', d: '34:55', s: 'REPLAY', bg: '#ecfeff,#a5f3fc' },
        ]
      },
      renewables: {
        color: '#166534', bg: '#f0fdf4', label: 'Module 04 · Renewable Energy',
        title: 'Renewable Energy <em>Trends</em>',
        desc: 'Analyze the accelerating shift towards clean energy — solar, wind, ESG investing, government incentives, and how renewables are disrupting traditional commodity markets.',
        topics: ['Solar & Wind Energy Growth', 'Government Policies & Incentives', 'ESG Investing Trends', 'Transition from Fossil Fuels', 'Future Energy Demand'],
        vids: 6, dur: '3h 10m', lvl: 'Intermediate',
        videos: [
          { t: 'ESG Investing & the Clean Energy Transition', d: '41:30', s: 'REPLAY', bg: '#f0fdf4,#bbf7d0' },
          { t: 'Solar & Wind: Capacity Growth & Trading Plays', d: '48:12', s: 'NEW', bg: '#f0fdf4,#d1fae5' },
          { t: 'Government Incentives Shaping Energy Markets', d: '35:47', s: 'REPLAY', bg: '#f0fdf4,#bbf7d0' },
        ]
      },
      risk: {
        color: '#D92B1F', bg: '#fdf2f1', label: 'Module 09 · Risk Management',
        title: 'Risk Management in <em>Energy Trading</em>',
        desc: 'Protect your capital in some of the world\'s most volatile markets with professional risk management tools, position sizing models, and volatility-adapted strategies.',
        topics: ['Position Sizing', 'Stop Loss Strategies', 'Risk-Reward Ratio', 'Diversification', 'Managing Market Volatility'],
        vids: 7, dur: '3h 40m', lvl: 'All Levels',
        videos: [
          { t: 'Position Sizing for Volatile Commodity Markets', d: '37:44', s: 'REPLAY', bg: '#fdf2f1,#fecaca' },
          { t: 'Stop-Loss Placement in Oil & Gas Trades', d: '42:10', s: 'NEW', bg: '#fdf2f1,#fecaca' },
          { t: 'Diversification Across the Energy Sector', d: '31:28', s: 'REPLAY', bg: '#fdf2f1,#fecaca' },
        ]
      }
    };

    function openDetail(key) {
      const d = DETAILS[key];
      if (!d) return;
      const badge = document.getElementById('d-badge');
      badge.textContent = d.label;
      badge.style.cssText = `background:${d.bg};color:${d.color};border:1px solid ${d.color}33;border-radius:20px;padding:5px 16px;font-size:.63rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;`;
      document.getElementById('d-title').innerHTML = d.title;
      document.getElementById('d-title').querySelectorAll('em').forEach(e => e.style.color = d.color);
      document.getElementById('d-desc').textContent = d.desc;
      document.getElementById('d-cta').style.background = d.color;
      document.getElementById('d-topics').innerHTML = d.topics.map(t => `<div class="tli"><div class="tdot" style="background:${d.color}"></div>${t}</div>`).join('');
      document.getElementById('d-meta-v').innerHTML = `<i class="fas fa-play-circle" style="color:${d.color}"></i> ${d.vids} videos`;
      document.getElementById('d-meta-d').innerHTML = `<i class="fas fa-clock" style="color:${d.color}"></i> ${d.dur}`;
      document.getElementById('d-meta-l').innerHTML = `<i class="fas fa-signal" style="color:${d.color}"></i> ${d.lvl}`;
      document.getElementById('d-videos').innerHTML = d.videos.map((v, i) => `
    <div class="vc mb-4">
      <div class="vthumb" style="background:linear-gradient(135deg,${v.bg})">
        <div class="vanim" id="dv${key}${i}"></div>
        <div class="vgradient"></div>
        <div class="vplay-wrap"><div class="vplay" style="background:${d.color};box-shadow:0 8px 28px ${d.color}44"><i class="fas fa-play ms-1"></i></div></div>
        <div class="vstatus" style="background:${v.s === 'NEW' ? d.color : 'rgba(0,0,0,.6)'};color:#fff">${v.s === 'NEW' ? '<span class="blink" style="background:#fff"></span>' : ''} ${v.s}</div>
        <div class="vdur">${v.d}</div>
      </div>
      <div class="vbody"><div class="vtitle">${v.t}</div></div>
    </div>`).join('');
      d.videos.forEach((_, i) => buildBars(`dv${key}${i}`, d.color));
      goPage('detail');
    }

    // ── CURRICULUM ──
    const CURR = [
      { n: '01', t: 'Crude Oil Market Fundamentals', c: '#c2540a', topics: ['Types of Crude Oil (WTI, Brent)', 'Global Supply & Demand Factors', 'Oil Pricing Mechanism', 'Role of Refineries', 'Inventory Reports (EIA Data)'] },
      { n: '02', t: 'Natural Gas Market Insights', c: '#0e7490', topics: ['Natural Gas Pricing', 'Seasonal Demand (Winter/Summer)', 'Storage & Supply Data', 'LNG Market Overview', 'Weather Impact on Prices'] },
      { n: '03', t: 'OPEC & Geopolitics', c: '#1e3a5f', topics: ['OPEC & OPEC+ Decisions', 'Production Cuts & Output Levels', 'Geopolitical Conflicts Impact', 'Middle East Influence', 'Sanctions & Trade Policies'] },
      { n: '04', t: 'Renewable Energy Trends', c: '#166534', topics: ['Solar & Wind Energy Growth', 'Government Policies & Incentives', 'ESG Investing Trends', 'Transition from Fossil Fuels', 'Future Energy Demand'] },
      { n: '05', t: 'Energy Trading Strategies', c: '#b45309', topics: ['Trend Trading in Oil & Gas', 'Breakout Strategies', 'News-Based Trading', 'Correlation with USD', 'Volatility Trading'] },
      { n: '06', t: 'Fundamental Analysis in Energy', c: '#6b21a8', topics: ['Supply Chain Disruptions', 'Global Demand Trends', 'Economic Indicators', 'Inflation Impact', 'Industrial Consumption'] },
      { n: '07', t: 'Technical Analysis for Energy Markets', c: '#D92B1F', topics: ['Support & Resistance', 'Moving Averages', 'RSI & MACD', 'Trendlines', 'Volume Analysis'] },
      { n: '08', t: 'Energy Futures & Derivatives', c: '#1e3a5f', topics: ['Oil Futures Contracts', 'Natural Gas Futures', 'Options Trading Basics', 'Hedging Strategies', 'Margin & Leverage'] },
      { n: '09', t: 'Risk Management in Energy Trading', c: '#D92B1F', topics: ['Position Sizing', 'Stop Loss Strategies', 'Risk-Reward Ratio', 'Diversification', 'Managing Market Volatility'] },
    ];
    function buildCurr() {
      const el = document.getElementById('curr-list');
      if (el.innerHTML.trim()) return;
      el.innerHTML = CURR.map((m, i) => `
    <div class="citem" style="border-color:var(--zed-border-color)">
      <div class="chead" onclick="toggleC(${i})">
        <div class="chead-l">
          <span class="cidx" style="color:${m.c}">${m.n}</span>
          <span class="cname">${m.t}</span>
        </div>
        <span class="cbadge" style="color:${m.c};background:${m.c}14">${m.topics.length} topics <i class="fas fa-chevron-down ms-1" id="ci${i}" style="font-size:.5rem;transition:transform .2s"></i></span>
      </div>
      <div class="cbody" id="cb${i}">
        ${m.topics.map(t => `<p style="font-size:.79rem;color:var(--zed-secondary);padding:5px 0;border-bottom:1px dashed var(--zed-border-color);margin:0"><span style="color:${m.c};margin-right:8px">›</span>${t}</p>`).join('')}
      </div>
    </div>`).join('');
    }
    function toggleC(i) {
      const b = document.getElementById('cb' + i), ic = document.getElementById('ci' + i);
      b.classList.toggle('open');
      ic.style.transform = b.classList.contains('open') ? 'rotate(180deg)' : 'rotate(0)';
    }
  </script>

<?php
include_once ('elements/footer.php');
?>
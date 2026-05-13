<?php 
include_once ('elements/header.php');
?>
 
  <style>
    
    /* ── PAGE SYSTEM ── */
    .page {
      animation: fadeIn .35s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px)
      }

      to {
        opacity: 1;
        transform: translateY(0)
      }
    }

    /* ── HERO (shared) ── */
    .page-hero {
      padding: 72px 0 56px;
      position: relative;
      overflow: hidden;
      background: var(--zed-card-bg);
    }

    .hero-ring {
      position: absolute;
      border-radius: 50%;
      border: 1px solid var(--zed-banner-bg-end);
      pointer-events: none;
    }

    .hero-tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: .66rem;
      font-weight: 700;
      letter-spacing: .2em;
      text-transform: uppercase;
      color: var(--zed-primary);
      border: 1px solid rgba(224, 43, 32, .2);
      border-radius: 20px;
      padding: 5px 16px;
      margin-bottom: 20px;
    }

    .hero-tag .blink {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--zed-primary);
      animation: blink 1.2s ease-in-out infinite;
    }

    @keyframes blink {

      0%,
      100% {
        opacity: 1
      }

      50% {
        opacity: .3
      }
    }

    .hero-h {
      
      font-size: clamp(2.8rem, 6.5vw, 5.5rem);
      font-weight: 700;
      line-height: 1.05;
      color: var(--zed-dark-text);
      margin-bottom: 18px;
    }

    .hero-h em {
      font-style: italic;
      color: var(--zed-primary);
    }

    .hero-sub {
      font-size: .95rem;
      color: var(--zed-secondary);
      max-width: 520px;
      margin: 0 auto 36px;
      line-height: 1.8;
    }

    .stat-strip {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 0;
      border: 1px solid var(--zed-banner-bg-end);
      border-radius: 10px;
      max-width: 680px;
      margin: 0 auto;
      overflow: hidden;
    }

    .sstat {
      flex: 1;
      min-width: 110px;
      padding: 18px 12px;
      text-align: center;
      border-right: 1px solid var(--zed-banner-bg-end);
      transition: background .2s;
    }

    .sstat:last-child {
      border-right: none;
    }

    .sstat:hover {
      background: var(--zed-light-red-hover);
    }

    .sstat-n {
      
      font-size: 1.75rem;
      font-weight: 700;
      color: var(--zed-primary);
      line-height: 1;
    }

    .sstat-l {
      font-size: .62rem;
      font-weight: 600;
      letter-spacing: .12em;
      text-transform: uppercase;
      color: var(--zed-secondary);
      margin-top: 3px;
    }

    /* ── SECTION LABELS ── */
    .s-over {
      font-size: .65rem;
      font-weight: 700;
      letter-spacing: .2em;
      text-transform: uppercase;
      color: var(--zed-primary);
      margin-bottom: 6px;
    }

    .s-h {
      
      font-size: clamp(1.7rem, 3.5vw, 2.6rem);
      font-weight: 700;
      color: var(--zed-dark-text);
    }

    .s-h em {
      font-style: italic;
      color: var(--zed-primary);
    }

    .s-rule {
      width: 40px;
      height: 2px;
      background: var(--zed-primary);
      margin: 12px auto 0;
    }

    /* ── MODULE CARDS ── */
    .mcard {
      background: var(--zed-card-bg);
      border: 1px solid var(--zed-banner-bg-end);
      border-radius: 14px;
      padding: 28px 24px 22px;
      position: relative;
      overflow: hidden;
      transition: transform .3s, box-shadow .3s, border-color .3s;
      height: 100%;
    }

    .mcard::after {
      content: '';
      position: absolute;
      bottom: 0;
      right: 0;
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: radial-gradient(circle, var(--ac-glow, var(--zed-light-red-hover)) 0%, transparent 70%);
      pointer-events: none;
    }

    .mcard:hover {
      transform: translateY(-5px);
      box-shadow: 0 18px 50px rgba(0, 0, 0, .08);
      border-color: var(--ac, var(--zed-primary));
    }

    .mcard-accent {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: var(--ac, var(--zed-primary));
      border-radius: 14px 14px 0 0;
      transform: scaleX(0);
      transform-origin: left;
      transition: transform .3s ease;
    }

    .mcard:hover .mcard-accent {
      transform: scaleX(1);
    }

    .mcard-num {
      position: absolute;
      top: 18px;
      right: 20px;
      
      font-size: 2.8rem;
      font-weight: 700;
      color: var(--zed-banner-bg-end);
      line-height: 1;
      transition: color .3s;
      user-select: none;
    }

    .mcard:hover .mcard-num {
      color: var(--ac-glow, var(--zed-light-red-hover));
    }

    .mcard-icon {
      width: 46px;
      height: 46px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      margin-bottom: 14px;
      background: var(--icon-bg, var(--zed-primary-hover));
      color: var(--ac, var(--zed-primary));
    }

    .mcard-tag {
      font-size: .62rem;
      font-weight: 700;
      letter-spacing: .14em;
      text-transform: uppercase;
      color: var(--ac, var(--zed-primary));
      margin-bottom: 5px;
    }

    .mcard-title {
      
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--zed-dark-text);
      line-height: 1.3;
      margin-bottom: 8px;
    }

    .mcard-desc {
      font-size: .79rem;
      color: var(--zed-secondary);
      line-height: 1.7;
      margin-bottom: 16px;
    }

    .topic-li {
      display: flex;
      align-items: flex-start;
      gap: 9px;
      font-size: .78rem;
      color: var(--zed-dark-text);
      padding: 6px 0;
      border-bottom: 1px dashed var(--zed-banner-bg-end);
      transition: gap .2s;
    }

    .topic-li:last-child {
      border-bottom: none;
    }

    .mcard:hover .topic-li {
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

    .h-chip {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-size: .65rem;
      font-weight: 700;
      letter-spacing: .08em;
      padding: 4px 12px;
      border-radius: 4px;
      border: 1px solid var(--ac, var(--zed-primary));
      color: var(--ac, var(--zed-primary));
      background: var(--icon-bg, var(--zed-primary-hover));
      margin-top: 4px;
    }

    .prog-wrap {
      height: 4px;
      border-radius: 2px;
      background: var(--zed-banner-bg-end);
      margin-top: 14px;
      overflow: hidden;
    }

    .prog-bar {
      height: 100%;
      border-radius: 2px;
      background: var(--ac, var(--zed-primary));
      transform: scaleX(0);
      transform-origin: left;
      animation: progFill 1.3s .2s ease forwards;
    }

    @keyframes progFill {
      to {
        transform: scaleX(1)
      }
    }

    .mcard-foot {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: 14px;
      border-top: 1px solid var(--zed-banner-bg-end);
      margin-top: 16px;
    }

    .foot-chips {
      display: flex;
      gap: 10px;
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

    .btn-go {
      
      font-size: .7rem;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      padding: 8px 20px;
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

    .btn-go:hover {
      opacity: .85;
      transform: scale(.97);
    }

    /* ── DETAIL PAGE ── */
    .detail-hero {
      padding: 60px 0 50px;
      background: var(--zed-card-back);
      border-bottom: 1px solid var(--zed-banner-bg-end);
    }

    .back-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: .75rem;
      font-weight: 700;
      letter-spacing: .1em;
      text-transform: uppercase;
      color: var(--zed-secondary);
      background: transparent;
      border: 1px solid var(--zed-banner-bg-end);
      border-radius: 5px;
      padding: 7px 16px;
      cursor: pointer;
      transition: all .2s;
      margin-bottom: 28px;
    }

    .back-btn:hover {
      color: var(--zed-primary);
      border-color: var(--zed-primary);
    }

    .detail-badge {
      display: inline-block;
      font-size: .62rem;
      font-weight: 700;
      letter-spacing: .16em;
      text-transform: uppercase;
      padding: 4px 14px;
      border-radius: 20px;
      margin-bottom: 14px;
    }

    .detail-h {
      
      font-size: clamp(2rem, 5vw, 3.5rem);
      font-weight: 700;
      color: var(--zed-dark-text);
      line-height: 1.1;
      margin-bottom: 14px;
    }

    .detail-h em {
      font-style: italic;
    }

    .detail-desc {
      font-size: .95rem;
      color: var(--zed-secondary);
      max-width: 600px;
      line-height: 1.8;
    }

    /* Video grid */
    .vcard {
      background: var(--zed-card-bg);
      border: 1px solid var(--zed-banner-bg-end);
      border-radius: 12px;
      overflow: hidden;
      transition: transform .3s, box-shadow .3s;
      cursor: pointer;
    }

    .vcard:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 48px rgba(0, 0, 0, .09);
    }

    .vthumb {
      position: relative;
      aspect-ratio: 16/9;
      background: var(--zed-banner-bg-start);
      overflow: hidden;
    }

    .vanim {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: flex-end;
      gap: 2px;
      padding: 16px 12px 0;
    }

    .vbar {
      flex: 1;
      border-radius: 2px 2px 0 0;
      animation: vbarAnim 2s ease-in-out infinite alternate;
      min-height: 6px;
    }

    @keyframes vbarAnim {
      from {
        transform: scaleY(1)
      }

      to {
        transform: scaleY(.35)
      }
    }

    .voverlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, transparent 40%, rgba(255, 255, 255, .4));
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
      box-shadow: 0 8px 28px var(--ac-glow, var(--zed-light-red-hover));
      transition: transform .2s;
    }

    .vcard:hover .vplay {
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
      padding: 3px 10px;
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
      
      font-size: .98rem;
      font-weight: 700;
      color: var(--zed-dark-text);
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

    /* SCROLL REVEAL */
    .reveal {
      transform: translateY(26px);
      transition: opacity .48s ease, transform .48s ease;
    }

    .reveal.in {
      opacity: 1;
      transform: translateY(0);
    }

    /* MISC */
    section {
      padding: 72px 0;
    }

    .bg2 {
      background: var(--zed-card-back);
    }


    @media(max-width:576px) {
      .stat-strip {
        border-radius: 0;
        border-left: none;
        border-right: none;
      }

      .sstat {
        border-right: none;
        border-bottom: 1px solid var(--zed-banner-bg-end);
      }

      .sstat:last-child {
        border-bottom: none;
      }

      .nav-links {
        gap: 2px;
      }

      .nav-link {
        padding: 6px 8px;
        font-size: .65rem;
      }
    }
  </style>

  <!-- ══════════════════════════════════
     PAGE: HOME
══════════════════════════════════ -->
  <div class="page active" id="page-home">

    <!-- Hero -->
    <div class="page-hero">
      <div class="hero-ring" style="width:500px;height:500px;top:-200px;right:-150px;"></div>
      <div class="hero-ring" style="width:250px;height:250px;top:-30px;right:100px;"></div>
      <div class="container text-center position-relative">
        <div class="hero-tag"><span class="blink"></span> FinTech Education · 2026</div>
        <h1 class="hero-h">Webinar <em>Technology</em></h1>
        <p class="hero-sub">Understand how modern technology powers trading platforms, financial markets, and the future
          of FinTech.</p>
        <div class="stat-strip">
          <div class="sstat">
            <div class="sstat-n">9</div>
            <div class="sstat-l">Modules</div>
          </div>
          <div class="sstat">
            <div class="sstat-n">45+</div>
            <div class="sstat-l">Topics</div>
          </div>
          <div class="sstat">
            <div class="sstat-n">24h</div>
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

    <!-- Featured 3-up cards -->
    <section class="bg2">
      <div class="container">
        <div class="text-center mb-5 reveal">
          <div class="s-over">Start Here</div>
          <h2 class="s-h">Featured <em>Modules</em></h2>
          <div class="s-rule mx-auto"></div>
        </div>
        <div class="row g-4">

          <div class="col-md-4 reveal">
            <div class="mcard" style="--ac:var(--zed-primary);--ac-glow:var(--zed-light-red-hover);--icon-bg:var(--zed-primary-hover)">
              <div class="mcard-accent"></div>
              <span class="mcard-num">01</span>
              <div class="mcard-icon"><i class="fas fa-robot"></i></div>
              <div class="mcard-tag">Algorithmic Trading</div>
              <div class="mcard-title">Algorithmic Trading Basics</div>
              <p class="mcard-desc">Learn how automated systems execute trades using predefined rules at machine speed.
              </p>
              <div class="mcard-foot mt-3">
                <div class="foot-chips">
                  <span class="fchip"><i class="fas fa-play-circle"></i> 7 videos</span>
                  <span class="fchip"><i class="fas fa-clock"></i> 3h 40m</span>
                </div>
                <button class="btn-go" onclick="openDetail('algo')"><i class="fas fa-arrow-right"></i> Explore</button>
              </div>
            </div>
          </div>

          <div class="col-md-4 reveal">
            <div class="mcard" style="--ac:var(--purple);--ac-glow:rgba(109,40,217,.1);--icon-bg:#f5f3ff">
              <div class="mcard-accent"></div>
              <span class="mcard-num">02</span>
              <div class="mcard-icon" style="background:#f5f3ff;color:var(--purple)"><i class="fas fa-brain"></i></div>
              <div class="mcard-tag" style="color:var(--purple)">AI & Machine Learning</div>
              <div class="mcard-title">Artificial Intelligence in Trading</div>
              <p class="mcard-desc">How AI and machine learning are transforming trading strategies and market
                prediction.</p>
              <div class="mcard-foot mt-3">
                <div class="foot-chips">
                  <span class="fchip"><i class="fas fa-play-circle" style="color:var(--purple)"></i> 8 videos</span>
                  <span class="fchip"><i class="fas fa-clock" style="color:var(--purple)"></i> 4h 20m</span>
                </div>
                <button class="btn-go" style="background:var(--purple)" onclick="openDetail('ai')"><i
                    class="fas fa-arrow-right"></i> Explore</button>
              </div>
            </div>
          </div>

          <div class="col-md-4 reveal">
            <div class="mcard" style="--ac:var(--cyan);--ac-glow:rgba(8,145,178,.1);--icon-bg:#ecfeff">
              <div class="mcard-accent"></div>
              <span class="mcard-num">04</span>
              <div class="mcard-icon" style="background:#ecfeff;color:var(--cyan)"><i class="fas fa-link"></i></div>
              <div class="mcard-tag" style="color:var(--cyan)">Blockchain & DeFi</div>
              <div class="mcard-title">Blockchain &amp; FinTech Innovation</div>
              <p class="mcard-desc">How blockchain is reshaping financial ecosystems through DeFi, smart contracts, and
                Web3.</p>
              <div class="mcard-foot mt-3">
                <div class="foot-chips">
                  <span class="fchip"><i class="fas fa-play-circle" style="color:var(--cyan)"></i> 6 videos</span>
                  <span class="fchip"><i class="fas fa-clock" style="color:var(--cyan)"></i> 3h 10m</span>
                </div>
                <button class="btn-go" style="background:var(--cyan)" onclick="openDetail('blockchain')"><i
                    class="fas fa-arrow-right"></i> Explore</button>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <button class="btn-go mx-auto" style="width:fit-content;font-size:.78rem;padding:12px 32px;"
            onclick="showPage('modules')">
            <i class="fas fa-th-large"></i> View All 9 Modules
          </button>
        </div>
      </div>
    </section>

    <!-- Quick video preview -->
    <section>
      <div class="container">
        <div class="text-center mb-5 reveal">
          <div class="s-over">Latest Releases</div>
          <h2 class="s-h">Recent <em>Video Sessions</em></h2>
          <div class="s-rule mx-auto"></div>
        </div>
        <div class="row g-4">
          <div class="col-sm-6 col-lg-3 reveal">
            <div class="vcard" style="--ac:var(--zed-primary);--ac-glow:var(--zed-light-red-hover);">
              <div class="vthumb" style="background:linear-gradient(135deg,#fff5f5,#ffe0df)">
                <div class="vanim" id="hv1"></div>
                <div class="voverlay">
                  <div class="vplay"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">44:12</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--zed-primary)">Algo Trading</div>
                <div class="vtitle">Backtesting Your First Automated Strategy</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Dr. Chen</span><span><i class="fas fa-eye"></i>
                    4.1K</span></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 reveal">
            <div class="vcard" style="--ac:var(--purple);--ac-glow:rgba(109,40,217,.15);">
              <div class="vthumb" style="background:linear-gradient(135deg,#f5f3ff,#ede8ff)">
                <div class="vanim" id="hv2"></div>
                <div class="voverlay">
                  <div class="vplay" style="background:var(--purple)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:#6d28d9;color:#fff"><span class="blink"
                    style="background:#fff"></span> NEW</div>
                <div class="vdur">58:34</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--purple)">AI Trading</div>
                <div class="vtitle">Predictive Analytics with Machine Learning Models</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Aisha Patel</span><span><i class="fas fa-eye"></i>
                    7.2K</span></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 reveal">
            <div class="vcard" style="--ac:var(--cyan);--ac-glow:rgba(8,145,178,.15);">
              <div class="vthumb" style="background:linear-gradient(135deg,#ecfeff,#cffafe)">
                <div class="vanim" id="hv3"></div>
                <div class="voverlay">
                  <div class="vplay" style="background:var(--cyan)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">51:07</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--cyan)">Blockchain</div>
                <div class="vtitle">Smart Contracts &amp; DeFi Protocol Deep Dive</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Lena Zhao</span><span><i class="fas fa-eye"></i>
                    5.8K</span></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 reveal">
            <div class="vcard" style="--ac:var(--zed-primary);--ac-glow:var(--zed-light-red-hover);">
              <div class="vthumb" style="background:linear-gradient(135deg,#fff5f5,#ffe8e8)">
                <div class="vanim" id="hv4"></div>
                <div class="voverlay">
                  <div class="vplay"><i class="fas fa-broadcast-tower"></i></div>
                </div>
                <div class="vstatus" style="background:var(--zed-primary);color:#fff"><span class="blink"
                    style="background:#fff"></span> LIVE</div>
                <div class="vdur" style="background:var(--zed-primary)">LIVE</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--zed-primary)">Cybersecurity</div>
                <div class="vtitle">Protecting Your Trading System from Cyber Threats</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> James Okafor</span><span><i
                      class="fas fa-calendar"></i> Jun 11</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <button class="btn-go mx-auto" style="width:fit-content;padding:12px 32px;" onclick="showPage('videos')">
            <i class="fas fa-film"></i> Browse All Videos
          </button>
        </div>
      </div>
    </section>

  </div><!-- /page home -->


  <!-- ══════════════════════════════════
     PAGE: MODULES
══════════════════════════════════ -->
  <div class="page" id="page-modules">

    <div class="page-hero">
      <div class="hero-ring" style="width:400px;height:400px;top:-180px;right:-100px;"></div>
      <div class="container text-center position-relative">
        <div class="hero-tag"><span class="blink"></span> Course Content</div>
        <h1 class="hero-h">All <em>Modules</em></h1>
        <p class="hero-sub">9 comprehensive technology modules covering the full spectrum of modern financial
          technology.</p>
      </div>
    </div>

    <!-- Filter -->
    <div
      style="background:var(--zed-card-bg);border-bottom:1px solid var(--zed-banner-bg-end);padding:12px 0;position:sticky;top:80px;z-index:100;">
      <div class="container d-flex gap-2 flex-wrap">
        <button class="fpill active" data-f="all" onclick="filterMods(this,'all')">All</button>
        <button class="fpill" data-f="algo" onclick="filterMods(this,'algo')">Algorithmic</button>
        <button class="fpill" data-f="ai" onclick="filterMods(this,'ai')">AI & ML</button>
        <button class="fpill" data-f="platform" onclick="filterMods(this,'platform')">Platforms</button>
        <button class="fpill" data-f="blockchain" onclick="filterMods(this,'blockchain')">Blockchain</button>
        <button class="fpill" data-f="hft" onclick="filterMods(this,'hft')">HFT</button>
        <button class="fpill" data-f="cyber" onclick="filterMods(this,'cyber')">Cybersecurity</button>
        <button class="fpill" data-f="data" onclick="filterMods(this,'data')">Data</button>
        <button class="fpill" data-f="cloud" onclick="filterMods(this,'cloud')">Cloud</button>
        <button class="fpill" data-f="future" onclick="filterMods(this,'future')">Future Tech</button>
      </div>
    </div>

    <section class="bg2">
      <div class="container">
        <div class="row g-4" id="modgrid">

          <!-- M1 Algo -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="algo">
            <div class="mcard" style="--ac:var(--zed-primary);--ac-glow:var(--zed-light-red-hover);--icon-bg:var(--zed-primary-hover)">
              <div class="mcard-accent"></div><span class="mcard-num">01</span>
              <div class="mcard-icon"><i class="fas fa-robot"></i></div>
              <div class="mcard-tag">Module 01 · Algorithmic</div>
              <div class="mcard-title">Algorithmic Trading Basics</div>
              <p class="mcard-desc">Learn how automated trading systems execute trades using predefined rules and risk
                controls.</p>
              <div class="topic-li">
                <div class="tdot"></div>What is Algo Trading?
              </div>
              <div class="topic-li">
                <div class="tdot"></div>Strategy Building Basics
              </div>
              <div class="topic-li">
                <div class="tdot"></div>Backtesting Concepts
              </div>
              <div class="topic-li">
                <div class="tdot"></div>Execution Speed &amp; Latency
              </div>
              <div class="topic-li">
                <div class="tdot"></div>Risk Controls in Automation
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:80%"></div>
              </div>
              <div class="mcard-foot">
                <div class="foot-chips"><span class="fchip"><i class="fas fa-play-circle"></i> 7 videos</span><span
                    class="fchip"><i class="fas fa-clock"></i> 3h 40m</span></div>
                <button class="btn-go" onclick="openDetail('algo')"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M2 AI -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="ai">
            <div class="mcard" style="--ac:var(--purple);--ac-glow:rgba(109,40,217,.1);--icon-bg:#f5f3ff">
              <div class="mcard-accent"></div><span class="mcard-num">02</span>
              <div class="mcard-icon" style="background:#f5f3ff;color:var(--purple)"><i class="fas fa-brain"></i></div>
              <div class="mcard-tag" style="color:var(--purple)">Module 02 · AI & ML</div>
              <div class="mcard-title">Artificial Intelligence in Trading</div>
              <p class="mcard-desc">Explore how AI and machine learning are transforming trading strategies and market
                prediction.</p>
              <div class="topic-li">
                <div class="tdot" style="background:var(--purple)"></div>AI vs Traditional Trading
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--purple)"></div>Machine Learning Models
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--purple)"></div>Predictive Analytics
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--purple)"></div>Sentiment Analysis
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--purple)"></div>AI Trading Bots
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:65%;background:var(--purple)"></div>
              </div>
              <div class="mcard-foot">
                <div class="foot-chips"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--purple)"></i> 8 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--purple)"></i> 4h 20m</span></div>
                <button class="btn-go" style="background:var(--purple)" onclick="openDetail('ai')"><i
                    class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M3 Platforms -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="platform">
            <div class="mcard" style="--ac:var(--blue);--ac-glow:rgba(24,68,168,.1);--icon-bg:#eff4ff">
              <div class="mcard-accent"></div><span class="mcard-num">03</span>
              <div class="mcard-icon" style="background:#eff4ff;color:var(--blue)"><i class="fas fa-desktop"></i></div>
              <div class="mcard-tag" style="color:var(--blue)">Module 03 · Platforms</div>
              <div class="mcard-title">Trading Platforms &amp; Tools</div>
              <p class="mcard-desc">Master popular trading platforms and professional tools used by institutional
                traders worldwide.</p>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>MetaTrader (MT4/MT5) Basics
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>TradingView Charting
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>Order Execution Systems
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>Indicators &amp; Tools
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>Mobile Trading Apps
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:55%;background:var(--blue)"></div>
              </div>
              <div class="mcard-foot">
                <div class="foot-chips"><span class="fchip"><i class="fas fa-play-circle" style="color:var(--blue)"></i>
                    9 videos</span><span class="fchip"><i class="fas fa-clock" style="color:var(--blue)"></i> 4h
                    50m</span></div>
                <button class="btn-go" style="background:var(--blue)"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M4 Blockchain -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="blockchain">
            <div class="mcard" style="--ac:var(--cyan);--ac-glow:rgba(8,145,178,.1);--icon-bg:#ecfeff">
              <div class="mcard-accent"></div><span class="mcard-num">04</span>
              <div class="mcard-icon" style="background:#ecfeff;color:var(--cyan)"><i class="fas fa-link"></i></div>
              <div class="mcard-tag" style="color:var(--cyan)">Module 04 · Blockchain</div>
              <div class="mcard-title">Blockchain &amp; FinTech Innovation</div>
              <p class="mcard-desc">Understand how blockchain is reshaping financial ecosystems through DeFi, smart
                contracts, and Web3.</p>
              <div class="topic-li">
                <div class="tdot" style="background:var(--cyan)"></div>Blockchain Basics
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--cyan)"></div>Smart Contracts
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--cyan)"></div>
                <span>Decentralized Finance (DeFi) <span class="h-chip ms-1"
                    style="--ac:var(--cyan);background:#ecfeff;font-size:.58rem;padding:2px 8px"><i
                      class="fas fa-arrow-right"></i> Featured</span></span>
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--cyan)"></div>Crypto Trading Platforms
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--cyan)"></div>Web3 Applications
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:45%;background:var(--cyan)"></div>
              </div>
              <div class="mcard-foot">
                <div class="foot-chips"><span class="fchip"><i class="fas fa-play-circle" style="color:var(--cyan)"></i>
                    6 videos</span><span class="fchip"><i class="fas fa-clock" style="color:var(--cyan)"></i> 3h
                    10m</span></div>
                <button class="btn-go" style="background:var(--cyan)" onclick="openDetail('blockchain')"><i
                    class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M5 HFT -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="hft">
            <div class="mcard" style="--ac:var(--amber);--ac-glow:rgba(180,83,9,.1);--icon-bg:#fffbeb">
              <div class="mcard-accent"></div><span class="mcard-num">05</span>
              <div class="mcard-icon" style="background:#fffbeb;color:var(--amber)"><i class="fas fa-bolt"></i></div>
              <div class="mcard-tag" style="color:var(--amber)">Module 05 · HFT</div>
              <div class="mcard-title">High-Frequency Trading (HFT)</div>
              <p class="mcard-desc">Dive into ultra-fast trading systems used by institutions to capture micro-second
                market opportunities.</p>
              <div class="topic-li">
                <div class="tdot" style="background:var(--amber)"></div>What is HFT?
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--amber)"></div>Low Latency Systems
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--amber)"></div>Market Making Strategies
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--amber)"></div>Infrastructure Requirements
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--amber)"></div>Risks &amp; Regulations
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:35%;background:var(--amber)"></div>
              </div>
              <div class="mcard-foot">
                <div class="foot-chips"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--amber)"></i> 7 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--amber)"></i> 3h 50m</span></div>
                <button class="btn-go" style="background:var(--amber)"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M6 Cybersecurity -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="cyber">
            <div class="mcard" style="--ac:var(--zed-primary);--ac-glow:var(--zed-light-red-hover);--icon-bg:var(--zed-primary-hover)">
              <div class="mcard-accent"></div><span class="mcard-num">06</span>
              <div class="mcard-icon"><i class="fas fa-shield-halved"></i></div>
              <div class="mcard-tag">Module 06 · Cybersecurity</div>
              <div class="mcard-title">Cybersecurity in Trading</div>
              <p class="mcard-desc">Protect trading systems and digital assets from cyber threats, phishing, and
                platform vulnerabilities.</p>
              <div class="topic-li">
                <div class="tdot"></div>Common Security Threats
              </div>
              <div class="topic-li">
                <div class="tdot"></div>Secure Trading Practices
              </div>
              <div class="topic-li">
                <div class="tdot"></div>Two-Factor Authentication
              </div>
              <div class="topic-li">
                <div class="tdot"></div>Data Encryption Basics
              </div>
              <div class="topic-li">
                <div class="tdot"></div>Avoiding Scams &amp; Phishing
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:28%"></div>
              </div>
              <div class="mcard-foot">
                <div class="foot-chips"><span class="fchip"><i class="fas fa-play-circle"></i> 6 videos</span><span
                    class="fchip"><i class="fas fa-clock"></i> 3h 00m</span></div>
                <button class="btn-go"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M7 Data Analytics -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="data">
            <div class="mcard" style="--ac:var(--green);--ac-glow:rgba(21,128,61,.1);--icon-bg:#f0fdf4">
              <div class="mcard-accent"></div><span class="mcard-num">07</span>
              <div class="mcard-icon" style="background:#f0fdf4;color:var(--green)"><i
                  class="fas fa-satellite-dish"></i></div>
              <div class="mcard-tag" style="color:var(--green)">Module 07 · Data Analytics</div>
              <div class="mcard-title">Data Analytics &amp; Market Insights</div>
              <p class="mcard-desc">Use data-driven approaches and real-time feeds to improve trading decisions and KPI
                tracking.</p>
              <div class="topic-li">
                <div class="tdot" style="background:var(--green)"></div>Big Data in Trading
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--green)"></div>Data Visualization Tools
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--green)"></div>Market Sentiment Analysis
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--green)"></div>Real-time Data Feeds
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--green)"></div>KPI Tracking
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:22%;background:var(--green)"></div>
              </div>
              <div class="mcard-foot">
                <div class="foot-chips"><span class="fchip"><i class="fas fa-play-circle"
                      style="color:var(--green)"></i> 8 videos</span><span class="fchip"><i class="fas fa-clock"
                      style="color:var(--green)"></i> 4h 10m</span></div>
                <button class="btn-go" style="background:var(--green)"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M8 Cloud -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="cloud">
            <div class="mcard" style="--ac:var(--blue);--ac-glow:rgba(24,68,168,.1);--icon-bg:#eff4ff">
              <div class="mcard-accent"></div><span class="mcard-num">08</span>
              <div class="mcard-icon" style="background:#eff4ff;color:var(--blue)"><i class="fas fa-cloud"></i></div>
              <div class="mcard-tag" style="color:var(--blue)">Module 08 · Cloud</div>
              <div class="mcard-title">Cloud Computing in Finance</div>
              <p class="mcard-desc">Understand how cloud technology supports scalable, secure, and high-performance
                trading systems.</p>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>Cloud Infrastructure Basics
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>SaaS in Trading Platforms
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>Data Storage &amp; Processing
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>Scalability &amp; Performance
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--blue)"></div>Cloud Security
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:18%;background:var(--blue)"></div>
              </div>
              <div class="mcard-foot">
                <div class="foot-chips"><span class="fchip"><i class="fas fa-play-circle" style="color:var(--blue)"></i>
                    6 videos</span><span class="fchip"><i class="fas fa-clock" style="color:var(--blue)"></i> 3h
                    20m</span></div>
                <button class="btn-go" style="background:var(--blue)"><i class="fas fa-arrow-right"></i> Start</button>
              </div>
            </div>
          </div>

          <!-- M9 Future Trends -->
          <div class="col-md-6 col-xl-4 reveal" data-cat="future">
            <div class="mcard" style="--ac:var(--rose);--ac-glow:rgba(190,24,93,.1);--icon-bg:#fff1f7">
              <div class="mcard-accent"></div><span class="mcard-num">09</span>
              <div class="mcard-icon" style="background:#fff1f7;color:var(--rose)"><i class="fas fa-rocket"></i></div>
              <div class="mcard-tag" style="color:var(--rose)">Module 09 · Future Tech · Pro</div>
              <div class="mcard-title">Future Trends in Trading Technology</div>
              <p class="mcard-desc">Stay ahead with emerging innovations shaping the next generation of financial
                markets and platforms.</p>
              <div class="topic-li">
                <div class="tdot" style="background:var(--rose)"></div>AI + Blockchain Integration
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--rose)"></div>Quantum Computing Potential
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--rose)"></div>Metaverse &amp; Trading
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--rose)"></div>Automation Evolution
              </div>
              <div class="topic-li">
                <div class="tdot" style="background:var(--rose)"></div>Next-gen Trading Platforms
              </div>
              <div class="prog-wrap">
                <div class="prog-bar" style="width:10%;background:var(--rose)"></div>
              </div>
              <div class="mcard-foot">
                <div class="foot-chips"><span class="fchip"><i class="fas fa-play-circle" style="color:var(--rose)"></i>
                    10 videos</span><span class="fchip"><i class="fas fa-clock" style="color:var(--rose)"></i> 5h
                    30m</span></div>
                <button class="btn-go" style="background:var(--rose)"><i class="fas fa-lock-open"></i> Unlock</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div><!-- /page modules -->


  <!-- ══════════════════════════════════
     PAGE: VIDEOS
══════════════════════════════════ -->
  <div class="page" id="page-videos">
    <div class="page-hero">
      <div class="hero-ring" style="width:400px;height:400px;top:-200px;right:-100px;"></div>
      <div class="container text-center position-relative">
        <div class="hero-tag"><span class="blink"></span> On-Demand Library</div>
        <h1 class="hero-h">Video <em>Sessions</em></h1>
        <p class="hero-sub">Watch recorded webinars, live replays, and exclusive sessions at your own pace.</p>
      </div>
    </div>
    <section class="bg2">
      <div class="container">
        <div class="row g-4" id="vgrid">
          <!-- 6 video cards -->
          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vcard" style="--ac:var(--zed-primary);--ac-glow:var(--zed-light-red-hover)">
              <div class="vthumb" style="background:linear-gradient(135deg,#fff5f5,#ffe0df)">
                <div class="vanim" id="v1"></div>
                <div class="voverlay">
                  <div class="vplay"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">44:12</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--zed-primary)"><i class="fas fa-robot me-1"></i>Algo Trading</div>
                <div class="vtitle">Backtesting Your First Automated Strategy</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Dr. Chen</span><span><i class="fas fa-eye"></i>
                    4.1K</span><span><i class="fas fa-clock"></i> 44min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vcard" style="--ac:var(--purple);--ac-glow:rgba(109,40,217,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#f5f3ff,#ede8ff)">
                <div class="vanim" id="v2"></div>
                <div class="voverlay">
                  <div class="vplay" style="background:var(--purple)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:var(--purple);color:#fff"><span class="blink"
                    style="background:#fff"></span> NEW</div>
                <div class="vdur">58:34</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--purple)"><i class="fas fa-brain me-1"></i>AI & ML</div>
                <div class="vtitle">Predictive Analytics with ML Models</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Aisha Patel</span><span><i class="fas fa-eye"></i>
                    7.2K</span><span><i class="fas fa-clock"></i> 58min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vcard" style="--ac:var(--cyan);--ac-glow:rgba(8,145,178,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#ecfeff,#cffafe)">
                <div class="vanim" id="v3"></div>
                <div class="voverlay">
                  <div class="vplay" style="background:var(--cyan)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">51:07</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--cyan)"><i class="fas fa-link me-1"></i>Blockchain</div>
                <div class="vtitle">Smart Contracts &amp; DeFi Protocol Deep Dive</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Lena Zhao</span><span><i class="fas fa-eye"></i>
                    5.8K</span><span><i class="fas fa-clock"></i> 51min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vcard" style="--ac:var(--amber);--ac-glow:rgba(180,83,9,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#fffbeb,#fde68a55)">
                <div class="vanim" id="v4"></div>
                <div class="voverlay">
                  <div class="vplay" style="background:var(--amber)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">39:20</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--amber)"><i class="fas fa-bolt me-1"></i>HFT</div>
                <div class="vtitle">Low Latency Infrastructure for HFT Systems</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Marco Ricci</span><span><i class="fas fa-eye"></i>
                    3.4K</span><span><i class="fas fa-clock"></i> 39min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vcard" style="--ac:var(--green);--ac-glow:rgba(21,128,61,.15)">
              <div class="vthumb" style="background:linear-gradient(135deg,#f0fdf4,#bbf7d0)">
                <div class="vanim" id="v5"></div>
                <div class="voverlay">
                  <div class="vplay" style="background:var(--green)"><i class="fas fa-play ms-1"></i></div>
                </div>
                <div class="vstatus" style="background:rgba(0,0,0,.6);color:#fff">REPLAY</div>
                <div class="vdur">47:55</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--green)"><i class="fas fa-satellite-dish me-1"></i>Data Analytics
                </div>
                <div class="vtitle">Real-Time Market Sentiment &amp; Big Data Analysis</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> Priya Mehta</span><span><i class="fas fa-eye"></i>
                    6.1K</span><span><i class="fas fa-clock"></i> 47min</span></div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 reveal">
            <div class="vcard" style="--ac:var(--zed-primary);--ac-glow:var(--zed-light-red-hover);border-color:rgba(224,43,32,.3)">
              <div class="vthumb" style="background:linear-gradient(135deg,#fff5f5,#fecaca)">
                <div class="vanim" id="v6"></div>
                <div class="voverlay" style="background:rgba(224,43,32,.08)">
                  <div class="vplay"><i class="fas fa-broadcast-tower"></i></div>
                </div>
                <div class="vstatus" style="background:var(--zed-primary);color:#fff"><span class="blink"
                    style="background:#fff"></span> LIVE SOON</div>
                <div class="vdur" style="background:var(--zed-primary)">LIVE</div>
              </div>
              <div class="vbody">
                <div class="vcat" style="color:var(--zed-primary)"><i class="fas fa-shield-halved me-1"></i>Cybersecurity</div>
                <div class="vtitle">Protecting Your Trading System — Live with James Okafor</div>
                <div class="vmeta"><span><i class="fas fa-user"></i> James Okafor</span><span><i
                      class="fas fa-calendar"></i> Jun 11, 2026</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div><!-- /page videos -->

  <style>
    .fpill {
      background: transparent;
      border: 1px solid var(--zed-banner-bg-end);
      color: var(--zed-secondary);
      border-radius: 5px;
      padding: 6px 16px;
      font-size: .7rem;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      cursor: pointer;
      transition: all .2s;
      
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
  </style>

  <script>
    // ── PAGE SYSTEM ──
    const pages = ['home', 'modules', 'videos', 'curriculum', 'detail'];
    function showPage(id) {
      pages.forEach(p => {
        const el = document.getElementById('page-' + p);
        const nav = document.getElementById('nav-' + p);
        if (el) el.classList.toggle('active', p === id);
        if (nav) nav.classList.toggle('active', p === id);
      });
      window.scrollTo({ top: 0, behavior: 'smooth' });
      setTimeout(triggerReveal, 80);
      if (id === 'curriculum') buildCurriculum();
    }

    // ── ANIMATED BARS ──
    const palettes = {
      red: '#E02B20', purple: '#6d28d9', cyan: '#0891b2',
      amber: '#b45309', green: '#15803d', blue: '#1844a8', rose: '#be185d'
    };
    function buildBars(id, color) {
      const el = document.getElementById(id);
      if (!el) return;
      el.innerHTML = '';
      const hts = [35, 60, 28, 80, 45, 70, 30, 90, 50, 40, 75, 55, 85, 38, 65, 30, 80, 48, 72, 42];
      hts.forEach((h, i) => {
        const b = document.createElement('div');
        b.className = 'vbar';
        b.style.cssText = `height:${h}%;background:${color};opacity:.55;animation-delay:${i * .1}s;animation-duration:${1.6 + Math.random() * 1.2}s;`;
        el.appendChild(b);
      });
    }

    // Build all bars
    const barDefs = [
      ['hv1', '#E02B20'], ['hv2', '#6d28d9'], ['hv3', '#0891b2'], ['hv4', '#E02B20'],
      ['v1', '#E02B20'], ['v2', '#6d28d9'], ['v3', '#0891b2'],
      ['v4', '#b45309'], ['v5', '#15803d'], ['v6', '#E02B20'],
    ];
    function initBars() { barDefs.forEach(([id, col]) => buildBars(id, col)); }
    document.addEventListener('DOMContentLoaded', initBars);

    // ── SCROLL REVEAL ──
    function triggerReveal() {
      const revs = document.querySelectorAll('.page.active .reveal');
      const obs = new IntersectionObserver(entries => {
        entries.forEach((e, i) => {
          if (e.isIntersecting) { setTimeout(() => e.target.classList.add('in'), i * 65); obs.unobserve(e.target); }
        });
      }, { threshold: .08 });
      revs.forEach(r => { r.classList.remove('in'); obs.observe(r); });
    }
    triggerReveal();

    // ── FILTER ──
    function filterMods(el, f) {
      document.querySelectorAll('.fpill').forEach(p => p.classList.remove('active'));
      el.classList.add('active');
      document.querySelectorAll('#modgrid>[data-cat]').forEach(c => {
        c.style.display = (f === 'all' || c.dataset.cat === f) ? '' : 'none';
      });
    }

    // ── DETAIL DATA ──
    const detailData = {
      algo: {
        color: '#E02B20', badgeBg: '#fef3f2', label: 'Module 01 · Algorithmic Trading',
        title: 'Algorithmic <em>Trading Basics</em>', desc: 'Learn how automated trading systems execute trades using predefined rules, from strategy building and backtesting to live execution and risk controls.',
        topics: ['What is Algo Trading?', 'Strategy Building Basics', 'Backtesting Concepts', 'Execution Speed & Latency', 'Risk Controls in Automation'],
        videos: 7, duration: '3h 40m', level: 'Intermediate',
        vids: [
          { title: 'What is Algorithmic Trading?', dur: '18:20', status: 'REPLAY', color: '#E02B20', bg: '#fff5f5,#ffe0df' },
          { title: 'Building Your First Strategy in Python', dur: '42:15', status: 'NEW', color: '#E02B20', bg: '#fff5f5,#fecaca' },
          { title: 'Backtesting: Theory vs Practice', dur: '38:44', status: 'REPLAY', color: '#E02B20', bg: '#fff5f5,#ffe0df' },
        ]
      },
      ai: {
        color: '#6d28d9', badgeBg: '#f5f3ff', label: 'Module 02 · Artificial Intelligence',
        title: 'AI in <em>Trading</em>', desc: 'Explore how machine learning and AI are transforming trading strategies, market prediction, and sentiment analysis for modern algorithmic systems.',
        topics: ['AI vs Traditional Trading', 'Machine Learning Models', 'Predictive Analytics', 'Sentiment Analysis', 'AI Trading Bots'],
        videos: 8, duration: '4h 20m', level: 'Intermediate',
        vids: [
          { title: 'Machine Learning for Market Prediction', dur: '52:10', status: 'NEW', color: '#6d28d9', bg: '#f5f3ff,#ede8ff' },
          { title: 'Building Sentiment Analysis Pipelines', dur: '44:33', status: 'REPLAY', color: '#6d28d9', bg: '#f5f3ff,#e9d8ff' },
          { title: 'AI Trading Bots: Architecture & Risk', dur: '61:07', status: 'REPLAY', color: '#6d28d9', bg: '#f5f3ff,#ede8ff' },
        ]
      },
      blockchain: {
        color: '#0891b2', badgeBg: '#ecfeff', label: 'Module 04 · Blockchain & DeFi',
        title: 'Blockchain &amp; <em>FinTech Innovation</em>', desc: 'Understand how blockchain technology is reshaping financial ecosystems through decentralized finance, smart contracts, and Web3 applications.',
        topics: ['Blockchain Basics', 'Smart Contracts', 'Decentralized Finance (DeFi)', 'Crypto Trading Platforms', 'Web3 Applications'],
        videos: 6, duration: '3h 10m', level: 'Beginner',
        vids: [
          { title: 'Blockchain Fundamentals for Traders', dur: '31:40', status: 'REPLAY', color: '#0891b2', bg: '#ecfeff,#cffafe' },
          { title: 'DeFi Protocols & Yield Strategies', dur: '55:12', status: 'NEW', color: '#0891b2', bg: '#ecfeff,#a5f3fc' },
          { title: 'Smart Contracts in Financial Markets', dur: '47:58', status: 'REPLAY', color: '#0891b2', bg: '#ecfeff,#cffafe' },
        ]
      }
    };

    function openDetail(key) {
      const d = detailData[key];
      if (!d) return;
      document.getElementById('d-badge').textContent = d.label;
      document.getElementById('d-badge').style.cssText = `background:${d.badgeBg};color:${d.color};border:1px solid ${d.color}33;border-radius:20px;padding:5px 16px;font-size:.65rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;`;
      document.getElementById('d-title').innerHTML = d.title;
      document.getElementById('d-title').style.color = 'var(--zed-dark-text)';
      document.querySelectorAll('#d-title em').forEach(e => e.style.color = d.color);
      document.getElementById('d-desc').textContent = d.desc;
      document.getElementById('d-btn').style.background = d.color;

      // Topics
      const tp = document.getElementById('d-topics');
      tp.innerHTML = d.topics.map(t => `<div class="topic-li"><div class="tdot" style="background:${d.color}"></div>${t}</div>`).join('');

      // Meta
      document.getElementById('d-videos-count').innerHTML = `<i class="fas fa-play-circle" style="color:${d.color}"></i> ${d.videos} videos`;
      document.getElementById('d-duration').innerHTML = `<i class="fas fa-clock" style="color:${d.color}"></i> ${d.duration}`;
      document.getElementById('d-level').innerHTML = `<i class="fas fa-signal" style="color:${d.color}"></i> ${d.level}`;

      // Video cards
      const vc = document.getElementById('d-videos');
      vc.innerHTML = d.vids.map((v, i) => `
    <div class="vcard mb-4">
      <div class="vthumb" style="background:linear-gradient(135deg,${v.bg})">
        <div class="vanim" id="dv${key}${i}"></div>
        <div class="voverlay"><div class="vplay" style="background:${v.color}"><i class="fas fa-play ms-1"></i></div></div>
        <div class="vstatus" style="background:${v.status === 'NEW' ? v.color : 'rgba(0,0,0,.6)'};color:#fff">${v.status === 'NEW' ? '<span class="blink" style="background:#fff"></span>' : ''} ${v.status}</div>
        <div class="vdur">${v.dur}</div>
      </div>
      <div class="vbody">
        <div class="vtitle">${v.title}</div>
      </div>
    </div>
  `).join('');

      d.vids.forEach((_, i) => buildBars(`dv${key}${i}`, d.color));
      showPage('detail');
    }

    // ── CURRICULUM ──
    const currData = [
      { n: '01', title: 'Algorithmic Trading Basics', color: '#E02B20', topics: ['What is Algo Trading?', 'Strategy Building Basics', 'Backtesting Concepts', 'Execution Speed & Latency', 'Risk Controls in Automation'] },
      { n: '02', title: 'Artificial Intelligence in Trading', color: '#6d28d9', topics: ['AI vs Traditional Trading', 'Machine Learning Models', 'Predictive Analytics', 'Sentiment Analysis', 'AI Trading Bots'] },
      { n: '03', title: 'Trading Platforms & Tools', color: '#1844a8', topics: ['MetaTrader (MT4/MT5) Basics', 'TradingView Charting', 'Order Execution Systems', 'Indicators & Tools', 'Mobile Trading Apps'] },
      { n: '04', title: 'Blockchain & FinTech Innovation', color: '#0891b2', topics: ['Blockchain Basics', 'Smart Contracts', 'Decentralized Finance (DeFi)', 'Crypto Trading Platforms', 'Web3 Applications'] },
      { n: '05', title: 'High-Frequency Trading (HFT)', color: '#b45309', topics: ['What is HFT?', 'Low Latency Systems', 'Market Making Strategies', 'Infrastructure Requirements', 'Risks & Regulations'] },
      { n: '06', title: 'Cybersecurity in Trading', color: '#E02B20', topics: ['Common Security Threats', 'Secure Trading Practices', 'Two-Factor Authentication', 'Data Encryption Basics', 'Avoiding Scams & Phishing'] },
      { n: '07', title: 'Data Analytics & Market Insights', color: '#15803d', topics: ['Big Data in Trading', 'Data Visualization Tools', 'Market Sentiment Analysis', 'Real-time Data Feeds', 'KPI Tracking'] },
      { n: '08', title: 'Cloud Computing in Finance', color: '#1844a8', topics: ['Cloud Infrastructure Basics', 'SaaS in Trading Platforms', 'Data Storage & Processing', 'Scalability & Performance', 'Cloud Security'] },
      { n: '09', title: 'Future Trends in Trading Technology', color: '#be185d', topics: ['AI + Blockchain Integration', 'Quantum Computing Potential', 'Metaverse & Trading', 'Automation Evolution', 'Next-gen Trading Platforms'] },
    ];

    function buildCurriculum() {
      const list = document.getElementById('curriculum-list');
      if (list.innerHTML.trim()) return;
      list.innerHTML = currData.map((m, mi) => `
    <div class="curr-item" style="--ac:${m.color}">
      <div class="curr-head" onclick="toggleCurr(${mi})">
        <div class="curr-head-left">
          <span class="curr-idx" style="color:${m.color}">${m.n}</span>
          <span class="curr-name">${m.title}</span>
        </div>
        <span class="curr-badge" style="color:${m.color};background:${m.color}18">${m.topics.length} topics <i class="fas fa-chevron-down ms-1" id="curr-icon-${mi}" style="font-size:.55rem;transition:transform .2s"></i></span>
      </div>
      <div class="curr-body" id="curr-body-${mi}">
        ${m.topics.map(t => `<p class="mb-0" style="font-size:.8rem;color:var(--zed-secondary);padding:5px 0;border-bottom:1px dashed var(--zed-banner-bg-end)">
          <span style="color:${m.color};margin-right:8px">›</span>${t}</p>`).join('')}
      </div>
    </div>
  `).join('');
    }

    function toggleCurr(i) {
      const body = document.getElementById('curr-body-' + i);
      const icon = document.getElementById('curr-icon-' + i);
      body.classList.toggle('open');
      icon.style.transform = body.classList.contains('open') ? 'rotate(180deg)' : 'rotate(0)';
    }
  </script>
<?php
include_once ('elements/footer.php');
?>
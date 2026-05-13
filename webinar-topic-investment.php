<?php 
include_once ('elements/header.php');
?>

    <style>
    :root {
      --red: #E8111A;
      --red-d: #c00d14;
      --red-g: rgba(232, 17, 26, .12);
      --dark: #0f0f0f;
      --mid: #2a2a2a;
      --muted: #888;
      --bg: #ffffff;
      --bg2: #f8f7f3;
      --bg3: #f2f0ea;
      --border: #e8e6df;
      --border2: #ccc9be;
      --green: #059669;
      --blue: #2563eb;
      --gold: #d97706;
      --purple: #7c3aed;
      --teal: #0891b2;
      --rose: #e11d48;
    }

    /* ── HERO ────────────────────────────── */
    .hero {
      padding: 92px 0 66px;
      text-align: center;
      position: relative;
      overflow: hidden
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
      top: -80px;
      left: 50%;
      transform: translateX(-50%);
      width: 700px;
      height: 380px;
      background: radial-gradient(ellipse at center, rgba(232, 17, 26, .07) 0%, transparent 70%);
      pointer-events: none
    }

    .hero-sm {
      padding: 60px 0 44px
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      background: rgba(232, 17, 26, .08);
      border: 1px solid rgba(232, 17, 26, .22);
      color: var(--red);
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
      font-size: clamp(2.6rem, 6.5vw, 5.2rem);
      color: var(--dark);
      line-height: 1.04;
      animation: riseUp .7s .1s ease both
    }

    .hero h1 em {
      font-style: normal;
      color: var(--red)
    }

    .hero p.tagline {
      font-size: 1.02rem;
      color: var(--muted);
      max-width: 580px;
      margin: 1.1rem auto 2rem;
      line-height: 1.65;
      animation: riseUp .7s .2s ease both
    }

    .hero-btns {
      animation: riseUp .7s .3s ease both
    }

    .btn-hero {
      background: var(--red);
      color: #fff;
      border: none;
      border-radius: 50px;
      font-size: .92rem;
      font-weight: 700;
      padding: .88rem 2.6rem;
      box-shadow: 0 8px 28px var(--red-g);
      transition: background .25s, transform .2s;
      cursor: pointer
    }

    .btn-hero:hover {
      background: var(--red-d);
      color: #fff;
      transform: translateY(-2px)
    }

    .btn-outline-hero {
      background: transparent;
      color: var(--mid);
      border: 1.5px solid var(--border2);
      border-radius: 50px;
      font-size: .92rem;
      font-weight: 600;
      padding: .88rem 2.2rem;
      transition: border-color .25s, background .25s, color .25s;
      cursor: pointer
    }

    .btn-outline-hero:hover {
      border-color: var(--dark);
      background: var(--dark);
      color: #fff
    }

    /* stat strip */
    .stat-strip {
      display: flex;
      justify-content: center;
      gap: 2.5rem;
      flex-wrap: wrap;
      margin-top: 2.6rem;
      padding-top: 2rem;
      border-top: 1px solid var(--border);
      animation: riseUp .7s .4s ease both
    }

    .ss .num {
      font-size: 1.8rem;
      color: var(--dark)
    }

    .ss .num span {
      color: var(--red)
    }

    .ss .lbl {
      font-size: .68rem;
      font-weight: 600;
      color: var(--muted);
      letter-spacing: .09em;
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

    /* ── SECTIONS ────────────────────────── */
    .sec {
      padding: 80px 0;
      position: relative;
      z-index: 1
    }

    .sec-alt {
      background: var(--bg2)
    }

    .sec-dark {
      background: var(--dark)
    }

    .sec-red {
      background: var(--red)
    }

    .hdiv {
      height: 1px;
      background: linear-gradient(90deg, transparent, var(--border), transparent)
    }

    .eyebrow {
      display: inline-block;
      font-size: .68rem;
      font-weight: 700;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--red);
      margin-bottom: .6rem
    }

    .sec-h {
      font-size: clamp(1.75rem, 3.8vw, 2.7rem);
      color: var(--dark);
      line-height: 1.1
    }

    .sec-dark .sec-h {
      color: #fff
    }

    .sec-red .sec-h {
      color: #fff
    }

    .sec-p {
      font-size: .9rem;
      color: var(--muted);
      max-width: 460px;
      line-height: 1.68
    }

    .sec-dark .sec-p {
      color: rgba(255, 255, 255, .42)
    }

    .sec-red .sec-p {
      color: rgba(255, 255, 255, .75)
    }

    /* ── MODULE CARDS ────────────────────── */
    .mod-card {
      background: var(--bg);
      border: 1.5px solid var(--border);
      border-radius: 16px;
      padding: 1.6rem;
      height: 100%;
      display: flex;
      flex-direction: column;
      position: relative;
      overflow: hidden;
      transition: transform .38s cubic-bezier(.2, .8, .2, 1), box-shadow .38s, border-color .3s
    }

    .mod-card::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 3px;
      background: var(--c, var(--red));
      transform: scaleY(0);
      transform-origin: bottom;
      transition: transform .35s ease
    }

    .mod-card:hover {
      transform: translateY(-7px);
      box-shadow: 0 20px 52px rgba(0, 0, 0, .08);
      border-color: rgba(0, 0, 0, .12)
    }

    .mod-card:hover::before {
      transform: scaleY(1)
    }

    .mod-icon {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
      margin-bottom: .9rem
    }

    .mod-card h5 {
      font-size: 1.05rem;
      color: var(--dark);
      margin-bottom: .35rem
    }

    .mod-card .sub {
      font-size: .81rem;
      color: var(--muted);
      line-height: 1.6;
      margin-bottom: .9rem;
      flex: 1
    }

    .mod-list {
      list-style: none;
      padding: 0;
      margin: 0 0 1.1rem
    }

    .mod-list li {
      display: flex;
      align-items: center;
      gap: .5rem;
      font-size: .8rem;
      color: #444;
      padding: .28rem 0;
      border-bottom: 1px solid rgba(0, 0, 0, .04)
    }

    .mod-list li:last-child {
      border: none
    }

    .mod-list li i {
      font-size: .58rem;
      color: var(--c, var(--red));
      flex-shrink: 0
    }

    .mod-foot {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: .75rem;
      border-top: 1px solid var(--border);
      margin-top: auto
    }

    .mod-badge {
      font-size: .63rem;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      padding: .2rem .65rem;
      border-radius: 50px
    }

    .btn-mod {
      font-size: .72rem;
      font-weight: 700;
      color: var(--c, var(--red));
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: .3rem;
      background: none;
      border: none;
      cursor: pointer;
      transition: gap .2s
    }

    .btn-mod:hover {
      gap: .6rem;
      color: var(--red-d)
    }

    /* ── FULL WIDTH CARD ─────────────────── */
    .full-card {
      background: linear-gradient(135deg, var(--bg2) 0%, rgba(232, 17, 26, .04) 100%);
      border: 1.5px solid rgba(232, 17, 26, .18);
      border-radius: 18px;
      padding: 2.4rem 2.6rem;
      position: relative;
      overflow: hidden;
      transition: transform .3s, box-shadow .3s
    }

    .full-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 52px rgba(0, 0, 0, .08)
    }

    .full-card::after {
      content: '';
      position: absolute;
      bottom: -60px;
      right: -60px;
      width: 220px;
      height: 220px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(232, 17, 26, .07) 0%, transparent 70%)
    }

    .full-badge {
      display: inline-block;
      background: var(--red);
      color: #fff;
      font-size: .67rem;
      font-weight: 700;
      letter-spacing: .12em;
      text-transform: uppercase;
      padding: .28rem .8rem;
      border-radius: 50px;
      margin-bottom: .9rem
    }

    /* ── MARQUEE ─────────────────────────── */
    .mq-band {
      background: var(--dark);
      padding: 2.4rem 0;
      overflow: hidden
    }

    .mq-row {
      overflow: hidden
    }

    .mq-row+.mq-row {
      margin-top: .7rem
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
      gap: .45rem;
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
      color: var(--red);
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

    /* ── FEATURE CARDS ───────────────────── */
    .feat-card {
      background: var(--bg);
      border: 1.5px solid var(--border);
      border-radius: 14px;
      padding: 1.5rem;
      height: 100%;
      transition: transform .3s, box-shadow .3s, border-color .3s
    }

    .feat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 44px rgba(0, 0, 0, .07);
      border-color: rgba(232, 17, 26, .2)
    }

    .feat-icon {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      margin-bottom: .85rem
    }

    .feat-card h6 {
      font-size: .97rem;
      color: var(--dark);
      margin-bottom: .32rem
    }

    .feat-card p {
      font-size: .8rem;
      color: var(--muted);
      margin: 0;
      line-height: 1.62
    }

    /* ── WHY DARK ────────────────────────── */
    .why-card {
      background: rgba(255, 255, 255, .04);
      border: 1px solid rgba(255, 255, 255, .07);
      border-radius: 14px;
      padding: 1.5rem;
      transition: background .3s, border-color .3s, transform .3s
    }

    .why-card:hover {
      background: rgba(255, 255, 255, .07);
      border-color: rgba(232, 17, 26, .25);
      transform: translateY(-4px)
    }

    .why-icon {
      width: 44px;
      height: 44px;
      background: rgba(232, 17, 26, .12);
      color: var(--red);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      margin-bottom: .85rem
    }

    .why-card h6 {
      font-weight: 700;
      color: #fff;
      margin-bottom: .3rem;
      font-size: .92rem
    }

    .why-card p {
      font-size: .8rem;
      color: rgba(255, 255, 255, .38);
      margin: 0;
      line-height: 1.62
    }

    /* ── TESTIMONIALS ────────────────────── */
    .t-card {
      background: var(--bg);
      border: 1.5px solid var(--border);
      border-radius: 14px;
      padding: 1.8rem;
      height: 100%;
      transition: transform .3s, box-shadow .3s
    }

    .t-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 44px rgba(0, 0, 0, .08)
    }

    .stars {
      color: var(--red);
      font-size: .85rem;
      margin-bottom: .75rem
    }

    .t-card q {
      font-size: .87rem;
      color: var(--mid);
      line-height: 1.72;
      font-style: italic;
      display: block;
      margin-bottom: 1.1rem
    }

    .t-av {
      width: 36px;
      height: 36px;
      border-radius: 8px;
      background: var(--red);
      color: #fff;
      font-weight: 700;
      font-size: .8rem;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0
    }

    .t-name {
      font-weight: 700;
      font-size: .84rem;
      color: var(--dark)
    }

    .t-role {
      font-size: .72rem;
      color: var(--muted)
    }

    /* ── PORTFOLIO CALCULATOR ────────────── */
    .calc-wrap {
      background: var(--bg2);
      border: 1.5px solid var(--border);
      border-radius: 16px;
      padding: 2rem
    }

    .calc-label {
      font-size: .7rem;
      font-weight: 700;
      letter-spacing: .1em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: .4rem;
      display: block
    }

    .calc-input,
    .calc-select {
      background: var(--bg);
      border: 1.5px solid var(--border);
      border-radius: 8px;
      padding: .62rem .9rem;
      font-size: .88rem;
      color: var(--dark);
      width: 100%;
      outline: none;
      transition: border-color .2s;
    }

    .calc-input:focus,
    .calc-select:focus {
      border-color: var(--red);
      box-shadow: 0 0 0 3px var(--red-g)
    }

    .calc-input::placeholder {
      color: var(--muted)
    }

    .btn-calc {
      background: var(--red);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-weight: 700;
      font-size: .88rem;
      padding: .8rem;
      transition: background .25s, transform .15s;
      cursor: pointer;
      width: 100%;
      margin-top: .5rem
    }

    .btn-calc:hover {
      background: var(--red-d);
      transform: translateY(-1px)
    }

    .result-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: .7rem;
      margin-top: 1.2rem
    }

    @media(max-width:576px) {
      .result-grid {
        grid-template-columns: 1fr 1fr
      }
    }

    .res-cell {
      background: var(--bg);
      border: 1.5px solid var(--border);
      border-radius: 10px;
      padding: .9rem;
      text-align: center;
      transition: border-color .3s
    }

    .res-cell.hl {
      border-color: rgba(232, 17, 26, .35);
      background: rgba(232, 17, 26, .04)
    }

    .res-cell .rv2 {
      font-size: 1.2rem;
      color: var(--dark);
      font-weight: 700
    }

    .res-cell.hl .rv2 {
      color: var(--red)
    }

    .res-cell.gn .rv2 {
      color: var(--green)
    }

    .res-cell .rl {
      font-size: .62rem;
      font-weight: 700;
      color: var(--muted);
      letter-spacing: .09em;
      text-transform: uppercase;
      margin-top: .2rem
    }

    /* ── RISK METER ──────────────────────── */
    .risk-meter {
      height: 10px;
      background: linear-gradient(90deg, var(--green), var(--gold), var(--red));
      border-radius: 5px;
      position: relative;
      margin: 1rem 0 .4rem
    }

    .risk-needle {
      position: absolute;
      top: -4px;
      width: 18px;
      height: 18px;
      background: #fff;
      border: 2.5px solid var(--dark);
      border-radius: 50%;
      transform: translateX(-50%);
      transition: left 1s cubic-bezier(.4, 0, .2, 1)
    }

    .risk-labels {
      display: flex;
      justify-content: space-between;
      font-size: .65rem;
      font-weight: 700;
      color: var(--muted);
      letter-spacing: .06em;
      text-transform: uppercase
    }

    /* ── ASSET ALLOCATION CHART ──────────── */
    .alloc-chart {
      display: flex;
      flex-direction: column;
      gap: .5rem
    }

    .alloc-row {
      display: flex;
      align-items: center;
      gap: .8rem
    }

    .alloc-label {
      font-size: .8rem;
      font-weight: 600;
      color: var(--mid);
      width: 140px;
      flex-shrink: 0
    }

    .alloc-bar-wrap {
      flex: 1;
      background: var(--bg3);
      border-radius: 4px;
      height: 8px;
      overflow: hidden
    }

    .alloc-bar {
      height: 100%;
      border-radius: 4px;
      width: 0;
      transition: width 1.2s cubic-bezier(.4, 0, .2, 1)
    }

    .alloc-pct {
      font-size: .75rem;
      font-weight: 700;
      color: var(--muted);
      width: 36px;
      text-align: right;
      flex-shrink: 0
    }

    /* ── FAQ ─────────────────────────────── */
    .faq-item {
      border: 1.5px solid var(--border);
      border-radius: 12px;
      margin-bottom: .6rem;
      overflow: hidden;
      transition: border-color .25s
    }

    .faq-item:hover {
      border-color: rgba(232, 17, 26, .25)
    }

    .faq-q {
      background: var(--bg);
      border: none;
      width: 100%;
      text-align: left;
      padding: 1.05rem 1.2rem;
      
      font-size: .88rem;
      font-weight: 700;
      color: var(--dark);
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: .8rem;
      transition: background .2s
    }

    .faq-q:hover {
      background: var(--bg2)
    }

    .faq-q i {
      color: var(--red);
      flex-shrink: 0;
      transition: transform .3s;
      font-size: .85rem
    }

    .faq-q[aria-expanded="true"] i {
      transform: rotate(45deg)
    }

    .faq-body {
      font-size: .83rem;
      color: var(--muted);
      line-height: 1.7;
      padding: 0 1.2rem 1rem
    }

    /* ── STEP CARDS ──────────────────────── */
    .step-card {
      background: var(--bg);
      border: 1.5px solid var(--border);
      border-radius: 14px;
      padding: 1.4rem;
      position: relative;
      transition: transform .3s, box-shadow .3s, border-color .3s
    }

    .step-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 14px 40px rgba(0, 0, 0, .07);
      border-color: rgba(232, 17, 26, .22)
    }

    .step-num {
      position: absolute;
      top: -13px;
      left: 1.1rem;
      width: 26px;
      height: 26px;
      background: var(--red);
      color: #fff;
      border-radius: 50%;
      font-size: .72rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 10px var(--red-g)
    }

    .step-card h6 {
      font-size: .97rem;
      color: var(--dark);
      margin-bottom: .3rem
    }

    .step-card p {
      font-size: .8rem;
      color: var(--muted);
      margin: 0;
      line-height: 1.6
    }

    /* ── COMPARISON TABLE ────────────────── */
    .cmp-table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      border-radius: 14px;
      overflow: hidden;
      border: 1.5px solid var(--border)
    }

    .cmp-table thead tr {
      background: var(--dark)
    }

    .cmp-table thead th {
      padding: .9rem 1.1rem;
      font-size: .82rem;
      font-weight: 700;
      color: rgba(255, 255, 255, .7);
      letter-spacing: .04em
    }

    .cmp-table thead th.hl {
      color: var(--red);
      background: rgba(232, 17, 26, .12)
    }

    .cmp-table tbody tr {
      background: var(--bg);
      transition: background .2s
    }

    .cmp-table tbody tr:hover {
      background: var(--bg2)
    }

    .cmp-table tbody tr:not(:last-child) td {
      border-bottom: 1px solid var(--border)
    }

    .cmp-table tbody td {
      padding: .8rem 1.1rem;
      font-size: .83rem;
      color: var(--mid)
    }

    .cmp-table tbody td:first-child {
      font-weight: 600;
      color: var(--dark)
    }

    .cmp-table tbody td.hl {
      background: rgba(232, 17, 26, .04)
    }

    .ck {
      color: var(--green);
      font-size: 1rem
    }

    .cx {
      color: #d1d5db;
      font-size: 1rem
    }

    /* ── CTA ─────────────────────────────── */
    .cta-band {
      padding: 72px 0;
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
      font-size: clamp(2rem, 5vw, 3.1rem);
      color: #fff;
      position: relative;
      z-index: 1
    }

    .cta-band p {
      color: rgba(255, 255, 255, .7);
      max-width: 460px;
      margin: .8rem auto 2rem;
      position: relative;
      z-index: 1
    }

    .btn-white {
      background: #fff;
      color: var(--red);
      border: none;
      border-radius: 50px;
      font-size: .9rem;
      font-weight: 700;
      padding: .85rem 2.4rem;
      transition: transform .2s, box-shadow .25s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      position: relative;
      z-index: 1;
      cursor: pointer
    }

    .btn-white:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, .2);
      color: var(--red)
    }

    .btn-outline-white {
      background: transparent;
      color: #fff;
      border: 1.5px solid rgba(255, 255, 255, .35);
      border-radius: 50px;
      font-size: .9rem;
      font-weight: 600;
      padding: .85rem 2rem;
      transition: border-color .25s, background .25s;
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      position: relative;
      z-index: 1;
      cursor: pointer
    }

    .btn-outline-white:hover {
      border-color: #fff;
      background: rgba(255, 255, 255, .1);
      color: #fff
    }

    /* ── REVEAL ──────────────────────────── */
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

  </style>

    
  <!-- ══════════════════════════════════════ -->
  <!-- PAGE 1 — HOME ════════════════════════ -->
  <!-- ══════════════════════════════════════ -->
  <div class="page active" id="page-home">

    <section class="hero">
      <div class="hero-glow"></div>
      <div class="container position-relative" style="z-index:1">
        <div class="hero-badge"><i class="bi bi-graph-up-arrow"></i> Smart Investment Education 2026</div>
        <h1>Webinar <em>Investments</em></h1>
        <p class="tagline">Gain practical knowledge and actionable strategies to grow your wealth through smart
          investing, disciplined decision-making, and long-term wealth building across all asset classes.</p>
        <div class="hero-btns d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-hero" onclick="showPage('modules')"><i class="bi bi-play-circle-fill me-2"></i>Explore
            Modules</button>
          <button class="btn-outline-hero" onclick="showPage('portfolio')"><i
              class="bi bi-calculator me-2"></i>Portfolio Builder</button>
        </div>
        <div class="stat-strip">
          <div class="ss">
            <div class="num">9<span>+</span></div>
            <div class="lbl">Modules</div>
          </div>
          <div class="ss">
            <div class="num">₹0<span>*</span></div>
            <div class="lbl">Free Access</div>
          </div>
          <div class="ss">
            <div class="num">Live<span>.</span></div>
            <div class="lbl">Q&A Sessions</div>
          </div>
          <div class="ss">
            <div class="num">CA+CFA<span>.</span></div>
            <div class="lbl">Expert Led</div>
          </div>
        </div>
      </div>
    </section>

    <div class="hdiv"></div>

    <!-- FEATURED MODULES -->
    <section class="sec">
      <div class="container">
        <div class="row align-items-end mb-5">
          <div class="col-lg-7 rv">
            <span class="eyebrow">Core Curriculum</span>
            <h2 class="sec-h">What You'll Learn</h2>
            <p class="sec-p">Nine structured modules covering every dimension of smart investing — from basics to global
              strategies.</p>
          </div>
          <div class="col-lg-5 text-lg-end mt-3 mt-lg-0 rv">
            <button class="btn btn-outline-danger rounded-pill px-4 fw-bold" onclick="showPage('modules')">All 9 Modules
              <i class="bi bi-arrow-right ms-1"></i></button>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-xl-4 rv">
            <div class="mod-card" style="--c:var(--blue)">
              <div class="mod-icon" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                  class="bi bi-bar-chart-fill"></i></div>
              <h5>Investment Fundamentals</h5>
              <p class="sub">Build a strong foundation by understanding how investing works and how wealth compounds
                over time.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Difference between Trading vs Investing</li>
                <li><i class="bi bi-chevron-right"></i>Types of Assets (Stocks, Bonds, Crypto)</li>
                <li><i class="bi bi-chevron-right"></i>Risk vs Return Concept</li>
                <li><i class="bi bi-chevron-right"></i>Power of Compounding</li>
                <li><i class="bi bi-chevron-right"></i>Investment Goals & Planning</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(37,99,235,.1);color:var(--blue);border:1px solid rgba(37,99,235,.2)">Beginner</span>
                <button class="btn-mod" style="--c:var(--blue)" onclick="showPage('fundamentals')">Learn More <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="mod-card" style="--c:var(--gold)">
              <div class="mod-icon" style="background:rgba(217,119,6,.1);color:var(--gold)"><i
                  class="bi bi-pie-chart-fill"></i></div>
              <h5>Portfolio Management</h5>
              <p class="sub">Learn how to create and manage a balanced portfolio with the right asset allocation and
                rebalancing strategy.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Asset Allocation Strategies</li>
                <li><i class="bi bi-chevron-right"></i>Diversification Techniques</li>
                <li><i class="bi bi-chevron-right"></i>Portfolio Rebalancing</li>
                <li><i class="bi bi-chevron-right"></i>Long-term vs Short-term Investments</li>
                <li><i class="bi bi-chevron-right"></i>Risk-adjusted Returns</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(217,119,6,.1);color:var(--gold);border:1px solid rgba(217,119,6,.2)">Intermediate</span>
                <button class="btn-mod" style="--c:var(--gold)" onclick="showPage('portfolio')">Learn More <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4 rv rv-d2">
            <div class="mod-card" style="--c:var(--rose)">
              <div class="mod-icon" style="background:rgba(225,29,72,.1);color:var(--rose)"><i
                  class="bi bi-shield-fill-check"></i></div>
              <h5>Risk Management</h5>
              <p class="sub">Protect your capital and minimise losses in volatile markets using professional risk
                control techniques.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Position Sizing</li>
                <li><i class="bi bi-chevron-right"></i>Stop Loss Strategies</li>
                <li><i class="bi bi-chevron-right"></i>Diversification for Risk Control</li>
                <li><i class="bi bi-chevron-right"></i>Hedging Techniques</li>
                <li><i class="bi bi-chevron-right"></i>Emergency Fund Planning</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(225,29,72,.1);color:var(--rose);border:1px solid rgba(225,29,72,.2)">Essential</span>
                <button class="btn-mod" style="--c:var(--rose)" onclick="showPage('modules')">Learn More <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MARQUEE -->
    <div class="mq-band">
      <div class="mq-row">
        <div class="mq-track">
          <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Equity Investing</span>
          <span class="mq-tag"><i class="bi bi-pie-chart-fill"></i>Portfolio Mgmt</span>
          <span class="mq-tag"><i class="bi bi-safe"></i>Bonds & FDs</span>
          <span class="mq-tag"><i class="bi bi-gem"></i>Gold Allocation</span>
          <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto Exposure</span>
          <span class="mq-tag"><i class="bi bi-globe2"></i>Global Markets</span>
          <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
          <span class="mq-tag"><i class="bi bi-building"></i>Real Estate</span>
          <span class="mq-tag"><i class="bi bi-bar-chart-fill"></i>SIP & Index Funds</span>
          <span class="mq-tag"><i class="bi bi-bank2"></i>Retirement Planning</span>
          <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Equity Investing</span>
          <span class="mq-tag"><i class="bi bi-pie-chart-fill"></i>Portfolio Mgmt</span>
          <span class="mq-tag"><i class="bi bi-safe"></i>Bonds & FDs</span>
          <span class="mq-tag"><i class="bi bi-gem"></i>Gold Allocation</span>
          <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto Exposure</span>
          <span class="mq-tag"><i class="bi bi-globe2"></i>Global Markets</span>
          <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
          <span class="mq-tag"><i class="bi bi-building"></i>Real Estate</span>
          <span class="mq-tag"><i class="bi bi-bar-chart-fill"></i>SIP & Index Funds</span>
          <span class="mq-tag"><i class="bi bi-bank2"></i>Retirement Planning</span>
        </div>
      </div>
      <div class="mq-row">
        <div class="mq-track rev">
          <span class="mq-tag"><i class="bi bi-activity"></i>Market Analysis</span>
          <span class="mq-tag"><i class="bi bi-brain"></i>Investor Psychology</span>
          <span class="mq-tag"><i class="bi bi-lightning-charge"></i>Wealth Building</span>
          <span class="mq-tag"><i class="bi bi-arrow-repeat"></i>Compounding Effect</span>
          <span class="mq-tag"><i class="bi bi-cash-coin"></i>Passive Income</span>
          <span class="mq-tag"><i class="bi bi-diagram-3"></i>Asset Allocation</span>
          <span class="mq-tag"><i class="bi bi-percent"></i>Dividend Investing</span>
          <span class="mq-tag"><i class="bi bi-calendar-check"></i>Long-term Planning</span>
          <span class="mq-tag"><i class="bi bi-activity"></i>Market Analysis</span>
          <span class="mq-tag"><i class="bi bi-brain"></i>Investor Psychology</span>
          <span class="mq-tag"><i class="bi bi-lightning-charge"></i>Wealth Building</span>
          <span class="mq-tag"><i class="bi bi-arrow-repeat"></i>Compounding Effect</span>
          <span class="mq-tag"><i class="bi bi-cash-coin"></i>Passive Income</span>
          <span class="mq-tag"><i class="bi bi-diagram-3"></i>Asset Allocation</span>
          <span class="mq-tag"><i class="bi bi-percent"></i>Dividend Investing</span>
          <span class="mq-tag"><i class="bi bi-calendar-check"></i>Long-term Planning</span>
        </div>
      </div>
    </div>

    <!-- WHY INVEST -->
    <section class="sec sec-dark">
      <div class="container">
        <div class="text-center mb-5">
          <span class="eyebrow rv">Why This Webinar</span>
          <h2 class="sec-h rv" style="color:#fff">Why Smart Investing Matters</h2>
          <p class="sec-p mx-auto rv" style="color:rgba(255,255,255,.42)">Most people lose wealth to inflation while
            holding cash. This webinar teaches you how to put every rupee to work.</p>
        </div>
        <div class="row g-3">
          <div class="col-sm-6 col-xl-3 rv">
            <div class="why-card">
              <div class="why-icon"><i class="bi bi-graph-up-arrow"></i></div>
              <h6>Beat Inflation</h6>
              <p>Cash loses value at 6%+ annually. Equities have returned 12–15% CAGR historically. Learn to outpace
                inflation.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 rv rv-d1">
            <div class="why-card">
              <div class="why-icon" style="background:rgba(5,150,105,.12);color:var(--green)"><i
                  class="bi bi-arrow-repeat"></i></div>
              <h6>Power of Compounding</h6>
              <p>₹10,000/month invested at 12% for 20 years becomes ₹1 Crore. Start early, stay consistent.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 rv rv-d2">
            <div class="why-card">
              <div class="why-icon" style="background:rgba(37,99,235,.12);color:var(--blue)"><i
                  class="bi bi-shield-lock-fill"></i></div>
              <h6>Build Financial Security</h6>
              <p>Diversified investments create multiple income streams that protect you through market cycles and
                economic downturns.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 rv rv-d3">
            <div class="why-card">
              <div class="why-icon" style="background:rgba(124,58,237,.12);color:var(--purple)"><i
                  class="bi bi-person-badge-fill"></i></div>
              <h6>Expert-Led Learning</h6>
              <p>Taught by CFAs and experienced fund managers with real portfolio case studies — not theoretical
                textbook advice.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="sec sec-alt">
      <div class="container">
        <div class="text-center mb-5">
          <span class="eyebrow rv">Student Reviews</span>
          <h2 class="sec-h rv">What Investors Are Saying</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-4 rv">
            <div class="t-card">
              <div class="stars">★★★★★</div><q>"The Portfolio Management module changed how I think about money. I
                restructured from 100% equity to a 70-20-10 split and my portfolio volatility dropped significantly
                while returns stayed strong."</q>
              <div class="d-flex align-items-center gap-2 mt-3">
                <div class="t-av">RK</div>
                <div>
                  <div class="t-name">Rahul Kothari</div>
                  <div class="t-role">Long-term Investor · Mumbai</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 rv rv-d1">
            <div class="t-card">
              <div class="stars">★★★★★</div><q>"Investor Psychology module is gold. I used to panic-sell during
                corrections. Now I have a written investment policy and haven't touched my SIPs during any market dip
                for 18 months."</q>
              <div class="d-flex align-items-center gap-2 mt-3">
                <div class="t-av">SP</div>
                <div>
                  <div class="t-name">Sneha Patel</div>
                  <div class="t-role">SIP Investor · Ahmedabad</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 rv rv-d2">
            <div class="t-card">
              <div class="stars">★★★★☆</div><q>"Global Investment module opened my eyes to international ETFs. I now
                have 15% of my portfolio in US Nasdaq index — added diversification that Indian markets don't
                provide."</q>
              <div class="d-flex align-items-center gap-2 mt-3">
                <div class="t-av">AM</div>
                <div>
                  <div class="t-name">Arjun Mehta</div>
                  <div class="t-role">Global Investor · Surat</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band sec-red">
      <div class="container">
        <h2>Start Building Wealth Today — Free</h2>
        <p>Join 10,000+ investors who transformed their financial future through our structured investment education
          webinar series.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-white" onclick="showPage('modules')"><i class="bi bi-play-circle-fill"></i>Explore All
            Modules</button>
          <button class="btn-outline-white" onclick="showPage('portfolio')"><i class="bi bi-pie-chart-fill"></i>Build
            Your Portfolio</button>
        </div>
      </div>
    </section>

  </div><!-- /page-home -->

  <!-- ══════════════════════════════════════ -->
  <!-- PAGE 2 — FUNDAMENTALS ════════════════ -->
  <!-- ══════════════════════════════════════ -->
  <div class="page" id="page-fundamentals">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-book-fill"></i> Foundation Track</div>
        <h1 style="font-size:clamp(2rem,5vw,3.8rem)">Investment <em>Fundamentals</em></h1>
        <p class="tagline mx-auto">Everything a first-time investor must understand before putting a single rupee to
          work — taught from first principles.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <section class="sec">
      <div class="container">
        <div class="text-center mb-5 rv">
          <span class="eyebrow">Core Concepts</span>
          <h2 class="sec-h">The Building Blocks of Investing</h2>
          <p class="sec-p mx-auto">Master these fundamentals before moving to advanced strategies — every expert
            investor revisits these.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 rv">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                  class="bi bi-arrow-left-right"></i></div>
              <h6>Trading vs Investing — Know the Difference</h6>
              <p><strong>Trading</strong> seeks short-term price gains (days to months) using technical analysis.
                <strong>Investing</strong> builds wealth over years through fundamental value and compounding. Most
                retail participants confuse the two and apply trading psychology to investments, leading to poor
                decisions. This module clarifies which approach suits your goals.</p>
            </div>
          </div>
          <div class="col-md-6 rv rv-d1">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(5,150,105,.1);color:var(--green)"><i
                  class="bi bi-arrow-repeat"></i></div>
              <h6>The Magic of Compounding</h6>
              <p>Albert Einstein called it the 8th wonder. ₹1 lakh invested at 12% CAGR becomes ₹9.6 lakhs in 20 years —
                without adding a single rupee. Add a monthly SIP of ₹5,000 and it becomes ₹50+ lakhs. <strong>The key is
                  time + consistency</strong>. Starting at 25 vs 35 can mean a 3x difference in final corpus at
                retirement.</p>
            </div>
          </div>
          <div class="col-md-6 rv">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(217,119,6,.1);color:var(--gold)"><i
                  class="bi bi-percent"></i></div>
              <h6>Risk vs Return — The Core Trade-Off</h6>
              <p>Every investment carries a risk-return trade-off. Fixed deposits (5–7%) carry low risk. Equities
                (10–15% CAGR) carry higher volatility. Crypto can return 100% — or lose 80%. This module teaches you to
                <strong>quantify risk tolerance objectively</strong> and build a portfolio aligned with your age,
                income, and goals.</p>
            </div>
          </div>
          <div class="col-md-6 rv rv-d1">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(232,17,26,.1);color:var(--red)"><i
                  class="bi bi-bullseye"></i></div>
              <h6>Setting Investment Goals & Time Horizons</h6>
              <p>Investments need a <strong>purpose and timeline</strong>. Goal: child's education in 12 years →
                equity-heavy SIP. Goal: house deposit in 3 years → debt funds + FDs. Goal: retirement in 25 years →
                aggressive equity. Without defined goals, most investors panic-sell during corrections or under-invest
                from fear.</p>
            </div>
          </div>
        </div>

        <!-- Asset Classes Table -->
        <div class="mt-5 rv">
          <h5 class="mb-3" style="font-family:var(--serif)">Asset Class Comparison — Risk, Return & Liquidity</h5>
          <div class="table-responsive">
            <table class="cmp-table">
              <thead>
                <tr>
                  <th>Asset Class</th>
                  <th>Expected Return (CAGR)</th>
                  <th class="hl">Risk Level</th>
                  <th>Liquidity</th>
                  <th>Min Horizon</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Large Cap Equity</strong></td>
                  <td>10–13%</td>
                  <td class="hl">Medium</td>
                  <td>High</td>
                  <td>5+ years</td>
                </tr>
                <tr>
                  <td><strong>Mid/Small Cap Equity</strong></td>
                  <td>13–18%</td>
                  <td class="hl">High</td>
                  <td>High</td>
                  <td>7+ years</td>
                </tr>
                <tr>
                  <td><strong>Index Funds / ETFs</strong></td>
                  <td>10–12%</td>
                  <td class="hl">Medium</td>
                  <td>High</td>
                  <td>5+ years</td>
                </tr>
                <tr>
                  <td><strong>Debt Funds</strong></td>
                  <td>6–8%</td>
                  <td class="hl">Low</td>
                  <td>Medium</td>
                  <td>1–3 years</td>
                </tr>
                <tr>
                  <td><strong>Fixed Deposits</strong></td>
                  <td>5–7%</td>
                  <td class="hl">Very Low</td>
                  <td>Low–Medium</td>
                  <td>Any</td>
                </tr>
                <tr>
                  <td><strong>Gold (Physical/ETF)</strong></td>
                  <td>7–10%</td>
                  <td class="hl">Medium</td>
                  <td>Medium</td>
                  <td>3+ years</td>
                </tr>
                <tr>
                  <td><strong>Real Estate</strong></td>
                  <td>8–12%</td>
                  <td class="hl">Medium</td>
                  <td>Very Low</td>
                  <td>7+ years</td>
                </tr>
                <tr>
                  <td><strong>Crypto</strong></td>
                  <td>Highly Variable</td>
                  <td class="hl">Very High</td>
                  <td>High</td>
                  <td>5+ years</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- 8 Steps to Start -->
        <div class="mt-5">
          <div class="text-center mb-4 rv">
            <span class="eyebrow">Get Started</span>
            <h2 class="sec-h">8 Steps to Start Investing</h2>
          </div>
          <div class="row g-4">
            <div class="col-md-6 col-xl-3 rv">
              <div class="step-card">
                <div class="step-num">1</div><br /><br />
                <h6>Build an Emergency Fund</h6>
                <p>Keep 6 months of expenses in liquid assets before investing. This prevents panic-selling investments
                  during emergencies.</p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 rv rv-d1">
              <div class="step-card">
                <div class="step-num">2</div><br /><br />
                <h6>Clear High-Interest Debt</h6>
                <p>Any debt above 10% interest (credit cards, personal loans) should be cleared first. No investment
                  reliably beats 20% credit card interest.</p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 rv rv-d2">
              <div class="step-card">
                <div class="step-num">3</div><br /><br />
                <h6>Define Your Goals</h6>
                <p>Write down 3–5 specific financial goals with amounts and timelines. Goals guide every investment
                  decision you make.</p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 rv rv-d3">
              <div class="step-card">
                <div class="step-num">4</div><br /><br />
                <h6>Assess Risk Tolerance</h6>
                <p>Answer key questions: how would you react to a 30% portfolio drop? Your emotional response determines
                  asset allocation.</p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 rv">
              <div class="step-card">
                <div class="step-num">5</div><br /><br />
                <h6>Choose the Right Account</h6>
                <p>Open a Demat account for equities, use direct mutual fund platforms, and understand ELSS for tax
                  saving under 80C.</p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 rv rv-d1">
              <div class="step-card">
                <div class="step-num">6</div><br /><br />
                <h6>Start with Index Funds</h6>
                <p>Nifty 50 or Sensex index funds are the safest equity start. Low cost (0.1% expense ratio),
                  diversified, and consistently beat most active funds.</p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 rv rv-d2">
              <div class="step-card">
                <div class="step-num">7</div><br /><br />
                <h6>Set Up SIPs</h6>
                <p>Automate a monthly SIP so investing happens before you can spend. Even ₹1,000/month started at age 22
                  compounds dramatically by retirement.</p>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 rv rv-d3">
              <div class="step-card">
                <div class="step-num">8</div><br /><br />
                <h6>Review Annually</h6>
                <p>Review portfolio performance and rebalance once a year. Don't check daily — that's trading behaviour,
                  not investing behaviour.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band sec-red">
      <div class="container">
        <h2>Ready to Start Your Investment Journey?</h2>
        <p>Move on to Portfolio Management or try our Portfolio Builder tool to design your first allocation.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-white" onclick="showPage('modules')"><i class="bi bi-grid-3x3-gap-fill"></i>All
            Modules</button>
          <button class="btn-outline-white" onclick="showPage('portfolio')"><i
              class="bi bi-pie-chart-fill"></i>Portfolio Builder</button>
        </div>
      </div>
    </section>
  </div>

  <!-- ══════════════════════════════════════ -->
  <!-- PAGE 3 — ALL MODULES ═════════════════ -->
  <!-- ══════════════════════════════════════ -->
  <div class="page" id="page-modules">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-grid-3x3-gap-fill"></i> 9 Modules</div>
        <h1 style="font-size:clamp(2rem,5vw,3.8rem)">All Investment <em>Modules</em></h1>
        <p class="tagline mx-auto">Complete curriculum from investment basics to advanced global strategies —
          structured, practical and expert-led.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <section class="sec">
      <div class="container">
        <div class="row g-4">

          <div class="col-md-6 col-xl-4 rv">
            <div class="mod-card" style="--c:var(--blue)">
              <div class="mod-icon" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                  class="bi bi-bar-chart-fill"></i></div>
              <h5>Investment Fundamentals</h5>
              <p class="sub">Build a strong foundation by understanding how investing works.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Difference between Trading vs Investing</li>
                <li><i class="bi bi-chevron-right"></i>Types of Assets (Stocks, Bonds, Commodities, Crypto)</li>
                <li><i class="bi bi-chevron-right"></i>Risk vs Return Concept</li>
                <li><i class="bi bi-chevron-right"></i>Power of Compounding</li>
                <li><i class="bi bi-chevron-right"></i>Investment Goals & Planning</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(37,99,235,.1);color:var(--blue);border:1px solid rgba(37,99,235,.2)">Beginner</span>
                <button class="btn-mod" style="--c:var(--blue)" onclick="showPage('fundamentals')">Details <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="mod-card" style="--c:var(--gold)">
              <div class="mod-icon" style="background:rgba(217,119,6,.1);color:var(--gold)"><i
                  class="bi bi-pie-chart-fill"></i></div>
              <h5>Portfolio Management</h5>
              <p class="sub">Learn how to create and manage a balanced investment portfolio.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Asset Allocation Strategies</li>
                <li><i class="bi bi-chevron-right"></i>Diversification Techniques</li>
                <li><i class="bi bi-chevron-right"></i>Portfolio Rebalancing</li>
                <li><i class="bi bi-chevron-right"></i>Long-term vs Short-term Investments</li>
                <li><i class="bi bi-chevron-right"></i>Risk-adjusted Returns</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(217,119,6,.1);color:var(--gold);border:1px solid rgba(217,119,6,.2)">Intermediate</span>
                <button class="btn-mod" style="--c:var(--gold)" onclick="showPage('portfolio')">Details <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 rv rv-d2">
            <div class="mod-card" style="--c:var(--teal)">
              <div class="mod-icon" style="background:rgba(8,145,178,.1);color:var(--teal)"><i
                  class="bi bi-activity"></i></div>
              <h5>Market Analysis Techniques</h5>
              <p class="sub">Understand how to analyse markets before making investment decisions.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Fundamental Analysis Basics</li>
                <li><i class="bi bi-chevron-right"></i>Technical Indicators Overview</li>
                <li><i class="bi bi-chevron-right"></i>Economic Indicators (GDP, Inflation)</li>
                <li><i class="bi bi-chevron-right"></i>Sector Analysis</li>
                <li><i class="bi bi-chevron-right"></i>Market Trends Identification</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(8,145,178,.1);color:var(--teal);border:1px solid rgba(8,145,178,.2)">Intermediate</span>
                <a href="#" class="btn-mod" style="--c:var(--teal)">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 rv">
            <div class="mod-card" style="--c:var(--purple)">
              <div class="mod-icon" style="background:rgba(124,58,237,.1);color:var(--purple)"><i
                  class="bi bi-emoji-smile-fill"></i></div>
              <h5>Investor Psychology</h5>
              <p class="sub">Control emotions and develop a disciplined investment mindset.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Fear & Greed Cycle</li>
                <li><i class="bi bi-chevron-right"></i>Avoiding Emotional Decisions</li>
                <li><i class="bi bi-chevron-right"></i>Patience in Investing</li>
                <li><i class="bi bi-chevron-right"></i>Long-term Thinking</li>
                <li><i class="bi bi-chevron-right"></i>Behavioral Biases</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(124,58,237,.1);color:var(--purple);border:1px solid rgba(124,58,237,.2)">All
                  Levels</span>
                <a href="#" class="btn-mod" style="--c:var(--purple)">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="mod-card" style="--c:var(--green)">
              <div class="mod-icon" style="background:rgba(5,150,105,.1);color:var(--green)"><i
                  class="bi bi-building-fill"></i></div>
              <h5>Wealth Building Strategies</h5>
              <p class="sub">Explore proven methods to build and sustain long-term wealth.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>SIP (Systematic Investment Plan)</li>
                <li><i class="bi bi-chevron-right"></i>Passive Income Streams</li>
                <li><i class="bi bi-chevron-right"></i>Dividend Investing</li>
                <li><i class="bi bi-chevron-right"></i>Growth vs Value Investing</li>
                <li><i class="bi bi-chevron-right"></i>Retirement Planning</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(5,150,105,.1);color:var(--green);border:1px solid rgba(5,150,105,.2)">Intermediate</span>
                <button class="btn-mod" style="--c:var(--green)" onclick="showPage('strategies')">Details <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 rv rv-d2">
            <div class="mod-card" style="--c:var(--rose)">
              <div class="mod-icon" style="background:rgba(225,29,72,.1);color:var(--rose)"><i
                  class="bi bi-shield-fill-check"></i></div>
              <h5>Risk Management</h5>
              <p class="sub">Protect your capital and minimise losses in volatile markets.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Position Sizing</li>
                <li><i class="bi bi-chevron-right"></i>Stop Loss Strategies</li>
                <li><i class="bi bi-chevron-right"></i>Diversification for Risk Control</li>
                <li><i class="bi bi-chevron-right"></i>Hedging Techniques</li>
                <li><i class="bi bi-chevron-right"></i>Emergency Fund Planning</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(225,29,72,.1);color:var(--rose);border:1px solid rgba(225,29,72,.2)">Essential</span>
                <a href="#" class="btn-mod" style="--c:var(--rose)">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 rv">
            <div class="mod-card" style="--c:var(--blue)">
              <div class="mod-icon" style="background:rgba(37,99,235,.08);color:var(--blue)"><i
                  class="bi bi-globe2"></i></div>
              <h5>Global Investment Opportunities</h5>
              <p class="sub">Understand how global markets impact investment decisions.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>International Markets Overview</li>
                <li><i class="bi bi-chevron-right"></i>Currency Impact</li>
                <li><i class="bi bi-chevron-right"></i>Emerging Markets</li>
                <li><i class="bi bi-chevron-right"></i>Global Economic Trends</li>
                <li><i class="bi bi-chevron-right"></i>Cross-border Investments</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(37,99,235,.1);color:var(--blue);border:1px solid rgba(37,99,235,.2)">Advanced</span>
                <a href="#" class="btn-mod" style="--c:var(--blue)">Details <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="mod-card" style="--c:var(--dark)">
              <div class="mod-icon" style="background:rgba(0,0,0,.07);color:var(--dark)"><i
                  class="bi bi-lightning-fill"></i></div>
              <h5>Advanced Investment Strategies</h5>
              <p class="sub">Take your investing skills to the next level with advanced techniques.</p>
              <ul class="mod-list">
                <li><i class="bi bi-chevron-right"></i>Value Investing Principles</li>
                <li><i class="bi bi-chevron-right"></i>Growth Investing Strategies</li>
                <li><i class="bi bi-chevron-right"></i>Sector Rotation Strategy</li>
                <li><i class="bi bi-chevron-right"></i>ETF & Index Investing</li>
                <li><i class="bi bi-chevron-right"></i>Alternative Investments</li>
              </ul>
              <div class="mod-foot">
                <span class="mod-badge"
                  style="background:rgba(0,0,0,.07);color:var(--dark);border:1px solid rgba(0,0,0,.12)">Advanced</span>
                <button class="btn-mod" style="--c:var(--dark)" onclick="showPage('strategies')">Details <i
                    class="bi bi-arrow-right"></i></button>
              </div>
            </div>
          </div>

          <!-- Full-width card -->
          <div class="col-12 rv rv-d2">
            <div class="full-card">
              <div class="full-badge"><i class="bi bi-exclamation-triangle-fill me-1"></i>Module 09 — Capstone</div>
              <div class="row align-items-center g-4">
                <div class="col-lg-5">
                  <h4 style="font-size:1.5rem;margin-bottom:.5rem">Common Investment Mistakes
                  </h4>
                  <p style="font-size:.88rem;color:var(--muted);margin-bottom:1.2rem;line-height:1.65">Avoid pitfalls
                    that can negatively impact your portfolio. Learning from others' mistakes is the cheapest tuition in
                    investing.</p>
                  <button class="btn-hero" onclick="showPage('faq')"><i class="bi bi-play-fill me-1"></i>Learn What Not
                    to Do</button>
                </div>
                <div class="col-lg-7">
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <div class="feat-card" style="border-left:3px solid var(--red)">
                        <div class="feat-icon" style="background:rgba(232,17,26,.08);color:var(--red)"><i
                            class="bi bi-arrow-up-down"></i></div>
                        <h6>Overtrading</h6>
                        <p>Excessive buying and selling destroys compounding. Transaction costs + taxes erode returns
                          dramatically.</p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="feat-card" style="border-left:3px solid var(--gold)">
                        <div class="feat-icon" style="background:rgba(217,119,6,.08);color:var(--gold)"><i
                            class="bi bi-search"></i></div>
                        <h6>Lack of Research</h6>
                        <p>Investing in "hot tips" without analysing fundamentals. Follow the business, not the hype.
                        </p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="feat-card" style="border-left:3px solid var(--purple)">
                        <div class="feat-icon" style="background:rgba(124,58,237,.08);color:var(--purple)"><i
                            class="bi bi-megaphone-fill"></i></div>
                        <h6>Following Market Hype</h6>
                        <p>Buying at peaks because "everyone else is." The greatest investments are made when conviction
                          overrules crowd sentiment.</p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="feat-card" style="border-left:3px solid var(--teal)">
                        <div class="feat-icon" style="background:rgba(8,145,178,.08);color:var(--teal)"><i
                            class="bi bi-x-octagon-fill"></i></div>
                        <h6>Poor Diversification</h6>
                        <p>All-in on one stock, sector or asset class. Diversification is the only free lunch in
                          investing.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

  <!-- ══════════════════════════════════════ -->
  <!-- PAGE 4 — PORTFOLIO BUILDER ═══════════ -->
  <!-- ══════════════════════════════════════ -->
  <div class="page" id="page-portfolio">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-pie-chart-fill"></i> Free Planning Tool</div>
        <h1 style="font-size:clamp(2rem,5vw,3.8rem)">Portfolio <em>Builder</em></h1>
        <p class="tagline mx-auto">Design your ideal investment portfolio based on your age, risk tolerance and
          financial goals — instantly.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <section class="sec">
      <div class="container">
        <div class="row g-5 align-items-start">

          <!-- CALCULATOR -->
          <div class="col-lg-5 rv">
            <h3 style="margin-bottom:1.4rem">SIP & Compounding Calculator</h3>
            <div class="calc-wrap">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="calc-label">Monthly SIP (₹)</label>
                  <input class="calc-input" type="number" id="sip" placeholder="10000" value="10000" />
                </div>
                <div class="col-sm-6">
                  <label class="calc-label">Expected Return (% p.a.)</label>
                  <input class="calc-input" type="number" id="ret" placeholder="12" value="12" step=".5" />
                </div>
                <div class="col-sm-6">
                  <label class="calc-label">Investment Period (Years)</label>
                  <input class="calc-input" type="number" id="yrs" placeholder="20" value="20" />
                </div>
                <div class="col-sm-6">
                  <label class="calc-label">Lump Sum (₹) — optional</label>
                  <input class="calc-input" type="number" id="lump" placeholder="0" value="0" />
                </div>
                <div class="col-12">
                  <button class="btn-calc" onclick="calcSIP()"><i class="bi bi-calculator me-2"></i>Calculate
                    Wealth</button>
                </div>
              </div>
              <div id="sipResult" style="display:none">
                <div class="result-grid">
                  <div class="res-cell hl">
                    <div class="rv2" id="r-corpus">₹0</div>
                    <div class="rl">Final Corpus</div>
                  </div>
                  <div class="res-cell">
                    <div class="rv2" id="r-invested">₹0</div>
                    <div class="rl">Invested</div>
                  </div>
                  <div class="res-cell gn">
                    <div class="rv2" id="r-gains">₹0</div>
                    <div class="rl">Gains</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Risk Profile -->
            <div class="mt-4 rv">
              <h5 style="margin-bottom:1.1rem">Your Risk Profile</h5>
              <div class="calc-wrap" style="padding:1.4rem">
                <label class="calc-label">Age</label>
                <input class="calc-input mb-3" type="number" id="ageInp" placeholder="30" value="30"
                  oninput="updateAlloc()" />
                <label class="calc-label">Risk Tolerance</label>
                <select class="calc-select mb-3" id="riskPref" onchange="updateAlloc()">
                  <option value="conservative">Conservative — Capital Protection</option>
                  <option value="moderate" selected>Moderate — Balanced Growth</option>
                  <option value="aggressive">Aggressive — Maximum Growth</option>
                </select>
                <label class="calc-label mb-2 d-block">Risk Level</label>
                <div class="risk-meter">
                  <div class="risk-needle" id="riskNeedle" style="left:50%"></div>
                </div>
                <div class="risk-labels"><span>Low</span><span>Moderate</span><span>High</span></div>
              </div>
            </div>
          </div>

          <!-- ALLOCATION CHART -->
          <div class="col-lg-7 rv rv-d1">
            <h3 style="margin-bottom:1.4rem">Recommended Asset Allocation</h3>
            <div id="allocResult" class="calc-wrap">
              <div class="alloc-chart" id="allocChart"></div>
              <p style="font-size:.78rem;color:var(--muted);margin-top:1rem">* Allocation is a general guideline. Adjust
                based on your specific goals and consult a financial advisor.</p>
            </div>

            <!-- What Each Allocation Means -->
            <div class="mt-4">
              <h5 style="margin-bottom:1rem">Portfolio Management Principles</h5>
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="feat-card">
                    <div class="feat-icon" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                        class="bi bi-sliders"></i></div>
                    <h6>Asset Allocation</h6>
                    <p>The single most important decision in investing. Studies show 90%+ of portfolio performance is
                      determined by asset allocation, not stock selection.</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="feat-card">
                    <div class="feat-icon" style="background:rgba(5,150,105,.1);color:var(--green)"><i
                        class="bi bi-arrow-repeat"></i></div>
                    <h6>Annual Rebalancing</h6>
                    <p>If equities rally and reach 75% of your 60% target, sell enough to restore balance. This forces
                      "buy low, sell high" systematically.</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="feat-card">
                    <div class="feat-icon" style="background:rgba(217,119,6,.1);color:var(--gold)"><i
                        class="bi bi-hourglass-split"></i></div>
                    <h6>Time Horizon Matters</h6>
                    <p>Longer horizon = more equity. Rule of 100: subtract your age from 100 to get your equity %.
                      Adjust based on risk tolerance.</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="feat-card">
                    <div class="feat-icon" style="background:rgba(232,17,26,.1);color:var(--red)"><i
                        class="bi bi-layers"></i></div>
                    <h6>Diversification</h6>
                    <p>Spread across sectors, geographies and asset classes. True diversification means your portfolio
                      doesn't all fall together.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- ══════════════════════════════════════ -->
  <!-- PAGE 5 — STRATEGIES ══════════════════ -->
  <!-- ══════════════════════════════════════ -->
  <div class="page" id="page-strategies">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-lightning-fill"></i> Advanced Track</div>
        <h1 style="font-size:clamp(2rem,5vw,3.8rem)">Investment <em>Strategies</em></h1>
        <p class="tagline mx-auto">Proven wealth-building strategies used by the world's most successful investors —
          from Warren Buffett to Ray Dalio.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <section class="sec">
      <div class="container">
        <div class="text-center mb-5 rv">
          <span class="eyebrow">Strategy Toolkit</span>
          <h2 class="sec-h">7 Wealth Building Strategies</h2>
          <p class="sec-p mx-auto">Each strategy suits different investor profiles. Learn all seven — then choose the
            combination that matches your goals.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 rv">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(5,150,105,.1);color:var(--green)"><i
                  class="bi bi-bar-chart-steps"></i></div>
              <h6>1. SIP — Systematic Investment Plan</h6>
              <p>Invest a fixed amount monthly regardless of market level. Benefits: rupee cost averaging (buy more
                units when markets fall), removes emotional decision-making, builds discipline. <strong>Best
                  for:</strong> salaried professionals, first-time investors, retirement building. Start as low as
                ₹500/month.</p>
            </div>
          </div>
          <div class="col-md-6 rv rv-d1">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                  class="bi bi-graph-down-arrow"></i></div>
              <h6>2. Value Investing</h6>
              <p>Buy great businesses at below-fair-value prices. Popularised by Benjamin Graham and Warren Buffett. Key
                metrics: P/E ratio below industry average, P/B below 1.5, ROE above 15%, low debt. <strong>Best
                  for:</strong> patient investors with 5+ year horizon. Requires fundamental analysis skills taught in
                Market Analysis module.</p>
            </div>
          </div>
          <div class="col-md-6 rv">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(124,58,237,.1);color:var(--purple)"><i
                  class="bi bi-rocket-takeoff-fill"></i></div>
              <h6>3. Growth Investing</h6>
              <p>Buy companies growing faster than the market — revenue 20%+, expanding market share, strong competitive
                moat. Often trades at premium P/E but justified by growth rate. <strong>Think:</strong> buying Infosys
                in 2003 or Asian Paints in 2008. <strong>Risk:</strong> high valuations can mean sharp corrections if
                growth slows.</p>
            </div>
          </div>
          <div class="col-md-6 rv rv-d1">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(217,119,6,.1);color:var(--gold)"><i
                  class="bi bi-cash-coin"></i></div>
              <h6>4. Dividend Investing</h6>
              <p>Build a portfolio of high-dividend-yield stocks for passive income. Focus on companies with 15+ year
                dividend track record, payout ratio 40–60%, and growing dividends. <strong>Best for:</strong> retirees
                and income-seekers. Reinvesting dividends (DRIP) creates powerful compounding — historically adds 40% to
                total returns.</p>
            </div>
          </div>
          <div class="col-md-6 rv">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(8,145,178,.1);color:var(--teal)"><i
                  class="bi bi-grid-fill"></i></div>
              <h6>5. Index Fund / ETF Investing</h6>
              <p>Track the Nifty 50, Sensex or global indices passively. Expense ratio as low as 0.05%.
                <strong>Fact:</strong> over 15 years, 80%+ of active fund managers underperform their benchmark. Jack
                Bogle's passive revolution. <strong>Best for:</strong> anyone who wants market returns without
                stock-picking skill. Core of most intelligent portfolios.</p>
            </div>
          </div>
          <div class="col-md-6 rv rv-d1">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(232,17,26,.1);color:var(--red)"><i
                  class="bi bi-arrow-repeat"></i></div>
              <h6>6. Sector Rotation Strategy</h6>
              <p>Different sectors outperform at different points of the economic cycle. IT and healthcare outperform in
                slowdowns; banks and industrials lead in expansions. <strong>Skill required:</strong> reading macro
                indicators, FII/DII flows, and sector PE relative to history. Advanced strategy — combine with ETFs to
                execute efficiently.</p>
            </div>
          </div>
          <div class="col-md-6 rv">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(0,0,0,.06);color:var(--dark)"><i class="bi bi-layers"></i>
              </div>
              <h6>7. Alternative Investments</h6>
              <p>Beyond stocks and bonds — Real Estate Investment Trusts (REITs), Infrastructure Investment Trusts
                (InvITs), gold bonds, P2P lending, startup investing via AIFs. <strong>Portfolio role:</strong> 5–15% of
                total portfolio. Provides genuine diversification since alternatives don't move with equity markets.
                Good hedge against equity volatility.</p>
            </div>
          </div>
          <div class="col-md-6 rv rv-d1">
            <div class="feat-card">
              <div class="feat-icon" style="background:rgba(5,150,105,.08);color:var(--green)"><i
                  class="bi bi-bank2"></i></div>
              <h6>Retirement Planning — The NPS + EPF + SIP Trifecta</h6>
              <p>Build retirement corpus using three pillars: <strong>EPF</strong> (employer-matched, tax-free),
                <strong>NPS Tier 1</strong> (additional 80CCD(1B) ₹50K deduction, low-cost equity exposure), and
                <strong>Equity SIPs</strong> in index funds. Targets: 25x annual expenses by retirement age. Start
                calculating your number using our Portfolio Builder.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Investor Psychology -->
    <section class="sec sec-alt">
      <div class="container">
        <div class="text-center mb-5 rv">
          <span class="eyebrow">Mindset Module</span>
          <h2 class="sec-h">Investor Psychology & Behavioral Biases</h2>
          <p class="sec-p mx-auto">The biggest threat to your investment returns isn't the market — it's your own brain.
            Learn to master these biases.</p>
        </div>
        <div class="row g-4">
          <div class="col-sm-6 col-lg-3 rv">
            <div class="feat-card" style="border-top:3px solid var(--red)">
              <div class="feat-icon" style="background:rgba(232,17,26,.1);color:var(--red)"><i
                  class="bi bi-heart-fill"></i></div>
              <h6>Loss Aversion</h6>
              <p>Losses feel 2x as painful as equivalent gains feel good. This causes investors to hold losing stocks
                too long and sell winners too early. Solution: rules-based portfolio review.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 rv rv-d1">
            <div class="feat-card" style="border-top:3px solid var(--gold)">
              <div class="feat-icon" style="background:rgba(217,119,6,.1);color:var(--gold)"><i
                  class="bi bi-people-fill"></i></div>
              <h6>Herd Mentality</h6>
              <p>Buying because everyone else is buying (2021 crypto mania, 2017 IPO frenzy). The crowd is usually right
                during the trend — and spectacularly wrong at the top.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 rv rv-d2">
            <div class="feat-card" style="border-top:3px solid var(--blue)">
              <div class="feat-icon" style="background:rgba(37,99,235,.1);color:var(--blue)"><i
                  class="bi bi-anchor-fill"></i></div>
              <h6>Anchoring Bias</h6>
              <p>Anchoring to a stock's all-time high and waiting to "get back to even" before selling. The market
                doesn't know your purchase price — the business determines future value.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 rv rv-d3">
            <div class="feat-card" style="border-top:3px solid var(--green)">
              <div class="feat-icon" style="background:rgba(5,150,105,.1);color:var(--green)"><i
                  class="bi bi-shield-fill"></i></div>
              <h6>Overconfidence Bias</h6>
              <p>After a bull market, most investors believe they have exceptional stock-picking ability. Studies show
                75% of investors rate themselves above average. Diversification is insurance against your own
                overconfidence.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band sec-red">
      <div class="container">
        <h2>Ready to Apply These Strategies?</h2>
        <p>Use our Portfolio Builder to design your first allocation using these principles — or explore all nine
          modules.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-white" onclick="showPage('portfolio')"><i class="bi bi-pie-chart-fill"></i>Build My
            Portfolio</button>
          <button class="btn-outline-white" onclick="showPage('faq')"><i class="bi bi-question-circle"></i>Common
            Questions</button>
        </div>
      </div>
    </section>
  </div>

  <!-- ══════════════════════════════════════ -->
  <!-- PAGE 6 — FAQ ═════════════════════════ -->
  <!-- ══════════════════════════════════════ -->
  <div class="page" id="page-faq">
    <section class="hero hero-sm sec-alt">
      <div class="container text-center">
        <div class="hero-badge"><i class="bi bi-question-circle-fill"></i> Expert Answers</div>
        <h1 style="font-size:clamp(2rem,5vw,3.8rem)">Investment <em>FAQ</em></h1>
        <p class="tagline mx-auto">The most common investment questions — answered honestly by our CFA experts, without
          the jargon.</p>
      </div>
    </section>
    <div class="hdiv"></div>

    <section class="sec">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 rv">
            <h4 style="margin-bottom:1.3rem"><i class="bi bi-graph-up-arrow me-2"
                style="color:var(--red)"></i>Investing Fundamentals</h4>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f1"
                aria-expanded="false">How much should I invest each month?<i class="bi bi-plus-lg"></i></button>
              <div id="f1" class="collapse">
                <p class="faq-body">A common rule is to invest 20% of your take-home income. More specifically: 50%
                  living expenses, 30% lifestyle, 20% savings/investments (the 50-30-20 rule). If you can't invest 20%
                  yet, start with whatever you can — even ₹500/month in an index fund. Consistency matters more than
                  amount when starting out.</p>
              </div>
            </div>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f2"
                aria-expanded="false">Should I invest in stocks directly or through mutual funds?<i
                  class="bi bi-plus-lg"></i></button>
              <div id="f2" class="collapse">
                <p class="faq-body">Mutual funds (especially index funds) are the right starting point for 90% of
                  investors. Direct stock picking requires significant research time, emotional discipline, and
                  portfolio management skill. Index funds deliver market returns at near-zero cost. Once you've built a
                  core index fund portfolio, you can allocate 10–20% to direct stock picks for learning.</p>
              </div>
            </div>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f3"
                aria-expanded="false">Is it too late to start investing at age 40?<i class="bi bi-plus-lg"></i></button>
              <div id="f3" class="collapse">
                <p class="faq-body">Absolutely not. ₹20,000/month SIP at 12% CAGR from age 40 to 60 = ₹1.98 Crore. Not
                  as dramatic as starting at 25, but still significant. At 40, adjust risk profile: slightly less
                  aggressive, more debt funds. Focus on consistent saving rate over investment returns — the savings
                  rate matters more at this stage.</p>
              </div>
            </div>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f4"
                aria-expanded="false">What's the difference between an ETF and a mutual fund?<i
                  class="bi bi-plus-lg"></i></button>
              <div id="f4" class="collapse">
                <p class="faq-body">Both can track the same index (like Nifty 50) but differ in mechanics.
                  <strong>Mutual Funds:</strong> bought at end-of-day NAV, no brokerage, auto-invest via SIP, typically
                  higher AUM. <strong>ETFs:</strong> trade like stocks throughout the day, require a Demat account,
                  marginally lower expense ratio, slightly wider bid-ask spread. For SIP investors, index mutual funds
                  are simpler. ETFs suit lump-sum tactical investing.</p>
              </div>
            </div>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f5"
                aria-expanded="false">How do I know if a stock is overvalued?<i class="bi bi-plus-lg"></i></button>
              <div id="f5" class="collapse">
                <p class="faq-body">Compare P/E to: (1) its own 5-year historical average, (2) sector average, (3)
                  earnings growth rate (PEG ratio — P/E divided by growth rate; below 1 is cheap). Also check P/B for
                  capital-intensive businesses and EV/EBITDA for comparisons. No single metric is definitive — use at
                  least 3–4 valuation approaches together and compare to peers.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 rv rv-d1">
            <h4 style="margin-bottom:1.3rem"><i class="bi bi-pie-chart-fill me-2"
                style="color:var(--gold)"></i>Portfolio & Risk</h4>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f6"
                aria-expanded="false">How many stocks should I hold in my portfolio?<i
                  class="bi bi-plus-lg"></i></button>
              <div id="f6" class="collapse">
                <p class="faq-body">Research shows that 15–20 stocks eliminates ~85% of unsystematic risk. Beyond 25–30,
                  additional diversification benefits are minimal. However, this applies to a direct stock portfolio. If
                  using mutual funds, a single index fund already holds 50 stocks. A sensible direct equity portfolio:
                  10–15 stocks across 6–8 sectors with no single stock above 10% allocation.</p>
              </div>
            </div>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f7"
                aria-expanded="false">Should I invest in international stocks?<i class="bi bi-plus-lg"></i></button>
              <div id="f7" class="collapse">
                <p class="faq-body">Yes, 10–20% international allocation is generally recommended. Benefits: (1)
                  exposure to USD appreciation, (2) access to companies absent in India (Apple, Amazon, Alphabet), (3)
                  true diversification since Indian and US markets don't always move together. Use Nifty US Nasdaq 100
                  ETF, Motilal Oswal S&P 500 FOF, or Parag Parikh Flexi Cap (35% international) for easy access.</p>
              </div>
            </div>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f8"
                aria-expanded="false">When should I rebalance my portfolio?<i class="bi bi-plus-lg"></i></button>
              <div id="f8" class="collapse">
                <p class="faq-body">Rebalance when any asset class deviates by more than 5% from target, or annually —
                  whichever comes first. Example: equity rallies from 60% to 70% of portfolio → sell 10% equity, buy
                  debt. This mechanically forces "selling high, buying low." Don't rebalance more frequently than
                  quarterly — transaction costs and taxes erode returns from over-tinkering.</p>
              </div>
            </div>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f9"
                aria-expanded="false">What should I do when the market crashes?<i class="bi bi-plus-lg"></i></button>
              <div id="f9" class="collapse">
                <p class="faq-body">The correct answer is: <strong>nothing, unless you want to buy more.</strong> If you
                  have pre-defined asset allocation, a crash means equities are now below target → rebalance by buying
                  more equity. Never stop SIPs during a crash — you're buying more units at lower prices (rupee cost
                  averaging). The only time to sell in a crash: your investment thesis for a specific stock has changed,
                  not just the price.</p>
              </div>
            </div>
            <div class="faq-item"><button class="faq-q" data-bs-toggle="collapse" data-bs-target="#f10"
                aria-expanded="false">Is real estate a good investment in 2026?<i class="bi bi-plus-lg"></i></button>
              <div id="f10" class="collapse">
                <p class="faq-body">Direct real estate has pros (tangible asset, leverage, rental income) and cons
                  (illiquidity, high transaction cost 6–8%, management overhead, concentrated risk). For most investors,
                  REITs provide real estate exposure with full liquidity. Indian REITs (Embassy, Mindspace, Brookfield)
                  offer 6–8% yield + capital appreciation without the hassle of physical property. A 5–10% REIT
                  allocation makes more sense than buying a third property.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band sec-red">
      <div class="container">
        <h2>Have More Questions?</h2>
        <p>Join our live Q&A webinar sessions where our CFA experts answer your investment questions in real-time with
          live portfolio analysis.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <button class="btn-white" onclick="showPage('home')"><i class="bi bi-play-fill"></i>Join Live Webinar</button>
          <button class="btn-outline-white" onclick="showPage('portfolio')"><i
              class="bi bi-pie-chart-fill"></i>Portfolio Builder</button>
        </div>
      </div>
    </section>
  </div>

  <script>
    // ── NAVBAR SCROLL
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => nav.classList.toggle('raised', scrollY > 40));

    // ── SCROLL REVEAL
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: 0.09 });
    function observeAll() { document.querySelectorAll('.rv:not(.in)').forEach(el => io.observe(el)); }
    observeAll();

    // ── PAGE SWITCHING
    function showPage(id) {
      document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
      document.querySelectorAll('.pnav-btn').forEach(b => b.classList.remove('active'));
      document.getElementById('page-' + id).classList.add('active');
      document.querySelector(`[data-page="${id}"]`).classList.add('active');
      window.scrollTo({ top: 0, behavior: 'smooth' });
      setTimeout(observeAll, 100);
      if (id === 'portfolio') { updateAlloc(); animateBars(); }
    }
    document.querySelectorAll('.pnav-btn').forEach(btn => {
      btn.addEventListener('click', () => showPage(btn.dataset.page));
    });

    // ── SIP CALCULATOR
    function calcSIP() {
      const sip = parseFloat(document.getElementById('sip').value) || 0;
      const r = (parseFloat(document.getElementById('ret').value) || 12) / 100 / 12;
      const n = (parseFloat(document.getElementById('yrs').value) || 20) * 12;
      const lump = parseFloat(document.getElementById('lump').value) || 0;

      const sipCorpus = sip * (((Math.pow(1 + r, n) - 1) / r) * (1 + r));
      const lumpCorpus = lump * Math.pow(1 + r, n);
      const corpus = sipCorpus + lumpCorpus;
      const invested = sip * n + lump;
      const gains = corpus - invested;

      const fmt = v => '₹' + Math.round(v).toLocaleString('en-IN');
      document.getElementById('r-corpus').textContent = fmt(corpus);
      document.getElementById('r-invested').textContent = fmt(invested);
      document.getElementById('r-gains').textContent = fmt(gains);
      document.getElementById('sipResult').style.display = 'block';
    }

    // ── ASSET ALLOCATION
    const allocations = {
      conservative: [
        { label: 'Large Cap Equity', pct: 20, color: '#2563eb' },
        { label: 'Debt Funds / FDs', pct: 40, color: '#059669' },
        { label: 'Liquid / Money Market', pct: 20, color: '#0891b2' },
        { label: 'Gold (ETF/SGB)', pct: 15, color: '#d97706' },
        { label: 'REITs / Alternatives', pct: 5, color: '#7c3aed' },
      ],
      moderate: [
        { label: 'Large Cap Equity', pct: 35, color: '#2563eb' },
        { label: 'Mid & Small Cap Equity', pct: 15, color: '#e11d48' },
        { label: 'Debt Funds', pct: 25, color: '#059669' },
        { label: 'Gold (ETF/SGB)', pct: 10, color: '#d97706' },
        { label: 'International Equity', pct: 10, color: '#0891b2' },
        { label: 'REITs / Alternatives', pct: 5, color: '#7c3aed' },
      ],
      aggressive: [
        { label: 'Large Cap Equity', pct: 30, color: '#2563eb' },
        { label: 'Mid Cap Equity', pct: 25, color: '#e11d48' },
        { label: 'Small Cap Equity', pct: 15, color: '#f97316' },
        { label: 'International Equity', pct: 15, color: '#0891b2' },
        { label: 'Crypto (max 5%)', pct: 5, color: '#7c3aed' },
        { label: 'Gold / Commodities', pct: 5, color: '#d97706' },
        { label: 'Debt (emergency only)', pct: 5, color: '#059669' },
      ],
    };

    function updateAlloc() {
      const pref = document.getElementById('riskPref')?.value || 'moderate';
      const age = parseInt(document.getElementById('ageInp')?.value) || 30;
      const chart = document.getElementById('allocChart');
      if (!chart) return;

      const data = allocations[pref];
      chart.innerHTML = data.map(item => `
      <div class="alloc-row">
        <div class="alloc-label">${item.label}</div>
        <div class="alloc-bar-wrap"><div class="alloc-bar" style="background:${item.color};width:${item.pct}%"></div></div>
        <div class="alloc-pct">${item.pct}%</div>
      </div>`).join('');

      const riskLevels = { conservative: '20%', moderate: '50%', aggressive: '82%' };
      const needle = document.getElementById('riskNeedle');
      if (needle) needle.style.left = riskLevels[pref];
    }

    function animateBars() {
      setTimeout(() => {
        document.querySelectorAll('.alloc-bar').forEach(b => {
          const w = b.style.width;
          b.style.width = '0';
          setTimeout(() => { b.style.width = w; }, 100);
        });
      }, 200);
    }

    // init portfolio page if already active
    if (document.getElementById('page-portfolio').classList.contains('active')) {
      updateAlloc();
    }
  </script>
<?php
include_once ('elements/footer.php');
?>
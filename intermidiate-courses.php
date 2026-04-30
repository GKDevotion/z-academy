<?php 
include_once ('elements/header.php');
?>

<style>

  /* TICKER */
  .ticker-bar {
    background: var(--zed-dark-text);
    overflow: hidden;
    padding: .44rem 0
  }

  .ticker-inner {
    display: flex;
    width: max-content;
    animation: tickMove 32s linear infinite
  }

  .ticker-inner:hover {
    animation-play-state: paused
  }

  .t-item {
    padding: 0 2.2rem;
    font-size: .74rem;
    font-weight: 600;
    letter-spacing: .04em;
    color: rgba(255, 255, 255, .42);
    white-space: nowrap
  }

  .t-item .up {
    color: #4ade80
  }

  .t-item .dn {
    color: #f87171
  }

  @keyframes tickMove {
    from {
      transform: translateX(0)
    }

    to {
      transform: translateX(-50%)
    }
  }

  /* HERO */
  .hero {
    padding: 100px 0 80px;
    text-align: center;
    background: radial-gradient(ellipse 60% 55% at 50% -10%, rgba(232, 17, 26, .07) 0%, transparent 65%), var(--zed-backgound-color);
    position: relative;
    overflow: hidden;
  }

  .hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(0, 0, 0, .03) 39px, rgba(0, 0, 0, .03) 40px), repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(0, 0, 0, .03) 39px, rgba(0, 0, 0, .03) 40px);
    pointer-events: none;
  }

  .hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    background: linear-gradient(135deg, var(--zed-primary), #ff4d55);
    color: #fff;
    font-size: .7rem;
    font-weight: 800;
    letter-spacing: .15em;
    text-transform: uppercase;
    padding: .36rem 1.1rem;
    border-radius: 50px;
    margin-bottom: 1.6rem;
    animation: dropIn .55s ease both;
    box-shadow: 0 6px 20px var(--zed-light-red-hover)
  }

  .hero h1 {
    font-family: 'Syne', sans-serif;
    font-size: clamp(2.4rem, 6vw, 4.8rem);
    font-weight: 800;
    line-height: 1.06;
    letter-spacing: -.04em;
    color: var(--zed-dark-text);
    animation: riseUp .7s .1s ease both
  }

  .hero h1 em {
    font-style: normal;
    color: var(--zed-primary)
  }

  .hero p.tagline {
    font-size: 1.05rem;
`    color: var(--zed-secondary);
    max-width: 570px;
    margin: 1.1rem auto 2.1rem;
    font-weight: 400;
    line-height: 1.65;
    animation: riseUp .7s .2s ease both
  }

  .hero-cta {
    animation: riseUp .7s .3s ease both
  }

  .btn-hero {
    background: var(--zed-primary);
    color: #fff;
    border: none;
    border-radius: 50px;
    font-size: .93rem;
    font-weight: 800;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: .95rem 3rem;
    box-shadow: 0 10px 32px var(--zed-light-red-hover);
    transition: background .25s, transform .2s, box-shadow .25s;
    text-decoration: none;
  }

  .btn-hero:hover {
    background: var(--zed-primary-hover);
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 16px 40px rgba(232, 17, 26, .42)
  }

  .level-pills {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: .75rem;
    margin-top: 2.8rem;
    animation: riseUp .7s .45s ease both
  }

  .lvl-pill {
    display: flex;
    align-items: center;
    gap: .5rem;
    background: var(--zed-card-bg);
    border: 1.5px solid var(--zed-icon-color);
    border-radius: 50px;
    padding: .5rem 1.1rem;
    font-size: .82rem;
    font-weight: 700;
    color: var(--zed-green-text);
    transition: border-color .25s, box-shadow .25s
  }

  .lvl-pill:hover {
    border-color: rgba(232, 17, 26, .35);
    box-shadow: 0 4px 18px rgba(232, 17, 26, .1)
  }

  .ldot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    flex-shrink: 0
  }

  .ldot-done {
    background: var(--zed-success-hover)
  }

  .ldot-now {
    background: var(--zed-primary);
    animation: pulseDot 1.8s infinite
  }

  .ldot-next {
    background: #94a3b8
  }

  .hero-stats {
    display: flex;
    justify-content: center;
    gap: 2.5rem;
    flex-wrap: wrap;
    margin-top: 2.6rem;
    animation: riseUp .7s .55s ease both
  }

  .h-stat .num {
    font-family: 'Syne', sans-serif;
    font-size: 1.85rem;
    font-weight: 800;
    color: var(--zed-dark-text)
  }

  .h-stat .num span {
    color: var(--zed-primary)
  }

  .h-stat .lbl {
    font-size: .7rem;
    font-weight: 700;
`    color: var(--zed-secondary);
    letter-spacing: .08em;
    text-transform: uppercase
  }

  @keyframes dropIn {
    from {
      opacity: 0;
      transform: translateY(-16px)
    }

    to {
      opacity: 1;
      transform: translateY(0)
    }
  }

  @keyframes riseUp {
    from {
      opacity: 0;
      transform: translateY(30px)
    }

    to {
      opacity: 1;
      transform: translateY(0)
    }
  }

  /* SECTION */
  .sec {
    padding: 84px 0
  }

  .sec-white {
    background: var(--zed-card-bg)
  }

  .sec-dark {
    background: var(--zed-dark-text)
  }

  .hdiv {
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--zed-icon-color), transparent)
  }

  .eyebrow {
    display: inline-block;
    font-size: .7rem;
    font-weight: 800;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: var(--zed-primary);
    margin-bottom: .75rem
  }

  .sec-dark .eyebrow {
    color: rgba(232, 17, 26, .8)
  }

  .sec-h {
    font-family: 'Syne', sans-serif;
    font-size: clamp(1.75rem, 3.8vw, 2.7rem);
    font-weight: 800;
    letter-spacing: -.035em;
    color: var(--zed-dark-text);
    line-height: 1.1
  }

  .sec-dark .sec-h {
    color: #fff
  }

  .sec-p {
    font-size: .92rem;
`    color: var(--zed-secondary);
    font-weight: 400;
    max-width: 470px;
    line-height: 1.65
  }

  .sec-dark .sec-p {
    color: rgba(255, 255, 255, .38)
  }

  /* MODULE CARDS */
  .mod-card {
    background: var(--zed-card-bg);
    border: 1.5px solid var(--zed-icon-color);
    border-radius: 22px;
    padding: 0 0 1.6rem;
    height: 100%;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform .4s cubic-bezier(.2, .8, .2, 1), box-shadow .4s, border-color .3s
  }

  .mod-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 32px 68px rgba(0, 0, 0, .1);
    border-color: rgba(232, 17, 26, .25)
  }

  .mod-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--zed-primary), #ff7070);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .4s ease
  }

  .mod-card:hover::before {
    transform: scaleX(1)
  }

  .mod-header {
    padding: 1.5rem 1.6rem .8rem;
    border-bottom: 1px solid var(--zed-icon-color);
    margin-bottom: 1.2rem
  }

  .mod-num-badge {
    display: block;
    width: 100%;
    text-align: center;
    background: transparent;
    border: 1.5px solid var(--zed-primary);
    color: var(--zed-primary);
    font-family: 'Syne', sans-serif;
    font-size: .78rem;
    font-weight: 800;
    letter-spacing: .14em;
    text-transform: uppercase;
    padding: .5rem 1rem;
    border-radius: 8px
  }

  .mod-body {
    padding: 0 1.6rem;
    flex: 1;
    display: flex;
    flex-direction: column
  }

  .diff-tag {
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    font-size: .7rem;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    padding: .22rem .7rem;
    border-radius: 50px;
    margin-bottom: .9rem
  }

  .diff-inter {
    background: rgba(232, 17, 26, .1);
    color: var(--zed-primary);
    border: 1px solid rgba(232, 17, 26, .2)
  }

  .diff-adv {
    background: rgba(139, 92, 246, .1);
    color: #7c3aed;
    border: 1px solid rgba(139, 92, 246, .2)
  }

  .diff-pro {
    background: rgba(234, 179, 8, .1);
    color: #b45309;
    border: 1px solid rgba(234, 179, 8, .2)
  }

  .mod-card h4 {
    font-family: 'Syne', sans-serif;
    font-size: 1.2rem;
    font-weight: 800;
    color: var(--zed-dark-text);
    margin-bottom: .45rem;
    letter-spacing: -.02em
  }

  .mod-card .desc {
    font-size: .84rem;
`    color: var(--zed-secondary);
    line-height: 1.65;
    margin-bottom: 1.1rem
  }

  .bolt-list {
    list-style: none;
    padding: 0;
    margin: 0 0 1.3rem
  }

  .bolt-list li {
    display: flex;
    align-items: center;
    gap: .55rem;
    font-size: .84rem;
    color: var(--zed-green-text);
    padding: .3rem 0;
    border-bottom: 1px solid rgba(0, 0, 0, .04)
  }

  .bolt-list li:last-child {
    border: none
  }

  .bolt-list li i {
    color: var(--zed-primary);
    font-size: .78rem;
    flex-shrink: 0
  }

  .mod-footer {
    padding: 0 1.6rem;
    margin-top: auto
  }

  .btn-unlock {
    display: block;
    width: 100%;
    text-align: center;
    text-decoration: none;
    background: transparent;
    border: 1.5px solid var(--zed-icon-color);
    color: var(--zed-green-text);
    font-size: .88rem;
    font-weight: 700;
    padding: .8rem;
    border-radius: 12px;
    transition: background .25s, border-color .25s, color .25s, box-shadow .25s
  }

  .btn-unlock:hover {
    background: var(--zed-primary);
    border-color: var(--zed-primary);
    color: #fff;
    box-shadow: 0 8px 24px var(--zed-light-red-hover)
  }

  .btn-unlock.active {
    background: var(--zed-primary);
    border-color: var(--zed-primary);
    color: #fff;
    box-shadow: 0 8px 24px var(--zed-light-red-hover)
  }

  .btn-unlock.active:hover {
    background: var(--zed-primary-hover);
    border-color: var(--zed-primary-hover)
  }

  /* MARQUEE */
  .mq-band {
    background: var(--zed-dark-text);
    padding: 3rem 0;
    overflow: hidden
  }

  .mq-row+.mq-row {
    margin-top: 1rem
  }

  .mq-track {
    display: flex;
    gap: 1.2rem;
    width: max-content;
    animation: mqRun 24s linear infinite
  }

  .mq-track.rev {
    animation-direction: reverse;
    animation-duration: 20s
  }

  .mq-tag {
    display: flex;
    align-items: center;
    gap: .55rem;
    background: rgba(255, 255, 255, .05);
    border: 1px solid rgba(255, 255, 255, .07);
    color: rgba(255, 255, 255, .55);
    border-radius: 50px;
    padding: .46rem 1.2rem;
    font-size: .82rem;
    font-weight: 600;
    white-space: nowrap;
    flex-shrink: 0
  }

  .mq-tag i {
    color: var(--zed-primary);
    font-size: .72rem
  }

  @keyframes mqRun {
    from {
      transform: translateX(0)
    }

    to {
      transform: translateX(-50%)
    }
  }

  /* TOPIC CARDS */
  .topic-card {
    background: var(--zed-card-bg);
    border: 1.5px solid var(--zed-icon-color);
    border-radius: 18px;
    padding: 1.5rem;
    height: 100%;
    transition: transform .35s, box-shadow .35s, border-color .3s;
    position: relative;
    overflow: hidden
  }

  .topic-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 22px 52px rgba(0, 0, 0, .09);
    border-color: var(--tc, rgba(232, 17, 26, .3))
  }

  .t-icon {
    width: 48px;
    height: 48px;
    border-radius: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    margin-bottom: .9rem
  }

  .topic-card h5 {
    font-family: 'Syne', sans-serif;
    font-size: 1rem;
    font-weight: 800;
    color: var(--zed-dark-text);
    margin-bottom: .35rem
  }

  .topic-card .tdesc {
    font-size: .81rem;
`    color: var(--zed-secondary);
    line-height: 1.6;
    margin-bottom: .9rem
  }

  .sub-list {
    list-style: none;
    padding: 0;
    margin: 0
  }

  .sub-list li {
    font-size: .79rem;
    color: #555;
    padding: .26rem 0;
    border-bottom: 1px solid rgba(0, 0, 0, .04);
    display: flex;
    align-items: center;
    gap: .45rem
  }

  .sub-list li:last-child {
    border: none
  }

  .sub-list li i {
    font-size: .55rem;
    opacity: .45
  }

  .chip {
    display: inline-block;
    margin-top: .85rem;
    font-size: .67rem;
    font-weight: 800;
    padding: .22rem .7rem;
    border-radius: 50px;
    letter-spacing: .07em;
    text-transform: uppercase
  }

  .ic-red {
    background: rgba(232, 17, 26, .1);
    color: var(--zed-primary)
  }

  .ic-blue {
    background: rgba(59, 130, 246, .1);
    color: #3b82f6
  }

  .ic-green {
    background: rgba(34, 197, 94, .1);
    color: #16a34a
  }

  .ic-gold {
    background: rgba(234, 179, 8, .1);
    color: #ca8a04
  }

  .ic-purple {
    background: rgba(139, 92, 246, .1);
    color: #7c3aed
  }

  .ic-teal {
    background: rgba(20, 184, 166, .1);
    color: #0d9488
  }

  .ic-orange {
    background: rgba(249, 115, 22, .1);
    color: #ea580c
  }

  .ic-sky {
    background: rgba(14, 165, 233, .1);
    color: #0284c7
  }

  .ic-rose {
    background: rgba(244, 63, 94, .1);
    color: #e11d48
  }

  .cp-red {
    background: rgba(232, 17, 26, .08);
    color: var(--zed-primary);
    border: 1px solid rgba(232, 17, 26, .2)
  }

  .cp-blue {
    background: rgba(59, 130, 246, .08);
    color: #3b82f6;
    border: 1px solid rgba(59, 130, 246, .2)
  }

  .cp-green {
    background: rgba(34, 197, 94, .08);
    color: #16a34a;
    border: 1px solid rgba(34, 197, 94, .2)
  }

  .cp-gold {
    background: rgba(234, 179, 8, .08);
    color: #ca8a04;
    border: 1px solid rgba(234, 179, 8, .2)
  }

  .cp-purple {
    background: rgba(139, 92, 246, .08);
    color: #7c3aed;
    border: 1px solid rgba(139, 92, 246, .2)
  }

  .cp-teal {
    background: rgba(20, 184, 166, .08);
    color: #0d9488;
    border: 1px solid rgba(20, 184, 166, .2)
  }

  .cp-orange {
    background: rgba(249, 115, 22, .08);
    color: #ea580c;
    border: 1px solid rgba(249, 115, 22, .2)
  }

  .cp-sky {
    background: rgba(14, 165, 233, .08);
    color: #0284c7;
    border: 1px solid rgba(14, 165, 233, .2)
  }

  .cp-rose {
    background: rgba(244, 63, 94, .08);
    color: #e11d48;
    border: 1px solid rgba(244, 63, 94, .2)
  }

  /* COMPARISON TABLE */
  .cmp-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 16px;
    overflow: hidden;
    border: 1.5px solid var(--zed-icon-color)
  }

  .cmp-table thead tr {
    background: var(--zed-dark-text)
  }

  .cmp-table thead th {
    padding: 1rem 1.2rem;
    font-family: 'Syne', sans-serif;
    font-weight: 700;
    font-size: .85rem;
    letter-spacing: .04em;
    color: rgba(255, 255, 255, .7)
  }

  .cmp-table thead th.hl {
    color: var(--zed-primary);
    background: rgba(232, 17, 26, .12)
  }

  .cmp-table tbody tr {
    background: var(--zed-card-bg);
    transition: background .2s
  }

  .cmp-table tbody tr:hover {
    background: #fafaf6
  }

  .cmp-table tbody tr:not(:last-child) td {
    border-bottom: 1px solid var(--zed-icon-color)
  }

  .cmp-table tbody td {
    padding: .85rem 1.2rem;
    font-size: .84rem;
    color: var(--zed-green-text)
  }

  .cmp-table tbody td:first-child {
    font-weight: 600;
    color: var(--zed-dark-text)
  }

  .cmp-table tbody td.hl {
    background: rgba(232, 17, 26, .04)
  }

  .cmp-table .check {
    color: var(--zed-success-hover);
    font-size: 1rem
  }

  .cmp-table .cross {
    color: #d1d5db;
    font-size: 1rem
  }

  /* WHY DARK */
  .why-card {
    background: rgba(255, 255, 255, .04);
    border: 1px solid rgba(255, 255, 255, .07);
    border-radius: 16px;
    padding: 1.6rem;
    transition: background .3s, border-color .3s, transform .3s
  }

  .why-card:hover {
    background: rgba(255, 255, 255, .07);
    border-color: var(--zed-primary-hover);
    transform: translateY(-4px)
  }

  .why-icon {
    width: 46px;
    height: 46px;
    background: rgba(232, 17, 26, .14);
    color: var(--zed-primary);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    margin-bottom: .9rem
  }

  .why-card h6 {
    font-family: 'Syne', sans-serif;
    font-weight: 700;
    color: #fff;
    margin-bottom: .3rem
  }

  .why-card p {
    font-size: .82rem;
    color: rgba(255, 255, 255, .38);
    margin: 0;
    line-height: 1.6
  }

  /* TESTIMONIALS */
  .t-card {
    background: var(--zed-card-bg);
    border: 1.5px solid var(--zed-icon-color);
    border-radius: 18px;
    padding: 1.8rem;
    height: 100%;
    transition: transform .3s, box-shadow .3s
  }

  .t-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 18px 48px rgba(0, 0, 0, .08)
  }

  .stars {
    color: var(--zed-primary);
    font-size: .88rem;
    margin-bottom: .8rem
  }

  .t-card q {
    font-size: .88rem;
    color: var(--zed-green-text);
    line-height: 1.72;
    font-style: italic;
    display: block;
    margin-bottom: 1.2rem
  }

  .t-av {
    width: 40px;
    height: 40px;
    background: var(--zed-primary);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Syne', sans-serif;
    font-weight: 800;
    font-size: .88rem;
    flex-shrink: 0
  }

  .t-name {
    font-weight: 700;
    font-size: .86rem;
    color: var(--zed-dark-text)
  }

  .t-role {
    font-size: .74rem;
`    color: var(--zed-secondary)
  }

  /* CTA BAND */
  .cta-band {
    background: var(--zed-primary);
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
    width: 440px;
    height: 440px;
    top: -160px;
    left: -110px
  }

  .cta-band::after {
    width: 330px;
    height: 330px;
    bottom: -120px;
    right: -90px
  }

  .cta-band h2 {
    font-family: 'Syne', sans-serif;
    font-size: clamp(2rem, 5vw, 3.2rem);
    font-weight: 800;
    color: #fff;
    letter-spacing: -.04em;
    position: relative;
    z-index: 1
  }

  .cta-band p {
    color: rgba(255, 255, 255, .72);
    max-width: 460px;
    margin: .9rem auto 2rem;
    position: relative;
    z-index: 1
  }

  .btn-white {
    background: #fff;
    color: var(--zed-primary);
    border: none;
    border-radius: 50px;
    font-size: .95rem;
    font-weight: 800;
    padding: .9rem 2.6rem;
    box-shadow: 0 8px 24px rgba(0, 0, 0, .14);
    transition: transform .2s, box-shadow .25s;
    position: relative;
    z-index: 1;
    text-decoration: none;
  }

  .btn-white:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 36px rgba(0, 0, 0, .2);
    color: var(--zed-primary)
  }

  /* SCROLL REVEAL */
  .rv {
    opacity: 0;
    transform: translateY(32px);
    transition: opacity .7s ease, transform .7s ease
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

  ::-webkit-scrollbar {
    width: 5px
  }

  ::-webkit-scrollbar-track {
    background: var(--zed-banner-bg-start)
  }

  ::-webkit-scrollbar-thumb {
    background: var(--zed-primary);
    border-radius: 3px
  }
</style>

<!-- HERO -->
<section class="hero">
  <div class="container position-relative" style="z-index:1">
    <div class="hero-eyebrow"><i class="bi bi-lightning-charge-fill"></i> Intermediate Track</div>
    <h1>Level Up: <em>Intermediate</em><br>Modules</h1>
    <p class="tagline">Take your foundational knowledge and turn it into a repeatable, rules-based trading system that
      works across all market conditions.</p>
    <div class="hero-cta d-flex justify-content-center gap-3 flex-wrap">
      <a href="#modules" class="btn-hero">Zero to Hero <i class="bi bi-arrow-right ms-2"></i></a>
      <a href="#topics" class="d-none btn btn-outline-secondary rounded-pill px-4 fw-bold" style="font-size:.9rem">Browse
        Topics</a>
    </div>
    <div class="level-pills">
      <div class="lvl-pill"><span class="ldot ldot-done"></span> Beginner – Complete</div>
      <div class="lvl-pill"><span class="ldot ldot-now"></span> Intermediate – You Are Here</div>
      <div class="lvl-pill"><span class="ldot ldot-next"></span> Advanced – Up Next</div>
    </div>
    <div class="hero-stats">
      <div class="h-stat">
        <div class="num">6<span>+</span></div>
        <div class="lbl">Modules</div>
      </div>
      <div class="h-stat">
        <div class="num">9<span>+</span></div>
        <div class="lbl">Asset Classes</div>
      </div>
      <div class="h-stat">
        <div class="num">1:10<span>+</span></div>
        <div class="lbl">Reward / Risk</div>
      </div>
      <div class="h-stat">
        <div class="num">Live<span>.</span></div>
        <div class="lbl">Trade Rooms</div>
      </div>
    </div>
  </div>
</section>

<div class="hdiv"></div>

<!-- MODULE CARDS -->
<section class="sec" id="modules">
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-lg-7">
        <span class="eyebrow rv">Intermediate Curriculum</span>
        <h2 class="sec-h rv">6 Power-Packed Modules</h2>
        <p class="sec-p rv">Precision entries, advanced patterns, multi-timeframe alignment and institutional concepts —
          all in one track.</p>
      </div>
      <div class="col-lg-5 text-lg-end mt-3 mt-lg-0 rv">
        <a href="#" class="btn btn-outline-danger rounded-pill px-4 fw-bold" style="font-size:.88rem">View Full
          Curriculum <i class="bi bi-arrow-right ms-1"></i></a>
      </div>
    </div>
    <div class="row g-4">

      <!-- 04 -->
      <div class="col-md-6 col-xl-4 rv">
        <div class="mod-card">
          <div class="mod-header"><span class="mod-num-badge">Module 04</span></div>
          <div class="mod-body">
            <span class="diff-tag diff-inter"><i class="bi bi-lightning-fill"></i> Intermediate</span>
            <h4>Smart Money Concepts</h4>
            <p class="desc">Deep dive into Order Blocks, Fair Value Gaps (FVG), and Market Structure Shifts — trade like
              institutions.</p>
            <ul class="bolt-list">
              <li><i class="bi bi-lightning-fill"></i>Liquidity Sweeps</li>
              <li><i class="bi bi-lightning-fill"></i>Premium vs Discount</li>
              <li><i class="bi bi-lightning-fill"></i>Mitigation Zones</li>
              <li><i class="bi bi-lightning-fill"></i>Fair Value Gap (FVG)</li>
            </ul>
          </div>
          <div class="mod-footer"><a href="#" class="btn-unlock active">Unlock Module <i
                class="bi bi-arrow-right ms-1"></i></a></div>
        </div>
      </div>

      <!-- 05 -->
      <div class="col-md-6 col-xl-4 rv rv-d1">
        <div class="mod-card">
          <div class="mod-header"><span class="mod-num-badge">Module 05</span></div>
          <div class="mod-body">
            <span class="diff-tag diff-inter"><i class="bi bi-lightning-fill"></i> Intermediate</span>
            <h4>Fibonacci &amp; Harmonics</h4>
            <p class="desc">Using math to predict price targets and reversal points with high accuracy across all
              timeframes.</p>
            <ul class="bolt-list">
              <li><i class="bi bi-lightning-fill"></i>Golden Pocket (61.8%)</li>
              <li><i class="bi bi-lightning-fill"></i>Gartley &amp; Bat Patterns</li>
              <li><i class="bi bi-lightning-fill"></i>Extension Targets</li>
              <li><i class="bi bi-lightning-fill"></i>Crab &amp; Butterfly Patterns</li>
            </ul>
          </div>
          <div class="mod-footer"><a href="#" class="btn-unlock">Unlock Module <i
                class="bi bi-arrow-right ms-1"></i></a></div>
        </div>
      </div>

      <!-- 06 -->
      <div class="col-md-6 col-xl-4 rv rv-d2">
        <div class="mod-card">
          <div class="mod-header"><span class="mod-num-badge">Module 06</span></div>
          <div class="mod-body">
            <span class="diff-tag diff-inter"><i class="bi bi-lightning-fill"></i> Intermediate</span>
            <h4>Multi-Timeframe Mastery</h4>
            <p class="desc">How to align the Daily bias with the 5-minute entry for 1:10+ Reward/Risk — the top-down
              framework.</p>
            <ul class="bolt-list">
              <li><i class="bi bi-lightning-fill"></i>Top-Down Analysis</li>
              <li><i class="bi bi-lightning-fill"></i>Fractal Market Entry</li>
              <li><i class="bi bi-lightning-fill"></i>News Event Navigation</li>
              <li><i class="bi bi-lightning-fill"></i>Bias Building Process</li>
            </ul>
          </div>
          <div class="mod-footer"><a href="#" class="btn-unlock">Unlock Module <i
                class="bi bi-arrow-right ms-1"></i></a></div>
        </div>
      </div>

      <!-- 07 -->
      <div class="col-md-6 col-xl-4 rv">
        <div class="mod-card">
          <div class="mod-header"><span class="mod-num-badge">Module 07</span></div>
          <div class="mod-body">
            <span class="diff-tag diff-adv"><i class="bi bi-lightning-fill"></i> Advanced</span>
            <h4>Institutional Order Flow</h4>
            <p class="desc">Understand how banks and hedge funds accumulate and distribute positions — follow the smart
              money trail.</p>
            <ul class="bolt-list">
              <li><i class="bi bi-lightning-fill"></i>Accumulation Phases</li>
              <li><i class="bi bi-lightning-fill"></i>Stop Hunt Mechanics</li>
              <li><i class="bi bi-lightning-fill"></i>COT Report Reading</li>
              <li><i class="bi bi-lightning-fill"></i>Bank Level Entries</li>
            </ul>
          </div>
          <div class="mod-footer"><a href="#" class="btn-unlock">Unlock Module <i
                class="bi bi-arrow-right ms-1"></i></a></div>
        </div>
      </div>

      <!-- 08 -->
      <div class="col-md-6 col-xl-4 rv rv-d1">
        <div class="mod-card">
          <div class="mod-header"><span class="mod-num-badge">Module 08</span></div>
          <div class="mod-body">
            <span class="diff-tag diff-adv"><i class="bi bi-lightning-fill"></i> Advanced</span>
            <h4>Advanced Candlestick Mastery</h4>
            <p class="desc">Beyond basics — engulfing clusters, wick analysis and single-candle setups with
              institutional confluence.</p>
            <ul class="bolt-list">
              <li><i class="bi bi-lightning-fill"></i>Wick Rejection Analysis</li>
              <li><i class="bi bi-lightning-fill"></i>Engulfing Cluster Setups</li>
              <li><i class="bi bi-lightning-fill"></i>Doji Confluence Rules</li>
              <li><i class="bi bi-lightning-fill"></i>High-Probability Combos</li>
            </ul>
          </div>
          <div class="mod-footer"><a href="#" class="btn-unlock">Unlock Module <i
                class="bi bi-arrow-right ms-1"></i></a></div>
        </div>
      </div>

      <!-- 09 -->
      <div class="col-md-6 col-xl-4 rv rv-d2">
        <div class="mod-card">
          <div class="mod-header"><span class="mod-num-badge">Module 09</span></div>
          <div class="mod-body">
            <span class="diff-tag diff-pro"><i class="bi bi-lightning-fill"></i> Pro</span>
            <h4>Building a Trading System</h4>
            <p class="desc">Combine everything into one repeatable, rule-based system — from bias building to execution
              and review.</p>
            <ul class="bolt-list">
              <li><i class="bi bi-lightning-fill"></i>System Design Framework</li>
              <li><i class="bi bi-lightning-fill"></i>Backtesting Protocol</li>
              <li><i class="bi bi-lightning-fill"></i>Live Forward Testing</li>
              <li><i class="bi bi-lightning-fill"></i>Trade Review Process</li>
            </ul>
          </div>
          <div class="mod-footer"><a href="#" class="btn-unlock">Unlock Module <i
                class="bi bi-arrow-right ms-1"></i></a></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MARQUEE -->
<div class="mq-band">
  <div class="mq-row">
    <div class="mq-track">
      <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Stocks</span><span class="mq-tag"><i
          class="bi bi-currency-bitcoin"></i>Crypto</span><span class="mq-tag"><i
          class="bi bi-bar-chart-steps"></i>Futures</span><span class="mq-tag"><i
          class="bi bi-gem"></i>Metals</span><span class="mq-tag"><i
          class="bi bi-droplet-fill"></i>Commodities</span><span class="mq-tag"><i
          class="bi bi-bank2"></i>Economics</span><span class="mq-tag"><i class="bi bi-activity"></i>Technical
        Analysis</span><span class="mq-tag"><i class="bi bi-receipt-cutoff"></i>Taxes</span><span class="mq-tag"><i
          class="bi bi-journal-richtext"></i>Fundamentals</span><span class="mq-tag"><i
          class="bi bi-safe"></i>Bonds</span>
      <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Stocks</span><span class="mq-tag"><i
          class="bi bi-currency-bitcoin"></i>Crypto</span><span class="mq-tag"><i
          class="bi bi-bar-chart-steps"></i>Futures</span><span class="mq-tag"><i
          class="bi bi-gem"></i>Metals</span><span class="mq-tag"><i
          class="bi bi-droplet-fill"></i>Commodities</span><span class="mq-tag"><i
          class="bi bi-bank2"></i>Economics</span><span class="mq-tag"><i class="bi bi-activity"></i>Technical
        Analysis</span><span class="mq-tag"><i class="bi bi-receipt-cutoff"></i>Taxes</span><span class="mq-tag"><i
          class="bi bi-journal-richtext"></i>Fundamentals</span><span class="mq-tag"><i
          class="bi bi-safe"></i>Bonds</span>
    </div>
  </div>
  <div class="mq-row">
    <div class="mq-track rev">
      <span class="mq-tag"><i class="bi bi-shield-check"></i>Smart Money</span><span class="mq-tag"><i
          class="bi bi-diagram-3"></i>Order Flow</span><span class="mq-tag"><i class="bi bi-lightning-charge"></i>FVG
        Setups</span><span class="mq-tag"><i class="bi bi-arrow-repeat"></i>Fibonacci</span><span class="mq-tag"><i
          class="bi bi-stack"></i>Multi-TF Analysis</span><span class="mq-tag"><i class="bi bi-binoculars"></i>Liquidity
        Sweeps</span><span class="mq-tag"><i class="bi bi-cpu"></i>Algo Trading</span><span class="mq-tag"><i
          class="bi bi-pie-chart"></i>Portfolio Mgmt</span><span class="mq-tag"><i class="bi bi-cash-coin"></i>Position
        Sizing</span><span class="mq-tag"><i class="bi bi-building"></i>ICT Concepts</span>
      <span class="mq-tag"><i class="bi bi-shield-check"></i>Smart Money</span><span class="mq-tag"><i
          class="bi bi-diagram-3"></i>Order Flow</span><span class="mq-tag"><i class="bi bi-lightning-charge"></i>FVG
        Setups</span><span class="mq-tag"><i class="bi bi-arrow-repeat"></i>Fibonacci</span><span class="mq-tag"><i
          class="bi bi-stack"></i>Multi-TF Analysis</span><span class="mq-tag"><i class="bi bi-binoculars"></i>Liquidity
        Sweeps</span><span class="mq-tag"><i class="bi bi-cpu"></i>Algo Trading</span><span class="mq-tag"><i
          class="bi bi-pie-chart"></i>Portfolio Mgmt</span><span class="mq-tag"><i class="bi bi-cash-coin"></i>Position
        Sizing</span><span class="mq-tag"><i class="bi bi-building"></i>ICT Concepts</span>
    </div>
  </div>
</div>

<!-- TOPIC CARDS -->
<section class="sec sec-white" id="topics">
  <div class="container">
    <div class="text-center mb-5">
      <span class="eyebrow rv">Market Knowledge Base</span>
      <h2 class="sec-h rv">All Asset Classes Covered</h2>
      <p class="sec-p mx-auto rv">Every tradeable market — from equities and bonds to crypto and tax compliance — taught
        at intermediate depth.</p>
    </div>
    <div class="row g-4">

      <div class="col-sm-6 col-lg-4 rv" style="--tc:rgba(59,130,246,.3)">
        <div class="topic-card">
          <div class="t-icon ic-blue"><i class="bi bi-graph-up-arrow"></i></div>
          <h5>Stocks</h5>
          <p class="tdesc">Advanced equity analysis — momentum, relative strength, sector rotation and earnings setups.
          </p>
          <ul class="sub-list">
            <li><i class="bi bi-dot"></i>Momentum &amp; Relative Strength</li>
            <li><i class="bi bi-dot"></i>Sector Rotation Strategy</li>
            <li><i class="bi bi-dot"></i>Earnings Play Setups</li>
            <li><i class="bi bi-dot"></i>Short Selling Mechanics</li>
          </ul>
          <span class="chip cp-blue">Equities</span>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 rv rv-d1" style="--tc:rgba(249,115,22,.3)">
        <div class="topic-card">
          <div class="t-icon ic-orange"><i class="bi bi-bar-chart-steps"></i></div>
          <h5>Futures</h5>
          <p class="tdesc">Trade ES, NQ, CL and GC futures with institutional-level precision, leverage control and
            rollover strategy.</p>
          <ul class="sub-list">
            <li><i class="bi bi-dot"></i>ES &amp; NQ Index Futures</li>
            <li><i class="bi bi-dot"></i>Rollover &amp; Contract Specs</li>
            <li><i class="bi bi-dot"></i>VWAP &amp; Volume Profile</li>
            <li><i class="bi bi-dot"></i>Opening Range Breakouts</li>
          </ul>
          <span class="chip cp-orange">Derivatives</span>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 rv rv-d2" style="--tc:rgba(139,92,246,.3)">
        <div class="topic-card">
          <div class="t-icon ic-purple"><i class="bi bi-currency-bitcoin"></i></div>
          <h5>Crypto</h5>
          <p class="tdesc">Bitcoin cycle analysis, altcoin season timing, on-chain metrics and crypto-specific SMC
            setups.</p>
          <ul class="sub-list">
            <li><i class="bi bi-dot"></i>BTC Halving Cycle Analysis</li>
            <li><i class="bi bi-dot"></i>Altcoin Season Indicators</li>
            <li><i class="bi bi-dot"></i>Liquidation Level Mapping</li>
            <li><i class="bi bi-dot"></i>Funding Rate Strategy</li>
          </ul>
          <span class="chip cp-purple">Digital Assets</span>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 rv" style="--tc:rgba(34,197,94,.3)">
        <div class="topic-card">
          <div class="t-icon ic-green"><i class="bi bi-droplet-fill"></i></div>
          <h5>Commodities</h5>
          <p class="tdesc">Crude oil, natural gas, agricultural goods — supply shocks, geopolitical catalysts and
            seasonal cycles.</p>
          <ul class="sub-list">
            <li><i class="bi bi-dot"></i>OPEC &amp; Supply Shocks</li>
            <li><i class="bi bi-dot"></i>Seasonal &amp; Weather Patterns</li>
            <li><i class="bi bi-dot"></i>Spread Trading Basics</li>
            <li><i class="bi bi-dot"></i>Commodity-Currency Links</li>
          </ul>
          <span class="chip cp-green">Energy &amp; Agri</span>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 rv rv-d1" style="--tc:rgba(234,179,8,.3)">
        <div class="topic-card">
          <div class="t-icon ic-gold"><i class="bi bi-gem"></i></div>
          <h5>Metals</h5>
          <p class="tdesc">Gold, silver and copper at intermediate level — real yield correlations, safe haven flows and
            breakout setups.</p>
          <ul class="sub-list">
            <li><i class="bi bi-dot"></i>Real Yield vs Gold</li>
            <li><i class="bi bi-dot"></i>Silver Outperformance Signals</li>
            <li><i class="bi bi-dot"></i>Copper as Economic Gauge</li>
            <li><i class="bi bi-dot"></i>Metals SMC Setups</li>
          </ul>
          <span class="chip cp-gold">Precious &amp; Base</span>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 rv rv-d2" style="--tc:rgba(232,17,26,.3)">
        <div class="topic-card">
          <div class="t-icon ic-red"><i class="bi bi-bank2"></i></div>
          <h5>Economics</h5>
          <p class="tdesc">Macro cycle reading — positioning for rate hike cycles, recessions and risk-on/off
            environments.</p>
          <ul class="sub-list">
            <li><i class="bi bi-dot"></i>Rate Hike Cycle Positioning</li>
            <li><i class="bi bi-dot"></i>Recession &amp; Risk-Off Plays</li>
            <li><i class="bi bi-dot"></i>DXY Impact on All Markets</li>
            <li><i class="bi bi-dot"></i>CPI Surprise Reactions</li>
          </ul>
          <span class="chip cp-red">Macro</span>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 rv" style="--tc:rgba(20,184,166,.3)">
        <div class="topic-card">
          <div class="t-icon ic-teal"><i class="bi bi-safe"></i></div>
          <h5>Bonds</h5>
          <p class="tdesc">Yield curve analysis, duration risk, TLT setups and how bond markets telegraph equity moves
            in advance.</p>
          <ul class="sub-list">
            <li><i class="bi bi-dot"></i>Yield Curve Inversion Signals</li>
            <li><i class="bi bi-dot"></i>TLT &amp; Bond ETF Trading</li>
            <li><i class="bi bi-dot"></i>Duration Risk Explained</li>
            <li><i class="bi bi-dot"></i>Bonds Leading Equities</li>
          </ul>
          <span class="chip cp-teal">Fixed Income</span>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 rv rv-d1" style="--tc:rgba(14,165,233,.3)">
        <div class="topic-card">
          <div class="t-icon ic-sky"><i class="bi bi-journal-richtext"></i></div>
          <h5>Fundamental Analysis</h5>
          <p class="tdesc">Intermediate-level stock valuation — DCF models, moat analysis, comparing industries and
            spotting catalysts.</p>
          <ul class="sub-list">
            <li><i class="bi bi-dot"></i>DCF Valuation Model</li>
            <li><i class="bi bi-dot"></i>Competitive Moat Analysis</li>
            <li><i class="bi bi-dot"></i>Catalyst-Driven Trading</li>
            <li><i class="bi bi-dot"></i>Insider Activity Signals</li>
          </ul>
          <span class="chip cp-sky">Valuation</span>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 rv rv-d2" style="--tc:rgba(244,63,94,.3)">
        <div class="topic-card">
          <div class="t-icon ic-rose"><i class="bi bi-receipt-cutoff"></i></div>
          <h5>Taxes</h5>
          <p class="tdesc">Intermediate trader tax strategy — wash sale rules, entity structures, crypto reporting and
            deductions.</p>
          <ul class="sub-list">
            <li><i class="bi bi-dot"></i>Wash Sale Rule Avoidance</li>
            <li><i class="bi bi-dot"></i>LLC / S-Corp for Traders</li>
            <li><i class="bi bi-dot"></i>Mark-to-Market Election</li>
            <li><i class="bi bi-dot"></i>Crypto Cost Basis Methods</li>
          </ul>
          <span class="chip cp-rose">Tax &amp; Compliance</span>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="hdiv"></div>

<!-- COMPARISON TABLE -->
<section class="sec" id="compare">
  <div class="container">
    <div class="text-center mb-5">
      <span class="eyebrow rv">Track Comparison</span>
      <h2 class="sec-h rv">Beginner vs Intermediate vs Advanced</h2>
      <p class="sec-p mx-auto rv">See exactly what each track covers so you always know where you stand.</p>
    </div>
    <div class="table-responsive rv">
      <table class="cmp-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>Beginner</th>
            <th class="hl">Intermediate ★</th>
            <th>Advanced</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Market Fundamentals</td>
            <td><i class="bi bi-check-circle-fill check"></i></td>
            <td class="hl"><i class="bi bi-check-circle-fill check"></i></td>
            <td><i class="bi bi-check-circle-fill check"></i></td>
          </tr>
          <tr>
            <td>Technical Analysis</td>
            <td>Basic</td>
            <td class="hl">Advanced Patterns</td>
            <td>Institutional Level</td>
          </tr>
          <tr>
            <td>Smart Money Concepts</td>
            <td><i class="bi bi-x-circle cross"></i></td>
            <td class="hl"><i class="bi bi-check-circle-fill check"></i></td>
            <td><i class="bi bi-check-circle-fill check"></i></td>
          </tr>
          <tr>
            <td>Multi-Timeframe Analysis</td>
            <td><i class="bi bi-x-circle cross"></i></td>
            <td class="hl"><i class="bi bi-check-circle-fill check"></i></td>
            <td><i class="bi bi-check-circle-fill check"></i></td>
          </tr>
          <tr>
            <td>Institutional Order Flow</td>
            <td><i class="bi bi-x-circle cross"></i></td>
            <td class="hl">Intro</td>
            <td>Full COT + Depth</td>
          </tr>
          <tr>
            <td>Live Trade Rooms</td>
            <td><i class="bi bi-x-circle cross"></i></td>
            <td class="hl"><i class="bi bi-check-circle-fill check"></i></td>
            <td><i class="bi bi-check-circle-fill check"></i></td>
          </tr>
          <tr>
            <td>System Building</td>
            <td><i class="bi bi-x-circle cross"></i></td>
            <td class="hl"><i class="bi bi-check-circle-fill check"></i></td>
            <td><i class="bi bi-check-circle-fill check"></i></td>
          </tr>
          <tr>
            <td>Backtesting Protocol</td>
            <td><i class="bi bi-x-circle cross"></i></td>
            <td class="hl"><i class="bi bi-check-circle-fill check"></i></td>
            <td><i class="bi bi-check-circle-fill check"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<div class="hdiv"></div>

<!-- WHY DARK -->
<section class="sec sec-dark">
  <div class="container">
    <div class="text-center mb-5">
      <span class="eyebrow rv">Why TraderPro</span>
      <h2 class="sec-h rv">The Intermediate Edge</h2>
      <p class="sec-p mx-auto rv">Most traders plateau at beginner level — this track is built to break through that
        ceiling.</p>
    </div>
    <div class="row g-3">
      <div class="col-sm-6 col-xl-3 rv">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-broadcast-pin"></i></div>
          <h6>Weekly Live Trade Rooms</h6>
          <p>Watch professional traders execute real SMC setups live every week — no theory, only execution.</p>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 rv rv-d1">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-diagram-3"></i></div>
          <h6>Rule-Based Systems</h6>
          <p>Leave discretion behind. Every module teaches you to build objective, repeatable entry rules.</p>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 rv rv-d2">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-journal-check"></i></div>
          <h6>Advanced Trade Journal</h6>
          <p>Track your setups, measure your edge and eliminate the patterns that are costing you money.</p>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3 rv rv-d3">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-people"></i></div>
          <h6>Intermediate Community</h6>
          <p>Join 12,000+ traders at this level — share setups, get peer reviews and grow accountability.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec sec-white" id="reviews">
  <div class="container">
    <div class="text-center mb-5">
      <span class="eyebrow rv">Student Reviews</span>
      <h2 class="sec-h rv">Traders Who Levelled Up</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-4 rv">
        <div class="t-card">
          <div class="stars">★★★★★</div>
          <q>Module 04 on Smart Money Concepts completely changed how I read the market. I stopped chasing breakouts and
            started trading actual institutional levels. My win rate jumped from 38% to 61%.</q>
          <div class="d-flex align-items-center gap-2 mt-3">
            <div class="t-av">RK</div>
            <div>
              <div class="t-name">Rahul Kothari</div>
              <div class="t-role">Intermediate Trader · Mumbai</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 rv rv-d1">
        <div class="t-card">
          <div class="stars">★★★★★</div>
          <q>The Fibonacci &amp; Harmonics module is insanely detailed. The Golden Pocket entries alone made back the
            cost of the course in a week. Multi-timeframe module is next level stuff.</q>
          <div class="d-flex align-items-center gap-2 mt-3">
            <div class="t-av">SP</div>
            <div>
              <div class="t-name">Sneha Patel</div>
              <div class="t-role">Swing Trader · Ahmedabad</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 rv rv-d2">
        <div class="t-card">
          <div class="stars">★★★★☆</div>
          <q>I finally understand why my trades were failing — I had no top-down framework. Module 06 gave me a clear
            process: bias on Daily, setup on H4, entry on M15. Game changer.</q>
          <div class="d-flex align-items-center gap-2 mt-3">
            <div class="t-av">AM</div>
            <div>
              <div class="t-name">Arjun Mehta</div>
              <div class="t-role">Forex Trader · Surat</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-band" id="enroll">
  <div class="container">
    <h2>Ready to Level Up<br>to Intermediate?</h2>
    <p>Start Module 04 today and unlock the Smart Money Concepts, Fibonacci and Multi-Timeframe framework used by
      professional traders.</p>
    <a href="#modules" class="btn-white">Unlock Modules Now <i class="bi bi-arrow-right ms-1"></i></a>
  </div>
</section>

<script>
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => nav.classList.toggle('raised', scrollY > 40));
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
  }, { threshold: 0.1 });
  document.querySelectorAll('.rv').forEach(el => io.observe(el));
</script>

<?php
include_once ('elements/footer.php');
?>
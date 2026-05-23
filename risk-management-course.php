<?php 
include_once ('elements/header.php');
?>

  <style>
  
    /* ── Topbar ── */
    .zed-topbar {
      background: #fff;
      border-bottom: 1px solid var(--zed-border-color);
      padding: 0 32px;
      height: 46px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-shrink: 0;
      position: sticky;
      top: 0;
      z-index: 100;
    }
    .zed-breadcrumb {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--zed-secondary);
    }
    .zed-breadcrumb .active { color: var(--zed-dark-text); }
    .topbar-progress {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 11px;
      font-weight: 600;
      color: var(--zed-secondary);
    }
    .topbar-bar-track {
      width: 120px;
      height: 3px;
      background: var(--zed-icon-color);
      border-radius: 2px;
    }
    .topbar-bar-fill {
      height: 3px;
      background: var(--zed-primary);
      border-radius: 2px;
      transition: width 0.4s ease;
    }
 
    /* ── Layout ── */
    .zed-layout {
      display: flex;
      flex: 1;
      overflow: hidden;
    }
 
    /* ── Sidebar ── */
    .zed-sidebar {
      /* width: 288px; */
      flex-shrink: 0;
      background: #fff;
      border-right: 1px solid var(--zed-border-color);
      overflow-y: auto;
      display: flex;
      flex-direction: column;
    }
    .sidebar-header {
      padding: 57px 24px 14px;
      border-bottom: 1px solid var(--zed-border-color);
      position: sticky;
      top: 0;
      background: #fff;
      z-index: 10;
    }
    .sidebar-course-label {
      font-size: 9px;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--zed-secondary);
      margin-bottom: 4px;
    }
    .sidebar-course-title {
      font-family: 'Barlow Condensed', sans-serif;
      font-size: 16px;
      font-weight: 700;
      color: var(--zed-dark-text);
      margin: 0;
    }
    .sidebar-lessons { padding: 8px 0; }
    .zed-lesson-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 11px 20px 11px 18px;
      cursor: pointer;
      border-left: 3px solid transparent;
      transition: background 0.13s, border-color 0.13s;
      text-decoration: none;
      color: inherit;
      user-select: none;
    }
    .zed-lesson-item:hover { background: var(--zed-backgound-color); color: inherit; text-decoration: none; }
    .zed-lesson-item.active { border-left-color: var(--zed-primary); background: #fff5f5; }
    .zed-lesson-item.active .lesson-num { color: var(--zed-primary); }
    .lesson-num {
      font-size: 11px;
      font-weight: 700;
      color: var(--zed-secondary);
      min-width: 18px;
      padding-top: 3px;
      letter-spacing: 0.04em;
    }
    .lesson-status-icon {
      width: 19px; height: 19px;
      border-radius: 50%;
      border: 2px solid var(--zed-border-color);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      margin-top: 3px;
      font-size: 10px;
      transition: background 0.2s, border-color 0.2s;
    }
    .lesson-status-icon.done { background: var(--zed-success); border-color: var(--zed-success); color: #fff; }
    .lesson-status-icon.current { border-color: var(--zed-primary); background: #fff; position: relative; }
    .lesson-status-icon.current::after {
      content: ''; width: 7px; height: 7px; border-radius: 50%;
      background: var(--zed-primary); position: absolute;
    }
    .lesson-meta { flex: 1; min-width: 0; }
    .lesson-meta h6 {
      font-size: 12.5px; font-weight: 600; margin: 0 0 2px;
      color: var(--zed-dark-text); white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }
    .lesson-meta p { font-size: 10.5px; color: var(--zed-secondary); margin: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .lesson-tag {
      font-size: 9px; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase;
      padding: 2px 7px; border-radius: 3px; white-space: nowrap; flex-shrink: 0; margin-top: 3px;
    }
    .tag-active { background: var(--zed-primary); color: #fff; }
    .tag-done { background: var(--green-s); color: var(--green); }
    .tag-locked { background: var(--zed-icon-color); color: var(--zed-secondary); }
 
    /* ── Main content ── */
    .zed-main {
      flex: 1;
      overflow-y: auto;
      padding: 0;
    }
    .zed-content {
      /* max-width: 760px; */
      padding: 100px 52px 80px;
      margin: 0 auto;
    }
 
    /* ── Progress strip ── */
    .zed-progress-strip {
      display: flex; align-items: center; gap: 12px;
      font-size: 11.5px; color: var(--zed-secondary); font-weight: 600;
      margin-bottom: 30px;
    }
    .progress-track {
      flex: 1; height: 4px; background: var(--zed-icon-color); border-radius: 2px;
    }
    .progress-fill {
      height: 4px; background: var(--zed-primary); border-radius: 2px; transition: width 0.4s ease;
    }
 
    /* ── Lesson header ── */
    .lesson-header-row {
      display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px;
    }
    .lesson-number-label {
      font-size: 10px; font-weight: 700; letter-spacing: 0.12em;
      text-transform: uppercase; color: var(--zed-secondary);
    }
    .lesson-status-pill {
      font-size: 10px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase;
      padding: 4px 10px; border-radius: 4px;
    }
    .pill-done { background: var(--green-s); color: var(--green); }
    .pill-active { background: #fff0f0; color: var(--zed-primary); }
    .lesson-title-main {
      font-family: 'Barlow Condensed', sans-serif;
      font-size: 28px; font-weight: 700; color: var(--zed-dark-text);
      letter-spacing: -0.01em; margin: 0 0 4px; line-height: 1.15;
    }
    .lesson-subtitle-main { font-size: 13px; color: var(--zed-secondary); margin-bottom: 0; }
    .zed-divider { border: none; border-top: 1px solid var(--zed-border-color); margin: 22px 0; }
 
    /* ── Body text ── */
    .lesson-body-text { font-size: 14.5px; line-height: 1.78; color: #222; margin-bottom: 26px; }
 
    /* ── Formula bar ── */
    .zed-formula-bar {
      background: #111; border-radius: 6px; padding: 14px 22px;
      display: flex; align-items: center; gap: 16px; margin-bottom: 26px;
    }
    .formula-label {
      font-size: 9px; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase;
      color: #666; border-right: 1px solid #333; padding-right: 16px; white-space: nowrap;
    }
    .formula-expr { font-family: 'Barlow Condensed', sans-serif; font-size: 17px; font-weight: 600; color: #fff; }
    .formula-expr .hi { color: var(--zed-primary); }
 
    /* ── Risk calculator ── */
    .risk-calculator {
      background: #fff; border: 1px solid var(--zed-border-color);
      border-radius: 8px; overflow: hidden; margin-bottom: 26px;
    }
    .risk-tiers {
      display: grid; grid-template-columns: repeat(3,1fr);
      border-bottom: 1px solid var(--zed-border-color);
    }
    .risk-tier-cell {
      padding: 18px 12px; text-align: center; cursor: pointer;
      border-right: 1px solid var(--zed-border-color);
      transition: background 0.13s; user-select: none;
    }
    .risk-tier-cell:last-child { border-right: none; }
    .risk-tier-cell:hover:not(.selected) { background: var(--zed-backgound-color); }
    .risk-tier-cell.selected { background: #fff5f5; }
    .risk-tier-pct {
      font-family: 'Barlow Condensed', sans-serif; font-size: 28px; font-weight: 700;
      color: #ccc; line-height: 1; transition: color 0.15s;
    }
    .risk-tier-cell.selected .risk-tier-pct { color: var(--zed-primary); }
    .risk-tier-name {
      font-size: 9px; font-weight: 700; letter-spacing: 0.12em;
      text-transform: uppercase; color: var(--zed-secondary); margin-top: 5px;
    }
    /* Calculator input area */
    .calc-body { padding: 20px 24px; }
    .calc-row {
      display: flex; align-items: center; gap: 14px; margin-bottom: 14px;
    }
    .calc-row label {
      font-size: 12px; font-weight: 600; color: var(--zed-secondary);
      text-transform: uppercase; letter-spacing: 0.06em; min-width: 140px;
    }
    .calc-input {
      flex: 1; border: 1px solid var(--zed-border-color);
      border-radius: 5px; padding: 8px 12px; font-family: 'Barlow', sans-serif;
      font-size: 14px; color: var(--zed-dark-text); outline: none;
      transition: border-color 0.13s;
    }
    .calc-input:focus { border-color: var(--zed-primary); }
    .calc-result-bar {
      background: var(--zed-backgound-color); border-radius: 6px;
      padding: 14px 18px; display: flex; align-items: center; justify-content: space-between;
      margin-top: 4px;
    }
    .calc-result-label { font-size: 12px; font-weight: 600; color: var(--zed-secondary); text-transform: uppercase; letter-spacing: 0.06em; }
    .calc-result-value { font-family: 'Barlow Condensed', sans-serif; font-size: 24px; font-weight: 700; color: var(--zed-primary); }
 
    /* ── Rules block ── */
    .zed-rules-block { border-left: 3px solid var(--zed-primary); padding-left: 20px; margin-bottom: 34px; }
    .rules-heading {
      font-size: 9px; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase;
      color: var(--zed-secondary); margin-bottom: 12px;
    }
    .rules-list { list-style: none; padding: 0; margin: 0; }
    .rules-list li {
      font-size: 13.5px; line-height: 1.65; color: #333;
      padding: 5px 0; display: flex; align-items: flex-start; gap: 10px;
    }
    .rules-list li::before {
      content: ''; width: 6px; height: 6px; border-radius: 50%;
      background: var(--zed-primary); flex-shrink: 0; margin-top: 8px;
    }
 
    /* ── Mark complete button ── */
    .btn-mark-complete {
      font-family: 'Barlow', sans-serif; font-size: 11.5px; font-weight: 700;
      letter-spacing: 0.1em; text-transform: uppercase;
      padding: 12px 26px; border-radius: 4px; border: none; cursor: pointer;
      transition: background 0.15s, transform 0.1s;
      display: inline-flex; align-items: center; gap: 8px;
    }
    .btn-mark-complete:active { transform: scale(0.97); }
    .btn-mark-complete.pending { background: var(--zed-primary); color: #fff; }
    .btn-mark-complete.pending:hover { background: var(--zed-primary-hover); }
    .btn-mark-complete.done { background: var(--zed-success); color: #fff; }
    .btn-mark-complete.done:hover { background: #15803d; }
 
    /* ── Nav buttons ── */
    .lesson-nav {
      display: flex; align-items: center; justify-content: space-between;
      margin-top: 36px; padding-top: 22px; border-top: 1px solid var(--zed-border-color);
    }
    .btn-nav {
      display: inline-flex; align-items: center; gap: 8px;
      font-family: 'Barlow', sans-serif; font-size: 12px; font-weight: 700;
      letter-spacing: 0.06em; padding: 10px 20px; border-radius: 5px;
      border: 1px solid var(--zed-border-color); background: #fff;
      color: var(--zed-secondary); cursor: pointer; transition: all 0.14s;
    }
    .btn-nav:hover:not(:disabled) { border-color: var(--zed-primary); color: var(--zed-primary); }
    .btn-nav.btn-next { background: var(--zed-dark-text); color: #fff; border-color: var(--zed-dark-text); }
    .btn-nav.btn-next:hover:not(:disabled) { background: var(--zed-primary); border-color: var(--zed-primary); color: #fff; }
    .btn-nav:disabled { opacity: 0.35; cursor: not-allowed; }
 
    /* ── Up Next cards ── */
    .upcoming-lessons { margin-top: 44px; }
    .upcoming-title {
      font-size: 9px; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase;
      color: var(--zed-secondary); margin-bottom: 14px;
    }
    .upcoming-card {
      display: flex; align-items: center; justify-content: space-between;
      background: #fff; border: 1px solid var(--zed-border-color); border-radius: 8px;
      padding: 14px 18px; margin-bottom: 8px; cursor: pointer;
      transition: border-color 0.13s, box-shadow 0.13s;
    }
    .upcoming-card:hover { border-color: var(--zed-primary); box-shadow: 0 2px 10px rgba(255,0,0,0.07); }
    .upcoming-card-left { display: flex; align-items: center; gap: 14px; }
    .upcoming-num { font-size: 11px; font-weight: 700; color: var(--zed-secondary); min-width: 22px; }
    .upcoming-card h6 { font-size: 13.5px; font-weight: 600; margin: 0 0 2px; }
    .upcoming-card p { font-size: 11px; color: var(--zed-secondary); margin: 0; }
    .upcoming-card .arrow-icon { color: var(--zed-secondary); font-size: 13px; }
 
    /* ── Toast ── */
    .zed-toast {
      position: fixed; bottom: 28px; left: 50%; transform: translateX(-50%) translateY(12px);
      background: #111; color: #fff; padding: 11px 22px; border-radius: 6px;
      font-size: 13px; font-weight: 600; opacity: 0; pointer-events: none;
      transition: opacity 0.25s, transform 0.25s; z-index: 9999; white-space: nowrap;
    }
    .zed-toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }
 
    /* ── Content fade-in ── */
    .zed-content { animation: fadeSlide 0.22s ease; }
    @keyframes fadeSlide { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
    .content-animate { animation: fadeSlide 0.22s ease; }
 
    /* ── Scrollbar ── */
    .zed-sidebar::-webkit-scrollbar, .zed-main::-webkit-scrollbar { width: 4px; }
    .zed-sidebar::-webkit-scrollbar-thumb, .zed-main::-webkit-scrollbar-thumb { background: var(--zed-border-color); border-radius: 2px; }
 
    @media (max-width: 768px) {
      .zed-sidebar { display: none; }
      .zed-content { padding: 24px 20px 60px; }
      .risk-tiers { grid-template-columns: 1fr; }
      .risk-tier-cell { border-right: none; border-bottom: 1px solid var(--zed-border-color); }
      .risk-tier-cell:last-child { border-bottom: none; }
      .calc-row { flex-direction: column; align-items: flex-start; }
      .calc-input { width: 100%; }
    }
  </style>
  
  <style>
            
      .zed-banner {
          background: linear-gradient(120deg, var(--zed-banner-bg-start) 0%, var(--zed-banner-bg-end) 100%);
          font-family: 'Barlow Condensed', 'Arial Narrow', Arial, sans-serif;
          border-bottom: 3px solid var(--zed-primary);
          position: relative;
          overflow: hidden;
          width: 100%;
      }

      .zed-banner::before {
          content: '';
          position: absolute;
          top: 0; left: 0; right: 0; bottom: 0;
          background: 
            repeating-linear-gradient(
              90deg,
              transparent,
              transparent 80px,
              rgba(0,0,0,0.018) 80px,
              rgba(0,0,0,0.018) 81px
            );
          pointer-events: none;
      }

      .zed-banner::after {
          content: '';
          position: absolute;
          top: -60px; right: -40px;
          width: 320px; height: 320px;
          border-radius: 50%;
          background: radial-gradient(circle, rgba(255,0,0,0.07) 0%, transparent 70%);
          pointer-events: none;
      }

      .banner-inner {
          padding: 7rem 2rem 0 2rem;
          position: relative;
          z-index: 1;
      }

      .course-label {
          display: inline-block;
          background: var(--zed-primary);
          color: #fff;
          font-family: 'Barlow', 'Arial Narrow', Arial, sans-serif;
          font-size: 10px;
          font-weight: 700;
          letter-spacing: 0.18em;
          text-transform: uppercase;
          padding: 4px 12px;
          border-radius: 3px;
          margin-bottom: 1rem;
      }

      .banner-title {
          font-family: 'Barlow Condensed', 'Arial Narrow', Arial, sans-serif;
          font-size: clamp(2.6rem, 7vw, 4.2rem);
          font-weight: 800;
          line-height: 0.95;
          letter-spacing: -0.01em;
          text-transform: uppercase;
          color: var(--zed-dark-text);
          margin-bottom: 0.2rem;
      }

      .banner-title .red-line {
          color: var(--zed-primary);
          display: block;
      }

      .banner-desc {
          font-family: 'Barlow', Arial, sans-serif;
          font-size: 13px;
          color: var(--muted);
          line-height: 1.65;
          max-width: 420px;
          margin: 1rem 0 1.2rem;
          font-weight: 400;
      }

      .tag-row {
          display: flex;
          flex-wrap: wrap;
          gap: 6px;
          margin-bottom: 1.75rem;
      }

      .zed-tag {
          display: inline-block;
          border: 1px solid #c5c5c5;
          background: transparent;
          color: var(--ink2);
          font-family: 'Barlow', Arial, sans-serif;
          font-size: 11px;
          font-weight: 500;
          padding: 4px 12px;
          border-radius: 999px;
          letter-spacing: 0.02em;
          transition: border-color 0.18s, background 0.18s;
      }

      .zed-tag:hover {
          border-color: var(--zed-primary);
          background: #fff5f5;
          color: var(--zed-primary);
          cursor: default;
      }

      .stats-row {
          display: grid;
          grid-template-columns: repeat(4, 1fr);
          border-top: 1.5px solid var(--zed-border-color);
          margin: 0 -2rem;
      }

      .stat-cell {
          padding: 1.1rem 0;
          text-align: center;
          border-right: 1px solid var(--zed-border-color);
          position: relative;
      }

      .stat-cell:last-child {
          border-right: none;
      }

      .stat-val {
          display: block;
          font-family: 'Barlow Condensed', 'Arial Narrow', Arial, sans-serif;
          font-size: 2rem;
          font-weight: 800;
          color: var(--zed-primary);
          line-height: 1;
          letter-spacing: -0.02em;
      }

      .stat-label {
          display: block;
          font-family: 'Barlow', Arial, sans-serif;
          font-size: 10px;
          font-weight: 600;
          letter-spacing: 0.15em;
          text-transform: uppercase;
          color: var(--muted);
          margin-top: 3px;
      }

      .stat-cell.free-cell .stat-val {
          color: var(--zed-primary);
      }

      .stat-cell.completed-cell .stat-val {
          color: var(--zed-primary);
      }
        
  </style>
 
 <div class="zed-banner">
    <div class="banner-inner">
      <span class="course-label">Course 3 — Risk Management</span>
      <h1 class="banner-title">
        Capital<br>
        <span class="red-line">Protection.</span>
      </h1>
      <p class="banner-desc">
        Learn the rules that keep professional traders alive in the markets. This course covers everything from basic risk concepts to advanced account protection — the foundation every serious trader must master before scaling.
      </p>
      <div class="tag-row">
        <span class="zed-tag">12 Lessons</span>
        <span class="zed-tag">Beginner to Advanced</span>
        <span class="zed-tag">Forex &amp; Crypto</span>
        <span class="zed-tag">Disciplined Trading</span>
        <span class="zed-tag">Free Access</span>
      </div>
      <div class="stats-row">
        <div class="stat-cell">
          <span class="stat-val">12</span>
          <span class="stat-label">Lessons</span>
        </div>
        <div class="stat-cell">
          <span class="stat-val">60</span>
          <span class="stat-label">Minutes</span>
        </div>
        <div class="stat-cell completed-cell">
          <span class="stat-val">0</span>
          <span class="stat-label">Completed</span>
        </div>
        <div class="stat-cell free-cell">
          <span class="stat-val">FREE</span>
          <span class="stat-label">Access</span>
        </div>
      </div>
    </div>
</div>

  <!-- Topbar -->
  <div class="zed-topbar">
    <span class="zed-breadcrumb">Core Lessons — <span class="active">Risk Management</span></span>
    <div class="topbar-progress">
      <span id="topProgressText">1 / 6</span>
      <div class="topbar-bar-track"><div class="topbar-bar-fill" id="topBarFill" style="width:16.6%"></div></div>
    </div>
  </div>
 
  <div class="zed-layout">
    <!-- Sidebar -->
    <aside class="zed-sidebar">
      <div class="sidebar-header">
        <div class="sidebar-course-label">Course</div>
        <div class="sidebar-course-title">Risk Management</div>
      </div>
      <div class="sidebar-lessons" id="sidebarLessons">
        <a class="zed-lesson-item" data-lesson="1" onclick="navigateTo(1)" href="javascript:void(0)">
          <span class="lesson-num">01</span>
          <div class="lesson-status-icon done"><i class="bi bi-check"></i></div>
          <div class="lesson-meta">
            <h6>What is Risk Management?</h6>
            <p>The foundation of professional trading</p>
          </div>
          <span class="lesson-tag tag-done">Done</span>
        </a>
        <a class="zed-lesson-item active" data-lesson="2" onclick="navigateTo(2)" href="javascript:void(0)">
          <span class="lesson-num">02</span>
          <div class="lesson-status-icon current"></div>
          <div class="lesson-meta">
            <h6>Risk Per Trade</h6>
            <p>Defining exactly how much you risk on each position</p>
          </div>
          <span class="lesson-tag tag-active">Active</span>
        </a>
        <a class="zed-lesson-item" data-lesson="3" onclick="navigateTo(3)" href="javascript:void(0)">
          <span class="lesson-num">03</span>
          <div class="lesson-status-icon"></div>
          <div class="lesson-meta">
            <h6>Lot Size Calculation</h6>
            <p>Sizing every position with precision</p>
          </div>
          <span class="lesson-tag tag-locked">Lesson</span>
        </a>
        <a class="zed-lesson-item" data-lesson="4" onclick="navigateTo(4)" href="javascript:void(0)">
          <span class="lesson-num">04</span>
          <div class="lesson-status-icon"></div>
          <div class="lesson-meta">
            <h6>Position Sizing</h6>
            <p>Scaling trade size to your account and risk tolerance</p>
          </div>
          <span class="lesson-tag tag-locked">Lesson</span>
        </a>
        <a class="zed-lesson-item" data-lesson="5" onclick="navigateTo(5)" href="javascript:void(0)">
          <span class="lesson-num">05</span>
          <div class="lesson-status-icon"></div>
          <div class="lesson-meta">
            <h6>Risk-to-Reward Ratio</h6>
            <p>Building positive expectancy into every trade</p>
          </div>
          <span class="lesson-tag tag-locked">Lesson</span>
        </a>
        <a class="zed-lesson-item" data-lesson="6" onclick="navigateTo(6)" href="javascript:void(0)">
          <span class="lesson-num">06</span>
          <div class="lesson-status-icon"></div>
          <div class="lesson-meta">
            <h6>Stop Loss Placement</h6>
            <p>Protecting capital intelligently</p>
          </div>
          <span class="lesson-tag tag-locked">Lesson</span>
        </a>
      </div>
    </aside>
 
    <!-- Main -->
    <main class="zed-main">
      <div class="zed-content" id="mainContent">
        <!-- Lesson panels (static HTML instead of JS data array) -->
        <section class="lesson-panel" data-lesson="1" style="display:none">
          <div class="zed-progress-strip">
            <span id="progressLabel-1">0 / 6 complete</span>
            <div class="progress-track"><div class="progress-fill" id="progressFill-1" style="width:0%"></div></div>
            <span id="progressPct-1">0%</span>
          </div>
          <div class="lesson-header-row">
            <span class="lesson-number-label">Lesson 01</span>
            <span class="lesson-status-pill pill-active">● In Progress</span>
          </div>
          <h1 class="lesson-title-main">What is Risk Management?</h1>
          <p class="lesson-subtitle-main">The foundation of professional trading</p>
          <hr class="zed-divider" />
          <p class="lesson-body-text">Risk management is the process of identifying, assessing, and controlling financial losses in every trade you take. Without a systematic approach to managing risk, even a profitable strategy will eventually wipe an account. Professional traders treat risk management as the single most important discipline — not an afterthought.</p>
          <div class="zed-formula-bar">
            <span class="formula-label">Core Principle</span>
            <span class="formula-expr">Capital Preservation <span class="hi">&gt;</span> Profit Generation</span>
          </div>
          <div class="zed-rules-block">
            <div class="rules-heading">Rules</div>
            <ul class="rules-list">
              <li>Never risk money you cannot afford to lose entirely</li>
              <li>Define your maximum drawdown threshold before you begin trading</li>
              <li>Risk management rules apply to every trade — no exceptions</li>
              <li>A consistent process always beats emotionally driven decisions</li>
            </ul>
          </div>
          <div class="lesson-nav">
            <button class="btn-nav btn-prev" onclick="navigateTo(1)" disabled><i class="bi bi-arrow-left"></i> Previous</button>
            <button class="btn-mark-complete pending mark-complete-btn" onclick="toggleComplete()"><i class="bi bi-circle"></i> Mark Complete</button>
            <button class="btn-nav btn-next" onclick="navigateTo(2)">Risk Per Trade <i class="bi bi-arrow-right"></i></button>
          </div>
        </section>

        <section class="lesson-panel" data-lesson="2">
          <div class="zed-progress-strip">
            <span id="progressLabel">1 / 6 complete</span>
            <div class="progress-track"><div class="progress-fill" id="progressFill" style="width:16.6%"></div></div>
            <span id="progressPct">16%</span>
          </div>

          <div class="lesson-header-row">
            <span class="lesson-number-label">Lesson 02</span>
            <span class="lesson-status-pill pill-active">● In Progress</span>
          </div>

          <h1 class="lesson-title-main">Risk Per Trade</h1>
          <p class="lesson-subtitle-main">Defining exactly how much you risk on each position</p>
          <hr class="zed-divider" />

          <p class="lesson-body-text">Risk per trade is the fixed percentage of your total account balance you are willing to lose on any single trade. This number must be decided in advance and never deviated from — regardless of how confident you feel about a setup.</p>

          <div class="zed-formula-bar">
            <span class="formula-label">Formula</span>
            <span class="formula-expr">Risk Amount ($) = <span class="hi">Account Balance × Risk %</span></span>
          </div>

          <div class="risk-calculator">
            <div class="risk-tiers">
              <div class="risk-tier-cell" data-value="1">
                <div class="risk-tier-pct">1%</div>
                <div class="risk-tier-name">Conservative</div>
              </div>
              <div class="risk-tier-cell selected" data-value="2">
                <div class="risk-tier-pct">2%</div>
                <div class="risk-tier-name">Standard</div>
              </div>
              <div class="risk-tier-cell" data-value="3">
                <div class="risk-tier-pct">3%+</div>
                <div class="risk-tier-name">Aggressive</div>
              </div>
            </div>
            <div class="calc-body">
              <div class="calc-row">
                <label>Account Balance</label>
                <input class="calc-input" type="number" id="calcBalanceInput" value="10000" min="0" placeholder="e.g. 10000" />
              </div>
              <div class="calc-result-bar">
                <span class="calc-result-label">Risk Amount</span>
                <span class="calc-result-value" id="calcResultValue">$0.00</span>
              </div>
            </div>
          </div>

          <div class="zed-rules-block">
            <div class="rules-heading">Rules</div>
            <ul class="rules-list">
              <li>Risk 1–2% per trade maximum — this is the professional standard</li>
              <li>Calculate dollar risk before placing any trade — never estimate</li>
              <li>Maintain the same % regardless of confidence level or recent wins</li>
              <li>Small consistent risk keeps you alive through long losing streaks</li>
            </ul>
          </div>

          <button class="btn-mark-complete pending mark-complete-btn" onclick="toggleComplete()">
            <i class="bi bi-circle"></i> Mark Complete
          </button>

          <div class="lesson-nav">
            <button class="btn-nav btn-prev" onclick="navigateTo(1)"><i class="bi bi-arrow-left"></i> What is Risk Management?</button>
            <button class="btn-nav btn-next" onclick="navigateTo(3)">Lot Size Calculation <i class="bi bi-arrow-right"></i></button>
          </div>

          <div class="upcoming-lessons">
            <div class="upcoming-title">Up Next</div>
            <div class="upcoming-card" onclick="navigateTo(3)">
              <div class="upcoming-card-left">
                <span class="upcoming-num">03</span>
                <div>
                  <h6>Lot Size Calculation</h6>
                  <p>Sizing every position with precision</p>
                </div>
              </div>
              <i class="bi bi-chevron-right arrow-icon"></i>
            </div>
            <div class="upcoming-card" onclick="navigateTo(4)">
              <div class="upcoming-card-left">
                <span class="upcoming-num">04</span>
                <div>
                  <h6>Position Sizing</h6>
                  <p>Scaling trade size to your account and risk tolerance</p>
                </div>
              </div>
              <i class="bi bi-chevron-right arrow-icon"></i>
            </div>
          </div>
        </section>

        <!-- Additional static panels (3-6) -->
        <section class="lesson-panel" data-lesson="3" style="display:none">
          <div class="lesson-header-row">
            <span class="lesson-number-label">Lesson 03</span>
            <span class="lesson-status-pill pill-active">● In Progress</span>
          </div>
          <h1 class="lesson-title-main">Lot Size Calculation</h1>
          <p class="lesson-subtitle-main">Sizing every position with precision</p>
          <hr class="zed-divider" />
          <p class="lesson-body-text">Lot size determines how many units you trade on any position. The correct lot size is calculated from your risk amount, your stop-loss distance in pips, and the pip value of the instrument. Getting this number right is non-negotiable — guessing leads to over-exposure.</p>
          <div class="zed-formula-bar"><span class="formula-label">Formula</span><span class="formula-expr">Lot Size = <span class="hi">Risk Amount ÷ (Stop Pips × Pip Value)</span></span></div>
          <div class="zed-rules-block"><div class="rules-heading">Rules</div><ul class="rules-list"><li>Always calculate lot size before entering — never size by feel</li><li>Recalculate for every trade — account balance changes constantly</li><li>Smaller stop = larger lot size; wider stop = smaller lot size</li><li>Use a pip calculator tool to verify before execution</li></ul></div>
          <div class="lesson-nav">
            <button class="btn-nav btn-prev" onclick="navigateTo(2)"><i class="bi bi-arrow-left"></i> Risk Per Trade</button>
            <button class="btn-mark-complete pending mark-complete-btn" onclick="toggleComplete()"><i class="bi bi-circle"></i> Mark Complete</button>
            <button class="btn-nav btn-next" onclick="navigateTo(4)">Position Sizing <i class="bi bi-arrow-right"></i></button>
          </div>
        </section>

        <section class="lesson-panel" data-lesson="4" style="display:none">
          <div class="lesson-header-row">
            <span class="lesson-number-label">Lesson 04</span>
            <span class="lesson-status-pill pill-active">● In Progress</span>
          </div>
          <h1 class="lesson-title-main">Position Sizing</h1>
          <p class="lesson-subtitle-main">Scaling trade size to your account and risk tolerance</p>
          <hr class="zed-divider" />
          <p class="lesson-body-text">Position sizing ties together your account balance, risk percentage, stop-loss distance, and instrument pip value into a single precise unit count per trade. Correct position sizing means a stop-out on any given trade only ever costs you the pre-planned risk amount — not more.</p>
          <div class="zed-formula-bar"><span class="formula-label">Formula</span><span class="formula-expr">Units = <span class="hi">(Balance × Risk%) ÷ Stop Distance</span></span></div>
          <div class="zed-rules-block"><div class="rules-heading">Rules</div><ul class="rules-list"><li>Re-size every position based on current account balance — not original balance</li><li>Never average down by adding to a losing position</li><li>Scale position size down during losing streaks to reduce drawdown speed</li><li>Keep a position sizing spreadsheet or calculator open at all times</li></ul></div>
          <div class="lesson-nav">
            <button class="btn-nav btn-prev" onclick="navigateTo(3)"><i class="bi bi-arrow-left"></i> Lot Size Calculation</button>
            <button class="btn-mark-complete pending mark-complete-btn" onclick="toggleComplete()"><i class="bi bi-circle"></i> Mark Complete</button>
            <button class="btn-nav btn-next" onclick="navigateTo(5)">Risk-to-Reward Ratio <i class="bi bi-arrow-right"></i></button>
          </div>
        </section>

        <section class="lesson-panel" data-lesson="5" style="display:none">
          <div class="lesson-header-row">
            <span class="lesson-number-label">Lesson 05</span>
            <span class="lesson-status-pill pill-active">● In Progress</span>
          </div>
          <h1 class="lesson-title-main">Risk-to-Reward Ratio</h1>
          <p class="lesson-subtitle-main">Building positive expectancy into every trade</p>
          <hr class="zed-divider" />
          <p class="lesson-body-text">The risk-to-reward ratio (RRR) compares potential loss to potential gain on a trade. A minimum 1:2 RRR means you risk $1 to make $2. At this ratio, you only need to win 34% of trades to break even — giving you a large margin for error and consistent long-term profitability.</p>
          <div class="zed-formula-bar"><span class="formula-label">Formula</span><span class="formula-expr">RRR = <span class="hi">Potential Profit ÷ Potential Loss</span></span></div>
          <div class="zed-rules-block"><div class="rules-heading">Rules</div><ul class="rules-list"><li>Never take a trade with less than 1:1.5 risk-to-reward</li><li>Mark your target level before entering — not after</li><li>Higher RRR allows profitability even with a low win rate</li><li>Avoid moving your target closer once a trade is live</li></ul></div>
          <div class="lesson-nav">
            <button class="btn-nav btn-prev" onclick="navigateTo(4)"><i class="bi bi-arrow-left"></i> Position Sizing</button>
            <button class="btn-mark-complete pending mark-complete-btn" onclick="toggleComplete()"><i class="bi bi-circle"></i> Mark Complete</button>
            <button class="btn-nav btn-next" onclick="navigateTo(6)">Stop Loss Placement <i class="bi bi-arrow-right"></i></button>
          </div>
        </section>

        <section class="lesson-panel" data-lesson="6" style="display:none">
          <div class="lesson-header-row">
            <span class="lesson-number-label">Lesson 06</span>
            <span class="lesson-status-pill pill-active">● In Progress</span>
          </div>
          <h1 class="lesson-title-main">Stop Loss Placement</h1>
          <p class="lesson-subtitle-main">Protecting capital intelligently</p>
          <hr class="zed-divider" />
          <p class="lesson-body-text">A stop loss is the price level at which your trade automatically closes to limit your loss. Effective stop placement is based on market structure — not on a fixed pip count. Place stops beyond key support/resistance levels, swing highs/lows, or volatility buffers, so normal price movement doesn't trigger premature exits.</p>
          <div class="zed-formula-bar"><span class="formula-label">Principle</span><span class="formula-expr">Stop = <span class="hi">Structure Level + Buffer (ATR)</span></span></div>
          <div class="zed-rules-block"><div class="rules-heading">Rules</div><ul class="rules-list"><li>Base stop placement on market structure — not arbitrary pip counts</li><li>Never move a stop loss further away to avoid being stopped out</li><li>Always set the stop before calculating your position size</li><li>A wider, well-placed stop beats a tight stop that triggers on noise</li></ul></div>
          <div class="lesson-nav">
            <button class="btn-nav btn-prev" onclick="navigateTo(5)"><i class="bi bi-arrow-left"></i> Risk-to-Reward Ratio</button>
            <button class="btn-mark-complete pending mark-complete-btn" onclick="toggleComplete()"><i class="bi bi-circle"></i> Mark Complete</button>
            <button class="btn-nav btn-next" onclick="navigateTo(6)" disabled>Next</button>
          </div>
        </section>
      </div>
    </main>
  </div>
 
  <!-- Toast -->
  <div class="zed-toast" id="toast"></div> 
 
  <script>
        // Lightweight DOM-driven behavior using static panels (no JS data array)
        const panels = Array.from(document.querySelectorAll('.lesson-panel'));
        const sidebarItems = Array.from(document.querySelectorAll('.zed-lesson-item'));
        const totalLessons = panels.length;
        let currentLesson = 1; // start on lesson 1
        const completed = new Set();

        function showToast(msg) {
            const t = document.getElementById('toast');
            t.textContent = msg;
            t.classList.add('show');
            clearTimeout(t._timer);
            t._timer = setTimeout(() => t.classList.remove('show'), 2400);
        }

        function progressPct() { return Math.round((completed.size / totalLessons) * 100); }

        function renderSidebar() {
            sidebarItems.forEach(item => {
            const id = Number(item.getAttribute('data-lesson'));
            const isCurrent = id === currentLesson;
            const isDone = completed.has(id);
            item.classList.toggle('active', isCurrent);
            const icon = item.querySelector('.lesson-status-icon');
            if (isDone) {
                icon.className = 'lesson-status-icon done';
                icon.innerHTML = '<i class="bi bi-check"></i>';
            } else if (isCurrent) {
                icon.className = 'lesson-status-icon current';
                icon.innerHTML = '';
            } else {
                icon.className = 'lesson-status-icon';
                icon.innerHTML = '';
            }
            const tag = item.querySelector('.lesson-tag');
            if (isDone) { tag.className = 'lesson-tag tag-done'; tag.textContent = 'Done'; }
            else if (isCurrent) { tag.className = 'lesson-tag tag-active'; tag.textContent = 'Active'; }
            else { tag.className = 'lesson-tag tag-locked'; tag.textContent = 'Lesson'; }
            });
            // topbar
            document.getElementById('topBarFill').style.width = progressPct() + '%';
            document.getElementById('topProgressText').textContent = completed.size + ' / ' + totalLessons;
        }

        function calcRiskInPanel(panel) {
            const tier = panel.querySelector('.risk-tier-cell.selected');
            if (!tier) return;
            const pct = Number(tier.getAttribute('data-value')) || 0;
            const balInput = panel.querySelector('#calcBalanceInput');
            const bal = parseFloat(balInput?.value || 0);
            const result = (bal * pct / 100).toFixed(2);
            const rv = panel.querySelector('#calcResultValue');
            if (rv) rv.textContent = '$' + parseFloat(result).toLocaleString('en-US', { minimumFractionDigits: 2 });
        }

        function attachCalculatorListeners(panel) {
            const tierCells = Array.from(panel.querySelectorAll('.risk-tier-cell'));
            tierCells.forEach(c => c.addEventListener('click', () => {
            tierCells.forEach(x => x.classList.remove('selected'));
            c.classList.add('selected');
            calcRiskInPanel(panel);
            }));
            const balInput = panel.querySelector('#calcBalanceInput');
            if (balInput) balInput.addEventListener('input', () => calcRiskInPanel(panel));
        }

        function renderContent() {
            panels.forEach(p => p.style.display = 'none');
            const active = panels.find(p => Number(p.getAttribute('data-lesson')) === currentLesson);
            if (!active) return;
            active.style.display = '';
            // update progress widgets inside panel if present
            const pfill = active.querySelector('.progress-fill');
            if (pfill) pfill.style.width = progressPct() + '%';
            const progressTextEls = active.querySelectorAll('[id^="progressPct"], [id^="progressLabel"]');
            progressTextEls.forEach(el => {
                if (el.id.startsWith('progressPct')) el.textContent = progressPct() + '%';
                if (el.id.startsWith('progressLabel')) el.textContent = completed.size + ' / ' + totalLessons + ' complete';
            });

            // update mark complete button state
            const markBtn = active.querySelector('.mark-complete-btn');
            if (markBtn) {
            if (completed.has(currentLesson)) {
                markBtn.classList.remove('pending'); markBtn.classList.add('done'); markBtn.innerHTML = '<i class="bi bi-check-circle"></i> Completed';
            } else {
                markBtn.classList.remove('done'); markBtn.classList.add('pending'); markBtn.innerHTML = '<i class="bi bi-circle"></i> Mark Complete';
            }
            }

            // attach calc listeners if present
            if (active.querySelector('.risk-calculator')) attachCalculatorListeners(active);
            if (active.querySelector('.risk-calculator')) calcRiskInPanel(active);
        }

        function toggleComplete() {
            if (completed.has(currentLesson)) {
            completed.delete(currentLesson);
            showToast('Lesson marked as incomplete');
            } else {
            completed.add(currentLesson);
            showToast('🎉 Lesson completed!');
            // auto-advance
            if (currentLesson < totalLessons) setTimeout(() => navigateTo(currentLesson + 1), 700);
            }
            renderAll();
        }

        function navigateTo(id) {
            if (id < 1 || id > totalLessons) return;
            currentLesson = id;
            renderAll();
            document.getElementById('mainContent').scrollIntoView({ behavior: 'smooth', block: 'start' });
            document.querySelector('.zed-main').scrollTo({ top: 0, behavior: 'smooth' });
        }

        function renderAll() {
            renderSidebar();
            renderContent();
        }

        // init
        renderAll();
  </script>


<!-- ================= FAQ SECTION START ================= -->
<section class="zed-faq-section">
    <div class="zed-faq-header">
        <span class="faq-label">FREQUENTLY ASKED QUESTIONS</span>
        <h2>Risk Management — FAQ</h2>
        <p>
            Professional answers to the most common risk management questions —
            optimised for search, voice, and AI discovery.
        </p>
    </div>

    <div class="accordion zed-faq-accordion" id="riskFaqAccordion">

        <!-- FAQ 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqOne">
                <button class="accordion-button" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true">
                    What is risk management in trading and why is it important?
                </button>
            </h2>

            <div id="collapseOne"
                class="accordion-collapse collapse show"
                data-bs-parent="#riskFaqAccordion">

                <div class="accordion-body">
                    Risk management is the process of controlling how much money
                    you risk on each trade. It protects your trading capital,
                    reduces emotional decisions, and helps traders survive losing
                    streaks while staying profitable long term.
                </div>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqTwo">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo">
                    How much should a beginner risk per trade?
                </button>
            </h2>

            <div id="collapseTwo"
                class="accordion-collapse collapse"
                data-bs-parent="#riskFaqAccordion">

                <div class="accordion-body">
                    Most professional traders recommend risking only 1%–2% of
                    your total account balance per trade. This keeps losses small
                    and allows you to survive long periods of market volatility.
                </div>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqThree">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree">
                    What is the best Risk-to-Reward ratio for trading?
                </button>
            </h2>

            <div id="collapseThree"
                class="accordion-collapse collapse"
                data-bs-parent="#riskFaqAccordion">

                <div class="accordion-body">
                    A commonly used professional standard is a minimum 1:2
                    risk-to-reward ratio. This means risking $100 to potentially
                    make $200 or more.
                </div>
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqFour">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour">
                    What is drawdown in trading and how do I manage it?
                </button>
            </h2>

            <div id="collapseFour"
                class="accordion-collapse collapse"
                data-bs-parent="#riskFaqAccordion">

                <div class="accordion-body">
                    Drawdown refers to the reduction in your account balance
                    after a series of losses. Traders manage drawdown by lowering
                    position size, reducing trade frequency, and following strict
                    risk limits.
                </div>
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqFive">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFive">
                    How do I calculate lot size for a trade?
                </button>
            </h2>

            <div id="collapseFive"
                class="accordion-collapse collapse"
                data-bs-parent="#riskFaqAccordion">

                <div class="accordion-body">
                    Lot size is calculated based on your account balance, risk
                    percentage, and stop loss distance. Proper position sizing
                    ensures you never risk more than your planned amount.
                </div>
            </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqSix">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSix">
                    What is overtrading and how do I stop it?
                </button>
            </h2>

            <div id="collapseSix"
                class="accordion-collapse collapse"
                data-bs-parent="#riskFaqAccordion">

                <div class="accordion-body">
                    Overtrading happens when traders take too many unnecessary
                    trades due to emotions or impatience. Following a trading
                    plan and setting daily trade limits can help prevent it.
                </div>
            </div>
        </div>

        <!-- FAQ 7 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqSeven">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven">
                    Where should I place my stop loss?
                </button>
            </h2>

            <div id="collapseSeven"
                class="accordion-collapse collapse"
                data-bs-parent="#riskFaqAccordion">

                <div class="accordion-body">
                    Stop losses should be placed at logical technical levels
                    where your trade setup becomes invalid — not based on emotion
                    or random dollar amounts.
                </div>
            </div>
        </div>

        <!-- FAQ 8 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqEight">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseEight">
                    What should a trading plan include for risk management?
                </button>
            </h2>

            <div id="collapseEight"
                class="accordion-collapse collapse"
                data-bs-parent="#riskFaqAccordion">

                <div class="accordion-body">
                    A strong trading plan should include risk per trade, maximum
                    daily loss, position sizing rules, entry confirmation,
                    stop-loss strategy, and profit targets.
                </div>
            </div>
        </div>

        <!-- FAQ 9 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqNine">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseNine">
                    What is Zed Capital and who is this course designed for?
                </button>
            </h2>

            <div id="collapseNine"
                class="accordion-collapse collapse"
                data-bs-parent="#riskFaqAccordion">

                <div class="accordion-body">
                    Zed Capital is a professional trading education platform
                    designed for beginner and intermediate traders who want to
                    build disciplined and sustainable trading habits.
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ================= FAQ SECTION END ================= -->
 <style>
    /* ================= FAQ SECTION ================= */

.zed-faq-section{
    /* margin-top:80px; */
    padding:50px 100px;
    border-top:1px solid var(--zed-border-color);
}

.zed-faq-header{
    margin-bottom:30px;
}

.zed-faq-header .faq-label{
    font-size:11px;
    letter-spacing:2px;
    font-weight:700;
    color:#999;
    display:block;
    margin-bottom:10px;
}

.zed-faq-header h2{
    font-size:32px;
    font-weight:700;
    margin-bottom:14px;
    color:#111;
}

.zed-faq-header p{
    color:#8a8a8a;
    font-size:15px;
    max-width:800px;
    line-height:1.7;
}

/* Accordion */

.zed-faq-accordion .accordion-item{
    border:1px solid #ececec;
    margin-bottom:14px;
    border-radius:10px !important;
    overflow:hidden;
    background:#fff;
}

.zed-faq-accordion .accordion-button{
    background:#fff;
    font-weight:600;
    font-size:16px;
    padding:22px 24px;
    box-shadow:none !important;
    color:#111;
}

.zed-faq-accordion .accordion-button:not(.collapsed){
    background:#fff5f5;
    color:#e10600;
}

.zed-faq-accordion .accordion-button:focus{
    box-shadow:none;
}

.zed-faq-accordion .accordion-body{
    padding:20px 24px 26px;
    color:#666;
    line-height:1.8;
    font-size:15px;
}

/* Responsive */

@media(max-width:768px){

    .zed-faq-section{
        margin-top:50px;
        padding-top:40px;
    }

    .zed-faq-header h2{
        font-size:24px;
    }

    .zed-faq-accordion .accordion-button{
        font-size:14px;
        padding:18px;
    }

    .zed-faq-accordion .accordion-body{
        padding:18px;
        font-size:14px;
    }

}
 </style>
<?php
include_once ('elements/footer.php');
?>
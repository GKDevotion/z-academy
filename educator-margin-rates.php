<?php
include_once('elements/header.php');
?>

<style>
  /* ── PAGE HEADER ── */
  .page-header {
    background: var(--dark);
    padding: 3rem 0 2.5rem;
    position: relative;
    overflow: hidden;
  }

  .page-header::before {
    content: '';
    position: absolute;
    top: -80px;
    right: -80px;
    width: 360px;
    height: 360px;
    background: radial-gradient(circle, rgba(255, 0, 0, .18) 0%, transparent 65%);
    pointer-events: none;
  }

  .page-header::after {
    content: '';
    position: absolute;
    bottom: -60px;
    left: 10%;
    width: 220px;
    height: 220px;
    background: radial-gradient(circle, rgba(255, 0, 0, .07) 0%, transparent 65%);
    pointer-events: none;
  }

  .header-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    font-size: .7rem;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: var(--primary);
    margin-bottom: .75rem;
  }

  .header-eyebrow::before,
  .header-eyebrow::after {
    content: '';
    display: block;
    width: 18px;
    height: 1.5px;
    background: var(--primary);
    opacity: .5;
  }

  .page-title {
    font-size: clamp(1.6rem, 4vw, 2.5rem);
    font-weight: 800;
    letter-spacing: -1px;
    color: #fff;
    line-height: 1.1;
    margin-bottom: .75rem;
  }

  .page-title em {
    color: var(--primary);
    font-style: normal;
  }

  .page-subtitle {
    font-size: .95rem;
    color: #888;
    line-height: 1.7;
    max-width: 440px;
  }

  /* ── CARDS ── */
  .calc-card {
    background: var(--card-bg);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: hidden;
  }

  .card-header-strip {
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    padding: .85rem 1.25rem;
    display: flex;
    align-items: center;
    gap: .6rem;
  }

  .card-header-strip .strip-icon {
    width: 28px;
    height: 28px;
    background: var(--zed-backgound-color);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    font-size: .8rem;
  }

  .card-header-strip .strip-title {
    font-size: .78rem;
    font-weight: 700;
    letter-spacing: .8px;
    text-transform: uppercase;
    color: var(--muted);
  }

  .card-body-pad {
    padding: 1.25rem;
  }

  /* ── FORM ELEMENTS ── */
  .form-label {
    font-size: .78rem;
    font-weight: 600;
    color: var(--muted);
    margin-bottom: .4rem;
    text-transform: uppercase;
    letter-spacing: .5px;
  }

  .form-control,
  .form-select {
    font-size: .9rem;
    font-weight: 500;
    border: 1.5px solid var(--border);
    border-radius: var(--radius-sm);
    padding: .6rem .9rem;
    color: var(--dark);
    background: #fff;
    transition: var(--transition);
  }

  .form-control:focus,
  .form-select:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 3px var(--zed-backgound-color);
    outline: none;
  }

  /* ── PAIR BUTTONS ── */
  .pair-btn {
    display: block;
    width: 100%;
    text-align: center;
    padding: .5rem .4rem;
    font-size: .78rem;
    font-weight: 600;
    border: 1.5px solid var(--border);
    border-radius: var(--radius-sm);
    background: #fff;
    color: var(--muted);
    cursor: pointer;
    transition: var(--transition);
    white-space: nowrap;
  }

  .pair-btn:hover {
    border-color: var(--primary);
    color: var(--primary);
    background: var(--zed-backgound-color);
  }

  .pair-btn.active {
    border-color: var(--primary);
    background: var(--primary);
    color: #fff;
  }

  /* ── METRIC CARDS ── */
  .metric-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    padding: 1rem;
    text-align: center;
    transition: var(--transition);
  }

  .metric-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
  }

  .metric-label {
    font-size: .7rem;
    font-weight: 700;
    letter-spacing: .8px;
    text-transform: uppercase;
    color: var(--muted);
    margin-bottom: .4rem;
  }

  .metric-value {
    font-size: 1.4rem;
    font-weight: 800;
    line-height: 1;
    letter-spacing: -.5px;
  }

  .metric-value.c-primary {
    color: var(--primary);
  }

  .metric-value.c-success {
    color: var(--success-color);
  }

  .metric-value.c-warning {
    color: var(--warning-color);
  }

  .metric-value.c-danger {
    color: var(--danger-color);
  }

  .metric-value.c-info {
    color: var(--info-color);
  }

  .metric-sub {
    font-size: .7rem;
    color: var(--muted);
    margin-top: .25rem;
  }

  /* ── USAGE BAR ── */
  .usage-bar-wrap {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    padding: 1rem 1.25rem;
  }

  .usage-track {
    height: 8px;
    background: #e8e8e8;
    border-radius: 4px;
    overflow: hidden;
    margin-top: .5rem;
  }

  .usage-fill {
    height: 100%;
    border-radius: 4px;
    transition: width .5s ease, background .4s ease;
  }

  /* ── DETAILS LIST ── */
  .detail-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: .65rem 0;
    border-bottom: 1px solid #f5f5f5;
    font-size: .875rem;
  }

  .detail-row:last-child {
    border-bottom: none;
  }

  .detail-key {
    color: var(--muted);
    font-weight: 500;
  }

  .detail-val {
    font-weight: 600;
    color: var(--dark);
    text-align: right;
  }

  /* ── BADGES ── */
  .risk-badge {
    display: inline-block;
    font-size: .68rem;
    font-weight: 700;
    letter-spacing: .5px;
    text-transform: uppercase;
    padding: .25rem .7rem;
    border-radius: 20px;
  }

  .risk-low {
    background: #e6faf1;
    color: #008a4b;
  }

  .risk-medium {
    background: #fff7e6;
    color: #b26a00;
  }

  .risk-high {
    background: #fef2f2;
    color: #c02424;
  }

  .dir-badge {
    display: inline-block;
    font-size: .72rem;
    font-weight: 700;
    padding: .25rem .75rem;
    border-radius: 20px;
  }

  .dir-buy {
    background: #e6faf1;
    color: #008a4b;
  }

  .dir-sell {
    background: #fef2f2;
    color: #c02424;
  }

  /* ── WARNING BOX ── */
  .warn-alert {
    background: #fff9e6;
    border: 1.5px solid #fcd34d;
    border-radius: var(--radius-sm);
    padding: .85rem 1rem;
    font-size: .84rem;
    color: #92400e;
    display: flex;
    align-items: flex-start;
    gap: .6rem;
  }

  .warn-alert i {
    font-size: 1rem;
    color: #f59e0b;
    flex-shrink: 0;
    margin-top: 1px;
  }

  /* ── TABLE ── */
  .margin-table {
    font-size: .82rem;
  }

  .margin-table thead th {
    font-size: .7rem;
    font-weight: 700;
    letter-spacing: .6px;
    text-transform: uppercase;
    color: var(--muted);
    background: var(--surface);
    border-bottom: 2px solid var(--border);
    padding: .7rem .9rem;
    white-space: nowrap;
  }

  .margin-table tbody td {
    padding: .65rem .9rem;
    border-bottom: 1px solid #f5f5f5;
    vertical-align: middle;
  }

  .margin-table tbody tr:last-child td {
    border-bottom: none;
  }

  .margin-table tbody tr:hover td {
    background: #fafafa;
  }

  .margin-table tbody tr.active-row td {
    background: var(--zed-backgound-color) !important;
    font-weight: 600;
  }

  .lev-label {
    font-weight: 700;
    font-size: .85rem;
    color: var(--dark);
  }

  /* ── ANIMATIONS ── */
  @keyframes fadeUp {
    from {
      opacity: 0;
      transform: translateY(16px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .anim {
    animation: fadeUp .45s ease both;
  }

  .anim-1 {
    animation-delay: .05s;
  }

  .anim-2 {
    animation-delay: .1s;
  }

  .anim-3 {
    animation-delay: .15s;
  }

  .anim-4 {
    animation-delay: .2s;
  }

  .anim-5 {
    animation-delay: .25s;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 575px) {
    .metric-value {
      font-size: 1.1rem;
    }

    .page-header {
      padding: 2rem 0 1.75rem;
    }

    .card-body-pad {
      padding: 1rem;
    }
  }
</style>

<header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
  <div>
    <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Margin <span style="color: var(--primary-teal);">Rates</span> </h1>
    <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Understand margin requirements and leverage to make smarter and safer trading decisions.</p>
    <div class="open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
      <button class="rounded-pill d-none">ZERO TO HERO</button>
    </div>
  </div>
</header>

<!-- PAGE HEADER -->
<section class="page-header">
  <div class="container">
    <div class="row align-items-center gy-3">
      <div class="col-lg-7">
        <div class="header-eyebrow">Forex Tools</div>
        <h1 class="page-title">Margin <em>rate</em><br />calculator</h1>
        <p class="page-subtitle">Calculate required margin, free margin, margin level, and risk exposure for any Forex position in real time.</p>
      </div>
      <div class="col-lg-5">
        <div class="row g-3" id="header-metrics">
          <!-- filled by JS -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN -->
<main class="container py-4">

  <!-- WARNING -->
  <div id="warn-box" class="warn-alert mb-3 anim anim-1" style="display:none">
    <i class="bi bi-exclamation-triangle-fill"></i>
    <span>Margin level is below 150%. Risk of margin call is high — consider reducing position size or adding funds to your account.</span>
  </div>

  <div class="row g-3">

    <!-- LEFT COL: inputs -->
    <div class="col-lg-5">

      <!-- Pair select -->
      <div class="calc-card mb-3 anim anim-1">
        <div class="card-header-strip">
          <div class="strip-icon"><i class="bi bi-grid-3x3-gap"></i></div>
          <span class="strip-title">Quick pair select</span>
        </div>
        <div class="card-body-pad">
          <div class="row g-2" id="pairs-grid"></div>
        </div>
      </div>

      <!-- Parameters -->
      <div class="calc-card anim anim-2">
        <div class="card-header-strip">
          <div class="strip-icon"><i class="bi bi-sliders"></i></div>
          <span class="strip-title">Position parameters</span>
        </div>
        <div class="card-body-pad">
          <div class="row g-3">

            <div class="col-12">
              <label class="form-label">Currency pair</label>
              <select class="form-select" id="pair"></select>
            </div>

            <div class="col-6">
              <label class="form-label">Direction</label>
              <select class="form-select" id="direction">
                <option value="buy">Buy (Long)</option>
                <option value="sell">Sell (Short)</option>
              </select>
            </div>

            <div class="col-6">
              <label class="form-label">Leverage (1:X)</label>
              <select class="form-select" id="leverage">
                <option value="10">1:10</option>
                <option value="20">1:20</option>
                <option value="30">1:30</option>
                <option value="50" selected>1:50</option>
                <option value="100">1:100</option>
                <option value="200">1:200</option>
                <option value="500">1:500</option>
              </select>
            </div>

            <div class="col-6">
              <label class="form-label">Lot size</label>
              <input type="number" class="form-control" id="lots" value="1" min="0.01" step="0.01" placeholder="e.g. 1" />
            </div>

            <div class="col-6">
              <label class="form-label">Bid price</label>
              <input type="number" class="form-control" id="price" value="1.0850" step="0.0001" placeholder="1.0850" />
            </div>

            <div class="col-12">
              <label class="form-label">Account balance (USD)</label>
              <div class="input-group">
                <span class="input-group-text" style="font-size:.85rem;background:var(--surface);border-color:var(--border)">$</span>
                <input type="number" class="form-control" id="balance" value="10000" min="1" step="100" placeholder="10000" />
              </div>
            </div>

          </div>
        </div>
      </div>

    </div><!-- /col-lg-5 -->

    <!-- RIGHT COL: results -->
    <div class="col-lg-7">

      <!-- Metric cards -->
      <div class="row g-2 mb-3 anim anim-3" id="metrics-row">
        <!-- filled by JS -->
      </div>

      <!-- Usage bar -->
      <div class="calc-card mb-3 anim anim-3">
        <div class="card-body-pad">
          <div class="usage-bar-wrap">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span style="font-size:.8rem;font-weight:600;color:var(--muted)">Margin usage</span>
              <span style="font-size:.82rem;font-weight:700" id="pct-lbl">—</span>
            </div>
            <div class="usage-track">
              <div class="usage-fill" id="usage-bar" style="width:0%"></div>
            </div>
            <div class="d-flex justify-content-between mt-1" style="font-size:.68rem;color:var(--muted)">
              <span>0%</span><span>Safe zone</span><span>100%</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Position details -->
      <div class="calc-card mb-3 anim anim-4">
        <div class="card-header-strip">
          <div class="strip-icon"><i class="bi bi-info-circle"></i></div>
          <span class="strip-title">Position details</span>
        </div>
        <div class="card-body-pad" id="details">
          <!-- filled by JS -->
        </div>
      </div>

    </div><!-- /col-lg-7 -->

  </div><!-- /row -->

  <!-- MARGIN RATE TABLE -->
  <div class="calc-card mt-3 anim anim-5">
    <div class="card-header-strip">
      <div class="strip-icon"><i class="bi bi-table"></i></div>
      <span class="strip-title">Margin rate comparison table</span>
    </div>
    <div class="card-body-pad p-0">
      <div class="table-responsive">
        <table class="table margin-table mb-0">
          <thead>
            <tr>
              <th>Leverage</th>
              <th>Margin rate %</th>
              <th>Required margin</th>
              <th>Free margin</th>
              <th>Margin level %</th>
              <th>Pip value</th>
              <th>Risk</th>
            </tr>
          </thead>
          <tbody id="rate-body"></tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- INFO TILES -->
  <div class="row g-3 mt-1">
    <div class="col-md-4">
      <div class="calc-card">
        <div class="card-body-pad">
          <div class="d-flex align-items-center gap-2 mb-2">
            <div class="strip-icon" style="width:28px;height:28px;background:var(--zed-backgound-color);border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:.8rem;flex-shrink:0"><i class="bi bi-shield-exclamation"></i></div>
            <span style="font-weight:700;font-size:.85rem">Margin call</span>
          </div>
          <p style="font-size:.82rem;color:var(--muted);line-height:1.65;margin:0">Triggered when margin level drops to 100%. The broker warns you to deposit more funds or close positions to avoid stop-out.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="calc-card">
        <div class="card-body-pad">
          <div class="d-flex align-items-center gap-2 mb-2">
            <div class="strip-icon" style="width:28px;height:28px;background:#fff0f0;border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:.8rem;flex-shrink:0"><i class="bi bi-x-circle"></i></div>
            <span style="font-weight:700;font-size:.85rem">Stop-out level</span>
          </div>
          <p style="font-size:.82rem;color:var(--muted);line-height:1.65;margin:0">When margin level reaches ~50%, the broker automatically closes your losing positions to prevent negative balance.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="calc-card">
        <div class="card-body-pad">
          <div class="d-flex align-items-center gap-2 mb-2">
            <div class="strip-icon" style="width:28px;height:28px;background:#e6faf1;border-radius:8px;display:flex;align-items:center;justify-content:center;color:#008a4b;font-size:.8rem;flex-shrink:0"><i class="bi bi-graph-up"></i></div>
            <span style="font-weight:700;font-size:.85rem">Free margin</span>
          </div>
          <p style="font-size:.82rem;color:var(--muted);line-height:1.65;margin:0">Balance minus required margin. Used to open new trades or absorb floating losses. Keep it positive to stay in the market.</p>
        </div>
      </div>
    </div>
  </div>

</main>

<script>
  const PAIRS = {
    "EUR/USD": {
      rate: 1.0850,
      desc: "Euro / US Dollar"
    },
    "GBP/USD": {
      rate: 1.2710,
      desc: "British Pound / US Dollar"
    },
    "USD/JPY": {
      rate: 149.50,
      desc: "US Dollar / Japanese Yen"
    },
    "USD/CHF": {
      rate: 0.9020,
      desc: "US Dollar / Swiss Franc"
    },
    "AUD/USD": {
      rate: 0.6530,
      desc: "Australian Dollar / US Dollar"
    },
    "USD/CAD": {
      rate: 1.3580,
      desc: "US Dollar / Canadian Dollar"
    },
    "NZD/USD": {
      rate: 0.5980,
      desc: "New Zealand Dollar / US Dollar"
    },
    "EUR/GBP": {
      rate: 0.8530,
      desc: "Euro / British Pound"
    },
    "EUR/JPY": {
      rate: 162.10,
      desc: "Euro / Japanese Yen"
    },
    "GBP/JPY": {
      rate: 189.80,
      desc: "British Pound / Japanese Yen"
    },
    "XAU/USD": {
      rate: 2340.00,
      desc: "Gold / US Dollar"
    },
    "USD/MXN": {
      rate: 17.10,
      desc: "US Dollar / Mexican Peso"
    }
  };

  const pairSel = document.getElementById("pair");
  const pgrid = document.getElementById("pairs-grid");

  Object.keys(PAIRS).forEach((p, i) => {
    // select option
    const o = document.createElement("option");
    o.value = p;
    o.textContent = p;
    pairSel.appendChild(o);

    // pair button
    const col = document.createElement("div");
    col.className = "col-4 col-sm-3 col-md-4";
    const b = document.createElement("button");
    b.className = "pair-btn" + (i === 0 ? " active" : "");
    b.textContent = p;
    b.dataset.pair = p;
    b.onclick = () => {
      pairSel.value = p;
      document.getElementById("price").value = PAIRS[p].rate;
      document.querySelectorAll(".pair-btn").forEach(x => x.classList.remove("active"));
      b.classList.add("active");
      calc();
    };
    col.appendChild(b);
    pgrid.appendChild(col);
  });

  pairSel.onchange = () => {
    const p = pairSel.value;
    if (PAIRS[p]) document.getElementById("price").value = PAIRS[p].rate;
    document.querySelectorAll(".pair-btn").forEach(x => x.classList.toggle("active", x.dataset.pair === p));
    calc();
  };

  ["lots", "leverage", "balance", "price", "direction"].forEach(id => {
    document.getElementById(id).addEventListener("input", calc);
    document.getElementById(id).addEventListener("change", calc);
  });

  function fmt(n, d = 2) {
    return n.toLocaleString("en-US", {
      minimumFractionDigits: d,
      maximumFractionDigits: d
    });
  }

  function fmtPct(n, d = 2) {
    return n.toFixed(d) + "%";
  }

  function riskTag(pct) {
    if (pct < 40) return {
      cls: "risk-low",
      label: "Low"
    };
    if (pct < 70) return {
      cls: "risk-medium",
      label: "Medium"
    };
    return {
      cls: "risk-high",
      label: "High"
    };
  }

  function calc() {
    const pair = pairSel.value;
    const lots = Math.max(0.01, parseFloat(document.getElementById("lots").value) || 1);
    const leverage = parseInt(document.getElementById("leverage").value) || 50;
    const balance = Math.max(1, parseFloat(document.getElementById("balance").value) || 10000);
    const price = Math.max(0.0001, parseFloat(document.getElementById("price").value) || 1.085);
    const dir = document.getElementById("direction").value;

    const contractSize = 100000;
    const positionValue = lots * contractSize * price;
    const marginRate = (1 / leverage) * 100;
    const requiredMargin = positionValue * (1 / leverage);
    const freeMargin = balance - requiredMargin;
    const marginLevel = requiredMargin > 0 ? (balance / requiredMargin) * 100 : 999999;
    const usagePct = Math.min(100, (requiredMargin / balance) * 100);
    const pipValue = (0.0001 / price) * contractSize * lots;

    // warn
    const warnBox = document.getElementById("warn-box");
    warnBox.style.display = (marginLevel < 150 && marginLevel > 0) ? "flex" : "none";

    // bar
    const barW = Math.min(100, usagePct);
    const barColor = barW < 40 ? "#00c06a" : barW < 70 ? "#f59e0b" : "#ef4444";
    document.getElementById("usage-bar").style.width = barW + "%";
    document.getElementById("usage-bar").style.background = barColor;
    document.getElementById("pct-lbl").textContent = fmtPct(usagePct) + " used";

    // margin level color
    const mlClass = marginLevel >= 200 ? "c-success" : marginLevel >= 150 ? "c-warning" : "c-danger";

    // header hero metrics
    document.getElementById("header-metrics").innerHTML = `
    <div class="col-6"><div class="metric-card" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.1)">
      <div class="metric-label" style="color:#888">Margin rate</div>
      <div class="metric-value c-primary">${fmtPct(marginRate)}</div>
      <div class="metric-sub" style="color:#666">1:${leverage} leverage</div>
    </div></div>
    <div class="col-6"><div class="metric-card" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.1)">
      <div class="metric-label" style="color:#888">Margin level</div>
      <div class="metric-value ${mlClass}" style="${mlClass==='c-success'?'color:#00c06a':mlClass==='c-warning'?'color:#f59e0b':'color:#ef4444'}">${fmt(marginLevel, 1)}%</div>
      <div class="metric-sub" style="color:#666">Account health</div>
    </div></div>
  `;

    // metrics row
    const risk = riskTag(usagePct);
    document.getElementById("metrics-row").innerHTML = `
    <div class="col-6 col-md-3">
      <div class="metric-card">
        <div class="metric-label">Margin rate</div>
        <div class="metric-value c-primary">${fmtPct(marginRate)}</div>
        <div class="metric-sub">1:${leverage}</div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="metric-card">
        <div class="metric-label">Required margin</div>
        <div class="metric-value" style="font-size:1.1rem">$${fmt(requiredMargin)}</div>
        <div class="metric-sub">USD</div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="metric-card">
        <div class="metric-label">Free margin</div>
        <div class="metric-value ${freeMargin < 0 ? 'c-danger' : 'c-success'}" style="font-size:1.1rem">$${fmt(freeMargin)}</div>
        <div class="metric-sub">${freeMargin < 0 ? "Insufficient" : "Available"}</div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="metric-card">
        <div class="metric-label">Margin level</div>
        <div class="metric-value ${mlClass}">${fmt(marginLevel,1)}%</div>
        <div class="metric-sub">Account health</div>
      </div>
    </div>
  `;

    // details
    document.getElementById("details").innerHTML = `
    <div class="detail-row">
      <span class="detail-key">Currency pair</span>
      <span class="detail-val">${pair} — ${PAIRS[pair] ? PAIRS[pair].desc : pair}</span>
    </div>
    <div class="detail-row">
      <span class="detail-key">Direction</span>
      <span class="detail-val"><span class="dir-badge dir-${dir}">${dir === 'buy' ? 'Buy / Long' : 'Sell / Short'}</span></span>
    </div>
    <div class="detail-row">
      <span class="detail-key">Position size</span>
      <span class="detail-val">${lots} lot${lots != 1 ? 's' : ''} (${fmt(lots * contractSize, 0)} units)</span>
    </div>
    <div class="detail-row">
      <span class="detail-key">Notional value</span>
      <span class="detail-val">$${fmt(positionValue)}</span>
    </div>
    <div class="detail-row">
      <span class="detail-key">Pip value (per pip)</span>
      <span class="detail-val">$${fmt(pipValue)}</span>
    </div>
    <div class="detail-row">
      <span class="detail-key">Account balance</span>
      <span class="detail-val">$${fmt(balance)}</span>
    </div>
    <div class="detail-row">
      <span class="detail-key">Risk level</span>
      <span class="detail-val"><span class="risk-badge ${risk.cls}">${risk.label}</span></span>
    </div>
    <div class="detail-row">
      <span class="detail-key">Margin call trigger (~100%)</span>
      <span class="detail-val" style="color:#ef4444">Balance ≤ $${fmt(requiredMargin)}</span>
    </div>
    <div class="detail-row">
      <span class="detail-key">Stop-out level (~50%)</span>
      <span class="detail-val" style="color:#ef4444">Balance ≤ $${fmt(requiredMargin * 0.5)}</span>
    </div>
  `;

    // rate table
    const LEVS = [10, 20, 30, 50, 100, 200, 500];
    document.getElementById("rate-body").innerHTML = LEVS.map(lev => {
      const r = (1 / lev) * 100;
      const rm = positionValue * (1 / lev);
      const fm = balance - rm;
      const ml = rm > 0 ? (balance / rm) * 100 : 999999;
      const pv = (0.0001 / price) * contractSize * lots;
      const rs = riskTag((rm / balance) * 100);
      const cur = lev === leverage;
      return `<tr class="${cur ? 'active-row' : ''}">
      <td><span class="lev-label">${cur ? '▶ ' : ''}1:${lev}</span></td>
      <td>${fmtPct(r)}</td>
      <td>$${fmt(rm)}</td>
      <td style="color:${fm<0?'#ef4444':'#00c06a'}">$${fmt(fm)}</td>
      <td>${fmt(ml,1)}%</td>
      <td>$${fmt(pv)}</td>
      <td><span class="risk-badge ${rs.cls}">${rs.label}</span></td>
    </tr>`;
    }).join("");
  }

  calc();
</script>

<?php
include_once('elements/footer.php');
?>
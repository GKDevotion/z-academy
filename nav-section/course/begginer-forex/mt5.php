  <style>
     /* ── MT5 GRID ── */
    .mt5-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
      gap: 12px;
      margin-bottom: 24px;
    }

    .mt5-card {
      background: var(--white);
      border-radius: 12px;
      border: 1px solid var(--border);
      padding: 16px;
    }

    .mt5-title {
      font-size: 14px;
      font-weight: 600;
      color: var(--navy);
      margin-bottom: 6px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .mt5-icon {
      font-size: 18px;
    }

    .mt5-desc {
      font-size: 13px;
      color: var(--text-2);
      line-height: 1.5;
    }

    /* ── CANDLE INFOGRAPHIC ── */
    .candle-demo {
      background: var(--navy);
      border-radius: 14px;
      padding: 28px 24px;
      margin-bottom: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 32px;
      align-items: center;
      justify-content: center;
    }

    .candle-figure {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
    }

    .candle-label {
      font-size: 12px;
      color: rgba(255, 255, 255, 0.6);
      text-transform: uppercase;
      letter-spacing: 0.06em;
    }

    .candle-body {
      width: 36px;
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .wick {
      width: 2px;
      background: rgba(255, 255, 255, 0.5);
    }

    .body-rect {
      width: 36px;
      border-radius: 3px;
    }

    .bull-body {
      background: var(--teal);
    }

    .bear-body {
      background: var(--red);
    }

    .candle-info {
      text-align: center;
    }

    .candle-info .ci-title {
      font-size: 13px;
      font-weight: 600;
      color: white;
      margin-bottom: 4px;
    }

    .candle-info .ci-desc {
      font-size: 12px;
      color: rgba(255, 255, 255, 0.55);
      line-height: 1.5;
    }

    /* ── PAIR TABLE ── */
    .pair-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 24px;
    }

    .pair-table th {
      background: var(--navy);
      color: var(--gold-light);
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      padding: 12px 16px;
      text-align: left;
    }

    .pair-table th:first-child {
      border-radius: 10px 0 0 0;
    }

    .pair-table th:last-child {
      border-radius: 0 10px 0 0;
    }

    .pair-table td {
      padding: 11px 16px;
      font-size: 13px;
      color: var(--text);
      border-bottom: 1px solid var(--border);
    }

    .pair-table tr:hover td {
      background: var(--bg);
    }

    .pair-table tr:last-child td {
      border-bottom: none;
    }

    /* ── CODE BLOCK ── */
    .code-block {
      background: #0d1b2e;
      border-radius: 12px;
      padding: 20px 24px;
      margin-bottom: 16px;
      font-family: 'DM Mono', monospace;
      font-size: 13px;
      line-height: 1.8;
      overflow-x: auto;
    }

    .cc {
      color: #5a7a6a;
    }

    .ck {
      color: var(--gold-light);
    }

    .cv {
      color: #85b7eb;
    }

    .cs {
      color: #a8d8a8;
    }

  </style>
  
  
  
  <!-- ═══════════════ MT5 ═══════════════ -->
    <div id="sec-mt5" class="sec">
      <div class="sec-title">📊 MetaTrader 5 — Complete Platform Guide</div>
      <p class="sec-desc">MetaTrader 5 is the industry-standard trading platform. Master it completely to trade with
        speed and precision.</p>

      <div class="sub-title">🖥️ Platform Layout — Key Panels</div>
      <div class="mt5-grid">
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">📈</span>Charts</div>
          <div class="mt5-desc">9 timeframes: M1, M5, M15, M30, H1, H4, D1, W1, MN. 38+ built-in indicators. Custom
            templates. Object drawing tools.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">📋</span>Market Watch</div>
          <div class="mt5-desc">Live bid/ask quotes. Right-click → New Order. Show/hide symbols. Sort by name, spread,
            or change.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">💼</span>Terminal</div>
          <div class="mt5-desc">Tabs: Trade (open positions), History, Alerts, Mailbox. Monitor equity, balance, and
            free margin live.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">👁️</span>Navigator</div>
          <div class="mt5-desc">Your account tree, indicators, EAs, and scripts. Drag-and-drop indicators onto charts.
          </div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">💻</span>MQL5 Editor</div>
          <div class="mt5-desc">Code EAs, indicators, and scripts in MQL5 (C++-like). Built-in debugger and MetaEditor
            IDE.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">🔬</span>Strategy Tester</div>
          <div class="mt5-desc">Backtest EAs on historical data. Visual mode, optimization, and forward testing
            capabilities.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">📰</span>News Feed</div>
          <div class="mt5-desc">Real-time market news from MQL5.com. Integrate with trading calendar and alerts.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">🔔</span>Alerts</div>
          <div class="mt5-desc">Price level alerts, mobile push notifications, email alerts. Never miss your key level
            again.</div>
        </div>
      </div>

      <div class="sub-title">⌨️ Essential MT5 Keyboard Shortcuts</div>
      <div class="info-grid">
        <div class="info-card">
          <div class="info-head">Trading Shortcuts</div>
          <div class="info-body" style="font-family:'DM Mono',monospace; font-size:13px; line-height:2;">
            <strong>F9</strong> → New Order window<br>
            <strong>F7</strong> → EA Properties<br>
            <strong>F6</strong> → Strategy Tester<br>
            <strong>F5</strong> → Navigator panel<br>
            <strong>Del</strong> → Delete selected object
          </div>
        </div>
        <div class="info-card">
          <div class="info-head">Chart Shortcuts</div>
          <div class="info-body" style="font-family:'DM Mono',monospace; font-size:13px; line-height:2;">
            <strong>Ctrl+M</strong> → Market Watch<br>
            <strong>Ctrl+D</strong> → Data Window<br>
            <strong>Ctrl+Z</strong> → Undo drawing<br>
            <strong>Alt+1</strong> → Bar chart<br>
            <strong>Alt+2</strong> → Candlestick chart
          </div>
        </div>
        <div class="info-card">
          <div class="info-head">Zoom & Navigation</div>
          <div class="info-body" style="font-family:'DM Mono',monospace; font-size:13px; line-height:2;">
            <strong>+/-</strong> → Zoom in/out<br>
            <strong>Home/End</strong> → Beginning/End<br>
            <strong>← →</strong> → Scroll chart<br>
            <strong>Ctrl+A</strong> → Auto-scroll<br>
            <strong>Esc</strong> → Cancel drawing
          </div>
        </div>
        <div class="info-card">
          <div class="info-head">Indicator Shortcuts</div>
          <div class="info-body" style="font-family:'DM Mono',monospace; font-size:13px; line-height:2;">
            <strong>Ctrl+I</strong> → Indicator list<br>
            <strong>Ctrl+L</strong> → Draw/hide line<br>
            <strong>Ctrl+B</strong> → Objects list<br>
            <strong>Ctrl+Y</strong> → Show periods<br>
            <strong>Ctrl+G</strong> → Grid on/off
          </div>
        </div>
      </div>

      <div class="sub-title">📊 Essential Indicators Explained</div>
      <ul class="blist">
        <li><span class="bi">〰️</span>
          <div><strong>Moving Average (MA / EMA)</strong> — Smooths price to show trend direction. EMA 20 = short-term
            trend. EMA 50 = medium-term. EMA 200 = long-term. <em>Golden Cross</em>: EMA20 crosses above EMA50 = buy
            signal.</div>
        </li>
        <li><span class="bi">📉</span>
          <div><strong>RSI (Relative Strength Index, 14)</strong> — Measures momentum 0–100. <span
              style="color:var(--teal)">Above 70 = overbought (possible reversal)</span> · <span
              style="color:var(--red)">Below 30 = oversold</span>. Most effective on H4 and Daily timeframes.</div>
        </li>
        <li><span class="bi">⚡</span>
          <div><strong>MACD (Moving Avg Convergence Divergence)</strong> — Two lines + histogram. Signal: MACD line
            crosses signal line. Histogram above zero = bullish momentum. Look for divergence with price for reversals.
          </div>
        </li>
        <li><span class="bi">🎯</span>
          <div><strong>Bollinger Bands (20, 2)</strong> — Three lines: middle SMA20 + upper/lower bands (2 std
            deviations). Price touching upper band = resistance. Lower band = support. Squeeze = big move coming
            (breakout).</div>
        </li>
        <li><span class="bi">🌊</span>
          <div><strong>Stochastic Oscillator (14, 3, 3)</strong> — Shows momentum 0–100. Above 80 = overbought. Below 20
            = oversold. Signal: %K crosses %D. More reliable in ranging markets.</div>
        </li>
        <li><span class="bi">📏</span>
          <div><strong>ATR (Average True Range, 14)</strong> — Measures volatility, NOT direction. High ATR = volatile
            market, widen your SL. Low ATR = calm market, tighter SL. Use 1.5–2× ATR for SL placement.</div>
        </li>
        <li><span class="bi">☁️</span>
          <div><strong>Ichimoku Cloud</strong> — All-in-one indicator: trend, support/resistance, momentum. Price above
            cloud = bullish. Kumo Breakout = powerful entry signal. Best on H4 and Daily charts.</div>
        </li>
      </ul>

      <div class="sub-title">📋 MT5 Order Types & Execution</div>
      <div class="info-grid">
        <div class="info-card">
          <div class="info-head">⚡ Instant Execution</div>
          <div class="info-body">Order executed at the quoted price. Broker may requote in fast markets. Used by market
            makers. Requote = slippage protection for broker.</div>
        </div>
        <div class="info-card">
          <div class="info-head">🔄 Market Execution</div>
          <div class="info-body">Order at the best available price. No requotes but slippage possible. Used by ECN/STP
            brokers. More transparent pricing.</div>
        </div>
        <div class="info-card">
          <div class="info-head">📅 6 Pending Order Types</div>
          <div class="info-body"><strong>Buy Limit</strong> — Buy below current price<br><strong>Sell Limit</strong> —
            Sell above current price<br><strong>Buy Stop</strong> — Buy above current price<br><strong>Sell
              Stop</strong> — Sell below current price<br><strong>Buy Stop Limit</strong> — Hybrid
            pending<br><strong>Sell Stop Limit</strong> — Hybrid pending</div>
        </div>
        <div class="info-card">
          <div class="info-head">🤖 Expert Advisors (EA)</div>
          <div class="info-body">Automated strategies that trade 24/5. Attach to chart, set parameters, run on VPS. Can
            backtest on Strategy Tester before going live.</div>
        </div>
      </div>
    </div>
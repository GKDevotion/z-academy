 
<style>

      :root {
      --navy: #0a1628;
      --navy-mid: #132240;
      --navy-light: #1e3a5f;
      --gold: #d4a843;
      --gold-light: #f0d080;
      --gold-pale: #fdf4dc;
      --teal: #1aab7a;
      --teal-light: #e6f9f3;
      --red: #e05240;
      --red-light: #fdf0ee;
      --amber: #e87d2b;
      --amber-light: #fef3e8;
      --blue: #2a6db5;
      --blue-light: #e8f1fc;
      --purple: #7c4dff;
      --text: #1a2035;
      --text-2: #4a5568;
      --text-3: #8a94a6;
      --border: #e2e8f0;
      --bg: #f8fafc;
      --white: #ffffff;
      --shadow: 0 4px 24px rgba(10, 22, 40, 0.08);
      --shadow-lg: 0 12px 48px rgba(10, 22, 40, 0.14);
    }

    /* ── WIN RATE TABLE ── */
    .winrate-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    .winrate-table th {
      background: var(--navy);
      color: var(--gold-light);
      padding: 10px 14px;
      font-size: 12px;
      text-align: center;
    }

    .winrate-table th:first-child {
      border-radius: 8px 0 0 0;
    }

    .winrate-table th:last-child {
      border-radius: 0 8px 0 0;
    }

    .winrate-table td {
      padding: 9px 14px;
      font-size: 13px;
      text-align: center;
      border-bottom: 1px solid var(--border);
    }

    .winrate-table tr:hover td {
      background: var(--bg);
    }
 .cell-pos {
      color: var(--teal);
      font-weight: 600;
    }

    .cell-neg {
      color: var(--red);
    }

    .cell-neutral {
      color: var(--text-2);
    }

     /* ── FORMULA BOX ── */
    .formula {
      background: var(--navy);
      border-radius: 12px;
      padding: 20px 24px;
      margin-bottom: 16px;
      position: relative;
      overflow: hidden;
    }

    .formula::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 100%;
      background: linear-gradient(180deg, var(--gold), var(--teal));
    }

    .formula-tag {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 8px;
    }

    .formula-main {
      font-family: 'DM Mono', monospace;
      font-size: 15px;
      color: #e2f0ff;
      line-height: 1.8;
      margin-bottom: 8px;
    }

    .formula-main .hl {
      color: var(--teal-light);
      font-weight: 500;
    }

    .formula-main .hl2 {
      color: var(--gold-light);
    }

    .formula-note {
      font-size: 12px;
      color: rgba(255, 255, 255, 0.5);
      line-height: 1.6;
    }

    .formula-result {
      font-size: 14px;
      color: var(--teal-light);
      margin-top: 6px;
      font-weight: 500;
    }

    /* ── SUBSECTION ── */
    .sub-title {
      font-family: 'Playfair Display', serif;
      font-size: 20px;
      font-weight: 700;
      color: var(--navy);
      margin: 32px 0 14px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .sub-title::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--border);
    }

    /* ── TAGS ── */
    .tag {
      display: inline-block;
      font-size: 12px;
      font-weight: 500;
      padding: 3px 10px;
      border-radius: 20px;
      margin: 3px 3px 3px 0;
    }

    .tg {
      background: var(--teal-light);
      color: #0f7a50;
    }

    .tr {
      background: var(--red-light);
      color: #b83025;
    }

    .tb {
      background: var(--blue-light);
      color: #1a4d8a;
    }

    .ta {
      background: var(--amber-light);
      color: #9e5210;
    }

    .tn {
      background: #f1f5f9;
      color: #475569;
    }

    /* ── STEP LIST ── */
    .steps {
      list-style: none;
    }

    .step-item {
      display: flex;
      gap: 16px;
      padding: 14px 0;
      border-bottom: 1px solid var(--border);
    }

    .step-item:last-child {
      border-bottom: none;
    }

    .step-num {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: var(--navy);
      color: var(--gold);
      font-size: 13px;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .step-text {
      font-size: 14px;
      color: var(--text);
      line-height: 1.7;
      padding-top: 4px;
    }

    .step-text strong {
      font-weight: 600;
      color: var(--navy);
    }

    /* ── BULLET LIST ── */
    .blist {
      list-style: none;
    }

    .blist li {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 11px 0;
      border-bottom: 1px solid var(--border);
      font-size: 14px;
      color: var(--text);
      line-height: 1.6;
    }

    .blist li:last-child {
      border-bottom: none;
    }

    .bi {
      font-size: 18px;
      flex-shrink: 0;
      margin-top: 1px;
    }

    .blist strong {
      font-weight: 600;
    }

    /* ── CALCULATOR ── */
    .calc-box {
      background: var(--white);
      border-radius: 14px;
      border: 1px solid var(--border);
      padding: 24px;
      margin-bottom: 20px;
      box-shadow: var(--shadow);
    }

    .calc-box h3 {
      font-size: 15px;
      font-weight: 600;
      color: var(--navy);
      margin-bottom: 18px;
    }

    .calc-row {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 12px;
      flex-wrap: wrap;
    }

    .calc-label {
      font-size: 13px;
      color: var(--text-2);
      min-width: 160px;
    }

    .calc-input,
    .calc-select {
      padding: 8px 12px;
      font-size: 13px;
      border-radius: 8px;
      border: 1px solid var(--border);
      background: var(--bg);
      color: var(--text);
      font-family: 'DM Sans', sans-serif;
    }

    .calc-input {
      width: 120px;
    }

    .calc-btn {
      background: var(--navy);
      color: var(--gold-light);
      border: none;
      border-radius: 8px;
      padding: 8px 20px;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
      font-family: 'DM Sans', sans-serif;
      transition: 0.2s;
    }

    .calc-btn:hover {
      background: var(--navy-light);
    }

    .result-box {
      background: linear-gradient(135deg, var(--teal-light), #f0fff8);
      border-radius: 10px;
      padding: 14px 18px;
      margin-top: 14px;
      border: 1px solid #b2e8d4;
      font-size: 14px;
      color: var(--text);
      line-height: 1.8;
    }

    .rh {
      font-size: 20px;
      font-weight: 700;
      color: var(--teal);
    }

    .rw {
      color: var(--red);
      font-weight: 600;
    }

    .slider-wrap {
      margin-bottom: 14px;
    }

    .slider-label-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 6px;
    }

    .slider-label {
      font-size: 13px;
      color: var(--text-2);
    }

    .slider-val {
      font-size: 13px;
      font-weight: 600;
      color: var(--navy);
    }

    input[type=range] {
      width: 100%;
      accent-color: var(--navy);
    }

    .risk-track {
      height: 14px;
      border-radius: 20px;
      background: var(--border);
      overflow: hidden;
      margin: 8px 0;
    }

    .risk-fill {
      height: 100%;
      border-radius: 20px;
      transition: all 0.4s;
    }

    .rf-safe {
      background: linear-gradient(90deg, var(--teal), #4ecb9e);
    }

    .rf-warn {
      background: linear-gradient(90deg, #f0b429, #f6d860);
    }

    .rf-danger {
      background: linear-gradient(90deg, var(--red), #f08070);
    }

    /* ── PSYCHOLOGY CARDS ── */
    .psych-card {
      background: var(--white);
      border-radius: 14px;
      border: 1px solid var(--border);
      padding: 22px 24px;
      margin-bottom: 16px;
      box-shadow: var(--shadow);
      border-left: 5px solid var(--gold);
    }

    .psych-card.fear {
      border-left-color: var(--blue);
    }

    .psych-card.greed {
      border-left-color: var(--red);
    }

    .psych-card.disc {
      border-left-color: var(--teal);
    }

    .psych-card.cons {
      border-left-color: var(--gold);
    }

    .psych-icon {
      font-size: 28px;
      margin-bottom: 8px;
    }

    .psych-title {
      font-family: 'Playfair Display', serif;
      font-size: 18px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 6px;
    }

    .psych-desc {
      font-size: 14px;
      color: var(--text-2);
      line-height: 1.7;
      margin-bottom: 12px;
    }

    .psych-tags {
      margin-bottom: 10px;
    }

    .psych-fix {
      background: var(--bg);
      border-radius: 8px;
      padding: 10px 14px;
      font-size: 13px;
      color: var(--text);
      line-height: 1.6;
    }

    .psych-fix strong {
      color: var(--navy);
      font-weight: 600;
    }

    /* ── CHECKLIST ── */
    .checklist {
      background: var(--white);
      border-radius: 14px;
      border: 1px solid var(--border);
      padding: 20px 24px;
    }

    .check-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 11px 0;
      border-bottom: 1px solid var(--border);
      cursor: pointer;
      transition: 0.15s;
    }

    .check-item:last-child {
      border-bottom: none;
    }

    .check-item:hover {
      opacity: 0.8;
    }

    .chk {
      width: 22px;
      height: 22px;
      border-radius: 6px;
      border: 2px solid var(--border);
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.2s;
    }

    .chk.done {
      background: var(--teal);
      border-color: var(--teal);
    }

    .chk-label {
      font-size: 14px;
      color: var(--text);
      transition: 0.2s;
    }

    .chk-label.done {
      text-decoration: line-through;
      color: var(--text-3);
    }

    .check-score {
      margin-top: 14px;
      font-size: 14px;
      color: var(--text-2);
      font-weight: 500;
    }

    /* ── ADVANCED CARDS ── */
    .adv-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 14px;
      margin-bottom: 24px;
    }

    .adv-card {
      background: var(--white);
      border-radius: 12px;
      border: 1px solid var(--border);
      padding: 18px;
    }

    .adv-label {
      font-size: 11px;
      color: var(--text-3);
      text-transform: uppercase;
      letter-spacing: 0.06em;
      margin-bottom: 6px;
    }

    .adv-val {
      font-size: 14px;
      font-weight: 600;
      color: var(--navy);
      margin-bottom: 6px;
    }

    .adv-desc {
      font-size: 13px;
      color: var(--text-2);
      line-height: 1.6;
    }

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
</style>

    <!-- ═══════════════ MATH ═══════════════ -->
    <div id="sec-math" class="sec">
      <div class="sec-title">📐 Essential Forex Math & Formulas</div>
      <p class="sec-desc">Master the numbers behind every trade. These formulas are non-negotiable — professional
        traders calculate every single one before entering a position.</p>

      <div class="formula">
        <div class="formula-tag">Formula 1 — Pip Value</div>
        <div class="formula-main">
          Pip Value = (<span class="hl">0.0001</span> ÷ Exchange Rate) × Lot Size × 100,000<br>
          <span style="opacity:0.5; font-size:12px;">For JPY pairs: use 0.01 instead of 0.0001</span>
        </div>
        <div class="formula-note">📌 Example: EUR/USD @ 1.0850, 1 standard lot:<br>
          (0.0001 ÷ 1.0850) × 100,000 = <strong style="color:#4ecb9e;">$9.22 per pip</strong></div>
        <div class="formula-note" style="margin-top:6px;">📌 USD/JPY @ 150.00, 1 standard lot:<br>
          (0.01 ÷ 150.00) × 100,000 = <strong style="color:#4ecb9e;">$6.67 per pip</strong></div>
      </div>

      <div class="formula">
        <div class="formula-tag">Formula 2 — Profit & Loss Calculation</div>
        <div class="formula-main">
          P&L = (Close Price − Open Price) × Lot Size × 100,000
        </div>
        <div class="formula-note">📌 Buy EUR/USD at 1.0800, close at 1.0900 → 100 pips profit<br>
          P&L = (1.0900 − 1.0800) × 1 lot × 100,000 = <strong style="color:#4ecb9e;">$1,000 profit</strong></div>
        <div class="formula-note" style="margin-top:6px;">📌 Sell GBP/USD at 1.2700, closes at 1.2750 → 50 pips loss<br>
          P&L = (1.2700 − 1.2750) × 0.5 lot × 100,000 = <strong style="color:#f08070;">−$250 loss</strong></div>
      </div>

      <div class="formula">
        <div class="formula-tag">Formula 3 — Required Margin</div>
        <div class="formula-main">
          Margin = (Lot Size × Contract Size × Price) ÷ Leverage<br>
          Margin Level % = (Equity ÷ Used Margin) × 100<br>
          Free Margin = Equity − Used Margin
        </div>
        <div class="formula-note">📌 1 lot EUR/USD @ 1.0850, leverage 1:100:<br>
          Margin = (1 × 100,000 × 1.0850) ÷ 100 = <strong style="color:#d4a843;">$1,085 required</strong></div>
        <div class="formula-note" style="margin-top:6px;">⚠️ Margin Call at ~100% · Stop Out at ~50% (varies by broker)
        </div>
      </div>

      <div class="formula">
        <div class="formula-tag">Formula 4 — Position Size (Risk-Based) — THE MOST IMPORTANT</div>
        <div class="formula-main">
          Lots = (Account Balance × Risk%) ÷ (SL in pips × Pip Value per Lot)
        </div>
        <div class="formula-note">📌 $10,000 account · 1% risk · 50 pip SL · pip value $10/lot (EUR/USD std):<br>
          Risk $ = $10,000 × 0.01 = $100<br>
          Lots = $100 ÷ (50 × $10) = <strong style="color:#4ecb9e;">0.20 lots (2 mini lots)</strong></div>
        <div class="formula-note" style="margin-top:6px;">📌 Never size your position based on "how much you want to
          make" — size it based on how much you can afford to LOSE on this trade.</div>
      </div>

      <div class="formula">
        <div class="formula-tag">Formula 5 — Risk-Reward Ratio (RRR)</div>
        <div class="formula-main">
          RRR = Potential Profit (pips) ÷ Potential Loss (pips)<br>
          <span class="hl2">Minimum acceptable: 1.5:1 · Ideal: 2:1 or 3:1</span>
        </div>
        <div class="formula-note">📌 SL = 30 pips · TP = 90 pips → RRR = 90 ÷ 30 = <strong style="color:#4ecb9e;">3:1
            ✓</strong></div>
        <div class="formula-note">📌 SL = 40 pips · TP = 30 pips → RRR = 30 ÷ 40 = <strong style="color:#f08070;">0.75:1
            ✗ Don't take this trade!</strong></div>
      </div>

      <div class="formula">
        <div class="formula-tag">Formula 6 — System Expectancy</div>
        <div class="formula-main">
          Expectancy = (Win Rate × Avg Win $) − (Loss Rate × Avg Loss $)
        </div>
        <div class="formula-note">📌 60% win rate · Avg win $150 · Avg loss $100:<br>
          Expectancy = (0.60 × 150) − (0.40 × 100) = 90 − 40 = <strong style="color:#4ecb9e;">$50 per trade (positive
            edge!)</strong></div>
        <div class="formula-note" style="margin-top:6px;">📌 40% win rate · 3:1 RRR · $200 avg win · $100 avg loss:<br>
          Expectancy = (0.40 × 200) − (0.60 × 100) = 80 − 60 = <strong style="color:#4ecb9e;">$20 per trade (still
            profitable!)</strong></div>
      </div>

      <div class="formula">
        <div class="formula-tag">Formula 7 — Compound Growth</div>
        <div class="formula-main">
          FV = PV × (1 + r)ⁿ<br>
          <span style="opacity:0.5; font-size:12px;">FV = Future Value · PV = Present Value · r = monthly return · n =
            months</span>
        </div>
        <div class="formula-note">📌 $10,000 at 5% monthly for 12 months:<br>
          FV = 10,000 × (1.05)¹² = <strong style="color:#4ecb9e;">$17,958.56</strong> (+79.6%)</div>
        <div class="formula-note" style="margin-top:6px;">📌 $10,000 at 3% monthly for 24 months:<br>
          FV = 10,000 × (1.03)²⁴ = <strong style="color:#4ecb9e;">$20,327.94</strong> (+103%)</div>
      </div>

      <div class="sub-title">📊 Win Rate vs RRR — Profitability Table</div>
      <p style="font-size:14px; color:var(--text-2); margin-bottom:14px;">You don't need to win every trade. With the
        right RRR, even a 35% win rate can be profitable. This table shows minimum win rate needed to break even.</p>
      <table class="winrate-table">
        <tr>
          <th>Win Rate</th>
          <th>RRR 1:1</th>
          <th>RRR 1.5:1</th>
          <th>RRR 2:1</th>
          <th>RRR 3:1</th>
          <th>RRR 4:1</th>
        </tr>
        <tr>
          <td>35%</td>
          <td class="cell-neg">−$1.50</td>
          <td class="cell-neg">−$0.25</td>
          <td class="cell-pos">+$0.40</td>
          <td class="cell-pos">+$1.20</td>
          <td class="cell-pos">+$2.10</td>
        </tr>
        <tr>
          <td>40%</td>
          <td class="cell-neg">−$2.00</td>
          <td class="cell-pos">+$0.20</td>
          <td class="cell-pos">+$1.20</td>
          <td class="cell-pos">+$2.40</td>
          <td class="cell-pos">+$3.60</td>
        </tr>
        <tr>
          <td>45%</td>
          <td class="cell-neg">−$1.00</td>
          <td class="cell-pos">+$0.93</td>
          <td class="cell-pos">+$2.00</td>
          <td class="cell-pos">+$3.60</td>
          <td class="cell-pos">+$5.10</td>
        </tr>
        <tr>
          <td>50%</td>
          <td class="cell-neutral">$0.00</td>
          <td class="cell-pos">+$1.50</td>
          <td class="cell-pos">+$3.00</td>
          <td class="cell-pos">+$5.00</td>
          <td class="cell-pos">+$7.00</td>
        </tr>
        <tr>
          <td>55%</td>
          <td class="cell-pos">+$1.00</td>
          <td class="cell-pos">+$2.48</td>
          <td class="cell-pos">+$4.00</td>
          <td class="cell-pos">+$6.40</td>
          <td class="cell-pos">+$8.90</td>
        </tr>
        <tr>
          <td>60%</td>
          <td class="cell-pos">+$2.00</td>
          <td class="cell-pos">+$3.40</td>
          <td class="cell-pos">+$5.00</td>
          <td class="cell-pos">+$7.80</td>
          <td class="cell-pos">+$10.80</td>
        </tr>
      </table>
      <p style="font-size:12px; color:var(--text-3); margin-bottom:24px;">Values show net profit per $100 risked over 10
        trades. Green = profitable system.</p>

      <div class="sub-title">🧮 Live Calculators</div>

      <!-- Pip Value Calculator -->
      <div class="calc-box">
        <h3>💱 Pip Value & Profit Calculator</h3>
        <div class="calc-row">
          <span class="calc-label">Currency Pair</span>
          <select class="calc-select" id="c-pair" onchange="calcPip()">
            <option value="1.085">EUR/USD (1.0850)</option>
            <option value="1.27">GBP/USD (1.2700)</option>
            <option value="150">USD/JPY (150.00)</option>
            <option value="0.90">USD/CHF (0.9000)</option>
            <option value="0.65">AUD/USD (0.6500)</option>
            <option value="1.36">GBP/AUD (1.3600)</option>
          </select>
        </div>
        <div class="calc-row">
          <span class="calc-label">Lot Size</span>
          <input class="calc-input" type="number" id="c-lot" value="0.1" step="0.01" min="0.01" oninput="calcPip()">
          <span style="font-size:12px; color:var(--text-3);">0.01=micro · 0.1=mini · 1=standard</span>
        </div>
        <div class="calc-row">
          <span class="calc-label">Pips Moved</span>
          <input class="calc-input" type="number" id="c-pips" value="50" min="1" oninput="calcPip()">
        </div>
        <div class="result-box" id="pip-result">Calculating...</div>
      </div>

      <!-- Position Size Calculator -->
      <div class="calc-box">
        <h3>🛡️ Position Size Calculator (Risk-Based)</h3>
        <div class="calc-row"><span class="calc-label">Account Balance ($)</span><input class="calc-input" type="number"
            id="p-bal" value="10000" oninput="calcPos()"></div>
        <div class="calc-row"><span class="calc-label">Risk Per Trade (%)</span><input class="calc-input" type="number"
            id="p-risk" value="1" step="0.5" min="0.1" max="10" oninput="calcPos()"></div>
        <div class="calc-row"><span class="calc-label">Stop Loss (pips)</span><input class="calc-input" type="number"
            id="p-sl" value="30" min="1" oninput="calcPos()"></div>
        <div class="result-box" id="pos-result">Calculating...</div>
      </div>

      <!-- Compound Growth -->
      <div class="calc-box">
        <h3>📈 Compound Growth Table</h3>
        <div class="calc-row"><span class="calc-label">Starting Capital ($)</span><input class="calc-input"
            type="number" id="g-cap" value="10000" oninput="calcGrowth()"></div>
        <div class="calc-row"><span class="calc-label">Monthly Return (%)</span><input class="calc-input" type="number"
            id="g-ret" value="5" step="0.5" min="0.5" oninput="calcGrowth()"></div>
        <div id="growth-table-wrap" style="overflow-x:auto; margin-top:14px;"></div>
      </div>
    </div>


    <script>
         // ── Compound Growth Table ──
    function calcGrowth() {
      const cap = parseFloat(document.getElementById('g-cap').value) || 10000;
      const ret = parseFloat(document.getElementById('g-ret').value) || 5;
      let html = '<table class="growth-table"><tr><th>Month</th><th>Balance</th><th>Monthly Profit</th><th>Total Growth</th><th style="width:180px">Progress</th></tr>';
      let bal = cap; const maxBal = cap * Math.pow(1 + ret / 100, 12);
      for (let m = 1; m <= 12; m++) {
        const prev = bal; bal = bal * (1 + ret / 100);
        const monthly = bal - prev;
        const growth = ((bal - cap) / cap * 100);
        const barW = Math.round((bal / maxBal) * 100);
        html += '<tr><td>Month ' + m + '</td><td style="font-weight:600; color:var(--teal);">$' + bal.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ',') + '</td><td style="color:var(--teal);">+$' + monthly.toFixed(0) + '</td><td>+' + growth.toFixed(1) + '%</td><td class="growth-bar-cell"><div class="growth-bar" style="width:' + barW + '%"></div></td></tr>';
      }
      html += '</table><p style="font-size:12px; color:var(--text-3); margin-top:6px;">Final balance after 12 months: <strong>$' + bal.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',') + '</strong> at ' + ret + '% monthly.</p>';
      document.getElementById('growth-table-wrap').innerHTML = html;
    }
    </script>
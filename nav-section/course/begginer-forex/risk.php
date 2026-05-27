   
   
   
   
   <!-- ═══════════════ RISK ═══════════════ -->
    <div id="sec-risk" class="sec">
      <div class="sec-title">🛡️ Risk Management — The Foundation of Success</div>
      <p class="sec-desc">90% of retail traders lose money. The majority of those losses are due to poor risk management
        — not bad strategies. This module will save your account.</p>

      <div class="stat-grid">
        <div class="stat-card">
          <div class="stat-label">Rule #1 — Max Risk</div>
          <div class="stat-val" style="color:var(--teal);">1–2%</div>
          <div class="stat-sub">Per trade of total account</div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Rule #2 — Minimum RRR</div>
          <div class="stat-val" style="color:var(--gold);">1:2</div>
          <div class="stat-sub">Reward-to-Risk per trade</div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Rule #3 — Daily Drawdown</div>
          <div class="stat-val" style="color:var(--red);">5–6%</div>
          <div class="stat-sub">Stop trading for the day if hit</div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Rule #4 — Always</div>
          <div class="stat-val" style="font-size:22px;">SL First</div>
          <div class="stat-sub">Place stop loss before entry</div>
        </div>
      </div>

      <div class="sub-title">📉 Drawdown & Recovery Math</div>
      <div class="formula">
        <div class="formula-tag">Recovery Formula — Why protecting capital is CRITICAL</div>
        <div class="formula-main">
          Recovery % = Loss% ÷ (1 − Loss%) × 100
        </div>
        <div class="formula-note">
          Lose 10% → need <strong style="color:#4ecb9e;">11.1%</strong> to recover &nbsp;|&nbsp;
          Lose 25% → need <strong style="color:#d4a843;">33.3%</strong> to recover<br>
          Lose 50% → need <strong style="color:#f08070;">100%</strong> to recover &nbsp;|&nbsp;
          Lose 75% → need <strong style="color:#e05240;">300%</strong> to recover ⚠️<br>
          <strong style="color:#e05240;">The math is brutal. Small losses are easy to recover. Big losses can
            permanently end your trading career.</strong>
        </div>
      </div>

      <div class="sub-title">🎚️ Risk Simulator — Interactive</div>
      <div class="calc-box">
        <div class="slider-wrap">
          <div class="slider-label-row"><span class="slider-label">Account Size ($)</span><span class="slider-val"
              id="s-acc-val">$10,000</span></div><input type="range" min="500" max="100000" step="500" value="10000"
            id="s-acc" oninput="updateSim()">
        </div>
        <div class="slider-wrap">
          <div class="slider-label-row"><span class="slider-label">Risk Per Trade (%)</span><span class="slider-val"
              id="s-risk-val">1%</span></div><input type="range" min="0.5" max="15" step="0.5" value="1" id="s-risk"
            oninput="updateSim()">
        </div>
        <div class="slider-wrap">
          <div class="slider-label-row"><span class="slider-label">Consecutive Losses</span><span class="slider-val"
              id="s-loss-val">5</span></div><input type="range" min="1" max="20" step="1" value="5" id="s-loss"
            oninput="updateSim()">
        </div>
        <div style="margin-top:16px;">
          <div
            style="display:flex; justify-content:space-between; font-size:13px; color:var(--text-2); margin-bottom:6px;">
            <span>Account remaining</span><span id="s-remain" style="font-weight:600;">$9,510</span></div>
          <div class="risk-track">
            <div class="risk-fill rf-safe" id="s-bar" style="width:95%"></div>
          </div>
          <div style="display:flex; justify-content:space-between; font-size:12px; color:var(--text-3);">
            <span>Drawdown</span><span id="s-dd">4.9%</span></div>
        </div>
        <div class="result-box" id="s-verdict" style="margin-top:12px;">Loading…</div>
      </div>

      <div class="sub-title">🎯 Stop Loss Placement Strategies</div>
      <ul class="blist">
        <li><span class="bi">📏</span>
          <div><strong>ATR-Based SL</strong> — Place SL at 1.5–2× ATR(14) from your entry price. This adapts to current
            market volatility automatically. <em>Formula: SL = Entry ± (1.5 × ATR)</em></div>
        </li>
        <li><span class="bi">🏗️</span>
          <div><strong>Structure-Based SL</strong> — Place SL just below the last significant swing low (for buy trades)
            or above the last swing high (for sell trades). This is the most logical placement — if structure breaks,
            your thesis is wrong.</div>
        </li>
        <li><span class="bi">🔄</span>
          <div><strong>Trailing Stop</strong> — Move SL by a fixed pip amount or % as price moves in your favour. Allows
            you to "let winners run" while protecting accumulated profits.</div>
        </li>
        <li><span class="bi">⚖️</span>
          <div><strong>Break-Even Stop</strong> — Once your trade is +1R (full risk amount) in profit, move SL to your
            entry price. Now you have a "free trade" — worst case is breakeven. Best practice for all trades.</div>
        </li>
        <li><span class="bi">🚫</span>
          <div><strong style="color:var(--red);">NEVER Move SL Further Away</strong> — The #1 mistake of losing traders.
            If price is approaching your SL, do NOT widen it. Accept the loss. Widening SL destroys all risk management
            logic.</div>
        </li>
      </ul>

      <div class="sub-title">🔗 Currency Correlations — Hidden Risk</div>
      <div class="info-grid">
        <div class="info-card">
          <div class="info-head">⬆️ Positive Correlation (move together)</div>
          <div class="info-body"><span class="tag ta">EUR/USD ↔ GBP/USD</span><span class="tag ta">AUD/USD ↔
              NZD/USD</span><span class="tag ta">EUR/USD ↔ AUD/USD</span><br><br>Trading both simultaneously = double
            your actual risk exposure. If you buy EUR/USD AND GBP/USD, you effectively have a 4% risk if you sized each
            at 2%.</div>
        </div>
        <div class="info-card">
          <div class="info-head">⬇️ Negative Correlation (move opposite)</div>
          <div class="info-body"><span class="tag tb">EUR/USD ↔ USD/CHF</span><span class="tag tb">AUD/USD ↔
              USD/JPY</span><span class="tag tb">GBP/USD ↔ USD/CAD</span><br><br>These pairs move in opposite
            directions. Buying both simultaneously creates a natural hedge — but also reduces net profit potential. Use
            for hedging strategies.</div>
        </div>
      </div>

      <div class="sub-title">📋 Pre-Trade Checklist</div>
      <div class="checklist" id="checklist">
        <p style="font-size:13px; color:var(--text-2); margin-bottom:16px;">Complete ALL 7 items before entering any
          trade. If you can't check all boxes — <strong>do not trade</strong>.</p>
        <div class="check-item" onclick="toggleCheck(this)">
          <div class="chk"><svg id="c1" width="14" height="14" viewBox="0 0 14 14" fill="none"></svg></div><span
            class="chk-label">My setup matches my written trading plan exactly</span>
        </div>
        <div class="check-item" onclick="toggleCheck(this)">
          <div class="chk"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"></svg></div><span
            class="chk-label">I have placed (or mentally confirmed) my Stop Loss level</span>
        </div>
        <div class="check-item" onclick="toggleCheck(this)">
          <div class="chk"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"></svg></div><span
            class="chk-label">Risk is ≤ 2% of my account balance on this trade</span>
        </div>
        <div class="check-item" onclick="toggleCheck(this)">
          <div class="chk"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"></svg></div><span
            class="chk-label">Risk-Reward Ratio is at least 1:1.5 or better</span>
        </div>
        <div class="check-item" onclick="toggleCheck(this)">
          <div class="chk"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"></svg></div><span
            class="chk-label">I am NOT trading out of boredom, revenge, or FOMO</span>
        </div>
        <div class="check-item" onclick="toggleCheck(this)">
          <div class="chk"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"></svg></div><span
            class="chk-label">No high-impact news event within the next 30 minutes</span>
        </div>
        <div class="check-item" onclick="toggleCheck(this)">
          <div class="chk"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"></svg></div><span
            class="chk-label">I have checked correlated pairs — no double risk exposure</span>
        </div>
        <div class="check-score" id="chk-score">Checked: 0 / 7</div>
      </div>
    </div>

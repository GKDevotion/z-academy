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

 
    /* ── STAT CARDS ── */
    .stat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 14px;
      margin-bottom: 28px;
    }

    .stat-card {
      background: var(--white);
      border-radius: 12px;
      border: 1px solid var(--border);
      padding: 18px 20px;
      box-shadow: var(--shadow);
    }

    .stat-label {
      font-size: 11px;
      color: var(--text-3);
      text-transform: uppercase;
      letter-spacing: 0.06em;
      margin-bottom: 6px;
    }

    .stat-val {
      font-family: 'Playfair Display', serif;
      font-size: 28px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 4px;
    }

    .stat-sub {
      font-size: 12px;
      color: var(--text-2);
    }

    /* ── INFO GRID ── */
    .info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
      margin-bottom: 24px;
    }

    @media(max-width:600px) {
      .info-grid {
        grid-template-columns: 1fr;
      }
    }

    .info-card {
      background: var(--white);
      border-radius: 12px;
      border: 1px solid var(--border);
      padding: 16px 18px;
    }

    .info-head {
      font-size: 12px;
      font-weight: 600;
      color: var(--text-3);
      text-transform: uppercase;
      letter-spacing: 0.06em;
      margin-bottom: 8px;
    }

    .info-body {
      font-size: 14px;
      color: var(--text);
      line-height: 1.7;
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





<!-- ═══════════════ CHARTS ═══════════════ -->
    <div id="sec-charts" class="sec">
      <div class="sec-title">🕯️ Candlesticks & Chart Analysis</div>
      <p class="sec-desc">Reading price action is the foundation of all technical analysis. Master candlesticks before
        adding any indicator.</p>

      <div class="sub-title">🕯️ Anatomy of a Candlestick</div>
      <div class="candle-demo">
        <!-- Bullish Candle -->
        <div class="candle-figure">
          <div class="candle-label">Bullish Candle</div>
          <div class="candle-body">
            <div class="wick" style="height:24px;"></div>
            <div class="body-rect bull-body" style="height:60px;"></div>
            <div class="wick" style="height:16px;"></div>
          </div>
          <div class="candle-info">
            <div class="ci-title" style="color:#4ecb9e;">Green = Bullish</div>
            <div class="ci-desc">Close &gt; Open<br>Buyers in control</div>
          </div>
        </div>
        <!-- Bearish Candle -->
        <div class="candle-figure">
          <div class="candle-label">Bearish Candle</div>
          <div class="candle-body">
            <div class="wick" style="height:20px;"></div>
            <div class="body-rect bear-body" style="height:60px;"></div>
            <div class="wick" style="height:28px;"></div>
          </div>
          <div class="candle-info">
            <div class="ci-title" style="color:#f08070;">Red = Bearish</div>
            <div class="ci-desc">Close &lt; Open<br>Sellers in control</div>
          </div>
        </div>
        <!-- Labels -->
        <div style="color:rgba(255,255,255,0.7); font-size:13px; line-height:2;">
          <div><span style="color:var(--gold);">▲ Upper Wick</span> = Rejection of high prices</div>
          <div><span style="color:var(--gold);">▬ Body</span> = Range between Open & Close</div>
          <div><span style="color:var(--gold);">▼ Lower Wick</span> = Rejection of low prices</div>
          <div style="margin-top:10px; font-size:12px; opacity:0.6;">High · Open/Close · Open/Close · Low</div>
        </div>
      </div>

      <div class="sub-title">📊 Key Candlestick Patterns</div>
      <div class="info-grid">
        <div class="info-card" style="border-left:4px solid var(--teal);">
          <div class="info-head" style="color:var(--teal);">🟢 Bullish Reversal Patterns</div>
          <div class="info-body">
            <strong>🔨 Hammer</strong> — Long lower wick, small body at top. Buyers rejected lower prices. Strong
            bullish signal at support.<br><br>
            <strong>⭐ Morning Star</strong> — 3-candle: bearish, doji/small, strong bullish. Major reversal at
            bottoms.<br><br>
            <strong>↑ Bullish Engulfing</strong> — Large green candle completely engulfs previous red candle. Momentum
            shift.<br><br>
            <strong>↩ Piercing Line</strong> — Green candle closes above 50% of the previous red candle's body.
          </div>
        </div>
        <div class="info-card" style="border-left:4px solid var(--red);">
          <div class="info-head" style="color:var(--red);">🔴 Bearish Reversal Patterns</div>
          <div class="info-body">
            <strong>💫 Shooting Star</strong> — Long upper wick, small body at bottom. Buyers failed to hold highs.
            Bearish at resistance.<br><br>
            <strong>⭐ Evening Star</strong> — 3-candle: bullish, doji/small, strong bearish. Major reversal at
            tops.<br><br>
            <strong>↓ Bearish Engulfing</strong> — Large red candle completely engulfs previous green candle.<br><br>
            <strong>🧟 Hanging Man</strong> — Same shape as hammer but appears at the TOP of an uptrend. Bearish
            warning.
          </div>
        </div>
        <div class="info-card" style="border-left:4px solid var(--blue);">
          <div class="info-head" style="color:var(--blue);">↔ Continuation Patterns</div>
          <div class="info-body">
            <strong>Inside Bar</strong> — Current bar entirely within the previous bar's range. Consolidation before
            continuation.<br><br>
            <strong>Three White Soldiers</strong> — 3 consecutive large green candles with higher closes. Strong uptrend
            continuation.<br><br>
            <strong>Three Black Crows</strong> — 3 consecutive large red candles. Strong downtrend continuation.<br><br>
            <strong>Marubozu</strong> — Full body candle, no wicks. Pure momentum, no hesitation.
          </div>
        </div>
        <div class="info-card" style="border-left:4px solid var(--gold);">
          <div class="info-head" style="color:var(--gold);">⚖️ Indecision Patterns</div>
          <div class="info-body">
            <strong>Doji</strong> — Open = Close. Bulls and bears in perfect equilibrium. Context is key: at support =
            bullish signal, at resistance = bearish signal.<br><br>
            <strong>Spinning Top</strong> — Small body, long wicks both sides. Market uncertain. Wait for
            confirmation.<br><br>
            <strong>Long-Legged Doji</strong> — Extreme uncertainty. Major reversal often follows at key levels.
          </div>
        </div>
      </div>

      <div class="sub-title">📉 Classic Chart Patterns</div>
      <div class="info-grid">
        <div class="info-card">
          <div class="info-head">🔺 Head & Shoulders (Bearish reversal)</div>
          <div class="info-body">Left shoulder → Higher head → Right shoulder (lower). Break of neckline = sell signal.
            Target = distance from head to neckline.</div>
        </div>
        <div class="info-card">
          <div class="info-head">🔻 Inverse H&S (Bullish reversal)</div>
          <div class="info-body">Mirror of H&S. Formed at market bottoms. Break of neckline = buy signal. Same target
            measurement applies.</div>
        </div>
        <div class="info-card">
          <div class="info-head">💎 Double Top / Double Bottom</div>
          <div class="info-body">Two equal highs (top = bearish reversal) or two equal lows (bottom = bullish reversal).
            Confirmation on neckline break.</div>
        </div>
        <div class="info-card">
          <div class="info-head">📐 Triangles</div>
          <div class="info-body"><strong>Ascending</strong> = bullish (flat top, rising bottom) ·
            <strong>Descending</strong> = bearish (flat bottom, falling top) · <strong>Symmetrical</strong> = neutral,
            direction determined by breakout.</div>
        </div>
        <div class="info-card">
          <div class="info-head">🚩 Flags & Pennants</div>
          <div class="info-body">Continuation patterns after a strong move (the "flagpole"). Brief consolidation, then
            breakout in the same direction. Target = height of the flagpole.</div>
        </div>
        <div class="info-card">
          <div class="info-head">📦 Rectangle / Range</div>
          <div class="info-body">Price oscillates between clear support and resistance. Trade: buy at support, sell at
            resistance, OR trade the breakout with high volume.</div>
        </div>
      </div>

      <div class="sub-title">📏 Support, Resistance & Trend Lines</div>
      <ul class="blist">
        <li><span class="bi">💚</span>
          <div><strong>Support</strong> — A price level where demand has historically been strong enough to prevent
            price from falling further. The more times it holds, the stronger it is. "Support is where buyers live."
          </div>
        </li>
        <li><span class="bi">❤️</span>
          <div><strong>Resistance</strong> — A price level where supply has historically exceeded demand, preventing
            price from rising further. "Resistance is where sellers live."</div>
        </li>
        <li><span class="bi">📈</span>
          <div><strong>Trend Line</strong> — Connect at least 3 swing lows (uptrend) or 3 swing highs (downtrend). The
            more touches, the more significant. A break of a major trend line is a major signal.</div>
        </li>
        <li><span class="bi">🔄</span>
          <div><strong>Support Becomes Resistance</strong> — After a level breaks, roles reverse. Old support becomes
            new resistance (and vice versa). This is called "role reversal" and is one of the most powerful setups in
            forex.</div>
        </li>
        <li><span class="bi">🏔️</span>
          <div><strong>Key Levels</strong> — Previous day/week/month highs and lows, psychological round numbers
            (1.1000, 1.2000), and 52-week highs/lows are all critical levels to mark on your chart.</div>
        </li>
      </ul>
    </div>

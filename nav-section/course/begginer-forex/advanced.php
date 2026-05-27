    <!-- ═══════════════ ADVANCED ═══════════════ -->
    <div id="sec-advanced" class="sec">
      <div class="sec-title">🚀 Advanced Concepts — Smart Money & Institutional Trading</div>
      <p class="sec-desc">This is where most retail traders fail — they use retail tools to fight institutional players.
        Learn to read the same chart the banks use.</p>

      <div class="sub-title">🏦 Market Structure & Smart Money Concepts</div>
      <div class="info-grid">
        <div class="info-card">
          <div class="info-head">Break of Structure (BOS)</div>
          <div class="info-body">Price breaks a key swing high (in uptrend) or swing low (in downtrend), signalling
            trend continuation. This confirms that the current trend is still intact. Strong entry signal in direction
            of trend.</div>
        </div>
        <div class="info-card">
          <div class="info-head">Change of Character (CHoCH)</div>
          <div class="info-body">The first BOS against the current trend direction. Early signal of potential trend
            reversal. Risky to trade alone — wait for confirmation via structure or order block retest.</div>
        </div>
        <div class="info-card">
          <div class="info-head">Order Blocks (OB)</div>
          <div class="info-body">The last bearish candle before a significant bullish move = <em>Bullish Order
              Block</em>. Institutions leave pending orders here. When price revisits these zones, expect strong
            reactions. High-probability entry zones.</div>
        </div>
        <div class="info-card">
          <div class="info-head">Fair Value Gap (FVG)</div>
          <div class="info-body">A 3-candle imbalance where price moved so fast it left a "gap" in price delivery. Price
            tends to revisit and fill these gaps before continuing. Found using: candle 1 high/low vs candle 3 high/low.
          </div>
        </div>
        <div class="info-card">
          <div class="info-head">Liquidity Zones</div>
          <div class="info-body">Areas above/below swing highs/lows where retail stop losses cluster. Smart money
            "hunts" this liquidity before reversing. Equal highs/lows are prime liquidity targets.</div>
        </div>
        <div class="info-card">
          <div class="info-head">Premium & Discount</div>
          <div class="info-body">Smart money buys at discount (below equilibrium/50%) and sells at premium (above
            equilibrium). Use the 50% level of a swing to determine if price is at fair value, discount, or premium.
          </div>
        </div>
      </div>

      <div class="sub-title">📐 Advanced Formulas</div>
      <div class="formula">
        <div class="formula-tag">Sharpe Ratio — Quality of Returns Adjusted for Risk</div>
        <div class="formula-main">
          Sharpe = (Rp − Rf) ÷ σp<br>
          <span style="opacity:0.5; font-size:12px;">Rp = Portfolio return · Rf = Risk-free rate · σp = Standard
            deviation of returns</span>
        </div>
        <div class="formula-note">
          Sharpe > 1.0 = Good &nbsp;|&nbsp; Sharpe > 2.0 = Excellent &nbsp;|&nbsp; Sharpe < 0.5=Avoid<br>
            📌 Example: Strategy returns 24% annually, std dev 15%, risk-free rate 4%:<br>
            Sharpe = (0.24 − 0.04) ÷ 0.15 = <strong style="color:#4ecb9e;">1.33 (Good)</strong>
        </div>
      </div>

      <div class="formula">
        <div class="formula-tag">Kelly Criterion — Optimal Position Sizing</div>
        <div class="formula-main">
          f* = W − [(1 − W) ÷ R]<br>
          <span style="opacity:0.5; font-size:12px;">W = Win rate (decimal) · R = Average win ÷ Average loss (Win/Loss
            ratio)</span>
        </div>
        <div class="formula-note">
          📌 60% win rate, 2:1 RRR:<br>
          f* = 0.60 − [(1 − 0.60) ÷ 2] = 0.60 − 0.20 = <strong style="color:#4ecb9e;">40% of capital</strong><br>
          <span style="color:#f08070;">⚠️ Use Half-Kelly (20%) in live trading to reduce volatility and protect against
            estimate errors</span>
        </div>
      </div>

      <div class="formula">
        <div class="formula-tag">ATR — Dynamic Volatility Stop Loss</div>
        <div class="formula-main">
          ATR(n) = (1/n) × Σ TR<br>
          TR = Max[(H − L), |H − Cp|, |L − Cp|]<br>
          <span style="opacity:0.5; font-size:12px;">H = High · L = Low · Cp = Previous Close · n = period (14
            standard)</span>
        </div>
        <div class="formula-note">
          📌 SL Placement: Entry ± (1.5 × ATR14)<br>
          📌 EUR/USD ATR14 = 80 pips → SL = 1.5 × 80 = <strong style="color:#d4a843;">120 pips from entry</strong>
        </div>
      </div>

      <div class="formula">
        <div class="formula-tag">Fibonacci Retracement Levels</div>
        <div class="formula-main">
          Key levels: 23.6% · 38.2% · 50% · <span class="hl">61.8% (Golden Ratio)</span> · 78.6%<br>
          Level price = Swing High − (Fib% × (Swing High − Swing Low))
        </div>
        <div class="formula-note">
          📌 Swing High: 1.2000 · Swing Low: 1.1000 · Range = 0.1000<br>
          61.8% = 1.2000 − (0.618 × 0.1000) = <strong style="color:#4ecb9e;">1.1382</strong><br>
          38.2% = 1.2000 − (0.382 × 0.1000) = <strong style="color:#d4a843;">1.1618</strong>
        </div>
      </div>

      <div class="sub-title">🔭 Advanced Market Analysis Tools</div>
      <div class="adv-grid">
        <div class="adv-card">
          <div class="adv-label">COT Report</div>
          <div class="adv-val">Commitment of Traders</div>
          <div class="adv-desc">Released weekly by CFTC. Shows what institutional traders (Commercials, Large
            Speculators, Small Speculators) are holding. Contrarian signal at extreme positioning.</div>
        </div>
        <div class="adv-card">
          <div class="adv-label">Intermarket Analysis</div>
          <div class="adv-val">Gold · Oil · Bonds</div>
          <div class="adv-desc">Gold↑ → USD↓ typically. Oil↑ → CAD↑ (Canada exports). US10Y yield rises → USD↑. Risk-on:
            equities↑ → AUD, NZD up. Risk-off: JPY, CHF, Gold up.</div>
        </div>
        <div class="adv-card">
          <div class="adv-label">DXY Index</div>
          <div class="adv-val">USD Dollar Basket</div>
          <div class="adv-desc">Measures USD strength vs basket of 6 currencies (EUR 57.6%, JPY 13.6%, GBP 11.9%, CAD
            9.1%, SEK 4.2%, CHF 3.6%). DXY↑ → EUR/USD, GBP/USD, AUD/USD likely down.</div>
        </div>
        <div class="adv-card">
          <div class="adv-label">Economic Calendar</div>
          <div class="adv-val">NFP · CPI · FOMC</div>
          <div class="adv-desc">High-impact events cause big moves in seconds. NFP (first Friday monthly), CPI
            (monthly), FOMC rates (8× per year), GDP quarterly. Widen SL or stay out before releases.</div>
        </div>
        <div class="adv-card">
          <div class="adv-label">Market Profile</div>
          <div class="adv-val">Volume at Price</div>
          <div class="adv-desc">Shows where most trading volume occurred (Point of Control / POC). Price tends to
            revisit high-volume nodes. Low-volume zones are "air pockets" where price moves fast.</div>
        </div>
        <div class="adv-card">
          <div class="adv-label">Order Flow</div>
          <div class="adv-val">DOM / Footprint</div>
          <div class="adv-desc">Real-time view of buy/sell orders. Shows imbalances between aggressive buyers and
            sellers. Used by professional intraday traders for precise entries.</div>
        </div>
      </div>

      <div class="sub-title">🏆 The Professional 6-Step Trading Process</div>
      <ol class="steps">
        <li class="step-item">
          <div class="step-num">1</div>
          <div class="step-text"><strong>Top-Down Analysis</strong> — Start on Monthly/Weekly chart to define the macro
            trend. Drop to Daily for structure. H4 for key levels. H1/M15 for entry trigger. Never trade against the
            higher timeframe trend.</div>
        </li>
        <li class="step-item">
          <div class="step-num">2</div>
          <div class="step-text"><strong>Identify Key Levels</strong> — Mark Support/Resistance, Order Blocks, Fair
            Value Gaps, previous week highs/lows, psychological round numbers. These are your trade zones, not random
            entries.</div>
        </li>
        <li class="step-item">
          <div class="step-num">3</div>
          <div class="step-text"><strong>Wait for Confluence</strong> — The best trades have 3+ factors aligning: key
            level + trend direction + candlestick signal + indicator confirmation. Patience is the edge. Most traders
            fail because they trade every setup.</div>
        </li>
        <li class="step-item">
          <div class="step-num">4</div>
          <div class="step-text"><strong>Execute with Precision</strong> — Limit order at zone (not market order). SL
            placed below/above structure (not random pips). TP at next key level. Calculate exact lot size using the
            position size formula.</div>
        </li>
        <li class="step-item">
          <div class="step-num">5</div>
          <div class="step-text"><strong>Manage the Trade</strong> — Move SL to break-even when trade is +1R in profit.
            Partial close at first TP, let remainder run. Do NOT watch every tick — set alerts and walk away.</div>
        </li>
        <li class="step-item">
          <div class="step-num">6</div>
          <div class="step-text"><strong>Record & Review</strong> — Journal every trade: screenshot, entry/exit
            reasoning, emotional state, outcome. Review weekly. Review monthly. Your journal is your trading education —
            no coach can replace it.</div>
        </li>
      </ol>

      <div class="sub-title">📚 Advanced: Multiple Timeframe Analysis</div>
      <div class="info-grid">
        <div class="info-card">
          <div class="info-head">Monthly/Weekly — The Big Picture</div>
          <div class="info-body">Define the macro trend. Where is price in the major swing? Key support/resistance from
            here are the most important levels in the market. Never ignore the higher timeframe context.</div>
        </div>
        <div class="info-card">
          <div class="info-head">Daily — The Battlefield</div>
          <div class="info-body">Identify the current structure: higher highs/higher lows (uptrend) or lower highs/lower
            lows (downtrend). Daily S/R levels are watched by all institutional traders globally.</div>
        </div>
        <div class="info-card">
          <div class="info-head">H4 — The Strategy</div>
          <div class="info-body">This is where you plan your trade. Identify the specific zone to trade from (order
            block, FVG, S/R flip). Determine your bias — are you buying or selling at this level?</div>
        </div>
        <div class="info-card">
          <div class="info-head">H1/M15 — The Trigger</div>
          <div class="info-body">This is where you enter. Wait for BOS, CHoCH, engulfing candle, or pin bar at the H4
            zone. This entry timeframe gives precision — tighter SL, better RRR.</div>
        </div>
      </div>

      <div class="divider"></div>
      <div style="background:var(--navy); border-radius:14px; padding:24px 28px; text-align:center;">
        <div
          style="font-family:'Playfair Display',serif; font-size:22px; font-weight:700; color:var(--gold-light); margin-bottom:8px;">
          The Trading Mindset</div>
        <div style="font-size:15px; color:rgba(255,255,255,0.75); line-height:1.8; max-width:600px; margin:0 auto;">
          "Your edge isn't your indicator or your pattern — it's your ability to execute the same process 100 times
          consistently, despite losses, despite boredom, despite the inevitable streaks. The market doesn't reward
          brilliance. It rewards discipline."
        </div>
        <div style="margin-top:16px; display:flex; justify-content:center; flex-wrap:wrap; gap:8px;">
          <span class="tag tg">📓 Journal every trade</span>
          <span class="tag tg">🔄 Execute the process</span>
          <span class="tag tg">📊 Review weekly</span>
          <span class="tag tg">🛡️ Protect capital first</span>
          <span class="tag tg">🎯 Trust the edge</span>
        </div>
      </div>
    </div>

  </div><!-- /sections -->

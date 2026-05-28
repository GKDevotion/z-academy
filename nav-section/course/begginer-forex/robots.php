 <!-- ═══════════════ AI & ROBOTS ═══════════════ -->
    <div id="sec-ai" class="sec">
      <div class="sec-title">🤖 AI Trading & Expert Advisors (EAs)</div>
      <p class="sec-desc">Algorithmic trading removes emotion, fatigue and hesitation from your trading. EAs execute
        your strategy perfectly — 24 hours a day, 5 days a week.</p>

      <div class="sub-title">🧠 What is Algorithmic Trading?</div>
      <div class="info-grid">
        <div class="info-card">
          <div class="info-head">Expert Advisor (EA)</div>
          <div class="info-body">Programs written in MQL5 that automatically analyze the market and execute trades based
            on defined logic. No emotion, no fatigue, no hesitation. Attach to any MT5 chart.</div>
        </div>
        <div class="info-card">
          <div class="info-head">Benefits vs Manual Trading</div>
          <div class="info-body">✅ Executes in milliseconds<br>✅ Never misses a signal<br>✅ No emotional decisions<br>✅
            Runs 24/5 even while you sleep<br>✅ Fully backtestable</div>
        </div>
        <div class="info-card">
          <div class="info-head">Risks to Know</div>
          <div class="info-body">⚠️ Over-optimization (curve fitting)<br>⚠️ Market condition changes break EAs<br>⚠️
            Requires VPS for 24/5 running<br>⚠️ Bugs can cause large losses<br>⚠️ Past backtest ≠ future results</div>
        </div>
        <div class="info-card">
          <div class="info-head">Getting Started</div>
          <div class="info-body">1. Learn MQL5 basics in MetaEditor<br>2. Start with simple MA crossover EA<br>3.
            Backtest on 5+ years of data<br>4. Forward test on demo for 3 months<br>5. Deploy on VPS with small live
            account</div>
        </div>
      </div>

      <div class="sub-title">💻 EA Architecture — How a Robot Thinks</div>
      <div class="code-block">
        <span class="cc">// Simplified EA structure in MQL5 (EMA Crossover + RSI Filter)</span>
        <span class="ck">OnTick</span>() { <span class="cc">// Runs on every price tick</span>

        <span class="ck">double</span> ema20 = <span class="cs">iMA</span>(Symbol(), 0, 20, 0, MODE_EMA, PRICE_CLOSE);
        <span class="ck">double</span> ema50 = <span class="cs">iMA</span>(Symbol(), 0, 50, 0, MODE_EMA, PRICE_CLOSE);
        <span class="ck">double</span> rsi14 = <span class="cs">iRSI</span>(Symbol(), 0, 14, PRICE_CLOSE);

        <span class="cc">// BUY SIGNAL: EMA20 crosses above EMA50 + RSI above 50</span>
        <span class="ck">if</span> (ema20 > ema50 && rsi14 > 50 && !positionOpen) {
        lotSize = <span class="cs">calcLotSize</span>(AccountBalance(), riskPct, slPips);
        sl = Ask - slPips * Point;
        tp = Ask + tpPips * Point;
        <span class="cs">OrderSend</span>(Symbol(), OP_BUY, lotSize, Ask, 3, sl, tp);
        }

        <span class="cc">// SELL SIGNAL: EMA20 crosses below EMA50 + RSI below 50</span>
        <span class="ck">if</span> (ema20 < ema50 && rsi14 < 50 && !positionOpen) { sl=Bid + slPips * Point; tp=Bid -
          tpPips * Point; <span class="cs">OrderSend</span>(Symbol(), OP_SELL, lotSize, Bid, 3, sl, tp);
          }
          }

          <span class="cc">// Risk-based lot size calculation</span>
          <span class="ck">double</span> <span class="cs">calcLotSize</span>(<span class="ck">double</span> balance,
          <span class="ck">double</span> riskPct, <span class="ck">int</span> slPips) {
          <span class="ck">double</span> riskAmount = balance * riskPct / 100;
          <span class="ck">return</span> riskAmount / (slPips * <span class="cv">PipValue()</span>);
          }
      </div>

      <div class="sub-title">🏗️ EA Strategy Types</div>
      <div class="mt5-grid">
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">📈</span>Trend Following</div>
          <div class="mt5-desc">MA crossovers, MACD signals. Rides momentum. Works best in trending markets (avoid
            during chop).</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">↔️</span>Mean Reversion</div>
          <div class="mt5-desc">RSI extremes, Bollinger Band bounces. Profits in ranging sideways markets. Fails during
            breakouts.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">⚡</span>Scalping EAs</div>
          <div class="mt5-desc">Dozens of trades/day targeting 5–15 pips. Needs low spread, fast execution and VPS with
            low latency.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">📰</span>News/Event EAs</div>
          <div class="mt5-desc">Trade around scheduled events (NFP, CPI). Place pending orders before release. High
            risk, high reward.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">🔲</span>Grid EA</div>
          <div class="mt5-desc">Places orders at fixed intervals above and below current price. VERY dangerous without
            hard stop loss. Can blow accounts.</div>
        </div>
        <div class="mt5-card">
          <div class="mt5-title"><span class="mt5-icon">🧠</span>AI / ML Models</div>
          <div class="mt5-desc">LSTM neural networks, Random Forest. Train on price data using Python + MT5 bridge.
            Research-grade tools.</div>
        </div>
      </div>

      <div class="sub-title">✅ Backtesting Checklist</div>
      <ol class="steps">
        <li class="step-item">
          <div class="step-num">1</div>
          <div class="step-text"><strong>Use 99% quality tick data</strong> — Download from Dukascopy or Tickstory.
            Default MT5 data is insufficient for reliable backtesting.</div>
        </li>
        <li class="step-item">
          <div class="step-num">2</div>
          <div class="step-text"><strong>Test 5+ years minimum</strong> — Include bull, bear and sideways markets. One
            market condition is not enough to validate a strategy.</div>
        </li>
        <li class="step-item">
          <div class="step-num">3</div>
          <div class="step-text"><strong>Key metrics to check</strong> — Profit Factor > 1.5 · Max Drawdown < 20% ·
              Sharpe Ratio> 1.0 · Win Rate > 40% · Recovery Factor > 3</div>
        </li>
        <li class="step-item">
          <div class="step-num">4</div>
          <div class="step-text"><strong>Avoid curve-fitting/overfitting</strong> — If you over-optimize parameters, the
            EA will only work on historical data and fail live. Use walk-forward analysis.</div>
        </li>
        <li class="step-item">
          <div class="step-num">5</div>
          <div class="step-text"><strong>Forward test on demo</strong> — After backtesting, run the EA on a live demo
            account for 3 months. Only then consider going live.</div>
        </li>
        <li class="step-item">
          <div class="step-num">6</div>
          <div class="step-text"><strong>Deploy on VPS</strong> — Virtual Private Server ensures the EA runs 24/5
            without interruption, regardless of your PC or internet connection.</div>
        </li>
      </ol>

      <div class="sub-title">🤖 AI Tools for Traders (2025)</div>
      <div class="info-grid">
        <div class="info-card">
          <div class="info-head">📰 Sentiment Analysis</div>
          <div class="info-body">NLP models scan news, Twitter/X, Reddit and Telegram for market sentiment.
            Bullish/bearish signal aggregation. Tools: Bloomberg Sentiment, FinBERT models.</div>
        </div>
        <div class="info-card">
          <div class="info-head">🔍 Pattern Recognition</div>
          <div class="info-body">Convolutional Neural Networks (CNNs) trained to detect chart patterns (H&S, double
            tops, triangles) with greater accuracy than visual scanning.</div>
        </div>
        <div class="info-card">
          <div class="info-head">🎮 Reinforcement Learning</div>
          <div class="info-body">AI agent learns by trading in a simulated environment, optimizing for reward (profit).
            RL models can adapt to changing market regimes over time.</div>
        </div>
        <div class="info-card">
          <div class="info-head">📊 Price Prediction (LSTM)</div>
          <div class="info-body">Long Short-Term Memory recurrent networks trained on OHLCV data to forecast price. Best
            used as a probability filter, not a standalone signal generator.</div>
        </div>
      </div>
    </div>
<?php 
include_once ('elements/header.php');
?>

    <style>
        
        /* Interactive Terminal Style */
        .learning-container {
            border: 1px solid var(--dark-navy);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 50px var(--zed-backgound-color);
        }

        .terminal-header {
            background: var(--dark-navy);
            padding: 10px 20px;
            border-bottom: 1px solid var(--dark-navy);
            display: flex;
            gap: 8px;
        }

        .dot { width: 12px; height: 12px; border-radius: 50%; }
        .dot-red { background: var(--primary-teal); }
        .dot-yellow { background: var(--warning); }
        .dot-green { background: var(--success); }

        /* Quiz Component */
        .quiz-option {
            border: 1px solid var(--dark-navy);
            color: var(--text-muted);
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        .quiz-option:hover {
            border-color: var(--primary-teal);
            background: var(--zed-backgound-color);
        }

        .quiz-option.correct {
            border-color: var(--success-green);
            background: var(--zed-backgound-color);
            color: var(--success-green);
        }

        /* Live Action Box */
        .simulation-box {
            background: var(--dark-navy);
            border: 1px solid var(--primary-teal);
            padding: 20px;
            border-radius: 8px;
            font-family: 'Fira Code', monospace;
        }

        .cursor {
            animation: blink 1s infinite;
            border-left: 8px solid var(--primary-teal);
            margin-left: 5px;
        }

        @keyframes blink { 50% { opacity: 0; } }

        .btn-trade {
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>

    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-800">The <span style="color: var(--primary-teal);">Execution</span> Lab</h1>
                <p class="text-muted">Stop watching. Start doing. Test your market reflexes in real-time.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3">
                <div class="list-group list-group-flush border-0">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white active border-0 mb-2 p-3 rounded" style="background: var(--primary-teal) !important;">
                        1. Candle Pattern ID
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white border-0 mb-2 p-3 rounded">
                        2. Risk Calculator Pro
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white border-0 mb-2 p-3 rounded">
                        3. News Impact Sim
                    </a>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="learning-container animate__animated animate__fadeIn">
                    <div class="terminal-header">
                        <div class="dot dot-red"></div>
                        <div class="dot dot-yellow"></div>
                        <div class="dot dot-green"></div>
                        <span class="ms-3 small text-muted">MODULE_01_TEST.EXE</span>
                    </div>

                    <div class="p-4 p-md-5">
                        <h3 class="mb-4">Challenge: Identify the Trap</h3>
                        <p class="text-muted mb-5">Price has just swept the previous day high (PDH) and closed back inside the range with a long wick. What is the most likely institutional move?</p>

                        <div id="quiz-options">
                            <div class="quiz-option d-flex justify-content-between align-items-center" onclick="this.classList.add('correct')">
                                <span>A) Liquidity Grab / Stop Hunt</span>
                                <span class="badge text-bg-success d-none">Correct</span>
                            </div>
                            <div class="quiz-option" onclick="this.style.borderColor='red'">
                                <span>B) Bullish Continuation</span>
                            </div>
                            <div class="quiz-option" onclick="this.style.borderColor='red'">
                                <span>C) Market Neutral / Sideways</span>
                            </div>
                        </div>

                        <hr class="my-5 border-secondary">

                        <div class="simulation-box">
                            <div class="mb-3 text-uppercase small text-danger fw-bold">System Status: Awaiting Entry...</div>
                            <div class="d-flex align-items-center mb-4">
                                <span class="text-white">$> TRADER_INITIATIVE: </span>
                                <span class="ms-2 text-white">SELL_STOP @ 1.0850</span>
                                <span class="cursor"></span>
                            </div>
                            
                            <div class="row g-2">
                                <div class="col-6">
                                    <button class="btn btn-outline-danger w-100 btn-trade py-3">Set Short</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-outline-success w-100 btn-trade py-3">Set Long</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php
include_once ('elements/footer.php');
?>
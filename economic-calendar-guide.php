<?php 
include_once ('elements/header.php');
?>

    
       <style>
        /* ─── HERO ────────────────────────────────────── */
        .hero {
            padding: 100px 0 80px;
            text-align: center;
            background: radial-gradient(ellipse 60% 55% at 50% -10%, rgba(232,17,26,.07) 0%, transparent 65%),
                var(--zed-backgound-color);
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(0,0,0,.03) 39px, rgba(0,0,0,.03) 40px),
                repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(0,0,0,.03) 39px, rgba(0,0,0,.03) 40px);
            pointer-events: none;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: var(--zed-primary);
            color: #fff;
            font-size: .72rem;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .35rem 1.1rem;
            border-radius: 50px;
            margin-bottom: 1.6rem;
            animation: fadeDown .6s ease both;
        }
        .hero h1 {
            font-size: clamp(3rem, 7vw, 5.5rem);
            font-weight: 800;
            line-height: 1.0;
            margin-top: 50px;
            letter-spacing: -.04em;
            color: var(--zed-dark-text);
            animation: fadeUp .7s .1s ease both;
        }
        .hero h1 em { font-style: normal; color: var(--zed-primary); }
        .hero p.sub {
            font-size: 1.1rem;
            color: var(--zed-secondary);
            max-width: 520px;
            margin: 1.2rem auto 2.2rem;
            font-weight: 300;
            animation: fadeUp .7s .2s ease both;
        }
        .hero-btns { animation: fadeUp .7s .3s ease both; }
        .btn-red {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            padding: .9rem 2.6rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: .95rem;
            letter-spacing: .02em;
            transition: background .25s, transform .2s, box-shadow .25s;
            box-shadow: 0 8px 28px rgba(232,17,26,.3);
        }
        .btn-red:hover {
            background: var(--primary-red-hover);
            transform: translateY(-3px);
            box-shadow: 0 14px 36px rgba(232,17,26,.4);
            color: var(--zed-dark-text);
        }
        .btn-ghost {
            background: transparent;
            color: var(--zed-dark-text);
            border: 1.5px solid var(--zed-border-color);
            padding: .9rem 2.2rem;
            border-radius: 50px;
            font-weight: 500;
            transition: border-color .25s, background .25s, color .25s;
        }
        .btn-ghost:hover {
            border-color: var(--zed-dark-text);
            background: var(--zed-dark-text);
            color: #fff;
        }
        .hero-floats {
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            margin-top: 3.5rem;
            flex-wrap: wrap;
            animation: fadeUp .7s .4s ease both;
        }
        .float-stat {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 14px;
            padding: .8rem 1.4rem;
            display: flex;
            align-items: center;
            min-width: 160px;
            gap: .8rem;
            box-shadow: 0 2px 16px rgba(0,0,0,.04);
        }
        .float-stat .ico {
            width: 38px; height: 38px;
            background: rgba(232,17,26,.08);
            color: var(--zed-primary);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
        }
        .float-stat .val { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 1.1rem; color: var(--zed-dark-text); }
        .float-stat .lbl { font-size: .75rem; color: var(--zed-secondary); }
    </style>
    
    <!-- ─── HERO ───────────────────────────────────────────── -->
    <section class="hero">
        <div class="container">
            <div class="hero-badge mt-4 d-none"><i class="bi bi-mortarboard-fill"></i> Professional Trading Education</div>
            <h1>
               News Events <em>Market Impact</em> <br>Trade Smarter
            </h1>
            <p class="sub">
               Understand how economic data releases move the markets. From interest rate decisions and CPI to NFP and central bank speeches — learn what matters, when it happens and how to protect your trades around it.
            </p>
            <div class="hero-btns d-flex justify-content-center gap-3 flex-wrap">
                <a href="#courses" class="btn btn-red">
                    Start Learning Now <i class="bi bi-arrow-right ms-1"></i>
                </a>
                <a href="#topics" class="btn btn-ghost">
                    Explore Topics
                </a>
            </div>
            <div class="hero-floats">
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-people-fill"></i></div>
                    <div>
                        <div class="val">9</div>
                        <div class="lbl">Lessons</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-play-btn-fill"></i></div>
                    <div>
                        <div class="val">55</div>
                        <div class="lbl">Minutes</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-award-fill"></i></div>
                    <div>
                        <div class="val">0</div>
                        <div class="lbl">Completed</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <div class="val">Intermediate</div>
                        <div class="lbl">Level</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="hdiv"></div>


 

<style> 
:root{
  --R:#C8102E;--Rd:#9B0E24;--RL:rgba(200,16,46,.08);--RM:rgba(200,16,46,.15);
  --W:#FFFFFF;--G50:#F7F8FA;--G100:#ECEEF2;--G150:#E2E5EA;
  --G200:#D0D4DC;--G300:#B0B8C4;--G400:#8892A0;--G500:#636E7D;
  --G600:#465060;--G700:#2D3748;--G800:#1A2333;
  --GR: green;--AM:#E8960A;--BL:#3B7DD8;
  --navy:#1a2a4a;--navy2:#16213e;
}
html{scroll-behavior:smooth} 

/* KEYFRAMES */
@keyframes fadeUp{from{opacity:0;transform:translateY(22px)}to{opacity:1;transform:translateY(0)}}
@keyframes fadeIn{from{opacity:0}to{opacity:1}}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.25}}
@keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
@keyframes traceL{from{stroke-dashoffset:2000}to{stroke-dashoffset:0}}
@keyframes scaleUp{from{transform:scale(0);opacity:0}to{transform:scale(1);opacity:1}}
@keyframes ticker{from{transform:translateX(0)}to{transform:translateX(-50%)}}
@keyframes barIn{from{width:0}to{width:var(--bw,100%)}}
@keyframes barInH{from{height:0}to{height:var(--bh,100%)}}
@keyframes rotateFull{to{transform:rotate(360deg)}}
@keyframes shimmer{0%,100%{opacity:.7}50%{opacity:1}}
@keyframes priceTick{0%{transform:translateY(0)}50%{transform:translateY(-4px)}100%{transform:translateY(0)}}
@keyframes greenPulse{0%,100%{box-shadow:0 0 0 0 rgba(0,184,112,.4)}50%{box-shadow:0 0 0 8px rgba(0,184,112,0)}}
@keyframes candleGrow{from{transform:scaleY(0);transform-origin:bottom}to{transform:scaleY(1)}}
 
/* Mini market cards */
.mini-markets{display:grid;grid-template-columns:repeat(2,1fr);gap:8px;margin-top:1rem}
.mm-card{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:10px;padding:.75rem .9rem;display:flex;justify-content:space-between;align-items:center}
.mm-left{}
.mm-pair{font-size:12px;font-weight:700;color:#fff}
.mm-name{font-size:9.5px;color:rgba(255,255,255,.35);margin-top:1px}
.mm-right{text-align:right}
.mm-price{font-size:12px;font-weight:700;color:#fff}
.mm-chg{font-size:10px;font-weight:700}
.mm-chg.up{color:var(--GR)}.mm-chg.dn{color:var(--zed-primary)}

/* STRIP */
.hero-strip{display:grid;grid-template-columns:repeat(4,1fr);border-top:1px solid rgba(255,255,255,.07);margin-top:2.5rem}
.hs{padding:1.15rem 1rem;text-align:center;border-right:1px solid rgba(255,255,255,.07);transition:background .25s;cursor:default}
.hs:hover{background:rgba(200,16,46,.07)}
.hs:last-child{border-right:none}
.hv{font-size:1.9rem;font-weight:800;color:#fff;line-height:1;margin-bottom:4px}
.hv.r{color:var(--zed-primary)}
.hl{font-size:10px;color:rgba(255,255,255,.3);letter-spacing:.09em;text-transform:uppercase}

/* TICKER */
.ticker-bar{background:var(--zed-primary);overflow:hidden;padding:.44rem 0;position:relative}
.ticker-bar::before,.ticker-bar::after{content:'';position:absolute;top:0;bottom:0;width:50px;z-index:2;pointer-events:none}
.ticker-bar::before{left:0;background:linear-gradient(90deg,var(--zed-primary),transparent)}
.ticker-bar::after{right:0;background:linear-gradient(-90deg,var(--zed-primary),transparent)}
.t-track{display:flex;white-space:nowrap;animation:ticker 32s linear infinite}
.t-item{display:inline-flex;align-items:center;gap:9px;padding:0 2.5rem;font-size:10.5px;font-weight:700;letter-spacing:.09em;text-transform:uppercase;color:rgba(255,255,255,.75)}
.t-item i{font-size:12px;color:rgba(255,255,255,.45)}

/* PROGRESS */
.prog-bar{background:var(--W);border-bottom:2px solid var(--G100);padding:.72rem 0;position:sticky;top:0;z-index:100;box-shadow:0 1px 8px rgba(0,0,0,.07)}
.pb-row{
    /* max-width:1100px; */
    margin:0 auto;
    /* padding:0 2rem; */
    display:flex;
    align-items:center;
    gap:14px;
}
.pb-lbl{font-size:10px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--G400);white-space:nowrap}
.pb-track{flex:1;height:4px;background:var(--G100);border-radius:2px;overflow:hidden}
.pb-fill{height:100%;background:linear-gradient(90deg,var(--zed-primary),#e84060);width:0%;transition:width .8s cubic-bezier(.4,0,.2,1);border-radius:2px}
.pb-pct{font-size:12px;font-weight:700;color:var(--zed-primary);min-width:36px;text-align:right}
.pb-cnt{font-size:11px;color:var(--G400);white-space:nowrap}

/* LAYOUT */
.page{
    /* max-width:1100px; */
    margin:0 auto;
    padding:0 2rem;
}
.layout{display:grid;grid-template-columns:1fr 320px;gap:2.5rem;padding:2.5rem 0 5rem;align-items:start}

/* SEC LABEL */
.sec-lbl{display:flex;align-items:center;gap:10px;margin-bottom:1.4rem;font-size:10px;font-weight:700;letter-spacing:.13em;text-transform:uppercase;color:var(--G400)}
.sec-lbl i{font-size:13px;color:var(--G300)}
.sec-lbl::after{content:'';flex:1;height:1px;background:var(--G100)}

/* MODULE */
.mod{background:var(--W);border:1px solid var(--G150);border-radius:14px;margin-bottom:10px;border-left:4px solid transparent;transition:border-color .25s,box-shadow .25s,transform .18s;overflow:hidden}
.mod:hover{box-shadow:0 6px 24px rgba(0,0,0,.09);transform:translateY(-1px)}
.mod.active{border-left-color:var(--zed-primary);box-shadow:0 4px 20px rgba(200,16,46,.1)}
.mod.done{
    border-left-color:var(--zed-primary);
}
.mod-hd{display:flex;align-items:center;gap:12px;padding:1rem 1.3rem;cursor:pointer;transition:background .14s;user-select:none}
.mod-hd:hover{background:var(--G50)}
.mn{
    font-size:2rem;
    font-weight:800;
    color:var(--G200);
    min-width:22px;
    line-height:1;
    transition:color .22s;
    flex-shrink:0;
}
.mod.active .mn{
    color:var(--zed-primary)
}
.mod.done .mn{
    color:var(--zed-primary);
}
.mico{width:38px;height:38px;border-radius:9px;background:var(--G50);border:1px solid var(--G150);display:flex;align-items:center;justify-content:center;font-size:17px;color:var(--G400);flex-shrink:0;transition:all .25s}
.mod.active .mico{background:var(--zed-primary);border-color:var(--zed-primary);color:#fff;box-shadow:0 3px 12px rgba(200,16,46,.28)}
.mod.done .mico{
    background:#fff;
    border-color: var(--zed-primary);
    color:var(--zed-primary);
}
.mmeta{flex:1;min-width:0}
.mtitle{
    font-size:1.5rem;
    font-weight:500;
    /* font-family: poppins, sans-serif; */
    color:var(--zed-dark-text);
    line-height:1.3;
}
.msub{
    font-size:1rem;
    color:var(--zed-secondary);
    margin-top:2px;
    overflow:hidden;
    text-overflow:ellipsis;
    white-space:nowrap;
}
.mright{display:flex;align-items:center;gap:8px;flex-shrink:0}
.badge{font-size:10px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;padding:3px 9px;border-radius:100px}
.b-s{
    /* background:var(--RM); */
    color:var(--zed-primary);
    border:1px solid rgba(200,16,46,.22);
}
.b-l{background:var(--G50);color:var(--G400);border:1px solid var(--G200)}
.b-f{background:var(--zed-primary);color:#fff}
.b-d{background:rgba(0,184,112,.1);color:var(--GR);border:1px solid rgba(0,184,112,.25)}
.mchev{font-size:18px;color:var(--G300);transition:transform .25s,color .22s}
.mod.open .mchev{transform:rotate(90deg);color:var(--zed-primary)}

/* BODY */
.mbody{max-height:0;overflow:hidden;transition:max-height .48s cubic-bezier(.4,0,.2,1)}
.mbody.open{max-height:4000px}
.minner{padding:1.4rem 1.3rem 1.8rem 5.2rem;border-top:1px solid var(--G100);background:var(--G50)}

/* TEXT */
.l-sub{
    font-size: 1rem;
    font-weight:700;
    letter-spacing:.13em;
    text-transform:uppercase;
    color:var(--zed-primary);
    margin-bottom:.4rem;
}
.l-head{
    font-size:1.05rem;
    font-weight:700; 
    line-height:1.4;
    margin-bottom:.5rem;
    letter-spacing:-.01em;
}
.l-body{ 
    color:var(--zed-secondary);
    line-height:1.82;
    margin-bottom:1.2rem; 
}
.l-body b{color:var(--G700);font-weight:600}

/* DARK CHART BOX */
.cbox{
    /* background:var(--navy); */
    border-radius:12px;
    padding:1.2rem;
    margin-bottom:1.2rem;
    border:1px solid var(--zed-primary);
    position:relative;
    overflow:hidden;
}
.cbox::before{content:'';position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,rgba(200,16,46,.6),transparent)}
.cb-head{display:flex;justify-content:space-between;align-items:center;margin-bottom:.9rem}
.cb-lbl{ 
    color:var(--zed-primary);
    letter-spacing:.08em;
    text-transform:uppercase;
    display:flex;
    align-items:center;
    gap:6px;
}
.cb-lbl i{
    font-size:1.5rem;
    color:var(--zed-primary);
}
.cb-sub{font-size:10px;color:rgba(255,255,255,.18);font-weight:600}

/* MARKET TICKER CARDS */
.market-strip{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;margin-bottom:1.2rem}
.mkt-card{background:var(--W);border:1px solid var(--G150);border-radius:10px;padding:.85rem 1rem;box-shadow:0 1px 6px rgba(0,0,0,.06);transition:all .22s;position:relative;overflow:hidden}
.mkt-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--mc,var(--zed-primary));border-radius:3px 3px 0 0}
.mkt-card:hover{box-shadow:0 6px 20px rgba(0,0,0,.1);transform:translateY(-2px)}
.mc-sym{
    font-size:1rem;
    font-weight:800;
    color:var(--zed-dark-text);
    margin-bottom:2px;
}
.mc-name{ 
    color:var(--G400);
    margin-bottom:.5rem;
}
.mc-price{font-size:1.1rem;font-weight:800;color:var(--zed-dark-text);margin-bottom:2px}
.mc-chg{font-size:.78rem;font-weight:700}
.mc-chg.up{color:var(--GR)}.mc-chg.dn{color:var(--zed-primary)}
.mc-bar{height:4px;background:var(--G100);border-radius:2px;overflow:hidden;margin-top:.5rem}
.mc-bar-fill{height:100%;border-radius:2px;animation:barIn 1.2s ease forwards .4s;width:0}

/* STAT GRID */
.sgrid{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;margin-bottom:1.2rem}
.sgrid.two{grid-template-columns:1fr 1fr}
.sbox{background:var(--W);border:1px solid var(--G150);border-radius:10px;padding:.75rem .85rem;text-align:center;box-shadow:0 1px 6px rgba(0,0,0,.06);transition:all .22s}
.sbox:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(0,0,0,.09)}
.sbox.r{
    /* background:rgba(200,16,46,.05); */
    border-color:rgba(200,16,46,.18);
}
.sbox.g{
    /* background:rgba(0,184,112,.05); */
    border-color:rgba(200,16,46,.18);
}
.sbox.a{
    /* background:rgba(232,150,10,.05); */
    border-color:rgba(200,16,46,.18);
}
.sbox.b{
    /* background:rgba(59,125,216,.05); */
    border-color:rgba(200,16,46,.18);
}
.sv{
    font-size:1.55rem;
    font-weight:800;
    color:var(--zed-dark-text);
    line-height:1;
}
.sbox.r .sv{color:var(--zed-primary)}
.sbox.g .sv{
    color:var(--zed-primary);
}
.sbox.a .sv{
    color:var(--zed-primary);
}
.sbox.b .sv{
    color:var(--zed-primary);
}
.sk{
    font-size:.7rem;
    color:var(--G400);
    letter-spacing:.05em;
    text-transform:uppercase;
    margin-top:4px;
}

/* TWO COL */
.two{display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:1.2rem}
.tc{background:var(--W);border:1px solid var(--G150);border-radius:10px;padding:.85rem 1rem;box-shadow:0 1px 6px rgba(0,0,0,.06);transition:all .22s}
.tc:hover{box-shadow:0 4px 14px rgba(0,0,0,.08)}
.tc.r{
    /* background:rgba(200,16,46,.04); */
    border-color:rgba(200,16,46,.18);
}
.tc.g{
    /* background:rgba(0,184,112,.04); */
    border-color:rgba(0,184,112,.18);
}
.tc.a{background:rgba(232,150,10,.04);border-color:rgba(232,150,10,.18)}
.tc-h{
    font-size:1rem;
    font-weight:700;
    letter-spacing:.09em;
    text-transform:uppercase;
    color:var(--G400);
    margin-bottom:.55rem;
    display:flex;
    align-items:center;
    gap:5px;
}
.tc.r .tc-h{color:var(--zed-primary)}
.tc.g .tc-h{
    color:var(--zed-primary);
}
.tc.a .tc-h{
    color:var(--AM);
}
.tc-row{ 
    color:var(--zed-secondary);
    padding:2px 0;
    display:flex;
    align-items:flex-start;
    gap:6px;
    line-height:1.6;
}
.tc-row::before{content:'';width:4px;height:4px;border-radius:50%;flex-shrink:0;margin-top:7px;background:var(--G300)}
.tc.r .tc-row::before{background:var(--zed-primary)}
.tc.g .tc-row::before{
    background:var(--zed-primary);
}

/* RULES CARD */
.rules{border-left:4px solid var(--zed-primary);background:var(--W);border-radius:0 10px 10px 0;padding:.9rem 1.1rem;margin-bottom:1.2rem;border-top:1px solid var(--G150);border-right:1px solid var(--G150);border-bottom:1px solid var(--G150);box-shadow:0 1px 6px rgba(0,0,0,.05)}
.rules.g{border-left-color:var(--GR)}
.rules.a{
    border-left-color:var(--zed-primary);
}
.rules.b{
    border-left-color:var(--zed-primary);
}
.r-title{
    font-size: 1rem;
    font-weight:700;
    letter-spacing:.1em;
    text-transform:uppercase;
    color:var(--zed-primary);
    margin-bottom:.72rem;
    display:flex;
    align-items:center;
    gap:6px}
.rules.g .r-title{
    color:var(--GR);
}
.rules.a .r-title{
    color:var(--zed-primary);
}
.rules.b .r-title{
    color:var(--zed-primary);
}
.r-title i{
    font-size:13px;
}
.rrow{
    display:flex;
    align-items:flex-start;
    gap:9px;
    padding:3px 0;
    font-size:0.8rem; 
    line-height:1.7;
}
.rrow b{color:var(--G700);font-weight:600}
.rdot{width:5px;height:5px;border-radius:50%;flex-shrink:0;margin-top:7px;background:var(--zed-primary);animation:pulse 3s ease infinite}
.rules.g .rdot{background:var(--GR)}
.rules.a .rdot{
    background:var(--AM);
}
.rules.b .rdot{
    background:var(--zed-primary);
}

/* STEPS */
.steps{display:flex;flex-direction:column;gap:7px;margin-bottom:1.2rem;position:relative}
.steps::before{content:'';position:absolute;left:20px;top:20px;bottom:20px;width:1px;background:linear-gradient(180deg,rgba(200,16,46,.4),rgba(200,16,46,.05));z-index:0}
.step{display:flex;align-items:flex-start;gap:12px;padding:.8rem 1rem;background:var(--W);border:1px solid var(--G150);border-radius:10px;transition:.22s;position:relative;z-index:1;box-shadow:0 1px 6px rgba(0,0,0,.05)}
.step:hover{border-color:rgba(200,16,46,.3);box-shadow:0 4px 14px rgba(200,16,46,.08);transform:translateX(3px)}
.step-n{width:25px;height:25px;background:var(--zed-primary);color:#fff;font-size:.8rem;font-weight:800;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:0 3px 10px rgba(200,16,46,.28)}
.step-t{font-size:.82rem;font-weight:700;color:var(--zed-dark-text);margin-bottom:1px}
.step-d{ 
    color:var(--zed-secondary);
    line-height:1.55;
}

/* NEWS TABLE */
.news-table{background:var(--W);border:1px solid var(--G150);border-radius:11px;overflow:hidden;margin-bottom:1.2rem;box-shadow:0 1px 6px rgba(0,0,0,.05)}
.nt-head{display:grid;grid-template-columns:80px 1fr 90px 90px;gap:0;background:var(--G50);border-bottom:1px solid var(--G100)}
.nt-hcell{padding:.6rem .9rem;font-size:.72rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--G400)}
.nt-row{display:grid;grid-template-columns:80px 1fr 90px 90px;gap:0;border-bottom:1px solid var(--G100);transition:background .15s}
.nt-row:last-child{border-bottom:none}
.nt-row:hover{background:var(--G50)}
.nt-cell{
    padding:.65rem .9rem;
    font-size:1rem;
    color:var(--G600);
    display:flex;
    align-items:center;
}
.impact{display:inline-flex;align-items:center;gap:4px;font-size:.72rem;font-weight:700;letter-spacing:.05em;text-transform:uppercase;padding:3px 8px;border-radius:100px}
.imp-h{background:rgba(200,16,46,.1);color:var(--zed-primary)}
.imp-m{background:rgba(232,150,10,.1);color:var(--AM)}
.imp-l{background:rgba(0,184,112,.1);color:var(--GR)}
.fore-pos{font-weight:700;color:var(--GR)}
.fore-neg{font-weight:700;color:var(--zed-primary)}

/* SR ZONES */
.sr-visual{background:var(--navy);border-radius:12px;padding:1.2rem;margin-bottom:1.2rem;border:1px solid rgba(255,255,255,.07)}
.sr-head{font-size:10px;color:rgba(255,255,255,.28);letter-spacing:.08em;text-transform:uppercase;margin-bottom:1rem}
.sr-item{display:flex;align-items:center;gap:12px;margin-bottom:8px}
.sr-line{flex:1;height:2px;border-radius:1px;position:relative;overflow:hidden}
.sr-line::after{content:'';position:absolute;left:0;top:0;bottom:0;width:0;border-radius:1px;animation:barIn 1.2s ease forwards .5s}
.sr-label{font-size:.72rem;font-weight:700;letter-spacing:.07em;text-transform:uppercase;padding:3px 10px;border-radius:100px;white-space:nowrap;min-width:80px;text-align:center}
.sr-price{font-size:.78rem;font-weight:600;min-width:58px;text-align:right}
.sr-r{background:rgba(200,16,46,.2);color:#ff6b8a;border:1px solid rgba(200,16,46,.3)}.sr-rline{background:rgba(200,16,46,.35)}.sr-rline::after{background:var(--zed-primary)}.sr-rprice{color:#ff6b8a}
.sr-s{background:rgba(0,184,112,.15);color:var(--GR);border:1px solid rgba(0,184,112,.25)}.sr-sline{background:rgba(0,184,112,.3)}.sr-sline::after{background:var(--GR)}.sr-sprice{color:var(--GR)}
.sr-z{background:rgba(232,150,10,.15);color:var(--AM);border:1px solid rgba(232,150,10,.25)}.sr-zline{background:rgba(232,150,10,.25);height:8px!important;opacity:.7}.sr-zline::after{background:var(--AM)}.sr-zprice{color:var(--AM)}
.sr-p{background:rgba(255,255,255,.07);color:rgba(255,255,255,.4)}.sr-pline{background:rgba(255,255,255,.14)}.sr-pline::after{display:none}.sr-pprice{color:rgba(255,255,255,.35)}

/* CHECKLIST */
.cl-status{font-size:.78rem;color:var(--G400);font-weight:600;padding:4px 8px;margin-bottom:7px;transition:all .3s}
.cl-wrap{margin-bottom:1rem}
.ci{display:flex;align-items:center;gap:10px;padding:6px 10px;border-radius:8px;cursor:pointer;transition:.18s;font-size:.82rem;color:var(--G600);border:1px solid transparent}
.ci:hover{background:var(--W);border-color:var(--G200);box-shadow:0 1px 6px rgba(0,0,0,.05)}
.ci.checked{
    background:#fff;
    border-color: #ff0000;
}
.ci-box{width:18px;height:18px;border:2px solid var(--G200);border-radius:4px;flex-shrink:0;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;transition:.22s}
.ci.checked .ci-box{
    background:var(--zed-primary);
    border-color:var(--zed-primary); 
}
.ci.checked .ci-text{text-decoration:line-through;color:var(--G300)}

/* BTN */
.btn-done{display:inline-flex;align-items:center;gap:7px;background:var(--zed-primary);color:#fff;font-size:.75rem;font-weight:700;letter-spacing:.07em;text-transform:uppercase;padding:9px 20px;border-radius:8px;border:none;cursor:pointer;transition:.22s;margin-top:.4rem;box-shadow:0 3px 12px rgba(200,16,46,.22)}
.btn-done:hover{background:var(--Rd);transform:translateY(-2px);box-shadow:0 8px 20px rgba(200,16,46,.32)}
.btn-done:active{transform:scale(.97)}
.btn-done i{font-size:15px}

/* SIDEBAR */
.sidebar{
    position:sticky;
    top:100px;
    height:fit-content;
}
.sb-card{background:var(--W);border:1px solid var(--G150);border-radius:12px;overflow:hidden;margin-bottom:12px;box-shadow:0 4px 18px rgba(0,0,0,.07)}
.sb-hd{
    background:linear-gradient(135deg,var(--zed-dark-text));
    padding:1.1rem 1.3rem;
    display:flex;
    align-items:center;
    gap:9px;
    position:relative;
    overflow:hidden;
}
.sb-hd::after{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,var(--zed-primary),transparent)}
.sb-hd i{font-size:17px;color:var(--zed-primary)}
.sb-hd h3{
    font-size:1rem;
    font-weight:700;
    color:#fff;
}
.sb-body{padding:1.1rem 1.3rem}
.cs-row{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:.52rem 0;
    border-bottom:1px solid var(--G100);
}
.cs-row:last-child{border-bottom:none}
.cs-l{ 
    color:var(--zed-dark-text);
    display:flex;
    align-items:center;
    gap:5px;
}
.cs-l i{font-size:13px;color:var(--G300)}
.cs-v{font-size:.78rem;font-weight:700;color:var(--zed-dark-text)}
.cs-v.r{color:var(--zed-primary)}
.cs-v.g{
    color:var(--zed-secondary);
}
.sb-nav{padding:.6rem 0}
.sb-nav-lbl{
    font-size:1rem;
    font-weight:700;
    letter-spacing:.11em;
    text-transform:uppercase;
    color:var(--G400);
    padding:.3rem 1.3rem .7rem;
    display:flex;
    align-items:center;
    gap:7px;
}
.sb-nav-lbl::after{content:'';flex:1;height:1px;background:var(--G100)}
.sb-item{display:flex;align-items:center;gap:9px;padding:.52rem 1.3rem;cursor:pointer;transition:.18s;border-left:3px solid transparent}
.sb-item:hover{background:var(--G50);border-left-color:var(--G200)}
.sb-item.active{background:rgba(200,16,46,.05);border-left-color:var(--zed-primary)}
.sb-item.done{background:rgba(0,184,112,.04);border-left-color:var(--GR)}
.sb-n{font-size:.78rem;font-weight:800;color:var(--G300);min-width:16px;flex-shrink:0}
.sb-item.active .sb-n{color:var(--zed-primary)}.sb-item.done .sb-n{color:var(--GR)}
.sb-text{ 
    color:var(--zed-dark-text);
    flex:1;
    line-height:1.3;
}
.sb-item.active .sb-text{
    color:var(--zed-primary);
    font-weight:600;
}.sb-item.done .sb-text{color:var(--G400)}
.sb-tick{font-size:13px;color:var(--GR)}

/* FAQ */
.faq-sec{background:var(--W);border-top:2px solid var(--G100);padding:4rem 0}
.faq-wrap{
    /* max-width:1100px; */
    margin:0 auto;
    /* padding:0 2rem; */
}
.faq-hd{text-align:center;margin-bottom:2.5rem}
.faq-hd h2{font-size:1.9rem;font-weight:800;color:var(--zed-dark-text);letter-spacing:-.015em;margin-bottom:.5rem}
.faq-hd h2 span{color:var(--zed-primary)}
.faq-hd p{font-size:.875rem;color:var(--G500);max-width:440px;margin:0 auto;line-height:1.7}
.faq-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:0;border:1px solid var(--G150);border-radius:12px;overflow:hidden;background:var(--G150);box-shadow:0 1px 8px rgba(0,0,0,.05)}
.fi{background:var(--W)}
.fq{display:flex;justify-content:space-between;align-items:flex-start;padding:1rem 1.3rem;cursor:pointer;gap:12px;transition:background .14s}
/* .fq:hover{background:var(--G50)} */
.fq-t{font-size:.85rem;font-weight:600;color:var(--zed-dark-text);flex:1;line-height:1.5}
.fq-ico{font-size:16px;color:var(--G300);transition:transform .25s,color .2s;flex-shrink:0;margin-top:1px}
.fi.open .fq-ico{transform:rotate(180deg);color:var(--zed-primary)}
/* .fi.open .fq{background:rgba(200,16,46,.04)}  */
.fa{max-height:0;overflow:hidden;transition:max-height .32s ease}
.fa.open{max-height:400px}
.fa-i{padding:.2rem 1.3rem 1.1rem;font-size:.82rem;color:var(--G600);line-height:1.85;border-top:1px solid var(--G100)}
.fa-i b{color:var(--G700);font-weight:600}

/* FOOTER */
.footer{background:linear-gradient(135deg,var(--navy),var(--navy2));padding:3rem 0 1.8rem;border-top:3px solid var(--zed-primary)}
.foot{max-width:1100px;margin:0 auto;padding:0 2rem}
.fg{display:grid;grid-template-columns:1.7fr 1fr 1fr 1fr;gap:2.5rem;padding-bottom:2rem;border-bottom:1px solid rgba(255,255,255,.1);margin-bottom:1.8rem}
.f-logo{font-size:1.35rem;font-weight:800;color:#fff;margin-bottom:.65rem}
.f-logo span{color:var(--zed-primary)}
.f-tag{font-size:.78rem;color:rgba(255,255,255,.35);line-height:1.7;max-width:200px}
.f-col h4{font-size:.72rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.28);margin-bottom:.85rem}
.f-col ul{list-style:none;display:flex;flex-direction:column;gap:6px}
.f-col a{font-size:.8rem;color:rgba(255,255,255,.42);text-decoration:none;transition:color .2s}
.f-col a:hover{color:var(--zed-primary)}
.fb{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:8px}
.fc{font-size:.72rem;color:rgba(255,255,255,.2)}
.fl{display:flex;gap:1.2rem;flex-wrap:wrap}
.fl a{font-size:.72rem;color:rgba(255,255,255,.2);text-decoration:none;transition:color .2s}
.fl a:hover{color:rgba(255,255,255,.5)}


/* IMPACT CARDS */
.impact-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;margin-bottom:1.2rem}
.ic{background:var(--W);border:1px solid var(--G150);border-radius:10px;padding:1rem;text-align:center;box-shadow:0 1px 6px rgba(0,0,0,.06);transition:all .22s;position:relative;overflow:hidden}
.ic::before{content:'';position:absolute;top:0;left:0;right:0;height:4px}
.ic.high::before{background:var(--zed-primary)}
.ic.medium::before{
    background:var(--zed-primary);
}
.ic.low::before{
    background:var(--zed-primary);
}
.ic:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(0,0,0,.1)}
.ic-icon{
    font-size:1.6rem;
    margin-bottom:.4rem;
    padding: 10px;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    display: inline-block;
}
.ic-label{
    font-size:1rem;
    font-weight:700;
    letter-spacing:.09em;
    text-transform:uppercase;
    margin-bottom:.3rem;
}
.ic.high .ic-label{
    color:var(--zed-primary);
}
.ic.medium .ic-label
{color:var(--zed-primary);
}
.ic.low .ic-label{
    color:var(--zed-primary);
}
.ic-desc{ 
    color:var(--zed-secondary);
    line-height:1.55;
}
.ic-pip{
    font-size:.82rem;
    font-weight:700;
    margin-top:.4rem;
}
.ic.high .ic-pip{
    color:var(--zed-dark-text);
}
.ic.medium .ic-pip{
color:var(--zed-dark-text);
}
.ic.low .ic-pip{
    color:var(--zed-dark-text);
}
@media(max-width:900px){.layout{grid-template-columns:1fr}.sidebar{position:static}.hero-wrap{grid-template-columns:1fr}.hero-panel{display:none}}
@media(max-width:640px){.hero-strip{grid-template-columns:1fr 1fr}.faq-grid{grid-template-columns:1fr}.fg{grid-template-columns:1fr 1fr}.market-strip,.two,.sgrid{grid-template-columns:1fr 1fr}.nt-head,.nt-row{grid-template-columns:70px 1fr 80px}}
</style>

 
<!-- PROGRESS -->
<div class="prog-bar">
    <div class="container">
        <div class="pb-row">
            <span class="pb-lbl">Progress</span>
            <div class="pb-track"><div class="pb-fill" id="pbar"></div></div>
            <span class="pb-pct" id="ppct">0%</span>
            <span class="pb-cnt" id="pcnt">0 / 9</span>
        </div>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="layout">
            <main>
            
            <div class="zed-sec-head mt-5 mb-4">  
                <h2 class="zed-sec-title">Core Lessons | Economic Calendar Guide</h2> 
                <div class="underline"></div>
            </div>

            <!-- L1 WHAT IS ECONOMIC CALENDAR -->
            <article class="mod active open rv" data-id="1">
                <div class="mod-hd" id="m1" onclick="tog(1)">
                <div class="mn">01</div><div class="mico"><i class="ti ti-calendar-event"></i></div>
                <div class="mmeta"><div class="mtitle">What is an Economic Calendar?</div><div class="msub">Your daily roadmap to market-moving news events</div></div>
                <div class="mright"><span class="badge b-s">Start Here</span><i class="ti ti-chevron-right mchev"></i></div>
                </div>
                <div class="mbody open">
                <div class="minner">
                    <div class="l-sub">Foundation</div>
                    <h2 class="l-head">The Economic Calendar is the Most Powerful Free Tool in Trading.</h2>
                    <p class="l-body">An economic calendar is a scheduled list of upcoming economic data releases, central bank decisions and speeches that have the potential to move financial markets. <b>Every serious trader checks it before every session</b> — because trading without it is like driving without knowing where the speed bumps are.</p>

                    <!-- ANIMATED CALENDAR VISUAL -->
                    <div class="cbox">
                    <div class="cb-head"><span class="cb-lbl"><i class="ti ti-calendar-event"></i>Economic Calendar — Weekly View</span><span class="cb-sub">Indicative Example</span></div>
                    <svg viewBox="0 0 520 155" width="100%" height="200" aria-label="Economic calendar weekly view showing high medium and low impact events">
                        <!-- Calendar grid background -->
                        <rect x="5" y="5" width="510" height="145" rx="8" fill="rgba(255,255,255,.04)" stroke="rgba(255,255,255,.08)" stroke-width="1"/>
                        <!-- Header row -->
                        <rect x="5" y="5" width="510" height="28" rx="8" fill="rgba(255,255,255,.06)"/>
                        <text x="52" y="23" fill="rgba(255,255,255,.5)" font-size="9" font-weight="700" font-family="Inter">MON</text>
                        <text x="155" y="23" fill="rgba(255,255,255,.5)" font-size="9" font-weight="700" font-family="Inter">TUE</text>
                        <text x="255" y="23" fill="rgba(255,255,255,.5)" font-size="9" font-weight="700" font-family="Inter">WED</text>
                        <text x="356" y="23" fill="rgba(255,255,255,.5)" font-size="9" font-weight="700" font-family="Inter">THU</text>
                        <text x="456" y="23" fill="rgba(255,255,255,.5)" font-size="9" font-weight="700" font-family="Inter">FRI</text>
                        <!-- Vertical dividers -->
                        <line x1="107" y1="5" x2="107" y2="150" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                        <line x1="209" y1="5" x2="209" y2="150" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                        <line x1="311" y1="5" x2="311" y2="150" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                        <line x1="413" y1="5" x2="413" y2="150" stroke="rgba(255,255,255,.06)" stroke-width="1"/>

                        <!-- MON events -->
                        <rect x="12" y="40" width="88" height="18" rx="4" fill="rgba(0,184,112,.15)" stroke="rgba(0,184,112,.3)" stroke-width="1" style="animation:scaleUp .3s ease forwards .3s;opacity:0;transform-origin:56px 49px"/>
                        <text x="18" y="52" fill="rgba(0,184,112,.85)" font-size="7.5" font-weight="600" font-family="Inter" style="animation:fadeIn .3s ease forwards .35s;opacity:0">PMI Manufacturing</text>

                        <!-- TUE events -->
                        <rect x="115" y="40" width="88" height="18" rx="4" fill="rgba(232,150,10,.15)" stroke="rgba(232,150,10,.3)" stroke-width="1" style="animation:scaleUp .3s ease forwards .5s;opacity:0;transform-origin:159px 49px"/>
                        <text x="121" y="52" fill="rgba(232,150,10,.85)" font-size="7.5" font-weight="600" font-family="Inter" style="animation:fadeIn .3s ease forwards .55s;opacity:0">Trade Balance Data</text>
                        <rect x="115" y="65" width="88" height="18" rx="4" fill="rgba(0,184,112,.15)" stroke="rgba(0,184,112,.3)" stroke-width="1" style="animation:scaleUp .3s ease forwards .55s;opacity:0;transform-origin:159px 74px"/>
                        <text x="121" y="77" fill="rgba(0,184,112,.85)" font-size="7.5" font-weight="600" font-family="Inter" style="animation:fadeIn .3s ease forwards .6s;opacity:0">Consumer Confidence</text>

                        <!-- WED events — HIGH (red) -->
                        <rect x="217" y="40" width="88" height="18" rx="4" fill="rgba(200,16,46,.2)" stroke="rgba(200,16,46,.45)" stroke-width="1.5" style="animation:scaleUp .3s ease forwards .7s;opacity:0;transform-origin:261px 49px"/>
                        <text x="223" y="52" fill="#ff0000" font-size="7.5" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards .75s;opacity:0">🔴 US CPI Inflation</text>
                        <rect x="217" y="65" width="88" height="18" rx="4" fill="rgba(200,16,46,.2)" stroke="rgba(200,16,46,.45)" stroke-width="1.5" style="animation:scaleUp .3s ease forwards .75s;opacity:0;transform-origin:261px 74px"/>
                        <text x="223" y="77" fill="#ff0000" font-size="7.5" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards .8s;opacity:0">🔴 FOMC Minutes</text>
                        <rect x="217" y="90" width="88" height="18" rx="4" fill="rgba(232,150,10,.15)" stroke="rgba(232,150,10,.3)" stroke-width="1" style="animation:scaleUp .3s ease forwards .8s;opacity:0;transform-origin:261px 99px"/>
                        <text x="223" y="102" fill="rgba(232,150,10,.85)" font-size="7.5" font-weight="600" font-family="Inter" style="animation:fadeIn .3s ease forwards .85s;opacity:0">Crude Oil Inventory</text>

                        <!-- THU events -->
                        <rect x="319" y="40" width="88" height="18" rx="4" fill="rgba(200,16,46,.2)" stroke="rgba(200,16,46,.45)" stroke-width="1.5" style="animation:scaleUp .3s ease forwards .9s;opacity:0;transform-origin:363px 49px"/>
                        <text x="325" y="52" fill="#ff0000" font-size="7.5" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards .95s;opacity:0">🔴 ECB Rate Decision</text>
                        <rect x="319" y="65" width="88" height="18" rx="4" fill="rgba(0,184,112,.15)" stroke="rgba(0,184,112,.3)" stroke-width="1" style="animation:scaleUp .3s ease forwards .95s;opacity:0;transform-origin:363px 74px"/>
                        <text x="325" y="77" fill="rgba(0,184,112,.85)" font-size="7.5" font-weight="600" font-family="Inter" style="animation:fadeIn .3s ease forwards 1s;opacity:0">Initial Jobless Claims</text>

                        <!-- FRI events — NFP -->
                        <rect x="421" y="40" width="88" height="18" rx="4" fill="rgba(200,16,46,.2)" stroke="rgba(200,16,46,.45)" stroke-width="1.5" style="animation:scaleUp .3s ease forwards 1.1s;opacity:0;transform-origin:465px 49px"/>
                        <text x="427" y="52" fill="#ff0000" font-size="7.5" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.15s;opacity:0">🔴 NFP Employment</text>
                        <rect x="421" y="65" width="88" height="18" rx="4" fill="rgba(200,16,46,.2)" stroke="rgba(200,16,46,.45)" stroke-width="1.5" style="animation:scaleUp .3s ease forwards 1.15s;opacity:0;transform-origin:465px 74px"/>
                        <text x="427" y="77" fill="#ff0000" font-size="7.5" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.2s;opacity:0">🔴 US Unemployment</text>

                        <!-- Legend -->
                        <rect x="12" y="130" width="10" height="8" rx="2" fill="rgba(200,16,46,.4)" stroke="rgba(200,16,46,.6)" stroke-width="1"/>
                        <text x="26" y="138" fill="rgba(200,16,46,.7)" font-size="8" font-weight="700" font-family="Inter">High Impact</text>
                        <rect x="110" y="130" width="10" height="8" rx="2" fill="rgba(232,150,10,.3)" stroke="rgba(232,150,10,.5)" stroke-width="1"/>
                        <text x="124" y="138" fill="rgba(232,150,10,.7)" font-size="8" font-weight="700" font-family="Inter">Medium Impact</text>
                        <rect x="230" y="130" width="10" height="8" rx="2" fill="rgba(0,184,112,.25)" stroke="rgba(0,184,112,.45)" stroke-width="1"/>
                        <text x="244" y="138" fill="rgba(0,184,112,.7)" font-size="8" font-weight="700" font-family="Inter">Low Impact</text>
                    </svg>
                    </div>

                    <div class="rules b">
                    <div class="r-title"><i class="ti ti-list-check"></i>What Every Economic Calendar Shows</div>
                    <div class="rrow"><div class="rdot"></div><b>Date and time:</b> exactly when each release is scheduled — always shown in UTC or your local timezone</div>
                    <div class="rrow"><div class="rdot"></div><b>Country and currency:</b> which economy the data comes from and which currency it primarily affects</div>
                    <div class="rrow"><div class="rdot"></div><b>Impact level:</b> red (High), orange (Medium), or green (Low) — your guide to how much market movement to expect</div>
                    <div class="rrow"><div class="rdot"></div><b>Forecast vs Previous:</b> analysts' expectations and last period's result — the gap between actual and forecast drives the move</div>
                    <div class="rrow"><div class="rdot"></div><b>Actual result:</b> the real data released — markets move instantly when this differs significantly from the forecast</div>
                    </div>
                    <button class="btn-done" onclick="markDone(1)"><i class="ti ti-check"></i>Mark Complete</button>
                </div>
                </div>
            </article>

            <!-- L2 HIGH MEDIUM LOW IMPACT -->
            <article class="mod rv" data-id="2">
                <div class="mod-hd" onclick="tog(2)">
                <div class="mn">02</div><div class="mico"><i class="ti ti-alert-triangle"></i></div>
                <div class="mmeta"><div class="mtitle">High, Medium and Low Impact News</div><div class="msub">Understanding the three tiers of market-moving events</div></div>
                <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                </div>
                <div class="mbody">
                <div class="minner">
                    <div class="l-sub">Impact Classification</div>
                    <h2 class="l-head">Not All News is Equal. Know Which Events Require Your Full Attention.</h2>
                    <p class="l-body">Economic events are classified by their potential to move markets. <b>High-impact events can move major pairs 50–200+ pips within seconds of release.</b> Medium-impact events produce moderate moves. Low-impact events rarely cause significant price action but are still worth monitoring.</p>

                    <div class="impact-cards">
                    <div class="ic high">
                        <div class="ic-icon" style="background-color: var(--zed-primary);"></div>
                        <div class="ic-label">High Impact</div>
                        <div class="ic-desc">NFP, CPI, Interest Rate Decisions, FOMC. Immediate, large, often unpredictable moves.</div>
                        <div class="ic-pip">50–200+ pips possible</div>
                    </div>
                    <div class="ic medium">
                        <div class="ic-icon" style="background-color: var(--zed-primary);"></div>
                        <div class="ic-label">Medium Impact</div>
                        <div class="ic-desc">PMI, Retail Sales, Trade Balance, Jobless Claims. Moderate moves, trend-confirming.</div>
                        <div class="ic-pip">20–60 pips typical</div>
                    </div>
                    <div class="ic low">
                        <div class="ic-icon" style="background-color: var(--zed-primary);"></div>
                        <div class="ic-label">Low Impact</div>
                        <div class="ic-desc">Housing Data, Minor Speeches, Building Permits. Usually minimal direct market impact.</div>
                        <div class="ic-pip">5–20 pips typical</div>
                    </div>
                    </div>

                    <!-- IMPACT SPIKE CHART -->
                    <div class="cbox">
                    <div class="cb-head"><span class="cb-lbl"><i class="ti ti-chart-line"></i>Price Spike — High Impact News Release (NFP)</span><span class="cb-sub">EUR/USD · 1-Minute View</span></div>
                    <svg viewBox="0 0 520 140" width="100%" height="132" aria-label="Price spike chart showing the moment of a high impact NFP news release">
                        <line x1="0" y1="35" x2="520" y2="35" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                        <line x1="0" y1="70" x2="520" y2="70" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                        <line x1="0" y1="105" x2="520" y2="105" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                        <!-- Pre-news calm -->
                        <path d="M5,75 L60,72 L115,74 L170,71 L225,73 L250,72" stroke="rgba(255,255,255,.45)" stroke-width="2" fill="none" stroke-dasharray="600" stroke-dashoffset="600" style="animation:traceL 1.2s ease forwards .3s"/>
                        <!-- News line -->
                        <line x1="255" y1="5" x2="255" y2="140" stroke="#ff0000" stroke-width="2" stroke-dasharray="6,4" style="animation:fadeIn .3s ease forwards 1.6s;opacity:0"/>
                        <text x="258" y="22" fill="#ff0000" font-size="9" font-weight="800" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.6s;opacity:0">NFP RELEASE</text>
                        <text x="258" y="35" fill="#ff0000" font-size="8" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.6s;opacity:0">13:30 UTC</text>
                        <!-- Spike up then settle -->
                        <path d="M255,72 L270,28 L285,42 L300,18 L315,35 L330,25 L345,38 L360,30 L380,42 L400,38 L430,44 L460,40 L490,38 L515,36" stroke="#ff0000" stroke-width="2.5" fill="none" stroke-dasharray="800" stroke-dashoffset="800" style="animation:traceL 2s ease forwards 1.8s"/>
                        <!-- Spread indicator -->
                        <rect x="252" y="60" width="6" height="25" rx="1" fill="#ff0000" style="animation:fadeIn .3s ease forwards 1.6s;opacity:0"/>
                        <text x="262" y="68" fill="#ff0000" font-size="8" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.8s;opacity:0">↑ Wide Spread</text>
                        <!-- Labels -->
                        <text x="10" y="90" fill="rgba(255,255,255,.3)" font-size="8.5" font-family="Inter">Pre-news: Calm, tight spread</text>
                        <text x="340" y="22" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards 2.5s;opacity:0">Post-news direction forms</text>
                    </svg>
                    </div>

                    <div class="rules">
                    <div class="r-title"><i class="ti ti-shield"></i>Impact Level — What to Do</div>
                    <div class="rrow"><div class="rdot"></div><b>High Impact (Red):</b> Stop trading 30 minutes before. Close or move open positions to breakeven. Never enter during the spike.</div>
                    <div class="rrow"><div class="rdot"></div><b>Medium Impact (Orange):</b> Be aware. Reduce position size if already in a trade. Watch for accelerated moves if you are near key levels.</div>
                    <div class="rrow"><div class="rdot"></div><b>Low Impact (Green):</b> Monitor but typically no action needed. Continue your normal analysis routine.</div>
                    <div class="rrow"><div class="rdot"></div>The tradeable move almost always comes <b>15–30 minutes after the release</b> — never trade the initial spike</div>
                    </div>
                    <button class="btn-done" onclick="markDone(2)"><i class="ti ti-check"></i>Mark Complete</button>
                </div>
                </div>
            </article>

            <!-- L3 INTEREST RATE DECISIONS -->
            <article class="mod rv" data-id="3">
                <div class="mod-hd" onclick="tog(3)">
                <div class="mn">03</div><div class="mico"><i class="ti ti-building-bank"></i></div>
                <div class="mmeta"><div class="mtitle">Interest Rate Decisions</div><div class="msub">The single most market-moving event in Forex trading</div></div>
                <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                </div>
                <div class="mbody">
                <div class="minner">
                    <div class="l-sub">Central Bank Policy</div>
                    <h2 class="l-head">Interest Rate Decisions Move Every Market Simultaneously.</h2>
                    <p class="l-body">When a central bank changes interest rates — or even signals a change in its future policy stance — <b>every major Forex pair, commodity, equity index and bond market reacts instantly.</b> Understanding the relationship between rates and market prices is non-negotiable knowledge for any trader.</p>

                    <!-- RATE DECISION IMPACT CHART -->
                    <div class="cbox">
                    <div class="cb-head"><span class="cb-lbl"><i class="ti ti-building-bank"></i>Rate Hike vs Rate Cut — Multi-Market Impact</span><span class="cb-sub">General Relationship</span></div>
                    <svg viewBox="0 0 520 145" width="100%" height="138" aria-label="Chart showing rate hike versus rate cut impact across currencies gold and equities">
                        <!-- RATE HIKE side (left) -->
                        <rect x="5" y="5" width="250" height="130" rx="8" fill="#fff" stroke="rgba(200,16,46,.2)" stroke-width="1"/>
                        <text x="55" y="22" fill="#ff0000" font-size="10" font-weight="800" font-family="Inter">RATE HIKE ↑</text>
                        <text x="18" y="22" fill="#ff0000" font-size="14">📈</text>
                        <!-- Hike impact bars -->
                        <text x="14" y="42" fill="rgba(255,255,255,.45)" font-size="8.5" font-family="Inter">USD</text>
                        <rect x="40" y="33" height="12" rx="3" fill="#7b7b7b"><animate attributeName="width" from="0" to="160" dur=".8s" begin=".4s" fill="freeze"/></rect>
                        <text x="205" y="42" fill="#7b7b7b" font-size="8.5" font-weight="700" font-family="Inter">↑ Strong</text>
                        <text x="14" y="63" fill="rgba(255,255,255,.45)" font-size="8.5" font-family="Inter">Gold</text>
                        <rect x="40" y="54" height="12" rx="3" fill="#C8102E"><animate attributeName="width" from="0" to="120" dur=".8s" begin=".5s" fill="freeze"/></rect>
                        <text x="165" y="63" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">↓ Falls</text>
                        <text x="14" y="84" fill="rgba(255,255,255,.45)" font-size="8.5" font-family="Inter">Stocks</text>
                        <rect x="40" y="75" height="12" rx="3" fill="#C8102E"><animate attributeName="width" from="0" to="100" dur=".8s" begin=".6s" fill="freeze"/></rect>
                        <text x="145" y="84" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">↓ Pressure</text>
                        <text x="14" y="105" fill="rgba(255,255,255,.45)" font-size="8.5" font-family="Inter">AUD/JPY</text>
                        <rect x="50" y="96" height="12" rx="3" fill="#C8102E"><animate attributeName="width" from="0" to="90" dur=".8s" begin=".7s" fill="freeze"/></rect>
                        <text x="145" y="105" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">↓ Weakens</text>
                        <text x="14" y="126" fill="rgba(255,255,255,.3)" font-size="7.5" font-family="Inter" font-style="italic">Hawkish = USD buying</text>

                        <!-- RATE CUT side (right) -->
                        <rect x="265" y="5" width="250" height="130" rx="8" fill="#fff" stroke="rgba(0,184,112,.2)" stroke-width="1"/>
                        <text x="318" y="22" fill="#7b7b7b" font-size="10" font-weight="800" font-family="Inter">RATE CUT ↓</text>
                        <text x="278" y="22" fill="#7b7b7b" font-size="14">📉</text>
                        <!-- Cut impact bars -->
                        <text x="274" y="42" fill="rgba(255,255,255,.45)" font-size="8.5" font-family="Inter">USD</text>
                        <rect x="300" y="33" height="12" rx="3" fill="#C8102E"><animate attributeName="width" from="0" to="130" dur=".8s" begin=".5s" fill="freeze"/></rect>
                        <text x="435" y="42" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">↓ Weak</text>
                        <text x="274" y="63" fill="rgba(255,255,255,.45)" font-size="8.5" font-family="Inter">Gold</text>
                        <rect x="300" y="54" height="12" rx="3" fill="#7b7b7b"><animate attributeName="width" from="0" to="150" dur=".8s" begin=".6s" fill="freeze"/></rect>
                        <text x="455" y="63" fill="#7b7b7b" font-size="8.5" font-weight="700" font-family="Inter">↑ Rises</text>
                        <text x="274" y="84" fill="rgba(255,255,255,.45)" font-size="8.5" font-family="Inter">Stocks</text>
                        <rect x="300" y="75" height="12" rx="3" fill="#7b7b7b"><animate attributeName="width" from="0" to="140" dur=".8s" begin=".7s" fill="freeze"/></rect>
                        <text x="445" y="84" fill="#7b7b7b" font-size="8.5" font-weight="700" font-family="Inter">↑ Rally</text>
                        <text x="274" y="105" fill="rgba(255,255,255,.45)" font-size="8.5" font-family="Inter">AUD/JPY</text>
                        <rect x="310" y="96" height="12" rx="3" fill="#7b7b7b"><animate attributeName="width" from="0" to="130" dur=".8s" begin=".8s" fill="freeze"/></rect>
                        <text x="445" y="105" fill="#7b7b7b" font-size="8.5" font-weight="700" font-family="Inter">↑ Rises</text>
                        <text x="274" y="126" fill="rgba(255,255,255,.3)" font-size="7.5" font-family="Inter" font-style="italic">Dovish = Risk-on rally</text>
                    </svg>
                    </div>

                    <div class="sgrid">
                    <div class="sbox r"><div class="sv">5.50%</div><div class="sk">Current Fed Rate</div></div>
                    <div class="sbox a"><div class="sv">4.50%</div><div class="sk">Current ECB Rate</div></div>
                    <div class="sbox b"><div class="sv">5.25%</div><div class="sk">Current BoE Rate</div></div>
                    </div>
                    <div class="rules">
                    <div class="r-title"><i class="ti ti-list-check"></i>Key Rate Decision Facts</div>
                    <div class="rrow"><div class="rdot"></div>The Fed (US), ECB (EU), BoE (UK) and BoJ (Japan) are the four most market-moving central banks globally</div>
                    <div class="rrow"><div class="rdot"></div><b>It is not just the rate change that moves the market — it is the forward guidance</b> in the statement and press conference</div>
                    <div class="rrow"><div class="rdot"></div>"Hawkish" language = rates staying high or going higher → USD bullish, Gold bearish</div>
                    <div class="rrow"><div class="rdot"></div>"Dovish" language = rates cutting or staying low → USD bearish, Gold bullish, equities bullish</div>
                    <div class="rrow"><div class="rdot"></div>Rate decisions are released on a fixed schedule — check Investing.com or Forex Factory every month</div>
                    </div>
                    <button class="btn-done" onclick="markDone(3)"><i class="ti ti-check"></i>Mark Complete</button>
                </div>
                </div>
            </article>

            <!-- L4 CPI & INFLATION -->
            <article class="mod rv" data-id="4">
                <div class="mod-hd" onclick="tog(4)">
                <div class="mn">04</div><div class="mico"><i class="ti ti-trending-up"></i></div>
                <div class="mmeta"><div class="mtitle">CPI and Inflation Data</div><div class="msub">How inflation numbers move currencies, gold and rates</div></div>
                <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                </div>
                <div class="mbody">
                <div class="minner">
                    <div class="l-sub">Inflation Data</div>
                    <h2 class="l-head">CPI is the Most Watched Monthly Data Release in Forex.</h2>
                    <p class="l-body">CPI (Consumer Price Index) measures the average change in prices paid by consumers for goods and services. <b>It is the primary measure of inflation</b> — and because central banks set interest rates to control inflation, CPI data directly drives expectations for future rate decisions and therefore currency strength.</p>

                    <!-- CPI CHART -->
                    <div class="cbox">
                    <div class="cb-head"><span class="cb-lbl"><i class="ti ti-chart-bar"></i>US CPI Monthly Readings — Trend Analysis</span><span class="cb-sub">Year-on-Year %</span></div>
                    <svg viewBox="0 0 520 130" width="100%" height="122" aria-label="US CPI monthly readings bar chart showing inflation trend">
                        <line x1="40" y1="15" x2="510" y2="15" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                        <line x1="40" y1="45" x2="510" y2="45" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                        <line x1="40" y1="75" x2="510" y2="75" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                        <line x1="40" y1="105" x2="510" y2="105" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                        <text x="8" y="18" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">4%</text>
                        <text x="8" y="48" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">3%</text>
                        <text x="8" y="78" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">2%</text>
                        <text x="8" y="108" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">1%</text>
                        <!-- Target line -->
                        <line x1="40" y1="75" x2="510" y2="75" stroke="rgba(0,184,112,.4)" stroke-width="1.5" stroke-dasharray="6,4"/>
                        <text x="470" y="70" fill="rgba(0,184,112,.65)" font-size="8" font-weight="700" font-family="Inter">2% Target</text>
                        <!-- Bars (months) — animated -->
                        <rect x="50" y="105" width="28" height="0" rx="2" fill="#ff0000"><animate attributeName="height" from="0" to="55" dur=".7s" begin=".3s" fill="freeze"/><animate attributeName="y" from="105" to="50" dur=".7s" begin=".3s" fill="freeze"/></rect>
                        <text x="52" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">Jan</text>
                        <rect x="95" y="105" width="28" height="0" rx="2" fill="#ff0000"><animate attributeName="height" from="0" to="62" dur=".7s" begin=".4s" fill="freeze"/><animate attributeName="y" from="105" to="43" dur=".7s" begin=".4s" fill="freeze"/></rect>
                        <text x="97" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">Feb</text>
                        <rect x="140" y="105" width="28" height="0" rx="2" fill="#7b7b7b"><animate attributeName="height" from="0" to="48" dur=".7s" begin=".5s" fill="freeze"/><animate attributeName="y" from="105" to="57" dur=".7s" begin=".5s" fill="freeze"/></rect>
                        <text x="142" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">Mar</text>
                        <rect x="185" y="105" width="28" height="0" rx="2" fill="#7b7b7b"><animate attributeName="height" from="0" to="42" dur=".7s" begin=".6s" fill="freeze"/><animate attributeName="y" from="105" to="63" dur=".7s" begin=".6s" fill="freeze"/></rect>
                        <text x="187" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">Apr</text>
                        <rect x="230" y="105" width="28" height="0" rx="2" fill="#7b7b7b"><animate attributeName="height" from="0" to="38" dur=".7s" begin=".7s" fill="freeze"/><animate attributeName="y" from="105" to="67" dur=".7s" begin=".7s" fill="freeze"/></rect>
                        <text x="232" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">May</text>
                        <rect x="275" y="105" width="28" height="0" rx="2" fill="#7b7b7b"><animate attributeName="height" from="0" to="35" dur=".7s" begin=".8s" fill="freeze"/><animate attributeName="y" from="105" to="70" dur=".7s" begin=".8s" fill="freeze"/></rect>
                        <text x="277" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">Jun</text>
                        <rect x="320" y="105" width="28" height="0" rx="2" fill="#7b7b7b"><animate attributeName="height" from="0" to="32" dur=".7s" begin=".9s" fill="freeze"/><animate attributeName="y" from="105" to="73" dur=".7s" begin=".9s" fill="freeze"/></rect>
                        <text x="322" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">Jul</text>
                        <rect x="365" y="105" width="28" height="0" rx="2" fill="#00B870"><animate attributeName="height" from="0" to="30" dur=".7s" begin="1s" fill="freeze"/><animate attributeName="y" from="105" to="75" dur=".7s" begin="1s" fill="freeze"/></rect>
                        <text x="367" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">Aug</text>
                        <rect x="410" y="105" width="28" height="0" rx="2" fill="#00B870"><animate attributeName="height" from="0" to="28" dur=".7s" begin="1.1s" fill="freeze"/><animate attributeName="y" from="105" to="77" dur=".7s" begin="1.1s" fill="freeze"/></rect>
                        <text x="412" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">Sep</text>
                        <rect x="455" y="105" width="28" height="0" rx="2" fill="#00B870"><animate attributeName="height" from="0" to="30" dur=".7s" begin="1.2s" fill="freeze"/><animate attributeName="y" from="105" to="75" dur=".7s" begin="1.2s" fill="freeze"/></rect>
                        <text x="457" y="120" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">Oct</text>
                    </svg>
                    </div>

                    <div class="two">
                    <div class="tc r">
                        <div class="tc-h"><i class="ti ti-trending-up"></i>CPI Higher Than Expected</div>
                        <div class="tc-row">Inflation rising → Fed may hike rates or hold higher longer</div>
                        <div class="tc-row">USD typically strengthens immediately on the release</div>
                        <div class="tc-row">Gold often falls — higher rates increase opportunity cost</div>
                        <div class="tc-row">Bond yields rise, equities may sell off on rate concerns</div>
                    </div>
                    <div class="tc g">
                        <div class="tc-h"><i class="ti ti-trending-down"></i>CPI Lower Than Expected</div>
                        <div class="tc-row">Inflation cooling → Fed may cut rates sooner than expected</div>
                        <div class="tc-row">USD typically weakens on the release</div>
                        <div class="tc-row">Gold tends to rise — lower rates reduce opportunity cost</div>
                        <div class="tc-row">Equities often rally on rate cut optimism</div>
                    </div>
                    </div>
                    <button class="btn-done" onclick="markDone(4)"><i class="ti ti-check"></i>Mark Complete</button>
                </div>
                </div>
            </article>

            <!-- L5 NFP & EMPLOYMENT -->
            <article class="mod rv" data-id="5">
                <div class="mod-hd" onclick="tog(5)">
                <div class="mn">05</div><div class="mico"><i class="ti ti-users"></i></div>
                <div class="mmeta"><div class="mtitle">NFP and Employment Reports</div><div class="msub">The single biggest monthly Forex event — every first Friday</div></div>
                <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                </div>
                <div class="mbody">
                <div class="minner">
                    <div class="l-sub">Employment Data</div>
                    <h2 class="l-head">NFP Day Moves the Entire Forex Market. Be Prepared.</h2>
                    <p class="l-body">The Non-Farm Payrolls (NFP) report is released on the first Friday of every month at 12:30 UTC. It measures the total number of paid workers in the US (excluding farm workers). <b>It is the single most anticipated and market-moving monthly Forex release</b> — capable of moving major pairs 100–200+ pips in minutes.</p>

                    <!-- NFP SPIKE CHART -->
                    <div class="cbox">
                    <div class="cb-head"><span class="cb-lbl"><i class="ti ti-users"></i>NFP Release — EUR/USD Price Reaction (Strong NFP)</span><span class="cb-sub">1-Minute Chart · 12:30 UTC</span></div>
                    <svg viewBox="0 0 520 140" width="100%" height="132" aria-label="EUR/USD price reaction to a strong NFP release showing sharp drop">
                        <line x1="0" y1="35" x2="520" y2="35" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                        <line x1="0" y1="70" x2="520" y2="70" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                        <line x1="0" y1="105" x2="520" y2="105" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                        <!-- Pre-NFP calm -->
                        <path d="M5,68 L60,66 L115,68 L170,65 L225,67 L248,66" stroke="rgba(255,255,255,.4)" stroke-width="2" fill="none" stroke-dasharray="600" stroke-dashoffset="600" style="animation:traceL 1.2s ease forwards .3s"/>
                        <!-- NFP line -->
                        <line x1="255" y1="5" x2="255" y2="140" stroke="rgba(200,16,46,.6)" stroke-width="2" stroke-dasharray="6,4" style="animation:fadeIn .3s ease forwards 1.6s;opacity:0"/>
                        <text x="258" y="15" fill="rgba(200,16,46,.85)" font-size="9" font-weight="800" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.6s;opacity:0">NFP: +312K</text>
                        <text x="258" y="28" fill="rgba(200,16,46,.65)" font-size="8" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.6s;opacity:0">Forecast: +185K ← BEAT!</text>
                        <!-- Sharp drop (strong jobs = USD up, EUR down) -->
                        <path d="M255,66 L268,90 L280,110 L292,98 L305,118 L318,108 L332,112 L348,106 L365,110 L385,108 L410,104 L440,106 L470,103 L500,105 L515,104" stroke="#C8102E" stroke-width="2.5" fill="none" stroke-dasharray="800" stroke-dashoffset="800" style="animation:traceL 2s ease forwards 1.8s"/>
                        <text x="12" y="62" fill="rgba(255,255,255,.3)" font-size="8.5" font-family="Inter">EUR/USD Pre-NFP: 1.0854</text>
                        <text x="370" y="125" fill="rgba(200,16,46,.7)" font-size="8.5" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 3s;opacity:0">EUR/USD drops ~90 pips</text>
                        <!-- Pip measurement arrow -->
                        <line x1="248" y1="66" x2="248" y2="118" stroke="rgba(200,16,46,.5)" stroke-width="1" style="animation:fadeIn .4s ease forwards 2.5s;opacity:0"/>
                        <text x="220" y="95" fill="rgba(200,16,46,.65)" font-size="8.5" font-family="Inter" style="animation:fadeIn .4s ease forwards 2.5s;opacity:0">~90p</text>
                    </svg>
                    </div>

                    <div class="sgrid">
                    <div class="sbox r"><div class="sv">1st</div><div class="sk">Friday of every month</div></div>
                    <div class="sbox a"><div class="sv">12:30</div><div class="sk">UTC Release Time</div></div>
                    <div class="sbox g"><div class="sv">100+</div><div class="sk">Pips possible in minutes</div></div>
                    </div>

                    <div class="rules">
                    <div class="r-title"><i class="ti ti-list-check"></i>NFP — What Every Trader Must Know</div>
                    <div class="rrow"><div class="rdot"></div><b>Strong NFP (beats forecast):</b> USD strengthens — EUR/USD falls, Gold falls, USD/JPY rises</div>
                    <div class="rrow"><div class="rdot"></div><b>Weak NFP (misses forecast):</b> USD weakens — EUR/USD rises, Gold rises, USD/JPY falls</div>
                    <div class="rrow"><div class="rdot"></div><b>Close to forecast:</b> muted reaction — market often fades the initial spike within 15–30 minutes</div>
                    <div class="rrow"><div class="rdot"></div>Always check <b>Average Hourly Earnings</b> alongside the headline number — wage inflation matters to the Fed</div>
                    <div class="rrow"><div class="rdot"></div><b>Rule:</b> close all positions 30 minutes before NFP. Do not re-enter until 15–20 minutes after, when direction is confirmed</div>
                    </div>
                    <button class="btn-done" onclick="markDone(5)"><i class="ti ti-check"></i>Mark Complete</button>
                </div>
                </div>
            </article>

            <!-- L6 GDP DATA -->
            <article class="mod rv" data-id="6">
                <div class="mod-hd" onclick="tog(6)">
                <div class="mn">06</div><div class="mico"><i class="ti ti-chart-bar"></i></div>
                <div class="mmeta"><div class="mtitle">GDP Data</div><div class="msub">How economic growth figures shape long-term market direction</div></div>
                <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                </div>
                <div class="mbody">
                <div class="minner">
                    <div class="l-sub">Economic Growth</div>
                    <h2 class="l-head">GDP Growth Defines the Long-Term Health of Every Currency.</h2>
                    <p class="l-body">GDP (Gross Domestic Product) measures the total value of goods and services produced by an economy in a given period. <b>Strong GDP growth signals a healthy economy</b> — which typically supports currency strength. Contracting GDP signals recession risk — bearish for the currency and bullish for safe-haven assets like Gold and JPY.</p>

                    <!-- GDP BAR CHART -->
                    <div class="cbox">
                    <div class="cb-head"><span class="cb-lbl"><i class="ti ti-chart-bar"></i>GDP Growth Comparison — Major Economies (Annual %)</span><span class="cb-sub">Indicative Figures</span></div>
                    <svg viewBox="0 0 520 140" width="100%" height="132" aria-label="GDP growth comparison bar chart for major economies">
                        <!-- Baseline -->
                        <line x1="40" y1="90" x2="510" y2="90" stroke="rgba(255,255,255,.25)" stroke-width="1"/>
                        <text x="8" y="44" fill="rgba(255,255,255,.28)" font-size="8" font-family="Inter">+3%</text>
                        <text x="8" y="64" fill="rgba(255,255,255,.28)" font-size="8" font-family="Inter">+2%</text>
                        <text x="8" y="84" fill="rgba(255,255,255,.28)" font-size="8" font-family="Inter">+1%</text>
                        <text x="8" y="94" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">0%</text>
                        <text x="8" y="114" fill="rgba(255,255,255,.28)" font-size="8" font-family="Inter">−1%</text>
                        <!-- USA bar -->
                        <rect x="60" y="90" width="52" height="0" rx="3" fill="#00B870"><animate attributeName="height" from="0" to="45" dur=".8s" begin=".3s" fill="freeze"/><animate attributeName="y" from="90" to="45" dur=".8s" begin=".3s" fill="freeze"/></rect>
                        <text x="65" y="125" fill="rgba(255,255,255,.45)" font-size="9" font-weight="600" font-family="Inter">🇺🇸 USA</text>
                        <text x="68" y="40" fill="rgba(0,184,112,.85)" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 1.1s;opacity:0">+2.5%</text>
                        <!-- UK bar -->
                        <rect x="135" y="90" width="52" height="0" rx="3" fill="#7b7b7b"><animate attributeName="height" from="0" to="20" dur=".8s" begin=".45s" fill="freeze"/><animate attributeName="y" from="90" to="70" dur=".8s" begin=".45s" fill="freeze"/></rect>
                        <text x="140" y="125" fill="rgba(255,255,255,.45)" font-size="9" font-weight="600" font-family="Inter">🇬🇧 UK</text>
                        <text x="143" y="65" fill="#ff0000" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 1.2s;opacity:0">+0.9%</text>
                        <!-- EU bar -->
                        <rect x="210" y="90" width="52" height="0" rx="3" fill="#7b7b7b"><animate attributeName="height" from="0" to="15" dur=".8s" begin=".6s" fill="freeze"/><animate attributeName="y" from="90" to="75" dur=".8s" begin=".6s" fill="freeze"/></rect>
                        <text x="215" y="125" fill="rgba(255,255,255,.45)" font-size="9" font-weight="600" font-family="Inter">🇪🇺 EU</text>
                        <text x="218" y="70" fill="#ff0000" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 1.3s;opacity:0">+0.6%</text>
                        <!-- Japan bar (slightly negative) -->
                        <rect x="285" y="90" width="52" height="0" rx="3" fill="#ff0000"><animate attributeName="height" from="0" to="12" dur=".8s" begin=".75s" fill="freeze"/></rect>
                        <text x="290" y="125" fill="rgba(255,255,255,.45)" font-size="9" font-weight="600" font-family="Inter">🇯🇵 Japan</text>
                        <text x="290" y="118" fill="rgba(200,16,46,.85)" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 1.4s;opacity:0">−0.4%</text>
                        <!-- China bar -->
                        <rect x="360" y="90" width="52" height="0" rx="3" fill="#00B870"><animate attributeName="height" from="0" to="60" dur=".8s" begin=".9s" fill="freeze"/><animate attributeName="y" from="90" to="30" dur=".8s" begin=".9s" fill="freeze"/></rect>
                        <text x="365" y="125" fill="rgba(255,255,255,.45)" font-size="9" font-weight="600" font-family="Inter">🇨🇳 China</text>
                        <text x="365" y="25" fill="rgba(0,184,112,.85)" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 1.6s;opacity:0">+5.2%</text>
                        <!-- Canada bar -->
                        <rect x="435" y="90" width="52" height="0" rx="3" fill="#7b7b7b"><animate attributeName="height" from="0" to="18" dur=".8s" begin="1.05s" fill="freeze"/><animate attributeName="y" from="90" to="72" dur=".8s" begin="1.05s" fill="freeze"/></rect>
                        <text x="440" y="125" fill="rgba(255,255,255,.45)" font-size="9" font-weight="600" font-family="Inter">🇨🇦 Canada</text>
                        <text x="440" y="67" fill="#ff0000" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 1.7s;opacity:0">+0.8%</text>
                    </svg>
                    </div>

                    <div class="rules b">
                    <div class="r-title"><i class="ti ti-list-check"></i>GDP — What Traders Need to Know</div>
                    <div class="rrow"><div class="rdot"></div><b>GDP above expectations:</b> economy stronger than thought → currency bullish, rate hike odds increase</div>
                    <div class="rrow"><div class="rdot"></div><b>GDP below expectations:</b> economy weaker → currency bearish, rate cut odds increase, Gold may benefit</div>
                    <div class="rrow"><div class="rdot"></div><b>Two consecutive quarters of negative GDP:</b> technical recession. Major bearish signal for that currency.</div>
                    <div class="rrow"><div class="rdot"></div>GDP is released quarterly — it moves markets less sharply than CPI or NFP but sets the longer-term trend</div>
                    <div class="rrow"><div class="rdot"></div>Watch the <b>Preliminary GDP</b> release first — the Final reading rarely surprises, but Preliminary moves markets</div>
                    </div>
                    <button class="btn-done" onclick="markDone(6)"><i class="ti ti-check"></i>Mark Complete</button>
                </div>
                </div>
            </article>

            <!-- L7 CENTRAL BANK SPEECHES -->
            <article class="mod rv" data-id="7">
                <div class="mod-hd" onclick="tog(7)">
                <div class="mn">07</div><div class="mico"><i class="ti ti-microphone"></i></div>
                <div class="mmeta"><div class="mtitle">Central Bank Speeches</div><div class="msub">Why words from central bankers move markets more than data</div></div>
                <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                </div>
                <div class="mbody">
                <div class="minner">
                    <div class="l-sub">Forward Guidance</div>
                    <h2 class="l-head">One Sentence From Jerome Powell Can Move the Dollar 80 Pips.</h2>
                    <p class="l-body">Central bank officials — particularly the Fed Chair (Jerome Powell), ECB President (Christine Lagarde) and BoE Governor — regularly speak at conferences and press events. <b>Their language about inflation, growth and future rate decisions provides the market's most important forward guidance.</b> A single word change in a speech can move markets more than the data itself.</p>

                    <!-- SPEECH IMPACT VISUAL -->
                    <div class="cbox">
                    <div class="cb-head"><span class="cb-lbl"><i class="ti ti-microphone"></i>Powell Speech — USD/JPY Price Reaction</span><span class="cb-sub">Hawkish surprise — Live reaction</span></div>
                    <svg viewBox="0 0 520 135" width="100%" height="128" aria-label="USD/JPY price reaction to a hawkish Federal Reserve speech">
                        <line x1="0" y1="35" x2="520" y2="35" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                        <line x1="0" y1="67" x2="520" y2="67" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                        <line x1="0" y1="100" x2="520" y2="100" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                        <!-- Pre-speech drift -->
                        <path d="M5,70 L50,68 L100,70 L150,67 L200,69 L238,68" stroke="rgba(255,255,255,.4)" stroke-width="1.8" fill="none" stroke-dasharray="400" stroke-dashoffset="400" style="animation:traceL 1s ease forwards .3s"/>
                        <!-- Speech start line -->
                        <line x1="245" y1="5" x2="245" y2="130" stroke="#ff0000" stroke-width="1.5" stroke-dasharray="5,4" style="animation:fadeIn .3s ease forwards 1.4s;opacity:0"/>
                        <text x="248" y="18" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.4s;opacity:0">Powell Speech</text>
                        <text x="248" y="30" fill="#ff0000" font-size="7.5" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.4s;opacity:0">"Higher for longer"</text>
                        <!-- Spike on hawkish comment (USD up = USD/JPY up) -->
                        <path d="M245,68 L260,50 L275,38 L290,45 L305,35 L320,40 L340,36 L360,38 L385,36 L410,34 L445,35 L480,33 L510,32" stroke="#ff0000" stroke-width="2.5" fill="none" stroke-dasharray="700" stroke-dashoffset="700" style="animation:traceL 2s ease forwards 1.6s"/>
                        <text x="290" y="30" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 2.5s;opacity:0">USD/JPY +65 pips</text>
                        <!-- Quote bubble -->
                        <rect x="8" y="105" width="220" height="22" rx="5" fill="rgba(232,150,10,.12)" stroke="rgba(232,150,10,.25)" stroke-width="1" style="animation:fadeIn .5s ease forwards 1.8s;opacity:0"/>
                        <text x="14" y="119" fill="#ff0000" font-size="8" font-family="Inter" style="animation:fadeIn .5s ease forwards 1.8s;opacity:0">"We are prepared to raise rates further if needed"</text>
                    </svg>
                    </div>

                    <div class="two">
                    <div class="tc r">
                        <div class="tc-h"><i class="ti ti-arrow-up-right"></i>Hawkish Language</div>
                        <div class="tc-row">"Rates will remain higher for longer"</div>
                        <div class="tc-row">"We are not done fighting inflation"</div>
                        <div class="tc-row">"Further tightening may be needed"</div>
                        <div class="tc-row">→ USD bullish, Gold bearish, Risk-off</div>
                    </div>
                    <div class="tc g">
                        <div class="tc-h"><i class="ti ti-arrow-down-right"></i>Dovish Language</div>
                        <div class="tc-row">"We are approaching time to cut rates"</div>
                        <div class="tc-row">"Inflation is on a sustainable downward path"</div>
                        <div class="tc-row">"We see risks becoming more balanced"</div>
                        <div class="tc-row">→ USD bearish, Gold bullish, Risk-on</div>
                    </div>
                    </div>
                    <div class="rules a">
                    <div class="r-title"><i class="ti ti-list-check"></i>Central Bank Speech Rules</div>
                    <div class="rrow"><div class="rdot"></div>Follow Fed Chair speeches on Investing.com, Bloomberg and the Federal Reserve website live</div>
                    <div class="rrow"><div class="rdot"></div>Do not trade during a live speech — wait for the headline to be clear, then trade the confirmation</div>
                    <div class="rrow"><div class="rdot"></div>Compare language to the <b>previous statement</b> — any deviation, however small, is significant</div>
                    <div class="rrow"><div class="rdot"></div>FOMC press conferences (8 times per year) are the highest-impact speech events globally</div>
                    </div>
                    <button class="btn-done" onclick="markDone(7)"><i class="ti ti-check"></i>Mark Complete</button>
                </div>
                </div>
            </article>

            <!-- L8 HOW NEWS AFFECTS FOREX -->
            <article class="mod rv" data-id="8">
                <div class="mod-hd" onclick="tog(8)">
                <div class="mn">08</div><div class="mico"><i class="ti ti-currency-exchange"></i></div>
                <div class="mmeta"><div class="mtitle">How News Affects Forex</div><div class="msub">The complete mechanism — from data release to pip movement</div></div>
                <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                </div>
                <div class="mbody">
                <div class="minner">
                    <div class="l-sub">Market Mechanics</div>
                    <h2 class="l-head">Understanding the Full Chain From Data Release to Price Move.</h2>
                    <p class="l-body">Every economic data release follows a predictable chain of reactions in Forex markets. <b>The move is never random</b> — it follows the logic of how the data affects rate expectations, which affects capital flows, which affects currency price. Understanding this chain lets you anticipate direction rather than react to noise.</p>

                    <!-- MECHANISM FLOW -->
                    <div class="cbox">
                    <div class="cb-head"><span class="cb-lbl"><i class="ti ti-arrow-right"></i>News-to-Price Mechanism — Strong US CPI Example</span><span class="cb-sub">Causal Chain</span></div>
                    <svg viewBox="0 0 520 100" width="100%" height="150" aria-label="Diagram showing causal chain from news release to forex price movement">
                        <!-- Step boxes -->
                        <rect x="5" y="30" width="85" height="40" rx="6" fill="#fff" stroke="#ff0000" stroke-width="0.5" style="animation:scaleUp .3s ease forwards .3s;opacity:0;transform-origin:47px 50px"/>
                        <text x="10" y="47" fill="#ff0000" font-size="8" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards .35s;opacity:0">CPI Higher</text>
                        <text x="10" y="58" fill="#000" font-size="7.5" font-family="Inter" style="animation:fadeIn .3s ease forwards .35s;opacity:0">Than Forecast</text>
                        <!-- Arrow -->
                        <path d="M92,50 L104,50" stroke="#ff0000" stroke-width="1.5" marker-end="url(#arrow)" style="animation:fadeIn .3s ease forwards .6s;opacity:0"/>
                        <polygon points="103,46 110,50 103,54" fill="#ff0000" style="animation:fadeIn .3s ease forwards .6s;opacity:0"/>
                        <!-- Step 2 -->
                        <rect x="112" y="30" width="85" height="40" rx="6" fill="#fff" stroke="#ff0000" stroke-width="0.5" style="animation:scaleUp .3s ease forwards .7s;opacity:0;transform-origin:155px 50px"/>
                        <text x="117" y="47" fill="#ff0000" font-size="8" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards .75s;opacity:0">Rate Hike</text>
                        <text x="117" y="58" fill="#000" font-size="7.5" font-family="Inter" style="animation:fadeIn .3s ease forwards .75s;opacity:0">Expectations↑</text>
                        <polygon points="199,46 206,50 199,54" fill="#ff0000" style="animation:fadeIn .3s ease forwards 1s;opacity:0"/>
                        <!-- Step 3 -->
                        <rect x="208" y="30" width="85" height="40" rx="6" fill="#fff" stroke="#ff0000" stroke-width="0.5" style="animation:scaleUp .3s ease forwards 1.1s;opacity:0;transform-origin:251px 50px"/>
                        <text x="213" y="47" fill="#ff0000" font-size="8" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.15s;opacity:0">Capital Flows</text>
                        <text x="213" y="58" fill="#000" font-size="7.5" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.15s;opacity:0">Into USD</text>
                        <polygon points="295,46 302,50 295,54" fill="#ff0000" style="animation:fadeIn .3s ease forwards 1.4s;opacity:0"/>
                        <!-- Step 4 -->
                        <rect x="304" y="30" width="85" height="40" rx="6" fill="#fff" stroke="#ff0000" stroke-width="0.5" style="animation:scaleUp .3s ease forwards 1.5s;opacity:0;transform-origin:346px 50px"/>
                        <text x="309" y="47" fill="#ff0000" font-size="8" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.55s;opacity:0">EUR/USD</text>
                        <text x="309" y="58" fill="#000" font-size="7.5" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.55s;opacity:0">Falls Sharply</text>
                        <polygon points="391,46 398,50 391,54" fill="#ff0000" style="animation:fadeIn .3s ease forwards 1.8s;opacity:0"/>
                        <!-- Step 5 -->
                        <rect x="400" y="30" width="115" height="40" rx="6" fill="#fff" stroke="#ff0000" stroke-width="0.5" style="animation:scaleUp .3s ease forwards 1.9s;opacity:0;transform-origin:458px 50px"/>
                        <text x="405" y="47" fill="#ff0000" font-size="8" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.95s;opacity:0">Tradeable Setup</text>
                        <text x="405" y="58" fill="#000" font-size="7.5" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.95s;opacity:0">15-30 min later</text>
                    </svg>
                    </div>

                    <div class="rules">
                    <div class="r-title"><i class="ti ti-list-check"></i>Complete News-to-Trade Framework</div>
                    <div class="rrow"><div class="rdot"></div><b>Before release:</b> check forecast vs previous. Wider the gap between actual and forecast = larger the move</div>
                    <div class="rrow"><div class="rdot"></div><b>During release:</b> do NOT trade. Spreads are extremely wide. Slippage can fill your trade 20–50 pips from intended price</div>
                    <div class="rrow"><div class="rdot"></div><b>15 minutes after:</b> the initial spike reverses or extends. This is when the <b>real directional move begins</b></div>
                    <div class="rrow"><div class="rdot"></div><b>30 minutes after:</b> look for a retest of a key technical level in the direction of the data. This is your entry zone.</div>
                    <div class="rrow"><div class="rdot"></div>If actual is exactly in line with forecast — expect muted reaction. The market was already positioned.</div>
                    </div>
                    <button class="btn-done" onclick="markDone(8)"><i class="ti ti-check"></i>Mark Complete</button>
                </div>
                </div>
            </article>

            <!-- L9 NEWS TRADING RISK RULES -->
            <article class="mod rv" data-id="9">
                <div class="mod-hd" onclick="tog(9)">
                <div class="mn">09</div><div class="mico"><i class="ti ti-shield"></i></div>
                <div class="mmeta"><div class="mtitle">News Trading Risk Rules</div><div class="msub">Your pre-news protocol and capital protection framework</div></div>
                <div class="mright"><span class="badge b-f">Final</span><i class="ti ti-chevron-right mchev"></i></div>
                </div>
                <div class="mbody">
                <div class="minner">
                    <div class="l-sub">Risk Management</div>
                    <h2 class="l-head">News Events Without a Risk Protocol Will Destroy Your Account.</h2>
                    <p class="l-body">High-impact news creates extreme volatility that bypasses normal risk management. <b>Spreads widen to 5–20x their normal size. Stop losses execute with massive slippage. Positions reverse instantly.</b> Without a strict pre-news protocol, even a correct directional view can result in a large loss. These rules are non-negotiable.</p>

                    <!-- NEWS TRADING RISK CHECKLIST -->
                    <div class="cbox">
                    <div class="cb-head"><span class="cb-lbl"><i class="ti ti-clipboard-check"></i>Pre-News Risk Protocol — Run This Before Every Session</span><span class="cb-sub">Required Every Day</span></div>
                    <svg viewBox="0 0 520 140" width="100%" height="132" aria-label="Pre-news trading protocol checklist visual">
                        <!-- Timeline bar -->
                        <rect x="20" y="55" width="480" height="4" rx="2" fill="rgba(255,255,255,.08)"/>
                        <rect x="20" y="55" width="480" height="4" rx="2" fill="rgba(200,16,46,.3)"><animate attributeName="width" from="0" to="480" dur="1.5s" begin=".3s" fill="freeze"/></rect>
                        <!-- Phase markers -->
                        <!-- T-60 -->
                        <circle cx="20" cy="57" r="7" fill="#ff0000" style="animation:scaleUp .3s ease forwards .5s;opacity:0;transform-origin:20px 57px"/>
                        <text x="5" y="38" fill="#ff0000" font-size="12" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards .55s;opacity:0">T−60min</text>
                        <text x="5" y="80" fill="rgba(255,255,255,.4)" font-size="8" font-family="Inter" style="animation:fadeIn .3s ease forwards .55s;opacity:0">Check calendar</text>
                        <!-- T-30 -->
                        <circle cx="140" cy="57" r="7" fill="#ff0000" style="animation:scaleUp .3s ease forwards .7s;opacity:0;transform-origin:140px 57px"/>
                        <text x="118" y="38" fill="#ff0000" font-size="12" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards .75s;opacity:0">T−30min</text>
                        <text x="110" y="80" fill="rgba(255,255,255,.4)" font-size="8" font-family="Inter" style="animation:fadeIn .3s ease forwards .75s;opacity:0">Close or protect</text>
                        <!-- T-0 RELEASE -->
                        <circle cx="260" cy="57" r="10" fill="#ff0000" style="animation:scaleUp .3s ease forwards .9s;opacity:0;transform-origin:260px 57px"/>
                        <text x="232" y="38" fill="#ff0000" font-size="12" font-weight="800" font-family="Inter" style="animation:fadeIn .3s ease forwards .95s;opacity:0">RELEASE TIME</text>
                        <text x="238" y="80" fill="#ff0000" font-size="12" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards .95s;opacity:0">DO NOT TRADE</text>
                        <!-- T+15 -->
                        <circle cx="370" cy="57" r="7" fill="#ff0000" style="animation:scaleUp .3s ease forwards 1.1s;opacity:0;transform-origin:370px 57px"/>
                        <text x="348" y="38" fill="#ff0000" font-size="12" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.15s;opacity:0">T+15min</text>
                        <text x="340" y="80" fill="rgba(255,255,255,.4)" font-size="8" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.15s;opacity:0">Wait for direction</text>
                        <!-- T+30 ENTRY -->
                        <circle cx="500" cy="57" r="9" fill="#ff0000" style="animation:scaleUp .3s ease forwards 1.3s;opacity:0;transform-origin:500px 57px"/>
                        <text x="472" y="38" fill="#ff0000" font-size="8.5" font-weight="800" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.35s;opacity:0">T+30min</text>
                        <text x="468" y="80" fill="#ff0000" font-size="8" font-weight="700" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.35s;opacity:0">Entry zone</text>
                        <!-- Warning -->
                        <rect x="55" y="100" width="410" height="32" rx="6" fill="#fff" stroke="rgba(200,16,46,.25)" stroke-width="1" style="animation:fadeIn .5s ease forwards 1.5s;opacity:0"/>
                        <text x="65" y="114" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter" style="animation:fadeIn .5s ease forwards 1.5s;opacity:0">⚠ Widened spreads from T−5min to T+10min — never place orders in this window</text>
                        <text x="65" y="127" fill="#000" font-size="8" font-family="Inter" style="animation:fadeIn .5s ease forwards 1.5s;opacity:0">Slippage can be 20–50+ pips on major pairs during peak volatility</text>
                    </svg>
                    </div>

                    <div class="l-sub" style="margin-top:.5rem">Pre-Session Checklist</div>
                    <div class="cl-status" id="clstat">0 of 9 completed</div>
                    <div class="cl-wrap" id="clwrap">
                    <div class="ci" onclick="chk(this)"><div class="ci-box"></div><span class="ci-text">I have checked today's economic calendar — I know all red events and their exact times</span></div>
                    <div class="ci" onclick="chk(this)"><div class="ci-box"></div><span class="ci-text">I will not open any new trades 30 minutes before a high-impact event</span></div>
                    <div class="ci" onclick="chk(this)"><div class="ci-box"></div><span class="ci-text">All open positions will have stop losses moved to breakeven before any red event</span></div>
                    <div class="ci" onclick="chk(this)"><div class="ci-box"></div><span class="ci-text">I will not trade the initial spike — I will wait a minimum of 15 minutes after release</span></div>
                    <div class="ci" onclick="chk(this)"><div class="ci-box"></div><span class="ci-text">I understand that wider spreads during news mean my stop loss may execute far from its level</span></div>
                    <div class="ci" onclick="chk(this)"><div class="ci-box"></div><span class="ci-text">I know the forecast number — and I will compare it to the actual result when released</span></div>
                    <div class="ci" onclick="chk(this)"><div class="ci-box"></div><span class="ci-text">I will trade the post-news confirmed direction — not my prediction of the direction</span></div>
                    <div class="ci" onclick="chk(this)"><div class="ci-box"></div><span class="ci-text">I have a daily loss limit — and I will stop trading if it is reached today</span></div>
                    <div class="ci" onclick="chk(this)"><div class="ci-box"></div><span class="ci-text">I treat every high-impact news event as a mandatory pause — not a trading opportunity</span></div>
                    </div>
                    <button class="btn-done" onclick="markDone(9)"><i class="ti ti-trophy"></i>Complete Course</button>
                </div>
                </div>
            </article>
            </main>

            <!-- SIDEBAR -->
            <aside class="sidebar">
            <div class="sb-card">
                <div class="sb-hd"><i class="ti ti-calendar-event"></i><h3>Economic Calendar Guide</h3></div>
                <div class="sb-body">
                <div class="cs-row"><span class="cs-l"><i class="ti ti-books"></i>Total Lessons</span><span class="cs-v r">9</span></div>
                <div class="cs-row"><span class="cs-l"><i class="ti ti-clock"></i>Duration</span><span class="cs-v">~55 min</span></div>
                <div class="cs-row"><span class="cs-l"><i class="ti ti-trending-up"></i>Level</span><span class="cs-v">Intermediate</span></div>
                <div class="cs-row"><span class="cs-l"><i class="ti ti-certificate"></i>Certificate</span><span class="cs-v r">Yes</span></div>
                <div class="cs-row"><span class="cs-l"><i class="ti ti-currency-dollar"></i>Price</span><span class="cs-v g">Free</span></div>
                <div class="cs-row"><span class="cs-l"><i class="ti ti-check"></i>Completed</span><span class="cs-v r" id="sbdone">0 / 9</span></div>
                </div>
            </div>
            <div class="sb-card">
                <div class="sb-nav">
                <div class="sb-nav-lbl">Lesson Navigator</div>
                <div class="sb-item active" data-for="1" onclick="jumpTo(1)"><div class="sb-n">01</div><div class="sb-text">What is Economic Calendar?</div></div>
                <div class="sb-item" data-for="2" onclick="jumpTo(2)"><div class="sb-n">02</div><div class="sb-text">High, Medium, Low Impact</div></div>
                <div class="sb-item" data-for="3" onclick="jumpTo(3)"><div class="sb-n">03</div><div class="sb-text">Interest Rate Decisions</div></div>
                <div class="sb-item" data-for="4" onclick="jumpTo(4)"><div class="sb-n">04</div><div class="sb-text">CPI &amp; Inflation Data</div></div>
                <div class="sb-item" data-for="5" onclick="jumpTo(5)"><div class="sb-n">05</div><div class="sb-text">NFP &amp; Employment</div></div>
                <div class="sb-item" data-for="6" onclick="jumpTo(6)"><div class="sb-n">06</div><div class="sb-text">GDP Data</div></div>
                <div class="sb-item" data-for="7" onclick="jumpTo(7)"><div class="sb-n">07</div><div class="sb-text">Central Bank Speeches</div></div>
                <div class="sb-item" data-for="8" onclick="jumpTo(8)"><div class="sb-n">08</div><div class="sb-text">How News Affects Forex</div></div>
                <div class="sb-item" data-for="9" onclick="jumpTo(9)"><div class="sb-n">09</div><div class="sb-text">News Trading Risk Rules</div></div>
                </div>
            </div>
            </aside>
            
        </div>

        <div class="faq-wrap">

                <div class="zed-sec-head mt-5 mb-5">  
                        <h2 class="zed-sec-title">Risk Management | FAQ</h2> 
                        <div class="underline"></div>
                </div>

                <div class="fi">

                    <div class="fq" onclick="faqTog(this)">
                        <span class="fq-txt">What is an economic calendar and why do traders use it?</span>
                        <i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i>
                    </div>
                        <div class="fa">
                            <div class="fa-inner">
                                An economic calendar is a scheduled list of upcoming economic data releases, central bank decisions and major speeches that have potential to move financial markets. Traders use it to anticipate periods of high volatility, protect open positions before major events and identify potential directional moves following data releases. Checking it before every trading session is a non-negotiable professional habit.
                            </div>
                        </div>
                </div>

                <div class="fi">
                    <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is the difference between high, medium and low impact news?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                    <div class="fa"><div class="fa-inner">High-impact events (red on calendars) include NFP, CPI, interest rate decisions and Fed speeches — these can move major Forex pairs 50–200+ pips within minutes of release. Medium-impact events (orange) such as PMI and retail sales produce moderate moves of 20–60 pips. Low-impact events (green) typically produce minimal price movement. Always check for red events before entering any trade.</div></div>
                </div>

                <div class="fi">
                    <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How do interest rate decisions affect Forex markets?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                    <div class="fa"><div class="fa-inner">When a central bank raises interest rates, its currency typically strengthens because higher yields attract global capital. When rates are cut, the currency typically weakens. More important than the rate change itself is the forward guidance in the statement and press conference — hawkish language (rates staying high or rising further) strengthens the currency. Dovish language (rates cutting or neutral) weakens it.</div></div>
                </div>

                <div class="fi">
                    <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is NFP and why does it move the market so much?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                    <div class="fa"><div class="fa-inner">NFP (Non-Farm Payrolls) is the US monthly employment report, released on the first Friday of every month at 12:30 UTC. It measures total new paid jobs in the US economy (excluding farm workers). It is the single most anticipated monthly Forex release because strong employment signals a healthy US economy — which affects Fed rate expectations and therefore USD strength. Major pairs can move 100–200+ pips within minutes of release.</div></div>
                </div>

                <div class="fi">
                    <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How does CPI data affect currency prices?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                    <div class="fa"><div class="fa-inner">CPI (Consumer Price Index) measures inflation. When CPI comes in higher than expected, it signals that the central bank may need to keep rates high or raise them further — which typically strengthens the currency. When CPI is lower than expected, it signals rate cuts may come sooner — weakening the currency and often lifting Gold. The gap between actual CPI and the forecast is what drives the magnitude of the market move.</div></div>
                </div>

                <div class="fi">
                    <div class="fq" onclick="faqTog(this)"><span class="fq-txt">Should I trade during news releases?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                    <div class="fa"><div class="fa-inner">For intermediate traders — no. During high-impact news releases, spreads widen to 5–20x their normal size, slippage is extreme and stop losses can execute 20–50 pips from their intended level. The professional approach is to close or protect positions 30 minutes before a red event, avoid all new entries during the spike and wait 15–30 minutes after for a confirmed directional setup before considering an entry.</div></div>
                </div>

                <div class="fi">
                    <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is the best free economic calendar for Forex traders?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                    <div class="fa"><div class="fa-inner">The three most widely used free economic calendars are: Investing.com (most comprehensive, includes all global events), Forex Factory (trader-focused, colour-coded impact levels, community forum for context) and the official Federal Reserve website for all Fed-specific events. All three allow timezone customisation. Check one of these every morning before your trading session begins — it takes less than 3 minutes.</div></div>
                </div>

                <div class="fi">
                    <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What does "hawkish" and "dovish" mean in central bank language?
                    </span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                    <div class="fa"><div class="fa-inner">"Hawkish" refers to central bank language that signals a preference for higher interest rates to fight inflation — this typically strengthens the currency and pressures Gold and equities. "Dovish" refers to language favouring lower rates to stimulate growth — this typically weakens the currency and lifts Gold and equities. These terms apply to both formal policy statements and informal speeches by central bank officials.</div></div>
                </div>
    
        </div>
    </div>
</div>
  
<style>
    
    /* ── FAQ ── */
    .faq-wrap{
        background:#fff;
        margin-top:1px;
    }
    .faq-top{
        padding:1.4rem 2rem .9rem;
        display:flex;
        align-items:center;
        gap:10px;
        border-bottom:1px solid var(--G100);
    }
    .faq-top h2{
        font-size:1rem;
        font-weight:500;
        color:var(--BK);
    }
    .faq-top i{
        font-size:1.5rem;
        color:var(--zed-primary);
    }
    .faq-note{
        padding:.6rem 2rem .8rem;
        font-size:1rem;
        color:var(--G400);
        line-height:1.6;
        border-bottom:1px solid var(--G100)
    }
    .fi{
        border-bottom:1px solid var(--G100);
        display: flex;
        flex-direction: column;
    }
    .fq{
        display:flex;
        align-items:flex-start;
        justify-content:space-between;
        padding:.9rem 2rem;
        cursor:pointer;
        gap:12px;
        transition:background .15s;
    }
    /* .fq:hover{background:var(--G50)} */
    .fq-txt{
        font-size:1rem;
        font-weight:500;
        color:var(--BK);
        flex:1;
        line-height:1.5;
    }
    .fq-ic{
        font-size:1.5rem;
        color:var(--zed-secondary);
        transition:transform .25s,color .2s;
        flex-shrink:0;
        margin-top:2px;
    } 
    .fa{
        max-height:0;
        overflow:hidden;
        transition:max-height .35s ease;
    }

    .fa.open{
        max-height:400px;
    }
    .fa-inner{
        margin:0 2rem .9rem;
        padding:.8rem 1rem;
        font-family: 'Poppins', serif;
        background:var(--G50);
        border-left:3px solid var(--zed-primary);
        border-radius:0 4px 4px 0; 
        color:var(--zed-secondary);
        font-weight: 400;
        line-height:1.8;
    }
    .fa-inner b{
        color:var(--BK);
        font-weight:500;
    }

    .underline {
        width: 75px;
        height: 4px;
        background-color: var(--zed-primary);
        margin: 10px 0  0;
        padding: 4px;
    }

    .zed-sec-title {
        font-family: 'Poppins', serif;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: black;
    }

</style>

<script>
    const done=new Set(),T=9;
    function tog(id){
    document.querySelectorAll('.mod').forEach(m=>{
        const mid=+m.dataset.id,b=m.querySelector('.mbody');
        if(mid===id){const o=b.classList.contains('open');b.classList.toggle('open',!o);m.classList.toggle('open',!o);}
        else{b.classList.remove('open');m.classList.remove('open');}
    });
    updSb(id);
    }
    function jumpTo(id){
    const m=document.querySelector(`.mod[data-id="${id}"]`);
    if(m){if(!m.querySelector('.mbody').classList.contains('open'))tog(id);setTimeout(()=>m.scrollIntoView({behavior:'smooth',block:'start'}),55);}
    }
    function markDone(id){
    done.add(id);
    const m=document.querySelector(`.mod[data-id="${id}"]`);
    if(m){m.classList.add('done');m.classList.remove('active','open');m.querySelector('.mbody').classList.remove('open');const b=m.querySelector('.badge');b.className='badge b-d';b.textContent='✓ Done';}
    const si=document.querySelector(`.sb-item[data-for="${id}"]`);
    if(si){si.classList.add('done');if(!si.querySelector('.sb-tick')){const t=document.createElement('i');t.className='ti ti-check sb-tick';si.appendChild(t);}}
    updProg();
    const nx=id+1;
    if(nx<=T){const nm=document.querySelector(`.mod[data-id="${nx}"]`);if(nm){nm.classList.add('active');tog(nx);}}
    if(id===T)setTimeout(()=>sendPrompt('I completed the Zed Capital Economic Calendar Guide. Please summarise key lessons and tell me what course to take next.'),400);
    }
    function updProg(){
    const pct=Math.round((done.size/T)*100);
    document.getElementById('pbar').style.width=pct+'%';
    document.getElementById('ppct').textContent=pct+'%';
    document.getElementById('pcnt').textContent=done.size+' / '+T;
    document.getElementById('k3').textContent=done.size;
    document.getElementById('sbdone').textContent=done.size+' / '+T;
    }
    function updSb(id){
    document.querySelectorAll('.sb-item').forEach(s=>s.classList.remove('active'));
    const si=document.querySelector(`.sb-item[data-for="${id}"]`);
    if(si)si.classList.add('active');
    }
    function chk(el){
    el.classList.toggle('checked');
    el.querySelector('.ci-box').textContent=el.classList.contains('checked')?'✓':'';
    const all=document.querySelectorAll('#clwrap .ci').length;
    const n=document.querySelectorAll('#clwrap .ci.checked').length;
    const st=document.getElementById('clstat');
    if(n===all){st.textContent='✓ All 9 rules confirmed — you are ready to trade around news events safely.';st.style.color='var(--GR)';st.style.fontWeight='700';}
    else{st.textContent=n+' of '+all+' completed';st.style.color='';st.style.fontWeight='600';}
    }
    function faqTog(qel){
        const fi=qel.closest('.fi'), fa=fi.querySelector('.fa'), isOpen=fa.classList.contains('open');
        document.querySelectorAll('.fi').forEach(f=>{ f.classList.remove('open'); f.querySelector('.fa').classList.remove('open'); });
        if(!isOpen){ fi.classList.add('open'); fa.classList.add('open'); }
    }
</script>

<?php
include_once ('elements/footer.php');
?>
@include('user.header')

<!-- Start right Content here -->
<div class="main-content">
    <div class="page-content" style="background:#f0f2f7;">
        <div class="container-fluid px-3 px-md-4">

            <!-- Hero Welcome Banner -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="dash-hero-banner position-relative overflow-hidden rounded-4 p-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div>
                            <p class="mb-1 text-white-50 small fw-semibold text-uppercase">AI-Powered Trading Platform</p>
                            <h3 class="text-white fw-bold mb-1">Welcome back, {{ Auth::user()->name }} &#128075;</h3>
                            <p class="text-white-50 mb-0 small">Your portfolio is active &amp; being monitored in real-time.</p>
                        </div>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{route('user.fund.wallet')}}" class="btn btn-light btn-sm fw-semibold px-4 py-2 rounded-pill shadow-sm">
                                <i class="bi bi-plus-circle me-1"></i> Fund Account
                            </a>
                            <a href="{{route('user.copy')}}" class="btn btn-outline-light btn-sm fw-semibold px-4 py-2 rounded-pill">
                                <i class="bi bi-robot me-1"></i> Copy Trade
                            </a>
                        </div>
                        <div class="hero-bg-circles">
                            <span class="circle c1"></span><span class="circle c2"></span><span class="circle c3"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ticker Tape -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="rounded-3 overflow-hidden shadow-sm">
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                            { "symbols":[{"proName":"FOREXCOM:SPXUSD","title":"S&P 500"},{"proName":"FOREXCOM:NSXUSD","title":"Nasdaq 100"},{"proName":"FX_IDC:EURUSD","title":"EUR/USD"},{"proName":"BITSTAMP:BTCUSD","title":"BTC/USD"},{"proName":"BITSTAMP:ETHUSD","title":"ETH/USD"},{"proName":"BITSTAMP:XRPUSD","title":"XRP/USD"},{"proName":"BINANCE:BNBUSDT","title":"BNB/USD"}], "showSymbolLogo":true,"colorTheme":"light","isTransparent":false,"displayMode":"adaptive","locale":"en" }
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <!-- STATS CARDS -->
            <div class="row g-3 mb-4">
                <div class="col-xl-3 col-sm-6">
                    <div class="pro-stat-card stat-blue">
                        <div class="psc-top"><div class="psc-icon"><i class="bi bi-wallet2"></i></div><span class="psc-trend up"><i class="bi bi-arrow-up-short"></i>Active</span></div>
                        <div class="psc-label">Trading Balance</div>
                        <div class="psc-value ai-count" data-target="{{ $user_balance }}">{{ Auth::user()->currency }}0.00</div>
                        <div class="psc-bar"><div class="psc-bar-fill" style="width:72%"></div></div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="pro-stat-card stat-indigo">
                        <div class="psc-top"><div class="psc-icon"><i class="bi bi-bank"></i></div><span class="psc-trend up"><i class="bi bi-arrow-up-short"></i>Invested</span></div>
                        <div class="psc-label">Trading Capital</div>
                        <div class="psc-value ai-count" data-target="{{ $deposit }}">{{ Auth::user()->currency }}0.00</div>
                        <div class="psc-bar"><div class="psc-bar-fill" style="width:60%"></div></div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="pro-stat-card stat-green">
                        <div class="psc-top"><div class="psc-icon"><i class="bi bi-graph-up-arrow"></i></div><span class="psc-trend up"><i class="bi bi-arrow-up-short"></i>Earnings</span></div>
                        <div class="psc-label">Trading Profit</div>
                        <div class="psc-value ai-count" data-target="{{ $profit }}">{{ Auth::user()->currency }}0.00</div>
                        <div class="psc-bar"><div class="psc-bar-fill" style="width:85%"></div></div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="pro-stat-card stat-orange">
                        <div class="psc-top"><div class="psc-icon"><i class="bi bi-cash-stack"></i></div><span class="psc-trend neutral"><i class="bi bi-dash"></i>Withdrawn</span></div>
                        <div class="psc-label">Total Withdrawal</div>
                        <div class="psc-value ai-count" data-target="{{ $withdrawal }}">{{ Auth::user()->currency }}0.00</div>
                        <div class="psc-bar"><div class="psc-bar-fill" style="width:45%"></div></div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-sm-6">
                    <div class="pro-stat-card stat-red">
                        <div class="psc-top"><div class="psc-icon"><i class="bi bi-receipt"></i></div><span class="psc-trend neutral"><i class="bi bi-dash"></i>Fee</span></div>
                        <div class="psc-label">Total Fee</div>
                        <div class="psc-value ai-count" data-target="{{ Auth::user()->update_trade_fee }}">{{ Auth::user()->currency }}0.00</div>
                        <div class="psc-bar"><div class="psc-bar-fill" style="width:20%"></div></div>
                    </div>
                </div> --}}
                <div class="col-xl-3 col-sm-6">
                    <div class="pro-stat-card stat-purple">
                        <div class="psc-top"><div class="psc-icon"><i class="bi bi-gift"></i></div><span class="psc-trend up"><i class="bi bi-arrow-up-short"></i>Bonus</span></div>
                        <div class="psc-label">Bonus Balance</div>
                        <div class="psc-value ai-count" data-target="0">{{ Auth::user()->currency }}0.00</div>
                        <div class="psc-bar"><div class="psc-bar-fill" style="width:10%"></div></div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="pro-signal-card">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <div class="signal-icon-wrap"><i class="bi bi-reception-4"></i></div>
                                <div>
                                    <div class="fw-bold text-dark" style="font-size:0.95rem;">AI Signal Strength</div>
                                    <div class="text-muted" style="font-size:0.75rem;">Real-time algorithmic analysis</div>
                                </div>
                            </div>
                            <div class="signal-pct-badge">{{ Auth::user()->signal_strength }}%</div>
                        </div>
                        <div class="signal-track"><div class="signal-fill" style="width:{{ Auth::user()->signal_strength }}%"></div></div>
                        <div class="d-flex justify-content-between mt-2">
                            <span class="signal-lbl">Weak</span><span class="signal-lbl">Moderate</span><span class="signal-lbl">Strong</span><span class="signal-lbl active">Excellent</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAIN CHART + ACTIVITY -->
            <div class="row g-3 mb-4">
                <div class="col-xl-8">
                    <div class="pro-card h-100">
                        <div class="pro-card-header">
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-bar-chart-line-fill text-primary"></i><span class="fw-semibold">Live Market Chart</span></div>
                            <span class="live-badge"><span class="live-dot"></span> Live</span>
                        </div>
                        <div class="pro-card-body p-0">
                            <div class="tradingview-widget-container" style="height:420px;">
                                <div class="tradingview-widget-container__widget" style="height:420px;"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                                { "autosize":true,"symbol":"BITSTAMP:BTCUSD","interval":"D","timezone":"Etc/UTC","theme":"light","style":"1","locale":"en","enable_publishing":false,"allow_symbol_change":true,"calendar":false,"support_host":"https://www.tradingview.com" }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="pro-card h-100">
                        <div class="pro-card-header">
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-activity text-success"></i><span class="fw-semibold">Trading Activity</span></div>
                        </div>
                        <div class="pro-card-body">
                            <ul class="pro-tabs nav mb-3" role="tablist">
                                <li class="nav-item flex-fill"><a class="pro-tab-link nav-link active" data-bs-toggle="tab" href="#open-trades"><i class="bi bi-play-circle me-1"></i> Open</a></li>
                                <li class="nav-item flex-fill"><a class="pro-tab-link nav-link" data-bs-toggle="tab" href="#closed-trades"><i class="bi bi-check-circle me-1"></i> Closed</a></li>
                            </ul>
                            <div class="tab-content activity-scroll">
                                <div class="tab-pane fade show active" id="open-trades">
                                    @if(!empty($profithistory))
                                        @foreach($profithistory as $history)
                                        <div class="activity-row">
                                            <div class="act-icon act-green"><i class="bi bi-graph-up"></i></div>
                                            <div class="act-info"><span class="act-title">Trade Profit</span><span class="act-date">{{ \Carbon\Carbon::parse($history->created_at)->format('M d, Y') }}</span></div>
                                            <div class="act-amount text-success fw-bold">+{{ Auth::user()->currency }}{{ number_format($history->amount, 2) }}</div>
                                        </div>
                                        @endforeach
                                    @else
                                        <div class="empty-state"><i class="bi bi-bar-chart"></i><p>No open trades</p></div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="closed-trades">
                                    @if(!empty($withdrawalhistory))
                                        @foreach($withdrawalhistory as $withdrawal)
                                        <div class="activity-row">
                                            <div class="act-icon act-{{ $withdrawal->status == '0' ? 'orange' : 'green' }}"><i class="bi bi-cash"></i></div>
                                            <div class="act-info"><span class="act-title">{{ $withdrawal->mode }}</span><span class="act-date">{{ \Carbon\Carbon::parse($withdrawal->created_at)->format('M d, Y') }}</span></div>
                                            <div class="act-amount fw-bold {{ $withdrawal->status == '0' ? 'text-warning' : 'text-success' }}">
                                                {{ Auth::user()->currency }}{{ number_format($withdrawal->amount, 2) }}
                                                <div class="act-badge badge {{ $withdrawal->status == '0' ? 'badge-warning-soft' : 'badge-success-soft' }}">{{ $withdrawal->status == '0' ? 'Pending' : 'Done' }}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                        <div class="empty-state"><i class="bi bi-cash-stack"></i><p>No withdrawals</p></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MARKET SCREENER + QUICK ACTIONS -->
            <div class="row g-3 mb-4">
                <div class="col-xl-8">
                    <div class="pro-card">
                        <div class="pro-card-header">
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-grid-3x3 text-warning"></i><span class="fw-semibold">Market Screener</span></div>
                            <span class="live-badge"><span class="live-dot"></span> Live</span>
                        </div>
                        <div class="pro-card-body p-0">
                            <div class="tradingview-widget-container" style="height:300px;">
                                <div class="tradingview-widget-container__widget" style="height:300px;"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                { "width":"100%","height":300,"defaultColumn":"overview","defaultScreen":"crypto","market":"crypto","showToolbar":true,"colorTheme":"light","locale":"en" }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="pro-card h-100">
                        <div class="pro-card-header">
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-lightning-charge-fill text-warning"></i><span class="fw-semibold">Quick Actions</span></div>
                        </div>
                        <div class="pro-card-body">
                            <div class="quick-actions-grid">
                                <a href="{{route('user.fund.wallet')}}" class="qa-btn qa-primary"><i class="bi bi-plus-circle-fill"></i><span>Fund Wallet</span></a>
                                <a href="{{route('user.copy')}}" class="qa-btn qa-success"><i class="bi bi-robot"></i><span>Copy Trade</span></a>
                                <a href="{{route('user.withdrawal')}}" class="qa-btn qa-orange"><i class="bi bi-arrow-up-right-circle-fill"></i><span>Withdraw</span></a>
                                <a href="{{route('user.accounthistory')}}" class="qa-btn qa-indigo"><i class="bi bi-clock-history"></i><span>History</span></a>
                                <a href="{{route('user.investment')}}" class="qa-btn qa-teal"><i class="bi bi-graph-up-arrow"></i><span>Invest</span></a>
                                <a href="{{route('user.profile')}}" class="qa-btn qa-purple"><i class="bi bi-person-circle"></i><span>Profile</span></a>
                            </div>
                            <div class="acc-status-wrap mt-4">
                                <div class="acc-status-row">
                                    <span class="acc-status-label"><i class="bi bi-shield-check me-1 text-success"></i> KYC Status</span>
                                    <span class="badge {{ Auth::user()->kyc == 1 ? 'badge-success-soft' : 'badge-warning-soft' }}">{{ Auth::user()->kyc == 1 ? 'Verified' : 'Pending' }}</span>
                                </div>
                                <div class="acc-status-row">
                                    <span class="acc-status-label"><i class="bi bi-currency-dollar me-1 text-primary"></i> Currency</span>
                                    <span class="fw-semibold text-dark">{{ Auth::user()->currency }}</span>
                                </div>
                                <div class="acc-status-row">
                                    <span class="acc-status-label"><i class="bi bi-person me-1 text-info"></i> Account</span>
                                    <span class="fw-semibold text-dark" style="font-size:.8rem;">{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TOP ASSETS MINI CHARTS -->
            <div class="row g-3 mb-4">
                <div class="col-12">
                    <div class="pro-card">
                        <div class="pro-card-header">
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-currency-bitcoin text-warning"></i><span class="fw-semibold">Top Assets</span></div>
                        </div>
                        <div class="pro-card-body">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="mini-chart-wrap">
                                        <div class="tradingview-widget-container" style="height:180px;"><div class="tradingview-widget-container__widget" style="height:180px;"></div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {"symbol":"BITSTAMP:BTCUSD","width":"100%","height":180,"locale":"en","dateRange":"12M","colorTheme":"light","trendLineColor":"rgba(33,150,243,1)","underLineColor":"rgba(33,150,243,0.1)","isTransparent":false,"autosize":true}
                                        </script></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mini-chart-wrap">
                                        <div class="tradingview-widget-container" style="height:180px;"><div class="tradingview-widget-container__widget" style="height:180px;"></div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {"symbol":"BITSTAMP:ETHUSD","width":"100%","height":180,"locale":"en","dateRange":"12M","colorTheme":"light","trendLineColor":"rgba(76,217,100,1)","underLineColor":"rgba(76,217,100,0.1)","isTransparent":false,"autosize":true}
                                        </script></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mini-chart-wrap">
                                        <div class="tradingview-widget-container" style="height:180px;"><div class="tradingview-widget-container__widget" style="height:180px;"></div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {"symbol":"BITSTAMP:XRPUSD","width":"100%","height":180,"locale":"en","dateRange":"12M","colorTheme":"light","trendLineColor":"rgba(255,149,0,1)","underLineColor":"rgba(255,149,0,0.1)","isTransparent":false,"autosize":true}
                                        </script></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->
</div><!-- end main content -->

<style>
.page-content{background:#f0f2f7!important}
.dash-hero-banner{background:linear-gradient(135deg,#1a237e 0%,#283593 35%,#1565c0 70%,#0288d1 100%);border-radius:20px!important;min-height:120px;z-index:1}
.hero-bg-circles{position:absolute;top:0;right:0;bottom:0;pointer-events:none;overflow:hidden;border-radius:20px;width:300px}
.hero-bg-circles .circle{position:absolute;border-radius:50%;background:rgba(255,255,255,.06)}
.hero-bg-circles .c1{width:200px;height:200px;top:-60px;right:-40px}
.hero-bg-circles .c2{width:140px;height:140px;bottom:-30px;right:80px}
.hero-bg-circles .c3{width:80px;height:80px;top:20px;right:140px;background:rgba(255,255,255,.08)}
.pro-stat-card{background:#fff;border-radius:16px;padding:20px 22px 16px;box-shadow:0 2px 12px rgba(0,0,0,.07);transition:transform .25s,box-shadow .25s;border-top:4px solid transparent;position:relative;overflow:hidden}
.pro-stat-card::after{content:'';position:absolute;right:-20px;top:-20px;width:90px;height:90px;border-radius:50%;opacity:.08}
.pro-stat-card:hover{transform:translateY(-4px);box-shadow:0 10px 28px rgba(0,0,0,.12)}
.stat-blue{border-top-color:#1976d2}.stat-blue::after{background:#1976d2}
.stat-indigo{border-top-color:#5c6bc0}.stat-indigo::after{background:#5c6bc0}
.stat-green{border-top-color:#2e7d32}.stat-green::after{background:#2e7d32}
.stat-orange{border-top-color:#e65100}.stat-orange::after{background:#e65100}
.stat-red{border-top-color:#c62828}.stat-red::after{background:#c62828}
.stat-purple{border-top-color:#7b1fa2}.stat-purple::after{background:#7b1fa2}
.psc-top{display:flex;align-items:center;justify-content:space-between;margin-bottom:12px}
.psc-icon{width:44px;height:44px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:#fff}
.stat-blue .psc-icon{background:linear-gradient(135deg,#1976d2,#42a5f5)}
.stat-indigo .psc-icon{background:linear-gradient(135deg,#5c6bc0,#9fa8da)}
.stat-green .psc-icon{background:linear-gradient(135deg,#2e7d32,#66bb6a)}
.stat-orange .psc-icon{background:linear-gradient(135deg,#e65100,#ffa726)}
.stat-red .psc-icon{background:linear-gradient(135deg,#c62828,#ef5350)}
.stat-purple .psc-icon{background:linear-gradient(135deg,#7b1fa2,#ce93d8)}
.psc-trend{font-size:.72rem;font-weight:600;padding:3px 9px;border-radius:20px}
.psc-trend.up{color:#2e7d32;background:#e8f5e9}
.psc-trend.neutral{color:#757575;background:#f5f5f5}
.psc-label{font-size:.75rem;font-weight:600;text-transform:uppercase;letter-spacing:.6px;color:#90a4ae;margin-bottom:4px}
.psc-value{font-size:1.55rem;font-weight:700;color:#1a237e;margin-bottom:12px;letter-spacing:-.5px}
.psc-bar{background:#eceff1;border-radius:10px;height:5px;overflow:hidden}
.psc-bar-fill{height:100%;border-radius:10px;background:linear-gradient(90deg,#1976d2,#42a5f5);transition:width 1s ease}
.stat-green .psc-bar-fill{background:linear-gradient(90deg,#2e7d32,#66bb6a)}
.stat-orange .psc-bar-fill{background:linear-gradient(90deg,#e65100,#ffa726)}
.stat-red .psc-bar-fill{background:linear-gradient(90deg,#c62828,#ef5350)}
.stat-purple .psc-bar-fill{background:linear-gradient(90deg,#7b1fa2,#ce93d8)}
.stat-indigo .psc-bar-fill{background:linear-gradient(90deg,#5c6bc0,#9fa8da)}
.pro-signal-card{background:#fff;border-radius:16px;padding:22px 24px;box-shadow:0 2px 12px rgba(0,0,0,.07);height:100%;border-top:4px solid #1976d2}
.signal-icon-wrap{width:44px;height:44px;background:linear-gradient(135deg,#1a237e,#1565c0);border-radius:12px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.3rem}
.signal-pct-badge{background:linear-gradient(135deg,#1a237e,#0288d1);color:#fff;font-size:1.15rem;font-weight:700;padding:6px 18px;border-radius:30px}
.signal-track{background:#eceff1;border-radius:10px;height:10px;overflow:hidden;margin:8px 0 4px}
.signal-fill{height:100%;border-radius:10px;background:linear-gradient(90deg,#ef5350,#ffa726,#66bb6a);transition:width 1.2s ease}
.signal-lbl{font-size:.72rem;color:#b0bec5;font-weight:500}
.signal-lbl.active{color:#1976d2;font-weight:700}
.pro-card{background:#fff;border-radius:16px;box-shadow:0 2px 12px rgba(0,0,0,.07);overflow:hidden}
.pro-card-header{display:flex;align-items:center;justify-content:space-between;padding:16px 20px;border-bottom:1px solid #f0f2f7;font-size:.9rem}
.pro-card-body{padding:18px 20px}
.live-badge{display:inline-flex;align-items:center;gap:5px;font-size:.72rem;font-weight:600;background:#e8f5e9;color:#2e7d32;padding:3px 10px;border-radius:20px}
.live-dot{width:7px;height:7px;background:#4caf50;border-radius:50%;animation:livePulse 1.4s infinite}
@keyframes livePulse{0%,100%{opacity:1}50%{opacity:.3}}
.pro-tabs{border:none;background:#f7f8fb;border-radius:10px;padding:4px;gap:4px}
.pro-tab-link{border:none!important;border-radius:8px!important;color:#607d8b;font-size:.83rem;font-weight:500;padding:8px 14px!important;transition:all .2s;text-align:center}
.pro-tab-link.active{background:#fff!important;color:#1a237e!important;font-weight:600;box-shadow:0 2px 8px rgba(0,0,0,.08)!important}
.activity-scroll{max-height:340px;overflow-y:auto}
.activity-scroll::-webkit-scrollbar{width:4px}
.activity-scroll::-webkit-scrollbar-thumb{background:#cfd8dc;border-radius:4px}
.activity-row{display:flex;align-items:center;gap:12px;padding:11px 0;border-bottom:1px solid #f5f6fa;transition:background .2s}
.activity-row:last-child{border-bottom:none}
.activity-row:hover{background:#f7f8fb;border-radius:8px;padding-left:6px}
.act-icon{width:36px;height:36px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1rem;color:#fff;flex-shrink:0}
.act-green{background:linear-gradient(135deg,#2e7d32,#66bb6a)}
.act-orange{background:linear-gradient(135deg,#e65100,#ffa726)}
.act-info{flex:1;display:flex;flex-direction:column}
.act-title{font-size:.83rem;font-weight:600;color:#37474f}
.act-date{font-size:.72rem;color:#b0bec5}
.act-amount{font-size:.85rem;text-align:right;line-height:1.4}
.act-badge{font-size:.65rem;display:block;margin-top:2px}
.empty-state{text-align:center;padding:36px 20px;color:#b0bec5}
.empty-state i{font-size:2.5rem;display:block;margin-bottom:10px}
.empty-state p{font-size:.85rem;margin:0}
.badge-success-soft{background:#e8f5e9;color:#2e7d32;border-radius:20px;padding:3px 9px;font-size:.7rem}
.badge-warning-soft{background:#fff8e1;color:#f57c00;border-radius:20px;padding:3px 9px;font-size:.7rem}
.quick-actions-grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px}
.qa-btn{display:flex;flex-direction:column;align-items:center;justify-content:center;gap:6px;padding:16px 8px;border-radius:14px;text-decoration:none;font-size:.75rem;font-weight:600;transition:all .25s;color:#fff}
.qa-btn i{font-size:1.4rem}
.qa-btn:hover{transform:translateY(-3px);filter:brightness(1.1);color:#fff}
.qa-primary{background:linear-gradient(135deg,#1565c0,#42a5f5)}
.qa-success{background:linear-gradient(135deg,#2e7d32,#66bb6a)}
.qa-orange{background:linear-gradient(135deg,#e65100,#ffa726)}
.qa-indigo{background:linear-gradient(135deg,#5c6bc0,#9fa8da)}
.qa-teal{background:linear-gradient(135deg,#00695c,#4db6ac)}
.qa-purple{background:linear-gradient(135deg,#7b1fa2,#ce93d8)}
.acc-status-wrap{border-top:1px solid #f0f2f7;padding-top:14px}
.acc-status-row{display:flex;align-items:center;justify-content:space-between;padding:7px 0;border-bottom:1px solid #f5f6fa;font-size:.82rem}
.acc-status-row:last-child{border-bottom:none}
.acc-status-label{color:#78909c}
.mini-chart-wrap{border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,.07)}
.ai-count{font-variant-numeric:tabular-nums}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.ai-count');
    counters.forEach(counter => {
        const target = parseFloat(counter.getAttribute('data-target')) || 0;
        const currency = '{{ Auth::user()->currency }}';
        if (target === 0) { counter.textContent = currency + '0.00'; return; }
        let current = 0;
        const increment = target / 60;
        const tick = () => {
            current = Math.min(current + increment, target);
            counter.textContent = currency + current.toLocaleString('en-US', {minimumFractionDigits:2, maximumFractionDigits:2});
            if (current < target) requestAnimationFrame(tick);
        };
        const obs = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting) { tick(); obs.disconnect(); }
        });
        obs.observe(counter);
    });
    const fill = document.querySelector('.signal-fill');
    if (fill) {
        const w = fill.style.width; fill.style.width = '0%';
        setTimeout(() => { fill.style.width = w; }, 400);
    }
    document.querySelectorAll('.pro-tab-link').forEach(link => {
        link.addEventListener('click', function() {
            this.closest('.pro-tabs').querySelectorAll('.pro-tab-link').forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
});
</script>

@include('user.footer')

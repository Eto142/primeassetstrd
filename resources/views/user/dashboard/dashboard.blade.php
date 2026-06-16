@include('dashboard.header')
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                    <div class="mt-2 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div>
                            <h4 class="mb-1" style="font-weight:700;">Welcome back, {{Auth::user()->name}} 👋</h4>
                            <small class="text-muted">PrimeAssetsTRD &mdash; Your trading dashboard</small>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="{{ route('user.fund.wallet') }}" class="btn btn-success btn-sm" style="background:#00c896; border-color:#00c896; font-weight:600;"><i class="fa fa-plus me-1"></i> Deposit</a>
                            <a href="{{ route('user.withdraw.funds') }}" class="btn btn-outline-secondary btn-sm" style="font-weight:600;"><i class="fa fa-arrow-up me-1"></i> Withdraw</a>
                        </div>
                    </div>

                        <div class="row g-3">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border-0 shadow-sm h-100" style="background:linear-gradient(135deg,#122033,#1a2d40); border-left:3px solid #00c896 !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <small style="color:#8fa3b1; font-size:0.78rem; text-transform:uppercase; letter-spacing:.5px;">Account Balance</small>
                                            <i class="fa fa-wallet" style="color:#00c896;"></i>
                                        </div>
                                        <h4 class="mb-0" style="font-weight:800; color:#f0f4f8;">${{number_format($balance,2)}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border-0 shadow-sm h-100" style="background:linear-gradient(135deg,#0f2d1e,#1a4030); border-left:3px solid #00c896 !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <small style="color:#8fa3b1; font-size:0.78rem; text-transform:uppercase; letter-spacing:.5px;">Total Profit</small>
                                            <i class="fa fa-chart-line" style="color:#00c896;"></i>
                                        </div>
                                        <h4 class="mb-0" style="font-weight:800; color:#00c896;">${{number_format($profit,2)}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border-0 shadow-sm h-100" style="background:linear-gradient(135deg,#1a1828,#2a2040); border-left:3px solid #f39c12 !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <small style="color:#8fa3b1; font-size:0.78rem; text-transform:uppercase; letter-spacing:.5px;">Total Bonus</small>
                                            <i class="fa fa-gift" style="color:#f39c12;"></i>
                                        </div>
                                        <h4 class="mb-0" style="font-weight:800; color:#f0f4f8;">${{number_format($earning,2)}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border-0 shadow-sm h-100" style="background:linear-gradient(135deg,#122033,#1a2d40); border-left:3px solid #4fc3f7 !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <small style="color:#8fa3b1; font-size:0.78rem; text-transform:uppercase; letter-spacing:.5px;">Referral Bonus</small>
                                            <i class="fa fa-users" style="color:#4fc3f7;"></i>
                                        </div>
                                        <h4 class="mb-0" style="font-weight:800; color:#f0f4f8;">${{number_format($referral,2)}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border-0 shadow-sm h-100" style="background:linear-gradient(135deg,#1e1228,#2d1a40); border-left:3px solid #e74c3c !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <small style="color:#8fa3b1; font-size:0.78rem; text-transform:uppercase; letter-spacing:.5px;">Total Plans</small>
                                            <i class="fa fa-layer-group" style="color:#e74c3c;"></i>
                                        </div>
                                        <h4 class="mb-0" style="font-weight:800; color:#f0f4f8;">0</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border-0 shadow-sm h-100" style="background:linear-gradient(135deg,#0f2d1e,#1a4030); border-left:3px solid #27ae60 !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <small style="color:#8fa3b1; font-size:0.78rem; text-transform:uppercase; letter-spacing:.5px;">Active Plans</small>
                                            <i class="fa fa-check-circle" style="color:#27ae60;"></i>
                                        </div>
                                        <h4 class="mb-0" style="font-weight:800; color:#f0f4f8;">0</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border-0 shadow-sm h-100" style="background:linear-gradient(135deg,#1a1828,#2a2040); border-left:3px solid #f39c12 !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <small style="color:#8fa3b1; font-size:0.78rem; text-transform:uppercase; letter-spacing:.5px;">Total Deposits</small>
                                            <i class="fa fa-download" style="color:#f39c12;"></i>
                                        </div>
                                        <h4 class="mb-0" style="font-weight:800; color:#f0f4f8;">${{number_format($deposit,2)}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card border-0 shadow-sm h-100" style="background:linear-gradient(135deg,#2d1218,#401a20); border-left:3px solid #e74c3c !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <small style="color:#8fa3b1; font-size:0.78rem; text-transform:uppercase; letter-spacing:.5px;">Total Withdrawals</small>
                                            <i class="fa fa-arrow-up" style="color:#e74c3c;"></i>
                                        </div>
                                        <h4 class="mb-0" style="font-weight:800; color:#f0f4f8;">${{$withdrawal}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="pt-1 col-12">
                                <div class="d-flex align-items-center justify-content-between mb-3 mt-2">
                                    <h5 style="font-weight:700; margin:0;">Live Trading Chart</h5>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('user.copy') }}" class="btn btn-sm" style="background:rgba(0,200,150,0.1); color:#00c896; border:1px solid rgba(0,200,150,0.3); font-size:0.8rem; font-weight:600;"><i class="fa fa-users me-1"></i>Copy Trading</a>
                                        <a href="{{ route('user.forex') }}" class="btn btn-sm" style="background:var(--bs-body-bg,#fff); border:1px solid #dee2e6; font-size:0.8rem; font-weight:600;"><i class="fa fa-chart-bar me-1"></i>Markets</a>
                                    </div>
                                </div>
                                <div class="tradingview-widget-container" style="margin:30px 0px 10px 0px;">
                                    <div id="tradingview_f933e"></div>
                                    <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span class="blue-text"></span> <span class="blue-text">Personal trading chart</span></a></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.widget({
                                            "width": "100%",
                                            "height": "550",
                                            "symbol": "COINBASE:BTCUSD",
                                            "interval": "1",
                                            "timezone": "Etc/UTC",
                                            "theme": 'light',
                                            "style": "9",
                                            "locale": "en",
                                            "toolbar_bg": "#f1f3f6",
                                            "enable_publishing": false,
                                            "hide_side_toolbar": false,
                                            "allow_symbol_change": true,
                                            "calendar": false,
                                            "studies": [
                                                "BB@tv-basicstudies"
                                            ],
                                            "container_id": "tradingview_f933e"
                                        });
                                    </script>
                                </div>

                            </div>



                            <div class="white-box" style="height: 450px; width:100%">
                                <h4 style="margin-bottom:5px;"> Forex Market Fundamental Data</h4>
                                <!-- TradingView Widget BEGIN -->

                                <span id="tradingview-copyright"><a ref="nofollow noopener" target="_blank" href="http://www.tradingview.com" style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;"></a></span>
                                <script src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js">
                                    {
                                        "currencies": [
                                            "EUR",
                                            "USD",
                                            "JPY",
                                            "BTC",
                                            "ETH",
                                            "LTC",
                                            "GBP",
                                            "CHF",
                                            "AUD",
                                            "CAD",
                                            "NZD",
                                            "CNY"
                                        ],
                                        "isTransparent": false,
                                        "colorTheme": "light",
                                        "width": "100%",
                                        "height": "100%",
                                        "locale": "en"
                                    }
                                </script>

                            </div>
                        </div>
                    </div>
                    <!-- end of chart -->
                </div>
    @include('dashboard.footer')

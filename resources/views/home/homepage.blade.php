@include('home.header')

<style>
/* ===== Scroll Animations ===== */
.sa-fade-up {
    opacity: 0;
    transform: translateY(38px);
    transition: opacity 0.65s cubic-bezier(0.22,1,0.36,1), transform 0.65s cubic-bezier(0.22,1,0.36,1);
}
.sa-fade-left {
    opacity: 0;
    transform: translateX(-44px);
    transition: opacity 0.7s cubic-bezier(0.22,1,0.36,1), transform 0.7s cubic-bezier(0.22,1,0.36,1);
}
.sa-fade-right {
    opacity: 0;
    transform: translateX(44px);
    transition: opacity 0.7s cubic-bezier(0.22,1,0.36,1), transform 0.7s cubic-bezier(0.22,1,0.36,1);
}
.sa-visible {
    opacity: 1 !important;
    transform: none !important;
}
/* Respect reduced-motion preference */
@media (prefers-reduced-motion: reduce) {
    .sa-fade-up, .sa-fade-left, .sa-fade-right {
        opacity: 1;
        transform: none;
        transition: none;
    }
}
</style>

<main>
    <!-- Live Market Ticker -->
    <div class="stats-ticker">
        <div class="container overflow-hidden">
            <div class="ticker-content" id="marketTicker">
                <div class="ticker-item"><span class="label">BTC/USD</span><span class="value">$67,250.40</span><span class="change-up">+2.14%</span></div>
                <div class="ticker-item"><span class="label">ETH/USD</span><span class="value">$3,412.80</span><span class="change-up">+1.58%</span></div>
                <div class="ticker-item"><span class="label">EUR/USD</span><span class="value">1.0876</span><span class="change-down">-0.12%</span></div>
                <div class="ticker-item"><span class="label">GBP/USD</span><span class="value">1.2730</span><span class="change-up">+0.24%</span></div>
                <div class="ticker-item"><span class="label">S&P 500</span><span class="value">5,304.72</span><span class="change-up">+0.87%</span></div>
                <div class="ticker-item"><span class="label">GOLD</span><span class="value">$2,345.60</span><span class="change-up">+0.41%</span></div>
                <div class="ticker-item"><span class="label">OIL (WTI)</span><span class="value">$79.48</span><span class="change-down">-0.33%</span></div>
                <div class="ticker-item"><span class="label">NASDAQ</span><span class="value">18,641.35</span><span class="change-up">+1.02%</span></div>
                <div class="ticker-item"><span class="label">AAPL</span><span class="value">$189.30</span><span class="change-up">+0.76%</span></div>
                <div class="ticker-item"><span class="label">TSLA</span><span class="value">$176.89</span><span class="change-down">-1.21%</span></div>
                <!-- Duplicate for seamless loop -->
                <div class="ticker-item"><span class="label">BTC/USD</span><span class="value">$67,250.40</span><span class="change-up">+2.14%</span></div>
                <div class="ticker-item"><span class="label">ETH/USD</span><span class="value">$3,412.80</span><span class="change-up">+1.58%</span></div>
                <div class="ticker-item"><span class="label">EUR/USD</span><span class="value">1.0876</span><span class="change-down">-0.12%</span></div>
                <div class="ticker-item"><span class="label">GBP/USD</span><span class="value">1.2730</span><span class="change-up">+0.24%</span></div>
                <div class="ticker-item"><span class="label">S&P 500</span><span class="value">5,304.72</span><span class="change-up">+0.87%</span></div>
                <div class="ticker-item"><span class="label">GOLD</span><span class="value">$2,345.60</span><span class="change-up">+0.41%</span></div>
                <div class="ticker-item"><span class="label">OIL (WTI)</span><span class="value">$79.48</span><span class="change-down">-0.33%</span></div>
                <div class="ticker-item"><span class="label">NASDAQ</span><span class="value">18,641.35</span><span class="change-up">+1.02%</span></div>
                <div class="ticker-item"><span class="label">AAPL</span><span class="value">$189.30</span><span class="change-up">+0.76%</span></div>
                <div class="ticker-item"><span class="label">TSLA</span><span class="value">$176.89</span><span class="change-down">-1.21%</span></div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="hero-badge">
                        <i class="fas fa-shield-alt"></i> Regulated & Award-Winning Broker
                    </div>
                    <h1 class="hero-h1">
                        Trade & Copy <span>Top Traders</span> on One Platform
                    </h1>
                    <p class="hero-subtitle">
                        Access 2,000+ instruments stocks, forex, crypto, indices and commodities. 
                        Follow and automatically copy elite traders with a single click. 
                        Join over 24 million registered users globally.
                    </p>
                    <div class="hero-cta-group">
                        <a href="{{ route('register') }}" class="btn-primary-custom">Open Free Account</a>
                        <a href="{{ url('trade') }}" class="btn-outline-light-custom">View Live Markets</a>
                    </div>
                    <div class="hero-trust-badges">
                        <div class="trust-badge">
                            <i class="fas fa-lock"></i> Funds Segregated
                        </div>
                        <div class="trust-badge">
                            <i class="fas fa-university"></i> Tier-1 Regulated
                        </div>
                        {{-- <div class="trust-badge">
                            <i class="fas fa-dollar-sign"></i> Free Demo Account
                        </div> --}}
                        {{-- <div class="trust-badge">
                            <i class="fas fa-mobile-alt"></i> Mobile App
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-widget">
                        <!-- TradingView Advanced Chart -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_hero" style="height:480px;"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                            new TradingView.widget({
                                "autosize": true,
                                "symbol": "COINBASE:BTCUSD",
                                "interval": "60",
                                "theme": "light",
                                "style": "1",
                                "locale": "en",
                                "toolbar_bg": "#ffffff",
                                "enable_publishing": false,
                                "hide_top_toolbar": false,
                                "allow_symbol_change": true,
                                "container_id": "tradingview_hero"
                            });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Stats Strip -->
    <div class="stats-strip">
        <div class="container">
            <div class="row text-center">
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="stat-strip-item">
                        <span class="stat-strip-number">24M+</span>
                        <div class="stat-strip-label">Registered Users</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="stat-strip-item">
                        <span class="stat-strip-number">2,000+</span>
                        <div class="stat-strip-label">Tradable Instruments</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-strip-item">
                        <span class="stat-strip-number">50+</span>
                        <div class="stat-strip-label">Countries Served</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-strip-item">
                        <span class="stat-strip-number">24/7</span>
                        <div class="stat-strip-label">Customer Support</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copy Trading Section -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-tag"><span>Copy Trading</span></div>
            <h2 class="section-title">Copy Elite Traders Automatically</h2>
            <p class="section-subtitle">
                Browse thousands of verified traders with proven track records. 
                Automatically mirror their trades in real-time â€” no experience needed.
            </p>

            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="copy-card">
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <img src="https://i.pravatar.cc/100?img=11" class="trader-img" alt="Marcus Chen">
                            <div>
                                <div class="trader-name">Marcus Chen <i class="fas fa-check-circle verified-icon"></i></div>
                                <div style="font-size:0.78rem; color:var(--text-muted);">Forex & Indices</div>
                            </div>
                        </div>
                        <div class="row text-center mb-3">
                            <div class="col-4">
                                <div class="trader-gain">+84.2%</div>
                                <div class="trader-stat-label">12M Gains</div>
                            </div>
                            <div class="col-4">
                                <div style="color:#f39c12; font-weight:700;">4.8k</div>
                                <div class="trader-stat-label">Copiers</div>
                            </div>
                            <div class="col-4">
                                <div style="color:#64748b; font-weight:700;">Low</div>
                                <div class="trader-stat-label">Risk</div>
                            </div>
                        </div>
                        <a href="{{ route('register') }}" class="copy-btn btn">Copy Trader</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="copy-card" style="border-color:var(--primary);">
                        <div style="position:absolute; top:-1px; right:20px; background:var(--primary); color:#ffffff; font-size:0.72rem; font-weight:800; padding:3px 12px; border-radius:0 0 6px 6px; letter-spacing:1px;">TOP TRADER</div>
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <img src="https://i.pravatar.cc/100?img=22" class="trader-img" alt="Sarah Williams">
                            <div>
                                <div class="trader-name">Sarah Williams <i class="fas fa-check-circle verified-icon"></i></div>
                                <div style="font-size:0.78rem; color:var(--text-muted);">Crypto & Stocks</div>
                            </div>
                        </div>
                        <div class="row text-center mb-3">
                            <div class="col-4">
                                <div class="trader-gain">+137.6%</div>
                                <div class="trader-stat-label">12M Gains</div>
                            </div>
                            <div class="col-4">
                                <div style="color:#f39c12; font-weight:700;">12.3k</div>
                                <div class="trader-stat-label">Copiers</div>
                            </div>
                            <div class="col-4">
                                <div style="color:#e74c3c; font-weight:700;">Med</div>
                                <div class="trader-stat-label">Risk</div>
                            </div>
                        </div>
                        <a href="{{ route('register') }}" class="copy-btn btn">Copy Trader</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="copy-card">
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <img src="https://i.pravatar.cc/100?img=33" class="trader-img" alt="James Okafor">
                            <div>
                                <div class="trader-name">James Okafor <i class="fas fa-check-circle verified-icon"></i></div>
                                <div style="font-size:0.78rem; color:var(--text-muted);">Commodities</div>
                            </div>
                        </div>
                        <div class="row text-center mb-3">
                            <div class="col-4">
                                <div class="trader-gain">+62.8%</div>
                                <div class="trader-stat-label">12M Gains</div>
                            </div>
                            <div class="col-4">
                                <div style="color:#f39c12; font-weight:700;">3.1k</div>
                                <div class="trader-stat-label">Copiers</div>
                            </div>
                            <div class="col-4">
                                <div style="color:#16a34a; font-weight:700;">Low</div>
                                <div class="trader-stat-label">Risk</div>
                            </div>
                        </div>
                        <a href="{{ route('register') }}" class="copy-btn btn">Copy Trader</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="copy-card">
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <img src="https://i.pravatar.cc/100?img=44" class="trader-img" alt="Elena Petrova">
                            <div>
                                <div class="trader-name">Elena Petrova <i class="fas fa-check-circle verified-icon"></i></div>
                                <div style="font-size:0.78rem; color:var(--text-muted);">Forex Pairs</div>
                            </div>
                        </div>
                        <div class="row text-center mb-3">
                            <div class="col-4">
                                <div class="trader-gain">+91.4%</div>
                                <div class="trader-stat-label">12M Gains</div>
                            </div>
                            <div class="col-4">
                                <div style="color:#f39c12; font-weight:700;">7.8k</div>
                                <div class="trader-stat-label">Copiers</div>
                            </div>
                            <div class="col-4">
                                <div style="color:#64748b; font-weight:700;">Low</div>
                                <div class="trader-stat-label">Risk</div>
                            </div>
                        </div>
                        <a href="{{ route('register') }}" class="copy-btn btn">Copy Trader</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-2">
                <a href="{{ route('register') }}" class="btn-primary-custom">Browse All Traders</a>
            </div>
        </div>
    </section>

    <!-- Live Markets Table -->
    <section class="section">
        <div class="container">
            <div class="section-tag"><span>Live Markets</span></div>
            <h2 class="section-title">Trade 2,000+ Instruments</h2>
            <p class="section-subtitle">
                Access global markets in one place â€” crypto, stocks, forex, indices and commodities. Trade CFDs with tight spreads and up to 1:300 leverage.
            </p>

            <!-- Market Tabs -->
            <ul class="nav nav-pills mb-4 justify-content-center gap-2" id="marketTabs">
                <li class="nav-item">
                    <button class="nav-link active px-4" style="background:var(--primary); color:#ffffff; border-radius:4px; font-weight:700; font-size:0.88rem; border:none;" data-tab="crypto">Crypto</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link px-4" style="background:var(--card-bg); color:var(--text-muted); border:1px solid var(--border-color); border-radius:4px; font-weight:600; font-size:0.88rem;" data-tab="stocks">Stocks</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link px-4" style="background:var(--card-bg); color:var(--text-muted); border:1px solid var(--border-color); border-radius:4px; font-weight:600; font-size:0.88rem;" data-tab="forex">Forex</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link px-4" style="background:var(--card-bg); color:var(--text-muted); border:1px solid var(--border-color); border-radius:4px; font-weight:600; font-size:0.88rem;" data-tab="indices">Indices</button>
                </li>
            </ul>

            <div class="market-table-wrap">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Instrument</th>
                            <th class="d-none d-sm-table-cell">Symbol</th>
                            <th>Price</th>
                            <th>Change (24h)</th>
                            <th class="d-none d-md-table-cell">Leverage</th>
                            <th class="d-none d-md-table-cell">Spread</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fab fa-bitcoin text-warning fs-5"></i>
                                    <div>
                                        <div class="instrument-name">Bitcoin</div>
                                        <div class="instrument-sub">Cryptocurrency</div>
                                    </div>
                                </div>
                            </td>
                            <td class="d-none d-sm-table-cell text-muted">BTC/USD</td>
                            <td class="fw-600">$67,250.40</td>
                            <td class="positive"><i class="fas fa-caret-up me-1"></i>+2.14%</td>
                            <td class="d-none d-md-table-cell text-muted">1:100</td>
                            <td class="d-none d-md-table-cell text-muted">$18.5</td>
                            <td><a href="{{ route('register') }}" class="trade-btn">Trade</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fab fa-ethereum text-primary fs-5"></i>
                                    <div>
                                        <div class="instrument-name">Ethereum</div>
                                        <div class="instrument-sub">Cryptocurrency</div>
                                    </div>
                                </div>
                            </td>
                            <td class="d-none d-sm-table-cell text-muted">ETH/USD</td>
                            <td class="fw-600">$3,412.80</td>
                            <td class="positive"><i class="fas fa-caret-up me-1"></i>+1.58%</td>
                            <td class="d-none d-md-table-cell text-muted">1:100</td>
                            <td class="d-none d-md-table-cell text-muted">$2.4</td>
                            <td><a href="{{ route('register') }}" class="trade-btn">Trade</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-euro-sign text-info fs-5"></i>
                                    <div>
                                        <div class="instrument-name">EUR/USD</div>
                                        <div class="instrument-sub">Forex Pair</div>
                                    </div>
                                </div>
                            </td>
                            <td class="d-none d-sm-table-cell text-muted">EUR/USD</td>
                            <td class="fw-600">1.0876</td>
                            <td class="negative"><i class="fas fa-caret-down me-1"></i>-0.12%</td>
                            <td class="d-none d-md-table-cell text-muted">1:300</td>
                            <td class="d-none d-md-table-cell text-muted">0.8 pips</td>
                            <td><a href="{{ route('register') }}" class="trade-btn">Trade</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-chart-line text-success fs-5"></i>
                                    <div>
                                        <div class="instrument-name">S&P 500</div>
                                        <div class="instrument-sub">Index</div>
                                    </div>
                                </div>
                            </td>
                            <td class="d-none d-sm-table-cell text-muted">SPX500</td>
                            <td class="fw-600">5,304.72</td>
                            <td class="positive"><i class="fas fa-caret-up me-1"></i>+0.87%</td>
                            <td class="d-none d-md-table-cell text-muted">1:100</td>
                            <td class="d-none d-md-table-cell text-muted">0.4 pts</td>
                            <td><a href="{{ route('register') }}" class="trade-btn">Trade</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fas fa-gem text-warning fs-5"></i>
                                    <div>
                                        <div class="instrument-name">Gold</div>
                                        <div class="instrument-sub">Commodity</div>
                                    </div>
                                </div>
                            </td>
                            <td class="d-none d-sm-table-cell text-muted">XAU/USD</td>
                            <td class="fw-600">$2,345.60</td>
                            <td class="positive"><i class="fas fa-caret-up me-1"></i>+0.41%</td>
                            <td class="d-none d-md-table-cell text-muted">1:200</td>
                            <td class="d-none d-md-table-cell text-muted">$0.30</td>
                            <td><a href="{{ route('register') }}" class="trade-btn">Trade</a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fab fa-apple text-secondary fs-5"></i>
                                    <div>
                                        <div class="instrument-name">Apple Inc.</div>
                                        <div class="instrument-sub">Stock CFD</div>
                                    </div>
                                </div>
                            </td>
                            <td class="d-none d-sm-table-cell text-muted">AAPL</td>
                            <td class="fw-600">$189.30</td>
                            <td class="positive"><i class="fas fa-caret-up me-1"></i>+0.76%</td>
                            <td class="d-none d-md-table-cell text-muted">1:20</td>
                            <td class="d-none d-md-table-cell text-muted">$0.03</td>
                            <td><a href="{{ route('register') }}" class="trade-btn">Trade</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('register') }}" class="btn-outline-light-custom">View All 2,000+ Instruments</a>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-tag"><span>Getting Started</span></div>
            <h2 class="section-title">Start Trading in Minutes</h2>
            <p class="section-subtitle">Open a live account or practice with a free demo â€” no commitments required.</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <div class="step-icon"><i class="fas fa-user-plus"></i></div>
                        <h3 class="step-title">Create Your Account</h3>
                        <p style="color:var(--text-muted); font-size:0.95rem;">
                            Sign up free in under 2 minutes. Verify your identity to unlock full withdrawal and trading capabilities.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-card" style="border-color:rgba(22,82,240,0.35);">
                        <div class="step-number">2</div>
                        <div class="step-icon"><i class="fas fa-wallet"></i></div>
                        <h3 class="step-title">Fund Your Account</h3>
                        <p style="color:var(--text-muted); font-size:0.95rem;">
                            Deposit via credit card, bank transfer, Bitcoin, or 15+ payment methods. Funds available instantly.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <div class="step-icon"><i class="fas fa-chart-line"></i></div>
                        <h3 class="step-title">Trade or Copy</h3>
                        <p style="color:var(--text-muted); font-size:0.95rem;">
                            Trade manually across 2,000+ instruments or choose a top trader to copy automatically and earn with them.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Features -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-tag text-start"><span>Platform</span></div>
                    <h2 class="section-title text-start mt-2">Professional-Grade Trading Tools</h2>
                    <p style="color:var(--text-muted); margin-bottom:28px; line-height:1.7;">
                        PrimeAssetsTRD delivers everything a serious trader needs: real-time charts, 50+ technical indicators, 
                        risk management tools, and instant order execution across all devices.
                    </p>
                    <ul class="features-list">
                        <li>Advanced charting with 50+ technical indicators</li>
                        <li>One-click trading with guaranteed stop-loss</li>
                        <li>Real-time alerts and push notifications</li>
                        <li>Economic calendar and market news</li>
                        <li>Portfolio analytics and performance reports</li>
                       
                    </ul>
                    <div class="mt-4">
                        <a href="{{ route('register') }}" class="btn-primary-custom">Login</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="border-radius:10px; overflow:hidden; border:1px solid var(--border-color); box-shadow: 0 8px 30px rgba(22,82,240,0.12);">
                        <div class="tradingview-widget-container">
                            <div id="tradingview_features" style="height:420px;"></div>
                            <script type="text/javascript">
                            new TradingView.widget({
                                "autosize": true,
                                "symbol": "BINANCE:ETHUSDT",
                                "interval": "D",
                                "theme": "light",
                                "style": "1",
                                "locale": "en",
                                "toolbar_bg": "#ffffff",
                                "enable_publishing": false,
                                "container_id": "tradingview_features"
                            });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Account Types -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-tag"><span>Accounts</span></div>
            <h2 class="section-title">Choose Your Account Type</h2>
            <p class="section-subtitle">All accounts include access to copy trading, 2,000+ instruments and 24/7 support.</p>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="account-card">
                        <div class="account-name">Standard</div>
                        <div class="account-deposit">$250 <span>min. deposit</span></div>
                        <div class="account-feature">Spreads from <strong>1.0 pips</strong></div>
                        <div class="account-feature">Leverage up to <strong>1:100</strong></div>
                        <div class="account-feature"><strong>2,000+</strong> instruments</div>
                        <div class="account-feature">Copy Trading <strong>included</strong></div>
                        <div class="account-feature">24/5 support</div>
                        <a href="{{ route('register') }}" class="btn-primary-custom mt-4 d-block" style="border-radius:4px;">Open Account</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="account-card featured">
                        <div class="account-name">Professional</div>
                        <div class="account-deposit">$2,500 <span>min. deposit</span></div>
                        <div class="account-feature">Spreads from <strong>0.6 pips</strong></div>
                        <div class="account-feature">Leverage up to <strong>1:200</strong></div>
                        <div class="account-feature"><strong>2,000+</strong> instruments</div>
                        <div class="account-feature">Priority copy trading</div>
                        <div class="account-feature">24/7 dedicated support</div>
                        <a href="{{ route('register') }}" class="btn-primary-custom mt-4 d-block" style="border-radius:4px;">Open Account</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="account-card">
                        <div class="account-name">VIP</div>
                        <div class="account-deposit">$25,000 <span>min. deposit</span></div>
                        <div class="account-feature">Spreads from <strong>0.3 pips</strong></div>
                        <div class="account-feature">Leverage up to <strong>1:300</strong></div>
                        <div class="account-feature"><strong>2,000+</strong> instruments</div>
                        <div class="account-feature">VIP copy trading access</div>
                        <div class="account-feature">Personal account manager</div>
                        <a href="{{ route('register') }}" class="btn-primary-custom mt-4 d-block" style="border-radius:4px;">Open Account</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="account-card">
                        <div class="account-name">Demo</div>
                        <div class="account-deposit">Free <span>no deposit</span></div>
                        <div class="account-feature">Virtual <strong>$100,000</strong> funds</div>
                        <div class="account-feature">All features <strong>included</strong></div>
                        <div class="account-feature">No risk to real money</div>
                        <div class="account-feature">Practice copy trading</div>
                        <div class="account-feature">Unlimited demo period</div>
                        <a href="{{ route('register') }}" class="btn-outline-light-custom mt-4 d-block" style="border-radius:4px;">Open Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section">
        <div class="container">
            <div class="section-tag"><span>Client Reviews</span></div>
            <h2 class="section-title">Trusted by Traders Worldwide</h2>
            <p class="section-subtitle">Real feedback from our community of over 24 million traders across 50+ countries.</p>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"I started copying Marcus Chen 8 months ago with $3,000. My portfolio is now at $6,800. The copy trading feature is seamless and the execution is fast. Highly recommended."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=5" class="testimonial-avatar" alt="Robert Pope">
                            <div>
                                <div class="testimonial-name">Robert Pope</div>
                                <div class="testimonial-location">United Kingdom ðŸ‡¬ðŸ‡§</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The platform is intuitive, spreads are tight and withdrawals process within 24 hours. I've used 4 other brokers and PrimeAssetsTRD is by far the most professional."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=6" class="testimonial-avatar" alt="Yuki Tanaka">
                            <div>
                                <div class="testimonial-name">Yuki Tanaka</div>
                                <div class="testimonial-location">Japan ðŸ‡¯ðŸ‡µ</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="testimonial-text">"I love that I can trade stocks, forex and crypto all in one place. The economic calendar and analysis tools helped me improve my trading strategy significantly."</p>
                        <div class="testimonial-author">
                            <img src="https://i.pravatar.cc/100?img=7" class="testimonial-avatar" alt="Amara Diallo">
                            <div>
                                <div class="testimonial-name">Amara Diallo</div>
                                <div class="testimonial-location">France ðŸ‡«ðŸ‡·</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Overview Widget -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-tag"><span>Live Markets</span></div>
            <h2 class="section-title">Real-Time Market Overview</h2>
            <div style="border-radius:10px; overflow:hidden; border:1px solid var(--border-color);">
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget" style="height:400px;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                    {
                        "colorTheme": "light",
                        "dateRange": "12M",
                        "showChart": true,
                        "locale": "en",
                        "width": "100%",
                        "height": "100%",
                        "isTransparent": false,
                        "backgroundColor": "#ffffff",
                        "tabs": [
                            {
                                "title": "Crypto",
                                "symbols": [
                                    {"s":"CRYPTO:BTCUSD","d":"Bitcoin"},
                                    {"s":"CRYPTO:ETHUSD","d":"Ethereum"},
                                    {"s":"CRYPTO:SOLUSD","d":"Solana"}
                                ]
                            },
                            {
                                "title": "Stocks",
                                "symbols": [
                                    {"s":"NASDAQ:AAPL","d":"Apple"},
                                    {"s":"NASDAQ:TSLA","d":"Tesla"},
                                    {"s":"NASDAQ:NVDA","d":"NVIDIA"}
                                ]
                            }
                        ]
                    }
                    </script>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Methods -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Secure Payment Methods</h2>
            <p class="section-subtitle">Deposit and withdraw using your preferred payment method. Funds are segregated in Tier-1 banks.</p>
            <div class="payment-icons">
                <div class="payment-icon-item"><i class="fab fa-bitcoin text-warning"></i> Bitcoin</div>
                <div class="payment-icon-item"><i class="fab fa-ethereum text-primary"></i> Ethereum</div>
                <div class="payment-icon-item"><i class="fab fa-cc-visa text-primary"></i> Visa</div>
                <div class="payment-icon-item"><i class="fab fa-cc-mastercard text-danger"></i> Mastercard</div>
                <div class="payment-icon-item"><i class="fas fa-university text-info"></i> Bank Wire</div>
                <div class="payment-icon-item"><i class="fab fa-paypal text-primary"></i> PayPal</div>
                <div class="payment-icon-item"><i class="fas fa-money-bill-wave text-success"></i> USDT</div>
            </div>
        </div>
    </section>

    <!-- Regulation Bar -->
    <div class="reg-bar">
        <div class="container">
            <div class="row g-3 justify-content-center text-center">
                <div class="col-md-3 col-6">
                    <div class="reg-item justify-content-center">
                        <i class="fas fa-shield-alt"></i>
                        <div><strong>FCA Regulated</strong><div style="font-size:0.75rem; color:var(--text-muted);">UK Financial Conduct Authority</div></div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="reg-item justify-content-center">
                        <i class="fas fa-lock"></i>
                        <div><strong>Segregated Funds</strong><div style="font-size:0.75rem; color:var(--text-muted);">Client money kept separate</div></div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="reg-item justify-content-center">
                        <i class="fas fa-user-shield"></i>
                        <div><strong>Negative Balance Protection</strong><div style="font-size:0.75rem; color:var(--text-muted);">You can't lose more than you deposit</div></div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="reg-item justify-content-center">
                        <i class="fas fa-certificate"></i>
                        <div><strong>SSL Encrypted</strong><div style="font-size:0.75rem; color:var(--text-muted);">256-bit bank-grade security</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
(function () {
    // ── Assign animation classes ─────────────────────────────────────────────
    var fadeUp = [
        '.section-tag', '.section-title', '.section-subtitle',
        '.hero-badge', '.hero-h1', '.hero-subtitle', '.hero-cta-group', '.hero-trust-badges',
        '.stat-strip-item',
        '.copy-card', '.step-card', '.account-card', '.testimonial-card',
        '.payment-icon-item', '.reg-item',
        '.market-table-wrap',
        '.features-list', '.stats-strip .row'
    ];

    fadeUp.forEach(function (sel) {
        document.querySelectorAll(sel).forEach(function (el) {
            el.classList.add('sa-fade-up');
        });
    });

    // Hero widget slides in from the right
    var heroWidget = document.querySelector('.hero-widget');
    if (heroWidget) {
        heroWidget.classList.remove('sa-fade-up');
        heroWidget.classList.add('sa-fade-right');
    }

    // Platform section: text col from left, chart col from right
    var platformSection = document.querySelector('.section .col-lg-6');
    if (platformSection) {
        platformSection.classList.remove('sa-fade-up');
        platformSection.classList.add('sa-fade-left');
        var next = platformSection.nextElementSibling;
        if (next && next.classList.contains('col-lg-6')) {
            next.classList.remove('sa-fade-up');
            next.classList.add('sa-fade-right');
        }
    }

    // ── Stagger sibling cards within each row ────────────────────────────────
    var cardSelectors = [
        '.copy-card', '.step-card', '.account-card',
        '.testimonial-card', '.payment-icon-item', '.reg-item', '.stat-strip-item'
    ];

    cardSelectors.forEach(function (sel) {
        var elements = document.querySelectorAll(sel);
        var rowMap = new Map();
        elements.forEach(function (el) {
            var row = el.closest('.row') || el.closest('.payment-icons') || el.parentElement;
            if (!row) return;
            if (!rowMap.has(row)) rowMap.set(row, []);
            rowMap.get(row).push(el);
        });
        rowMap.forEach(function (items) {
            items.forEach(function (item, i) {
                item.style.transitionDelay = (i * 0.11) + 's';
            });
        });
    });

    // ── Intersection Observer ─────────────────────────────────────────────────
    var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('sa-visible');
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -55px 0px' });

    document.querySelectorAll('.sa-fade-up, .sa-fade-left, .sa-fade-right').forEach(function (el) {
        obs.observe(el);
    });
})();
</script>

@include('home.footer')


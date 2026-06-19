@php
$pageTitle = 'All Markets - Trade Everything | Primeassetstrade';
$pageHead = <<<'PAGEHEAD'
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .market-hero {
            background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1611974260368-20221afa1141?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
            padding: 120px 0; color: white; text-align: center;
        }
        .market-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .market-hero p { font-size: 1.3rem; margin-bottom: 30px; }
        .market-section { padding: 80px 0; }
        .market-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        .market-card {
            background: #f5f7fc;
            padding: 40px 30px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
        }
        .market-card:hover {
            background: linear-gradient(135deg, #1652f0 0%, #f58634 100%);
            color: white;
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(22, 82, 240, 0.2);
        }
        .market-card h3 { font-weight: 600; margin: 15px 0; color: #1652f0; }
        .market-card p { font-size: 0.95rem; margin: 0; }
        .market-card:hover h3 { color: white; }
        .market-card:hover p { color: white; }
        .market-icon { font-size: 3rem; margin-bottom: 15px; color: #1652f0; }
        .market-card:hover .market-icon { color: white; }
        .stats-section {
            background: linear-gradient(135deg, #f5f7fc 0%, #e8f0ff 100%);
            padding: 60px 0;
            margin: 60px 0;
        }
        .stat-item {
            text-align: center;
            padding: 30px;
        }
        .stat-item h2 { font-size: 2.5rem; font-weight: 700; color: #1652f0; margin-bottom: 10px; }
        .stat-item p { color: #64748b; font-size: 1.1rem; }
        .cta-section {
            background: linear-gradient(135deg, #1652f0 0%, #f58634 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .btn-light { background: white; border: none; color: #1652f0; font-weight: 600; }
        .btn-light:hover { background: #f5f7fc; color: #f58634; }
    </style>
PAGEHEAD;
@endphp

@include('home.header')

<div class="market-hero">
    <div class="container">
        <h1>Trade All Markets in One Place</h1>
        <p>Access 10,000+ tradable instruments across all asset classes with one account</p>
    </div>
</div>

<div class="market-section">
    <div class="container">
        <h2 class="text-center mb-5">What Can You Trade?</h2>
        
        <div class="market-grid">
            <a href="/en-ng/trading/cryptocurrencies" class="market-card text-decoration-none">
                <div class="market-icon"><i class="fas fa-coins"></i></div>
                <h3>Cryptocurrencies</h3>
                <p>100+ digital assets including Bitcoin and Ethereum</p>
            </a>

            <a href="/en-ng/trading/indices" class="market-card text-decoration-none">
                <div class="market-icon"><i class="fas fa-chart-bar"></i></div>
                <h3>Indices</h3>
                <p>S&P 500, FTSE 100, DAX, and more</p>
            </a>

            <a href="/en-ng/trading/forex" class="market-card text-decoration-none">
                <div class="market-icon"><i class="fas fa-exchange-alt"></i></div>
                <h3>Forex</h3>
                <p>50+ currency pairs 24/5 trading</p>
            </a>

            <a href="/en-ng/trading/commodities" class="market-card text-decoration-none">
                <div class="market-icon"><i class="fas fa-cube"></i></div>
                <h3>Commodities</h3>
                <p>Oil, gold, natural gas, and agricultural products</p>
            </a>

            <a href="/en-ng/trading/stocks" class="market-card text-decoration-none">
                <div class="market-icon"><i class="fas fa-building"></i></div>
                <h3>Shares (Stocks)</h3>
                <p>2000+ global stocks from major exchanges</p>
            </a>

            <a href="/en-ng/trading/options" class="market-card text-decoration-none">
                <div class="market-icon"><i class="fas fa-layer-group"></i></div>
                <h3>Options</h3>
                <p>Calls, puts, and advanced strategies</p>
            </a>

            <a href="/en-ng/trading/etfs" class="market-card text-decoration-none">
                <div class="market-icon"><i class="fas fa-sitemap"></i></div>
                <h3>ETFs</h3>
                <p>500+ Exchange Traded Funds</p>
            </a>

            <div class="market-card" style="background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white;">
                <div class="market-icon" style="color: white;"><i class="fas fa-plus"></i></div>
                <h3 style="color: white;">And More</h3>
                <p>Bonds, commodities futures, and emerging markets</p>
            </div>
        </div>
    </div>
</div>

<div class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="stat-item">
                    <h2>10,000+</h2>
                    <p>Tradable Instruments</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <h2>24/7</h2>
                    <p>Market Access</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <h2>1:500</h2>
                    <p>Leverage Available</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <h2>100+</h2>
                    <p>Technical Indicators</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="market-section">
    <div class="container">
        <h2 class="text-center mb-5">Why Choose Primeassetstrade?</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div style="background: #f5f7fc; padding: 30px; border-radius: 15px;">
                    <h4 class="text-primary mb-3"><i class="fas fa-lock me-2"></i>Secure & Regulated</h4>
                    <p>Trade with confidence on a fully regulated and secure platform with 24/7 support.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div style="background: #f5f7fc; padding: 30px; border-radius: 15px;">
                    <h4 class="text-primary mb-3"><i class="fas fa-users me-2"></i>Copy Trading</h4>
                    <p>Automatically copy trades from successful traders across all markets.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div style="background: #f5f7fc; padding: 30px; border-radius: 15px;">
                    <h4 class="text-primary mb-3"><i class="fas fa-chart-line me-2"></i>Advanced Tools</h4>
                    <p>Professional charting, technical analysis, and risk management tools included.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Begin Your Trading Journey Today</h2>
        <p class="mb-4">Trade 10,000+ instruments across all major asset classes</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Open Your Account</a>
    </div>
</div>

@include('home.footer')

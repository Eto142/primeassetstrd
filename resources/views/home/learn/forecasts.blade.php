@php
$pageTitle = 'Trading Forecasts & Price Outlook | Primeassetstrade';
$pageHead = <<<'PAGEHEAD'
<style>
    :root { --primary: #1652f0; --secondary: #f58634; }
    body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
    .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
    .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
    .page-content { padding: 80px 0; }
    .forecast-card { background: #f5f7fc; padding: 30px; border-radius: 15px; margin-bottom: 25px; }
    .forecast-card h5 { color: #1652f0; margin-bottom: 15px; }
    .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
</style>
PAGEHEAD;
@endphp

@include('home.header')
<div class="page-hero">
    <div class="container">
        <h1>Trading Forecasts</h1>
        <p>Expert market analysis and price predictions to help guide your trading decisions</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Market Outlook & Analysis</h2>

                <p class="mb-4">Our team of experienced analysts provides regular forecasts and market analysis on major assets. Get insights on price movements, support/resistance levels, and upcoming market events.</p>

                <div class="forecast-card">
                    <h5><i class="fas fa-coins me-2"></i>Cryptocurrency Forecasts</h5>
                    <p>Stay updated on Bitcoin, Ethereum, and other major cryptocurrencies with technical analysis and price targets from our experts.</p>
                </div>

                <div class="forecast-card">
                    <h5><i class="fas fa-exchange-alt me-2"></i>Forex Outlook</h5>
                    <p>Get comprehensive analysis on major currency pairs including EUR/USD, GBP/USD, and emerging market currencies.</p>
                </div>

                <div class="forecast-card">
                    <h5><i class="fas fa-chart-bar me-2"></i>Indices Analysis</h5>
                    <p>Monitor forecasts for S&P 500, FTSE 100, DAX, and other major indices with weekly and monthly outlooks.</p>
                </div>

                <div class="forecast-card">
                    <h5><i class="fas fa-building me-2"></i>Stock Predictions</h5>
                    <p>Get analysis on popular stocks from major companies with technical levels and market sentiment insights.</p>
                </div>

                <div class="forecast-card">
                    <h5><i class="fas fa-cube me-2"></i>Commodities Outlook</h5>
                    <p>Track forecasts on oil, gold, natural gas, and other commodities affected by global economic trends.</p>
                </div>

                <div class="forecast-card">
                    <h5><i class="fas fa-calendar me-2"></i>Economic Calendar</h5>
                    <p>Stay informed about economic releases and events that impact market movements and trading opportunities.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Get Expert Market Insights</h2>
        <p class="mb-4">Trade with confidence using our analysis and forecasts</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Create Account</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

@php
$pageTitle = '+Insights | Market Data & Trading Insights';
$pageHead = <<<'PAGEHEAD'
<style>
    :root { --primary: #1652f0; --secondary: #f58634; }
    body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
    .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
    .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
    .page-content { padding: 80px 0; }
    .insight-card { background: #f5f7fc; padding: 30px; border-radius: 15px; margin-bottom: 25px; }
    .insight-card h5 { color: #1652f0; margin-bottom: 15px; }
    .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
</style>
PAGEHEAD;
@endphp

@include('home.header')
<div class="page-hero">
    <div class="container">
        <h1>+Insights</h1>
        <p>Real-time market data, trading insights, and sentiment analysis to guide your trading decisions</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Market Intelligence at Your Fingertips</h2>

                <p class="mb-4">Our +Insights tool provides comprehensive market data, real-time trading signals, and sentiment analysis across all asset classes. Make informed decisions with complete market intelligence.</p>

                <div class="insight-card">
                    <h5><i class="fas fa-chart-pie me-2"></i>Market Sentiment</h5>
                    <p>Track what other traders are doing with real-time sentiment data showing buy/sell percentages across instruments.</p>
                </div>

                <div class="insight-card">
                    <h5><i class="fas fa-volume-up me-2"></i>Trading Volume</h5>
                    <p>Monitor trading volume trends to confirm price movements and identify potential trading opportunities.</p>
                </div>

                <div class="insight-card">
                    <h5><i class="fas fa-bell me-2"></i>Real-time Alerts</h5>
                    <p>Receive instant notifications when key price levels are reached or market conditions change.</p>
                </div>

                <div class="insight-card">
                    <h5><i class="fas fa-users me-2"></i>Trader Sentiment Index</h5>
                    <p>See what experienced traders think about upcoming market movements with our sentiment indicators.</p>
                </div>

                <div class="insight-card">
                    <h5><i class="fas fa-newspaper me-2"></i>Market News</h5>
                    <p>Stay updated with the latest market news and breaking economic announcements that impact prices.</p>
                </div>

                <div class="insight-card">
                    <h5><i class="fas fa-trophy me-2"></i>Top Performers</h5>
                    <p>Track the best performing traders and instruments to find successful trading opportunities.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Access Market Insights Now</h2>
        <p class="mb-4">Make smarter trading decisions with real-time market data</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Start Trading</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

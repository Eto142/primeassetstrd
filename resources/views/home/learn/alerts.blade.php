@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Time Alerts | Trading Alerts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
        .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .page-content { padding: 80px 0; }
        .alert-type { background: #f5f7fc; padding: 30px; border-radius: 15px; margin-bottom: 25px; }
        .alert-type h5 { color: #1652f0; margin-bottom: 15px; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
    </style>
</head>
<body>
<div class="page-hero">
    <div class="container">
        <h1>Real Time Alerts</h1>
        <p>Never miss a trading opportunity with instant notifications on market movements and price levels</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Stay on Top of Your Trades</h2>

                <p class="mb-4">Set up customized alerts to be notified instantly when market conditions change. Never miss important price movements or trading opportunities again.</p>

                <div class="alert-type">
                    <h5><i class="fas fa-bell me-2"></i>Price Level Alerts</h5>
                    <p>Get notified when a price reaches your target levels. Set support/resistance alerts to catch potential trading opportunities.</p>
                </div>

                <div class="alert-type">
                    <h5><i class="fas fa-percent me-2"></i>Percentage Change Alerts</h5>
                    <p>Receive notifications when an asset moves a certain percentage in either direction from current price.</p>
                </div>

                <div class="alert-type">
                    <h5><i class="fas fa-chart-line me-2"></i>Technical Indicator Alerts</h5>
                    <p>Get alerted when technical indicators trigger buy/sell signals like moving average crossovers or RSI extremes.</p>
                </div>

                <div class="alert-type">
                    <h5><i class="fas fa-newspaper me-2"></i>News & Event Alerts</h5>
                    <p>Stay updated on breaking market news and important economic events that impact your trading positions.</p>
                </div>

                <div class="alert-type">
                    <h5><i class="fas fa-volume-up me-2"></i>Volume Spike Alerts</h5>
                    <p>Get notified when trading volume spikes, indicating potential breakouts or reversals in price action.</p>
                </div>

                <div class="alert-type">
                    <h5><i class="fas fa-mobile-alt me-2"></i>Multi-Channel Notifications</h5>
                    <p>Receive alerts via SMS, email, push notifications, and in-app messages for immediate awareness.</p>
                </div>

                <div class="alert-type">
                    <h5><i class="fas fa-sliders-h me-2"></i>Customizable Thresholds</h5>
                    <p>Set specific conditions and thresholds for each alert to match your exact trading strategy and preferences.</p>
                </div>

                <div class="alert-type">
                    <h5><i class="fas fa-clock me-2"></i>Time-Based Alerts</h5>
                    <p>Schedule alerts for specific trading sessions or times of day when market volatility is highest.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Never Miss a Trading Opportunity</h2>
        <p class="mb-4">Set up unlimited alerts and stay connected to the markets 24/7</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Enable Alerts</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

@php
$pageTitle = 'Risk Management Tools | CFD Trading';
$pageHead = <<<'PAGEHEAD'
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
        .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .page-content { padding: 80px 0; }
        .tool-card { background: #f5f7fc; padding: 30px; border-radius: 15px; margin-bottom: 25px; }
        .tool-card h5 { color: #1652f0; margin-bottom: 15px; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
    </style>
PAGEHEAD;
@endphp

@include('home.header')

<div class="page-hero">
    <div class="container">
        <h1>Risk Management</h1>
        <p>Essential tools and strategies to protect your capital and maximize trading profitability</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Master Risk Management</h2>

                <p class="mb-4">Successful trading requires effective risk management. Learn how to protect your capital, control losses, and build long-term profitability with our comprehensive risk management tools and strategies.</p>

                <div class="tool-card">
                    <h5><i class="fas fa-stop-circle me-2"></i>Stop Loss Orders</h5>
                    <p>Automatically close losing trades at predetermined price levels to limit potential losses and protect your capital.</p>
                </div>

                <div class="tool-card">
                    <h5><i class="fas fa-check-circle me-2"></i>Take Profit Orders</h5>
                    <p>Lock in profits by automatically closing winning trades at target price levels before the trend reverses.</p>
                </div>

                <div class="tool-card">
                    <h5><i class="fas fa-chart-bar me-2"></i>Position Sizing</h5>
                    <p>Calculate optimal position sizes based on your risk tolerance and account size. Risk only a small percentage per trade.</p>
                </div>

                <div class="tool-card">
                    <h5><i class="fas fa-shield-alt me-2"></i>Portfolio Diversification</h5>
                    <p>Spread risk across different assets, markets, and strategies to reduce overall portfolio volatility.</p>
                </div>

                <div class="tool-card">
                    <h5><i class="fas fa-scale-balanced me-2"></i>Risk-Reward Ratio</h5>
                    <p>Ensure each trade has a favorable risk-reward ratio where potential profits exceed potential losses.</p>
                </div>

                <div class="tool-card">
                    <h5><i class="fas fa-money-bill-wave me-2"></i>Money Management</h5>
                    <p>Implement strict money management rules to control leverage and protect against catastrophic losses.</p>
                </div>

                <div class="tool-card">
                    <h5><i class="fas fa-thermometer me-2"></i>Drawdown Analysis</h5>
                    <p>Monitor peak-to-trough declines in your account to understand your trading strategy's risk characteristics.</p>
                </div>

                <div class="tool-card">
                    <h5><i class="fas fa-clipboard-list me-2"></i>Trading Journal</h5>
                    <p>Keep detailed records of your trades to identify patterns and continuously improve your risk management.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Protect Your Trading Capital</h2>
        <p class="mb-4">Learn professional risk management techniques from our experts</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Start Trading Safely</a>
    </div>
</div>

@include('home.footer')

@php
$pageTitle = 'Free Demo Trading Account | Practice Trading';
$pageHead = <<<'PAGEHEAD'
<style>
    :root { --primary: #1652f0; --secondary: #f58634; }
    body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
    .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
    .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
    .page-content { padding: 80px 0; }
    .demo-feature { background: #f5f7fc; padding: 30px; border-radius: 15px; margin-bottom: 25px; }
    .demo-feature h5 { color: #1652f0; margin-bottom: 15px; }
    .benefits { background: #f5f7fc; padding: 40px; border-radius: 15px; margin: 40px 0; }
    .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
</style>
PAGEHEAD;
@endphp

@include('home.header')
<div class="page-hero">
    <div class="container">
        <h1>Free Demo Trading Account</h1>
        <p>Practice trading risk-free with unlimited virtual capital and real market data</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Trade Without Risk</h2>

                <p class="mb-4">Our demo account gives you everything you need to practice trading without any real money at risk. Trade with live prices, test strategies, and build confidence before trading with real capital.</p>

                <div class="demo-feature">
                    <h5><i class="fas fa-dollar-sign me-2"></i>$100,000 Virtual Capital</h5>
                    <p>Start with substantial virtual funds to practice with realistic position sizes and test your trading strategies.</p>
                </div>

                <div class="demo-feature">
                    <h5><i class="fas fa-chart-line me-2"></i>Real Market Data</h5>
                    <p>Trade with live prices and real market quotes. See exactly how your trades would execute in live markets.</p>
                </div>

                <div class="demo-feature">
                    <h5><i class="fas fa-tools me-2"></i>Full Platform Access</h5>
                    <p>Access all trading tools, charts, indicators, and features available on our real trading platform.</p>
                </div>

                <div class="demo-feature">
                    <h5><i class="fas fa-infinity me-2"></i>Unlimited Duration</h5>
                    <p>Practice as long as you need. There's no time limit on your demo account. Trade for days, weeks, or months.</p>
                </div>

                <div class="demo-feature">
                    <h5><i class="fas fa-copy me-2"></i>Copy Trading Simulation</h5>
                    <p>Experiment with copy trading on the demo account to see how it works before applying real money.</p>
                </div>

                <div class="benefits">
                    <h3 class="text-center text-primary mb-4">Why Use a Demo Account?</h3>
                    <ul>
                        <li>Learn trading basics without financial risk</li>
                        <li>Test new trading strategies and techniques</li>
                        <li>Understand platform features and tools</li>
                        <li>Build confidence before trading real money</li>
                        <li>Practice risk management and position sizing</li>
                        <li>Experiment with different trading styles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Start Your Free Demo Today</h2>
        <p class="mb-4">Zero risk. Unlimited learning. Real market conditions.</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Create Demo Account</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

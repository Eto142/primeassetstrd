@php
$pageTitle = 'Financial Glossary | Trading Terms & Definitions';
$pageHead = <<<'PAGEHEAD'
<style>
    :root { --primary: #1652f0; --secondary: #f58634; }
    body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
    .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
    .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
    .page-content { padding: 80px 0; }
    .term-card { background: #f5f7fc; padding: 25px; border-radius: 15px; margin-bottom: 20px; border-left: 4px solid #1652f0; }
    .term-card h5 { color: #1652f0; margin-bottom: 10px; }
    .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
</style>
PAGEHEAD;
@endphp

@include('home.header')
<div class="page-hero">
    <div class="container">
        <h1>Financial Glossary</h1>
        <p>Comprehensive definitions of trading and financial terms to help you understand the markets</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Trading Terms & Definitions</h2>

                <div class="term-card">
                    <h5>Spread</h5>
                    <p>The difference between the bid price (seller's ask) and the ask price (buyer's bid). Lower spreads indicate more competitive pricing.</p>
                </div>

                <div class="term-card">
                    <h5>Leverage</h5>
                    <p>Using borrowed capital to increase the size of your position. It amplifies both gains and losses on your investment.</p>
                </div>

                <div class="term-card">
                    <h5>Pip</h5>
                    <p>The smallest unit of price movement in forex trading. For most currency pairs, 1 pip = 0.0001 (1/100 of a cent).</p>
                </div>

                <div class="term-card">
                    <h5>Volatility</h5>
                    <p>The measure of price fluctuation in an asset. High volatility means prices change rapidly; low volatility means stable prices.</p>
                </div>

                <div class="term-card">
                    <h5>Technical Analysis</h5>
                    <p>The study of past price movements and trading volume to predict future price movements using charts and indicators.</p>
                </div>

                <div class="term-card">
                    <h5>Copy Trading</h5>
                    <p>A feature that allows traders to automatically replicate the trades of experienced or successful traders in their account.</p>
                </div>

                <div class="term-card">
                    <h5>CFD (Contract for Difference)</h5>
                    <p>A trading agreement where traders profit from the difference in price without owning the underlying asset.</p>
                </div>

                <div class="term-card">
                    <h5>Drawdown</h5>
                    <p>The peak-to-trough decline experienced by an investment or trading account during a specific period.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Expand Your Financial Knowledge</h2>
        <p class="mb-4">Master trading terminology and concepts</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Start Trading</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

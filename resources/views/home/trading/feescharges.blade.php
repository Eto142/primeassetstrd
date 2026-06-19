@php
$pageTitle = 'Fees & Charges | Primeassetstrade';
$pageHead = <<<'PAGEHEAD'
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
        .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .page-content { padding: 80px 0; }
        .fee-table { background: #f5f7fc; border-radius: 15px; padding: 30px; margin: 30px 0; }
        .fee-item { border-bottom: 1px solid #e2e8f0; padding: 20px 0; }
        .fee-item:last-child { border-bottom: none; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
        .btn-light { background: white; border: none; color: #1652f0; font-weight: 600; }
    </style>
PAGEHEAD;
@endphp

@include('home.header')

<div class="page-hero">
    <div class="container">
        <h1>Transparent Fees & Charges</h1>
        <p>Competitive pricing with no hidden charges. See exactly what you pay when trading with Primeassetstrade.</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Our Fee Structure</h2>
                
                <div class="fee-table">
                    <h3 class="text-primary mb-4">Forex Trading</h3>
                    <div class="fee-item">
                        <h5>Spread</h5>
                        <p>Starting from 0.1 pips on major currency pairs. Spread varies by market conditions.</p>
                    </div>
                    <div class="fee-item">
                        <h5>Overnight Fee</h5>
                        <p>Interest charged on positions held overnight. Rate varies based on current market rates.</p>
                    </div>
                </div>

                <div class="fee-table">
                    <h3 class="text-primary mb-4">Cryptocurrencies</h3>
                    <div class="fee-item">
                        <h5>Trading Spread</h5>
                        <p>Competitive spreads on all major cryptocurrencies starting from 0.5%.</p>
                    </div>
                    <div class="fee-item">
                        <h5>Overnight Holding Fee</h5>
                        <p>Small fee for holding positions overnight. Exact rate shown before trade execution.</p>
                    </div>
                </div>

                <div class="fee-table">
                    <h3 class="text-primary mb-4">Stocks & Indices</h3>
                    <div class="fee-item">
                        <h5>Spread</h5>
                        <p>Low spreads on all major stocks and indices for cost-effective trading.</p>
                    </div>
                    <div class="fee-item">
                        <h5>No Commission</h5>
                        <p>Zero trading commissions. We're compensated through the bid-ask spread only.</p>
                    </div>
                </div>

                <div class="fee-table">
                    <h3 class="text-primary mb-4">Copy Trading</h3>
                    <div class="fee-item">
                        <h5>Copy Fee</h5>
                        <p>20% performance fee when your copied trades are profitable. No fee if trades lose money.</p>
                    </div>
                    <div class="fee-item">
                        <h5>Signal Provider Earnings</h5>
                        <p>Earn 80% of the copy trading fees from traders copying your positions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Start Trading with Transparent Pricing</h2>
        <p class="mb-4">No hidden fees, no surprises. Just competitive pricing and excellent service.</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Create Account</a>
    </div>
</div>

@include('home.footer')

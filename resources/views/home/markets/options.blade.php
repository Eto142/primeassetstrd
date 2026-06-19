@php
$pageTitle = 'Options Trading | Primeassetstrade';
$pageHead = <<<'PAGEHEAD'
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .market-hero {
            background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
            padding: 120px 0; color: white; text-align: center;
        }
        .market-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .market-hero p { font-size: 1.3rem; margin-bottom: 30px; }
        .market-section { padding: 80px 0; }
        .feature-card {
            background: #f5f7fc; padding: 40px 30px; border-radius: 15px; margin-bottom: 30px; transition: all 0.3s;
        }
        .feature-card:hover {
            background: linear-gradient(135deg, #1652f0 0%, #f58634 100%);
            color: white; transform: translateY(-10px);
        }
        .feature-card h3 { font-weight: 600; margin-bottom: 15px; color: #1652f0; }
        .feature-card:hover h3 { color: white; }
        .cta-section {
            background: linear-gradient(135deg, #1652f0 0%, #f58634 100%);
            color: white; padding: 60px 0; text-align: center;
        }
        .btn-primary { background: #1652f0; border: none; }
        .btn-primary:hover { background: #f58634; }
    </style>
PAGEHEAD;
@endphp

@include('home.header')

<div class="market-hero">
    <div class="container">
        <h1>Options Trading</h1>
        <p>Trade calls and puts on major indices, stocks, and commodities with advanced options strategies</p>
    </div>
</div>

<div class="market-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="mb-4">Why Trade Options with Primeassetstrade?</h2>
                <p>Options trading offers flexibility and strategic opportunities for experienced traders. Trade calls and puts on major assets with intuitive tools and real-time Greeks for informed decision making.</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-card">
                            <h3><i class="fas fa-layer-group me-2"></i>Multiple Strategies</h3>
                            <p>Execute covered calls, spreads, straddles, and other advanced options strategies.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="feature-card">
                            <h3><i class="fas fa-calculator me-2"></i>Live Greeks</h3>
                            <p>Real-time Delta, Gamma, Theta, and Vega calculations for precise risk management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Leverage Benefits</h3>
                    <p>Control larger positions with smaller capital investment through options leverage.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Risk Control</h3>
                    <p>Use options to hedge existing positions and limit maximum losses on trades.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Multiple Expiries</h3>
                    <p>Trade options with various expiration dates for flexible trading timeframes.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Master Options Trading</h2>
        <p class="mb-4">Advanced trading strategies for experienced traders</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Start Trading</a>
    </div>
</div>

@include('home.footer')

@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forex Trading | Primeassetstrade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .market-hero {
            background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1535320903710-d993d3a9b3fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
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
</head>
<body>
<div class="market-hero">
    <div class="container">
        <h1>Forex Trading</h1>
        <p>Trade 50+ currency pairs including EUR/USD, GBP/USD, and more with tight spreads</p>
    </div>
</div>

<div class="market-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="mb-4">Why Trade Forex with Primeassetstrade?</h2>
                <p>The foreign exchange market is the world's largest financial market. Trade major, minor, and exotic currency pairs with competitive spreads and advanced trading tools on Primeassetstrade.</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-card">
                            <h3><i class="fas fa-exchange-alt me-2"></i>50+ Currency Pairs</h3>
                            <p>Trade all major currency pairs plus exotic and emerging market currencies.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="feature-card">
                            <h3><i class="fas fa-tachometer-alt me-2"></i>Ultra-Fast Execution</h3>
                            <p>Minimal slippage with fast order execution on all forex pairs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>24/5 Trading</h3>
                    <p>Trade 24 hours a day, 5 days a week across all major global markets.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Leverage Available</h3>
                    <p>Access leverage up to 1:500 for experienced traders to maximize opportunities.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Copy Trading</h3>
                    <p>Follow expert forex traders and automatically replicate their successful strategies.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Begin Your Forex Trading Journey</h2>
        <p class="mb-4">Join thousands of forex traders earning with Primeassetstrade</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Create Account</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

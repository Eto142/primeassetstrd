@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commodities Trading | Primeassetstrade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .market-hero {
            background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1553729027-b6f87cd3b56f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
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
        <h1>Commodities Trading</h1>
        <p>Trade oil, gold, natural gas, and agricultural commodities with real-time market data</p>
    </div>
</div>

<div class="market-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="mb-4">Why Trade Commodities with Primeassetstrade?</h2>
                <p>Commodities provide diversification and hedge opportunities for your investment portfolio. Trade energy, metals, and agricultural products with competitive spreads and advanced charting tools.</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-card">
                            <h3><i class="fas fa-cube me-2"></i>All Commodities</h3>
                            <p>Trade oil, gold, silver, natural gas, copper, and agricultural products.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="feature-card">
                            <h3><i class="fas fa-leaf me-2"></i>Diversification</h3>
                            <p>Hedge your portfolio by trading energy and metals alongside other assets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Extended Hours</h3>
                    <p>Trade commodities across global market sessions with extended trading hours.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Real-time News</h3>
                    <p>Get live market news and economic reports that impact commodity prices.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Copy Trading</h3>
                    <p>Follow expert commodities traders and automatically mirror their trades.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Start Trading Commodities</h2>
        <p class="mb-4">Diversify your portfolio with global commodity trading</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Get Started</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

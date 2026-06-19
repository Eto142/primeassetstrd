@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indices Trading | Primeassetstrade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .market-hero {
            background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1611974260368-20221afa1141?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
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
        <h1>Indices Trading</h1>
        <p>Trade major global indices including S&P 500, FTSE 100, DAX, and more with real-time data</p>
    </div>
</div>

<div class="market-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="mb-4">Why Trade Indices with Primeassetstrade?</h2>
                <p>Get exposure to entire market sectors and economies by trading major stock indices. Follow expert traders or implement your own trading strategy on the world's most popular indices.</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-card">
                            <h3><i class="fas fa-globe me-2"></i>Global Coverage</h3>
                            <p>Trade US, European, Asian, and Australian indices all from one platform.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="feature-card">
                            <h3><i class="fas fa-chart-bar me-2"></i>Tight Spreads</h3>
                            <p>Competitive spreads on all major indices for cost-effective trading.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Extended Hours</h3>
                    <p>Trade extended hours access on major indices for maximum flexibility.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Diversification</h3>
                    <p>Easily diversify your portfolio across different markets with index CFDs.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Copy Trading</h3>
                    <p>Follow successful indices traders and automatically copy their positions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Start Trading Indices Today</h2>
        <p class="mb-4">Access the world's major indices with advanced tools and expert support</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Open Account</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

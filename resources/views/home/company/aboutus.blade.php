@php
$pageTitle = 'About Primeassetstrade | Trading Platform';
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
        .about-card { background: #f5f7fc; padding: 40px; border-radius: 15px; margin-bottom: 30px; }
        .about-card h3 { color: #1652f0; margin-bottom: 15px; }
        .stats { text-align: center; padding: 40px; background: #f5f7fc; border-radius: 15px; margin: 30px 0; }
        .stats-number { font-size: 2.5rem; font-weight: 700; color: #1652f0; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
    </style>
PAGEHEAD;
@endphp

@include('home.header')

<div class="page-hero">
    <div class="container">
        <h1>About Primeassetstrade</h1>
        <p>The trusted platform for traders worldwide. Trade stocks, forex, crypto, and more with confidence.</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Who We Are</h2>
                
                <p class="mb-4">Primeassetstrade is a leading online trading platform providing traders worldwide with access to financial markets. We've built our reputation on transparency, security, and customer satisfaction.</p>

                <div class="about-card">
                    <h3><i class="fas fa-globe me-2"></i>Global Trading Platform</h3>
                    <p>With operations in multiple countries, we serve traders worldwide with 24/7 support in multiple languages. Access 10,000+ tradable instruments across all major asset classes.</p>
                </div>

                <div class="about-card">
                    <h3><i class="fas fa-shield-alt me-2"></i>Security & Regulation</h3>
                    <p>Your funds are protected with industry-leading security measures and regulatory oversight. We maintain strict compliance with financial regulations in all markets we operate.</p>
                </div>

                <div class="about-card">
                    <h3><i class="fas fa-users me-2"></i>Community of Traders</h3>
                    <p>Join a vibrant community of traders worldwide. Share strategies, copy successful traders, and grow together with our innovative copy trading platform.</p>
                </div>

                <div class="stats">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="stats-number">10,000+</div>
                            <p>Tradable Instruments</p>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-number">1M+</div>
                            <p>Active Traders</p>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-number">24/7</div>
                            <p>Customer Support</p>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-number">$Billions</div>
                            <p>Monthly Volume</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Join Primeassetstrade Today</h2>
        <p class="mb-4">Become part of a global trading community</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Open Account</a>
    </div>
</div>

@include('home.footer')

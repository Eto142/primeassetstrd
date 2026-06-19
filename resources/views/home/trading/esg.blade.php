@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESG Scoring | Primeassetstrade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
        .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .page-content { padding: 80px 0; }
        .esg-card { background: #f5f7fc; padding: 40px; border-radius: 15px; margin-bottom: 30px; border-left: 5px solid #1652f0; }
        .esg-card h3 { color: #1652f0; margin-bottom: 15px; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
    </style>
</head>
<body>
<div class="page-hero">
    <div class="container">
        <h1>ESG Scoring</h1>
        <p>Trade responsibly with environmental, social, and governance insights on every investment</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Environmental, Social & Governance Insights</h2>
                
                <div class="esg-card">
                    <h3><i class="fas fa-leaf me-2"></i>Environmental</h3>
                    <p>Evaluate companies based on their environmental impact, carbon footprint, renewable energy adoption, and sustainability practices. Make informed decisions about companies' environmental responsibility.</p>
                </div>

                <div class="esg-card">
                    <h3><i class="fas fa-users me-2"></i>Social</h3>
                    <p>Assess companies on labor practices, diversity and inclusion, community engagement, and human rights records. Support companies that invest in their workforce and communities.</p>
                </div>

                <div class="esg-card">
                    <h3><i class="fas fa-building me-2"></i>Governance</h3>
                    <p>Review corporate governance structures, board diversity, executive compensation, and business ethics. Invest in companies with strong leadership and transparent practices.</p>
                </div>

                <div class="esg-card" style="background: linear-gradient(135deg, #f5f7fc 0%, #e8f0ff 100%); border-left: 5px solid #f58634;">
                    <h3 style="color: #f58634;"><i class="fas fa-chart-bar me-2"></i>Our ESG Scoring System</h3>
                    <p>We provide comprehensive ESG scores for over 8,000 companies, updated regularly with the latest data. Compare ESG scores across industries and make responsible investment decisions aligned with your values.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Invest With ESG Insights</h2>
        <p class="mb-4">Make informed decisions with comprehensive environmental, social, and governance data</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Start Trading Responsibly</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

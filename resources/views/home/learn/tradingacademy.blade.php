@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Academy | Learn to Trade | Primeassetstrade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
        .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .page-content { padding: 80px 0; }
        .course-card { background: #f5f7fc; padding: 30px; border-radius: 15px; margin-bottom: 25px; }
        .course-card h4 { color: #1652f0; margin-bottom: 15px; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
    </style>
</head>
<body>
<div class="page-hero">
    <div class="container">
        <h1>Trading Academy</h1>
        <p>Learn trading from basics to advanced strategies with our comprehensive educational resources</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Master the Art of Trading</h2>
                
                <p class="mb-5">Our Trading Academy provides comprehensive courses designed to help traders of all levels improve their skills and market knowledge. From basic concepts to advanced trading strategies, we've got everything you need.</p>

                <div class="course-card">
                    <h4><i class="fas fa-book me-2"></i>Beginner's Guide</h4>
                    <p>Start your trading journey with our beginner-friendly courses covering trading basics, market types, and fundamental concepts.</p>
                </div>

                <div class="course-card">
                    <h4><i class="fas fa-chart-line me-2"></i>Technical Analysis</h4>
                    <p>Learn how to read charts, identify trends, and use technical indicators to make informed trading decisions.</p>
                </div>

                <div class="course-card">
                    <h4><i class="fas fa-globe me-2"></i>Forex Trading</h4>
                    <p>Master currency trading with courses on forex fundamentals, pairs trading, and currency market dynamics.</p>
                </div>

                <div class="course-card">
                    <h4><i class="fas fa-coins me-2"></i>Cryptocurrency Trading</h4>
                    <p>Understand blockchain technology and master cryptocurrency trading strategies in this specialized course.</p>
                </div>

                <div class="course-card">
                    <h4><i class="fas fa-users me-2"></i>Copy Trading Strategies</h4>
                    <p>Learn how to effectively follow and copy successful traders to build a passive income stream.</p>
                </div>

                <div class="course-card">
                    <h4><i class="fas fa-shield-alt me-2"></i>Risk Management</h4>
                    <p>Discover essential risk management techniques to protect your capital and maximize long-term profits.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Elevate Your Trading Skills</h2>
        <p class="mb-4">Join our academy and learn from industry experts</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Start Learning Today</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

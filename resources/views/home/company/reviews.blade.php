@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeassetstrade Reviews | Trader Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
        .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .page-content { padding: 80px 0; }
        .review-card { background: #f5f7fc; padding: 30px; border-radius: 15px; margin-bottom: 25px; }
        .stars { color: #f58634; margin-bottom: 15px; }
        .reviewer-name { font-weight: 600; color: #1652f0; margin-bottom: 10px; }
        .rating-summary { background: #f5f7fc; padding: 40px; border-radius: 15px; text-align: center; margin: 40px 0; }
        .rating-number { font-size: 3rem; font-weight: 700; color: #1652f0; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
    </style>
</head>
<body>
<div class="page-hero">
    <div class="container">
        <h1>Primeassetstrade Reviews</h1>
        <p>Real feedback from our trading community. See what traders say about trading with us.</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="rating-summary">
                    <div class="rating-number">4.7/5</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Based on 50,000+ trader reviews</p>
                </div>

                <h2 class="mb-5 text-center">What Traders Are Saying</h2>

                <div class="review-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="reviewer-name">John M.</div>
                    <p>"Excellent platform for trading. Fast execution, great customer support, and easy to use. I've been trading here for 2 years and couldn't be happier."</p>
                </div>

                <div class="review-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="reviewer-name">Sarah K.</div>
                    <p>"The copy trading feature is amazing. I started copying successful traders and now I'm earning passively. Highly recommended for beginners!"</p>
                </div>

                <div class="review-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="reviewer-name">David L.</div>
                    <p>"Great selection of instruments and competitive spreads. The platform is reliable and the team is very responsive to any issues."</p>
                </div>

                <div class="review-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="reviewer-name">Emma T.</div>
                    <p>"Very satisfied with my trading experience. The educational resources helped me improve my skills significantly."</p>
                </div>

                <div class="review-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="reviewer-name">Michael R.</div>
                    <p>"Outstanding platform with reliable execution and low latency. I've tried many platforms and this is the best one for professional traders."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Join Our Community of Successful Traders</h2>
        <p class="mb-4">Experience why thousands of traders trust Primeassetstrade</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Create Account</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

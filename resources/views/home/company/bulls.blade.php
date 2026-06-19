@include('home.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeassetstrade - Official Partner Chicago Bulls</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1518611505868-d7b87081b8ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
        .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .page-content { padding: 80px 0; }
        .sponsorship-info { background: #f5f7fc; padding: 40px; border-radius: 15px; margin: 30px 0; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
    </style>
</head>
<body>
<div class="page-hero">
    <div class="container">
        <h1>Primeassetstrade & Chicago Bulls</h1>
        <p>Official Partner of the NBA's legendary Chicago Bulls</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Partnership Highlights</h2>
                
                <p class="mb-4">Primeassetstrade is proud to be an official partner of the Chicago Bulls, one of the most storied franchises in NBA history. This partnership reflects our commitment to excellence and our passion for supporting world-class athletes and teams.</p>

                <div class="sponsorship-info">
                    <h3 class="text-primary mb-3">About the Chicago Bulls</h3>
                    <p>The Chicago Bulls are one of the most successful and recognizable basketball franchises in the world. With a rich history including six NBA championships, the Bulls continue to inspire fans globally.</p>
                </div>

                <div class="sponsorship-info">
                    <h3 class="text-primary mb-3">Our Partnership</h3>
                    <p>Through our partnership with the Chicago Bulls, we demonstrate our commitment to excellence both in trading and in the sports world. This association reinforces our values of performance, dedication, and success.</p>
                </div>

                <div class="sponsorship-info">
                    <h3 class="text-primary mb-3">Get Involved</h3>
                    <p>Follow Primeassetstrade on social media to stay updated on exclusive Bulls content, trading tips, and special promotions throughout the season.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Trade with a Partner of Champions</h2>
        <p class="mb-4">Join the winning team at Primeassetstrade</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Start Trading</a>
    </div>
</div>

@include('home.footer')
</body>
</html>

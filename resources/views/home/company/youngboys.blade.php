@php
$pageTitle = 'Primeassetstrade - Main Sponsor BSC Young Boys';
$pageHead = <<<'PAGEHEAD'
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #1652f0; --secondary: #f58634; }
        body { font-family: 'Raleway', sans-serif; background-color: #ffffff; color: #0f1c3f; }
        .page-hero { background: linear-gradient(rgba(22, 82, 240, 0.85), rgba(245, 134, 52, 0.85)), url('https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover; padding: 120px 0; color: white; text-align: center; }
        .page-hero h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        .page-content { padding: 80px 0; }
        .sponsorship-info { background: #f5f7fc; padding: 40px; border-radius: 15px; margin: 30px 0; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
    </style>
PAGEHEAD;
@endphp

@include('home.header')

<div class="page-hero">
    <div class="container">
        <h1>Primeassetstrade & BSC Young Boys</h1>
        <p>Main Sponsor of Switzerland's most successful football club</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Partnership Highlights</h2>
                
                <p class="mb-4">Primeassetstrade is proud to be the main sponsor of BSC Young Boys, Switzerland's most successful football club. This partnership reflects our shared values of excellence, innovation, and success in competitive environments.</p>

                <div class="sponsorship-info">
                    <h3 class="text-primary mb-3">About BSC Young Boys</h3>
                    <p>BSC Young Boys is the most successful football club in Swiss history, with multiple Swiss Super League titles and consistent European competition appearances. The club plays at the prestigious Stade de Suisse in Bern.</p>
                </div>

                <div class="sponsorship-info">
                    <h3 class="text-primary mb-3">Partnership Excellence</h3>
                    <p>Our sponsorship of Young Boys represents our commitment to supporting teams that embody the values we hold dear: dedication, excellence, and continuous improvement. Together, we strive for success both on and off the pitch.</p>
                </div>

                <div class="sponsorship-info">
                    <h3 class="text-primary mb-3">Connect with Us</h3>
                    <p>Follow our social media channels for exclusive Young Boys content, trading insights, and special offers. Join a community of passionate traders and football fans worldwide.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Trade with a Champion's Partner</h2>
        <p class="mb-4">Experience trading excellence with Primeassetstrade</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Start Trading</a>
    </div>
</div>

@include('home.footer')

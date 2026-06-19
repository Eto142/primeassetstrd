@php
$pageTitle = 'Primeassetstrade - Main Sponsor Legia Warsaw';
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
        <h1>Primeassetstrade & Legia Warsaw</h1>
        <p>Main Sponsor of Poland's greatest football club</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Partnership Highlights</h2>
                
                <p class="mb-4">Primeassetstrade is proud to be the main sponsor of Legia Warsaw, one of the most successful football clubs in European history. Our partnership is a testament to our commitment to excellence and community engagement.</p>

                <div class="sponsorship-info">
                    <h3 class="text-primary mb-3">About Legia Warsaw</h3>
                    <p>Legia Warsaw is Poland's most successful football club, with multiple Polish championships and European Cup appearances. The club has a passionate fan base and continues to compete at the highest levels of European football.</p>
                </div>

                <div class="sponsorship-info">
                    <h3 class="text-primary mb-3">Our Sponsorship Commitment</h3>
                    <p>As main sponsor, Primeassetstrade supports Legia Warsaw in their pursuit of domestic and European success. This partnership demonstrates our dedication to supporting excellence in sports and our commitment to the communities we serve.</p>
                </div>

                <div class="sponsorship-info">
                    <h3 class="text-primary mb-3">Fan Engagement</h3>
                    <p>Through our sponsorship, we engage with millions of passionate Legia Warsaw fans worldwide. Visit our social media channels for exclusive content, match updates, and special fan promotions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Trade with Legia's Official Sponsor</h2>
        <p class="mb-4">Join the passionate community of traders supporting excellence</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Start Trading</a>
    </div>
</div>

@include('home.footer')

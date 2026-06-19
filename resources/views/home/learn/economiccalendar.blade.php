@php
$pageTitle = 'Economic Calendar | Financial Events & Releases';
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
        .event-type { background: #f5f7fc; padding: 30px; border-radius: 15px; margin-bottom: 25px; }
        .event-type h5 { color: #1652f0; margin-bottom: 15px; }
        .high-impact { border-left: 5px solid #f58634; }
        .medium-impact { border-left: 5px solid #f5a500; }
        .low-impact { border-left: 5px solid #1652f0; }
        .cta-section { background: linear-gradient(135deg, #1652f0 0%, #f58634 100%); color: white; padding: 60px 0; text-align: center; }
    </style>
PAGEHEAD;
@endphp

@include('home.header')

<div class="page-hero">
    <div class="container">
        <h1>Economic Calendar</h1>
        <p>Stay informed about economic events and data releases that impact currency and commodity prices</p>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="mb-5 text-center">Never Miss an Economic Event</h2>

                <p class="mb-4">Our comprehensive economic calendar displays scheduled economic events, data releases, and central bank announcements from around the world. Stay informed about events that impact financial markets.</p>

                <div class="event-type high-impact">
                    <h5><i class="fas fa-alert-circle me-2" style="color: #f58634;"></i>High Impact Events</h5>
                    <p>Critical releases like employment data, inflation reports, and central bank decisions that significantly move markets.</p>
                </div>

                <div class="event-type medium-impact">
                    <h5><i class="fas fa-circle me-2" style="color: #f5a500;"></i>Medium Impact Events</h5>
                    <p>Important economic data like retail sales, consumer confidence, and GDP estimates with moderate market impact.</p>
                </div>

                <div class="event-type low-impact">
                    <h5><i class="fas fa-circle me-2"></i>Low Impact Events</h5>
                    <p>Scheduled releases like housing starts, building permits, and other secondary economic indicators.</p>
                </div>

                <div class="event-type" style="background: #f5f7fc;">
                    <h5><i class="fas fa-globe me-2"></i>Global Coverage</h5>
                    <p>Events from US, Europe, UK, Japan, Australia, Canada, and other major economic regions affecting forex and commodities.</p>
                </div>

                <div class="event-type" style="background: #f5f7fc;">
                    <h5><i class="fas fa-filter me-2"></i>Customizable Filters</h5>
                    <p>Filter by country, event type, and impact level. Set alerts for events that matter to your trading strategy.</p>
                </div>

                <div class="event-type" style="background: #f5f7fc;">
                    <h5><i class="fas fa-history me-2"></i>Historical Data</h5>
                    <p>Compare current releases with historical values and forecasts to assess the significance of new data.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cta-section">
    <div class="container">
        <h2 class="mb-4">Stay Ahead of Market-Moving Events</h2>
        <p class="mb-4">Use our calendar to time your trades around economic announcements</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Access Calendar</a>
    </div>
</div>

@include('home.footer')

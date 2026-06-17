<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeAssetsTRD | Trade CFDs on Stocks, Forex, Crypto & More</title>
    <meta name="description" content="PrimeAssetsTRD - A regulated CFD and copy trading broker. Trade stocks, forex, crypto, indices and commodities with tight spreads and professional tools.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="{{ asset('assets/home/style.css') }}">
</head>
<body>
    <!-- Preloader -->
    <div class="pre-loader">
        <div class="loader-content">
                <div class="loader-logo">
                    <img src="{{ asset('logo.png') }}" alt="PrimeAssetsTRD" style="height:44px; width:auto;">
                </div>
            <div style="margin-top:16px;">
                <div class="loading-dot"></div>
                <div class="loading-dot"></div>
                <div class="loading-dot"></div>
            </div>
        </div>
    </div>

    <!-- Risk Banner -->
    {{-- <div class="risk-banner">
        <div class="container">
            <strong>Risk Warning:</strong> 73% of retail CFD accounts lose money. CFDs carry high risk due to leverage. Only invest what you can afford to lose.
        </div>
    </div> --}}

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('logo.png') }}" alt="PrimeAssetsTRD" style="height:38px; width:auto; object-fit:contain;">
                  
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="marketsDropdown" role="button" data-bs-toggle="dropdown">
                                MARKETS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fab fa-bitcoin me-2 text-warning"></i>CRYPTOS</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line me-2" style="color:#1652f0;"></i>INDICES</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-euro-sign me-2 text-info"></i>FOREX</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-fire me-2 text-danger"></i>ENERGIES</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-building me-2 text-secondary"></i>SHARES</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-gem me-2 text-warning"></i>COMMODITIES</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-layer-group me-2 text-info"></i>ETFS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                COPY TRADING
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-users me-2" style="color:#1652f0;"></i>Browse Traders</a></li>
                                <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-chart-bar me-2 text-info"></i>Performance Stats</a></li>
                                <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-info-circle me-2 text-warning"></i>How It Works</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('faqs') }}">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('trade') }}">LIVE RATES</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center gap-2">
                        <a href="{{ route('login') }}" class="top-login">Log In</a>
                        <a href="{{ route('register') }}" class="top-signup">Open Account</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>


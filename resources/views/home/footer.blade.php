    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="footer-logo">
                        <img src="{{ asset('logo.png') }}" alt="PrimeAssetsTRD" style="height:36px; width:auto;">
                        <span style="font-weight:800; font-size:1.1rem; color:#ffffff; margin-left:10px; letter-spacing:-0.3px;"></span>
                    </div>
                    <p class="footer-desc">
                        PrimeAssetsTRD is a regulated multi-asset brokerage offering CFD trading on 2,000+ instruments including stocks, forex, crypto, indices and commodities. Trusted by 24 million traders worldwide.
                    </p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-heading">Trading</div>
                    <ul class="footer-links-list">
                        <li><a href="#">Forex</a></li>
                        <li><a href="#">Stocks</a></li>
                        <li><a href="#">Crypto</a></li>
                        <li><a href="#">Indices</a></li>
                        <li><a href="#">Commodities</a></li>
                        <li><a href="#">ETFs</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-heading">Copy Trading</div>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('login') }}">Browse Traders</a></li>
                        <li><a href="{{ route('login') }}">Top Performers</a></li>
                        <li><a href="{{ route('login') }}">How It Works</a></li>
                        <li><a href="{{ route('login') }}">Become a Trader</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-heading">Company</div>
                    <ul class="footer-links-list">
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                        <li><a href="{{ url('faqs') }}">FAQs</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-heading">Legal</div>
                    <ul class="footer-links-list">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Risk Disclosure</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">AML Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                                <div class="col-md-6">
                                    <span>&copy; 2026 PrimeAssetsTRD Ltd. All rights reserved. Reg. No. 12345678</span>
                                </div>
                    <div class="col-md-6 text-md-end mt-2 mt-md-0">
                        <span class="me-3"><i class="fas fa-shield-alt me-1" style="color:#60a5fa;"></i>FCA Regulated</span>
                        <span><i class="fas fa-lock me-1" style="color:#60a5fa;"></i>Secure Platform</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="risk-disclaimer">
            <div class="container">
                <strong>Risk Warning:</strong> Trading CFDs involves significant risk of loss. 73% of retail investor accounts lose money when trading CFDs. You should not invest more than you can afford to lose and should ensure you fully understand the risks involved. CFDs are not suitable for all investors. PrimeAssetsTRD Ltd is authorised and regulated. Past performance is not indicative of future results.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        // Fast preloader
        window.addEventListener('load', function() {
            setTimeout(function() {
                var loader = document.querySelector('.pre-loader');
                if (loader) { loader.classList.add('hidden'); }
            }, 500);
        });

        // Sticky navbar background on scroll
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.navbar');
            if (navbar) {
                if (window.scrollY > 80) {
                    navbar.style.background = 'rgba(6,16,30,0.99)';
                    navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.4)';
                } else {
                    navbar.style.background = 'rgba(6,16,30,0.97)';
                    navbar.style.boxShadow = 'none';
                }
            }
        });
    </script>
</body>
</html>


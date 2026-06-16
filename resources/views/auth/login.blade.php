<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | PrimeAssetsTRD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #f0f4f8;
            min-height: 100vh;
            display: flex;
            align-items: stretch;
        }
        .auth-left {
            width: 44%;
            background: linear-gradient(160deg, #0f1c3f 0%, #1a2d5a 55%, #1e3a8a 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 56px;
            position: relative;
            overflow: hidden;
        }
        .auth-left::before {
            content: '';
            position: absolute; top: -120px; right: -120px;
            width: 380px; height: 380px; border-radius: 50%;
            background: radial-gradient(circle, rgba(59,111,245,0.18) 0%, transparent 70%);
        }
        .auth-left::after {
            content: '';
            position: absolute; bottom: -80px; left: -80px;
            width: 280px; height: 280px; border-radius: 50%;
            background: radial-gradient(circle, rgba(96,165,250,0.12) 0%, transparent 70%);
        }
        .brand-logo { display: flex; align-items: center; gap: 10px; margin-bottom: 48px; }
        .brand-logo img { height: 36px; width: auto; }
        .brand-logo-text { font-size: 1.25rem; font-weight: 800; color: #fff; letter-spacing: -0.3px; }
        .brand-logo-text span { color: #60a5fa; }
        .auth-left h2 { font-size: 2.1rem; font-weight: 800; color: #fff; line-height: 1.2; margin-bottom: 16px; letter-spacing: -0.5px; }
        .auth-left h2 span { color: #60a5fa; }
        .auth-left > p { color: #94a3b8; font-size: 1rem; line-height: 1.7; margin-bottom: 40px; }
        .trust-list { list-style: none; padding: 0; margin: 0 0 44px; }
        .trust-list li { display: flex; align-items: center; gap: 12px; color: #cbd5e1; font-size: 0.9rem; margin-bottom: 14px; }
        .trust-list li .icon-wrap {
            width: 34px; height: 34px; border-radius: 8px;
            background: rgba(96,165,250,0.14); border: 1px solid rgba(96,165,250,0.25);
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
        }
        .trust-list li .icon-wrap i { color: #60a5fa; font-size: 0.85rem; }
        .stat-row { display: flex; gap: 28px; padding-top: 28px; border-top: 1px solid rgba(255,255,255,0.08); }
        .stat-item .val { font-size: 1.5rem; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 4px; }
        .stat-item .lbl { font-size: 0.78rem; color: #64748b; }
        .auth-right { flex: 1; display: flex; align-items: center; justify-content: center; padding: 40px 24px; background: #f0f4f8; }
        .auth-form-wrap {
            width: 100%; max-width: 440px;
            background: #fff; border-radius: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 24px rgba(22,82,240,0.07);
            overflow: hidden;
            animation: fadeUp 0.5s ease forwards;
        }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .form-header { padding: 32px 36px 24px; border-bottom: 1px solid #f1f5f9; }
        .form-header .form-logo { display: flex; align-items: center; gap: 8px; margin-bottom: 24px; }
        .form-header .form-logo img { height: 28px; }
        .form-header .form-logo span { font-size: 1rem; font-weight: 700; color: #0f1c3f; }
        .form-header .form-logo span em { font-style: normal; color: #1652f0; }
        .form-header h3 { font-size: 1.5rem; font-weight: 800; color: #0f1c3f; margin-bottom: 6px; }
        .form-header p { color: #64748b; font-size: 0.88rem; }
        .form-body { padding: 28px 36px 32px; }
        .form-label { font-size: 0.82rem; font-weight: 600; color: #334155; margin-bottom: 6px; display: block; }
        .form-control, .form-select {
            background: #f8faff; border: 1.5px solid #e2e8f0; color: #0f1c3f;
            padding: 11px 14px; border-radius: 8px; font-size: 0.9rem; transition: all 0.25s; width: 100%;
        }
        .form-control:focus, .form-select:focus {
            background: #fff; border-color: #1652f0; box-shadow: 0 0 0 3px rgba(22,82,240,0.1); outline: none; color: #0f1c3f;
        }
        .form-control::placeholder { color: #94a3b8; }
        .input-group .form-control { border-right: none; border-radius: 8px 0 0 8px; }
        .input-group-text {
            background: #f8faff; border: 1.5px solid #e2e8f0; border-left: none;
            border-radius: 0 8px 8px 0; cursor: pointer; color: #64748b; transition: color 0.2s;
        }
        .input-group:focus-within .input-group-text { border-color: #1652f0; background: #fff; }
        .input-group-text:hover { color: #1652f0; }
        .btn-auth {
            width: 100%; background: #1652f0; color: #fff; border: none;
            padding: 13px; font-weight: 700; font-size: 0.95rem; border-radius: 8px;
            transition: all 0.25s; letter-spacing: 0.2px; cursor: pointer;
        }
        .btn-auth:hover { background: #0e40c7; transform: translateY(-1px); box-shadow: 0 6px 18px rgba(22,82,240,0.3); color: #fff; }
        .form-check-input:checked { background-color: #1652f0; border-color: #1652f0; }
        .form-check-label { font-size: 0.85rem; color: #475569; }
        .captcha-box {
            display: flex; align-items: center; gap: 10px;
            padding: 12px 14px; border-radius: 8px;
            background: #f8faff; border: 1.5px solid #e2e8f0;
        }
        .captcha-box label { margin: 0; font-size: 0.88rem; color: #334155; flex: 1; cursor: pointer; }
        .captcha-box input[type="checkbox"] { width: 18px; height: 18px; cursor: pointer; accent-color: #1652f0; }
        .link-blue { color: #1652f0; text-decoration: none; font-weight: 600; }
        .link-blue:hover { color: #0e40c7; text-decoration: underline; }
        .form-footer { padding: 16px 36px 20px; background: #f8faff; border-top: 1px solid #f1f5f9; text-align: center; font-size: 0.85rem; color: #64748b; }
        .alert-success { background: #f0fdf4; border-color: #bbf7d0; color: #166534; border-radius: 8px; font-size: 0.88rem; }
        .alert-error { background: #fef2f2; border-color: #fecaca; color: #991b1b; border-radius: 8px; font-size: 0.88rem; }
        .text-danger { color: #dc2626 !important; font-size: 0.8rem; }
        .reg-strip { margin-top: 20px; display: flex; gap: 20px; flex-wrap: wrap; justify-content: center; }
        .reg-badge { display: flex; align-items: center; gap: 6px; font-size: 0.76rem; color: #64748b; }
        .reg-badge i { color: #1652f0; }
        @media (max-width: 900px) { .auth-left { display: none !important; } }
        @media (max-width: 480px) { .form-header, .form-body, .form-footer { padding-left: 20px; padding-right: 20px; } }
    </style>
   
</head>
<body>
    <!-- Left Brand Panel -->
    <div class="auth-left d-none d-lg-flex flex-column">
        <div class="brand-logo">
            <img src="{{ asset('logo.png') }}" alt="PrimeAssetsTRD">
            
        </div>
        <h2>Trade smarter.<br>Copy the <span>best.</span></h2>
        <p>Access 2,000+ instruments and automatically copy elite traders. Join 24 million users who trust PrimeAssetsTRD.</p>
        <ul class="trust-list">
            <li><div class="icon-wrap"><i class="fas fa-shield-alt"></i></div>FCA Regulated &amp; Tier-1 Licensed Broker</li>
            <li><div class="icon-wrap"><i class="fas fa-lock"></i></div>256-bit SSL Encryption &amp; Segregated Funds</li>
            <li><div class="icon-wrap"><i class="fas fa-users"></i></div>Copy 5,000+ Verified Professional Traders</li>
            <li><div class="icon-wrap"><i class="fas fa-bolt"></i></div>Instant Withdrawals &amp; 24/7 Live Support</li>
        </ul>
        <div class="stat-row">
            <div class="stat-item"><div class="val">24M+</div><div class="lbl">Registered Users</div></div>
            <div class="stat-item"><div class="val">$2.4B+</div><div class="lbl">Monthly Volume</div></div>
            <div class="stat-item"><div class="val">50+</div><div class="lbl">Countries</div></div>
        </div>
    </div>

    <!-- Right Form Panel -->
    <div class="auth-right">
        <div style="width:100%; max-width:440px;">
            <div class="auth-form-wrap">
                <div class="form-header">
                    <center>
                    <div class="form-logo">
                        <img src="{{ asset('logo.png') }}" alt="PrimeAssetsTRD">
                       
                    </div>
                </center>
                    <h3>Welcome back</h3>
                    <p>Sign in to your trading account</p>
                </div>

                @if (session('success'))
                    <div class="alert alert-success mx-4 mt-3">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-error mx-4 mt-3">{{ session('error') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-error mx-4 mt-3">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <div class="form-body">
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="you@example.com" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="password" class="form-label mb-0">Password</label>
                                <a href="{{ route('forgot.password.form') }}" class="link-blue" style="font-size:0.8rem;">Forgot password?</a>
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Enter your password" required>
                                <span class="input-group-text" id="togglePassword"><i class="fas fa-eye"></i></span>
                            </div>
                            @error('password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="captcha-box">
                                <input type="checkbox" id="robotCheck" required>
                                <label for="robotCheck">I'm not a robot</label>
                                <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" width="28" height="28" style="opacity:0.7;">
                            </div>
                        </div>
                        <button type="submit" class="btn-auth">Sign In</button>
                    </form>
                </div>

                <div class="form-footer">
                    Don't have an account? <a href="{{ route('register') }}" class="link-blue">Create one free</a>
                </div>
            </div>
            <div class="reg-strip">
                <div class="reg-badge"><i class="fas fa-shield-alt"></i> FCA Regulated</div>
                <div class="reg-badge"><i class="fas fa-lock"></i> SSL Secured</div>
                <div class="reg-badge"><i class="fas fa-university"></i> Segregated Funds</div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const pwd = document.getElementById('password');
            const icon = this.querySelector('i');
            if (pwd.type === 'password') { pwd.type = 'text'; icon.className = 'fas fa-eye-slash'; }
            else { pwd.type = 'password'; icon.className = 'fas fa-eye'; }
        });
        document.querySelector('.login-form').addEventListener('submit', function (e) {
            if (!document.getElementById('robotCheck').checked) {
                e.preventDefault();
                alert('Please verify that you are not a robot');
            }
        });
    </script>
</body>
</html>

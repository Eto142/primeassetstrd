<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | PrimeAssetsTRD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #f0f4f8; min-height: 100vh; display: flex; align-items: stretch; }
        .auth-left {
            width: 40%;
            background: linear-gradient(160deg, #0f1c3f 0%, #1a2d5a 55%, #1e3a8a 100%);
            display: flex; flex-direction: column; justify-content: center;
            padding: 60px 48px; position: relative; overflow: hidden;
        }
        .auth-left::before {
            content: ''; position: absolute; top: -100px; right: -100px;
            width: 360px; height: 360px; border-radius: 50%;
            background: radial-gradient(circle, rgba(59,111,245,0.18) 0%, transparent 70%);
        }
        .auth-left::after {
            content: ''; position: absolute; bottom: -80px; left: -80px;
            width: 260px; height: 260px; border-radius: 50%;
            background: radial-gradient(circle, rgba(96,165,250,0.12) 0%, transparent 70%);
        }
        .brand-logo { display: flex; align-items: center; gap: 10px; margin-bottom: 44px; }
        .brand-logo img { height: 36px; width: auto; }
        .brand-logo-text { font-size: 1.2rem; font-weight: 800; color: #fff; letter-spacing: -0.3px; }
        .brand-logo-text span { color: #60a5fa; }
        .auth-left h2 { font-size: 1.9rem; font-weight: 800; color: #fff; line-height: 1.25; margin-bottom: 14px; letter-spacing: -0.4px; }
        .auth-left h2 span { color: #60a5fa; }
        .auth-left > p { color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 36px; }
        .benefit-list { list-style: none; padding: 0; margin: 0 0 36px; }
        .benefit-list li { display: flex; align-items: flex-start; gap: 12px; color: #cbd5e1; font-size: 0.88rem; margin-bottom: 16px; line-height: 1.5; }
        .benefit-list li .check { width: 22px; height: 22px; border-radius: 50%; background: rgba(96,165,250,0.16); border: 1px solid rgba(96,165,250,0.3); display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 1px; }
        .benefit-list li .check i { color: #60a5fa; font-size: 0.7rem; }
        .demo-box { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 18px 20px; }
        .demo-box .demo-label { font-size: 0.72rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: #60a5fa; margin-bottom: 6px; }
        .demo-box .demo-value { font-size: 1.6rem; font-weight: 800; color: #fff; margin-bottom: 4px; }
        .demo-box .demo-sub { font-size: 0.8rem; color: #94a3b8; }
        .auth-right { flex: 1; display: flex; align-items: center; justify-content: center; padding: 32px 20px; background: #f0f4f8; overflow-y: auto; }
        .auth-form-wrap {
            width: 100%; max-width: 480px;
            background: #fff; border-radius: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 24px rgba(22,82,240,0.07);
            overflow: hidden;
            animation: fadeUp 0.5s ease forwards;
        }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .form-header { padding: 28px 32px 22px; border-bottom: 1px solid #f1f5f9; }
        .form-header .form-logo { display: flex; align-items: center; gap: 8px; margin-bottom: 20px; }
        .form-header .form-logo img { height: 26px; }
        .form-header .form-logo span { font-size: 0.95rem; font-weight: 700; color: #0f1c3f; }
        .form-header .form-logo span em { font-style: normal; color: #1652f0; }
        .form-header h3 { font-size: 1.4rem; font-weight: 800; color: #0f1c3f; margin-bottom: 4px; }
        .form-header p { color: #64748b; font-size: 0.85rem; }
        .form-body { padding: 24px 32px 28px; }
        .form-label { font-size: 0.8rem; font-weight: 600; color: #334155; margin-bottom: 5px; display: block; }
        .form-control, .form-select {
            background: #f8faff; border: 1.5px solid #e2e8f0; color: #0f1c3f;
            padding: 10px 13px; border-radius: 8px; font-size: 0.88rem; transition: all 0.25s; width: 100%;
        }
        .form-control:focus, .form-select:focus {
            background: #fff; border-color: #1652f0; box-shadow: 0 0 0 3px rgba(22,82,240,0.1); outline: none; color: #0f1c3f;
        }
        .form-control::placeholder { color: #94a3b8; }
        .form-select { appearance: auto; }
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
            transition: all 0.25s; cursor: pointer;
        }
        .btn-auth:hover { background: #0e40c7; transform: translateY(-1px); box-shadow: 0 6px 18px rgba(22,82,240,0.3); color: #fff; }
        .form-check-input:checked { background-color: #1652f0; border-color: #1652f0; }
        .form-check-label { font-size: 0.83rem; color: #475569; }
        .captcha-box {
            display: flex; align-items: center; gap: 10px;
            padding: 11px 13px; border-radius: 8px;
            background: #f8faff; border: 1.5px solid #e2e8f0;
        }
        .captcha-box label { margin: 0; font-size: 0.85rem; color: #334155; flex: 1; cursor: pointer; }
        .captcha-box input[type="checkbox"] { width: 17px; height: 17px; cursor: pointer; accent-color: #1652f0; }
        .link-blue { color: #1652f0; text-decoration: none; font-weight: 600; }
        .link-blue:hover { color: #0e40c7; text-decoration: underline; }
        .form-footer { padding: 14px 32px 18px; background: #f8faff; border-top: 1px solid #f1f5f9; text-align: center; font-size: 0.83rem; color: #64748b; }
        .alert-success { background: #f0fdf4; border-color: #bbf7d0; color: #166534; border-radius: 8px; font-size: 0.85rem; }
        .alert-error { background: #fef2f2; border-color: #fecaca; color: #991b1b; border-radius: 8px; font-size: 0.85rem; }
        .text-danger { color: #dc2626 !important; font-size: 0.78rem; }
        .field-feedback { font-size: 0.78rem; min-height: 16px; margin-top: 4px; }
        .field-feedback.success { color: #16a34a; }
        .field-feedback.error { color: #dc2626; }
        .reg-strip { margin-top: 18px; display: flex; gap: 18px; flex-wrap: wrap; justify-content: center; }
        .reg-badge { display: flex; align-items: center; gap: 6px; font-size: 0.74rem; color: #64748b; }
        .reg-badge i { color: #1652f0; }
        .row-gap { gap: 0; }
        @media (max-width: 960px) { .auth-left { display: none !important; } }
        @media (max-width: 520px) { .form-header, .form-body, .form-footer { padding-left: 18px; padding-right: 18px; } }
    </style>
   
</head>
<body>
    <!-- Left Panel -->
    <div class="auth-left d-none d-xl-flex flex-column">
        <div class="brand-logo">
            <img src="{{ asset('logo.png') }}" alt="PrimeAssetsTRD">
        
        </div>
        <h2>Start trading<br>in <span>minutes.</span></h2>
        <p>Open a free account and access global markets — stocks, forex, crypto, indices and commodities. No commissions, tight spreads.</p>
        <ul class="benefit-list">
            <li><div class="check"><i class="fas fa-check"></i></div>Trade 2,000+ instruments with tight spreads</li>
            <li><div class="check"><i class="fas fa-check"></i></div>Copy elite traders automatically with 1 click</li>
            <li><div class="check"><i class="fas fa-check"></i></div>Practice risk-free with $100,000 virtual demo</li>
            <li><div class="check"><i class="fas fa-check"></i></div>Withdraw anytime — funds processed in 24hrs</li>
            <li><div class="check"><i class="fas fa-check"></i></div>FCA regulated with full negative balance protection</li>
        </ul>
        <div class="demo-box">
            <div class="demo-label">Free Demo Account</div>
            <div class="demo-value">$100,000</div>
            <div class="demo-sub">Virtual funds to practice with — no risk, no deposit</div>
        </div>
    </div>

    <!-- Right Form Panel -->
    <div class="auth-right">
        <div style="width:100%; max-width:480px;">
            <div class="auth-form-wrap">
                <div class="form-header">
                    <center>
                    <div class="form-logo">
                        <img src="{{ asset('logo.png') }}" alt="PrimeAssetsTRD">
                        
                    </div>
                </center>
                    <h3>Create your account</h3>
                    <p>Join 24 million traders — free &amp; takes 2 minutes</p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success mx-4 mt-3">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-error mx-4 mt-3">{{ session('error') }}</div>
                @endif

                <div class="form-body">
                    <form method="POST" action="{{ route('register') }}" class="register-form">
                        @csrf

                        <div class="row g-3 mb-0">
                            <div class="col-6">
                                <label class="form-label" for="name">First Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="John" value="{{ old('name') }}" required>
                                @error('name')<div class="text-danger mt-1">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Smith" value="{{ old('lname') }}" required>
                                @error('lname')<div class="text-danger mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <label class="form-label" for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="{{ old('email') }}" required>
                            <div id="emailFeedback" class="field-feedback"></div>
                            @error('email')<div class="text-danger mt-1">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="currency">Preferred Currency</label>
                            <select class="form-select" id="currency" name="currency" required>
                                <option value="">Select currency</option>
                                <option value="$" {{ old('currency')=='$'?'selected':'' }}>USD — US Dollar</option>
                                <option value="€" {{ old('currency')=='€'?'selected':'' }}>EUR — Euro</option>
                                <option value="£" {{ old('currency')=='£'?'selected':'' }}>GBP — British Pound</option>
                                <option value="¥" {{ old('currency')=='¥'?'selected':'' }}>JPY — Japanese Yen</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Min. 8 characters" required>
                                <span class="input-group-text" id="togglePassword"><i class="fas fa-eye"></i></span>
                            </div>
                            <div id="passwordFeedback" class="field-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repeat password" required>
                                <span class="input-group-text" id="togglePasswordConfirm"><i class="fas fa-eye"></i></span>
                            </div>
                            <div id="passwordConfirmFeedback" class="field-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#" class="link-blue">Terms of Service</a> &amp;
                                    <a href="#" class="link-blue">Privacy Policy</a>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="captcha-box">
                                <input type="checkbox" id="robotCheck" required>
                                <label for="robotCheck">I'm not a robot</label>
                                <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" width="28" height="28" style="opacity:0.7;">
                            </div>
                        </div>

                        <button type="submit" class="btn-auth">Create Free Account</button>
                    </form>
                </div>

                <div class="form-footer">
                    Already have an account? <a href="{{ route('login') }}" class="link-blue">Sign in</a>
                </div>
            </div>
            <div class="reg-strip">
                <div class="reg-badge"><i class="fas fa-shield-alt"></i> FCA Regulated</div>
                <div class="reg-badge"><i class="fas fa-lock"></i> SSL Secured</div>
                <div class="reg-badge"><i class="fas fa-user-shield"></i> Neg. Balance Protection</div>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const p = document.getElementById('password'), icon = this.querySelector('i');
        if (p.type === 'password') { p.type = 'text'; icon.className = 'fas fa-eye-slash'; }
        else { p.type = 'password'; icon.className = 'fas fa-eye'; }
    });
    document.getElementById('togglePasswordConfirm').addEventListener('click', function () {
        const p = document.getElementById('password_confirmation'), icon = this.querySelector('i');
        if (p.type === 'password') { p.type = 'text'; icon.className = 'fas fa-eye-slash'; }
        else { p.type = 'password'; icon.className = 'fas fa-eye'; }
    });
    document.getElementById('email').addEventListener('input', function () {
        const fb = document.getElementById('emailFeedback');
        const ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.value);
        fb.textContent = this.value ? (ok ? 'Valid email address' : 'Please enter a valid email') : '';
        fb.className = 'field-feedback ' + (ok ? 'success' : 'error');
    });
    document.getElementById('password').addEventListener('input', function () {
        const fb = document.getElementById('passwordFeedback');
        const ok = this.value.length >= 8;
        fb.textContent = this.value ? (ok ? 'Password strength: good' : 'Password must be at least 8 characters') : '';
        fb.className = 'field-feedback ' + (ok ? 'success' : 'error');
    });
    document.getElementById('password_confirmation').addEventListener('input', function () {
        const fb = document.getElementById('passwordConfirmFeedback');
        const ok = this.value === document.getElementById('password').value && this.value !== '';
        fb.textContent = this.value ? (ok ? 'Passwords match' : 'Passwords do not match') : '';
        fb.className = 'field-feedback ' + (ok ? 'success' : 'error');
    });
    document.querySelector('.register-form').addEventListener('submit', function (e) {
        if (!document.getElementById('robotCheck').checked) {
            e.preventDefault();
            alert('Please verify you are not a robot');
        }
    });
    </script>
</body>
</html>

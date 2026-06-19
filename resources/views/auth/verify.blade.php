<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeAssetsTRD | Verify Your Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #f0f4f8; min-height: 100vh; display: flex; align-items: stretch; }
        .auth-left {
            width: 38%;
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
        .auth-left h2 { font-size: 1.85rem; font-weight: 800; color: #fff; line-height: 1.25; margin-bottom: 14px; }
        .auth-left h2 span { color: #60a5fa; }
        .auth-left > p { color: #94a3b8; font-size: 0.92rem; line-height: 1.7; margin-bottom: 32px; }
        .step-list { list-style: none; padding: 0; margin: 0 0 36px; }
        .step-list li { display: flex; align-items: flex-start; gap: 14px; color: #cbd5e1; font-size: 0.88rem; margin-bottom: 18px; }
        .step-list li .step-num {
            width: 28px; height: 28px; border-radius: 50%;
            background: rgba(22,82,240,0.25); border: 1.5px solid rgba(96,165,250,0.4);
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
            font-size: 0.75rem; font-weight: 700; color: #60a5fa;
        }
        .step-list li .step-num.done { background: #1652f0; border-color: #1652f0; color: #fff; }
        .step-list li .step-num.active { background: rgba(22,82,240,0.4); border-color: #60a5fa; color: #fff; }
        .step-list li .step-body .step-title { font-weight: 600; color: #fff; font-size: 0.9rem; margin-bottom: 2px; }
        .step-list li .step-body .step-sub { font-size: 0.8rem; color: #64748b; }
        .info-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 18px 20px; }
        .info-card-label { font-size: 0.72rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: #60a5fa; margin-bottom: 8px; }
        .info-card p { font-size: 0.82rem; color: #94a3b8; line-height: 1.6; margin: 0; }
        .auth-right { flex: 1; display: flex; align-items: center; justify-content: center; padding: 32px 20px; background: #f0f4f8; overflow-y: auto; }
        .auth-form-wrap {
            width: 100%; max-width: 440px; background: #fff; border-radius: 16px;
            border: 1px solid #e2e8f0; box-shadow: 0 4px 24px rgba(22,82,240,0.07);
            overflow: hidden; animation: fadeUp 0.5s ease forwards;
        }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .progress-step { display: flex; align-items: center; background: #f8faff; border-bottom: 1px solid #e2e8f0; padding: 14px 28px; }
        .ps-item { display: flex; align-items: center; gap: 8px; font-size: 0.8rem; font-weight: 600; color: #94a3b8; }
        .ps-item.done { color: #16a34a; }
        .ps-item.active { color: #1652f0; }
        .ps-item .ps-num { width: 24px; height: 24px; border-radius: 50%; background: #e2e8f0; display: flex; align-items: center; justify-content: center; font-size: 0.72rem; font-weight: 700; flex-shrink: 0; }
        .ps-item.done .ps-num { background: #16a34a; color: #fff; }
        .ps-item.active .ps-num { background: #1652f0; color: #fff; }
        .ps-divider { flex: 1; height: 1px; background: #e2e8f0; margin: 0 10px; }
        .form-header { padding: 28px 28px 20px; border-bottom: 1px solid #f1f5f9; text-align: center; }
        .form-header .otp-icon {
            width: 64px; height: 64px; border-radius: 50%;
            background: linear-gradient(135deg, #1652f0 0%, #3a74ff 100%);
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 16px; box-shadow: 0 4px 14px rgba(22,82,240,0.3);
        }
        .form-header .otp-icon i { font-size: 1.6rem; color: #fff; }
        .form-header h3 { font-size: 1.25rem; font-weight: 800; color: #0f1c3f; margin-bottom: 6px; }
        .form-header p { color: #64748b; font-size: 0.85rem; margin: 0; line-height: 1.5; }
        .form-body { padding: 24px 28px 28px; }
        .form-label { font-size: 0.8rem; font-weight: 600; color: #334155; margin-bottom: 5px; display: block; }
        .otp-input {
            background: #f8faff; border: 2px solid #e2e8f0; color: #0f1c3f;
            padding: 14px; border-radius: 10px; font-size: 2rem; font-weight: 700;
            letter-spacing: 16px; text-align: center; width: 100%;
            transition: border-color 0.25s, box-shadow 0.25s;
        }
        .otp-input:focus {
            background: #fff; border-color: #1652f0;
            box-shadow: 0 0 0 3px rgba(22,82,240,0.1); outline: none;
        }
        .otp-input.is-invalid { border-color: #dc2626; }
        .otp-input::placeholder { color: #c7d2e0; letter-spacing: 8px; font-size: 1.5rem; }
        .invalid-feedback { display: block; width: 100%; margin-top: 4px; font-size: 0.78rem; color: #dc2626; text-align: center; }
        .btn-auth {
            width: 100%; background: #1652f0; color: #fff; border: none;
            padding: 13px; font-weight: 700; font-size: 0.95rem; border-radius: 8px;
            transition: all 0.25s; cursor: pointer;
            display: flex; align-items: center; justify-content: center; gap: 8px;
        }
        .btn-auth:hover { background: #0e40c7; transform: translateY(-1px); box-shadow: 0 6px 18px rgba(22,82,240,0.3); color: #fff; }
        .btn-auth:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }
        .btn-resend {
            width: 100%; background: transparent; color: #1652f0;
            border: 1.5px solid #1652f0; padding: 11px; font-weight: 600;
            font-size: 0.88rem; border-radius: 8px; transition: all 0.25s; cursor: pointer;
            display: flex; align-items: center; justify-content: center; gap: 8px;
        }
        .btn-resend:hover { background: rgba(22,82,240,0.06); }
        .btn-resend:disabled { opacity: 0.5; cursor: not-allowed; }
        .form-footer { padding: 14px 28px 18px; background: #f8faff; border-top: 1px solid #f1f5f9; text-align: center; font-size: 0.82rem; color: #64748b; }
        @media (max-width: 960px) { .auth-left { display: none !important; } }
        @media (max-width: 520px) { .form-header, .form-body, .form-footer { padding-left: 16px; padding-right: 16px; } }
    </style>
</head>
<body>

    <!-- Left panel -->
    <div class="auth-left d-none d-xl-flex flex-column">
        <div class="brand-logo">
            <img src="{{ asset('logo.png') }}" alt="PrimeAssetsTRD">

        </div>
        <h2>One last step —<br>verify your <span>email.</span></h2>
        <p>We sent a 4-digit code to the email address you registered with. Enter it below to activate your account.</p>
        <ul class="step-list">
            <li>
                <div class="step-num done"><i class="fas fa-check" style="font-size:0.6rem;"></i></div>
                <div class="step-body">
                    <div class="step-title">Account Created</div>
                    <div class="step-sub">Email registered &amp; password set</div>
                </div>
            </li>
            <li>
                <div class="step-num done"><i class="fas fa-check" style="font-size:0.6rem;"></i></div>
                <div class="step-body">
                    <div class="step-title">Personal Details</div>
                    <div class="step-sub">Address, country &amp; phone number</div>
                </div>
            </li>
            <li>
                <div class="step-num active">3</div>
                <div class="step-body">
                    <div class="step-title">Verify Account</div>
                    <div class="step-sub">Confirm OTP sent to your email</div>
                </div>
            </li>
        </ul>
        <div class="info-card">
            <div class="info-card-label"><i class="fas fa-envelope me-1"></i>Check your inbox</div>
            <p>The OTP expires after use. If you did not receive it, check your spam folder or use the resend button.</p>
        </div>
    </div>

    <!-- Right form panel -->
    <div class="auth-right">
        <div class="auth-form-wrap">

            <!-- Progress steps -->
            <div class="progress-step">
                <div class="ps-item done">
                    <div class="ps-num"><i class="fas fa-check" style="font-size:0.6rem;"></i></div> Account
                </div>
                <div class="ps-divider"></div>
                <div class="ps-item done">
                    <div class="ps-num"><i class="fas fa-check" style="font-size:0.6rem;"></i></div> Details
                </div>
                <div class="ps-divider"></div>
                <div class="ps-item active">
                    <div class="ps-num">3</div> Verify
                </div>
            </div>

            <div class="form-header">
                <div class="otp-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>OTP Verification</h3>
                <p>Enter the 4-digit code sent to your email address to complete account setup.</p>
            </div>

            <div class="form-body">

                @if (session('success'))
                    <div class="alert alert-success py-2 mb-3" role="alert">
                        <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger py-2 mb-3" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                    </div>
                @endif

                <!-- OTP verify form -->
                <form method="POST" action="{{ route('user.step3') }}" id="otpForm">
                    @csrf
                    <div class="mb-4">
                        <label for="otp_code" class="form-label text-center d-block">Enter your 4-digit OTP</label>
                        <input type="text"
                               id="otp_code"
                               name="otp_code"
                               class="otp-input @error('otp_code') is-invalid @enderror"
                               maxlength="4"
                               inputmode="numeric"
                               pattern="[0-9]{4}"
                               placeholder="••••"
                               autocomplete="one-time-code"
                               required
                               autofocus>
                        @error('otp_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn-auth mb-3" id="verifyBtn">
                        <i class="fas fa-check-circle"></i>
                        <span id="verifyBtnText">Verify &amp; Activate Account</span>
                    </button>
                </form>

                <!-- Resend OTP form -->
                <form method="POST" action="{{ route('user.resend.otp') }}" id="resendForm">
                    @csrf
                    <button type="submit" class="btn-resend" id="resendBtn">
                        <i class="fas fa-redo"></i>
                        <span id="resendBtnText">Resend OTP</span>
                    </button>
                </form>

            </div>

            <div class="form-footer">
                <i class="fas fa-lock me-1" style="color:#1652f0;"></i>
                Your account is protected. The OTP is valid for one use only.
            </div>

        </div>
    </div>

    <script>
        // Only allow numeric input in OTP field
        document.getElementById('otp_code').addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '').slice(0, 4);
        });

        // Prevent double-submit on verify
        document.getElementById('otpForm').addEventListener('submit', function () {
            var btn = document.getElementById('verifyBtn');
            var txt = document.getElementById('verifyBtnText');
            btn.disabled = true;
            txt.textContent = 'Verifying...';
        });

        // Prevent double-submit on resend
        document.getElementById('resendForm').addEventListener('submit', function () {
            var btn = document.getElementById('resendBtn');
            var txt = document.getElementById('resendBtnText');
            btn.disabled = true;
            txt.textContent = 'Sending...';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

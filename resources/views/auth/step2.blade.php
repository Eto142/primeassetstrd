<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeAssetsTRD | Complete Your Profile</title>
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
            width: 100%; max-width: 500px; background: #fff; border-radius: 16px;
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
        .form-header { padding: 24px 28px 20px; border-bottom: 1px solid #f1f5f9; }
        .form-header h3 { font-size: 1.3rem; font-weight: 800; color: #0f1c3f; margin-bottom: 4px; }
        .form-header p { color: #64748b; font-size: 0.85rem; margin: 0; }
        .form-body { padding: 24px 28px 28px; }
        .form-label { font-size: 0.8rem; font-weight: 600; color: #334155; margin-bottom: 5px; display: block; }
        .form-control, .form-select {
            background: #f8faff; border: 1.5px solid #e2e8f0; color: #0f1c3f;
            padding: 10px 13px; border-radius: 8px; font-size: 0.88rem;
            transition: border-color 0.25s, box-shadow 0.25s; width: 100%;
        }
        .form-control:focus, .form-select:focus {
            background: #fff; border-color: #1652f0;
            box-shadow: 0 0 0 3px rgba(22,82,240,0.1); outline: none; color: #0f1c3f;
        }
        .form-control.is-invalid, .form-select.is-invalid { border-color: #dc2626; }
        .form-control::placeholder { color: #94a3b8; }
        .input-icon-wrap { position: relative; }
        .input-icon-wrap .field-icon { position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 0.85rem; pointer-events: none; }
        .input-icon-wrap .form-control, .input-icon-wrap .form-select { padding-left: 36px; }
        .invalid-feedback { display: block; width: 100%; margin-top: 4px; font-size: 0.78rem; color: #dc2626; }
        .btn-auth {
            width: 100%; background: #1652f0; color: #fff; border: none;
            padding: 13px; font-weight: 700; font-size: 0.95rem; border-radius: 8px;
            transition: all 0.25s; cursor: pointer;
            display: flex; align-items: center; justify-content: center; gap: 8px;
        }
        .btn-auth:hover { background: #0e40c7; transform: translateY(-1px); box-shadow: 0 6px 18px rgba(22,82,240,0.3); color: #fff; }
        .btn-auth:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }
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
        <h2>Almost there —<br>complete your <span>profile.</span></h2>
        <p>We need a few more details to keep your account secure and compliant with regulatory requirements.</p>
        <ul class="step-list">
            <li>
                <div class="step-num done"><i class="fas fa-check" style="font-size:0.6rem;"></i></div>
                <div class="step-body">
                    <div class="step-title">Account Created</div>
                    <div class="step-sub">Email registered &amp; password set</div>
                </div>
            </li>
            <li>
                <div class="step-num active">2</div>
                <div class="step-body">
                    <div class="step-title">Personal Details</div>
                    <div class="step-sub">Address, country &amp; phone number</div>
                </div>
            </li>
            <li>
                <div class="step-num">3</div>
                <div class="step-body">
                    <div class="step-title">Verify Account</div>
                    <div class="step-sub">Confirm OTP sent to your email</div>
                </div>
            </li>
        </ul>
        <div class="info-card">
            <div class="info-card-label"><i class="fas fa-shield-alt me-1"></i>Why we need this</div>
            <p>As a regulated broker, we are required by law to verify the identity and location of all clients. Your data is encrypted and never shared with third parties.</p>
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
                <div class="ps-item active">
                    <div class="ps-num">2</div> Details
                </div>
                <div class="ps-divider"></div>
                <div class="ps-item">
                    <div class="ps-num">3</div> Verify
                </div>
            </div>

            <div class="form-header">
                <h3>Complete your profile</h3>
                <p>Fill in your contact and location details to activate your account</p>
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

                @if ($errors->any())
                    <div class="alert alert-warning py-2 mb-3" role="alert">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('user.step2') }}" id="step2Form">
                    @csrf

                    <!-- Country -->
                    <div class="mb-3">
                        <label for="country" class="form-label">Country of Residence</label>
                        <div class="input-icon-wrap">
                            <i class="fas fa-globe field-icon"></i>
                            <select class="form-select @error('country') is-invalid @enderror" id="country" name="country" required>
                                <option value="">Select your country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, Democratic Republic">Congo, Democratic Republic</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Greece">Greece</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kosovo">Kosovo</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="North Korea">North Korea</option>
                                <option value="North Macedonia">North Macedonia</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- State -->
                    <div class="mb-3">
                        <label for="state" class="form-label">State / Province</label>
                        <div class="input-icon-wrap">
                            <i class="fas fa-map-marker-alt field-icon"></i>
                            <input type="text"
                                   class="form-control @error('state') is-invalid @enderror"
                                   id="state" name="state"
                                   placeholder="e.g. California"
                                   value="{{ old('state') }}" required>
                        </div>
                        @error('state')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Postal code -->
                    <div class="mb-3">
                        <label for="pcode" class="form-label">Postal / ZIP Code</label>
                        <div class="input-icon-wrap">
                            <i class="fas fa-hashtag field-icon"></i>
                            <input type="text"
                                   class="form-control @error('pcode') is-invalid @enderror"
                                   id="pcode" name="pcode"
                                   placeholder="e.g. 90210"
                                   value="{{ old('pcode') }}" required>
                        </div>
                        @error('pcode')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Full Address</label>
                        <div class="input-icon-wrap">
                            <i class="fas fa-home field-icon"></i>
                            <input type="text"
                                   class="form-control @error('address') is-invalid @enderror"
                                   id="address" name="address"
                                   placeholder="e.g. 123 Main Street"
                                   value="{{ old('address') }}" required>
                        </div>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="mb-4">
                        <label for="phone" class="form-label">Phone Number</label>
                        <div class="input-icon-wrap">
                            <i class="fas fa-phone field-icon"></i>
                            <input type="tel"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   id="phone" name="phone"
                                   placeholder="e.g. +1 555 000 0000"
                                   value="{{ old('phone') }}" required>
                        </div>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn-auth" id="submitBtn">
                        <span id="btnText">Continue</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>

                </form>
            </div>

            <div class="form-footer">
                <i class="fas fa-lock me-1" style="color:#1652f0;"></i>
                Your information is encrypted and secured.
            </div>

        </div>
    </div>

    <script>
        // Pre-select country if old value exists (after validation fail)
        (function () {
            var oldCountry = "{{ old('country') }}";
            if (oldCountry) {
                document.getElementById('country').value = oldCountry;
            }
        })();

        // Prevent double-submit
        document.getElementById('step2Form').addEventListener('submit', function () {
            var btn = document.getElementById('submitBtn');
            var txt = document.getElementById('btnText');
            btn.disabled = true;
            txt.textContent = 'Please wait...';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

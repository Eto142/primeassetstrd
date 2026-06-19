<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Profile | PrimeAssetsTRD</title>
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
        .step-list li .step-body .step-title { font-weight: 600; color: #fff; font-size: 0.9rem; margin-bottom: 2px; }
        .step-list li .step-body .step-sub { font-size: 0.8rem; color: #64748b; }
        .info-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 18px 20px; }
        .info-card-label { font-size: 0.72rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: #60a5fa; margin-bottom: 8px; }
        .info-card p { font-size: 0.82rem; color: #94a3b8; line-height: 1.6; margin: 0; }
        .auth-right { flex: 1; display: flex; align-items: center; justify-content: center; padding: 32px 20px; background: #f0f4f8; overflow-y: auto; }
        .auth-form-wrap {
            width: 100%; max-width: 500px;
            background: #fff; border-radius: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 24px rgba(22,82,240,0.07);
            overflow: hidden;
            animation: fadeUp 0.5s ease forwards;
        }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .progress-bar-wrap { padding: 0; }
        .progress-step { display: flex; align-items: center; background: #f8faff; border-bottom: 1px solid #e2e8f0; padding: 14px 28px; gap: 0; }
        .ps-item { display: flex; align-items: center; gap: 8px; font-size: 0.8rem; font-weight: 600; color: #94a3b8; }
        .ps-item.done { color: #16a34a; }
        .ps-item.active { color: #1652f0; }
        .ps-item .ps-num { width: 24px; height: 24px; border-radius: 50%; background: #e2e8f0; display: flex; align-items: center; justify-content: center; font-size: 0.72rem; font-weight: 700; flex-shrink: 0; }
        .ps-item.done .ps-num { background: #16a34a; color: #fff; }
        .ps-item.active .ps-num { background: #1652f0; color: #fff; }
        .ps-divider { flex: 1; height: 1px; background: #e2e8f0; margin: 0 10px; }
        .form-header { padding: 24px 28px 20px; border-bottom: 1px solid #f1f5f9; }
        .form-header h3 { font-size: 1.3rem; font-weight: 800; color: #0f1c3f; margin-bottom: 4px; }
        .form-header p { color: #64748b; font-size: 0.85rem; }
        .form-body { padding: 24px 28px 28px; }
        .form-label { font-size: 0.8rem; font-weight: 600; color: #334155; margin-bottom: 5px; display: block; }
        .form-control, .form-select {
            background: #f8faff; border: 1.5px solid #e2e8f0; color: #0f1c3f;
            padding: 10px 13px; border-radius: 8px; font-size: 0.88rem; transition: all 0.25s; width: 100%;
        }
        .form-control:focus, .form-select:focus {
            background: #fff; border-color: #1652f0; box-shadow: 0 0 0 3px rgba(22,82,240,0.1); outline: none; color: #0f1c3f;
        }
        .form-control::placeholder { color: #94a3b8; }
        .input-icon-wrap { position: relative; }
        .input-icon-wrap .field-icon { position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 0.85rem; pointer-events: none; }
        .input-icon-wrap .form-control { padding-left: 36px; }
        .btn-auth {
            width: 100%; background: #1652f0; color: #fff; border: none;
            padding: 13px; font-weight: 700; font-size: 0.95rem; border-radius: 8px;
            transition: all 0.25s; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;
        }
        .btn-auth:hover { background: #0e40c7; transform: translateY(-1px); box-shadow: 0 6px 18px rgba(22,82,240,0.3); color: #fff; }
        .invalid-feedback { display: block; width: 100%; margin-top: 4px; font-size: 0.78rem; color: #dc2626; }
        .was-validated .form-control:valid { border-color: #16a34a; }
        .was-validated .form-control:invalid { border-color: #dc2626; }
        .form-footer { padding: 14px 28px 18px; background: #f8faff; border-top: 1px solid #f1f5f9; text-align: center; font-size: 0.82rem; color: #64748b; }
        .reg-strip { margin-top: 18px; display: flex; gap: 18px; flex-wrap: wrap; justify-content: center; }
        .reg-badge { display: flex; align-items: center; gap: 6px; font-size: 0.74rem; color: #64748b; }
        .reg-badge i { color: #1652f0; }
        @media (max-width: 960px) { .auth-left { display: none !important; } }
        @media (max-width: 520px) { .form-header, .form-body, .form-footer { padding-left: 16px; padding-right: 16px; } }
    </style>
</head>
<body>
    <!-- Left Panel -->
    <div class="auth-left d-none d-xl-flex flex-column">
        <div class="brand-logo">
            <img src="{{ asset('logo.png') }}" alt="PrimeAssetsTRD">
            <span class="brand-logo-text">PrimeAssets <span>TRD</span></span>
        </div>
        <h2>Almost there —<br>complete your <span>profile.</span></h2>
        <p>We need a few more details to keep your account secure and compliant with regulatory requirements.</p>
        <ul class="step-list">
            <li>
                <div class="step-num done"><i class="fas fa-check" style="font-size:0.6rem;"></i></div>
                <div class="step-body">
                    <div class="step-title">Account Created</div>
                    <div class="step-sub">Email registered &amp; verified</div>
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
                    <div class="step-title">Start Trading</div>
                    <div class="step-sub">Fund your account or open a demo</div>
                </div>
            </li>
        </ul>
        <div class="info-card">
            <div class="info-card-label"><i class="fas fa-shield-alt me-1"></i>Why we need this</div>
            <p>As a regulated broker, we are required by law to verify the identity and location of all clients. Your data is encrypted and never shared with third parties.</p>
        </div>
    </div>

    <!-- Right Form Panel -->
    <div class="auth-right">
        <div style="width:100%; max-width:500px;">
            <div class="auth-form-wrap">
                <!-- Progress bar -->
                <div class="progress-bar-wrap">
                    <div class="progress-step">
                        <div class="ps-item done"><div class="ps-num"><i class="fas fa-check" style="font-size:0.6rem;"></i></div> Account</div>
                        <div class="ps-divider"></div>
                        <div class="ps-item active"><div class="ps-num">2</div> Details</div>
                        <div class="ps-divider"></div>
                        <div class="ps-item"><div class="ps-num">3</div> Trade</div>
                    </div>
                </div>

                <div class="form-header">
                    <h3>Complete your profile</h3>
                    <p>Fill in your contact and location details to activate your account</p>
                </div>

                <div class="form-body">
                    <form method="POST" action="{{ route('user.step2') }}" id="updateDetails" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="country" class="form-label">Country of Residence</label>
                            <div class="input-icon-wrap">
                                <i class="fas fa-globe field-icon"></i>
                                <select class="form-select" id="country" name="country" style="padding-left:36px;" required><option value="">select</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
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
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curacao">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Martin">Saint Martin</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Sint Maarten">Sint Maarten</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                      

                                </select>
                            </div>
                            <div class="invalid-feedback">Please select your country.</div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label for="state" class="form-label">State / Province</label>
                                <div class="input-icon-wrap">
                                    <i class="fas fa-map-marker-alt field-icon"></i>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="e.g. California" required>
                                </div>
                                <div class="invalid-feedback">Please enter your state.</div>
                            </div>
                            <div class="col-6">
                                <label for="pcode" class="form-label">Postal Code</label>
                                <div class="input-icon-wrap">
                                    <i class="fas fa-mail-bulk field-icon"></i>
                                    <input type="text" class="form-control" id="pcode" name="pcode" placeholder="e.g. 90210" required>
                                </div>
                                <div class="invalid-feedback">Please enter your postal code.</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Street Address</label>
                            <div class="input-icon-wrap">
                                <i class="fas fa-home field-icon"></i>
                                <input type="text" class="form-control" id="address" name="address" placeholder="123 Main Street, Suite 4" required>
                            </div>
                            <div class="invalid-feedback">Please enter your address.</div>
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="form-label">Mobile Number</label>
                            <div class="input-icon-wrap">
                                <i class="fas fa-mobile-alt field-icon"></i>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+1 (555) 000-0000" required>
                            </div>
                            <div class="invalid-feedback">Please enter a valid mobile number.</div>
                        </div>

                        <button class="btn-auth" type="submit" id="submitBtn">
                            <span id="btnText">Continue to Dashboard</span>
                            <i class="fas fa-arrow-right" id="btnIcon"></i>
                            <div id="btnLoading" class="spinner-border spinner-border-sm text-light d-none" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </form>
                </div>

                <div class="form-footer">
                    <i class="fas fa-lock me-1" style="color:#1652f0;"></i>
                    Your information is encrypted and protected under our <a href="#" style="color:#1652f0; font-weight:600;">Privacy Policy</a>
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
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();

    document.getElementById('updateDetails').addEventListener('submit', function () {
        document.getElementById('btnText').textContent = 'Saving...';
        document.getElementById('btnIcon').classList.add('d-none');
        document.getElementById('btnLoading').classList.remove('d-none');
    });
    </script>
</body>
</html>

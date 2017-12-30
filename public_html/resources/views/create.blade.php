<!DOCTYPE html>
<html>
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110126308-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110126308-1');
    </script>
    <!-- End of Global site tag (gtag.js) - Google Analytics -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/kube/6.5.2/css/kube.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
    <script src="js/uikit-icons.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <title>Meld je aan!</title>
</head>
<body>
<div class="row">
    <div class="col col-8 push-middle push-center">
        <h1 class="title">Meld je nu aan voor de nieuwjaarsduik!</h1><br>
        <br>
        @if ($errors->any())
            <div class="uk-alert-danger uk-animation-shake" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <h3>Oeps...</h3>
                <ul class="uk-list">
                    @foreach ($errors->all() as $error)
                        <li><p>{{ $error }}</p></li>
                    @endforeach
                </ul>
            </div>
        @endif
<form method="post" action="store" class="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-item">
        <label>Voornaam <span class="req">*</span></label>
        <input type="text" name="firstname" class="w50" required>
    </div>

    <label>Tussenvoegsel</label>
    <div class="form-item">
        <input type="text" name="tussenv" class="w50">
    </div>

    <label>Achternaam <span class="req">*</span></label>
    <div class="form-item">
        <input type="text" name="lastname" class="w50" required>
    </div>

    <div class="form-item">
        <label>Geslacht <span class="req">*</span></label>
        <select class="w50" name="gender">
            <option value="male">Man</option>
            <option value="female">Vrouw</option>
        </select>
    </div>

    <label>Leeftijd <span class="req">*</span></label>
    <div class="form-item">
        <input name="age" type="number" class="w50" required>
    </div>

    <label>E-mailadres <span class="req">*</span></label>
    <div class="form-item">
        <input type="email" name="email" class="w50" required>
    </div>

    <label>Telefoonnummer <span class="req">*</span></label>
    <div class="form-item">
        <div class="prepend w50">
        <input type="text" name="tel" class="w50" placeholder="+31 6 12345678" required>
        </div>
        <div class="desc">Mobiel of vast nummer, inclusief landcode</div>
    </div>

    <div class="row gutters">
        <div class="col col-6">
            <div class="form-item">
                <label>Straatnaam <span class="req">*</span></label>
                <input type="text" name="street" class="w50" required>
            </div>
        </div>
        <div class="col col-6">
            <div class="form-item">
                <label>Huisnummer <span class="req">*</span></label>
                <input type="number" name="hnumber" class="w50" required>
            </div>
        </div>
    </div>

    <div class="row gutters">
        <div class="col col-6">
            <div class="form-item">
                <label>Provincie <span class="req">*</span></label>
                <select name="province" class="w50" required>
                    <option value="Drenthe">Drenthe</option>
                    <option value="Flevoland">Flevoland</option>
                    <option value="Friesland">Friesland</option>
                    <option value="Gelderland">Gelderland</option>
                    <option value="Groningen">Groningen</option>
                    <option value="Limburg">Limburg</option>
                    <option value="Noord-Brabant">Noord-Brabant</option>
                    <option value="Noord-Holland" selected>Noord-Holland</option>
                    <option value="Overijssel">Overijssel</option>
                    <option value="Utrecht">Utrecht</option>
                    <option value="Zeeland">Zeeland</option>
                    <option value="Zuid-Holland">Zuid-Holland</option>
                    <option value="Niet-Nederland">Ik woon buiten Nederland</option>
                </select>
            </div>
        </div>
        <div class="col col-6">
            <div class="form-item">
                <label>Postcode <span class="req">*</span></label>
                <input type="text" name="postal" class="w50" required>
            </div>
        </div>
    </div>

    <div class="form-item">
        <label>Land <span class="req">*</span></label>
        <select name="country" class="w50" required>
            <option value="AF">Afghanistan</option>
            <option value="AX">Åland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo, The Democratic Republic of The</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Cote D'ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czechia</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and Mcdonald Islands</option>
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option valuerows="6"="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libyan Arab Jamahiriya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL" selected>Netherlands</option>
            <option value="AN">Netherlands Antilles</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Reunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="SH">Saint Helena</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and The Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and The South Sandwich Islands</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.S.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
        </select>
    </div>

    <label>Stad / Dorp <span class="req">*</span></label>
    <div class="form-item">
        <div class="prepend w50">
            <input type="text" name="area" class="w50" placeholder="Amsterdam" required>
        </div>
    </div>

    <div class="form-item">
        <label>Tijd <span class="req">*</span></label>
        <div class="prepend w50">
            <span>01-01-2018</span>
        <select class="w50" name="njgroup">
            @foreach ($times as $njgroups)
            <option value="{{ $njgroups }}">{{ $njgroups }}</option>
            @endforeach
        </select>
        </div>
        <div class="desc">De tijd wanneer jij het water in wilt gaan</div>
    </div>

    <div class="form-item">
        <div class="form-item form-checkboxes">
            <label class="checkbox">Ik wil</label>
            <label class="checkbox"><input type="radio" name="child" value="met"> met</label>
            <label class="checkbox"><input type="radio" name="child" value="zonder"> zonder</label>
            <label class="checkbox">mijn kind deelnemen</label>
        </div>
    </div>

    <div class="form-item">
        <label class="checkbox"><input type="checkbox" name="over16" value="yes" required> Ik ben 16 jaar of ouder <span class="req">*</span></label>
        <label class="checkbox"><input type="checkbox" name="zwemdiploma" value="yes" required> Ik ben in het bezit van een zwemdiploma <span class="req">*</span></label>
        <label class="checkbox"><input type="checkbox" name="klachten" value="yes" required> Ik heb geen lichamelijke klachten <span class="req">*</span></label>
        <label class="checkbox"><input type="checkbox" name="bewust" value="yes" required> Ik ben bewust van de risico's van zwemmen in koud water <span class="req">*</span></label>
        <label class="checkbox"><input type="checkbox" name="eigenrisico" value="yes" required> Ik neem op eigen risico deel aan dit evenement <span class="req">*</span></label>
        <label class="checkbox"><input type="checkbox" name="luisteren" value="yes" required> Ik zal ten alle tijden naar de medewerkers van dit evenement luisteren <span class="req">*</span></label>
    </div>

    <div class="form-item">
        {!! NoCaptcha::display() !!}
    </div>

    <div class="form-item">
        <button type="submit">Meld mij aan!</button>
    </div>

</form>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/kube/6.5.2/js/kube.min.js"></script>
</body>
</html>
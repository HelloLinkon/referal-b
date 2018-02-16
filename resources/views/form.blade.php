<!DOCTYPE html>
<html>

<head>
    <title>WHITELIST</title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="Bithemoth">
    <meta name="author" content="Bithemoth">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="image/title-icon.png" rel="icon">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"> -->
    <style>

        .intro {
            display: none;
        }

        .count-particles {
            bottom: 0;
        }

        @media only screen and (min-width: 300px) and (max-width: 767px) {
            .count-particles {
                position: inherit;
            }

            .landing-section-wrap {
                position: inherit;
            }

            .form-hide-overlay {
                display: none !important;
            }

            .input-form-group {
                margin-bottom: 0 !important;
            }

            .button {
                display: none !important;
            }

            #particles-js {
                display: none;
            }

            textarea {
                height: 100px;
            }
        }
    </style>
</head>
<body>


<div class="landing-section-wrap" style="background:#e0e0e0">
    <div class="form-div">

        <div class="form-header">

            <div class="form-logo">
                <a href="{{ url('/') }}">
                    <img src="images/logo.png" alt="logo">
                </a>
            </div>


        </div>
        <div id="#" class="count-particles">
            <div class="form-box1">
                <div>
                    <h1>Bithemoth Whitelist :</h1>
                    <div id="edit">
                        <p>An all-encompassing exchange platform set to revolutionize the the blockchain market.</p>
                        <p>We respect your privacy.</p>
                        <p>Your information wil not be sold or shared.</p>
                        <a class="button" id="btn" style="padding:15px 25px;">Enter Details</a>
                    </div>

                    <div class="clear"></div>
                </div>
                <div class="form-content">
                    <div class="form-left-pannel">
                        <nav class="" id="myScrollspy">
                            <ul class="nav nav-pills nav-stacked" style="position:inherit">
                                <li class="active">
                                    <a href="#01">01. Name
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#02">02. Email
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="" href="#03">03. Telegram ID<span class="arrow"></span></a>

                                </li>
                                <li>
                                    <a class="" href="#04">04. Country of Residence<span class="arrow"></span></a>

                                </li>
                                <li>
                                    <a class="" href="#05">05. Token Sale<span class="arrow"></span></a>

                                </li>
                                <li>
                                    <a class="" href="#06">06. Favorite Cryptocurrency<span class="arrow"></span></a>

                                </li>
                                <li>
                                    <a class="" href="#07">07. How did you hear about us?<span class="arrow"></span></a>

                                </li>

                            </ul>

                        </nav>

                        <div class="clear"></div>
                    </div>
                    <form action="form" method="post">
                        {{ csrf_field() }}

                        <div class="form-right-pannel" data-spy="scroll" data-target="#myScrollspy" data-offset="20">


                            <div class="input-form-group input-active single-scroll" id="01">
                                <label>01. Enter First Name *</label>
                                <input type="text" placeholder="Enter First Name" name="first_name">
                                <label style="margin-top:10px;"> Enter Last Name *</label>
                                <input type="text" placeholder="Enter Last Name" name="last_name">
                                <div style="display: none;" class="form-hide-overlay"></div>
                            </div>

                            <div class="input-form-group input-active single-scroll" id="02">
                                <label>02. Email Address *</label>
                                <input type="text" name="email" placeholder="Enter Your Email Address">
                                <div class="input-note">
                                    Important: Provide a valid email address, a verification email will be sent. This
                                    will
                                    be the email address we use to reach you during the token distribution process.
                                    Please
                                    enter an email address that you use frequently.
                                </div>
                                <div class="form-hide-overlay" style="display: block;"></div>
                            </div>
                            <div class="input-form-group input-active single-scroll" id="03">
                                <label>03. Telegram ID *</label>
                                <input type="text" placeholder="Enter Your Telegram ID" name="telegram_id">
                                <div class="input-note">
                                    Important: In order to be eligible for our whitelist, you must join our Telegram
                                    group.
                                    You can find our telegram group linked onto the previous page.
                                </div>
                                <div class="form-hide-overlay" style="display: block;"></div>
                            </div>
                            <div class="input-form-group input-active single-scroll" id="04">
                                <label>04. Country of Residence *</label>
                                <select class="select-country" name="country">
                                    <option value="" selected="selected">Select Country</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
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
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
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
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
                                        of
                                        The
                                    </option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
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
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
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
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic of
                                    </option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                        Yugoslav Republic of
                                    </option>
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
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
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
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
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
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                        South
                                        Sandwich Islands
                                    </option>
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
                                    <option value="Timor-leste">Timor-leste</option>
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
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                <div class="form-hide-overlay" style="display: block;"></div>
                            </div>
                            <div class="input-form-group input-active single-scroll" id="05">
                                <label>05. Please indicate the amount with which you want to participate in the token
                                    sale
                                    (in USD) </label>
                                <div class="list-box">
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="one" value="USD 100-1000" name="amount_participate">
                                        <label class="label" for="one">USD 100-1000</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="two" value="USD 1,000-5,000" name="amount_participate">
                                        <label class="label" for="two">USD 1,000-5,000</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="three" value="USD 5,000-10,000" name="amount_participate">
                                        <label class="label" for="three">USD 5,000-10,000</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="four" value="USD 10,000-50,000" name="amount_participate">
                                        <label class="label" for="four">USD 10,000-50,000</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="five" value="USD 50,000-100,000" name="amount_participate">
                                        <label class="label" for="five">USD 50,000-100,000</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" value="USD 10,000-50,000" id="six" name="amount_participate">
                                        <label class="label" for="six">USD 10,000-50,000</label>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="form-hide-overlay"></div>
                            </div>
                            <div class="input-form-group input-active single-scroll" id="06">
                                <label>06. What is your favorite cryptocurrency exchange? *</label>
                                <input type="text" name="favorite_cryptocurrency" placeholder="eg: coinbase">
                                <div class="form-hide-overlay"></div>
                            </div>
                            <div class="input-form-group input-active single-scroll" id="07">
                                <label>07. How did you hear about us? *</label>

                                <div class="list-box">
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="cm" value="CoinMarketCap.com" name="hear_source">
                                        <label class="label" for="cm">CoinMarketCap.com</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="twi" value="Twitter" name="hear_source">
                                        <label class="label" for="twi">Twitter</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="fb" value="Facebook" name="hear_source">
                                        <label class="label" for="fb">Facebook</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="bt" value="BitcoinTalk" name="hear_source">
                                        <label class="label" for="bt">BitcoinTalk</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="redd" value="Reddit" name="hear_source">
                                        <label class="label" for="redd">Reddit</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="checkbox" id="nw" value="NewsWebsite" name="hear_source">
                                        <label class="label" for="nw">NewsWebsite</label>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="form-hide-overlay"></div>
                            </div>

                            <div class="input-form-group" style="margin-bottom:300px;">
                                <input type="submit" value="submit" class="submit">
                            </div>

                        </div>
                    </form>
                    <div id="formOverlay" class="form-hide-overlay f4"></div>
                    <div class="clear"></div>
                </div>
                <div class="">
                </div>
                <div class="clear"></div>
            </div>
            <div id="particles-js"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
</div>
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/particles.js"></script>
<script src="js/app1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        var stageValue = 1000;
        $("#btn").click(function () {
            $("#edit").addClass("intro");
            $("#formOverlay").css("display", "none");
            // $("#03 input").focus();

        });


        // scroll control


        $("#01 input").keyup(function () {
            $(".form-right-pannel").removeClass("stop-scrolling");
            stageValue = 1010;
        });

        $("#02 input").keyup(function () {
            $(".form-right-pannel").removeClass("stop-scrolling");
            stageValue = 1010;
        });

        $("#03 input").keyup(function () {
            $(".form-right-pannel").removeClass("stop-scrolling");
            stageValue = 1010;
        });

        $("#04 select").change(function () {
            console.log($("#04 select").val());
            $(".form-right-pannel").removeClass("stop-scrolling");
            stageValue = 1010;
        });

        $("#06 input").click(function () {
            // console.log($("#0 input").val());
            $(".form-right-pannel").removeClass("stop-scrolling");
            stageValue = 1010;
        });
        //
        $(".form-right-pannel").scroll(function () {
            console.log("scroll: " + stageValue);
            if (stageValue == 1000 && $("#01 input").val() == "")
                $(".form-right-pannel").addClass("stop-scrolling");
            if (stageValue == 1001 && $("#02 input").val() == "")
                $(".form-right-pannel").addClass("stop-scrolling");
            if (stageValue == 1002 && $("#03 input").val() == "")
                $(".form-right-pannel").addClass("stop-scrolling");
            if (stageValue == 1003 && $("#04 select").val() == "")
                $(".form-right-pannel").addClass("stop-scrolling");
            if (stageValue == 1005 && $("#06 input").val() == "")
                $(".form-right-pannel").addClass("stop-scrolling");
        });


        // else {
        //   $(".form-right-pannel").removeClass("stop-scrolling");
        // }

        // document.getelementbyId('#03 input').focus();
        // $(function() {
        //      $.scrollify({
        //        section : ".single-scroll",
        //      });
        //    });
        $('#myScrollspy').on('activate.bs.scrollspy', function () {
            var activeSection = $(this).find("li.active a").attr("href");


            if (activeSection === "#01") {
                console.log(stageValue);
                $('#01 .form-hide-overlay').css("display", "none");
                $('#02 .form-hide-overlay').css("display", "block");
                $('#03 .form-hide-overlay').css("display", "block");
                $('#04 .form-hide-overlay').css("display", "block");
            }
            if (activeSection === "#02") {
                stageValue = 1001;
                console.log(stageValue + " " + $('#002 input').value);
                $('#01 .form-hide-overlay').css("display", "block");
                $('#02 .form-hide-overlay').css("display", "none");
                $('#03 .form-hide-overlay').css("display", "block");
                $('#04 .form-hide-overlay').css("display", "block");
            }
            if (activeSection === "#03") {
                stageValue = 1002;
                console.log(stageValue);
                $('#01 .form-hide-overlay').css("display", "block");
                $('#02 .form-hide-overlay').css("display", "block");
                $('#03 .form-hide-overlay').css("display", "none");
                $('#04 .form-hide-overlay').css("display", "block");
            }
            if (activeSection === "#04") {
                stageValue = 1003;
                console.log(stageValue);
                $('#01 .form-hide-overlay').css("display", "block");
                $('#02 .form-hide-overlay').css("display", "block");
                $('#03 .form-hide-overlay').css("display", "block");
                $('#04 .form-hide-overlay').css("display", "none");
                $('#05 .form-hide-overlay').css("display", "block");
            }
            if (activeSection === "#05") {
                stageValue = 1004;
                console.log(stageValue);
                $('#01 .form-hide-overlay').css("display", "block");
                $('#02 .form-hide-overlay').css("display", "block");
                $('#03 .form-hide-overlay').css("display", "block");
                $('#04 .form-hide-overlay').css("display", "block");
                $('#05 .form-hide-overlay').css("display", "none");
                $('#06 .form-hide-overlay').css("display", "block");
                $('#07 .form-hide-overlay').css("display", "block");
            }
            if (activeSection === "#06") {
                stageValue = 1005;
                console.log(stageValue);
                $('#01 .form-hide-overlay').css("display", "block");
                $('#02 .form-hide-overlay').css("display", "block");
                $('#03 .form-hide-overlay').css("display", "block");
                $('#04 .form-hide-overlay').css("display", "block");
                $('#05 .form-hide-overlay').css("display", "block");
                $('#06 .form-hide-overlay').css("display", "none");
                $('#07 .form-hide-overlay').css("display", "block");
            }
            if (activeSection === "#07") {
                stageValue = 1006;
                console.log(stageValue);
                $('#01 .form-hide-overlay').css("display", "block");
                $('#02 .form-hide-overlay').css("display", "block");
                $('#03 .form-hide-overlay').css("display", "block");
                $('#04 .form-hide-overlay').css("display", "block");
                $('#05 .form-hide-overlay').css("display", "block");
                $('#06 .form-hide-overlay').css("display", "block");
                $('#07 .form-hide-overlay').css("display", "none");
            }
        });


    });
</script>


</body>

</html>

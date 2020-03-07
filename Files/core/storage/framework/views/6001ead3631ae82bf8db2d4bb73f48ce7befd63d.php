<?php $__env->startSection('style'); ?>

    <link href="<?php echo e(url('/')); ?>/assets/fonts/register.css" rel="stylesheet">

    <style>
        #formContent{
            max-width: 600px !important;
        }
    #page-content {
        background-image: url("assets/fonts/img/registration.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
        

    </style>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--Start Page Content-->
    <section id="page-content">
        <!--Start Page Title-->
        <div class="page-title bg-cover">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-content text-center">
                            <h1 class="white-color m-0">Sign Up</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Title-->

        <!--Start Blog Wrap-->
        <div class="blog-single-wrap">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->

                <div class="wrapper fadeInDown">
                    <div id="formContent">
                        <!-- Tabs Titles -->
                        <h2 class="active"> Sign Up </h2>

                        <!-- Icon -->
                        <div class="fadeIn first">
                            <img src="<?php echo e(asset('assets/user/paid_user.png.')); ?>" id="icon" alt="User Icon" />
                        </div>
                        <!-- Login Form -->
                        <form method="post" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="ref_name" value="<?php echo e(old('ref_name')); ?>" placeholder="Referrer Username" required autocomplete="off" />
                                    <div id="ref">

                                    </div>
                                    <?php if($errors->has('referrer_id')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('referrer_id')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <select class="select_panel" id="position" name="position" required>
                                        <option disabled selected>Select Position</option>
                                        <option value="L">Left</option>
                                        <option value="R">Right</option>
                                    </select>
                                    <div id="ref_pos">

                                    </div>
                                    <?php if($errors->has('position')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('position')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <input required type="text" placeholder="First Name" value="<?php echo e(old('first_name')); ?>" name="first_name">
                                    <?php if($errors->has('first_name')): ?>
                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('first_name')); ?></strong>
                                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <input  type="text" required placeholder="Last Name" value="<?php echo e(old('last_name')); ?>" name="last_name">
                                    <?php if($errors->has('last_name')): ?>
                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('last_name')); ?></strong>
                                                        </span>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <input required type="email" placeholder="Your Email" value="<?php echo e(old('email')); ?>"  name="email">
                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-4">
                                    <input required type="text" placeholder="Your Mobile" value="<?php echo e(old('mobile')); ?>"  name="mobile">
                                    <?php if($errors->has('mobile')): ?>
                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('mobile')); ?></strong>
                                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="datepicker" placeholder="Birth Date" value="<?php echo e(old('birth_day')); ?>" name="birth_day">

                                    <?php if($errors->has('birth_day')): ?>
                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('birth_day')); ?></strong>
                                                        </span>
                                    <?php endif; ?>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <input required type="text" placeholder="Street Address" value="<?php echo e(old('street_address')); ?>" name="street_address">
                                    <?php if($errors->has('street_address')): ?>
                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('street_address')); ?></strong>
                                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" required placeholder="City" value="<?php echo e(old('city')); ?>" name="city">
                                    <?php if($errors->has('city')): ?>
                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('city')); ?></strong>
                                                        </span>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <input type="text" required placeholder="Post Code" value="<?php echo e(old('post_code')); ?>" name="post_code">
                                    <?php if($errors->has('post_code')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('post_code')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <select class="select_panel" name="country" required>
                                        <option selected disabled>Select Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antartica">Antarctica</option>
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
                                        <option value="Bosnia and Herzegowina">Bosnia </option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean</option>
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
                                        <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia">Croatia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France, Metropolitan</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern </option>
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
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard and McDonald Islands">Heard and</option>
                                        <option value="Holy See">Holy See </option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran (Islamic Republic of)</option>
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
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
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
                                        <option value="Micronesia">Micronesia, Federated States of</option>
                                        <option value="Moldova">Moldova, Republic of</option>
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
                                        <option value="Russia">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint LUCIA">Saint LUCIA</option>
                                        <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia">South Georgia</option>
                                        <option value="Span">Spain</option>
                                        <option value="SriLanka">Sri Lanka</option>
                                        <option value="St. Helena">St. Helena</option>
                                        <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Viet Nam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    <?php if($errors->has('country')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('country')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <input required type="text" placeholder="Username" value="<?php echo e(old('username')); ?>" name="username">
                                    <?php if($errors->has('username')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-12">
                                    <input required type="password" id="password" placeholder="Password" value="<?php echo e(old('password')); ?>"  name="password">
                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                                        </span>
                                    <?php endif; ?>

                                </div>

                                <div class="col-md-12">
                                    <input type="password" id="password" required placeholder="Confirm Password" name="password_confirmation">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox" >
                                        <label class="saddam">
                                            <input required type="checkbox" name="agree" value="agree" />
                                        </label>
                                        Agree with the <a  href="<?php echo e(url('terms')); ?>"> Terms</a> and <a href="<?php echo e(url('policy')); ?>"> Policy</a>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="fadeIn fourth" value="Sign Up">
                        </form>

                    </div>
                </div>

                <!--End Row-->
            </div>
            <!--End Container-->
        </div>
        <!--End Blog Wrap-->

    </section>
    <!--End Page Content-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('keyup','#ref_name',function() {
                var ref_id = $('#ref_name').val();
                var token = "<?php echo e(csrf_token()); ?>";
                var postion = $('#position').val();

                $.ajax({
                    type: "POST",
                    url:"<?php echo e(route('get.ref.id')); ?>",
                    data:{
                        'ref_id': ref_id ,
                        '_token' : token
                    },
                    success:function(data){
                        $("#ref").html(data);
                        if(postion ==null || postion =='L' || postion=='R'){
                            updateHand()
                        }
                    }
                });
            });

            $(document).on('change', '#position', function () {
                    updateHand();
            });
            function updateHand() {
                var pos = $('#position').val();
                var referrer_id = $('#referrer_id').val();
                var token = "<?php echo e(csrf_token()); ?>";
                $.ajax({
                    type: "POST",
                    url:"<?php echo e(route('get.user.position')); ?>",
                    data:{
                        'pos': pos ,
                        'referrer_id': referrer_id ,
                        '_token' : token
                    },
                    success:function(data){
                        $("#ref_pos").html(data);
                    }
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('fonts.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
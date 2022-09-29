<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/images/icons/favicon.ico'?>" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/vendor/animate/animate.css'?>" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/vendor/css-hamburgers/hamburgers.min.css'?>" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/vendor/animsition/css/animsition.min.css'?>" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/vendor/select2/select2.min.css'?>" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/vendor/daterangepicker/daterangepicker.css'?>" rel="stylesheet" type="text/css" />

<!--===============================================================================================-->
<link href="<?php echo base_url().'app-assets/Login_v16/css/util.css'?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url().'app-assets/Login_v16/css/main.css'?>" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->





<div class="limiter">
    <div class="container-login100" style="background-image: url('app-assets/Login_v16/images/progect pic/background-g91136fc45_1920.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">

            <span class="login100-form-title p-b-41">
					 تسجيل الدخول
				</span>
            <form class="login100-form validate-form p-b-33 p-t-5" style="    padding-bottom: 160px;">

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="User name" id="P_CARDID">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password" id="P_PASSWORD">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn" onclick="login();">
                        Login
                    </button>
                    <div ><span style="color: red;font-size: 18px;     display: none;" id="login_msg"></span>
                    </div>
                </div>
            </form>

            <div ><span style="color: red;font-size: 18px;     display: none;" id="login_msg"></span>
            </div>
        </div>

    </div>
</div>


<div id="dropDownSelect1"></div>

<!---->
<!--<input  ID="P_CARDID"  placeholder=" رقم الهوية" />-->
<!--      <input ID="P_PASSWORD" type="password" placeholder="كلمة المرور" />-->
<!--      <button onclick="login();"> تسجيل الدخول</button>-->


<script>

    var base_url="<?php echo base_url(); ?>";
    </script>
<script src='<?php echo base_url()."jquery/jquery-2.2.0.min.js"?>' type="text/javascript"></script>
<script src='<?php echo base_url()."jquery/login.js"?>' type="text/javascript"></script>

<!--===============================================================================================-->
<script src='<?php echo base_url()."app-assets/Login_v16/vendor/jquery/jquery-3.2.1.min.js"?>' type="text/javascript"></script>

<!--===============================================================================================-->
<script src='<?php echo base_url()."app-assets/Login_v16/vendor/animsition/js/animsition.min.js"?>' type="text/javascript"></script>

<!--===============================================================================================-->
<script src='<?php echo base_url()."app-assets/Login_v16/vendor/bootstrap/js/popper.js"?>' type="text/javascript"></script>
<script src='<?php echo base_url()."app-assets/Login_v16/vendor/bootstrap/js/bootstrap.min.js"?>' type="text/javascript"></script>

<!--===============================================================================================-->
<script src='<?php echo base_url()."app-assets/Login_v16/vendor/select2/select2.min.js"?>' type="text/javascript"></script>

<!--===============================================================================================-->
<script src='<?php echo base_url()."app-assets/Login_v16/vendor/daterangepicker/moment.min.js"?>' type="text/javascript"></script>
<script src='<?php echo base_url()."app-assets/Login_v16/vendor/daterangepicker/daterangepicker.js"?>' type="text/javascript"></script>

<!--===============================================================================================-->
<script src='<?php echo base_url()."app-assets/Login_v16/vendor/countdowntime/countdowntime.js"?>' type="text/javascript"></script>

<!--===============================================================================================-->
<script src='<?php echo base_url()."app-assets/Login_v16/ljs/main.js"?>' type="text/javascript"></script>

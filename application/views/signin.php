
    <script src="<?php echo base_url().'jquery/jquery-2.2.0.min.js' ?>"></script>

<script src="<?php echo base_url().'js/jquery-1.12.2.min.js' ?>"></script>

<script src="<?php echo base_url().'js/jquery-migrate-1.4.1.min.js'?>"></script>
<script src="<?php echo base_url().'jquery/login.js' ?>"></script>
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Changa:wght@500&family=Roboto:wght@100;400&display=swap');

/* BASIC */

html {
  background-image: url(<?php echo base_url().'assets/images/home.jpg' ?>);
}

body {
  font-family: 'Cairo', sans-serif;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
  margin-top: 10px;

}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:20%;
}

* {
  box-sizing: border-box;
}
.sign-in{
display: none;

}

button {
    display: inline-block;
    background-color: #2aa7e1;
    font-size: 13px;
    font-weight: 400;
    color: #fff;
    text-transform: capitalize;
    padding: 12px 25px;
    border-radius: 23px;
    letter-spacing: 0.25px;
    border: none;
    outline: none;
    transition: all .3s;
    cursor: pointer;
    font-family: 'Cairo', sans-serif;


  }

  button:hover {
    background-color: #6ccd13;
  }

  .fadeIn h2{

    color: #5fbae9;
    border-bottom: 2px solid  #0d0d0d;
  }



    </style>
    
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <a href="<?php echo base_url().'main_login/login' ?>"><h2 class="inactive underlineHover">  ?????????? ???????? </h2></a> 
          <h2 class="active " >???????????? ????????  </h2>

          <!-- Icon -->
          <div class="fadeIn first">
          <h2 class="active " > ???????? ???????? ???????? ??????????  </h2>

          </div>
      
          <!-- Login Form -->
    <form action="" id="form">
            <input type="text" id="FIRSTNAME" class="fadeIn second" name="FIRSTNAME" placeholder="?????????? ??????????">
            <input type="text" id="LASTNAME" class="fadeIn second" name="LASTNAME" placeholder="?????????? ????????????">
            <input type="email" id="EMAIL" class="fadeIn second" name="EMAIL" placeholder="??????????????">
            <input type="PASSWORD" id="PASSWORD" class="fadeIn third" name="PASSWORD" placeholder="??????????????">
            <input type="PASSWORD" id="PASSWORD1 "class="fadeIn third" name="PASSWORD1" placeholder="?????????? ???????? ????????????">

            <button  type="submit"  class="button " id="buttom" > ??????s???? </button>
            <button onclick="user_insert();" class="button " > ?????????? </button>
            </form>
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">???????? ?????????? ???? ???? ????????????</a>
          </div>
        </div>
       
        </div>

      <script>

var base_url="<?php echo base_url(); ?>";

        function ahmed1(){

       document.getElementsByClassName("ahmed1").style.display = "block";




        }
      </script>



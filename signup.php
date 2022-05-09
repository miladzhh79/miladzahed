<?php
if(session_id() == ''){
    //session has not started
    session_start();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1">
<link href="js/aos-master/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-rtl.css">
<link rel="stylesheet" href="css/style.css">
<title>ثبت نام</title>
</head>

<body id="bodyy">
<div class="main-navbar navbar-fixed-top" style="font-style: normal">
   <div class="navbar navbar-default">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <div class="collapse navbar-collapse" id="myNavbar" >
         <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">خانه</a></li>
            <li><a href="login.php">ورود</a></li>
            <li><a href="signup.php"  style=" color:#008C59 "><b>ثبت نام</b></a></li>
            <li><a href="action-order.php">ثبت سفارش</a></li>
             <li><a>
                 <?php
                if(isset($_SESSION["login"]))
                 {
                    
               echo("نام کاربری"." : ".$_SESSION["login"]);
                      
                 }
                 ?>
                 </a></li>
         </ul>
      </div>
   </div>
</div>
<div class="logo"> <img src="image/logo.png" width="100px" height="auto" class="login_logo img-responsive">
   <div class="matn11">
      <p class="matn1">وب سایتی برای همه </p>
   </div>
</div>
<div class="login-box"  data-aos="fade-up-left" style="height: 370px">
   <div class="userdiv" style="margin-top: 20px">
      <form action="action_signup.php" method="post" onsubmit="return checkForm(this)">
         <input name="flname"  class="userbox" placeholder="نام و نام خانوادگی" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'نام و نام خانوادگی'"  required >
         <input name="birthday" type="text" class="userbox" placeholder="تاریخ تولد" onfocus="(this.type='date')"
onblur="this.type = 'تاریخ تولد'"  required >
         <input name="email" class="userbox" placeholder="ایمیل" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'ایمیل'"  required >
         <input name="username" class="userbox" placeholder="نام کاربری" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'نام کاربری'"  required >
         <input name="password" class="userbox" placeholder="رمز عبور" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'رمز عبور'"  required type="password">
          <input name="repassword" class="userbox" placeholder="تكرار رمز عبور" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'تكرار رمز عبور'"  required type="password">
          
         <button type="submit" class="voroud" onClick=sabtnam() >ثبت نام</button>
      </form>
   </div>
</div>
<div class="copyright">
   <p class="text-center" style="color: #909090 " >Copyright 2021 by Milad Zahed<br>
      All Rights Reserved</p>
</div>
    
</body>
    
<script src="js/aos-master/dist/aos.js"></script>
<script>
    
    function checkForm(form)
  {
      
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }

    if(form.password.value != "" && form.password.value == form.repassword.value) {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
       
    } else {
        
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }
 
 
    return true;
  }

    AOS.init();
     

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
  </script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

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
<title>سفارش</title>
</head>

<body id="bodyy">
<div class="main-navbar navbar-fixed-top" style="font-style: normal">
   <div class="navbar navbar-default">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <div class="collapse navbar-collapse" id="myNavbar" >
         <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">خانه</a></li>
            <li><a href="login.php">ورود</a></li>
            <li><a href="signup.php">ثبت نام</a></li>
            <li><a href="action-order.php" style=" color:#008C59 "><b>ثبت سفارش</b></a></li>
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
<div class="logo" > <img src="image/logo.png" width="100px" height="auto" class="login_logo img-responsive">
   <div class="matn11">
      <p class="matn1">وب سایتی برای همه </p>
   </div>
</div>
<div class="login-box"  data-aos="fade-up-left">
   <div class="userdiv" style="margin-top: 20px">
       <form action="action-order2.php" method="post">
      <input name="code" class="userbox" placeholder="کد سایت پیشنهادی از نمونه ها" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'کد سایت پیشنهادی از نمونه ها'"  required >
      <input name="date" type="text" class="userbox" placeholder=" تاریخ درخواستی تحویل سایت " onfocus="(this.type='date')"
onblur="this.type = 'تاریخ درخواستی تحویل سایت'"  required >
      <input name="salary" class="userbox" placeholder="بودجه پیشنهادی(ریال) " onfocus="this.placeholder = ''"
onblur="this.placeholder = 'بودجه پیشنهادی(ریال)'"  required >
      <textarea name="description" rows="4" cols="50" style="height: 90px;resize: none" class="userbox" placeholder="توضیحات"  onfocus="this.placeholder = ''"
onblur="this.placeholder = 'توضیحات'" ></textarea>
      <button type="submit" class="voroud" style="margin-top: 10px" onClick=sabtnam()>ثبت سفارش</button>
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

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
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-rtl.css">
<link rel="stylesheet" href="css/style.css">
    <link href="js/aos-master/dist/aos.css" rel="stylesheet">
<title>خانه</title>
</head>

<body id="bodyy">

    
<div class="main-navbar navbar-fixed-top" style="font-style: normal">
   <div class="navbar navbar-default">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <div class="collapse navbar-collapse" id="myNavbar" >
         <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php" style=" color:#008C59 "><b>خانه</b></a></li>
            <li><a href="login.php">ورود</a></li>
            <li><a href="signup.php">ثبت نام</a></li>
            <li><a href="action-order.php" >ثبت سفارش</a></li>
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
<div class="logo"  > <img src="image/logo.png" width="100px" height="auto" class="login_logo img-responsive">
   <div class="matn11">
      <p class="matn1">وب سایتی برای همه </p>
       
   </div>
</div>
     <div class="login-box" style="width: 1280px;height: 815px;margin-top: 20px"  data-aos="fade-down">  
      <img src="image/Ardot-rading.png" class="login-box" style="width: auto;height: auto"  >
  <div class="matn2" > <p class="matn2" style="color: #00AB6D">طراحی <a href="http://www.ardotrading.com/en" style="color: #00AB6D;text-decoration: none;"  >سایت آردو تریدینگ هلند</a></p>
      <p class="matn2" style="font-size: 20px">شرکت هلندی آردو تجارت پلی برای تجارت بین ایران و هلند ایجاد کرده و در این وبسایت امکانات استفاده از تولیدات و محصولات تولید کنندگان اروپایی مورد نمایندگی خود را معرفی نماید. از انتخاب و اعتماد این مجموعه بین المللی بسیار سپاسگزاریم.<br>کد سایت جهت سفارش :304</p>
      </div>
</div>
<div class="login-box" style="width: 1280px;height: 835px;margin-top: 30px" data-aos="fade-left">  
      <img src="image/pars-hotel.png" class="login-box" style="width: auto;height: auto"  >
  <div class="matn2" > <p class="matn2" style="color: #00AB6D">طراحی <a href="http://www.pars-hotels.com/" style="color:#00AB6D;text-decoration: none;"  > سایت گروه هتل های پارس</a></p>
      <p class="matn2" style="font-size: 20px">گروه هتل های پارس با 6 هتل بین المللی 5 ستاره در ایران یکی از بزرگترین گروه های هتلداری در کشورمان میباشد. وبسایت این مجموعه بصورت پرتال اصلی و زیر پرتال های هر هتل طراحی شده است. بهمراه ماژولهای اختصاصی چون پیشنهاد های ویژه، نظر سنجی مشتریان و ...<br>کد سایت جهت سفارش :109</p>
      </div>
</div>
    <div class="login-box" style="width: 1280px;height: 865px;margin-top: 30px" data-aos="fade-up">  
      <img src="image/Istilik.png" class="login-box" style="width: auto;height: auto"  >
  <div class="matn2" > <p class="matn2" style="color: #00AB6D">طراحی <a href="http://www.istilik.com/" style="color: #00AB6D;text-decoration: none;"  > وبسایت کارخانه ایستیلیک</a></p>
      <p class="matn2" style="font-size: 20px">کارخانه صنایع ایستیلیک یکی از پر آوازه ترین مجموعه های تولید انواع سیستم گرمایشی صنعتی، مخازن گاز و کارواش های نانو بخار در ایران میباشد. این مجموعه با رویکرد کیفیت جهانی صادر کننده انواع محصولات خود به سایر کشور ها نیز میباشد.
افتخار مشاوره انتخاب نام برند، طراحی لوگو، طراحی کاتالوگ و طراحی وبسایت این مجموعه صنعتی بزرگ را داریم.<br>کد سایت جهت سفارش :412</p>
      </div>
</div>
   <div class="login-box" style="width: 1280px;height: 840px;margin-top: 30px" data-aos="fade-down" >  
      <img src="image/Basit-shop.png" class="login-box" style="width: auto;height: auto"  >
  <div class="matn2" > <p class="matn2" style="color: #00AB6D">طراحی <a href="https://www.basitkala.com/" style="color: #00AB6D;text-decoration: none;"  > وبسایت اینترنتی بسیط کالا</a></p>
      <p class="matn2" style="font-size: 20px">محصولات بسیط همیشه با کیفیت هستند و با رویکرد مشتری مداری کار میکنند و مشتریان فروشگاه اینترنتی بسیط از سراسر ایران هستند.

انواع روش های پرداخت، سبد خرید پیشرفته، ماژول تخفیف و کمپین و ماژول همکاری در فروش از ماژول های بکار رفته در طراحی فروشگاه اینترنتی بسیط کالا میباشد.<br>کد سایت جهت سفارش :512</p>
      </div>
</div>
<div class="copyright" >
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

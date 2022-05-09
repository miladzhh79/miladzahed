<?php
if(session_id() == ''){
    //session has not started
    session_start();
}
if(isset($_SESSION["login"]))
{
    include("order.php");
}
else {
    echo '<script>alert("ابتدا باید وارد شوید ")</script>';
         include( "login.php" );
}
?>
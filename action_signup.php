<?php
if(session_id() == ''){
    //session has not started
    session_start();
}
include 'db_connection.php';

$conn = OpenCon();
if ( isset( $_POST[ 'flname' ] ) && !empty( $_POST[ 'flname' ] ) &&
   isset( $_POST[ 'birthday' ] ) && !empty( $_POST[ 'birthday' ] ) &&
   isset( $_POST[ 'email' ] ) && !empty( $_POST[ 'email' ] ) &&
   isset( $_POST[ 'username' ] ) && !empty( $_POST[ 'username' ] ) &&
   isset( $_POST[ 'password' ] ) && !empty( $_POST[ 'password' ] ) &&
   isset( $_POST[ 'repassword' ] ) && !empty( $_POST[ 'repassword' ] )
) {
    $sql = "SELECT * FROM user  ";
    
   $result=mysqli_query($conn,$sql);
    $flag=0;
           while ($row = $result->fetch_assoc()) {
   if( $row['user-name']==$_POST[ 'username' ])
   {
       CloseCon( $conn );
         echo '<script>alert("یوزر نیم وارد شده قبلا توسط کاربران دیگر انتخاب شده است ")</script>';
         include( "signup.php" );
   }
           }
   if (filter_var  ( $_POST[ 'email' ], FILTER_VALIDATE_EMAIL ) == true ) {
      if ( $_POST[ 'password' ] == $_POST[ 'repassword' ] ) {
         $flname = $_POST[ 'flname' ];
         $birthday = $_POST[ 'birthday' ];
         $email = $_POST[ 'email' ];
         $username = $_POST[ 'username' ];
         $password = $_POST[ 'password' ];
$sql = "INSERT INTO user VALUES ('$flname',  '$email','$username','$password','$birthday')";
          if(mysqli_query($conn,$sql) ==true)
          {
              CloseCon( $conn );
         echo '<script>alert("ثبت نام شما با موفقیت انجام شد ")</script>';
         include( "login.php" );
          }
         
      } else {
         CloseCon( $conn );
         echo '<script>alert("پسورد با تكرار پسورد همخواني ندارد  ")</script>';
         include( "signup.php" );
      }
   } 
    else {
      CloseCon( $conn );
      echo '<script>alert("قالب ايميل صحيح نيست ")</script>';
      include( "signup.php" );
   }
    //////////
} else {
   if ( $_POST[ 'password' ] == $_POST[ 'repassword' ] ) {
      echo '<script>alert("ديتاي خالي ارسال شده  ")</script>';
   }

}


?>
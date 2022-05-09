<?php
if(session_id() == ''){
    //session has not started
    session_start();
}
include 'db_connection.php';

$conn = OpenCon();
if ( 
   isset( $_POST[ 'username' ] ) && !empty( $_POST[ 'username' ] ) &&
   isset( $_POST[ 'password' ] ) && !empty( $_POST[ 'password' ]  )
) { 
  
         $username = $_POST[ 'username' ];
         
         $password = $_POST[ 'password' ];
   
    
$sql = "SELECT * FROM user  ";
    
   $result=mysqli_query($conn,$sql);
    $flag=0;
           while ($row = $result->fetch_assoc()) {
   if( $row['user-name']==$username && $row['password']==$password)
   {
      
       CloseCon( $conn );
       $flag=1;
       $_SESSION["login"]=$row['first-last-name'];
         echo '<script>alert("شما وارد شدید به عنوان '.$username.' ")</script>';
         include( "index.php" );
   }
               
}
if($flag==0){
                   echo '<script>alert(" ایمیل یا پسورد اشتباه وارد شده (کاربر یافت نشد )" )</script>';
                   include("login.php");
               }         
          

} else {
   if ( $_POST[ 'password' ] == $_POST[ 'repassword' ] ) {
      echo '<script>alert("ديتاي خالي ارسال شده  ")</script>';
   }

}


?>
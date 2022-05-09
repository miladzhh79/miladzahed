<?php
if(session_id() == ''){
    //session has not started
    session_start();
}
include 'db_connection.php';

$conn = OpenCon();
if ( isset( $_POST[ 'code' ] ) && !empty( $_POST[ 'code' ] ) &&
   isset( $_POST[ 'date' ] ) && !empty( $_POST[ 'date' ] ) &&
   isset( $_POST[ 'salary' ] ) && !empty( $_POST[ 'salary' ] ) &&
   isset( $_POST[ 'description' ] ) && !empty( $_POST[ 'description' ] ) 
) {
    $sql = "SELECT * FROM orders  ";
    
   $result=mysqli_query($conn,$sql);
    $flag=0;
           while ($row = $result->fetch_assoc()) {
   if( $row['code']==$_POST[ 'code' ] && $_SESSION["login"]==$row['username'])
   {
       CloseCon( $conn );
         echo '<script>alert("سفارش تکراری است قبلا ثبت شده ")</script>';
         include( "order.php" );
       $flag=1;
   }
           }
    if($flag!=1)
    {
        $code=$_POST['code'];
        $date=$_POST['date'];
        $salary=$_POST['salary'];
        $description=$_POST['description'];
        $username=$_SESSION["login"];
       $sql = "INSERT INTO orders VALUES ('$username',  '$code','$date','$description','$salary')";
          if(mysqli_query($conn,$sql) ==true)
          {
              CloseCon( $conn );
         echo '<script>alert("سفارش شما با موفقیت ثبت شد ")</script>';
         include( "index.php" );
          } 
    }
   

         
      
    //////////
} else {
   {
      echo '<script>alert("ديتاي خالي ارسال شده  ")</script>';
        include( "order.php" );
   }

}


?>
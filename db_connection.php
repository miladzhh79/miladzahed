<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "project";
 $dbpass = "123@qweQ";
 $db = "project";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>
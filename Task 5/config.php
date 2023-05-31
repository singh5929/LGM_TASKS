<?php
 $host="localhost";
 $dbusername="root";
 $dbpassword="";
 $dbanme="student_result";
 $conn=mysqli_connect($host, $dbusername, $dbpassword, $dbanme);

 if(!$conn)
 {
     echo "Server is not connected";
 
 }
 
?>
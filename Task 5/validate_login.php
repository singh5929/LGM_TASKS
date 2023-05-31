<?php
session_start();
if(!empty($_POST["remember"])) {  
  setcookie ("username",$_POST["uname"],time()+ 60*60*24*30,'/');  
  setcookie ("password",$_POST["psw"],time()+ 60*60*24*30,'/');  
// echo "Cookies Set Successfuly"; 
} 
else 
{  
 setcookie("username","");  
 setcookie("password","");  
 //echo "Cookies Not Set"; 
} 

include 'config.php';
 


       $uname=$_POST['uname'];
       $psw=$_POST['psw'];

       $sql="select * from admin_register where Username='$uname' &&  Password='$psw' ";

       $result=mysqli_query($conn, $sql);
       $row=mysqli_num_rows($result);

       if($row==1){
        header('location:admin_dash.php');

       }

       else{
       
        $message = "LOGIN FAILED DUE TO WRONG CREDENTIALS !!! ";
       echo "<script type='text/javascript'>alert('$message');</script>";
    
         header('location:login.html');
            
        }


?>
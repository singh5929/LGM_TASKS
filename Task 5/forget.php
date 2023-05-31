<!DOCTYPE html>
<html>
    <head>
         <style>
         .reset{
            margin-left: 20%;
         }
         input{
           margin-bottom:6px;
           height:30px;
           width:320px;
           border:none;
           background-color: rgb(235, 233, 233);
           box-shadow: 1px 1px 1px 1px black;
           border-radius:10px;
         }
         #rst_psw{
            margin-top:10px;
            margin-left:8%;
            height:80px;
            width:120px;
            border:none;
            border-radius: 50%;
            background-color: lightgray;
            box-shadow: 1px 1px 1px 1px black;
         }
         </style>
         <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div >
            <img src="vit.png" alt="vit_pic" height="440px" width="1480px">
            <div class="txt">
                <h1>Student Result Managemant System</h1>
              </div>

              <div class="link">
                <a href="form.html">Home</a>
                <a href="contact.html">Contact us</a>
                <a href="result.php">Result</a>
                <a href="login.php">Login</a>
            </div>
        </div>
         
        <form method="post">
        <div class="reset">
           <h2>Reset Password</h2>
           <input type="text" name="uname" id="uname" placeholder="Username"><br>
           <input type="password" name="psw" id="psw" placeholder="Password"><br>
           <input type="password" name="n_psw" id="n_psw" placeholder="New Password"><br>
           <input type="submit" name="reset" id="rst_psw" value="RESET">
          </div> 

        </form>
     
    </body>
</html>
<?php
  
     include 'config.php';

       $uname=$_POST['uname'];
       $psw=$_POST['psw'];
        $n_psw=$_POST['n_psw'];

        if($psw!=$n_psw)
        echo "<script type='text/javascript'>alert('Password doesnt match!!!');</script>";

        else{
            $sql="update admin_register set Password='$psw' where Username='$uname'";

            $query=mysqli_query($conn,$sql);
       
            if($query){
               $msg="Password Reset Successful!!!";
               echo "<script type='text/javascript'>alert('$msg');</script>";
              
               
              }
              else{
              $msg="Password Reset Failed!!!";
              echo "<script type='text/javascript'>alert('$msg');</script>";
             
              }
        }
    
?>
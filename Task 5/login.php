<!DOCTYPE html>
<html>
    <head>
        <style>
            h2{
                margin-left:20%;
            }
            #name{
                margin-left:20%;
                font-weight: 700;
                font-size: 22px;
            }
            #uname{
                height:40px;
                width:260px;
                border-radius: 10px;
                border:none;
                background:rgb(234, 233, 233);
                box-shadow: 1px 1px 1px 1px gray;
            }
            #pass{
                margin-left:5%;
                font-weight: 700;
                font-size: 22px;
            }
            #psw{
                height:40px;
                width:260px;
                border-radius: 10px;
                border:none;
                background:rgb(234, 233, 233);
                box-shadow: 1px 1px 1px 1px gray;
            }
            #remember{
                margin-left:30%;
                margin-top:40px;
            }
            #btn{
              
                margin-left:48%;
                height:80px;
                width:6%;
                font-size: 24px;
                border-radius:50%;
                background-color: green;
                border:none;
                color:white;
                cursor:pointer;
                box-shadow: 1px 1px 3px 3px lightgreen;
            }
            #btn:hover{
                color:black;
            }
            p{
                margin-left: 35%;
                font-size:18px;
            }
            p a{
                text-decoration: none;
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
           <h2>Login to your Account</h2>

           <form action="validate_login.php" method="post">
                  
                    <label for="uname" id="name">Username:</label>
                    <input type="text" name="uname" id="uname" value="<?php if(isset($_COOKIE["username"])) { 
                        echo $_COOKIE["username"]; } ?>" >

                    <label for="psw" id="pass">Password:</label>
                    <input type="password" name="psw" id="psw" value="<?php if(isset($_COOKIE["password"])) { 
                                               echo $_COOKIE["password"]; } ?>"><br>
                <input type="checkbox" checked="checked" id="remember" name="remember"> Remember me   <br>
                    <input type="submit" name="login_btn" id="btn" value="Log in">
           </form>
              <p>forget password?<a href="forget.php">click here</a></p>
    </body>
</html>
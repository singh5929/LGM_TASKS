<!DOCTYPE html>
<html>
    <head>
        <style>
            #admin_h2{
                margin-left: 15%;
             }
             p button{
                margin-left: 15%;
                background-color: rgb(43, 177, 222);
                width:340px;
                padding:10px;
                font-size: 20px;
                border-radius: 10px;
                border:none;
                box-shadow: 1px 1px 2px 2px lightgray;
                cursor:pointer;
             }
             .left{
                float:left;
                display:inline;
             }
             .form_addRes{

                margin-left:40%;
                height:280px;
                width:580px;
                background-color: lightgray;
                border-radius: 10px;
                display:none;
             }
             .form_addRes h2{
                padding-top:12px;
                 text-align:center;
             }
            .form_addRes input{
                margin-left:5%;
               margin-bottom: 15px;
               width:220px;
                height:30px;
               border:none;
               border-radius: 10px;
               box-shadow: 1px 1px 1px 1px black;
               background-color: white;

             }
             #add_btn{
                margin-left:40%;
                margin-top:10px;
                height:60px;
                width:80px;
                border-radius: 50%;
                background-color: green;
                color:white;
                cursor:pointer;
               box-shadow: 1px 1px 3px 3px lightgreen;
             }
             #success{
                display: inline;
                margin-left:30%;
                background-color: rgb(16, 107, 16);
                color:white;
                
             }
             #fail{
                display: inline;
                margin-left:0;
                background-color: red;
                color:white;
               
             }
             .update{

                margin-left:40%;
                height:280px;
                width:580px;
                background-color: lightgray;
                border-radius: 10px;
                display:none;
             }
             .update h2{
                padding-top:12px;
                 text-align:center;
             }
            .update input{
               margin-left:20%;
               width:340px;
               margin-bottom: 15px;
                height:30px;
               border:none;
               border-radius: 10px;
               box-shadow: 1px 1px 1px 1px black;
               background-color: white;
             }
             #upd_btn{
               margin-left:40%;
               margin-top:4px;
                height:60px;
                width:80px;
                border-radius: 50%;
                background-color: green;
                color:white;
                cursor:pointer;
               box-shadow: 1px 1px 3px 3px lightgreen;
             }
        </style>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div >
            <img src="vit.png" alt="vit_pic" height="420px" width="1480px">
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
          <div class="left">
            <h2 id="admin_h2">Admin DashBoard</h2>
             <p><button id="add_res" onclick="addResult()">Add Result</button></p>
             <p><button id="upd_res" onclick="updResult()">Update Result</button></p>
             <p><button id="logout"><a href="logout.php" style="text-decoration:none;color:black;">Logout </a></button></p>

          </div>
          <p id="success"><?php if (isset($_GET['text1'])){
                                $text=$_GET['text1'];
                                echo $text;}  
                   
                                if (isset($_GET['text3'])){
                                 $text=$_GET['text3'];
                                 echo $text;}  
                   ?></p>

                   <p id="fail"><?php if (isset($_GET['text2'])){
                               $text=$_GET['text2'];
                                echo $text; }
                                
                                if (isset($_GET['text4'])){
                                 $text=$_GET['text4'];
                                  echo $text; }

                                ?></p>

              <form action="add_result.php" method="post">
             

                <div class="form_addRes" id="form_addRes">
                    <h2>Add Result</h2>


                      <input type="text" name="std_name" id="std_name" placeholder="student name">
                      <input type="text" name="std_roll" id="std_rol" placeholder="student roll no"><br>
                      <input type="text" name="subj" id="subj" placeholder="subject">
                     
                      <input type="text" name="obtn_marks" id="obtn_marks" placeholder="obtained marks">
                      <input type="text" name="full_marks" id="full_marks" placeholder="full marks"><br>
       
                         <input type="submit" name="add_stuRes" id="add_btn" value="ADD">
                 </div>
              </form>
              
              <form action="update_result.php" method="post">

                  <div class="update" id="upd_form">

                  <h2>Update Result</h2>

                  <input type="text" name="std_roll" id="std_rol" placeholder="student roll no"><br>
                      <input type="text" name="subj" id="subj" placeholder="subject"><br>
                     
                      <input type="text" name="obtn_marks" id="obtn_marks" placeholder="obtained marks"><br>

                      <input type="submit" name="upd_stuRes" id="upd_btn" value="UPDATE">
                  </div>
              </form>
             
    </body>
</html>
<script>

        function addResult(){
            console.log("clicked!!");
        var x=document.getElementById('form_addRes');
        console.log(x.style.display);
   
        var y=document.getElementById('add_res');
        console.log(y.style.backgroundColor);

        if (x.style.display == "none" || x.style.display == "")
           {
            x.style.display='block';
            y.style.backgroundColor="gray";
           } 
        else{
            x.style.display='none';
            y.style.backgroundColor="rgb(43, 177, 222)";
        }
          

        }

        function updResult(){
            console.log("clicked!!");
        var x=document.getElementById('upd_form');
        console.log(x.style.display);
   
        var y=document.getElementById('upd_res');
        console.log(y.style.backgroundColor);

        if (x.style.display == "none" || x.style.display == "")
           {
            x.style.display='block';
            y.style.backgroundColor="gray";
           } 
        else{
            x.style.display='none';
            y.style.backgroundColor="rgb(43, 177, 222)";
        }
          

        }
</script>
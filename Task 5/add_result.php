<?php
 include 'config.php';


  if(isset($_POST['add_stuRes'])){

     $name=$_POST['std_name'];
     $roll=$_POST['std_roll'];
     $subj=$_POST['subj'];
     $o_mark=$_POST['obtn_marks'];
     $f_mark=$_POST['full_marks'];
     

     $sql="insert into student_result (Name,ROll_No,Subject,Obtained_Mark,Full_Mark)
                   values('$name','$roll','$subj','$o_mark','$f_mark')";

                   $query=mysqli_query($conn,$sql);

                   if($query){
                    //$msg="Result Added Successful!!!";
                    //echo "<script type='text/javascript'>alert('$msg');</script>";
                    header('location:admin_dash.php?text1="Result Added Successful!!!"');
                    
                   }
                   else{
                   // $msg="Failed to Add Result!!!";
                   // echo "<script type='text/javascript'>alert('$msg');</script>";
                    header('location:admin_dash.php?text2="Failed to Add Result!!!"');
                   }
                  
  }
?>
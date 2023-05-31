<!DOCTYPE html>
<html>
    <head>
<style>
  form{
      margin-left:15%;
      float:left;
  }
  input,b{
    margin-top:20px;
  }
  #roll{
    height:35px;
    width:320px;
    background:lightgray;
    border:none;
  border-radius: 10px;
    box-shadow: 1px 1px 1px 1px black;
  }
  #show{
    height:45px;
    width:180px;
    font-size:24px;
    border:none;
    border-radius: 10px;
    background-color:lightblue;
    cursor: pointer;
    box-shadow: 1px 1px 1px 1px blue;
  }
  table{
    margin-left:45%;
  }
  .right{
    margin-left:45%;
    height:60px;
    width:513px;
    background-color:lightgray;
    font-weight: 700;
    padding-left: 8px;
  }
  th{
    background-color: rgb(51, 145, 253);
    padding:6px 18px;
  }
  td{
    text-align: center;
  }
  tr:nth-child(odd){
    background-color: lightblue;
  }
  tr:nth-child(even){
       background-color: lightgray;
    }
</style>
<link rel="stylesheet" href="style.css">
    </head>
    <body>
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

          <form action="" method="post">

             <b>Enter Roll No.:</b><br>
             <input type="text" name="roll" id="roll"><br>
             <input type="submit" name="show" id="show" value="Show Result">
          </form>

          <?php
            include 'config.php';
                 $c=1;
               if(isset($_POST['show'])){

                
                $roll=$_POST['roll'];

                $s="select Name from student_result where Roll_No='$roll'";
                $q = mysqli_query($conn, $s);
                $result=mysqli_fetch_assoc($q);
               
                while($c==1){
                  $name=$result['Name'];
                 $c++;
                  ?>
                     <div class="right">
                      <p>Name:<?php echo $name; ?></p>
                      <p>Roll No.:<?php echo $roll; ?></p>
                     </div>
                  <?php
                }
                
                
              $sql="select * from student_result where Roll_No='$roll'";

              function view($conn, $sql, $row){
                $i=1;$remark="";
                if($query = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($query) > 0){
                        while($res = mysqli_fetch_array($query)){
                            $subj  = $res['Subject'];
                            $o_mark = $res['Obtained_Mark'];
                            $f_mark = $res['Full_Mark'];
                           
                             if($o_mark<40)
                                $remark="FAIL";
                              else
                                $remark="PASS";
        
                            $row = $row."<tr>
                              <td>$i</td>
                                <td>$subj</td>
                                <td>$o_mark</td>
                                <td>$f_mark</td>
                                <td>$remark</td>
                                </tr>";
                                $i++;
                        }
                        mysqli_free_result($query);
                    }
                }
                return $row;
            }
            $s = view($conn, $sql, "");
            echo "<table>
            <tr>
            <th>S.NO.</th>
              <th>Subject</th>
              <th>Obtained Mark</th>
              <th>Full Mark</th>
              <th>Remarks</th>
            </tr>".$s."
            </table>";


               }
     ?>

        
          
    </body>
</html>
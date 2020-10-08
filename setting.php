<!DOCTYPE html>
<html>
        <head>
        	<meta http-equiv='refresh' content='20'>
                <style type="text/css">
        body{
        background-image: url("hospitall.jpg");
        
        background-size: 100% 100%
       background-repeat: no-repeat;
         /*position: absolute;*/
        /* left: 10%;*/
     margin: center;
     border: 100px;
     /*border-color: black;*/
         /*transform: translate(-30%,-30%);*/
    
/*       background-size:90% 90%;
*/      /* box-shadow: 1px 1px  #cc9999;
         animation: slider 10s infinite linear;*/
 }
/* @keyframes slider{
          0%{background-image: url('eiadat.jpeg');}
          35%{background-image: url('owda.jpeg');}
          75%{background-image: url('enaia.jpeg');}

          
 }*/
 form{
        margin-left: 400px;
        margin-top: 100px;
 }
</style>
        </head>
	<body>
       
 <form method="post">
        <select name="x" onchange="this.form.submit()" style="width: 500px; height: 50px;">
         <option selected disabled>Select Capture</option> 

             <?php
              include 'database connection.php';
              $con=dbconnect();
              $sql="SELECT * FROM users ";
              // Line2
              $res = $con -> query($sql);
              while($row = $res -> fetch_assoc()){
                $x = $row['name']; //Line3
                echo "<option> $x </option>";
              }
             ?>
            </select> <br>
      <?php 
            if(isset($_POST["x"]))
      {
        $a = $_POST["x"];
        $sql = "SELECT * FROM users WHERE name='$a'";
        $res = $con -> query($sql);
        $row = $res -> fetch_assoc();
        $b = $row["password"];
        $c = $row["admisions"];

        echo "name: <input name='x2' value='$a' readonly><br>";
        echo "password: <input name='y' value='$b'><br>";
        echo "admisions: <input name='z' value='$c'><br>";
        echo "<input type='submit' name='update' value ='Update'><br>";
      }
      ?>
      </form>

      <?php
       if (isset($_POST['update'])) //Line 7
       {
         $x = $_POST['x2'];
         $y = $_POST['y']; //Line 8
         $z = $_POST['z']; //Line 9

         $sql = "UPDATE users SET password = $y, admisions='$z' WHERE name='$x'"; //Line 10

         if($con -> query($sql)==TRUE)
         {
           echo "Updated successfully";

      
         $con = dbconnect();
         $sql="SELECT * FROM ".TABLE_NAME ;
         $res=$con->query($sql);
         tableDisplay($res);
         $con->close();
        
         }
         else
         {
                echo "Error";

        
         $con = dbconnect();
         $sql="SELECT * FROM ".TABLE_NAME ;
         $res=$con->query($sql);
         tableDisplay($res);
         $con->close();
         
         }
       }//end if isset
      ?>
      
	</body>
</html>
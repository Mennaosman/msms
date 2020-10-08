

   <!-- // session_start();
  

   // echo  $_SESSION['Patientname']." "." "." "." ";
   // echo "Patient id :".$_SESSION['Patientid']." "." ";
   // echo "Patient no:".$_SESSION['c']." "." "."<br>";


   // echo "doctor name:".$_SESSION['doctor'];
   // echo $_SESSION['department']; -->
  
   <!DOCTYPE html>
<html>
   <head>
	 <meta http-equiv="refresh" content="60">
   </head>
    <body>
       
 <form method="post">
        <select name="x" onchange="this.form.submit()" style="width: 500px; height: 50px;">
         <option selected disabled>Select patient</option> 

             <?php
              include 'database connection.php';
              $con=dbconnect();
              $sql="SELECT id,name,payment_method,relative_relation,department AND doctor FROM  patient";
              // Line2
              $res = $con -> query($sql);
              while($row = $res -> fetch_assoc()){
                $x = $row['id']; //Line3
                echo "<option> $x </option>";
              }
             ?>
            </select> <br>
      <?php 

            if(isset($_POST["x"]))
      {
        $a = $_POST["x"];
        $sql = "SELECT name,payment_method,relative_relation,department AND doctor FROM patient WHERE id=$a";
        $res = $con -> query($sql);
        $row = $res -> fetch_assoc();
        
        $b = $row["name"];
        $c = $row["payment_method"];
        $z = $row["relative_relation"];


        echo "id: <input name='x' value='$a' readonly><br>";
        echo "name: <input name='y' value='$b'><br>";
        echo "payment_method: <input name='z' value='$c'><br>";
         echo "relative_relation: <input name='m' value='$z' readonly><br>";
        echo "Department:<select name='n'><br>";
        echo "<option>Lab</option>";
         echo "   <option>Ray</option>";
           echo  "<option>Natural therapy</option>";
            echo "<option>Clinics</option>";
          echo  "</select><br><br>";

     
       $con = dbconnect();
       $sql = "SELECT DISTINCT drname,drdepartment FROM Doctors"; // Line1
       $res = $con -> query($sql);
   
        echo "doctor:<select name='o'>";
        echo "<option selected disabled> Select Dector's Name</option>";
        

      while($row = $res -> fetch_assoc()){
          $x = $row['drname'];
          $y = $row['drdepartment'];
          echo "<option> $x ($y) </option>";
        }
       echo "</select> <br> <br>";
        echo "<input type='submit' name='update' value ='Update'><br>";
      }
      ?>
      </form>

      <?php
       if (isset($_POST['update'])) //Line 7
       {
         $x = $_POST['x'];
         $y = $_POST['y']; //Line 8
         $z = $_POST['z']; //Line 9
         $m = $_POST['m'];
         $n = $_POST['n']; //Line 8
         $o = $_POST['o']; //Line 9
         $sql = "UPDATE patient SET name='$y', payment_method = '$z',relative_relation='$m' ,department='$n' , doctor='$o' WHERE id=$x "; //Line 10

         if($con -> query($sql)==TRUE)
         {
           echo "Updated successfully";

      
         $con = dbconnect();
         $sql="SELECT * FROM ".TABLE ;
         $res=$con->query($sql);
         Display($res);
         $con->close();
        
         }
         else
         {
        echo "Error";

        
         // $con = dbconnect();
         // $sql="SELECT * FROM ".TABLE ;
         // $res=$con->query($sql);
         // Display($res);
         // $con->close();
         
         }
       }//end if isset
      ?>
      
  </body>

</html>






<!--  //  echo  $_SESSION['Patientname'];

 //  echo $_SESSION['Patientid'];
 -->
<!--  //  echo $_SESSION['Patientage'];
  
 //  echo $_SESSION['payment_method'];
  
 //  echo $_SESSION['relative_relation'];
 
 // echo  $_SESSION['Patienphone'];
  
 //  echo $_SESSION['department'];
   
 //  echo $_SESSION['doctor'];
    
 //  echo	$_SESSION['counter']; -->

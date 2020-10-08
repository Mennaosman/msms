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
     
       if (isset($_POST['update'])) //Line 7
       {
         $x = $_POST['x2'];
         $y = $_POST['y']; //Line 8
         $z = $_POST['z']; //Line 9

         $sql = "UPDATE users SET password = $y, admisions=$z WHERE name='$x'"; //Line 10

         if($con -> query($sql)==TRUE)
         {
           echo "Updated successfully";
         }
         else
         {
                echo "Error";
         }
       }//end if isset
      ?>
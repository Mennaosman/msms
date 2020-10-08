<h3>Enter Patient Data:</h3>
<form method="POST" action="patient.php">
Patient Id:<input type="text" name="Patientid"><br>
Patient Name:<input type="text" name="Patientname"><br>
Patient edge:<input type="text" name="Patientage"><br>
Patient phone number:<input type="text" name="Patienphone"><br>
-------------------------------------------------------------<br>
Relative Relation:<select name="relative_relation"><br>
			  <option>Himeself</option>
	          <option>mother</option>
	          <option>father</option>
	          <option>husband</option>
	          <option>wife</option>
	          <option>son</option>
	          <option>daughter</option>
           </select><br>
payment method:<select name="payment_method"><br>
	<option selected disabled>check Payment method </option>
			  <option>Critically</option>
    <option selected disabled> check Company</option>
              <option>globmed</option>
	          <option>health insurance</option>
           </select><br>
Department:<select name="department"><br>
			  <option>Lab</option>
	          <option>Ray</option>
	          <option>Natural therapy</option>
	          <option>Clinics</option>
           </select><br>

Dr:      
	        <?php                               
         include 'database connection.php';
	     $con = dbconnect();
	     $sql = "SELECT DISTINCT drname,drdepartment FROM Doctors"; // Line1
	     $res = $con -> query($sql);
   
      	echo "<select name='doctor'>";
        echo "<option selected disabled> Select Dector's Name</option>";
        

	    while($row = $res -> fetch_assoc()){
	      	$x = $row['drname'];
	      	$y = $row['drdepartment'];
	      	echo "<option> $x ($y) </option>";
	      }
	     echo "</select> <br> <br>";
       
	        ?>
	     <input type="submit" value="save"  style="margin-left: 150px;">
	       
                  
</form>







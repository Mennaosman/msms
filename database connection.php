<?php
function dbconnect()
	{
		$con = new mysqli("mysql.aba.ae","publish1515","Z6771714t#o", "mennaosman123");
	    if($con->connect_error)
	    {
	    	die("Connection Error");
	    }
	    return $con;
	}
	    const TABLE_NAME ="users";
	    const TABLE="patient";
	    function tableDisplay($res)
    {
	      if ($res -> num_rows >0)
	      {
	       echo "<table border='1' style='margin-left=600px;'>";                                                                             
	              echo  "<th>name</th>";
	              echo  "<th>password</th>";
	              echo  "<th>admisions</th>" ;
	             
		       while ($row=$res->fetch_assoc()) 
		       {
		       
		        $x = $row["name"];
		        	$y = $row["password"];
		        $z = $row["admisions"];
		        
		       	echo "<tr>";
		       	echo "<td>$x</td>";
		       	echo "<td>$y</td>";
		       	echo "<td>$z</td>";    
		       	echo "</tr>";
		       }
		    echo "</table>"; 
	      }
	     else //num rows =0
	     {echo "Table is empty";}
    }  
    function Display($res)
    {
	      if ($res -> num_rows >0)
	      {
	       echo "<table border='1' style='margin-left=600px;'>";                                                                                                                                                                 
	       echo "<th>id</th>";
	            echo " <th>name</th>";
	             echo "<th>payment_method</th>";
	              echo"<th>relative_relation</th>";
	             echo "<th>department</th>";
	             echo "<th>doctor</th>";
	               
	             
		       while ($row=$res->fetch_assoc()) 
		       {
		       	$x = $row["id"];
		        $y = $row["name"];
		        	$z = $row["payment_method"];
		        $m = $row["relative_relation"];
		        	$n = $row["department"];
		        $o = $row["doctor"];
		       	echo "<tr>";
		       	echo "<td>$x</td>";
		       	echo "<td>$y</td>";
		       	echo "<td>$z</td>";
		       	echo "<td>$m</td>";
		       	echo "<td>$n</td>";
		       	echo "<td>$o</td>";
		      
		       	echo "</tr>";
		       }
		    echo "</table>"; 
	      }
	     else //num rows =0
	     {echo "Table is empty";}
    }  
?>
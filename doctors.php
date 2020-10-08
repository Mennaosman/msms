<!DOCTYPE html>
<html>
        <head>
        	<meta http-equiv='refresh' content='5'>
        	<style type="text/css">
        		body{	background-image: url("hospitall.jpg");
	
	background-size: 100% 100%
    background-repeat: no-repeat;
 	 /*position: absolute;*/
 	/* left: 10%;*/
     margin: center;
     border: 100px;
     /*border-color: black;*/
 	 /*transform: translate(-30%,-30%);*/
    
/* 	 background-size:90% 90%;
*/   	 box-shadow: 1px 1px  #cc9999;
   	 animation: slider 10s infinite linear;
 }
 @keyframes slider{
 	  0%{background-image: url('eiadat.jpeg');}
 	  35%{background-image: url('owda.jpeg');}
 	  75%{background-image: url('enaia.jpeg');}

 	  
 }
 h1{
 	margin-top: 100px;
 }
 form{
 	margin-left: 500px;
 }
        	</style>
        </head>
	<body>
        <?php
         include 'database connection.php';
	     $con = dbconnect();
	     const TABLE_NAME ="assignment1";
    function tableDisplay($res)
    {
	      if ($res -> num_rows >0)
	      {
	       echo "<table border='1'>";                                                                                                                                                                 
	       echo "<th>drname</th>
	              <th>drdepartment</th>
	              <th>drAmedicalpains</th>";
		       while ($row=$res->fetch_assoc()) 
		       {
		       	$x = $row["drname"];
		        $y = $row["drdepartment"];
		       	$z = $row["drAmedicalpains"];
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
         $sql="SELECT * FROM ".TABLE_NAME ;
         $res=$con->query($sql);
         tableDisplay($res);
         $con->close();
         ?>
	</body>
</html>
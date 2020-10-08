
<?php
session_start();
  if ($_SERVER['REQUEST_METHOD']=='POST')
   {

   $x= $_POST['Patientid'];
   $_SESSION['Patientid']=$x;
    $p= $_POST['Patientname'];
   $_SESSION['Patientname']=$p;
   $y= $_POST['Patientage'];
   $_SESSION['Patientage']=$y;
   $pm= $_POST['payment_method'];
   $_SESSION['payment_method']=$pm;
   $b= $_POST['relative_relation'];
   $_SESSION['relative_relation']=$b;
   $z=$_POST['Patienphone'];
   $_SESSION['Patienphone']=$z;
  $m=$_POST['department'];
   $_SESSION['department']=$m;
   $n=$_POST['doctor'];
   $_SESSION['doctor']=$n;
   
   include'database connection.php';
	 $con = dbconnect();
	 // $_SESSION['c'];
  //     $c=$_SESSION['c'];
	  
	     
	 $sql = "INSERT INTO patient (id ,name , age,payment_method,relative_relation ,Patienphone,department,doctor)values ($x,'$p',$y,'$pm','$b',$z,'$m','$n')";
	        
	
	  
	 if($con->query($sql)==TRUE){

	    //   	$c++;

    
     // $_SESSION['c']=$c;
	 	echo "patient aleary inserted";

	 }
	  else{
	 	echo " there is an error";
	 }
	 $con->close();
	}


?>

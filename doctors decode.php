<head>
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
<h1 align="center">To Encode New Doctors</h1>
	<form method="POST"  action="<?php echo $_SERVER['PHP_SELF'];?>" >
     	Doctor name:<input type='text' name='drname'><br><br><br>
     	Doctor Department:<select name='drdepartment'><br><br><br>
     		 <option disabled>select the department</option>
		     <option name='surgery'>surgery</option>
		     <option name='inner'>inner</option>
		     <option name='nose and ear'>nose and ear</option>
		     <option name='bones'>bones</option>
		     <option name='Neurologists'>Neurologists</option>
		    <!--  <option name='rays'>rays</option>
		     <option name='clinices'>clinices</option> -->
   		 </select><br><br><br>
     	<input type='submit' value=' Encode'>
     </form>
<?php
session_start();
  if ($_SERVER['REQUEST_METHOD']=='POST')
   {
   	
   $x= $_POST['drname'];
   $_SESSION['drname']=$x;
   $y= $_POST['drdepartment'];
   $_SESSION['drdepartment']=$y;


   include'database connection.php';
	 $con = dbconnect();

	 $sql = "INSERT INTO Doctors values ('$x','$y')";
	 

	 if($con->query($sql)==TRUE){
	 	echo"the doctor is aleardy encoded";
	 }
	  else{
	 	echo "Error: try to change the user name ";
	 }
	 $con->close();
	}





?>
</body>
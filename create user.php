<head><style type="text/css">
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
<h1 align="center">Create New User</h1>
	<form method="POST"  action="<?php echo $_SERVER['PHP_SELF'];?>" >
     	User name:<input type='text' name='user'><br><br><br>
     	User Password:<input type='password' name='password'><br><br><br>
     	User admisions:<select name='admisions'><br><br><br>
     		 <option disabled>select the admision</option>
		     <option name='admin'>Admin</option>
		     <option name='accounts'>accounts</option>
		     <option name='receptions'>receptions</option>
		     <option name='apharmacy'>pharmacy</option>
		     <option name='laboratory'>laboratory</option>
		     <option name='rays'>rays</option>
		     <option name='clinices'>clinices</option>
   		 </select><br><br><br>
     	<input type='submit' value='Create the user'>
     </form>
 <?php
 
  session_start();
  if ($_SERVER['REQUEST_METHOD']=='POST')
   {
   	
   $x= $_POST['user'];
   $_SESSION['user']=$x;
   $y= $_POST['password'];
   $_SESSION['password']=$y;
   $z=$_POST['admisions'];
   $_SESSION['admisions']=$z;
  

   include'database connection.php';
	 $con = dbconnect();

	 $sql = "INSERT INTO users values ('$x','$y','$z')";
	 

	 if($con->query($sql)==TRUE){
	 	echo"the user is aleardy created";
	 }
	  else{
	 	echo "Record NOT Inserted";
	 }
	 $con->close();
	}

?>
</body>
<head>
  <style type="text/css">
    body{ background-image: url("hospitall.jpg");
  
  background-size: 100% 100%
    background-repeat: no-repeat;
   /*position: absolute;*/
  /* left: 10%;*/
     margin: center;
     border: 100px;
     /*border-color: black;*/
   /*transform: translate(-30%,-30%);*/
    
/*   background-size:90% 90%;
*/     box-shadow: 1px 1px  #cc9999;
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
    <h1 align="center">To Encode Services</h1>
	<form method="POST"  action="<?php echo $_SERVER['PHP_SELF'];?>" >
     	Service:<input type='text' name='service'><br><br><br>
     	price:<input type='text' name='sprice'><br><br><br>

     	<input type='submit' value='Encode'>
     </form>
<?php
session_start();
  if ($_SERVER['REQUEST_METHOD']=='POST')
   {
   	
   $x= $_POST['service'];
   $_SESSION['service']=$x;
   $y= $_POST['sprice'];
   $_SESSION['sprice']=$y;


   include'database connection.php';
	 $con = dbconnect();

	 $sql = "INSERT INTO prices values ('$x','$y')";
	 

	 if($con->query($sql)==TRUE){
	 	echo"this Service already added to database";
	 }
	  else{
	 	echo "Error: try again ";
	 }
	 $con->close();
	}





?>


?>
</body>
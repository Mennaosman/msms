 <!--  login form -->
 <head>
 	<link rel="stylesheet" type="text/css" >
 	<style type="text/css">
 		html{
 			margin: 0;
 			padding: 0;
 			width: 100%;
 			height: 100vh;
 		}
 		body{
 			margin: 0;
 			padding: 0;
 			width: 100%;
 			height: 100vh;
 			background:  url("images.jpg") 50% 50% no-repeat;
 			background-size: cover;
 			display: table;
 		}

 		.signin{
 			border: 1px solid rgba(255,255,255,0.3);
 			border-radius: 7px;
 			padding: 3em;
 			position: absolute;
 			top: 50%;
 			left: 50%;
		/*	transform: translateX(50%) translateY(50%);*/
        transform: translateX(-50%) translateY(-50%);
}
 		h2{
 			margin-top: 0px;
 			font-family: Source Sans Pro;
 			font-weight: lighter;
 			color: #fff;
 			font-size: 50px;
 			text-align: center;

 		}
 		input{
 			display: block;
 			width: 320px;
 			height:50px;
 			background:rgba(0,0,0,0.3); 
 			outline: none;
 			border: 1px solid rgba(0,0,0,0.5);
 			font-family: Source Sans Pro;
 			font-weight: lighter;
 				font-size: 14px;
             margin-bottom: 10px;
             padding-left: 10px;
             border-radius: 5px;
             

 		}
 		button{
 			width: 332px;
 			height: 50px;
 			font-size: 16px;
 			background: #000;
 			font-weight: lighter;
 			color: #fff;
 			border: 0px;
 			border-radius: 5px;

 		}

 	</style>
 </head>
<body>
<div class="container">
 <div class="signin">
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" name="page">
   		<h2>Sign In</h2>
	    <input type="text" name="username" value="" placeholder="Enter Username" class="x">
        <input type="password" name="userpassword" value="" placeholder="Enter Userpassword" class="x">
   
	 
         <button class="btn">Sign In</button>
     </form>
     </div>

     </div>
</body>
  <?php
		   session_start();
		   if ($_SERVER['REQUEST_METHOD']=='POST')
		   {
		   //to get the data from the login form
		    $username = $_POST['username'];
		    $userpassword=$_POST['userpassword'];
		    $_SESSION['username']=$username;
		    //database connection file
		      include'database connection.php';
		      //database connection function
			 $con = dbconnect();
		       // to search about the inter user name
			 $sql = "SELECT password,admisions FROM users WHERE name='$username'";    
		       $res=$con->query($sql);
		       // check function about the enter user 
			       function checkFunction($res ,$userpassword)
			    {
				      if ($res -> num_rows >0)
				      {
				         
					       while ($row=$res->fetch_assoc()) 
					       {
			                // if the user name found get its password and admisions
					       	$x = $row["password"];
					        $y = $row["admisions"];
					        $_SESSION['admisions']=$y;
					       
					       //check if the user password is right 
					       	if($x==$userpassword ){
			                    // the user page
								header('REFRESH:1;URL= login.php');
			                  }
			                  //if the user password is wrong
			                  elseif ($x!='$userpassword') {
			                  	echo  "Error: you enter a wrong password please try again ";
			                  }
					      } 
				       }
				      else //if there is not found the enter user
				      { echo "Sorry:there is no user called ";}
			    }  $con->close();
			     // calling the check function
			       checkFunction($res,$userpassword);
			       
			   }
			
   ?>
<style type="text/css">

	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
<?php
  session_start();
  if ($_SESSION['admisions']=="Admin") {
  	
    echo "<ul>";
    echo " <li>"."<a class='active' href='setting.php' target='pays'>Settings</a>"."</li>";

    echo "<li>"."<a  href='outer.php' target='pays'>outer patient</a>"."</li>";
    echo "<li>"."<a  href='body.php' target='pays'>Inner patient</a>"."</li>";
    // echo "<li>"."<a  href='employees.php' target='pays'>employees patient</a>"."<php/li>";
    echo "<li>"."<a href='doctors.php' target='pays'>Doctors</a>"."</li>";
    echo "<li>"."<a href='create user.php' target='pays'>Create Users</a>"."</li>";
    echo "<li>"."<a href='the prices.php' target='pays'>Encode services</a>"."</li>";
    echo "<li>"."<a href='doctors decode.php' target='pays'>Doctors</a>"."</li>";
 	echo "<li >"."<a  href='log.php' target='login'>Log Out</a>"."</li>";
	echo "</ul>";

   }
   elseif ($_SESSION['admisions']=="acount") {
   	echo "<ul>";
   	echo "<li>"."<a  href='employees.php' target='pays'>employees patient</a>"."</li>";
    echo "<li>"."<a href='doctors.php' target='pays'>Doctors</a>"."</li>";
      echo "<li >"."<a  href='log.php' target='log'>Log Out</a>"."</li>";
    echo "</ul>";
   }
    elseif ($_SESSION['admisions']=="pharmacy") {
    echo "<ul>";
   echo "<li>"."<a  href='body.php' target='pays'>Inner patient</a>"."</li>";
    echo "<li >"."<a  href='log.php' target='log'>Log Out</a>"."</li>";
    echo "</ul>";
   }
?>



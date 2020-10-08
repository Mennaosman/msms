<style type="text/css">
  
 div{
 	background-color: #111;
 }
</style>
<div style="color: white;">
<?php
     session_start();
         $_SESSION['date']=date("Y-m-d h:i:sa");
 		echo $_SESSION['username'];
 		echo "/";
 		echo $_SESSION['admisions']." "." ";
        echo "/";
        echo " ".$_SESSION['date'];
       
?>
</div>
<?php	   
	   $conn=mysqli_connect("localhost","root","","cart_system");
       $onn=$_REQUEST['id'];
       $que= mysqli_query($conn,"DELETE from product where id='$onn'");
	   if($que){
		echo "<br/>RECORD DELETED SUCCESSFULLY!!!";}
?>




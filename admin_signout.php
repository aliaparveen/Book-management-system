<?php
	session_start();
	session_destroy();

	echo	'<script>alert("logout successfully!")</script>' ;
	
	header("Location: admin.php");
	echo	'<script>alert("logout successfully!")</script>' ;
?>
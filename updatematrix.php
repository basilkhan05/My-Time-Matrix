<?php

	session_start();
	
	include("connection.php");

	$query = "UPDATE users SET Q1='".mysqli_real_escape_string($link, $_POST['Q1'])."', Q2='".mysqli_real_escape_string($link, $_POST['Q2'])."', Q3='".mysqli_real_escape_string($link, $_POST['Q3'])."', Q4='".mysqli_real_escape_string($link, $_POST['Q4'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";

	mysqli_query($link, $query);





?>



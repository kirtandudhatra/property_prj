<?php
	session_start();

	$_SESSION['user_type'] = "";
	$_SESSION['user_faculty'] = "";
	$_SESSION['user_branch'] = "";
	header("location: ../");

?>
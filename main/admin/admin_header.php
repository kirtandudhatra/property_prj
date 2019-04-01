<?php 
  session_start();
  if(!isset($_SESSION['user_type']))
    header('Location: ../../index.php');
  if($_SESSION['user_type'] != "admin")
    header('Location: ../../index.php');

	include('../connection.php');

?>
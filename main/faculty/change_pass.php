<?php

include('faculty_header.php');

if(isset($_POST["pass"])){

	//echo "<script>alert('Password!');</script>";

	if($_POST["pass"] != $_POST["c_pass"]){
		echo "<script>alert('Password Mismatch!');window.location.replace(\"index.php\");</script>";
		header("Location: change_pass.php");}
	

	$new_pass = $_POST['pass'];
	$uname = $_SESSION['user_name'];

	$sql = "UPDATE `user` SET `password` = '$new_pass' WHERE `uname` = '$uname' ";
	$conn->query($sql);

	echo "<script>alert('Password Changed');window.location.replace(\"index.php\");</script>";

}



?>

<html lang="en" style="background-color: #efefef;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../include/ddulogo.png">

    <title>Add -  DDU-assets</title>

    <!-- Bootstrap core CSS -->
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
  


  </head>

  <body style="background-color: #f47b29;">

  <?php 
      include('../../include/header.php');
      include('faculty_buttons.php');

    ?>

    <form action="change_pass.php" method="POST"  enctype="multipart/form-data">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="Category">New Password:</label>
                        <input type="password" name="pass" class="form-control" placeholder="New Password" required>

                      </div>

                      <div class="form-group">
                        <label for="Category">Confirm Password:</label>
                        <input type="password" name="c_pass" class="form-control" placeholder="Confirm Password" required>

                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>

                	</div>
    </form>
  </body>
</html>
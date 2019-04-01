<?php 
  include('admin_header.php');

  ?>
<?php

$uname = $_POST["user_name"];
$pass = $_POST["pass"];
$type = $_POST["type"];
$fac = isset($_POST["faculty"]) ? $_POST["faculty"] : '';
$dep = isset($_POST["department"]) ? $_POST["department"] : '';

if(isset($_POST["faculty"]))
{
	$sql = "INSERT INTO `user` VALUES ('','$uname','$pass',$type,'$fac','$dep')";
	$result = $conn->query($sql);
	echo $sql;
}
else
{
	$sql = "INSERT INTO `user` VALUES ('','$uname','$pass',$type,'admin','admin')";
	$result = $conn->query($sql);
	echo $sql."/";
}

echo "<script>alert('User added!!');window.location.replace(\"create_user.php\");</script>";

?>
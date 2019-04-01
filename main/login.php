<?php 
session_start();
include('connection.php');

$uname = $_POST["uname"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM `user` WHERE `uname` = '$uname' ";
$result = $conn->query($sql);

if( $result->num_rows != 1)
{
	echo "<script>alert('Invalid Username');window.location.replace(\"../index.php\");</script>";
}
else if($result->num_rows == 1)
{
	$row = $result->fetch_assoc();
	if($row["password"] == $pass)
	{
			if($row["type"] == 1)
			{
				$_SESSION['user_type'] = "admin";
/*				$_SESSION['login_name'] = $_POST["uname"];
				$_SESSION['login_pass'] = $_POST["pass"];*/
				
				if($_POST["uname"] == 'search1' && $_POST["pass"] == 'search1'){
					$_SESSION['role'] = "1";
					header("location: admin/search.php");
				}
				else if($_POST["uname"] == 'writeoff1' && $_POST["pass"] == 'writeoff1'){
					$_SESSION['role'] = "1";
					header("location: admin/scrap_lost.php");
				}
				else if($_POST["uname"] == 'approve1' && $_POST["pass"] == 'approve1'){
					$_SESSION['role'] = "1";
					header("location: admin/approve.php");
				}
				else{
					$_SESSION['role'] = "0";
					header("location: admin");
				}
			}
			else if($row["type"] == 2)
			{
				$_SESSION['user_type'] = "faculty";
				$_SESSION['user_faculty'] = $row["faculty"];
				$_SESSION['user_department'] = $row["department"];
				$_SESSION['user_name'] = $row["uname"];
				header("location: faculty");
			}
			else
			{
				$_SESSION['user_type'] = "student";
				$_SESSION['user_faculty'] = $row["faculty"];
				$_SESSION['user_department'] = $row["department"];
				header("location: student");
			}
	}
	else
	{
		echo "<script>alert('Invalid Password');window.location.replace(\"../index.php\");</script>";
	}
}

?>
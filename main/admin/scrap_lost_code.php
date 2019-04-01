<?php 
  include('admin_header.php');

?>
<?php
	if(isset($_POST["present"]))
	{
		$barcode = $_POST["present"];
		$sql = "UPDATE `assets_data` SET `stock_status` = 1 WHERE `barcode` = '$barcode' ";
		$result = $conn->query($sql);
		//echo $sql;
	}
	else if(isset($_POST["lost"]))
	{
		$barcode = $_POST["lost"];
		$sql = "UPDATE `assets_data` SET `stock_status` = 2 WHERE `barcode` = '$barcode' ";
		$result = $conn->query($sql);
		//echo $sql;
	}
	else if(isset($_POST["scrap"]))
	{
		$barcode = $_POST["scrap"];
		$sql = "UPDATE `assets_data` SET `stock_status` = 3 WHERE `barcode` = '$barcode' ";
		$result = $conn->query($sql);
		//echo $sql;
	}
	else if(isset($_POST["present_grp"]))
	{
		$barcode = $_POST["present_grp"];
		$sql = "SELECT * FROM `assets_data` WHERE `barcode` = '$barcode' ";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$dob = $row["date_of_bill"];
		$sname = $row["supplier_name"];
		$b_no = $row["bill_no"];
		$sql = "UPDATE `assets_data` SET `stock_status` = 1 WHERE `date_of_bill` = '$dob' AND `supplier_name` = '$sname' AND `bill_no` = '$b_no'";
		$result = $conn->query($sql);
		
	}
	else if(isset($_POST["lost_grp"]))
	{
		$barcode = $_POST["lost_grp"];
		$sql = "SELECT * FROM `assets_data` WHERE `barcode` = '$barcode' ";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$dob = $row["date_of_bill"];
		$sname = $row["supplier_name"];
		$b_no = $row["bill_no"];
		$sql = "UPDATE `assets_data` SET `stock_status` = 2 WHERE `date_of_bill` = '$dob' AND `supplier_name` = '$sname' AND `bill_no` = '$b_no'";
		$result = $conn->query($sql);
		
	}
	else if(isset($_POST["scrap_grp"]))
	{
		$barcode = $_POST["scrap_grp"];
		$sql = "SELECT * FROM `assets_data` WHERE `barcode` = '$barcode' ";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$dob = $row["date_of_bill"];
		$sname = $row["supplier_name"];
		$b_no = $row["bill_no"];
		$sql = "UPDATE `assets_data` SET `stock_status` = 3 WHERE `date_of_bill` = '$dob' AND `supplier_name` = '$sname' AND `bill_no` = '$b_no'";
		$result = $conn->query($sql);
		//echo $sql;
		
	}

	echo "<script>alert('Success!!!');window.location.replace(\"scrap_lost.php\");</script>";
?>

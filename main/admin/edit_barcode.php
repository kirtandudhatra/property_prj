<?php 


	include('admin_header.php');
	$barcode1 = $_POST['barcode1'];
	$barcode2 = $_POST['barcode2'];
	$old_barcode1 = $_POST['old_barcode1'];
	$old_barcode2 = $_POST['old_barcode2'];
	$quantity = $_POST['quantity'];

	for($i=1;$i<=$quantity;$i=$i+1)
	{
		$old_barcode = $old_barcode1.$i.$old_barcode2;
		$barcode = $barcode1.$i.$barcode2;
		$sql = "UPDATE `assets_data` SET `barcode` = '$barcode' WHERE `barcode` = '$old_barcode' ";
		$conn->query($sql);
	}

	echo "<script>alert('Barcode Changed');window.location.replace(\"index.php\");</script>";

	
?>
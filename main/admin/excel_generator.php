<?php 
  include('admin_header.php');

  $sql = $_SESSION["sql"];

  //echo $sql;

  ?>



<?php

$file = "stock";
 header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
 header('Content-Disposition: attachment; filename='.$file.'.csv');
 $content = "No.,Category,Purchase_date,Bill_date,Payment_date,Bill_no,Supplier_Name,Deatils,Type-Make,QTY,Barcodes,Unit_price,Faculty,Dept,Lcation,Remark,Page_no,Func._stat,Stock_status\n";





$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
	    $i = 1;

	    while($row = $result->fetch_assoc()) {

	    	if($row['date_of_payment'] == "0000-00-00")
	    		$row['date_of_payment'] = '';

	    	if($row['functional_status'] == 1)
					$fs = "Working";
				else
					$fs = "Not-Working";

			if($row['stock_status'] == 1)
				$ss = "PRESENT";
			else if($row['stock_status'] == 2)
				$ss = "LOST";
			else
				$ss = "SCRAP";

			$p_year = substr($row["date_of_purchase"],0,4);
			$page_no = (isset($row["page_no"]) ? $row["page_no"] : '');

			$barcode_half1 = "DDU/".$row["faculty"]."/".$row["department"]."/".$p_year."/".$row["short_code"]."/";
			$barcode_half2 = "/".$row["quantity"]."/".$page_no;

			$barcode = $barcode_half1."1-".$row['quantity'].$barcode_half2;

			 $content .= "\"".$i."\",\"".$row['category']."\",\"".$row['date_of_purchase']."\",\"".$row['date_of_bill']."\",\"".$row['date_of_payment']."\",\"".$row['bill_no']."\",\"".$row['supplier_name']."\",\"".$row['details']."\",\"".$row['type']."\",\"".$row['quantity']."\",\"".$row['barcode']."\",\"".$row['unit_price']."\",\"".$row['faculty']."\",\"".$row['department']."\",\"".$row['location']."\",\"".$row['remark']."\",\"".$row['page_no']."\",\"".$fs."\",\"".$ss."\",\n";
			 //$content .= "testtest1,testtest2,testtest3,\n";
			 

			 $i= $i+1;

		}
		echo $content;

	}




?>
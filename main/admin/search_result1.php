<?php 
  include('admin_header.php');

  ?>
  <?php

  $s_date = '';
  $e_date = '';
  $s_price = '';
  $e_price = '';
  $s_code = '';
  $faculty = '';
  $dep = '';
  $loc = '';

  $s_date = (isset($_POST['date_start']) ? $_POST['date_start'] : null);
  $e_date = (isset($_POST['date_end']) ? $_POST['date_end'] : null);
  $s_price = (isset($_POST['price_start']) ? $_POST['price_start'] : null);
  $e_price = (isset($_POST['price_end']) ? $_POST['price_end'] : null);
  $s_code = (isset($_POST['shortcode']) ? $_POST['shortcode'] : null);
  $faculty = (isset($_POST['faculty']) ? $_POST['faculty'] : null);
  $dep = (isset($_POST['department']) ? $_POST['department'] : null);
  $loc = (isset($_POST['location']) ? $_POST['location'] : null);

  

  	
  
  	if($s_date == null OR $e_date == null)
  	{
  		$e_date = null;
  		$s_date = null;
  	}
  	//echo $s_date;

	if($s_date != null && $e_date != null && strcmp($s_date,$e_date) > 0)
	{
		echo "<script>alert('Start Date should be less than End Date!!');window.location.replace(\"search.php\");</script>";
	}

	if($s_price == null OR $e_price == null)
  	{
  		$e_price = null;
  		$s_price = null;
  	}

	if($s_price != null && $e_price != null && strcmp($s_price,$e_price) > 0)
	{
		echo "<script>alert('Start Price should be less than EndPrice!!');window.location.replace(\"search.php\");</script>";
	}

	//if($s_date == null && $e_date == null && $s_price == null && $e_price == null && $s_code == null && $faculty == null && $dep == null && $loc == null)
		//echo "<script>alert('Please select search criteria!!');window.location.replace(\"search.php\");</script>";

	$sql = "SELECT * FROM `assets_data` ";

	$flag =0;

	

	if($s_date != null)
	{
		$sql = $sql." WHERE (`date_of_bill` BETWEEN '".$s_date."' AND '".$e_date."')";
		$flag = 1;
	}
	if($s_price != null)
	{
		if($flag == 0)
		{
			$sql = $sql." WHERE (`unit_price` BETWEEN ".$s_price." AND ".$e_price.")";
			$flag = 1;
		}
		else
		{
			$sql = $sql." AND (`unit_price` BETWEEN ".$s_price." AND ".$e_price.")";	
		}

		
	}
	if($s_code != null)
	{
		if($flag == 0)
		{
			$sql = $sql." WHERE `short_code` = '".$s_code."'";
			$flag = 1;
		}
		else
		{
			$sql = $sql." AND `short_code` = '".$s_code."'";
		}

		
	}

	if($faculty != null)
	{
		if($flag == 0)
		{
			$sql = $sql." WHERE `faculty` = '".$faculty."'";
			$flag = 1;
		}
		else
		{
			$sql = $sql." AND `faculty` = '".$faculty."'";	
		}

		
	}

	if($dep != null)
	{
		if($flag == 0)
		{
			$sql = $sql." WHERE `department` = '".$dep."'";
			$flag = 1;
		}
		else
		{
			$sql = $sql." AND `department` = '".$dep."'";	
		}

		
	}

	if($loc != null)
	{
		if($flag == 0)
		{
			$sql = $sql." WHERE `location` = '".$loc."'";
			$flag = 1;
		}
		else
		{
			$sql = $sql." AND `location` = '".$loc."'";
		}

		
	}

	if($loc == '' && $s_code == '')
		$sql .= " GROUP BY `category`,`date_of_purchase`,`date_of_bill`,`date_of_payment`,`bill_no`,`supplier_name`,`type`,`quantity`,`unit_price`,`page_no`,`faculty`,`department`,`remark`,`page_no`,`short_code`";

	//echo $sql;



	$send_sql = $sql;
	$_SESSION["sql"] = $sql;

	$result = $conn->query($sql);




	if ($result->num_rows > 0) {
    // output data of each row
	    $i = 1;

	    //echo $sql;
	





  ?>


  <html lang="en" style="background-color: #efefef;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../include/ddulogo.png">

    <title>Search -  DDU-assets</title>

    <!-- Bootstrap core CSS -->
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../include/css/datatables.css" rel="stylesheet">
     
  


  </head>

  <body style="background-color: #f47b29;">

  <?php 
  		include('../../include/header.php');

  		include('admin_buttons.php');

  	?>
  	<br>

  		<div class="container-fluid">
          <div class="row">
	            <div class="col-lg-12" style="background-color: #fff;border-radius: 10px;">
	            	<div class="container-fluid">
          				<div class="row">
		            		<div class="col-lg-10">
		            		<center><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| Search Results ||</h1></center>
		            		</div>
		            		<div class="col-lg-2">
			            		<form action="excel_generator.php" method="POST">
			            			<input type="hidden" name="sql" value=<?php echo "'".$send_sql."'"; ?> >

			            			<br>
			            			<button type="submit" class="btn btn-primary">Download Excel</button>
			            		</form>
		            		</div>
		            	</div>
		            </div>
	            	<div class="table-responsive">

						<table class="table">
						    <thead>
						      <tr>
							        <th>#</th>
							        <th>Cat.</th>
							        <th>Purchase_date</th>
							        <th>Bill_Date </th>
							        <th>Clearance_Date</th>
							        <th>Bill_no</th>
							        <th>Supplier_name</th>
							        <th>Details</th>
							        <th>Type/make</th>
							        <th>QTY</th>

							    <?php if($loc != ''){ ?>
							        <th>Barcode</th>
							    <?php }else { ?>
							    	<th>Barcodes</th>
							    <?php } ?>
							        <th>Unit Price</th>
							        <th>Faculty</th>
							        <th>Dept</th>
							        <th>Location</th>
							        <th>Remark</th>
							         <th>Page No.</th>
							         <th>View Files</th>
							        <th>Func_status</th>
							        <th>Stock_status</th>
							  </tr>
							</thead>

							<?php
								while($row = $result->fetch_assoc()) { 
									$pay_date = ($row["date_of_payment"] == "0000-00-00") ? '' : $row["date_of_payment"];
									$bill_date = ($row["date_of_bill"] == "0000-00-00") ? '' : $row["date_of_bill"];
									$p_year = substr($row["date_of_purchase"],0,4);
									$page_no = (isset($row["page_no"]) ? $row["page_no"] : '');
									$barcode_half1 = "DDU/".$row["faculty"]."/".$row["department"]."/".$p_year."/".$row["short_code"]."/";
									$barcode_half2 = "/".$row["quantity"]."/".$page_no;
									$barcode = $barcode_half1."1".$barcode_half2;

									if($row['quantity'] > 1)
										$barcode = $barcode_half1."1-".$row['quantity'].$barcode_half2;
									?>

							<tbody>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['category']; ?></td>
									<td><?php echo $row['date_of_purchase']; ?></td>
									<td><?php echo $bill_date; ?></td>
									<td><?php echo $pay_date; ?></td>
									<td><?php echo $row['bill_no']; ?></td>
									<td><?php echo $row['supplier_name']; ?></td>
									<td><?php echo $row['details']; ?></td>
									<td><?php echo $row['type']; ?></td>
									<td><?php echo $row['quantity']; ?></td>
									<td><?php if($loc == '')
												echo $barcode;
											else
												echo $row['barcode']; ?>
									</td>
									<td><?php echo $row['unit_price']; ?></td>
									<td><?php echo $row['faculty']; ?></td>
									<td><?php echo $row['department']; ?></td>
									<td><?php echo $row['location']; ?></td>
									<td><?php echo $row['remark']; ?></td>
									<td><?php echo $row['page_no']; ?></td>
									<td><a href=<?php echo "'".$row['path']."'"; ?>>Image</a>
									<br><a href=<?php echo "'".$row['ppath']."'"; ?>>PDF</a></td>
									<td><?php if($row['functional_status'] == 1)
													echo "Working";
												else
													echo "Not-Working";
										 ?></td>
									<td><?php if($row['stock_status'] == 1)
													echo "PRESENT";
												else if($row['stock_status'] == 2)
													echo "LOST";
												else
													echo "SCRAP";
										 ?></td>

								</tr>
							</tbody>

							<?php
									$i= $i+1;
								}

							?>
						</table>
					</div>

	            </div>
           </div>
        </div>

     


  </body>

</html>

<?php
	} 
	else {
		//echo $sql;
    	echo "<script>alert('No result Found!!');window.location.replace(\"search.php\");</script>";
	}
?>


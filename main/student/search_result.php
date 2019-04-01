<?php 
  include('student_header.php');

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
		echo "<script>alert('Start Date should be less than End Date!!');window.location.replace(\"index.php\");</script>";
	}

	if($s_price == null OR $e_price == null)
  	{
  		$e_price = null;
  		$s_price = null;
  	}

	if($s_price != null && $e_price != null && strcmp($s_price,$e_price) > 0)
	{
		echo "<script>alert('Start Price should be less than EndPrice!!');window.location.replace(\"index.php\");</script>";
	}

	if($s_date == null && $e_date == null && $s_price == null && $e_price == null && $s_code == null && $faculty == null && $dep == null && $loc == null)
		echo "<script>alert('Please select search criteria!!');window.location.replace(\"index.php\");</script>";

	$sql = "SELECT DISTINCT `category`,`date_of_purchase`,`date_of_bill`,`bill_no`,`supplier_name`,`details`,`type`,`quantity`,`unit_price`,`page_no`,`faculty`,`department`,`location`,`functional_status`,`remark`,`stock_status` FROM `assets_data`";
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
			$sql = $sql." WHERE `s_code` = '".$s_code."'";
			$flag = 1;
		}
		else
		{
			$sql = $sql." AND `s_code` = '".$s_code."'";
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

	//echo $sql;

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
	    $i = 1;
	





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
  


  </head>

  <body style="background-color: #f47b29;">

  <?php 
  		include('../../include/header.php');
  		include('student_button.php');

  	?>
  	<br>

  		<div class="container-fluid">
          <div class="row">
	            <div class="col-lg-12" style="background-color: #fff;border-radius: 10px;">
	            		<center><h1>Search Results </h1></center>
	            	<div class="table-responsive">          
						<table class="table">
						    <thead>
						      <tr>
							        <th>#</th>
							        <th>Cat.</th>
							        <th>Details</th>
							        <th>Type/make</th>
							        <th>QTY</th>
							        
							        <th>Location</th>
							        <th>Remark</th>
							        <th>Func_status</th>
							        <th>Stock_status</th>
							  </tr>
							</thead>

							<?php
								while($row = $result->fetch_assoc()) { ?>

							<tbody>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['category']; ?></td>
									<td><?php echo $row['details']; ?></td>
									<td><?php echo $row['type']; ?></td>
									<td><?php echo $row['quantity']; ?></td>
									
									<td><?php echo $row['location']; ?></td>
									<td><?php echo $row['remark']; ?></td>
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
    	echo "<script>alert('No result Found!!');window.location.replace(\"index.php\");</script>";
	}
?>
<?php 
  include('admin_header.php');

  ?>


  <html lang="en" style="background-color: #efefef;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../include/ddulogo.png">

    <title>Write Off -  DDU-assets</title>

    <!-- Bootstrap core CSS -->
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
  


  </head>

  <body style="background-color: #f47b29;">
  	<?php 
  		include('../../include/header.php');

  		include('admin_buttons.php');

  	?>

  <br>

  		<div class="container">
          <div class="row">
          	<div class="col-sm-1"></div>
            <div class="col-sm-10" style="background-color: #fff;border-radius: 20px; ">
            	<div class="col-sm-2"></div>
            	<div class="col-sm-7">
            		<h3>Enter barcode:</h3>
            		<div class="col-sm-10"></div><div class="col-sm-2" style="margin-top: -40px"><a href="#" style="text-align: right;">Help</a></div><br>
	                <form action="scrap_lost.php" method="POST">
			            <div class="col-sm-6">
	                  
			            		<input style="text-transform:uppercase" type="text" name="barcode" class="form-control" placeholder="Search with barcode" required><br><br><br>
	                  
			            </div>
			            <div class="col-sm-1">
			            		<button id="s_barcode" class="btn btn-primary">Search</button>
			            </div>
			            <div class="col-sm-6"></div>
	                </form>
	            </div>
	            <div class="col-sm-2"></div>
		    </div>
		    <div class="col-sm-1"></div>
		    </div>
		    </div>

		    

		    	<?php

		    		if(isset($_POST["barcode"]))
		    		{
		    			$bar_code = $_POST["barcode"];
		    			$sql = "SELECT * FROM `assets_data` WHERE `barcode` = '$bar_code'";

					 	$result = $conn->query($sql);

						if ($result->num_rows > 0) {

							$row = $result->fetch_assoc();
							//echo $sql;
		    	?>
		    	<div class="container">
          		<div class="row">
          		<div class="col-lg-1"></div>
	            <div class="col-lg-10" style="background-color: #fff;border-radius: 10px;">
	            		<center><h1>|| Results ||</h1></center>
	            		<div class="container">
          					<div class="row">
			            		<div class="col-lg-1"></div>
			            		<div class="col-lg-1">
				            		<form action="scrap_lost_code.php" method="POST">
				            			<input type="hidden" name="present" value= <?php echo "'".$row["barcode"]."'" ?> >
				            			<button class="btn btn-primary">PRESENT</button>
				            		</form>
				            	</div>
			            		<div class="col-lg-1">
				            		<form action="scrap_lost_code.php" method="POST">
				            			<input type="hidden" name="scrap" value= <?php echo "'".$row["barcode"]."'" ?> >
				            			<button class="btn btn-primary">SCRAP</button>
				            		</form>
				            	</div>
				            	<div class="col-lg-1">
				            		<form action="scrap_lost_code.php" method="POST">
				            			<input type="hidden" name="lost" value= <?php echo "'".$row["barcode"]."'" ?> >
				            			<button class="btn btn-primary">LOST</button>
				            		</form>
				            	</div>
				            	<div class="col-lg-2">
				            		<form action="scrap_lost_code.php" method="POST">
				            			<input type="hidden" name="present_grp" name="present" value= <?php echo "'".$row["barcode"]."'" ?> >
				            			<button class="btn btn-primary">PRESENT GROUP</button>
				            		</form>
				            	</div>
			            		<div class="col-lg-2">
				            		<form action="scrap_lost_code.php" method="POST">
				            			<input type="hidden" name="scrap_grp" value= <?php echo "'".$row["barcode"]."'" ?> >
				            			<button class="btn btn-primary">SCRAP GROUP</button>
				            		</form>
				            	</div>
				            	<div class="col-lg-2">
				            		<form action="scrap_lost_code.php" method="POST">
				            			<input type="hidden" name="lost_grp" value= <?php echo "'".$row["barcode"]."'" ?> >
				            			<button class="btn btn-primary">LOST GROUP</button>
				            		</form>
				            	</div>
		            	<div class="col-lg-2"></div>
		            </div>
		            </div>
	            	<div class="table-responsive">          
						<table class="table">
						    

							<tbody>
								<tr>
									<th>Barcode</th>
									<td><?php echo $row['barcode']; ?></td>
								</tr>

								<tr>
									<th>Cat.</th>
									<td><?php echo $row['category']; ?></td>
								</tr>

								<tr>
									<th>Purchase_date</th>
									<td><?php echo $row['date_of_purchase']; ?></td>
								</tr>

								<tr>
							        <th>Bill_Date </th>
									<td><?php echo $row['date_of_bill']; ?></td>
								</tr>

								<tr>
							        <th>Bill_no</th>
									<td><?php echo $row['bill_no']; ?></td>
								</tr>

								<tr>
							        <th>Supplier_name</th>
									<td><?php echo $row['supplier_name']; ?></td>
								</tr>

								<tr>
							        <th>Details</th>
									<td><?php echo $row['details']; ?></td>
								</tr>

								<tr>
							        <th>Type/make</th>
									<td><?php echo $row['type']; ?></td>
								</tr>

								<tr>
							        <th>QTY</th>
									<td><?php echo $row['quantity']; ?></td>
								</tr>

								<tr>
							        <th>Unit No.</th>
									<td><?php echo $row['unit_no']; ?></td>
								</tr>

								<tr>
							        <th>Unit Price</th>
									<td><?php echo $row['unit_price']; ?></td>
								</tr>

								<tr>
							        <th>Faculty</th>
									<td><?php echo $row['faculty']; ?></td>
								</tr>

								<tr>
							        <th>Dept</th>
									<td><?php echo $row['department']; ?></td>
								</tr>

								<tr>
							        <th>Location</th>
									<td><?php echo $row['location']; ?></td>
								</tr>

								<tr>
							        <th>Remark</th>
									<td><?php echo $row['remark']; ?></td>
								</tr>


								<tr>
							         <th>Page No.</th>
									<td><?php echo $row['page_no']; ?></td>
								</tr>

								<tr>
							        <th>Func_status</th>
							        <td><?php if($row['functional_status'] == 1)
													echo "Working";
												else
													echo "Not-Working";
										 ?></td>
								</tr>

								<tr>
							        <th>Stock_status</th>
							        <td><?php if($row['stock_status'] == 1)
													echo "PRESENT";
												else if($row['stock_status'] == 2)
													echo "LOST";
												else
													echo "SCRAP";
										 ?></td>
								</tr>
									
									
									

								
							</tbody>

							
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
    	echo "<script>alert('No result Found!!');window.location.replace(\"scrap_lost.php\");</script>";
	}

}
?>
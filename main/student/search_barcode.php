<?php 
  include('student_header.php');

  ?>

 <?php

 	$bar_code = $_POST["barcode"];

 	$sql = "SELECT * FROM `assets_data` WHERE `barcode` = '$bar_code'";

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

  		<div class="container">
          <div class="row">
          		<div class="col-lg-2"></div>
	            <div class="col-lg-8" style="background-color: #fff;border-radius: 10px;">
	            		<center><h1> Search Results </h1></center>
	            		<center><a href="index.php"><button class="btn btn-primary">Search Another item</button></a></center><br>
	            	<div class="table-responsive">          
						<table class="table">
						    

							<?php
								while($row = $result->fetch_assoc()) { 

										if($row['department'] != $_SESSION['user_department'])
										{
											echo "<script>alert('Barcode is not from your department!!');window.location.replace(\"index.php\");</script>"; 
											//echo $row['department']." ".$_SESSION['user_department'];
										}

									?>

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
							        <th>Details</th>
									<td><?php echo $row['details']; ?></td>
								</tr>

								<tr>
							        <th>Type/make</th>
									<td><?php echo $row['type']; ?></td>
								</tr>

								<tr>
							        <th>QTT</th>
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
							        <th>Location</th>
									<td><?php echo $row['location']; ?></td>
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

							<?php
									
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
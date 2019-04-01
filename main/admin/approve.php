<?php 
  include('admin_header.php');

  ?>
 <?php



 	$sql = "SELECT * FROM `assets_data` WHERE `approved` = 0 GROUP BY `category`,`date_of_purchase`,`date_of_bill`,`date_of_payment`,`bill_no`,`supplier_name`,`type`,`quantity`,`unit_price`,`page_no`,`faculty`,`department`,`page_no`,`short_code` ";

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

    <title>Pending Items -  DDU-assets</title>

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
		            		 <center><p style="margin-top: 0px; font-size:35px"> PENDING ITEMS </p></center>
		            		 <div class="col-sm-10"></div><div class="col-sm-2" style="margin-top: -50px"><a href="#" style="text-align: right;">Help</a></div><br>
		            		</div>
		            		<div class="col-lg-2">
			            		
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
							        <th>Clearance_date</th>
							        <th>Bill_no</th>
							        
							        <th>Details</th>
							        <th>Type/make</th>
							        <th>QTY</th>
							        <th>Barcode</th>
							        <th>Unit Price</th>
							        <th>Faculty</th>
							        <th>Dept</th>
							        <th>Action</th>
							        
							
							  </tr>
							</thead>

							<?php
								while($row = $result->fetch_assoc()) { 

									$p_year = substr($row["date_of_purchase"],0,4);
									$page_no = (isset($row["page_no"]) ? $row["page_no"] : '');
									$barcode_half1 = "DDU/".$row["faculty"]."/".$row["department"]."/".$p_year."/".$row["short_code"]."/";
									$barcode_half2 = "/".$row["quantity"]."/".$page_no;
									$barcode = $barcode_half1."1".$barcode_half2;

									if($row['quantity'] > 1)
										$barcode = $barcode_half1."1-".$row['quantity'].$barcode_half2;
									
									$row["date_of_payment"] = ($row["date_of_payment"] == "0000-00-00") ? '' : $row["date_of_payment"];
									$row["date_of_bill"] = ($row["date_of_bill"] == "0000-00-00") ? '' : $row["date_of_bill"];


									?>

							<tbody>
								<tr><form method="post" action="approve_code.php">
									<td><?php echo $i; ?></td>
									<td><?php echo $row['category']; ?></td>
									<td><?php echo $row['date_of_purchase']; ?></td>
									<td><?php echo $row['date_of_bill']; ?></td>
									<td><?php echo "<div class='col-sm-12'>
			                           <div class='input-group'>
			                            <div class='input-group-addon'>
			                             <i class='fa fa-calendar'>
			                             </i>
			                            </div>
			                            <input class='form-control' id='date' name='pay_date' placeholder='YYYY/MM/DD' type='text' value="; echo "'".$row["date_of_payment"]."' required/>"; ?>
			                           </div>
			                          </div>
			                      </div><br> </td>
									<td><?php echo $row['bill_no']; ?></td>
									
									<td><?php echo $row['details']; ?></td>
									<td><?php echo $row['type']; ?></td>
									<td><?php echo $row['quantity']; ?></td>
									<td><?php echo $barcode; ?></td>

									
									<td><?php echo $row['unit_price']; ?></td>
									<td><?php echo $row['faculty']; ?></td>
									<td><?php echo $row['department']; ?></td>
									
									
									<input type="hidden" name="pur_date" value=<?php echo "'".$row['date_of_purchase']."'"; ?> />
									<input type="hidden" name="bill_no" value=<?php echo "'".$row['bill_no']."'"; ?> />
									<input type="hidden" name="details" value=<?php echo "'".$row['details']."'"; ?> />
									<input type="hidden" name="type" value=<?php echo "'".$row['type']."'"; ?> />
									<input type="hidden" name="quantity" value=<?php echo "'".$row['quantity']."'"; ?> />
									<input type="hidden" name="unit_price" value=<?php echo "'".$row['unit_price']."'"; ?> />
									<input type="hidden" name="faculty" value=<?php echo "'".$row['faculty']."'"; ?> />
									<input type="hidden" name="department" value=<?php echo "'".$row['department']."'"; ?> />

									<td><?php echo "<button type='submit' class='btn btn-primary'>Go</button>"; ?></td>

								</tr></form>
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

     	<script type="text/javascript" src="../../include/js/jquery.js"></script>

      <!-- Include Date Range Picker -->
      <script type="text/javascript" src="../../include/bootstrap-3.3.7-dist/js/datepicker.min.js"></script>

      <link rel="stylesheet" href="../../include/bootstrap-3.3.7-dist/css/dp.css"/>

     <script>
          $(document).ready(function(){
            var date_input=$('input[name="pay_date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
              format: 'yyyy-mm-dd',
              container: container,
              todayHighlight: true,
              autoclose: true,
            })
          })
      </script>

  </body>

</html>

	 


<?php

	}
	

	else {
		echo "<script>alert('No approval is pending');;window.location.replace(\"index.php\");</script>";
	}



  ?>



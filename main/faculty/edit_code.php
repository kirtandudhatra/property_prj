<?php 
  include('faculty_header.php');

  ?>

 <?php
 	$category = $_POST['category'];
	$p_date = $_POST['p_date'];
  $oldp_date = $_POST['oldp_date'];
	$b_date = $_POST['b_date'];
  $pay_date = null;
	$bill_no = $_POST['bill_no'];
  $oldbill_no = $_POST['oldbill_no'];
	$supp_name = $_POST['supp_name'];
  $oldsupp_name = $_POST['oldsupp_name'];
	$details = $_POST['details'];
	$type = $_POST['type'];
	$short_code = strtoupper($_POST['short_code']);
  $oldshort_code = $_POST['oldshort_code'];
	$quantity = $_POST['quantity'];
	$quantity = ltrim($quantity,'0');
	$unit_price = $_POST['unit_cost'];
	$page_no = $_POST['page_no'];
	$faculty = strtoupper($_POST['faculty']);
	$department = $_POST['department'];
	$location = $_POST['location'];
	$func_stat = $_POST['func_stat'];
	$remark = $_POST['remark'];
  $stock_status = $_POST['stock_status'];
  $edit_option = $_POST['edit_option'];
  $unit_no = $_POST['unit_no'];
  $barcode = $_POST['barcode'];
  $path = $_POST['old_path'];
  $ppath = $_POST['old_ppath'];
    $loc_dept = $_POST['loc_dept'];


    if(((strcmp($p_date,$b_date) > 0) && $b_date != '') || ((strcmp($b_date,$pay_date) > 0) && $pay_date != ''))
    echo "<script>alert('Date Error!!!');window.location.replace(\"add.php\");</script>";
  else{

  	$sql = "DELETE FROM `assets_data` WHERE `date_of_purchase` = '$oldp_date' AND `supplier_name` = '$oldsupp_name' AND `bill_no` = '$oldbill_no' AND `short_code` = '$oldshort_code'";

   // echo $sql;

    if($edit_option == "search"){
      $sql = "DELETE FROM `assets_data` WHERE `barcode` = '$barcode'"; 
     // echo 1;
    }


  	$result = $conn->query($sql);

  	$p_year = substr($p_date,0,4);

	$barcode_half1 = "DDU/".$faculty."/".$department."/".$p_year."/".$short_code."/";
	$barcode_half2 = "/".$quantity."/".$page_no;
	$unit = "1";
  
	if($quantity > 1)
	{
		$unit = "1-".$quantity;
	}

	$sql = "SELECT * FROM `assets_data` WHERE `date_of_purchase` = '$p_date' AND `supplier_name` = '$supp_name' AND `bill_no` = '$bill_no' AND `short_code` = '$short_code' ";

  if($edit_option == "search")
      $sql = "SELECT * FROM `assets_data` WHERE `barcode` = '$barcode'"; 

	$result = $conn->query($sql);
 
	if($result->num_rows == 0)
	{

    if($edit_option == "search_grp"){

			for($i=1;$i<=$quantity;$i=$i+1)
			{
        
        		$barcode = $barcode_half1.$i.$barcode_half2;

        if(isset($_FILES['file'])){
            $file = $_FILES['file'];
            $path = "../images/".basename("image".$faculty."_".$department."_".$short_code."_".$page_no.".png");
            move_uploaded_file($file['tmp_name'], $path);

        }

         if(isset($_FILES['filep'])){
            $file = $_FILES['filep'];
            $ppath = "../images/".basename("pdf".$faculty."_".$department."_".$short_code."_".$page_no.".pdf");
            move_uploaded_file($file['tmp_name'], $ppath);

        }

				$sql = "INSERT INTO `assets_data` (`category`,`date_of_purchase`,`date_of_bill`,`date_of_payment`,`bill_no`,`supplier_name`,`details`,`type`,`short_code`,`quantity`,`unit_no`,`unit_price`,`page_no`,`faculty`,`department`,`location`,`barcode`,`functional_status`,`remark`,`stock_status`,`path`,`ppath`,`loc_dept`) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       
        $stmt = $conn->prepare($sql);
       
        
        $stmt->bind_param("sssssssssiidsssssisisss",$category,$p_date,$b_date,$pay_date,$bill_no,$supp_name,$details,$type,$short_code,$quantity,$i,$unit_price,$page_no,$faculty,$department,$location,$barcode,$func_stat,$remark,$stock_status,$path,$ppath,$loc_dept);

        $stmt->execute();

				$stmt->close();

			}
      
    }
      else{

        $barcode = $barcode_half1.$unit_no.$barcode_half2;

        $sql = "INSERT INTO `assets_data` (`category`,`date_of_purchase`,`date_of_bill`,`date_of_payment`,`bill_no`,`supplier_name`,`details`,`type`,`short_code`,`quantity`,`unit_no`,`unit_price`,`page_no`,`faculty`,`department`,`location`,`barcode`,`functional_status`,`remark`,`stock_status`,`path`,`ppath`,`loc_dept`) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmt = $conn->prepare($sql);
           
            
            $stmt->bind_param("sssssssssiidsssssisisss",$category,$p_date,$b_date,$pay_date,$bill_no,$supp_name,$details,$type,$short_code,$quantity,$unit_no,$unit_price,$page_no,$faculty,$department,$location,$barcode,$func_stat,$remark,$stock_status,$path,$ppath,$loc_dept);

            $stmt->execute();

            $stmt->close();

            echo $sql;

      }
	}
	else{
		echo "<script>alert('Data Already Exist');window.location.replace(\"edit.php\");</script>";
	}
	$conn->close();


 ?>

 <?php if($_POST["edit_option"] != "search"){ ?>

 <html lang="en" style="background-color: #efefef;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../include/ddulogo.png">

    <title>Edit DDU-assets</title>

    <!-- Bootstrap core CSS -->
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
  


  </head>

  <body style="background-color: #f47b29;">

<?php 
      include('../../include/header.php');
      include('faculty_buttons.php');

    ?>

  <br>
    
      <div class="container">
          <div class="row">
          		<div class="col-sm-2"></div>
            	<div class="col-sm-8" style="background-color: #fff; padding: 50px; border-radius: 20px ">
                	<center><p style="margin-top: -15px; font-size:35px"> Data Edited Successfully!!! </p></center>

                  <center><p style="margin-top: -15px; font-size:30px"> Your New Barcode(s) </p></center>

                	<center><h3><?php echo "1. ".$barcode_half1."1".$barcode_half2; ?></h3></center>

                	<?php
                		if($quantity > 1)
                		{
                			echo "<div><center>.</center></div>";
                			echo "<div><center>.</center></div>";
                			echo "<div><center>.</center></div>";
                			echo "<div><center>.</center></div>";
                			echo "<center><h3>".$quantity.". ".$barcode_half1.$quantity.$barcode_half2."</h3></center>";
                		}
                	?>

                  <center><button class="btn btn-primary" id="edit">Edit Barcode</button></center>
                  <div id="editarea" style="display: none;">
                	<br><center><h2>Edit barcode:</h2></center><br>
                	<form action="edit_barcode.php" method="POST">
                	<div class="col-sm-2"></div>
                	<div class="col-sm-4" style="padding: 0px">
                		
          				<input type="text" name="barcode1" class="form-control" style="text-align: right;" value= <?php echo $barcode_half1; ?> >
                
                	</div>
                	<div class="col-sm-1" style="padding: 0px">
                		
          				<input class="form-control" name="barcode3" id="disabledInput" type="text" placeholder=<?php echo $unit; ?> disabled>
                
                	</div>
                	<div class="col-sm-2" style="padding: 0px">
                		
          				<input type="text" class="form-control" name="barcode2" value= <?php echo $barcode_half2; ?> >
                
                	</div>
                	<div class="col-sm-2" style="padding: 0px">
                	<input type="hidden" class="form-control" name="quantity" value= <?php echo $quantity; ?> >
                  <input type="hidden" class="form-control" name="old_barcode1" value= <?php echo $barcode_half1; ?> >
                  <input type="hidden" class="form-control" name="old_barcode2" value= <?php echo $barcode_half2; ?> >
          				<button type="submit" class="btn btn-primary">Submit</button>
                
                	</div>
                	<div class="col-sm-1"></div>
                	</form>
                  </div>
                </div>
				<div class="col-sm-2"></div>
          </div>
      </div>

      <script>
          var button = document.getElementById('edit'); // Assumes element with id='button'

          button.onclick = function() {
              var div = document.getElementById('editarea');
              if (div.style.display !== 'none') {
                  div.style.display = 'none';
              }
              else {
                  div.style.display = 'block';
              }
          };

      </script>
  </body>

 </html>
 <?php 
 }
 else{
        echo "<script>alert('Record Edited!!!!');window.location.replace(\"edit.php\");</script>";
 }
}
 ?>
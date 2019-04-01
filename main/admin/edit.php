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

    <title>Edit -  DDU-assets</title>

    <!-- Bootstrap core CSS -->
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
     <script type="text/javascript" src="../../include/js/jquery.js"></script>
     <script src="../../include/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  


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
            <div class="col-sm-10" style="background-color: #fff;border-radius: 20px ">
            	<div class="col-sm-3"></div>
            	<div class="col-sm-8">
            		<h3>Edit item:</h3>
            		<div class="col-sm-10"></div><div class="col-sm-2" style="margin-top: -40px"><a href="#" style="text-align: right;">Help</a></div><br>
	                <form action="edit.php" method="POST">
			            <div class="col-sm-5">
	                  
			            		<input style="text-transform:uppercase" type="text" name="barcode" class="form-control" placeholder="Search with barcode" required><br><br><br>
	                  
			            </div>
			            <div class="col-sm-1">
                      <button id="s_barcode" name="action" value="search" class="btn btn-primary">Search</button>
                  </div>
                  <div class="col-sm-1"></div>
                  <div class="col-sm-1">
                      <button id="s_barcode" name="action" value="search_grp" class="btn btn-primary">Search Group</button>
                  </div>
			            <div class="col-sm-2"></div>
	                </form>
	            </div>
	            <div class="col-sm-3"></div>
		    </div>
		    <div class="col-sm-1"></div>
		    </div>
		    </div>
        <?php
        $editable = '';
        $disabled = '';
        $hidden = 'hidden';
        if(isset($_POST['action']))
          if($_POST['action'] == "search")
                      {
                        
                        $editable = "readonly";
                        $disabled = "disabled";
                        $hidden = 'text';
                      }

          ?>
		    

		    	<?php

		    		if(isset($_POST["barcode"]))
		    		{
		    			$bar_code = $_POST["barcode"];
		    			$sql = "SELECT * FROM `assets_data` WHERE `barcode` = '$bar_code'";

					 	   $result = $conn->query($sql);

						if ($result->num_rows > 0) {

							$row = $result->fetch_assoc();
              if($row['date_of_payment'] == "0000-00-00")
                    {
                      $row['date_of_payment'] = '';
                      //$editable = "readonly";
                    }

              if($row['date_of_bill'] == "0000-00-00")
                    {
                      $row['date_of_bill'] = '';
                      //$editable = "readonly";
                    }
							
		    	?>
		    	<div class="container">
          			<div class="row">
		    	
			            <div class="col-sm-1"></div>
			            <div class="col-sm-10" style="background-color: #fff; padding: 50px; border-radius: 20px ">
			                 <center><p style="margin-top: -15px; font-size:35px"> EDIT ENTRY </p></center>
			                 <div class="col-sm-10"></div><div class="col-sm-2" style="margin-top: -80px"><a href="edithelp" style="text-align: right;">Help</a></div><br>

			                <form action="edit_code.php" method="POST"  enctype="multipart/form-data">

			                	<div class="col-sm-6">
			                <?php if($_POST['action'] == 'search_grp'){ ?>

			                    
			                      <div class="form-group">
			                        <label for="Category" style="color: green;">Category</label>
			                        <div class="form-check form-check-inline">
			                            <input class="form-check-input" type="radio" name="category" id="inlineRadio1" value="Fixed" <?php echo ($row["category"]== 'Fixed') ?  "checked" : "" ;  ?> required  >
			                            <label class="form-check-label" for="inlineRadio1">Fixed</label>
			                          </div>
			                          <div class="form-check form-check-inline">
			                            <input class="form-check-input" type="radio" name="category" id="inlineRadio2" value="Consumable" <?php echo ($row["category"]== 'Consumable') ?  "checked" : "" ;  ?>  required>
			                            <label class="form-check-label" for="inlineRadio2">Consumable</label>
			                          </div>
			                      </div>

			                      <?php } else { ?>

			                      
			                     <div class="form-group" style="display:none;">
			                        <label for="Category" style="color: green;">Category</label>
			                        <div class="form-check form-check-inline">
			                            <input class="form-check-input" type="radio" name="category" id="inlineRadio1" value="Fixed" <?php echo ($row["category"]== 'Fixed') ?  "checked" : "" ;  ?> required  >
			                            <label class="form-check-label" for="inlineRadio1">Fixed</label>
			                          </div>
			                          <div class="form-check form-check-inline">
			                            <input class="form-check-input" type="radio" name="category" id="inlineRadio2" value="Consumable" <?php echo ($row["category"]== 'Consumable') ?  "checked" : "" ;  ?>  required>
			                            <label class="form-check-label" for="inlineRadio2">Consumable</label>
			                          </div>
			                      </div>
			                           
			                         
			                      

			                     <?php } ?>

			                      <div class="form-group">
			                        <label for="p_Date" style="color: green;">Purchase Date</label><br>
			                        
			                        <div class="col-sm-5">
			                           <div class="input-group">
			                            <div class="input-group-addon">
			                             <i class="fa fa-calendar">
			                             </i>
			                            </div>
			                            <input class="form-control" id="date" name="p_date" placeholder="YYYY/MM/DD" type="text" value= <?php echo "'".$row["date_of_purchase"]."'"; ?> required <?php echo $editable; ?> autocomplete="off"/>
                                  <input class="form-control" id="date" name="oldp_date" placeholder="YYYY/MM/DD" type="hidden" value= <?php echo "'".$row["date_of_purchase"]."'"; ?> required <?php echo $editable; ?> autocomplete="off"/>
			                           </div>
			                          </div>
			                      </div><br>

			                      <div class="form-group">
			                        <label for="p_Date">Bill Date</label><br>
			                        
			                        <div class="col-sm-5">
			                           <div class="input-group">
			                            <div class="input-group-addon">
			                             <i class="fa fa-calendar">
			                             </i>
			                            </div>
			                            <input class="form-control" id="date" name="b_date" placeholder="YYYY/MM/DD" type="text"/ value= <?php echo "'".$row["date_of_bill"]."'"; ?>  <?php echo $editable; ?> autocomplete="off" >
			                           </div>
			                          </div>
			                      </div><br>

			                      <div class="form-group">
			                        <label for="p_Date">Payment Date</label><br>
			                        
			                        <div class="col-sm-5">
			                           <div class="input-group">
			                            <div class="input-group-addon">
			                             <i class="fa fa-calendar">
			                             </i>
			                            </div>
			                            <input class="form-control" id="date" name="pay_date" placeholder="YYYY/MM/DD" type="text" value= <?php echo "'".$row["date_of_payment"]."'"; ?> <?php echo $editable; ?> autocomplete="off"/>
			                           </div>
			                          </div>
			                      </div><br>

			                      <div class="form-group">
			                        <label for="Category">Bill No.</label>
			                        <input type="text" name="bill_no" class="form-control" placeholder="Bill No." value= <?php echo "'".$row["bill_no"]."'"; ?>  <?php echo $editable; ?>>
                              <input type="hidden" name="oldbill_no" class="form-control" placeholder="Bill No." value= <?php echo "'".$row["bill_no"]."'"; ?>  <?php echo $editable; ?>>

			                      </div>

			                      <div class="form-group">
			                        <label for="Category">Supplier's Name</label>
			                        <input type="text" name="supp_name" class="form-control" placeholder="Supplier's Name" value= <?php echo "'".$row["supplier_name"]."'"; ?>  <?php echo $editable; ?> >
                              <input type="hidden" name="oldsupp_name" class="form-control" placeholder="Supplier's Name" value= <?php echo "'".$row["supplier_name"]."'"; ?>  <?php echo $editable; ?> >

			                      </div>

			                      <div class="form-group">
			                        <label for="Category" style="color: green;">Details of Asset</label>
			                        <input type="text" name="details" class="form-control" placeholder="Details of Asset" value= <?php echo "'".$row["details"]."'"; ?>  required>

			                      </div>

			                      <div class="form-group">
			                        <label for="Category">Type and Make</label>
			                        <input type="text" name="type" class="form-control" placeholder="Type and make" value= <?php echo "'".$row["type"]."'"; ?>  <?php echo $editable; ?> >

			                      </div>

			                      <div class="form-group">
			                        <label for="Category" style="color: green;">Short Code</label>
			                        <input style="text-transform:uppercase" type="text" name="short_code" class="form-control" placeholder="Short-Code" value= <?php echo "'".$row["short_code"]."'"; ?> required <?php echo $editable; ?>>
                              <input style="text-transform:uppercase" type="hidden" name="oldshort_code" class="form-control" placeholder="Short-Code" value= <?php echo "'".$row["short_code"]."'"; ?> required <?php echo $editable; ?>>

			                      </div>

                            <?php if($_POST["action"] == "search"){ ?>

                            <div class="form-group">
                              <label for="Category">Unit No.</label>
                              <input type="text" name="unit_no" class="form-control" placeholder="Short-Code" value= <?php echo "'".$row["unit_no"]."'"; ?>  required readonly>

                            </div>

                            <?php } ?>

                            
                                <input type="hidden" name="edit_option" value= <?php echo "'".$_POST["action"]."'"; ?>  required readonly>
                                <input type="hidden" name="barcode" value= <?php echo "'".$row["barcode"]."'"; ?>  required readonly>
                                <input type="hidden" name="unit_no" value= <?php echo "'".$row["unit_no"]."'"; ?>  required readonly>
                              

			                      <div class="form-group">
			                        <label for="Category" style="color: green;">Quantity</label>
			                        <input type="number" name="quantity" class="form-control" placeholder="Quantity" value= <?php echo "'".$row["quantity"]."'"; ?> required <?php echo $editable; ?> >

			                      </div>

			                      <div class="form-group">
			                        <label for="Category" style="color: green;">Page No.</label>
			                        <input style="text-transform:uppercase" type="text" name="page_no" class="form-control" placeholder="Page no." value= <?php echo "'".$row["page_no"]."'"; ?> <?php echo $editable; ?> required>

			                      </div>

			                      <div class="form-group">
			                        <label for="Category" style="color: green;">Unit cost</label>
			                        <input type="number" step="any" name="unit_cost" class="form-control" placeholder="Unit cost" value= <?php echo "'".$row["unit_price"]."'"; ?> required <?php echo $editable; ?> >

			                      </div>

			                    </div>

			                    <div class="col-sm-6">

			                  <?php if($_POST['action'] == 'search_grp'){ ?>

			                      <div class="form-group">
                        <label for="Category" style="color: green;">Faculty</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" <?php echo $disabled; ?>  id="inlineRadio1" value="FOT" <?php echo ($row["faculty"]== 'FOT') ?  "checked" : "" ;  ?> required>
                            <label class="form-check-label" for="inlineRadio1">FOT</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" <?php echo $disabled; ?>  id="inlineRadio2" value="FOP" <?php echo ($row["faculty"]== 'FOP') ?  "checked" : "" ;  ?> required>
                            <label class="form-check-label" for="inlineRadio2">FOP</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" <?php echo $disabled; ?>  id="inlineRadio2" value="FOD" <?php echo ($row["faculty"]== 'FOD') ?  "checked" : "" ;  ?> required>
                            <label class="form-check-label" for="inlineRadio2">FOD</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" <?php echo $disabled; ?>  id="inlineRadio2" value="FOMIS" <?php echo ($row["faculty"]== 'FOMIS') ?  "checked" : "" ;  ?> required>
                            <label class="form-check-label" for="inlineRadio2">FOMIS</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" <?php echo $disabled; ?>  id="inlineRadio2" value="FOM" <?php echo ($row["faculty"]== 'FOM') ?  "checked" : "" ;  ?> required>
                            <label class="form-check-label" for="inlineRadio2">FOM</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" <?php echo $disabled; ?>  id="inlineRadio2" value="UNI" <?php echo ($row["faculty"]== 'UNI') ?  "checked" : "" ;  ?> required>
                            <label class="form-check-label" for="inlineRadio2">UNI</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" <?php echo $disabled; ?>  id="inlineRadio2" value="CC" <?php echo ($row["faculty"]== 'CC') ?  "checked" : "" ;  ?> required>
                            <label class="form-check-label" for="inlineRadio2">CONSTITUTION COLLEGES</label>
                          </div>
                      </div><br><br>

	                    <?php } else { ?>

			                      
			                      <div class="form-group">
			                        <label for="Category" style="color: green;">Faculty</label>
			                        
			                            <input class="form-control" type="text" name="faculty" id="inlineRadio1" value= <?php echo "'".$row['faculty']."'" ?> required readonly >
			                           </div><br>
			                           
			                         
			                      

			                     <?php } ?>  

			                      <?php if($_POST['action'] == 'search_grp'){ ?>

                      <div class="form-group"  style="margin-top: -30px;">
                        
                        <div id="fot" style="display: none;">
                        <label for="Category" style="color: green;">Department</label>
                          <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'CE') ?  "checked" : "" ;  ?> value="CE" >
                             CE
                            </div>
                          <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'EC') ?  "checked" : "" ;  ?> value="EC" >
                             EC
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'IT') ?  "checked" : "" ;  ?> value="IT" >
                             IT
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'CH') ?  "checked" : "" ;  ?> value="CH" >
                             CH
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'CL') ?  "checked" : "" ;  ?> value="CL" >
                             CL
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'MH') ?  "checked" : "" ;  ?> value="MH" >
                             MH
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'IC') ?  "checked" : "" ;  ?> value="IC" >
                             IC
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'DOBR') ?  "checked" : "" ;  ?> value="DOBR" >
                             DOBR
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'BCA') ?  "checked" : "" ;  ?> value="BCA" >
                             BCA
                            </div>

                         </div>

                         <div id="uni" style="display: none;">
                            <label for="Category" style="color: green;">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="CC" >
                               CC
                              </div>
                        
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="RND" >
                             RND
                            </div>
                           
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="LIB" >
                             LIB
                            </div>
                            
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="ANCH" >
                             ANCH
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="SSNT" >
                             SSNT
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="EXAM" >
                             EXAM
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="BRCOE" >
                             BRCOE
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="OTHERS" >
                             OTHERS
                            </div>

                         </div>
                          
                          <div id="fop" style="display: none;">
                            <label for="Category" style="color: green;">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  <?php echo ($row["department"]== 'FOP') ?  "checked" : "" ;  ?> id="inlineRadio1" value="FOP" >
                               FOP
                            </div>
                          </div>

                          <div id="fod" style="display: none;">
                            <label for="Category" style="color: green;">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  <?php echo ($row["department"]== 'FOD') ?  "checked" : "" ;  ?> id="inlineRadio1" value="FOD" >
                               FOD
                            </div>
                          </div>

                          <div id="fom" style="display: none;">
                            <label for="Category" style="color: green;">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" <?php echo ($row["department"]== 'FOM') ?  "checked" : "" ;  ?> value="FOM" >
                               FOM
                            </div>
                          </div>

                          <div id="fomis" style="display: none;">
                            <label for="Category" style="color: green;">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" value="MCA" <?php echo ($row["department"]== 'MCA') ?  "checked" : "" ;  ?>  >
                               MCA
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" value="MBA" <?php echo ($row["department"]== 'MBA') ?  "checked" : "" ;  ?> >
                               MBA
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" value="HM" <?php echo ($row["department"]== 'HM') ?  "checked" : "" ;  ?> >
                               HM
                            </div>
                          </div>

                          <div id="cc" style="display: none;">
                            <label for="Category" style="color: green;">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" value="BBA" <?php echo ($row["department"]== 'BBA') ?  "checked" : "" ;  ?>>
                               BBA
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" value="BCOME" <?php echo ($row["department"]== 'BCOME') ?  "checked" : "" ;  ?> >
                               BCOM(E)
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" value="BCOMG" <?php echo ($row["department"]== 'BCOMG') ?  "checked" : "" ;  ?> >
                               BCOM(G)
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" <?php echo $disabled; ?>  id="inlineRadio1" value="MCOM" <?php echo ($row["department"]== 'MCOM') ?  "checked" : "" ;  ?> >
                               MCOM
                            </div>
                          </div>
                      </div>

                      <?php } else { ?>

                            <div class="form-check form-check-inline ">
                            <label for="Category" style="color: green;">Department</label><br>
                                <input class="form-control" type="text" name="department"  value=<?php echo "'".$row["department"]."'";?> readonly/>
                               
                            </div>

                            <?php } ?>

			                      <div class="form-group">
			                        <label for="Category">Location</label>
			                        <input type="text" style="text-transform:uppercase" maxlength="10" name="location" class="form-control" placeholder="Location" value= <?php echo "'".$row["location"]."'"; ?>  >

			                      </div>

			                     <div class="form-group" style="width: 40%;">
                     
                      <label for="exampleFormControlSelect1">Host Department</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="loc_dept">
                       <?php 
                            $sql2 = "SELECT distinct(`department`) FROM `assets_data` ";
                            $result2 = $conn->query($sql2);
                            
                          ?>
                            
                           <?php  while($row2 = $result2->fetch_assoc()) { ?>

                            <option  value=<?php echo "'".$row2['department']."'"; ?> <?php if( $row['loc_dept'] == $row2['department']){echo "selected='selected'";} ?> > <?php echo $row2['department']; ?></option>

                            <?php }
                         ?>
                      </select>
                    </div><br>

			                      <div class="form-group">
			                        <label for="Category">Remark</label>
			                        <input type="text" name="remark" class="form-control" placeholder="Remark" value= <?php echo "'".$row["remark"]."'"; ?>  >

			                      </div>

			                      <div class="form-group" style="display: none;" id="fs">
			                        <label for="Category" style="color: green;">Functional Status</label>
			                        <div class="form-check form-check-inline">
			                            <input class="form-check-input" type="radio" name="func_stat" id="inlineRadio1" value="1" <?php echo ($row["functional_status"]== 1) ?  "checked" : "" ;  ?> required>
			                            <label class="form-check-label" for="inlineRadio1">Working</label>
			                          </div>
			                          <div class="form-check form-check-inline">
			                            <input class="form-check-input" type="radio" name="func_stat" id="inlineRadio2" <?php echo ($row["functional_status"]== 0) ?  "checked" : "" ;  ?> value="0" required>
			                            <label class="form-check-label" for="inlineRadio2">Not-Working</label>
			                          </div>
			                      </div>

			                      <div class="form-group">
			                        <label for="Category" style="color: green;">Stock Status</label>
			                        <div class="form-check form-check-inline">
			                            <input class="form-check-input" type="radio" name="stock_status" id="inlineRadio1" value="1" <?php echo ($row["stock_status"] == 1) ?  "checked" : "" ;  ?> required>
			                            <label class="form-check-label" for="inlineRadio1">Present</label>
			                          </div>
			                          <div class="form-check form-check-inline">
			                            <input class="form-check-input" type="radio" name="stock_status" id="inlineRadio2" <?php echo ($row["stock_status"] == 2) ?  "checked" : "" ;  ?> value="2" required>
			                            <label class="form-check-label" for="inlineRadio2">Lost</label>
			                          </div>
			                          <div class="form-check form-check-inline">
			                            <input class="form-check-input" type="radio" name="stock_status" id="inlineRadio2" <?php echo ($row["stock_status"] == 3) ?  "checked" : "" ;  ?> value="3" required>
			                            <label class="form-check-label" for="inlineRadio2">Scrap</label>
			                          </div>
			                      </div>

			                      <a href=<?php echo "'".$row['path']."'"; ?> >View Image</a><br>
			                      <a href=<?php echo "'".$row['ppath']."'"; ?> >View PDF</a><br>

			                            <div class="form-group">
			                            	<input type="hidden" name="old_path" value=<?php echo "'".$row['path']."'"; ?> class="form-control">
			                            	<input type="hidden" name="old_ppath" value=<?php echo "'".$row['ppath']."'"; ?> class="form-control">

			                            	<?php if($_POST['action'] == 'search_grp' ) { ?>

			                            	<label for="Category">Upload Image</label><br>
			                            	<input type="file" name="file" class="form-control"><br>
			                            	<label for="Category">Upload PDF</label><br>
			                            	<input type="file" name="filep" class="form-control"><br>

			                            	<?php } ?>
			                            </div>
			                      
			                      <button type="submit" class="btn btn-primary">Edit</button>

			                    </div>
			              </form>
			            </div>
			            <div class="col-sm-1""></div>
			          </div>
			    </div>

		    	

		    	<?php
		    			}
		    		}

		    	?>
            	
		    </div>

		  </div>
		</div>

		<script type="text/javascript" src="../../include/js/jquery.js"></script>

      <!-- Include Date Range Picker -->
      <script type="text/javascript" src="../../include/bootstrap-3.3.7-dist/js/datepicker.min.js"></script>

      <link rel="stylesheet" href="../../include/bootstrap-3.3.7-dist/css/dp.css"/>


     <script>
          $(document).ready(function(){
            var date_input=$('input[name="p_date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
              format: 'yyyy-mm-dd',
              container: container,
              todayHighlight: true,
              autoclose: true,
            })
          })
      </script>

        <script>
          $(document).ready(function(){
            var date_input=$('input[name="b_date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
              format: 'yyyy-mm-dd',
              container: container,
              todayHighlight: true,
              autoclose: true,
            })
          })
        </script>

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

        <script type="text/javascript">
        $(document).ready(function(){
            $("input[name='faculty']").click(function(){
                var radioValue = $("input[name='faculty']:checked").val();
                if(radioValue == "FOT"){
                    var divt = document.getElementById('fot');
                    var divp = document.getElementById('fop');
                    var divd = document.getElementById('fod');
                    var divm = document.getElementById('fom');
                    var divmis = document.getElementById('fomis');
                    var divu = document.getElementById('uni');
                    var divc = document.getElementById('cc');
                    divt.style.display = 'block';
                    divp.style.display = 'none';
                    divd.style.display = 'none';
                    divm.style.display = 'none';
                    divmis.style.display = 'none';
                    divu.style.display = 'none';
                    divc.style.display = 'none';
                }
                else if(radioValue == "FOP"){
                    var divt = document.getElementById('fot');
                    var divp = document.getElementById('fop');
                    var divd = document.getElementById('fod');
                    var divm = document.getElementById('fom');
                    var divmis = document.getElementById('fomis');
                    var divu = document.getElementById('uni');
                    var divc = document.getElementById('cc');
                    divt.style.display = 'none';
                    divp.style.display = 'block';
                    divd.style.display = 'none';
                    divm.style.display = 'none';
                    divmis.style.display = 'none';
                    divu.style.display = 'none';
                    divc.style.display = 'none';
                }
                else if(radioValue == "FOD"){
                    var divt = document.getElementById('fot');
                    var divp = document.getElementById('fop');
                    var divd = document.getElementById('fod');
                    var divm = document.getElementById('fom');
                    var divmis = document.getElementById('fomis');
                    var divu = document.getElementById('uni');
                    var divc = document.getElementById('cc');
                    divt.style.display = 'none';
                    divp.style.display = 'none';
                    divd.style.display = 'block';
                    divm.style.display = 'none';
                    divmis.style.display = 'none';
                    divu.style.display = 'none';
                    divc.style.display = 'none';
                }
                else if(radioValue == "FOM"){
                    var divt = document.getElementById('fot');
                    var divp = document.getElementById('fop');
                    var divd = document.getElementById('fod');
                    var divm = document.getElementById('fom');
                    var divmis = document.getElementById('fomis');
                    var divu = document.getElementById('uni');
                    var divc = document.getElementById('cc');
                    divt.style.display = 'none';
                    divp.style.display = 'none';
                    divd.style.display = 'none';
                    divm.style.display = 'block';
                    divmis.style.display = 'none';
                    divu.style.display = 'none';
                    divc.style.display = 'none';
                }
                else if(radioValue == "FOMIS"){
                    var divt = document.getElementById('fot');
                    var divp = document.getElementById('fop');
                    var divd = document.getElementById('fod');
                    var divm = document.getElementById('fom');
                    var divmis = document.getElementById('fomis');
                    var divu = document.getElementById('uni');
                    var divc = document.getElementById('cc');
                    divt.style.display = 'none';
                    divp.style.display = 'none';
                    divd.style.display = 'none';
                    divm.style.display = 'none';
                    divmis.style.display = 'block';
                    divu.style.display = 'none';
                    divc.style.display = 'none';
                }
                else if(radioValue == "UNI"){
                    var divt = document.getElementById('fot');
                    var divp = document.getElementById('fop');
                    var divd = document.getElementById('fod');
                    var divm = document.getElementById('fom');
                    var divmis = document.getElementById('fomis');
                    var divu = document.getElementById('uni');
                    var divc = document.getElementById('cc');
                    divt.style.display = 'none';
                    divp.style.display = 'none';
                    divd.style.display = 'none';
                    divm.style.display = 'none';
                    divmis.style.display = 'none';
                    divu.style.display = 'block';
                    divc.style.display = 'none';
                }
                else if(radioValue == "CC"){
                    var divt = document.getElementById('fot');
                    var divp = document.getElementById('fop');
                    var divd = document.getElementById('fod');
                    var divm = document.getElementById('fom');
                    var divmis = document.getElementById('fomis');
                    var divu = document.getElementById('uni');
                    var divc = document.getElementById('cc');
                    divt.style.display = 'none';
                    divp.style.display = 'none';
                    divd.style.display = 'none';
                    divm.style.display = 'none';
                    divmis.style.display = 'none';
                    divu.style.display = 'none';
                    divc.style.display = 'block';
                }
            });
            
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("input[name='category']").click(function(){
                var radioValue = $("input[name='category']:checked").val();
                if(radioValue == "Fixed"){
                    var div = document.getElementById('fs');
                    div.style.display = 'block';

                }
                else
                {
                  var div = document.getElementById('fs');
                    div.style.display = 'none ';
                }
              });
          });
      </script>

      <script type="text/javascript">
        $(document).ready(function(){
            
                var radioValue = $("input[name='category']:checked").val();
                if(radioValue == "Fixed" ){
                    var div = document.getElementById('fs');
                    div.style.display = 'block';

                }
                else
                {
                  var div = document.getElementById('fs');
                    div.style.display = 'none ';
                }
              
          });
      </script>
	</body>
</html>
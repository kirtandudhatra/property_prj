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

    <title>Search -  DDU-assets</title>

    <!-- Bootstrap core CSS -->
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <script type="text/javascript" src="../../include/js/jquery.js"></script>
    <script type="text/javascript" src="../../include/js/datatables.js"></script>

  


  </head>

  <body style="background-color: #f47b29;">


  <?php 
      include('../../include/header.php');

      include('admin_buttons.php');

    ?>
    <br>

  		<div class="container">
          <div class="row">
            <div class="col-sm-12" style="background-color: #fff;border-radius: 20px ">
            	<div class="col-sm-6">
            		<h3>Search with Barcode:</h3>
                <form action="search_barcode.php" method="POST">
		            <div class="col-sm-5">
                  
		            		<input style="text-transform:uppercase" type="text" name="barcode" class="form-control" placeholder="Search with barcode" required><br><br><br>
                  
		            </div>
		            <div class="col-sm-1">
		            		<button id="s_barcode" class="btn btn-primary">Search</button>
		            </div>
                </form>
		        </div>

		        <div class="col-sm-6">
		        	<h3>Search :</h3>
              <div class="col-sm-10"></div><div class="col-sm-2" style="margin-top: -50px"><a href="#" style="text-align: right;">Help</a></div><br>
              <form action="search_result.php" method="POST">
		        	

                  <div class="form-group" style="margin-top: 70px;">
                       
                        
                        <div class="col-sm-5">Date Between (Start - End):
                           <div class="input-group">
	                            <div class="input-group-addon">
		                             <i class="fa fa-calendar">
		                             </i>
	                            </div>
	                            <input class="form-control" id="date" name="date_start" placeholder="YYYY/MM/DD" type="text"/ >
	                            <input class="form-control" id="date" name="date_end" placeholder="YYYY/MM/DD" type="text"/ >
                           </div>
                       </div>
                       <div class="col-sm-7"></div>
                   </div>


                    <div class="form-group" style="margin-top: -60px;">
                        
                        
                        <div class="col-sm-5">Price Between (Start - End):
                           <div class="input-group">
                            	<div class="input-group-addon">
		                             <i class="fa fa-calendar">
		                             </i>
                            	</div>
	                            <input class="form-control" id="price1" name="price_start" placeholder="Starting Price" type="text"/ autocomplete="off">
	                            <input class="form-control" id="dprice2" name="price_end" placeholder="Ending Price" type="text"/ autocomplete="off">
                           </div>
                       </div>

                   </div><br><br><br><br><br><br><br><br>

                  <div class="form-group" style="margin-top: -50px; width: 40%">
                     
                      <label for="exampleFormControlSelect1">Short Code</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="shortcode">
                       <?php 
                            $sql = "SELECT distinct(`short_code`) FROM `assets_data` ";
                            $result = $conn->query($sql);
                          ?>
                             <option  value="all">All</option> 
                           <?php  while($row = $result->fetch_assoc()) { ?>

                            <option  value=<?php echo "'".$row['short_code']."'"; ?> > <?php echo $row['short_code']; ?></option>

                            <?php }
                         ?>
                      </select>
                    </div><br><br><br>

                        <div class="form-group col-sm-6" style="margin-top: -60px;">
                        <label for="Category">Faculty</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio1" value="FOT" >
                            <label class="form-check-label" for="inlineRadio1">FOT</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="FOP" >
                            <label class="form-check-label" for="inlineRadio2">FOP</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="FOD" >
                            <label class="form-check-label" for="inlineRadio2">FOD</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="FOMIS" >
                            <label class="form-check-label" for="inlineRadio2">FOMIS</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="FOM" >
                            <label class="form-check-label" for="inlineRadio2">FOM</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="UNI" >
                            <label class="form-check-label" for="inlineRadio2">UNI</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="CC" >
                            <label class="form-check-label" for="inlineRadio2">CONSTITUTION COLLEGES</label>
                          </div>
                      </div><br><br>

                      <div class="form-group col-sm-6"  style="margin-top: -110px;">
                        
                        <div id="fot" style="display: none;">
                        <label for="Category">Department</label>
                          <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="CE" >
                             CE
                            </div>
                          <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="EC" >
                             EC
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="IT" >
                             IT
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="CH" >
                             CH
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="CL" >
                             CL
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="MH" >
                             MH
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="IC" >
                             IC
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="DOBR" >
                             DOBR
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="BCA" >
                             BCA
                            </div>

                         </div>

                         <div id="uni" style="display: none;">
                            <label for="Category">Department</label>
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
                              <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="OTHERS" >
                             OTHERS
                            </div>

                         </div>
                          
                          <div id="fop" style="display: none;">
                            <label for="Category">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="FOP" >
                               FOP
                            </div>
                          </div>

                          <div id="fod" style="display: none;">
                            <label for="Category">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="FOD" >
                               FOD
                            </div>
                          </div>

                          <div id="fom" style="display: none;">
                            <label for="Category">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="FOM" >
                               FOM
                            </div>
                          </div>

                          <div id="fomis" style="display: none;">
                            <label for="Category">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="MCA" >
                               MCA
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="MBA" >
                               MBA
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="HM" >
                               HM
                            </div>
                          </div>

                          <div id="cc" style="display: none;">
                            <label for="Category">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="BBA" >
                               BBA
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="BCOME" >
                               BCOM(E)
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="BCOMG" >
                               BCOM(G)
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="MCOM" >
                               MCOM
                            </div>
                          </div>
                      </div><br><br><br><br><br><br><br>

                      <div class="form-group" style="width: 40%;">
                     
                      <label for="exampleFormControlSelect1">Location</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="location">
                       <?php 
                            $sql = "SELECT distinct(`location`) FROM `assets_data` ";
                            $result = $conn->query($sql);
                          ?>
                             <option  value="all">All</option> 
                           <?php  while($row = $result->fetch_assoc()) { ?>

                            <option  value=<?php echo "'".$row['location']."'"; ?> > <?php echo $row['location']; ?></option>

                            <?php }
                         ?>
                      </select>
                    </div><br>

                       <div class="form-group">
                        <label for="Category" >Functional Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="func_status" id="inlineRadio1" value="-1" required checked>
                            <label class="form-check-label" for="inlineRadio1">All</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="func_status" id="inlineRadio1" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">Working</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="func_status" id="inlineRadio2" value="0" required>
                            <label class="form-check-label" for="inlineRadio2">Non-working</label>
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="Category" >Stock Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="stock_status" id="inlineRadio1" value="-1" required checked>
                            <label class="form-check-label" for="inlineRadio1">All</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="stock_status" id="inlineRadio1" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">Present</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="stock_status" id="inlineRadio2" value="3" required>
                            <label class="form-check-label" for="inlineRadio2">Write-off</label>
                          </div>
                           <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="stock_status" id="inlineRadio2" value="2" required>
                            <label class="form-check-label" for="inlineRadio2">Lost</label>
                          </div>
                      </div><br><br>
                      <button type="submit" style="margin-top: 0px;" id="s_barcode" class="btn btn-primary">Search</button>
                      <br><br>                  

		        </div>
                </form>
            </div>
          </div>
        </div>
        <br>


		<script type="text/javascript" src="../../include/js/jquery.js"></script>

      <!-- Include Date Range Picker -->
      <script type="text/javascript" src="../../include/bootstrap-3.3.7-dist/js/datepicker.min.js"></script>

      <link rel="stylesheet" href="../../include/bootstrap-3.3.7-dist/css/dp.css"/>
         <script>
          $(document).ready(function(){
            var date_input=$('input[name="date_start"]'); //our date input has the name "date"
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
            var date_input=$('input[name="date_end"]'); //our date input has the name "date"
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


  </body>
</html>
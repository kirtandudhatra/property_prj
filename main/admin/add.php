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

    <title>Add -  DDU-assets</title>

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
            <div class="col-sm-10" style="background-color: #fff; padding: 50px; border-radius: 20px ">
                <center><p style="margin-top: -15px; font-size:35px"> ADD ENTRY </p></center>
                <div class="col-sm-10"></div><div class="col-sm-2" style="margin-top: -80px"><a href="#" style="text-align: right;">Help</a></div><br>

                <form action="addcode.php" method="POST" enctype="multipart/form-data">

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="Category" style="color: green;">Category</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="inlineRadio1" value="Fixed" required>
                            <label class="form-check-label" for="inlineRadio1">Fixed</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="category" id="inlineRadio2" value="Consumable" required>
                            <label class="form-check-label" for="inlineRadio2">Consumable</label>
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="p_Date"  style="color: green;">Purchase Date</label><br>
                        
                        <div class="col-sm-5">
                           <div class="input-group">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar">
                             </i>
                            </div>
                            <input class="form-control" id="date" name="p_date" placeholder="YYYY/MM/DD" type="text" required autocomplete="off" />
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
                            <input class="form-control" id="date" name="b_date" placeholder="YYYY/MM/DD" type="text" autocomplete="off"/ >
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
                            <input class="form-control" id="date" name="pay_date" placeholder="YYYY/MM/DD" type="text" autocomplete="off"/ >
                           </div>
                          </div>
                      </div><br>

                      <div class="form-group">
                        <label for="Category">Bill No.</label>
                        <input type="text" name="bill_no" class="form-control" placeholder="Bill No." >

                      </div>

                      <div class="form-group">
                        <label for="Category">Supplier's Name</label>
                        <input type="text" name="supp_name" class="form-control" placeholder="Supplier's Name" >

                      </div>

                      <div class="form-group">
                        <label for="Category"  style="color: green;">Details of Asset</label>
                        <input type="text" name="details" class="form-control" placeholder="Details of Asset" required>

                      </div>

                      <div class="form-group">
                        <label for="Category">Type and Make</label>
                        <input type="text" name="type" class="form-control" placeholder="Type and make" >

                      </div>

                      <div class="form-group">

                        <div class="row">

                        <div class="col-sm-6">

                        <label for="Category"  style="color: green;">Short Code</label>
                        <input style="text-transform:uppercase" type="text" name="short_code" class="form-control" placeholder="Short-Code" required>

                      </div>

                        <div class="col-sm-6">
                             <label for="Category">View Short Codes</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="sc_list">
                       <?php 
                            $sql = "SELECT distinct(`short_code`) FROM `assets_data` ";
                            $result = $conn->query($sql);
                            $count = 0;
                          ?>
                            
                           <?php  while($row = $result->fetch_assoc()) { ?>

                            <option  value=<?php echo "'".$row['short_code']."'"; ?>  > <?php echo $row['short_code']; ?></option>

                            <?php }
                         ?>
                      </select>
                       </div><br>

                     </div>

                      </div>

                      <div class="form-group">
                        <label for="Category" style="color: green;">Quantity</label>
                        <input type="number" name="quantity" class="form-control" placeholder="Quantity" required>

                      </div>

                      <div class="form-group">
                        <label for="Category" style="color: green;">Page No.</label>
                        <input style="text-transform:uppercase" type="text" name="page_no" class="form-control" placeholder="Page no." required >

                      </div>

                    </div>

                    <div class="col-sm-6">

                      

                       <div class="form-group">
                        <label for="Category" style="color: green;">Unit cost</label>
                        <input type="number" step="any" name="unit_cost" class="form-control" placeholder="Unit cost" required>

                      </div>

                      <div class="form-group">
                        <label for="Category" style="color: green;">Faculty</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio1" value="FOT" required>
                            <label class="form-check-label" for="inlineRadio1">FOT</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="FOP" required>
                            <label class="form-check-label" for="inlineRadio2">FOP</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="FOD" required>
                            <label class="form-check-label" for="inlineRadio2">FOD</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="FOMIS" required>
                            <label class="form-check-label" for="inlineRadio2">FOMIS</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="FOM" required>
                            <label class="form-check-label" for="inlineRadio2">FOM</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="UNI" required>
                            <label class="form-check-label" for="inlineRadio2">UNI</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="faculty" id="inlineRadio2" value="CC" required>
                            <label class="form-check-label" for="inlineRadio2">CONSTITUTION COLLEGES</label>
                          </div>
                      </div><br><br>

                      <div class="form-group"  style="margin-top: -30px;">
                        
                        <div id="fot" style="display: none;">
                        <label for="Category" style="color: green;">Department</label>
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
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="FOP" >
                               FOP
                            </div>
                          </div>

                          <div id="fod" style="display: none;">
                            <label for="Category" style="color: green;">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="FOD" >
                               FOD
                            </div>
                          </div>

                          <div id="fom" style="display: none;">
                            <label for="Category" style="color: green;">Department</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="department" id="inlineRadio1" value="FOM" >
                               FOM
                            </div>
                          </div>

                          <div id="fomis" style="display: none;">
                            <label for="Category" style="color: green;">Department</label>
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
                            <label for="Category" style="color: green;">Department</label>
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
                      </div>

                      <div class="form-group">
                      
                        <div clas="row">
                          <div class="col-sm-6">
                             <label for="Category">Location</label>
                        <input style="text-transform:uppercase;" type="text" name="location" class="form-control" placeholder="Location" maxlength="10"  >
                        </div>

                         <div class="col-sm-6">
                             <label for="Category">View Locations</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="loc_list">
                       <?php 
                            $sql = "SELECT distinct(`location`) FROM `assets_data` ";
                            $result = $conn->query($sql);
                            $count = 0;
                          ?>
                            
                           <?php  while($row = $result->fetch_assoc()) { ?>

                            <option  value=<?php echo "'".$row['location']."'"; ?>  > <?php echo $row['location']; ?></option>

                            <?php }
                         ?>
                      </select>
                       </div><br>
                      </div><br>

                      </div><br>

                      <div class="form-group" style="width: 40%;">
                     
                      <label for="exampleFormControlSelect1">Host Department</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="loc_dept">
                       <?php 
                            $sql = "SELECT distinct(`department`) FROM `assets_data` ";
                            $result = $conn->query($sql);
                            $count = 0;
                          ?>
                            
                           <?php  while($row = $result->fetch_assoc()) { ?>

                            <option  value=<?php echo "'".$row['department']."'"; ?> <?php if($count == 0){echo "default";} ?> > <?php echo $row['department']; ?></option>

                            <?php }
                         ?>
                      </select>
                    </div><br>


                      <div class="form-group">
                        <label for="Category">Remark</label>
                        <input type="text" name="remark" class="form-control" placeholder="Remark">

                      </div>

                      <div class="form-group" style="display: none;" id="fs">
                        <label for="Category" style="color: green;">Functional Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="func_stat" id="inlineRadio1" value="1" required checked>
                            <label class="form-check-label" for="inlineRadio1">Working</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="func_stat" id="inlineRadio2" value="0" required>
                            <label class="form-check-label" for="inlineRadio2">Not-Working</label>
                          </div>
                      </div>

                       <label for="Category">Upload Image</label><br>

                      <input type="file" name="file" class="form-control"><br>

                       <label for="Category">Upload PDF</label><br>

                      <input type="file" name="filep" class="form-control"><br>
                      
                      <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
              </form>
            </div>
            <div class="col-sm-1""></div>
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

    
  </body>

  </html>
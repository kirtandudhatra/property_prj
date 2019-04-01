<?php 
  include('student_header.php');

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
              <form action="search_result.php" method="POST">
		        	

                  <div class="form-group" style="margin-top: 70px;">
                       
                        
                        <div class="col-sm-5">Date Between (Start - End):
                           <div class="input-group">
	                            <div class="input-group-addon">
		                             <i class="fa fa-calendar">
		                             </i>
	                            </div>
	                            <input class="form-control" id="date" name="date_start" placeholder="YYYY/MM/DD" type="text"/ autocomplete="off" >
	                            <input class="form-control" id="date" name="date_end" placeholder="YYYY/MM/DD" type="text"/ autocomplete="off" >
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
	                            <input class="form-control" id="price1" name="price_start" placeholder="Starting Price" type="text"/ >
	                            <input class="form-control" id="dprice2" name="price_end" placeholder="Ending Price" type="text"/ >
                           </div>
                       </div>

                   </div><br><br><br><br><br><br>

                  <div class="form-group">
                    Shortcode:<br>
                    
                    <div class="col-sm-5">
                  		<input style="text-transform:uppercase" type="text" name="shortcode" class="form-control" placeholder="Shortcode" >
                  	</div>
                  </div><br><br><br>

                      
                            <input class="form-check-input" type="hidden" name="faculty" id="inlineRadio1" value=<?php echo "'".$_SESSION["user_faculty"]."'"; ?> >
                           
                              <input class="form-check-input" type="hidden" name="department" id="inlineRadio1" value=<?php echo "'".$_SESSION["user_department"]."'"; ?> >

                      <div class="form-group" style="margin-top: -10px;">
                        Location:<br>
                        
                        <div class="col-sm-5">
                      		<input type="text" name="location" style="text-transform:uppercase" maxlength="10" class="form-control" placeholder="Location" ><br><br><br>
                      	</div>
                      </div><br><br><br><br>
                      <button type="submit" style="margin-top:0px;" id="s_barcode" class="btn btn-primary">Search</button>
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

      <script type="text/javascript">
		    $(document).ready(function(){
		        $("input[name='faculty']").click(function(){
		            var radioValue = $("input[name='faculty']:checked").val();
		            if(radioValue == "FOT"){
		                var divt = document.getElementById('fot');
                    var divp = document.getElementById('fop');
                    var divd = document.getElementById('fod');
                    var divm = document.getElementById('fom');
                    divt.style.display = 'block';
                    divp.style.display = 'none';
                    divd.style.display = 'none';
                    divm.style.display = 'none';
		            }
                else if(radioValue == "FOP"){
                    var divt = document.getElementById('fot');
                    var divp = document.getElementById('fop');
                    var divd = document.getElementById('fod');
                    var divm = document.getElementById('fom');
                    divt.style.display = 'none';
                    divp.style.display = 'block';
                    divd.style.display = 'none';
                    divm.style.display = 'none';
                }
		        });
		        
		    });
		</script>


  </body>
</html>
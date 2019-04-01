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

    <title>Create User DDU-assets</title>

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
            <div class="col-sm-3"></div>
            <div class="col-sm-6" style="background-color: #fff; padding: 50px; border-radius: 20px ">
                <center><p style="margin-top: -15px; font-size:35px"> CREATE USER </p></center>
                <div class="col-sm-10"></div><div class="col-sm-2" style="margin-top: -80px"><a href="#" style="text-align: right;">Help</a></div><br>
                <form action="create_user_code.php" method="POST">

                	 <div class="form-group">
                        <label for="Category">User Name</label>
                        <input type="text" name="user_name" class="form-control" placeholder="User Name" required>

                      </div>

                      <div class="form-group">
                        <label for="Category">Password</label>
                        <input type="text" name="pass" class="form-control" placeholder="Password" required>

                      </div>

                      <div class="form-group">
                        <label for="Category">Type</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="1" >
                            <label class="form-check-label" for="inlineRadio1">Admin</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="2" >
                            <label class="form-check-label" for="inlineRadio2">Department Admin</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="3" >
                            <label class="form-check-label" for="inlineRadio2">Student</label>
                          </div>
                      </div><br><br><br>

                      <div class="form-group col-sm-6" id="faculty" style="margin-top: -60px; display: none;">
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

                      <div class="form-group col-sm-6" id="department"  style="margin-top: -110px;">
                        
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

                      <button type="submit" class="btn btn-primary">Submit</button>



                </form>

            </div>
         </div>
   </div>

   <script type="text/javascript" src="../../include/js/jquery.js"></script>

   <script type="text/javascript">
        $(document).ready(function(){
            $("input[name='type']").click(function(){
                var radioValue = $("input[name='type']:checked").val();
                if(radioValue == "1"){
                	var divf = document.getElementById('faculty');
                    var divd = document.getElementById('department');
                    divf.style.display = 'none';
                    divd.style.display = 'none';
                  }
                else if(radioValue == "2" || radioValue == "3"){
                	var divf = document.getElementById('faculty');
                    var divd = document.getElementById('department');
                    divf.style.display = 'block';
                    divd.style.display = 'block';
                  }
            });
            
        });
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


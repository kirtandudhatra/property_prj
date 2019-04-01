<?php 
  include('faculty_header.php');

  ?>

<html lang="en" style="background-color: #f47b29;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../include/ddulogo.png">

    <title>Faculty for DDU-assets</title>

    <!-- Bootstrap core CSS -->
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../include/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">


  </head>

  <body style="background-color: #f47b29;">

  <?php 
      include('../../include/header.php');
       include('faculty_buttons.php');

    ?>
    <br><br><br><br>
      <div class="container">
          <div class="row">

            
            <a href="add.php"><div class="col-xs-4"><div style="background-color: white; padding: 10px; border-radius: 30px;" ><center><br><br><h3>Add New Entry</h3><br><br><br></center></div></div></a>

            <a href="edit.php">
            <div class="col-xs-4"><div style="background-color: white; padding: 10px; border-radius: 30px;" ><center><br><br><h3>Edit Entry</h3><br><br><br></center></div></div></a>
            
             <a href="search.php"><div class="col-xs-4"><div style="background-color: white; padding: 10px; border-radius: 30px;" ><center><br><br><h3>Search Entry</h3><br><br><br></center></div></div>
            </a>

          </div>
        </div>

         
    
  </body>
</html>

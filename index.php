
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="include/ddulogo.png">

    <title>Login for DDU-assets</title>

    <!-- Bootstrap core CSS -->
    <link href="include/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="include/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="include/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <?php 

      include('index_header.php');
?>
    <div class="container">

      <form class="form-signin" action="main/login.php" method="POST">
        <h2 class="form-signin-heading">Login:</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="uname" class="form-control" name="uname" placeholder="User Name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="pass"  placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>

<?php
  include("connect_db.php");
    if (isset($_POST['submit']))
        {
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$username;
    $query = mysqli_query($conn, "SELECT username FROM users WHERE username='$username' and password='$password'");
     if (mysqli_num_rows($query) != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Quản lý khách hàng</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
    </head>

    <body>
      <?php include("header.php"); ?>
      <div class="row login-form">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
          <div class="login-panel panel panel-default">
            <div class="panel-heading text-center">ĐĂNG NHẬP</div>
            <div class="panel-body">
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" id="username" name= "username" type="text" placeholder="username">
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" id="password">
                  </div>
                  <div class="div-button-center">
                    <input class="btn btn-primary" name="submit" type="submit" value="Login">
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include("footer.php"); ?>
    </body>
</html>

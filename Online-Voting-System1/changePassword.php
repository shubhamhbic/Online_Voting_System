<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Change Password</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

  <style>
    .headerFont {
      font-family: 'Ubuntu', sans-serif;
      font-size: 24px;
    }

    .subFont {
      font-family: 'Raleway', sans-serif;
      font-size: 14px;

    }

    .specialHead {
      font-family: 'Oswald', sans-serif;
    }

    .normalFont {
      font-family: 'Roboto Condensed', sans-serif;
    }
  </style>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="container">
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="cpanel.php" class="navbar-brand headerFont text-lg"><strong>Online Voting System</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
             <li><a href="nomination.php"><span class="subFont"><strong>Candidates</strong></span></a></li>
            <li><a href="changePassword.php"><span class="subFont"><strong>Change Password</strong></span></a></li>
            <li><a href="users.php"><span class=""><strong>Voters</strong></span></a></li> 
          
          </ul>
          
          
          <span class="normalFont"><a href="index.php" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    <?php
    $con = mysqli_connect('localhost', 'root', '', 'db_evoting1') or die('Unable To connect');
    if (count($_POST) > 0) {
      $result = mysqli_query($con, "SELECT *from tbl_admin");
      $row = mysqli_fetch_array($result);
      if ($_POST["existingPassword"] == $row["admin_password"] && $_POST["newPassword"] == $_POST["retypePassword"]) {
        mysqli_query($con, "UPDATE tbl_admin set admin_password='" . $_POST["newPassword"] . "' WHERE true");
        echo '<script>alert("Password succsesfully changed")</script>';
      } else {
        echo '<script>alert("Password is not correct")</script>';
      }
    }
    ?>

    <div class="container" style="padding-top:100px;">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:2px solid gray;padding:50px;">

          <div class="page-header">
            <h2 class="specialHead">Admin's Password</h2>
          </div>
          <form method="POST">
            <div class="form-group">
              <label for="">Old Password</label><br>
              <input type="text" name="existingPassword" placeholder="Enter Old Password" class="form-control" required><br>

              <label for="">New Password</label><br>
              <input type="password" name="newPassword" class="form-control" placeholder="Enter New Password" required><br>

              <label for="">Retype Password</label><br>
              <input type="password" name="retypePassword" class="form-control" placeholder="Enter New Password Again" required><br>

              <button type="submit" class="btn btn-block span btn-primary "> <span class="glyphicon glyphicon-ok"></span> Change Password</button>
            </div>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
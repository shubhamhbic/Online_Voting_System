<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Voting Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
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
          <a href="index.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!--
             <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li> 
          -->
          </ul>
          

          <span class="normalFont"><a href="admin.php" class="btn btn-success navbar-right navbar-btn"><strong>Admin Panel</strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'db_evoting1') or die('Unable To connect');
    if ( $_SERVER['REQUEST_METHOD'] == 'GET') {

      if ( !isset($_GET["id"]) ) {
          header("location:vault.php");
          exit;
    
      $result = mysqli_query($con, "SELECT *from tbl_user WHERE id='" . $_GET["id"] . "' WHERE true");
      $row = mysqli_fetch_array($result);
      if (!$row) {
        header("location:vault.php");
        exit;
    } 
    
    $name = $row["voterName"];
    $email = $row["voterEmail"];
    $aadhar = $row["aadhar"];
    $votarID = $row["voterID"];
    $selection = $row["selectedCandidate"];
  }

  else {
      $name= $_POST["voterName"];
      $email= $_POST["voterEmail"];
      $aadhar= $_POST["aadhar"];
      $voterID= $_POST["voterID"];
      $selection= $_POST["selectedCandidate"];
      }
       {
       $result = mysqli_query($con, "UPDATE `tbl_users` SET `full_name`='',`email`='',``='',`aadhar`='',`voted_for`='' WHERE id='" . $_GET["id"] . "';
       }
      }
    ?>
    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">Update Your Details.</h2>
            <p class="normalFont">Prove Your Authencity of being correct voter.</p>
          </div>
          
          <form action="users.php" method="POST">
           
          <div class="form-group">
           <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

            <label>Voter's Name :</label><br>
            
            <input type="text" name="voterName"  value="<?php echo $name; ?>" title="Enter Your Full Name" placeholder="Enter Your Full Name" class="form-control" ><br>

            <label>Voter's Registered Email ID :</label><br>
            <input type="text" name="voterEmail" value="<?php echo $email; ?>" placeholder="Enter Your Email ID" class="form-control"/><br>

            <label>Voter's Card No. :</label><br>
            <input id="id1" type="text" name="voterID" value="<?php echo $voterID; ?>" placeholder="Enter Your Voter Uniquie ID" class="form-control" ><br>
            
            <label>Aadhar Card No. :</label><br>
            <input type="number" name="aadhar" value="<?php echo $aadhar; ?>" placeholder="Enter Your Aadhar ID" class="form-control" ><br>

            <button type="submit" name=""><a href="aadhar.php" target="_blank">Validate</a></button>
              
            <h3 class="normalFont">Your Vote For,</h3>
              <input type="text" name="selectedCandidate" value="<?php echo $selection; ?>" class="form-control"><br>
            
              <hr>
              <button type="submit" name="submit" class="btn btn-primary"><strong>Submit</strong></button>
              <button type="reset" value="Decline"class="btn btn-default">Decline</button>
            </div>
          </div>
          </form>
        

        </div>
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

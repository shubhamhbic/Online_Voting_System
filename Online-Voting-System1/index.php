<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
.header {
	    width: 100%;
    border-bottom: 2px solid #020b50;
    height: 70px;
    position: fixed;
    top: 0%;
    background-color: #ffffff;
    z-index: 5;
    padding: 10px 150px;
}
.d_flex {
	    display: flex;
    justify-content: space-between;
    align-items: center;
}
.footer {
	background-color: #020348;
    height: auto;
    bottom: 0;
    width: 100%;
    padding-top: 0.9rem;
    padding-bottom: 0.9rem;
    z-index: 5;
}
.footer p {
	text-align: center;
    color: white;
    white-space: normal;
    text-overflow: ellipsis;
    margin: auto;
    padding: 0.5rem;
    font-size: 1rem;
}
.form {
	    background-color: #ffffff;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    border-radius: 4px;
    padding: 16px;
    margin: auto;
    max-width: 360px;
        margin-top: 90px;
    overflow: hidden;
}
.btn {
	    position: relative;
    width: 100%;
    height: 42px;
    margin: 20px 0px;
    font-family: sans-serif;
    font-weight: 400;
    font-size: 1rem;
    color: #ffffff;
    transition: all 0.1s linear;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    align-self: center;
    border: none;
    cursor: pointer;
    outline: 0;
    text-transform: capitalize;
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(to right, #020D51, #19B0DC);
}
input {
    width: 100%;
    border: 0;
    border-bottom: solid 2px #5C5958;
    padding: 0px;
    padding-bottom: 5px;
    font-size: 1.25rem;
}
input:focus {
	    border: none;
    outline: none;
    border-bottom: solid 2px #5C5958;
}
.captcha_box {
	    display: flex;
    flex-direction: row;
    border: 2px solid #707070;
    border-radius: 4px;
    width: 100%;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    margin-bottom: 20px;
}
.captcha {
    box-sizing: border-box;
    height: 40px;
    flex-grow: 1;
    text-align: center;
    margin: auto;
    display: flex;
    align-content: center;
    justify-content: center;
    position: relative;
}
.captcha svg {
	    width: 28px;
    cursor: pointer;
    position: absolute;
    right: 6px;
    top: 8px;
    border-left: 1px solid #000;
    padding-left: 3px;
}
.main_otp {
position: relative;
}
.send_otp {
background: green;
    padding: 10px;
    color: #fff;
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
    border-radius: 3px;
    text-transform: uppercase;
}
.main_baner {
    position: relative;
}
.main_baner a {

}
.main_baner img {
    width: 100%;
    margin-top: 60px;
    height: 528px;
}
.btn_group {

}
.btn_group a {
    text-decoration: none;
    background: #020348;
    padding: 10px 20px;
    border-radius: 3px;
    color: #fff;
}
.three_box {
    padding: 25px 100px;
    display: flex;
}
.three_box .box_11 {
text-align: center;
    box-shadow: 0 0 10px #969191;
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
    width: 32%;
}
.three_box .box_11 h2 {
    
}
.three_box .box_11 p {
    
}
.votingButton{
}
</style>
</head>
<body>

<div class="header">
	<div class="d_flex">
            <a href="index.php" class="navbar-brand headerFont text-lg"><img src="images/aaaa.png" height="50px"></a>
        <div class="btn_group">
            <a href="vault.php">Click here for Online Voting</a>
            <a href="admin.php" style="margin-left: 15px;background: #0ec60e;">Admin</a>    
        </div>
		
	</div>
</div>

<div class="main_baner">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images\voter-slider2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images\voter-helpline.jpg" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
</div>

<div class="conatiner" style="padding:50px;" id="aboutTab">
    <div class="row">
      <div class="col-sm-4 text-center">
        <img src="images/Nominee.png" width="100" height="100" alt="" />
        <h2 class="normalFont" style="font-size:28px;">VOTE ONLINE.</h2>
        <p><em>You Just Need Basic Details of Yours and We Will Let You Vote.</em></p>
      </div>
      <div class="col-sm-4 text-center">
        <img src="images/nominee.webp" width="100" height="100" alt="" />
        <a href="nomination1.php" class="normalFont" style="font-size:28px;">
          <h2 style="color: black">Nomination</h2>
        </a>
        <p><em>Admin's Control Panel allows you to manage the list of filled nomination.</em></p>
      </div>
      <div class="col-sm-4 text-center">
        <img src="images/Stats.png" width="100" height="100" alt="" />
        <h2 class="normalFont" style="font-size:28px;">Statitics</h2>
        <p><em>SHows You the Graphical Data Representation of your votes. And, It is in Admin's Control Panel.</em></p>
      </div>
    </div>
  </div>


	<div class="footer">
		<p>Copyright © 2020 Unique Identification Authority of India All Rights Reserved</p>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(".enter_otp").click(function(){
  $(".send_otp").hide();
});

$(".send_otp_message").click(function(){
  $(".send_otp").show();
});
</script>
</body>
</html>
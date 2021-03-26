<?php
session_start();
$id= $_SESSION['loginid'];
$link=mysqli_connect("localhost","root","","agriworld");

$auction_id=$_GET['id'];
$a_date=date("Y-m-d");
$sql="insert into tb_apply(auction_id,loginid,date) values($auction_id,$id,'$a_date')";
mysqli_query($link,$sql);


//header("location:farmer_auction_table.php");

?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
	.act
	{
		background-image: url('images/acti.gif');
	}
	</style>
	</head>
<body class="act">
	<div class="main-w3layouts wrapper">
		<h1 class="text-dark"><b>Auction was successfully Applied!</b></h1>
		<h5 class="text-center">we will call you Back</h5>
		
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles"></ul>

	</div>
</body>
</html>

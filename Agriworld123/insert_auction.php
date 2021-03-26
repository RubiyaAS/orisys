

<?php
session_start();
$id= $_SESSION['loginid'];
$mysql=new mysqli("localhost","root","","agriworld");
$crop=$_GET['cr'];
$min=$_GET['min'];
$qu=$_GET['qu'];
$a_date=$_GET['date'];
$sql=$mysql->query("insert into tb_auction(crop_name,minprice,quantity,date) values('$crop',$min,'$qu','$a_date')");
//mysqli_query($link,$sql);


header("location:auction_form.php");

?>
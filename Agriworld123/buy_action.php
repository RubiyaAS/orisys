<?php

session_start();
$id=$_SESSION['loginid'];
$mysql=new mysqli("localhost","root","","agriworld");
$cropid=$_GET['id'];
$date=date("Y-m-d");

$sql = "INSERT INTO tb_buy(crop_id,loginid,buy_date) values('$cropid',$id,'$date')";
mysqli_query($mysql,$sql);
header('location:buy_crop.php')
?>
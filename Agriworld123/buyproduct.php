<?php
session_start();
$mysql=new mysqli("localhost","root","","agriworld");
$id=$_SESSION['loginid'];
$p_id=$_GET['id'];
$date=date("Y-m-d");
$sql="insert into tb_buy_prdt (p_id,d_buy,log_id) values ($p_id,'$date',$id)";
mysqli_query($mysql,$sql);
header('location:farmer_home.php');



?>
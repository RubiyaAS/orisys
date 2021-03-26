<?php
$mysql=new mysqli("localhost","root","","agriworld");

$id=$_GET['id'];
$sql="update tb_login set status='2' where id=$id";
mysqli_query($mysql,$sql);
header('location:farmer_table_view.php');


  
?>
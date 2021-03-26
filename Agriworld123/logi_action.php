
<?php
session_start();
require "database.php";
$e=$_POST['username'];
$p=$_POST['password'];
$sql="select * from tb_login where email='$e' and password='$p'";
 $result = $conn->query($sql);
 //$count = $result->fetchColumn();
 $count = $result->rowCount();  
                if($count > 0)  
                { 
 foreach($result as $row){
	 $id=$row['id'];
	if($row['status']=='1' && $row['type']=='0'){
		 header('location:Admin_home.php');
	 }
	 elseif($row['status']=='1' && $row['type']=='1'){
		 header('location:farmer_home.php');
	 }
	 elseif($row['status']=='1' && $row['type']=='2'){
		 header('location:seller_home.php');
	 }
	 elseif($row['status']=='0'){
		header('location:farmer_welcome.php');
	 }	
if($row['status']=='2'){
		header('location:rejected.php');
	 }	 
	 
 }
 $_SESSION['loginid']=$id;
 }else{
					header('location:invalid.php');
					
				}
				
 
 
 
 // header('location:view.php');
?>
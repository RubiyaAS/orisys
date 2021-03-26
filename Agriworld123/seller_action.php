<?php
require "database.php";
$fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $date=$_POST['date'];
  $addr=$_POST['address'];
  $contact=$_POST['phone'];
  $email=$_POST['email'];
  $adar=$_POST['adhar'];  
  $pass=$_POST['password'];  
  
  
  $sql="INSERT INTO  tb_login(email,password,type) VALUES('$email','$pass','2')";
  // use exec() because no results are returned
  $conn->exec($sql);
  $inid=$conn->lastInsertId();
  $sqlr="INSERT INTO tb_seller(fname,lname,dob,address,phno,email,adar,loginid) values	('$fname','$lname','$date','$addr','$contact','$email','$adar',$inid)";
  $conn->exec($sqlr);
  echo "New record created successfully";
  header('location:seller_reg.php');
  
  
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $fname=$_POST['name'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $addr=$_POST['address'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  if(!empty($fname)&& !empty($lname) && !empty($gender) && !empty($addr) && !empty($contact) && !empty($email) && !empty($pass))
  {
  $sql="INSERT INTO tb_new_log (email,password) VALUES ('$email','$pass')";
  // use exec() because no results are returned
  $conn->exec($sql);
  $inid=$conn->lastInsertId();
  $sqlr="INSERT INTO tb_new(fname,lname,gender,address,contact,logid) values ('$fname','$lname','$gender','$addr','$contact',$inid)";
  $conn->exec($sqlr);
  echo "New record created successfully";
  header('location:index.php');
  }
  else{
	  echo "Values cann't be empty";
  }
} catch(PDOException $e) {
  echo $e->getMessage();
}

$conn = null;
?>
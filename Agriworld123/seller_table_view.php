<html>
<head>
<link rel="stylesheet" href="css/style.css">
<style>


.menubar ul li
{
	padding:15px;
}
.menubar
{
	background-color:#936c6c;
	text-align:center;
}
.menubar ul
{
	list-style:none;
	display:inline-flex;
}
.menubar ul li a
{
	color:white;
	text-decoration:none;
}
</style>
</head>

<body class="bi">
<!------- navigation starts------->
<nav class="menubar">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="gallery_images.php"> Gallery</a></li>
		<li><a href="logout.php"> logout</a>
		
			<div class="submenu">
				<ul>
					<li><a href="#"></li>
					<li><a href="#"></li>
				</ul>
			</div>
		</li>
		<li><a href="../work4/contact.html"> Contact us</a></li>
	</ul>
</nav>







<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<style>
table,th,td{
	border:2px solid black;
	padding:2px;
	border-collapse:collapse;
}
	
	

</style>
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Seller Table</h1>
		
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->






<form> 
<table>
<center>
 <tr> 
 <th>id</th>
 <th>firstname</th>
 <th>lastname</th>
 <th>DOB</th>
 <th>Address</th>
 <th>Mobile</th>
<th>email</th>
<th>Adhar</th>
<th>Action</th>


 
 
 </tr>
 <?php


$mysql=new mysqli("localhost","root","","agriworld");
$query=$mysql->query("select * from tb_seller f,tb_login l where f.loginid=l.id and type='2'");




	foreach($query as $value=>$row)
    {
	 
     echo "<tr>
	 
	 
	 
	 <td>".$row['id']."</td>
	 <td>".$row['fname']."</td>
	 <td>".$row['lname']."</td>
	 <td>".$row['dob']."</td>
	 <td>".$row['address']."</td>
	 <td>".$row['phno']."</td>
	 <td>" .$row['email']."</td>
	 <td>".$row['adar']."</td>";
?>
<td>
<?php
if($row['status']=='0')
{
?><a href="approve_seller.php?id= <?php echo $row['loginid'];?> ">Approve/</a>


<a href="reject_seller.php?id=<?php echo $row['loginid'];?>">Reject</a></td>
<?php } 
else if($row['status']=='1')
{?>approved <a href="reject_seller.php?id=<?php echo $row['loginid'];?>">Reject</a></td>
<?php
}
else
{?>
<a href="approve_seller.php?id= <?php echo $row['loginid'];?> ">Approve/</a>
Rejected<?php }
?>


<?php	 
	 
	echo " </tr>";
     

   }
   

?>
</table>
</form>

</body>
</html>
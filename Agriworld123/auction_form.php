<!DOCTYPE html>
<html>
<title>auction details</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<title>Auction form</title>
<style>
 body{
	text-align:center;


	
	
}
<!---table{
	width:300px;
	height:200px;
}--->
table,th,td{
	border:2px solid;
	border-collapse:collapse;
	padding:2px;
	
}
input {
        padding:10px;
		margin:10px;
		text-align:center;
	  }
div{
	
	height:700px;
	width:800px;
	
  }
  h1{
	  color:red;
  }
  .for{
	  margin-left:500px;
  }

</style>
</head>




<body>

<!-- main -->
	<div class="main-w3layouts wrapper">
		
		
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
		<form action="insert_auction.php" method="post">
		
<div class="col-4 for">
<h1>Auction Form</h1>
Crop name:</br><input type="text" name="cropname"> </br>
Min Price:</br><input type="text" name="minprice"></br>
Quantity:</br><input type="text" name="quantity"></br>
Date:</br><input type="date" name="date"></br>
<input type="submit" value="submit" class="bg-danger">
			
	</div>
	<!-- //main -->







</div>
</form>




<a href="auction_form.php">BACK TO HOME PAGE</a>
<table class="table">
<thead>
   <tr>
       <th>Id</th>
       <th>Crop name</th>
	   <th>Min price</th>
	   <th>Quantity</th>
	   <th>Date</th>
	</tr>
</thead>
<tbody>
<?php
$link=mysqli_connect("localhost","root","","agriworld");
if($link===false)
{
die("Error:could not connect".mysqli_connect_error());
}
$sql="select * from tb_auction";
if(mysqli_query($link, $sql))
	
{
	$result=mysqli_query($link, $sql);
	while($row=mysqli_fetch_assoc($result))
   {
	echo  "<tr>
	       <td>".$row['id']."</td>
		   <td>".$row['crop_name']."</td>
		   <td>".$row['minprice']."</td>
		   <td>".$row['quantity']."</td>
		   <td>".$row['date']."</td>
		   </tr>";

    }

}


else
{
echo "error $sql".mysqli_error($link);
}
mysqli_close($link);
?>
</tbody>
</table>
</body>
</html>




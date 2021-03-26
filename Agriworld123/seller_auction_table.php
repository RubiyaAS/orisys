<!DOCTYPE html>

<html>
<title>auction details</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;' type='text/css' media='all' />
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/superfish/css/superfish.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/dl-menu/component.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/font-awesome-new/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/elegant-font/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/fancybox/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/flexslider/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/masterslider/public/assets/css/masterslider.main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/master-custom.css' type='text/css' media='all' />

<!-- //web font -->
<title>Auction form</title>
<style>
 table,th,td,tr{
	 
		

	border:2px solid black;
	opacity: 0.9;
	padding:2px;
	border-collapse:collapse;
	color:white;
	background-color:rgba(0,0,0,0.2);
	font-size:20px;
}
            
			
.farm
{
	background-image:url('images/ric.jpg');
}	
th
{
	color:black;
}

</style>
</head>




<body class="farm">

<!-- main -->
	<div class="main-w3layouts wrapper">
		
		
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles"></ul>
		<form action="auction_apply.php" method="post">

<h1>AUCTION</h1>
<table class="table">
<thead>
   <tr>
       <th class="bg-info">Id</th>
       <th class="bg-info">Crop name</th>
	   <th class="bg-info">Min price</th>
	   <th class="bg-info">Quantity</th>
	   <th class="bg-info">Date</th>
	   <th class="bg-info">Action</th>
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
		   <td> <a href='auction_apply.php?id=".$row['id']."' class='btn btn-info'>Apply</a></td></tr>";
           
    }

}


else
{
echo "error $sql".mysqli_error($link);
}
mysqli_close($link);
?>
</div>
</tbody>
</table>

</body>
</html>
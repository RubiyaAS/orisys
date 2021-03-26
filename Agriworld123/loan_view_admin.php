<!DOCTYPE html>

<html>
<title>auction details</title>
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
table,th,td,tr{
       border:2px solid red;
padding:10px;
border-collapse:collapse;
            }

.pic{
background-image:url("images/seed.jpg");
}
.a{
color:violet;
opacity:1.9;
}

</style>
</head>

<body>

<form action="auction_apply.php" method="post">

<h1 class="a">Loan view table</h1>


<table>
   <tr>
       <th>loan name</th>
  <th>Name</th>
  <th>Place</th>
  <th>cultivated area</th>
  <th>loan amount</th>
       <th>upload file</th>
</tr>
</thead>
<tbody>

<?php
$link=mysqli_connect("localhost","root","","agriworld");
if($link===false)
{
die("Error:could not connect".mysqli_connect_error());
}
$sql="select * from tb_loan";
if(mysqli_query($link, $sql))

{
$result=mysqli_query($link, $sql);
while($row=mysqli_fetch_assoc($result))
   {
echo  "<tr>
      <td>".$row['loanname']."</td>
  <td>".$row['name']."</td>
  <td>".$row['place']."</td>
  <td>".$row['cultivatedarea']."</td>
  <td>".$row['loanamount']."</td>
  <td> <img src="."images/".$row['uploadfile']." style="."height:100px ,width:100px"."></td>

            
  </tr>";

    }

}


else
{
echo "error $sql".mysqli_error($link);
}
mysqli_close($link);
?>
</form>
</body>
</html>
 
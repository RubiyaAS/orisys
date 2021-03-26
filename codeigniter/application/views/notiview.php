<html>
<head>
<body>
<title></title>
<style>
table,th,td{border-collapse:collapse;border:1px solid #ff0000;padding:15px;}
body{
    background-image:url("../img/7.jpg");
	background-size:cover;

}
.menubar
{
	background-color:orange;
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
.submenu
{
	display:none;
}
.menubar ul li
{
	padding:15px;
}
.menubar ul li:hover
{
	background-color:#ff0000;
	border-radius:10px;
}
.menubar ul li:hover .submenu
{
	display:block;
	position:absolute;
	background-color:black;
	margin-top:15px;
	margin-left:-35px;
	border-radius:10px;
	padding:15px;
	
}
.menubar ul li:hover .submenu ul
{
	display:block;
	margin-left:-30px;
}
.menubar ul li:hover .submenu ul li
{
	padding:10px;
	border-bottom:1px solid #ff0000;
}
h1{
	text-align:center;
	color:blue;
}
</style>
<nav class="menubar">
	<ul>
		
		<li><a href="#"></a>
			<div class="submenu">
				<ul>
				
				</ul>
			</div>
			
            
		</li>
		<li><a href="#"> Contact us</a></li>
        <li><a href="<?php echo base_url()?>Main/homepro">logout</a></li>
	</ul>
</nav>
<h1>VIEW NOTIFICATION<H1>
<table>

    <tr>
        <th>name</th>
        <th>phonenumber</th>
        <th>notification</th>
        <th>currentdate</th>
        
        
        
    
    </tr>
<?php
if($n->num_rows()>0)
{
    foreach($n->result() as $row)

{
?>

    <tr>
        <td>
        <?php echo $row->name;?></td>
        <td><?php echo $row->phonenumber;?></td>
        <td><?php echo $row->notification;?></td>
        <td><?php echo $row->currentdate;?></td>
        <?php

        }
    }
        ?>
</table>
</body>
</html>
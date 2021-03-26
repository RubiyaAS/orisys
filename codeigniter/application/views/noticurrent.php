<html>
<head>
<title></title>
<style>
table,th,td{border-collapse:collapse;border:1px solid #ff0000;padding:15px;}
body{
    background-image:url("../img/7.jpg");
	background-size:cover;

}
.a
{
	
    
	width:450px;
	height:500px;
	padding:20px;
	text-align:center;
	position:relative;
	left:400px;
    margin-left:100px;
	
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
</style>
<body>
<form action="<?php echo base_url()?>Main/delete" method="post">
<nav class="menubar">
	<ul>
		
		<li><a href="#"> Registration</a>
			<div class="submenu">
				<ul>
					<li><a href="<?php echo base_url()?>Main/pro">StudentRegistration</li>
					<li><a href="<?php echo base_url()?>Main/teach">TeacherRegistration</li>
				</ul>
			</div>
			
            <li><a href="<?php echo base_url()?>Main/logview">login</a></li>
		</li>
		<li><a href="#"> Contact us</a></li>
		<li><a href="<?php echo base_url()?>Main/homepro">logout</a></li>
	</ul>
</nav>
<div class="a">
<table>

    <tr>
        
        <th><b>notification</b></th>
        <th><b>currentdate</b></th>
        <th><b>action</b></th>
        
        
        
        
    
    </tr>
<?php
if($n->num_rows()>0)
{
    foreach($n->result() as $row)

{
?>

    <tr>
        
        
        <td><?php echo $row->notification;?></td>
        <td><?php echo $row->currentdate;?></td>
        <td><a href="<?php echo base_url()?>Main/delete/<?php echo $row->id;?>">delete</a></td>
        <?php
    
   
   
     }
    }
        ?>
        </div>
</table>
</body>
</html>
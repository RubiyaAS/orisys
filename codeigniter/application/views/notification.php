<html>
<head>
<title></title>
<style>
 body
 {
    background-image:url("../img/7.jpg");
	background-size:cover;

}
.a
{
	
    color:red;
	width:450px;
	height:500px;
	padding:20px;
	text-align:center;
	position:relative;
	left:400px;
	
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
<body>
<form action="<?php echo base_url()?>Main/notiteach" method="post">
<nav class="menubar">
	<ul>
		
		<li><a href="#"> notification</a>
			<div class="submenu">
				<ul>
					<li><a href="<?php echo base_url()?>Main/pro">Add</li>
					<li><a href="<?php echo base_url()?>Main/vewnoti">view</li>
				</ul>
			</div>
			<li><a href="<?php echo base_url()?>Main/noti"></a></li>
            
		</li>
		<li><a href="#"> Contact us</a></li>
		<li><a href="<?php echo base_url()?>Main/homepro">logout</a></li>
	</ul>
</nav>
<div class="a">
<h1>NOTIFICATION</h1>
notification :<textarea  name="notification">
</textarea><br><br>
<input type="submit">
</div>
</form>
</body>
</html>
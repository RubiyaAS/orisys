

<html>
<head>
<title></title>
<style>
 body{
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
<form action="<?php echo base_url()?>Main/logteach" method="post">
<nav class="menubar">
	<ul>
	<li><a href="<?php echo base_url()?>Main/homepro">Home</a></li>
		<li><a href="#"></a>
			<div class="submenu">
				<ul>
				
				</ul>
			</div>
			
            
		</li>
		<li><a href="#"> Contact us</a></li>
		
	</ul>
</nav>
<form action="" method="post">
<div class="a">
<h1>LOGIN</h1>
email :<input type="email" name="email"><br><br>
password:<input type="password" name="password"><br><br>
<input type="submit" value="login">
</div>
</form>
</body>
</html>
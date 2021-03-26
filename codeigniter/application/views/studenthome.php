<html>
<head>
<title>first size</title>

<style>
body
{
	background-image:url("../img/uu.jpg");
	background-size:cover;
	/*text-align:center;*/
	
}

.a
{
	background-color:rgba(0,0,0,0.8);
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
	color:red;
}
</style>
</head>
<body>
<nav class="menubar">
	<ul>
		
        <li><a href="<?php echo base_url()?>Main/views">profile</li>
					<li><a href="<?php echo base_url()?>Main/viewnoti">viewnotification</li>
		<li><a href="#"></a>
			<div class="submenu">
				<ul>
					
				</ul>
			</div>
			
            <li><a href="<?php echo base_url()?>Main/homepro">logout</a></li>
		</li>
		<li><a href="#"> Contact us</a></li>
	</ul>
</nav>
<h1>WELCOME STUDENTS</h1>
</body>
</html>
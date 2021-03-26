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
<form action="<?php echo base_url()?>Main/teachinsert" method="post">
<nav class="menubar">
	<ul>
		<li><a href="<?php echo base_url()?>Main/homepro">Home</a></li>
		<li><a href="#"> </a>
			<div class="submenu">
				<ul>
					
					<li><a href="<?php echo base_url()?>Main/teach"></li>
				</ul>
			</div>
			
            <li><a href="<?php echo base_url()?>Main/logview">login</a></li>
		</li>
		<li><a href="#"> Contact us</a></li>
		<li><a href="<?php echo base_url()?>Main/homepro">logout</a></li>
	</ul>
</nav>
<div class="a">
<h1>TEACHER FORM</h1>
Name  :<input type="text" name="name"><br><br>
Address  :<textarea  name="address">
</textarea><br><br>
District :
<select name="district">
<option value="kollam">Kollam</option>
<option value="tvm">TVM</option>
<option value="pathanmthila">Pathanamthitta</option>
<option value="kozhikod">Kozhikodu</option>
<option value="ernakulam">Eranakulam</option>
</select><br>
Pincode :<input type="text" name="pincode"><br><br>
Phonenumber :<input type="text" name="phonenumber"><br><br>
Gender:
<input type="radio" name="gender" value="male" id="male">
<label for="male">male</label>
<input type="radio" name="gender" value="female" id="female">
<label for="female">female</label><br><br>
subject:<select name="subject">
<option value="malayalam">malayalm</option>
<option value="hindi">hindi</option>
<option value="english">english</option>
<option value="maths">maths</option>
<option value="cs">cs</option>
</select><br>
Email :<input type="email" name="email"><br><br>
password :<input type="password" name="password"><br><br>
<input type="submit">
</div>
</form>
</body>
</html>
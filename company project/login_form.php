<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style>
	.mar 
	{
		margin-top:50px;
		margin-left:500px;
	}
	
	</style>
	</head>
	<body>
	<nav class="navbar navbar-light bg-warning">
  <a href="index.php" class="navbar-brand">LOGIN</a>
</nav>
	
	<div class="container">
	<div class="row">
	<form action="dashboard.php" method="post">
	<div class="mar">
	<h1> LOGIN FORM</h1>
					<input type="text" name="email" placeholder="email" required="" class="px-5"><br><br>
					<input type="password" name="password" placeholder="password" required=""class="px-5"><br><br>
				<button type="submit"  class=" btn bg-danger text-white">Sign-in</button><br>New USer ?<a href="reg_action.php">  Register here</a>
	</div>
	</div>
	</div>
	</div>
					
</body>
</html>
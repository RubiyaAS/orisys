<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

session_start();
$id=$_SESSION['loginid'];
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1> LOAN ADD FORM</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				
					<?php
error_reporting(0); 
?> 
<?php
  //$msg = ""; 
  
  // If upload button is clicked ... 
 // if (isset($_POST['upload'])) { 
  
  $notification=$_POST['notification'];
  
 
  
    
          
    $db = mysqli_connect("localhost", "root", "", "agriworld"); 
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO tb_notification(notification,loginid) values('$notification',$id)";
  
        // Execute query 
        mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        //if (move_uploaded_file($tempname, $folder))  { 
            //$msg = "Image uploaded successfully"; 
       // }else{ 
            //$msg = "Failed to upload image"; 
      //} 
  //} 
  $result = mysqli_query($db, "SELECT * FROM tb_notification"); 
?> 
  
<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
<link rel="stylesheet" type= "text/css" href ="style.css"/> 
<div id="content"> 
  
  <form method="POST" action="" enctype="multipart/form-data"> 
  <input type="text" name="notification" placeholder="notification">
 
  
     
        
      <div>
          <input type="submit" name="submit" value="submit"> 
		
        </div> 
  </form> 
</div> 
</body> 
</html> 
					
					
					
					
					<div class="wthree-text">
						<label class="anim">
							
							
						</label>
						<div class="clear"> </div>
					</div>
					
				</form>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p> <a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
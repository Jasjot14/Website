<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 
  session_start();
if (!isset($_SESSION['admin_id'])) {
    
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>GS AUTO INTERNATIONAL</title>
<link href="customer/css/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="customer/css/style.css" rel='stylesheet' type='text/css'/><!-- style.css --> 
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Basic Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="customer/application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script src="customer/js/jquery.min.js"></script>
		<script>$(document).ready(function(c) {
		$('.alert-close').on('click', function(c){
			$('.main-agile').fadeOut('slow', function(c){
				$('.main-agile').remove();
			});
		});	  
	});
	</script>
</head>
<body>
	<h1>Admin Login Form</h1>
	<div class="main-agile">
		<div class="alert-close"> </div>
		<div class="content-wthree">
		<div class="circle-w3layouts"></div>
			<h2>Login</h2>
			<form action="" method="post">
								<div class="inputs-w3ls">
									<i class="fa fa-user" aria-hidden="true"></i>
									<input type="text" name="name" placeholder="Username" required=""/>
								</div>
								<div class="inputs-w3ls">
									<i class="fa fa-key" aria-hidden="true"></i>
									<input type="password" name="password" placeholder="Password" required=""/>
								</div>
									<input type="submit" value="LOGIN" name="s3"> 
									<div class="wthree-text"> 
										<ul> 
											<li> <a href="#">Forgot password?</a> </li>
										</ul>
									</div>  
								</form>
								<?php
if (isset($_POST['s3'])){
	$username=$_POST['name'];
	$password=$_POST['password'];
	
    
include "config.php";

$select= "select * from admin where username='$username' and password='$password' 
";
$fet= mysqli_query($conn,$select);
if($data =mysqli_fetch_array($fet) or die("Error: ".mysqli_error($conn)))
{
	$_SESSION['admin_id'] = $data[0];
	header("location:adcp/index.php");
	
	
	 
}else
{echo"Check your username or password";
}
}
?> 
		</div>
	</div>
	<div class="footer-w3l">
		
	</div>
</body>

</html>

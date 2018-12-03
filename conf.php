<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$host="localhost";
$uname="root";
$upass="";
$dbname="gs";
$conn=mysqli_connect("$host","$uname","$upass","$dbname"); 
if ($conn)
 {
 	echo "";
 }
 	else
 	{
 		die(mysqli_connect_error($conn));
 	}
	?>
</body>
</html>
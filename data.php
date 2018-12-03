


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO contact (name,email,mobile_no,message) VALUES
            ('John', 'johnrambo@mail.com','823382738273','jkhshdsdddd' ),
            ('Clark','johnrambo@mail.com', '83823827','shdhdihdoh' ),
            ('John', 'johnrambo@mail.com','7393939', 'klddddw'),
            ('Harry','johnrambo@mail.com', '72389732302','sdhdhidhwidwidh')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<body>
</body>
</html>


    <div class="dropdown">
<div id="myDropdown" class="dropdown-content">
    <a href="#">U-BOLTS</a>
      <a href="#">CENTER BOLTS</a>
      <a href="#">PINS</a>
	  <a href="#">HUB BOLT</a>
	  <a href="#">NUTS</a>

	  <a href="#">BUSHES</a>
	  <a href="#">TRAILER AXLE</a>
	  <a href="#">Trailer Suspension & Sub Assemblies</a>
	  <a href="#">Earth Moving & Construction Equipnnent Parts</a>
	  <a href="#">Propeller Shaft Components</a>
	  <a href="#">Casting Products</a>
  </div></div>
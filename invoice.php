<?php 
  session_start();
if (!isset($_SESSION['admin_id'])) {
    
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$invoice="invno";

?>

<body>

<form action="" method="post" role="form">
                <div class="form-group">
                  <input type="number" name="invoice" class="form-control" id="invoice" placeholder="invoice no." data-rule="minlen:4"  />
				   <div class="validation"></div>
                </div>
                
                
                <div class="text-center"><input type="submit" name="s3" value="submit" class="btn btn-primary"></div>
              </form>
			  
</body>
<?php 
if (isset($_POST['s3'])){
$invoice=$_POST['invoice'];


include "config.php";

$select= "select * from mytable where invno= '".$invoice."'";
$result= mysqli_query($conn,$select) or die("Error: ".mysqli_error($conn));

echo "<table border='1'>

<tr>
<td>invno</td>
<td>invdate</td>

<td>partycode</td>
<td>partyname</td>
<td>itemcode</td>
<td>itemname</td>
<td>rate</td>
<td>quantity</td>
<td>value</td>
<td>trddisc</td>
<td>discrate</td>
<td>termsofdilevry</td>


</tr>";



while ($data =mysqli_fetch_array($result))
{
	
	echo "<tr>
   <td> $data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
	<td>$data[3]</td>
	<td> $data[4]</td>
	<td>$data[5]</td>
	<td>$data[6]</td>
	<td>$data[7]</td>
	<td>$data[8]</td>
	<td>$data[9]</td>
	<td>$data[10]</td>
	<td>$data[11]</td>
	
	
	
	<td><a href='delete1.php?id=$data[0]'>Delete</a></td>

	</tr>";
}}
echo"<table>";

?>
</html>
	
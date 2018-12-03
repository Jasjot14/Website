
<?php
$invoice="invno";
?>

<?php
	
$invoice=isset($invoice['invoice']) ? $invoice['invoice'] : '';
$invoice=$_REQUEST['invoice'];

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
}
echo"<table>";

?>
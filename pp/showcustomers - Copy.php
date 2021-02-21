<!DOCTYPE html>
<html>
<head>
	<title>Show All cutomers List</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
    width: 70%;
    height: 100%;
    padding: 2px;
}
body
{
	background-color: white;
	color: green;
}
</style>

<body>
	<?php
include 'connect.php';

$sql = "SELECT * FROM all_customers";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  echo "<center><table><tr><th>FirstName</th><th>LastName</th><th>Gender</th> <th> Email </th> <th> PhoneNumber</th> <th>AccountNumber</th><th>Balance</th> </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Gender"]."</td><td>".$row["Email"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["AccountNumber"]."</td><td>".$row["Balance"]."</td> <td><button name='transfer' type='submit' value='.$['AccountNumber'].'>Transfer</button></td></tr>";

  }
  echo "</table></center>";
} else {
  echo "0 results";
}
$con->close();
?>
	<br><br><br><br><center>
	 <a href="transfer.php"> <button type="submit" class="registerbtn" name="register" >Back</button></center></a>


</body>
<?php
include "connect.php";
if(isset($_POST['transfer']))
{
	$usname=$_POST['AccountNumber'];
	echo $usname;
  
	}
	else
	{
		
	}

?>

</html>
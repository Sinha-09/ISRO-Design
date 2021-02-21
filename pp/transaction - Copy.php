<!DOCTYPE html>
<html>
<head>
	<title>Transactions</title>
</head>
<body>
	<form action="" method="POST">
<label for="user">Enter Your Account Number:</label>

<select name='acc'>
<?php
include "connect.php";

$sql = "SELECT AccountNumber FROM all_customers";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	
  while($row = $result->fetch_assoc()) {
    echo "
  <option value='accd'>".$row["AccountNumber"]."</option>
 
";

  }
}
else {
  echo "0 results";
}

$con->close();
?>

 </select>

 <br><br><br>



	<label for="">Choose the Account in which you want to send</label>
	<select name='acc1' id='acc1'>

	<?php
include "connect.php";

$sql = "SELECT AccountNumber FROM all_customers";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	
  while($row = $result->fetch_assoc()) {
    echo "
  <option value='volvo'>".$row["AccountNumber"]."</option>";
 


  }
 
} else {
  echo "0 results";
}
$con->close();
?>
 </select>
 <br><br>
 <label for="am"><b>Enter Amount:</b></label>
    <input type="tel" placeholder="Enter First Name" name="amount">
     <button type="submit" class="registerbtn" name="register">Transfer</button>
 <?php
include "connect.php";
if(isset($_POST['register']))
{
	$uname=$_POST['amount'];
	$pswd=$_POST['acc'];
	$pswd2=$_POST['acc1'];
	$cmd="select Balance from all_customers  where AccountNumber='$pswd'";
	echo "$pswd";
	if(mysqli_query($con,$cmd))
	{
		
		$pswd=$pswd-$uname;
		$pswd2=$pswd2+$uname;
		echo("succesfully logged in !");
	}
	else
	{
		echo("Either user Id or Password is incorrect");
	}
}
?>
</form>
 



</body>
</html>

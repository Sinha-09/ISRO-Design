<!DOCTYPE html>
<html>
<head>
	<title>Show All cutomers List</title>
	 <?php require 'assets/autoloader.php'; ?>

  <?php require 'assets/function.php'; ?>
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

 <?php include 'connect.php'; ?>
    
  
<br><br><br>
<div class="container">
<div class="card w-100 text-center shadowBlue">
  <div class="card-header">
    All accounts
  </div>
  <div class="card-body">
   <table class="table table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Holder Name</th>
      <th scope="col">Account No.</th>
      <th scope="col">Email</th>
      <th scope="col">Current Balance</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
      $i=0;
      $array = $con->query("select * from all_customers");
      if ($array->num_rows > 0)
      {
        while ($row = $array->fetch_assoc())
        {$i++;
    ?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $row['FirstName'] ?></td>
        <td><?php echo $row['AccountNumber'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td>Rs.<?php echo $row['Balance'] ?></td>
        <td><?php echo $row['Gender'] ?></td>
        <td><?php echo $row['PhoneNumber'] ?></td>
        <td>
         </td>
        
      </tr>
    <?php
        }
      }
     ?>
  </tbody>
</table>
  
</div>
</div>
</div>
</body>
</html>
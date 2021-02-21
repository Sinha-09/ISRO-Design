<!DOCTYPE html>
<html>
<head>
	 <title>Welcome To the Spark's Foundation Bank</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
	body
	{
		background-color: rgb(128, 128, 128);
	}
	#hc
	{
		color: white;
	}
	
</style>
	
	
	
</head>
<?php
include "connect.php";
if(isset($_POST['login']))
{
	$uname=$_POST['uname'];
	$pswd=$_POST['pswd'];
	$cmd="select * from logtab where name='$uname' and password='$pswd'";
	$res=mysqli_query($con,$cmd);
	if(mysqli_num_rows($res)>0)
	{
		$row=mysqli_fetch_array($res);
		echo("succesfully logged in !");
	}
	else
	{
		echo("Either user Id or Password is incorrect");
	}
}
?>
<body>
	<center><h2 id="hc"><b> Welcome to the Spark's Foundation Bank</b></h2></center>
	<div class="container-fluid">
		
		<br><br>
	   <div class="row">
	       <div class="col-sm-5">
	 	
	               <img src="Banklogo1stpage.jpg" width="600px" height="500px">
	       </div>
	   <div class="col-sm-6">
		     <div class="container" style="margin-top: 50px;">
  <div class="jumbotron">
<div class="container">
  <h3>User Log in</h3>
  <form action="userlogin.php" method="post">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter" name="uname">
     
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
     
    </div>
    <button type="submit" class="btn btn-primary" name="login">Log in</button>

  </form>
</div>
</div>
</div>

	   </div> 
	</div>
</div>

</body>
</html>
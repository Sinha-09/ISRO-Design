<!DOCTYPE html>
<html>
<head>
	<title>Manager Dashboard</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
	body
	{
		background-color: rgb(128, 128, 128);
	}
	.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0, 26, 0);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: yellow;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body>
	

	<center><b><h1 class="color:black">Spark Foundation</h1></b></center>
	<br>
	<hr style="height:4px;border-width:0;color:black;background-color:black">
	<div class="container-fluid">

 
  <div class="row">
    <div class="col-xs-1">
      <div class="thumbnail giftss" style="background-color:yellow">
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="manager.php">Home</a>
  <a href="showcustomers.php">View All Customers</a>
  <a href="#">Transactions</a>
  <a href="addbankaccount.php">Open new Account</a>
  <a href="aboutus.html"> About Us</a>
  <a href="contact.html">Contact us</a>
   <a href="Logout.php">Log out</a>
</div>
</div>
</div>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
	<div class="container">
  

<div class="container" align="left">
 
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" id="left">
        <a href="showcustomers.php" target="_blank">
          <img src="customerlogo.png" alt="T-Shirts" style="width:100%">
          <div class="caption" style="color: green">
            <center><p><b>View All Customers</b></p></center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="transaction.php" target="_blank">
          <img src="transactionlogo.png" alt="Shirts" style="width:100%">
          <div class="caption" style="color: green">
            <center><p><b>Transactions</b></p>
          </div>
        </a>
      </div>
    </div>
</center>
    <br>
    <div class="col-md-4" align="right">
      <div class="thumbnail">
        <a href="shoe.jfif" target="_blank">
          <img src="cashierlogo.jpg" alt="Fjords" style="width:75%">
          <div class="caption" style="color: green">
           <center><p><b>View All Cashiers</b></p></center>
          </div>
        </a>
      </div>
    </div>
   
    </div>
    </div>
    <br><br>
    <br><br><br>
    <div class="container">
  

<div class="container" align="left">
 
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail" id="left">
        <a href="saree.html" target="_blank">
          <img src="newlogo.png" alt="T-Shirts" style="width:100%">
          <div class="caption" style="color: green">
            <center><p><b><a href="addbankaccount.php"> Open New Account</b></p></center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="Shirt.png" target="_blank">
          <img src="helplogo.jpg" alt="Shirts" style="width:90%">
          <div class="caption" style="color: green">
            <center><p><b>Help</b></p>
          </div>
        </a>
      </div>
    </div>
</center>
    <br>
    <div class="col-md-4" align="right">
      <div class="thumbnail">
        <a href="shoe.jfif" target="_blank">
          <img src="aboutuslogo.png" alt="Fjords" style=" width:100%">
          <div class="caption" style="color: green">
           <center><p><b>About Us</b></p></center>
          </div>
        </a>
      </div>
    </div>
   
    </div>
    </div>
   
   
   
 
</body>
</html>
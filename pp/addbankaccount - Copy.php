<!DOCTYPE html>
<html>
<head>
	<title>AddBankAccount</title>
</head>
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=tel] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=tel]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
	<form action="" method="POST">
  <div class="container">
    <h1><b><center>Registration</center></b></h1>
    <div class="container-fluid">
    	<div class="jumbotron">
    <p>Please fill in this form to create an account.</p>
    <hr>
   
    <label for="first"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="first">


    <label for="l-name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last name" name="last">

     <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="gender : male or female" name="gender">

    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter Email" name="mail">
    
     <label for="Phone No"><b>Phone Number</b></label>
    <input type="tel" placeholder="Enter your mobile Number" name="pn">

     <label for="account no"><b>Account Number</b></label>
    <input type="text" placeholder="Account No." name="ac_no">

    <label for="bankbalance"><b>Balance</b></label>
    <input type="tel" placeholder="Enter deposit amount" name="balance">
</div>
   



  <button type="submit" class="registerbtn" name="register">Register</button>
  </div>
</div>

</form>

</body>
</html>
<?php
include "connect.php";
if(isset($_POST['register']))
{
	$first = mysqli_real_escape_string($con, $_POST['first']);
	$l = mysqli_real_escape_string($con, $_POST['last']);
	$g = mysqli_real_escape_string($con, $_POST['gender']);
	$mail = mysqli_real_escape_string($con, $_POST['mail']);
	$pn = mysqli_real_escape_string($con, $_POST['pn']);
	$an = mysqli_real_escape_string($con, $_POST['ac_no']);
	$bal = mysqli_real_escape_string($con, $_POST['balance']);
  $query= "insert into all_customers(FirstName, LastName, Gender, Email, PhoneNumber, AccountNumber, Balance) values ('" . $first . "' , '" . $l . "','" . $g . "','" . $mail . "' , '" . $pn . "','" . $an . "','" . $bal . "')";
  
 mysqli_query($con, $query) or die(mysqli_error($con));
 
// Close connection
}

?>

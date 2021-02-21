<?php
$host="localhost";
$username="root";
$password="";
$dbname="customer";
$con=mysqli_connect($host,$username,$password,$dbname);
if(!$con)
{
	echo die("connection failed".mysqli_connect_error());
}

?>
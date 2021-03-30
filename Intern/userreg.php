<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background: url(images/background.jpg);

}  
.container {  
    padding: 50px;  
  background-color: rgb(31, 30, 30);
  width: 50%;  
  opacity: 0.9;
  text-align: left;


}  
  
input[type=text], input[type=password], input[type=tel], textarea {  
  width: 50%;  
  padding: 10px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;
  text-align: center;
  position: relative;
  padding-right: 1px;

  
  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none; 
  color: white;
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:rgb(213, 215, 219);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: rgb(173, 7, 126);
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: red;
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
label
{
  color: rgb(12, 235, 197);
  font-size: 18px;
}
h1
{
  color: rgb(230, 208, 16);
  text-shadow: 2px 2px red;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>  
</head>  
<body style="background: url(images/try.jpg) background-size: 100% ">

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="#">Bussiness</a>
  <a href="#">Contact</a>
  <a href="#">About</a>
</div>

<span style="position: fixed; color:yellow;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<center>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images\1.png" style="width:15% height:15%">
  
</div>

<div class="mySlides fade">
  <img src="images\2.jpg" style="width:30% height:20%">
</div>

<div class="mySlides fade">
  <img src="images\3.jpg" style="width:30% height:20%">
  <div class="text">Caption Three</div>
</div>

</div>
</center>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br>
<br>

 
<center>  
<form>  
  <div class="container">  
  <center>  <h1> User Registeration Form</h1> </center>  
  <hr>  
  <label><b> Name</b>  </label>   <br>
<input type="text" name="firstname" placeholder= "Firstname" size="15" required /> <br>
<div>  
 <label><b>Gender</b></label>  <br><br>
      <select name="sex" id="sex" class="form-control" required>
        <option value="no">---choose your gender---</option>
      <option value="sex">Male</option>
      <option value="sex">Female</option>
      <option value="sex">other</option>
    </select> 
  
</div>    
<label><b> Aadhar Number</b> </label>  
<br> 
<input type="tel" name="an" placeholder="Aadhar Number" size="16" required /><br>   
<label><b> Mobile Number </b></label> <br>   
<input type="tel" name="mob" placeholder="Mobile Number" size="10"required /> <br>
 <label><b> Father/Husband Name </b></label>   <br>
<input type="text" name="fname" placeholder= "Father/Husband Name" size="15" required /><br>
<label><b> Mother Name</b> </label>   <br>
<input type="text" name="mname" placeholder= "Mother Name" size="15" required /> <br>
<label><b>Current Address :</b> </label> <br>
<textarea cols="80" rows="5" placeholder="Current Address" value="address" required> 
</textarea>  <br>
 <label> <b>Pin Code </b></label>  <br> 
<input type="tel" name="code" placeholder= "Pin Code" size="6" required /><br>
<div>  
<label>   
<b>State :</b>  
</label>  <br> 
  
<select name="state" id="state" class="form-control" required>
      <option value="no">---choose your state---</option>

<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
</div> <br> 

<label>   
<b>Blood Group</b>  
</label> <br> 
<input type="text" name="bg" placeholder="Blood Group" size="3"/>  <br>
<label><b>Number Of Family Members</b></label> <br>
<input type="tel" name="fm" placeholder="Family Members" size="10"/ required>   <br>
 
 <label for="email"><b>Profession</b></label>  <br>
 <input type="text" placeholder="Profession" name="pf" required>  <br>
  
    <label><b>Annual Income</b></label> <br> 
    <input type="tel" placeholder="in Rs." name="psw" required> <br> 
  
    <label><b>Martial Status</b></label>  <br><br>
      <select name="state" id="state" class="form-control" required>
        <option value="no">---choose your status---</option>
      <option value="status">Single</option>
      <option value="status">Married</option>
      <option value="status">other</option>
    </select>
    <br>
    <br>
    <br>
    <br>
      
    <button type="submit" class="registerbtn">Register</button>    
  </div>
</form>
</center>
</body>  
</html>  
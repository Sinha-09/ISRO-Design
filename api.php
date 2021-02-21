
<!DOCTYPE html>
<html>
<head>

  <title>Donation for Street Dogs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    @media only screen and (max-width:2000px)
    {
      .container
      {
        position: absolute;
        left: 1050px;
        top: 100px;
        background-size: 50%;
        background-color: white;
        width: 24%;
        padding-left: 30px;
        padding-bottom: 30px;
        background-color: transparent;
      }
      .button
      {
        padding-bottom: 200px;
      }
      .h2
      {
        color: red;
      }
  }
    
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .container
  {
    position: absolute;
    background-size: 100%;
    left: 0px;

  }
  .main
  {
    float: left;
  }
  .menu, .main, .right {
    width: 100%;
  }
  .img
  {
    float: left;
    width: 100%;
  }
  .h1
  {
  float: left;
  font-size:10vw;


  }
}
  </style>
</head>
<body  class="menu" style="background: url(dog.jpg);background-size: 100%  width:100%">
    <center><h1 style="color: red"><strong><u>Donation For Street Dogs</u></strong></h1></center>
    <div class="main">
    <div class="container">
        
   <form action="pay.php" method="POST">
    <img src="donate.jfif">
    <center><h2 style="color: rgb(247, 238, 62);">Small contribution can save a life !!</h2></center>
    <label><b><i><h4 style="color: rgb(252, 194, 0);">Name</h4></i></b></label>
    <input type="text" name="nm" placeholder="Enter your name">
   <label><b><i><h4 style="color: rgb(252, 194, 0);">Email</h4></i></b></label>
    <input type="text" name="mail" placeholder="Enter your Email">
    <label><b><i><h4 style="color: rgb(252, 194, 0);">Amount</h4></i></b></label>
    <input type="tel" name="amt" placeholder="contribution amount">
     <label><b><i><h4 style="color: rgb(252, 194, 0);">Mobile number</h4></i></b></label>
    <input type="tel" name="num" placeholder="Mobile number"><br><br>
    <button type="submit" name="btn">Donate</button>
</form>
</div>
</div>


  

 

</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    .conatin
    {
      text-align: right;
      border: 1px solid #b5b5b5;
      width: 53%;
      height: 30%;
      background-color: red;
      
      position: absolute;
      left: 400px;
      top: 200px;
      opacity: 0.9;
      padding-left: 10px;


    }
    .v
    {
      text-align: center;
      position: absolute;
      width: 30%;
      height: 40%;
      background-color: white;
      top:150px;
      left: 450px;
      border: 1px solid #b5b5b5;
      box-shadow: 10px 10px  grey;

    }
 
   
    .a
    {
      font-family: Snell Roundhand, cursive;
      font-size: 30px;
        color: white;
    }
    .butn
{
    background-color: white;
    padding: 10px;
    padding-left: 15px;
    padding-right: 15px;

}
.butn:hover
{
  background-color: green;
}
  .butn1
{
    background-color: white;
    padding: 10px;
    padding-left: 15px;
    padding-right: 15px;

}
.butn1:hover
{
  background-color: #ff0000;
}
.login
{
  padding: 20px;
}
.google
{
  padding: 5px;
}
  </style>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
 <header>
        <nav>
            <div class="brand">
                <a href="#"><img src="images/logo.jfif" alt="med-logo"></a>
            </div>
            <div class="nav-right">
                <div class="nav-links">
                    <a href="login.php">Home</a>
                    <a href="#">About</a>
                    <a href="#">Updates</a>
                    <a href="#">Career</a>
                    <a href="#">Shop</a>
                </div>
              
             <form action="login1.php">
                <button type="submit" class="butn1">Login for Bussiness</button>
            </form>
                <div class="search">
                    <div>
                        <img src="./img/search.png" alt="">
                        <input type="text" placeholder="Search">
                    </div>
                </div>
            </div>
        </nav>
        <section class="hero">
            <div class="social">
                <div class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                <div class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></div>
                <div class="insta"><a href="#"><i class="fab fa-instagram"></i></a></div>
                <div class="yt"><a href="#"><i class="fab fa-youtube"></i></a></div>
            </div>
           
        </section>
    </header>
<body style="background: url(images/aala.jpg);background-size: 100%">

      <div class="conatin">

       <h2><div> <p> <h4>Don't have an account??</h2> </p></div></h4>
       <div style="padding-right: 30px;"> Click here to Register </div>
       <br>
       <form action="userreg.php">
       <div style="padding-right: 40px;"><button style="padding: 10px;">Register</button></div>
      </div>
    </form>
      <div class="v">
        <div><h2>Have an account??</h2></div>
        <br><br>
        <div>Email:  <input type="text" size="25" width="10" name="email" placeholder="email" ></div>
        <br><br>
        <div>Password:  <input type="password" size="25"name="pswd" placeholder="password"></div>
        <br><br>
        <button style="padding: 7px;">Login</button>
        <br>
        <br>
       
      </div>

      
      
   


</body>
</html>


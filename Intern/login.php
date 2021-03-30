<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		.container
		{
			position: absolute;
            top: 300px;
            width: 24%;
            height: 25%;
            left: 150px;
            border-style: inset;
            border: 10px inset;
            padding-bottom: 90px;
            background-color: #6060ff
		}
		.a
		{
			font-family: Snell Roundhand, cursive;
			font-size: 30px;
		    color: white;
		}
		.butn
{
    background-color: #699cde;
    padding: 10px;
    padding-left: 15px;
    padding-right: 15px;

}
.butn:hover
{
	background-color: rgb(50,205,50);
}
	.butn1
{
    background-color: #bdf0fa;
    padding: 10px;
    padding-left: 15px;
    padding-right: 15px;

}
.butn1:hover
{
	background-color: rgb(255,0,0);
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
                    <a href="#" class="active">Home</a>
                    <a href="#">About</a>
                    <a href="#">Updates</a>
                    <a href="#">Career</a>
                    <a href="#">Shop</a>
                </div>
                <form action="login1.php">
                <button type="submit" class="butn"><strong>Login</strong></button>
            </form>
             <form action="try2.php">
                <button type="submit" class="butn1"><strong>Login for Bussiness</strong></button>
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
<body style="background: url(images/background.jpg);background-size: 100%">
	<div class="container">
		<p class="a">"The GOOD physician treats the DISEASE; the GREAT physician treats the PATIENT who has the disease"
		                   <br>
		                                      -Sir William Osler</p>
   </div>
   


</body>
</html>


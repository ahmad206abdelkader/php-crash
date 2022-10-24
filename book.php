<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section class="headers">

<a href="home.php" class="logo">gsmPhone</a>



<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="book.php">book</a>
    <a href="package.php">package</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>











<div class="heading" >
    
</div>



<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your adress" name="adress">
            </div>

            
        </div>
        <input type="submit" class="btn" value="submit" name="send">
    </form>
</section>

















<section class="footers">
        <div class="box-con">


            <div class="box1">
                <h3>quick links</h3>
                <a href="home.php" class="Qlinks">home</a>
                <a href="about.php" class="Qlinks">about</a>
                <a href="book.php" class="Qlinks">book</a>
                <a href="package.php" class="Qlinks">backage</a>
            </div>

            <div class="box2">
                <h3>extra links</h3>
                <a href="#" class="elinks">ask questions</a>
                <a href="#" class="elinks">about us</a>
                <a href="#" class="elinks">privicy policy</a>
                <a href="#" class="elinks">terms of use</a>
            </div>

            <div class="box3">
                <h3>contact info</h3>
                <a href="#" class="cus">+962780754976</a>
                <a href="#" class="cus">ahmad11iphone11abdelkader11@gmail.com</a>
                <a href="#" class="cus">amman jordan-11134</a>

            </div>

            <div class="box4">
                <h3>follow us</h3>
                <a href="#" class="fus"><i class="gg-twitter"></i>twitter</a>
                <a href="#" class="fus"><i class="gg-instagram"></i>instagram</a>
                <a href="#" class="fus"><i class="gg-link"></i>linkedin</a>
                <a href="#" class="fus"> <i class="gg-facebook"></i>facebook</a>
            </div>


        </div>
        <div class="credit">created by <span>ahmad abdelqader</span> all right reserved</div>
   
    </section>

</body>
</html>

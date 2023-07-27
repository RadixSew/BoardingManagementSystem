<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
<nav class="cnavbar">
        <h1 class="logo">G10<span>HOUSE</span></h1>
        <ul class="navlinks">
            <li><a href="Home.php">Home</a></li>
            <li><a href="about.php">about</a></li>
            <li class="dropdown">
            <a href="propaties.php" class="dropbtn">properies</a>
            <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
            </div>
            </li>    
            <li  class="active"><a href="contact.php">contact</a></li>
            <li><a href="#">payment</a></li>
            <li><button class="sctn">signup</button></li>
            <li><button class="ctn">signin</button></li>
        
        </ul>
        <img src="Images/menu.png" class="menuBtn"> 
</nav>
<section class="conus">
    
    <div class="title">
        <h2>Contact Us</h2>
        <p><i>If you have any questions or coents,please contact us via email<br>or phone,or send us a message using the contact form.</i></p>
    </div>
    <div class="conemail">
        <form action="" method="get">
            <div class="einput">
                <label for="name">Name</label><br>
                <input type="text">
            </div>
            <div class="einput">
                <label for="email">Email</label><br>
                <input type="text">
            </div>
            <div class="einput">
                <label for="password">Password</label><br>
                <input type="password">
            </div>
            <div class="einput">
                <label for="msg">Message me</label><br>
                <textarea name="msgme" id="" cols="40" rows="10"></textarea>
            </div>
            <button type="submit" class="send">Send</button>
        </form>
        <div class="detail">
            <p>Email : g10houserent@mail.com</p>
            <p>Fixed : 01356723</p>
            <p>Mobile : 076542124</p>
        </div>
    </div>
</section>
<section class="footer">
    <div class="icons">
        <div class="icon"><i class="bi bi-facebook"></i></div>
        <div class="icon"><i class="bi bi-twitter"></i></div>
        <div class="icon"><i class="bi bi-linkedin"></i></i></div>
        <div class="icon"><i class="bi bi-instagram"></i></div>
    </div>
    <p class="fot"><i>&copyG10HOUSE.All Rights Reserved</i></p>
</section>
<script src="script.js"></script>
</body>
</html>
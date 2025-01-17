<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="navbar" id="navbar">
        <a href="index.php"><img src="/images/user.png" alt="Logo" class="image" id="user-logo"></a>
        <div class ="floating-menu">
            <a href="login.php">Login</a>
            <a href="admin.php">Dashboard</a>
        </div>
</div>
    <main> 
        <div class="header-image"></div> 
        <div class="header-text"> 
            <h1>Selamat Datang di Pengiriman Kilat</h1> 
        </div> 
    </main>
    <div class="carousel">
        <div class="carousel-inner">
            <img class="carousel-item carousel-item-1" src="images/Image1.jpeg" data-index="1">
            <img class="carousel-item carousel-item-2" src="images/image2.jpeg" data-index="2">
            <img class="carousel-item carousel-item-5" src="images/image5.webp" data-index="5">
            <img class="carousel-item carousel-item-4" src="images/image4.jpg" data-index="4">
            <img class="carousel-item carousel-item-3" src="images/Image3.jpeg" data-index="3">
        </div>
    </div>
    <div class="carousel-controls">
        <button class="carousel-controls-previous"><</button>
        <button class="carousel-controls-next">></button>
        </div>
    <script src="/JavaScript/carousel.js"></script>
</body>
</html>
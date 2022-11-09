
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A to Z</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require('functions.php');
    ?>

</head>
<style>
    .item {
        background-color: white;
        border: 10px solid #f0ebec;
        width: 220px;
        border-radius: 20px;
    }

    .item1 {
        background-color: #DAA7AF;
        width: 200px;
        border: 1px;
        border-radius: 10px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .headerbg {
        background-color: #EB4747;
    }

    body {
        background-color: #f0ebec;
        color: black;
        overflow-x: hidden;
    }

    .image {
        margin: auto;
        height: 180px;
        width: 170px;
    }

    .image img {
        height: 180px;
        width: 170px;
    }

    .btn-color {
        background-color: black;
        color: white;
    }

    .btn-color-1 {
        background-color: grey;
        color: black;
    }

    .cart-item {
        background-color: pink;
        border-radius: 15px;
    }
    .subtotal {
        background-color: #fae8ef;
    }
    #top{
        position:relative;
        height:40px;
    }
    .top1{
        text-align: center;
        position: absolute;
        right:0;
    }
    #filter{
        background-color:white;
        width:50%;
        display:none;
        position: absolute;
        z-index:0.9;
    }
    #filtertxt{
        color:black;
        position:absolute;
        left:13vw;
        z-index: 1;
    }

   
</style>

<body>
    <!-- start #header -->
    <header id="header">
        <div id="top" class="strip d-flex justify-content-between px-4 py-1 bg-dark ">
            <div class="font-rale font-size-14 top1">
                <a href="myacc.php" class="px-3 border-right border-left text-light"><?php session_start();
                                                                                echo $_SESSION['user']; ?></a>
                <a href="orders.php" class="px-3 border-right text-light">Orders</a>
                <a href="logout.php" class="px-3 border-right text-light">Logout</a>

            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg headerbg">
            <a class="navbar-brand" href="main.php"><img class="logo" src="assets/logo.png" style="width:4vw"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item">
                        <a class="nav-link color-primary" href="main.php">All Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-primary" href="electronics.php">Electronics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-primary" href="clothing.php">Clothing</a>
                    </li>
                    

                </ul>
                <form action="#" class="font-size-14 font-rale">
                    <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-dark"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-light bg-dark"><?php echo count($product->getDataCart('cart')); ?></span>
                    </a>
                </form>
            </div>
        </nav>
        <!-- !Primary Navigation -->

    </header>
    <!-- !start #header -->

    <!-- start #main-site -->
    <main id="main-site">
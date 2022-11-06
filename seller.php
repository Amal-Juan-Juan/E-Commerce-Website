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



</head>
<style>
    .item1 {
        background-color: #14123d;
        margin-right: 10px;
        border: 1px;
        border-radius: 10px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    body {
        background-color: #fca311;
        color: white;
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
    .container{
        margin:auto;
    }
</style>

<body>


    <!-- start #header -->
    <header id="header">
        <div id="top" class="strip d-flex justify-content-between px-4 py-1 bg-dark ">
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-light"><?php session_start();
                                                                                echo $_SESSION['seller']; ?></a>
                <a href="seller_logout.php" class="px-3 border-right border-left text-light">Logout</a>
            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg bg-danger">
            <a class="navbar-brand" href="seller.php"><img class="logo" src="assets/logo.png" style="width:4vw"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item">
                        <a class="nav-link color-primary" href="productForm.php">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-primary" href="seller.php">My products</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- !Primary Navigation -->
    </header>
    <!-- !start #header -->

    <!-- start #main-site -->

    <main id="main-site">
        <h2>
            <center>Your products
        </h2>
        <div class="container">
            <?php
            include 'seller_products.php';

            ?>
        </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

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

    <!-- <?php
        $res="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_start();
        include 'login.php';
        $_SESSION['user'] = $email;
    }
    ?> -->


    <style>
        body{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .container {
  position: relative;
  margin-top: 20px;

  width: 1000px;
  height: 650px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 20px 20px 20px #043262, -14px -14px 15px rgb(175, 22, 22);
}

        .item {
            background-color: white;
            border: 10px solid #FFDEDE;
            width: 220px;
            border-radius: 20px;
        }
        h1,h2,p{
            color: #17137d;
        }
    
        .item1 {
            background-color: #425F57;
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
            background-color: #FFDEDE;
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
    
       
    </style>
<body>
    <!-- start #header -->
    <header id="header">
        <div id="top" class="strip d-flex justify-content-between px-4 py-1 bg-dark ">
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-light"><?php session_start();
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
            </div>
        </nav>
    </header>
    <br>
    <h1><u><b>My Account</b></u></h1>

    <div class="container">
      <center>  <h2>userid: <?php echo $_SESSION['user'];?</h2></center>

       <h2><u>Security and privacy</u></h2><br>
        <button>Change password</button><br><br>

   

        <h2><u>Saved addresses:</u></h2>
        <p>Room no 429, F BlockMens Hostel, VIT University, Vellore</p>
<button>Change address</button><br><br>

<h2><u>Recent orders:</u></h2>

        

    </div>

    </body>
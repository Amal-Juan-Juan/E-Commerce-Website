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
        session_start();
        $res = "";
        $old = "";
        $new = "<br>";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $status = $_GET['status'];
            if ($status == "1") {
                $old = "Password Change Success";
            } elseif ($status == "0") {
                $old = "Old Password Incorrect";
            } elseif ($status == "10") {
                $old = "Address Change Success";
            }
        }
        ?> -->


<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif
    }

    .container {
        position: relative;
        margin-top: 20px;

        width: 1000px;
        height: 450px;
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

    h1,
    h2,
    p {
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

    .right {
        position: absolute;
        right: 2vw;
        top: 10vw;
    }

    button {
        display: block;
        margin-bottom: 20px;
        width: 200px;
    }

    p {
        width: 12vw;
        margin: 0;
    }
    #h3{
        position:absolute;
        top:8vw;
    }
    #viewmore{
        position:absolute;
        bottom:5vw;
        left:30vw;
    }
</style>

<body>
    <!-- start #header -->
    <header id="header">
        <?php
        include 'database/db_controller.php';
        $sql = "SELECT address FROM user WHERE user_id=" . $_SESSION['user_id'];
        $result = mysqli_query($con, $sql);
        $address = '';
        while ($row = mysqli_fetch_assoc($result)) {
            $address = $row['address'];
        }

        ?>
        <div id="top" class="strip d-flex justify-content-between px-4 py-1 bg-dark ">
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-light"><img src="assets/account.png" style="width:30px"></a>
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
    <?php ?>
    <h1><u><b>
                <center>My Account
            </b></u></h1>

    <div class="container">
        <center>
            <h2>Userid: <?php echo substr($_SESSION['user'], 0, strpos($_SESSION['user'], "@")); ?></h2>
            <h3 id="h3">Your last Order:</h3>
        </center>
        <div class="left">
            <h2>Address:</h2>
            <p><?php echo $address; ?></p>
        </div>
        <?php
        include 'database/db_controller.php';
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * from orders WHERE user_id=" . $user_id;
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row_no =0;
            while ($row = mysqli_fetch_assoc($result)) {
                $sql1 = "SELECT * from product WHERE item_id=" . $row["item_id"];
                $result1 = mysqli_query($con, $sql1);
                $date = $row["date_time"];
                $orderid = $row["order_id"];
                $row_no+=1;

                if (mysqli_num_rows($result1) > 0 && $row_no==mysqli_num_rows($result)-1) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result1)) {
                        include 'Template/single_order_card.php';
                    }
                }
            }
        } else {
            echo "You have 0 Orders";
        }
        ?>
        <div class="right">
            <form action="change_pw.php" method="POST">
                <p><?php echo "$old" ?></p>
                <input type="password" name="old_pass" placeholder="Old Password"><br>
                <p><?php echo "$new" ?></p>
                <input type="password" name="new_pass" placeholder="New Password"><br><br>
                <button type="submit" name="new_password_submit">Change Password</button>
            </form>
            <form method="post" action="change_addr.php">
                <input type="text" name="addr" placeholder="New Address"><br><br>
                <button type="submit" name="change_address_submit">Change Address</button>
            </form>


        </div>
        <a id="viewmore" href="orders.php">View More Orders</a>


    </div>

</body>
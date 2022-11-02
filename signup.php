<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="Styles/index.css">
</head>
<body>
    <?php
    $res="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        include 'create_signup.php';


    }
    ?>
    <div class="Main-container">
        <div class="container-login">
            <div class="wrap-login">

                <div class="login-pic">
                    <img src="assets/logo.png" alt="IMG">
                </div>

                <form id="form" action=""class="login-form" method="POST">
                    <span class="login-form-title">Sign Up</span>

                    <div class="wrap-input">
                        <input type="text" class="input" name="email" placeholder="Email" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input">
                        <input type="text" class="input" name="address" placeholder="address" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input">
                        <input id="pass"type="password" class="input" name="pass" placeholder="Password" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input">
                        <input id ="repass"type="password" class="input" name="repass" placeholder="Retype Password" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="login-form-btn-container">
                        <button class="login-form-btn">Sign Up</button>
                    </div>
                    <h1 id="res"><?php echo $res;?></h1>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
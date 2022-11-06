<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="seller_login.css">
</head>
<body style="background-color:aqua">
    <?php
    $res="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_start();
        include 'login_fun.php';
        $_SESSION['user'] = $email;
        
        


    }
    ?>
    <div class="Main-container">
        <div class="container-login">
            <div class="wrap-login">

                <div class="login-pic">
                    <img src="assets/logo.png" alt="IMG">
                </div>

                <form class="login-form" action="login_fun.php" method="POST">
                    <span class="login-form-title">Bussiness Login</span>

                    <div class="wrap-input">
                        <input type="text" class="input" name="email" placeholder="Email" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input">
                        <input type="password" class="input" name="pass" placeholder="Password" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="login-form-btn-container">
                        <button class="login-form-btn">Login</button>
                    </div>
                    <h1 id="res"><?php echo $res?></h1>
                  <div class="text-center p-t-2">
                      <a href="signup.php" class="txt2">Create Your Account <i class="fa fa-long-arrow-right " aria-hidden="true"></i></a>
                  </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
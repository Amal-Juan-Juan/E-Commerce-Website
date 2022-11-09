<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="Styles/index.css">
    
</head>
<body>
    <?php
    $res="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        include 'create_seller_signup.php';


    }
    ?>
    <div class="Main-container">
        <div class="container-login">
            <div class="wrap-login">
            <div class="signupFrm">
                <div class="login-pic">
                    <img src="assets/logo.png" alt="IMG">
                </div>
                <form id="form" action=""class="login-form" method="POST">
                <h1 class="login-form-title" style = "font-size:1.9vw;text-align:center;">Bussiness Sign up</h1>

                <div class="inputContainer">
                    <input type="text" class="input" name="email" placeholder="a" required>
                    <label for="" class="label">Email</label>
                </div>

                <div class="inputContainer">
                    <input type="text" class="input" name="address" placeholder="a" required>
                    <label for="" class="label">Address</label>
                </div>

                <div class="inputContainer">
                    <input type="password" class="input" name="pass" placeholder="a" required>
                    <label for="" class="label">Password</label>
                </div>

                <div class="inputContainer">
                    <input type="password" class="input" name="repass" placeholder="a" required>
                    <label for="" class="label">Confirm Password</label>
                </div>

                <input type="submit" class="submitBtn" value="Sign up">
                <h1 id="res"><?php echo $res;?></h1>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
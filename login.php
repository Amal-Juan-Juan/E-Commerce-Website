<?php
$email = $_POST["email"];
$pass = $_POST["pass"];
include './database/db_controller.php';
$sql = "SELECT password,user_id from user where email="."'".$email."'";
$result = mysqli_query($con,$sql);
$result = mysqli_fetch_assoc($result);
if($result != null){
    if($pass==$result['password']){
        $_SESSION['user'] = $email;
        $_SESSION['user_id'] = $result['user_id'];
        header("Location: main.php");
        
    }
    else{
        $res = "INVALID CREDENTIALS";
        
    }
}
else{
    $res = "USER NOT FOUND , SIGN UP";
}


?>
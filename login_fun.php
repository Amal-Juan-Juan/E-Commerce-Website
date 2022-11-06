<?php
session_start();
$email = $_POST["email"];
$pass = $_POST["pass"];
include './database/db_controller.php';
$sql = "SELECT password,seller_id from seller where email="."'".$email."'";
$result = mysqli_query($con,$sql);
$result = mysqli_fetch_assoc($result);
if($result != null){
    if($pass==$result['password']){
        $_SESSION['seller'] = $email;
        $_SESSION['seller_id'] = $result['seller_id'];
        header("Location: seller.php");
        
    }
    else{
        $res = "INVALID CREDENTIALS";
        
    }
}
else{
    $res = "USER NOT FOUND , SIGN UP";
}


?>
<?php
$email = $_POST["email"];
$pass = $_POST["pass"];
include './database/db_controller.php';
$sql = "SELECT * from seller where email="."'".$email."'";
$result = mysqli_query($con,$sql);

if($result != null){
    while($row = mysqli_fetch_assoc($result)){
        if($pass==$row['password']){
            $_SESSION['seller'] = $email;
            $_SESSION['seller_id'] = $row['seller_id'];
            header("Location:seller.php");
            
        }
        else{
            $res = "INVALID CREDENTIALS";
            
        }

    }
    
}
else{
    $res = "USER NOT FOUND , SIGN UP";
}


?>
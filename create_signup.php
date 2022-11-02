<?php
include './Fetch/dbconfig.php';
$email = $_POST["email"];
$pass = $_POST["pass"];
$address = $_POST["address"];
$repass = $_POST["repass"];
$pattern = "/\S{8,}/i";
$res = "";

if(preg_match($pattern, $pass)){
    $res = "Choose a Strong Password";

}
if($repass != $pass){
    $res = "Passwords don't match";
    
}
else{
    $stmt = $conn->prepare("INSERT INTO user(email,password,address) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $pass, $address);
    $stmt -> execute();
    $res = "You may Login";
    sleep(3);
    header("Location: index.php");
    
}

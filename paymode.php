<?php 
session_start();
$items = explode(" ",$_SESSION['itemseries']);
$user_id = $_SESSION['user_id'];
include 'database/db_controller.php';
foreach ($items as $item){
    $stmt =$con->prepare("INSERT INTO orders(user_id,item_id) VALUES(?, ?)") ;
$stmt->bind_param("ii", $user_id, $item);
$stmt->execute();
}
$sql = "DELETE FROM `cart` WHERE user_id=".$user_id;
mysqli_query($con,$sql);
echo "<h1 style='text-align:center'>Processing<h1>";
sleep(1);
    header("Location:main.php");

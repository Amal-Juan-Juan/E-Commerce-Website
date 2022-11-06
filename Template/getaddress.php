<?php
include 'database/db_controller.php';
$user_id = $_SESSION['user_id'];
$sql = "SELECT address from user WHERE user_id=".$user_id; 
$result = mysqli_query($con, $sql);
$address='';
$email = $_SESSION['user'];
while ($row = mysqli_fetch_array($result)){
    $address = $row['address'];
}

?>
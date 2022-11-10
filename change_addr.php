<?php
session_start();
include 'database/db_controller.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['addr'] !="") {
        $sql1 = "UPDATE user set address ='" . $_POST['addr'] . "' WHERE user_id= " . $_SESSION['user_id'];
        mysqli_query($con, $sql1);
        header("Location:myacc.php?status=10");
    }
}
?>
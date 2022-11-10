<?php
session_start();
include 'database/db_controller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['old_pass']!="" && $_POST['new_pass'] !="") {
        $old ="hello";
        $old_pw = $_POST['old_pass'];
        $new_pass = $_POST['new_pass'];
        $sql = "SELECT password from user WHERE user_id=" . $_SESSION['user_id'];
        $password = "";
        echo "done";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $password = $row['password'];
        }
        if ($password == $_POST['old_pass']) {
            $new = "Successfully changed";
            $sql1 = "UPDATE user set password =" . $_POST['new_pass'] . " WHERE user_id=" . $_SESSION['user_id'];
            mysqli_query($con, $sql1);
            header("Location:myacc.php?status=1");

        } else {
            header("Location:myacc.php?status=0");
        }
    }
}
?>

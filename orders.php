<?php
include 'header.php';
include 'database/db_controller.php';
$user_id = $_SESSION['user_id'];
$sql = "SELECT * from orders WHERE user_id=".$user_id;
$result = mysqli_query($con, $sql);
echo "<h1 style='text-align:center'>YOUR ORDERS ARE: </h1>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $sql1 = "SELECT * from product WHERE item_id=".$row["item_id"];
    $result1 = mysqli_query($con, $sql1);
    $date = $row["date_time"];
    $orderid = $row["order_id"];

    if (mysqli_num_rows($result1) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result1)) {
        include 'Template/order_card.php';
      }
    }
  }
} else {
  echo "You have 0 Orders";
}
?>
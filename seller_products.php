

<?php

include 'database/db_controller.php';
$seller_id = $_SESSION['seller_id'];
$sql = 'SELECT * FROM product WHERE seller_id='.$seller_id;
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
    include 'seller_productcard.php';

}


?>
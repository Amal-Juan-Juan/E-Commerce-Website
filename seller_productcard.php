<!DOCTYPE html>
<html>

<head>
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      width: 180px;
      height: 300px;
      margin-left: 30px;
      margin-top: 40px;
      text-align: center;
      float: left;
      margin-right: 30px;
      font-family: arial;
    }

    .price {
      color: white;
      font-size: 15px;
    }

    .card button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: rgb(183, 85, 85);
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .card button:hover {
      opacity: 0.7;
    }

    .img_seller {
      height: 180px;
    }

    .dets {
      background-color: rgb(246, 184, 184);
    }

    .text {
      font-size: 1.2vw;
      margin: 0;
    }
  </style>
</head>

<body>
<?php
  
  if($_SERVER["REQUEST_METHOD"]="POST"){
    if(isset($_POST['delete'])){
        include 'database/db_controller.php';
        $sql = "DELETE FROM product WHERE item_id=".$_POST['item_id'];
        mysqli_query($con,$sql);
        echo mysqli_error($con);
    }
}?>

  <div class="card">
    <img class="img_seller" src="<?php echo $row['item_image'] ?>">
    <div class="dets">
      <h5 class="text">Brand:<?php echo $row['item_brand'] ?></h4>
        <h4 class="text"><?php echo $row['item_name'] ?></h2>
          <h5 class="price">₹<?php echo $row['item_price'] ?></h5>
          <form action="seller.php" method="POST">
            <input name='item_id'type="hidden" value="<?php echo $row['item_id'] ?>">
            <p><button name="delete" value="1">Delete</button></p>
          </form>
    </div>
  </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    body {
      font-family: "Helvetica Neue", Helvetica;
    }
    .container {
        background-color: #FFDEDE;
      position: relative;
      width: 70%;
      margin: 0 auto;
      border: 1px solid;
      padding-bottom: 50px;
    }
    .order-header {
      background-color: #daa7af;
    }
    td {
      padding-left: 10px;
      padding-right: 30px;
    }
    #orderimg{
      width: 180px;
      height: 170px;
    }
    h5 {
      padding-left: 10px;
    }
    h3 {
      position: absolute;
      margin-left: 240px;
      margin-top: -20px;
      bottom: 90px;
    }
    h6 {
      position: absolute;
      margin-left: 240px;
      margin-top: -20px;
      bottom: 120px;
    }
    .button-group {
      position: absolute;
      right: 20px;
      bottom: 90px;
      display: block;
    }
    button {
      font-size: 1.8vw;
      width: 15vw;
      color: rgb(129, 23, 23);
      background-color: #EB4747;
      transition: 0.2s ease-in-out;
      border-radius: 20px;
    }
  </style>
  <body>
    <br>
    <div class="container">
      <div class="order-header">
        <table>
          <tr>
            <td>ORDER PLACED:</td>
            <td>TOTAL:</td>
            <td>ORDER ID: <?php echo $orderid;?></td>
          </tr>
          <tr>
            <td><?php echo $date;?></td>
            <td>₹<?php echo $row["item_price"];?></td>
          </tr>
        </table>
      </div>
      <h5>Arriving Next Wednesday</h5>
      <img id="orderimg"src="<?php echo $row["item_image"];?>" />
      <h6>Brand: <?php echo $row["item_brand"];?></h6>
      <h3><?php echo $row["item_name"];?></h3>
      <div class="button-group">
        <button type="button">Track Package</button><br /><br />
        <button type="button">Rate</button>
      </div>
    </div>
    <br>
  </body>
</html>

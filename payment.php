<?php
include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  h1 {
    color: black;

  }

  .row {
    display: -ms-flexbox;
    /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap;
    /* IE10 */
    flex-wrap: wrap;
    margin: 0 -10px;
  }

  .col-25 {
    -ms-flex: 25%;
    /* IE10 */
    flex: 25%;
  }

  .col-50 {
    -ms-flex: 50%;
    /* IE10 */
    flex: 40%;
  }

  .col-70 {
    -ms-flex: 75%;
    /* IE10 */
    flex: 75%;
    width: 75%;
  }

  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }

  .container {
    background-color: #ed8791;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }

  input[type=text] {
    width: 70%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  label {
    margin-bottom: 10px;
    display: block;
  }

  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }

  .btn {
    background-color: #802d35;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }

  .btn:hover {
    background-color: #ad5059;
  }

  a {
    color: #2196F3;
  }

  hr {
    border: 1px solid lightgrey;
  }

  span.price {
    float: right;
    color: grey;
  }

  .addressbtn {
    background-color: #ed8791;
    border: 0;
  }

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }

    .col-25 {
      margin-bottom: 20px;
    }
  }
</style>

<body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'Template/getaddress.php';
  }



  ?>
  <h1>
    <center>Payment
  </h1>
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="paymode.php">

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" value="<?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                                                  echo $email;
                                                                } ?>"placeholder="john@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" value="<?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                                                  echo $address;
                                                                } ?>" placeholder="542 W. 15th Street">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="New York">

              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John More Doe">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>

          </div>
          <label>
          </label>
          <input type="submit" value="Continue to checkout" class="btn">
        </form>
        <form action="payment.php" method="post">
          <button class="addressbtn"><input type="checkbox" name="sameadr"> Shipping address same as billing</button>
        </form>
      </div>
    </div>
    <?php
    $itemseries = "";

    foreach ($product->getData('cart') as $item) {
      $itemseries .= $item['item_id'] . " ";
    }

    ?>
    <div class="col-25">
      <div class="container">
        <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo ($_SESSION['no_items']); ?></b></span></h4>
        <hr>
        <p>Total <span class="price" style="color:black"><b><?php echo "₹" . ($_SESSION['total']);
                                                            $_SESSION['itemseries'] = $itemseries; ?></b></span></p>
      </div>
    </div>
  </div>


</body>

</html>
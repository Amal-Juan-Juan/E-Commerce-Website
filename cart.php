<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php

    /*  include cart items if it is not empty */
        count($product->getDataCart('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');

?>

<?php
// include footer.php file
include ('footer.php');
?>



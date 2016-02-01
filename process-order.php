<?php

session_start();

// echo '<pre>';
// print_r($_POST);

//  Calculate the total order cost

$grandTotal = 0;

foreach ( $_SESSION['cart'] as $product ) {
	
	$grandTotal += $product['quantity'] * $product['price'];
}

// Prepare the order in a "pending" state

// Include the pxpay library
require 'pxpay_curl.inc.php';
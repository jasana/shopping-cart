<?php

session_start();

require 'PxPay_Curl.inc.php';
require '../secret.php';

// Creat an instance
$pxpay = new PxPay_Curl( 'https://sec.paymentexpress.com/pxpay/pxaccess.aspx', PXPAY_USER, PXPAY_KEY );

// Convert the response into something we can use
$response = $pxpay->getResponse( $_GET['result'] );

// Was the transaction successful?
if ( $response->getSuccess() == 1 ) {
	
	// Update the database order to say paid
	echo '<pre>';
	print_r($response);

	// Email the client

	// Email the website owner


}
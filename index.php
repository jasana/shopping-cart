<?php
	
	// Include the header
	include 'templates/header.template.php';

?>

<h1 class="text-center">Products</h1>

<?php

	// Connect to the database
	$dbc = new mysqli( 'localhost', 'root', '', 'shopping_cart' );

	// Get all the products from the database
	$sql = "SELECT id, name, description, price, stock FROM products";

	// Run the query
	$result = $dbc->query( $sql );

	// Loop over the result
	while ( $row = $result->fetch_assoc() ) {

		// Include the product template
		include 'templates/product.template.php';
	}

	// Include the footer
	include 'templates/footer.template.php';
?>


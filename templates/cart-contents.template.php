<h1>Checkout</h1>


<table border="1" class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Quantity</th>
		<th>Unit price</th>
		<th>Total cost</th>
	</tr>
	
	<?php $grandTotal = 0; ?>

	<?php foreach( $_SESSION['cart'] as $product ) : ?>
	
	<tr>
		<td><?= $product['id']; ?></td>
		<td><?= $product['name']; ?></td>
		<td><?= $product['description']; ?></td>
		<td><?= $product['quantity']; ?></td>
		<td>$<?= $product['price']; ?></td>
		<td>$<?= number_format($product['price'] * $product['quantity'], 2); ?></td>
	</tr>

	<?php $grandTotal += $product['price'] * $product['quantity']; ?>

	<?php endforeach; ?>

	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><strong>$<?= number_format($grandTotal, 2); ?></strong></td>
	</tr>

</table>
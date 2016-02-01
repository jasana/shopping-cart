
 <ul class="col-md-4">
	<li>ID: <?= $row['id']; ?></li>
	<li>Name: <?= $row['name']; ?></li>
	<li>Description: <?= $row['description']; ?></li>
	<li>Price: <?= $row['price']; ?></li> 
	<li>Stock: <?= $row['stock']; ?></li>
	<li>
		<form action="" method="post">
			<input type="hidden" name="product-id" value="<?= $row['id']; ?>">
			<input type="hidden" name="name" value="<?= $row['name']; ?>">
			<input type="hidden" name="description" value="<?= $row['description']; ?>">
			<label for="quatity">Quantity:</label>
			<input type="number" name="quantity" id="quantity" value="1" step="1" min="1" max="<?= $row['stock']; ?>">
			<input type="submit" name="add-to-cart" value="Add to cart">
		</form>
	</li>
</ul>
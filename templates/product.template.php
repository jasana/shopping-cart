
 <ul class="col-md-4">
	<li>ID: <?= $row['id']; ?></li>
	<li>Name: <?= $row['name']; ?></li>
	<li>Description: <?= $row['description']; ?></li>
	<li>Price: <?= $row['price']; ?></li> 
	<li>Stock: <?= $row['stock']; ?></li>
	<li>
		<form action="">
			<input type="submit" value="Add to cart">
		</form>
	</li>
</ul>
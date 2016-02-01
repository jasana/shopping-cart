<h2>Please fill out this form</h2>

<form action="process-order.php" method="post">
	
	<div>
		<label for="full-name">Full Name: </label>
		<input type="text" id="full-name" name="full-name" placeholder="John Smith">
	</div>


	<select name="cities" id="cities">
	<option value="">Please select a city...</option>
	<?php
		// Connect to database
		$dbc = new mysqli('localhost', 'root', '', 'cities_and_suburbs'); 

		// Get all the cities
		$sql = "SELECT cityID, cityName FROM cities";

		// Run the query and capture the results
		$result = $dbc->query( $sql );

		// Loop over the results and create an option element for each. fetch assoc grabs very first data and loops over others
		while( $city = $result->fetch_assoc() ) {
			echo '<option value="'.$city['cityID'].'">'.$city['cityName'].'</option>';
		}
	?>
	</select>

	<select id="suburbs" name="suburb"></select>

	<div>
		<label for="address">Address: </label>
		<textarea name="address" id="address" cols="30" rows="5" placeholder="5 Smith Street"></textarea>
	</div>

	<div>
		<label for="phone">Phone Number: </label>
		<input type="tel" name="phone">
	</div>

	<div>
		<label for="email">Email Address: </label>
		<input type="email" name="email" placeholder="example@mail.com">
	</div>

	<input type="submit" name="place-order" value="Place Order">


</form>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="js/cities-and-suburbs.js"></script>

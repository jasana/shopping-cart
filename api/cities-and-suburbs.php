<?php

// Connect to database
$dbc = new mysqli('localhost', 'root', '', 'cities_and_suburbs');

// Filter the data
// Capture and save the chosen city ID
$cityID = $dbc->real_escape_string( $_GET['cityID'] );

// Prepare SQL
$sql = "SELECT suburbID, suburbName FROM suburbs WHERE cityID = $cityID";

// run the query and capture the result
$result = $dbc->query( $sql );

// Extract the result and convert to json
$suburbs = json_encode( $result->fetch_all(MYSQLI_ASSOC) );


// Prepare the header to say we are about to send JSON, not text
header('Content-Type: application/json');

echo $suburbs;


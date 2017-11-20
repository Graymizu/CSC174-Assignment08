<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_sydney";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_sydney";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM survey ";


	$result = $connection->query($query);

	//////////////////////////////////////////////
/*
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> counter: ". $row["counter"]. " - Name: ". $row["fname"]. " " . $row["lname"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($connection);

?>
*/
	///////////////////////////////////////////////////
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Administration Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/grid.css">
	</head>

	<body>
		<div class="container">
			<h1>Administration Page</h1>
			<div class="mainbox">
				<h2>Pokey Survey Results</h2>
				<table border>

<?php
	// 3. Use returned data (if any)
	while($row = mysqli_fetch_assoc($result)) {
		// output data from each row
?>
					<tr>
						<td><?php echo $row["counter"]; ?></td>
						<td><?php echo $row["fname"]; ?></td>
						<td><?php echo $row["lname"]; ?></td>
						<td><?php echo $row["email"]; ?></td>
						<td><?php echo $row["pnumber"]; ?></td>
					</tr>
<?php } ?>	
				</table>
			</div>
		</div>
	</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>

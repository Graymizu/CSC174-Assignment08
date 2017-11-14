<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "urcscon3_sydney";
	$dbpass = "coffee1N";
	$dbname = "urcsccon3_sydney";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);










	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM mytable ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";


	$result = mysqli_query($connection, $query);
	
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
		<h2>Pokey Survey Results</h2>
		<table border>

<?php
	// 3. Use returned data (if any)
	while($mytable = mysqli_fetch_assoc($result)) {
		// output data from each row
?>
		<tr>
			<td><?php echo $mytable["counter"]; ?></td>
			<td><?php echo $mytable["fname"]; ?></td>
			<td><?php echo $mytable["lname"]; ?></td>
			<td><?php echo $mytable["email"]; ?></td>
			<td><?php echo $mytable["pnumber"]; ?></td>
		</tr>

<?php } ?>	
		</table>

	</div>
</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
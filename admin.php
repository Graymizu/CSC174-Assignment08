<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "widget_corp";
	$dbpass = "coffee";
	$dbname = "widget_corp";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);










	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM pages ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";


	$result = mysqli_query($connection, $query);
	
?>

<!doctype html>
<html>
<head>
	<title>Database Read - Pages</title>
</head>
<body>

	<h1>Database Read - Pages</h1>

	<table border>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

		<tr>
			<td><?php echo $pages["menu_name"]; ?></td>
			<td><?php echo $pages["content"]; ?></td>

		</tr>

<?php } ?>

	</table>

	<br>
	<a href=".">Back to the Index</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
<?php

	$dbhost = "localhost";
	$dbuber = "urcscon3_sydney";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_sydney";

	$connection = new mysqli('66.147.242.186', 'urcscon3_sydney', 'coffee1N', 'urcscon3_sydney');

	$query = "DELETE FROM survey ";
	$query .= "WHERE counter = {$_POST['counter'] ";
	$query .= "LIMIT 1";
	$result = mysqli_query($connection, $query);
	?>

<?php
		if ($result) {
?>
    <div>
        The record <?php echo $_POST['counter'] ?> has been deleted.
    </div>

<?php

} else {
    die("Database query failed.");
}
?>


<?php

	$dbhost = "localhost";
	$dbuber = "urcscon3_sydney";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_sydney";

	$connection = new mysqli('66.147.242.186', 'urcscon3_sydney', 'coffee1N', 'urcscon3_sydney');

	$counter = $_POST['counter'];
	$fname = Trim(stripslashes($_POST['fname']));
	$email = Trim(stripslashes($_POST['email']));
	$pnumber = Trim(stripslashes($POST['pnumber']));
	
	$fname = mysqli_real_excape_string($connection, $fname);
	$email = mysqli_real_excape_string($connection, $email);
	$pnumber = mysqli_real_excape_string($connection, $pnumber);

	$query = "UPDATE survey SET";
	$query .= "fname = '$fname', email ='$email', pnumber = $'pnumber' ";
	$query .= "WHERE counter = {$ounter}";
	$result = mysqli_query($connection, $query);
?>

<?php
	if ($result) {
?>
   	 <div>
        The record <?php echo $_POST['counter'] ?> has been updated.
    </div>

<?php

} else {
    die("Database query failed.");
}
?>

<?php

mysqli_close($connection);

?>

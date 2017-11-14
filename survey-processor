<?php
//creating a database connection

	$dbhost = "localhost";
	$dbuser = "urcscon3_sydney";
	$dbpass = "coffee1N";
	$dbname = "urcsccon3_sydney";

	$connection = new mysqli('66.147.242.186', 'urcscon3_sydney', 'coffee1N', 'urcsccon3_sydney');

//HTML form values in $_POST

	$fname = Trim(stripslashes($_POST['first']));
	$lname = Trim(stripslashes($_POST['last']));
	$email = Trim(stripslashes($_POST['email']));
	$pnumber = Trim(stripslashes($POST['pnumber']));

//escape all strings
	$fname = mysqli_real_excape_string($connection, $fname);
	$lname = mysqli_real_excape_string($connection, $lname);
	$email = mysqli_real_excape_string($connection, $email);
	$pnumber = mysqli_real_excape_string($connection, $pnumber);

//databse query
$query  = "INSERT INTO contact (";
	$query .= "  fname, lname, email, pnumber";
	$query .= ") VALUES (";
	$query .= "  '{$fname}', '{$lname}', '{$email}', '{$pnumber}'";
	$query .= ")";

	$result = mysqli_query($connection, $query);

?>

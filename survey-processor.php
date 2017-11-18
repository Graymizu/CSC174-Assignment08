<?php
//creating a database connection

	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_sydney";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_sydney";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//HTML form values in $_POST

	$fname = Trim(stripslashes($_POST['fname']));
	$email = Trim(stripslashes($_POST['email']));
	$pnumber = Trim(stripslashes($_POST['pnumber']));
	$like_kit = Trim(stripcslashes($_POST['kitkat']));
	$like_poc = Trim(stripcslashes($_POST['pocky']));
	$fav = Trim(stripcslashes($_POST['preference']));
	$message = Trim(stripcslashes($_POST['message']));

//escape all strings
	$fname = mysqli_real_escape_string($connection, $fname);
	$email = mysqli_real_escape_string($connection, $email);
	$pnumber = mysqli_real_escape_string($connection, $pnumber);
 	
	$fav = mysqli_real_escape_string($connection, $fav);
	$message = mysqli_real_escape_string($connection, $message);


//databse query
$query  = "INSERT INTO contact (";
	$query .= "  fname, email, pnumber, kitkat, pocky, preference, message";
	$query .= ") VALUES (";
	$query .= "  '{$fname}','{$email}', '{$pnumber}', '{$like_kit}', '{$like_poc}', '{$fav}', '{$message}'";
	$query .= ")";

	$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CSC174 Assignment 08- Sdyney</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/grid.css">
	</head>
	<body>
	   <div class="container2">
	   		<div class="thanksbox">
	     		<h1> Thank you, <?php echo $_POST["fname"]; ?> for participating in our survey!</h1>
	   		</div>
	   		<div class="mainbox2">
		   		<ul class="formformat">
		   			<li>
					   <form method="post" action="assignment08.html">
					   	<input type="submit" value="Back to Survey" />
					   </form>
					</li>
				</ul>
			</div>
	   </div>
	</body>
</html>

<?php
	mysqli_close($connection);
?>

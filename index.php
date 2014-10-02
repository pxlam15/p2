<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>

	<title> Password Generator </title>
	<meta charset 'utf-8'>

	<?php require 'C:\xampp\htdocs\p2\logic\logic.php'; ?>

</head>

<body>

	<form method='POST' action ='index.php'>
		<label for ='numWords'>How many words?</label>
		<input maxlength= 1 type = 'text' name='num' id='numWords' val ='9'> (Max 9)<br>
		
		<label for='numPassYes'> Add number to password </label>
		<input type='checkbox' name='numYes' val = '1'/> <br>

		<label for='symPassYes'> Add symbol to pass </label>
		<input type ='checkbox' name='symYes' val = '1'/><br>

		<input type='submit' value='Submit'> <br>
	</form>

</body>
</html>
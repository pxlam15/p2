<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>

	<title> Password Generator </title>
	<meta charset 'utf-8'>

	<?php require 'logic.php'; ?>

</head>

<body>

	<form method='POST' action ='index.php'>
		<label for ='numWords'>How many words?</label>
		<input maxlength= 1 type = 'text' name='num' id='numWords' val ='9'> (Max 9)<br>
		
		<label for='numPassYes'> Add number to password </label>
		<input type='checkbox' name='Numbers with Password?' id='numPassYes'> <br>

		<label for='symPassYes'> Add symbol to pass </label>
		<input type ='checkbox' name='Symbol with Password?' id 'symPassYes'><br>

		<input type='submit' value='Gimme Another yo'> <br>
	</form>

	<?php echo $numWords;?>


</body>
</html>

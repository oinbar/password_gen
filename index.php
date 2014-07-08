<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
include "logic.php";
?>


<!DOCTYPE html>
<html>
<head>
    <title>Password Generator</title>
</head>


<body>

<form method='POST' action='index.php'>

	<br>
	<label for="password">Password:</label>
	<input type='text' name='password' value="<?php echo $password ?>"> <br>
	<label for="min-words">Number of words:</label>
	<select name ='min_words' id="min_words" data-option="min_words">
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4" selected="selected">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select><br>
	<label for="delimeter">Delimeter:</label>
	<input type='text' name='delimeter' value="<?php echo $delimeter ?>"><br>
	<label for="append_num">Append random number at the end:</label>
	<input type='checkbox' checked='checked' name='append_num' value="<?php echo $append_num ?>"><br>
	<input type='submit' value='Generate Password'> <br>
</form>

</body>
</html>
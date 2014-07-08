<?php

if(isset($_POST['password'])) {
	$password = $_POST['password'];
}
else{
	$password = '';
}

if(isset($_POST['min_words'])) {
	$min_words = $_POST['min_words'];
}
else {
	$min_words = 0;
}

if(isset($_POST['delimeter'])) {
	$delimeter = $_POST['delimeter'];
}
else {
	$delimeter = '-';
}

if(isset($_POST['append_num'])) {
	$append_num = 'True';
}
else {
	$delimeter = '-';
}

$f = file_get_contents('http://www.mieliestronk.com/corncob_lowercase.txt');
$vocab = explode("\n", $f);
foreach($vocab as $k => $v){
	$vocab_new[$v] = $v ;
}

if ($min_words > 0) {
	$words = array_rand($vocab_new, $min_words);
	if ($append_num == True) {
		array_push($words, rand(0, 10));
	}
}
else{
	$words = array('');
}
$password = implode($delimeter, $words);

?>
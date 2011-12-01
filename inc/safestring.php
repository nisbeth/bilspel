<?php



?>

<? /*

// set variable to se if doc is loaded or not
$safe_strings = true;

// get a string as a variable
function safeString($string) {
	
	// strip tags, and make safe for database insert
	$string = mysql_real_escape_string(strip_tags($string));
	
	// return string
    return $string;
}


?>

<?

// Check variable to se if doc is loaded or not
// (I.E. if variable $safe_strings aint true, load 
// the file, it will be true after file is loaded)

if(!$safe_strings) include_once 'safe_strings.php';


// takes a html $_POST as argument
function($_POST){

	// cleanup the string
	$name = safeString($_POST['name']);
	
	// print the string
	echo $name;
}


*/?>
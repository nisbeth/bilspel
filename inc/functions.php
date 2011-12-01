<?
// detect browser
//echo $_SERVER['HTTP_USER_AGENT'];


// timestamp for comments
     function getCurrentDate(){
     return date("Y-m-d H:i");
}

// prints selected object for debug.
    function printAll($object) {
    echo "<pre>";
    print_r($object);
    echo "</pre>";
}

//connect to db with standard parameters.
       
       function connectDb($host = "localhost", $user = "root", $password = "root", $db = "bildgalleri") {

//Connect to database
    mysql_connect($host, $user, $password)
    or die("Could not connect: " . mysql_error());

//Choose database
    mysql_select_db($db)
    or die("Vi kunde inte hitta databasen: " . mysql_error());

// save connection in global varible.
    global $isConnected;
    $isConnected = true;
}

// post comment with "name" and "text"
function insertComment($username, $text) {
   //  if were not connected, connect.
    global $isConnected;
    if (isset($isConnected) == false)
    connectDb ();

//Escape all strings and use the strip_tags() to be more safe
    
   $safe_strings = TRUE;

   function safeString($string){
    $string = mysql_real_escape_string(strip_tags($string));
    return $string;
   }
   
   $username = safeString($username);
   $text = safeString($text);
  
//$username = mysql_real_escape_string($username);
  //$ $text = mysql_real_escape_string($text);
    
// date and time
    $date = getCurrentDate();
    
//Inserts a comment dB. 
    mysql_query("INSERT INTO comment (`username`, `text`, `date`) VALUES ('$username' , '$text', '$date')")
    or die("Something went wrong with the insert query" . mysql_error());
}

?>


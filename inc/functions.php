<?
// detect browser
//echo $_SERVER['HTTP_USER_AGENT'];


// metod som hämtar ut datum och tid på svenska
     function getCurrentDate(){
     return date("Y-m-d H:i");
}

// metod som skriver ut angivet objekt för debug syfte
    function printAll($object) {
    echo "<pre>";
    print_r($object);
    echo "</pre>";
}

//Anslut till databas med förväntade standard parameter.
       function connectDb($host = "emilo.se.mysql", $user = "emilo_se", $password = "ggsxEvbi", $db = "emilo_se") {
       //function connectDb($host = "localhost", $user = "root", $password = "root", $db = "bildgalleri") {

//Connect to database
    mysql_connect($host, $user, $password)
    or die("Could not connect: " . mysql_error());

//Choose database
    mysql_select_db($db)
    or die("Vi kunde inte hitta databasen: " . mysql_error());

// Spara ner i global variabel, att vi är anslutna
    global $isConnected;
    $isConnected = true;
}

// lägger in en comment med angivet namn och text
function insertComment($username, $text) {
   //  om vi inte är anslutna, så ansluter vi
    global $isConnected;
    if (isset($isConnected) == false)
    connectDb ();

//Escapa alla strängar för säkerhetsskull
   include_once 'safestring.php';
   $username = safeString($username);
   $text = safeString($text);
  // $username = mysql_real_escape_string($username);
  //$ $text = mysql_real_escape_string($text);
    
    // tar ut dagens datum och tid
    $date = getCurrentDate();
//Lägg in comment i databasen
    mysql_query("INSERT INTO comment (`username`, `text`, `date`) VALUES ('$username' , '$text', '$date')")
    or die("Something went wrong with the insert query" . mysql_error());
}

?>


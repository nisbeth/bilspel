<?php
require_once 'config.php';
class Connection{
    private $link;

    //Öppnar databasen om det blir new
    public function __construct(){
        $this->openDB();
    }

//    //Stänger databasen när classen slutas användas
//    public function  __destruct() {
//        $this->closeDB();
//        }

    // Kopplar upp till databasen
    private function openDB(){
    $this->link=mysql_connect(MYSQL_SERVER, MYSQL_USERNAME, MYSQL_PASSWORD)
            or die('Kunde inte ansluta till mysql servern '.mysql_error());

    mysql_select_db(MYSQL_DATABASE)
            or die('Kunde inte ansluta till databasen ' .mysql_error());

    return $this->link;
    }

//    // Stänger databasen
//    private function closeDB(){
//    mysql_close($this->link)
//            or die(mysql_error());
//    }

    public function runSqlQuery($query){
        $result = mysql_query($query) or die ("Something is wrong with:" . $query . "Place ERROR: " . mysql_error());
        return mysql_insert_id();
    }

    public function runSqlQueryWithResult($query){
        $result = mysql_query($query) or die ("Something is wrong with:" . $query . "Place ERROR: " . mysql_error());
        return $result;
    }
}
?>

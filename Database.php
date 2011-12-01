<?php
    require 'Connection.php';

class Database{
 
   // $query

   private $mConnection;
   private $mUsername;
   private $mPassword;
   private $mNewScore;
   private $mSuccess;

   public function  __construct($username = NULL, $password = NULL, $score = NULL) {

       // escape
       
        $this->mConnection = new Connection();
        if(isset($username))
            $this->mUsername = mysql_real_escape_string($username);
        if(isset($password))
            $this->mPassword = mysql_real_escape_string($password);
        if(isset($score))
            $this->mNewScore = mysql_real_escape_string($score);
        
        $this->mSuccess = TRUE;
   }

   // saves a new user in dB
   
   public function saveUser(){
       $query = "INSERT INTO highscores (username, password, highscore) VALUES ( '".$this->mUsername."' , '".$this->mPassword."' , '".$this->mNewScore."')";
       $this->mConnection->runSqlQuery($query);
   }

   // save highscore
   
   public function saveScore(){
       $query = "SELECT highscore FROM highscores WHERE username = '" . $this->mUsername."'";
       $result = $this->mConnection->runSqlQueryWithResult($query);
       $score;

       while($row = mysql_fetch_assoc($result)){
            $score = $row['highscore'];
       }

       if($score < $this->mNewScore){
           $query2 = "UPDATE highscores SET highscore = '".$this->mNewScore."' WHERE username = '" . $this->mUsername."'";
           $this->mConnection->runSqlQuery($query2);
       }
   }
   
   // if user exist, select username and updates score.

   public function userExist(){
       $query = "SELECT username, highscore FROM highscores WHERE username = '" . $this->mUsername . "'";
       $result = $this->mConnection->runSqlQueryWithResult($query);

       if(mysql_num_rows($result)){
            $query2 = "SELECT username, highscore FROM highscores WHERE username = '" . $this->mUsername . "'AND password = '" . $this->mPassword."'";
            $result2 = $this->mConnection->runSqlQueryWithResult($query2);
            if(mysql_num_rows($result2)){
                $this->saveScore();
            } else {
                $this->mSuccess = FALSE;
            }
       }else{
           $this->saveUser();
       }

       return $this->mSuccess;
   }

   
   // updates the score if its a personal best.

   public function getAll(){

        $this->userExist();

        $return = array();
        $abc;

        if($this->mSuccess){
            $abc = array("yourscore" => $this->getPlayerPosition($username),"topten" => $this->getHighestscores(0,10),"sucess" => $this->mSuccess);
        }else{
            $abc = array("sucess" => $this->mSuccess);
        }
       
       array_push($return, $abc);
       return json_encode($return);

   }


   public function getHighestscores($startLimit,$endLimit){
        $query = "SELECT username, highscore FROM highscores ORDER BY highscore DESC LIMIT $startLimit,$endLimit";
        $result = $this->mConnection->runSqlQueryWithResult($query);

        $return = array();

        while($row = mysql_fetch_assoc($result)){
            array_push($return, $row);
        }

        return $return;
   }

   public function getPlayerPosition(){
       $query = "SELECT username, highscore FROM highscores ORDER BY highscore DESC";

       $result = $this->mConnection->runSqlQueryWithResult($query);

       $return = array();
       $i = 1;
       while ($row = mysql_fetch_assoc($result)){
           if($row['username'] == $this->mUsername){
               $positionString = (string)$i;
               $position = array("username" => $row['username'],"highscore" => $row['highscore'], "position" => $positionString);
               
               array_push($return, $position);
               
           }
           $i++;
       }
       
       return $return;
   }
}
?>
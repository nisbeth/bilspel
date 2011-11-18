<?php
    require_once 'Database.php';

    $username = $_GET['username'];
    $password = $_GET['password'];
    $score = $_GET['highscore'];

    $data = new Database($username, $password, $score);

    $return = $data->userExist();

    $returnArray = array();

    if($return){
        $result = $data->getPlayerPosition();
        $resultBool = array("success" => $return);
        $resultData = array("user" => $result);
        array_push($returnArray, $resultData);
        array_push($returnArray, $resultBool);
    } else {
        $resultBool = array("success" => $return);
        $resultData = array("user" => "null");
	    array_push($returnArray, $resultData);
        array_push($returnArray, $resultBool);
    }


    echo json_encode($returnArray);
    
?>

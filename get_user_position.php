<?php
    require_once 'Database.php';

    $username = $_GET['username'];

    $data = new Database($username);

    $result = $data->getPlayerPosition();
	
    echo json_encode($result);

?>

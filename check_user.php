<?php
    require_once 'Database.php';

    $username = $_GET['username'];
    $password = $_GET['password'];

    $data = new Database($username,$password);
    $result = $data->checkUser();
    echo json_encode($result);

?>

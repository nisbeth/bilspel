<?php
    require_once 'Database.php';

    $username = $_GET['username'];
    $password = $_GET['password'];
    $score = $_GET['score'];


    $data = new Database($username, $password, $score);

    echo $data->getAll();

?>

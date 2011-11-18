<?php
    require_once 'Database.php';

    $data = new Database();

    $startlimit = $_GET['startlimit'];
    $endlimit = $_GET['endlimit'];

    echo json_encode($data->getHighestscores($startlimit, $endlimit));

?>

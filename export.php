<?php
    require_once 'Database.php';

    $data = new Database();

    echo $data->getHighestscore();

?>

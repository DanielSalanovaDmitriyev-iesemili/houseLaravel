<?php
    $house = $houses;
    header('Content-Type: application/json');
    $json = json_encode($house);
    print_r($json);
?>
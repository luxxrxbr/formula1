<?php

function GetConnection(){

    $conn = new mysqli("localhost", "root", "test1234", "lr_formule1");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
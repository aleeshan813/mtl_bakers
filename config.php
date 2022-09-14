<?php
    $dbhost = 'localhost';
    $dbuser = "root";
    $dbpass = "";
    $db = 'db_mtl_bakers';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if (!$conn) {
        die("Connection faild: " . mysqli_connect_error());
    }
<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'csabsen');
    define('DB_PASS', '123456');
    define('DB_NAME', 'php_dev');

    //create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if($conn->connect_error) {
        die('Connection Failded ' . $conn->connect_error);
    }

    echo 'CONNECTED!';
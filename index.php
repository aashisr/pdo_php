<?php
/**
 * Created by PhpStorm.
 * User: Aashis
 * Date: 3/7/2018
 * Time: 9:27 PM
 */

//define database variables, dsn is data source name
$dsn = "mysql:host = localhost; dbname = symfony";
$username = "root";
$password = "";

//Connect database
try {
    $conn = new PDO($dsn, $username, $password);
    //Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
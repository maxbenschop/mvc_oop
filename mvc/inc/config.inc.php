<?php

$host = 'web01.my-server.eu';
$dbname = '**********';
$username = '**********';
$password = '**********';

$mysqli = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// echo "Connected to the database successfully!";

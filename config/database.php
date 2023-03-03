<?php
const DB_HOST = 'localhost';
const DB_USER = 'muzak';
const DB_PASS = '123456';
const DB_NAME = 'php_dev';

// creating connection to the database using mysqli
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// checking for the connection
if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}
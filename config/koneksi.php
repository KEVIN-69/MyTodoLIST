<?php

$db_host = "localhost:3307";
$db_username = "root";
$db_password = "";
$db_name = "danielkevin-todolist";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
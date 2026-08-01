<?php

$conn = mysqli_connect("localhost", "root", "", "myproject");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
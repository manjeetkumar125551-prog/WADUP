<?php

session_start();

if(!isset($_SESSION["user"]))
{
    header("Location: EX3.7.php");
    exit();
}

echo "Welcome " . $_SESSION["user"];

echo "<br><br>";

echo "<a href='logout.php'>Logout</a>";

?>
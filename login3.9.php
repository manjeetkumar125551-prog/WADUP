<?php

$username = $_POST["username"];
$password = $_POST["password"];

if(isset($_POST["remember"]))
{
    setcookie("username", $username, time() + 86400 * 30);
    setcookie("password", $password, time() + 86400 * 30);
}

echo "<h2>Login Successful!</h2>";

echo "Username: " . $username;

?>
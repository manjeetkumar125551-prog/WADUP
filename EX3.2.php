<!DOCTYPE html>
<html>
<head>
    <title>Read Cookie</title>
</head>
<body>

<form action="" method="post">
    Name:
    <input type="text" name="name" required>
    <input type="submit" value="Submit">
</form>

<?php

if(isset($_POST["name"]))
{
    $name = $_POST["name"];

    setcookie("username", $name, time() + 3600);

    echo "<br>Cookie is set successfully.";
    echo "<br><br>Please refresh the page to read the cookie.";
}

if(isset($_COOKIE["username"]))
{
    echo "<br>Welcome " . $_COOKIE["username"];
}

?>

</body>
</html>
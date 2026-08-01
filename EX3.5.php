<!DOCTYPE html>
<html>
<body>

<form method="post">
    Name:
    <input type="text" name="username" required>
    <input type="submit" value="Create Session">
</form>

<?php

session_start();

if(isset($_POST["username"]))
{
    $_SESSION["username"] = $_POST["username"];

    echo "<br>Session Created Successfully.";
    echo "<br>Welcome " . $_SESSION["username"];
}

?>

</body>
</html>
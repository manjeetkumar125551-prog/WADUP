<!DOCTYPE html>
<html>
<head>
    <title>Cookie with Header</title>
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

    setcookie("username", $name, time()+3600);

    header("Location: welcome.php");
    exit();
}

?>

</body>
</html>
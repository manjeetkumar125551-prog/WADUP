<!DOCTYPE html>
<html>
<body>

<form action="" method="post">

Username:
<input type="text" name="username" required><br><br>

Password:
<input type="password" name="password" required><br><br>

<input type="submit" value="Login">

</form>

<?php

session_start();

if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    if($username=="admin" && $password=="123")
    {
        $_SESSION["user"]=$username;

        header("Location: home.php");
        exit();
    }
    else
    {
        echo "Invalid Username or Password";
    }
}

?>

</body>
</html>
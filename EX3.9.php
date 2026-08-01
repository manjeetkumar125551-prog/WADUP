<?php
$username = "";
$password = "";

if(isset($_COOKIE["username"]))
{
    $username = $_COOKIE["username"];
}

if(isset($_COOKIE["password"]))
{
    $password = $_COOKIE["password"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me</title>
</head>
<body>

<h2>Login Form</h2>

<form action="login3.9.php" method="post">

    Username:
    <input type="text" name="username"
    value="<?php echo $username; ?>">

    <br><br>

    Password:
    <input type="password" name="password"
    value="<?php echo $password; ?>">

    <br><br>

    <input type="checkbox" name="remember">
    Remember Me

    <br><br>

    <input type="submit" value="Login">

</form>

</body>
</html>
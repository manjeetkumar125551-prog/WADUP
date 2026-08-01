<?php
session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "1234")
    {
        $_SESSION['username'] = $username;
    }
    else
    {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Session</title>
</head>

<body>

<?php

if(isset($_SESSION['username']))
{
?>

    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>

    <p>You have successfully logged in.</p>

    <a href="logout.php">Logout</a>

<?php
}
else
{
?>

    <h2>Login Form</h2>

    <?php
    if(isset($error))
    {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <form method="post">

        Username:
        <input type="text" name="username" required>
        <br><br>

        Password:
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" name="login" value="Login">

    </form>

<?php
}
?>

</body>
</html>
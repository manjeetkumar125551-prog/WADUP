<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    setcookie("username", $username, time() + 3600);

    echo "Cookie has been created successfully!<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create Cookie Using Form</h2>

<form method="post" action="">
    Enter Name:
    <input type="text" name="username" required>
    <input type="submit" name="submit" value="Create Cookie">
</form>

<?php
if (isset($_COOKIE['username'])) {
    echo "<br>Stored Cookie Value: " . $_COOKIE['username'];
}
?>

</body>
</html>
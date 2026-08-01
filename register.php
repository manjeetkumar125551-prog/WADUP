<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if(!$conn)
{
    die("Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name, email, password)
        VALUES('$name', '$email', '$password')";

if(mysqli_query($conn, $sql))
{
    echo "Registration Successful";
}
else
{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
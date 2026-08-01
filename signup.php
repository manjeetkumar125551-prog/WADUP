<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

<h2>Sign Up</h2>

<form action="" method="POST" enctype="multipart/form-data">

Username
<br>
<input type="text" name="username" required>

<br><br>

Email
<br>
<input type="email" name="email" required>

<br><br>

Phone
<br>
<input type="text" name="phone" required>

<br><br>

Password
<br>
<input type="password" name="password" required>

<br><br>

Confirm Password
<br>
<input type="password" name="confirm_password" required>

<br><br>

Profile Photo
<br>
<input type="file" name="profile" accept="image/*">

<br><br>

<input type="submit" name="submit" value="Sign Up">

</form>

</body>
</html>

<?php


$conn = mysqli_connect("localhost","root","","myproject");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}


if(isset($_POST['submit']))
{

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if($password == $confirm)
    {

        $password = password_hash($password, PASSWORD_DEFAULT);

        $profile = "";

        if(isset($_FILES['profile']) && $_FILES['profile']['error']==0)
        {
            $profile = time()."_".$_FILES['profile']['name'];

            move_uploaded_file(
                $_FILES['profile']['tmp_name'],
                "uploads/".$profile
            );
        }

        $sql = "INSERT INTO users(username,email,phone,password,profile)
        VALUES('$username','$email','$phone','$password','$profile')";

        if(mysqli_query($conn,$sql))
        {
            echo "Sign Up Successful";
        }
        else
        {
            echo "Error : ".mysqli_error($conn);
        }

    }
    else
    {
        echo "Password do not match";
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
</head>
<body>

<h2>Reverse Array Program</h2>

<form method="post">
    Enter array values (separated by comma):
    <input type="text" name="arr">
    <input type="submit" name="submit" value="Reverse">
</form>

<?php
if(isset($_POST['submit']))
{
    $input = $_POST['arr'];

    $array = explode(",", $input);

    $reverse = array_reverse($array);

    echo "<h3>Original Array:</h3>";
    print_r($array);

    echo "<h3>Reversed Array:</h3>";
    print_r($reverse);
}
?>

</body>
</html>
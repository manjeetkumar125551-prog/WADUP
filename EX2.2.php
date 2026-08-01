<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>

<h2>Sort an Array</h2>

<form method="post">
    Enter array elements (comma separated):<br><br>
    <input type="text" name="arr" required>
    <br><br>
    <input type="submit" value="Sort Array">
</form>

<?php
if(isset($_POST['arr']))
{
    // User input ko array me convert karna
    $array = explode(",", $_POST['arr']);

    // Array ko sort karna
    sort($array);

    echo "<h3>Sorted Array:</h3>";

    foreach($array as $value)
    {
        echo $value . " ";
    }
}
?>

</body>
</html>
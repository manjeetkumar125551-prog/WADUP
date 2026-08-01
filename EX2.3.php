<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions</title>
</head>
<body>

<?php

echo "<h2>1. array_change_key_case()</h2>";
$arr = array("Name"=>"Khushi", "Course"=>"BCA", "City"=>"Ahmedabad");

echo "<b>CASE_LOWER:</b><br>";
print_r(array_change_key_case($arr, CASE_LOWER));

echo "<br><br><b>CASE_UPPER:</b><br>";
print_r(array_change_key_case($arr, CASE_UPPER));


echo "<hr><h2>2. array_chunk()</h2>";
$months = array(
    "January","February","March","April",
    "May","June","July","August",
    "September","October","November","December"
);

$result = array_chunk($months, 3);
print_r($result);


echo "<hr><h2>3. array_count_values()</h2>";
$num = array("Apple","Mango","Apple","Banana","Mango","Apple");
print_r(array_count_values($num));


echo "<hr><h2>4. array_pop()</h2>";
$a = array("Red","Green","Blue");
array_pop($a);
print_r($a);


echo "<hr><h2>5. array_push()</h2>";
$b = array("Red","Green");
array_push($b, "Blue", "Yellow");
print_r($b);


echo "<hr><h2>6. array_unshift()</h2>";
$c = array("B","C","D");
array_unshift($c, "A");
print_r($c);


echo "<hr><h2>7. array_shift()</h2>";
$d = array("A","B","C","D");
array_shift($d);
print_r($d);

?>

</body>
</html>
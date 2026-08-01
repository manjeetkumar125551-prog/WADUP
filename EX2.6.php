<?php
date_default_timezone_set("Asia/Kolkata");

echo "<h2>PHP Date and Time Functions</h2>";

echo "<b>Current Date: </b>" . date("d-m-Y") . "<br><br>";

echo "<b>1. DAYOFWEEK(): </b>";
echo date("w") + 1;
echo "<br><br>";

echo "<b>2. WEEKDAY(): </b>";
echo date("N") - 1;
echo "<br><br>";

echo "<b>3. DAYOFMONTH(): </b>";
echo date("d");
echo "<br><br>";

echo "<b>4. DAYOFYEAR(): </b>";
echo date("z") + 1;
echo "<br><br>";

echo "<b>5. DAYNAME(): </b>";
echo date("l");
?>
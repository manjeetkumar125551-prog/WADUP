<?php

// 1. Numeric Array
echo "<h2>Numeric Array </h2>";

$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

foreach($days as $day)
{
    echo $day . "<br>";
}


// 2. Associative Array
echo "<h2>Associative Array </h2>";

$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

foreach($months as $month => $days)
{
    echo $month . " => " . $days . "<br>";
}


// 3. Multidimensional Array
echo "<h2>Multidimensional Array </h2>";

$laptop = array(

    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),

    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 60000
    )
);

foreach($laptop as $company => $details)
{
    echo "Company : " . $company . "<br>";
    echo "Model : " . $details["Model"] . "<br>";
    echo "Price : Rs." . $details["Price"] . "<br><br>";
}

?>
<?php
    $str = "Welcome to Marwadi University";
    echo "<h2>PHP String Functiona</h2>";
    echo "<b>Original String</b>" . $str . "<br><br>";

    echo "<b>1. strlen():</b><br>";
    echo "Length of String = " . strlen($str);
    echo "<br><br>";

    echo "<b>2. strpos():</b><br>";
    echo "Position of 'Marwadi' = " . strpos($str, "Marwadi");
    echo "<br><br>";

    echo "<b>3.str_word_count():</b><br>";
    echo "Total Words = " .str_word_count($str);
    echo "<br><br>";

    echo "<b>4. strrev():</b><br>";
    echo "Reverse String = " . strrev($str);
    echo "<br><br>";

    echo "<b>5.strtolower():</b><br>";
    echo strtolower($str);
    echo "<br><br>";

    echo "<b>6. strtoupper():</b><br>";
    echo strtoupper($str);

?>

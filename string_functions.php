<?php
$name = "Sumeet Wadile";
echo $name;
echo "<br>";
//. operator to join strings
echo "The length of my string is " . strlen($name);
echo "<br>";
echo "Word count: " . str_word_count($name);
echo "<br>";
echo "Reverse: " . strrev($name);
echo "<br>";
echo "Position: " . strpos($name, "Wadile");
echo "<br>";
echo str_replace("Sumeet", "Hansika", $name);
echo "<br>";
echo str_repeat($name, 10);
echo "<br>";
echo "<pre>";
echo rtrim("    Sumeet Ashok Wadile    ");
echo "<br>";
echo ltrim("    Sumeet Ashok Wadile    ");
echo "<pre>";
echo "<br>";

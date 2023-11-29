<?php
echo "for each loop in php <br>";

$fruits = array("apple", "banana", "grapes", "mango");

//Normal for loop
for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i] <br>";
}

//Foreach loop
foreach ($fruits as $fruit) {
    echo "$fruit <br>";
}

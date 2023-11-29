<?php
echo "Local & global variables in php <br>";

$a = 10;    //global variables
$b = 20;

function printValue()
{
    $a = 30;    //local variable
    global $b;  //global keyword is used to access global variable
    echo "The value of a is $a & b is $b <br>";
}

printValue();

echo var_dump($GLOBALS);
echo "<br>";
echo var_dump($GLOBALS["a"]);
echo "<br>";
echo var_dump($GLOBALS["b"]);
echo "<br>";

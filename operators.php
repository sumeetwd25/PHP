<?php

/**
 * Arithmetic operators
 * Assignment operators
 * Comparison operators
 * Logical operators
 */
$a = 20;
$b = 10;

//Arithmetic operators
echo "For a + b, the result is " . ($a + $b) . "<br>";
echo "For a - b, the result is " . ($a - $b) . "<br>";
echo "For a * b, the result is " . ($a * $b) . "<br>";
echo "For a / b, the result is " . ($a / $b) . "<br>";
echo "For a % b, the result is " . ($a % $b) . "<br>";
echo "For a ** b, the result is " . ($a ** $b) . "<br>";

//Assignment operators
$x = $a;
echo "For x, the result is " . ($x) . "<br>";
$a += 6;
echo "For a, the result is " . ($a) . "<br>";


//Comparison operators
$x = 7;
$y = 9;
echo "For x == y, the result is ";
echo var_dump($x == $y) . "<br>";

echo "For x > y, the result is ";
echo var_dump($x > $y) . "<br>";

echo "For x < y, the result is ";
echo var_dump($x < $y) . "<br>";

echo "For x <> y, the result is ";
echo var_dump($x <> $y) . "<br>";


//Logical operators
$m = true;
$n = false;

echo "For m and n, the result is ";
echo var_dump($m and $n) . "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n) . "<br>";

echo "For m && n, the result is ";
echo var_dump($m && $n) . "<br>";

echo "For m || n, the result is ";
echo var_dump($m || $n) . "<br>";

echo "For !m, the result is ";
echo var_dump(!$m) . "<br>";

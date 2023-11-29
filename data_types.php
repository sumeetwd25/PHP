<?php
/*
 * String
 * Integer
 * Float
 * Boolean
 * Object
 * NULL
 * Array
 */

//String
$name = "Sumeet";
$friend = 'Vicky';
echo "$friend is $name's friend <br>";

//Float
$income = 500;
$debts = -100;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";


//Boolean
$x = true;
$is_friend = false;
echo $x;
echo "<br>";
echo var_dump($is_friend);  //false boolean shows blank
echo "<br>";

//Object
//ex. Employee is a class, Sumeet is an object

//Array
$friends = array("john", "sam", "max", "james");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

//NULL
$name = NULL;
echo var_dump($name);

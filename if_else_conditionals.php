<?php
$a = 65;
$b = 9;

if ($a > 78) {
    echo "$a is greater than 78" . "<br>";
} else {
    echo "$a is less than 78" . "<br>";
}

$age = 45;
echo $age;
echo "<br>";

//if-else ladder
/*
if ($age > 18) {
    echo "You can drink water, tea, alcohol";
} else if ($age > 13) {
    echo "You can drink water, tea";
} else {
    echo "You can drink water";
}
*/

if ($age > 18) {
    echo "You can drink water, tea, alcohol" . "<br>";
}
if ($age > 13) {
    echo "You can drink water, tea" . "<br>";
} else {
    echo "You can drink water" . "<br>";
}

if ($age >= 25 && $age <= 65) {
    echo "You can drive";
} else {
    echo "You cannot drive";
}

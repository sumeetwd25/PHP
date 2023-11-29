<?php
echo "Multidimentional arrays in php <br>";

$multiDimArr = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

for ($i = 0; $i < count($multiDimArr); $i++) {
    echo var_dump($multiDimArr[$i]);
    echo "<br>";
}

for ($i = 0; $i < count($multiDimArr); $i++) {
    for ($j = 0; $j < count($multiDimArr[$i]); $j++) {
        echo $multiDimArr[$i][$j];
        echo " ";
    }
    echo "<br>";
}

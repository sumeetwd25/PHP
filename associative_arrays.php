<?php
echo "associative arrays in php <br>";

$favorite_color = array("Tony" => "Red", "Bruce" => "Green", "Steve" => "Blue", 4 => "Black");

echo $favorite_color["Tony"];
echo "<br>";
echo $favorite_color["Bruce"];
echo "<br>";
echo $favorite_color["Steve"];
echo "<br>";
echo $favorite_color[4];
echo "<br>";

foreach ($favorite_color as $key => $value) {
    echo "Favorite color of $key is $value <br>";
}

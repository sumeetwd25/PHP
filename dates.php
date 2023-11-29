<?php
echo "Dates in php <br>";

$d = date("d-m-y");
echo "Today's date is $d <br>";

$d = date("d/m/Y");
echo "Today's date is $d <br>";

$d = date("dS F Y");
echo "Today's date is $d <br>";

$d = date("dS F Y g:i A");
echo "Today's date is $d <br>";

// Prints something like: Wednesday 19th of October 2022 08:40:48 AM
echo date('l jS \of F Y h:i:s A');
echo "<br>";

$year = date("Y");
echo "Copyright $year | All rights reserved";

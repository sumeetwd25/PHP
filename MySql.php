<?php
echo "MySql database connection. <br>";

/**Ways to connect with MySQL database
 * MySQLi extension
 * PDO (Php Data Objects)
 */

//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());    //Die if connection was not successful
} else {
    echo "Connection was successful.";
}

<?php

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
    echo "Connection was successful. <br>";
}

//Create a database
$sql = "create database dbSumeet";
$result = mysqli_query($conn, $sql);
if ($result) {      //Check for the database creation success
    echo "Database created successfully";
} else {
    echo "Database not created: " . mysqli_error($conn);
}

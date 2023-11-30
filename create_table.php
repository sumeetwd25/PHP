<?php

/**Ways to connect with MySQL database
 * MySQLi extension
 * PDO (Php Data Objects)
 */

//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbSumeet";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());    //Die if connection was not successful
} else {
    echo "Connection was successful. <br>";
}

//Create a table
$sql = "CREATE TABLE `phptrip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(10) NOT NULL , `dest` VARCHAR(10) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);
if ($result) {      //Check for the table creation success
    echo "Table created successfully";
} else {
    echo "Table not created: " . mysqli_error($conn);
}

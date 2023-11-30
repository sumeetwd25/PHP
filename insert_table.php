<?php

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

//Add a new trip to the trip table in the database
$name = 'Sumeet';       //Variables to be inserted into the table
$destination = 'Russia';
$sql = "INSERT INTO `phptrip` ( `name`, `dest`) VALUES ('$name', '$destination')";   //Sql query to be executed
$result = mysqli_query($conn, $sql);
if ($result) {      //Check for the trip insertion success
    echo "Trip inserted successfully";
} else {
    echo "Trip not inserted: " . mysqli_error($conn);
}

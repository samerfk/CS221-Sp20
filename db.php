<?php

//provide information to connect to db
$host = "localhost";
$user = "root";
$password = ""; //empty string
$database = "finalproject";




//built in function
$conn = mysqli_connect($host, $user, $password, $database); //connect the script into the database

if(!$conn){
    die("Connection error:  " . mysqli_connect_error());
}

else{
    echo "<p>Connection successful</p>";
}



?>
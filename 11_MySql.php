<?php
echo "Ready to get connected to a Database <br>";
$serverName = "localhost";
$userName = "root";
$password = "";

// create connection 
$conn = mysqli_connect($serverName, $userName, $password);

// Die if connection was not successful 
if(!$conn){
    die("Faild to connect: ". mysqli_connect_error());
}
else{
    echo "connection was successful";
}
?>
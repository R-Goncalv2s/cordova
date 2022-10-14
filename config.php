<?php
$hostName="localhost";
$userName="root";
$password="";
$databaseName="teste";

$conn = mysqli_connect($hostName, $userName, $password, $databaseName);

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
echo "Connected successdully";

?>
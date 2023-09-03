<?php
$server = "webtrial-db-1";
$username = "root";
$password = "root";
$database = "recipebook";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
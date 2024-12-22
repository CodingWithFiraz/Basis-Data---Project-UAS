<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "project_basis";
$conn = mysqli_connect($host, $username, $password, $database);
if(!$conn) {
    die("something went wrong: " .mysqli_connect_error());
};
?>
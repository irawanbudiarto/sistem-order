<?php 
$servername = 'localhost';
$username = 'root';
$password = 'password';
$db = 'sistem_order';
//menghubungkan database ke mysql
$con = mysqli_connect($servername, $username, $password, $db);
$conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);

if (!$con) {
    die ("connection failed.". mysqli_connect_error()); 
}
 ?>
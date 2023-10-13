<?php
$user = "localhost";
$server = "root";
$pass = "";
$dbname = "users_registration";

$conn = new mysqli($user, $server, $pass, $dbname);
if ($conn->connect_error) {
    die("connection unsuccess" . $conn->$connect_error);
} else {
    echo "connected";
}
$id = $_GET['id'];

$query = "delete from users where id=$id";
$r = mysqli_query($conn, $query);
if ($r === true) { } else {
    echo "error";
}
header('location:displayusers.php');

$conn->close();

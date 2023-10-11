<?php
$user = "localhost";
$server = "root";
$pass = "";
$dbname = "registration";
$conn = new mysqli($user, $server, $pass, $dbname);

if ($conn->connect_error) {
    die("unsuccesful" . $conn->connect_error);
} else {
    echo "";
}

$id = $_GET['id'];
$query = "delete from info where id =$id";
$res = mysqli_query($conn, $query);
if ($query) { } else { }
header('location:selectall.php');

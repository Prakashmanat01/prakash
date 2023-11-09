<?php
include "connection.php";
$movie = $_POST['movie_id'];
$date = $_POST['date'];
$time = $_POST['time'];
$q = "select date from booking where time='$time',movie_id=$movie";
$re = mysqli_query($conn, $q);
while ($rows = mysqli_fetch_assoc($re)) {
    $a = $rows(['date']);
}
echo json_encode($a);

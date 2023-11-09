<?php
include "connection.php";
if (isset($_POST['submit'])) {
    $movie = $_POST['movie'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $seatcheckbox = $_POST['seatcheckbox'];
    $chk = "";
    foreach ($seatcheckbox as $i) {
        $chk .= $i;
    }
    $add = "insert into booking(movie_id,date,time)values($movie,'$date','$time')";
    if ($conn->query($add) === true) {
        $pk = mysqli_insert_id($conn);
        $q = "insert into booking_details(booking_id,seat)values($pk,'$chk')";
        if ($conn->query($q) == true) {
            echo "success";
        }
    } else {
        echo "unsuccesful";
    }

    $conn->close();
}

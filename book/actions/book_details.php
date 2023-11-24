<?php
session_start();

include "connection.php";
if (isset($_POST['submit'])) {
    $movie = $_POST['movie'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $checkBox = implode(',', $_POST['seatcheckbox']);

    // $seatcheckbox = $_POST['seatcheckbox'];
    // $chk = "";
    // // $price = $_POST['price'];
    // // $_SESSION['price'] = $price;
    // foreach ($seatcheckbox as $i) {
    //     $chk .= $i;
    // }
    $user_id = $_SESSION['id'];
    $promocode = $_POST['promocode'];
    $add = "insert into booking(movie_id,date,time,user_id,promocode)values($movie,'$date','$time',$user_id,'$promocode')";
    if ($conn->query($add) === true) {
        $pk = mysqli_insert_id($conn);

        $q = "insert into booking_details(booking_id,seat)values($pk,'$checkBox')";
        if ($conn->query($q) === true) {
            echo "success";
            header("location:success.php");
        }
    } else {
        echo "unsuccesful";
    }

    $conn->close();
}

<?php
include "actions/connection.php";
$movie = $_POST['movie_id'];
$date = $_POST['date'];
$time = $_POST['time'];

$a = "select seat from booking_details inner join booking on booking.id=booking_details.booking_id where movie_id=$movie and date='$date' and time='$time'";
$sel = mysqli_query($conn, $a);
$selected = array();
while ($row = mysqli_fetch_assoc($sel)) {
    $selected[] = $row['seat'];
}
// print_r($selected);
// die;
echo json_encode($selected);

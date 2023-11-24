<?php

if (isset($_POST['submit'])) {


    $server = 'localhost';
    $uname = "root";
    $pass = "";
    $db = "booking";

    $conn = new mysqli($server, $uname, $pass, $db);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    if ($conn->connect_error) {
        die("connection unsuccess" . $conn->$connect_error);
    } else {
        $add = "insert into users(username,password,gender,email)values('$username','$password','$gender','$email')";
        // $pk = mysqli_insert_id($add);
        // session_start();
        // $_SESSION['pk'] = $pk;
        if ($conn->query($add) === true) {
            header("location:login.php");
        }
    }
    $conn->close();
}

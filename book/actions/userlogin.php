<?php
include('connection.php');
session_start();

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from users where username='$username' and password='$password'";
    $check = mysqli_query($conn, $query);
    $userData = mysqli_fetch_assoc($check);

    if (mysqli_num_rows($check) == 1) {

        $_SESSION['id'] = $userData['id'];
        $_SESSION['username'] = $userData['username'];
        // header('location:book.php');
        echo "<script>alert('welcome');</script>";

        echo '<script>window.location="book.php";</script>';
    } else {
        echo "<script>alert('incorrect username or password !!!');</script>";
    }
    $q = "select id from users where username='$username'";
    $sel = mysqli_query($conn, $q);
    while ($row = mysqli_fetch_assoc($sel)) {
        $_SESSION['id'] = $row['id'];
    }
    $conn->close();
}

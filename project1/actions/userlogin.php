<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo "username";
    $user = "localhost";
    $server = "root";
    $pass = "";
    $dbname = "users_registration";

    $conn = new mysqli($user, $server, $pass, $dbname);
    if ($conn->connect_error) {
        die("connection unsuccess" . $conn->$connect_error);
    } else {
        echo "";
    }

    $query = "select * from users where username='$username' and password='$password'";
    $check = mysqli_query($conn, $query);
    if (mysqli_num_rows($check) == 1) {
        //echo "<script>alert('welcome');</script>";
        header('location:actions/displayusers.php');
    } else {
        echo "<script>alert('incorrect username or password !!!');</script>";
    }
    $conn->close();
}

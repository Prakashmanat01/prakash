<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $hobbies = $_POST['hobbies'];
    $chk = "";
    foreach ($hobbies as $i) {
        $chk .= $i . ",";
    }



    // echo "username";
    $user = "localhost";
    $server = "root";
    $passowrd = "";
    $dbname = "users_registration";

    $conn = new mysqli($user, $server, $passowrd, $dbname);
    if ($conn->connect_error) {
        die("connection unsuccess" . $conn->$connect_error);
    } else {
        echo "";
    }


    $checkuser = "select * from users where email='$email'";
    $r = mysqli_query($conn, $checkuser);
    $count = mysqli_num_rows($r);
    if ($count > 0) {
        echo "<script>alert('user already exists with this mail id');</script>";
    } else {
        $sql = "insert into users(username,password,email)values('$username','$password','$email')";
        if ($conn->query($sql) === true) {

            $pk = mysqli_insert_id($conn);

            $ud = "insert into user_details(gender,mobile,address,hobbies,user_id)values('$gender','$mobile','$address','$chk',$pk)";

            if ($conn->query($ud) === true) {
                echo "<script>alert('registered ');</script>";
                header('location:login.php');
            } else {
                echo "Error";
            }
        } else {
            echo "Error";
        }
    }


    $conn->close();
}

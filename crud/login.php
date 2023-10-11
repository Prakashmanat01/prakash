<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="login.css" type="text/css" />
</head>

<body>
    <form id="login" method="post" action="">
        <?php

        if (isset($_POST['submit'])) {
            $cusername = $_POST['user'];
            $cpassword = $_POST['pass'];
            $user = "localhost";
            $server = "root";
            $pass = "";
            $dbname = "registration";
            $conn = new mysqli($user, $server, $pass, $dbname);

            if ($conn->connect_error) {
                die("unsuccesful" . $conn->connect_error);
            } else {
                echo " ";
            }
            $check = "select * from info where username='$cusername' and password='$cpassword' ";
            $r = mysqli_query($conn, $check);
            if (mysqli_num_rows($r) == 1) {
                echo  "";
                //    include 'selectall.php';
                header('location:selectall.php');
            } else {

                echo "<script>alert('incorrect username or password!!!!!!');</script>";
            }

            $conn->close();
        }
        ?>
        <div class="form-field">
            <lable class="form-lable">Username</lable>
            <input type="text" class="form-control" name="user" autocomplete="off">
        </div>
        <div class="form-field">
            <lable class="form-lable">Password</lable>
            <input type="password" class="form-control" name="pass" autocomplete="off">
        </div>
        <button type="submit" value="Submit" id="submit" name="submit" class="btn btn-primary">Login</button>
        <a href="register.php">SignUp?</a>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js "></script>
    <script src="login.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
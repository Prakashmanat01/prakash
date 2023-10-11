<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />


    <link href="shortform.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <form method="post" id="update" action="">
        <!-- <div class="form-field">
            <lable class="form-label" for="id">Id</lable>
            <input type="number" class="form-control" id="username" name="id" autocomplete="off" />
        </div> --><?php

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
                    $query = "select * from info where id=$id";
                    $res = mysqli_query($conn, $query);
                    $data = mysqli_fetch_array($res);

                    if (isset($_POST['update'])) {

                        $uname = $_POST['username'];
                        $mail = $_POST['email'];
                        $phone = $_POST['mobile'];
                        $date = $_POST['dob'];

                        $upd = "update info set username='$uname',email='$mail',mobile=$phone,dob='$date' where id= $id";
                        $q = mysqli_query($conn, $upd);
                        if ($q) {
                            echo "<script>alert('update succesful');</script>";
                            header('location:selectall.php');
                            // require 'login.php';
                            // require 'selectall.php';
                            exit;
                        } else {
                            echo "error";
                        }
                    }
                    $conn->close();

                    ?>

        <div class="form-field">
            <lable class="form-label" for="username">Username</lable>
            <input type="text" class="form-control" id="username" value="<?php echo $data['username']; ?>" name="username" autocomplete="off" />
        </div>
        <div class="form-field">
            <lable for="email" class="form-label">Email Id</lable>
            <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" autocomplete="off" />
            <small></small>
        </div>
        <div class="form-field">
            <lable for="dob" class="form-label">Date of Birth</lable>
            <input type="date" class="form-control" value="<?php echo $data['dob']; ?>" name="dob" />
            <small></small>
        </div>

        <div class="form-field">
            <lable for="mob" class="form-label">Mobile Number</lable>
            <input type="number" name="mobile" class="form-control" value="<?php echo $data['mobile']; ?>" autocomplete="off" />
            <small></small>
        </div>
        <button type="submit" value="submit" name="update" class="btn btn-success">Update</button>
        <!-- <a href="selectall.php"><button type="submit" value="submit" name="back" class="btn btn-warning">Back</button></a> -->

    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js "></script>
    <script src="update.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="../public/update.css" />
</head>

<body>
    <form method="post" id="update" action="">
        <?php
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
        $id = $_GET['id'];

        $query = "select * from users INNER JOIN user_details ON users.id=user_details.user_id where users.id=$id";
        $r = mysqli_query($conn, $query);
        $data = mysqli_fetch_array($r);
        $hobbies1 = $data['hobbies'];
        $hobbies2 = explode(",", $hobbies1);
        $f = mysqli_fetch_assoc($r);
        if (isset($_POST['update'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $uquery = "update users INNER JOIN user_details ON users.id=user_details.user_id set username='$username',email='$email',mobile='$mobile',address='$address',gender='$gender' where users.id=$id";
            $q = mysqli_query($conn, $uquery);
            if ($q) {
                header('location:displayusers.php');
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
            <lable for="Address" class="form-label">Address</lable>
            <input type="text" class="form-control" value="<?php echo $data['address']; ?>" name="address">
            <small></small>
        </div>

        <div class="form-field">
            <lable for="mob" class="form-label">Mobile Number</lable>
            <input type="text" name="mobile" class="form-control" value="<?php echo $data['mobile']; ?>" autocomplete="off" />
            <small></small>
        </div>
        <div class="form-field">
            <label for="male" class="form-label"> Select Gender</label>
            </br>
            <input type="radio" name="gender" value="male" class="form-check-input" <?php
                                                                                    if ($data['gender'] == "male") {
                                                                                        echo "checked";
                                                                                    }
                                                                                    ?> />
            <label for="male" class="form-check-label">Male</label></br>


            <input type="radio" value="female" name="gender" class="form-check-input" <?php
                                                                                        if ($data['gender'] == "female") {
                                                                                            echo "checked";
                                                                                        }
                                                                                        ?> />
            <label for="female" class="form-check-label">Female</label>
            </br>
            <label for="gender" class="error"></label>

        </div>
        <div class="form-field">
            <label for="hobbies" class="form-label">Hobbies</label></br>
            <input type="checkbox" value="playing sports" name="hobbies[]" class=" form-check-input" <?php
                                                                                                        if (in_array("playing sports", $hobbies2)) {
                                                                                                            echo "checked";
                                                                                                        }
                                                                                                        ?>>
            <label for="sports" class="form-check-label">Playing sports</label></br>

            <input type="checkbox" value="dancing" name="hobbies[]" class="form-check-input" <?php
                                                                                                if (in_array("dancing", $hobbies2)) {
                                                                                                    echo "checked";
                                                                                                }
                                                                                                ?>>
            <label for="dance" class="form-check-label">Dancing</label></br>

            <input type="checkbox" value="Singing" name="hobbies[]" class="form-check-input" <?php
                                                                                                if (in_array("Singing", $hobbies2)) {
                                                                                                    echo "checked";
                                                                                                }
                                                                                                ?>>
            <label for="singing" class="form-check-label">Singing</label></br>

            <input type="checkbox" value="reading" name="hobbies[]" class="form-check-input" <?php
                                                                                                if (in_array("reading", $hobbies2)) {
                                                                                                    echo "checked";
                                                                                                }
                                                                                                ?>>
            <label for="reading" class="form-check-label">Reading</label></br>

            <input type="checkbox" value="travelling" name="hobbies[]" class="form-check-input" <?php
                                                                                                if (in_array("travelling", $hobbies2)) {
                                                                                                    echo "checked";
                                                                                                }
                                                                                                ?>>
            <label for="travel" class="form-check-label">Travelling</label></br>

            <label for="hobbies[]" class="error"></label>


        </div>
        <button type="submit" value="submit" name="update" class="btn btn-success">Update</button>
        <!-- <a href="selectall.php"><button type="submit" value="submit" name="back" class="btn btn-warning">Back</button></a> -->

    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js "></script>
    <script src="../vaildation/update.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
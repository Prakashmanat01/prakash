<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $edu = $_POST['edu'];
    $chk = "";
    foreach ($edu as $i) {
        $chk .= $i . ",";
    }





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
    $tbl = "insert into info(username,password,email,gender,mobile,dob,education) values('$username','$password','$email','$gender',$mobile,'$dob','$chk')";
    if ($conn->query($tbl) === true) {
        echo "";
        header('location:login.php');
    } else {
        echo "no data inserted";
    }
    $conn->close();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Yourself</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />


    <link href="shortform.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="container">
        <form id="shortform" method="post" action="">
            <a href="login.php">Already a User?</a>
            <div class="form-field">
                <lable class="form-label" for="username">Username</lable>
                <input type="text" class="form-control" id="username" name="username" autocomplete="off" />
            </div>
            <div class="form-field">
                <lable class="form-label" for="password">Password</lable>
                <input type="password" class="form-control" id="password" name="password" autocomplete="off" />
                <small id="upass" name="password"></small>
            </div>
            <div class="form-field">
                <lable class="form-label" for="cpassword">Confirm-Password</lable>
                <input type="password" class="form-control" id="cpassword" name="cpassword" autocomplete="off" />
                <small id="ucpass" name="cpassword"></small>
            </div>
            <div class="form-field">
                <lable for="gender" class="form-label">Select gender</lable>
                <input type="radio" id="male" value="male" name="gender" class="form-check-input" />
                <label for="male" id="lmale" class="form-check-label">Male</label>
                <input type="radio" id="female" value="female" name="gender" class="form-check-input" />
                <label for="male" id="lfemale" class="form-check-label">Female</label></br>
                <label for="gender" class="error"></label>
                <small id="ugender"></small>
                </lable>
            </div>
            <!-- <div class="form-field">
                <lable for="upload" class="form-lable">Upload photo</lable>
                <input type="file" class="form-control" id="uploadimage" name="myfile" />
                <button type="button" value="button" class="btn btn secondary" id="checks"
                    onclick="return validimage()">check</button>
                <small id="uimage"></small>
            </div> -->
            <div class="form-field">
                <lable for="email" class="form-label">Email Id</lable>
                <input type="email" class="form-control" name="email" autocomplete="off" />
                <small></small>
            </div>
            <div class="form-field">
                <lable for="dob" class="form-label">Date of Birth</lable>
                <input type="date" class="form-control" name="dob" />
                <small></small>
            </div>

            <div class="form-field">
                <lable for="mob" class="form-label">Mobile Number</lable>
                <input type="text" name="mobile" class="form-control" autocomplete="off" />
                <small></small>
            </div>


            <div class="form-field">
                <lable for="edu" class="form-label">Qualification</lable>

                <input type="checkbox" name="edu[]" id="x" value="X" class="form-check-input" />
                <label for="x" class="form-check-label" id="xl">10 Standard</label>

                <input type="checkbox" name="edu[]" id="xii" value="XII" class="form-check-input" />
                <label for="x" class="form-check-label" id="xiil">12 Standard</label>

                <input type="checkbox" name="edu[]" id="ug" value="UG" class="form-check-input" />
                <input type="checkbox" name="edu[]" id="ug" value="UG" class="form-check-input" />

                <label for="x" class="form-check-label" id="ugl">UG</label></br>
                <label for="edu" class="error"></label>
                <small></small>
            </div>
            <!-- <div class="form-field">
                <label for="doc" class="form-label">Upload identity(Aadhar card)</label>
                <input type="file" id="doc" name="mydoc" class="form-control" />
                <button type="button" id="check" class="btn btn secondary" onclick="return valid()"
                    value="button">check</button>
                <label for="ss"></label>
                <small id="d"></small>
            </div> -->

            <div class="mb-3">
                <a href="login.php"><button type="submit" name="submit" id="submit" class="btn btn-primary" value="submit">Submit</button></a>
            </div>
            <div>

            </div>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js "></script>
    <script src="shortform.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--<script src="shortform.js"></script>-->
</body>

</html>
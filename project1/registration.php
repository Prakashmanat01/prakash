<?php
include "actions/insert_users.php";


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="public/registration.css" rel="stylesheet">


</head>

<body>
    <form id="register" method="post" action="">
        <div id="form">
            <div class="form-field">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" />
            </div>
            <div class="form-field">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>
            <div class="form-field">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" />
            </div>
            <div class="form-field">
                <label for="male" class="form-label"> Select Gender</label>
                </br>
                <input type="radio" name="gender" value="male" class="form-check-input" />
                <label for="male" class="form-check-label">Male</label>

                <input type="radio" value="female" name="gender" class="form-check-input" />
                <label for="female" class="form-check-label">Female</label>
                </br>
                <label for="gender" class="error"></label>

            </div>
            <div class="form-field">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" />
            </div>
            <div class="form-field">
                <label for="mobile" class="form-label">mobile no</label>
                <input type="text" name="mobile" class="form-control" />
            </div>
            <div class="form-field">
                <label for="address" class="form-label">Address</label>
                <textarea type="text" name="address" class="form-control"></textarea>
            </div>
            <div class="form-field">
                <label for="hobbies" class="form-label">Hobbies</label></br>
                <input type="checkbox" value="playing sports" name="hobbies[]" class=" form-check-input">
                <label for="sports" class="form-check-label">Playing sports</label>

                <input type="checkbox" value="dancing" name="hobbies[]" class="form-check-input">
                <label for="dance" class="form-check-label">Dancing</label>

                <input type="checkbox" value="Singing" name="hobbies[]" class="form-check-input">
                <label for="singing" class="form-check-label">Singing</label>

                <input type="checkbox" value="reading" name="hobbies[]" class="form-check-input">
                <label for="reading" class="form-check-label">Reading</label></br>

                <input type="checkbox" value="travelling" name="hobbies[]" class="form-check-input">
                <label for="travel" class="form-check-label">Travelling</label></br>

                <label for="hobbies[]" class="error"></label>


            </div>
            <div class="form-field">
                <a href="login.php"><button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button></a>
            </div>

            <div class="form-field">

                <p id="link">Already a User?<a href="login.php">Login</a>
                    <p>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js "></script>
    <script src="vaildation/registration.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
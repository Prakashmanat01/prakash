<?php
include "actions/register.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user registration</title>
    <!-- <link href="public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="public/assets/js/bootstrap.min.js" type="text/javascript"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="public/assets/style.css" rel="stylesheet" />
</head>

<body>
    <form id="register" method="post" action="">
        <h1 id=h1>Register here</h1>
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
            <button type="submit" name="submit" value="submit" class="btn btn-primary">register</button>
            <a id="lr" href="login.php">already registered?</a>
    </form>
    <!-- <script src="public/assets/js/javas.js"></script>
    <script src="public/assets/js/book.js"></script> -->
    <!-- <script type="text/javascript" src="file:///opt/lampp/htdocs/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js "></script>
    <script src="public/assets/js/register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
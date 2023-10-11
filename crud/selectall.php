<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <table class="table table-borderless">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Gender</th>

            <th>Email</th>

            <th>Mobile</th>

            <th>Education</th>

            <th>Date</th>
            <th>Remove</th>
            <th>change</th>

        </tr>
        <tr>
            <?php
            $cusername = $_POST['user'];
            $cpassword = $_POST['pass'];
            echo $cusername;
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
            $sel = "select * from info where username!='$cusername'";
            $query = mysqli_query($conn, $sel);
            while ($row = mysqli_fetch_array($query)) { ?>

                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['education']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><a href="del.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-danger" value="delete" /></a></td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>"><input type="button" class="btn btn-warning" value="update" /></a></td>


        </tr>
    <?php
    }
    $conn->close();

    ?>


    </table>
    <a href="login.php"><button type="submit" class="btn btn-primary" value="submit">Logout</button></a>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
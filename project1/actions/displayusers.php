<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User details</title>
</head>

<body>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>username</th>
                <th>password</th>
                <th>email</th>
                <th>gender</th>
                <th>mobile</th>
                <th>address</th>
                <th>hobbies</th>
                <th colspan="2">Operations</th>

            <tr>
        </thead>
        <tr>
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
            $users = "select * from users INNER JOIN user_details ON users.id=user_details.user_id";

            $query = mysqli_query($conn, $users);
            while ($row = mysqli_fetch_array($query)) { ?>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['email']; ?></td>

                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['hobbies']; ?></td>
                <td><a href="deleteuser.php?id=<?php echo $row['user_id']; ?>"><input type="button" class="btn btn-outline-danger" value="delete" /></a> </td>
                <td><a href="updateuser.php?id=<?php echo $row['user_id']; ?>"><input type="button" class="btn btn-outline-success" value="update" /></a></td>


        </tr>


    <?php
    }

    $conn->close();
    ?>
    <a href="../login.php"><button type="submit" class="btn btn-secondary">Logout </button></a></br>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
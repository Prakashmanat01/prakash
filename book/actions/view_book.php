<?php
include('connection.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../public/assets/style.css" rel="stylesheet" />
    <title>User details</title>
</head>

<body>
    <p><?php session_start();
        $userrr = $_SESSION['username'];
        echo $userrr . ',you have booked...' ?></p>
    <table id="view_tbl" class="table">
        <thead class="table-dark">
            <tr>
                <th>movie</th>
                <th>date</th>
                <th>time</th>
                <th>seat</th>


            <tr>
        </thead>
        <tr>
            <?php
            $id = $_SESSION['id'];
            $users = "select * from booking INNER JOIN booking_details ON booking.id=booking_details.booking_id where user_id=$id";

            $query = mysqli_query($conn, $users);
            while ($row = mysqli_fetch_array($query)) {

                ?>

                <td> <?php if ($row['movie_id'] == 1) {
                                echo "major";
                            }
                            if ($row['movie_id'] == 2) {
                                echo "uri";
                            }
                            if ($row['movie_id'] == 3) {
                                echo "tiger 3";
                            } ?>
                </td>
                <td><?php echo $row['date']; ?></td>

                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['seat']; ?></td>
        </tr>


    <?php
    }

    $conn->close();
    ?>

    </table>
    <a href="../book.php"><button type="button" class="btn btn-success" name="back">Back</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
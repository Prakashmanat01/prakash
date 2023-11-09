<?php include "actions/book.php"
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="public/assets/style.css" rel="stylesheet" />

</head>

<body>

    <style>
        .error {
            color: red;
        }
    </style>
    <form action="" method="post" id="booking">
        <div class="form-field">
            <label for="moviename" class='form-label'>Moviename</label>
            <select name="movie" class="form-control movie">
                <option></option>
                <option value="1">Major</option>
                <option value="2">Uri</option>
                <option value="3">Tiger3</option>

            </select>
        </div>

        <div class="form-field">
            <label for="moviedate" class='form-label'>Select Date</label>
            <input type="date" id="date" name="date" class='form-control date' min="<?= date('Y-m-d'); ?>" ; />
        </div>
        <div class="form-field">
            <label for="showtime" class='form-label'>Show</label></br>
            <input type="radio" class="form-check-input time" name="time" id="11" value="11am" />
            <label for="show">11 AM</label>

            <input type="radio" class="form-check-input time" name="time" id="2" value="2pm" />
            <label for="show">2 PM</label>

            <input type="radio" class="form-check-input time" name="time" id="5" value="5pm" />
            <label for="show">5 PM</label>

            <input type="radio" class="form-check-input time" name="time" id="8" value="8pm" />
            <label for="show">8 PM</label>

            <input type="radio" class="form-check-input time" name="time" id="11pm" value="11pm" />
            <label for="show">11 PM</label></br>

            <label for="time" class="error"></label>

        </div>
        <div class="form-field">
            <label for="seat" class="form-label">Seat</label>
            <div class="seat">
                <input type="checkbox" name="seatcheckbox[]" class="form-check-input seat" value="1" id="seat" />
                <label for="1">1</label>

                <input type="checkbox" name="seatcheckbox[]" class="form-check-input seat" value="2" id="seat" />
                <label for="2">2</label>

                <input type="checkbox" name="seatcheckbox[]" value="3" id="seat" class="form-check-input seat" />
                <label for="3">3</label>
            </div>
            <div class="seat">
                <input type="checkbox" name="seatcheckbox[]" value="4" id="seat" class="form-check-input seat" />
                <label for="4">4</label>

                <input type="checkbox" class="form-check-input seat" name="seatcheckbox[]" value="5" id="seat" />
                <label for="5">5</label>


                <input type="checkbox" name="seatcheckbox[]" value="6" class="form-check-input seat" id="seat" />
                <label for="6">6</label>
            </div>

            <div class=" seat">
                <input type="checkbox" name="seatcheckbox[]" value="7" id="seat" class="form-check-input seat" />
                <label for="7">7</label>

                <input type="checkbox" class="form-check-input seat" name="seatcheckbox[]" value="8" id="seat" />
                <label for="8">8</label>

                <input type="checkbox" class="form-check-input seat" name="seatcheckbox[]" value="9" id="seat" />
                <label for="9">9</label>
            </div>

            <div class="seat">
                <input type="checkbox" name="seatcheckbox[]" class="form-check-input seat" value="10" id="seat" />
                <label for="10">10</label>

                <input type="checkbox" name="seatcheckbox[]" value="11" id="seat" class="form-check-input seat" />
                <label for="11">11</label>

                <input type="checkbox" class="form-check-input seat" name="seatcheckbox[]" value="12" id="seat" />
                <label for="12">12
                </label>
            </div>

            <div class="seat">
                <input type="checkbox" name="seatcheckbox[]" value="13" class="form-check-input seat" id="seat" />
                <label for="13">13</label>

                <input type="checkbox" name="seatcheckbox[]" value="14" id="seat" class="form-check-input seat" />
                <label for="14">14</label>

                <input type="checkbox" name="seatcheckbox[]" class="form-check-input seat" value="15" id="seat" />
                <label for="15">15</label>
            </div>
            <img src="public/screen.jpg" style="height:20px;width:3.4cm;" />


            <label for="seatcheckbox[]" class="error"></label>

        </div>
        <!-- <div class="form-field">
            <label for="promocode" class='form-label'>Promocode</label>
            <input type="text" name="promocode" class='form-control' />
        </div> -->
        <button type="submit" value="submit" name="submit" class="btn btn-primary">Book</button>

    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js "></script>
    <script src="public/assets/js/validatebook.js"></script>
    <script src="public/assets/js/book.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
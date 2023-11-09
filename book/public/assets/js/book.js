// alert('hi');
$(document).ready(function () {
    //diable five days
    var today = new Date();
    today.setDate(today.getDate() + 5);
    var fiveday = today.toISOString().split('T')[0];
    $('input[type="date"]').attr('max', fiveday);


    //ajax calll
    $(".time").change(function () {
        var movie_id = $('.movie').val();
        var date = $('.date').val();
        var time = $(this).val();


        if (movie_id != '' && date != '' && time != '') {
            getTicket(movie_id, date, time);
        }
    });


    function getTicket(movie_id, date, time) {
        console.log({
            movie_id
        });
        console.log({
            date
        });
        console.log({
            time
        });

        $.ajax({
            url: "http://localhost/book/booking.php",
            method: "POST",
            data: {
                movie_id: movie_id,
                date: date,
                time: time
            },
            dataType: 'JSON',
            success: function (resp) {
                console.log(resp);
                $("input[name='seatcheckbox[]']").each(function () {

                    var a = $(this).val();
                    console.log(a);


                    if ($.inArray(a, resp) !== -1) {
                        // alert(a);
                        $(this).prop("disabled", true);
                        $(this).prop("checked", false);
                        $(this).css("background-color", "red");
                    }
                });


                $("input[name='time']").change(function () {
                    $("input[name='seatcheckbox[]']").each(function () {

                        var a = $(this).val();

                        if ($.inArray(a, resp) !== -1) {
                            $(this).prop("disabled", false);
                            $(this).css("background-color", "");
                        }
                    });
                });
                $("input[name='date']").change(function () {
                    $("input[name='seatcheckbox[]']").each(function () {

                        var a = $(this).val();

                        if ($.inArray(a, resp) !== -1) {
                            $(this).prop("disabled", false);
                            $(this).css("background-color", "");
                        }
                    });
                });
                $('.movie').change(function () {
                    $("input[name='seatcheckbox[]']").each(function () {
                        var a = $(this).val();
                        if ($.inArray(a, resp) !== -1) {
                            $(this).prop("disabled", false);
                            $(this).css("background-color", "");
                        }
                    });
                });



            }


        });



    }


    //disable date
    var now = new Date();

    var hour = now.getHours();
    var mins = now.getMinutes();


    if (hour > 11 || hour == 11 && mins > 0) {
        $("#11").prop('disabled', true);
        $("#11").css("background-color", "red");

    }
    if (hour > 14 || hour == 14 && mins > 0) {
        $("#2").prop('disabled', true);
        $("#2").css("background-color", "red");
        $('input[name="seatcheckbox[]"]').prop('disabled', false);

    }
    if (hour > 17 || hour == 17 && mins > 0) {
        $("#5").prop('disabled', true);
        $("#5").css("background-color", "red");

    }
    if (hour > 20 || hour == 20 && mins > 0) {
        $("#8").prop('disabled', true);
        $("#8").css("background-color", "red");

    }
    if (hour > 23 || hour == 23 && mins > 0) {
        $("#11pm").prop('disabled', true);
        $("#11pm").css("background-color", "red ");
    }

    $('select[name="movie"]').change(function () {

    });
});
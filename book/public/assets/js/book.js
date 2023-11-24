$(document).ready(function () {
    //diable five days
    var today = new Date();
    today.setDate(today.getDate() + 5);
    var fiveday = today.toISOString().split('T')[0];
    $('input[type="date"]').attr('max', fiveday);


    $(".movie").change(function () {
        var movie_id = $(this).val();
        var date = $('.date').val();

        var time = $("input[type='radio'][name='time']:checked").val();
        $(".errorstatus").html('');
        $("#promocode").val('');
        $("#total").val('');
        // alert(today.toLocaleDateString());
        $("input[name='seatcheckbox[]']").prop("checked", false);
        $("input[type='radio']").prop("checked", false);
        $(".date").prop("checked", false);
        if (movie_id != '' && date != '' && time != '') {
            getTicket(movie_id, date, time);
        }
    });




    $(".date").change(function () {
        var date = $(this).val();
        var movie_id = $('.movie').val();
        var time = $("input[type='radio'][name='time']:checked").val();
        var curr = new Date().toISOString().slice(0, 10);
        $("input[name='seatcheckbox[]']").prop("checked", false);
        $("input[type='radio']").prop("checked", false);
        if (date == curr) {
            addtime();
        } if (date != curr) {
            rmtime();
        }


        if (movie_id != '' && date != '' && time != '') {
            getTicket(movie_id, date, time);
        }
    });


    $(".time").change(function () {
        var movie_id = $('.movie').val();
        var date = $('.date').val();
        // var time = $(this).val();

        var time = $("input[type='radio'][name='time']:checked").val();
        var curr = new Date().toISOString().slice(0, 10);
        // if (date == curr) {
        //     addtime();
        // } else {
        //     rmtime();
        // }
        if (date == curr) {
            addtime();
        } if (date != curr) {
            rmtime();
        } $("input[name='seatcheckbox[]']").prop("checked", false);

        if (movie_id != '' && date != '' && time != '') {
            getTicket(movie_id, date, time);
        }


    });

    //ajax calll

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
            url: "booking.php",
            method: "POST",
            data: {
                movie_id: movie_id,
                date: date,
                time: time
            },
            dataType: 'JSON',
            success: function (resp) {        // var time = $(this).val();

                console.log(resp);

                $("input[name='seatcheckbox[]']").each(function () {

                    var a = $(this).val();
                    // console.log(a);


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
                    var a = $(this).val();
                    var curr = new Date().toISOString().slice(0, 10);

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
                            $(this).prop('checked', false);
                        }
                    });
                });
            }
        });
    }

    $("#promo").click(function () {

        var promocode = $("#promocode").val();
        var user = $("#user").text();

        if ($("#booking").valid()) {


            if (promocode != '' && user != '') {
                // getcode(promocode, user);
                $.ajax({
                    url: "http://localhost/book/dis.php",
                    method: "POST",
                    data: {
                        promocode: promocode,
                        user: user
                    },
                    dataType: 'JSON',
                    success: function (codes) {
                        console.log(codes.message);
                        // alert(codes);
                        $.each(codes, function (index, el) {
                            // console.log(index + ":" + el);
                        });
                        $(".errorstatus").html(codes.message);

                        var dis = parseInt(codes['dis']);
                        var price = parseInt($('#price').val());

                        var totalamt = parseInt(price - (price * (parseInt(dis) / 100)));
                        $("#total").val(totalamt);
                        if (codes['message'] == "Limit over Coupon Already use") {
                            $("#total").val('');
                            $("#promocode").val('');

                        }
                        if (codes['message'] == "You have used to your maximum limit(2)") {
                            $("#promocode").val('');
                            $("#total").val('');

                        }
                    }
                });
            }
        }

    });
    // function getcode(promocode, user) {
    //     console.log({
    //         promocode
    //     });
    // $.ajax({
    //     url: "http://localhost/book/dis.php",
    //     method: "POST",
    //     data: {
    //         promocode: promocode,
    //         user: user
    //     },
    //     dataType: 'JSON',
    //     success: function (codes) {
    //         console.log(codes);

    //         $.each(codes, function (index, el) {
    //             console.log(index + ":" + el);
    //         });
    //         $("#status").text(codes['message']);
    //         console.log(codes['limitmsg']);
    //         if (codes['message'] == "Limit over Coupon Already use") {
    //             $("#promocode").val('');
    //         }

    //     }
    // });
    // }

    $("#submit").click(function () {
        var promocode = $("#promocode").val();
        var user = $("#user").text();
        if (promocode != '' && user != '') {
            getup(promocode, user);
        }

    });
    function getup(promocode, user) {
        console.log({
            promocode
        });
        $.ajax({
            url: "http://localhost/book/sub.php",
            method: "POST",
            data: {
                promocode: promocode,
                user: user
            },
            dataType: 'JSON',
            success: function (result) {
                console.log(result);



            }
        });
    }

    //disable date


    $("#movie").change(function () {
        var v = $(this).val();
        if (v == 1) {
            $("#price").val(200);
        }
        if (v == 2) {
            $("#price").val(250);
        }

        if (v == 3) {
            $("#price").val(300);
        }
        if (v == "") {
            $("#price").val(0);
        }
    });

    function addtime() {
        var now = new Date();

        var hour = now.getHours();
        var mins = now.getMinutes();


        if (hour > 11 || hour == 11 && mins > 0) {
            $("#11").prop('disabled', true);
            $("#11").css("background-color", "red");
            $("#11").prop("checked", false);
        }
        if (hour > 14 || hour == 14 && mins > 0) {
            $("#2").prop('disabled', true);
            $("#2").css("background-color", "red");
            $("#2").prop("checked", false);


        }
        if (hour > 17 || hour == 17 && mins > 0) {
            $("#5").prop('disabled', true);
            $("#5").css("background-color", "red");
            $("#5").prop("checked", false);


        }
        if (hour > 20 || hour == 20 && mins > 0) {
            $("#8").prop('disabled', true);
            $("#8").css("background-color", "red");
            $("#8").prop("checked", false);


        }
        if (hour > 23 || hour == 23 && mins > 0) {
            $("#11pm").prop('disabled', true);
            $("#11pm").css("background-color", "red ");
            $("#11pm").prop("checked", false);

        }
    }
    function rmtime() {
        var now = new Date();

        var hour = now.getHours();
        var mins = now.getMinutes();


        if (hour > 11 || hour == 11 && mins > 0) {
            $("#11").prop('disabled', false);
            $("#11").css("background-color", "");

        }
        if (hour > 14 || hour == 14 && mins > 0) {
            $("#2").prop('disabled', false);
            $("#2").css("background-color", "");
            // $('input[name="seatcheckbox[]"]').prop('disabled', false);

        }
        if (hour > 17 || hour == 17 && mins > 0) {
            $("#5").prop('disabled', false);
            $("#5").css("background-color", "");

        }
        if (hour > 20 || hour == 20 && mins > 0) {
            $("#8").prop('disabled', false);
            $("#8").css("background-color", "");

        }
        if (hour > 23 || hour == 23 && mins > 0) {
            $("#11pm").prop('disabled', false);
            $("#11pm").css("background-color", "");
        }
    }


});
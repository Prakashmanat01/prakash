
$('#booking').validate({
    rules: {

        movie:
        {
            required: true
        },
        time: {
            required: true
        },
        date: {
            required: true,
            dateISO: true
        },
        'seatcheckbox[]': {
            required: true,
        }


    }, messages: {


        movie: {
            required: "*Please select movie",

        },
        time: {
            required: "*Please show time",
        },

        date: {
            required: "*please select date!",
            dateISO: "in format(yyyy-mm-dd)"
        },
        'seatcheckbox[]': {
            required: "*Please select seats",

        }


    }

});
// function val() {
// $('#promo').click(function () {
//     // alert();
//     if ($("#booking").valid()) {
//         alert()
//     } else {
//         alert(1);
//     }
// });
// }
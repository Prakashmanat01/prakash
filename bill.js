$(document).ready(function () {

    $(document).on('keyup', '.qty', function () {
        var x = $(this).val();
        var y = $(this).parent().next().find('.price').val();
        var totalprice = x * y;
        $(this).parent().next().next().find('.total').val(totalprice);
        CalculateGT();
    });
    $(document).on('keyup', '.price', function () {
        var x = $(this).val();
        var y = $(this).parent().prev().find('.qty').val();
        var totalprice = x * y;

        $(this).parent().next().next().find('.total').val(totalprice);
        var v = $(this).clone('.subtotal')
        console.log(v);
        // var a = $('.total').val();
        CalculateGT();
    });
    $(document).on('keyup', '.dis', function () {
        var a = $(this).val();
        var p = $(this).parent().prev().find('.price').val();
        var q = $(this).parent().prev().prev().find('.qty').val();
        var t = $(this).parent().next().find('.total').val();
        var fp = q * p;
        var dis = fp - (fp * a / 100);
        $(this).parent().next().find('.total').val(dis);
        CalculateGT();
    });
});


function CalculateGT() {
    var grandTotal = 0;
    $.each($('.total'), function () {
        if ($(this).val() != '') {
            grandTotal += parseFloat($(this).val());
        }
    });
    $('#lblGrandTotal').html(grandTotal.toFixed(2));
}

function adding() {
    var appendfirst = $('#second').html();
    var v = $('#first').append(appendfirst);
    //$('#totallist').append($('#second'));

}



function del(v) {
    $(v).parent().parent().remove();
    CalculateGT();
}

    // });
    // gt = 0;
    // $('.total').each(function () {
    //     gt += parseFloat($(this).val());
    // }); console.log(gt);


    // $(document).on('.total', function () {
    //     var ad = 0;
    //     $(this).each(function () {
    //         ad += parseFloat($(this).val());
    //     });
    //     var a = $(this).parent().next().find('.subtotal').val(ad);
    //     console.log(a);
    // });

    // $(document).on('focus', '.total', function () {
    //     alert('hello');
    // });
    // $(document).on('change', function () {
    //     var x = $('.total').val();
    //     var sum = 0;
    //     for (let i = 0; i < x.length; i++) {
    //         var amt = x[i];
    //         sum = sum + amt;
    //         $('.subtotal').val(sum);

    //     }
    // })




// function subtotalll() {
//     var a = document.getElementById('total');
//     var sum = 0;

//     for (let i = 0; i < a.length; i++) {
//         var amt = a[i];
//         sum = sum + amt;
//     }
//     document.getElementById('subtotal').val = sum;
// }

$.ajax({
    url: "./actions/fetch_orders.php",
    type: "post",
    success: function (respo) {
        $("#fetch_orders").html(respo);
    }
})



$('#fetch_orders').on('change', '.orderstatus', function () {
    var status = $(this).val();
    var order_id = $(this).parent().parent().find('.order_id').text();

    // var  order_id = $('.order_id').text();

    // alert(order_id);
    $.ajax({
        url: "actions/update_status.php",
        type: "post",
        data: {
            status: status,
            order_id: order_id
        },
        success: function (res) {
            if (res == 1) {
                location.reload();
            }
        }
    })
})

// $('#fetch_orders').on('click', '.details', function () {
//     var order_id = $(this).data('id');
//     var userid = $(this).parent().find('.user_id').val();
//     // console.log(userid);
//     // console.log(order_id);
//     // alert(id);
//     $.ajax({
//         url: "actions/fetch_order_details.php",
//         type: "post",
//         data: {
//             order_id: order_id,
//             user_id: userid
//         },
//         success: function (res) {
//             // window.location.replace('http://localhost/Fashion/admin/order_details.php')
//             $("#fetch_order_details").html(res);

//         }


//     })

// })

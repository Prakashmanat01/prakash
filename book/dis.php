<?php
// print_r($_POST);
// die;
include "actions/connection.php";

$promocode = $_POST['promocode'];
$user = $_POST['user'];

$que = "select * from promocode where promocode_name='$promocode'";
$sel = mysqli_query($conn, $que);

if ($sel->num_rows > 0) {
    $rows = mysqli_fetch_assoc($sel);
    $used = $rows['used'];
    $max = $rows['maxuses'];
    $name = $rows['promocode_name'];
    $start = $rows['start_date'];
    $end = $rows['end_date'];
    $discount = $rows['discount'];
    $data['dis'] = $discount;
    // print_r(var_dump($end));
    $date = date("Y-m-d");


    //users limit of using promocode


    if ($end >= $date) {

        //checking the maxuses and used of promocode
        if ($used  == $max) {
            $data['status'] = 0;
            $data['message'] = "Limit over Coupon Already use";
            $data['uses'] = $used;
            // $data['maxuse'] = (int) $max;
            // } else {
            //     $data['message'] = "Limit over Coupon Already use";
            //     $data['status'] = 0;
            // }
        }


        //update used
        if ($used == $max) {
            "update promocode set used='$max' where promocode_name='$promocode'";
        } else {
            $u = "select id from users where username='$user'";
            $us = mysqli_query($conn, $u);
            while ($uid = mysqli_fetch_assoc($us)) {
                $id = $uid['id'];
            }

            $p = "select id from promocode where promocode_name='$promocode'";
            $pr = mysqli_query($conn, $p);
            while ($pid = mysqli_fetch_assoc($pr)) {
                $idp = $pid['id'];
            }
            //            $i_master = "insert into master(user_id,promocode_id)values('$id','$idp')";
            // if ($conn->query($i_master) === true) {
            $s = "select count(promocode_id)as p_count from master where user_id='$id'and promocode_id='$idp'";
            $ss = mysqli_query($conn, $s);
            if ($ss->num_rows > 0) {
                $count = mysqli_fetch_assoc($ss);
                $use = $count['p_count'];

                if ($use >= 2) {
                    $data['message'] = "You have used to your maximum limit(2)";
                    // $qa = "update promocode set used=used+0 where promocode_name='$promocode'";
                    // if ($conn->query($qa) === true) { }
                } else {
                    $data['message'] = "Coupon Code applied";
                    // $qa = "update promocode set used=used+1 where promocode_name='$promocode'";
                    // if ($conn->query($qa) === true) { }
                }
            }
            //  }
        }
    } else {
        $data['message'] = "Coupon code has been expired";
    }
} else {
    $data['message'] = "Invalid Coupon code...";
}
echo json_encode($data);

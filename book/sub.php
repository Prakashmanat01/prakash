<?php
include "actions/connection.php";
$promocode = $_POST['promocode'];
$user = $_POST['user'];

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
$i_master = "insert into master(user_id,promocode_id)values('$id','$idp')";
if ($conn->query($i_master) === true) {
    $s = "select count(promocode_id)as p_count from master where user_id='$id'and promocode_id='$idp'";
    $ss = mysqli_query($conn, $s);
    if ($ss->num_rows > 0) {
        $count = mysqli_fetch_assoc($ss);
        $use = $count['p_count'];

        if ($use <= 2) {
            $qa = "update promocode set used=used+1 where promocode_name='$promocode'";

            if ($conn->query($qa) === true) { }
        } else {
            $aq = "update promocode set used=used+0 where promocode_name='$promocode'";

            if ($conn->query($aq) === true) { }
        }
    }
}

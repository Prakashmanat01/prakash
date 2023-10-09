<?php
$num = $_POST['number'];

// $count = 0;
$a = [1, 2, 3, 4, 5, 6, 1, 3, 7, 10, 9, 7, 10, 2, 5, 4, 6, 2, 1, 6, 8, 8, 8, 4, 2, 1, 5, 3, 9];
// //print_r($a);
// $count = array_count_values($a);
// foreach ($count as $ae => $count) {
//     if ($count >= 1) {
//         echo "number $ae appears $count times </br>";
//     }

$counts = [];

foreach ($a as $i => $numbers) {

    $count = 0;
    foreach ($a as $j => $cpnum) {
        $count += ($numbers == $cpnum);
    }
    //echo " number $numbers appear $coun       t times</br>";


    $counts[$numbers] = $count;
}
//print_r($counts);
foreach ($counts as $numbers => $count) {


    echo ($numbers == $num) ? "$numbers appears $count times</br>" : "";
}

//   $a == $rp;
//   $count += 1;
//   echo $count;

//}

$a = 10;
$b = 20;
$c = $b - (-$a);
echo "</br>sum of a an b is$c";

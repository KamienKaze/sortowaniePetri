<?php 

include('Course.php');
include('data.php');

$courses = [$c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10, $c11, $c12, $c13];

echo 'Sorted by category';
$coursesSorted = bubbleSort($courses, 'categ');
drawTable($coursesSorted);

echo '<br>';

echo 'Sorted by id';
$coursesSorted = bubbleSort($courses, 'id');
drawTable($coursesSorted);

echo '<br>';

echo 'Sorted by order';
$coursesSorted = bubbleSort($courses, 'order');
drawTable($coursesSorted);

echo '<br>';

echo 'Sorted by hours';
$coursesSorted = bubbleSort($courses, 'hours');
drawTable($coursesSorted);

function bubbleSort($courses, $orderBy, $skip = null) {

    $orderList == null;
    if(is_array($orderBy)) {
        $orderList = $orderBy;
        $orderBy = array_shift($orderList);
    }

    do {
        $sorted = false;
        $c = count($courses) - 1;

        for($j = 0; $j < $c; $j++) {
            if($skip == true && $orderBy !== 'categ') {

            }

            if(($courses[$j] -> $orderBy) > ($courses[$j + 1] -> $orderBy)) {
                
                $temp = $courses[$j];

                $courses[$j] = $courses[$j + 1];
                $courses[$j + 1] = $temp;
                $sorted = true;
            }
        }

    } while($sorted);

    if($orderBy == 'categ' && $orderList !== null) {
        $courses = bubbleSort($courses, $orderList, true);
    }

    return $courses;
}

function drawTable($array) {
    echo '<style>';
    echo 'body { text-align: center; }';
    echo 'table { margin-left: auto; margin-right: auto; margin-top: 10px; margin-bottom: 40px;}';
    echo 'td, table { border: 1px solid black }';
    echo 'td { width: 10vw; text-align: center; }';
    echo '</style>';

    echo '<table>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Order</th>';
    echo '<th>Category</th>';
    echo '<th>Hours</th>';
    echo '</tr></th>';

        foreach($array as $course) {
            echo '<tr>';
            echo '<td>' . $course -> id . '</td>';
            echo '<td>' . $course -> order . '</td>';
            echo '<td>' . $course -> categ . '</td>';
            echo '<td>' . $course -> hours . '</td>';
            echo '</tr>';
        }

    echo '</table>';
}
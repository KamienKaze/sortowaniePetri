<?php 

include('Course.php');
include('data.php');

$courses = [$c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10, $c11, $c12, $c13];

$coursesSorted = bubbleSort($courses, 'categ');
# $coursesSorted = bubbleSort($courses, 'id');
# $coursesSorted = bubbleSort($courses, 'order');
# $coursesSorted = bubbleSort($courses, 'hours');

drawTable($coursesSorted);

function bubbleSort($courses, $orderBy) {
    do {
        $sorted = false;
        $c = count($courses) - 1;

        for($j = 0; $j < $c; $j++) {
            if(($courses[$j] -> $orderBy) > ($courses[$j + 1] -> $orderBy)) {
                
                $temp = $courses[$j];

                $courses[$j] = $courses[$j + 1];
                $courses[$j + 1] = $temp;
                $sorted = true;
            }
        }

    } while($sorted);

    return $courses;
}

function drawTable($array) {
    echo '<style>';
    echo 'td, table { border: 1px solid black }';
    echo 'td { width: 10vw; text-align: center; }';
    echo '</style>';

    echo '<table>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Category</th>';
    echo '<th>Hours</th>';
    echo '</tr></th>';

        foreach($array as $course) {
            echo '<tr>';
            echo '<td>' . $course -> id . '</td>';
            echo '<td>' . $course -> name . '</td>';
            echo '<td>' . $course -> categ . '</td>';
            echo '<td>' . $course -> hours . '</td>';
            echo '</tr>';
        }

    echo '</table>';
}
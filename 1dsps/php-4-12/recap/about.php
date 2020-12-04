<?php
    function average($results) {
        $sum = 0;

        foreach($results as $result) {
            $sum += $result;
        }

        $average = $sum / sizeof($results);

        return $average;
    }

    $test = [8, 4, 7, 10];
    $averageTest1 = average($test);

    $test2 = [3, 4, 3, 10];
    $averageTest2 = average($test2);

    echo average([$averageTest1, $averageTest2]);
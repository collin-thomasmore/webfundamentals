<?php
    function addBreak() {
        echo "<br/>";
    }

    $counter = 11;

    while ($counter <= 10) {
        echo $counter;
        addBreak();
        $counter++;
    }

    $counter = 11;

    do {
        echo $counter;
        addBreak();
        $counter++;
    } while ($counter <= 10);

    for ($index = 0; $index <= 10; $index++) {
        echo $index;
        addBreak();
    }

    $colors = ["red", "green", "blue"];

    for ($index = 0; $index < sizeof($colors); $index++) {
        echo $colors[$index];
        addBreak();
    }

    foreach($colors as $color) {
        echo $color;
        addBreak();
    }
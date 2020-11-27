<?php
    function addBreak() {
        echo "<br/>";
    }

    // Arithmetic
    $number1 = 5;
    $number2 = 10;

    $result1 = $number1 + $number2;
    $result2 = $number1 - $number2;
    $result3 = $number1 / $number2;
    $result4 = $number1 * $number2;

    echo $result1;
    addBreak();

    echo $result2;
    addBreak();

    echo $result3;
    addBreak();

    echo $result4;
    addBreak();

    $result4 += 2;
    echo $result4;
    addBreak();

    // Comparison 
    $number1 = 1;
    $number2 = 5;

    if ($number1 < 5 or $number2 < 5) {
        // when it is valid
        echo "condition is true";
        addBreak();
    } 

    echo "collin" . "van der vorst";
    addBreak();

    // Law to drink boose 
    $age = 65; 

    if ($age < 16) {
        echo "drink water";
        addBreak();
    } elseif ($age < 18) {
        echo "drink beer";
        addBreak();
    } elseif ($age < 21) {
        echo "drink wine";
        addBreak();
    } else {
        echo "drink everything but responsible";
        addBreak();
    }

    $color = "purple"; 

    switch ($color) {
        case "orange":
            echo "orange";
            addBreak();
            break;
        case "green":
            echo "kiwi";
            addBreak();
            break;
        default:
            echo "I don't know that color";
    }
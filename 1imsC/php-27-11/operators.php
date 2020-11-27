<?php
    // String operators concentanation 
    $firstname = "Collin";
    $lastname = "Van der Vorst";
    echo $firstname . " " . $lastname . "<br/>";

    // Arethmix operators
    $number1 = 5;
    $number2 = 10;

    echo ($number1 * $number2) . "<br/>";
    echo ($number1 / $number2) . "<br/>";
    echo ($number1 + $number2) . "<br/>";
    echo ($number1 - $number2) . "<br/>";

    $number1 += 5;
    echo $number1 . "<br/>";

    $number1++;
    echo $number1 . "<br/>";

    // Logical
    $name = "Collin";
    $age = 29;
    $isAwesome = true;

    // true xor false =  2 condition
    if ($name == "Collin" xor $age < 30 xor $isAwesome == true) {
        echo "true lane";
        echo "<br/>";
    }

    // if ($age < 30) {
    //     echo "You so young";
    //     echo "<br/>";
    // }


    $number = 10; 
    $number++;

    var_dump($number);


    // IF STATEMENT
    $age = 13;
    if ($age < 16) {
        // true condition
        echo "ge moogt niet drinken";
    } elseif($age < 18) {
        echo "soft drinks";
    } else {
        echo "het harde spul </br>";
        // false condition
        echo "false";
    }

    if (5 == 5) {
        echo "rekenwonder <br/>";
    }

    $color = "green";
    switch ($color) {
        case "orange":
            echo "you like orange";
            break;
        case "blue":
            echo "you like blue";
            break;
        default:
            echo "ik ken het kleur niet";
    }

    echo "<br/>";
    $counter = 1;

    // While loop
    while ($counter < 10) {
        echo $counter;
        echo "<br/>";
        $counter++;
    }

    // Do while loop
    $counter = 11;
    do {
        echo $counter;
        echo "<br/>";
        $counter++;
    } while ($counter < 10);

    // for loop
    for($i=1; $i<=10; $i++) {
        echo $i;
        echo "<br/>";
    }

    // For each 
    $users = array("Senne", "Jordi", "Marnix");
    var_dump(sizeof($users));
    for($i=0; $i<sizeof($users); $i++) {
        echo $users[$i];
        echo "<br/>";
    }

    foreach ($users as $user) {
        echo $user;
        echo "<br/>";
    }

    $user = [
        "name" => "Van der Vorst",
        "firstname" => "Collin",
        "age" => 29
    ];

    foreach ($user as $key => $value) {
        echo "Key " . $key . " is " .$value;
        echo "<br/>";
    }
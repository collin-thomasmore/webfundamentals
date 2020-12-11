<?php
    $colors = ["red", "green"];

    // Add pink to latest position
    $colors[] = "pink";
    array_push($colors, "blue", "light-blue");
    
    // // Delete last element
    // array_pop($colors);

    // // Delete first element
    // array_shift($colors);

    // 
    var_dump($colors);
    
    var_dump(array_slice($colors, 1, 3));
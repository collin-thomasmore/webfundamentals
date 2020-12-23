<?php
    $colors = ["pink", "red", "green", "blue"];

    $colors[] = "black";

    array_push($colors, "white", "orange");

    $rgb = array_slice($colors, 1, 3);
    var_dump($rgb);
    var_dump($colors);

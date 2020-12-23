<?php
    include "./includes/index.php";

    $items = getQuery("select * from products;");

    echo json_encode($items);
<?php
    include_once "./includes/db.php";

    $products = getQuery("SELECT * FROM products");

    echo json_encode($products);
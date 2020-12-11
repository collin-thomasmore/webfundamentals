<?php
    include_once "../includes/db.php";

    if(isset($_POST['productname'])) {
        $productname = $_POST["productname"];
        insertQuery("INSERT INTO `products` (`id`, `name`) VALUES (NULL, ' $productname');");
    }

    // redirect to success page
    header("Location:http://localhost:8888/success.html", true, 303);
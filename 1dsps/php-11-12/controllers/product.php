<?php
    include "../includes/index.php";

    if (isset($_POST["productname"])) {
        $productname = $_POST["productname"];

        createQuery("INSERT INTO `products` (`id`, `name`) VALUES (NULL, '$productname');");

        // redirect to success page
        header("Location:http://localhost:8888/succes.html", true, 303);
    } else {
        header("Location:http://localhost:8888/index.php", true, 303);
    }
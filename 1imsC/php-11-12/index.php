<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Header --> 
    <?php
        include "./components/header.php";
        include_once "./includes/db.php";

        $products = getQuery("SELECT * FROM products");
        $users = getQuery("SELECT * FROM users");

        foreach($products as $product) {
            var_dump($product);
        }

        foreach($users as $user) {
            var_dump($user);
        }
    ?>

    <!-- Main -->
    <main>
        <h1> home page </h1>
    </main>

    <!-- Footer -->
    <footer> 
        Made by Collin Van der 
    </footer>
</body>
</html>
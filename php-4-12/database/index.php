<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            include_once "./includes/db.php";

            $users = getQuery("SELECT * FROM bets");

            foreach($users as $user) {
                var_dump($user["username"]);
            }

            $products = getQuery("SELECT * FROM products");

            foreach($products as $product) {
                var_dump($product["name"]);
            }
        ?>
    </body>
</html>
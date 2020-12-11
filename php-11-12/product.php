<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Functions -->
    <?php
        include_once "./includes/db.php";
    ?>

    <!-- Header --> 
    <?php
        include "./components/header.php";
    ?>

    <!-- Main -->
    <main>
        <h1> Product page </h1>

        <ul>
            <?php
                $products = getQuery("SELECT * FROM products");

                foreach($products as $product) {
            ?>
                <li>
                    <?php
                        echo $product["name"];
                    ?>
                </li>
            <?php
                }
            ?>
        </ul>
    </main>

    <!-- Footer -->
    <footer> 
        Made by Collin Van der 
    </footer>
</body>
</html>
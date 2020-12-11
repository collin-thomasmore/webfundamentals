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

        if(isset($_GET['productname'])) {
            $productname = $_GET["productname"];
            // insertQuery("INSERT INTO `products` (`id`, `name`) VALUES (NULL, ' $productname');");
        }

    ?>

    <!-- Main -->
    <main>
        <h1> Product page </h1>

        <h2>
            Overview products
        </h2>
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

        <h2> 
            Create new product
        </h2>

        <form action="./product.php" method="GET">
            <!-- Name -->
            <label for="productname">
                Product name
            </label>
            <input type="text" id="productname" name="productname" placeholder="fill in your productname" required />
            <br/>


            <!-- Submit -->
            <input type="submit" value="Voeg product toe" />
        </form>
    </main>

    <!-- Footer -->
    <footer> 
        Made by Collin Van der 
    </footer>
</body>
</html>
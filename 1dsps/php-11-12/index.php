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
            include "./includes/index.php";
        ?>

        <!-- Header -->
        <?php 
            include "./components/header.php";
        ?>

        <!-- Main --> 
        <main>
            <h1> Home page </h1>

            <h2>
                Products overview
            </h2>

            <ul>
                <?php
                    $items = getQuery("select * from products;");

                    foreach($items as $item) {
                ?>
                    <li>
                        <?php echo $item['name']; ?>
                    </li>
                <?php
                    }
                ?>
            </ul>

            <h2>
                Add a product
            </h2>

            <form action="./controllers/product.php" method="POST">
                <!-- Product name -->
                <label for="productname">
                    productname
                </label>

                <input type="text" id="productname" name="productname" placeholder="Give me your product name" required />

                <br/>

                <!-- Submit button -->
                <input type="submit" value="Create a product" />
            </form>
        </main>

        <!-- footer -->
        <footer>
            Hello this is my footer
        </footer>
    </body>
</html>
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

            <?php
                $items = getQuery("select * from products;");

                foreach($items as $item) {
                    echo $item["name"];
                }

                $users = getQuery("select * from users;");

                foreach($users as $user) {
                    echo $user["name"];
                }
            ?>
        </main>

        <!-- footer -->
        <footer>
            Hello this is my footer
        </footer>
    </body>
</html>
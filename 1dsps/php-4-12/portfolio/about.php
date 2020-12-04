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

            echo $headerVariable;

            printMyName();
        ?>

        <!-- Main content -->
        <main>
            <h1>
                About
            </h1>
        </main>

        <!-- Footer -->
        <footer>
            Made with love by Collin
        </footer>
    </body>
</html>
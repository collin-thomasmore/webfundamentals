<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Includes -->
        <?php
            include_once "./includes/headers.php";
        ?>

        <!-- Header -->
        <?php
            include "components/header.php";
        ?>

        <!-- Main -->
        <main>
            <?php
                createHeader("Homepage");
            ?>
        </main>

        <!-- Footer -->
        <?php
            include "components/footer.php"
        ?>
    </body>
</html>
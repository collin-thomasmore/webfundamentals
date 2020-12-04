<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <?php
            include_once "./includes/db.php";

            // Loop through the result 
            $users = getQuery("SELECT * FROM users");

            insertQuery("INSERT INTO users (name) VALUES ('collin the great')");

            foreach ($users as $user) {
        ?>
            <div class="c-user">
                <?php
                    echo $user["name"]
                ?>
            </div>
        <?php
            }
        ?>

        <script src="./js/index.js">
        </script>
    </body>
</html>

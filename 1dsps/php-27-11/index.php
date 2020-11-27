<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script>
            var password = "admin11111";
        </script>
    </head>
    <body>
        <h1>
            YES IT IS WEB TODAY
        </h1>

        <?php
            $isLoggedIn = false;
            $db_password = "admin111111";
            // Check if he is logged in 
            /*
                multiline
                code
                blabla
            */
            if ($isLoggedIn == true) {
                echo "<h2>YOU ARE LOGGED IN </h2>";
            } else {
        ?>
            <h2> 
                Not logged in
            </h2>
        <?php
            }
        ?>

        <?php
            $name = "";
            if ($name == "collin") {
        ?>
            <div class="alert">
                <h2>
                    Hello Collin
                </h2>
            </div>
        <?php
            } else {
        ?>
            <h2>
                Hello Stranger
            </h2>
        <?php
            }
        ?>
        
        <h2>
            Next assignments!
        </h2>
    </body>
</html>
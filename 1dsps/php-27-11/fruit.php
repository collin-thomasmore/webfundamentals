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
        <form action="./fruit.php" method="get" id="form">
            <label for="color">color</label>
            <input type="text" id="color" name="color" />
            <input type="submit" value="give me a fruitname">
        </form>

        <?php 
            $color = $_GET["color"]; 
            var_dump($color);

            switch ($color) {
                case "orange":
                    echo "orange";
                    addBreak();
                    break;
                case "green":
                    echo "kiwi";
                    addBreak();
                    break;
                default:
                    echo "I don't know that color";
            }
        ?>
    </body>
</html>
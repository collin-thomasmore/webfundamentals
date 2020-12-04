<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // Credentials om te connecteren met een database
            $dbServername = "ID291816_bets.db.webhosting.be"; //127.0.0.1 -> localhost
            $dbUsername = "ID291816_bets"; // root
            $dbPassword = "WeLoveWeb2020"; // root
            $dbName = "ID291816_bets"; // sports

            // Make the connection
            $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

            var_dump($conn);
        ?>
    </body>
</html>
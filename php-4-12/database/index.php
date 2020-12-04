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

            // Check if the connection is working
            if ($conn == false) {
                // Stop met de php code
                die("Geen database connectie");
            }

            // Prepare the sql statement
            $sqlQuery = "SELECT * FROM bets";
            $result = mysqli_query($conn, $sqlQuery);

            $bets = $result->fetch_all(MYSQLI_ASSOC);
            
            foreach($bets as $bet) {
                var_dump($bet["username"]);
            }
        ?>
    </body>
</html>
<?php
    function makeDbConnection() {
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

        return $conn;
    }

    function closeConnection($conn) {
        // Connection mySql server
        $conn->close();
    }

    function getQuery($sqlQuery) {
        // Make connection
        $conn = makeDbConnection();

        // Prepare the sql statement
        $result = mysqli_query($conn, $sqlQuery);

        // Close the connection
        closeConnection($conn);

        // Return associated array of the results
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($sqlQuery) {
        // Add product
        $conn = makeDbConnection();

        // Prepare the sql statement
        $result = mysqli_query($conn, $sqlQuery);

        // Connection close
        closeConnection($conn);

        return $result;
    }
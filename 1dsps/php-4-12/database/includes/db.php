<?php
    function makeConnectionWithDb() {
        // MySql credentials
        $dbServername = "ID291816_bets.db.webhosting.be"; // locations of your server (combell/localhost (127.0.0.1)
        $dbUsername = "ID291816_betseee";
        $dbPassword = "WeLoveWeb2020";
        $dbName = "ID291816_bets";

        // Make the connection
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        // Check if connection is working
        if ($conn == false) {
            die("Connection failed");
        }

        return $conn;

    }
    
    function getQuery($sqlQuery) {
        // Make connection with the DB
        $conn = makeConnectionWithDb();

        // Create a sql query
        $result = mysqli_query($conn, $sqlQuery);

        // Close the connection
        closeConnection($conn);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($sqlQuery) {
        // Make connection with the DB
        $conn = makeConnectionWithDb();

        // Create a sql query
        $result = mysqli_query($conn, $sqlQuery);

        var_dump($result);

        // Close the connection
        closeConnection($conn);

        return $result;

    }

    function closeConnection($conn) {
        $conn->close();
    }
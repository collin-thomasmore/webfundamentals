<?php
    function makeConnectionWithDb() {
        // Credentials om te connecteren met een database
        $dbServername = "ID291816_bets.db.webhosting.be"; //127.0.0.1 -> localhost
        $dbUsername = "ID291816_bets"; // root
        $dbPassword = "WeLoveWeb2020"; // root
        $dbName = "ID291816_bets"; // sports
        $dbPort = 3306;

        // Connection with database 
        $connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName, $dbPort);

        if ($connection == false ) {
            die("No connection with the database");
        }

        return $connection;
    }

    function closeConnection($connection) {
        // Close connection
        $connection->close();
    }

    function getQuery($sql) {
        // Make a connection with a database
        $connection = makeConnectionWithDb();

        // send the sql statement and receive a result
        $items = mysqli_query($connection, $sql);

        // parse it to assosiatve array
        $items = $items->fetch_all(MYSQLI_ASSOC);

        // Close the connection
        closeConnection($connection);

        return $items;

    }

    function createQuery($sql) {
         // Make a connection with a database
        $connection = makeConnectionWithDb();

        // send the sql statement and receive a result
        $result = mysqli_query($connection, $sql);

        // Close the connection
        closeConnection($connection);

        return $result;
    }
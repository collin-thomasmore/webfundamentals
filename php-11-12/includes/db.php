<?php
    function connectWithDatabase() {
        // MySql credentials
        $dbServername = "ID291816_bets.db.webhosting.be"; // locations of your server (combell/localhost (127.0.0.1)
        $dbUsername = "ID291816_bets";
        $dbPassword = "WeLoveWeb2020";
        $dbName = "ID291816_bets";
        $port = 3306; // standard port for mysql 

        // Make the connection
        $connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName, $port);

        // Check if connections works
        if ($connection == false) {
            die("Connection failed");
        }

        return $connection;
    }

    function closeConnection($connection) {
        $connection->close();
    }

    function getQuery($sql) {
        // Connection with database
        $connection = connectWithDatabase();

        // Sql query uitvoeren
        $items = mysqli_query($connection, $sql);

        // Connection gaan sluiten 
        closeConnection($connection);

        // Een resultaat gaan teruggeven 
        return $items->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($sql) {
        // Connection with database
        $connection = connectWithDatabase();

        // Sql query uitvoeren
        $status = mysqli_query($connection, $sql);

        // Connection gaan sluiten 
        closeConnection($connection);

        // Een resultaat gaan terrugen
        return $status;
    }

    // insertQuery("INSERT INTO `products` (`id`, `name`) VALUES (NULL, 'collin tha wizard');");
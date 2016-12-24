<?php
    $server = "localhost";
    $username = "root";
    $password = "chinna@cse";
    $dbName = "todos";

    $mysqlConnection = mysqli_connect($server, $username, $password) or die("Could not connect to server");
    mysqli_select_db($mysqlConnection, $dbName) or die("could not connect to database");

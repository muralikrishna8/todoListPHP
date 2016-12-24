<?php
    if(isset($_POST['task'])) {
        require("./connect.php");
        $task = $_POST['task'];
        $query = "INSERT INTO todos(task) VALUES ('$task');";
        echo $query;
        if(mysqli_query($mysqlConnection, $query)) {
            header("location: ./index.php");
        } else {
            echo "not added".mysqli_error($mysqlConnection);
        }
    } else {
        header("location: ./index.php");
    }

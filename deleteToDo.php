<?php
    require("./connect.php");
    $task_id = $_POST['task_id'];
    mysqli_query($mysqlConnection, "DELETE FROM todos WHERE id='$task_id'");
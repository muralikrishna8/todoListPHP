<html xmlns="http://www.w3.org/1999/html">
<head>
<title>Todo List</title>
</head>
<body>
	<div> Welcome to TODO </div>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>task</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
        <?php require("./connect.php"); ?>
    <?php
        $query = mysqli_query($mysqlConnection, "SELECT * FROM todos");
        while($row = mysqli_fetch_assoc($query)) {
            $task_number = $row['id'];
            $task = $row['task'];
            $date = $row['date'];
            print <<<END
                <tr>
                    <td>$task_number</td>
                    <td>$task</td>
                    <td>$date</td>
                </tr>
END;

        }
    ?>
        </tbody>
    </table>
    <br />
    <br />
    <form action="addToDo.php" method="post">
        <input type="text" name="task" size="50"/>
        <input type="submit" />
    </form>
</body>
</html>

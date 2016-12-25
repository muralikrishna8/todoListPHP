<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <br /   >
    <ul class="todo-container">
        <?php require("./connect.php"); ?>
        <?php
            $query = mysqli_query($mysqlConnection, "SELECT * FROM todos");
            while($row = mysqli_fetch_assoc($query)) {
                $task_number = $row['id'];
                $task = $row['task'];
                $date = $row['date'];
                print <<<END
                    <li class="todo">
                        <span class="title">$task</span>
                        <span class="delete" task="$task_number">X</span>
                    </li>
END;

            }
        ?>
    </ul>
    <form action="addToDo.php" method="post" class="new-todo-form">
        <input type="text" class="todo-input" name="task" size="50"/>
        <input type="submit" class="add-todo" value="add"/>
    </form>
    <script src="jquery.js"></script>
    <script>
        $(".delete").click(function() {
            var $task = $(this);
            var taskId = $task.attr("task");

            $.post("deleteToDo.php", { "task_id": taskId }, function() {
                $task.parent().remove();
            });
        });
    </script>
</body>
</html>

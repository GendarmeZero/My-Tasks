<?php

include("connection.php");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Tasks Table</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Tasks</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                ///////////الفورم لايشمل اضافة مستخدمين فقط تاسكات
                $query = $pdo->query("SELECT * FROM employees");
                foreach ($query as $row) {
                    echo "<tr>";
                    echo "<td>" . $row["user_id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["age"] . "</td>";
                    echo "<td>" . $row["tasks"] . "";
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='POST' action='update.php?id=" . $row['user_id'] . "' style='display:inline-block;'>";
                    echo "<input type='text' name='task_id' value='" . $row["tasks"] . "' required>";
                    echo "<button type='submit' class='btn btn-warning' name='edit_task'>Edit</button>";
                    echo "</form>";
                    echo "<form method='POST' action='delete.php?id=" . $row['user_id'] . "' style='display:inline-block;'>";
                    echo "<input type='hidden' name='task_id' value='" . $row["tasks"] . "'>";
                    echo "<button type='submit' class='btn btn-danger' name='delete_task'>Delete</button>";
                    echo "</form> ";
                    echo "</td>";

                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
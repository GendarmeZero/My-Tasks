
<?php
include("connection.php");

if (isset($_POST["edit_task"])) {
    $task_id=$_POST["task_id"];
    $id=$_GET["id"];
    // echo  $task_id ;
    // echo  $id ;

    $stmt = $pdo->prepare("UPDATE `employees` SET `tasks`=:task WHERE user_id=:user_id");
    $stmt->bindParam(":user_id", $id);
    $stmt->bindParam(":task", $task_id);

    $stmt->execute();


 header("location:index.php");

}
?>




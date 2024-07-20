


<?php
include("connection.php");

if (isset($_POST["delete_task"])) {
    $id=$_GET["id"];


    $stmt = $pdo->prepare("DELETE FROM `employees` WHERE user_id=:user_id");
    $stmt->bindParam(":user_id", $id);

    $stmt->execute();


 header("location:index.php");

}
?>




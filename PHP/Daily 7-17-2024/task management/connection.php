<?php
$testdb = 'mysql:host=localhost;dbname=users';
$username = 'root';
$password = '';

try {
        $pdo = new PDO($testdb, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully ! <h1> Goodmorning " .$username. "</h1>" ;
    }

    catch (PDOException $e) {
            echo "help !". $e->getMessage() ."";

    }




    
?>




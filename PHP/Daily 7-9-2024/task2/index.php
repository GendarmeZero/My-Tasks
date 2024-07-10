<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php task 1 b</title>
    <style>
        body {
            background-color: orange;
            color: black;
            font-size: large;
        }
    </style>
</head>

<body>
    <?php
    // Loops 
    // 1.Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. 
    // Expected Output: 1-2-3-4-5-6-7-8-9-10


    ///Task1
    echo "<br>";
    echo "<br>";
    echo 'Task 1 <br>';
    echo '<hr>';
    $output = '';
    for ($i = 0; $i <= 10; $i++) {
        $output .= $i;
        if ($i != 10) {
            $output .= '-';
        }
    }
    echo $output;


    // 2.Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
    // Expected Output:  total as a number 

    ///Task2
    echo "<br>";
    echo "<br>";
    echo 'Task 2 <br>';
    echo '<hr>';
    $total = '';

    for ($i = 0; $i <= 30; $i++) {
        $total .= $i;
    };
    echo $total;

    // 3.Print a Square Pattern
    // Print a 5x5 square of asterisks (*) using nested for loops.
    // *    *   *   *   *
    // *    *   *   *   *
    // *    *   *   *   *
    // *    *   *   *   *
    // *    *   *   *   *


    ///Task3
    echo "<br>";
    echo "<br>";
    echo 'Task 3 <br>';
    echo '<hr>';
    $stars = 5;
    for ($i = 1; $i <= $stars; $i++) {
        for ($j = 1; $j <= $stars; $j++) {
            echo '* ';
        }
        echo '<br>';
    }
    echo $stars;


    // 4.Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.
    // Sample Input: 5
    // Expected Output: 120
    echo "<br>";
    echo "<br>";
    echo 'Task 4 <br>';
    echo '<hr>';

    function factorial($n)
    {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
    $num = 5;
    $result = factorial($num);

    echo "Factorial of $num is: $result";

    echo "<br>";
    echo "<br>";
    echo 'Task 4 <br>';
    echo '<hr>';














    ////////end of tasks









    ?>

</body>

</html>
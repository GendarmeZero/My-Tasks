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

        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
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

    // 5.Write a program to calculate and print the Fibonacci sequence using a for loop.
    // Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 
    // Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …

    echo "<br>";
    echo "<br>";
    echo 'Task 5 <br>';
    echo '<hr>';

    function Fibonacci($number)
    {

        if ($number == 0)
            return 0;
        else if ($number == 1)
            return 1;

        else
            return (Fibonacci($number - 1) +
                Fibonacci($number - 2));
    }
    $number = 10;
    for ($counter = 0; $counter < $number; $counter++) {
        echo Fibonacci($counter), ' ';
    }

    // 6.Write a program which will count the "c" characters in the text "Orange Coding Academy". 
    // Sample Input: Orange Coding Academy
    // Expected Output: 2


    echo "<br>";
    echo "<br>";
    echo 'Task 6 <br>';
    echo '<hr>';


    function findC($kokoOCA)
    {
        $koko = "Orange Coding Academy";
        $count = 0;
        for ($i = 0; $i < strlen($kokoOCA); $i++) {
            if ($kokoOCA[$i] == 'c' || $kokoOCA[$i] == 'C') {
                $count++;
            }
        }
        return $count;
    }
    $kokoOCA = "Orange Coding Academy";
    $cinme = findC($kokoOCA);
    echo "$kokoOCA:$cinme";


    // 7.Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag. 

    echo "<br>";
    echo "<br>";
    echo 'Task 7 <br>';
    echo '<hr>';

    $table = "<table border='1'>
    <tr>
        <th>Column 1</th>
        <th>Column 2</th>
    </tr>";

    for ($i = 1; $i <= 6; $i++) {
        $table .= "<tr>";
        for ($j = 1; $j <= 2; $j++) {
            $table .= "<td>Row $i, Column $j</td>";
        }
        $table .= "</tr>";
    }

    $table .= "</table>";

    echo $table;

    // 8.	Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "koko" instead of the number, 
    // and for multiples of five print "Buzz". For numbers that are multiples of both three and five, 
    // print "FizzBuzz".

    echo "<br>";
    echo "<br>";
    echo 'Task 8<br>';
    echo '<hr>';

    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "kokoBuzz<br>";
        }
        if ($i % 3 == 0) {
            echo "koko<br>";
        };
        if ($i % 5 == 0) {
            echo "Buzz<br>";
        }

        echo "$i <br>";
    };


    // 9.Write a PHP program to generate and display the first n lines of a Floyd triangle
    // According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer science education. 
    // It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive numbers,
    //  starting with a 1 in the top left corner:
    // Sample output:
    // 1
    // 2 3
    // 4 5 6
    // 7 8 9 10
    // 11 12 13 14 15


    echo "<br>";
    echo "<br>";
    echo 'Task 9<br>';
    echo '<hr>';


    $n = 5;
    echo "n = " . $n . "\n";

    $count = 1;

    for ($i = $n; $i > 0; $i--) {
        for ($j = $i; $j < $n + 1; $j++) {
            printf("%4s", $count);

            $count++;
        }

        echo "<br>";
    }




    ////////end of tasks
    ?>












</body>

</html>
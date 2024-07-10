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
    // Functions
    // 1.Write a PHP script to check if the inserted number is a prime number 
    // Sample Input:  3
    // Expected Output: 3 is a prime number 

    ///Task1
    echo 'Task 1 <br>';
    echo '<hr>';

    function prime($numbers)
    {
        if ($numbers <= 1) {
            return false;
        }
        for ($i = 2; $i < $numbers; $i++) {
            if ($numbers % $i == 0) {
                return false;
            }
        }
        return true;
    };

    $number = 3;
    if (prime($number)) {
        echo "$number is prime";
    }

    //2.Write a PHP script to reverse a string 
    // Sample Input:  remove
    // Expected Output: evomer


    ///Task2
    echo "<br>";
    echo "<br>";
    echo 'Task 2 <br>';
    echo '<hr>';
    $task2 = "remove";
    echo strrev($task2);


    // 3.Write a PHP script to check if the all string characters are lower cases
    // Sample Input:  remove
    // Expected Output: Your String is Ok 

    ///Task3
    echo "<br>";
    echo "<br>";
    echo 'Task 3 <br>';
    echo '<hr>';
    $task3 = "remove";

    function chcktheLowerCases($checkMe)
    {
        if (ctype_lower($checkMe)) {
            echo "its lower case";
        } else {
            echo "its not lower case";
        }
    };
    echo chcktheLowerCases($task3);


    //4.Write a PHP function to swap to variables?
    // Sample Input:  x = 12     y= 10
    // Expected Output: y=12   x=10 

    ///Task4
    echo "<br>";
    echo "<br>";
    echo 'Task 4 <br>';
    echo '<hr>';

    function swap(&$x, &$y)
    {
        $x = 12;
        $y = 10;
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    swap($x, $y);
    echo "After swapping: x = $x, y = $y";


    ///Task5
    echo "<br>";
    echo "<br>";
    echo 'Task 5 <br>';
    echo 'Task 5 is repated !!<br>';
    echo '<hr>';


    // 6.Write a PHP function to check if a number is an Armstrong number or not ?
    // **Armstrong number is a number that is equal to the sum of cubes of its digits.

    ///Task6
    echo "<br>";
    echo "<br>";
    echo 'Task 6 <br>';
    echo '<hr>';
    echo 'WIP';

    // 7.Write a PHP function that checks whether a passed string is a palindrome or not?
    // Sample Input:  Eva, can I see bees in a cave?
    // Expected Output: Yes it is a palindrome 


    ///Task7
    echo "<br>";
    echo "<br>";
    echo 'Task 7 <br>';
    echo '<hr>';
    $evaANDbees = "Eva, can I see bees in a cave?";
    function isPalindrome($str)
    {
        if ($str == strrev($str)) {
            return true;
        } else {
            return false;
        }
    };

    echo isPalindrome($evaANDbees);


    // 8.Write a PHP function to remove duplicates from an array ?
    // Sample Input:  
    // $array1 = array(2, 4, 7, 4, 8, 4);
    // Expected Output:
    // $array1 = array(2, 4, 7, 8);

    ///Task8
    echo "<br>";
    echo "<br>";
    echo 'Task 8 <br>';
    echo '<hr>';
    $array1 = array(2, 4, 7, 4, 8, 4);

   function removeDupes($newAarray){
    return array_unique($newAarray);
    
   };
   $clan_array1 = removeDupes($array1);
   print_r ($clan_array1);




////////end of tasks









    ?>

</body>

</html>
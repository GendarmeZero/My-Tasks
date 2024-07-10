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
    // PHP String and String Functions	         	 
    // 1.	Write a PHP script to: 
    // a.	Convert the entered string to uppercase.
    // b.	Convert the entered string to lowercase.
    // c.	Make the first letter of the string uppercase.
    // d.	Make the first letter of each word capitalized.



    ///Task1
    echo "<br>";
    echo "<br>";
    echo 'Task 1 <br>';
    echo '<hr>';

    $x = '"blaCK","wHite","KoKO"';

    echo strtoupper($x);
    echo "<br>";
    echo strtolower($x);
    echo "<br>";
    echo ucfirst($x);
    echo "<br>";
    echo ucwords($x);


    // 2.Write a PHP script splitting the following numeric string to be a date format. 
    // Sample Output: '085119'
    // Expected Output: 08:51:19


    ///Task2
    echo "<br>";
    echo "<br>";
    echo 'Task 2 <br>';
    echo '<hr>';

    $numtodate = '085119';

    $timeString = substr($numtodate, 0, 2) . ':' . substr($numtodate, 2, 2) . ':' . substr($numtodate, 4, 2);

    echo $timeString;


    //3.Write a PHP script to check whether the sentence contains a specific word.

    // Sample Output: ‘I am a full stack developer at orange coding academy’
    // Sample Word: ‘Orange’
    // Expected Output: ‘Word Found!’

    ///Task3
    echo "<br>";
    echo "<br>";
    echo 'Task 3 <br>';
    echo '<hr>';

    $sentence = 'I am a full stack developer at orange coding academy';
    $word = 'orange';

    if (strpos($sentence, $word) !== false) {
        echo 'Word Found!';
    } else {
        echo 'Word Not Found!';
    }


    // 4.Write a PHP script to extract the file name from the URL. 

    // Sample Output: 'www.orange.com/index.php'
    // Expected Output: 'index.php'

    ///Task4
    echo "<br>";
    echo "<br>";
    echo 'Task 4 <br>';
    echo '<hr>';


    $url = 'http://www.orange.com/index.php';

    $filename = basename($url);

    echo "File name: $filename";


    // 6.Write a PHP script to get the last three characters from the string. 
    // Sample Output: 'info@orange.com'
    // Expected Output: 'com'


    ///Task5
    echo "<br>";
    echo "<br>";
    echo 'Task 5 <br>';
    echo '<hr>';

    $email = 'info@orange.com';

    $length = strlen($email);

    $last_three = substr($email, $length - 3);

    echo "Last three characters: $last_three";


















    //////////end of task









    ?>

</body>

</html>
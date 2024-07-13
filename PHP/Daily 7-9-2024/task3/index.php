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

    ///Task2
    echo "<br>";
    echo "<br>";
    echo 'Task 2 <br>';
    echo '<hr>';

    $numtodate = '085119';

    $timeString = substr($numtodate, 0, 2) . ':' . substr($numtodate, 2, 2) . ':' . substr($numtodate, 4, 2);

    echo $timeString;

    // 3. Write a PHP script to check whether the sentence contains a specific word.
    echo "<br>";
    echo "<br>";
    echo 'Task 3 <br>';
    echo '<hr>';

    $sentence = 'I am a full stack developer at orange coding academy';
    $word = 'Orange';

    if (stripos($sentence, $word) !== false) {
        echo 'Word Found!';
    } else {
        echo 'Word Not Found!';
    }

    // 4. Write a PHP script to extract the file name from the URL.
    echo "<br>";
    echo "<br>";
    echo 'Task 4 <br>';
    echo '<hr>';

    $url = 'www.orange.com/index.php';
    echo basename($url);

    // 5. Write a PHP script to extract the username from the following email address.
    echo "<br>";
    echo "<br>";
    echo 'Task 5 <br>';
    echo '<hr>';

    $email = 'info@orange.com';
    $username = strstr($email, '@', true);
    echo $username;

    // 6. Write a PHP script to get the last three characters from the string.
    echo "<br>";
    echo "<br>";
    echo 'Task 6 <br>';
    echo '<hr>';

    $last_three_chars = substr($email, -3);
    echo $last_three_chars;

    // 7. Write a PHP script to generate simple random passwords [do not use rand () function] from a given string.
    echo "<br>";
    echo "<br>";
    echo 'Task 7 <br>';
    echo '<hr>';

    $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $password = substr(str_shuffle($characters), 0, 10);
    echo $password;

    // 8. Write a PHP script to replace the first word of the sentence with another word.
    echo "<br>";
    echo "<br>";
    echo 'Task 8 <br>';
    echo '<hr>';

    $sentence = 'That new trainee is so genius.';
    $word = 'Our';
    $new_sentence = preg_replace('/^\w+/', $word, $sentence);
    echo $new_sentence;

    // 9. Write a PHP script to find the first character that is different between two strings.
    echo "<br>";
    echo "<br>";
    echo 'Task 9 <br>';
    echo '<hr>';

    $string1 = 'dragonball';
    $string2 = 'dragonboll';
    $position = strspn($string1 ^ $string2, "\0");

    echo 'First difference between two strings at position ' . $position . ': "' . $string1[$position] . '" vs "' . $string2[$position] . '"';

    // 10. Write a PHP script to put a string in an array use the (var_dump) to view the array.
    echo "<br>";
    echo "<br>";
    echo 'Task 10 <br>';
    echo '<hr>';

    $string = 'Twinkle twinkle little star.';
    $array = explode(' ', $string);
    var_dump($array);

    // 11. Write a PHP script to print the next letter of the inputted letter.
    echo "<br>";
    echo "<br>";
    echo 'Task 11 <br>';
    echo '<hr>';

    $letter = 'a';
    $next_letter = ++$letter;
    if (strlen($next_letter) > 1) {
        $next_letter = $next_letter[0];
    }
    echo $next_letter;

    $letter = 'z';
    $next_letter = ++$letter;
    if (strlen($next_letter) > 1) {
        $next_letter = $next_letter[0];
    }
    echo $next_letter;

    // 12. Write a PHP script to insert a string at the specified position in a given string.
    echo "<br>";
    echo "<br>";
    echo 'Task 12 <br>';
    echo '<hr>';

    $original_string = 'The brown fox';
    $insert = 'quick';
    $position = 4;
    $new_string = substr_replace($original_string, $insert . ' ', $position, 0);
    echo $new_string;

    // 13. Write a PHP script to get the first word of a sentence.
    echo "<br>";
    echo "<br>";
    echo 'Task 13 <br>';
    echo '<hr>';

    $sentence = 'The quick brown fox';
    $first_word = strtok($sentence, ' ');
    echo $first_word;

    // 14. Write a PHP script to remove zeroes from the given number.
    echo "<br>";
    echo "<br>";
    echo 'Task 14 <br>';
    echo '<hr>';

    $number = '0000657022.24';
    echo ltrim($number, '0');

    // 15. Write a PHP script to remove part of a string.
    echo "<br>";
    echo "<br>";
    echo 'Task 15 <br>';
    echo '<hr>';

    $kokO = 'The quick brown fox jumps over the lazy dog';
    $remove = 'fox';
    echo str_replace($remove, '', $kokO);

    // 16. Write a PHP script to remove trailing dashes from a string.
    echo "<br>";
    echo "<br>";
    echo 'Task 16 <br>';
    echo '<hr>';

    $string = 'The quick brown fox jumps over the lazy dog---';
    echo rtrim($string, '-');

    // 17. Write a PHP script to remove special characters from the following string.
    echo "<br>";
    echo "<br>";
    echo 'Task 17 <br>';
    echo '<hr>';

    $string = '\"\1+2/3*2:2-3/4*3';
    echo preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);

    // 18. Write a PHP script to select first 5 words from the following string.
    echo "<br>";
    echo "<br>";
    echo 'Task 18 <br>';
    echo '<hr>';

    $string = 'The quick brown fox jumps over the lazy dog';
    $words = explode(' ', $string);
    echo implode(' ', array_slice($words, 0, 5));

    // 19. Write a PHP script to remove comma(s) from the following numeric string.
    echo "<br>";
    echo "<br>";
    echo 'Task 19 <br>';
    echo '<hr>';

    $number = '2,543.12';
    echo str_replace(',', '', $number);

    // 20. Write a PHP script to print letters from 'a' to 'z'.
    echo "<br>";
    echo "<br>";
    echo 'Task 20 <br>';
    echo '<hr>';

    foreach (range('a', 'z') as $letter) {
        echo $letter . ' ';
    }
    ?>
</body>

</html>

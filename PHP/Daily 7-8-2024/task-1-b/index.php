<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php task 1 b</title>
    <style>
        body{
            background-color: orange;
            color: black;
            font-size: x-large;
        }
    </style>
</head>

<body>
    <?php
    ///Task1
    echo 'task 1 <br>';
    $x = ["apple", "orange", "kiwi", "tomato", "pear"];
    foreach ($x as $food) {
        echo "$food <br>";
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<hr>';
    
    ///Task2
    echo 'task 2 <br>';
    $koko = ['koko' => 20, 'ali' => 25, 'tamimi' => 22, 'tamimiBomb' => 23,];
    foreach ($koko as $kokoNames => $kokoAge) {
        echo "$kokoNames : $kokoAge <br>";
    }
    array_push($koko, "newName", 35);

    unset($koko["ali"]);

    print_r($koko);
    echo "<br>";
    echo $koko[1];

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<hr>';

    ///Task3
    // Create a multidimensional array to store the details of three students (name, age, grade). 

    echo "<br>";
    echo 'task 3 <br>';
    echo "<br>";
    echo "<br>";
    $contacts = array(
        array(
            "name" => "koko",
            "age" => 99,
            "grade" => "A+",
        ),
        array(
            "name" => "ali",
            "age" => 25,
            "grade" => "C+",
        ),
        array(
            "name" => "mo",
            "age" => 22,
            "grade" => "C-",
        )
    );

    // Print the details of all students
    foreach ($contacts as $contact) {
        echo "Name:," . $contact['name'] . "<br>";
        echo "Age:," . $contact['age'] . "<br>";
        echo "Gade:," . $contact['grade'] . "<br>";
    };
    // Add a new student to the array and print the updated array.

    $updated_contacts = array(
        "name" => "newStudent",
        "age" => 26,
        "grade" => "B+",
    );
    array_push($contacts, $updated_contacts);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    foreach ($contacts as $contact) {
        echo "Name:," . $contact['name'] . "<br>";
        echo "Age:," . $contact['age'] . "<br>";
        echo "Gade:," . $contact['grade'] . "<br>";
    };
    // Update the grade of a specific student and print the updated array.
    $contacts[1]['grade'] = 'B+';
    echo "<br>";
    echo "<br>";
    echo "<br>";

    foreach ($contacts as $contact) {
        echo "Name:," . $contact['name'] . "<br>";
        echo "Age:," . $contact['age'] . "<br>";
        echo "Gade:," . $contact['grade'] . "<br>";
    };

    // Remove a student from the array and print the updated array
    unset($contacts[1]);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    foreach ($contacts as $contact) {
        echo "Name:," . $contact['name'] . "<br>";
        echo "Age:," . $contact['age'] . "<br>";
        echo "Gade:," . $contact['grade'] . "<br>";
    };
    echo '<hr>';
    ///Task4
    //the arrays we going to use in this task:
    echo 'task 4 <br>';
    $kokoNewArray = ["apple", "orange", "kiwi", "tomato", "pear", "showrma"];
    $numbers = array(4, 2, 8, 6, 3);
    $persons = array(
        "name" => "Ahmad",
        "age" => 33,
        "city" => "salt",
        "country" => "Jordan"
    );
    $persons2 = array(
        "name" => "Ahmad",
        "age" => 33,
        "city" => "salt",
        "country" => "Jordan"
    );
    $names = array(
        "name" => "seaf",
        "age" => 30,
        "city" => "aqaba"
    );
    $combine1 = ["A","B","C"];
    $combine2 = ["D","E","F"];


    // Use array_push() to add an element to an indexed array.
    echo "<br>";
    echo "<br>";
    array_push($kokoNewArray, ["pineapple"]);
    print_r($kokoNewArray);

    // Use array_pop() to remove the last element of an indexed array.
    echo "<br>";
    echo "<br>";
    $removedElement = array_pop($kokoNewArray);
    print_r($kokoNewArray);

    // Use array_keys() to get all the keys of an associative array.
    echo "<br>";
    echo "<br>";
    print_r(array_keys($names));

    // Use array_values() to get all the values of an associative array.
    echo "<br>";
    echo "<br>";
    print_r(array_values($names));

    // Use count() to get the number of elements in an array.
    echo "<br>";
    echo "<br>";
    print_r(count($names));

    // Use array_merge() to combine two arrays.
    echo "<br>";
    echo "<br>";
    $combined = array_merge($combine1,$combine2);
    print_r($combined);

    // Use array_search() to find a specific value in an array.
    echo "<br>";
    echo "<br>";
    $search = array_search("C",$combined);
    print_r($search);

    // Use sort() to sort an indexed array.
    echo "<br>";
    echo "<br>";
    sort($numbers);
    print_r($numbers);

    // Use ksort() to sort an associative array by keys.
    echo "<br>";
    echo "<br>";
    ksort($persons);
    print_r($persons);

    // Use asort() to sort an associative array by values. 
    echo "<br>";
    echo "<br>";
    asort($persons2);
    print_r($persons2);




    ?>

</body>

</html>
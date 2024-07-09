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
            font-size: x-large;
        }
    </style>
</head>

<body>
    <?php
    ///Task1
    // •  Create an indexed array with ten different cities.
    // •  Print all elements of the array in reverse order.
    // •  Find and print the index of a specific city in the array.
    // •  Remove a city from the array by its value.
    // •  Slice the array to get a sub-array of the first three cities.
    echo "<br>";
    echo "<br>";
    echo 'Task1';
    echo "<hr>";
    $cities = ["California", "Texas", "New York", "Florida", "Pennsylvania", "Illinois", "Ohio", "Georgia", "Michigan", "Washington"];

    print_r(array_reverse($cities));
    echo "<br>";
    print_r($cities[2]);
    echo "<br>";
    $removeCity = ["Michigan"];
    print_r(array_diff($cities, $removeCity));
    echo "<br>";
    print_r(array_slice($cities, 1, 3));

    ///Task2
    // •  Create an associative array to store the products and their prices.
    // •  Print the array sorted by product names.
    // •  Print the array sorted by prices.
    // •  Calculate and print the average price of all products.
    // •  Find and print the most expensive product.
    echo "<br>";
    echo "<br>";
    echo 'Task2';
    echo "<hr>";
    $products = [
        "groundBeef" => 25,
        "ribs" => 15.25,
        "turkey" => 5.99,
        "koko" => 0.15,
    ];
    $maxPrice = 0;
    $maxProduct = '';

    foreach ($products as $product => $price) {
        if ($price > $maxPrice) {
            $maxPrice = $price;
            $maxProduct = $product;
        }
    }
    echo "The most expensive product is $maxProduct which costs $maxPrice";

    echo "<br>";
    echo "<br>";
    ksort($products);
    print_r($products);
    echo "<br>";
    $price = array_sum($products);
    $countProdcuts = count($products);
    $averagePrice = $price / $countProdcuts;
    foreach ($products as $products => $price) {
        echo "$products: $price USD\n";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo 'Task3';
    echo "<hr>";
    // •  Create a multidimensional array to store a list of books (title, author, year).
    // •  Print the details of all books published after 2010.
    // •  Add a new book to the array and print the updated array.
    // •  Update the author of a specific book and print the updated array.
    // •  Sort the books by title and print the sorted array.

    // •  Create a multidimensional array to store a list of books (title, author, year). 
    $books = [
        [
            "title" => "PHP in 100 days",
            "author" => "Ala",
            "year" => 2012
        ],
        [
            "title" => "koko and the bears",
            "author" => "koko",
            "year" => 2020
        ],
        [
            "title" => "C++ with Abdalrhman Al-tamimi",
            "author" => "Abdalrhman Al-tamimi",
            "year" => 2013
        ],
        [
            "title" => "how to sleep",
            "author" => "uknown",
            "year" => 2000
        ]
    ];
    echo "<br>";
    echo "<br>";
    // •  Print the details of all books published after 2010.
    foreach ($books as $book) {
        if ($book["year"] > 2010) {
            echo "Title: " . $book["title"] . "<br>, Author: " . $book["author"] . "<br>, Year: " . $book["year"] . "<br>";
        }
    }
    echo "<br>";
    echo "<br>";
    // •  Add a new book to the array and print the updated array.
    $newbook = [
        "title" => "new book",
        "author" => "uknown",
        "year" => 2050

    ];
    $books[] = $newbook;
    foreach ($books as $book) {
        if ($book["year"] > 2010) {
            echo "Title: " . $book["title"] . "<br>, Author: " . $book["author"] . "<br>, Year: " . $book["year"] . "<br>";
        }
    }
    echo "<br>";
    echo "<br>";
    // •  Update the author of a specific book and print the updated array.
    $books[1]["title"] = "how to eat";
    echo "<br>";
    echo "<br>";
    foreach ($books as $book) {
        if ($book["year"] > 2010) {
            echo "Title: " . $book["title"] . "<br>, Author: " . $book["author"] . "<br>, Year: " . $book["year"] . "<br>";
        }
    }
    // •  Sort the books by title and print the sorted array.
    echo "<br>";
    echo "<br>";
    usort($books, function ($a, $b) {
        return strcmp($a['title'], $b['title']);
    });
    print_r($books);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo 'Task4';
    echo "<hr>";
    // •  Use array_map() to convert all elements of an indexed array to uppercase.
    // •  Use array_filter() to filter out elements of an array that do not meet a condition.
    // •  Use array_reduce() to find the sum of all values in an indexed array.
    // •  Use array_walk() to apply a function to all elements of an array.
    // •  Use array_diff() to find the difference between two arrays.
    // •  Use array_intersect() to find the common elements between two arrays.
    // •  Use array_combine() to create an associative array from two indexed arrays.
    // •  Use array_column() to get a specific column from a multidimensional array.
    // •  Use array_slice() to extract a portion of an array.
    // •  Use in_array() to check if a value exists in an array.

    //the arrays we going to use :) 
    $indexed = ["apple", "koko", "cherry", "pear"];
    $indexedNum = [10, 50, 5, 22, 52, 2, 35, 10, 3];
    $keyANDvalueArray = ["apple" => 50, "koko" => 20, "cherry" => 40, "pear" => 8];
    $fruite01 = ["apple" => 50, "koko" => 20, "cucumber" => 40, "grape" => 8];
    $fruite02 = ["apple" => 52, "koko" => 5, "cherry" => 30, "pear" => 20];
    $mutilArray = [
        ["user1" => 01, "age" => 25, "car" => "bmw"],
        ["user2" => 02, "age" => 30, "car" => "marc"],
        ["user3" => 03, "age" => 40, "car" => "tot"],
    ];
    //  •  Use array_map() to convert all elements of an indexed array to uppercase.
    $uppercased = array_map('strtoupper', $indexed);

    print_r($uppercased);
    echo "<br>";
    // •  Use array_filter() to filter out elements of an array that do not meet a condition.
    function filtering($var)
    {
        return strlen($var) >= 5;
    }
    $filtered = array_filter($indexed, "filtering");
    echo "<br>";
    print_r($filtered);
    echo "<br>";
    // •  Use array_reduce() to find the sum of all values in an indexed array.
    function summing($var1, $var2)
    {
        return $var1 + $var2;
    }
    $total = array_reduce($indexedNum, "summing");
    print_r($total);
    echo "<br>";
    // •  Use array_walk() to apply a function to all elements of an array.

    function letsWalk($key, $value)
    {
        echo "The key $key has the value $value<br>";
    }
    print_r(array_walk($keyANDvalueArray, "letsWalk"));
    echo "<br>";
    // •  Use array_diff() to find the difference between two arrays.


    $diffrents = array_diff($fruite01, $fruite02);
    print_r($diffrents);
    echo "<br>";
    // •  Use array_intersect() to find the common elements between two arrays.

    $intersect = array_intersect($fruite01, $fruite02);
    print_r($intersect);
    echo "<br>";
    // •  Use array_combine() to create an associative array from two indexed arrays.

    $combinethefruties = array_combine($fruite01, $fruite02);
    print_r($combinethefruties);
    echo "<br>";
    // •  Use array_column() to get a specific column from a multidimensional array.

    $get_car = array_column($mutilArray, 'car');
    print_r($get_car);
    echo "<br>";
    // •  Use array_slice() to extract a portion of an array.

    print_r(array_slice($indexed, 2));
    echo "<br>";
    // •  Use in_array() to check if a value exists in an array.
    if (in_array("koko",$indexed)) {
        echo "koko is safe and sound !";
    }else{
        echo "koko is not found !!!";
    };

        // •  end of the task file :-) 





















    ?>

</body>

</html>
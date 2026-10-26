<?php

// Data types  and type casting in php

/**
 * php a loosly type language which means the type can change after it has been defined.
 * Dynamically typed language means that the type checking happens on the run time and not at compile time.
 */

# Scalar data types in php
# bool - this will hold either true or false
$isComplete = true; // this is a boolean variable
# int - this will hold whole numbers either positive or negative no decimal point 1, 2, 3, 4, 5 -5 -2 
$score = 10; // this is an integer variable
# float - this will hold decimal numbers 0.3, 0.2. this can also be called double or real numbers
$price = 10.5; // this is a float variable
# string - this will hold a sequence of characters
$name = "John Doe"; // this is a string variable

echo $isComplete . "<br>"; // this will output: 1 which means true
echo $score . "<br>"; // this will output: 10
echo $price . "<br>"; // this will output: 10.5
echo $name . "<br>"; // this will output: John Doe

// to get the type of a variable, we use the gettype() function, it accepts one parameter, the variable name and returns the type of the variable.

echo '<h3>Getting the Data Types</h3> ' . "<br>";

echo gettype($isComplete) . "<br>"; // this will output: boolean
echo gettype($score) . "<br>"; // this will output: integer
echo gettype($price) . "<br>"; // this will output: double
echo gettype($name) . "<br>"; // this will output: string

// var_dump() function is used to get the type and value of a variable, it accepts one parameter, the variable name and returns the type and value of the variable.
echo '<h3>Using var_dump()</h3> ' . "<br>";
var_dump($isComplete);
var_dump($score);
var_dump($price);
var_dump($name);

# Compound data types in php
# array - this will hold a collection of values. it can hold values of different data types. it can be indexed or associative array. it is just a list of items.
$companies = ["Google", "Facebook", "Twitter"]; // this is an indexed array
# to print an array, we can use the print_r() function, it accepts one parameter, the array name and returns the array in a readable format. Using var_dump() function will also print the array in a readable format. but print_r() function is more readable than var_dump() function. using echo will not print the array in a readable format. it will just print the word "Array" and print an error.
echo '<h3>Using print_r()</h3> ' . "<br>";

print_r($companies);

echo '<h3>Using var_dump()</h3> ' . "<br>";
var_dump($companies);

    # object
    # callable
    # iterable


# Special data types in php
    # resource
    # null

// How php handles data types
/**
 * Php will automatically determine the data type of the variable during the run time.  
 */

// Type hinting in php
/**
 * Type hinting is a way to specify the data type of a variable or a function parameter. This can be done by using the type declaration syntax. Type hinting is used to ensure that the variable or function parameter is of the specified data type. If the variable or function parameter is not of the specified data type, a TypeError will be thrown. Type hinting can be used with scalar data types, compound data types, and special data types. Type hinting can also be used with classes and interfaces. Type hinting can be used with function parameters, return types, and class properties. Type hinting can also be used with nullable types, which means that the variable or function parameter can be of the specified data type or null. Type hinting can also be used with union types, which means that the variable or function parameter can be of one of the specified data types.
 */

declare(strict_types=1); // this will enable strict type checking. this means that the variable or function parameter must be of the specified data type. if the variable or function parameter is not of the specified data type, a TypeError will be thrown.

function addNumbers(int $a, int $b): int
{
    return $a + $b;
}

// type casting in php

/**
 * Type casting is a way to convert a variable from one data type to another. This can be done by using the type casting syntax. Type casting can be used with scalar data types, compound data types, and special data types. Type casting can also be used with classes and interfaces. Type casting can be used with function parameters, return types, and class properties. Type casting can also be used with nullable types, which means that the variable or function parameter can be of the specified data type or null. Type casting can also be used with union types, which means that the variable or function parameter can be of one of the specified data types.
 */

$x = (int) "10"; // this will convert the string "10" to an integer 10
$y = (float) "10.5"; // this will convert the string "10.5" to a float 10.5
$z = (string) 10; // this will convert the integer 10 to a string "10"
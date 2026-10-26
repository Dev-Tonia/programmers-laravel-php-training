<?php
echo "Hello, World!";
// echo is used to output data. 
// php varaibles are used to store data.
// naming a variable in php is done by using the $ sign followed by the variable name.

$name = " John Doe"; // this is a string variable
$age = 10; // this is an integer variable

echo "My name is " . $name . " and I am " . $age . " years old."; // this will output: My name is John Doe and I am 10 years old.

// rules when naming a variable in php
/**
 * 1. variable names must start with a letter or an underscore.
 * 2. variable names can only contain letters, numbers, and underscores.
 * 3. variable names are case-sensitive.
 * 4. variable names should be descriptive and meaningful.
 * 5. variable names should not be a reserved word.
 */

// in php variables are assign by value 
// but if you want to assign a variable by reference in php you can use the & sign before the variable name.

$y = 5;
$x = &$y; // this will assign the value of $y to $x by reference. this means that if you change the value of $y, the value of $x will also change.
// how to print a variable  in a more reabale way. by adding a curly braces around the variable name. this is called variable parsing. it allows you to use variables inside strings without having to concatenate them with the string.



echo "My name is $name and I am {$age} years old."; // this will output: My name is John Doe and I am 10 years old.

// echo 'Hello' . $name; // this will output: Hello John Doe where the dot operator is used to concatenate the string with the variable.

?>

<!-- how to run php inside the HTML -->

<!-- you call the php opening and closing tags inside the php tag <?php ?> or you use the short tag -->

<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>

    <h1>Welcome <?= $name ?></h1>
    <p>This is a paragraph.</p>

</body>

</html>
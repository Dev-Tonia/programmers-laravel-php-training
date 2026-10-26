<?php

/* BOOLEANS */

/**
 * booleans allows to assign either true or false to a variable. they are used in conditional statements to control the flow of the program.
 * 
 * true and false are predefined constants in php. they are case-insensitive. true can be written as TRUE, True, tRuE, etc. and false can be written as FALSE, False, fAlSe, etc.
 */

$isComplete = true;
$isAvailable = false;

// data types that could be converted to boolean by php and they could either be true or false 

# integers --> 0  or -0 = false, any other number is true
# floats --> 0.0 or -0.0 = false, any other number is true
# strings --> "" or '0' = false, any other string is true
# arrays --> [] = false, any other array is true
# special types --> null = false, any other special type is true

if ($isComplete) {
    echo "The task is complete." . "<br>";
} else {
    echo "The task is not complete." . "<br>";
}

if ($isAvailable) {
    echo "The item is available." . "<br>";
} else {
    echo "The item is not available." . "<br>";
}

// ways to check if a variable is boolean or not in php
/**
 * 1. is_bool() function - this function accepts one parameter, the variable name and returns true if the variable is boolean and false if it is not.
 * 2. gettype() function - this function accepts one parameter, the variable name and returns the type of the variable.
 * 3. var_dump() function - this function accepts one parameter, the variable name and returns the type and value of the variable.
 */

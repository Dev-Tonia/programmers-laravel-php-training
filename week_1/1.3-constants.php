<?php
// CONSTANTS IN PHP

/**
 * constants are similar to variables except that they cannot be changed or undefined once they have been defined. constants are useful for storing values that should not be changed during the execution of a script.
 * 
 * you define a constant by using the define function, it accepts two parameters, the name of the constant and its value. the name of the constant should be in uppercase letters and should not start with a number.
 * 
 * a constant can be accessed anywhere in the script without the need to use the $ sign. you can also use the const keyword to define a constant, but it can only be used inside a class or an interface.
 * 
 * to check if a constant is defined or not, you can use the defined function, it accepts one parameter, the name of the constant and returns true if the constant is defined and false if it is not.
 * 
 * echo defined("SITE_NAME") ? "SITE_NAME is defined" : "SITE_NAME is not defined"; // this will output: SITE_NAME is defined
 * 
 * you can also define constants using the const keyword.
 */



define("SITE_NAME", "My Website");
echo SITE_NAME . "<br>"; // this will output: My Website

// to check if a constsant is defined or not,

echo defined("SITE_NAME");   // this is will output: 1 which means true, if the constant is defined and false if it is not.

// the major difference between using const and define to declare variable 

/**
 * 1. const can only be used inside a class or an interface, while define can be used anywhere in the script.
 * 2. const is case-sensitive, while define is not case-sensitive.
 * 3. const can be used to define constants with scalar values, while define can be used to define constants with any type of value.
 * 4. const is faster than define because it is resolved at compile time, while define is resolved at runtime.
 * you can use the const keyword on the control structures like if, else, while, for, etc. but define cannot be used on control structures.
 */

// Using variables as constants

$paid = "PAID";

define('STATUS_' .  $paid, $paid);


// when to use constants and when to use variables
/**
 * when you have values that does not need to change 
 * 
 */

// some pre-defined constants in php

echo PHP_VERSION . "<br>"; // this will output the current version of php installed on the server.
echo PHP_OS . "<br>"; // this will output the operating system on which php is running.
echo PHP_EOL . "<br>"; // this will output the end of line character for the current operating system.

// some magic constants in php
// this is a special type of constant that changes depending on where it is used. they are useful for debugging and for getting information about the current script.


echo __LINE__ . "<br>"; // this will output the current line number of the script.
echo __FILE__ . "<br>"; // this will output the full path and filename of the current file.
echo __DIR__ . "<br>"; // this will output the directory of the current file.


// variable variables in php
/**
 * variable variables are a way to use the value of a variable as the name of another variable. this can be useful in certain situations where you want to create dynamic variable names based on user input or other data.
 */

$isEvening = "evening";
$$isEvening = "Good Evening!"; // this will create a variable called $evening and assign it the value "Good Evening!"

echo $evening . "<br>"; // this will output: Good Evening!
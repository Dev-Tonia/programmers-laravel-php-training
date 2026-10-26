<?php
/* INTEGERS */

/**
 * integers are numbers can either positive or negative without decimal .
 * 
 * 
 * the size of an integer is platform-dependent, although a maximum value of about two billion is the usual value (that's 32 bits signed). 32-bit platforms use 4 bytes and 64-bit platforms use 8 bytes.
 * 
 * 
 * 32-bit platforms: -2,147,483,648 to 2,147,483,647
 * 64-bit platforms: -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807
 */

// to check the min and max value of an integer, we can use the PHP_INT_MIN and PHP_INT_MAX constants. these constants are pre-defined in php and they return the minimum and maximum value of an integer respectively.
PHP_INT_MAX; // this will output the maximum value of an integer
PHP_INT_MIN; // this will output the minimum value of an integer

// integers can be defined as
# base 10  --> $x = 5  
# hexadecimal  --> $x = 0x1A; // this is a hexadecimal number. it starts with 0x and it can contain numbers from 0 to 9 and letters from A to F. A = 10, B = 11, C = 12, D = 13, E = 14, F = 15
# octal  --> $x = 012; // this is an octal number.
# binary  --> $x = 0b1010; // this is a binary number. it starts with 0b and it can only contain numbers 0 and 1.

// when integer overflow occurs
/**
 * when the integer value exceeds the maximum value of an integer, it will be converted to a float. this is called integer overflow. when the integer value is less than the minimum value of an integer, it will also be converted to a float. this is called integer underflow.
 */


// How integers are stored in memory
/**
 * integers are stored in memory as a sequence of bits. the number of bits used to store an integer depends on the platform and the size of the integer.
 */

//How to cast integers to other data types
/**
 * boolean true when converted to integer is 1 while boolean false when converted to int is 0
 */
$a = (int) true; // this is will be converted to 1
$b = (int) false; // this is will be converted to 0

$c = (int) 10.5; // this will be converted to 10, the float will be rounded down to the nearest integer and it will lose the decimal part. this is called type casting. when a float is converted to an integer, the decimal part will be truncated and the integer part will be returned.

$d = (int) '5.9'; // this will cast as 5, cos the .9 will be removed
$f = (int) '67'; //  will be converted to a number
$t = (int) "56eeeerbgf"; // will take the first letters it can get, 
$r = (int) "fhfhh45"; // this will be converted into 0 as it will read as string not withstanding the number in it. cos the system saw the strings first.
//when the system try's to convert the string to int it will be zero.

$h = (int) null; // this will be cast to true

$w = 200_000; // this is helpful when writing a large number, it helps to add readability  but when turn it into string it will not work.



$x = 10; // this is an integer variable
$y = (float) $x; // this will cast the integer to a float
$z = (string) $x; // this will cast the integer to a string

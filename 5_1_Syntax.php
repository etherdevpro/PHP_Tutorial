<!-- Constants can be defined using the const keyword, or by using the define()-function. 
 While define() allows a constant to be defined to an arbitrary expression, 
 the const keyword has restrictions as outlined in the next paragraph. 
 Once a constant is defined, it can never be changed or undefined. -->
 
 <!-- Defining Constants -->

<?php
// define("CONSTANT", "Hello world.");
// echo CONSTANT; // outputs "Hello world."
// echo Constant; // Emits an Error: Undefined constant "Constant"
               // Prior to PHP 8.0.0, outputs "Constant" and issues a warning.
?>

<!-- Defining Constants using the const keyword -->
<?php
// Simple scalar value
const CONSTANT = 'Hello World';

echo CONSTANT;

// Scalar expression
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat"

// Constant arrays
// define('ANIMALS', array(
//     'dog',
//     'cat',
//     'bird'
// ));
echo ANIMALS[1]; // outputs "cat"
?>
<h2>Introduction</h2>
<!-- Every single expression in PHP has one of the following built-in types depending on its value:

null
bool
int
float (floating-point number)
string
array
object
callable
resource -->

<?php
$a_bool = true;   // a bool
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int

// echo get_debug_type($a_bool), "\n";
// echo get_debug_type($a_str), "\n";

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// If $a_bool is a string, print it out
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>
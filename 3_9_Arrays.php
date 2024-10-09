<p>An array in PHP is actually an ordered map. 
    A map is a type that associates values to keys. 
    This type is optimized for several different uses; 
    it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, 
    stack, queue, and probably more. As array values can be other arrays, trees and multidimensional arrays are also possible.</p>


<!-- Simple array -->
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Using the short array syntax
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
?>

<!-- Type Casting and Overwriting example -->
<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
?>

<!-- Mixed int and string keys -->

<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
?>

<!-- Indexed arrays without key -->

<?php
$array = array("foo", "bar", "hello", "world");
var_dump($array);
?>

<!-- Keys not on all elements -->

<?php
$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array);
?>

<!-- Complex Type Casting and Overwriting example -->

<?php
$array = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);

var_dump($array);
?>

<!-- Accessing array elements -->

<?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>

<!-- Array dereferencing -->

<?php
function getArray() {
    return array(1, 2, 3);
}

$secondElement = getArray()[1];
?>

<!-- To change a certain value, assign a new value to that element using its key. 
 To remove a key/value pair, call the unset() function on it. -->

<?php
$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"
                
unset($arr[5]); // This removes the element from the array

unset($arr);    // This deletes the whole array
?>

<?php
// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);

// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);
?>

<!-- Array destructuring -->

<?php
$source_array = ['foo', 'bar', 'baz'];

[$foo, $bar, $baz] = $source_array;

echo $foo;    // prints "foo"
echo $bar;    // prints "bar"
echo $baz;    // prints "baz"
?>
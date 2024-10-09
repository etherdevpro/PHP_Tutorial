<!-- The scope of a variable is the context within which it is defined. 
 For the most part all PHP variables only have a single scope. 
 This single scope spans included and required files as well. -->

<?php
$a = 1;
include 'b.inc';
?>

<!-- Here the $a variable will be available within the included b.inc script. 
 However, within user-defined functions a local function scope is introduced. 
 Any variable used inside a function is by default limited to the local function scope.  -->

 <!-- Using global -->
<?php
$a = 1;
$b = 2;

// function Sum()
// {
//     global $a, $b;

//     $b = $a + $b;
// } 

Sum();
echo $b;
?>

<!-- Using $GLOBALS instead of global -->

<?php
$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();
echo $b;
?>

<!-- demonstrating superglobals and scope -->

<?php
function test_superglobal()
{
    echo $_POST['name'];
}
?>

<!-- Using static variables -->

<?php
function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
}
?>

<!-- Usage of static Variables in Inherited Methods -->

<?php
class Foo {
    public static function counter() {
        static $counter = 0;
        $counter++;
        return $counter;
    }
}
class Bar extends Foo {}
var_dump(Foo::counter()); // int(1)
var_dump(Foo::counter()); // int(2)
var_dump(Bar::counter()); // int(3), prior to PHP 8.1.0 int(1)
var_dump(Bar::counter()); // int(4), prior to PHP 8.1.0 int(2)
?>


<!-- References with global and static variables -->

<?php
function test_global_ref() {
    global $obj;
    $new = new stdClass;
    $obj = &$new;
}

function test_global_noref() {
    global $obj;
    $new = new stdClass;
    $obj = $new;
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);
?>

<!-- A similar behaviour applies to the static statement. References are not stored statically: -->

<?php
function &get_instance_ref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        $new = new stdClass;
        // Assign a reference to the static variable
        $obj = &$new;
    }
    if (!isset($obj->property)) {
        $obj->property = 1;
    } else {
        $obj->property++;
    }
    return $obj;
}

function &get_instance_noref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        $new = new stdClass;
        // Assign the object to the static variable
        $obj = $new;
    }
    if (!isset($obj->property)) {
        $obj->property = 1;
    } else {
        $obj->property++;
    }
    return $obj;
}

$obj1 = get_instance_ref();
$still_obj1 = get_instance_ref();
echo "\n";
$obj2 = get_instance_noref();
$still_obj2 = get_instance_noref();
?>
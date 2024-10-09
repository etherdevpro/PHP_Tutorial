<!-- To create a new object, use the new statement to instantiate the class: -->
<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
?>

<!-- Converting to Object -->
<?php
$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
var_dump(key($obj)); // outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously
?>

<!-- For any other value, a member variable named scalar will contain the value. -->
<?php
$obj = (object) 'ciao';
echo $obj->scalar;  // outputs 'ciao'
?>
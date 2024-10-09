<!-- Sometimes it is convenient to be able to have variable variable names. 
 That is, a variable name which can be set and used dynamically. 
 A normal variable is set with a statement such as: -->

<?php
$a = 'hello';
?>

<!-- A variable variable takes the value of a variable and treats that as the name of a variable. 
 In the above example, hello, can be used as the name of a variable by using two dollar signs. i.e. -->

<?php
$$a = 'world';
?>

<!-- At this point two variables have been defined and stored in the PHP symbol tree: 
 $a with contents "hello" and $hello with contents "world". Therefore, this statement: -->

<?php
echo "$a {$$a}";
?>

<!-- produces the exact same output as: -->
<?php
echo "$a $hello";
?>
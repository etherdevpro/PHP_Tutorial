<h2>Booleans</h2>
<p>The bool type only has two values, and is used to express a truth value. It can be either true or false.</p>
<p>To specify a bool literal, use the constants true or false. Both are case-insensitive.</p>
<?php
    $foo = True; // assign the value TRUE to $foo
?>
<p>Typically, the result of an operator which returns a bool value is passed on to a control structure.</p>
<?php
    // == is an operator which tests
    // equality and returns a boolean
    if ($action == "show_version") {
        echo "The version is 1.23";
    }

    // this is not necessary...
    if ($show_separators == TRUE) {
        echo "<hr>\n";
    }

    // ...because this can be used with exactly the same meaning:
    if ($show_separators) {
        echo "<hr>\n";
    }
?>
### 8. Control Structures

#### if
```
if (expr)
  statement
```
for example
```
<?php
if ($a > $b)
  echo "a is bigger than b";
?>
```
#### else
```
<?php
if ($a > $b) {
  echo "a is greater than b";
} else {
  echo "a is NOT greater than b";
}
?>
```
```
<?php
$a = false;
$b = true;
if ($a)
    if ($b)
        echo "b";
else
    echo "c";
?>
```
#### elseif/else if
```
<?php
if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}
?>
```
#### Alternative syntax for control structures
```
<?php if ($a == 5): ?>
A is equal to 5
<?php endif; ?>
```
```
<?php
if ($a == 5):
    echo "a equals 5";
    echo "...";
elseif ($a == 6):
    echo "a equals 6";
    echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;
?>
```
#### while
```
while (expr)
    statement


while (expr):
    statement
    ...
endwhile;
```
```
<?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

/* example 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>
```
#### do-while
```
<?php
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
```
#### for
```
for (expr1; expr2; expr3)
    statement
```
```
<?php
/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* example 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* example 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>
```
#### foreach
```
foreach (iterable_expression as $value)
    statement
foreach (iterable_expression as $key => $value)
    statement
```
```
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
?>
```
#### break
```
<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == 'stop') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}

/* Using the optional argument. */

$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "At 5<br />\n";
            break 1;  /* Exit only the switch. */
        case 10:
            echo "At 10; quitting<br />\n";
            break 2;  /* Exit the switch and the while. */
        default:
            break;
    }
}
?>
```
#### continue
```
<?php
$arr = ['zero', 'one', 'two', 'three', 'four', 'five', 'six'];
foreach ($arr as $key => $value) {
    if (0 === ($key % 2)) { // skip members with even key
        continue;
    }
    echo $value . "\n";
}
?>
```
#### switch
```
<?php
// This switch statement:

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

// Is equivalent to:

if ($i == 0) {
    echo "i equals 0";
} elseif ($i == 1) {
    echo "i equals 1";
} elseif ($i == 2) {
    echo "i equals 2";
}
?>
```
#### match
```
<?php
$return_value = match (subject_expression) {
    single_conditional_expression => return_expression,
    conditional_expression1, conditional_expression2 => return_expression,
};
?>
```
```
<?php
$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);
?>
```
```
<?php
$age = 18;

$output = match (true) {
    $age < 2 => "Baby",
    $age < 13 => "Child",
    $age <= 19 => "Teenager",
    $age > 19 => "Young adult",
    $age >= 40 => "Old adult"
};

var_dump($output);
?>
```
#### declare
```
declare (directive)
    statement
```
```
<?php
// This is valid:
declare(ticks=1);

// This is invalid:
const TICK_VALUE = 1;
declare(ticks=TICK_VALUE);
?>
```
#### return

#### require
#### include
#### require_once
#### include_once
#### goto
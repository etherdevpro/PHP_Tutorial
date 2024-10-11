Expressions are the most important building blocks of PHP. In PHP, almost anything you write is an expression. The simplest yet most accurate way to define an expression is "anything that has a value".


Slightly more complex examples for expressions are functions. For instance, consider the following function:

```
<?php
function foo ()
{
    return 5;
}
?>
```
There is one more expression that may seem odd if you haven't seen it in other languages, the ternary conditional operator:
```
<?php
$first ? $second : $third
?>
```

The following example should help you understand pre- and post-increment and expressions in general a bit better:
```
<?php
function double($i)
{
    return $i*2;
}
$b = $a = 5;        /* assign the value five into the variable $a and $b */
$c = $a++;          /* post-increment, assign original value of $a 
                       (5) to $c */
$e = $d = ++$b;     /* pre-increment, assign the incremented value of 
                       $b (6) to $d and $e */

/* at this point, both $d and $e are equal to 6 */

$f = double($d++);  /* assign twice the value of $d before
                       the increment, 2*6 = 12 to $f */
$g = double(++$e);  /* assign twice the value of $e after
                       the increment, 2*7 = 14 to $g */
$h = $g += 10;      /* first, $g is incremented by 10 and ends with the 
                       value of 24. the value of the assignment (24) is 
                       then assigned into $h, and $h ends with the value 
                       of 24 as well. */
?>
```
<!-- Basic Enumerations -->
<!-- Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type. -->
<?php
enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $s)
{
    // ...
}

do_stuff(Suit::Spades);
?>
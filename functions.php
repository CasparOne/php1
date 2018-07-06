<?php
/**
 * Created by PhpStorm.
 * User: caspar
 * Date: 05.07.2018
 * Time: 17:21
 */

/** Function @Discriminan calculates discriminant of quadratic equation */
function Discriminant ($a, $b, $c)
{
    $D = (($b**2) - (4 * $a * $c));
    return $D;
}


/** Assertation @Discriminant function -- only for Dev.
 * In production should be removed */

assert(16 === Discriminant(1, -8, 12));
assert( -131 ===  Discriminant(5, 3, 7));
assert(0 === Discriminant(1, -6, 9));


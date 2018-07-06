<?php
/**
 * Created by PhpStorm.
 * User: caspar
 * Date: 05.07.2018
 * Time: 17:21
 */

/** Function @Discriminan calculates discriminant of quadratic equation.
 * $a - first member $b - second member $c - third member
 $D - returned value of Discriminant */
function Discriminant ($a, $b, $c)
{
    $D = (($b**2) - (4 * $a * $c));
    return $D;
}

/** Function determines gender by input name
 $name - name of person
 $gender - returned value of gender */
function GenderDetection($name)
{
    $last2Chr = substr($name, -4);
    $last1Chr = substr($name, -2);


    switch (true) {
        case $last1Chr == 'а':
        case $last2Chr == 'ия' || $last2Chr == 'ья' || $last2Chr == 'ея' || $last2Chr == 'са':
            $gender = 'Female';
            break;
        default:
            $gender = 'Male';
    }
    return $gender;
}


/** Assertation @Discriminant function -- only for Dev.
 * In production should be removed */

assert(16 === Discriminant(1, -8, 12));
assert( -131 ===  Discriminant(5, 3, 7));
assert(0 === Discriminant(1, -6, 9));




<?php
/**
 * Created by PhpStorm.
 * User: vvolo
 * Date: 07.07.2018
 * Time: 14:28
 */
function Subtraction($first, $second)
{
    if (!is_int($first) || !is_int($second) || !is_float($first) || !is_float($second)) {
        unset($res);
        return $error = 1;
    }

    return $first - $second;
}
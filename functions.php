<?php


/** Функция вычитания. Выполняется замена ',' на '.' Таким образом, пользователь может ввести дюбой разделитель*/
function Subtraction($first, $second)
{
    $first = str_replace(',', '.', $first);
    $second = str_replace(',', '.', $second);
    return ((float)$first - (float)$second);
}

/** Функция выполняет суммирования 2х числе, приведенных к типу float. */
function Summarry($first, $second)
{
    $first = str_replace(',', '.', $first);
    $second = str_replace(',', '.', $second);
    return ((float)$first + (float)$second);
}

/** Функиця выполняет деление 2х числе. */
function Division($first, $second)
{
    $first = str_replace(',', '.', $first);
    $second = str_replace(',', '.', $second);
        return ((float)$first / (float)$second);

}

/** Функция умножения 2х числе. */
function Multiple($first, $second)
{
    $first = str_replace(',', '.', $first);
    $second = str_replace(',', '.', $second);
    return ((float)$first * (float)$second);
}
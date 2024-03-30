<?php

$Reg_Exp_Task_1b = '/[0-9]+/';
$str2 = 'a1b2c3';

// Функция, которая возводит число в куб
function cube($number)
{
    return $number[0] * $number[0] * $number[0];
}

echo preg_replace_callback($Reg_Exp_Task_1b, "cube", $str2), "\n";
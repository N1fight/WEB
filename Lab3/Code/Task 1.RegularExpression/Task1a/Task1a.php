<?php

$Reg_Exp_Task_1a = '/a..b/';
// Данная в условии строка
$str1 = 'ahb acb aeb aeeb adcb axeb';

preg_match_all($Reg_Exp_Task_1a, $str1, $found1);
var_dump($found1);


<?php

#1 пункт. Вывод числовой целочисленной переменной
$int_num = 1;
echo $int_num;
echo "\n";

# 2 пункт. Вывод переменной с плавующей запитой в новую строку
$float_num = 2.718281828459045235360; 
echo $float_num;
echo "\n";

# 3 пункт. С помощью сложение получил число 12, без написания его самого
echo 1 + 2 + 4 + 5;
echo "\n";

# 4 пункт. Задаём переменные $last_month и $this_month, отвечающие за расходы в месяце. И считаем 
$last_month = 1187.23;
$this_month = 1089.98;
echo "This is the differents between money i spend in last mounth and in this mounth " . ($last_month - $this_month);
echo "\n";

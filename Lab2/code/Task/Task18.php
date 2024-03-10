<?php

#функция Sum10, которая параметрами принимает 2 числа.
# Если их сумма больше 10 - функция вернет true, а если нет - false.

function Sum10($num1, $num2)
{
        return $num1 + $num2 > 10;
}

# функция Equal2num, которая параметрами принимает 2 числа.
# Если эти числа равны - пусть функция вернет true, а если не равны - false
function Equal2num($num1, $num2)
{
        return $num1 == $num2;
}

# Сокращённая форма
$test = 0;
echo ($test == 0 ? "верно\n": "");


# Переменная $age
$age = 19;
if ($age < 10 || $age > 99)
{
    echo "Возраст меньше 10 или больше 99\n";
}
else
{
    # Аналогично методу из 16 задания
    $sum_age = 0;
    $arr = str_split((string) $age);
    foreach ($arr as $value)
    {
        $sum_age += (int)$value;
    }
    if ($sum_age <= 9)
    {
        echo "Сумма цифр однозначна\n";
    }
    else
    {
        echo "Сумма цифр двузначна\n";
    }
}

# массив $arr
$arr = array(2024, 3, 10);
# (count($arr) - количество элементов в массиве $arr
if (count($arr) == 3)
{
    # Вывод суммы элементов по индексам
    echo $arr[0] + $arr[1] + $arr[2], "\n";
}
else
{
    echo "В массиве не 3 элемента\n";
}

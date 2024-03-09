<?php

#Функция increaseEnthusiasm(), которая принимает строковый параметр и возвращает эту строку, дополненную восклицательным знаком
function increaseEnthusiasm($string)
{
    return $string . "!";
}

echo increaseEnthusiasm("Kostya"), "\n";

# Функция repeatThreeTimes(), которая принимает строковый параметр и возвращает эту строку, повторенную три раза
function repeatThreeTimes($string)
{

    return $string . $string . $string;
}

echo repeatThreeTimes("kos"), "\n";
#Функция increaseEnthusiasm() + repeatThreeTimes()
echo increaseEnthusiasm(repeatThreeTimes("tul")), "\n";

# Функция cut, которая первым параметром будет принимать строку, а вторым параметром - сколько первых символов оставить в этой строке
function cut($string, $first_symbols=10)
{
    return substr($string, 0, $first_symbols);
}

echo cut("qwerty"), "\n";
echo cut("qwerty", 3), "\n";

# Функция для последовательного вывода элементов массива с помошью рекурсии
function print_Array($array, $index=0)
{
    echo $array[$index], " ";
    # Рекурсия
    if ($index + 1 < count($array))
    {
        print_Array($array, $index + 1);
    }
}
$array = array(13, 16, 21, 36, 9, 8, 5);
print_Array($array);
echo "\n";

#
function sum_of_9($num)
{
    $sum = 0;
    # массив $arr, который содержит разбитое на отдельные символы значение переменной $num
    $arr = str_split((string) $num);
    # цикл, в котором каждый элемент суммируется с переменной "$sum", приведенной к целочисленному типу.
    foreach($arr as $v)
    {
        $sum += (int) $v;
    }

    # Если сумма получится > 9, то рекурсивно вызываем функцию, иначе возвращаем значение $sum
    if ($sum > 9)
    {
        return sum_of_9($sum);
    }
    else return $sum;
}
# Пример для числа 1920
$num = 1920;
echo sum_of_9($num), "\n";

<?php

#На данный момент Мэг знает Ruby, Python, JavaScript и C++ => 4 языка
# Создаём переменные $num_languages ​​и присваеваем ей количество языков программирования, которые она выучила(4 языка). Создаём вторую переменную $months со значением 11 месяцев.
$num_languages = 4;
$months = 11;

# Создаём переменную $days и присваеваем ей значение, полученное путем умножения $months на количество дней в месяце, которое, по мнению Мег, она действительно провела за учебой, то есть 16 дней в месяц.
$days = $months * 16;

# Подсчитаем, сколько дней в среднем у нее ушло на изучение каждого языка (то есть кол-во дней, когда она изучала языки делим на кол-во языков) и присвоем результат этой операции переменной $days_per_language.
$days_per_language = $days / $num_languages;

# Выводим переменную $days_per_language( 44 дня)
echo $days_per_language, "\n";

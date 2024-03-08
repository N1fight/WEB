<?php

/* Imagine a lot of code here */

$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
# Добавляю новую переменную $order как ссылку(&) на переменную $very_bad_unclear_name + c помощью . добавляем
# к переменной $very_bad_unclear_name строку
$order =& $very_bad_unclear_name;
$order .= ", 1 KostyaBurger with sweet and sour sauce and Lipton iced tea";

// Don't change the line below

echo "\nYour order is: $very_bad_unclear_name.";

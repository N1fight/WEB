<?php

# Функия printStringReturnNumber, которая печает строку и возвращает числовое значение
function printStringReturnNumber() 
{
    echo "Возвращает числовое значение\n";
    return 19;
}

$my_num = printStringReturnNumber();
echo $my_num, "\n";

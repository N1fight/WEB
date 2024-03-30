<?php
// Начинаем сессию
session_start();

// Проверяем, установлены ли данные в сессии
if(isset($_SESSION['surname']) && isset($_SESSION['name']) && isset($_SESSION['age'])){
    // Получаем данные из сессии
    $surname = $_SESSION['surname'];
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];

    // Выводим данные на экран
    echo "Surname: $surname <br>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
} else
{
    echo "Данные не найдены в сессии.";
}
?>

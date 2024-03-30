<?php
// Начинаем сессию
session_start();

// Проверяем, была ли отправлена форма
if(isset($_POST['submit'])){
    // Получаем данные из формы
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $status = $_POST['status'];

    // Записываем данные в сессию в виде ассоциативного массива
    $_SESSION['userdata'] = array(
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'status' => $status
    );

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="age">Age:</label>
    <input type="number" name="age" id="age" required><br><br>

    <label for="salary">Salary:</label>
    <input type="number" name="salary" id="salary" required><br><br>

    <label for="status">Status:</label>
    <input type="text" name="status" id="status"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<p><a href="QuestionTask2c.php">View data</a></p>

</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Counting words and characters</title>
</head>
<body>

<form method="post">
    <label>
        <textarea name="text" rows="10" cols="40"></textarea>
    </label><br>
    <input type="submit" name="submit" value="COUNT">
</form>

<?php
if(isset($_POST['submit'])){

    $text = $_POST['text'];

    // Подсчет слов
    $word_count = str_word_count($text);

    // Подсчет символов (без учета пробелов)
    $char_count = strlen(str_replace(' ', '', $text));

    echo "Number of words: $word_count <br>";
    echo "Number of characters: $char_count";
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>задание 1</title>
</head>
<body>
<h1>Задание 1</h1>

<form method="POST" action="">
    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" required><br><br>
    
    <label for="age">Возраст:</label>
    <input type="number" name="age" id="age" min="1" max="120" required><br><br>
    
    <label for="gender">Пол:</label>
    <select name="gender" id="gender" required>
        <option value="">Выберите...</option>
        <option value="Мужской">Мужской</option>
        <option value="Женский">Женский</option>
    </select><br><br>
    
    <input type="submit" value="Отправить">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    echo "<p>Имя: $name</p>";
    echo "<p>Возраст: $age</p>";
    echo "<p>Пол: $gender</p>";
}

?>

<h1>Задание 2</h1>

<form method="POST" action="">
    <label for="num1">Число 1:</label>
    <input type="number" name="num1" id="num1" step="any" required><br><br>
    
    <label for="num2">Число 2:</label>
    <input type="number" name="num2" id="num2" step="any" required><br><br>
    
    <label for="num3">Число 3:</label>
    <input type="number" name="num3" id="num3" step="any" required><br><br>
    
    <input type="submit" value="Определить">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $min = min($num1, $num2, $num3);
    $max = max($num1, $num2, $num3);

    echo "<p>Минимальное число: $min</p>";
    echo "<p>Максимальное число: $max</p>";
}

?>

<h1>Задание 3</h1>

<form method="POST" action="">
    <label for="text">Введите текстовую строку:</label>
    <input type="text" name="text" id="text" required><br><br>
    
    <input type="submit" value="Заменить">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'];

    $outputText = str_replace(['а', 'к'], ['о', 'н'], $inputText);

    echo "<p>Исходная строка: $inputText</p>";
    echo "<p>Измененная строка: $outputText</p>";
}

?>

</body>
</html>
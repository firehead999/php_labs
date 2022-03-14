<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="POST">
    <label>
        Введите длину нижнего основания трапеции (в см.):
        <input type="number" name="a">

        <br>Введите длину верхнего основания трапеции (в см.):
        <input type="number" name="b">

        <br>Введите высоту трапеции (в см.):
        <input type="number" name="h">

        <br><input type="submit" value="Отправить" name="button_id">

        <br><input type="submit" name="button_id2" value="Сбросить результат" />
    </label>
</form>

<?php

if (isset($_POST['button_id'])) {
    $square = ($_POST['a'] + $_POST['b']) / 2 * $_POST['h'];  // S = (a + b) / 2 * h
    print('Площадь трапеции равна - ' . $square . ' см.');
}

if(isset($_POST['button_id2']))
{
    echo('  ');
}

?>
</body>
</html>

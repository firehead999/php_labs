<?php

include 'home.html';

if (isset($_POST['button'])) {
    $last_name = $_POST['last-name'];
    $first_name = $_POST['first-name'];
    $interests_of_the_user = $_POST['interests-of-the-user'];
    $switch = $_POST['switch'];
    $textarea = $_POST['textarea'];

    $file = fopen('file.txt', 'w+') or die('Файл сдох');
    fwrite($file, 'Фамилия пользователя: ' . $last_name . PHP_EOL);  # PHP_EOL = /n
    fwrite($file, 'Имя пользователя: ' . $first_name . PHP_EOL);
    fwrite($file, 'Интересы пользователя: ' . $interests_of_the_user . PHP_EOL);
    fwrite($file, 'Получать рассылку: ' . $switch . PHP_EOL);
    fwrite($file, 'Информация "о себе": ' . $textarea);
    fclose($file);


}

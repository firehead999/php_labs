<?php

include 'templates/home.html';

if (isset($_GET['button_id'])) {
    $p = ($_GET['A'] + $_GET['B'] + $_GET['C']) / 2;  // p = (a + b + c) / 2
    $square = sqrt($p * ($p * $_GET['A']) * ($p - $_GET['B']) * ($p - $_GET['C']));

    print('Площадь треугольника равна - ' . $square . ' см^2<br>');

    if ($_GET['A'] == $_GET['B']) {
        print('Треугольник является равнобедренным');
    } else {
        print('Треугольник не является равнобедренным');
    }
}

if (isset($_GET['button_id2'])) {
    print(' ');
}


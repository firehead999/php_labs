<?php

include 'templates/home.html';

if (isset($_POST['button_id'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if ($a + $b > $c) {
        if ($b + $c > $a) {
            if ($a + $c > $b) {
                print('Треугольник существует<br>');

                $p = ($a + $b + $c) / 2;

                $square = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));

                print('Площадь треугольника - ' . $square . 'см.');
            }
        } else {
            print('Треугольник с задаными сторонами не существует!');
        }

    } else {
        print('Треугольник с задаными сторонами не существует!');
    }
}

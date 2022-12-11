<?php

// * operadores aritméticos *
echo 9 + 10; // suma
echo 9 - 10; // resta
echo 9 * 10; // multiplicación
echo 9 / 10; // división
echo 9 % 10; // módulo
echo -10; // negación

// * operadores de asignación *
$num = 0;
echo $num += 20; // num = num + 20
echo $num -= 7; // num = num - 7
echo $num *= 10; // num = num * 10
echo $num /= 5; // num = num / 5
echo $num %= 2; // num = num % 2

// * operadores de comparación * 
$x = 3;
$y = "3";
echo $x == $y; // son iguales? solo compara el valor
echo $x === $y; // son iguales? compara el valor y el tipo de dato
echo $x != $y; // son diferentes? solo compara el valor
echo $x !== $y; // son diferentes? compara el valor y el tipo de dato
$z = 4;
echo $x < $z; // menor qué
echo $x > $z; // mayor qué
echo $x <= $z; // menor ó igual qué
echo $x >= $z; // mayor ó igual qué

// * operadores de incremento * 
echo $num++; // num + 1
echo $num--; // num - 1

// * operadores lógicos *
echo $x < $z && $x == $y; // es true si las dos condiciones se cumplen
echo $x > $z || $x === $y; // es true si alguna de las dos se cumplen
echo !true; // es false ya que es lo opuesto de true
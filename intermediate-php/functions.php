<?php

// * funciones *

/*
    las funciones son bloques de códigos los cuales permiten reutilizar código y que se vea más limpio
    además se pueden utilizar en otros archivos cuando se importan, reciben parammetros y también retornan
    valores
*/

function showString () {
    echo "la función showString se ejecutó";
}

showString();

// con parametros
function mathOperations($a, $b) {
    echo "el resultado de la suma es: ". ($a + $b);
    echo "el resultado de la resta es: ". ($a - $b);
    echo "el resultado de la multiplicación es: ". ($a * $b);
    echo "el resultado de la división es: ". ($a / $b);
    echo "el resultado del módulo es: ". ($a % $b);
}

mathOperations(10, 8);

// con condicionales
function isActive($active) {
    if($active === "si" || $active === "Si" || $active === "SI") {
        echo "activo";
    } else {
       echo "inactivo";
    }
}

isActive("si");

// con retorno
function retFunc() {
    return "my name is leonardo";
}

$presentation = retFunc();

echo $presentation;
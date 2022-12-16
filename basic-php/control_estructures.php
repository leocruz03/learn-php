<?php

// ! estructuras de control !

$num = 10;

// * condicionales *
if ($num === 10) {
    echo "num vale 10";
} // si
else if ($num === "10") {
    echo "num vale 10 pero es string";
} // si no, va después del if por si no se cumple y se quiere añadir otra condición
else {
    echo "no sé sabe el valor de num";
} // por si no se cumple ninguna de las condiciones establecidas, esta vandría siendo el default

// * bucles *

$count = 0;

/* 
    es mientras, es un bucle en el cual también se puede iterar y tiene una condición que se tiene 
    que cumplir para poder ejecutarse
*/
while($count <= 10) {
    echo "el valor de la variables es: ". $count;
    $count++;
}

/*
    es haz, mientras, es un bucle que se ejecutara al menos una vez así no se cumpla la condición
*/
do {
    echo "el valor de la variables es: ". $count;
    $count++;
} while($count <= 10);

/*
    es para, es un bucle que se usa para iterar objetos y arrays, y otras estructuras, es un bucle el cual
    crea una variable iteradora y podemos tener más el control al momento de iterar
*/

$num = 10;

for ($i = 0; $i <= $num; $i++) {
    echo "el valor del iterador es: ". $i;
}

/*
    es para cada, este bucle también es especialista para iterar y también permite tener más control
    al momento de hacerlo
*/

$arr = array(1, 2, 3, 4, 5);

foreach ($arr as $key => $n) {
    echo "el valor es: ". $n;
}

/*
    el break y el continue es para controlar un ciclo y normalmente se utiliza con condiciones

    * el break es descansar, hace que el bucle pare si se cumple alguna condición
    * el continue es continuar, hace que el bucle continúe si se cumple alguna condición
*/

// require() y require_once() sirven para importar, la diferencia es que require_once solo deja importar una vez

// includes y includes_once() lo mismo

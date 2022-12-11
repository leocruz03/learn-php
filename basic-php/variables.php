<?php

// * variables en PHP * 
$name = "leonardo";
/* 
    las variables se crean con un signo de dólar antes del nombre de la variable
*/

// * variables predefinidas en PHP *
$GLOBALS;
/* 
    contiene una referencia a cada variables disponible en el espectro de las variables del script. Las claves de esta matriz 
    son los nombres de las variables
*/

$_SERVER;
/* 
    variables definidas por el servidor web o directamente relacionadas en donde el script se está ejecutando
*/

$_GET;
/* 
    Variable predefinida para el método HTTP GET
*/

$_POST;
/*
    variable predefinida para el método HTTP POST
*/

$_COOKIE;
/*
    variable proporcinadas al script por medio de HTTP cookies
*/

$_FILES;
/*
    variable proporcionada al script por medio de la subida de archivos vía HTTP
*/

$_ENV;
/* 
    variables prporcionada al script por medio del entorno
*/

/*
    existiencia y tipo de una variable

    empty(), que devuelve el valor verdadero si la variable no está definida o lo está,
    pero tiene un valor nulo. Por ejemplo, si a la variable $num le asignamos el valor
    10, las instrucciones

    isset(), que devuelve el valor verdadero si la variable ha sido inicializada con un
    valor y falso si no lo ha sido. Por ejemplo, si inicializamos la variable $num con
    valor 10, las instrucciones
*/

// * obtener información sobre el tipo de la variable *

/*
    1. is_array(): Devuelve verdadero si el tipo de la variable es una matriz y falso si no lo
    es.
    2. is_bool(): Devuelve verdadero si el tipo de la variable es booleano y falso si no lo
    es.
    3. is_float() o is_double() o is_real(): Devuelve verdadero si el tipo de la variable es
    un número en coma flotante y falso si no lo es.
    4. is_int() o is_integer() o is_long(): Devuelve verdadero si el tipo de la variable es un
    número entero y falso si no lo es.
    5. is_object(): Devuelve verdadero si el tipo de la variable es un objeto y falso si no lo
    es.
    6. is_resource(): Devuelve verdadero si el tipo de la variable es un recurso y falso si
    no lo es.
    7. is_scalar(): Devuelve verdadero si el tipo de la variable es un escalar (integer, float,
    string o booleano) y falso si no lo es.
    8. is_string(): Devuelve verdadero si el tipo de la variable es una cadena de caracteres
    y falso si no lo es.
    9. is_null():Devuelve verdadero si el tipo de la variable es el valor NULL y falso si no
    lo es.
    10. is_numeric(): Devuelve verdadero si la variable es un número o una cadena
    numérica o falso si no lo es.
    11. gettype(): Esta última función, más directa que las anteriores, devuelve directamente
    el tipo de la variable que se le pasa como argumento. Los tipos posibles son integer,
    double, string, array, object y unknown (desconocido).
*/

// * creación de una constante *
define("number", 12);
echo number;

// * tipos de datos *

// cadenas de textos
$s = "cadena";

// números enteros
$i = 3;

// números decimales
$f = 3.14;

// valores booleanos
$b = true;

// arrays
$a = [1, 2, 3, 4, 5];

// arrays multidimensionales
$arr = array(
    "color" => "red",
    "integer" => 2,
);

echo $arr["color"];

// objetos

// valor nulo
$n = null;
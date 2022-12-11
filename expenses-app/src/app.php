<?php

// pequeño sistema de rutas con validaciones

// comprueba si existe la vista y si existe la vista, la genera
if(isset($_GET['view'])) {
    $view = $_GET['view'];

    require "src/{$view}.php";
} else {
    require 'src/home.php';
}
<?php

namespace Usuario\ExpensesApp\model;

use Usuario\ExpensesApp\lib\Database;
use PDO;

class Category extends Database {

    private int $id;

    public function __construct(private string $name) {

        // sirve para poder pasar nuevas propiedades en una clase que está heredando de otra y seguir mostrando las que ya existen en el método
        parent::__construct();
    }

    // método para guardar la información
    public function save() {
        $query = $this -> connect() -> prepare("INSERT INTO  categories (name) VALUES(:name)");
        $query -> excute(['name' => $this -> name]);
    }

    // obtener todas las categorias
    public static function getAll() {
        $db = new Database();
        $query = $db -> connect() -> prepare("SELECT * FROM categories");

        while ($r = $query -> fetch(PDO::FETCH_ASSOC)) {}
    }
}
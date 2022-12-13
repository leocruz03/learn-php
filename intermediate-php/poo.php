<?php

class Vehicle {
    ### los atributos o caracteristicas ###

    // en php existen estos tipos de visibilidades
    private $id = 000001; ## private significa que solo está accesible a los métodos de la misma clase
    protected $brand = 'ford'; ## es accesible desde los métodos definidos en las clase que
    ## pertenecen al mismo paquete, pero además también es accesible desde las subclases de esta clase
    public $color = 'black'; ## significa que podemos acceder de manera universal a esta variable

    ### métodos ###

    // son las acciones que realizará la clase cuando sean llamadas
    public function getBrand() {
        ## el this es para llamar a cada atributo de la clase ##

        return $this -> brand;
    }

    // este método sirve para setear el valor de este atributo
    public function setColor($color) {
        // ya que recibe el color como parametro se le ingresa un valor al ser llamado el método
        return $this -> color = $color;
    }
}

$car = new Vehicle();  ## creación del objeto

$car -> setColor("red");

echo $car -> getBrand().'<br>';
echo $car -> color;

echo var_dump($car);

### en PHP como en JS se utilizan el this pero en JS para referencíar se utiliza this.atributo pero en PHP es $this -> atributo;

class Person {
    ### se inicializaron las variables ###
    public $name; ## el public podemos acceder a el desde cualquier lugar, dentro de la clase, de las que lo hereden o desde afuera
    public $surname;
    protected $age; ## se pueden acceder a ellos desde la misma clase o desde la calse que los heredan
    protected $email;
    private $id; ## se puede acceder únicamente desde la clase que los define

    ### __constructor es un método especial el cual es el primero que se ejecuta al instanciarce una clase ###
    ## se utiliza para declarar atributos e inicializarlos
    public function __construct($name, $surname, $age, $email) { ### el constructor recibe las variables inicializadas como parametros y las establece ###
        ## acá se les establece las variables inicializadas para darles un valor en el objeto ##
        $this -> name = $name; 
        $this -> surname = $surname;
        $this -> age = $age;
        $this -> email = $email;
    }

    public function getName() {
	    $this -> name;
    } 
}

## creamos un nuevo obejeto ó una nueva instancia de la clase ##
$person_one = new Person("leonardo", "de la cruz", 19, "leonardodelacruz03@hotmail.com");

var_dump($person_one->name);

### creación de una nueva clase ###
class Post {
    private string $id;

    public function __construct(private string $message) {
	    ## se creó el constructor en la línea de arriba
	    print_r("se creó un nuevo objeto\n");
	    $this->id = uniqid();
    }

    private function sayHi() {
	    return "hola desde este post, con id $this->id";
    }

    public function setId(string $id) {
	    $this->id = $id;
    }

    public function getMessage() {
	    return $this->message;
    }
}

## se etsá creando un objeto o se está instanciando una clase
$myPost = new Post("este es mi primer post");

echo $myPost->getMessage();
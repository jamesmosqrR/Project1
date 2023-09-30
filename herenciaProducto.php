<?php

// Clase Producto
class Producto {
  public $nombre;
  public $precio;
  public $categoria;

  public function __construct($nombre, $precio, $categoria) {
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->categoria = $categoria;
  }

  public function mostrarInfo() {
    echo "Nombre: $this->nombre, Precio: $this->precio, Categoría: $this->categoria";
  }
}

// Clase Libro
class Libro extends Producto {
  public $autor;
  public $anio_publicacion;

  public function __construct($nombre, $precio, $categoria, $autor, $anio_publicacion) {
    parent::__construct($nombre, $precio, $categoria);
    $this->autor = $autor;
    $this->anio_publicacion = $anio_publicacion;
  }

  public function mostrarInfo() {
    parent::mostrarInfo();
    echo ", Autor: $this->autor, Año de publicación: $this->anio_publicacion";
  }
}

// Clase Ropa
class Ropa extends Producto {
  public $talla;
  public $color;

  public function __construct($nombre, $precio, $categoria, $talla, $color) {
    parent::__construct($nombre, $precio, $categoria);
    $this->talla = $talla;
    $this->color = $color;
  }

  public function mostrarInfo() {
    parent::mostrarInfo();
    echo ", Talla: $this->talla, Color: $this->color";
  }
}

// Clase Alimento
class Alimento extends Producto {
  public $peso;
  public $fecha_vencimiento;

  public function __construct($nombre, $precio, $categoria, $peso, $fecha_vencimiento) {
    parent::__construct($nombre, $precio, $categoria);
    $this->peso = $peso;
    $this->fecha_vencimiento = $fecha_vencimiento;
  }

  public function mostrarInfo() {
    parent::mostrarInfo();
    echo ", Peso: $this->peso, Fecha de vencimiento: $this->fecha_vencimiento";
  }
}
// clase smartphone
class smartphone extends Producto {
  public $marca;
  public $almacenamiento;
  public $camara;
  
  public function __construct ($nombre, $precio, $categoria, $marca, $camara, $almacenamiento) {
    parent::__construct($nombre, $precio, $categoria);
    $this->marca = $marca;
    $this->almacenamiento = $almacenamiento;
    $this->camara=$camara;
  }

  public function mostrarInfo() {
    parent::mostrarInfo();
    echo ", marca: $this->marca, almacenamiento: $this->almacenamiento";
  }

}
// Clase maquillaje
class maquillaje extends Producto {
  public $marca;
  public $fecha_vencimiento;
  public $descripcion;

  public function __construct($nombre, $precio, $categoria, $marca, $fecha_vencimiento,$descripcion) {
    parent::__construct($nombre, $precio, $categoria);
    $this->marca = $marca;
    $this->fecha_vencimiento = $fecha_vencimiento;
  }

  public function mostrarInfo() {
    parent::mostrarInfo();
    echo ", marca: $this->marca, Fecha de vencimiento: $this->fecha_vencimiento";
  }

}

// Crear objetos de la clase Producto
$producto1 = new Producto("Libro", 20000, "Libros");
$producto2 = new Ropa("Camisa ", 10000, "Ropa", "S", "Blanco");
$producto3 = new Alimento("Leche", 5000, "Alimentos", 1, "2023-10-20");
$producto4 = new Ropa("Pantalón ", 110000, "Ropa", "S", "Blanco");
$producto5 = new libro("crepusculo", 70000, "fantasia", "robin", 2015);
$producto6 = new libro("hiroshima",10000,"historia","eliza",2000);
$producto7 = new alimento("torta",100000,"alimentos",2,"2024-08-09");
$producto8 = new smartphone("a12",10000000,"smartphone","samsung","120gb","4 camaras");
$producto9 = new maquillaje("corrector",20000,"maquillaje","samy","2024-08-09","correccion de manchas");

// Mostrar información deproductos
$producto1->mostrarInfo();
echo "<br>";
$producto2->mostrarInfo();
echo "<br>";
$producto3->mostrarInfo();
echo "<br>";
$producto4->mostrarInfo();
echo "<br>";
$producto5->mostrarInfo();
echo "<br>";
$producto6->mostrarInfo();
echo "<br>";
$producto7->mostrarInfo();
echo "<br>";
$producto8->mostrarInfo();
echo "<br>";
$producto9->mostrarInfo();


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Libro {
  public $titulo;
  public $autor;
  public $anio_publicacion;

  public function __construct($titulo, $autor, $anio_publicacion) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->anio_publicacion = $anio_publicacion;
  }

  public function mostrarInfo() {
    echo "Título: $this->titulo, Autor: $this->autor, Año de publicación: $this->anio_publicacion";
  }
}

class Novela extends Libro {
  public $genero;

  public function __construct($titulo, $autor, $anio_publicacion, $genero) {
    parent::__construct($titulo, $autor, $anio_publicacion);
    $this->genero = $genero;
  }

  public function mostrarInfo() {
    parent::mostrarInfo();
    echo ", Género: $this->genero";
  }
}

class Ensayo extends Libro {
  public $tema;

  public function __construct($titulo, $autor, $anio_publicacion, $tema) {
    parent::__construct($titulo, $autor, $anio_publicacion);
    $this->tema = $tema;
  }

  public function mostrarInfo() {
    parent::mostrarInfo();
    echo ", Tema: $this->tema";
  }
}

// Crear objetos de la clase Novela
$novela1 = new Novela("El Quijote", "Miguel de Cervantes", 1605, "Novela de caballería");
$novela2 = new Novela("Cien años de soledad", "Gabriel García Márquez", 1967, "Novela mágica");

// Crear objetos de la clase Ensayo
$ensayo1 = new Ensayo("El origen de la vida", "Charles Darwin", 1859, "Evolución");
$ensayo2 = new Ensayo("La rebelión de las máquinas", "Isaac Asimov", 1950, "Ciencia ficción");

// Mostrar información de los libros
$novela1->mostrarInfo();
echo "<br>";
$novela2->mostrarInfo();
echo "<br>";
$ensayo1->mostrarInfo();
echo "<br>";
$ensayo2->mostrarInfo();

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

# retomando POO

class Persona {
  public $nombre;
  public $apellido2;
  public $dni;
  public $edad;

  public function __construct($nombre, $apellido2, $dni, $edad) {
    $this->nombre = $nombre;
    $this->apellido2 = $apellido2;
    $this->dni = $dni;
    $this->edad = $edad;
  }

  public function mostrarInfo() {
    echo "Nombre: $this->nombre, Apellido2: $this->apellido2, DNI: $this->dni, Edad: $this->edad";
  }
}

class Estudiante extends Persona {
  public $especialidad;

  public function __construct($nombre, $apellido2, $dni, $edad, $especialidad) {
    parent::__construct($nombre, $apellido2, $dni, $edad);
    $this->especialidad = $especialidad;
  }

  public function mostrarInfo() {
    parent::mostrarInfo();
    echo ", Especialidad: $this->especialidad";
  }
}

// Crear objetos de la clase Estudiante
$estudiante1 = new Estudiante("Ana", "García", 1039668978, 20, "Medicina");
$estudiante2 = new Estudiante("Ana", "García", 1039968978, 17, "Informática");

// Mostrar información de los estudiantes
$estudiante1->mostrarInfo();
echo "<br>";
$estudiante2->mostrarInfo();

?>

</body>
</html>
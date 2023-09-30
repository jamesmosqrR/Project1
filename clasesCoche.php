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

class Coche {
    public $marca;
    public $modelo;
    public $anioFabricacion;
    public $motor;
    public $color;
  
    public function __construct($marca, $modelo, $anioFabricacion, $motor, $color) {
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->anioFabricacion = $anioFabricacion;
      $this->motor = $motor;
      $this->color = $color; 
      
    }
  
    public function mostrarInfo() {
      echo "Marca: $this->marca , Modelo: $this->modelo, Año de Fabricación: $this->anioFabricacion, Motor: $this->motor, Color: $this->color";
    }
  }
  
  // Crear objetos de la clase carro
  $coche1 = new Coche("Toyota", "Camry", 2022, 2.5,"Azul");
  $coche2 = new Coche("Ford", "Mustang", 2021, 3.5, "Naranja");
  $coche3 = new Coche("Nissan", "Frontier", 2023, 4.5, "Gris");
  $coche4 = new Coche("Jeep", "xamp", 2024, 9.5, "Negro");
  
  // Mostrar información de los carro
  $coche1->mostrarInfo();
  echo "<br>";
  $coche2->mostrarInfo();
  echo "<br>";
  $coche3->mostrarInfo();
  echo "<br>";
  $coche4->mostrarInfo();
  
    
    ?>

</body>
</html>
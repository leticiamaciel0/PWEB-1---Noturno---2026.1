<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aulaWeb1</title>
</head>
<body>

    <?php

    class Carro {
        public $marca;
        public $modelo;
        public function __construct($marca, $modelo) {
            $this->marca = $marca;
            $this->modelo = $modelo;    
        }
        public function mostrar() {
           return "Carro: $this->marca $this->modelo";
     }
    }
    $meuCarro = new Carro("Volkswagen", "Gol");
    echo $meuCarro->mostrar() . "<br>";

    ?>





    
</body>
</html>
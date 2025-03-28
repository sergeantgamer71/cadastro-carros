<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/model/carro.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/controller/carroDAO.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/controller/conexao.php";
   /*$dadosCarro = [
        "",
        "Viper GTS",
        "Dodge",
        "1999",
        "449",
        "1569",
        "2025-03-21"
    ];
    $newCar = new Carro($dadosCarro);
    CarroDAO::inserir($newCar);
    */
    //CarroDAO::excluir(4);
    //CarroDAO::atualizar($newCar);
    /*echo "$newCar->id <br>
    $newCar->marca <br>
    $newCar->nome <br>
    $newCar->ano <br>
    $newCar->potencia <br>
    $newCar->peso <br>
    $newCar->inclusao <br>";*/
   // CarroDAO::inserir($newCar);
   $allCars = CarroDAO::buscarTodos();
   foreach($allCars as $carroAtual){
   echo "$carroAtual->marca $carroAtual->nome $carroAtual->ano<br>";
   echo "Potência: $carroAtual->potencia HP<br>";
   echo "Peso: $carroAtual->peso kg<br>";
   echo "Data de inclusão: $carroAtual->inclusao<br><br>";
   }
?>
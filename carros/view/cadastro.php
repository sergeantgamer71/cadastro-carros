<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/controller/conexao.php";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/controller/carroDAO.php"; 
        require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/model/carro.php";

        $codigo = "";
        $nome = "";
        $marca = "";
        $ano = "";
        $potencia = "";
        $peso = "";
        $inclusao = "";

        if(isset($_GET["acaoEditar"])){
            $codigo = $_GET["acaoEditar"];
            $carro = CarroDAO::buscar($codigo);
            $nome = $carro->nome;
            $marca = $carro->marca;
            $ano = $carro->ano;
            $potencia = $carro->potencia;
            $peso = $carro->peso;
            $inclusao = $carro->inclusao;
        }

        if(isset($_GET["acaoGravar"])){
            $codigo = $_GET["acaoGravar"];
            if($codigo == ""){ //Novo
                $dadosCarroNovo = [
                    "",
                    $_GET["nome"],
                    $_GET["marca"],
                    $_GET["ano"],
                    $_GET["potencia"],
                    $_GET["peso"],
                    date("Y-m-d")
                ];
                $newCar = new Carro($dadosCarroNovo);
                CarroDAO::inserir($newCar);
            } else { //Editar
                $dadosCarroEditado = [
                    $codigo,
                    $_GET["nome"],
                    $_GET["marca"],
                    $_GET["ano"],
                    $_GET["potencia"],
                    $_GET["peso"],
                    ""
                ];
                $carroEditado = new Carro($dadosCarroEditado);
                CarroDAO::atualizar($carroEditado);
            }
        }
    ?>
    <div class="container bg-dark">
        <div class="col-lg-12 align-self-center text-center">
            <h1>Cadastro de Carros</h1>
            <p>Dados do Carro</p>
        </div>
        <form action="cadastro.php">
            <div class="row pt-2 pb-2">
                <div class="col-lg-5">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $nome?>">
                </div>
                <div class="col-lg-3">
                    <label for="marca">Marca</label>
                    <select name="marca" class="form-control">
                           <?php
                            $itens = ["",
                                    "Acura",
                                    "Alfa Romeo",
                                    "Aston Martin",
                                    "Audi",
                                    "BMW",
                                    "Chevrolet",
                                    "Chrysler",
                                    "Citroën",
                                    "Dodge",
                                    "Fiat",
                                    "Ford",
                                    "Honda",
                                    "Jaguar",
                                    "Lotus",
                                    "Mazda",
                                    "Mercedes-Benz",
                                    "Mini",
                                    "Mitsubishi",
                                    "Nissan",
                                    "Opel",
                                    "Pagani",
                                    "Peugeot",
                                    "Renault",
                                    "RUF",
                                    "Shelby",
                                    "Subaru",
                                    "Suzuki",
                                    "Toyota",
                                    "TVR",
                                    "Volkswagen"
                                    ];
                                foreach($itens as $item){
                                    if($item == $marca){
                                        $selecao = "selected";
                                    } else {
                                        $selecao = "";
                                    }
                                    echo "<option value='$item' $selecao>$item</option>";
                                }
                            ?>
                        
                    </select>
                    
                </div>
                <div class="col-lg-2">
                    <label for="ano">Ano</label>
                    <input type="number" name="ano" min="1901" max="2100" class="form-control" value="<?php echo $ano?>">
                </div>
                <div class="col-lg-4">
                <label for="potencia">Potência (HP)</label>
                    <input type="number" min="0" max="5000" name="potencia" class="form-control" value="<?php echo $potencia?>">
                </div>
                <div class="col-lg-4">
                <label for="peso">Peso (kg)</label>
                    <input type="number" min="0" max="15000" name="peso" class="form-control" value="<?php echo $peso?>">
                </div>
            </div>
                <div class="row text-center pt-3">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success" name="acaoGravar" value="<?php echo $codigo?>">Salvar</button>
                        <button type="button" class="btn btn-info" name="acaoLimpar" onclick="window.location.href='cadastro.php'">Limpar</button>
                        <button type="button" class="btn btn-primary" name="acaoVoltar" onclick="window.location.href='listagem.php'">Voltar</button>
                    </div>
                </div>
                </form>
            
        
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
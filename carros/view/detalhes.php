<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/controller/conexao.php";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/controller/carroDAO.php"; 
        require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/model/carro.php";

        if(isset($_GET["acaoDetalhes"])){
            $codigo = $_GET["acaoDetalhes"];
            $carro = CarroDAO::buscar($codigo);
        }
    ?>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 align-self-center">
                <h1>Detalhes do Carro</h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><?php echo "$carro->marca $carro->nome"?></h2>
                <br>
                
            </div>
            <div class="col-lg-12 ">
                <br>
                <p><strong>Ano: </strong><?php echo "$carro->ano"?></p>
                <p><strong>Potência: </strong><?php echo "$carro->potencia HP"?></p>
                <p><strong>Peso: </strong><?php echo "$carro->peso kg"?></p>
                <p><strong>Data de inclusão: </strong><?php echo date("d/m/Y", strtotime($carro->inclusao))?></p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary" value="acaoVoltar" onclick="window.location.href='listagem.php'">Voltar</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="text-light bg-dark">
   <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/controller/conexao.php";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/controller/carroDAO.php"; 
        require_once $_SERVER['DOCUMENT_ROOT'] . "/carros/model/carro.php";

        if(isset($_GET["acaoExcluir"])){
            $codigo = $_GET["acaoExcluir"];
            CarroDAO::excluir($codigo);
        }
   ?>

   <div class="container bg-dark">
        <div class="row text-center">
            <div class="col-lg-12">
                <h1>Lista de Carros</h1>
                <p>
                    <form action="listagem.php">
                        Carros Cadastrados
                        <button type="submit" name="acaoOrdenar" value="asc" class="btn bg-transparent text-light">↑</button>
                        <button type="submit" name="acaoOrdenar" value="desc" class="btn bg-transparent text-light">↓</button>
                    </form>
                </p>
            </div>
        </div>
        <div class="row">
            <table class="table bg-light text-dark table-striped table-borderless">
                <div class="col-md-12">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Nome</th>
                            <th>Ano</th>
                            <th>
                                <button type="button" class="btn btn-info btn-sm" onclick="window.location.href='cadastro.php'">Inserir</button>
                            </th>
                        </tr>
                    </thead>
                </div>
                <div class="col-md-12">
                    <tbody>
                        <?php
                            if(isset($_GET["acaoOrdenar"])){
                                $todosCarros = CarroDAO::buscarTodos($_GET["acaoOrdenar"]);
                            } else {
                                $todosCarros = CarroDAO::buscarTodos("");
                            }

                            foreach($todosCarros as $carro){
                                echo "
                                <tr>
                                    <td>$carro->id</td>
                                    <td>$carro->marca</td>
                                    <td>$carro->nome</td>
                                    <td>$carro->ano</td>
                                    <td>
                                        <form action='detalhes.php' class='d-inline'>
                                            <button type='submit' name='acaoDetalhes' class='btn btn-secondary btn-sm' value='$carro->id'>Detalhes</button> 
                                        </form>
                                        <form action='cadastro.php' class='d-inline'>
                                            <button type='submit' name='acaoEditar' class='btn btn-warning btn-sm' value='$carro->id'>Editar</button> 
                                        </form>
                                        <form action='listagem.php' class='d-inline'>
                                            <button type='submit' name='acaoExcluir' class='btn btn-danger btn-sm' value='$carro->id'>Excluir</button> 
                                        </form>
                                    </td>
                                </tr>";
                            }
                        
                        ?>
                    </tbody>
                </div>
            </table>
        </div>
   </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
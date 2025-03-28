<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/carros/controller/conexao.php";
    $con = Conexao::getConexao();
?>
<a href="view/listagem.php">Ir para a lista de carros</a>
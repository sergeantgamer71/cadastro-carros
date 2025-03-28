<?php

    class Conexao{
        public static $conexao;

        public static function getConexao(){
            $usuario = "root";
            $senha = "";
            $base = "db_carros";
            $host = "localhost";
            $porta = 3306;
            $stringConexao = "mysql:host=$host;port=$porta;dbname=$base";

            if(!isset(self::$conexao)){
                try{
                    self::$conexao = new PDO($stringConexao, $usuario, $senha);
                    //echo "<script> alert('Conectado com sucesso!')</script>";
                } catch(PDOException $e) {
                    $erro = $e->getCode();
                    echo "<script> alert($erro)</script>";
                }
            }
            return self::$conexao;
        }
    }

?>
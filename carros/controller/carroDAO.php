<?php
    class CarroDAO{
        public static function inserir(Carro $carro){
            $con = Conexao::getConexao();
            $sql = $con->prepare("insert into carros values(null,?,?,?,?,?,?)");
            $sql->bindParam(1, $carro->nome);
            $sql->bindParam(2, $carro->marca);
            $sql->bindParam(3, $carro->ano);
            $sql->bindParam(4, $carro->potencia);
            $sql->bindParam(5, $carro->peso);
            $sql->bindParam(6, $carro->inclusao);
            $sql->execute();
        }

        public static function atualizar(Carro $carro){
            $con = Conexao::getConexao();
            $sql = $con->prepare("update carros set NOME=?, MARCA=?, ANO=?, POTENCIA=?, PESO=? where ID=?");
            $sql->bindParam(1, $carro->nome);
            $sql->bindParam(2, $carro->marca);
            $sql->bindParam(3, $carro->ano);
            $sql->bindParam(4, $carro->potencia);
            $sql->bindParam(5, $carro->peso);
            $sql->bindParam(6, $carro->id);
            $sql->execute();
        }

        public static function excluir($id){
          $con = Conexao::getConexao();
          $sql = $con->prepare("delete from carros where ID=?");
          $sql->bindParam(1, $id);
          $sql->execute();  
        }

        public static function buscar($id){
            $con = Conexao::getConexao();
            $sql = $con->prepare("select * from carros where ID=?");
            $sql->bindParam(1, $id);
            $sql->execute();
            if($registro = $sql->fetch()){
                return new Carro($registro);
            } else {
                return null;
            }
        }
        
        public static function buscarTodos($ordem){
            if($ordem == ""){
                $ordenacao = "";
            }else if($ordem == "asc"){
                $ordenacao = "order by MARCA asc";
            }else if($ordem =="desc"){
                $ordenacao = "order by MARCA desc";
            }


            $con = Conexao::getConexao();
            $sql = $con->prepare("select * from carros $ordenacao");
            $sql->execute();
            $carros = [];
            while($registro = $sql->fetch()){
                $carros[] = new Carro($registro);
            }
            return $carros;
        }
    }
?>
<?php
include_once 'Conectar.php';

class Autor{
    private $id;
    private $NomeAutor;
    private $SobreNome;
    private $email;
    private $nascAuto;
    private $conn;
    
    public function getCodigo(){
        return $this->id;
    }

    public function setCodigo($idd){
        $this->id = $idd;
    }

    public function getNome(){
        return $this->NomeAutor;
    }

    public function setNome($NomeAutorr){
        $this->NomeAutor = $NomeAutorr;
    }

    public function getSobrenome(){
        return $this->  SobreNome;
    }

    public function setSobrenome($SobreNNome){
        $this->SobreNome = $SobreNNome;
    }

    public function getEmail(){
        return $this->SobreNome;
    }

    public function setEmail($emaill){
        $this->email = $emaill;
    }

    public function getNasc(){
        return $this->nascAuto;
    }

    public function setNasc($nascc){
        $this->nascAuto = $nascc;
    }

    function listar(){
        try{
            $this-> conn = new Conectar();
            $sql = $this ->conn->query("select * from autor order by Cod_autor");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }

        catch(PDOException $exc){
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
}
?>
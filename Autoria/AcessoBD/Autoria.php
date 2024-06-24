<?php
include_once 'Conectar.php';


class autoria
{
    private $cod_autor;
    private $cod_livro;
    private $dataLanca;
    private $editora;
    private $conn;


    // Getters e Setters
    public function getcod_autor() {
        return $this->Cod_autor;
    }
    
    public function setcod_autor($cod_autorr) {
        $this->id = $cod_autorr;
    }
    
    public function getcod_livro() {
        return $this->cod_livro;
    }
    
    public function setcod_livro($cod_livroo) {
        $this->nome = $cod_livroo;
    }
    
    public function getdataLancamento() {
        return $this->dataLanca;
    }
    
    public function setdataLancamento($dataLancaa) {
        $this->estoque = $dataLancaa;
    }

    public function geteditora() {
        return $this->editora;
    }
    
    public function seteditora($eeditora) {
        $this->estoque = $editora;
    }
    
    
   

    function salvar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into produto values (null, ?,?)");
            @sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            if($sql->execute() == 1)
            {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function alterar() 
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("Select * from produto where id = ?");
            @sql-> bindParam(1, $this->getId(), PDO::PARAM_STR); 
            $sql->execute();
            return $sql->fetchAll ();
            $this->conn = null;
        }
        catch(PDOExeception $exc)
        {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }

    function alterar2()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("update produto set nome = ?, estoque = ? where id = ?");
            @sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            @sql-> bindParam(3, $this->getId(), PDO::PARAM_STR);
            if($sql->execute() == 3) 
            {
                return "registro alterado com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function consultar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("Select * from produto where nome like ?");
            @sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR); 
            $sql->execute();
            return $sql->fetchAll ();
            $this->conn = null;
        }
        catch(PDOExeception $exc)
        {
            echo "Erro ao consultar" . $exc->getMessage();
        }
    }

    function exclusao()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("delete from produto where id = ?");
            @sql-> bindParam(1, $this->getId(), PDO::PARAM_STR);
            if($sql->execute() == 1) 
            {
                return "Excluido com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao excluir. " . $exc->getMessage();
        }
    }

    function listar()
    {
        try
        {
            $this->conn = new conectar();
            $sql = $this->conn->prepare("Select * from autoria order by cod_autor");
            $sql -> execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc) {
            echo "Erro ao listar autoria: " . $exc->getMessage();
        }
    }
}//Fim do PHP
?>
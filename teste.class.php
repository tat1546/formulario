<?php
//importação
require_once("pessoa.class.php");
//nome classe
class Teste{
    //objeto com visibilidade privada
    private $pessoa;
    //

    public function __construct(){
        //objeto cahmado  pessoa que recebe a classe pessoa()
        $pessoa = new Pessoa();

        //passar um valor para o metodo setnome
        $pessoa->setNome($_POST['nome']);
         //imprimir um valor do metodo getnome
        echo $pessoa->getNome()."<br><br>";
        //passar um valor para o metodo setEndereco
        $pessoa->setTelefone($_POST['telefone']);
         //imprimir um valor do metodo getEndereco
        echo $pessoa->getTelefone()."<br><br>";
        //passar um valor para o metodo setBairro
        $pessoa->setOrigem($_POST['origem']);
         //imprimir um valor do metodo getBairro
        echo $pessoa->getOrigem()."<br><br>";
        //passar um valor para o metodo setCep
        $pessoa->setData($_POST['data']);
         //imprimir um valor do metodo getCep
        echo $pessoa->getData()."<br><br>";
        //passar um valor para o metodo setCidade
        $pessoa->setObservacao($_POST['observacao']);
         //imprimir um valor do metodo getCidade
        echo $pessoa->getObservacao()."<br><br>";
        //passar um valor para o metodo setEstado


    }
//instancia
}new Teste();
?>
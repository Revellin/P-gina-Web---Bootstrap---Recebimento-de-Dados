<?php

//Classe
class Pessoa{
    //Atributos
    private $nome;
    private $telefone;
    private $origem;
    private $observacao;
    private $contato;
  
   

    //Método GET
    public function getNome (){
      return $this->nome;
    }
    
    //Metodo SET
    public function setNome ($nome) {
        $this->nome = $nome;
    }

   //Método GET
   public function getTelefone (){
    return $this->telefone;
  }
  
  //Metodo SET
  public function setTelefone ($telefone) {
      $this->telefone=$telefone;
  }

  //Método GET
  public function getOrigem (){
    return $this->origem;
  }
  
  //Metodo SET
  public function setOrigem($origem) {
      $this->origem=$origem;
  }

  //Método GET
  public function getObservacao (){
    return $this->observacao;
  }
  
  //Metodo SET
  public function setObservacao ($observacao) {
      $this->observacao=$observacao;
  }

  //Método GET
  public function getContato (){
    return $this->contato;
  }
  
  //Metodo SET
  public function setContato ($contato) {
      $this->contato=$contato;
  }

}

?>
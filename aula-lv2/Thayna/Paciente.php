<?php
    class Paciente{
       public $nome;
       public $idade;

       public function mostrarDados(){
        echo "Nome: ".$this->nome.
             "<br> Idade: ".$this->idade;
       }
      
        
       }
       
?>
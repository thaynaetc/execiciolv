<?php
   class Conta{ 
    //atributos
    public $numero;
    public $cliente;
    public $saldo;

    //operacao
    public function depositar ($valorDesposito){
      $this->saldo += $valorDesposito;
      
    }
    public function sacar($valorSaque){
      $this->saldo -= $valorSaque;
    }
      //operacao
      public function abrirConta($numero, $cliente, $saldo){
        $this->numero = $numero;
        $this->cliente = $cliente;
        $this->saldo = $saldo;
      }
        public function info(){
          echo " <br> Dados: Nome".$this->cliente. 
               " <br> Numero da Conta: ".$this->numero.
               " <br> Saldo: ".$this->saldo;
          
        }
        
        
      }
   
?>
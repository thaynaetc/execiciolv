<?php
    include 'Conta.php';
    
    //cria um objeto
    $conta = new Conta();

   //$conta->cliente = "Maria";

    //echo "Nome: ".$conta->cliente;
      
     // $conta->depositar(1000.00);
      
     // echo "<br>Saldo ".$conta->saldo;
      
      //$conta->sacar(50);
      
      //echo "<br>Saldo: ".$conta->saldo;

      //chamando o metodo abrir conta
      
      $conta->abrirConta("123","Maria da Silva", 100);
      
      //mostrando os dados da conta
      $conta->info();
      
      //depositando 100.00
      $conta->depositar(200);
      
      //mostrando os dados da conta
      $conta->info();

      //sacar 50
      
      $conta->sacar(50);
      
      //mostrando os dados da conta
      
      $conta->info();
      
      
      
?>
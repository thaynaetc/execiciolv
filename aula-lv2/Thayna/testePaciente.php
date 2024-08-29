<?php
   include 'Paciente.php';
          
   $nome = $_GET['nome'];
   $idade = $_GET['idade'];
   
   $paciente1 = new Paciente();
   $paciente1->nome = $nome;
   $paciente1->idade = $idade;
   
   $paciente1->mostrarDados();
   
   
   
?>
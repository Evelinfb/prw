<?php
   echo "<h1> Cliente </h1> ";
   $nome = $_GET['nome'];
   $cpf = $_GET['cpf'];
   $rg = $_GET['rg'];
   $estado = $_GET['estado'];
   $totalCompra = $_GET['totalCompra'];
   $saldoCredito = $_GET['saldoCredito'];

   echo 'Nome: ' . $nome . '<br>';
   echo 'CPF: ' . $cpf . '<br>';
   echo 'RG: ' . $rg . '<br>';
   echo 'Nome do Cliente, CPF, RG não podem estar em branco'.'<br>';

   echo 'Estado: ' . $estado . '<br>';
   echo 'Total da compra: ' . $totalCompra . '<br>';
   echo 'Saldo do cartão de crédito: ' . $saldoCredito . '<br>';

   if($saldoCredito > $totalCompra)
    {
    }
    else  
    echo "<p style='color: red;'>Saldo Insuficiente para Concluir Compra! ";
   


?>
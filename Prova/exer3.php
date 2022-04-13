<?php
   echo "<h1> Índice de Massa Corporal </h1> ";
   $peso = $_GET['peso'];
   $altura = $_GET['altura'];

   echo 'Peso: ' . $peso . '<br>';
   echo 'Altura: ' . $altura . '<br>';

    $imc = $peso/ ($altura * $altura);

   if($imc < 17)
   {
       echo "Situação: muito abaixo do peso";
   }
   else  if($imc >= 17 and $imc <18.49)
   {
    echo "Situação: abaixo do peso";
   }
   else  if($imc >= 18.5 and $imc <24.99)
   {
    echo "Situação: peso normal";
   }
   else  if($imc >= 25 and $imc <29.99)
   {
    echo "Situação: acima do peso";
   }
   else  if($imc >= 30 and $imc < 34.99)
   {
    echo "Situação: Obesidade I";
   }
   else  if($imc >= 35 and $imc < 39.99)
   {
    echo "Situação: Obesidade II (severa)";
   }
   else  if($imc >= 40)
   {
    echo "Situação: Obesidade III (mórbida)";
   }
?>
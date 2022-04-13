<?php
    $salario = 100;
    $soma;

    if($salario <= 300)
    {
        $soma = $salario + 150;
        echo $soma;
    }
    else  if($salario > 300)
    {
       $soma = $salario + 90;
       echo $soma;

    }
?>
<?php
    $soma = 0;
    for($n=0;$n<=100;$n++){
         if($n % 2 == 0){
            $soma = $soma + $n;
        }
     }
     echo 'Soma: '.$soma; 
?>
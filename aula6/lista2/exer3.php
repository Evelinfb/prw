<?php

$primo = 0;
for($n=0;$n>= 0 and $n<=200;$n++){
    if($n % 1 == 0 and $n % $n==0){
           echo 'São primos: '.$n; 
    }else
        {
            echo 'Não são primos: '.$n;
        }
    }
?>
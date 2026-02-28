<?php

// Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
// se multiplo di 5 stampare “JAVASCRIPT”;
// se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".


for($i = 1; $i <= 100; $i++){
    
    $acc = $i;
    $numbers[] = $acc;
    
        if($acc % 3 == 0 && $acc % 5 == 0){
            echo $acc . " HACKADEMY" . "\n";
        }elseif ($acc % 3 == 0) {
            echo $acc . " PHP " . "\n";
        }
        else if($acc % 5 == 0){
            echo $acc . " Javascript" . "\n";
        }
        else{
            echo $acc . "\n";
        };

};






?>
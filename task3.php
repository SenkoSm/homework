<?php

// Profiles/homework/task3.php

// Създавам променливи:
$n1 = 5;
$n2= 8; 
$n3= 10;

$fact = 1;

// Създавам цикъл, който умножава стойностите:
do {
    $fact = ($fact * $n1) + ($fact * $n2) + ($fact * $n3);
    // Декрементирам стойностите:
    $n1-- && $n2-- && $n3--;
    
} while (($n1 > 1) && ($n2 > 1) && ($n3>1));

// Извеждам сумираната стойност:
echo $fact;

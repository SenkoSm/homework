<?php

$row = 5;
$num = 1;

for($row = 1; $row <=5; $row++){
    for($col = 1; $col <=$row; $col++){
        if ($col > 1) {
            echo ' ' . '<br/>';
        echo $num . '\row';
        $num++;
        if($num > $row){
            break;
               
    }
  
    }
}
    }

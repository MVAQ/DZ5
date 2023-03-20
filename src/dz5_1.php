<?php

/**
 * task5.1
 * Первый уровень ("на троечку"):
 * Сделать константу с числом 5. В цикле от одного до ста посчитать все числа, 
 * которые делятся на 5.
 * 
 */

 define("FIVE_NUMBER", 5);
 $sumNumber=0;

 for($i=0;$i<100;$i++){

    if($i%FIVE_NUMBER==0){
        $sumNumber += $i; 
    }
 }
 echo "__________________________".PHP_EOL;
 echo "$sumNumber".PHP_EOL;
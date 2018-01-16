<?php

function Fibonacci($n)
{
    $value=0;
    if($n==0){
        $value = 0;
    }else if($n==1||$n==2){
        $value = 1;
    }else{
        $f1 = 1; $f2 = 1;
        for($i=3;$i<=$n;$i++){
            $value = $f1+$f2;
            $f2 = $f1;
            $f1 = $value;
        }
    }
    return $value;       
}
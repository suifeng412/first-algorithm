<?php

function jumpFloor($number)
{
    $value=0;
    if($number==1){
        $value = 1;
    }else if($number==2){
        $value = 2;
    }else{
        $f1 = 1; $f2 = 2;
        for($i=3;$i<=$number;$i++){
            $value = $f1+$f2;
            $f1 = $f2;
            $f2 = $value;
        }
    }
    return $value; 
}
<?php

function Find($target, $array)
{
    foreach($array as  $v){
        if(in_array($target,$v)){
            return 'true';
        }
    }
    return 'false';
}

while(fscanf(STDIN, "%d,%s", $a,$b) == 2){
    try{
        $target = $a;
        eval('$array = '.$b.";");
        echo Find($target, $array)."\n";
    }catch(Exception $e){
        die;
    }
}



?>
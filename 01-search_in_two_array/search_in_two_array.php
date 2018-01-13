<?php
// 第一种方法
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


// 第二种方法
function Find($target, $array){
    $i = count($array)-1;
    $j = 0;
    while($i>=0 && $j<count($array[0])){
        if($array[$i][$j] > $target)
            $i--;
        elseif($array[$i][$j] < $target)
            $j++;
        else
            return 1;
    }
    return 0;
}



?>
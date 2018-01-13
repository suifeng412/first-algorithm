<?php

function minNumberInRotateArray($rotateArray)
{
    #第一种方法
    $low = 0;
    $high = count($rotateArray)-1;
    while($low < $high){
        $mid = $low + floor(($high - $low)/2);
        if($rotateArray[$mid] > $rotateArray[$high])
            $low = $mid+1;
        elseif($rotateArray[$mid] == $rotateArray[$high])
            $high = $high - 1;
        else
            $high = $mid;
    }
     return $rotateArray[$low];
     /* 
    #第二种方法
    return min($rotateArray);
    */
}
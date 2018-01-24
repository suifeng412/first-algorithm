<?php

$a = "srwthyjuhdIDONNeognalnvslbrp";
echo "$a<br/>";
$b = count_chars($a,1);
echo "<pre>";
print_r($b);
echo "</pre>";
$index = 9999;
foreach ($b as $k => $v) {
    if($v == 1){
        // echo chr($k);
        $temp = strpos($a, chr($k));
        if($temp<$index)
            $index = $temp;
    }
}
echo "<pre>";
print_r($index);
echo "</pre>";die;

$c = strpos($a, 'f');
echo "<pre>";
print_r($c);
echo "</pre>";die;
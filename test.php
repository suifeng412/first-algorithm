<?php

$str = "ooooadddefgddddddddagfagag";
$n = 6;

$b = preg_replace("/(.{0,$n})(.*)/i", "\$2\$1", $str);

echo "<pre>";
print_r($b);
echo "</pre>";die;
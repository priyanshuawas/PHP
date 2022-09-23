<?php
//6.Write a PHP script to format values in currency
//Sample values :value1 = 65.45, value2 = 104.35
//Expected Result :169.80

$val_1 = 65.45;
$val_2 = 104.35;
$res = $val_1 + $val_2;
echo number_format($res, 2);
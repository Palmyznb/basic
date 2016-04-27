<?php
$arrl1 = array(1,2,3);
print_r($arrl1);
echo "<hr/>";

$arrl2 = [1,2,3];
print_r($arrl2);
echo "<hr/>";

$arrl3 = ['a' => 1, 'b' => 2, 'c' => 3];
print_r($arrl3);
echo "<hr/>";

echo $arrl3['b'];
echo "<hr/>";

$xyz = $arrl3['c'];
echo $xyz;
echo "<hr/>";
?>

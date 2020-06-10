<?php 
$phone1 = '60000';
$phone2 = '56568';
$phone3 = '52152';

$summ = $phone1 + $phone2 + $phone3;
$nds = ($summ / 100) * 20;
$number1 = $summ;

echo "Сумма = ";
echo number_format($summ, 2, ',' . ' ', ' ');
echo " руб.<br/>";

echo "НДС = ";
echo number_format($nds, 2, ',' . ' ', ' ');
echo " руб.<br/>";

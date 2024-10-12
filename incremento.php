<?php
// ++$a - Pŕe incremento, Incrementa $a em um, então retorna $a
// $a++ - Pós incremento, Retorna $a, então incrementa $a em um
// --$a - Pré decremento, Decrementa $a em um, então retona $a
// $a-- - Pós dremento, Retorna $a, então decrementa $a em um

echo 'Pré incremento', "\n";
$a = 10;
echo 'deve ser 11: ' , ++$a , "\n";
echo 'Deve ser 11: ', $a , "\n";

echo 'Pós incremento', "\n";
$a = 10;
echo 'deve ser 10: ' , $a++ , "\n";
echo 'Deve ser 11: ' . $a , "\n";

echo 'Pré Decremento', "\n";
$a = 10;
echo 'deve ser 9: ' , --$a , "\n";
echo 'Deve ser 9: ' , $a , "\n";

echo 'Pós decremento' , "\n";
$a = 10;
echo 'deve ser 10: ' , $a--, "\n";
echo 'deve ser 9: ' , $a , "\n";

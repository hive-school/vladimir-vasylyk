//example 2 from book
<?php

$a = array("и"=>"Информатика", 
           "м"=>"Математика");
$b = array("и"=>"История","м"=>"Биология",
           "ф"=>"Физика");
$c = $a + $b;
$d = $b + $a;
print_r($c); 
/* получим: Array([и]=>Информатика
   [м]=>Математика [ф]=>Физика) */
print_r($d); 
/* получим: Array([и]=>История
   [м]=>Биология [ф]=>Физика) */

//adding more operators to testfile

foreach ($d as $k => $val)
{
   echo "Code $k: book $val \n";
}
?>

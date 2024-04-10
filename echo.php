<?php
echo "\n";
$chao = "
  CCCCC   HH   HH       AAA        OOOO           GGGGG       AAA        OOOO
 CC   CC  HH   HH      AA AA      OO  OO         GG   GG     AA AA      OO  OO
 C        HHHHHHH     AAAAAAA    OO    OO        G          AAAAAAA    OO    OO 
 CC   CC  HH   HH    AA     AA    OO  OO         GG  GGG   AA     AA    OO  OO
  CCCCC   HH   HH   AA       AA    OOOO           GGG GG  AA       AA    OOOO 
\n";

echo $chao;
$min = $_POST['min'];
$max = $_POST['max'];
$remote = $_SERVER['REMOTE_ADDR'];
$today = date("Y-m-d H:i:s");
$records = $today . ' ' . $min . ' ' . $max . ' >>> ' . $remote . "\n";
$fname = "mydata.txt";
if(file_exists($fname))
	$fp = fopen($fname, "a");
else $fp = fopen($fname, "w");
fwrite($fp, $records);
fclose($fp);
echo "data stored\n";
?>
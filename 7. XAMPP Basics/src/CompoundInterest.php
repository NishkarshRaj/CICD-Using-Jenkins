<?php
$p=$_POST["p"];
$r=$_POST["r"];
$t=$_POST["t"];
$f=$_POST["f"];
$n=0;

if($f=="half")
{
$n=2;
}
if($f=="year")
{
$n=1;
}

$d=$n*100;

$a = $p*pow(1+$r/$d,$n*$t);

$ci=$a-$p;

echo "<h2> Compound Interest is = $ci </h2>";
?>
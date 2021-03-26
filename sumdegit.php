<?php
$n=56;
$sum=0;
for($i=0;$i<=strlen($n);$i++)
{
	$rem=$n%10;

	$n=$n/10;

	$sum=$sum+$rem;
}
echo "$sum";
?>

<?php
$n=371;
$rev=0;
$temp=$n;
while($n>0)
{
$rem=$n%10;
$rev=$rev+($rem*$rem*$rem);
$n=$n/10;
}
if($temp==$rev)
echo "the number is $sum amstrong";
else
	echo "the number is $sum not amstrong";
?>

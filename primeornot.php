<?php
$n=5;
$flag=0;
for($i=2;$i<$n;$i++)
{
	if($n%$i==0)
		$flag+=1;
	break;
}

if($flag==0)
	echo " the number is not a prime";
else
		echo "number is prime";


?>
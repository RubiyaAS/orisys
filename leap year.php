<?php
$n=2010;
if(($n%4==0)&&($n%100!=0)||($n%400==0))
{
echo "leapyear:",$n;
}
else
{
	echo "not leaoyear:",$n;
}

?>

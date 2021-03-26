<?php
$mult_array=[[1,2,3],[4,5,6],[7,8,9]];
print_r($mult_array);
echo "<br>";
foreach($mult_array as $arr=>$innerarray)
{
	foreach($innerarray as $value)
	{
	echo "$value";
}
echo "<br>";
//print_r($mult_array[1][0]);
}
?>

<?php 
    
	$length = 10;
	$width = 10;
	
	$area = ($length * $width);
	$perimeter = 2*($length + $width);
	
	
	echo "Area: ".$area;
	
	echo "<br>Perimeter: ".$perimeter;
	
	if($length == $width)
		echo "<br>The shape is a square";
	
?>
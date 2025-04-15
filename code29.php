<?php
	$terms = 10;
	$first = 0;
	$second = 1;
	echo "Fibonacci series up to $terms terms: ";
	echo $first . ", " . $second;

	for ($i = 3; $i <= $terms; $i++) {
    		$next = $first + $second; 
    		echo ", " . $next;        
    		$first = $second;         
   		 $second = $next;          
	}

	echo "\n\n";
	echo "Code executed by Krish Talwar(0221BCA160)(2220100331)";
?>

<?php
	$a = ["a" => 1, "b" => 2, "c" => 3];
	$b = ["c" => 4, "d" => 5];

	// Union
	$union = $a + $b; 
	print_r($union); // Keeps values from $a for duplicate keys
	echo "\n";

	// Equality
	var_dump($a == ["a" => 1, "b" => 2, "c" => 3]); // true
	echo "\n";

	// Identity
	var_dump($a === ["a" => 1, "b" => 2, "c" => 3]); // true (same order)
	echo "\n";

	// Inequality
	var_dump($a != $b); // true
	echo "\n";
	
	// Non-identity
	var_dump($a !== ["b" => 2, "a" => 1, "c" => 3]); // true (order mismatch)
	echo "\n\n";
	echo "Code executed by Krish Talwar(0221BCA160)(2220100331)";
?>
<?php
	//First Method
	$salaries = array("roshan" => 2000, "twinkle" => 1000, "zara" => 500);
	echo "Salary of Roshan is: " . $salaries['roshan'] . "\n";
	echo "Salary of Twinkle is: " . $salaries['twinkle'] . "\n";
	echo "Salary of Zara is: " . $salaries['zara'] . "\n\n";
	
	//Second Method
	$salaries['roshan'] = "High";
	$salaries['twinkle'] = "Medium";
	$salaries['zara'] = "Low";
	
	echo "Salary of Roshan is: " . $salaries['roshan'] . "\n";
	echo "Salary of Twinkle is: " . $salaries['twinkle'] . "\n";
	echo "Salary of Zara is: " . $salaries['zara'] . "\n";
	
	echo "\n";
	echo "Code executed by Krish Talwar (0221BCA160)(2220100331)";
?>

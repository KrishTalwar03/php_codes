<?php
	$globalVar = "I am global"; // Global variable

	function testScope() {
    		global $globalVar;
    		$localVar = "I am local";
    		echo $localVar . "\n";
    		echo $globalVar . "\n";
	}

	testScope();
	echo $globalVar . "\n";

	class MyClass {
    		public $instanceVar = "I am instance";

    		public function showVar() {
        		echo $this->instanceVar . "\n";
    		}
	}	

	$obj = new MyClass();
	$obj->showVar();
	echo $obj->instanceVar . "\n\n";
	echo "Code executed by Krish Talwar(0221BCA160)(2220100331)";
?>
<?php

    	// Class definition
    	class greeting
    	{
        	// properties
        	public $str = "Hello World!";
        
        	// methods
        	function show_greeting()
        	{
            		return $this->str;
        	}
    	}
     
    	// Create object from class
    	$message = new greeting;
    	var_dump($message);
	echo "\n\n";
	echo "Code executed by Krish Talwar(0221BCA160)(2220100331)";
?>
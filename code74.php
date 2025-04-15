<?php

    if (!(file_exists("welcome.txt")))
    {
        echo "could not open the file";
    }
    
    else
    {
        $text = fopen("welcome.txt","r");
        var_dump($text);
    }

    echo "<br><br>";
    echo "Code executed by Krish Talwar (0221BCA121) (2220100331)";
    
?>
<?php

    $file = fopen("welcome.txt", "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    while(!feof($file))
    {
        echo fgets($file). "<br>";
    }
    fclose($file);
    echo "<br><br>";
    echo "Code executed by Krish Talwar (0221BCA121) (2220100331)";
?>
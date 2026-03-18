<?php
$i = 0;
$j = 0;
$c = 0;

    // Outer loop starts
    do {
        $j = 0;

        // inner loop starts
        do {
            $c++;
			echo $c;
            $j++;
        } while ($j < 3);
        echo "<br>";
        $i++;
    } while ($i < 3);
	
?>
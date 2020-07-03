<?php
	$kolom = 1;
	$i = 1;
	$j = 1;
	for ($i=1;$i<=15;$i++) {
		for ($j=1;$j<=15;$j++) {
        	if ($i % 2 == 1) {
            	if ($kolom % 2 == 1) {
                	if ($j == 2) {
                    	echo "&nbsp;";
                    } else {
                    	echo "@";
                    }
                } else {
                	if ($j == 14) {
                    	echo "&nbsp;";
                    } else {
                    	echo "@";
                    }
                }
                if ($j == 15) {
                	$kolom++;
                }
            } else {
            	if ($j == 1 || $j == 15) {
                	echo "@";
                } else {
                	echo "&nbsp;&nbsp;&nbsp;";
                }
            }
        }
		echo "<br />";
	}
?>
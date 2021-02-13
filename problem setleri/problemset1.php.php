<?php

date_default_timezone_set('Europe/Istanbul');
 $zaman = date("h");

    if($zaman >=02 and $zaman <03) {
        echo "selam";
    }

    elseif($zaman >03 and $zaman <04) {
            echo "naber";
    }
    elseif($zaman ==04) {
            echo "nasılsın";
    }
    elseif($zaman ==05) {
            echo "hoşgeldin";
    }
    elseif($zaman ==10) {
             echo "iyi geceler";
    }
    

    
?>






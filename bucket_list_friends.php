<?php

    echo("hoeveel vrienden zal ik vragen om hun droom");
    $vrienden = readline();
    if (is_numeric($vrienden)){
        $vrienden = intval($vrienden);

        for($i = 0; $i < $vrienden; $i++){
            echo("wat is de naam van uw vriend?".PHP_EOL);
            $naam = readline();
            echo("wat is de droom van uw vriend?".PHP_EOL);
            $droom = readline();
            $totaal[$naam]=$droom;
        }

        foreach($totaal as $naam1=>$droom1){
            echo($naam1." zijn droom is ".$droom1.PHP_EOL);
        }







    } else {
        echo("$vrienden is geen getal probeer het opnieuw");
    }

?>
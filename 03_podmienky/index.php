<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*
    {} : alt gr b / n
    $ : alt gr ô
    */

    //podmienky
    /*
        Podmienka je programovacia paradigma, pomocou kt. sa rozhoduje, kt. kód sa vykoná. 
        Obsahuje logický výraz napr. j < 5.
        Ak je pod splnená, tak sa vykoná kód uvedený pod touto pod.
        Ak pod nie je splnená, tak sa preskočí alebo sa vykoná kód v časti else.
        Pri porovnávaní viacerých výrazov používame príkaz else if.
        Špeci pod v modernom programovaní je switch.
    */
        if(1<5){
            echo "1 je menej ako 5";

        $cislo1 = 10;
        $cislo2 = 50;
        }
        //Operátor
        /*
        == : rovná sa
        != : nerovná sa
        ! : negácia
        <= : menšie rové
        >= : väčšie rovné
        === : porovnáva hodnotu aj dátový typ (2===2):pravda | (2 !== "2"):nepravda
        */

        if($cislo1 != $cislo2;){
            echo "Toto sa vykoná";
        }

        echo "</br>";

        if($cislo1 == $cislo2){
            echo "Tento kod sa vykona";
        }else{
            echo "Vykoná sa tento kod";
        }

        //úloha na precvičenie si podmienok
        /*
        
        */
    ?>
</body>
</html>
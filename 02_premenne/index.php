<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premenne</title>
</head>
<body>
    <h1> Tento web je zameraný na premenné <h1>
    <?php

    echo "<p>". 2 + 4 ."</p>";  //aby vypislalo ako html

    $cislo = 5;
    echo $cislo; //bez html znaciek

    echo "<br>";

    $desCislo = 4.2;
    echo $desCislo;

     echo "<br>";

    $cislo1 = 4.3;
    $cislo2 = 2.7;

     echo "<br>";

    $vysledok = (int)$cislo1 + (int)$cislo2; //retype z float na int
    echo $vysledok;

    echo "<br>";

    $textCislo = "toto je moje cislo" . $cislo1;
    echo $textCislo;

    echo "<br>";

    $pravdivost = true; //boolean
    echo $pravdivost;
    ?>
</body>
</html>
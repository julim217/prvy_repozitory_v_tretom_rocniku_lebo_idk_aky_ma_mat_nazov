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
      V cykle od 1 po 10 zväčšujte font písma
      o 5px. Slove hodina priraďte náhodnú farbu 
      v každom cykle. 
    */

    $k = 1;
    $nahCislo1 = 0;
    $nahCislo2 = 0;
    $nahCislo3 = 0;
    $fontSize = 10;
    while($k < 10){
      $nahCislo1 = rand(0, 255);
      $nahCislo2 = rand(0, 255);
      $nahCislo3 = rand(0, 255);
      $fontSize = $fontSize + 5;

      echo "<p style='font-size: {$fontSize}px';> 
      Najlepsia 
      <span style='color: 
      rgb($nahCislo1, $nahCislo2, $nahCislo3)';>
      hodina</span> na svete</p>";
      $k++;
    }
    /*
    do while úloha:
    Vytvorte cyklus od 0 do 6.
    V každom cykle vytvorte kombináciu kariet. 
    Každý hráč dostane 2 karty. 

    Hodnoty:
    2 - 10, 11 (J), 12 (Q), 13 K, 14 (A)

    4 znaky - ♠ (čierna), ♥ (červená), ♣ (čierna), ♦ (červená)
    */
    for($i = 1; $i <= 6; $i++){
      echo "Hráč $i: " . "</br>";
    }



    ?>
</body>
</html>
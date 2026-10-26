<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // POLIA
    /*
    Pole je premenna, kt. si dokaze uchovat viacero hodnot. 
    Kazda hodnota v poli je indexovana. 

    Indexovanie je jedinecne priradenie cisla k hodnote. 
    Indexovanie standartne fungue od 0 po nekonecno (resp. po pocet prvkov v nasom poli).

    Pole sa v programovani (roznych jazykoch) oznacuje ako [] -- alt gr F
    napriklad $ovocie ["pomaranc", "mandarinka", "slivka"]

    pole $ovocie obsahuje tri hodnoty, index hodnoty pomaranc je 0

    v jazyku PHP sa pole definuje pomocou funkcie array()
    */

   //_______________________________________________________________________________________

    /*
    do while úloha:
    Vytvorte cyklus od 0 do 6.
    V každom cykle vytvorte kombináciu kariet. 
    Každý hráč dostane 2 karty. 

    Hodnoty:
    2 - 10, 11 (J), 12 (Q), 13 K, 14 (A)

    4 znaky - ♠ (čierna), ♥ (červená), ♣ (čierna), ♦ (červená)
    */

    $prvaKarta = 0;
    $druhaKarta = 0;
    $kartaJ = 'J';          //iba jeden znak davame do ''
    $kartaQ = 'Q';
    $kartaK = 'K';
    $kartaA = 'A';

    $znaky = array('♠', '♥', '♣', '♦');


    for($i = 1; $i <= 6; $i++){
      $prvaKarta = rand(2, 14);
      $druhaKarta = rand(2, 14);

      if($prvaKarta == 11){
        $prvaKarta = $kartaJ;
      }else if ($prvaKarta == 12){
        $prvaKarta = $kartaQ;
      }else if ($prvaKarta == 13){
        $prvaKarta = $kartaK;
      }else if ($prvaKarta == 14){
        $prvaKarta = $kartaA;
      }

      if($druhaKarta == 11){
        $druhaarta = $kartaJ;
      }else if ($druhaKarta == 12){
        $druhaKarta = $kartaQ;
      }else if ($druhaKarta == 13){
        $druhaarta = $kartaK;
      }else if ($druhaKarta == 14){
        $druhaKarta = $kartaA;
      }


      echo "Hráč $i.: " . "{$prvaKarta} {$druhaKarta} " . "</br>";
    }
?>
</body>
</html>
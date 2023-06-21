<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    
<?php

$summespieler1 = 0;
$summespieler2 = 0;

while ($summespieler1 <= 20 && $summespieler2 <20 || $summespieler2 <= 20 && $summespieler1 <20) {
    $zufallszahl1 = rand(1,6);
    $zufallszahl2 = rand(1,6);
    echo "Nächste Runde <br>";
    $summespieler1 = $summespieler1 + $zufallszahl1;
    $summespieler2 = $summespieler2 + $zufallszahl2;
    echo $summespieler1 . "<br>";
    echo $summespieler2 . "<br>";
}

if ($summespieler1 >= 20 && $summespieler2 >= 20) {
    echo "Unentschieden <br>";
} else if ($summespieler1 > $summespieler2) {
    echo "Spieler 1 hat gewonnen<br>";
} else { echo "Spieler 2 hat gewonnen<br>";
}
?>

</body>
</html>
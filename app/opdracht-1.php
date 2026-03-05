<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mijn Profiel</title>
</head>
<body>

<h1>Mijn Profiel</h1>
<?php

// STAP 1: Maak hier je variabelen.
$naam = "Carmen";
$leeftijd = 23;
$uurloon = 15.37;
$urenGewerkt = 76.00;
$verdiend = $urenGewerkt * $urenGewerkt;
// $naam
// $leeftijd
// $uurloon
// $urenGewerkt

// STAP 2: Toon hier je naam en leeftijd.
echo $naam." ";
echo $leeftijd." ";
?>
<div>

</div>

// STAP 3: Bereken hier hoeveel je hebt verdiend en laat dit zien.
echo $uurloon*$urenGewerkt;

?>
</body>
</html>
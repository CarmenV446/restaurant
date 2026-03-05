<?php

// STAP 1: Maak hier een array met je hobby's
// Bijvoorbeeld: ["Gamen", "Voetbal", "Programmeren"]
$mijnhobbies= ["gamen", "borduren", "fotografie"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mijn Hobby's</title>
</head>
<body>

<h2>Hobby's</h2>


    <!-- STAP 2: Toon hier je hobby's met een loop en HTML -->
    <div>
        <ul>
    <?php
    foreach($mijnhobbies as $hobby){
        echo "<li>".$hobby."</li>";
    }
    ?>
        </ul>
    </div>
    <div>
        <ul>
    <?php
    for($i = 0; $i < count($mijnhobbies); $i++){
        echo "<li>".$mijnhobbies[$i]."</li>";
    }
    ?>
        </ul>
    </div>


</body>
</html>
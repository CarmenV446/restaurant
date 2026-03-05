<?php

// Studentenlijst
$studenten = [
        ["naam" => "Emma", "leeftijd" => 17],
        ["naam" => "Liam", "leeftijd" => 19],
        ["naam" => "Noah", "leeftijd" => 16],
        ["naam" => "Karim", "leeftijd" => 21],
        ["naam" => "Lucas", "leeftijd" => 18]
];

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Studentenlijst</title>
</head>
<body>

<h1>Studentenlijst</h1>
<div style="background-color: red">
    <?php
    foreach ($studenten as $student) {
        if (($student["leeftijd"])<18){
    echo $student["naam"]." ";
        }

    }

    ?>
</div>
<div style="background-color: green">
    <?php
    foreach ($studenten as $student) {
        if (($student["leeftijd"]) >= 18){
            echo $student["naam"]." ";
        }
    }
    ?>
</div>
<ul>
<?php
foreach ($studenten as $student)
{
    if ($student["leeftijd"] < 18)
    {
        echo "<li style = 'color : red'>", $student["naam"]," ", $student["leeftijd"], "</li>";
    }
    else
    {
        echo "<li style = 'color : green'>", $student["naam"]," ", $student["leeftijd"], "</li>";
    }
}
?>
</ul>




<!-- HIER MOET JOUW CODE KOMEN -->
<!-- Toon alle studenten. Studenten die minderjarig zijn markeer je rood. -->
<!-- Studenten die volwassen zijn, markeer je groen -->

</body>
</html>
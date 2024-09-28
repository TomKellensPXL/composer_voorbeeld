<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border-right: 1px solid black;
            text-align: right;
            padding: 4px;
        }
    </style>
</head>
<body>
<div>
    <!--    temperaturen-->
    <?php
        $temperatures = '15 17 18 16 14 19 21 22 23 20 18 17 16 15 19 21 22 23 20 18 17 19 21 22 23 20 19 18 17 16';
//      $temperaturesArray = [15, 17, 18, 16, 14, 19, 21, 22, 23, 20, 18, 17, 16, 15, 19, 21, 22, 23, 20, 18, 17, 19, 21, 22, 23, 20, 19, 18, 17, 16];
        $temperaturesArray = explode(" ", $temperatures);
        $temperaturesArray = array_map('intval', $temperaturesArray);

//      String van temperaturen weergeven
        echo "<h1>Gemeten temperaturen: $temperatures</h1>";

//      Gemiddelde temperatuur berekenen met 2 decimalen na komma
        $averageTemperature = 0;
        for ($i = 0; $i < count($temperaturesArray); $i++) {

            $averageTemperature = $averageTemperature + $temperaturesArray[$i];
        }
        $averageTemperature = $averageTemperature / count($temperaturesArray);
        $averageTemperature = round($averageTemperature, 2);
//      $averageTemperature = round(array_sum($temperaturesArray) / count($temperaturesArray), 2); BLIJKBAAR KAN DIT OOK -_-
        echo "<h1>Gemiddelde temperatuur: $averageTemperature</h1>";

//      Sorteren van arrays om van laag naar hoog te gaan
        sort($temperaturesArray);

        echo "<h1>Gesorteerde temperaturen: " . implode(" " ,$temperaturesArray) . "</h1>";

//      De 5 laagste temperaturen
        $lowTemperatures = array_slice($temperaturesArray, 0, 5);
        echo "<h1>5 Laagste temperaturen: " . implode(" ", $lowTemperatures) . "</h1>";

//      De 5 hoogste temperaturen
        $highTemperatures = array_slice($temperaturesArray, -5);
        echo "<h1>5 Hoogste temperaturen: " . implode(" ", $highTemperatures) . "</h1>";
    ?>

<!--    Duos in stripverhalen-->
    <?php
        $characters1 = ['Suske', 'Willy', 'Kuifje', 'Tintin', 'Jommeke', 'Jeremy'];
        $characters2 = ['Wiske', 'Wanda', 'Bobby', 'Snowy', 'Filiberke', 'Frankie'];

        for ($i = 0; $i < count($characters1); $i++) {
            if ($i % 2 == 0) {
                echo "<h1>$characters1[$i] en $characters2[$i]</h1>";
            }
            else {
                echo "<h1>$characters1[$i] and $characters2[$i]</h1>";
            }
        }
    ?>

<!--    Tabel met even nummers-->
    <table>
        <?php
            $start = 787;
            $end = 1092;
            $counter = 0;

            echo "<tr>";

            for ($i = $start; $i <= $end; $i++) {
                if ($i % 2 == 0) {
                    echo "<td>$i</td>";
                    $counter++;
                }

                if ($counter % 10 == 0) {
                    echo "</tr><tr>";
                }
            }

//            if ($counter % 10 != 0) { Waarom moet dit niet?
//                echo "</tr>";
//            }

        ?>
    </table>

<!--    (Uitdagendere) opdracht: Teken een Schaakbord-->
    <?php
        $aantalRijenEnKolommen = 8;
        $veldGrootte = 30;
        $kleur1 = "white";
        $kleur2 = "black";

        $svgGrootte = $aantalRijenEnKolommen * $veldGrootte;

        echo "<svg width='$svgGrootte' height='$svgGrootte'>";

        for ($rij = 0; $rij < $aantalRijenEnKolommen; $rij++) {
            for ($kolom = 0; $kolom < $aantalRijenEnKolommen; $kolom++) {
                $x = $kolom * $veldGrootte;
                $y = $rij * $veldGrootte;

                if (($kolom + $rij) % 2 == 0) {
                    $kleur = $kleur1;
                }
                else {
                    $kleur = $kleur2;
                }

                echo "<rect x='$x' y='$y' width='$veldGrootte' height='$veldGrootte' fill='$kleur'></rect>";
            }

        }
        echo "</svg>";
    ?>
</div>
</body>
</html>

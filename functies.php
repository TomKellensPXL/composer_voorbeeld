<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
<div>

<!--    Loterij nummers-->
    <?php
        $randomNumbers = [];

        for ($i = 0; $i < 6; $i++) {
            $randomNumbers[] = mt_rand(1, 45);
        }

        sort($randomNumbers);

        echo "<ul>";

        for ($i = 0; $i < count($randomNumbers); $i++) {
            echo "<li>" . $randomNumbers[$i] . "</li>";
        }

        echo "</ul>";
    ?>

<!--    Grappige strings-->
    <?php
        $strings = array("one two three four five", "was it a car or a cat i saw", "a man a plan a canal panama", "madam I'm Adam");

        foreach ($strings as $string) {
            echo "<h2>$string</h2>";
        }
        echo "<h2>-----------------------------------</h2>";

        foreach ($strings as $string) {
            echo "<h2>" . strrev($string) . "</h2>";
        }
        echo "<h2>-----------------------------------</h2>";

        foreach ($strings as $string) {
            echo "<h2>" . reverseWords($string) . "</h2>";
        }
        echo "<h2>-----------------------------------</h2>";

        foreach ($strings as $string) {
            echo "<h2>" . ucwords($string) . "</h2>";
        }

//        function reverseWords($string) {  Dit zorgt er niet voor dat de woorden omdraaien maar dat de letters van elk woord omdraaien.
//            $splitStringArray = explode(" ", $string);
//            for ($i = 0; $i < count($splitStringArray); $i++) {
//                $splitStringArray[$i] = strrev($splitStringArray[$i]);
//            }
//            $splitStringArray = implode(" ",$splitStringArray);
//            return $splitStringArray;
//        }

        function reverseWords($string) {
            $splitStringArray = explode(" ", $string);

            $reversedArray = array_reverse($splitStringArray);

            $reversedArray = implode(" ", $reversedArray);
            return $reversedArray;
        }
    ?>

<!--    Grappige Datums-->

    <?php
        date_default_timezone_set("Europe/Brussels");

        $birthday = mktime(0, 0, 0, 8, 14, 2001);
        $nationalDay = mktime(0, 0, 0, 07, 21, 2025);
        $sinterklaas = mktime(0, 0, 0, 12, 6, 2024);
        $today = time();

        $secondsUntilSinterklaas = $sinterklaas - $today;

        $nightsUntilSinterklaas = floor($secondsUntilSinterklaas / (60 * 60 * 24));

        echo "<h2>Ik ben geboren op " . date("l F Y", $birthday) . ".</h2>";
        echo "<h2>Volgend jaar (" . date("Y", $nationalDay) . "), zal de Nationale feestdag (". date("d F", $nationalDay) . ") op een " . date("l", $nationalDay) . " vallen.</h2>";
        echo "<h2>Nog $nightsUntilSinterklaas nachten totdat Sinterklaas terug in het land zal zijn.</h2>"
    ?>

<!--    Sorteren-->

    <?php
        $rows[0] = [3, 7, 10, 19, 25];
        $rows[1] = [3, 7, 30, 19, 25];
        $rows[2] = [3, 7, 10, 19, 17];

        foreach ($rows as $row) {
            echo "<h2>" . implode(", ",$row) ." => ". (isSorted($row) ? "sorted": "NOT sorted") . "</h2>";
        }
        function isSorted($numbers) {
//            if ($numbers == sort($numbers)) { Dit werkt niet omdat sort de array hier al sorteerd wordt. Permanent
//                return true;
//            }
//            else {
//                return false;
//            }

            $sortedNumbers = $numbers;
            sort($sortedNumbers);

            if ($numbers === $sortedNumbers) {
                return true;
            }
            else {
                return false;
            }
        }
    ?>
</div>
</body>
</html>

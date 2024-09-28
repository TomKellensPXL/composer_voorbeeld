<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
<div>

<!--    De rekening aub-->
    <?php
        $price = 2.65;
        $number = 13;
        $reduction = 10;

        $rawTotal = $price * $number;
        $reductionAmount = ($rawTotal /100) * $reduction;
        $total = $rawTotal - $reductionAmount;

        echo "<h1>De prijs is € $price</h1>\n";
        echo "<h1>Het aantal is $number</h1>\n";
        echo "<h1>De korting is $reduction%</h1>\n";
        echo "<h1>Het totaal is € $total</h1>";
    ?>

<!--    Celcius naar fahrenheit-->
    <?php
        $celsius = 25;
        $fahrenheit = ((9/5) * $celsius) + 32;

        echo "<h1>$celsius" . "°C" . "</h1>\n";
        echo "<h1>$fahrenheit" . "°F" . "</h1>\n";
    ?>



</div>
</body>
</html>

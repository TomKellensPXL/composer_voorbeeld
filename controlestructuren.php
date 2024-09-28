<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
<div>
<!--    Kleinste nummer-->
    <?php
        $x = 542;
        $y = 487;
        $z = 145;

        if ($x < $y and $x < $z) {
            echo "<h1>Het kleinste getal is " . $x . "</h1>\n";
        }
        elseif ($y < $x and $y < $z) {
            echo "<h1>Het kleinste getal is " . $y . "</h1>\n";
        }
        else {
            echo "<h1>Het kleinste getal is " . $z . "</h1>\n";
        }
    ?>

<!--    Welkom-->
    <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<h$i>Welkom bij Web Expert 1</h$i>";
        }
        echo "<h1>------------------------------------------------</h1>";
        for ($i = 6; $i >= 1; $i--) {
            echo "<h$i>Welkom bij Web Expert 1</h$i>";
        }
    ?>
</div>
</body>
</html>

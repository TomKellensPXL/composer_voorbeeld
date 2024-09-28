<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $randNumber1 = rand(1, 6);
    $randNumber2 = rand(1, 6);
    $randNumber3 = rand(1, 6);

    $randNumberArray = ['Dobbelsteen 1' => $randNumber1, 'Dobbelsteen 2' => $randNumber2, 'Dobbelsteen 3' => $randNumber3];
    $total = $randNumber1 + $randNumber2 + $randNumber3;

    foreach ($randNumberArray as $key => $value) {
        $imgPath = '';
        echo "<h2>$key heeft als nummer $value</h2>";

        switch ($value) {
            case 1:
                $imgPath = 'assets/dice-six-faces-one.png';
                break;
            case 2:
                $imgPath = 'assets/dice-six-faces-two.png';
                break;
            case 3:
                $imgPath = 'assets/dice-six-faces-three.png';
                break;
            case 4:
                $imgPath = 'assets/dice-six-faces-four.png';
                break;
            case 5:
                $imgPath = 'assets/dice-six-faces-five.png';
                break;
            case 6:
                $imgPath = 'assets/dice-six-faces-six.png';
                break;
        }
        echo "<img src=\"$imgPath\" alt='dice' width='125px'>";
    }
    echo "<h2>Het totaal is $total</h2>";
?>

    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <button class="btn-primary-dice" type="submit">Gooi 3 dobbelstenen</button>
    </form>
</body>
</html>
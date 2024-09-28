<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
<div>
<!--    <h1>--><?php //echo 'Tom Kellens'; ?><!--</h1>-->

    <!-- Verkorte notatie -->
<!--    <h1>--><?php //= 'Tom Kellens'; ?><!--</h1>-->

    <?php
    $name = 'Tom Kellens';
    $age = '23';

    echo '<h1>' . $name . '</h1>';
    echo "<p>Mijn leeftijd is $age</p>";

/*    echo <<<ME
        <h1>$name</h1>
        <p>Mijn leeftijd is $age</p>
    ME;*/
    ?>
</div>
</body>
</html>

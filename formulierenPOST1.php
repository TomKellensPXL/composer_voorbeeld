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
$operators = ["add" => "+", "subtract" => "-", "multiply" => "*", "divide" => "/"]; // Ik snap niet waarom de tekens worden meegegeven.
$number1 = '';
$number2 = '';

if ($_POST) {
$number1 = intval($_POST['number1']);
$number2 = intval($_POST['number2']);

$selectedOperator = $operators[$_POST['button']];
$total = '';

switch ($selectedOperator) {
    case '+':
        $total = $number1 + $number2;
        break;
    case '-':
        $total = $number1 - $number2;
        break;
    case '*':
        $total = $number1 * $number2;
        break;
    case '/':
        if ($number2 !== 0) {
            $total = $number1 / $number2;
        }
        else {
            $total = "Error";
        }
        break;
    }
}
?>

<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <p>
        <label for="number1">Number 1: </label>
        <input type="number" id="number1" required name="number1" value="<?= $number1 ?>">
    </p>

    <p>
        <label for="number2">Number 2: </label>
        <input type="number" id="number2" required name="number2" value="<?= $number2 ?>">
    </p>

    <p>
        <?php
        foreach ($operators as $key => $value) {
            echo "<button type='submit' class ='btn-primary' name='button' value='$key'>$key</button> ";
        }
        ?>
    </p>
</form>

<div>
    <h2>Total: <?=$total?> </h2>
</div>
</body>
</html>

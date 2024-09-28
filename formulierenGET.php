<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
            if (isset($_GET['number'])) {
                $number = $_GET['number'];
                echo ($number % 2 == 0) ? "$number is even" : "$number is not even";
            }
            else {
                echo "Formulier";
            }
        ?>
    </title>
    <style>
        #number {
            border-color:
            <?php
                if (isset($_GET['number'])) {
                $number = $_GET['number'];
                echo ($number % 2 == 0) ? "blue" : "orange";
                }
            ?>
        }
    </style>
</head>
<body>
<form method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" required value="<?= $number ?? ''?>">
    <button type="submit" class="btn-primary">Submit</button>
</form>

    <?php
        if ($_GET) {
            $number = $_GET['number'];
            $numberState = ($number % 2 == 0) ? "$number is even" : "$number is not even";
            echo $numberState;
        }
    ?>
</body>
</html>
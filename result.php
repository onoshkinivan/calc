<?php
$result = require __DIR__ . '/calc.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="css/result.css">
    <link rel="stylesheet" href="css/base.css">
</head>

<body>
    <div class="wrapper">
        <div class="block-result">
            <div class="desk">Результат вычислений:
            </div>
            <br>
            <div class="result">
                <?= $result ?>
            </div>
        </div>
    </div>
</body>

</html>
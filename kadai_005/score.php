<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎_課題5</title>
</head>
<body>
    <p>
    <?php
    //生徒10人分の点数
    $score01 = 80;
    $score02 = 60;
    $score03 = 55;
    $score04 = 40;
    $score05 = 100;
    $score06 = 25;
    $score07 = 80;
    $score08 = 95;
    $score09 = 30;
    $score10 = 60;

    //合計点
    $total = $score01 + $score02 + $score03 + $score04 + $score05 + $score06 + $score07 + $score08 + $score09 + $score10;

    //平均点
    $average = $total / 10;

    echo  $average;
    ?>
    </p>
</body>
</html>
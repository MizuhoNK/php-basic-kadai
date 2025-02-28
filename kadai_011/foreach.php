<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎_11章課題</title>
</head>
<body>
    <p>
        <?php
            $vegitable = ['キー' => '玉ねぎ','値段' => 200,'産地' => '北海道'];
            foreach ($vegitable as $key => $value){
                echo "{$key}：{$value}  <br>";
            }
        ?>

    </p>
    
</body>
</html>
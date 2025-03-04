<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編_並び替え</title>
</head>
<body>
   <p>
   <?php
        function sort_2way(array $numbers, bool $order) {
        if ($order === true) {
            sort($numbers); // 昇順ソート
            echo '昇順にソートします<br>' ;
        }else {
            rsort($numbers); // 降順ソート
            echo '降順にソートします<br>';
        }
        foreach ($numbers as $number){
            echo $number . "<br>";
        }
        }
        
        $num = [15, 4, 18, 23, 10];
        sort_2way($num, true); // 出力: 1, 2, 3, 5, 8（昇順）
        sort_2way($num, false); // 出力: 8, 5, 3, 2, 1（降順）
    ?>
   </p> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎_16章課題</title>
</head>
<body>
    <p>
        <?php
        //クラス「Food」を定義する
        class Food{
            //プロパティを定義する
            public $name;
            public $price;
            //コンストラクタを定義する
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            //関数を定義する
            public function show_price(){
                echo $this->price . '\n';
            }
        }
        //クラス「Animal」を定義する
        class Animal{
            //プロパティを定義する
            public $name;
            public $height;
            public $weight;
            //コンストラクトを定義する
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            //関数を定義する
            public function show_height(){
                echo $this->height . '\n';
            }
        }
        //インスタンス化する
        $food = new Food('potato',250);
        $animal = new Animal('dog', 60, 5000);
        //インスタンス$foodの各プロパティの値を出力する
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';
        echo $food->price .'<br>';
        echo $animal->height . '<br>';
        ?>
    </p>
    
</body>
</html>
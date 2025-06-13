<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP_kadai_016</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_name() {
                echo $this->price . '<br>';
            }

        }

        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // インスタンス化と同時に値を設定
         $Food = new Food("potato", 250);
         $Animal = new Animal("dog", 60, 5000);
         print_r($Food);
         echo '<br>';
         print_r($Animal);
         echo '<br>';
         $Food->show_name();
         $Animal->show_height();
        ?>
    </p>
</body>

</html>
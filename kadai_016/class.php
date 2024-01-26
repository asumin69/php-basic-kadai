<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題016</title>
 </head>
 
 <body>
     <p>
        <?php
        // クラスを定義する
        class Food {
            //プロパティを定義する
            private $name;
            private $price;

            //コンストラクタ
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            //メソッドを定義
            public function show_price() {
                echo $this->price . '<br>';
            }
            }
        
        //インスタンス化
        $food = new Food('potato', 250);

        //インスタンス$foodの各プロパティの値を出力する
        print_r($food);
        echo '<br>';
        
        // クラスを定義する
        class Animal {
            //プロパティを定義する
            private $name;
            private $height;
            private $weight;
        
        //コンストラクタを定義
        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            }
            //メソッド
            public function show_height() {
                echo $this->height . '<br>'; 
            }
        }
        //インスタント化
        $animal = new Animal('dog', 60, 5000);
        //インスタンス$foodの各プロパティの値を出力する
        print_r($animal);
        echo '<br>';

        //プロパティの値を出力する
        $food->show_price();
        $animal->show_height();
        

        ?>
        
     </p>

     
 </body>
 
 </html>
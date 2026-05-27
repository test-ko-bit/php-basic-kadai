<!DOCTYPE html>
<html lang="ja">

<body>
    <p>
        <?php
        class Food{
            public $name;
            public $price;
            function show_price(){
                echo $this->price;
            }
        }
        
        $item = new Food();

        $item->name = 'potato';
        $item->price = 250;
        
        echo $item->name;
        echo "<br>";
        
        $item->show_price();

        class Animal{
            public $name;
            public $height;
            public $weight;
            function show_height(){
                echo $this->height;
            }
        }
        
        $item = new Animal();

        $item->name = 'dog';
        $item->height = 60;
        $item->weight = 5000;
        
        echo $item->name;
        echo "<br>";
        
        $item->show_height();

        ?>
    </p>
</body>

</html>
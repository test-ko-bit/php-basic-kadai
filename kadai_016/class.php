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
        
        print_r($item);
        echo "<br>";

        class Animal{
            public $name;
            public $height;
            public $weight;
            function show_height(){
                echo $this->height;
            }
        }
        
        $pet = new Animal();

        $pet->name = 'dog';
        $pet->height = 60;
        $pet->weight = 5000;
        
        print_r($pet);
        
        echo"<br>";
        $item->show_price();

        echo"<br>";
        $pet->show_height();

        ?>
    </p>
</body>

</html>
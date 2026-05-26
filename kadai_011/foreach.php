
<body>
    <p>
        <?php
        // 連想配列を作成
        $items = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        foreach($items as $key => $value){
            echo "$key ： $value" . "<br>";
        }
        ?>
    </p>
</body>

</html>
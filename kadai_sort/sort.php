
<body>
    <p>
        <?php
        // 連想配列を作成
        $nums = [15, 4, 18, 23, 10 ];
        echo "昇順にソートします。";
        echo "<br>";
        sort($nums);

        foreach($nums as $num){
            echo ($num);
            echo "<br>";
        }

        echo "降順にソートします。";
        echo "<br>";
        rsort($nums);
        
        foreach($nums as $num){
            echo ($num);
            echo "<br>";
        }
        ?>
    </p>
</body>

</html>
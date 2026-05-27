
<body>
    <p>
        <?php
        $arrays = [15, 4, 18, 23, 10 ];

        function sort_2way($arrays, $order){
            if($order == true){
                echo "昇順にソートします。<br>";
                sort($arrays);    
            } else {
                echo "降順にソートします。<br>";
                rsort($arrays);
            }
            return $arrays;
        }

        // 昇順の場合
        $nums = sort_2way($arrays, true);

        foreach($nums as $num){
            echo ($num);
            echo "<br>";
        }
        
        // 降順の場合
        $nums = sort_2way($arrays, false);
        
        foreach($nums as $num){
            echo ($num);
            echo "<br>";
        }
        ?>
    </p>
</body>

</html>
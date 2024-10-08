<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題:foreach文を使って連想配列の値とキーを出力しよう</title>
</head>
<body>
    <?php
    $product_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach($product_data as $index => $value){
        echo "{$index}:{$value}<br>";
    }
    ?>

    
</body>
</html>
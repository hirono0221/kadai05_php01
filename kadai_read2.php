<?php
// ファイルを開く
$file2 = fopen('./data/data2.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str2 = fgets($file2)) {
    echo nl2br($str2);
}

// ファイルを閉じる
fclose($file2);
?>

<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>データ表示</title>
</head>    
<body>
   

</body>
</html>

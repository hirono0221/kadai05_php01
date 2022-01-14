<?php

$money_category = $_POST["money_category"];
$amount = $_POST["amount"];
$income_category = $_POST["income_category"];
$income_others = $_POST["income_others"];
$income_person = $_POST["income_person"];
$payment_category = $_POST["payment_category"];
$payment_others = $_POST["payment_others"];
$payment_person = $_POST["payment_person"];

$money_category = htmlspecialchars($money_category, ENT_QUOTES);
$amount = htmlspecialchars($amount, ENT_QUOTES);
$income_category = htmlspecialchars($income_category, ENT_QUOTES);
$income_others = htmlspecialchars($income_others, ENT_QUOTES);
$income_person = htmlspecialchars($income_person, ENT_QUOTES);
$payment_category = htmlspecialchars($payment_category, ENT_QUOTES);
$payment_others = htmlspecialchars($payment_others, ENT_QUOTES);
$payment_person = htmlspecialchars($payment_person, ENT_QUOTES);


// ファイルに書き込むデータ
$date = date('Y/m/d H:i:s');
$str2 = $date . '/' . $amount  . '/' . $money_category . '/' . $income_category . '/' . $income_others . '/' . $income_person . '/' . $payment_category . '/' . $payment_others . '/' . $payment_person;

// ファイルの用意
$file2 = fopen('./data/data2.txt', 'a');

// 書き込み
// fwrite($file, $date . "\n");
fwrite($file2, $str2 . "\n");

// ファイルをクローズ
fclose($file2);

//文字作成

?>


<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>データ登録</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data3.txt を確認しましょう！</h2>

    <ul>
        <li><a href="kadai_read2.php">確認する</a></li>
    </ul>
</body>

</html>
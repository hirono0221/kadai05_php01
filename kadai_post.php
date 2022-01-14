<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>データ入力</title>
</head>

<body>
    出入金の確認<br>
    <form method="post" action="kadai_write.php">
        区分：
        <input type="radio" name="money_category" value="1">入金
        <input type="radio" name="money_category" value="2">出金
        <br>
        金額：
        <input type="number" min="1" max="999999" name="amount">円
        <br>
        入金区分：
        <input type="radio" name="income_category" value="1">月謝
        <input type="radio" name="income_category" value="2">審査料  
        <input type="radio" name="income_category" value="3">その他
        <br>
        入金摘要：
        <input type="text" name="income_others">
        <br>
        入金者：
        <input type="text" name="income_person">
        <br>
        出金区分：
        <input type="radio" name="payment_category" value="1">会場費
        <input type="radio" name="payment_category" value="2">機材費  
        <input type="radio" name="payment_category" value="3">審査関連
        <input type="radio" name="payment_category" value="4">交際費
        <input type="radio" name="payment_category" value="5">その他     
        <br>
        出金摘要：
        <input type="text" name="payment_others">
        <br>
        出金先：
        <input type="text" name="payment_person">
        <br>
        <input type="submit" value="送信">       

    </form>

</body>
</html>
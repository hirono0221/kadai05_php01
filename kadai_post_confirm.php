<!DOCTYPE html>
<html lang="ja">

<?php
$money_category = $_POST['money_category'];
$amount = $_POST['amount'];
$income_category = $_POST['income_category'];
$income_others = $_POST['income_others'];
$income_person = $_POST['income_person'];
$payment_category = $_POST['payment_category'];
$payment_others = $_POST['payment_others'];
$payment_person = $_POST['payment_person'];

?>
<html>

<head>
    <meta charset="utf-8">
    <title>POST練習（受信）</title>
</head>

<body>
    <p>区分： <?php echo $money_category; ?></p>
    <p>金額： <?php echo $amount; ?></p>
    <p>入金区分： <?php echo $income_category; ?></p>
    <p>入金摘要： <?php echo $income_others; ?></p>
    <p>入金者： <?php echo $income_person; ?></p>
    <p>出金区分： <?php echo $payment_category; ?></p>
    <p>出金摘要： <?php echo $payment_others; ?></p>
    <p>出金先： <?php echo $payment_person; ?></p>
</body>

</html>
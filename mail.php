<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<?php $_POST['name'] ?>様<br>
<br>
このたびは○○ホテルのご宿泊のご予約ありがとうございます。<br>
以下の内容でご予約を承りました。<br>
<br>
■ご予約内容<br>
宿泊者代表者様：<?php $_POST["name"] ?><br>
メールアドレス：<?php $_POST["email"] ?><br>
電話番号：<?php $_POST["tel"] ?><br>
<br>
チェックイン：<?php $_POST["chekin"] ?><br>
チェックアウト：<?php $_POST["checkout"] ?><br>
<br>
人数 大人:<?php $_POST["adult"]?> 子供：<?php $_POST["child"] ?><br>
<br>
宿泊タイプ：<?php $_POST["roomtype"] ?><br>
<br>
備考：<?php $_POST["moreinfo"] ?><br>
<br>
※ご予約の変更は、こちらまでご連絡ください。<br>
<br>
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>
○○ホテル予約センター<br>
<br>
●●●-▲▲▲-■■■<br>
booking@○○hotel.com<br>
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝<br>
</body>
</html>

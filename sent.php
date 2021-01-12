<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8"); 
    $to = $_POST['email'];
    $title = "【○○hotel】ご予約ありがとうございます。";
    if ($_POST['child'] >= 1) {
    $content = $_POST['name']."様
\nこのたびは○○ホテルのご宿泊のご予約ありがとうございます。
\n以下の内容でご予約を承りました。
\n
\n■ご予約内容
\n宿泊者代表者様：".$_POST['name'].
"\nメールアドレス：".$_POST['email'].
"\n電話番号：".$_POST['tel'].
"\nチェックイン：".$_POST['chekin'].
"\nチェックアウト：".$_POST['checkout'].
"\n人数 大人:".$_POST['adult']." 子供：".$_POST['child'].
"\n宿泊タイプ：".$_POST['roomtype'].
"\n備考：".$_POST['moreinfo'].
"\n
\n※お子様用の浴衣を用意しておりますので、チェックインの際にお申し付けください。
\n※プレイルームは３階にございます。フロント隣のエレベーターをご利用ください。
\n　プレイルーム営業時間　10：00〜20：00
\n
※ご予約の変更は、こちらまでご連絡ください。
\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
\n○○ホテル予約センター
\n●●●-▲▲▲-■■■
\nbooking@○○hotel.com
\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
";
    } else {
    $content = $_POST['name']."様
\nこのたびは○○ホテルのご宿泊のご予約ありがとうございます。
\n以下の内容でご予約を承りました。
\n
\n■ご予約内容
\n宿泊者代表者様：".$_POST['name'].
"\nメールアドレス：".$_POST['email'].
"\n電話番号：".$_POST['tel'].
"\nチェックイン：".$_POST['chekin'].
"\nチェックアウト：".$_POST['checkout'].
"\n人数 大人:".$_POST['adult']." 子供：".$_POST['child'].
"\n宿泊タイプ：".$_POST['roomtype'].
"\n備考：".$_POST['moreinfo'].
"\n
\n※ご予約の変更は、こちらまでご連絡ください。
\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
\n○○ホテル予約センター
\n●●●-▲▲▲-■■■
\nbooking@○○hotel.com
\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
";
    }
    $headers = "From: booking@aaahotel.com";
    $headers .= "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8";
  if (mb_send_mail($to, $title, $content)) {
    echo "ご予約ありがとうございました。\n予約内容をメールでお送りしました。";
  } else {
    echo "エラーのためご予約が確定していません。
\n誠に恐れ入りますが、以下まで直接メールまたはお電話でお問い合わせください。
\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
\n○○ホテル予約センター
\n●●●-▲▲▲-■■■
\nbooking@○○hotel.com
\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝";
  }

$admin_to = "mai.ouchi929@gmail.com";
$admin_title = "予約が入りました";
$admin_content = file_get_contents('admin_mail.php');
/*"予約が入りました。以下の内容を確認してください。
■ご予約内容
宿泊者代表者様：".$_POST['name'].
"\nメールアドレス：".$_POST['email'].
"\n電話番号：".$_POST['tel'].
"\nチェックイン：".$_POST['chekin'].
"\nチェックアウト：".$_POST['checkout'].
"\n人数 大人:".$_POST['adult']." 子供：".$_POST['child'].
"\n宿泊タイプ：".$_POST['roomtype'].
"\n備考：".$_POST['moreinfo'].
"\nよろしくお願いいたします。";*/
$headers = "From: admin@aaahotel.com";
$headers .= "\r\n";
//$headers .= "Content-type: text/html; charset=UTF-8";
mb_send_mail($admin_to, $admin_title, $admin_content, $headers);
//もう1個mbsendmailを書いて送り先を管理者にする。管理者用に内容を分けることもできる。ユーザーの希望次第
?>
  </body>
</html>

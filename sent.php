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
    $content = file_get_contents('child.php');
    } else {
    $content = file_get_contents('mail.php');
    }
    $headers = "From: booking@aaahotel.com";
    $headers .= "\r\n";
    //$headers .= "Content-type: text/html; charset=UTF-8";
  if (mb_send_mail($to, $title, $content)) {
    echo "ご予約ありがとうございました。\nご予約内容をメールでお送りしました。";
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
$admin_headers = "From: admin@aaahotel.com ";
mb_send_mail($admin_to, $admin_title, $admin_content, $headers);
//もう1個mbsendmailを書いて送り先を管理者にする。管理者用に内容を分けることもできる。ユーザーの希望次第
?>
  </body>
</html>

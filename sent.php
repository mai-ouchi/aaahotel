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
    $content = include 'child.php';
    } else {
    $content = include 'mail.php';
    };
    $headers = "From: booking@aaahotel.com";
    $headers .= "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8";
  if (mb_send_mail($to, $title, $content, $headers)) {
    echo "ご予約ありがとうございました。¥nご予約内容をメールでお送りしました。";
  } else {
    echo "メールの送信に失敗しました";
  };

$admin_to = "mai.ouchi929@gmail.com";
$admin_title = "予約が入りました";
$admin_content = "予約が入りました。下記確認してください。¥n";
$admin_content .= include 'admin.php';
mb_send_mail($admin_to, $admin_title, $admin_content);
//もう1個mbsendmailを書いて送り先を管理者にする。管理者用に内容を分けることもできる。ユーザーの希望次第
?>
  </body>
</html>

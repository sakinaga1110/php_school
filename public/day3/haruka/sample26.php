<?php
$email = 'mastar@h2o-space.com';

mb_language('japanese');
mb_internal_encoding('UTF-8');

$from = 'noreply@examply.com';
$subject = 'よくわかるPHPの教科書';
$body = 'このメールは『よくわかるPHPの教科書』から送信しています';

$success = mb_send_mail($email, $subject, 'From: ' . $from);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?php if ($success) :?>
    電子メールを送信しました。メールボックスを確認してみてください。
    <?php else : ?>
    電子メールの送信に失敗しました。Webサーバーの設定などをご確認ください。
   <?php endif; ?>
  </pre>
</body>
</html>
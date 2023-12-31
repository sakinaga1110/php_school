<?php
$email = 'master@h2o-space.com';

mb_language('japanese');
mb_internal_encoding('UTF-8');

$from = 'noreply@example.com';
$subject = 'よくわかるPHPの教科書';
$body = 'このメールは、『よくわかるPHPの教科書』から送信しています';

$success = mb_send_mail($email, $subject, $body, 'from: ' . $from);
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="sample26" content="サンプル26">
<body>
<main>
<h2>電子メールを送信する</h2>
<pre>
<?php if ($success) : ?>
電子メールを送信しました。メールボックスを確認してみてください。
<?php else : ?>
電子メールの送信に失敗しました。Webサーバーの設定などをご確認ください。
<?php endif; ?>
</pre>
</main>
</body>
</html>

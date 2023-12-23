<?php
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>
<!doctype html>


<pre>
    セッションに値を保存しました。次のページに移動してみましょう。
    &raquo; <a href="page02.php">page02へ</a>
</pre>

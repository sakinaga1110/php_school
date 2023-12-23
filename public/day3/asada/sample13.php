<?php
$success = file_put_contents('./news_data/news.txt', '2023-11-11 ホームページをリニューアルしました');
if($success) {
    print('ファイルへの書き込みが完了しました。');
} else{
    print('書き込みに失敗しました。フォルダの権限などを確認してください。');
}
?>
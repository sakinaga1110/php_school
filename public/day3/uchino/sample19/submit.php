ご予約日：
<?php
foreach ($_POST['reserve'] as $reserve) {
    print(htmlspecialchars($reserve, ENT_QUOTES) . '　');
}
?>

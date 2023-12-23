<?php
// PHP 5.3以前の場合は　arrayを利用しましょう
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
];

foreach ($fruits as $english => $japansese) {
    print ($english . ' ： ' . $japansese . "\n");
}
?>

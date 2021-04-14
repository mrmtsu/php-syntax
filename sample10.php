<?php
echo '数字を入力してください';
// $number = fgets(STDIN);
// // 文字列の先頭および末尾にあるホワイトスペース（改行も含まれる）を取り除く
// $number = trim($number);

// かっこの中から順番に実行される
$number = trim(fgets(STDIN));
echo $number, 'ですね?';

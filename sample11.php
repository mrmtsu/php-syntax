<?php
echo '足される数 >';
// STDIN ユーザのキーボードの入力を受け付ける
// fgets ファイルオブストリームから文字列を取得
// trimで改行を取り除く
$number = trim(fgets(STDIN));

echo '足す数 >';
$number2 = trim(fgets(STDIN));

echo $number . ' + ' . $number2 . ' = ' . $number + $number2;

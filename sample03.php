<?php
// ヒアドキュメント構文(<<<)
// 文字列を区切る方法
echo <<< EOT
あああああ
いいいいいい
ううううううううう
ええええええええええええええ
EOT;

echo "\n □Nowdoc";
// Nowdocはヒアドキュメントと似ているが、シングルクォートで囲んだ文字列として扱われる
echo <<< 'EOT'
あああああ
いいいいいい
ううううううううう
ええええええええええええええ
EOT;

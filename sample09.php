<?php
$sum = 5000 + 150;
// number_format 数字を千位毎にグループ化してフォーマットする
// number_format ( float $number [, int $decimals = 0 ]) : string
// パラメータの中の[]は省略可能という意味
// []を省略した場合は0となる
$sum = number_format($sum);
echo $sum, '円です';

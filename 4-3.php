<?php
// // 合計を計算する
// function sum($num1, $num2, $num3) {
//   $answer = $num1 + $num2 + $num3;
//   return $answer;
// }

// $item_sum = sum(10, 20, 30);
// echo $item_sum;

// ⬇︎⬇︎ さらに出力する値を増やしたい場合(可変パラメータの後にパラメータを追加することはできない、パラメータは最後に追加すると使用できる)
function sum(...$numbers) {
  $answer = 0;
  foreach ($numbers as $num) {
    $answer += $num;
  }
  return $answer;
}

$item_sum = sum(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
echo $item_sum;


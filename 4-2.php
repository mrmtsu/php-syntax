<?php
// // number_format numberをフォーマットした結果を返す
// $price = number_format(1000);

// echo $price;

function sum($num1, $num2) {
  $answer = $num1 + $num2;

  // return 後の処理は行われない
  return $answer;
}

$item_sum = sum(167, 269);
echo $item_sum;

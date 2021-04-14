<?php
$number1 = 10; // int型
$number2 = '10'; // string型

// === $number が $numberに等しく、同じ型である場合にTRUE
// (int)でint型に型キャスト
if ($number1 === (int)$number2) {
  echo '同じです';
}

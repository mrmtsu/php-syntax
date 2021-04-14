<?php
// 足し算の結果を返す
function sum($a, $b) {
  $ret = $a + $b;
  return $ret;
}

$num1 = 10;
$num2 = 20;

$answer = sum($num1, $num2);
echo $answer; // 30

<?php
// rand 乱数を生成する
// rand ( int $min, int $max ) : int
// $dice = rand(1, 6);

// while ($dice !== 1) {
//   echo $dice, "\n";
//   $dice = rand(1, 6);
// }
// echo $dice;

do {
  $dice = rand(1, 6);
  echo $dice, "\n";
} while ($dice !== 1);

<?php
// $color = ['黒', '赤', '白'];
// リファレンス（参照）渡し
// array_shift($color);
// print_r($color);
// 黒がなくなる
// Array
// (
//     [0] => 赤
//     [1] => 白
// )

// $price = 10000;
// // 値渡し
// // number_formatファンクションの返り値を受け取った変数($new_price)
// $new_price = number_format($price);
// echo $price;
// echo "\n";
// echo $new_price;

// 配列の先頭に文字を繋げる
function add_head(&$target){
  for ($i=0; $i<count($target); $i++) {
    $target[$i] = '●' . $target[$i];
  }
}

$color = ['黒', '赤', '白'];
print_r($color);
// Array
// (
//     [0] => 黒
//     [1] => 赤
//     [2] => 白
// )
add_head($color);
print_r($color);
// Array
// (
//     [0] => ●黒
//     [1] => ●赤
//     [2] => ●白
// )

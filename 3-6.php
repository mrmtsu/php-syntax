<?php
$color = ['黒', 'しろ', '赤'];

// count 変数に含まれる全ての要素、あるいはオブジェクトに含まれる何かの数を数える
// count ( Countable|array $value [, int $mode = COUNT_NORMAL ] ) : int
// 返り値 valueに含まれる要素を返す
// $max = count($color); // 3
// echo $color($max-1); // 要素は3のため

// 一つ以上の要素を配列の最初に加える
// array_unshift($color, '緑', '黄'); // 0] => 緑 [1] => 黄 [2] => 黒 [3] => しろ [4] => 赤
// array_push($color, '緑', '黄'); //[0] => 黒 [1] => しろ [2] => 赤 [3] => 緑 [4] => 黄

// 配列の先頭から要素を一つ取り出して消す
$mycolor = array_shift($color); // [0] => しろ [1] => 赤
echo $mycolor;

$mycolor = array_shift($color); // [0] => 赤
echo $mycolor;

// array_pop 配列の最後の要素を取り出し消す
$color = ['黒', 'しろ', '赤'];
$mycolor = array_pop($color); // [0] => 黒 [1] しろ
echo $mycolor;

$mycolor = array_pop($color); // [0] => 黒
echo $mycolor;

print_r($color);

$color = ['黒', 'しろ', '赤'];
$color_string = implode(',', $color);
print($color_string); // 黒,しろ,赤

$color_string = implode(' - ', $color);
print($color_string); // 黒 - しろ - 赤

$newarray = explode(',', $color_string);
print($color_string);

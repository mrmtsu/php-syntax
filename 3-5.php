<?php
// $pref['hokkaidou'] = '北海道';
// $pref['aomori'] = '青森県';
// $pref['iwate'] = '岩手県';

// 連想配列はindexとなるキーを設定し、関連する値を代入する
// $pref = [
//   'hokkaido' => '北海道',
//   'aomori' => '青森県',
//   'iwate' => '岩手県'
// ];

// 連想配列の中に配列を入れる
$pref['hokkaido'] = [
  '赤平市',
  '旭川市',
  '芦別市'
];
$pref['aomori'] = [
  '青森市',
  '鰺ヶ沢町'
];

echo $pref['aomori'][1];

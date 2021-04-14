<?php
$pref = [
  'hokkaido' => '北海道',
  'aomori' => '青森県',
  'iwate' => '岩手県'
];

// 連想配列の値を取り出す（配列でも取得できる)
foreach ($pref as $pref_name) {
  echo ' ・ ', $pref_name, "\n";
}

// 連想配列の値とキーを取り出す
foreach ($pref as $pref_key => $pref_name) {
  echo ' ・ ', $pref_key, ':', $pref_name, "\n";
}

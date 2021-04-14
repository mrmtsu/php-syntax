<?php
$color = ['黒', 'しろ', '', '赤'];

foreach ($color as $color_name) {
  if ($color_name === '') {
    // continue; // 黒 しろ 赤
    break; // 黒 しろ
  }
  echo $color_name, "\n";
}

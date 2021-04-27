<?php
class Item {
  public string $name;
}

$item01 = new Item();
$item01->name = 'PHP入門';

// 参照渡し
$item02 = $item01;

// 値渡し
$item02 = clone($item01);

$item01->name = 'JS入門';
echo $item02->name;
